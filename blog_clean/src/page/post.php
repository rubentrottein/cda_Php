<?php

    require "sql/comment.sql.php";
    require "sql/post.sql.php";

    if(!isset($_GET['slug'])){
        die('Aucun article trouvé');
    }
    
    $post = getOnePost($_GET["slug"]);
    
    if ($post!= false){
        $layoutImage=$post["image"];
        $headerTitle = $post["title"];
        $headerSubheading = "Rédigé le " . $post['updatedAt'] . " par " . $post['firstName'] . " " .  $post['lastName'];   
        
        //Commentaires
        $comments = getCommentsByPost($post);

        require("template/post.tpl.php");
    } else {
        die("Contenu introuvable");
    }
    

?>