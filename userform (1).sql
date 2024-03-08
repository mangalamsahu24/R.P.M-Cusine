-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 01:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_subject` varchar(70) NOT NULL,
  `c_message` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `c_name`, `c_email`, `c_subject`, `c_message`, `time`) VALUES
(5, 'mangalam', '1213423@rewet', 'asdferagtrhb', '63416ye326ywertuw42t', '2022-03-23 20:46:56'),
(6, '1233', 'admin@gmail.com', '422', '876896786', '2022-03-29 17:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `card_no` varchar(50) NOT NULL,
  `cardh_name` varchar(50) NOT NULL,
  `exp_date` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `email`, `card_no`, `cardh_name`, `exp_date`, `cvv`, `dt`) VALUES
(6, 'sahumangalam24@gmail.com', '2134-4563-6644-2455', 'mangalam', '12/43', '123', '2022-04-10 12:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `event_r`
--

CREATE TABLE `event_r` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `date` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `people` int(10) NOT NULL,
  `child` varchar(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `budget` int(50) NOT NULL,
  `street` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_r`
--

INSERT INTO `event_r` (`id`, `name`, `email`, `phone`, `date`, `stime`, `etime`, `people`, `child`, `event`, `budget`, `street`, `address`, `landmark`, `state`, `city`, `pincode`, `message`, `time`) VALUES
(1, 'jkyujkyujkutykujkyu', 'sahumangalam24@gmail.com', 1234567890, '2022-03-22', '00:00:00', '19:04:00', 76, 'Yes', '', 56456, 'ghfgjghj', 'ghjghjhjgh', 'jghjghj', 'ghjghjgh', 'jghjgj', 124665, '', '2022-03-24 19:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `type`) VALUES
(2, 'admin', 'admin@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `specilization` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` int(7) NOT NULL,
  `contact` int(20) NOT NULL,
  `type` int(11) NOT NULL,
  `join` date NOT NULL,
  `updatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `specilization`, `name`, `email`, `address`, `salary`, `contact`, `type`, `join`, `updatetime`) VALUES
(2, 'cook', 'ramesh', '1213423@rewet', 'gujrat', 5000, 101010101, 0, '0000-00-00', '2022-03-24 20:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `table_reservation`
--

CREATE TABLE `table_reservation` (
  `id` int(3) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_phone` int(20) NOT NULL,
  `t_date` date NOT NULL,
  `t_time` time NOT NULL,
  `t_people` int(3) NOT NULL,
  `t_message` varchar(100) NOT NULL,
  `r_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_reservation`
--

INSERT INTO `table_reservation` (`id`, `t_name`, `t_email`, `t_phone`, `t_date`, `t_time`, `t_people`, `t_message`, `r_time`) VALUES
(2, 'mangalam', 'sahumangalam24@gmail.com', 1234567890, '2022-03-24', '21:22:00', 0, 'yukttuk', '2022-03-24 18:23:09'),
(3, '1233', '1213423@rewet', 0, '2022-03-25', '11:31:00', 0, '', '2022-03-25 09:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`, `dt`) VALUES
(7, 'mangalam', 'admin@gmail.com', '1232', 2, '2022-03-28 20:46:42'),
(9, 'mangalam', 'sahumangalam24@gmail.com', 'Mangalam24@', 2, '2022-04-10 12:06:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_r`
--
ALTER TABLE `event_r`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_reservation`
--
ALTER TABLE `table_reservation`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_r`
--
ALTER TABLE `event_r`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_reservation`
--
ALTER TABLE `table_reservation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
