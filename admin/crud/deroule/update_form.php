<?php
require_once __DIR__ . "/../../../model/database.php";
require_once __DIR__ . "/../../layout/header.php";

$id = $_GET["id"];

$deroule = getDeroule($id);
$liste_evenements = getAllMariagesByUtilisateur($utilisateur["id"]);
?>

<h1>Modifier un déroulé</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $deroule["titre"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Heure</label>
        <input type="time" name="heure" value="<?php echo $deroule["heure"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Lieu</label>
        <input type="text" name="lieu" value="<?php echo $deroule["lieu"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $deroule["description"]; ?></textarea>
    </div>
    <div class="form-group">
        <label>Mariage</label>
        <select name="evenement_id" class="form-control">
            <?php foreach ($liste_evenements as $evenement) : ?>
                <?php $selected = ($evenement["id"] == $deroule["evenement_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $evenement["id"] ?>" <?php echo $selected; ?>>
                    <?php echo $evenement["lieu"] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $deroule["id"]; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>