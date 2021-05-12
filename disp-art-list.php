<?php
session_start();
require_once(".settings\connexion_base.php");
$donnees['titre_page'] = "liste d'article";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page affichant la liste de tous les articles (avec moteur de recherche)
==============================================================-->

<?php
//---- SELECT : récupération des info dans la bdd qui nous intéressent----

//-- récupération du nombre de artroot distinct (==> nombre d'article affichés)
$requete_distartroot = "SELECT DISTINCT(art.artroot) FROM art";
$reponse_distartroot = $pdo->prepare($requete_distartroot);
$reponse_distartroot->execute();
$distartroot = $reponse_distartroot->fetchAll();
$nbrep_distartroot = count($distartroot);

//-- récupération des articles à afficher (on doit pouvoir se passez d'un boucle mais pour l'instant ça ça marche)

$art = array();
for ($i = 0; $i < $nbrep_distartroot; $i++) { //pour chaque valeur de artroot, on prend l'article le plus récent
    //ATTENTION disparoot commence à 1 dans la table art
    $j = $distartroot[$i][0]; // valeur de artroot visée
    $requete_art = "SELECT * FROM art
                    WHERE art.artroot = $j
                    AND art.dateajout IN (SELECT MAX(dateajout) FROM art WHERE art.artroot = $j);";
    $reponse_art = $pdo->prepare($requete_art);
    $reponse_art->execute();
    $arti = $reponse_art->fetchAll();
    $art[] = $arti[0]; //on ajoute $arti les donnés de l'article en sortie dans $art l'array final 
}
?>

<main role="main">
    <div class="container">
        <!-- fait avec bootstrap/component/listgroup -->
        <div class="row">

            <!-- partie listant les articles -->
            <div class="col-6">
                <div class="list-group" id="list-tab" role="tablist">
                    <?php
                    for ($i = 0; $i < $nbrep_distartroot; $i++) { //autant de ligne qu'il y a d'article 
                    ?>
                        <a class="list-group-item list-group-item-action" id=<?php echo "list-" . $i . "-list"; ?> data-bs-toggle="list" href=<?php echo "#list-" . $i; ?> role="tab" aria-controls=<?php echo $i; ?>>
                            <div class="row">
                                <!-- affichage condensé d'un article en bande -->
                                <ul class="list-group list-group-horizontal">
                                    <!-- image du thème -->
                                    <li class="list-group-item"> <img src=<?php echo "images/image_thm/image_thm-" . $art[$i]['id_thm'] . ".jpg"; ?> alt=<?php echo "image_thm-" . $art[$i]['id_thm']; ?> width="50" height="50" /></li>
                                    <!-- titre -->
                                    <li class="list-group-item" id="titrearticle"><?php echo "#".$art[$i]['artroot']." : ".$art[$i]["titre"]; ?></li>
                                </ul>
                                <!-- bouton dirigeant vers article pleine écran -->

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
                    for ($i = 0; $i < $nbrep_distartroot; $i++) {
                    ?>
                        <div class="tab-pane fade show" id=<?php echo "list-" . $i; ?> role="tabpanel" aria-labelledby=<?php echo "list-" . $i . "-list"; ?>>
                            <!-- titre art -->
                            <h1 class="titreart"><?php echo $art[$i]["titre"]; ?></h1>
                            <!-- date -->
                            <p id="version">Version du <?php echo $art[$i]['dateajout'] ?></p>
                            <!-- bouton dirigeant vers l'article en grand  -->
                            <a class="btn btn-primary" href=<?php echo "disp-art-full.php?id_art=" . $art[$i]["id"]; ?> role="button">Link</a>
                            <!-- image art -->
                            <img src=<?php echo "images/mb-image_upload/image_upload-art/image_art-" . $art[$i]["id"] . ".jpg"; ?> alt=<?php echo "image_article-" . $art[$i]["id"]; ?> width="150" height="100" />
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