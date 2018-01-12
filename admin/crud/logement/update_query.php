<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$type_id = $_POST["type_id"];

$image = $_FILES["image"]["name"];
$image_file = $_FILES["image"]["tmp_name"];

if (empty($image)) {
    $logement = getOneLogement($id);
    $image = $logement["image"];
} else {
    move_uploaded_file($image_file, "../../../images/" . $image);
}

updateLogement($id, $image, $type_id);

header('Location: index.php');