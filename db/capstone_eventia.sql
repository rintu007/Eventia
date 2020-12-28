-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 04:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_eventia`
--
CREATE DATABASE IF NOT EXISTS `capstone_eventia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `capstone_eventia`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `name`, `event`, `description`, `time`, `date`) VALUES
(1, 'j', 'm', 'mj', 'k', '2020-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `menu1` varchar(20) NOT NULL,
  `qty1` int(11) NOT NULL,
  `menu2` varchar(20) NOT NULL,
  `qty2` int(11) NOT NULL,
  `menu3` varchar(20) NOT NULL,
  `qty3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `menu1`, `qty1`, `menu2`, `qty2`, `menu3`, `qty3`) VALUES
(1, '', 0, '', 0, '', 0),
(2, '', 0, '', 0, '', 0),
(3, 'orange juice', 6, 'none', 0, 'Masala dosa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ContactID` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ContactID`, `name`, `number`, `email`, `message`) VALUES
(1, 'j', 3, ' b', ',  jv'),
(2, 'w', 0, '', 'w'),
(3, 'kjk', 0, '', ' ,k/'),
(4, 'kjk', 0, '', ' ,k/'),
(5, 'kjk', 0, '', ' ,k/');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(11) NOT NULL,
  `event` varchar(50) NOT NULL,
  `event1` varchar(50) NOT NULL,
  `people` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`id`, `event`, `event1`, `people`, `budget`, `date`, `name`, `email`, `description`, `status`) VALUES
(1, 'Birthday', 'd', 0, 3, '2020-12-16', '3', 'a@gmail.com', '3', 'Not confirmed'),
(2, 'Birthday', 'd', 0, 3, '2020-12-16', '3', 'a@gmail.com', '3', 'Not confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_Id` int(20) NOT NULL,
  `event` varchar(50) NOT NULL,
  `F_entertaining` varchar(50) NOT NULL,
  `F_inspired` varchar(50) NOT NULL,
  `recommend` varchar(50) NOT NULL,
  `suggestions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_Id`, `event`, `F_entertaining`, `F_inspired`, `recommend`, `suggestions`) VALUES
(1, 'd', 'on', 'on', 'on', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` int(11) NOT NULL,
  `expmonth` varchar(50) NOT NULL,
  `expyear` varchar(50) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES
(1, '', 0, '', '', 0),
(2, '', 0, '', '', 0),
(3, 'er', 34, 'f', 'fr', 0),
(4, 'er', 34, 'f', 'fr', 0),
(5, 'anisha', 1456789, ' sept', '2019', 145),
(6, 'anisha', 1456789, ' sept', '2019', 145),
(7, 'anisha', 2147483647, 'set', '2021', 123);

-- --------------------------------------------------------

--
-- Table structure for table `statusupdate`
--

CREATE TABLE `statusupdate` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `confirmation` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statusupdate`
--

INSERT INTO `statusupdate` (`id`, `name`, `event`, `confirmation`, `description`, `amount`) VALUES
(1, 'anisha', 'wedding', 'yes', 'vhu', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Username`, `email`, `password`) VALUES
(1, 'anishajoy', 'a@gmail.com', 'anu1'),
(2, 'tintu', 'ag@gmail.com', 'tb'),
(3, 'admin', 'admin@eventia.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venueID` bigint(20) NOT NULL,
  `event` varchar(50) NOT NULL,
  `event1` varchar(50) DEFAULT NULL,
  `people` int(50) NOT NULL,
  `budget` int(11) NOT NULL,
  `date` date NOT NULL,
  `Srequest` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `description` varchar(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venueID`, `event`, `event1`, `people`, `budget`, `date`, `Srequest`, `name`, `email`, `number`, `description`, `status`) VALUES
(1, '', '', 0, 0, '0000-00-00', '                ', '', '', 0, '', 'Not confirmed'),
(2, 'Wedding', '', 500, 1500, '2020-12-16', '    decor white roses.simple arrangement        ', 'anisha', 'a@gmail.com', 1457699000, 'destinjq', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `venuedecision`
--

CREATE TABLE `venuedecision` (
  `id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `statusupdate`
--
ALTER TABLE `statusupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venueID`);

--
-- Indexes for table `venuedecision`
--
ALTER TABLE `venuedecision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `statusupdate`
--
ALTER TABLE `statusupdate`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venueID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venuedecision`
--
ALTER TABLE `venuedecision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
