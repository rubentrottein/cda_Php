<?php
    require_once "core/Connect.php";
    class CategoryModel{
        public static function getCategories(){
            $bdd = Connect::dbConnect();
            $request = $bdd->prepare("SELECT id_categorie, nom FROM categories");
            $request->execute();
            $categories = $request->fetchAll();
            return $categories;
        } 
    }