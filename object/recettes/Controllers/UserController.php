<?php
require_once "Models/UserModel.php";
require_once "Controllers/NavController.php";
class UserController extends NavController{
    //Affichage du formulaire
    public function registerForm(){
        $this->displayNav();
        include "Views/inscription.php";
    }
    public function register(){
        if(isset($_POST['inscription'])){
            UserModel::register();
            header("Location: ?url=home");
        } else {
            die("erreur de routing");
        }
    }
    
    // affichage du formulaire de connexion
    public function loginForm(){
        $this->displayNav();
        include "Views/login.php";
    }

    public function login(){
        if(isset($_POST['login'])){
            $user = UserModel::login();
            
            if(empty($user)){
                echo "Email inexistant";
            } else {
                if(password_verify($_POST['password'], $user['mdp'])){
                    $_SESSION['user'] = $user;
                    header("Location: ?url=home");
                }
            } 
        }
        if(isset($_POST['login'])){
            $user = UserModel::login();
            if(empty($user)){
                echo "Cet email n'existe pas!";
            }else{
                if(password_verify($_POST['password'], $user['mdp'])){
                    $_SESSION['user'] = $user;
                    header("Location: ?url=home");
                }
            }
        }
    }
    // la fonction logout (deconnect l'utilisateur)
    public function logout(){
        session_destroy();
        header("Location: ?url=home");
    }
}