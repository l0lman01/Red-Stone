-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 avr. 2021 à 14:17
-- Version du serveur :  8.0.24
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `redstone`
--

-- --------------------------------------------------------

--
-- Structure de la table `animes`
--

DROP TABLE IF EXISTS `animes`;
CREATE TABLE IF NOT EXISTS `animes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL DEFAULT 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nb_folo` int NOT NULL DEFAULT '0',
  `background` varchar(255) NOT NULL DEFAULT 'Default.png',
  `logo` varchar(255) NOT NULL DEFAULT 'Default.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animes`
--

INSERT INTO `animes` (`id`, `name`, `image`, `description`, `date_created`, `nb_folo`, `background`, `logo`) VALUES
(8, 'Redo of Healer', 'Redo of Healer.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?', '2021-04-24 14:50:14', 2, 'Default.png', 'Default.png'),
(3, 'Rent a Girlfriend', 'Rent a Girlfriend.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?', '2021-04-24 14:50:14', 0, 'Default.png', 'Default.png'),
(4, 'Tonikawa over the moon', 'Tonikawa over the moon.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?', '2021-04-24 14:50:14', 0, 'Default.png', 'Default.png'),
(12, 'Uzaki chan want to Hang Out !', 'Uzaki-chan Wants to Hang Out!.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?', '2021-04-24 14:50:14', 1, 'Default.png', 'Default.png'),
(19, 'Love, Chunibyo and other delusion', 'chunibyo.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?', '2021-04-26 05:04:56', 0, 'Default.png', 'Default.png'),
(16, 'Bofuri', 'BOFURI.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?', '2021-04-24 14:50:14', 0, 'Default.png', 'Default.png');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories_anime`
--

DROP TABLE IF EXISTS `categories_anime`;
CREATE TABLE IF NOT EXISTS `categories_anime` (
  `anime_id` int NOT NULL,
  `categorie_id` int NOT NULL,
  PRIMARY KEY (`categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

DROP TABLE IF EXISTS `episodes`;
CREATE TABLE IF NOT EXISTS `episodes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nb_episode` int NOT NULL,
  `anime_id` int NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `saison` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `episodes`
--

INSERT INTO `episodes` (`id`, `nb_episode`, `anime_id`, `link`, `date`, `saison`) VALUES
(12, 3, 4, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/z4w7w4mipz2x\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '2021-04-20 12:48:11', 1),
(11, 2, 4, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/7eoxgyfkbtjd\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '2021-04-20 12:48:11', 1),
(10, 1, 4, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/29ptsl2fsqax\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '2021-04-20 12:48:11', 1),
(13, 1, 12, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/0muvff3fqugg\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '2021-04-20 12:48:11', 1),
(14, 2, 12, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/39c6254wk1i9\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '2021-04-20 12:48:11', 1),
(15, 1, 3, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/a47n0290a2xl\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '2021-04-20 12:48:11', 1),
(16, 2, 3, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/th6281odolpq\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '2021-04-20 12:48:11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nb_folo` int NOT NULL DEFAULT '0',
  `background` varchar(255) NOT NULL DEFAULT 'Default.png',
  `logo` varchar(255) NOT NULL DEFAULT 'Default.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id`, `name`, `description`, `image`, `date_created`, `nb_folo`, `background`, `logo`) VALUES
(2, 'demon slayer', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo cum, reprehenderit adipisci quod quidem odit voluptas illum perferendis eaque magni consectetur itaque quas aut laborum officia! Aliquam molestias quod aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptas, autem ut, vel provident, vitae praesentium numquam voluptate alias dolore fugit debitis libero cumque itaque veniam doloremque similique qui dolores?', 'demon_slayer_scan.jpg', '2021-04-25 03:06:59', 0, 'Default.png', 'Default.png'),
(3, 'Promised Neverland', '', 'neverland.jpg', '2021-04-26 05:29:03', 0, 'Default.png', 'Default.png'),
(4, 'Kaguya-sama: Love is war', '', 'kaguya.jpg', '2021-04-26 05:31:41', 0, 'Default.png', 'Default.png');

-- --------------------------------------------------------

--
-- Structure de la table `scan`
--

DROP TABLE IF EXISTS `scan`;
CREATE TABLE IF NOT EXISTS `scan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nb_scan` int NOT NULL,
  `link` varchar(250) NOT NULL,
  `manga_id` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `scan`
--

INSERT INTO `scan` (`id`, `nb_scan`, `link`, `manga_id`, `date`) VALUES
(1, 206, 'https://scansmangas.xyz/scan-kimetsu-no-yaiba-206/', 2, '2021-04-20 12:48:11'),
(2, 205, 'https://scansmangas.xyz/scan-kimetsu-no-yaiba-205/', 2, '2021-04-20 12:48:11'),
(3, 183, 'https://scansmangas.xyz/scan-the-promised-neverland-183/', 3, '2021-04-20 12:48:11'),
(4, 182, 'https://scansmangas.xyz/scan-the-promised-neverland-182/', 3, '2021-04-20 12:48:11'),
(5, 225, 'https://scansmangas.xyz/scan-kaguya-sama-wa-kokurasetai-tensai-tachi-no-renai-zunousen-225/', 4, '2021-04-20 12:48:11'),
(6, 224, 'https://scansmangas.xyz/scan-kaguya-sama-wa-kokurasetai-tensai-tachi-no-renai-zunousen-224/', 4, '2021-04-20 12:48:11');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `statut` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'host',
  `creation_account` date NOT NULL,
  `profil_picture` varchar(100) NOT NULL DEFAULT 'Default.png',
  `end_subscription` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `pseudo`, `password`, `statut`, `creation_account`, `profil_picture`, `end_subscription`) VALUES
(1, 'test@test.test', 'bonsoir', '$2y$10$hM86G9Isz7copJ7jZqA/EemYzv9MZKNsCCVTmx6Tfnex7UEG3bCBG', 'admin', '0000-00-00', 'Kazuma_PP.jpg', NULL),
(3, 'wow@wow.wow', '', '$2y$10$1OvH6k1LLIJU/Fs94Pbv/eTg6XOVNLArZm3ZrhghZtVY0y3L2feva', 'client', '0000-00-00', 'Default.png', NULL),
(4, 'lol@lol.lol', '', '$2y$10$.K5Hf1Rr2W15OGnbNWO.Vuq6HzMIl/5Wh5lHiIzu5BDSWKC8ZYe1S', 'host', '0000-00-00', 'Default.png', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
