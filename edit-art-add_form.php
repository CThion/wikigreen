<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Formulaire pour l'ajout d'un nouvel article
==============================================================-->
<?php
//---- table sec
$id_sec = $thm[0]["id_sec"];
$requete_sec = "SELECT * FROM sec";
$reponse_sec = $pdo->prepare($requete_sec);
$reponse_sec->execute();
$sec = $reponse_sec->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_sec = count($art); // connaitre le nombre d'enregistrements
//---- table thm
$id_thm = $art[0]["id_thm"];
$requete_thm = "SELECT * FROM thm";
$reponse_thm = $pdo->prepare($requete_thm);
$reponse_thm->execute();
$thm = $reponse_thm->fetchAll(); // récupérer tous les enregistrements dans un tableau
$nbrep_thm = count($art); // connaitre le nombre d'enregistrements
?>

<main>
    <div class="container">
        <div class="col">
            <!-- section -->
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Section</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>choisir une section</option>
                    <?php
                    for ($i = 0; $i < count($sec); $i++) { ?>
                        <option value=<?php echo $i; ?>> <?php echo $sec[$i]["titre"]; ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <!-- theme -->
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Thème</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>choisir un thème</option>
                    <?php
                    for ($i = 0; $i < count($thm); $i++) { ?>
                        <option value=<?php echo $i; ?>> <?php echo $thm[$i]["titre"]; ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <!-- titre -->

            <!-- texte -->
            <div class="input-group">
                <span class="input-group-text">Résumé de l'article</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>