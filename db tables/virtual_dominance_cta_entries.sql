-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2026 at 05:07 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtualdominance`
--

-- --------------------------------------------------------

--
-- Table structure for table `virtual_dominance_cta_entries`
--

DROP TABLE IF EXISTS `virtual_dominance_cta_entries`;
CREATE TABLE IF NOT EXISTS `virtual_dominance_cta_entries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `messagedata` longtext NOT NULL,
  `posted_by_id` int NOT NULL,
  `datetimeinserted` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `virtual_dominance_cta_entries`
--

INSERT INTO `virtual_dominance_cta_entries` (`id`, `firstname`, `lastname`, `phone`, `email`, `messagedata`, `posted_by_id`, `datetimeinserted`) VALUES
(1, 'asdsds', 'asddssdd', '11111', 'ddadsdsdd@sds.sd', 'sadsdszzzzzz', 0, '01/27/2026 12:00:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
