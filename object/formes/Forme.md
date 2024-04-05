# Exercice : Gestionnaire de formes géométriques

# Objectif :
Développer un programme en PHP pour gérer différentes formes géométriques telles que des cercles, des rectangles et des triangles. Le programme devrait permettre de calculer l'aire et le périmètre de chaque forme.

# Classe Forme :

Créez une classe abstraite Forme qui représente une forme géométrique générique.
Déclarez deux méthodes abstraites dans cette classe : calculerAire() pour calculer l'aire de la forme et calculerPerimetre() pour calculer le périmètre.
Chaque sous-classe de Forme devra implémenter ces méthodes pour calculer l'aire et le périmètre spécifiques à chaque forme.
Classe Cercle :

Créez une classe Cercle qui hérite de la classe Forme.
Cette classe devrait avoir un attribut rayon pour stocker le rayon du cercle.
Implémentez les méthodes calculerAire() et calculerPerimetre() pour calculer l'aire et le périmètre du cercle respectivement.
Classe Rectangle :

Créez une classe Rectangle qui hérite de la classe Forme.
Cette classe devrait avoir deux attributs longueur et largeur pour stocker les dimensions du rectangle.
Implémentez les méthodes calculerAire() et calculerPerimetre() pour calculer l'aire et le périmètre du rectangle respectivement.
Classe Triangle :

Créez une classe Triangle qui hérite de la classe Forme.
Cette classe devrait avoir trois attributs cote1, cote2 et cote3 pour stocker les longueurs des côtés du triangle.
Implémentez les méthodes calculerAire() et calculerPerimetre() pour calculer l'aire et le périmètre du triangle respectivement.
Programme interactif :

Créez un programme interactif qui permettra à l'utilisateur de créer des instances de différentes formes géométriques, d'afficher leur aire et leur périmètre, et de calculer le total de l'aire et du périmètre de toutes les formes.
L'utilisateur devrait pouvoir choisir le type de forme à créer et saisir les détails appropriés pour chaque forme.
Le programme devrait utiliser les méthodes appropriées de chaque forme pour calculer l'aire et le périmètre, et les afficher à l'utilisateur.

# exemple d'interation avec le programme
Bienvenue dans le gestionnaire de formes géométriques !

1. Créer un cercle
2. Créer un rectangle
3. Créer un triangle
4. Afficher les informations des formes
5. Quitter

Choisissez une option : 1
Entrez le rayon du cercle : 5
Cercle créé avec succès.

Choisissez une option : 2
Entrez la longueur du rectangle : 4
Entrez la largeur du rectangle : 6
Rectangle créé avec succès.

Choisissez une option : 3
Entrez la longueur du premier côté du triangle : 3
Entrez la longueur du deuxième côté du triangle : 4
Entrez la longueur du troisième côté du triangle : 5
Triangle créé avec succès.

Choisissez une option : 4

Informations sur les formes géométriques :

Cercle :
- Rayon : 5
- Aire : 78.54
- Périmètre : 31.42

Rectangle :
- Longueur : 4
- Largeur : 6
- Aire : 24
- Périmètre : 20

Triangle :
- Côté 1 : 3
- Côté 2 : 4
- Côté 3 : 5
- Aire : 6
- Périmètre : 12

Choisissez une option : 5

Merci d'avoir utilisé notre gestionnaire de formes géométriques. Au revoir !
