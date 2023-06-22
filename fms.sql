-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2023 at 05:21 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `transport_fees` int NOT NULL,
  `tution_fees` int NOT NULL,
  `total` int NOT NULL,
  `date_of_deposit` datetime NOT NULL,
  `paid_fee` int NOT NULL,
  `due_fee` int NOT NULL,
  `adm_no` int NOT NULL,
  `fees_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`fees_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`transport_fees`, `tution_fees`, `total`, `date_of_deposit`, `paid_fee`, `due_fee`, `adm_no`, `fees_id`) VALUES
(200, 36, 236, '0000-00-00 00:00:00', 100, 136, 1, 1),
(50, 150, 200, '2023-06-13 04:12:16', 50, 150, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE IF NOT EXISTS `scholarship` (
  `adm_no` int NOT NULL,
  `scholarship_amt` int NOT NULL,
  `scholarship_id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  PRIMARY KEY (`scholarship_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`adm_no`, `scholarship_amt`, `scholarship_id`, `date`) VALUES
(1, 100, 1, '2023-06-12 17:08:54'),
(2, 10, 2, '2023-06-13 04:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `students1`
--

DROP TABLE IF EXISTS `students1`;
CREATE TABLE IF NOT EXISTS `students1` (
  `name` text NOT NULL,
  `parent_name` text NOT NULL,
  `dob` date NOT NULL,
  `roll_no` int NOT NULL,
  `adm_no` int NOT NULL AUTO_INCREMENT,
  `pincode` int NOT NULL,
  `locality` text NOT NULL,
  `age` int NOT NULL,
  `class` int NOT NULL,
  `phone_number` int NOT NULL,
  `bus_no` int NOT NULL,
  PRIMARY KEY (`adm_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students1`
--

INSERT INTO `students1` (`name`, `parent_name`, `dob`, `roll_no`, `adm_no`, `pincode`, `locality`, `age`, `class`, `phone_number`, `bus_no`) VALUES
('ram', 'rohan', '2023-06-19', 4, 1, 84233, 'bewkfbabg;nw;ON;qej:', 22, 6, 1656574839, 2),
('arnav', 'Op Agarwalla', '2023-06-14', 3, 2, 465789, 'ndnwqp;', 22, 7, 1999999000, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
