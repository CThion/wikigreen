<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page confirmant (ou non) la modificaiton d'un article donné, et l'implémentant dans la bdd
    (on crée une copie de l'article avant modification pour sauvegarder l'évolution des versions)
==============================================================-->

<main role="main">
    <div class="container">
        <div class="col">

            <!-- td12 p2 12.4 -->
            <?php
            //---- vérifie que toutes les infos du formulaires sont spécifiées et affectation des variables
            if (
                !empty($_SESSION['id_membre']) && //vérifier si le membre est bien connecté (a priori il ne peut pas en être autrement puisqu'il faut être connecté pour acceder au fomulaire mais sait-on jamais...)
                //remarque : on pourrait aussi ajouter l'id membre directement depuis le fomulaire dans un champ caché
                !empty($_POST['sec']) &&
                !empty($_POST['thm']) &&
                !empty($_POST['ref']) &&
                !empty($_POST['titre']) &&
                !empty($_POST['lien']) &&
                !empty($_POST['texte']) &&
                !empty($_POST['typeart']) &&
                !empty($_POST['consent'])
                //on ne vérifie pas si une image a bien été spécifiée car on ne peut pas définir par défaut l'image utilisée par l'utilisateur
            ) {
                echo "<h2>votre article a bien été ajouté !</h2>";


                //-- on récupère les données du formulaire
                $id_art0 = $_POST['id_art0']; //id de l'article modifié
                $id_sec = $_POST['sec']; //INUTIL CAR NON PRESENT DANS CHAMP DE TABLE ART !!!!
                $id_thm = $_POST['thm'];
                $id_ref = $_POST['ref'];
                $titre = $_POST['titre'];
                $lien = $_POST['lien'];
                $texte = $_POST['texte'];
                $id_typeart = $_POST['typeart'];

                //---- SELECT table art
                //-- on a besoin de ces infos pour compléter correctement les champs non présents dans le formulaires (comme root par exemple)
                $requete_artroot = "SELECT art.artroot FROM art WHERE art.id =?"; //récupération de la valeur de root la plus grande (afin de faire root+1 pour le nouvelle article)
                $reponse_artroot = $pdo->prepare($requete_artroot);
                $reponse_artroot->execute(array($id_art0));
                $artroot = $reponse_artroot->fetchAll(); // récupérer tous les enregistrements dans un tableau

                //-- on complète avec les autres données nécessaires pour l'enregistrement
                $artroot = $artroot[0]["artroot"]; //conservation de la valeur de artroot (possiblement la seule valeur à être constante entre toutes les versions d'un même article)
                $id_mb = $_SESSION['id_membre']; //récupération de l'id du membre auteur de la modification
                $noteposi = $_POST['noteposi_0']; // on reprend la note de l'ancienne version.
                $notenega = $_POST['notenega_0'];

                //---- INSERT ajout nouvel article dans BDD ----
                //print_r(array($artroot, $id_thm, $id_ref, $id_mb, $titre, $lien, $texte, $noteposi, $notenega));
                //--table art
                $requete = "INSERT INTO art (artroot, id_thm, id_ref, id_mb, titre, lien, texte, dateajout, noteposi, notenega) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?)";
                $reponse = $pdo->prepare($requete);
                $reponse->execute(array($artroot, $id_thm, $id_ref, $id_mb, $titre, $lien, $texte, $noteposi, $notenega));

                //--table art_typeart
                $id_art = $pdo->lastInsertId(); //--récupération du dernier id d'enregistrement inséré ==> donc de l'id du nouvel article
                $requete = "INSERT INTO art_typeart (id_art, id_typeart) 
                        VALUES (?,?)";
                $reponse = $pdo->prepare($requete);
                $reponse->execute(array($id_art, $id_typeart));


                //---- td12 p3 : gestion image de l'article : enregistrement dans dossier \image_upload-art 
                // print_r($_FILES['image']); // Sortir cette ligne quand tout va bien
                // print_r($_FILES); // Sortir cette ligne tout va bien
                if (!empty($_FILES['image']['tmp_name'])) {
                    $size = getimagesize($_FILES['image']['tmp_name']);
                    // print_r($size);
                    echo "Filetype : " . $size['mime'];
                    if ($size['mime'] == "image/jpeg") {
                        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/wikigreen/images/mb-image_upload/image_upload-art/";
                        $uploadfile = "image_art-" . $id_art . ".jpg"; //nommage de l'article avec comme suffix l'id de l'article qui vient d'être ajouté
                        // if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir . $uploadfile)) {
                        //     echo "<p>Votre image d'article a bien été ajouté : " . $uploadfile . "</p>";
                        // } else {
                        //     echo "<p>Probleme sur le serveur : " . $uploaddir . "</p>";
                        // }
                    } else {
                        echo "<p>Pas le bon type de fichier : " . $size['mime'] . "</p>";
                    }
                } else {
                    echo "<p>Pas de fichier spécifié.</p>";
                }
            } else { //si il manque quelque chose :
                echo "<h3>Il semble que vous ayez oublié quelque chose ! Faite bien attention à renseigner tous les champs pour pouvoir enregistrer votre contribution ! :-)</h3>";
            }
            ?>

        </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>