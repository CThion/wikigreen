<?php
session_start();
require_once(".settings\connexion_base.php");
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Page supportant la recherche avancée pour chercher des articles selon différents critères :
        - le titre
        - la notation
        - la source
        - le type d'article
        - le type de source
        - la date
        - ...
==============================================================-->

<main>
    <h1>Moteur de recherche :</h1>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>