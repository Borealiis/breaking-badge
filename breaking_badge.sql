-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 jan. 2021 à 13:56
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `breaking_badge`
--

-- --------------------------------------------------------

--
-- Structure de la table `table_badges`
--

DROP TABLE IF EXISTS `table_badges`;
CREATE TABLE IF NOT EXISTS `table_badges` (
  `badge_id` int(11) NOT NULL AUTO_INCREMENT,
  `badge_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `badge_desc` text COLLATE utf8mb4_bin NOT NULL,
  `badge_color` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `badge_shape` enum('ring','elem','stars') COLLATE utf8mb4_bin NOT NULL,
  `badge_tag` enum('success','collection','admin') COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`badge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `table_badges`
--

INSERT INTO `table_badges` (`badge_id`, `badge_name`, `badge_desc`, `badge_color`, `badge_shape`, `badge_tag`) VALUES
(1, 'DeusEx', 'The godmode has nothing to envy them.', 'rainbow', 'stars', 'admin'),
(2, 'Newbie', 'You\'re green, win 20 achievements to get out of the sandbox.', '#7cfc00', 'ring', 'success'),
(3, 'Gamer', 'You win 20 achievements! Congratulations and welcome to the big league.', '#7fffd4', 'ring', 'success'),
(4, 'Challenger', 'You win 50 achievements! Are you sure you can\'t do better than that?', '#00bfff', 'ring', 'success'),
(5, 'Pro-gamer', 'You win 125 achievements! But where\'s the fun in that? Do your worst.', '#ff00ff', 'ring', 'success'),
(6, 'Grandmaster', 'You win 250 achievements! You\'re a legend! Almost... Overachieving much?', '#ff0000', 'ring', 'success'),
(7, 'Bronze', 'Novice collector.', '#614e1a', 'elem', 'collection'),
(8, 'Silver', 'Amateur collector. You owned 50 games.', '#c0c0c0', 'elem', 'collection'),
(9, 'Gold', 'Experienced collector. You owned 150 games.', '#ffd700', 'elem', 'collection'),
(10, 'Diamond', 'Avid collector. You owned 300 games.', '#fffafa to #2b353e', 'elem', 'collection'),
(11, 'Californium', 'Ultimate collector. You owned more than 500 games. Want to open a playstore?', '#5255f to #b8860b', 'elem', 'collection');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `account_type` enum('ADMIN','NORMIE') COLLATE utf8mb4_bin NOT NULL DEFAULT 'NORMIE',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `account_type`) VALUES
(1, 'admin@example.com', '$2y$10$HnC5R/DMLctfv94iHORJH.kmaxrtYNJted4mmv0uhXVd0VCtHMCG.', 'Grace', 'Hopper', 'ADMIN'),
(2, 'normie@example.com', '$2y$10$mhE/p8tmq.dsZfK/HDIF1uJJBwSQwrJ0DTwaN4wCVSk3zoC15zTd6', 'Johnny', 'Normie', 'NORMIE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
