-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 11:48 AM
-- Server version: 10.4.8-MariaDB
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
-- Database: `isah`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `parking_id` int(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `oname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `car` varchar(100) NOT NULL,
  `pnumber` varchar(100) NOT NULL,
  `space` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time_in` time(2) NOT NULL,
  `time_out` time(2) NOT NULL,
  `charge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `parking_id`, `fname`, `lname`, `oname`, `phone`, `email`, `address`, `gender`, `car`, `pnumber`, `space`, `date`, `time_in`, `time_out`, `charge`) VALUES
(4, 56874, 'salisu', 'elba', 'hassan', '01025349', 's@gmail.com', 'j/fari', 'male', 'pan', 'gmb/234/dku', 'B01', '2019-12-19', '01:59:00.00', '13:03:00.00', '100'),
(5, 63987, 'musa', 'adamu', 'ali', '08036394643', 'ib@gmail.com', 'bajiga', 'male', 'benza', 'gme 254', 'A01', '2020-02-03', '12:00:00.00', '13:23:00.00', '100'),
(6, 56632, 'musa', 'adamu', 'ali', '08036394643', 'ib@gmail.com', 'bajiga', 'male', 'benza', 'gme 254', 'A01', '2020-02-03', '12:00:00.00', '13:23:00.00', '100'),
(7, 88373, 'amina', 'liya', 'liya', '08036394740', 'am@gmail.com', 'ajiya', 'female', 'pilo', 'gme/11010/gme', 'A02', '2020-02-04', '13:04:00.00', '14:53:00.00', '100'),
(8, 66649, 'amina', 'liya', 'liya', '08036394740', 'am@gmail.com', 'ajiya', 'female', 'pilo', 'gme/11010/gme', 'A02', '2020-02-04', '13:04:00.00', '14:53:00.00', '100'),
(10, 90856, 'anas', 'mamuda', 'ali', '08012345678', 'an@gmail.com', 'bajiga', 'male', 'prilude', 'bauchi 123', 'B01', '2020-02-04', '13:03:00.00', '13:59:00.00', '100'),
(11, 24578, 'amir', 'yaya', 'yaya', '09012345678', 'a10@gmail.com', 'nasarawa', 'male', 'lambo', 'bauchi 190', 'B01', '2020-02-05', '13:59:00.00', '14:56:00.00', '100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `access_level` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `uname`, `access_level`) VALUES
(2, 'audu', 'muhammad', '08079631788', 'isah@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin1', '1'),
(3, 'ibrahim', 'musa', '02036394643', 'ibrahim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ib10', '0'),
(4, 'sunusi', 'abdullahi', '08063258263', 'sunusiabdullahi882@gmail.com', '90b7ae8b0a4c5d1e0f38856d388c0af8', 'sunusipantami', '0'),
(6, 'ibrahim', 'mamuda', '01025349', 'anas@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'ib10', '0'),
(7, 'aliyu', 'adamu', '02036987456', 'ali@gmail.com', '202cb962ac59075b964b07152d234b70', 'ali1', '0'),
(8, 'adamu', 'lawan', '0124578', 'ad@gmail.com', '202cb962ac59075b964b07152d234b70', 'ad12', '0'),
(9, 'ado', 'habu', '09012345678', 'ado@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ado12', '0'),
(10, 'audul', 'a', '1234567', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'a12', '0'),
(12, 'audu', 'mamuda', '09032542326', 'IMG@mail.com', 'e4da3b7fbbce2345d7772b0674a318d5', 'is', '0'),
(13, 'isah', 'muhammad', '08079631788', 'isannh@gmail.com', '36394643', 'Admin', '1'),
(14, 'is,mail', 'ddd', '090888888888', 'eeeee@gmail.com', '12', 'isss', '0'),
(15, 'demo', 'demo', '08079631788', 'demo@gmail.com', '1', 'Admin', '0'),
(16, 'Dahiru', 'Aliyu Adamu', '08146149773', 'daha@gmail.com', 'pass123', 'daha', '0'),
(17, 'amina', 'liya', '08036394740', 'am@gmail.com', '123', 'am10', '0'),
(18, '', '', '', '', '', '', '0'),
(19, 'aminu', 'audu', '07012345678', 'au@gmail.com', '12', 'audu1', '0'),
(20, 'ummi', 'waziri', '08045675321', 'ummi@gmail.com', '12345', 'umm10', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
