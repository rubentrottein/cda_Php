<?php
$layoutTitle = "Vidya 4 ya";
$layoutImage = "home-bg.jpg";
$layoutDescription = "";


define("DB_HOST", "Localhost:3306");
define("DB_USER", "root");
define("DB_NAME", "cda");
define("DB_PASSWORD", "");

define('DEFAULT_PAGE', 'home');


$options= array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);