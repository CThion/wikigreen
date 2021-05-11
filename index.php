<?php
session_start();
require_once(".settings\connexion_base.php");
$donnees['titre_page'] = "Wikigreen : accueil";
include "all-debutpage.inc.php";
?>

<!--==============================================================
    Page d'accueil du site
==============================================================-->

<main role="main">
  <div class="container">
    <div class="row">
      <div id="Mois" class="col-md-4">
        Article du mois :

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.
        Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.
        Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.
        Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue.
        Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
        Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh.
        Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit .
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
  </div>
</main>

<!------------------------------------------------------>
<?php include "all-finpage.inc.php"; ?>