-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 03:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitwithfriends`
--

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `challengesId` int(11) NOT NULL,
  `challengesNumber` int(11) NOT NULL,
  `challengesScore` int(11) NOT NULL,
  `challengesName` text NOT NULL,
  `challengesUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`challengesId`, `challengesNumber`, `challengesScore`, `challengesName`, `challengesUserId`) VALUES
(1, 1, 126, 'Pushups', 5),
(2, 1, 130, 'Pushups', 7),
(3, 1, 100, 'Pushups', 8);

-- --------------------------------------------------------

--
-- Table structure for table `currentchallenge`
--

CREATE TABLE `currentchallenge` (
  `currentchallengeId` int(11) NOT NULL,
  `currentchallengeNumber` int(11) NOT NULL,
  `currentchallengeName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentchallenge`
--

INSERT INTO `currentchallenge` (`currentchallengeId`, `currentchallengeNumber`, `currentchallengeName`) VALUES
(1, 1, 'Pushups');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUid` text NOT NULL,
  `usersEmail` text NOT NULL,
  `usersPwd` text NOT NULL,
  `usersNl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersUid`, `usersEmail`, `usersPwd`, `usersNl`) VALUES
(5, 'Ludvig', 'ludvig_siljeholm@hotmail.com', '$2y$10$rN7ZPX.od8MvxdRY3nYiteukJzCswTG1ekQC98n0L0WjtLZibkZn6', 'no'),
(7, 'Martin', 'martin@gmail.com', '$2y$10$3vchm9M4OYuMuoYfr4E.le7c88ib5R39QAH4lPvs5RCwcXAKGfl32', 'no'),
(8, 'Jonathan', 'Jonathan@gmail.com', '$2y$10$Y6XR9JqnAko7luEf73WBc.bSAzjDfD1OPHPTn2FYlynOzfgoT54Cu', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`challengesId`),
  ADD KEY `challengesUserId` (`challengesUserId`);

--
-- Indexes for table `currentchallenge`
--
ALTER TABLE `currentchallenge`
  ADD PRIMARY KEY (`currentchallengeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `challengesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `currentchallenge`
--
ALTER TABLE `currentchallenge`
  MODIFY `currentchallengeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `challenges`
--
ALTER TABLE `challenges`
  ADD CONSTRAINT `challenges_ibfk_1` FOREIGN KEY (`challengesUserId`) REFERENCES `users` (`usersId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
