-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 21 avr. 2021 à 12:47
-- Version du serveur :  8.0.23
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
  `categorie` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animes`
--

INSERT INTO `animes` (`id`, `name`, `categorie`, `image`) VALUES
(1, 'Bofuri', '', 'BOFURI.jpg'),
(8, 'Redo of Healer', '', 'Redo of Healer.jpg'),
(3, 'Rent a Girlfriend', '', 'Rent a Girlfriend.jpg'),
(4, 'Tonikawa over the moon', '', 'Tonikawa over the moon.jpg'),
(12, 'Uzaki chan want to Hang Out !', '', 'Uzaki-chan Wants to Hang Out!.jpg'),
(13, 'Uzaki chan want to Hang Out !', '', 'Uzaki-chan Wants to Hang Out!.jpg'),
(14, 'Uzaki chan want to Hang Out !', '', 'Uzaki-chan Wants to Hang Out!.jpg'),
(15, 'Tonikawa over the moon', '', 'Tonikawa over the moon.jpg'),
(16, 'Bofuri', '', 'BOFURI.jpg'),
(17, 'Uzaki chan want to Hang Out !', '', 'Uzaki-chan Wants to Hang Out!.jpg'),
(18, 'Uzaki chan want to Hang Out !', '', 'Uzaki-chan Wants to Hang Out!.jpg');

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
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `saison` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `episodes`
--

INSERT INTO `episodes` (`id`, `nb_episode`, `anime_id`, `link`, `description`, `date`, `saison`) VALUES
(3, 1, 1, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/fuokgko4y71d\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '', '2021-04-20 12:48:11', 1),
(4, 2, 1, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/cro4k7itswj3\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '', '2021-04-21 13:28:46', 1),
(5, 1, 1, '<iframe width=\"640\" height=\"360\" src=\"https://uptostream.com/iframe/c7py1irnubpn\" scrolling=\"no\" frameborder=\"0\" allowfullscreen webkitallowfullscreen></iframe>', '', '2021-04-21 13:29:22', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `statut` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `statut`) VALUES
(1, 'test@test.test', '$2y$10$hM86G9Isz7copJ7jZqA/EemYzv9MZKNsCCVTmx6Tfnex7UEG3bCBG', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
