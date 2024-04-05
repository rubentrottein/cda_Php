<?php
require_once "Models/CategoryModel.php";
abstract class NavController{
    public function displayNav(){
        $categories = CategoryModel::getCategories();
        include "Views/header.php";
    }
}