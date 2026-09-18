-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2026 at 05:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `Coffee`
--

CREATE TABLE `Coffee` (
  `id` int(11) NOT NULL,
  `coffee_id` varchar(50) NOT NULL,
  `coffee_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `id` int(11) NOT NULL,
  `Customer_id` varchar(50) NOT NULL,
  `Customer_name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `point` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_type` varchar(50) DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `Customer_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Coffee`
--
ALTER TABLE `Coffee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coffee_id` (`coffee_id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `Customer_id` (`Customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Coffee`
--
ALTER TABLE `Coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `Customer` (`Customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
