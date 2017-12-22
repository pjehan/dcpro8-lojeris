<?php
require_once 'model/database.php';

$id = $_GET["id"];
$logement = getLogement($id);

require_once 'layout/header.php';
?>

<section class="container">
    <h1></h1>
    
</section>

<?php require_once 'layout/footer.php'; ?>