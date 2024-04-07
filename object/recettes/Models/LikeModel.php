<?php
    require_once "core/Connect.php";
    class LikeModel{
        public static function like($user_id, $recette_id){
            $bdd = Connect::dbConnect();
            $request = $bdd->prepare("SELECT * FROM likes WHERE likeur = ? AND recette = ?");
            $request->execute(array($user_id, $recette_id));
            $resultat = $request->fetch();
            if(!empty($resultat)){
                $request = $bdd->prepare("INSERT INTO likes (likeur, recette) VALUES (?,?)");
                $request->execute(array($user_id, $recette_id));
            }
            return true;
        } 
    }