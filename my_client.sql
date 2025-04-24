-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2025 at 07:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_client`
--

CREATE TABLE `my_client` (
  `id` int(11) NOT NULL,
  `name` char(250) NOT NULL,
  `slug` char(100) NOT NULL,
  `is_project` varchar(30) NOT NULL DEFAULT '0',
  `self_capture` char(1) NOT NULL DEFAULT '1',
  `client_prefix` char(4) NOT NULL,
  `client_logo` char(255) NOT NULL DEFAULT 'no-image.jpg',
  `address` text DEFAULT NULL,
  `phone_number` char(50) DEFAULT NULL,
  `city` char(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_client`
--

INSERT INTO `my_client` (`id`, `name`, `slug`, `is_project`, `self_capture`, `client_prefix`, `client_logo`, `address`, `phone_number`, `city`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '2025-04-24 05:51:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_client`
--
ALTER TABLE `my_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_client`
--
ALTER TABLE `my_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
