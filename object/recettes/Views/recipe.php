<section id="newRecipe">
    <h2>Nouvelle recette</h2>
    <!-- l'enctype permet la gestion des input de type file ou hybrides en général -->
        <form action="?url=newRecipe" method="get" enctype="multipart/form-data">

            <label for="title">Titre</label>
            <input type="text" name="title" id="title" value="Jambon beurre">
            
            <label for="ingredient">Ingredients</label>
            <input type="text" id="ingredient">
            <button id="addIngredient">Ajouter un ingrédient</button>

            <label for="ingredientsList">Liste des ingredients</label>
            <input type="text" name="ingredient" id="ingredientsList" hidden>
            <p id="displayList"></p>
            
            <label for="recipe">Recette</label>
            <textarea name="description" id="recipe" cols="30" rows="10" placeHolder="Ecrivez votre recette" value="Mettez tout dans le pain"></textarea>
            
            <label for="image">image</label>
            <input type="file" name="image" id="image">

            <label for="category">Catégorie</label>
            <select name="category" id="category">
                <?php foreach ($categories as $category) {?>
                    <option value="<?= $category['id_categorie']; ?>"><?= $category['nom']; ?></option>";
                <?php }?>
            </select>

            <button type="submit" name="addRecipe"> Ajouter la recette </button>
        </form>
    <script defer>
        document.getElementById("addIngredient").addEventListener("click", (e)=>{
            e.preventDefault();
            let item = document.getElementById("ingredient").value;
            let list = document.getElementById("ingredientsList");
            let displayList = document.getElementById("displayList");
            if(list.value === ""){
                list.value = item;
                displayList.innerHTML = item;
            } else {
                list.value += "," + item;
                displayList.innerHTML += "," + item;
            }
            item.value = "";
        })
    </script>
</section>
<?php require "Views/footer.php"?>