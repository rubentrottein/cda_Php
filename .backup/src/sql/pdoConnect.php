<?php

function pdoConnect(){
    global $options;
    try{
        $dbh = new PDO("mysql:host=". DB_HOST . ";dbname=".DB_NAME , DB_USER, DB_PASSWORD, $options);
        return $dbh;
    } catch(PDOException $e){
        die("Erreur Connexion DB :". $e->getMessage());
    }
}