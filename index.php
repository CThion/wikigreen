<?php
session_start();
require_once(".settings\connexion_base.php");
$donnees['menu'] = "Accueil";
$donnees['titre_page'] = "Page d'accueil";
include "all-debutpage.inc.php";
?>


<main role="main">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        Article du mois :

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.
        Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.
        Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.
        Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue.
        Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
        Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh.
        Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.

      </div>
      <div class="col-md-4">
        Rien que pour vous
      </div>
      <div class="col-md-4">
        Troisième colonne
      </div>
    </div>
  </div>
</main>

<?php include "all-finpage.inc.php"; ?>