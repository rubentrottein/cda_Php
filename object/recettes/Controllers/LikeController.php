<?php
require_once "Models/LikeModel.php";
class LikeController{
    public function like(){
        LikeModel::like($_GET["id_user"], $_GET['id_recette']);
        header("Location: ?page=home");
    }
}