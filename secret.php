<?php
    session_start(); 
    require_once(".settings\connexion_base.php");
?>

<!--==============================================================
    page réservée aux membres connectés
==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Page réservée </title>
    </head>

    <!------------------------------------------------------>
    <body>
        <?php
        if (!empty($_SESSION['id_membre'])) 
        { //verif si membre connecté
        ?>
            <h1>Voici toutes les informations pour les membres</h1>
            Retour au <a href="sommaire.php">sommaire</a>
        <?php
        }
        else 
        { //si non connecté
        ?>
            <h2>Accès interdit !</h2>
            Retour au <a href="sommaire.php">sommaire</a>
        <?php
        }
        ?>
        
    </body>
</html>
