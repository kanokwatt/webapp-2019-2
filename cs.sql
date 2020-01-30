-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 02:55 AM
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
-- Database: `cs`
--
CREATE DATABASE IF NOT EXISTS `cs` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cs`;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `STATUS_ID` tinyint(4) NOT NULL,
  `STATUS_TH` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `STATUS_EN` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`STATUS_ID`, `STATUS_TH`, `STATUS_EN`) VALUES
(1, 'โสด', ''),
(2, 'แต่งงาน', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STU_ID` int(11) NOT NULL,
  `STU_CODE` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `STU_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `STU_TEL` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `STATUS_ID` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STU_ID`, `STU_CODE`, `STU_NAME`, `STU_TEL`, `STATUS_ID`) VALUES
(1, '60020001', 'KANOKWATT SHIANGJEN', '0818850499', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`STATUS_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STU_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
