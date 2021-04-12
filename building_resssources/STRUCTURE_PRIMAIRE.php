<?php
session_start();
require_once("connexion_base.php");
?>

<!--==============================================================
Structure html basique (https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1605845)
==============================================================-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title> Le site de zozor </title>
</head>

<!------------------------------------------------------>

<body>
    <header>
        <h1>Zozor</h1>
        <h2>Carnets de voyage</h2>
    </header>

    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">CV</a></li>
        </ul>
    </nav>

    <section>
        <aside>
            <h1>À propos de l'auteur</h1>
            <p>C'est moi, Zozor ! Je suis né un 23 novembre 2005.</p>
        </aside>
        <article>
            <h1>Je suis un grand voyageur</h1>
            <p>Bla bla bla bla (texte de l'article)</p>
        </article>
    </section>

    <footer>
        <p>Copyright Zozor - Tous droits réservés<br />
            <a href="#">Me contacter !</a>
        </p>
    </footer>
</body>

</html>