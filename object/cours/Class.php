<?php
require "Console.php";
//Déclaration de classe
class Person {
    //Propriétés
    private $nom = "";
    private $age = 0;

    // Constructeur
    public function __construct($n = "", $a = 0) {
        $this->nom = $n;
        $this->age = $a;
    }

    // Méthodes
    public function apprendre($savoir) {
        echo "$this->nom s'instruit sur $savoir";
        return "\nAppris : " . $savoir;
    }

    public function interagir($person) {
        echo "\nHello! " . $person->getNom;
    }
    public function getNom(){
        return $this->nom;   
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getAge(){
        
        return $this->age;   
    }
    public function setAge(){

        $this->age = $age;
    }
}

// Instancier des objets
$first = new Person("Jeanjean", 31);
$second = new Person("Micheline", 61);

// Accéder à la propriété nom de l'objet $first
//echo $first->nom;
echo $first->getNom;

// Appel à la méthode interagir
$second->interagir($first);

// exemple d'utilisation
Console::open();
echo "entrez une valeur: ";
$str = Console::readLine();
echo "ok";
Console::close();
?>
