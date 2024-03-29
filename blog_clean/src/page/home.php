<?php
    $headerTitle = SITE_NAME;
    $headerSubheading = "Page d'accueil";
    $layoutImage = "home-bg1.png";

    require("sql/post.sql.php");
    $posts = getAllPosts();
    require("template/index.tpl.php");
    
    function slug($string) {
        // Remplace les caractères spéciaux par des tirets
        $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);
        
        // Convertit la chaîne en minuscules et la divise en mots
        $string = strtolower(trim($string));
        $string = preg_replace('/\s+/', '-', $string);
        
        return $string;
    }

    require("template/partials/addPost.inc.php");
    require("sql/category.sql.php");

    $slug = slug($title);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $today = date("Y-m-d H:i:s");
        
        $isAdded =  addPost($_POST, slug($_POST['title']), $_SESSION['id'] );
            if($isAdded){
                set_flash_message("Merci pour votre commentaire uwu!");
            } else {
                set_flash_message("Souci technique...");
            }
            header("Location: ?page=post&slug=".$_GET['slug']."#comments");
            exit;
    //addPost($title, $_GET['slug'],  $content, date("Y-m-d H:i:s"), date("Y-m-d H:i:s"), $image, $_SESSION['user']["id"], $id_categories)
?>

