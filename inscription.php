<?php session_start(); ?>
<!--==============================================================-->
<!-- affichage d'un formulaire d'inscription pour l'ajout d'une nouveau membre -->

<!--==============================================================-->
<?php 
    require_once("connexion_base.php"); 

    // ---- infos TABLE categorie ----
    $requete_categorie = "SELECT * FROM categorie;";
    $reponse_categorie = $pdo->prepare($requete_categorie);
    $reponse_categorie->execute();
    $enregistrements_categorie = $reponse_categorie->fetchAll(); // récupérer tous les enregistrements dans un tableau
    $nombreReponses_categorie = count($enregistrements_categorie); // connaitre le nombre d'enregistrements
?>

<!--==============================================================-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> inscription d'un nouveau membre </title>
    </head>

    <!------------------------------------------------------>    
    <body>
        <h2> Inscription d'un nouveau membre </h2>
        
            <form action="enregistrer-membre.php" method="post">
                <fieldset>    
                    <p>Pseudo            : <input type="text" name="pseudo" /></p>
                    <p>Mot de passe      :<input type="password" name="motdepasse" /></p>
                    <p>Prénom            :<input type="text" name="prenom" /></p>
                    <p>Nom               :<input type="text" name="nom" /></p>
                    <p>Email             :<input type="text" name="email" /></p>
                    <p>
                        Catégorie sociale :
                        <select name="id_categorie">  <!-- autant de champ que dans la table categorie -->
                        <?php for ($i=0; $i<count($enregistrements_categorie); $i++){
                            echo '<option value="'.$enregistrements_categorie[$i]['id'].'">'.$enregistrements_categorie[$i]['nom'].'</option>';
                        }?>
                        </select>
                    </p>
                    <p> 
                        <em> En soumettant ce formulaire, j'accepte que les informations saisies dans ce formulaire soient utilisées, exploitées, traitées, pour permettre de m'authentifier dans le cadre de ce TD9.</em></br>
                        <input type="checkbox" value="oui" name="consentement" id="consentement" />
                    </p>
                    <p><input type="submit" value="Valider" /></p>
                </fieldset>
            </form>
            Retour au <a href="sommaire.php">sommaire</a>
    </body>
</html>
