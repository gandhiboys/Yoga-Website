-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 04:18 PM
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
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `name`, `address`, `phone`, `email`, `password`) VALUES
(1, 'Candice Gomes', '1001 UTA Blvd, Arlington TX - 76013', '6822562934', 'candicegomes15@hotmail.com', 'Yoga2017'),
(2, 'Rachel Green', '501 Collins St. Arlington Tx-76013', '8227227710', 'rachel.green@yahoo.com', 'Yoga2017'),
(3, 'Monice Gellar', '21 Sugar Bay, San Francisco CA-76882 ', '8871109965', 'monica.GBing@uta.edu', 'Yoga2017'),
(4, 'Pheobe Buffay', '5 Central Perk Road, Trenton NJ-50611 ', '8871066291', 'pheobe.buffay@msn.com', 'Yoga2017'),
(5, 'Ross Gellar', '10 Lamar Blvd, Denver CO-99010', '6581140925', 'ross.gellar@gmail.com', 'Yoga2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
