-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 06:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcarelogistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(25) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `tname` varchar(256) NOT NULL,
  `pincode` int(11) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `types` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `cname`, `tname`, `pincode`, `mobile`, `types`, `date`) VALUES
(1, 'abhishek', 'abhishek', 834003, '9470940928', 'Erythrocyte count', '2020-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `id` int(11) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `tname` varchar(256) NOT NULL,
  `typeoftest` varchar(256) NOT NULL,
  `sampletype` varchar(256) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`id`, `cname`, `tname`, `typeoftest`, `sampletype`, `cost`) VALUES
(1, 'abhishek', 'abhishek', 'Erythrocyte count', 'Hair', 10000),
(2, 'abhishek', 'abhishek', 'Erythrocyte count', 'Blood', 20000),
(3, 'abhishek', 'abhishek', 'Erythrocyte count', 'Blood', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `pincode` int(11) NOT NULL,
  `cnumber` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `username`, `password`, `email`, `location`, `pincode`, `cnumber`) VALUES
(1, 'Abhishek Kesri', 'abhishek', '$2y$10$PQb1JKlhxaF9P.1gPnewEeh1YFMc2YyncNcx2MQxDDWlQNfyZxYA2', 'abhi987@gmail.com', 'Hatia', 834003, '9470940928');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `cname` varchar(100) DEFAULT NULL,
  `types` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `addedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`cname`, `types`, `email`, `mobile`, `addedby`) VALUES
('krish', 'Blood', 'shiva@gmail.com', '789456120', 'shiva');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `image`) VALUES
(1, 'Sterile glass or plastic tube with rubber caps', 'tube.PNG'),
(2, 'Injections', 'injections.PNG'),
(3, 'Specimen collection container', 'specimen.PNG'),
(4, 'Zip lock bags', 'ziplock.PNG'),
(5, 'Scissors', 'available.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(25) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `pincode` int(11) NOT NULL,
  `cnumber` int(12) NOT NULL,
  `timings` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `fullname`, `username`, `password`, `email`, `location`, `pincode`, `cnumber`, `timings`) VALUES
(1, 'Abhishek Kesri', 'abhishek', '$2y$10$BhDrFaVPdWpG84Soho74ruJg6IVCkVV.msIBGkv6KPAz2tXF1uDHS', 'abhi987@gmail.com', 'Hatia', 834003, 2147483647, '12pm-2pm'),
(2, 'salman', 'sallu', '$2y$10$bKf/jh6cF.hujiEqZ2wSt.qYCyZ0DJM8h/DEP9eSRR5wqOLbPoDBO', 'sallu123@gmail.com', 'mumbai', 834003, 2147483647, '8am-10am');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`) VALUES
(1, 'Blood Test'),
(2, 'corona test'),
(3, 'cancer test'),
(4, 'Erythrocyte count'),
(5, 'ECG'),
(6, 'MRI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
