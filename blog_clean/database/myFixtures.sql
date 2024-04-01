INSERT INTO users
    (`lastName`, `firstName`, `email`, `phone`, `password`, `role`) 
VALUES 
    ("Gold", "Georgio", "georgio.gold@gmail.com", "0987654321", "$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.", 'ROLE_USER'),
    ("Silver", "Agatha", "agatha.silver@gmail.com", "0123456789", "$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.", 'ROLE_MODER'),
    ("Bronze", "Leeroy", "leeroy.bronze@gmail.com", "0321654987", "$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.", 'ROLE_ADMIN');


INSERT INTO categories 
    (name, slug, id_categories)
VALUES
    ("Consoles", "console", NULL),
    ("Consoles portables", "handheld", 1),
    ("Consoles retro", "retro-console", 1),
    ("Services", "services", NULL),
    ("Jeux", "games", 4);

INSERT INTO posts 
    (title, slug, content, createdAt, updatedAt, image, active, id_users, id_categories)
VALUES
    (
        "Découvrez la Révolution du Jeu Nomade avec la Console Portable R36S", "decouvrez-la-revolution-du-jeu-nomade-avec-la-console-portable-r36s", "
        Dans l'univers du gaming, l'évolution technologique ne cesse de nous surprendre. La dernière innovation qui fait parler d'elle est la console portable R36S, une véritable révolution dans le monde du jeu nomade. Avec des fonctionnalités à la pointe de la technologie et un design ergonomique, cette console promet une expérience de jeu immersive à tout instant, où que vous soyez.
        <h2>Puissance et Performance :</h2>
        La console portable R36S est équipée d'un processeur dernière génération, offrant une puissance de traitement supérieure pour des performances optimales. Que vous soyez un amateur de jeux vidéo exigeant ou un joueur occasionnel, cette console répondra à toutes vos attentes en termes de fluidité et de réactivité. Grâce à sa puissance de calcul, les jeux les plus exigeants jusqu'a la dreamcast de Sega fonctionnent sans accroc, vous permettant de plonger pleinement dans l'univers de vos jeux préférés.
        <h2>Ecran Époustouflant :</h2>
        L'écran 460p de la R36S offre une fidélité impressionnante, avec des couleurs vives et des détails saisissants. Que vous soyez en train d'explorer des mondes fantastiques, de participer à des courses endiablées ou de vivre des aventures épiques, chaque image est rendue avec une clarté exceptionnelle. Vous serez littéralement transporté au cœur de l'action, pour une immersion totale dans vos jeux préférés.
        <h2>Polyvalence et Flexibilité :</h2>
        La R36S permet de découvrir nombre de systèmes, mais son OS ArkOS et son ouverture aux CFW de la communauté lui donne des possibilités d'évolution intéressante et surtout une bonne fiabilité et un excellent suivi
        <h2>Design Ergonomique :</h2>
        Conçue pour une prise en main optimale, la console R36S arbore un design ergonomique qui la rend confortable à tenir, même lors de sessions de jeu prolongées. Les boutons sont disposés de manière intuitive pour une expérience de jeu fluide et agréable, tandis que son poids léger en fait le compagnon de voyage parfait pour les longs trajets en train, en avion ou en voiture.
        <h2>Autonomie Longue Durée :</h2>
        L'autonomie de la batterie est un élément crucial pour une console portable, et la R36S ne déçoit pas. Grâce à une gestion intelligente de l'énergie, vous pouvez profiter de plusieurs heures de jeu ininterrompu sur une seule charge. Que vous soyez en déplacement ou simplement en train de vous détendre à la maison, vous pouvez jouer sans vous soucier de manquer de batterie.
        En conclusion, la console portable R36S représente une véritable révolution dans le monde du jeu nomade a petit prix. Avec sa puissance, ses performances et sa polyvalence, elle offre une expérience de jeu excellente, où que vous soyez. Que vous soyez un joueur occasionnel ou un passionné invétéré, cette console est sûre de vous impressionner par ses fonctionnalités avancées et son design ergonomique. Préparez-vous à plonger dans un monde de divertissement sans limites, avec la console portable R36S à vos côtés.",
        '2024-01-10', 
        '2024-02-08',
        "r36s.jpg",
        TRUE,
        2,
        1
    ),
    (
        "Découvrez l'Expérience de Jeu Ultime avec la PlayStation 5 : La Nouvelle Frontière du Divertissement", "decouvrez-l-experience-de-jeu-ultime-avec-la-playStation-5-la-nouvelle-frontiere-du-divertissement", "Depuis son lancement très attendu, la PlayStation 5 (PS5) a secoué l'industrie du jeu vidéo avec ses performances de pointe, son design futuriste et son catalogue de jeux captivants. En tant que prochaine génération de consoles de salon, la PS5 repousse les limites de l'immersion et de l'interaction, offrant aux joueurs une expérience inoubliable à chaque session de jeu.
        <h2>Puissance et Performance :</h2>
        Dotée d'un processeur AMD Ryzen de dernière génération et d'une puce graphique AMD Radeon RDNA 2, la PS5 délivre une puissance de calcul impressionnante. Les temps de chargement sont réduits à leur plus simple expression, tandis que les graphismes ultra-réalistes et les fréquences d'image élevées garantissent une immersion totale dans chaque jeu. Que vous exploriez des mondes ouverts vastes et magnifiques ou que vous affrontiez des ennemis redoutables dans des combats épiques, la PS5 vous transporte au cœur de l'action avec une fluidité et une clarté exceptionnelles.
        <h2>Technologie Révolutionnaire :</h2>
        La PS5 introduit plusieurs fonctionnalités révolutionnaires qui redéfinissent la façon dont nous jouons. Le contrôleur sans fil DualSense, avec sa technologie de retour haptique et ses gâchettes adaptatives, offre des sensations de jeu immersives, permettant aux joueurs de ressentir chaque impact, chaque vibration et chaque mouvement avec une précision incroyable. De plus, la technologie audio 3D Tempest de la PS5 crée un environnement sonore enveloppant, vous plongeant au cœur de l'univers du jeu pour une expérience audio immersive sans précédent.
        <h2>Catalogue de Jeux Exceptionnel :</h2>
        La PS5 propose un catalogue de jeux varié et captivant, comprenant à la fois des titres exclusifs et des jeux multiplateformes de premier plan. Des franchises emblématiques telles que 'Spider-Man: Miles Morales', 'Demon's Souls' et 'Ratchet & Clank: Rift Apart' exploitent pleinement les capacités de la console, offrant des expériences de jeu uniques et inoubliables. Que vous soyez fan de jeux d'action, d'aventure, de sport ou de jeu de rôle, la PS5 propose quelque chose pour tous les goûts.
        <h2>Connectivité et Multimédia :</h2>
        En plus de son incroyable capacité de jeu, la PS5 offre également une connectivité étendue et des fonctionnalités multimédias avancées. Avec des options de streaming en 4K, la prise en charge de la lecture de disques Blu-ray Ultra HD et l'intégration de services de streaming populaires tels que Netflix, Disney+, et Spotify, la PS5 est bien plus qu'une simple console de jeu - c'est un centre de divertissement complet pour toute la famille.
        <h2>Design Élégant et Futuriste :</h2>
        Le design de la PS5 est à la fois audacieux et futuriste, avec ses lignes épurées, ses courbes élégantes et son éclairage LED emblématique. Que vous choisissiez la version standard avec lecteur Blu-ray ou la version entièrement numérique, la PS5 est un véritable chef-d'œuvre de design qui ajoutera une touche de sophistication à n'importe quel espace de divertissement.
        En conclusion, la PlayStation 5 représente la nouvelle frontière du divertissement interactif, offrant aux joueurs une expérience de jeu inégalée grâce à sa puissance, ses fonctionnalités innovantes et son catalogue de jeux exceptionnel. Que vous soyez un passionné de jeux vidéo ou un joueur occasionnel, la PS5 promet de vous transporter dans des mondes fantastiques et des aventures inoubliables, repoussant les limites de ce qui est possible dans le monde du jeu vidéo. Préparez-vous à vivre l'expérience de jeu ultime avec la PlayStation 5.",
        '2024-01-12',
        '2024-01-12',
        "ps5.jpg", 
        FALSE,
        3,
        2
    ),
    (
        "Plongez dans la Légende avec Final Fantasy VII Rebirth : Une Épopée Redéfinie pour une Nouvelle Génération", "plongez-dans-la-legende-avec-final-fantasy-7-rebirth-une-epopee-redefinie-pour-une-nouvelle-generation", "</h2>
        Depuis des décennies, la saga Final Fantasy a captivé les joueurs du monde entier avec ses histoires épiques, ses personnages inoubliables et son univers fantastique. Final Fantasy VII, sorti à l'origine en 1997, est souvent considéré comme l'un des meilleurs jeux de tous les temps, et sa récente réinterprétation, Final Fantasy VII Rebirth, promet de raviver la flamme de la passion pour cette aventure emblématique.</h2>
        <h2>Une Réinvention Époustouflante :</h2>
        Final Fantasy VII Rebirth n'est pas seulement un remaster ou un simple portage du jeu original. C'est une réinvention époustouflante qui redéfinit l'expérience de jeu pour une nouvelle génération de joueurs tout en honorant la vision et l'héritage du jeu original. Avec des graphismes entièrement remaniés en haute définition, des cinématiques époustouflantes et un système de combat repensé, cette version revisite l'univers de Final Fantasy VII d'une manière qui éblouit les fans de longue date tout en séduisant les nouveaux venus.</h2>
        <h2>Des Personnages Réalistes et Profonds :</h2>
        Les personnages emblématiques de Final Fantasy VII prennent vie comme jamais auparavant dans Rebirth. De Cloud Strife, le héros taciturne avec un passé mystérieux, à Aerith Gainsborough, la fleuriste au cœur tendre, chaque personnage est présenté avec une profondeur émotionnelle et une expressivité remarquables. Les joueurs sont invités à découvrir leurs histoires fascinantes et à tisser des liens avec eux à travers des moments poignants et des interactions riches en émotion.</h2>
        <h2>Un Monde à Explorer :</h2>
        L'univers de Final Fantasy VII est vaste et diversifié, regorgeant de villes animées, de paysages époustouflants et de donjons dangereux. Dans Rebirth, ce monde est plus vivant que jamais, avec des environnements détaillés et immersifs qui invitent les joueurs à explorer chaque recoin à la recherche de secrets cachés, de quêtes secondaires et de rencontres inattendues. Que vous voguiez à travers les ruines de Midgar ou que vous escaladiez les sommets enneigés du mont Nibel, chaque lieu est imprégné d'une atmosphère unique et d'une beauté saisissante.</h2>
        <h2>Un Système de Combat Stratégique :</h2>
        Le système de combat de Final Fantasy VII Rebirth combine habilement les éléments classiques du jeu de rôle japonais avec des mécaniques modernes et dynamiques. Les affrontements se déroulent en temps réel, permettant aux joueurs de prendre des décisions stratégiques rapidement tout en utilisant les compétences et les pouvoirs uniques de leurs personnages. De plus, le système de matéria, un pilier de la série Final Fantasy, a été repensé pour offrir plus de profondeur et de personnalisation que jamais auparavant.</h2>
        <h2>Une Bande-Sonore Magistrale :</h2>
        La musique a toujours joué un rôle crucial dans l'expérience de jeu de Final Fantasy, et Rebirth ne fait pas exception. La bande-son épique et émouvante, composée par des maîtres de l'industrie tels que Nobuo Uematsu et Masashi Hamauzu, accompagne chaque moment du jeu, renforçant l'atmosphère et l'émotion de l'aventure. Des thèmes emblématiques tels que 'Aerith's Theme' et 'One-Winged Angel' résonnent avec une puissance et une beauté intemporelles, laissant une impression durable sur les joueurs.</h2>
        En conclusion, Final Fantasy VII Rebirth est bien plus qu'un simple remake - c'est une expérience de jeu magistrale qui célèbre l'héritage de l'original tout en repoussant les limites de ce qui est possible dans le monde du jeu vidéo. Que vous soyez un fan de longue date de la série ou un nouveau venu curieux de découvrir cette épopée légendaire, Rebirth promet de vous transporter dans un monde de fantastique et d'aventure inoubliable. Préparez-vous à plonger dans la légende avec Final Fantasy VII Rebirth.", 
        '2024-02-08', 
        '2024-02-08', 
        "ff7rebirth.jpg", 
        TRUE, 
        1,
        3
    );
    (
        "Xbox Game Pass", "xbox-game-pass", "
        <h3>Le futur du divertissement entre vos mains</h3>
        <p>
        Jouer à des centaines de jeux exceptionnels avec des amis sur console, PC et dans le cloud, avec de nouveaux jeux régulièrement ajoutés, pour avoir toujours une nouveauté à découvrir...
        </p>
        <p>
        <br><b>C'est possible avec le Xbox Game PASS<b>
        </p>
        <h4>Jouez dès le premier jour</h4> 
        <p>
        Jouez aux nouveaux titres Xbox Game Studios dès le jour de leur sortie, mais aussi aux franchises mythiques de Bethesda Softworks, aux jeux indépendants, à des superproductions et bien plus encore.
        </p>
        <h3>Jouer sur l’appareil de son choix</h3>
        <p>
            Téléchargez des jeux et jouez hors ligne sur votre console ou votre PC Windows ou Linux, votre Steam Deck ou votre ROG Ally, Legion Go, et autre console portable, ou diffusez des jeux en continu depuis le cloud sur votre téléphone, tablette, etc.
        </p>",
        '2024-02-08', 
        '2024-02-08', 
        "ff7rebirth.jpg", 
        TRUE, 
        1,
        3
    );

INSERT INTO comments
    (content, createdAt, id_users, id_posts)
VALUES
    ("Je préfère le Steam Deck", '2024-03-01', 1,2),
    ("J'avoue", '2024-03-02', 2,2),
    ("Meilleure console", '2024-03-03', 2,1),
    ("N'importe quoi octogone tout de suite", '2024-03-04', 3,1),
    ("La version PSX est moins longue", '2024-03-05', 3,3);

INSERT INTO tags
    (name, slug)
VALUES
    ("Science-fiction", "science-fiction"),
    ("RPG", "rpg"),
    ("4K", "4k"),
    ("Linux", "linux"),
    ("Emulation", "emulation");

INSERT INTO define
    (id, id_tags)
VALUES
    (1, 2),
    (2, 1),
    (3, 1),
    (3, 3);


