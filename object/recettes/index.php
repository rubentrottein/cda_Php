<?php
session_start();
require_once "Controllers/HomeController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/RecipeController.php";
// Récuperer l'URL demandé par l'utilisateur OU => home
$url = isset(($_GET['url'])) ? $_GET['url'] : 'home';

switch($url){
    case 'home':
        $controller = new HomeController();
        $controller -> displayHomepage();
    break;
    case 'inscription':
        $controller = new UserController();
        $controller -> registerForm();
    break;
    case 'register':
        $controller = new UserController();
        $controller -> register();
    break;
    case 'connection':
        $controller = new UserController();
        $controller -> loginForm();
    break;
    case 'login':
        $controller = new UserController();
        $controller -> login();
    break;
    case 'addRecipe':
        $controller = new RecipeController();
        $controller -> addRecipeForm();
    break;
    default :
        require_once "Views/404.php";
}