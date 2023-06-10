-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2023 at 12:23 PM
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
-- Database: `ebalafpv_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard2_customers`
--

DROP TABLE IF EXISTS `dashboard2_customers`;
CREATE TABLE IF NOT EXISTS `dashboard2_customers` (
  `customerId` int NOT NULL AUTO_INCREMENT,
  `customerType` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `salutation` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `firstName` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `customerPhone` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `customerEmail` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `companyName` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Website` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Creation_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerId`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `dashboard2_customers`
--

INSERT INTO `dashboard2_customers` (`customerId`, `customerType`, `salutation`, `firstName`, `lastName`, `customerPhone`, `customerEmail`, `companyName`, `Website`, `Creation_Date`, `Modified_Date`) VALUES
(8, 'Business', 'Ms.', 'atul', 'goyal', '123', 'Atul@gmail.com', 'mws', 'ZXC', '2023-06-02 08:17:12', '2023-06-02 08:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard2_items`
--

DROP TABLE IF EXISTS `dashboard2_items`;
CREATE TABLE IF NOT EXISTS `dashboard2_items` (
  `itemId` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `unit` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `sellingPrice` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `qty` int NOT NULL,
  `amount` int NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard2_quote`
--

DROP TABLE IF EXISTS `dashboard2_quote`;
CREATE TABLE IF NOT EXISTS `dashboard2_quote` (
  `quote_id` int NOT NULL AUTO_INCREMENT,
  `customerName` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `orderNumber` varchar(255) NOT NULL,
  `quoteDate` date NOT NULL,
  `expireyDate` date NOT NULL,
  `salesperson` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subTotal` varchar(255) NOT NULL,
  `Discount` varchar(255) NOT NULL,
  `Adjustment` varchar(255) NOT NULL,
  `TCS` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `termsAndConditions` varchar(255) NOT NULL,
  `creation_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`quote_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dashboard2_quote`
--

INSERT INTO `dashboard2_quote` (`quote_id`, `customerName`, `invoice`, `orderNumber`, `quoteDate`, `expireyDate`, `salesperson`, `subject`, `subTotal`, `Discount`, `Adjustment`, `TCS`, `total`, `termsAndConditions`, `creation_Date`) VALUES
(1, 'atul goyal', '1', '', '2023-06-01', '2023-06-03', '3', 'zx', '', '23', '3431', 'Select a tax', '', 'iiuhiu', '2023-06-09 06:34:27'),
(2, 'atul goyal', '2', '2', '2023-06-02', '2023-06-03', '1', 'Subject', '', '10', '20', '2', '', 'Terms And Conditions', '2023-06-09 06:34:27'),
(3, 'atul goyal', '09', '09', '2023-06-01', '2023-06-02', '1', 'Subject', '122', '10', '20', 'Select a tax', '132', 'TS', '2023-06-09 06:34:27'),
(4, 'atul goyal', '09', '12', '2023-06-03', '2023-06-01', '4', 'Subject', '1220', '10', '10', 'Select a tax', '1220', '', '2023-06-09 06:34:27'),
(5, '', '09', '14', '2023-06-09', '2023-05-30', '2', 'Subject', '122', '0', '', 'Select a tax', '122', 'dfdf', '2023-06-09 06:34:27'),
(6, 'atul goyal', '1414', '512352', '2023-06-09', '2023-06-28', '4', 'hio', '230580', '0080', '979', 'Select a tax', '231479', 'hgbh', '2023-06-09 06:34:27'),
(7, 'atul goyal', '1414', '512352', '2023-06-09', '2023-06-28', '4', 'hio', '230702', '0080', '979', 'Select a tax', '230702', 'hgbh', '2023-06-09 06:34:27'),
(8, 'atul goyal', '1414', '512352', '2023-06-09', '2023-06-28', '4', 'hio', '230702', '0080', '979', 'Select a tax', '230702', 'hgbh', '2023-06-09 06:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard2_users`
--

DROP TABLE IF EXISTS `dashboard2_users`;
CREATE TABLE IF NOT EXISTS `dashboard2_users` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `country` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `role` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `dashboard2_users`
--

INSERT INTO `dashboard2_users` (`sno`, `userName`, `email`, `country`, `password`, `role`, `register_date`) VALUES
(1, 'admin', 'admin@gmaill.com', 'India', '$2y$10$GSyJRzk89J9NrCmql2HqnOrB8b.DaLo/oJLJJjxFCFWJpII5DKetW', 'customers', '2023-06-09 11:06:46'),
(2, 'Atul', 'atul@gmail.com', 'India', '$2y$10$oWMHoZ1kWxBjSZAN19NmDu7E0Qbv8bDZVUHmp8KRsGRxCEltvNs76', 'customers', '2023-06-09 11:17:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
