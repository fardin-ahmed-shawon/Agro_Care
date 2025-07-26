-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2025 at 09:43 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmerca2_agro_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `phone`, `password`, `role`, `created_at`) VALUES
(0, '01944667441', '87654321', 'owner', '2025-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `company` varchar(150) DEFAULT NULL,
  `buyer_type` varchar(150) DEFAULT NULL,
  `business_location` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `first_name`, `last_name`, `email_address`, `phone`, `company`, `buyer_type`, `business_location`, `password`, `created_at`) VALUES
(1, 'Md', 'Jony', 'fardin@gmail.com', '01559907883', 'Easy Tech', 'exporter', 'chittagong', '$2y$10$te5xkCiQ2p2R.dahj4aOweNGZG4lQvtlWsGwMf1K9ftuNzJa6Z/Oe', '2025-07-22 11:00:26'),
(2, 'Fardin', 'Ahmed', 'fardin@gmail.com', '01944667441', 'Easy Tech', 'retailer', 'chittagong', '$2y$10$zxz8rSeXiFmwPqGK1FX4ae.LOG0q7C7XjHg4FBD9DDuFkS0p3xSOy', '2025-07-22 11:39:35'),
(3, 'Md', 'Jony', NULL, '01579907883', 'Easy Tech', 'restaurant/hotel', 'rangpur', '$2y$10$yB/ESeFjSP0O7CPeuasHA.zT0K8.MCbF4DiwpLEeSimQ7N6g4GQUi', '2025-07-22 12:53:14'),
(4, 'Md', 'Jony Chowdhury', NULL, '01559905883', 'Easy Tech', 'individual_buyer', 'rangpur', '$2y$10$j1USDzCeQ5kQgR.q3pgR6uqy22aUDA4u9BulD3RbLBe9nSygXhtUa', '2025-07-23 08:17:20'),
(5, 'Md', 'Shihan', NULL, '01647667441', 'Nutri', 'supermarket_chain', 'barisal', '$2y$10$md4utXeqUSPMJCH7OTX47.EL7GBtBw6Zdneg.ztm3RZVFtcc7DjHK', '2025-07-26 06:24:13'),
(6, 'Amin', 'Miya', NULL, '01894667461', 'Banglay German', 'individual_buyer', 'mymensingh', '$2y$10$s1y4kYj/rIo5YnMrEXsJZOmazg151AcrwQgPQtJ363Lj/A6TBScJW', '2025-07-26 06:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `farm_type` varchar(150) DEFAULT NULL,
  `farm_size` decimal(10,1) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `first_name`, `last_name`, `email_address`, `phone`, `location`, `farm_type`, `farm_size`, `password`, `created_at`) VALUES
(1, 'Al', 'Jawat Rafi', '', '01555778990', 'kushtia', 'crop_production', 2.5, '$2y$10$uSJO84M407wwnQeI3e19I.mlel2lc/Mpj5oLpfQFNA9gNDQxa.Cxm', '2025-07-19 10:15:02'),
(2, 'Amin', 'Miya', '', '01785778995', 'kishorganj', 'dairy', 3.5, '$2y$10$yeesQ.ZMHakTyZXa7va1quP4s4yyWpvxoAOCvb/IIaSMihcdWCPgm', '2025-07-19 10:28:55'),
(4, 'Shihan', 'bro', '', '01555778902', 'kushtia', 'crop_production', 3.8, '$2y$10$F/J2c/bNZVbmo/jokhZA7eTehcgl9SkYNikZ5z7J.YJIdSow.4gwO', '2025-07-19 11:53:46'),
(5, 'test', 'last', '', '01785778987', 'kishorganj', 'dairy', 3.5, '$2y$10$MXpTqnBJAUWuukPbNeDgxu/M4tDifS2NGtXuxHCuubWyqnqPT3shG', '2025-07-19 11:58:02'),
(6, 'Fardin', 'Ahmed', 'fardin@gmail.com', '01944667441', 'dhaka', 'livestock', 5.0, '$2y$10$KQEAVw6i.dKEjK339pEzPOdnpt36ULAQzKson/uuHhfwYZGV2Gp9u', '2025-07-22 04:58:21'),
(7, 'Fardin', 'Ahmed', '', '01564667441', 'khulna', 'horticulture', 7.5, '$2y$10$9UFxqnrf0WOsVJiGfINjweqafG5BUX5cttzrtxu5s5H.O4Y/BumeK', '2025-07-22 11:43:59'),
(8, 'Fardin', 'Ahmed', NULL, '01944667556', 'chittagong', 'dairy', 5.0, '$2y$10$.yHyZG5leVEIddxVeQR3aOOa8PSIpTqO8FknLT.rHF4tchL1lVCfq', '2025-07-22 12:38:51'),
(9, 'Md', 'Jony', NULL, '01559907889', 'dhaka', 'crop_production', 8.0, '$2y$10$3eGQUUrPn60H3Yi2agL6ce5HN3EqDUnxXhnSC8wiHmTW2Berg7IHC', '2025-07-23 08:16:46'),
(10, 'Fardin', 'Ahmed', NULL, '01944667461', 'sylhet', 'horticulture', 5.0, '$2y$10$LNtYBNJeQi.6/C/N4foS2eprfVgcVlBZk8ZxFkXenKpFx69w1YVx.', '2025-07-26 13:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `halal_investment`
--

CREATE TABLE `halal_investment` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `investment_model` varchar(150) DEFAULT NULL,
  `investment_amount` int(11) DEFAULT NULL,
  `investment_duration` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halal_investment`
--

INSERT INTO `halal_investment` (`id`, `first_name`, `last_name`, `email_address`, `phone`, `address`, `city`, `country`, `investment_model`, `investment_amount`, `investment_duration`, `created_at`) VALUES
(1, 'Md', 'Jony', 'fardin@gmail.com', '01559907883', 'Dhanmondi', 'Dhaka', 'Bangladesh', 'musharakah', 67000, '3', '2025-07-22 11:00:48'),
(2, 'Fardin', 'Ahmed', 'fardin@gmail.com', '01944667478', 'Dhanmondi', 'Keraniganj', 'Bangladesh', 'musharakah', 67000, '3', '2025-07-22 11:38:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `halal_investment`
--
ALTER TABLE `halal_investment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `halal_investment`
--
ALTER TABLE `halal_investment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
