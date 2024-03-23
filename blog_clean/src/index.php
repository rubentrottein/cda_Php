<style>.monitor{position:fixed; right:0; padding: 1em; background: black; color: lime; bottom: 1em; border-left: 5px lime groove;}</style>

<?php
    require('config/param.inc.php');
    
    $page = DEFAULT_PAGE;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    
    checkUrl("page/$page.php");
    
    function checkUrl($url){
        //Scope des variables limité dans la fonction
        global $layoutImage;
        if(file_exists($url)){
            require($url);
        } else {
            require("page/404.php");
        }
    }
?>

<pre class="monitor">
    <?php
        var_dump($_GET);
        $page = $_GET['page'];
        echo $page;
        echo $layoutImage;
    ?>
</pre>