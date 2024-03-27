<?php

    $headerTitle = "Bienvenue " . $_SESSION['user']['firstName'];
    $headerSubheading = "Informations de votre profil";
    $layoutImage="login-bg.png";
    $layoutDescription = "Accedez a votre espace personnel";
    require "sql/user.sql.php";
    $user=$_SESSION['user'];
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        updateUser($_POST);
        $user=$_POST;
        echo "<div class='monitor'>Modifications prises en compte!</div>";
        $update = false;
    } else {
        echo "<div class='monitor'>Echec de la mise à jour du profil</div>";
    }

    require("template/profile.tpl.php");
?>