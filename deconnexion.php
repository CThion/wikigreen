<?php 
    session_start(); 
    require_once("connexion_base.php");
    unset($_SESSION['pseudo']); //on retire les informations de l'utilisateur ==> déconnexion
    unset($_SESSION['id_membre']);
?>

<!--==============================================================
    page de déconnexion
==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Deconnexion </title>
    </head>

    <!------------------------------------------------------>
    <body>
        <h1> Vous avez été déconnecté. </h1>
        Retour au <a href="sommaire.php">sommaire</a>
        
    </body>
</html>
