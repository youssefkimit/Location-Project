-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2022 at 12:21 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voiture`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `Name`, `Description`, `Image`) VALUES
(1, 'Dacia Dokker Estate', '300-500 MAD/jour', 'auto\\familial\\Dacia Dokker Estate.jpg'),
(3, 'Dacia Duster', '500-700 MAD/jour', 'auto\\familial\\Dacia Duster.jpg'),
(4, 'Dacia Lodgy', '300-500 MAD/jour', 'auto\\familial\\Dacia Lodgy.jpg'),
(5, 'Dacia Sandero Stepway', '500-700 MAD/jour', 'auto\\familial\\Dacia Sandero Stepway.jpg'),
(6, 'Citroen Berlingo', '350-550 MAD/jour', 'auto\\familial\\Citroen Berlingo.jpg'),
(7, 'Fiat Doblo', '400-600 MAD/jour', 'auto\\familial\\Fiat Doblo.jpg'),
(8, 'Peugeot Partner', '300-500 MAD/jour', 'auto\\familial\\Peugeot Partner.jpg'),
(9, 'Renault Captur', '400-800 MAD/jour', 'auto\\familial\\Renault Captur.jpg'),
(10, 'Renault Kangoo', '400-700 MAD/jour', 'auto\\familial\\Renault Kangoo.jpg'),
(11, 'Volkswagen Touran', '300-500 MAD/jour', 'auto\\familial\\Volkswagen Touran.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
