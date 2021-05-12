<?php
session_start();
require_once("settings\connexion_base.php");
$donnees['titre_page'] = "Deconnexion Wikigreen";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page de déconnexion
==============================================================-->

<main role="main">
    <div class="container">
        <div class="col">
            <?php
            unset($_SESSION['pseudo']); //on retire les informations de l'utilisateur ==> déconnexion
            unset($_SESSION['id_membre']);
            ?>
            <h1> Vous avez été déconnecté. </h1>
            Retour au <a href="index.php">sommaire</a>
        </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>