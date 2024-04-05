<?php
require_once "Controllers/NavController.php";
require_once "Models/CategoryModel.php";
require_once "Models/RecipeModel.php";
class RecipeController extends NavController{
    //Affichage du formulaire
    public function recipeForm(){
        $this->displayNav();
        $categories = NavController->Category();
        include "Views/recipe.php";
    }

    public function add(){
        if(isset($_POST['add_recipe'])){
            print_r($_FILES['image']);
            //$name = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $type = explode('/', $_FILES['image']['type']);
            $name = date("YmdHis");
            $nomImage = $name.".".$type[1];

            $fileDestination = $_SERVER["DOCUMENT_ROOT"]."/recette/imgs/$name. '.' . $type";
            // verification de la sauvegarde de l'image
            if(move_uploaded_file($tmp, $fileDestination)){
                if(RecipeModel::addRecipe($_POST['title'], $_POST['description'], $_POST['ingredientsList'], $_SESSION['user']['id_user'], $nomImage, $categorie)){
                    echo "OK";
                } else {
                    echo "Erreur";
                }
            }
        }
    }
}