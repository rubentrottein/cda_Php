<?php

    $headerTitle = "Bienvenue " . $_SESSION['user']['firstName'];
    $headerSubheading = "Informations de votre profil";
    $layoutImage="login-bg.png";
    $layoutDescription = "Accedez a votre espace personnel";
    require "sql/user.sql.php";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $message=true;
        updateUser($_POST);
        $_SESSION['user']['firstName']=$_POST['firstName'];
        $_SESSION['user']['lastName']=$_POST['lastName'];
        $_SESSION['user']['phone']=$_POST['phone'];
    }

    

    require("template/profile.tpl.php");
?>