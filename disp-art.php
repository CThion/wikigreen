<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page affichant un article donné
==============================================================-->

<?php
//$id_art = $_POST["id_art"]; //récupération de l'idée d'article spécifié
$id_art = 3; // A SUPPRIMER
//---- table art
$requete_art = "SELECT * FROM art WHERE id = ?"; //récupération de l'article à l'id donné
$reponse_art = $pdo->prepare($requete_art);
$reponse_art->execute(array($id_art)); //ce qui va dans le "?" de la requête
$art = $reponse_art->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_art = count($art); // connaitre le nombre d'enregistrements
//---- table ref
$id_ref = $art[0]["id_ref"]; //recherche de la clef étrangère dans l'article
$requete_ref = "SELECT * FROM ref WHERE id = ?"; //récupération de l'article à l'id donné
$reponse_ref = $pdo->prepare($requete_ref);
$reponse_ref->execute(array($id_ref)); //ce qui va dans le "?" de la requête
$ref = $reponse_ref->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_ref = count($ref); // connaitre le nombre d'enregistrements
//---- table thm
$id_thm = $art[0]["id_thm"];
$requete_thm = "SELECT * FROM thm WHERE id = ?"; //récupération de l'article à l'id donné
$reponse_thm = $pdo->prepare($requete_thm);
$reponse_thm->execute(array($id_thm));
$thm = $reponse_thm->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_thm = count($art); // connaitre le nombre d'enregistrements
//---- table sec
$id_sec = $thm[0]["id_sec"];
$requete_sec = "SELECT * FROM sec WHERE id = ?"; //récupération de l'article à l'id donné
$reponse_sec = $pdo->prepare($requete_sec);
$reponse_sec->execute(array($id_sec));
$sec = $reponse_sec->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_sec = count($art); // connaitre le nombre d'enregistrements

?>

<main>
    <div class="container">
        <!-- l'article en lui même -->
        <div class="col">
            <!-- titre de section -->
            <div class="col">
                <h1 class="titresec">Section : <?php echo $sec[0]["titre"]; ?></h1>
            </div>
            <!-- titre du thème -->
            <div class="col">
                <h1 class="titrethm">Thème : <?php echo $thm[0]["titre"]; ?></h1>
            </div>
            <!-- titre de l'article -->
            <div class="col">
                <h1 class="titreart">Article : <?php echo $art[0]["titre"]; ?></h1>
            </div>
            <!-- stat de l'article -->
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">Dernière modification : X</li>
                <li class="list-group-item">Nombre de modification : Y</li>
                <li class="list-group-item">Nombre de contributeur : Z</li>
                <li class="list-group-item">Note : U</li>
            </ul>
            <!-- image de l'article -->
            <div class="col">
                <p><?php echo $art[0]["image"]; ?></p>
            </div>
            <!-- texte de l'article -->
            <div class="col">
                <p><?php echo $art[0]["texte"]; ?></p>
            </div>
            <!-- référence de l'article -->
            <div class="col">
                <p><?php echo $ref[0]["titre"]; ?></p>
            </div>
        </div>

    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>