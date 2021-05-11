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

    $id_art = $_GET['id_art']; //on récupère l'id de l'article en couf de modif

    //---- INFO GLOBALE ---- (copie colle de edit-art-add_form.php)

    // info qui seront proposé à l'utilisateur, afin qu'il puisse remplacer celles initiales de l'article 

    //-- table sec

    //$id_sec = $thm[0]["id_sec"];
    $requete_sec = "SELECT * FROM sec";
    $reponse_sec = $pdo->prepare($requete_sec);
    $reponse_sec->execute();
    $sec = $reponse_sec->fetchAll(); // récupérer tous les enregistrements dans un tableau
    $nbrep_sec = count($sec); // connaitre le nombre d'enregistrements

    //-- table thm
    //$id_thm = $art[0]["id_thm"];
    $requete_thm = "SELECT * FROM thm";
    $reponse_thm = $pdo->prepare($requete_thm);
    $reponse_thm->execute();
    $thm = $reponse_thm->fetchAll(); // récupérer tous les enregistrements dans un tableau
    $nbrep_thm = count($thm); // connaitre le nombre d'enregistrements

    //-- table ref
    //$id_ref = $art[0]["id_ref"];
    $requete_ref = "SELECT * FROM ref";
    $reponse_ref = $pdo->prepare($requete_ref);
    $reponse_ref->execute();
    $ref = $reponse_ref->fetchAll(); // récupérer tous les enregistrements dans un tableau
    $nbrep_ref = count($ref); // connaitre le nombre d'enregistrements

    //-- table typeart
    //$id_typeart = $art[0]["id_typeart"];
    $requete_typeart = "SELECT * FROM typeart";
    $reponse_typeart = $pdo->prepare($requete_typeart);
    $reponse_typeart->execute();
    $typeart = $reponse_typeart->fetchAll(); // récupérer tous les enregistrements dans un tableau
    $nbrep_typeart = count($typeart); // connaitre le nombre d'enregistrements

    //---- INFO SPECIFIQUE ARTICLE MODIFIE (copie colle de disp-art-full.php)----

    // c'est ce avec quoi on va préremplir tous les champs de formulaires.
    // on suffixe les variable par _i pour indiquer qu'elles sont spécifiques à l'article modifié

    //-- table art
    $requete_art_i = "SELECT * FROM art WHERE id = ?"; //récupération de l'article à l'id donné
    $reponse_art_i = $pdo->prepare($requete_art_i);
    $reponse_art_i->execute(array($id_art)); //ce qui va dans le "?" de la requête
    $art_i = $reponse_art_i->fetchAll(); // récupérer tous les enregistrements dans un tableau

    //-- artroot : valeur contante de l'article (pour parcourir les versions)
    $artroot = $art_i[0]["artroot"];

    //-- table ref
    $id_ref_i = $art_i[0]["id_ref"]; //recherche de la clef étrangère dans l'article
    $requete_ref_i = "SELECT * FROM ref WHERE id = ?";
    $reponse_ref_i = $pdo->prepare($requete_ref_i);
    $reponse_ref_i->execute(array($id_ref_i));
    $ref_i = $reponse_ref_i->fetchAll();

    //-- table thm
    $id_thm_i = $art_i[0]["id_thm"];
    $requete_thm_i = "SELECT * FROM thm WHERE id = ?";
    $reponse_thm_i = $pdo->prepare($requete_thm_i);
    $reponse_thm_i->execute(array($id_thm_i));
    $thm_i = $reponse_thm_i->fetchAll();

    //-- table sec
    $id_sec_i = $thm[0]["id_sec"];
    $requete_sec_i = "SELECT * FROM sec WHERE id = ?";
    $reponse_sec_i = $pdo->prepare($requete_sec_i);
    $reponse_sec_i->execute(array($id_sec_i));
    $sec_i = $reponse_sec_i->fetchAll();

    //-- typeart -> art_typeart
    $requete_typeart_i = "SELECT typeart.id, typeart.type FROM typeart INNER JOIN art_typeart ON typeart.id=art_typeart.id_typeart INNER JOIN art ON art.id=art_typeart.id_art
                        WHERE art.id = ?";
    $reponse_typeart_i = $pdo->prepare($requete_typeart_i);
    $reponse_typeart_i->execute(array($id_art));
    $typeart_i = $reponse_typeart_i->fetchAll();

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

    <main role="main">
        <div class="container">
            <form action="edit-art-add_bdd.php" enctype="multipart/form-data" method="post" class="row g-2">
                <!-- ATTENTION !! L'indiçage dans les tables mysql commence à partir de 1, mais dans les tableaux php il commence à 0 !! D'où le décalage dans les boucles for et les <value> -->
                <!-- sec -->
                <div class="input-group col-md-6">
                    <label class="input-group-text" for="inputGroupSelect01">Section</label>
                    <select name="sec" class="form-select" id="inputGroupSelect01">
                        <option selected value=<?php echo $sec_i[0]['id']; ?>>
                            <?php echo $sec_i[0]['titre']; ?>
                        </option>
                        <?php
                        for ($i = 0; $i < $nbrep_sec; $i++) {
                            if ($i + 1 <> $sec_i[0]['id']) {
                        ?>
                                <option value=<?php echo $i + 1; ?>> <?php echo $sec[$i]["titre"]; ?> </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <!-- thm -->
                <div class="input-group col-md-6">
                    <label class="input-group-text" for="inputGroupSelect01">Thème</label>
                    <select name="thm" class="form-select" id="inputGroupSelect01">
                        <option selected value=<?php echo $thm_i[0]['id']; ?>>
                            <?php echo $thm_i[0]['titre']; ?>
                        </option>
                        <?php
                        for ($i = 0; $i < $nbrep_thm; $i++) {
                            if ($i + 1 <> $thm_i[0]['id']) {
                        ?>
                                <option value=<?php echo $i + 1; ?>> <?php echo $thm[$i]["titre"]; ?> </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <!-- ref -->
                <div class="input-group col-md-6">
                    <label class="input-group-text" for="inputGroupSelect01">Référence</label>
                    <select name="ref" class="form-select" id="inputGroupSelect01">
                        <option selected value=<?php echo $ref_i[0]['id']; ?>>
                            <!-- //valeur article initiale -->
                            <?php echo $ref_i[0]['titre']; ?>
                        </option>
                        <?php
                        for ($i = 0; $i < count($ref); $i++) {
                            if ($i + 1 <> $ref_i[0]['id']) { //on n'affiche pas la valeur initiale de l'article
                        ?>
                                <option value=<?php echo $i + 1; ?>> <?php echo $ref[$i]["titre"]; ?> </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <!-- typeart -->
                <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Type d'article</label>
                    <select name="typeart" class="form-select" id="inputGroupSelect01">
                        <option selected value=<?php echo $typeart_i[0]['id'] ?>>
                            <!-- //valeur article initiale -->
                            <?php echo $typeart_i[0]['type']; ?>
                        </option>
                        <?php
                        for ($i = 0; $i < count($typeart); $i++) {
                            if ($i + 1 <> $typeart_i[0]['id']) { //on n'affiche pas la valeur initiale de l'article en plus
                        ?>
                                <option value=<?php echo $i + 1; ?>> <?php echo $typeart[$i]["type"]; ?> </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <!-- titre -->
                <div class="input-group">
                    <span class="input-group-text">Titre de l'article</span>
                    <!-- <textarea class="form-control" aria-label="With textarea"></textarea> -->
                    <input type="text" name="titre" class="form-control" id="inputAddress" value="<?php echo $art_i[0]['titre']; ?>">
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
                    <textarea name="texte" class="form-control" aria-label="With textarea">
                        <?php echo $art_i[0]['texte']; //arffichage du texte initiale de l'article
                        ?>
                    </textarea>
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