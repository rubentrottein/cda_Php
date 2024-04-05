<h2>Nouvelle recette</h2>
<!-- l'enctype permet la gestion des input de type file ou hybrides en général -->
    <form action="?url=addRecipe" method="POST" enctype="multipart/form-data">

        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="test@test.com">
        
        <label for="desc">Description</label>
        <input type="text" name="description" id="desc" value="test@test.com">
        
        <label for="ingredients">Ingredients</label>
        <input type="text" name="ingredients" id="ingredients" value="test@test.com">
        
        <label for="ingredientsList">Liste des ingredients</label>
        <input type="text" name="ingredientList" id="ingredientList" value="test@test.com">
        
        <label for="recipe">Recette</label>
        <textarea name="recipe" id="" cols="30" rows="10" placeHolder="Ecrivez votre recette"></textarea>
        
        <label for="image">image</label>
        <input type="file" name="image" id="image">

        <label for="category">Catégorie</label>
        <select name="category" id="category">
            <?php foreach ($categories as $category) {
                echo "<option value=" . category['id_categorie'] . ">" . $category['nom'] . "</option>";
            }?>
        </select>

        <input type="submit" name="add_recipe" value="send">
    </form>
    <script defer>
        document.getElementById("addIngredient").addEventListener("click", (e)=>{
            e.preventDefault();
            let item = document.getElementById("ingredient").value;
            let list = document.getElementById("ingredientsList");
            if(list = ""){
                list.value = item;
            } else {
                list.value += "," + item;
            }
        })
    </script>
<?php require "Views/footer.php"?>