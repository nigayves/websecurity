-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 10:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookie`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(23) NOT NULL,
  `fname` varchar(43) NOT NULL,
  `lname` varchar(56) NOT NULL,
  `email` varchar(67) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(42) NOT NULL,
  `code` varchar(1000) NOT NULL,
  `status` varchar(565) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fname`, `lname`, `email`, `username`, `password`, `code`, `status`) VALUES
(119, 'nigga', 'andre', 'nigayves@gmail.com', 'ni', '390acd6a6d6f08f1ef5639169b23db9cede0eb61', '303113', 'verified'),
(120, 'murisa', 'kavuyo', 'nigayves@gmail.com', 'niy', '390acd6a6d6f08f1ef5639169b23db9cede0eb61', '550138', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `preset`
--

CREATE TABLE `preset` (
  `id` int(23) NOT NULL,
  `email` varchar(43) NOT NULL,
  `tvalue` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preset`
--
ALTER TABLE `preset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `preset`
--
ALTER TABLE `preset`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
