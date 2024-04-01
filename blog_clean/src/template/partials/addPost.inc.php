<?php $content= "<h3>Le futur du divertissement entre vos mains</h3>
        <p>
        Jouer à des centaines de jeux exceptionnels avec des amis sur console, PC et dans le cloud, avec de nouveaux jeux régulièrement ajoutés, pour avoir toujours une nouveauté à découvrir...
        </p>
        <p>
        <br><b>C'est possible avec le Xbox Game PASS<b>
        </p>
        <h4>Jouez dès le premier jour</h4> 
        <p>
        Jouez aux nouveaux titres Xbox Game Studios dès le jour de leur sortie, mais aussi aux franchises mythiques de Bethesda Softworks, aux jeux indépendants, à des superproductions et bien plus encore.
        </p>
        <h3>Jouer sur l’appareil de son choix</h3>
        <p>
            Téléchargez des jeux et jouez hors ligne sur votre console ou votre PC Windows ou Linux, votre Steam Deck ou votre ROG Ally, Legion Go, et autre console portable, ou diffusez des jeux en continu depuis le cloud sur votre téléphone, tablette, etc.
        </p>"
?>
<!-- Full screen modal -->
<div id="exampleModalFullscreen" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down container py-5">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Créer un nouvel article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-5">
                <form action="?page=home" method='POST'>
                    <div class="floating-form mx-auto">
                        <label for='title'>Titre de l'article</label>
                        <input type="text" name="title" id="title" value="Xbox Game Pass">
                    </div>
                    <div class="floating-form mx-auto">
                        <label for='image'>Image</label>
                        <input type="text" name="image" id="image" value="1711051837560599.jpg">
                    </div>
                    <div>
                        <label for="category">Catégorie</label>
                        <select name="id_category" id="category" class="form-select" aria-label="Default select example">
                            <?php 
                            foreach ($categories as $category) {?>
                                <option value="<?=$category['id']?>"><?=$category['name']?></option>
                            <?php } ?>
                        </select>
                        <div>
                            <label for="content">Texte du contenu</label>
                            <textarea type="text" name="content" id="content">
                                <?= $content;?>
                            </textarea>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-secondary" value="Ajouter l'article">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
</div>
