<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Formulaire pour la modification d'un article. Chaque champ du formulaire est dont prérempli
    avec les donnés initiales de l'articles modifié.
==============================================================-->


<?php
if (!empty($_SESSION['id_membre'])) { //vérifie si le membre est bien connecté

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

    <main role="main">
        <div class="container">
            <form action="edit-art-add_bdd.php" enctype="multipart/form-data" method="post" class="row g-2">
                <!-- ATTENTION !! L'indiçage dans les tables mysql commence à partir de 1, mais dans les tableaux php il commence à 0 !! D'où le décalage dans les boucles for et les <value> -->
                <!-- sec -->
                <div class="input-group col-md-6">
                    <label class="input-group-text" for="inputGroupSelect01">Section</label>
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
                    <label class="input-group-text" for="inputGroupSelect01">Thème</label>
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
                    <label class="input-group-text" for="inputGroupSelect01">Référence</label>
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
                    <label class="input-group-text" for="inputGroupSelect01">Type d'article</label>
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
                    <span class="input-group-text">Titre de l'article</span>
                    <!-- <textarea class="form-control" aria-label="With textarea"></textarea> -->
                    <input type="text" name="titre" class="form-control" id="inputAddress">
                </div>
                <!-- image -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Image</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                    <input type="file" name="image" class="form-control" id="inputGroupFile01">
                </div>
                <!-- texte -->
                <div class="input-group">
                    <span class="input-group-text">Résumé de l'article</span>
                    <textarea name="texte" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <!-- consent : consentement d'utilisation de données -->
                <div class="input-group">
                    <div class="input-group-text">
                        <input name="consent" class="form-check-input mt-0" type="checkbox" value="1" aria-label="Checkbox for following text input">
                    </div>
                    <span class="input-group-text">Accepter que mes données soient sauvegarder pour identifiers cet article</span>
                </div>

                <!-- bouton de validation -->
                <div class="input-group col-md-12">
                    <button class="btn btn-primary" type="submit">Ajouter ce nouvel article !</button>
                </div>
            </form>
        </div>
    </main>

<?php
} else {
?>
    <main role="main">
        <div class="container">
            <div class="col">
            <h3>Connectez-vous ou créez vous un compte pour pouvoir contribuer à wikigreen !</h3>
            <a href="mb-connexion.php">Se connecter</a>
            <a href="mb-inscription.php">Se créer un compte</a>
            </div>
        </div>
    </main>
<?php
}
?>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>