<?php
session_start();
require_once("settings\connexion_base.php");
$donnees['titre_page'] = "Confirmation de commentaire";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Page effectuant l'ajout d'un commentaire dans la base de donné et affichant la confirmation, dans 
    le cas où le commentaire était correcte.
    Donne aussi une prévisualisation du commentaire.
==============================================================-->

<main role="main">
    <div class="container">
        <div class="col">
            <?php
            if (
                //si tout se passe bien
                !empty($_POST['texte']) &&
                !empty($_POST['consent']) &&
                !empty($_SESSION['id_membre']) //vérifie si le membre est bien connecté
            ) {

                //--récupération des données du formulaires
                $id_mb = $_SESSION['id_membre'];
                $texte = $_POST['texte'];
                $noteposi = 0;
                $notenega = 0;
                $dateajout_art = $_POST['dateajout_art'];
                $id_art = $_POST['id_art'];

                //---- SELECT et INSERT INTO ajout du commentaire dans la bdd et récupération de la saisie ----

                //-- cmt
                $requete_cmt = "INSERT INTO cmt (id_mb, texte, date, noteposi, notenega) 
                                VALUES (?, ?, NOW(), ?, ?)";
                $reponse_cmt = $pdo->prepare($requete_cmt);
                $reponse_cmt->execute(array($id_mb, $texte, $noteposi, $notenega));

                //-- id du dernier enregistrement fait (donc ici du commentaire)
                $id_cmt = $pdo->lastInsertId();

                //-- cmt_art
                $requete_cmt_art = "INSERT INTO cmt_art (id_art, id_cmt) 
                                    VALUES ($id_art, $id_cmt)";
                $reponse_cmt_art = $pdo->prepare($requete_cmt_art);
                $reponse_cmt_art->execute();

                //-- cmt
                $requete_cmt = "SELECT date FROM cmt WHERE id=?";
                $reponse_cmt = $pdo->prepare($requete_cmt);
                $reponse_cmt->execute(array($id_cmt));
                $cmt = $reponse_cmt->fetchAll();
            ?>

                <h2 id="commentaire">Commentaire bien publié ! En voici l'aperçu :</h2>

                <!-- apercu du commentaire -->
                <!-- https://getbootstrap.com/docs/5.0/components/list-group/ partie custom content -->
                <div class="list-group">
                    <a class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <!-- le pseudo de l'auteur -->
                            <h5 id="log" class="mb-1"><?php echo $_SESSION['pseudo']; ?></h5>
                            <!-- la date du commentaire -->
                            <small id="date"><?php echo $cmt[0]['date']; ?></small>
                        </div>
                        <!-- le texte du commentaire -->
                        <p id="comment" class="mb-1"><?php echo $texte; ?></p>
                        <small id="date"> Pour version du <?php echo $dateajout_art; ?> de l'article</small>
                    </a>
                </div>

                <a href=<?php echo "disp-art-full.php?id_art=" . $id_art; ?>>Retour vers l'article</a>




            <?php
            } else { //cas où ça se passe pas bien, le commentaire ne peut pas être publié
            ?>
                <h2 id="commentaire">Veillez à bien renseigner tous les champs et à être connecté pour pouvoir publier des commentaires !</h2>
            <?php
            }
            ?>
        </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>