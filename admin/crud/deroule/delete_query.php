<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_GET["id"];

deleteDeroule($id);

header("Location: index.php");