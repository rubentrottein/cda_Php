

<?php
    require('config/param.inc.php');
    require ("sql/pdoConnect.php");

    $pdo = pdoConnect();
    $page = DEFAULT_PAGE;
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }

    $url = "page/$page.php";
    //die($url);
    
    if(file_exists($url)){
        require($url);
    } else {
        require("page/404.php");
    }
?>
<pre class="monitor">
    <style>.monitor{position:fixed; right:0; padding: 1em; background: black; color: dodgerblue; bottom: 1em; border-left: 5px lime groove;}</style>
    <?php
        var_dump($_GET);
        $page = $_GET['page'];
        echo "Page actuelle : $page , Image : $layoutImage";
    ?>
</pre>