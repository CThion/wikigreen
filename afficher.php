<?php 
    session_start();
    require_once(".settings\connexion_base.php"); //connexion base

    // ---- infos TABLE membre ----
    $requete_membre = "SELECT * FROM membre;";
    $reponse_membre = $pdo->prepare($requete_membre);
    $reponse_membre->execute();
    $enregistrements_membre = $reponse_membre->fetchAll(); // récupérer tous les enregistrements dans un tableau
    $nombreReponses_membre = count($enregistrements_membre); // connaitre le nombre d'enregistrements
?>

<!--==============================================================
    affichage de tous les pseudo des membres du sites (de la table membre)
==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> liste des pseudo des membres </title>
    </head>

    <!------------------------------------------------------>
    <body>
        <h1> Communauté du site : </h1>

            <h2> Voici la liste des pseudo des membres !</h2>
                <?php
                    for ($i=0; $i<count($enregistrements_membre); $i++){
                        echo '<ul>';
                            echo '<li>'.$enregistrements_membre[$i]['pseudo'].'</li>';
                        echo '</ul>';
                    }
                ?>
        <p> 
            <a href='sommaire.php'>Retour au sommaire</a>
        </p>
        
    </body>
</html>
