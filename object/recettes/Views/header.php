<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
    <link rel="stylesheet" href="https://mistertea.fr/css/style.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1><a href="?url=home">Espace Grignotte</a></h1>
        <p class="lead">Bienvenue 
        <nav>
        <?php
        if (isset($_SESSION['user'])){
            echo "," . $_SESSION['user']['prenom'];
        }else {?></p>
            <a href="?url=inscription">Inscriptions</a>
            <a href="?url=connection">Connexion</a>
        <?php } ?>
            <details>
                <summary><p class="trigger">Catégories</p></summary>
                <ul>
                    <?php foreach ($categories as $category) { 
                        ?>
                        <li><a href="?categorie&id=<?=$category['id_categorie']?>"><?=$category['nom']?></a></li>
                    <?php } ?>
                </ul>
        </nav>
    </header>
    <main>