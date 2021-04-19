<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    affichera un récapitulatif de tous les valeurs du formulaire renseignées, et qui insérera les données dans la table membre de la base de données 
==============================================================-->

<?php
//----récupération paramètre pour table membre----
$reussi = false; #conditinne le message affiché après la saisie (voir plus bas)
if ( //si tout est bien renseigné dans le formulaire de mb-inscription.php ...
    !empty($_POST['pseudo']) && !empty($_POST['motdepasse']) && !empty($_POST['email']) &&
    !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['consentement'])
) { //...on affecte les valeurs et on implémente la BDD
    $pseudo = $_POST['pseudo'];
    $motdepasse = $_POST['motdepasse'];
    $email = $_POST['email'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $infoMembre = [$pseudo, $email, $prenom, $nom];
    $motdepasse_crypte = password_hash($motdepasse, PASSWORD_DEFAULT); //cryptage du mdp (comme avec la méthode MD() mais en plus fort, suis les nouvelles normes de sécu)

    //----INSERT implémentation du nouveau membre dans la TABLE membre (version implémentation super sécurisée)
    $requete = "INSERT INTO mb (id, nom, prenom, pseudo, mail, mdp, dateinscrit)
    VALUES (NULL, ?, ?, ?, ?, ?, NOW())";
    $reponse = $pdo->prepare($requete);
    $reponse->execute(array($nom, $prenom, $pseudo, $email, $motdepasse_crypte));
    $reussi = true;
}
?>

<main>
    <?php
    if ($reussi == true) {
    ?>
        <h1> Bienvenu parmis nous ! </h1>
        <h2>Récapitulatif de votre inscription</h2>
        <table>
            <tr>
                <!-- Entête -->
                <th>pseudo</th>
                <th>email</th>
                <th>prénom</th>
                <th>nom</th>
            </tr>
            <tr>
                <?php
                for ($i = 0; $i < count($infoMembre); $i++) {
                    echo '<td>' . $infoMembre[$i] . '</td>';
                }
                ?>
            </tr>
            <table>
                <p>
                    <a href='sommaire.php'>Retour au sommaire</a>
                </p>
            <?php } else { ?>
                <p>Veuillez svp renseigner toutes les informations.</p>
                Retour au <a href="sommaire.php"> sommaire</a>
            <?php } ?>
</main>


<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>