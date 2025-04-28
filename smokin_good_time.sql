-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 05:28 PM
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
-- Database: `smoking_good_time`
--

-- --------------------------------------------------------
--
-- Table structure for table `appetizer`
--

CREATE TABLE `appetizer` (
  `app_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `app_type` varchar(20) DEFAULT NULL,
  `app_desc` longtext DEFAULT NULL,
  `app_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `dessert_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `dessert_type` varchar(20) DEFAULT NULL,
  `dessert_desc` longtext DEFAULT NULL,
  `dessert_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `drink_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `drink_type` varchar(20) DEFAULT NULL,
  `drink_desc` longtext DEFAULT NULL,
  `drink_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entree`
--

CREATE TABLE `entree` (
  `entree_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `entree_type` varchar(20) DEFAULT NULL,
  `entree_desc` longtext DEFAULT NULL,
  `entree_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kids_menu`
--

CREATE TABLE `kids_menu` (
  `kids_menu_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `kids_meal_type` varchar(20) DEFAULT NULL,
  `kids_meal_desc` longtext DEFAULT NULL,
  `kids_meal_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `payment_method` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `num_of_guests` int(11) DEFAULT NULL,
  `res_time` time(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seating_arrangement`
--

CREATE TABLE `seating_arrangement` (
  `table_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `table_type` varchar(15) DEFAULT NULL,
  `seating_capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `side`
--

CREATE TABLE `side` (
  `side_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `side_type` varchar(20) DEFAULT NULL,
  `side_desc` longtext DEFAULT NULL,
  `side_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appetizer`
--
ALTER TABLE `appetizer`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `fk_app` (`order_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`dessert_id`),
  ADD KEY `fk_dessert` (`order_id`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`drink_id`),
  ADD KEY `fk_drink` (`order_id`);

--
-- Indexes for table `entree`
--
ALTER TABLE `entree`
  ADD PRIMARY KEY (`entree_id`),
  ADD KEY `fk_entree` (`order_id`);

--
-- Indexes for table `kids_menu`
--
ALTER TABLE `kids_menu`
  ADD PRIMARY KEY (`kids_menu_id`),
  ADD KEY `fk_kids_menu` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order` (`res_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `fk_reservation` (`user_name`);

--
-- Indexes for table `seating_arrangement`
--
ALTER TABLE `seating_arrangement`
  ADD PRIMARY KEY (`table_id`),
  ADD KEY `fk_seating_arrangement` (`res_id`);

--
-- Indexes for table `side`
--
ALTER TABLE `side`
  ADD PRIMARY KEY (`side_id`),
  ADD KEY `fk_side` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appetizer`
--
ALTER TABLE `appetizer`
  ADD CONSTRAINT `fk_app` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `dessert`
--
ALTER TABLE `dessert`
  ADD CONSTRAINT `fk_dessert` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `drink`
--
ALTER TABLE `drink`
  ADD CONSTRAINT `fk_drink` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `entree`
--
ALTER TABLE `entree`
  ADD CONSTRAINT `fk_entree` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `kids_menu`
--
ALTER TABLE `kids_menu`
  ADD CONSTRAINT `fk_kids_menu` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`res_id`) REFERENCES `reservation` (`res_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation` FOREIGN KEY (`user_name`) REFERENCES `customer` (`user_name`);

--
-- Constraints for table `seating_arrangement`
--
ALTER TABLE `seating_arrangement`
  ADD CONSTRAINT `fk_seating_arrangement` FOREIGN KEY (`res_id`) REFERENCES `reservation` (`res_id`);

--
-- Constraints for table `side`
--
ALTER TABLE `side`
  ADD CONSTRAINT `fk_side` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
