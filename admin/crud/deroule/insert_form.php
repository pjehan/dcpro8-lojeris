<?php
require_once __DIR__ . "/../../../model/database.php";
require_once __DIR__ . "/../../layout/header.php";
$liste_evenements = getAllMariagesByUtilisateur($utilisateur["id"]);
?>

<h1>Ajouter un déroulé</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control">
    </div>
    <div class="form-group">
        <label>Heure</label>
        <input type="time" name="heure" class="form-control">
    </div>
    <div class="form-group">
        <label>Lieu</label>
        <input type="text" name="lieu" class="form-control">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Mariage</label>
        <select name="evenement_id" class="form-control">
            <?php foreach ($liste_evenements as $evenement) : ?>
                <option value="<?php echo $evenement["id"] ?>">
                    <?php echo $evenement["lieu"] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>