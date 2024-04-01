-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2024 at 06:18 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `cda_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `id_categories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `id_categories`) VALUES
(1, 'Consoles', 'console', NULL),
(2, 'Consoles portables', 'handheld', 1),
(3, 'Consoles retro', 'retro-console', 1),
(4, 'Services', 'services', NULL),
(5, 'Jeux', 'games', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `createdAt`, `id_users`, `id_posts`) VALUES
(1, 'Je préfère le Steam Deck', '2024-03-01 00:00:00', 1, 2),
(2, 'J\'avoue', '2024-03-02 00:00:00', 2, 2),
(3, 'Meilleure console', '2024-03-03 00:00:00', 2, 1),
(4, 'N\'importe quoi octogone tout de suite', '2024-03-04 00:00:00', 3, 1),
(5, 'La version PSX est moins longue', '2024-03-05 00:00:00', 3, 3),
(8, 'Meilleur achat pour seulement 40€', '2024-03-28 11:20:27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `define`
--

CREATE TABLE `define` (
  `id` int(11) NOT NULL,
  `id_tags` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `define`
--

INSERT INTO `define` (`id`, `id_tags`) VALUES
(2, 1),
(3, 1),
(1, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `createdAt`, `updatedAt`, `image`, `active`, `id_users`, `id_categories`) VALUES
(1, 'Découvrez la Révolution du Jeu Nomade avec la Console Portable R36S', 'decouvrez_la_revolution_du_jeu_nomade_avec_la_console_portable_r36s', '\n        Dans l\'univers du gaming, l\'évolution technologique ne cesse de nous surprendre. La dernière innovation qui fait parler d\'elle est la console portable R36S, une véritable révolution dans le monde du jeu nomade. Avec des fonctionnalités à la pointe de la technologie et un design ergonomique, cette console promet une expérience de jeu immersive à tout instant, où que vous soyez.\n        <h3>Puissance et Performance :</h3>\n        La console portable R36S est équipée d\'un processeur dernière génération, offrant une puissance de traitement supérieure pour des performances optimales. Que vous soyez un amateur de jeux vidéo exigeant ou un joueur occasionnel, cette console répondra à toutes vos attentes en termes de fluidité et de réactivité. Grâce à sa puissance de calcul, les jeux les plus exigeants jusqu\'a la dreamcast de Sega fonctionnent sans accroc, vous permettant de plonger pleinement dans l\'univers de vos jeux préférés.\n        <h3>Ecran Époustouflant :</h3>\n        L\'écran 460p de la R36S offre une fidélité impressionnante, avec des couleurs vives et des détails saisissants. Que vous soyez en train d\'explorer des mondes fantastiques, de participer à des courses endiablées ou de vivre des aventures épiques, chaque image est rendue avec une clarté exceptionnelle. Vous serez littéralement transporté au cœur de l\'action, pour une immersion totale dans vos jeux préférés.\n        <h3>Polyvalence et Flexibilité :</h3>\n        La R36S permet de découvrir nombre de systèmes, mais son OS ArkOS et son ouverture aux CFW de la communauté lui donne des possibilités d\'évolution intéressante et surtout une bonne fiabilité et un excellent suivi\n        <h3>Design Ergonomique :</h3>\n        Conçue pour une prise en main optimale, la console R36S arbore un design ergonomique qui la rend confortable à tenir, même lors de sessions de jeu prolongées. Les boutons sont disposés de manière intuitive pour une expérience de jeu fluide et agréable, tandis que son poids léger en fait le compagnon de voyage parfait pour les longs trajets en train, en avion ou en voiture.\n        <h3>Autonomie Longue Durée :</h3>\n        L\'autonomie de la batterie est un élément crucial pour une console portable, et la R36S ne déçoit pas. Grâce à une gestion intelligente de l\'énergie, vous pouvez profiter de plusieurs heures de jeu ininterrompu sur une seule charge. Que vous soyez en déplacement ou simplement en train de vous détendre à la maison, vous pouvez jouer sans vous soucier de manquer de batterie.\n        En conclusion, la console portable R36S représente une véritable révolution dans le monde du jeu nomade a petit prix. Avec sa puissance, ses performances et sa polyvalence, elle offre une expérience de jeu excellente, où que vous soyez. Que vous soyez un joueur occasionnel ou un passionné invétéré, cette console est sûre de vous impressionner par ses fonctionnalités avancées et son design ergonomique. Préparez-vous à plonger dans un monde de divertissement sans limites, avec la console portable R36S à vos côtés.', '2024-01-10 00:00:00', '2024-02-08 00:00:00', 'bin/img/r36s.jpg', 1, 2, 1),
(2, 'Découvrez l\'Expérience de Jeu Ultime avec la PlayStation 5 : La Nouvelle Frontière du Divertissement', 'decouvrez_l_experience_de_jeu_ultime_avec_la_playStation_5_la_nouvelle_frontiere_du_divertissement', 'Depuis son lancement très attendu, la PlayStation 5 (PS5) a secoué l\'industrie du jeu vidéo avec ses performances de pointe, son design futuriste et son catalogue de jeux captivants. En tant que prochaine génération de consoles de salon, la PS5 repousse les limites de l\'immersion et de l\'interaction, offrant aux joueurs une expérience inoubliable à chaque session de jeu.\n        <h3>Puissance et Performance :</h3>\n        Dotée d\'un processeur AMD Ryzen de dernière génération et d\'une puce graphique AMD Radeon RDNA 2, la PS5 délivre une puissance de calcul impressionnante. Les temps de chargement sont réduits à leur plus simple expression, tandis que les graphismes ultra-réalistes et les fréquences d\'image élevées garantissent une immersion totale dans chaque jeu. Que vous exploriez des mondes ouverts vastes et magnifiques ou que vous affrontiez des ennemis redoutables dans des combats épiques, la PS5 vous transporte au cœur de l\'action avec une fluidité et une clarté exceptionnelles.\n        <h3>Technologie Révolutionnaire :</h3>\n        La PS5 introduit plusieurs fonctionnalités révolutionnaires qui redéfinissent la façon dont nous jouons. Le contrôleur sans fil DualSense, avec sa technologie de retour haptique et ses gâchettes adaptatives, offre des sensations de jeu immersives, permettant aux joueurs de ressentir chaque impact, chaque vibration et chaque mouvement avec une précision incroyable. De plus, la technologie audio 3D Tempest de la PS5 crée un environnement sonore enveloppant, vous plongeant au cœur de l\'univers du jeu pour une expérience audio immersive sans précédent.\n        <h3>Catalogue de Jeux Exceptionnel :</h3>\n        La PS5 propose un catalogue de jeux varié et captivant, comprenant à la fois des titres exclusifs et des jeux multiplateformes de premier plan. Des franchises emblématiques telles que \'Spider-Man: Miles Morales\', \'Demon\'s Souls\' et \'Ratchet & Clank: Rift Apart\' exploitent pleinement les capacités de la console, offrant des expériences de jeu uniques et inoubliables. Que vous soyez fan de jeux d\'action, d\'aventure, de sport ou de jeu de rôle, la PS5 propose quelque chose pour tous les goûts.\n        <h3>Connectivité et Multimédia :</h3>\n        En plus de son incroyable capacité de jeu, la PS5 offre également une connectivité étendue et des fonctionnalités multimédias avancées. Avec des options de streaming en 4K, la prise en charge de la lecture de disques Blu-ray Ultra HD et l\'intégration de services de streaming populaires tels que Netflix, Disney+, et Spotify, la PS5 est bien plus qu\'une simple console de jeu - c\'est un centre de divertissement complet pour toute la famille.\n        <h3>Design Élégant et Futuriste :</h3>\n        Le design de la PS5 est à la fois audacieux et futuriste, avec ses lignes épurées, ses courbes élégantes et son éclairage LED emblématique. Que vous choisissiez la version standard avec lecteur Blu-ray ou la version entièrement numérique, la PS5 est un véritable chef-d\'œuvre de design qui ajoutera une touche de sophistication à n\'importe quel espace de divertissement.\n        En conclusion, la PlayStation 5 représente la nouvelle frontière du divertissement interactif, offrant aux joueurs une expérience de jeu inégalée grâce à sa puissance, ses fonctionnalités innovantes et son catalogue de jeux exceptionnel. Que vous soyez un passionné de jeux vidéo ou un joueur occasionnel, la PS5 promet de vous transporter dans des mondes fantastiques et des aventures inoubliables, repoussant les limites de ce qui est possible dans le monde du jeu vidéo. Préparez-vous à vivre l\'expérience de jeu ultime avec la PlayStation 5.', '2024-01-12 00:00:00', '2024-01-12 00:00:00', 'bin/img/ps5.jpg', 0, 3, 2),
(3, 'Plongez dans la Légende avec Final Fantasy VII Rebirth : Une Épopée Redéfinie pour une Nouvelle Génération', 'plongez_dans_la_legende_avec_final_fantasy_7_rebirth_une_epopee_redefinie_pour_une_nouvelle_generation', '</h3>\n        Depuis des décennies, la saga Final Fantasy a captivé les joueurs du monde entier avec ses histoires épiques, ses personnages inoubliables et son univers fantastique. Final Fantasy VII, sorti à l\'origine en 1997, est souvent considéré comme l\'un des meilleurs jeux de tous les temps, et sa récente réinterprétation, Final Fantasy VII Rebirth, promet de raviver la flamme de la passion pour cette aventure emblématique.</h3>\n        <h3>Une Réinvention Époustouflante :</h3>\n        Final Fantasy VII Rebirth n\'est pas seulement un remaster ou un simple portage du jeu original. C\'est une réinvention époustouflante qui redéfinit l\'expérience de jeu pour une nouvelle génération de joueurs tout en honorant la vision et l\'héritage du jeu original. Avec des graphismes entièrement remaniés en haute définition, des cinématiques époustouflantes et un système de combat repensé, cette version revisite l\'univers de Final Fantasy VII d\'une manière qui éblouit les fans de longue date tout en séduisant les nouveaux venus.</h3>\n        <h3>Des Personnages Réalistes et Profonds :</h3>\n        Les personnages emblématiques de Final Fantasy VII prennent vie comme jamais auparavant dans Rebirth. De Cloud Strife, le héros taciturne avec un passé mystérieux, à Aerith Gainsborough, la fleuriste au cœur tendre, chaque personnage est présenté avec une profondeur émotionnelle et une expressivité remarquables. Les joueurs sont invités à découvrir leurs histoires fascinantes et à tisser des liens avec eux à travers des moments poignants et des interactions riches en émotion.</h3>\n        <h3>Un Monde à Explorer :</h3>\n        L\'univers de Final Fantasy VII est vaste et diversifié, regorgeant de villes animées, de paysages époustouflants et de donjons dangereux. Dans Rebirth, ce monde est plus vivant que jamais, avec des environnements détaillés et immersifs qui invitent les joueurs à explorer chaque recoin à la recherche de secrets cachés, de quêtes secondaires et de rencontres inattendues. Que vous voguiez à travers les ruines de Midgar ou que vous escaladiez les sommets enneigés du mont Nibel, chaque lieu est imprégné d\'une atmosphère unique et d\'une beauté saisissante.</h3>\n        <h3>Un Système de Combat Stratégique :</h3>\n        Le système de combat de Final Fantasy VII Rebirth combine habilement les éléments classiques du jeu de rôle japonais avec des mécaniques modernes et dynamiques. Les affrontements se déroulent en temps réel, permettant aux joueurs de prendre des décisions stratégiques rapidement tout en utilisant les compétences et les pouvoirs uniques de leurs personnages. De plus, le système de matéria, un pilier de la série Final Fantasy, a été repensé pour offrir plus de profondeur et de personnalisation que jamais auparavant.</h3>\n        <h3>Une Bande-Sonore Magistrale :</h3>\n        La musique a toujours joué un rôle crucial dans l\'expérience de jeu de Final Fantasy, et Rebirth ne fait pas exception. La bande-son épique et émouvante, composée par des maîtres de l\'industrie tels que Nobuo Uematsu et Masashi Hamauzu, accompagne chaque moment du jeu, renforçant l\'atmosphère et l\'émotion de l\'aventure. Des thèmes emblématiques tels que \'Aerith\'s Theme\' et \'One-Winged Angel\' résonnent avec une puissance et une beauté intemporelles, laissant une impression durable sur les joueurs.</h3>\n        En conclusion, Final Fantasy VII Rebirth est bien plus qu\'un simple remake - c\'est une expérience de jeu magistrale qui célèbre l\'héritage de l\'original tout en repoussant les limites de ce qui est possible dans le monde du jeu vidéo. Que vous soyez un fan de longue date de la série ou un nouveau venu curieux de découvrir cette épopée légendaire, Rebirth promet de vous transporter dans un monde de fantastique et d\'aventure inoubliable. Préparez-vous à plonger dans la légende avec Final Fantasy VII Rebirth.', '2024-02-08 00:00:00', '2024-02-08 00:00:00', 'bin/img/ff7rebirth.jpg', 1, 1, 3),
(4, 'Steam Deck : Le meilleur des deux mondes', 'steam-deck-le-meilleur-des-deux-mondes', 'Malgré la qualité du matériel Gaming, tout est question de choix.\r\nLes consoles permettent de jouer aux exclusivités, le PC de faire parler la puissance, et les machines portables d\'emmener nos jeux partout avec nous.\r\nLe Steam Deck, lui, permet tout cela.\r\n\r\n<h3>Puissance et possibilités :</h3>\r\nLe Steam deck est équipé d\'un APU AMD 6 nm constitué d\'un CPU Zen 2 4 c/8 t capable de fréquences allant de 2,4 à 3,5 GHz et d\'un GPU 8 UC RDNA 2 ; 1,6 GHz, lui permettant de faire tourner quasiment tous les jeux récents a date de sa sortie en 2022, et bien plus encore.\r\n\r\nPuissance de l\'APU : 4 à 15 watts\r\nMémoire vive\r\nRAM LPDDR5 de 16 Go intégrée (quatre canaux de 32 bits, 6400 MT/s) R36S\r\n\r\n<h3>Confort de jeu :</h3>\r\nLe Steam Deck embarque un écran LED 720p 90hz ou un OLED 120hz impressionnants, des contrôles complets renforcés par des trackpads uniques ultra précis vous garantissant une navigation aisée dans vos applications et le bureau Linux\r\n\r\n<h3>Polyvalence et Flexibilité :</h3>\r\n\r\nL\'expérience Out of the Box du Steam Deck permet déjà de jouer a toute votre bibliothèque Steam, ce qui n\'est pas rien, mais grâce a son système Linux complet, tout est possible. De l\'ajout d\'Emudeck aux Launchers alternatifs comme Epic ou Connect, mais également les services Cloud tels que d\'un excellent suivi \r\n\r\n<h3>Design Ergonomique :</h3>\r\nConçue pour une prise en main optimale, la console R36S arbore un design ergonomique qui la rend confortable à tenir, même lors de sessions de jeu prolongées. Les boutons sont disposés de manière intuitive pour une expérience de jeu fluide et agréable, tandis que son poids léger en fait le compagnon de voyage parfait pour les longs trajets en train, en avion ou en voiture.\r\n        <h3>Autonomie Longue Durée :</h3>\r\n        L\'autonomie de la batterie est un élément crucial pour une console portable, et la R36S ne déçoit pas. Grâce à une gestion intelligente de l\'énergie, vous pouvez profiter de plusieurs heures de jeu ininterrompu sur une seule charge. Que vous soyez en déplacement ou simplement en train de vous détendre à la maison, vous pouvez jouer sans vous soucier de manquer de batterie.\r\n        En conclusion, la console portable R36S représente une véritable révolution dans le monde du jeu nomade a petit prix. Avec sa puissance, ses performances et sa polyvalence, elle offre une expérience de jeu excellente, où que vous soyez. Que vous soyez un joueur occasionnel ou un passionné invétéré, cette console est sûre de vous impressionner par ses fonctionnalités avancées et son design ergonomique. Préparez-vous à plonger dans un monde de divertissement sans limites, avec la console portable R36S à vos côtés.', '2024-02-10 18:24:22', '2024-03-08 00:00:00', 'steam-deck.jpg', 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`) VALUES
(1, 'Science-fiction', 'science-fiction'),
(2, 'RPG', 'rpg'),
(3, '8K', '8k'),
(4, '4K', '4k'),
(5, 'Linux', 'linux'),
(6, 'Emulation', 'emulation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastName` varchar(90) NOT NULL,
  `firstName` varchar(90) NOT NULL,
  `email` varchar(140) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lastName`, `firstName`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Gold', 'Georgio', 'georgio.gold@gmail.com', '0987654321', '$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.', 'ROLE_USER'),
(2, 'Silver', 'Agatha', 'agatha.silver@gmail.com', '0123456789', '$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.', 'ROLE_MODER'),
(3, 'Bronze', 'Leeroy', 'leeroy.bronze@gmail.com', '0321654987', '$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.', 'ROLE_ADMIN'),
(4, 'Pearl', 'Lily', 'lily.nacre@gmail.com', '0655443322', '$2y$10$Duplc63d/3k9pdVEzqPcFOP3I/Z9ZJXtHC7hMqlT2NGJ5jVWwvDy2', 'ROLE_USER'),
(5, 'Nickel', 'Camille', 'camille.nickel@gmail.com', '321456456', '$2y$10$Duplc63d/3k9pdVEzqPcFOP3I/Z9ZJXtHC7hMqlT2NGJ5jVWwvDy2', 'ROLE_USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_categories0_FK` (`id_categories`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_users0_FK` (`id_users`),
  ADD KEY `comments_posts1_FK` (`id_posts`);

--
-- Indexes for table `define`
--
ALTER TABLE `define`
  ADD PRIMARY KEY (`id`,`id_tags`),
  ADD KEY `define_tags1_FK` (`id_tags`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_users0_FK` (`id_users`),
  ADD KEY `posts_categories1_FK` (`id_categories`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_posts1_FK` FOREIGN KEY (`id_posts`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `define`
--
ALTER TABLE `define`
  ADD CONSTRAINT `define_posts0_FK` FOREIGN KEY (`id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `define_tags1_FK` FOREIGN KEY (`id_tags`) REFERENCES `tags` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categories1_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;
