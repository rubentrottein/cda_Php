<?php

function userLogin($email){
    global $pdo;
    try {
        $query = "SELECT id, firstName, lastName,phone, password, role, email
        FROM users
        WHERE email = :email";
        
        $cursor = $pdo->prepare($query);
        $cursor -> bindValue(":email", $email, PDO::PARAM_STR);
        $cursor->execute();

        $user = $cursor->fetch();
        return $user;
    } catch (PDOException $e) {
        set_flash_message("Erreur de connexion. Réessayez <br>erreur $e", 'danger');
    }
}

function registerUser($user){
    global $pdo;
    try {
        $query = 
        "INSERT INTO users 
            (firstName, lastName, phone, email, password , role)
        VALUES
            (:firstName, :lastName, ':phone', :email, :password , 'ROLE_USER')";
        
        $cursor = $pdo->prepare($query);
            $cursor -> bindParam(":firstName", $user['firstName'], PDO::PARAM_STR);
            $cursor -> bindParam(":lastName", $user['lastName'], PDO::PARAM_STR);
            $cursor -> bindParam(":phone", $user['phone'], PDO::PARAM_STR);
            $cursor -> bindParam(":email", $user['email'], PDO::PARAM_STR);
            $cursor -> bindParam(":password", $user['password'], PDO::PARAM_STR);
        $cursor->execute();
        
        set_flash_message('Utilisateur enregistré!', 'success');
        return TRUE;

    } catch (PDOException $e) {
        set_flash_message("Echec de l'inscription. Réessayez <br>erreur $e", 'danger');
        return FALSE;
    
    }
}       

function updateUser($user){
    global $pdo;
    
    try {
        $update=true;
        $query = "UPDATE users SET firstName=:firstName, lastName=:lastName, phone=:phone WHERE id=:id";
        $cursor = $pdo->prepare($query);
            $cursor -> bindParam(":id", $_SESSION['user']['id'], PDO::PARAM_STR);
            $cursor -> bindParam(":firstName", $user['firstName'], PDO::PARAM_STR);
            $cursor -> bindParam(":lastName", $user['lastName'], PDO::PARAM_STR);
            $cursor -> bindParam(":phone", $user['phone'], PDO::PARAM_STR);
        $cursor->execute();
        set_flash_message('Modifications prises en compte!', 'success');
        return TRUE;
    } catch (PDOException $e) {
        set_flash_message('Pas de modification en BDD!', 'danger');
    }
}       