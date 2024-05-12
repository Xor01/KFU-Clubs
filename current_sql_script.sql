-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 01:50 AM
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
-- Database: `kfu_clubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubmembers`
--

CREATE TABLE `clubmembers` (
  `clubMemberID` int(11) NOT NULL,
  `clubID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubmembers`
--

INSERT INTO `clubmembers` (`clubMemberID`, `clubID`, `userID`, `roleID`, `active`) VALUES
(1, 1, 21, 1, 1),
(2, 2, 21, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubmembers`
--
ALTER TABLE `clubmembers`
  ADD PRIMARY KEY (`clubMemberID`),
  ADD KEY `clubID` (`clubID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `roleID` (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubmembers`
--
ALTER TABLE `clubmembers`
  MODIFY `clubMemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clubmembers`
--
ALTER TABLE `clubmembers`
  ADD CONSTRAINT `clubmembers_ibfk_1` FOREIGN KEY (`clubID`) REFERENCES `clubs` (`clubID`),
  ADD CONSTRAINT `clubmembers_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `clubmembers_ibfk_3` FOREIGN KEY (`roleID`) REFERENCES `roles` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
