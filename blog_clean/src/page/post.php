<?php

    require "sql/comment.sql.php";
    require "sql/post.sql.php";
    require("sql/category.sql.php"); 
    
    if(!isset($_GET['slug'])){
        header("location : ?page=404");
    }

    
    $post = getOnePost($_GET["slug"]);
    
    
    if ($post != false){
        $layoutImage=$post["image"];
        $headerTitle = $post["title"];
        $headerSubheading = "Rédigé le " . $post['updatedAt'] . " par " . $post['firstName'] . " " .  $post['lastName'];   
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
                $isCommented = addComment($_SESSION['user']['id'], $post['id'],$_POST['newComment'], $today);
                if($isCommented){
                    set_flash_message("Merci pour votre commentaire uwu!");
                } else {
                    set_flash_message("Souci technique...");
                }
                header("Location: ?page=post&slug=".$_GET['slug']."#comments");
                exit;
        }
        
        //Commentaires
        $comments = getCommentsByPost($post);
        
        require("template/post.tpl.php");
    } else {
        die("Contenu introuvable");
    }
    
?>