-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2019 at 11:59 PM
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
(6, 'kiminonawa', 'hey', '2019-07-01 17:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Announcements`
--
ALTER TABLE `Announcements`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Announcements`
--
ALTER TABLE `Announcements`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
