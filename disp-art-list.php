<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page affichant la liste de tous les articles (avec moteur de recherche)
==============================================================-->

<?php
//---- SELECT : récupération des info dans la bdd qui nous intéressent----

//-- table art
$requete_art = "SELECT * FROM art"; //récupération de tous les articles
$reponse_art = $pdo->prepare($requete_art);
$reponse_art->execute(); //ce qui va dans le "?" de la requête
$art = $reponse_art->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_art = count($art); // connaitre le nombre d'enregistrements
?>

<main>
    <div class="container">
        <!-- fait avec bootstrap/component/listgroup -->
        <div class="row">

            <!-- partie listant les articles -->
            <div class="col-6">
                <div class="list-group" id="list-tab" role="tablist">
                    <?php
                    for ($i = 0; $i < count($art); $i++) { //autant de ligne qu'il y a d'article
                    ?>
                        <a class="list-group-item list-group-item-action" id=<?php echo "list-" . $i . "-list"; ?> data-bs-toggle="list" href=<?php echo "#list-" . $i; ?> role="tab" aria-controls=<?php echo $i; ?>>
                            <div class="row">
                                <!-- affichage condensé d'un article en bande -->
                                <ul class="list-group list-group-horizontal">
                                    <!-- image du thème -->
                                    <li class="list-group-item"> <img src=<?php echo "images/image_thm/image_thm-".$art[$i]['id_thm'].".jpg"; ?> alt=<?php echo "image_thm-".$art[$i]['id_thm']; ?> width="50" height="50" /></li>
                                    <!-- titre -->
                                    <li class="list-group-item">Titre : <?php echo $art[$i]["titre"]; ?></li>
                                </ul>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <!-- partie faisant la prévisualisation de l'article sélectionné -->
            <div class="col-6">
                <div class="tab-content" id="nav-tabContent">
                    <?php
                    for ($i = 0; $i < count($art)+1; $i++) {
                    ?>
                        <div class="tab-pane fade show" id=<?php echo "list-" . $i; ?> role="tabpanel" aria-labelledby=<?php echo "list-" . $i . "-list"; ?>>
                            <!-- titre art -->
                            <h1 class="titreart"><?php echo $art[$i]["titre"]; ?></h1>
                            <!-- image art -->
                            <img src=<?php echo "images/mb-image_upload/image_upload-art/image_art-".$art[$i]["id"].".jpg"; ?> alt=<?php echo "image_article-".$art[$i]["id"]; ?> width="300" height="300" />
                            <!-- texte art -->
                            <p class="Texte"> <?php echo $art[$i]["texte"]; ?> </p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>