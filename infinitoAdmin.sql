-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 07:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinitoadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `FacebookUrl` varchar(500) DEFAULT NULL,
  `InstaUrl` varchar(500) DEFAULT NULL,
  `ImgAddress` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`Id`, `Title`, `Description`, `Date`, `FacebookUrl`, `InstaUrl`, `ImgAddress`) VALUES
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
-- Table structure for table `athletics`
--

CREATE TABLE `athletics` (
  `Id` int(11) NOT NULL,
  `RaceName` varchar(200) NOT NULL,
  `Winner` varchar(200) NOT NULL,
  `FirstRunnerUp` varchar(200) NOT NULL,
  `SecondRunnerUp` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `athletics`
--

INSERT INTO `athletics` (`Id`, `RaceName`, `Winner`, `FirstRunnerUp`, `SecondRunnerUp`, `date`) VALUES
(3, '100M Boys', 'IIT Patna', 'NIT Patna', 'IIT BHU', '2019-10-06 17:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `Id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `isCaptain` tinyint(1) DEFAULT 0,
  `InfCode` varchar(10) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `isConfirmed` int(2) DEFAULT NULL,
  `Phone` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `CollegeId` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`Id`, `Name`, `College`, `isCaptain`, `InfCode`, `Email`, `isConfirmed`, `Phone`, `Gender`, `CollegeId`) VALUES
(48, 'A', 'IIT Patna', 0, 'INF_3001', '1801CS39@iitp.ac.in', NULL, '194932148012', 'Male', ''),
(49, 'B', 'IIT Patna', 0, 'INF_3049', 'ritwizsinha0@gmail.com', NULL, '93048124034', 'Male', ''),
(50, 'Prem', 'IIT Patna', 1, 'INF_3050', 'prembhawnani1412.pb@gmail.com', NULL, '91293491234', 'Male', ''),
(51, 'Kamal Choudhury', 'IIT Patna', 0, 'INF_3051', 'kamalchoudhury@gmail.com', NULL, '741923841072943`', 'Male', ''),
(53, 'Subhnag', 'IIT Patna', 0, 'INF_3052', 'vssubhang@gmail.com', NULL, '872431908234', 'Male', ''),
(54, 'Bilal', 'NIT Patna', 1, 'INF_3054', 'bilal@gmail.com', NULL, '8723948109', 'Male', ''),
(55, 'Umar', 'IIT MADRAS', 0, 'INF_3055', 'umar@gmail.com', NULL, '87231947', 'Male', ''),
(56, 'Bhumika', 'NIT PATNA', 1, 'INF_3056', 'bhumika@gmail.com', NULL, '781209437102', 'Female', ''),
(57, 'Garima', 'IIT M', 0, 'INF_3057', 'garima@gmail.com', NULL, '871243932', 'Female', ''),
(58, 'Yashika', 'Dav', 1, 'INF_3058', 'yashika@gmail.com', NULL, '637373838', 'Female', ''),
(59, 'Hamid', 'MIT Bhopal', 0, 'INF_3059', 'hamid@lauda.com', NULL, '8741091', 'Male', 'MITL');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `Id` int(11) NOT NULL,
  `Sport` varchar(30) NOT NULL,
  `InfCode` varchar(30) NOT NULL,
  `Aux` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`Id`, `Sport`, `InfCode`, `Aux`) VALUES
(5, 'athletics', 'INF_3049', 'Boys 100m'),
(6, 'athletics', 'INF_3001', 'Boys 100m'),
(7, 'athletics', 'INF_3049', 'Boys 100m'),
(8, 'athletics', 'INF_3001', 'Boys 100m'),
(21, 'athletics', 'INF_3058', 'Girls 1500m'),
(22, 'tabletennis', 'INF_3050', 'basketball'),
(23, 'tabletennis', 'INF_3051', 'basketball'),
(24, 'tabletennis', 'INF_3054', 'football'),
(25, 'tabletennis', 'INF_3055', 'football'),
(26, 'cricket', 'INF_3058', ''),
(27, 'cricket', 'INF_3057', ''),
(28, 'basketball', 'INF_3056', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `Id` int(11) NOT NULL,
  `Game` varchar(20) DEFAULT NULL,
  `Team_1` varchar(50) DEFAULT NULL,
  `Team_2` varchar(50) DEFAULT NULL,
  `Score` varchar(10) DEFAULT NULL,
  `Winner` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `athletics`
--
ALTER TABLE `athletics`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD KEY `In` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `athletics`
--
ALTER TABLE `athletics`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
