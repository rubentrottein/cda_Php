<?php
class Banque{
    public static $listCompte = [];

    public static function ajouterCompte($compte){
        // ajouter le compte dans la liste
        self::$listCompte[] = $compte;
    }

    public static function rechercherCompte($numeroCompte){
        // retourner le compte
        // for($i = 0; $i < count(self::$listCompte); $i++){
        //     if(self::$listCompte[$i]->numero == $numeroCompte){
        //         return self::$listCompte[$i];
        //     }
        // }

        foreach(self::$listCompte as $compte){
            if($compte->numeroCompte == $numeroCompte){
                return $compte;
            }
        }
        return false;
    }
}