<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================-->
<!-- affichage d'un formulaire d'inscription pour l'ajout d'un nouveau membre -->
<!--==============================================================-->

<main>
    <h2> Inscription d'un nouveau membre </h2>

    <form action="mb-enregistrer.php" method="post">
        <fieldset>
            <p>Prénom :<input type="text" name="prenom" /></p>
            <p>Nom :<input type="text" name="nom" /></p>
            <p>Pseudo :<input type="text" name="pseudo" /></p>
            <p>Email :<input type="text" name="email" /></p>
            <p>Mot de passe :<input type="password" name="motdepasse" /></p>
            <p>
                <em> En soumettant ce formulaire, j'accepte que les informations saisies dans ce formulaire soient utilisées, exploitées, et traitées dans l'unique but de m'authentifier sur Wikigreen.</em></br>
                <input type="checkbox" value="oui" name="consentement" id="consentement" />
            </p>
            <p><input type="submit" value="Valider" /></p>
        </fieldset>
    </form>
    Retour au <a href="sommaire.php">sommaire</a>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>