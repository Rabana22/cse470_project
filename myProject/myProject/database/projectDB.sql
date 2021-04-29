-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 05:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jobID` varchar(5) NOT NULL,
  `sex` char(8) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`, `email`, `jobID`, `sex`, `phoneNo`, `address`) VALUES
('Fahim Hasan Mehed', 'admin1', '12345', 'fahimhasanmehedi@gmail.com', 'ad01', 'male', '001122334455667', 'Feni');

-- --------------------------------------------------------

--
-- Table structure for table `gateman`
--

CREATE TABLE `gateman` (
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jobID` varchar(5) NOT NULL,
  `NID` varchar(15) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gateman`
--

INSERT INTO `gateman` (`name`, `username`, `password`, `email`, `jobID`, `NID`, `phoneNo`, `address`) VALUES
('Fahim', 'gateman1', '12345', 'fahim@gmail.com', 'g01', '12321321413214', '12131323123', 'Feni');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `serialNo` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNo` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `nid` int(15) NOT NULL,
  `fNo` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `entryTime` time NOT NULL,
  `exitTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`serialNo`, `name`, `phoneNo`, `email`, `address`, `nid`, `fNo`, `date`, `entryTime`, `exitTime`) VALUES
(9, 'anindo', 1, 'abc@gmail.com', 'dhaka', 123, 'F1', '2020-09-16', '10:00:00', NULL),
(10, 'anindo', 111, 'abc@gmail.com', 'dhaka', 123, 'F1', '2020-09-16', '10:00:00', NULL),
(11, 'anindo', 111, 'abc@gmail.com', 'mathiara,feni', 123, 'F7', '2020-09-16', '10:22:00', NULL),
(12, 'anindo', 1, 'abc@gmail.com', 'mathiara,feni', 123, 'F1', '2020-09-16', '10:22:00', NULL),
(13, 'anindo', 1, 'abc@gmail.com', 'mathiara,feni', 123, 'F1', '2020-09-16', '10:23:00', NULL),
(14, 'ruba', 33, 'dsw', 'dhaka', 321, 'F1', '2020-09-16', '10:25:00', NULL),
(15, 'ruba', 111, 'abc@gmail.com', 'mathiara,feni', 321, 'F1', '2020-09-16', '10:25:00', NULL),
(16, 'ruba', 1, 'abc@gmail.com', 'mathiara,feni', 321, 'F1', '2020-09-16', '10:25:00', NULL),
(17, 'ruba', 1, 'abc@gmail.com', 'mathiara,feni', 321, 'F1', '2020-09-16', '10:26:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`serialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `serialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
