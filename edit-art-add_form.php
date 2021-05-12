<?php
session_start();
require_once("settings\connexion_base.php");
$donnees['titre_page'] = "formulaire de création d'article";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Formulaire pour l'ajout d'un nouvel article
==============================================================-->
<?php

//---- table sec
//$id_sec = $thm[0]["id_sec"];
$requete_sec = "SELECT * FROM sec";
$reponse_sec = $pdo->prepare($requete_sec);
$reponse_sec->execute();
$sec = $reponse_sec->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_sec = count($sec); // connaitre le nombre d'enregistrements

//---- table thm
//$id_thm = $art[0]["id_thm"];
$requete_thm = "SELECT * FROM thm";
$reponse_thm = $pdo->prepare($requete_thm);
$reponse_thm->execute();
$thm = $reponse_thm->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_thm = count($thm); // connaitre le nombre d'enregistrements

//---- table ref
//$id_ref = $art[0]["id_ref"];
$requete_ref = "SELECT * FROM ref";
$reponse_ref = $pdo->prepare($requete_ref);
$reponse_ref->execute();
$ref = $reponse_ref->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_ref = count($ref); // connaitre le nombre d'enregistrements

//---- table typeart
//$id_typeart = $art[0]["id_typeart"];
$requete_typeart = "SELECT * FROM typeart";
$reponse_typeart = $pdo->prepare($requete_typeart);
$reponse_typeart->execute();
$typeart = $reponse_typeart->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_typeart = count($typeart); // connaitre le nombre d'enregistrements
?>

<main id="main" role="main">
    <div class="container">
        <?php
        if (!empty($_SESSION['id_membre'])) { //il faut être connecté pour pouvoir ajouter un article
        ?>
            <form action="edit-art-add_bdd.php" enctype="multipart/form-data" method="post" class="row g-2">
                <!-- ATTENTION !! L'indiçage dans les tables mysql commence à partir de 1, mais dans les tableaux php il commence à 0 !! D'où le décalage dans les boucles for et les <value> -->
                <!-- sec -->
                <div class="input-group col-md-6">
                    <label id="section" class="input-group-text" for="inputGroupSelect01">Section</label>
                    <select name="sec" class="form-select" id="inputGroupSelect01">
                        <option selected>choisir une section</option>
                        <?php
                        for ($i = 0; $i < $nbrep_sec; $i++) {
                        ?>
                            <option value=<?php echo $i + 1; ?>> <?php echo $sec[$i]["titre"]; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- thm -->
                <div class="input-group col-md-6">
                    <label id="thm" class="input-group-text" for="inputGroupSelect01">Thème</label>
                    <select name="thm" class="form-select" id="inputGroupSelect01">
                        <option selected>choisir un thème</option>
                        <?php
                        for ($i = 0; $i < $nbrep_thm; $i++) { ?>
                            <option value=<?php echo $i + 1; ?>> <?php echo $thm[$i]["titre"]; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- ref -->
                <div class="input-group col-md-6">
                    <label id="ref" class="input-group-text" for="inputGroupSelect01">Référence</label>
                    <select name="ref" class="form-select" id="inputGroupSelect01">
                        <option selected>choisir une référence</option>
                        <?php
                        for ($i = 0; $i < $nbrep_ref; $i++) { ?>
                            <option value=<?php echo $i + 1; ?>> <?php echo $ref[$i]["titre"]; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- typeart -->
                <div class="input-group">
                    <label id="typeart" class="input-group-text" for="inputGroupSelect01">Type d'article</label>
                    <select name="typeart" class="form-select" id="inputGroupSelect01">
                        <option selected>choisir un type d'article</option>
                        <?php
                        for ($i = 0; $i < count($typeart); $i++) { ?>
                            <option value=<?php echo $i + 1; ?>> <?php echo $typeart[$i]["type"]; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- titre -->
                <div class="input-group">
                    <span id="titreart" class="input-group-text">Titre de l'article</span>
                    <!-- <textarea class="form-control" aria-label="With textarea"></textarea> -->
                    <input type="text" name="titre" class="form-control" id="inputAddress">
                </div>
                <!-- image -->
                <div class="input-group mb-3">
                    <label id="img" class="input-group-text" for="inputGroupFile01">Image</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                    <input type="file" name="image" class="form-control" id="inputGroupFile01">
                </div>
                <!-- texte -->
                <div class="input-group">
                    <span id="resart" class="input-group-text">Résumé de l'article</span>
                    <textarea name="Texte" class="form-control" aria-label="With textarea" rows="15"></textarea>
                </div>
                <!-- consent : consentement d'utilisation de données -->
                <div class="input-group">
                    <div class="input-group-text">
                        <input name="consent" class="form-check-input mt-0" type="checkbox" value="1" aria-label="Checkbox for following text input">
                    </div>
                    <span class="Texte" class="input-group-text">Accepter que mes données soient sauvegarder pour identifiers cet article</span>
                </div>

                <!-- bouton de validation -->
                <div class="input-group col-md-12">
                    <button class="btn btn-primary" type="submit">Ajouter ce nouvel article !</button>
                </div>
            </form>
        <?php
        }
        else {
        ?>
            <h3>Connectez-vous pour pouvoir commenter ajouter et modifier des articles ! :-)</h3>
            <a href="index.php">Retour à l'accueil</a>
        <?php
        }
        ?>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>