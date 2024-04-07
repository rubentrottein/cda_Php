<?php
require_once "Controllers/NavController.php";
require_once "Models/CategoryModel.php";
require_once "Models/RecipeModel.php";
class RecipeController extends NavController{
    //Affichage du formulaire
    public function recipeForm(){
        $this->displayNav();
        $categories = CategoryModel::getCategories();
        include "Views/recipe.php";
    }

    public function addRecipe(){
        if(isset($_POST['addRecipe'])){
            $tmp = $_FILES['image']['tmp_name'];
            $type = explode('/', $_FILES['image']['type']);
            $type = $type[1];
            $name = date("YmdHis");
            $nomImage = $name.".".$type;
            
            $fileDestination = $_SERVER["DOCUMENT_ROOT"]."/cda_Php/object/recettes/public/images/".$nomImage;
            // verification de la sauvegarde de l'image
            $debug = [$_POST['title'], $_POST['description'],$_POST['ingredient'], $_SESSION['user']['id_user'], $nomImage, $_POST['category']];
            if(move_uploaded_file($tmp, $fileDestination)){
                if(RecipeModel::addRecipe($_POST['title'], $_POST['description'],$_POST['ingredientsList'], $_SESSION['user']['id_user'], $nomImage, $_POST['category'])){
                    echo "OK";
                } else {
                    echo "Erreur";
                }
            }
        }
    }
    public function displayRecipe(){
        $recettes = RecipeModel::recipeList();
        return $recettes;
    }
}