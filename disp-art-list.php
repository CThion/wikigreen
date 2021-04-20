<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page affichant la liste de tous les articles (avec moteur de recherche)
==============================================================-->

<?php
//----récupération des info dans la bdd qui nous intéressent----
//$id_art = $_POST["id_art"]; //récupération de l'idée d'article spécifié
$id_art = 7; // A SUPPRIMER
//---- table art
$requete_art = "SELECT * FROM art"; //récupération de tous les articles
$reponse_art = $pdo->prepare($requete_art);
$reponse_art->execute(array($id_art)); //ce qui va dans le "?" de la requête
$art = $reponse_art->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_art = count($art); // connaitre le nombre d'enregistrements
//---- root : valeur contante de l'article (pour parcourir les versions)
$root = $art[0]["root"];
//---- table ref
$id_ref = $art[0]["id_ref"]; //recherche de la clef étrangère dans l'article
$requete_ref = "SELECT * FROM ref WHERE id = ?";
$reponse_ref = $pdo->prepare($requete_ref);
$reponse_ref->execute(array($id_ref)); //ce qui va dans le "?" de la requête
$ref = $reponse_ref->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_ref = count($ref); // connaitre le nombre d'enregistrements
//---- table thm
$id_thm = $art[0]["id_thm"];
$requete_thm = "SELECT * FROM thm WHERE id = ?";
$reponse_thm = $pdo->prepare($requete_thm);
$reponse_thm->execute(array($id_thm));
$thm = $reponse_thm->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_thm = count($art); // connaitre le nombre d'enregistrements
//---- table sec
$id_sec = $thm[0]["id_sec"];
$requete_sec = "SELECT * FROM sec WHERE id = ?";
$reponse_sec = $pdo->prepare($requete_sec);
$reponse_sec->execute(array($id_sec));
$sec = $reponse_sec->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_sec = count($art); // connaitre le nombre d'enregistrements
//---- autres requêtes
//-- nbmb_art : nombre de membre ayant contribué sur cet article
$requete_nbmb_art = "SELECT COUNT(DISTINCT mb.id) FROM mb, art WHERE art.root=? AND art.id_mb=mb.id";
$reponse_nbmb_art = $pdo->prepare($requete_nbmb_art);
$reponse_nbmb_art->execute(array($root));
$nbmb_art = $reponse_nbmb_art->fetchAll();
//-- nbmodif_art : nombre de versions de l'article (= nombre de modifs)
$requete_nbmodif_art = "SELECT COUNT(*) FROM art WHERE art.root=?";
$reponse_nbmodif_art = $pdo->prepare($requete_nbmodif_art);
$reponse_nbmodif_art->execute(array($root));
$nbmodif_art = $reponse_nbmodif_art->fetchAll();
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
                                    <!-- image -->
                                    <li class="list-group-item"> <img src="images/logo/logo-wikigreen/logo-1/logo50.png" alt="logo50" width="50" height="50" /></li>
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
                    for ($i = 0; $i < count($art); $i++) {
                    ?>
                        <div class="tab-pane fade show" id=<?php echo "list-" . $i; ?> role="tabpanel" aria-labelledby=<?php echo "list-" . $i . "-list"; ?>>
                            <!-- titre art -->
                            <h1 class="titreart"><?php echo $art[$i]["titre"]; ?></h1>
                            <!-- image art -->
                            <img src="images/logo/logo-wikigreen/logo-1/logo300.png" alt="logo300" width="300" height="300" />
                            <!-- texte art -->
                            <p><?php echo $art[$i]["texte"]; ?></p>
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