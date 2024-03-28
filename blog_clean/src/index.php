

<?php
    session_start();
    
    //Chargement des paramètres du site
    require('config/param.inc.php');

    //connexion PDO
    require ("sql/pdoConnect.php");
    
    $pdo = pdoConnect();
    
    //Chargement des librairies
    require ("lib/pluralize.lib.php");
    require ("lib/flash.lib.php");
    
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
    <?php
        var_dump($_SESSION);
        $page = $_GET['page'];
        echo "Page actuelle : $page , Image : $layoutImage";
    ?>
</pre>