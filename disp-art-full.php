<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page affichant un article donné
==============================================================-->

<?php
//----récupération des info dans la bdd qui nous intéressent----

$id_art = $_GET["id_art"]; //récupération de l'idée d'article spécifié

//-- table art
$requete_art = "SELECT * FROM art WHERE id = ?"; //récupération de l'article à l'id donné
$reponse_art = $pdo->prepare($requete_art);
$reponse_art->execute(array($id_art)); //ce qui va dans le "?" de la requête
$art = $reponse_art->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_art = count($art); // connaitre le nombre d'enregistrements

//-- artroot : valeur contante de l'article (pour parcourir les versions)
$artroot = $art[0]["artroot"];

//-- table ref
$id_ref = $art[0]["id_ref"]; //recherche de la clef étrangère dans l'article
$requete_ref = "SELECT * FROM ref WHERE id = ?"; 
$reponse_ref = $pdo->prepare($requete_ref);
$reponse_ref->execute(array($id_ref)); //ce qui va dans le "?" de la requête
$ref = $reponse_ref->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_ref = count($ref); // connaitre le nombre d'enregistrements

//-- table thm
$id_thm = $art[0]["id_thm"];
$requete_thm = "SELECT * FROM thm WHERE id = ?";
$reponse_thm = $pdo->prepare($requete_thm);
$reponse_thm->execute(array($id_thm));
$thm = $reponse_thm->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_thm = count($art); // connaitre le nombre d'enregistrements

//-- table sec
$id_sec = $thm[0]["id_sec"];
$requete_sec = "SELECT * FROM sec WHERE id = ?";
$reponse_sec = $pdo->prepare($requete_sec);
$reponse_sec->execute(array($id_sec));
$sec = $reponse_sec->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_sec = count($art); // connaitre le nombre d'enregistrements

//---- autres requêtes

//-- nbmb_art : nombre de membre ayant contribué sur cet article
$requete_nbmb_art = "SELECT COUNT(DISTINCT mb.id) FROM mb, art WHERE art.artroot=? AND art.id_mb=mb.id"; 
$reponse_nbmb_art = $pdo->prepare($requete_nbmb_art);
$reponse_nbmb_art->execute(array($artroot));
$nbmb_art = $reponse_nbmb_art->fetchAll(); 

//-- nbmodif_art : nombre de versions de l'article (= nombre de modifs)
$requete_nbmodif_art = "SELECT COUNT(*) FROM art WHERE art.artroot=?"; 
$reponse_nbmodif_art = $pdo->prepare($requete_nbmodif_art);
$reponse_nbmodif_art->execute(array($artroot));
$nbmodif_art = $reponse_nbmodif_art->fetchAll(); 
?>

<main>
    <div class="container">
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
                <li class="list-group-item">Dernière modification : <?php echo $art[0]["dateajout"]; ?></li>
                <li class="list-group-item">Nombre de modification : <?php echo $nbmodif_art[0][0]; ?></li>
                <li class="list-group-item">Nombre de contributeurs : <?php echo $nbmb_art[0][0]; ?></li>
            </ul>
            <!-- image de l'article -->
            <div class="col">
                <img src=<?php echo "images/mb-image_upload/image_upload-art/image_art-".$art[0]['id'].".jpg"; ?> alt=<?php echo "image_art-".$art[0]['id']; ?> width="300" height="300" />
            </div>
            <!-- texte de l'article -->
            <div class="col">
                <p class="Texte"><?php echo $art[0]["texte"]; ?></p>
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