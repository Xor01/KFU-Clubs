-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 09:33 PM
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
-- Table structure for table `event_registrations`
--

CREATE TABLE `event_registrations` (
  `registrationID` int(11) NOT NULL,
  `clubID` int(11) DEFAULT NULL,
  `eventID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `registration_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `registration_status` enum('pending','accepted','rejected','withdraw') NOT NULL DEFAULT 'accepted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_registrations`
--

INSERT INTO `event_registrations` (`registrationID`, `clubID`, `eventID`, `userID`, `registration_datetime`, `registration_status`) VALUES
(1, 1, 1, 21, '2024-05-15 19:07:17', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`registrationID`),
  ADD KEY `clubID` (`clubID`),
  ADD KEY `eventID` (`eventID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `registrationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD CONSTRAINT `event_registrations_ibfk_1` FOREIGN KEY (`clubID`) REFERENCES `clubs` (`clubID`),
  ADD CONSTRAINT `event_registrations_ibfk_2` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`),
  ADD CONSTRAINT `event_registrations_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
