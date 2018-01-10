<?php
require_once __DIR__ . "/../../../model/database.php";
require_once __DIR__ . "/../../layout/header.php";

$liste_deroules = getAllDeroulesByUtilisateur($utilisateur["id"]);
?>

<h1>Gestion des déroulés</h1>

<a href="insert_form.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<table class="table table-striped">
    <thead class="thead-inverse">
        <tr>
            <th>Mariage</th>
            <th>Titre</th>
            <th>Heure</th>
            <th>Lieu</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_deroules as $deroule) : ?>
        <tr>
            <td><?php echo $deroule["evenement_lieu"]; ?></td>
            <td><?php echo $deroule["titre"]; ?></td>
            <td><?php echo $deroule["heure"]; ?></td>
            <td><?php echo $deroule["lieu"]; ?></td>
            <td>
                <a href="delete_query.php?id=<?php echo $deroule["id"] ?>" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                    Supprimer
                </a>
                <a href="update_form.php?id=<?php echo $deroule["id"] ?>" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                    Modifier
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>