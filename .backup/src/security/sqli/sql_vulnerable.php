<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SQLI victime</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body class="darkMode">
        <header>
            <h1>Page Victime sqli</h1>
            <?php require("../nav.php");?>
        </header>
        
        <main>
            <?php
                //retour
                $flash = "SELECT * FROM `accounts`";
                $requestedData;
                //Requêtes :
                $accounts = "SELECT * FROM `accounts`";
                $users = "SELECT * FROM `users`";
                $userAccount = "SELECT * FROM `accounts` WHERE users_id=1";

                //Requête à pirater
                $legalQuery = "SELECT login, type, amount FROM accounts AS A JOIN users AS B ON A.id_users = B.id WHERE B.login = '" . $_POST["login"] . "' AND B.pass = '" . $_POST["password"] . "'";
                

                //Config BDD MySQL
                define("DB_HOST", "localhost");
                define("DB_USER", "root");
                define("DB_PASSWORD", "");
                define("DB_NAME", "security_php");

                //Définition des parametres PDO
                $options= array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
                );
                
                // COnnexion PDO a la BDD SQL
                try{
                    $dbh = new PDO("mysql:host=". DB_HOST . ";dbname=".DB_NAME , DB_USER, DB_PASSWORD, $options);
                    
                } catch(PDOException $e){
                    die("Erreur Connexion DB :". $e->getMessage());
                }
                
                // Envoi de requêtes : 
                try {
                    $query = $legalQuery;
                    $cursor = $dbh ->query($query);
                    $data = $cursor -> fetchAll();
                    $requestedData=$data;
                    set_flash_message('Requête OK!', 'success');

                } catch (PDOException $e) {
                    set_flash_message("Echec de la requête: $e", 'danger');
                }

                function set_flash_message($message, $type){
                    $flash = $message . $type;
                }
            ?>
            <h2>
                Données de compte de <?= $_POST["login"] ?>
            </h2>

                <?php 
                    var_dump($requestedData);
                ?>
        </main>
        <footer>
            <?= $legalQuery; ?>
        </footer>
    </body>
</html>