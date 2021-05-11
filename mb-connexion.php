<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Page de connexion (pour les membres donc)
==============================================================-->

<main role="main">
<div class="container">
<div class="col">
    <?php
    if (empty($_SESSION['pseudo'])) //vérifie si le membre est déjà connecté
    {
    ?>
        <form action="mb-verifierConnexion.php" method="post">
            <fieldset>
                <p id="login">Votre login : <input type="text" name="pseudo" /></p>
                <p id="mdp2">Votre mot de passe : <input type="password" name="motdepasse" /></p>
                <p><input type="submit" value="login" /></p>
            </fieldset>
        </form>
        Retour au <a href="sommaire.php">sommaire</a>
    <?php
    } else { ?>
        <h3 id="Profil">Vous êtes déjà connecté sur le profil de <?php echo $_SESSION['pseudo']; ?></h3>
        <p><a href="deconnexion.php">Deconnectez vous</a> avant de vous connecter à une autre compte.</p>
        Retour au <a href="sommaire.php">sommaire</a>
    <?php }
    ?>
    </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>