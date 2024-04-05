<?php
class Animal{
    private $age;
    protected $nom;

    public function __construct($age, $nom){
        $this->age = $age;
        $this->nom = $nom;
    }

    public function marcher(){
        echo "Je marche\n";
    }
}

class Chat extends Animal{
    public $miauler;

    public function __construct($m, $age,$nom){
        $this->miauler = true;
        parent::__construct($age, $nom);
    }
}

class Chat extends Animal{
    public $aboyer;

    public function __construct($m, $age,$nom){
        $this->aboyer = true;
        parent::__construct($age, $nom);
    }
}