<?php
    $layoutTitle = "Page d'accueil";
    $layoutDescription = "Un modeste blog sur les jeux vidéo";
    $headerTitle = SITE_NAME;
    require("sql/post.sql.php");
    $posts = getAllPosts();
    require("template/index.tpl.php");
?>

