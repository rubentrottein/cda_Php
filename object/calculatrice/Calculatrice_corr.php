<?php
require "Console.php";
class Calc{
    public function addition($a, $b){
        return $a+$b;
    }
    public function multiplication($a, $b){
        return $a*$b;
    }
    public function soustraction($a, $b){
        return $a-$b;
    }
    public function division($a, $b){
        if($b==0){return "ATTENTION!!! Division par Zéro!!";}
        return $a/$b;
    }
}

$c = new Calc();
Console::open();
do{
    echo "\nBienvenue dans la calculatrice simple\n";
    echo "\nentrez deux nombres: \n";
    echo "\nPremier Nombre: \n";
    $nombreA=Console::readLine();
    echo "\nSecond Nombre: \n";
    $nombreB=Console::readLine();
    
    echo "\nQuelle opération souhaitez-vous effectuer?\n1. Addition\n2. Soustraction\n3. Multiplication\n4. Division\n0.Quitter\n";
    $operation=Console::readLine();

    switch($operation){

        case 1: echo $c->addition($nombreA,$nombreB); break;
        case 2: echo $c->soustraction($nombreA,$nombreB); break;
        case 3: echo $c->multiplication($nombreA,$nombreB); break;
        case 4: echo $c->division($nombreA,$nombreB); break;
        default : $continue="n";
    }
    $continue="\nVoulez vous effectuer une autre opération? (o / n)\n";

}while($continue == "o");

echo "\nMerci d'avoir utilisé notre calculatrice. Au revoir !\n";
Console::close();