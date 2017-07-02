-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 06:20 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruap`
--

-- --------------------------------------------------------

--
-- Table structure for table `rez`
--

CREATE TABLE `rez` (
  `id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `winlose` varchar(30) NOT NULL,
  `period` int(30) NOT NULL,
  `gameclock` varchar(30) NOT NULL,
  `shotclock` int(30) NOT NULL,
  `shotdistance` varchar(30) NOT NULL,
  `pointstype` int(30) NOT NULL,
  `closedefdistance` varchar(30) NOT NULL,
  `player` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rez`
--

INSERT INTO `rez` (`id`, `location`, `winlose`, `period`, `gameclock`, `shotclock`, `shotdistance`, `pointstype`, `closedefdistance`, `player`, `result`) VALUES
(13, 'H', 'W', 1, '04:26', 10, '26', 3, '2.6', 'stephen curry', 'missed'),
(14, 'H', 'W', 1, '04:26', 10, '23', 3, '2.6', 'stephen curry', 'made'),
(15, 'H', 'W', 1, '04:26', 10, '22', 3, '2.6', 'carmelo anthony', 'missed'),
(18, 'H', 'W', 1, '04:26', 10, '18', 2, '1.6', 'kobe bryant', 'made'),
(19, 'A', 'W', 2, '01:26', 6, '12', 2, '1.8', 'lebron james', 'made'),
(20, 'H', 'W', 2, '04:26', 10, '25', 3, '2.6', 'nick young', 'missed'),
(25, 'H', '', 1, '04:26', 10, '22', 3, '2.6', 'brian roberts', 'missed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rez`
--
ALTER TABLE `rez`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rez`
--
ALTER TABLE `rez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
