-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 04:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cSchedule`
--

CREATE TABLE `cSchedule` (
  `clientid` int(11) NOT NULL,
  `timeid` varchar(11) NOT NULL,
  `classid` varchar(11) NOT NULL,
  `daysid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cSchedule`
--

INSERT INTO `cSchedule` (`clientid`, `timeid`, `classid`, `daysid`) VALUES
(1, '1', 'Gentle', 'weekday'),
(2, '3', 'vinyasa', 'weekend'),
(3, '6', 'restorative', 'weekend'),
(4, '2', 'vinyasa', 'weekday'),
(5, '7', 'gentle', 'weekday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cSchedule`
--
ALTER TABLE `cSchedule`
  ADD KEY `clientid` (`clientid`),
  ADD KEY `timeid` (`timeid`),
  ADD KEY `classid` (`classid`),
  ADD KEY `daysid` (`daysid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cSchedule`
--
ALTER TABLE `cSchedule`
  ADD CONSTRAINT `cSchedule_ibfk_1` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`),
  ADD CONSTRAINT `cSchedule_ibfk_2` FOREIGN KEY (`timeid`) REFERENCES `time` (`timeid`),
  ADD CONSTRAINT `cSchedule_ibfk_3` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `cSchedule_ibfk_4` FOREIGN KEY (`daysid`) REFERENCES `days` (`daysid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
