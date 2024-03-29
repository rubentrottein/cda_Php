<?php

require("sql/post.sql.php");
require("sql/category.sql.php");

Granted();

    function slug($string) {
        // Remplace les caractères spéciaux par des tirets
        $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);
        
        // Convertit la chaîne en minuscules et la divise en mots
        $string = strtolower(trim($string));
        $string = preg_replace('/\s+/', '-', $string);
        
        return $string;
    }
    $slug = slug($title);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $today = date("Y-m-d H:i:s");
        
        $isAdded =  addPost($_POST, slug($_POST['title']), $_SESSION['id'] );
        
        if($isAdded){
            set_flash_message("Merci pour votre commentaire uwu!");
        } else {
            set_flash_message("Souci technique...");
        }
        
        header("Location: ?page=post&slug=".$_GET['slug']."#comments");
        exit;
    }
