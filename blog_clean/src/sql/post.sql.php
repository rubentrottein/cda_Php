<?php

function getAllPosts(){
    global $pdo;
    try {
        $query = "SELECT image, updatedAt, title, A.slug AS postSlug, LEFT(A.content, 150)  AS content, name, B.slug AS categorySlug, lastName, firstName, COUNT(D.id) AS nbComments
        FROM posts A
        INNER JOIN categories B ON A.id_categories = B.id
        INNER JOIN users C ON id_users = C.id
        LEFT JOIN comments D ON D.id_posts = A.id
        WHERE active = TRUE
        GROUP BY A.id
        ORDER BY updatedAt DESC
        LIMIT ";
        $cursor = $pdo->query($query . NB_PAGINATE);
        $posts = $cursor->fetchAll();
        return $posts;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}

function getOnePost($slug){
    global $pdo;
    try {
        $query = "SELECT A.id, image, createdAt, updatedAt, title, A.content, name, B.slug, lastName, firstName, email
        FROM posts A
        INNER JOIN categories B ON A.id_categories = B.id
        INNER JOIN users C ON id_users = C.id
        WHERE active = TRUE
        AND A.slug = :slug";
        $cursor = $pdo->prepare($query);
        $cursor -> bindValue(":slug", $slug, PDO::PARAM_STR);
        $cursor->execute();

        $post = $cursor->fetch();
        return $post;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}



function addPost($post, $slug, $id_users){
    global $pdo;
    try {
        $query = 
        "INSERT INTO comments
            (title, slug, content, createdAt, updatedAt, image, id_users, id_categories)
        VALUES
            (:title, :slug, :content, $today,$today, :image, $id_users, :id_categories)";
        die($query);
        $cursor = $pdo->prepare($query);
            $cursor->bindParam(":title", $post['title'],   PDO::PARAM_STR);
            $cursor->bindParam(":content", $post['content'],   PDO::PARAM_STR);
            $cursor->bindParam(":image", $post['image'],   PDO::PARAM_STR);
            $cursor->bindParam(":slug", $slug, PDO::PARAM_STR);
            $cursor->bindParam(":id_categories", $post['id_categories'],   PDO::PARAM_INT);
        $cursor->execute();
        return TRUE;
    } catch (PDOException $e){
        set_flash_message("Erreur dans l'ajout d'un article : $e", "info");
        return FALSE;
    }
}
