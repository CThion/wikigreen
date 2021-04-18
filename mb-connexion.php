<?php
session_start();
require_once(".settings\connexion_base.php");
?>

<!--==============================================================
    Page de connexion (pour les membres donc)
==============================================================-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title> page de connexion </title>
</head>

<!------------------------------------------------------>

<body>
    <?php
    if (empty($_SESSION['pseudo'])) //vérifie si le membre est déjà connecté
    {
    ?>
        <form action="mb-verifierConnexion.php" method="post">
            <fieldset>
                <p>Votre login : <input type="text" name="pseudo" /></p>
                <p>Votre mot de passe : <input type="password" name="motdepasse" /></p>
                <p><input type="submit" value="login" /></p>
            </fieldset>
        </form>
        Retour au <a href="sommaire.php">sommaire</a>
    <?php
    } else { ?>
        <h3>Vous êtes déjà connecté sur le profile de <?php echo $_SESSION['pseudo']; ?></h3>
        <p><a href="deconnexion.php">Deconnectez vous</a> avant de vous connecter à une autre compte.</p>
        Retour au <a href="sommaire.php">sommaire</a>
    <?php }
    ?>
</body>

</html>