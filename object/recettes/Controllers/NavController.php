<?php
require_once "Models/CategoryModel.php";
abstract class NavController{
    public function displayNav(){
        include "Views/header.php";
    }
}