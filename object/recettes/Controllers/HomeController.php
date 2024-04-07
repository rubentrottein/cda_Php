<?php
require_once "Controllers/RecipeController.php";

class HomeController extends NavController{
    public function displayHomepage(){
        $this->displayNav();
        $controller = new RecipeController();
        $recettes = $controller->displayRecipe();
        require "Views/home.php";
    }
}