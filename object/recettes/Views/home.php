<section id="recettes">
    <?php foreach ($recettes as $recette) { ?>
        <figure>
            <img src="public/images/<?= $recette['image'] ?>" />
            <figcaption>
                <h3><?= $recette['titre'] ?></h3>
                <i>Par <?= $recette['auteur'] ?></i>
                <p class="lead"><?= $recette['description'] ?></p>
                <b><?= $recette['categorie'] ?></b>
                <p class="ingredients"><?= $recette['liste_ingredients'] ?>
                <p><?= $recette['nbr_like'] ?> Likes</p>
                <a href="?url=like">❤<?= $recette['nbr_like'] ?></a>
            </figcaption>
        </figure>
    <?php } ?>
</section>
<?php require "Views/footer.php" ?>	