<?php
session_start();
require_once(".settings\connexion_base.php");
$donnees['titre_page'] = "Wikigreen : accueil";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Page d'accueil du site
==============================================================-->

<main id="main" role="main">
  <div class="container">
    <div class="row">
      <div id="Mois" class="col-md-4">
        Bienvenue sur Wikigreen ! Notre site est un site participatif sur le thème de l'écologie.Vous pourrez trouver ici du contenu très varié
		( articles , vidéos ... ) classés par sections et par thèmes . En vous inscrivant , vous pourrez égalment rajouter de nouveau contenu et
		ainsi faire évoluer le site ! Votre participation peut égalment permettre d'évaluer les contenus proposés ou de les nuancer via la zone
		commentaire . N'hesitez pas , tout le monde peut participer !  Merci pour votre attention et bonne navigation !	
      </div>
      <div class="col-md-4">
        <h1 id="Perso"> Rien que pour vous </h1>
        <h2 id="connexion">Gestion de connexion</h2>
        <ul class="menu">
          <li><a class="sum" href="mb-inscription.php">Inscription d'un nouveau membre</a></li>
          <li><a class="sum" href="mb-connexion.php">Connexion</a></li>
          <li><a class="sum" href="mb-deconnexion.php">Deconnexion</a></li>
          <li><a class="sum" href="mb-pagePerso.php">Info personnel</a></li>
        </ul>
        <h2 id="fonction">Ressources</h2>
        <ul class="menu">
          <li><a href="disp-art-list.php">Afficher tous les articles</a></li>
        </ul>
        <h1 id="contribuer"> Contribuer</h1>
        <a href="edit-art-add_form.php">Ajouter un article</a>
      </div>
    </div>
    <div id="div1" class="row row-cols-3">
      <div id="bord" clas="col-md-4">
        <p>Tous nos thèmes et articles <br> regroupés en 5 grandes sections !</p>
      </div>
      <div id="bord" clas="col-md-4">
        <div>General</div>
        <img src="images/image_sec/image_sec-3.jpg" alt="image_sec-3" class="img-thumbnail" width="300" height="300" />
      </div>
<<<<<<< Updated upstream
      <div id="bord" clas="col-md-4">
        <div>Consommation</div>
        <img src="images/image_sec/image_sec-4.jpg" alt="image_sec-4" class="img-thumbnail" width="300" height="300" />
      </div>
      <div id="bord" clas="col-md-4">
        <div>Cause animale</div>
        <img src="images/image_sec/image_sec-5.jpg" alt="image_sec-5" class="img-thumbnail" width="300" height="300" />
=======
      <div clas="col-md-4">
        <div>Conssomation</div>
        <img src="images/image_sec/image_sec-4.jpg" alt="image_sec-4" width="300" height="300" />
      </div>
      <div clas="col-md-4">
        <div>Cause animal</div>
        <img src="images/image_sec/image_sec-5.jpg" alt="image_sec-5" width="300" height="300" />
>>>>>>> Stashed changes
      </div>
      <div id="bord" clas="col-md-4">
        <div>Energie</div>
        <img src="images/image_sec/image_sec-6.jpg" alt="image_sec-6" class="img-thumbnail" width="300" height="300" />
      </div>
      <div id="bord" clas="col-md-4">
      <div>Progrès et avenir</div>
      <img src="images/image_sec/image_sec-7.jpg" alt="image_sec-7" class="img-thumbnail" width="300" height="300" />
      </div>
    </div>
  </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>