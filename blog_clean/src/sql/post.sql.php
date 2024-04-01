<?php
    

    function nbPosts(){
        $query = "SELECT COUNT(*) AS nbPosts FROM post WHERE active = TRUE";
        $cursor = $pdo->query($query);
        $nb = $cursor->fetch();
        
        return $nb['nbPosts'];
    }

    function getAllPosts($currentPage = 1){
        global $pdo;
        
        $offset = ($currentPage - 1) * NB_PAGINATE;

        try {
            $query = 
            "SELECT image, updatedAt, title, A.slug AS postSlug, LEFT(A.content, 150)  AS content, name, B.slug AS categorySlug, lastName, firstName, COUNT(D.id) AS nbComments
            FROM posts A
            INNER JOIN categories B ON A.id_categories = B.id
            INNER JOIN users C ON id_users = C.id
            LEFT JOIN comments D ON D.id_posts = A.id
            WHERE active = TRUE
            GROUP BY A.id
            ORDER BY updatedAt DESC
            LIMIT " . $offset . "," . NB_PAGINATE;
            $cursor = $pdo->query($query);
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

    function getPostByCategory($slug){
        global $pdo;

        try {
            $query = 
            "SELECT 
                image, updatedAt, title, A.slug AS postSlug, 
                LEFT(A.content, 150) AS content,
                COUNT(D.id) AS nbComments
            FROM posts A
            INNER JOIN categories B ON A.id_categories = B.id
            LEFT JOIN comments D ON D.id_posts = A.id
            WHERE active = TRUE
            AND B.slug = :slug
            GROUP BY A.id ORDER BY updatedAt DESC; 
            ";

            $cursor = $pdo->prepare($query);
                $cursor -> bindValue(":slug", $slug, PDO::PARAM_STR);
                $cursor->execute();
            $posts = $cursor->fetchAll();
            
            return $posts;
        } catch (PDOException $e) {
            die("Erreur SQL : " . $e->getMessage());
        }
    }

    function addPost($post, $slug, $id_user){
        global $pdo;
        global $today;
                /*
        var_dump($post);
        *
        var_dump($query);
        echo "
        <p>title :". $post['title']. "</p>
        <p>slug :". $slug . "</p>
        <p>image :".$post['image']. "</p>
        <p>active : TRUE</p>
        <p>createdAt :".$today. "</p>
        <p>updatedAt :".$today. "</p>
        <p>id_user :".$id_user. "</p>
        <p>category :". $post['id_category']. "</p>
        ";
        exit;
        /** */
        try {
            $query = 
                "INSERT INTO posts
                    (title, slug, content, createdAt, updatedAt, image, active, id_users, id_categories)
                VALUES
                    (:title, :slug, :content, :today, :today, :image, TRUE, :id_user, :id_categories)";
        
            $cursor = $pdo->prepare($query);
            $cursor->bindParam(":title", $post['title'], PDO::PARAM_STR);
            $cursor->bindParam(":slug", $slug, PDO::PARAM_STR);
            $cursor->bindParam(":content", $post['content'], PDO::PARAM_STR);
            $cursor->bindParam(":image", $post['image'], PDO::PARAM_STR);
            $cursor->bindParam(":id_categories", $post['id_category'], PDO::PARAM_INT);
            $cursor->bindParam(":today", $today, PDO::PARAM_STR);
            $cursor->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        
            $cursor->execute();
        
            set_flash_message("Ajout du nouvel article : " . $post['title'], "success");
            return TRUE;
        
        } catch (PDOException $e){
            die("<pre>Erreur dans l'ajout d'un article :" . $e->getMessage() . "</pre>");
            return FALSE;
        }
    }