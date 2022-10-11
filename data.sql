-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 10:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `regis_ID` int(11) NOT NULL,
  `emp_Id` varchar(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`regis_ID`, `emp_Id`, `name`, `email`, `password`, `role`, `phone`, `address`, `time`) VALUES
(1, 'QID013', 'Amar', 'amar@gmail.com', '1234', 'admin', 9978578667, 'Bengaluru', '2022-10-11 06:54:58'),
(4, 'QID005', 'Sunny', 'sunny@12gmail.com', '1234', 'Employee', 8978788877, 'Tumkur', '2022-10-07 10:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`) VALUES
(30, 'Bhanu kumari', 'bhanu123@gmail.com', 'Female'),
(31, 'Bhanu', 'bhanu123@gmail.com', 'Female'),
(32, 'Mukesh K', 'adfg123@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `user_Id` int(11) NOT NULL,
  `empid` varchar(6) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_phone` bigint(10) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`user_Id`, `empid`, `user_name`, `user_email`, `user_phone`, `user_address`, `time`) VALUES
(69, 'QID002', 'Mukesh', 'mukesh123@gmail.com', 8380969787, 'Tumkur', '2022-10-11 03:43:15'),
(70, 'QID003', 'Arya Jain', 'arya@gmail.com', 8877673478, 'Bengaluru', '2022-10-11 03:44:42'),
(71, 'QI0130', 'arun', 'adfg123@gmail.com', 8380969787, 'bengaluru', '2022-10-11 06:48:32'),
(73, 'QID008', 'Bhanu', 'bhanu123@gmail.com', 1243656, 'Mysuru', '2022-10-11 06:49:01'),
(74, 'QID001', 'Akash', 'akash@gmail.com', 9988776655, 'mandya', '2022-10-11 06:49:14'),
(89, 'QID117', 'Mukesh ', 'mukesh123@gmail.com', 8386729787, 'Tumkur', '2022-10-11 07:27:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`regis_ID`),
  ADD UNIQUE KEY `emp_Id` (`emp_Id`,`email`,`phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`user_Id`),
  ADD UNIQUE KEY `user_email` (`user_email`,`user_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `regis_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
