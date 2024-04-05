<?php

abstract class Forme(){
    abstract function calculerAire(){
        echo "L'aire a été calculée";
    }
    abstract function calculerPerimetre(){
        echo "Le périmètre a été calculé";
    }
}


class Cercle extends Forme{
    $rayon = 0;
}

class Rectangle extends Forme{
    $longueur = 0;
    $largeur = 0;
}

class Triangle extends Forme{
    public $cote1;
    public $cote2;
    public $cote3;

    public function __construct($c1,$c2,$c3){
    }
    
    public function calculerPerimetre(){
        return $this->cote1 + $this->cote2 + $this->cote3;
    }
}


function start(){
    
echo Bienvenue dans le gestionnaire de formes géométriques !;

echo 1. Créer un cercle;
echo 2. Créer un rectangle;
echo 3. Créer un triangle;
echo 4. Afficher les informations des formes;
echo 5. Quitter;

echo Choisissez une option : 1;
}
?>