<?php
//Route par défaut
define('DEFAULT_PAGE', 'home');

//Valeurs par défaut du Layout
$layoutTitle = "Vidya 4 ya";
$layoutImage = "home-bg.jpg";
$layoutDescription = "";

//Config BDD MySQL
define("DB_HOST", "localhost:3306");
define("DB_USER", "root");
define("DB_NAME", "cda");
define("DB_PASSWORD", "");



$options= array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
);

// Pagination par défaut
define('NB_PAGINATE', 10);
define('SITE_NAME', "La tech dans les étoiles");