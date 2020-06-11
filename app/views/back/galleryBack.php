<?php 
$galleryBack = $galleryBack->galleryBack();

?>
<main>
<!-- GESTION DE LA GALERIE D'IMAGES -->
    <h1 class="admin-title lato">Administration de la galerie</h1>
    <div class="anchor-center lato">
        <a href="indexBack.php?action=createImage">Ajouter des images</a>
    </div>
    <ul class="galleryBack center">
        <?php while($gallery = $galleryBack->fetch()) : ?>
        <li>
            <div>
                <img class="table-image" src="<?= $gallery['resized_image'] ?>">
                <h3 class="lato"><?= $gallery['name'] ?></h3>
            </div>
            <a onclick="return confirm('Voulez-vous vraiment supprimer cet élément ?')"
                href="indexBack.php?action=deleteImage&id=<?= $gallery['id'] ?>">Supprimer</a>
        </li>
        <?php endwhile ?>
    </ul>
</main>
</body>