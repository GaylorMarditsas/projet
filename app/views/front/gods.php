<?php
    $gods = $godsFront->viewFront();   
?>
<main>
    <h1 class="first-title">Les dieux</h1>
    <!-- BARRE DE RECHERCHE -->
    <div class="search-gods lato">
        <form action="" method="get">
            <label for="search">Rechercher : </label>
            <input id="search" onKeyUp=searchbar() type="search" name="search" autocomplete="off">
        </form>
    </div>
    <div id="result" class="lato center">

    </div>
    <section class="gods-description lato">
        <!-- AFFICHAGE DES DIFFERENTS DIEUX -->
        <?php while($god = $gods->fetch()) : ?>
        <div class="gods center">
            <a title="<?= $god['name'] ?>" href="dieu-<?= $god['id'] ?>">
                <img src="<?= $god['image'] ?>" alt="<?= $god['name'] ?>">
            </a>
            <div>
                <a title="<?= $god['name'] ?>" href="dieu-<?= $god['id'] ?>">
                    <h2 class="name"><?= $god['name'] ?></h2>
                </a>
                <p><?= $god['description'] ?></p>
            </div>
        </div>

        <?php endwhile;?>

    </section>
</main>