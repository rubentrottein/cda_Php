<?php
    //PDO Connexion
    class Connect{
        //Singleton
        private static $db=null;

        private function __construct(){
            try{
                self::$db = new PDO("mysql:host=localhost; dbname=cda_collection", "root", "root");
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public static function dbConnect(){
            if(self::$db != null){
                return self::$db;
            } else {
                new self();
                return self::$db;
            }
        }
    }