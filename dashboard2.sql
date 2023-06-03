-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2023 at 09:54 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebalafpv_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard2_accounts`
--

DROP TABLE IF EXISTS `dashboard2_accounts`;
CREATE TABLE IF NOT EXISTS `dashboard2_accounts` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `country` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `dashboard2_accounts`
--

INSERT INTO `dashboard2_accounts` (`sno`, `userName`, `email`, `country`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'India', '$2y$10$Sq5uSQdWlPpS4PflSzk6b.58hM4eMnTgkclxiHR6NzSKGIErPfMxG'),
(2, 'bogota', 'bogota@gmail.com', 'India', '$2y$10$wymCF2eNaowqiHPWO5HVJOsUZne4JFUc9C2ByG1F9OVdIbuMEcnUm');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard2_customers`
--

DROP TABLE IF EXISTS `dashboard2_customers`;
CREATE TABLE IF NOT EXISTS `dashboard2_customers` (
  `customerId` int NOT NULL AUTO_INCREMENT,
  `customerType` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `salutation` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `firstName` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `lastName` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `customerPhone` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `customerEmail` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `companyName` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `Website` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `Creation_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerId`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `dashboard2_customers`
--

INSERT INTO `dashboard2_customers` (`customerId`, `customerType`, `salutation`, `firstName`, `lastName`, `customerPhone`, `customerEmail`, `companyName`, `Website`, `Creation_Date`, `Modified_Date`) VALUES
(8, 'Business', 'Ms.', 'atul', 'atul', '123', 'Atul@gmail.com', 'mws', 'ZXC', '2023-06-02 08:17:12', '2023-06-02 08:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard2_items`
--

DROP TABLE IF EXISTS `dashboard2_items`;
CREATE TABLE IF NOT EXISTS `dashboard2_items` (
  `itemId` int NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `name` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `unit` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `sellingPrice` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
