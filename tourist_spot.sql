-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2026 at 08:28 AM
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
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spot`
--

CREATE TABLE `tourist_spot` (
  `SpotID` int(11) NOT NULL,
  `SpotName` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Rating` float NOT NULL,
  `EntryFee` int(11) NOT NULL,
  `VisitorsPerYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourist_spot`
--

INSERT INTO `tourist_spot` (`SpotID`, `SpotName`, `Region`, `Category`, `Rating`, `EntryFee`, `VisitorsPerYear`) VALUES
(1, 'Cox\'s Bazar Beach', 'CTG', 'Beach', 4.9, 0, 150000),
(2, 'Sundarbans Forest', 'KHL', 'Nature', 4.3, 150, 80000),
(3, 'Ratargul Forest', 'SYL', 'Nature', 4.8, 100, 60000),
(4, 'Kuakata Beach', 'PTU', 'Beach', 4.5, 0, 90000),
(5, 'Shat Gombuj Mosque', 'BGH', 'Heritage', 4.7, 30, 70000),
(6, 'Paharpur', 'NWG', 'Heritage', 4.1, 30, 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourist_spot`
--
ALTER TABLE `tourist_spot`
  ADD PRIMARY KEY (`SpotID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
