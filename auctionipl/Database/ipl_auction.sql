-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 02:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl_auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`user_id`, `username`, `email`, `password`) VALUES
(2, 'kanish', 'kanish.vijay@gmail.com', 'Kanish123'),
(3, 'Mounika', 'mounika555@gmail.com', 'Mounika123');

-- --------------------------------------------------------

--
-- Table structure for table `playerusers`
--

CREATE TABLE `playerusers` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playerusers`
--

INSERT INTO `playerusers` (`user_id`, `username`, `email`, `password`) VALUES
(6, 'Rahul Dravid', 'dravid.india@hotmail.com', '2e4acc39dc934a879a6faeeea34f78b7'),
(7, 'Virat Kholi', 'virat.kholi@gmail.com', '71deda89c2c2b0d6176e68957932a0f8');

-- --------------------------------------------------------

--
-- Table structure for table `teamownerusers`
--

CREATE TABLE `teamownerusers` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teamownerusers`
--

INSERT INTO `teamownerusers` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Srinivasan', 'csk@gmail.com', 'Csk1234'),
(2, 'Vijay Mallaya', 'rcb@gmail.com', 'RCB2020123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `playerusers`
--
ALTER TABLE `playerusers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `teamownerusers`
--
ALTER TABLE `teamownerusers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `playerusers`
--
ALTER TABLE `playerusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teamownerusers`
--
ALTER TABLE `teamownerusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
