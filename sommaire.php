<?php 
    session_start();
    require_once(".settings\connexion_base.php"); 
    //print_r($_SESSION);
?>

<!--==============================================================
    Première page du site. Td9
==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> sommaire </title>
    </head>

    <!------------------------------------------------------>
    <body>
        <h1> Sommaire </h1>
            <h2>Gestion de connexion</h2>
            <ul>
                <li><a href="mb-inscription.php">Inscription d'un nouveau membre</a></li>    
                <li><a href="mb-connexion.php">Connexion</a></li>
                <li><a href="mb-deconnexion.php">Deconnexion</a></li>
            </ul>
            <h2>Fonctionnalités</h2>
            <ul>
                <li><a href="secret.php">Page secrete</a></li>
                <li><a href="mb-pagePerso.php">Info personnel</a></li>
                <li><a href="afficher.php">Liste des pseudos des membres</a></li>
            </ul>
    </body>
</html>
