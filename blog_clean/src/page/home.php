<?php
    $headerTitle = SITE_NAME;
    $headerSubheading = "Page d'accueil";
    $layoutImage = "home-bg1.png";
    require("sql/post.sql.php");
    $posts = getAllPosts();
    require("template/index.tpl.php");
?>

