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

  <title>Page d'accueil</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="images/logo/logo-wikigreen/logo-1/logo300.png" alt="Logo du site" width="250" height="200" /> <a class="navbar-brand" href="#">
          <span class="navbar-brand mb-0 h1" id = "Citation">Pour une meilleure information de l'écologie </span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex flex-column bd-highlight mb-3">
              <div class="p-2 bd-highlight">
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
              <div class="p-2 bd-highlight">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Paramétres
                  </a>
				  
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>  <a class="dropdown-item" href="#">Luminosité</a>  </li>
                    <li>  <a class="dropdown-item" href="#">Couleur du fond d'écran</a> </li>
                    <li>  <a class="dropdown-item" href="#">Police d'écriture</a>  </li>
                  
				  
				  </ul>
				  
                </li>
              </div>
            </div>
            <div class="d-flex flex-column bd-highlight mb-3">
              <div class="p-2 bd-highlight"><img src="images/pp/test.jpg" alt="PP" width="150" height="100" /></div>
              <div class="p-2 bd-highlight"><label for="exampleFormControlInput1" id="test2" class="form-label">Veuillez renseigner votre adresse mail : </label>
                <input type="email" id="test2" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="p-2 bd-highlight"  id="test2" >Mot de passe : </div>
              <button type="button" class="btn btn-primary" id="Connexion">Connexion</button>
            </div>
          </div>
      </div>
    </nav>
  </header>