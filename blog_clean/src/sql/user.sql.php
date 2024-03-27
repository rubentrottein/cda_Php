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
        die("Erreur SQL : " . $e->getMessage());
    }
}

function registerUser($user){
    global $pdo;
    try {
        $query = "INSERT INTO users (firstName, lastName, phone, password, role, email)
        VALUES(:firstName, :lastName, ':phone', :password, 'ROLE_USER', :email)";
        
        $cursor = $pdo->prepare($query);
            $cursor -> bindParam(":firstName", $user['firstName'], PDO::PARAM_STR);
            $cursor -> bindParam(":lastName", $user['lastName'], PDO::PARAM_STR);
            $cursor -> bindParam(":phone", $user['phone'], PDO::PARAM_STR);
            $cursor -> bindParam(":password", $user['password'], PDO::PARAM_STR);
            $cursor -> bindParam(":email", $user['email'], PDO::PARAM_STR);
        $cursor->execute();

        return TRUE;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}       

function updateUser($user){
    global $pdo;
    
    try {
        $update=true;
        $query = "UPDATE users SET firstName=:firstName, lastName=:lastName, phone=:phone WHERE id=:id";
        $cursor = $pdo->prepare($query);
            $cursor -> bindParam(":id", $user['id'], PDO::PARAM_STR);
            $cursor -> bindParam(":firstName", $user['firstName'], PDO::PARAM_STR);
            $cursor -> bindParam(":lastName", $user['lastName'], PDO::PARAM_STR);
            $cursor -> bindParam(":phone", $user['phone'], PDO::PARAM_STR);
        $cursor->execute();

        return TRUE;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}       