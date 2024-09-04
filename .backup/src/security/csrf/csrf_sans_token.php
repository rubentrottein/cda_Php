<?php
    session_start();
    $message;
    $errormsg;
    $secureMessage = "<hr>Token OK, suppression du post" . $_GET["id"];
    try{

        if(isset($_GET["token"]) && $_GET["token"]==1312){
            $message = "<hr>Token OK, suppression du post" . $_GET["id"];
        } else {
            $message = "<hr>Accès refusé";
        }
        if(isset($_GET["token"]) && $_GET["token"] == $_SESSION['realToken']){
            $secureMessage = "<hr>Token OK, suppression du post" . $_GET["id"];
        } else {
            $secureMessage = "<hr>Accès refusé";
        }
    } catch (Exception $e){
        $errormsg = $e->getMessage();
    }

    $tokenResume = "Pas de token";
    if(isset($_GET["token"])){ 
        $tokenResume= $_GET["token"];
    }; 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page Victime</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <header>
            <h1>La page vulnérable</h1>
            <?php require("../nav.php");?>
        </header>
        <main>
            <article class="list">
                <div style='background: crimson'>
                    <i>Sans Token :</i> 
                    <p>Suppression du post <?= $_GET["id"] ?></p>
                </div>
                <div style='background: orange'>
                    <i>Token fixe</i>
                    <p><?= $message ?></p>
                </div>
                <div style='background: seagreen'>
                    <i>Token dynamique</i>
                    <p><?= $secureMessage ?></p>
                </div>
            </article>
            <article>
                <h3>Token utilisé</h3>
                <p><?= $tokenResume; ?></p>
            </article>
        </main>
        <footer>
            <p><?php $errormsg ?></p>
        </footer>
    </body>
</html>