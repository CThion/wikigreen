<?php 
    session_start(); 
    require_once(".settings\connexion_base.php"); //connexion base

    //-- récupération id membre précisé
    $id = 0 ;//id par défaut si aucun renseigné
    if (isset($_GET['id'])) { $id=$_GET['id']; }
    
    // ---- infos TABLE membre ----
    $requete_membre = "SELECT * FROM membre WHERE membre.id = $id;";
    $reponse_membre = $pdo->prepare($requete_membre);
    $reponse_membre->execute();
    $enregistrements_membre = $reponse_membre->fetchAll(); // récupérer tous les enregistrements dans un tableau
    //print_r($enregistrements_membre);
    
?>

<!--============================================================== 
    permet d’afficher les informations relatives au membre avec l’identifiant id. Par contre, affiche uniquement les informations confidentielles, telle que l’adresse email dans cet exemple, pour le membre connecté
    l'id de membre est donné par la méthode POST
==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Information de membre </title>
    </head>

    <!------------------------------------------------------>
    <body>
        <h1> Information de membre </h1>
                <table>
                    <tr> <!-- Entête -->
                        <th>Pseudo</th>
                        <?php
                            // on n'affiche l'addresse mail que pour les utilisateur connectés
                            if (!empty($_SESSION['id_membre']) && $_SESSION['id_membre']==$id) 
                                { echo "<th>Adresse mail</th>"; }
                        ?>
                        <th>Date d'inscription</th>
                    </tr>
                    <tr><!-- Corps -->
                        <?php 
                            echo '<td>'.$enregistrements_membre[0]['pseudo'].'</td>';
                            if ($_SESSION['id_membre']==$id) {
                                echo '<td>'.$enregistrements_membre[0]['email'].'</td>';
                            }
                            echo '<td>'.$enregistrements_membre[0]['dateinscrit'].'</td>'; 
                        ?>
                    </tr>
                <table>    
        <p> <a href='sommaire.php'>Retour au sommaire</a> </p>
        
    </body>
</html>
