-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 06:27 AM
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
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_titles`
--

CREATE TABLE `job_titles` (
  `job_type` bigint(20) UNSIGNED NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_salary` int(255) NOT NULL,
  `job_slot` int(255) NOT NULL,
  `job_vacancies` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_titles`
--

INSERT INTO `job_titles` (`job_type`, `job_description`, `job_salary`, `job_slot`, `job_vacancies`) VALUES
(1, 'Business Owner/Founder', 0, 1, 0),
(2, 'Operations Manager', 35000, 1, 1),
(3, 'Marketing Manager/Coordinator', 30000, 1, 1),
(4, 'Sales Manager/Representative', 25000, 2, 2),
(5, 'Customer Service Representative', 20000, 2, 2),
(6, 'Bookkeeper/Accountant', 25000, 1, 1),
(7, 'Administrative Assistant', 18000, 1, 1),
(8, 'Web Developer/IT Specialist', 35000, 1, 1),
(9, 'Human Resources Coordinator', 25000, 1, 1),
(10, 'Graphic Designer', 25000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_type` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_name`, `user_pass`, `user_type`) VALUES
(1, 'admin', 'admin', 4),
(2, 'manager', 'manager', 3),
(3, 'employee', 'employee', 2),
(4, 'applicant', 'applicant', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_account_type`
--

CREATE TABLE `user_account_type` (
  `user_type_id` int(255) NOT NULL,
  `user_type_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account_type`
--

INSERT INTO `user_account_type` (`user_type_id`, `user_type_desc`) VALUES
(4, 'Administrator'),
(3, 'Manager'),
(2, 'Employee'),
(1, 'Applicant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD UNIQUE KEY `job_type` (`job_type`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `job_type` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
