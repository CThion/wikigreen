<?php session_start(); ?>
<!--==============================================================-->
<!-- 
    affichera un récapitulatif de tous les valeurs du formulaire renseignées, et qui insérera les données dans la table membre de la base de données 
-->

<!--==============================================================-->
<?php require_once("connexion_base.php"); 

    //----récupération paramètre pour table membre----
    $reussi = false;
    if (//si tout est bien renseigné dans le formulaire ...
        !empty($_POST['pseudo']) && !empty($_POST['motdepasse']) && !empty($_POST['email']) &&
        !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['id_categorie']) &&
        !empty($_POST['consentement']))
    {//...on affecte les valeurs et on implémente la BDD
        $pseudo = $_POST['pseudo'];
        $motdepasse = $_POST['motdepasse'];
        $email = $_POST['email'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $id_categorie = $_POST['id_categorie'];
        $infoMembre = [$pseudo, $email, $prenom, $nom, $id_categorie];
        $motdepasse_crypte = password_hash($motdepasse, PASSWORD_DEFAULT); //cryptage du mdp (comme MD() mais en plus fort)
    
    //----INSERT implémentation du nouveau membre dans la TABLE membre (version implémentation super sécurisée)
    $requete="INSERT INTO membre (id, pseudo, motdepasse, nom, prenom, email, id_categorie, dateinscrit)
    VALUES (NULL, ?, ?, ?, ?, ?, ?, NOW())"; //la fonction MD() chiffre le mot de passe
    $reponse=$pdo->prepare($requete);
    $reponse->execute(array($pseudo, $motdepasse_crypte, $nom, $prenom, $email, $id_categorie));
    $reussi = true;
    }
?>

<!--==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> enregistrement d'un membre </title>
    </head>

    <!------------------------------------------------------>
    <body>
        <?php if ($reussi==true) {?>
            <h1> Bienvenu parmis nous ! </h1>
                <h2>Récapitulatif de votre inscription</h2>
                    <table>
                        <tr> <!-- Entête -->
                            <th>pseudo</th>
                            <th>email</th>
                            <th>prénom</th>
                            <th>nom</th>
                            <th>catégorie sociale</th>
                        </tr>
                        <tr>
                        <?php
                            for ($i=0; $i<count($infoMembre); $i++){
                                    echo '<td>'.$infoMembre[$i].'</td>';
                            }
                        ?>
                        </tr>
                    <table>
                    <p>
                        <a href='sommaire.php'>Retour au sommaire</a>
                    </p>
        <?php } 
        else {?>
            <p>Veuillez svp renseigner toutes les informations.</p>
            Retour au <a href="sommaire.php"> sommaire</a>
        <?php } ?>        
    </body>
</html>
