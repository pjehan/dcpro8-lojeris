<?php

/**
 * Récupérer la liste des logements
 * @return array Liste des logements
 */
function getAllLogements($limit = 999): array {
    global $connection;

    $query = "
            SELECT
                logement.id,
                CONCAT(ville.libelle, ' - ', quartier.libelle) AS libelle,
                logement.prix,
                logement.image,
                logement.surface,
                logement.nb_chambres,
                logement.date_creation,
                DATE_FORMAT(logement.date_creation, '%d/%m%/%Y') AS date_creation_format,
                quartier.libelle AS quartier,
                ville.libelle AS ville,
                type.libelle AS type
            FROM logement
            INNER JOIN type ON type.id = logement.type_id
            INNER JOIN quartier ON quartier.id = logement.quartier_id
            INNER JOIN ville ON ville.id = quartier.ville_id
            ORDER BY logement.date_creation DESC
            LIMIT :limit;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}
