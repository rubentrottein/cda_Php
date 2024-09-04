<?php
    $headerTitle = "Connexion";
    $headerSubheading = "Connectez vous!";
    $layoutImage="login-bg.png";
    $layoutDescription = "Accedez a votre espace personnel";
    require "sql/user.sql.php";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $user = userLogin($_POST['email']);
            if(password_verify($_POST['password'], $user['password'])){
                $_SESSION["user"]=$user;
                header("location: ?page=profile");
            } else {
                $status = true;
            }
    } else {
        echo "<div class='monitor'>Echec de la connexion</div>";
    }
    require("template/login.tpl.php");
?>