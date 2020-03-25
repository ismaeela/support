-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 04:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients_tbl`
--

CREATE TABLE `clients_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_tbl`
--

INSERT INTO `clients_tbl` (`id`, `name`) VALUES
(1, 'Federal College of Education Tech Gombe'),
(2, 'Federal College of Horticulture Dadinkowa'),
(3, 'The Federal Polytechnic Damaturu '),
(4, 'Gombe State Science and Technology Kaltungo'),
(5, 'Hussaini Adamu Federal Polytechic'),
(6, 'Ummah College');

-- --------------------------------------------------------

--
-- Table structure for table `com_chanels`
--

CREATE TABLE `com_chanels` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_chanels`
--

INSERT INTO `com_chanels` (`com_id`, `com_name`) VALUES
(1, 'email'),
(2, 'sms'),
(3, 'call');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `access_level` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`id`, `username`, `password`, `name`, `access_level`) VALUES
(1, '001', '1', 'Muhammad Kabir Abubakar', '0'),
(2, '002', '1', 'Abdulahi Musa Sulaiman', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tickes`
--

CREATE TABLE `tickes` (
  `tic_id` int(11) NOT NULL,
  `tic_client_id` varchar(200) NOT NULL,
  `tic_chanel` varchar(200) NOT NULL,
  `tic_subject` varchar(200) NOT NULL,
  `tic_sender_id` varchar(200) NOT NULL,
  `tic_date` date NOT NULL,
  `tic_time` varchar(200) NOT NULL,
  `tic_desc` text NOT NULL,
  `tic_assign_id` int(11) NOT NULL,
  `tic_expected_date` date NOT NULL,
  `tic_expected_time` varchar(200) NOT NULL,
  `tic_treated_status` enum('0','1') DEFAULT '0',
  `tic_treated_at` date NOT NULL,
  `client_reply_status` enum('0','1') NOT NULL DEFAULT '0',
  `cliet_reply_at` date NOT NULL,
  `tic_close_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients_tbl`
--
ALTER TABLE `clients_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_chanels`
--
ALTER TABLE `com_chanels`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickes`
--
ALTER TABLE `tickes`
  ADD PRIMARY KEY (`tic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients_tbl`
--
ALTER TABLE `clients_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `com_chanels`
--
ALTER TABLE `com_chanels`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickes`
--
ALTER TABLE `tickes`
  MODIFY `tic_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
