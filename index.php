<?php

$liste_logements[0] = [
    "titre" => "Gare sud",
    "prix" => 445000,
    "image" => "property-01.jpg",
    "date_creation" => new DateTime("2017-06-12"),
    "type" => "Appartement",
    "taille" => 320,
    "nb_chambres" => 2
];

$liste_logements[1] = [
    "titre" => "Brequigny",
    "prix" => 220000,
    "image" => "property-02.jpg",
    "date_creation" => new DateTime("2017-08-25"),
    "type" => "Maison",
    "taille" => 250,
    "nb_chambres" => 3
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Lojeris</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="cta-header">
            <div class="container">
                <ul class="cta-contact inline-list">
                    <li>Téléphone : <a href="tel:0123456789">0123456789</a></li>
                    <li>Email : <a href="mailto:contact@lojeris.fr">contact@lojeris.fr</a></li>
                </ul>
                <div class="cta-social">
                    <ul class="inline-list">
                        <li>
                            <a href="http://www.facebook.com">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container main-header">
            <a href="index.html" class="logo">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Notre Agence</a></li>
                    <li><a href="#">Biens Immobiliers</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <header class="home-banner">
            <h1>Bienvenue chez <strong>Lojeris</strong></h1>
            <p>Votre partenaire de confiance en immobilier</p>
        </header>

        <section class="container">
            <h2>Nos dernières offres</h2>
            <div class="properties">
                <article class="property">
                    <a href="#">
                        <img src="images/<?php echo $liste_logements[0]["image"]; ?>" alt="<?php echo $liste_logements[0]["titre"]; ?>">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag <?php echo ($liste_logements[0]["prix"] < 200000) ? "reduc" : ""; ?>">
                                    <?php echo $liste_logements[0]["prix"]; ?> €
                                </div>
                                <h3><?php echo $liste_logements[0]["titre"]; ?></h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo $liste_logements[0]["date_creation"]->format("d/m/Y"); ?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    <?php echo $liste_logements[0]["type"]; ?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                    <?php echo $liste_logements[0]["taille"]; ?>m2
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    <?php echo $liste_logements[0]["nb_chambres"]; ?>
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
                <article class="property">
                    <a href="#">
                        <img src="images/property-02.jpg" alt="Brequigny">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag">220 000 €</div>
                                <h3>Brequigny</h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    10/08/2017
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    Maison
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                    320m2
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    3
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
                <article class="property">
                    <a href="#">
                        <img src="images/property-03.jpg" alt="Tabor">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag">320 000 €</div>
                                <h3>Tabor</h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    22/08/2017
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    Maison
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                    320m2
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    2
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
                <article class="property">
                    <a href="#">
                        <img src="images/property-04.jpg" alt="Gare sud">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag">190 000 €</div>
                                <h3>Gare sud</h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    10/04/2017
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    Appartement
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                    80m2
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    2
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
                <article class="property">
                    <a href="#">
                        <img src="images/property-05.jpg" alt="Cesson-Sevigne">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag">420 000 €</div>
                                <h3>Cesson-Sevigne</h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    14/05/2017
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    Maison
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                    320m2
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    4
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            Copyright © 2013 Lojeris
        </div>
    </footer>

</body>
</html>