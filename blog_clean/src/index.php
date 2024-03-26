

<?php
    
    //Chargement des paramètres du site
    require('config/param.inc.php');

    //connexion PDO
    require ("sql/pdoConnect.php");
    
    $pdo = pdoConnect();
    
    //Chargement des librairies
    require ("lib/pluralize.lib.php");
    
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
    <style>
        .monitor{
            position:fixed; 
            right:-55dvw;
            bottom: 1em;
            padding: 1em; 
            background: black;
            opacity: 0.2;
            color: dodgerblue; 
            border-left: 5px lime groove;
            transition: .5s;
        }
        .monitor:hover{
            opacity: 0.9;
            right: 0;
        }
    </style>
    <?php
        var_dump($_GET);
        $page = $_GET['page'];
        echo "Page actuelle : $page , Image : $layoutImage";
    ?>
</pre>