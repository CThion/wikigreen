<?php
session_start();
require_once(".settings\connexion_base.php");
$donnees['titre_page'] = "Création d'un compte Wikigreen";
include "all-debutpage.inc.php";
?>

<!--==============================================================-->
<!-- affichage d'un formulaire d'inscription pour l'ajout d'un nouveau membre -->
<!--==============================================================-->

<main role="main">
    <div class="container">
        <div class="col">
            <h2 id="h2mb"> Inscription d'un nouveau membre </h2>

            <form action="mb-enregistrer.php" method="post">
                <fieldset>
                    <p id ="prenom">Prénom :<input type="text" name="prenom" /></p>
                    <p id ="nom">Nom :<input type="text" name="nom" /></p>
                    <p id ="pseudo">Pseudo :<input type="text" name="pseudo" /></p>
                    <p id ="email">Email :<input type="text" name="email" /></p>
                    <p id ="mdp">Mot de passe :<input type="password" name="motdepasse" /></p>
                    <p>
                        <em> En soumettant ce formulaire, j'accepte que les informations saisies dans ce formulaire soient utilisées, exploitées, et traitées dans l'unique but de m'authentifier sur Wikigreen.</em></br>
                        <input type="checkbox" value="oui" name="consentement" id="consentement" />
                    </p>
                    <p><input type="submit" value="Valider" /></p>
                </fieldset>
            </form>
            Retour au <a href="sommaire.php">sommaire</a>
        </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>