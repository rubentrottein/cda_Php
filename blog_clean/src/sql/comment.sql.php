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