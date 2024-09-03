<?php
    $headerTitle = "Inscription";
    $headerSubheading = "Rejoignez-nous!";
    $layoutImage="login-bg.png";
    $layoutDescription = "Inscription au site";
    require "sql/user.sql.php";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['password'] = $hashPassword;
        $message = true;
        $isRegistered = registerUser($_POST);
        
        header('Location: index.php');
        exit;
    }

    require("template/register.tpl.php");