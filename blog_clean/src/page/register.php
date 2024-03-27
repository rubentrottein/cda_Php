<?php
    $headerTitle = "Inscription";
    $headerSubheading = "Rejoignez-nous!";
    $layoutImage="login-bg.png";
    $layoutDescription = "Accedez a votre espace personnel";
    require "sql/user.sql.php";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['password'] = $hashPassword;
        $isRegistered = registerUser($_POST);
        echo "<div class=monitor>". var_dump($isRegistered) . "</div>";
        header('Location: index.php');
        exit;
    }
    require("template/register.tpl.php");