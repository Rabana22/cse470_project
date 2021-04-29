-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2020 at 07:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `f_name`, `l_name`, `address`, `phone`, `email`) VALUES
(1, 'Katha', 'Azad', 'blah blah blah', '1272737', 'katha@gmail.com'),
(2, 'Nowrin', 'Sarita', '34, add,m dhaka, 1234', '729382736', 'nowrinsarita@gmail.com'),
(3, 'Tanvir', 'Mahtab', 'ahuddiduecnu', '323234242', 'tanmah@gmail.com'),
(4, 'Jisan', 'Mahtab', 'dsjdiwjd', '013723872', 'jismah@gmail.com'),
(5, 'Lubaba', 'Tasnia', 'ufejfufjdnf', '01692344', 'lub@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `visitor_id` int(11) NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time NOT NULL,
  `visiting_date` date NOT NULL,
  `flat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`visitor_id`, `entry_time`, `exit_time`, `visiting_date`, `flat`) VALUES
(1, '07:00:00', '10:00:00', '2020-09-09', 'F12'),
(1, '08:00:00', '11:00:00', '2020-09-09', 'F11'),
(2, '13:00:00', '19:00:00', '2020-09-09', 'F11'),
(2, '08:00:00', '11:00:00', '2020-09-09', 'F12'),
(3, '10:00:00', '11:00:00', '2020-09-09', 'F11'),
(3, '10:00:00', '19:00:00', '2020-09-09', 'F11'),
(3, '13:00:00', '19:00:00', '2020-09-09', 'F9'),
(4, '13:00:00', '19:00:00', '2020-09-09', 'F12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
