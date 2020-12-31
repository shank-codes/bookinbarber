-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 07:10 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barberproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `shopid` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`shopid`, `password`) VALUES
(1, 'pass'),
(3, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bemail` varchar(30) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `bpnumber` varchar(10) NOT NULL,
  `bshopid` int(11) NOT NULL,
  `bshopname` varchar(30) NOT NULL,
  `starttime` int(11) NOT NULL DEFAULT 8,
  `endtime` int(11) NOT NULL DEFAULT 8,
  `date` date NOT NULL,
  `options` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bemail`, `bname`, `bpnumber`, `bshopid`, `bshopname`, `starttime`, `endtime`, `date`, `options`) VALUES
('abc2@gmail.com', 'Shashank', '12345678', 1, 'Abc1', 10, 13, '2020-12-12', 'haircut,shave,facial,'),
('mehowil@gmail.com', 'Mehowil', '12345678', 3, 'Abc3', 8, 10, '2020-12-11', 'haircut,shave,');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `uemail` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upassword` varchar(10) NOT NULL,
  `upnumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`uemail`, `uname`, `upassword`, `upnumber`) VALUES
('abc1@gmail.com', 'shank_codes', '123Abcde', '12345678'),
('abc2@gmail.com', 'Shashank', '1234Abcd', '12345678'),
('abc@gmail.com', 'Abc', '123', '123456'),
('mehowil@gmail.com', 'Mehowil', 'Jules123', '12345678'),
('saurav@gmail.com', 'saurav', '1234Abcd', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `shop_list`
--

CREATE TABLE `shop_list` (
  `shopid` int(11) NOT NULL,
  `shopname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_list`
--

INSERT INTO `shop_list` (`shopid`, `shopname`, `address`, `city`, `rating`) VALUES
(1, 'Abc1', 'abcdeff', 'Karkala', 3),
(2, 'Abc2', 'abcdeff', 'Udupi', 4),
(3, 'Abc3', 'abcdeff', 'Karkala', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`shopid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bemail`);

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`uemail`);

--
-- Indexes for table `shop_list`
--
ALTER TABLE `shop_list`
  ADD PRIMARY KEY (`shopid`),
  ADD UNIQUE KEY `sname` (`shopname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
