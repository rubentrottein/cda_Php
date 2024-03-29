<?php

    $headerTitle = SITE_NAME;
    $headerSubheading = "Page d'accueil";
    $layoutImage = "home-bg1.png";

    
    require("sql/post.sql.php");

    if(isset($_GET['currentPage'])){
        $currentPage = $_GET['currentPage'];
    } else {
        $currentPage = 1;
    }
    $posts = getAllPosts($currentPage);
    
    $nb = nbPosts();
    $nbPosts = ceil($nb / NB_PAGINATE);

    require("template/index.tpl.php");
?>

