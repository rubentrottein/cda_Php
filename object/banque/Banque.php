<?php
class Banque{
    public static $listeComptes = [];

    public function ajouterCompte($compte){
        //ajouter compte dans la liste
        self::$listcompte[] = $compte;
    }
    public function rechercherCompte($numeroCompte){
        foreach ($listCompte as $compte) {
            if($compte->numero == $numeroCompte){
                return $compte;
            }
        }

    }
}
$compteB = new CompteBancaire("1234", "Michael", "Scott", 2273);