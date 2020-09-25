-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 09:20 AM
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
-- Database: `classroom`
--
CREATE DATABASE IF NOT EXISTS `classroom` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `classroom`;

-- --------------------------------------------------------

--
-- Table structure for table `abcd_notification`
--

CREATE TABLE `abcd_notification` (
  `sr no.` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `notice` varchar(200) NOT NULL,
  `sub_req` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abcd_notification`
--

INSERT INTO `abcd_notification` (`sr no.`, `username`, `notice`, `sub_req`) VALUES
(1, 'admin', 'this test message is to check if every this is working perfectly fine or not', 1),
(2, 'admin', 'this is the same test message as above but rather second', 1),
(3, 'admin', 'test3', 1),
(4, 'ranjeet112', 'test 4 special test', 1),
(5, 'admin', 'wqw', 1),
(6, 'ranjeet112', 'hello world', 1),
(7, 'ranjeet112', 'this is to test if the message is entering to the table or not', 1),
(8, 'ranjeet112', 'hello world3', 1),
(9, 'ranjeet112', 'hello world4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `abcd_stud_details`
--

CREATE TABLE `abcd_stud_details` (
  `sr no.` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abcd_stud_details`
--

INSERT INTO `abcd_stud_details` (`sr no.`, `username`) VALUES
(2, 'ranjeet112');

-- --------------------------------------------------------

--
-- Table structure for table `admin_created`
--

CREATE TABLE `admin_created` (
  `classcode` varchar(20) NOT NULL,
  `classname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_created`
--

INSERT INTO `admin_created` (`classcode`, `classname`) VALUES
('abcd', 'ML'),
('pqr', 'Softwarre Engg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_joined`
--

CREATE TABLE `admin_joined` (
  `classcode` varchar(20) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `creater` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_class`
--

CREATE TABLE `list_of_class` (
  `code` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `creater` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_of_class`
--

INSERT INTO `list_of_class` (`code`, `cname`, `creater`) VALUES
('', 'a', 'administrator'),
('abcd', 'ML', 'admin'),
('pqr', 'Softwarre Engg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pqr_notification`
--

CREATE TABLE `pqr_notification` (
  `sr no.` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `notice` varchar(200) NOT NULL,
  `sub_req` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pqr_stud_details`
--

CREATE TABLE `pqr_stud_details` (
  `sr no.` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pqr_stud_details`
--

INSERT INTO `pqr_stud_details` (`sr no.`, `username`) VALUES
(1, 'ranjeet112');

-- --------------------------------------------------------

--
-- Table structure for table `ranjeet112_created`
--

CREATE TABLE `ranjeet112_created` (
  `classcode` varchar(20) NOT NULL,
  `classname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ranjeet112_joined`
--

CREATE TABLE `ranjeet112_joined` (
  `classcode` varchar(20) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `creater` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranjeet112_joined`
--

INSERT INTO `ranjeet112_joined` (`classcode`, `classname`, `creater`) VALUES
('pqr', 'Softwarre Engg', 'admin'),
('abcd', 'ML', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(20) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `phone_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `gmail`, `password`, `phone_no`) VALUES
('', '', '', 0),
('admin', 'aa@ss', 'admin', 222222),
('ranjeet112', 'ranjeet112pandey@gmail.com', 'R@njeet112', 7303002608);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abcd_notification`
--
ALTER TABLE `abcd_notification`
  ADD PRIMARY KEY (`sr no.`);

--
-- Indexes for table `abcd_stud_details`
--
ALTER TABLE `abcd_stud_details`
  ADD PRIMARY KEY (`sr no.`);

--
-- Indexes for table `list_of_class`
--
ALTER TABLE `list_of_class`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `pqr_notification`
--
ALTER TABLE `pqr_notification`
  ADD PRIMARY KEY (`sr no.`);

--
-- Indexes for table `pqr_stud_details`
--
ALTER TABLE `pqr_stud_details`
  ADD PRIMARY KEY (`sr no.`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abcd_notification`
--
ALTER TABLE `abcd_notification`
  MODIFY `sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `abcd_stud_details`
--
ALTER TABLE `abcd_stud_details`
  MODIFY `sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pqr_notification`
--
ALTER TABLE `pqr_notification`
  MODIFY `sr no.` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pqr_stud_details`
--
ALTER TABLE `pqr_stud_details`
  MODIFY `sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
