<?php
function pdoConnect(){
    try{
        global $options;
        $dbh = new PDO("mysql:host=". DB_HOST . ";dbname=".DB_NAME , DB_USER, DB_PASSWORD, $options);
        
    } catch(PDOException $e){
        die("Erreur Connexion DB :". $e->getMessage());
    }
}