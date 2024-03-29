<?php
    session_start();
    
    //Chargement des paramètres du site
    require "config/param.inc.php";

    //connexion PDO
    require "sql/pdoConnect.php";
    
    $pdo = pdoConnect();
    
    //Chargement des librairies
    require "lib/pluralize.lib.php";
    require "lib/flash.lib.php";
    
    require "sql/category.sql.php";
    $categories = getAllCategories();
    
    //Router
    $page = DEFAULT_PAGE;
    
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    
    $url = "page/$page.php";
    
    if(file_exists($url)){
        require($url);
    } else {
        require("page/404.php");
    }
    
?>
<!-- Moniteur d'affichage des erreurs -->
<pre class="monitor">
    <h3>Session</h3>
    <?php
        var_dump($_SESSION);
    ?>
    <h3>Post</h3>
    <?php
        var_dump($_POST);
    ?>
</pre>