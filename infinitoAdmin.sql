-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2019 at 06:20 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

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
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FacebookUrl` varchar(50) DEFAULT NULL,
  `InstaUrl` varchar(50) DEFAULT NULL,
  `ImgAddress` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Announcements`
--

INSERT INTO `Announcements` (`Id`, `Title`, `Description`, `Date`, `FacebookUrl`, `InstaUrl`, `ImgAddress`) VALUES
(1, 'sdadadas', 'asdas', '2019-07-01 16:46:25', NULL, NULL, './img101.png'),
(2, 'HELLO', 'BYE', '2019-07-01 17:00:00', NULL, NULL, './img102.png'),
(3, NULL, 'sadfalsflk', '2019-07-01 17:11:00', NULL, NULL, './img103.png'),
(4, 'anc', 'cdb', '2019-07-01 17:12:16', NULL, NULL, NULL),
(5, 'infinito start', 'end', '2019-07-01 17:16:20', NULL, NULL, NULL),
(8, 'ab', 'cd', '2019-07-01 19:59:02', NULL, NULL, NULL),
(10, 'abcd', 'bacd', '2019-07-01 20:04:57', NULL, NULL, NULL),
(11, 'acbd', 'https://www.facebook.com/InfinitoIITPatna/photos/a.603835473316643/891349207898600/?type=3&theater', '2019-07-01 20:05:39', NULL, NULL, './images/blog/img3.png'),
(12, 'goo', 'https://www.facebook.com/InfinitoIITPatna/photos/a.603835473316643/893164537717067/?type=3&theater', '2019-07-01 21:08:59', NULL, NULL, './images/blog/img2.png'),
(13, 'as', 'https://www.facebook.com/InfinitoIITPatna/photos/a.603835473316643/898030120563842/?type=3&theater', '2019-07-01 21:35:59', NULL, NULL, './images/blog/img1.png');

-- --------------------------------------------------------

--
-- Table structure for table `Captains`
--

CREATE TABLE `Captains` (
  `Id` varchar(20) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `College` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Captains`
--

INSERT INTO `Captains` (`Id`, `Name`, `Email`, `College`) VALUES
('INFN_3018', 'rea', 'djadj@fjak.com', 'pan Masala'),
('INFN_3024', 'malik', 'malik@gmail.com', 'hfkawjef');

-- --------------------------------------------------------

--
-- Table structure for table `Participants`
--

CREATE TABLE `Participants` (
  `Id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Sports` varchar(30) NOT NULL,
  `isCaptain` tinyint(1) NOT NULL,
  `InfCode` varchar(10) NOT NULL,
  `Email` varchar(50) NULL,
  `isConfirmed` int(2) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Participants`
--

INSERT INTO `Participants` (`Id`, `Name`, `College`, `Sports`, `isCaptain`) VALUES
(2, 'Manish', 'RajMinhas', 'football', 0),
(3, 'bolu', 'RajMinhas', 'football', 1),
(4, 'Ritwiz', 'RajHans', 'volleyball', 0),
(12, 'raj', 'Oxford', 'basketball', 1),
(13, 'kan', 'Pan MAsala', 'basketball', 0),
(14, 'adsh', 'Pan MAsala', 'basketball', 0),
(15, 'rajeev', 'Pan MAsala', 'basketball', 1),
(16, 'uadhci', 'pan Masala', 'basketball', 0),
(17, 'cdiauhci', 'pan Masala', 'basketball', 0),
(18, 'rea', 'pan Masala', 'basketball', 1),
(19, 'jskfhl', 'hfkawjef', 'volleyball', 0),
(20, 'hjsdalkfh', 'hfkawjef', 'volleyball', 0),
(21, 'fhladkdhf', 'hfkawjef', 'volleyball', 0),
(22, 'fhkdjlah', 'hfkawjef', 'volleyball', 0),
(23, 'fhla', 'hfkawjef', 'volleyball', 0),
(24, 'malik', 'hfkawjef', 'volleyball', 1);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `Announcements`
--
ALTER TABLE `Announcements`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Participants`
--
ALTER TABLE `Participants`
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
-- AUTO_INCREMENT for table `Participants`
--
ALTER TABLE `Participants`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `Scores`
--
ALTER TABLE `Scores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
