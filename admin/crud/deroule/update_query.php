<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$titre = $_POST["titre"];
$heure = $_POST["heure"];
$lieu = $_POST["lieu"];
$description = $_POST["description"];
$evenement_id = $_POST["evenement_id"];
$id = $_POST["id"];

updateDeroule($id, $titre, $heure, $lieu, $description, $evenement_id);

header('Location: index.php');