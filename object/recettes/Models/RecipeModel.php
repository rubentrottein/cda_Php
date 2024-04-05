<?php
    require_once "core/Connect.php";
    class RecipeModel{
        public static function addRecipe($titre, $description,  $listeIngredient, $auteur, $image, $categorie){
            $bdd = Connect::dbConnect();
            $request = $bdd->prepare("INSERT TO recettes (titre,description,liste_ingredients,auteur,image,categorie) VALUES (?,?,?,?,?,?)");
            try{
                $request->execute($titre, $description,  $listeIngredient, $auteur, $image, $categorie);
                return true;
            } catch (PDOException $e){
                die( "Erreur SQL : " . $e->getMessage());
                return false;
            }
        }

        public static function recipeList(){
            $bdd = Connect::dbConnect();
            $request = $bdd->prepare("SELECT * FROM recettes");
            $request->execute();
            $recettes= $request->fetchAll();
            return $recettes;
        }
    }