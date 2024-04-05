<?php
//Route par défaut
define('DEFAULT_PAGE', 'home');

//Valeurs par défaut du Layout
$layoutTitle = "La Tech dans les étoiles";
$layoutImage = "home-bg.jpg";
$layoutDescription = "";

$headerTitle = "";
$headerSubheading = "";

//Config BDD MySQL
define("DB_HOST", "localhost:3306");
define("DB_USER", "root");

/*MAMP to WAMP switch
    /** WAMP */     define("DB_NAME", "cda");define("DB_PASSWORD", "");
    /** MAMP *   define("DB_NAME", "cda");define("DB_PASSWORD", "root");
*/

$options= array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
);

// Pagination par défaut
define('NB_PAGINATE', 2);
define('SITE_NAME', "La Tech dans les étoiles");


$today = date("Y-m-d H:i:s");