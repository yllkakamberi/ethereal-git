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
-- Database: `etheral`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `partner_first_name` varchar(255) DEFAULT NULL,
  `partner_last_name` varchar(255) DEFAULT NULL,
  `pronouns` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `estimated_guest_count` int(11) DEFAULT NULL,
  `referral_source` varchar(255) DEFAULT NULL,
  `drink_of_choice` varchar(255) DEFAULT NULL,
  `about_you` text DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `first_name`, `last_name`, `partner_first_name`, `partner_last_name`, `pronouns`, `country`, `phone_number`, `email`, `event_date`, `location`, `estimated_guest_count`, `referral_source`, `drink_of_choice`, `about_you`, `submission_date`) VALUES
(9, 'Yllka', 'Kamberi', 'Aida', '', 'she her', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-23', 'Kosovo', 200, '', '', '', '2024-01-24 15:50:00'),
(11, 'Yllka', 'Kamberi', 'Aida', '', 'she her', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-23', 'Kosovo', 200, '', '', '', '2024-01-24 15:58:50'),
(12, 'Yllka', 'Kamberi', 'Aida', '', 'she her', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-23', 'Kosovo', 200, '', '', '', '2024-01-24 16:00:06'),
(13, 'Yllka', 'Kamberi', 'Aida', '', 'she her', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-23', 'Kosovo', 200, '', '', '', '2024-01-24 16:00:33'),
(14, 'Yllka', 'Kamberi', 'Aida', '', 'she her', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-23', 'Kosovo', 200, '', NULL, NULL, '2024-01-24 16:03:39'),
(15, 'Yllka', 'Kamberi', 'Aida', '', 'she her', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-23', 'Kosovo', 200, '', '', '', '2024-01-24 16:09:41'),
(16, 'Yg', 'Gy', 'Gg', 'Gg', 'jgng', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-10', 'Kosovo', 333, '', NULL, NULL, '2024-01-25 16:10:46'),
(17, 'Yg', 'Gy', 'Gg', 'Gg', 'jgng', 'Albania', '0455555', 'yllkakamberi0@gmail.com', '2024-01-10', 'Kosovo', 333, NULL, 'eee', 'zzzz', '2024-01-25 16:24:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
