<?php

//require("sql/post.sql.php");

function slug($string) {
    // Remplace les caractères spéciaux par des tirets
    $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);
    
    // Convertit la chaîne en minuscules et la divise en mots
    $string = strtolower(trim($string));
    $string = preg_replace('/\s+/', '-', $string);
    
    return $string;
}


if($_SERVER['REQUEST_METHOD'] === "POST"){
    $slug = slug($title);
    
    $isAdded = addPost($_POST, slug($_POST['title']), $_SESSION['user']['id']);
    if ($isAdded) {
        set_flash_message('blog', 'Article enregistré !','success');
    } else {
        set_flash_message('blog', 'Problème technique !','danger');
    }
    
    header('Location: index.php');
    exit;
}
