-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2024 at 08:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aava`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `industry` varchar(100) DEFAULT NULL,
  `company_size` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `office_type` varchar(50) DEFAULT NULL,
  `working_hours` varchar(50) DEFAULT NULL,
  `office_layout` varchar(50) DEFAULT NULL,
  `work_pace` varchar(50) DEFAULT NULL,
  `communication` varchar(50) DEFAULT NULL,
  `team_dynamic` varchar(50) DEFAULT NULL,
  `mental_support` varchar(50) DEFAULT NULL,
  `wellness_budget` decimal(10,2) DEFAULT NULL,
  `benefits` text,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `description`, `industry`, `company_size`, `location`, `office_type`, `working_hours`, `office_layout`, `work_pace`, `communication`, `team_dynamic`, `mental_support`, `wellness_budget`, `benefits`, `profile_picture`) VALUES
(1, 'DRIII', 'ok', 'tech', 'small', 'LOC', 'remote', 'flexible', 'open', 'balanced', 'casual', 'collaborative', 'comprehensive', 1111.00, 'flexible_hours,professional_dev', NULL),
(2, 'DRIII', 'ok', 'tech', 'small', 'LOC', 'remote', 'flexible', 'open', 'balanced', 'casual', 'collaborative', 'comprehensive', 1111.00, 'flexible_hours,professional_dev', NULL),
(3, 'okej', 'okej99', 'healthcare', 'medium', 'lo', 'remote', 'flexible', 'private', 'balanced', 'casual', 'collaborative', 'comprehensive', 5555.00, 'flexible_hours,remote_work,health_insurance', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Drijoni', 'drijon@gmail.com', '$2y$10$yJoYTIxLAaBEDXYOR52CU.ADDp.l56uCOJmBIuNQS2NmHRPX2Z43O'),
(3, 'Drijon', 'drijoni@gmail.com', '$2y$10$RutKHvHyVjbMOxz0fc2PpuxIvQ1WCmXDvrqmZMeqi8KfGFw/K7KcK');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `environment` varchar(50) DEFAULT NULL,
  `workhours` varchar(50) DEFAULT NULL,
  `prefered_company_size` varchar(50) DEFAULT NULL,
  `work_pace` varchar(50) DEFAULT NULL,
  `communication` varchar(50) DEFAULT NULL,
  `team_dynamic` varchar(50) DEFAULT NULL,
  `mental_support` varchar(50) DEFAULT NULL,
  `work_life_balance` varchar(50) DEFAULT NULL,
  `wellness_program` varchar(50) DEFAULT NULL,
  `goals` varchar(50) DEFAULT NULL,
  `benefits` text,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `role`, `experience`, `industry`, `environment`, `workhours`, `prefered_company_size`, `work_pace`, `communication`, `team_dynamic`, `mental_support`, `work_life_balance`, `wellness_program`, `goals`, `benefits`, `profile_picture`) VALUES
(1, 'Front End Develper', '0-2', 'healthcare', 'remote', 'fixed', 'medium', 'fast', 'casual', 'collaborative', 'essential', 'strict', 'mental', 'financial', 'health_insurance,professional_dev', NULL),
(3, 'Front End ', '3-5', 'tech', 'remote', 'fixed', 'small', 'balanced', 'casual', 'independent', 'essential', 'flexible', 'physical', 'work_life', 'mental_health', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;