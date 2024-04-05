<?php
require "Banque.php";
class CompteBancaire{
    public $nom = "";
    public $prenom = "";
    public $numeroCompte = "";
    public $solde = 0;
    public static $nombreComptes = 0;

    function __construct($n, $p){
        $this->nom = $n;
        $this->prenom = $p;

        $initialNom = uppercase($n[0]);
        $initialPrenom = uppercase($p[0]);
        
        self::$nombreComptes++;
        $this->$numeroCompte = "FR56$initialNom$initialPrenomself::$nombreComptes";
        
        // ajouter le compte dans la listes des comptes
        Banque::ajouterCompte($this);
    }
    public function deposer($numeroCompte, $montant){
        $compte= Banque::rechercherCompte($numeroCompte);
        if($compte){
            $compte->solde+=$montant;
        } else {
            echo "Numero de compte incorrect";
        }
    }   
    public static function retirer($numeroCompte, $montant){
        if(verifierSolde($montant)){
            $compte= Banque::rechercherCompte($numeroCompte);
            if($compte->verifierSolde($montant)){
            } else {
                echo "Pauvreté";
            }
        } else {
            echo "Compte inexistant";
        }
    }
    public static function verifierSolde($numeroCompte){
        return $this->solde;
    }

    public function getSolde($numeroCompte){
        return $numeroCompte->solde;
    }
    public function getNumeroCompte(){
        return $numeroCompte;
    }
}
do{

    echo "Bienvenue dans le système de gestion des comptes bancaires.";
    
    echo "Que souhaitez-vous faire ?
    \n 1. Créer un compte bancaire
    \n 2. Déposer de l'argent sur un compte existant
    \n 3. Retirer de l'argent d'un compte existant
    \n 4. Consulter le solde d'un compte existant
    \n 5. Quitter le programme";
    $choix->Console::readLine("entrez votre choix?");
    $choix->Console::readLine("entrez votre choix?");
    switch($choix){
        case 1:   
            echo "Entrez votre nom : ";
            $prenom->Console::readLine("Entrez votre prénom :");
            $nom->Console::readLine("Entrez votre nom :");
            $currentCompte = 
            echo "Votre compte a été créé avec succès. Votre numéro de compte est $numeroCompte";
        break;
        case 2:
            break;
        case 3:
    }
    if{}
    else {$start=false;};
}while($start=true;)
