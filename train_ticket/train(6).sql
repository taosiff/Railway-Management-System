-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2024 at 06:37 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindatabase`
--

DROP TABLE IF EXISTS `admindatabase`;
CREATE TABLE IF NOT EXISTS `admindatabase` (
  `UserID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindatabase`
--

INSERT INTO `admindatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Joined_on`) VALUES
(1, 'admin', 'admin@gmail.com', 'M', 'admin', '1999-10-17', '2024-09-14 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `class` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`source`, `dest`, `class`, `type`, `Price`) VALUES
('Dhaka', 'Gazipur', 'First', 'Single', 756),
('Dhaka', 'Narayanganj', 'First', 'Single', 892),
('Dhaka', 'Tangail', 'First', 'Single', 674),
('Dhaka', 'Mymensingh', 'First', 'Single', 984),
('Dhaka', 'Brahmanbaria', 'First', 'Single', 712),
('Dhaka', 'Chattogram', 'First', 'Single', 945),
('Dhaka', 'Sylhet', 'First', 'Single', 865),
('Dhaka', 'Cumilla', 'First', 'Single', 560),
('Dhaka', 'Jamalpur', 'First', 'Single', 623),
('Dhaka', 'Rajshahi', 'First', 'Single', 743),
('Dhaka', 'Khulna', 'First', 'Single', 836),
('Dhaka', 'Barisal', 'First', 'Single', 595),
('Dhaka', 'Rangpur', 'First', 'Single', 950),
('Gazipur', 'Dhaka', 'First', 'Single', 756),
('Gazipur', 'Narayanganj', 'First', 'Single', 844),
('Gazipur', 'Tangail', 'First', 'Single', 751),
('Gazipur', 'Mymensingh', 'First', 'Single', 789),
('Gazipur', 'Brahmanbaria', 'First', 'Single', 610),
('Gazipur', 'Chattogram', 'First', 'Single', 983),
('Gazipur', 'Sylhet', 'First', 'Single', 915),
('Gazipur', 'Cumilla', 'First', 'Single', 513),
('Gazipur', 'Jamalpur', 'First', 'Single', 598),
('Gazipur', 'Rajshahi', 'First', 'Single', 711),
('Gazipur', 'Khulna', 'First', 'Single', 920),
('Gazipur', 'Barisal', 'First', 'Single', 579),
('Gazipur', 'Rangpur', 'First', 'Single', 733),
('Narayanganj', 'Dhaka', 'First', 'Single', 892),
('Narayanganj', 'Gazipur', 'First', 'Single', 844),
('Narayanganj', 'Tangail', 'First', 'Single', 934),
('Narayanganj', 'Mymensingh', 'First', 'Single', 999),
('Narayanganj', 'Brahmanbaria', 'First', 'Single', 743),
('Narayanganj', 'Chattogram', 'First', 'Single', 983),
('Narayanganj', 'Sylhet', 'First', 'Single', 834),
('Narayanganj', 'Cumilla', 'First', 'Single', 549),
('Narayanganj', 'Jamalpur', 'First', 'Single', 688),
('Narayanganj', 'Rajshahi', 'First', 'Single', 758),
('Narayanganj', 'Khulna', 'First', 'Single', 912),
('Narayanganj', 'Barisal', 'First', 'Single', 567),
('Narayanganj', 'Rangpur', 'First', 'Single', 907),
('Tangail', 'Dhaka', 'First', 'Single', 674),
('Tangail', 'Gazipur', 'First', 'Single', 751),
('Tangail', 'Narayanganj', 'First', 'Single', 934),
('Tangail', 'Mymensingh', 'First', 'Single', 795),
('Tangail', 'Brahmanbaria', 'First', 'Single', 692),
('Tangail', 'Chattogram', 'First', 'Single', 954),
('Tangail', 'Sylhet', 'First', 'Single', 763),
('Tangail', 'Cumilla', 'First', 'Single', 542),
('Tangail', 'Jamalpur', 'First', 'Single', 611),
('Tangail', 'Rajshahi', 'First', 'Single', 671),
('Tangail', 'Khulna', 'First', 'Single', 836),
('Tangail', 'Barisal', 'First', 'Single', 560),
('Tangail', 'Rangpur', 'First', 'Single', 703),
('Mymensingh', 'Dhaka', 'First', 'Single', 984),
('Mymensingh', 'Gazipur', 'First', 'Single', 789),
('Mymensingh', 'Narayanganj', 'First', 'Single', 999),
('Mymensingh', 'Tangail', 'First', 'Single', 795),
('Mymensingh', 'Brahmanbaria', 'First', 'Single', 856),
('Mymensingh', 'Chattogram', 'First', 'Single', 972),
('Mymensingh', 'Sylhet', 'First', 'Single', 844),
('Mymensingh', 'Cumilla', 'First', 'Single', 589),
('Mymensingh', 'Jamalpur', 'First', 'Single', 687),
('Mymensingh', 'Rajshahi', 'First', 'Single', 758),
('Mymensingh', 'Khulna', 'First', 'Single', 946),
('Mymensingh', 'Barisal', 'First', 'Single', 637),
('Mymensingh', 'Rangpur', 'First', 'Single', 890),
('Brahmanbaria', 'Dhaka', 'First', 'Single', 712),
('Brahmanbaria', 'Gazipur', 'First', 'Single', 610),
('Brahmanbaria', 'Narayanganj', 'First', 'Single', 743),
('Brahmanbaria', 'Tangail', 'First', 'Single', 692),
('Brahmanbaria', 'Mymensingh', 'First', 'Single', 856),
('Brahmanbaria', 'Chattogram', 'First', 'Single', 939),
('Brahmanbaria', 'Sylhet', 'First', 'Single', 715),
('Brahmanbaria', 'Cumilla', 'First', 'Single', 530),
('Brahmanbaria', 'Jamalpur', 'First', 'Single', 677),
('Brahmanbaria', 'Rajshahi', 'First', 'Single', 724),
('Brahmanbaria', 'Khulna', 'First', 'Single', 868),
('Brahmanbaria', 'Barisal', 'First', 'Single', 592),
('Brahmanbaria', 'Rangpur', 'First', 'Single', 741),
('Chattogram', 'Dhaka', 'First', 'Single', 945),
('Chattogram', 'Gazipur', 'First', 'Single', 983),
('Chattogram', 'Narayanganj', 'First', 'Single', 983),
('Chattogram', 'Tangail', 'First', 'Single', 954),
('Chattogram', 'Mymensingh', 'First', 'Single', 972),
('Chattogram', 'Brahmanbaria', 'First', 'Single', 939),
('Chattogram', 'Sylhet', 'First', 'Single', 914),
('Chattogram', 'Cumilla', 'First', 'Single', 570),
('Chattogram', 'Jamalpur', 'First', 'Single', 645),
('Chattogram', 'Rajshahi', 'First', 'Single', 725),
('Chattogram', 'Khulna', 'First', 'Single', 916),
('Chattogram', 'Barisal', 'First', 'Single', 683),
('Chattogram', 'Rangpur', 'First', 'Single', 846),
('Sylhet', 'Dhaka', 'First', 'Single', 865),
('Sylhet', 'Gazipur', 'First', 'Single', 915),
('Sylhet', 'Narayanganj', 'First', 'Single', 834),
('Sylhet', 'Tangail', 'First', 'Single', 763),
('Sylhet', 'Mymensingh', 'First', 'Single', 844),
('Sylhet', 'Brahmanbaria', 'First', 'Single', 715),
('Sylhet', 'Chattogram', 'First', 'Single', 914),
('Sylhet', 'Cumilla', 'First', 'Single', 621),
('Sylhet', 'Jamalpur', 'First', 'Single', 643),
('Sylhet', 'Rajshahi', 'First', 'Single', 691),
('Sylhet', 'Khulna', 'First', 'Single', 889),
('Sylhet', 'Barisal', 'First', 'Single', 575),
('Sylhet', 'Rangpur', 'First', 'Single', 717),
('Cumilla', 'Dhaka', 'First', 'Single', 560),
('Cumilla', 'Gazipur', 'First', 'Single', 513),
('Cumilla', 'Narayanganj', 'First', 'Single', 549),
('Cumilla', 'Tangail', 'First', 'Single', 542),
('Cumilla', 'Mymensingh', 'First', 'Single', 589),
('Cumilla', 'Brahmanbaria', 'First', 'Single', 530),
('Cumilla', 'Chattogram', 'First', 'Single', 570),
('Cumilla', 'Sylhet', 'First', 'Single', 621),
('Cumilla', 'Jamalpur', 'First', 'Single', 568),
('Cumilla', 'Rajshahi', 'First', 'Single', 645),
('Cumilla', 'Khulna', 'First', 'Single', 660),
('Cumilla', 'Barisal', 'First', 'Single', 516),
('Cumilla', 'Rangpur', 'First', 'Single', 638),
('Jamalpur', 'Dhaka', 'First', 'Single', 623),
('Jamalpur', 'Gazipur', 'First', 'Single', 598),
('Jamalpur', 'Narayanganj', 'First', 'Single', 688),
('Jamalpur', 'Tangail', 'First', 'Single', 611),
('Jamalpur', 'Mymensingh', 'First', 'Single', 687),
('Jamalpur', 'Brahmanbaria', 'First', 'Single', 677),
('Jamalpur', 'Chattogram', 'First', 'Single', 645),
('Jamalpur', 'Sylhet', 'First', 'Single', 643),
('Jamalpur', 'Cumilla', 'First', 'Single', 568),
('Jamalpur', 'Rajshahi', 'First', 'Single', 622),
('Jamalpur', 'Khulna', 'First', 'Single', 635),
('Jamalpur', 'Barisal', 'First', 'Single', 579),
('Jamalpur', 'Rangpur', 'First', 'Single', 693),
('Rajshahi', 'Dhaka', 'First', 'Single', 743),
('Rajshahi', 'Gazipur', 'First', 'Single', 711),
('Rajshahi', 'Narayanganj', 'First', 'Single', 758),
('Rajshahi', 'Tangail', 'First', 'Single', 671),
('Rajshahi', 'Mymensingh', 'First', 'Single', 758),
('Rajshahi', 'Brahmanbaria', 'First', 'Single', 724),
('Rajshahi', 'Chattogram', 'First', 'Single', 725),
('Rajshahi', 'Sylhet', 'First', 'Single', 691),
('Rajshahi', 'Cumilla', 'First', 'Single', 645),
('Rajshahi', 'Jamalpur', 'First', 'Single', 622),
('Rajshahi', 'Khulna', 'First', 'Single', 672),
('Rajshahi', 'Barisal', 'First', 'Single', 694),
('Rajshahi', 'Rangpur', 'First', 'Single', 632),
('Khulna', 'Dhaka', 'First', 'Single', 836),
('Khulna', 'Gazipur', 'First', 'Single', 920),
('Khulna', 'Narayanganj', 'First', 'Single', 912),
('Khulna', 'Tangail', 'First', 'Single', 836),
('Khulna', 'Mymensingh', 'First', 'Single', 946),
('Khulna', 'Brahmanbaria', 'First', 'Single', 868),
('Khulna', 'Chattogram', 'First', 'Single', 916),
('Khulna', 'Sylhet', 'First', 'Single', 889),
('Khulna', 'Cumilla', 'First', 'Single', 660),
('Khulna', 'Jamalpur', 'First', 'Single', 635),
('Khulna', 'Rajshahi', 'First', 'Single', 672),
('Khulna', 'Barisal', 'First', 'Single', 685),
('Khulna', 'Rangpur', 'First', 'Single', 734),
('Barisal', 'Dhaka', 'First', 'Single', 595),
('Barisal', 'Gazipur', 'First', 'Single', 579),
('Barisal', 'Narayanganj', 'First', 'Single', 567),
('Barisal', 'Tangail', 'First', 'Single', 560),
('Barisal', 'Mymensingh', 'First', 'Single', 637),
('Barisal', 'Brahmanbaria', 'First', 'Single', 592),
('Barisal', 'Chattogram', 'First', 'Single', 683),
('Barisal', 'Sylhet', 'First', 'Single', 575),
('Barisal', 'Cumilla', 'First', 'Single', 516),
('Barisal', 'Jamalpur', 'First', 'Single', 579),
('Barisal', 'Rajshahi', 'First', 'Single', 694),
('Barisal', 'Khulna', 'First', 'Single', 685),
('Barisal', 'Rangpur', 'First', 'Single', 607),
('Rangpur', 'Dhaka', 'First', 'Single', 950),
('Rangpur', 'Gazipur', 'First', 'Single', 733),
('Rangpur', 'Narayanganj', 'First', 'Single', 907),
('Rangpur', 'Tangail', 'First', 'Single', 703),
('Rangpur', 'Mymensingh', 'First', 'Single', 890),
('Rangpur', 'Brahmanbaria', 'First', 'Single', 741),
('Rangpur', 'Chattogram', 'First', 'Single', 846),
('Rangpur', 'Sylhet', 'First', 'Single', 717),
('Rangpur', 'Cumilla', 'First', 'Single', 638),
('Rangpur', 'Jamalpur', 'First', 'Single', 693),
('Rangpur', 'Rajshahi', 'First', 'Single', 632),
('Rangpur', 'Khulna', 'First', 'Single', 734),
('Rangpur', 'Barisal', 'First', 'Single', 607);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `T_No.` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Class` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `NoOfpass` int NOT NULL,
  `booking_date` varchar(10) NOT NULL,
  `Amt` int NOT NULL,
  `Route` varchar(25) NOT NULL,
  PRIMARY KEY (`T_No.`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`T_No.`, `email`, `source`, `dest`, `Name`, `Class`, `Type`, `NoOfpass`, `booking_date`, `Amt`, `Route`) VALUES
(59, 'siam@siam.com', 'Dhaka', 'Gazipur', 'Siam', 'First', 'Single', 2, '1985', 100, 'Dhaka - Gazipur'),
(60, 'siam@siam.com', 'Narayanganj', 'Mymensingh', 'Siam', 'First', 'Single', 2, '2024-10-31', 100, 'Narayanganj - Mymensingh'),
(61, 'siam@siam.com', 'Dhaka', 'Gazipur', 'Siam', 'Second', 'Return', 4, '2024-09-11', 40, 'Dhaka  Gazipur'),
(62, '12@12.com', 'Dhaka', 'Tangail', '12', 'First', 'Single', 3, '2024-09-12', 150, 'Dhaka  Tangail'),
(63, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, 'Cumilla--Brahmanbaria'),
(64, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, 'Cumilla Brahmanbaria'),
(65, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, 'Cumilla Brahmanbaria'),
(66, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, 'Cumilla  Brahmanbaria'),
(67, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, 'Cumilla  Brahmanbaria'),
(68, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, 'Cumilla  Brahmanbaria'),
(69, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, ''),
(70, '12@12.com', 'Cumilla', 'Brahmanbaria', '12', 'First', 'Single', 2, '2024-09-11', 100, ''),
(71, '12@12.com', 'Dhaka', 'Mymensingh', '12', 'First', 'Single', 3, '2024-09-12', 2952, 'Dhaka  Mymensingh'),
(72, '12@12.com', 'Dhaka', 'Mymensingh', '12', 'First', 'Single', 3, '2024-09-12', 2952, ''),
(73, '12@12.com', 'Dhaka', 'Tangail', '12', 'First', 'Single', 1, '2024-09-11', 674, ''),
(74, '12@12.com', 'Dhaka', 'Tangail', '12', 'First', 'Return', 1, '2024-09-13', 1348, ''),
(75, '12@12.com', 'Dhaka', 'Tangail', '12', 'Second', 'Single', 1, '2024-09-16', 337, ''),
(76, '12@12.com', 'Dhaka', 'Tangail', '12', 'Second', 'Return', 1, '2024-09-12', 674, ''),
(77, '12@12.com', 'Dhaka', 'Tangail', '12', 'First', 'Return', 2, '2024-09-19', 2696, ''),
(78, '12@12.com', 'Dhaka', 'Tangail', '12', 'First', 'Single', 1, '2024-09-11', 674, ''),
(79, '1212@mail.com', 'Dhaka', 'Narayanganj', '121212', 'AC', 'Return', 3, '2024-09-10', 10704, ''),
(80, 'raisul@gmail.com', 'Dhaka', 'Tangail', 'Raisul Islam', 'First', 'Return', 3, '2024-09-18', 4044, '');

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

DROP TABLE IF EXISTS `userdatabase`;
CREATE TABLE IF NOT EXISTS `userdatabase` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Phone`, `Joined_on`) VALUES
(48, 'Arif', 'arif@gmail.com', 'M', '1234', '2001-04-11', '4578962148', '2024-09-15 15:01:08'),
(49, 'Taosif', 'taosif@gmail.com', 'M', '1234', '2002-06-03', '4578962148', '2024-09-15 15:01:08'),
(51, 'Miya Bhai', 'miya@gmail.com', 'M', '1212', '0000-00-00', 'wewew', '2024-09-14 19:50:51'),
(52, '121212', '1212@mail.com', 'M', '1212', '1111-11-11', '1212121', '2024-09-15 04:32:05'),
(53, '12', '12@12.com', 'M', '12', '2024-09-18', '12', '2024-09-15 15:03:44'),
(54, 'Raisul Islam', 'raisul@gmail.com', 'M', '123', '1996-09-17', '123', '2024-09-15 18:20:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
