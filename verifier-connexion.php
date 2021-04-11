<?php 
session_start();
require_once(".settings\connexion_base.php"); 

if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])){
    $pseudo = $_POST['pseudo'];
    $motdepasse = $_POST['motdepasse'];
    //---- récupération des membres avec le pseudo entré (normalement une seule entrée)
    $requete = "SELECT * FROM membre WHERE pseudo = ?";
    $reponse = $pdo->prepare($requete);
    $reponse->execute(array($pseudo));
    //----
    $enregistrements = $reponse->fetchAll(); // récupérer tous les enregistrements dans un tableau
    $nombreReponses = count($enregistrements); // connaitre le nombre d'enregistrements
}
?>

<!--==============================================================
    page de vérifivation des informations de la page de connexion pour se connecter
==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> verification de connexion </title>
    </head>

    <!------------------------------------------------------>
    <body>
        <?php
        // tester si un enregistrement existe
        // (on suppose qu'un même pseudo n'existe qu'une fois, donc qu'il n'y a qu'une entrée dans enregistrement)
        if ($nombreReponses > 0)
        {
            // on vérifie si le mot de passe de la base de données = au mot de passe du formulaire
            $motdepasse_crypte = $enregistrements[0]['motdepasse']; //récupération du mdp dans la bdd
            if (password_verify($motdepasse, $motdepasse_crypte)) //vérification
            {
                ?>
                <h2>Bienvenu <?php echo $pseudo;?> ! On est content de vous revoir !</h2>
                Retour au <a href="sommaire.php">sommaire</a>
                <?php
                //-- affectation des variables de sessions
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['id_membre'] = $enregistrements[0]['id'];//récupération de l'id de table membre
                // print_r($_SESSION);
            }
            else //-- mauvais mdp
            {
                ?>
                <p>Mot de passe incorrecte, veuillez vérifier vos entrées</p>
                <a href="connexion.php">Retour à l'écran de connexion</a>
                Retour au <a href="sommaire.php">sommaire</a>
                <?php
            }
        }
        else{
            ?>
            <p>Aucun compte enregistré avec ce pseudonyme, veuillez vérifier vos entrées ou créez-vous un compte</p>
            <a href="connexion.php">Retour à l'écran de connexion</a>
            Retour au <a href="sommaire.php">sommaire</a>
            <?php
        }
        ?>

    </body>
</html>
