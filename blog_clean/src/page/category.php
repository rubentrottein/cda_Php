<?php 


$layoutTitle = "Articles par Catégories";
$layoutImage = "category-bg.png";
$headerSubheading = "Articles par Catégories";

require "sql/post.sql.php";
$posts = getPostByCategory($_GET["slug"]);

foreach ($categories as $category){
    if ($category['slug'] === $_GET['slug']){
        $categoryName = $category['name'];
    }
}

$headerTitle = $categoryName;

require "template/category.tpl.php";