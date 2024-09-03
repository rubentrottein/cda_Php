<?php
    session_start();
    $token = 1312;
    $realToken = bin2hex(openssl_random_pseudo_bytes(6));
    $_SESSION["realToken"] = $realToken;
    $_SESSION["token"] = $token;
    $tokenizedUrl = "csrf_sans_token.php?id=13&token=". $token;
    $dynamicTokenizedUrl = "csrf_sans_token.php?id=13&token=". $realToken;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attaque CSRF</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Sécurité : Faille CSRF</h1>
    </header>
    <main>
        <article class="list">
            <a style='background: tomato' href="csrf_sans_token.php?id=13">Supprimer 13 (sans token)</a>
            <a style='background: orange' href= <?= $tokenizedUrl?> >Supprimer 13 (avec token fixe)</a>
            <a style='background: green' href= <?= $dynamicTokenizedUrl?> >Supprimer 13 (avec token dynamique)</a>
        </article>
        <article>
            <div>
                <h3>Token en cours</h3>
                <p><?= $realToken ?>
            </div>
            
            <div>
                <h3>Token fixé</h3>
                <p><?= $token ?>
            </div>
        </article>
    </main>
</body>
</html>