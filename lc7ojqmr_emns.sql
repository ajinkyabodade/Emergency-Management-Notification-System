-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: mysql7002.site4now.net:3306
-- Generation Time: Mar 16, 2018 at 03:15 PM
-- Server version: 5.6.26-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lc7ojqmr_emns`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `fname`, `email`, `password`, `mobno`) VALUES
(1, 'Ajinkya Bodade', 'bodadeajinkya@gmail.com', 'admin', '7066425769'),
(2, 'Anand Bhagat', 'anbhagat1997@gmail.com', 'admin', '7875219661');

-- --------------------------------------------------------

--
-- Table structure for table `eevent`
--

CREATE TABLE `eevent` (
  `id` int(255) NOT NULL,
  `edesc` varchar(255) DEFAULT NULL,
  `estate` varchar(255) DEFAULT NULL,
  `ecity` varchar(255) DEFAULT NULL,
  `dadd` varchar(255) DEFAULT NULL,
  `adharno` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT '1',
  `reqevent` int(11) DEFAULT '1',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ntype` varchar(255) NOT NULL DEFAULT '0',
  `mobno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sendno`
--

CREATE TABLE `sendno` (
  `id` int(11) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edesc` varchar(255) DEFAULT NULL,
  `ntype` varchar(255) NOT NULL DEFAULT '0',
  `fname` varchar(255) DEFAULT NULL,
  `emergency` int(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendno`
--

INSERT INTO `sendno` (`id`, `state`, `city`, `area`, `datetime`, `edesc`, `ntype`, `fname`, `emergency`) VALUES
(1, 'Rajasthan', 'Jaipur', 'Sector 1', '2018-03-16 16:49:20', 'aag lagli va. tuye mansa pathav', '0', 'Ajinkya Bodade', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobno` varchar(255) DEFAULT NULL,
  `adharno` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `otp` varchar(255) NOT NULL DEFAULT '2551',
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `email`, `mobno`, `adharno`, `password`, `otp`, `state`, `city`, `area`) VALUES
(1, 'Ankit Jangid', 'jankit403@gmail.com', '8983333948', '173467182345', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 1'),
(2, 'Naresh Sharma', 'nareshsharma@gmail.com', '9881764083', '543281764371', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 1'),
(3, 'Ajinkya Rajput', 'rajput08aj@gmail.com', '9511933875', '823451764371', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 1'),
(4, 'Abdul Nadim', 'abdulnadim@gmail.com', '7887767448', '154328173467', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 1'),
(5, 'Vivek Rakhonde', 'vivekrakhonde@gmail.com', '7517626782', '34512877643', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 1'),
(6, 'Ajinkya Bodade', 'bodadeajinkya@gmail.com', '7066425769', '871384385143', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 2'),
(7, 'Nikhil khandade', 'nikhil@gmail.com', '8180991107', '627493628372', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 2'),
(8, 'Anand Bhagat', 'anbhagat1997@gmail.com', '7875219661', '640174243740', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 2'),
(9, 'Aditya Joshi', 'adityajoshi@gmail.com', '8308888056', '385967437439', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 2'),
(10, 'Sagar Kathane', 'sagarkathane@gmail.com', '8806084274', '374836594758', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 2'),
(11, 'Prashant Bhanuse', 'prashant@gmail.com', '8830193327', '56983137435', '123456', '2551', 'Rajasthan', 'Jaipur', 'Sector 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eevent`
--
ALTER TABLE `eevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendno`
--
ALTER TABLE `sendno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eevent`
--
ALTER TABLE `eevent`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sendno`
--
ALTER TABLE `sendno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
