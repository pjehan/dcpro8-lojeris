<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$libelle = $_POST["libelle"];

updateType($id, $libelle);

header('Location: index.php');