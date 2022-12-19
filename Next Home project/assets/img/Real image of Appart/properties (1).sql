-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 09:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `Name` varchar(200) NOT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `Image1` varchar(200) NOT NULL,
  `Image2` varchar(200) NOT NULL,
  `Video` varchar(200) DEFAULT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` longtext NOT NULL,
  `Area` varchar(200) NOT NULL,
  `Property_type` varchar(200) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'Rent',
  `Bedrooms` varchar(200) DEFAULT NULL,
  `Garage` varchar(200) DEFAULT NULL,
  `Kitchen_features` varchar(200) DEFAULT NULL,
  `Elevator` varchar(200) DEFAULT NULL,
  `Bathrooms` varchar(200) DEFAULT NULL,
  `Cooling` varchar(200) DEFAULT NULL,
  `Exterior` varchar(200) DEFAULT NULL,
  `Fireplace` varchar(200) DEFAULT NULL,
  `Year` varchar(200) DEFAULT NULL,
  `Heating_type` varchar(200) DEFAULT NULL,
  `Swimming_pool` varchar(200) DEFAULT NULL,
  `Free_wifi` varchar(200) DEFAULT NULL,
  `ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`Name`, `Location`, `Image1`, `Image2`, `Video`, `Description`, `Price`, `Area`, `Property_type`, `Status`, `Bedrooms`, `Garage`, `Kitchen_features`, `Elevator`, `Bathrooms`, `Cooling`, `Exterior`, `Fireplace`, `Year`, `Heating_type`, `Swimming_pool`, `Free_wifi`, `ID`) VALUES
('Jannat Graynight Mood', 'Bastos Yaounde', 'assets/img/p-1.jpg', 'assets/img/p-2.jpg', NULL, 'description', '12,000,000FCFA', '500msq', 'Apartment', 'Rent', '3 Beds', '1', 'Kitchen F', 'Yes', '2 Baths', 'Central A/c', 'FinishBrick', 'Yes', 'Built1982', 'Forced air', 'Yes', 'No', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`),
  ADD KEY `id` (`ID`),
  ADD KEY `ID_3` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
