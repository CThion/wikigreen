<?php
session_start();
require_once(".settings\connexion_base.php");
$donnees['titre_page'] = "résulat recherche avancée";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Page supportant la recherche avancée pour chercher des articles selon différents critères :
        - le titre
        - la notation
        - la source
        - le type d'article
        - le type de source
        - la date
        - ...
==============================================================-->

<?php
//---- VALEUR FILTRE PAR DEFAUT ----

$titre_s = '%';
//$filtre_theme = 

//---- VALEUR DE FILTRE ----
// if (!empty($_POST['titre_s'])) {
//     $titre_s = $_POST['titre_s'];
//     $requete_s = "  SELECT * FROM art 
//                     WHERE art.artroot = 
//                     AND art.titre LIKE '%$titre_s%";
//     $reponse_s = $pdo->prepare($requete_s);
//     $reponse_s->execute();
//     $filtre_titre = $reponse_s->fetchAll();
//     $nbrep_filtre_titre = count($fitre_titre);
// }
if (!empty($_POST['titre_s'])) { //titre_s est l'unique parametre utilisé par la recherche simple
    $titre_s = '%' . $_POST['titre_s'] . '%'; //récupération valeur filtre pour titre avec ajout % pour requête LIKE
}
if (!empty($_POST['theme_s'])) {
    $theme_s = $_POST['theme_s'];
}

//---------------- SELECT : ENSEMBLE ARTICLE AFFICHABLE ----
$requete_distartroot = "SELECT DISTINCT(art.artroot) FROM art";
$reponse_distartroot = $pdo->prepare($requete_distartroot);
$reponse_distartroot->execute();
$distartroot = $reponse_distartroot->fetchAll();
$nbrep_distartroot = count($distartroot);
//-- récupération des articles à afficher (on doit pouvoir se passez d'un boucle mais pour l'instant ça ça marche)
$art_brut = array(); //tableau de tous les articles (comme pour disp-art-list)
for ($i = 0; $i < $nbrep_distartroot; $i++) { //pour chaque valeur de artroot, on prend l'article le plus récent
    //ATTENTION disparoot commence à 1 dans la table art
    $j = $distartroot[$i][0]; // valeur de artroot visée
    $requete_art = "SELECT * FROM art
                    WHERE art.artroot = $j
                    AND art.dateajout IN (SELECT MAX(dateajout) FROM art WHERE art.artroot = $j);";
    $reponse_art = $pdo->prepare($requete_art);
    $reponse_art->execute();
    $arti = $reponse_art->fetchAll();
    $art_brut[] = $arti[0]; //on ajoute $arti les donnés de l'article en sortie dans $art l'array final 
}

//---------------- SELECT : FILTRE TOUTE VERSION ----
$requete_s = "SELECT * FROM art
            WHERE titre LIKE '$titre_s';";
$reponse_s = $pdo->prepare($requete_s);
$reponse_s->execute();
$art_s = $reponse_s->fetchAll();

//----------------- INTERSECTION DES DEUX TABLEAU ------- https://stackoverflow.com/questions/12171855/multidimensional-associative-array-intersection-php
function recursive_array_intersect_key(array $array1, array $array2) {
    $array1 = array_intersect_key($array1, $array2);
    foreach ($array1 as $key => &$value) {
        if (is_array($value) && is_array($array2[$key])) {
            $value = recursive_array_intersect_key($value, $array2[$key]);
        }
    }
    return $array1;
}
// echo "art_s : "; print_r($art_s); echo "______________________________________";
// print_r($art_brut);
$art = recursive_array_intersect_key($art_s, $art_brut);
sort($art);
$nbrep_art = count($art);

// print_r($art_s);
print_r($art);

?>

<main role="main">
    <div class="container">
        <div class="col">

            <!-- Partie avec formulaire pour séléctionner les différents paramètres -->
            <!-- <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
            </div> -->


            <!-- fait avec bootstrap/component/listgroup -->
            <div class="row">

                <!-- partie listant les articles -->
                <div class="col-6">
                    <div class="list-group" id="list-tab" role="tablist">
                        <?php
                        for ($i = 0; $i < $nbrep_art; $i++) { //autant de ligne qu'il y a d'article 
                        ?>
                            <a class="list-group-item list-group-item-action" id=<?php echo "list-" . $i . "-list"; ?> data-bs-toggle="list" href=<?php echo "#list-" . $i; ?> role="tab" aria-controls=<?php echo $i; ?>>
                                <div class="row">
                                    <!-- affichage condensé d'un article en bande -->
                                    <ul class="list-group list-group-horizontal">
                                        <!-- image du thème -->
                                        <li class="list-group-item"> <img src=<?php echo "images/image_thm/image_thm-" . $art[$i]['id_thm'] . ".jpg"; ?> alt=<?php echo "image_thm-" . $art[$i]['id_thm']; ?> width="50" height="50" /></li>
                                        <!-- titre -->
                                        <li class="list-group-item" id="titrearticle">Titre : <?php echo $art[$i]["titre"]; ?></li>
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
                        for ($i = 0; $i < $nbrep_art; $i++) {
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
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>