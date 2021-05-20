-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 05:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadradatabasesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cnic_info`
--

CREATE TABLE `cnic_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `passport_number` int(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `id_number` int(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cnic_info`
--

INSERT INTO `cnic_info` (`id`, `name`, `father_name`, `passport_number`, `state`, `gender`, `c_address`, `p_address`, `id_number`, `user_id`) VALUES
(2, 'Ibrar Ur Rehman', 'Wali', 1222333, 'AUS', 'Male', 'Street 43, G7/2', '5/3-c', 123, 0),
(3, 'Ibrar Ur Rehman', 'Wali', 1222333, 'AUS', 'Male', 'Street 43, G7/2', '5/3-c', 123, 0),
(4, 'Bilal Rehman', 'Wali Ur Rehman', 2147483647, 'Pakistan', 'Male', 'Street 43, G7/2', '5/3-c', 2147483647, 0),
(5, 'Waqar Ur Rehman', 'Wali Ur Rehman', 1222333, 'Pakistan', 'Male', 'Street 43, G7/2', '5/3-c', 2147483647, 0),
(6, 'Ibrar Ur Rehman', 'Wali Ur Rehman', 2147483647, 'AUS', 'Male', 'Street 43, G7/2', '5/3-c', 2147483647, 0),
(7, 'WAli', 'Wali Ur Rehman', 1, 'Pakistan', 'Male', 'Street 43, G7/2', '5/3-c', 123, 4),
(8, 'aaaaaaa', 'bbbbbbbbbb', 22222222, 'AUS', 'Female', 'Street 43, G7/2', '5/3-c', 1111111, 4),
(9, 'bbbbb', 'ccccc', 22222222, 'Pakistan', 'Female', 'Street 43, G7/2', '5/3-c', 3333, 4);

-- --------------------------------------------------------

--
-- Table structure for table `userregistrations`
--

CREATE TABLE `userregistrations` (
  `user_id` int(255) NOT NULL,
  `forename` varchar(256) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistrations`
--

INSERT INTO `userregistrations` (`user_id`, `forename`, `surname`, `country`, `email`, `password`) VALUES
(1, 'Ibrar', 'Rehman', 'Pakistan', 'rockeykhan142@gmail.com', '1233'),
(4, 'Waqar', 'Rehman', 'Pakistan', 'rockeykhan@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cnic_info`
--
ALTER TABLE `cnic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistrations`
--
ALTER TABLE `userregistrations`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cnic_info`
--
ALTER TABLE `cnic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userregistrations`
--
ALTER TABLE `userregistrations`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
