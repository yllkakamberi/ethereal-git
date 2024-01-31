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
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `wedding_locations`
--

CREATE TABLE `wedding_locations` (
  `id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `location_description` text NOT NULL,
  `photo_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_locations`
--

INSERT INTO `wedding_locations` (`id`, `location_name`, `location_description`, `photo_path`) VALUES
(4, 'Italy', 'Lake Como, Italy — a picturesque haven for intimate weddings. With its historic villas, crystal-clear waters, and charming villages, it offers a timeless backdrop for a small, profoundly romantic celebration. This idyllic destination promises breathtaking views and an unforgettable experience for couples embracing the allure of intimate weddings.', 'uploads/italy.png'),
(5, 'Paris,France', 'Paris, the City of Love, sets the stage for a dreamy wedding. Amidst iconic landmarks like the Eiffel Tower and charming cobblestone streets, romance fills the air. Imagine exchanging vows in a city known for its art, culture, and timeless elegance. A Parisian wedding, intimate and unforgettable, is an enchanting affair in the heart of one of the world\'s most romantic destinations.', 'uploads/paris.png'),
(6, 'New York', 'New York City, where urban chic meets timeless romance. Exchange vows against iconic backdrops like Central Park or the Brooklyn Bridge for a wedding that captures the city\'s vibrant energy. A New York wedding promises a blend of sophistication and excitement, creating unforgettable moments in the heart of this bustling metropolis.\r\n\r\n\r\n\r\n\r\n\r\n', 'uploads/newyork.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wedding_locations`
--
ALTER TABLE `wedding_locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wedding_locations`
--
ALTER TABLE `wedding_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
