-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2021 at 01:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breaking_badge`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_badges`
--

CREATE TABLE `table_badges` (
  `badge_id` int(11) NOT NULL,
  `badge_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `badge_desc` text COLLATE utf8mb4_bin NOT NULL,
  `badge_color` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `badge_shape` enum('ring','elem','stars') COLLATE utf8mb4_bin NOT NULL,
  `badge_tag` enum('success','collection','admin') COLLATE utf8mb4_bin NOT NULL,
  `badge_content` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `table_badges`
--

INSERT INTO `table_badges` (`badge_id`, `badge_name`, `badge_desc`, `badge_color`, `badge_shape`, `badge_tag`, `badge_content`) VALUES
(1, 'DeusEx', 'The godmode has nothing to envy them.', 'deusex', 'stars', 'admin', 'GM'),
(2, 'Newbie', 'You\'re green, win 20 achievements to get out of the sandbox.', 'newbie', 'ring', 'success', 'Noob'),
(3, 'Gamer', 'You win 20 achievements! Congratulations and welcome to the big league.', 'gamer', 'ring', 'success', 'P1'),
(4, 'Challenger', 'You win 50 achievements! Are you sure you can\'t do better than that?', 'challenger', 'ring', 'success', 'vs'),
(5, 'Pro-gamer', 'You win 125 achievements! But where\'s the fun in that? Do your worst.', 'pro-gamer', 'ring', 'success', 'PGM'),
(6, 'Grandmaster', 'You win 250 achievements! You\'re a legend! Almost... Overachieving much?', 'grandmaster', 'ring', 'success', 'K.O.'),
(7, 'Bronze', 'Novice collector.', 'bronze', 'elem', 'collection', 'Br'),
(8, 'Silver', 'Amateur collector. You owned 50 games.', 'silver', 'elem', 'collection', 'Ag'),
(9, 'Gold', 'Experienced collector. You owned 150 games.', 'gold', 'elem', 'collection', 'Au'),
(10, 'Diamond', 'Avid collector. You owned 300 games.', 'diamond', 'elem', 'collection', 'C'),
(11, 'Californium', 'Ultimate collector. You owned more than 500 games. Want to open a playstore?', 'californium', 'elem', 'collection', 'Cf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `pseudo` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `account_type` enum('ADMIN','NORMIE') COLLATE utf8mb4_bin NOT NULL DEFAULT 'NORMIE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `pseudo`, `account_type`) VALUES
(1, 'admin@example.com', '$2y$10$HnC5R/DMLctfv94iHORJH.kmaxrtYNJted4mmv0uhXVd0VCtHMCG.', 'Grace', 'ADMIN'),
(2, 'normie@example.com', '$2y$10$mhE/p8tmq.dsZfK/HDIF1uJJBwSQwrJ0DTwaN4wCVSk3zoC15zTd6', 'Johnny', 'NORMIE');

-- --------------------------------------------------------

--
-- Table structure for table `users_badges`
--

CREATE TABLE `users_badges` (
  `id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_badges`
--

INSERT INTO `users_badges` (`id`, `badge_id`, `user_id`) VALUES
(1, 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_badges`
--
ALTER TABLE `table_badges`
  ADD PRIMARY KEY (`badge_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_badges`
--
ALTER TABLE `users_badges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `badge_id` (`badge_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_badges`
--
ALTER TABLE `table_badges`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_badges`
--
ALTER TABLE `users_badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_badges`
--
ALTER TABLE `users_badges`
  ADD CONSTRAINT `badge_id` FOREIGN KEY (`badge_id`) REFERENCES `table_badges` (`badge_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
