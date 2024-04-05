<?php
require "Console.php";
class Calculatrice{
    
    private $nombreA = 0;
    private $nombreB = 0;
    private $operation = 0;
    private $continue = 0;

    public function start(){
        Console::open();
        echo "\nBienvenue dans la calculatrice simple\n";
        echo "\nentrez deux nombres: \n";
        echo "\nPremier Nombre: \n";
        $this->setNombreA(Console::readLine());
        echo "\nSecond Nombre: \n";
        $this->setNombreB(Console::readLine());
        
        echo "\nQuelle opération souhaitez-vous effectuer?\n1. Addition\n2. Soustraction\n3. Multiplication\n4. Division\n";
        $this->setOperation(Console::readLine());

        echo $this->calculate($this->getNombreA() ,$this->getNombreB() , $this->getOperation());
        
        echo "\nVoulez vous effectuer une autre opération? (o / n)\n";
        
        $this->setContinue(Console::readLine());

        if($this->getContinue() == "o"){
            $this->start();
        } else {
            echo "\nMerci d'avoir utilisé notre calculatrice. Au revoir !\n";
            Console::close();
        }

    }

    
    public function calculate($nombreA, $nombreB, $operation) {
        $resultat = 0;
        if($operation==1){
            $this->setOperation("Addition"); 
            $resultat = $nombreA + $nombreB;
        } else if($operation==2){
            $this->setOperation("Soustraction"); 
            $resultat = $nombreA - $nombreB;
        } else if($operation==3){
            $this->setOperation("Multiplication"); 
            $resultat = $nombreA * $nombreB;
        } else if($operation==4){
            $this->setOperation("Division"); 
            
            $resultat = $nombreA / $nombreB;
        } return "\nRésultat de la ". $this->getOperation() .  " de $nombreA et $nombreB = $resultat";
    }

    //Getters & Setters
    public function setNombreA($a){
        $this->nombreA = $a;
    }
    public function getNombreA(){
        return $this->nombreA;   
    }
    public function setNombreB($b){
        $this->nombreB = $b;
    }
    public function getNombreB(){
        return $this->nombreB;   
    }
    public function setOperation($o){
        $this->operation = $o;
    }
    public function getOperation(){
        return $this->operation;   
    }
    public function setContinue($o){
        $this->continue = $o;
    }
    public function getContinue(){
        return $this->continue;
    }
}

$calc = new Calculatrice();

$calc->start();