<?php
require_once "Models/CategoryModel.php";
require_once "Controllers/NavController.php";

class HomeController extends NavController{
    public function displayHomepage(){
        $this->displayNav();
        require "Views/home.php";
    }
}