<section id="newRecipe">
    <h2>Nouvelle recette</h2>
    <!-- l'enctype permet la gestion des input de type file ou hybrides en général -->
        <form action="?url=newRecipe" method="POST" enctype="multipart/form-data">

            <label for="title">Titre</label>
            <input type="text" name="title" id="title" value="test@test.com">
            
            <label for="desc">Description</label>
            <input type="text" name="description" id="desc" value="test@test.com">
            
            <label for="ingredients">Ingredients</label>
            <input type="text" name="ingredients" id="ingredients" value="test@test.com">
            <button id="addIngredient">Ajouter un ingrédient</button>

            <label for="ingredientsList">Liste des ingredients</label>
            <input type="text" name="ingredientList" id="ingredientList" value="test@test.com" hidden>
            <p id="displayList"></p>
            
            <label for="recipe">Recette</label>
            <textarea name="recipe" id="" cols="30" rows="10" placeHolder="Ecrivez votre recette"></textarea>
            
            <label for="image">image</label>
            <input type="file" name="image" id="image">

            <label for="category">Catégorie</label>
            <select name="category" id="category">
                <?php foreach ($categories as $category) {?>
                    <option value="<?= $category['id_categorie']; ?>"><?= $category['nom']; ?></option>";
                <?php }?>
            </select>

            <input type="submit" name="add_recipe" value="send">
        </form>
    <script defer>
        document.getElementById("addIngredient").addEventListener("click", (e)=>{
            e.preventDefault();
            let item = document.getElementById("ingredient").value;
            let list = document.getElementById("ingredientsList");
            let displayList = document.getElementById("displayList");
            if(list = ""){
                list.value = item;
                displayList.innerHTML = item;
            } else {
                list.value += "," + item;
                displayList.innerHTML = "," + item;
            }
        })
    </script>
</section>
<?php require "Views/footer.php"?>