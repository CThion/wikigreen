<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS : lien avec styles prédéfinis bootstaps-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- intégration de notre propre feuille de style css -->
  
  <link href="css/notrestyle-bootstrap.css" rel="stylesheet" type="text/css" />

  <title><?php echo $donnees['titre_page'];?></title>
</head>

<body>
  <header>
    <!-- ressource entête navbar : https://getbootstrap.com/docs/5.0/components/navbar/ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!-- logo du site -->
        <a class="navbar-brand" href="index.php"><img src="images/logo/logo-wikigreen/logo-1/logo300.png" alt="Logo du site" width="150" height="100" /></a>
        <!-- bouton hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- différents liens de la bare de nav supérieure -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- barre de recherche de contenu (art, ref, thm...) -->
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Trouver une ressource" aria-label="rechercher">
            <button class="btn btn-outline-success" type="submit">Go!</button>
          </form>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" id ="centre" href="gen-recherche_avance.php">Recherche avancée</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"id="centre" aria-current="page" href="gen-collaborer.php"> Collaborer </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="centre" aria-current="page" href="gen-qui_sommes_nous.php"> Qui-sommes nous ? </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="centre" aria-current="page" href="mb-connexion.php"> Connexion </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="centre" aria-current="page" href="mb-pagePerso.php"> Espace personnel </a>
            </li>
          </ul>
        </div>
      </div>


    </nav>
  </header>