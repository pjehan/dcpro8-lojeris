<?php
require_once __DIR__ . "/../../../model/database.php";

$id = $_GET["id"];
$logement = getOneLogement($id);
$liste_types = getAllTypes();

require_once __DIR__ . "/../../layout/header.php";
?>

<h1>Modifier un logement</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Type</label>
        <select name="type_id" class="form-control">
            <?php foreach ($liste_types as $type) : ?>
                <?php $selected = ($logement["type_id"] == $type["id"]) ? "selected" : ""; ?>
                <option value="<?php echo $type["id"] ?>" <?php echo $selected; ?>>
                    <?php echo $type["libelle"] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" accept="image/*" class="form-control">
        <img src="../../../images/<?php echo $logement["image"] ?>" class="img-thumbnail">
    </div>
    <input type="hidden" name="id" value="<?php echo $logement["id"]; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>