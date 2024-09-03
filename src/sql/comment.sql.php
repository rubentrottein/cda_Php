<?php

function getCommentsByPost($post){
    global $pdo;
    try {
        $query = "SELECT firstName, lastName, content, createdAt 
        FROM comments A
        INNER JOIN users B ON A.id_users = B.id 
        WHERE A.id_posts = :id 
        ORDER by createdAt DESC";
        $cursor = $pdo->prepare($query);
        $cursor -> bindValue(":id", $post['id'], PDO::PARAM_STR);
        $cursor->execute();
        $comments = $cursor->fetchAll();
        return $comments;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}


function addComment($id_users, $id_posts, $content, $createdAt){
    global $pdo;
    try {
        $query = 
        "INSERT INTO comments
            (content, createdAt, id_users, id_posts)
        VALUES
            (:content, :createdAt, :id_users, :id_posts)";
        $cursor = $pdo->prepare($query);
            $cursor->bindParam(":content", $content,   PDO::PARAM_STR);
            $cursor->bindParam(":createdAt", $createdAt,   PDO::PARAM_STR);
            $cursor->bindParam(":id_users", $id_users,   PDO::PARAM_INT);
            $cursor->bindParam(":id_posts", $id_posts,   PDO::PARAM_INT);
        $cursor->execute();
        return true;
    } catch (PDOException $e){
        set_flash_message("Erreur d'envoi du commentaire : $e", "danger");
        return false;
    }
}