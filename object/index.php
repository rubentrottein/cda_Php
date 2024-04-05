<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.O.O</title>
</head>
<body>
    <header>
        <h1>Programmation Orientée Objet</h1>
        <?php
        // Déclaration de classe
        class Person{
            // Propriétés
            private $nom = "";
            private $age = 0;

            // Constructeur
            public function __construct($n, $a){
                $this->nom = $n;
                $this->age = $a;
            }

            // Méthodes
            public function apprendre($savoir){
                
                echo "$this->nom s'instruit sur $savoir";
                return "Appris : " . $savoir;
            }
            public function interagir($person){
                echo "Hello! " . $person->nom;
            }
        }

        //Instancier un objet
        $first = new Person();
        $second = new Person("Micheline", 61);
        $first->nom = "Jeanjean";
        $first->age = 31;
        echo $first->$nom;
        $second->interagir($first);

    ?>
    </header>
    <main>

    </main>
</body>
</html>