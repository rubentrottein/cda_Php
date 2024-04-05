<?php
interface MonInterface{
    // On ne fait qu'appeler des méthodes dans une interface
    public function methode1();
    // Ces méthodes sont à définir obligatoirement dans une classe qui implémenterait l'interface
}

class Maclasse implements MonInterface{
    public function methode(){
        // la définition de la classe est obligatoire.
    }
}