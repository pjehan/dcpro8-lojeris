<?php

/**
 * Récupérer la liste des logements
 * @return array Liste des logements
 */
function getAllLogements() : array {
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

    $liste_logements[2] = [
        "titre" => "Thabor",
        "prix" => 550000,
        "image" => "property-03.jpg",
        "date_creation" => new DateTime("2017-08-12"),
        "type" => "Maison",
        "taille" => 260,
        "nb_chambres" => 3
    ];
    
    return $liste_logements;
}
