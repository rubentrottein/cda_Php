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
                if(password_verify($_POST['mdp'], $user['mdp'])){
                    $_SESSION['user'] = $user;
                    header("Location : ?url=home");
                }
            } 
        }
    }
}