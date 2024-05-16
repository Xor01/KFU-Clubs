-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:31 PM
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
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcementID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `authorID` int(11) DEFAULT NULL,
  `clubID` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expiration_date` date DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcementID`, `title`, `content`, `authorID`, `clubID`, `created_at`, `updated_at`, `expiration_date`, `category`) VALUES
(1, 'Test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatem repellendus adipisci consequatur id aperiam ducimus cumque officia asperiores tempore alias aut, voluptate a, atque soluta. Architecto rerum reiciendis commodi?\r\n\r\n', 21, 1, '2024-05-11 18:00:56', '2024-05-11 18:00:56', NULL, NULL),
(2, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 21, 1, '2024-05-13 16:22:33', '2024-05-13 16:22:33', NULL, NULL),
(5, 'f', 'f', 21, 1, '2024-05-13 16:32:04', '2024-05-13 16:32:04', NULL, NULL),
(10, 'A new announcement', 'Content', 21, 1, '2024-05-13 16:37:30', '2024-05-13 16:37:30', NULL, NULL),
(11, 'Welcome to the Cyber Security club', 'Welcome to the Cyber Security club!!!', 21, 2, '2024-05-13 16:58:40', '2024-05-13 16:58:40', NULL, NULL),
(12, 'test', 'one two three', 21, 1, '2024-05-14 17:28:46', '2024-05-14 17:28:46', NULL, NULL);

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
(2, 2, 21, 1, 1),
(4, 1, 22, 2, 0),
(5, 2, 22, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clubroles`
--

CREATE TABLE `clubroles` (
  `clubRoleID` int(11) NOT NULL,
  `clubID` int(11) DEFAULT NULL,
  `roleID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `clubID` int(11) NOT NULL,
  `clubName` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`clubID`, `clubName`, `description`, `created_at`) VALUES
(1, 'AIP', 'The best place to learn about AI and Programming ', '2024-05-11 15:54:38'),
(2, 'Cyber Security', 'The right place to you !', '2024-05-11 17:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `clubID` int(11) DEFAULT NULL,
  `eventTitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `clubID`, `eventTitle`, `description`, `start_datetime`, `end_datetime`, `location`, `created_by`, `created_at`) VALUES
(1, 1, 'AI Bootcamp', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\n\n', '2024-05-15 19:31:48', '2024-05-16 19:31:48', 'CCSIT building 15', 21, '2024-05-14 16:32:48'),
(5, 2, 'Cyber Security Fundamentals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', '2024-05-14 21:41:00', '2024-05-15 21:42:00', 'CCSIT Main building', 21, '2024-05-14 18:43:15');

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
(1, 1, 1, 21, '2024-05-15 19:07:17', 'accepted'),
(2, 1, 5, 22, '2024-05-16 13:19:29', 'withdraw');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `gid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`gid`, `name`, `permissions`) VALUES
(1, 'Standard User', ''),
(2, 'Administrator', '{\"admin\": 1,\r\n\"moderator\" :1}');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleID`, `name`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `groups` int(11) NOT NULL,
  `college` text DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `name`, `joined`, `groups`, `college`, `bio`) VALUES
(21, 'admin', '$2y$10$RCx5jZAuLVjImmnwGZB0A.WOJMeIfi4GvjKugAlPaVpD9U82GG2Ka', 'Mohammed', '2024-05-11 15:22:15', 2, 'Computer Science', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n'),
(22, 'lol', '$2y$10$dA3Hn8KrGEQ4cYHhxu7NR.7JcNsqVPDxYDAnY3L.GEU2ajb56z0oi', 'lol', '2024-05-13 00:47:53', 1, 'Computer Science', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcementID`),
  ADD KEY `authorID` (`authorID`),
  ADD KEY `clubID` (`clubID`);

--
-- Indexes for table `clubmembers`
--
ALTER TABLE `clubmembers`
  ADD PRIMARY KEY (`clubMemberID`),
  ADD KEY `clubID` (`clubID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `roleID` (`roleID`);

--
-- Indexes for table `clubroles`
--
ALTER TABLE `clubroles`
  ADD PRIMARY KEY (`clubRoleID`),
  ADD KEY `clubID` (`clubID`),
  ADD KEY `roleID` (`roleID`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`clubID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `clubID` (`clubID`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`registrationID`),
  ADD UNIQUE KEY `uc_user_event_unique` (`userID`,`eventID`),
  ADD KEY `clubID` (`clubID`),
  ADD KEY `eventID` (`eventID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clubmembers`
--
ALTER TABLE `clubmembers`
  MODIFY `clubMemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clubroles`
--
ALTER TABLE `clubroles`
  MODIFY `clubRoleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `clubID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `registrationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`authorID`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `announcements_ibfk_2` FOREIGN KEY (`clubID`) REFERENCES `clubs` (`clubID`);

--
-- Constraints for table `clubmembers`
--
ALTER TABLE `clubmembers`
  ADD CONSTRAINT `clubmembers_ibfk_1` FOREIGN KEY (`clubID`) REFERENCES `clubs` (`clubID`),
  ADD CONSTRAINT `clubmembers_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `clubmembers_ibfk_3` FOREIGN KEY (`roleID`) REFERENCES `roles` (`roleID`);

--
-- Constraints for table `clubroles`
--
ALTER TABLE `clubroles`
  ADD CONSTRAINT `clubroles_ibfk_1` FOREIGN KEY (`clubID`) REFERENCES `clubs` (`clubID`),
  ADD CONSTRAINT `clubroles_ibfk_2` FOREIGN KEY (`roleID`) REFERENCES `roles` (`roleID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`clubID`) REFERENCES `clubs` (`clubID`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`uid`);

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
