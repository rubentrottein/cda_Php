<?php
    require("sql/post.sql.php");

    $layoutImage = "home-bg1.png";
    $layoutDescription = "Page d'accueil du site";
    
    $headerTitle = SITE_NAME;
    $headerSubheading = "Page d'accueil";
    

    /* Pagination
    if(isset($_GET['currentPage'])){
        $currentPage = $_GET['currentPage'];
    } else {
        $currentPage = 1;
    }
    $posts = getAllPosts($currentPage);
    $nbPages = ceil(nbPosts() / NB_PAGINATE);
    
    */
    $posts = getAllPosts();

    require "addpost.php";

    require("template/index.tpl.php");
?>

