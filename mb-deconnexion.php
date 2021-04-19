<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    page de déconnexion
==============================================================-->

<main>
    <?php
    unset($_SESSION['pseudo']); //on retire les informations de l'utilisateur ==> déconnexion
    unset($_SESSION['id_membre']);
    ?>
    <h1> Vous avez été déconnecté. </h1>
    Retour au <a href="sommaire.php">sommaire</a>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>