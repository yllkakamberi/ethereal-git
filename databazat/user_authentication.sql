-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 07:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Yllka', 'yllkakamberi@gmail.com', '$2y$10$Xz2NS/sxC/tOLD/DhYgEqe/5TQ3ARWmknxzE.xSiiWjt5vX28h9F6', 'admin'),
(4, 'Yllk', 'y@gmail.com', '$2y$10$SMc7.oopNt80cTWrmbHXpex.lfY3JQqZAzSLyVo6lmTLZww.cXcqm', 'user'),
(6, 'Y', 'y222@gmail.com', '$2y$10$Z0YmWXZ7ABq8MXTJ.PDJwunz9UdF5bNHqyUcEICoURWih2dcu77mm', 'user'),
(7, 'yyyyyyyyyyyyyyyy', 'yyy@gmail.com', '$2y$10$ZquhHHJp9iOnsbuo5BZ62OtBqw/wINmeiT28ZI5OTwSfs1hsPs0g2', 'user'),
(8, 'YKK', 'yy22@gmail.com', '', 'user'),
(9, 'YKK', 'yy22@gmail.com', '', 'user'),
(10, 'G', 'yllkakam@gmail.com', '', 'user'),
(11, 'aa', 'a@gmail.com', '$2y$10$wUEJwOAr339viIiAQI97MOrrzyjv/BF0rxkginh8djfbEKFcGiKka', 'user'),
(12, 's', 's@gm.com', '$2y$10$0s1bJswwNc.WelaYG0c71Ooa6qZj8eHXpI0OUql2Yhp2jcryZNIbi', 'user'),
(13, 'A', 'a@gmail.com', '$2y$10$77D1fIsa4Yy/Y.rE0kFLQ.UcGRIfAf7n0pVY8YFRqdFqRwWKkfMZi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
