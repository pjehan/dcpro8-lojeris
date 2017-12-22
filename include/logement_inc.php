<article class="property">
    <a href="logement.php?id=<?php echo $logement["id"]; ?>">
        <?php $image_path = (empty($logement["image"])) ? "placeholder.jpg" : $logement["image"]; ?>
        <img src="images/<?php echo $image_path; ?>" alt="<?php echo $logement["libelle"]; ?>">
        <footer class="overlay">
            <div class="info">
                <div class="tag <?php echo ($logement["prix"] < 250000) ? "reduc" : ""; ?>">
                    <?php echo $logement["prix"]; ?> €
                </div>
                <h3><?php echo $logement["libelle"]; ?></h3>
            </div>
            <div class="more-info">
                <div class="property-info">
                    <i class="fa fa-calendar"></i>
                    <?php echo $logement["date_creation_format"]; ?>
                </div>
                <div class="property-info">
                    <i class="fa fa-tag"></i>
                    <?php echo $logement["type"]; ?>
                </div>
                <div class="property-info">
                    <i class="fa fa-expand"></i>
                    <?php echo $logement["surface"]; ?>m2
                </div>
                <div class="property-info">
                    <i class="fa fa-bed"></i>
                    <?php echo $logement["nb_chambres"]; ?>
                </div>
            </div>
        </footer>
    </a>
</article>