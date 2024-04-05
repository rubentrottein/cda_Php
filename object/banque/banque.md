# Exercice : Gestion de comptes bancaires avec une classe Banque

Vous travaillez pour une banque et vous devez créer un système de gestion de comptes bancaires interactif en utilisant la programmation orientée objet en PHP. Dans ce système, vous devrez définir deux classes : une classe Banque pour gérer la liste des comptes bancaires et une classe CompteBancaire pour représenter chaque compte bancaire individuellement.

# Définissez une classe CompteBancaire avec les propriétés suivantes :

- nom : un attribut pour stocker le nom du titulaire du compte.
- prenom : un attribut pour stocker le prénom du titulaire du compte.
- numeroCompte : un attribut pour stocker le numéro de compte bancaire (généré automatiquement au format "FR56XXX" où XX sont les initiales du titulaire concaténée avec un nombre de compte, par exemple FR56JD123).
- solde : un attribut pour stocker le solde du compte bancaire
- nombreCompte :  un attribut statique pour compter le nombre total de comptes bancaires créés.

# Implémentez les méthodes suivantes dans la classe CompteBancaire :

- __construct($nom, $prenom) : un constructeur pour initialiser le nom, le prénom et le solde du compte, et générer un numéro de compte unique basé sur les initiales du titulaire.
- deposer($numeroCompte, $montant) : une méthode pour déposer de l'argent sur le compte spécifié par son numéro.
- retirer($numeroCompte, $montant) : une méthode pour retirer de l'argent du compte spécifié par son numéro, en vérifiant si le solde est suffisant.
- verifierSolde($numeroCompte) : afficher le solde actuel
- getSolde($numeroCompte) : une méthode pour obtenir le solde actuel du compte spécifié par son numéro.
- getNumeroCompte() : une méthode pour obtenir le numéro de compte.

# Définissez une classe Banque avec la propriété suivante :

- listeComptes : un tableau statique pour stocker la liste des comptes bancaires.
# Implémentez les méthodes suivantes dans la classe Banque :

- ajouterCompte($compte) : une méthode pour ajouter un compte bancaire à la liste.
- rechercherCompte($numeroCompte) : une méthode pour rechercher un compte bancaire par son numéro.
- getComptes() : une méthode pour obtenir la liste des comptes bancaires.
Créez un programme interactif qui permet à l'utilisateur de choisir parmi les actions suivantes :

Créer un compte bancaire.
Déposer de l'argent sur un compte existant.
Retirer de l'argent d'un compte existant.
Consulter le solde d'un compte existant.
Quitter le programme.



# exemple d'interation avec le programme
Bienvenue dans le système de gestion des comptes bancaires.

Que souhaitez-vous faire ?
1. Créer un compte bancaire
2. Déposer de l'argent sur un compte existant
3. Retirer de l'argent d'un compte existant
4. Consulter le solde d'un compte existant
5. Quitter le programme
Entrez votre choix : 1
Entrez votre nom : Dupont
Entrez votre prénom : Jean
Votre compte a été créé avec succès. Votre numéro de compte est : FR56DJ1

Que souhaitez-vous faire ?
1. Créer un compte bancaire
2. Déposer de l'argent sur un compte existant
3. Retirer de l'argent d'un compte existant
4. Consulter le solde d'un compte existant
5. Quitter le programme
Entrez votre choix : 2
Entrez le numéro de compte : FR56D1
Entrez le montant à déposer : 500
Dépôt effectué avec succès. Nouveau solde : 500

Que souhaitez-vous faire ?
1. Créer un compte bancaire
2. Déposer de l'argent sur un compte existant
3. Retirer de l'argent d'un compte existant
4. Consulter le solde d'un compte existant
5. Quitter le programme
Entrez votre choix : 4
Entrez le numéro de compte : FR56D1
Solde du compte FR56D1 : 500

Que souhaitez-vous faire ?
1. Créer un compte bancaire
2. Déposer de l'argent sur un compte existant
3. Retirer de l'argent d'un compte existant
4. Consulter le solde d'un compte existant
5. Quitter le programme
Entrez votre choix : 3
Entrez le numéro de compte : FR56D1
Entrez le montant à retirer : 200
Retrait effectué avec succès. Nouveau solde : 300

Que souhaitez-vous faire ?
1. Créer un compte bancaire
2. Déposer de l'argent sur un compte existant
3. Retirer de l'argent d'un compte existant
4. Consulter le solde d'un compte existant
5. Quitter le programme
Entrez votre choix : 5
Merci d'avoir utilisé notre système de gestion des comptes bancaires. Au revoir !