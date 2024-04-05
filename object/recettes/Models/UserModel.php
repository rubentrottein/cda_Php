<?php
require_once "core/Connect.php";
class UserModel{
    public static function register(){
        try{

            $db = Connect::dbConnect();
            $hashedPassword = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            // preparer la requete
            $request = $db->prepare("INSERT INTO users (nom, prenom, email,mdp) VALUES (?, ?, ?, ?)");
            // executer la requete
            $request->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $hashedPassword));
        } catch (PDOException $e){
            die("Erreur SQL => " . $e);
        }
    }

    //Pour la connexion
    public static function login(){
        try{
            $db = Connect::dbConnect();
            $request = $db->prepare("SELECT * FROM users WHERE email = ?");
            $request->execute(array($_POST['email']));
            $user = $request->fetch();
            return $user;

        } catch (PDOException $e){
            die("Erreur SQL => " . $e);
        }
    }
}