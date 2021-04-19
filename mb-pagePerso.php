<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--============================================================== 
    page personnel d'un membre donné (par son id). Peut accéder à ses informations personnelles, ainsi qu'aux informations sur son activité :
        - nombre de contributions
        - article qu'il a modifié
        - articles favoris
==============================================================-->

<?php
//-- récupération id du membre
$id = 0;
if (!empty($_SESSION['id_membre'])) {
    $id = $_SESSION['id_membre'];
}

// ---- infos TABLE membre ----
$requete_membre = "SELECT * FROM mb WHERE mb.id = $id;";
$reponse_membre = $pdo->prepare($requete_membre);
$reponse_membre->execute();
$enregistrements_membre = $reponse_membre->fetchAll(); // récupérer tous les enregistrements dans un tableau. On a normalement un seul enregistrement, correspondant à l'entrée du membre dans la bdd (à l'id donné)
//print_r($enregistrements_membre);
?>

<main>
    <?php
    if (!empty($_SESSION['id_membre'])) { //--si membre connecté
    ?>

        <h1> Bienvenu sur votre page personnel <?php echo $enregistrements_membre[0]['prenom'] . " " . $enregistrements_membre[0]['nom']; ?> </h1>
        <table>
            <tr>
                <!-- Entête -->
                <th>Nom</th>
                <th>Prénom</th>
                <th>Pseudo</th>
                <th>Adresse mail</th>
                <th>Date d'inscription</th>
            </tr>
            <tr>
                <!-- Corps -->
                <?php
                echo '<td>' . $enregistrements_membre[0]['nom'] . '</td>';
                echo '<td>' . $enregistrements_membre[0]['prenom'] . '</td>';
                echo '<td>' . $enregistrements_membre[0]['pseudo'] . '</td>';
                echo '<td>' . $enregistrements_membre[0]['mail'] . '</td>';
                echo '<td>' . $enregistrements_membre[0]['dateinscrit'] . '</td>';
                ?>
            </tr>
            <table>

                <p> <a href='sommaire.php'>Retour au sommaire</a> </p>
    <?php 
    } else { ?>
        <h2>Vous n'êtes pas connecté ! <a href='mb-connexion.php'>Connectez-vous</a> ou <a href='mb-inscription.php'>créez-vous un compte</a> pour pouvoir accéder à votre espace personnel :-) </h2>    
        <p> <a href='sommaire.php'>Retour au sommaire</a> </p>
    <?php
    } 
    ?>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>