<?php
session_start();
require_once("settings\connexion_base.php");
$donnees['titre_page'] = "Wikigreen : qui sommes nous ?";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Page expliquant ce qu'est le site wikigreen, ses motivations, son fonctionnement, et redirigeant vers
    quelques pages clées
==============================================================-->

<main role="main">
    <div class="container">
        <div class="row">
            <h1 id="h1collab"> Qu'est-ce que wikigreen ?</h1>

            <h2 id="h2collab">Une plaque tournant de l'information fiable</h2>
            <p class="Texte2"> Sur wikigreen , nous pensons que c'est par le partage d'information et l'échange entre individus bienveillant et rigouruex qui mène à la 
			meilleure information sicentifique . Ici , vous trouverez donc du contenu partagé par nos nombreux  collaborateurs , ce contenu est débattu et évalué par eux 
            même , ce qui amène à une sélection de l'information et donc à une qualité croissante de celle ci.			</p>
				
            <a href="disp-art-list.php">Voir tous les articles </a>

            <h2 id="h2collab">Un site collaboratif wiki</h2>
            <p class="Texte2"> Le contenu en tout genre partagé par nos collaborateur est trié via un systéme de section puis de thèmes . De nouvelles sections et de nouveaux
			thèmes peuvent être ajoutés par les internautes afin d'affiner ou d'enrichir le contenu . Un moteur de recherche , ainsi que des la sélection d'un "article du mois" 
			sera ajouté prochainement !</p>
        </div>
    </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>