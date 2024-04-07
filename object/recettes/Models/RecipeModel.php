<?php
    require_once "core/Connect.php";
    class RecipeModel{
        public static function addRecipe($titre, $description,  $listeIngredient, $auteur, $image, $categorie){
            $bdd = Connect::dbConnect();
            $request = $bdd->prepare(
                "INSERT INTO recettes (titre, description, liste_ingredients,  auteur, image, categorie, ) VALUES (?,?,?,?,?)");            try{
                $request->execute($titre, $description,  $listeIngredient, $auteur, $image, $categorie);
                return true;
            } catch (PDOException $e){
                echo "Erreur SQL : " . $e->getMessage();
                return false;
            }
        }

        public static function recipeList(){
            $bdd = Connect::dbConnect();
            $request = $bdd->prepare(
                "SELECT recettes.titre as titre, recettes.id_recette as id_recette, recettes.description as description, recettes.image as image, categories.nom as nom_categorie, users.nom as nom_auteur, users.id_user as id_user, COUNT(likes.id_like) as nbr_like
                FROM recettes
                JOIN categories ON recettes.categorie = categories.id_categorie
                JOIN users ON recettes.auteur = users.id_user
                LEFT JOIN likes ON recettes.id_recette = likes.recette
                GROUP BY recettes.id_recette");
            $request->execute();
            $recettes= $request->fetchAll();
            return $recettes;
        }
    }