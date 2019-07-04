-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2019 at 12:47 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinitoAdmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `Announcements`
--

CREATE TABLE `Announcements` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Announcements`
--

INSERT INTO `Announcements` (`Id`, `Title`, `Description`, `Date`) VALUES
(1, 'sdadadas', 'asdas', '2019-07-01 16:46:25'),
(2, 'HELLO', 'BYE', '2019-07-01 17:00:00'),
(3, NULL, 'sadfalsflk', '2019-07-01 17:11:00'),
(4, 'anc', 'cdb', '2019-07-01 17:12:16'),
(5, 'infinito start', 'end', '2019-07-01 17:16:20'),
(8, 'ab', 'cd', '2019-07-01 19:59:02'),
(10, 'abcd', 'bacd', '2019-07-01 20:04:57'),
(11, 'acbd', 'acbd', '2019-07-01 20:05:39'),
(12, 'goo', 'asdasdasd', '2019-07-01 21:08:59'),
(13, 'as', 'wq', '2019-07-01 21:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `Scores`
--

CREATE TABLE `Scores` (
  `Id` int(11) NOT NULL,
  `Game` varchar(20) DEFAULT NULL,
  `Team_1` varchar(50) DEFAULT NULL,
  `Team_2` varchar(50) DEFAULT NULL,
  `Score` varchar(10) DEFAULT NULL,
  `Winner` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Scores`
--

INSERT INTO `Scores` (`Id`, `Game`, `Team_1`, `Team_2`, `Score`, `Winner`, `Time`) VALUES
(1, 'q', 'q', 'q', '12 - 12', 'Draw', '2019-07-01 23:27:28'),
(2, 'cricket', 'india', 'england', '12 - 12', 'Draw', '2019-07-01 23:29:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Announcements`
--
ALTER TABLE `Announcements`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Scores`
--
ALTER TABLE `Scores`
  ADD KEY `In` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Announcements`
--
ALTER TABLE `Announcements`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `Scores`
--
ALTER TABLE `Scores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
