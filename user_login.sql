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
-- Database: `user_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `sno` int NOT NULL,
  `uname` text NOT NULL,
  `upass` varchar(2000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sno`, `uname`, `upass`, `date`) VALUES
(29, 'arnavagarwal', '$2y$10$i4btyDKzgDkBXzdF./conOhhGkFJw90kezQMsL7vGAn4/AOOXEOfW', '2023-06-09 15:23:57'),
(0, 'rohan', '$2y$10$8vlox2k30nDyjrPMqZkjceRu0rqwuHPIELFyfdJvl4I1FhKR2Jabu', '2023-06-13 09:56:08'),
(0, 'ram', '$2y$10$Kirr1d/J14IF4A20uHqa5u4dpNYZolCNmiGuwb9qvZ0v65ZjpSfAe', '2023-06-13 09:57:18'),
(0, 'ria', '$2y$10$1MK9UVGTvZXgFwn7CcXxgONkOBKOAprqtIgG7mXwuRAgkTQ10iiNa', '2023-06-13 09:59:23'),
(0, 'mira', '$2y$10$atExd1rs9oBFffIHRqoPVOiECJhwWsjXuWQrnZRbdU0kMRH3HrZMu', '2023-06-13 10:00:05'),
(0, 'arun', '$2y$10$WveG476NdXX3nJTF0XEdq.yvGBiIUFgauzqWdJ4LxEwQCHELZIc76', '2023-06-13 10:00:46'),
(0, 'aa', '$2y$10$gRrqUZWGFoBN/QIngp0Zau787Q7Ex/jRNREaKWWX5m853GOh0O7AC', '2023-06-13 10:03:11'),
(0, 'aan', '$2y$10$P4tMyQh/TxckSqpp2WliKe0nMisa/6c4CDnIGSTxi.caN.4F32iZy', '2023-06-13 10:04:05'),
(0, 'aap', '$2y$10$z1ZrCDc18WLsapL92CIUSuN8EGBiXWq4953PhmcPx6ePXsbvi3J1a', '2023-06-13 10:35:54'),
(0, 'ab', '$2y$10$N6wSPwC/Rtwm3vSUOwItaOKzIe6PKSRveoSl22olSr7tCXArtX4mC', '2023-06-13 10:38:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
