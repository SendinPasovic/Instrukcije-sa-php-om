-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2023 at 01:41 AM
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
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `zakazi`
--

DROP TABLE IF EXISTS `zakazi`;
CREATE TABLE IF NOT EXISTS `zakazi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `broj` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `vrijeme` time NOT NULL,
  `datum` date NOT NULL,
  `predmet` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zakazi`
--

INSERT INTO `zakazi` (`id`, `ime`, `email`, `broj`, `vrijeme`, `datum`, `predmet`) VALUES
(1, 'SendinPasovic', 'sendinpasovic3@gmail.com', '123414', '15:15:00', '2010-10-10', 'Programira'),
(2, 'SendinPasovic', 'sendinpasovic3@gmail.com', '123414', '10:10:00', '2020-02-12', 'Matematika'),
(3, 'Sendin1', 'sendin.pasovic@scilijas.com.ba', '123414', '10:10:00', '2020-10-15', 'Baze podat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
