-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 24 nov. 2023 à 13:11
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `z53ri_newcv`
--
CREATE DATABASE IF NOT EXISTS `z53ri_newcv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `z53ri_newcv`;

-- --------------------------------------------------------

--
-- Structure de la table `acces`
--

CREATE TABLE `acces` (
  `id` int NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Security` varchar(50) NOT NULL,
  `Acces` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `acces`
--

INSERT INTO `acces` (`id`, `Name`, `Security`, `Acces`) VALUES
(54545, 'TEST', '456789', 'No Access'),
(125888, 'Utilisateur', '124524', 'All');

-- --------------------------------------------------------

--
-- Structure de la table `diploma`
--

CREATE TABLE `diploma` (
  `id` int NOT NULL,
  `NameDiploma` varchar(100) NOT NULL,
  `Connections` varchar(500) NOT NULL,
  `PathDiploma` varchar(500) NOT NULL,
  `Extension` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `diploma`
--

INSERT INTO `diploma` (`id`, `NameDiploma`, `Connections`, `PathDiploma`, `Extension`) VALUES
(1, 'Certificat de Formations Aux Premier Secours en Équipes avec utilisation de défibrillateur Externe', '../Asset/img/Diplome/', 'CFAPSE.jpg', 'jpg'),
(2, 'Agent de Préventions et de Sécurité', '../Asset/img/Diplome/', 'APS.jpg', 'jpg'),
(3, 'Agent des Service de Sécurité et Assistances au Personne Niveau 1', '../Asset/img/Diplome/', 'SSIAP.jpg', 'jpg'),
(4, 'Conducteur inter Urbain de voyageur', '../Asset/img/Diplome/', 'Conductuer-interUrbais.jpg', 'jpg'),
(5, 'Développeur Web et Web Mobile', '../Asset/img/Diplome/', 'DWWM.jpg', 'jpg'),
(6, 'Concepteur Développeur d\'application', '../Asset/img/Diplome', 'CDA.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Structure de la table `domain`
--

CREATE TABLE `domain` (
  `id` int NOT NULL,
  `DomainName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `domain`
--

INSERT INTO `domain` (`id`, `DomainName`) VALUES
(2, 'Compétences transversales'),
(3, 'Logistique'),
(4, 'Gestion D\'une entreprise'),
(5, 'Développement'),
(6, 'Managment '),
(7, 'Cybert-Sécurité');

-- --------------------------------------------------------

--
-- Structure de la table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int NOT NULL,
  `HobbiesName` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `HobbiesDescription` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Since` year DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `hobbies`
--

INSERT INTO `hobbies` (`id`, `HobbiesName`, `HobbiesDescription`, `Since`) VALUES
(1, 'Le rallye', 'Commissaire de course International (licence B) sur rallye, Endurance tout terrain, Circuit', '2017'),
(2, 'La Moto', 'Je suis motard depuis 2007 (permis A) \r\nJe possédes une ZZR 1100 de 1994. \r\n', '2007'),
(3, 'Responsable informatique et classement ligues des Hauts de France du sport Automobile', 'Enregistrement informatique des concurrents avant les épreuves<br>Enregistrement informatique \n, des abandons, pénalité, temps et classement pendant les épreuves.', '2021');

-- --------------------------------------------------------

--
-- Structure de la table `identity`
--

CREATE TABLE `identity` (
  `id` int NOT NULL,
  `pseudo` varchar(60) DEFAULT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Aged` date DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Adress` varchar(150) NOT NULL,
  `City` varchar(50) NOT NULL,
  `ZipCode` varchar(50) NOT NULL,
  `pwd` varchar(60) DEFAULT NULL,
  `Mail` varchar(50) NOT NULL,
  `LicenceDriver` varchar(40) DEFAULT NULL,
  `Mobility` int NOT NULL,
  `Vehicle` varchar(50) DEFAULT NULL,
  `accesId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `identity`
--

INSERT INTO `identity` (`id`, `pseudo`, `PhoneNumber`, `Aged`, `Name`, `FirstName`, `Adress`, `City`, `ZipCode`, `pwd`, `Mail`, `LicenceDriver`, `Mobility`, `Vehicle`, `accesId`) VALUES
(1, 'Motard', '0614593745', '1988-07-05', 'Wilbert', 'Gaëtan', 'Apt2<br>Batiment A<br>Résidence Moliere<br>Rue Neuve', 'Jussy', '02480', '28112023Equennes', 'gaetan.wilbert@outlook.fr', 'A,B', 50, 'Voiture, moto', 125888);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int NOT NULL,
  `pseudo` varchar(60) DEFAULT NULL,
  `Society` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `ContactPhone` varchar(20) NOT NULL,
  `CompagnyAddress` varchar(150) NOT NULL,
  `ZipCode` varchar(5) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Clef` varchar(500) NOT NULL,
  `pwd` varchar(60) DEFAULT NULL,
  `Actif` varchar(10) DEFAULT NULL,
  `id_acces` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `pseudo`, `Society`, `Name`, `FirstName`, `ContactPhone`, `CompagnyAddress`, `ZipCode`, `City`, `Mail`, `Clef`, `pwd`, `Actif`, `id_acces`) VALUES
(3, 'Motard', 'takimoto', 'Wilbert', 'Gaetan', '0614593745', 'Apt2<br>résidence Moliere<br>Batiment A<br> rue neuve', '02480', 'Jussy', 'gaetan.wilbert@outlook.fr', 'e6mu#f@EgYoww3r1668847014e6mu#f@EgYoww3r', '28112023Equennes', 'True', 25512);

-- --------------------------------------------------------

--
-- Structure de la table `professionnalcompetence`
--

CREATE TABLE `professionnalcompetence` (
  `id` int NOT NULL,
  `JobName` varchar(500) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Compagny` varchar(100) NOT NULL,
  `JobDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `professionnalcompetence`
--

INSERT INTO `professionnalcompetence` (`id`, `JobName`, `StartDate`, `EndDate`, `Compagny`, `JobDescription`) VALUES
(14, 'Sapeur Pompier volontaire ', '2005-08-01', '2015-08-31', 'SDIS 80', 'CIS Poix de Picardie et Flixecourt\r\nLutte contre l\'incendie\r\nIntervention de secours à personne\r\nIntervention divers'),
(15, 'Brancardier Bloc Opératoire des Urgences (de NUIT)', '2007-01-01', '2013-04-30', 'CHU AMIENS NORD (80)', 'Brancardage, installations, nettoyage des salles d\'opérations'),
(16, 'Élève Aide Médico psychologique', '2013-06-15', '2014-08-31', ' Maison des Ainées Acheux en Amienois (80)', 'Accompagnement de personnes âgées souffrant de démence sénile ou de la maladie d’Alzheimer'),
(17, 'Agent de Sécurité incendie/ Agent de sécurité incendie de Bord ', '2015-06-01', '2015-12-31', 'Chantier Naval de Saint Nazaire (44)', 'Controle de sécurité incendie pendant la construction de navire'),
(18, 'Préventeur en milieu Pétrochimique /Diagnostiquer Amiante/Controlleur\r\nd\'échaffaudage', '2016-01-01', '2018-12-15', 'Total FLANDRE/ Total Normandie', 'Chargés des controles de la conformité des échafaudages ainsi que du respect des régles de sécurité des sociétés extérieurs'),
(19, 'Chef de projet digital (biomarques)', '2021-01-25', '2021-07-14', 'Biomarques SAS', 'CDI 25 janvier 2021-14 juillet 2021<br>\n-Gestion de la conception d\'un site internet de vente de produits bio sur internet<br>\n-Gestion de l’entrepôt<br>\n-Mise en place de procédures de gestion de stock<br>\n-Mise en place et configuration d\'un WMS<br>\n-Manager d\'équipe de développeurs et manutentionnaires d\'entrepôt'),
(20, 'Creation d\'une entreprise et fermeture (Takimoto SAS) aout 2021-octobre 2022', '2021-08-01', '2022-10-27', 'Takimoto SAS', 'Président, directeur du pole logistique du 1 avril au 27 octobre 2022<br>\r\nGestion des démarches administratives<br>\r\nCréation d\'un site internet gestion des API<br>\r\nGestion des stocks, gestion des comptes, gestion des relations avec l\'URSAF et les impos<br>');

-- --------------------------------------------------------

--
-- Structure de la table `resumename`
--

CREATE TABLE `resumename` (
  `id` int NOT NULL,
  `CvName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `SubDomain` varchar(100) NOT NULL,
  `Performance` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `Description`, `SubDomain`, `Performance`) VALUES
(15, 'Gestion des conflits', '2', 70),
(16, 'Gestion des plannings d\'équipes', '13', 95),
(18, 'Utilisation de méthode UML, MCD, MLD, MVC', '5', 80),
(19, 'Conception d\' API', '5', 60),
(20, 'JavaFX', '15', 60),
(21, 'PHP', '14', 95),
(22, 'Utilisation de MySql PHPMyadmin', '16', 95),
(23, 'Création et configuration d\'un site internet avec  Prestashop', '23', 75),
(24, 'Dollibar', '23', 80),
(25, 'Prestashop&lt;-&gt;Dollibar', '22', 75),
(26, 'Gestion des flus de marchandises commandes expéditions', '17', 80),
(30, 'Tache administratives d\'ouverture d\'une SAS', '20', 95),
(31, 'CSS', '14', 95),
(32, 'JavaScript', '14', 80),
(33, 'Synphony', '15', 50),
(34, 'Jquery', '15', 89),
(35, 'Bootstap', '15', 80),
(36, 'VueJs', '15', 76),
(37, 'Developpement d\'une application sur le terme du covid dans le cadre du diplome CDA', '25', 50),
(38, 'Création d\'une antenne d\'association de Motards', '26', 99),
(39, 'Gestion administratif d\'une Association ', '26', 89),
(40, 'Gestion des conflis', '21', 89),
(41, 'Utilisation de  trello pour  la gestion des taches de l\'équipe ', '12', 95),
(42, 'Realisation d\'une application métier en relation avec un site internet dans le cadre du diplome de concepteur développeur d\'application', '24', 80),
(43, 'HTML', '14', 99),
(44, 'Formation aux premier secours en équipe', '18', 90),
(45, 'Formation au secourisme du travail', '18', 99),
(46, 'Formation au Feux en espace clos et semis ouvert', '19', 95),
(47, 'Formation à la lutte contre l\'incendie dans le cadre de la formation SSIAP 1', '19', 99),
(48, 'Dossier administratif de fermeture d\'une entrepise SAS', '27', 95),
(49, 'Préparation au bilan d\'une entreprise SAS', '28', 95),
(50, 'Relation avec les impots', '29', 95),
(51, 'Utilisation des bonnes pratique en matiere de cyber-sécurité; \r\n', '30', 10);

-- --------------------------------------------------------

--
-- Structure de la table `subdomaine`
--

CREATE TABLE `subdomaine` (
  `id` int NOT NULL,
  `SubDomaineName` varchar(500) NOT NULL,
  `Domain` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `subdomaine`
--

INSERT INTO `subdomaine` (`id`, `SubDomaineName`, `Domain`) VALUES
(12, 'Utilisation d\'outils colaboratif', '6'),
(13, 'Gestion de planning', '6'),
(14, 'Langage', '5'),
(15, 'Framwork', '5'),
(16, 'Base de donnée', '5'),
(17, 'Gestion des flux entrant et sortant de marchandise', '3'),
(18, 'Secourisme du travail', '2'),
(19, 'Lutte contre L\'incendie ', '2'),
(20, 'Dossier d\'ouverture d\'une entreprise', '4'),
(21, 'Gestion d\'équipe', '6'),
(22, 'API', '5'),
(23, 'Configuration ERP', '3'),
(24, 'Relation Web et application Métier', '5'),
(25, 'Theme', '5'),
(26, 'Association', '2'),
(27, 'Dossier de fermeture d\'une entreprise', '4'),
(28, 'Comptabilité', '4'),
(29, 'Tache administratif diverse', '4'),
(30, 'Bonne pratique Cyber-sécurité', '8'),
(31, 'Testetetererererer', '7');

-- --------------------------------------------------------

--
-- Structure de la table `training`
--

CREATE TABLE `training` (
  `id` int NOT NULL,
  `Name` varchar(500) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `School` varchar(50) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `training`
--

INSERT INTO `training` (`id`, `Name`, `StartDate`, `EndDate`, `School`, `Level`, `Description`) VALUES
(1, 'Certificat de qualification professionnelle Agent de prévention et de sécurité', '2015-01-06', '2015-02-14', 'INTERFOR Amiens (80)', 'BEP-CAP', 'Apprentissage de la gestion de conflit des règles de surveillance et des règles de sécurité et de préventions'),
(2, 'Titre Professionnel D\'agent de service de sécurité incendie et d\'assistance à personnes Niveau 1', '2015-02-15', '2015-03-31', 'INTERFOR Amiens (80)', 'BEP-CAP', 'Apprentissage des règles en Immeuble de grande hauteur et en établissement recevant du public (IGH -ERP) dans le domaine de la sécurité incendie'),
(3, 'Titre Professionnel de conducteur inter Urbain de voyageur', '2017-04-03', '2017-07-31', 'AFTRAL Amiens (80)', 'Bac', 'Apprentissage à la conduite d\'un autocar et d\'un bus'),
(4, 'Développeur Web et Web Mobile', '2019-03-04', '2019-09-27', 'La Manu Soissons-02', 'Bac+2', 'Apprentissage de différent\r\nlangages dont PHP HTML CSS\r\nC# utilisation de\r\nframework'),
(5, 'Concepteur Développeur d\'Application ', '2020-01-20', '2020-09-30', 'AFPA Amiens(80)', 'Bac+3/4', '-Utilisation des langage PHP, JavaScript HTML, CSS, JAVA(JDK13+), Android <br>-Utilisation des framework Symfony, JQuery , Boostraap, Vuejs, JavaFX <br>-Conception d\' API <br>-Utilisation de méthode UML, MCD, MLD, MVC <br>-\r\nDéveloppement d\'application mobile Androïd'),
(6, ' CACES R489 cat. 1B ', '2021-11-22', '2021-11-30', 'GRETA SOMME Roye(80)', 'BEP-CAP', 'Apprentissage de la manipulation de chario logistique correspondant au CASES 1 B');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acces`
--
ALTER TABLE `acces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professionnalcompetence`
--
ALTER TABLE `professionnalcompetence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resumename`
--
ALTER TABLE `resumename`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subdomaine`
--
ALTER TABLE `subdomaine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `diploma`
--
ALTER TABLE `diploma`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `domain`
--
ALTER TABLE `domain`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `identity`
--
ALTER TABLE `identity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `professionnalcompetence`
--
ALTER TABLE `professionnalcompetence`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `resumename`
--
ALTER TABLE `resumename`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `subdomaine`
--
ALTER TABLE `subdomaine`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `training`
--
ALTER TABLE `training`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
