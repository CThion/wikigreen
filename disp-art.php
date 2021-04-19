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
$id_art =3; // A SUPPRIMER
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
$id_thm =$art[0]["id_thm"];
$requete_thm = "SELECT * FROM thm WHERE id = ?"; //récupération de l'article à l'id donné
$reponse_thm = $pdo->prepare($requete_thm);
$reponse_thm->execute(array($id_thm));
$thm = $reponse_thm->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_thm = count($art); // connaitre le nombre d'enregistrements


?>

<main>
    <h1> Merci de contribuer au site !! </h1>
    <div class="container">
        <!-- version actuelle de l'article -->
        <div class="col">
            <div class="col-md-4">
                <h3><?php echo $art[0]["titre"]; ?></h3>
            </div>
            <div class="col-md-4">
                <h4><?php echo $thm[0]["titre"]; ?></h4>
            </div>
            <div class="col-md-4">
                <p><?php echo $art[0]["image"]; ?></p>
            </div>
            <div class="col-md-4">
                <p><?php echo $art[0]["texte"]; ?></p>
            </div>
            <div class="col-md-4">
                <p><?php echo $ref[0]["titre"]; ?></p>
            </div>
        </div>

    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>