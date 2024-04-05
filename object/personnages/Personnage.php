<?php

abstract class Personnage{
    public $nom = "";
    public $age = "";
    public function __construct($nom, $age){
        $this->nom = $nom;
        $this->age = $age;
    }
}
class Victime extends Personnage{
   public function subirSort($magicien){
    echo "Pauvre de moi, ". parent::$nom ." Je suis victime d'un sort jeté par $magicien le batard\n";
   }
}
class Mage extends Personnage{
   public function ensorceler($victime){
    echo "Moi, " . parent::$nom . "J'ensorcèle $victime le minable\n";
   }
}

$m = new Mage("Jean", 54);
$v = new Victime("marc", 19);
$m->ensorceler($v->nom);
$v->subirSort($m->nom);