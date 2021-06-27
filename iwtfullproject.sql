-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 01:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwtfullproject`
--
CREATE DATABASE IF NOT EXISTS `iwtfullproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `iwtfullproject`;

-- --------------------------------------------------------

--
-- Table structure for table `bookticket`
--

CREATE TABLE `bookticket` (
  `BookID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DateBook` varchar(20) NOT NULL,
  `TimeBook` varchar(10) NOT NULL,
  `Startpoint` varchar(30) NOT NULL,
  `Endpoint` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `BusNumber` varchar(30) NOT NULL,
  `CreditCardNo` varchar(30) NOT NULL,
  `PayID` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookticket`
--

INSERT INTO `bookticket` (`BookID`, `UserID`, `DateBook`, `TimeBook`, `Startpoint`, `Endpoint`, `Quantity`, `Price`, `BusNumber`, `CreditCardNo`, `PayID`) VALUES
(36, 1, '2020-10-30', '06:48', 'Matara', 'kaduwela', 10, '5500', '150', '', '10044564521'),
(35, 1, '2020-10-25', '08:00', 'Matara', 'kaduwela', 1, '550', '150', '', '1568954497'),
(37, 1, '2020-10-28', '07:50', 'kaduwela', 'Galle', 5, '2650', '180', '', '10044564521');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `User_ID` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_num` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Upassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`User_ID`, `First_name`, `Last_name`, `Email`, `Mobile_num`, `DOB`, `Gender`, `Upassword`) VALUES
(1, 'df', 'dfvd', 'pula@gmail.com', 767488585, '2020-10-14', 'male', 'pulasthi1'),
(2, 'chamini', 'sandunika', 'chami@gmail.com', 712345765, '2020-09-28', 'female', 'chamini123'),
(9, 'Lionel', 'Messi', 'messi10@gmail.com', 771234567, '2020-10-01', 'Male', '12345678'),
(10, 'shehan', 'silva', 'shehansilva@gmail.com', 767616609, '2020-10-08', 'male', 'pulasthi1');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sname`, `email`, `phone`, `message`) VALUES
(1, 'sam', 'sam@mail.com', 123456789, 'testing 123 testing 456'),
(2, 'ravi', 'ravi@mail.com', 987654321, 'testing 789 testing 123'),
(3, 'sa', 'as@g.c', 21212, 'dsdsdsd'),
(4, 'asasasa', 'asasa@g', 12121, 'sdssd'),
(5, 'sasa sasa', 'pula@gmail.com', 767616609, 'ewrwr'),
(6, 'gb', 'dgb@g', 0, 'fsdfsdf'),
(7, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `view_shedule`
--

CREATE TABLE `view_shedule` (
  `bus_id` int(11) NOT NULL,
  `start_point` varchar(20) NOT NULL,
  `end_point` varchar(20) NOT NULL,
  `sdate` varchar(25) NOT NULL,
  `stime` varchar(50) NOT NULL,
  `route_num` varchar(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_shedule`
--

INSERT INTO `view_shedule` (`bus_id`, `start_point`, `end_point`, `sdate`, `stime`, `route_num`, `price`) VALUES
(25, 'Matara', 'Kaduwela', '2020-10-23', '04:30', '150', 550),
(26, 'Matara', 'kottawa', '2020-10-25', '06:00', '165', 500),
(27, 'Matara', 'Kadawatha', '2020-10-25', '07:01', '145', 700),
(28, 'Matara', 'Maharagama', '2020-10-26', '13:30', '140', 600),
(29, 'Maharagama', 'Matara', '2020-10-27', '15:00', '140', 600),
(30, 'Maharagama', 'Kadawatha', '2020-10-27', '17:50', '135', 300),
(31, 'kadawatha', 'Maharagama', '2020-10-27', '08:00', '135', 300),
(32, 'kadawatha', 'Matara', '2020-10-28', '13:29', '145', 700),
(33, 'kadawatha', 'Galle', '2020-10-30', '09:00', '120', 600),
(34, 'Maharagama', 'Galle', '2020-10-30', '15:00', '110', 450),
(35, 'kottawa', 'Matara', '2020-10-30', '07:25', '165', 500),
(36, 'Galle', 'Kaduwela', '2020-11-01', '05:00', '180', 530),
(37, 'kaduwela', 'Galle', '2020-11-01', '08:00', '180', 530),
(38, 'kaduwela', 'Matara', '2020-11-03', '14:30', '150', 550),
(39, 'kaduwela', 'Maharagama', '2020-10-03', '11:00', '170', 250),
(40, 'Matara', 'Galle', '2020-10-05', '15:00', '115', 250),
(41, 'Maharagama', 'Matara', '2020-10-04', '07:00', '140', 600),
(42, 'Galle', 'Matara', '2020-11-05', '15:00', '115', 250),
(43, 'kadawatha', 'kottawa', '2020-11-05', '', '105', 200),
(44, 'kadawatha', 'Kaduwela', '2020-11-08', '19:00', '90', 300),
(45, 'kottawa', 'Kadawatha', '2020-11-09', '', '105', 200),
(46, 'Galle', 'Kadawatha', '2020-11-23', '05:00', '120', 600),
(47, 'Maharagama', 'kottawa', '2020-11-07', '14:30', '155', 200),
(48, 'Maharagama', 'Kaduwela', '2020-11-07', '18:59', '170', 250),
(49, 'kottawa', 'Kadawatha', '2020-11-23', '19:00', '105', 250),
(50, 'kottawa', 'Galle', '2020-11-09', '08:00', '125', 550),
(51, 'kaduwela', 'Kadawatha', '2020-11-10', '10:45', '90', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookticket`
--
ALTER TABLE `bookticket`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `view_shedule`
--
ALTER TABLE `view_shedule`
  ADD PRIMARY KEY (`bus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookticket`
--
ALTER TABLE `bookticket`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `view_shedule`
--
ALTER TABLE `view_shedule`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
