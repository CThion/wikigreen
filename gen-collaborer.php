<?php
session_start();
require_once(".settings\connexion_base.php");
$donnees['titre_page'] = "Collaborer";
include "all-debutpage.inc.php";
?>

<!--==============================================================
	Page expliquant comment collaborer à wikigreen, le fonctionnement, et redirigeant vers les pages clées
	pour collaborer
==============================================================-->

<main>
	<div class="container">
		<div class="col">
			<h1  id="h1collab">Participez au développement de la pensée durable !</h1>
			
			<p class="Texte2"> Ce que nous appelons "pensée durable" c'est une reflexion rationelle , basée sur les faits et la science , dont le but est de permettre
			aux humains et aux autres animaux de continuer de prospérer le plus longtemps possible.Nous pensons qu'un site collaboratif peut être un des moyens de poursuivre
			ce but par la transmission et le partage de conaissances. </p>

			<h2 id="h2collab"> I. Pourquoi contribuer sur Wikigreen ?</h2>
			
			<p class="Texte2">Comme vous l'avez compris , votre participation serait très appréciée par notre équipe ! En contribuant sur Wikigreen , vous permettez
			la propagation des idées écologistes ce qui est vital face aux enjeux de ce siècle ! De plus , par l'évaluation , le débat et le recoupement des données du
			site , vous aidez à cette pensée à gagner en rigueur et donc en efficacité . Le développement de la pensée écologiste via wikigreen est donc la fois 
			quantitatif et qualitatif !</p>

			<h2 id="h2collab">II. Comment contribuer ?</h2>
			
			<p class="Texte2"> Contribuer sur wikigreen reste soumis à certaines contraintes.
			Tout d'abord , nous vous demandons de bien vouloir rester dans le thème de l'écologie.Nous ne pouvons pas traiter tout les sujets , nous y perderions en efficacité . Même si l'écologie intéragie avec quasiment tout , nous vous demandons de garder un lien raisonnable avec le sujet .
            Au sujet de la politique , nous pensons que dépolitiser l'écologie serait une erreur , par conséquent , les contenus orientés sont autorisés mais des limites ne doivent pas être franchies tout de même , pas de militantisme éxubérant !
            Nous vous demandons également de vérifier la validité scientifique du contenu poster sur la page , essayez de recroiser les sources , de vérifier la pertinence du site que vous référencez ... Bref , les consignes de base pour avoir des informations fiables. 
            Pour finir , nous vous demandons de rester respectueux dans l'espace commentaire et de suivre les règles de base en matière de politesse et de respect avec les autres membres du site, y compris lorsque le débat est houleux !			</a>
		</div>
	</div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>