<?php
    $headerTitle = "Connexion";
    $headerSubheading = "Connectez vous!";
    $layoutImage="login-bg.png";
    $layoutDescription = "Accedez a votre espace personnel";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        //var_dump($_POST);
        
    } else {
        echo "Connexion";
    }
    require("template/login.tpl.php");
?>