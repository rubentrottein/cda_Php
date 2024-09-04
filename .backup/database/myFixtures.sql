-- Suppression de la base de données existante et création d'une nouvelle
DROP DATABASE IF EXISTS cda;
CREATE DATABASE cda CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE cda;

-- Création de la table users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lastName VARCHAR(50) NOT NULL,
    firstName VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15),
    password VARCHAR(255) NOT NULL,
    role ENUM('ROLE_USER', 'ROLE_MODER', 'ROLE_ADMIN') NOT NULL
) ENGINE=InnoDB;

-- Création de la table categories
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE,
    id_categories INT DEFAULT NULL,
    FOREIGN KEY (id_categories) REFERENCES categories(id) ON DELETE SET NULL
) ENGINE=InnoDB;

-- Création de la table posts
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content TEXT,
    createdAt DATE,
    updatedAt DATE,
    image VARCHAR(255),
    active BOOLEAN DEFAULT TRUE,
    id_users INT,
    id_categories INT,
    FOREIGN KEY (id_users) REFERENCES users(id),
    FOREIGN KEY (id_categories) REFERENCES categories(id)
) ENGINE=InnoDB;

-- Création de la table tags
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB;

-- Création de la table define
CREATE TABLE define (
    id INT,
    id_tags INT,
    PRIMARY KEY (id, id_tags),
    FOREIGN KEY (id) REFERENCES posts(id),
    FOREIGN KEY (id_tags) REFERENCES tags(id)
) ENGINE=InnoDB;

-- Création de la table comments
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    createdAt DATE,
    id_users INT,
    id_posts INT,
    FOREIGN KEY (id_users) REFERENCES users(id),
    FOREIGN KEY (id_posts) REFERENCES posts(id)
) ENGINE=InnoDB;

-- Insérer de nouvelles données dans la table users
INSERT INTO users
    (lastName, firstName, email, phone, password, role) 
VALUES 
    ("Gold", "Georgio", "georgio.gold@gmail.com", "0987654321", "$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.", 'ROLE_USER'),
    ("Silver", "Agatha", "agatha.silver@gmail.com", "0123456789", "$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.", 'ROLE_MODER'),
    ("Bronze", "Leeroy", "leeroy.bronze@gmail.com", "0321654987", "$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.", 'ROLE_ADMIN');

-- Insérer de nouvelles données dans la table categories
INSERT INTO categories 
    (name, slug, id_categories)
VALUES
    ("Consoles", "console", NULL),
    ("Consoles portables", "handheld", 1),
    ("Consoles retro", "retro-console", 1),
    ("Services", "services", NULL),
    ("Jeux", "games", 4);

-- Insérer de nouvelles données dans la table posts
INSERT INTO posts 
    (title, slug, content, createdAt, updatedAt, image, active, id_users, id_categories)
VALUES
    (
        "Découvrez la Révolution du Jeu Nomade avec la Console Portable R36S", 
        "decouvrez-la-revolution-du-jeu-nomade-avec-la-console-portable-r36s", 
        "Dans l'univers du gaming, l'évolution technologique ne cesse de nous surprendre. La dernière innovation qui fait parler d'elle est la console portable R36S, une véritable révolution dans le monde du jeu nomade. Avec des fonctionnalités à la pointe de la technologie et un design ergonomique, cette console promet une expérience de jeu immersive à tout instant, où que vous soyez. ...",
        '2024-01-10', 
        '2024-02-08',
        "r36s.jpg",
        TRUE,
        2,
        1
    ),
    (
        "Découvrez l'Expérience de Jeu Ultime avec la PlayStation 5 : La Nouvelle Frontière du Divertissement", 
        "decouvrez-l-experience-de-jeu-ultime-avec-la-playStation-5-la-nouvelle-frontiere-du-divertissement", 
        "Depuis son lancement très attendu, la PlayStation 5 (PS5) a secoué l'industrie du jeu vidéo avec ses performances de pointe, son design futuriste et son catalogue de jeux captivants. En tant que prochaine génération de consoles de salon, la PS5 repousse les limites de l'immersion et de l'interaction, offrant aux joueurs une expérience inoubliable à chaque session de jeu. ...",
        '2024-01-12',
        '2024-01-12',
        "ps5.jpg", 
        FALSE,
        3,
        2
    ),
    (
        "Plongez dans la Légende avec Final Fantasy VII Rebirth : Une Épopée Redéfinie pour une Nouvelle Génération", 
        "plongez-dans-la-legende-avec-final-fantasy-7-rebirth-une-epopee-redefinie-pour-une-nouvelle-generation", 
        "Depuis des décennies, la saga Final Fantasy a captivé les joueurs du monde entier avec ses histoires épiques, ses personnages inoubliables et son univers fantastique. Final Fantasy VII, sorti à l'origine en 1997, est souvent considéré comme l'un des meilleurs jeux de tous les temps, et sa récente réinterprétation, Final Fantasy VII Rebirth, promet de raviver la flamme de la passion pour cette aventure emblématique. ...", 
        '2024-02-08', 
        '2024-02-08', 
        "ff7rebirth.jpg", 
        TRUE, 
        1,
        3
    ),
    (
        "Xbox Game Pass", "xbox-game-pass", 
        "<h3>Le futur du divertissement entre vos mains</h3>
        <p>Jouer à des centaines de jeux exceptionnels avec des amis sur console, PC et dans le cloud, avec de nouveaux jeux régulièrement ajoutés, pour avoir toujours une nouveauté à découvrir...</p>
        <p><br><b>C'est possible avec le Xbox Game PASS<b></p>
        <h4>Jouez dès le premier jour</h4> 
        <p>Jouez aux nouveaux titres Xbox Game Studios dès le jour de leur sortie, mais aussi aux franchises mythiques de Bethesda Softworks, aux jeux indépendants, à des superproductions et bien plus encore.</p>
        <h3>Jouer sur l’appareil de son choix</h3>
        <p>Téléchargez des jeux et jouez hors ligne sur votre console ou votre PC Windows ou Linux, votre Steam Deck ou votre ROG Ally, Legion Go, et autre console portable, ou diffusez des jeux en continu depuis le cloud sur votre téléphone, tablette, etc.</p>",
        '2024-02-08', 
        '2024-02-08', 
        "ff7rebirth.jpg", 
        TRUE, 
        1,
        3
    );

-- Insérer de nouvelles données dans la table tags
INSERT INTO tags
    (name, slug)
VALUES
    ("Science-fiction", "science-fiction"),
    ("RPG", "rpg"),
    ("4K", "4k"),
    ("Linux", "linux"),
    ("Emulation", "emulation");

-- Insérer de nouvelles données dans la table define après que les données soient présentes dans posts
INSERT INTO define
    (id, id_tags)
VALUES
    (1, 2),  -- Vérifier que le post avec id 1 existe
    (2, 1),  -- Vérifier que le post avec id 2 existe
    (3, 1),  -- Vérifier que le post avec id 3 existe
    (3, 3);  -- Vérifier que le post avec id 3 existe

-- Insérer de nouvelles données dans la table comments
INSERT INTO comments
    (content, createdAt, id_users, id_posts)
VALUES
    ("Je préfère le Steam Deck", '2024-03-01', 1, 2),
    ("J'avoue", '2024-03-02', 2, 2),
    ("Meilleure console", '2024-03-03', 2, 1),
    ("N'importe quoi octogone tout de suite", '2024-03-04', 3, 1),
    ("La version PSX est moins longue", '2024-03-05', 3, 3);
