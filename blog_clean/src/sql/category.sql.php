<?php
function getAllCategories(){
    global $pdo;
    try{

        $query= "SELECT id, name FROM categories ORDER BY name ASC";
        $cursor = $pdo-> query($query);
        $categories = $cursor->fetchAll();
        
        return $categories;
    
    } catch (PDOException $e){
        echo "erreur SQL : " . $e;
    }
}
$categories = getAllCategories();