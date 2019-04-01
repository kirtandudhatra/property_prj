-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2018 at 06:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddu_assets`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets_data`
--

CREATE TABLE `assets_data` (
  `id` int(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `date_of_bill` date DEFAULT NULL,
  `date_of_payment` date DEFAULT NULL,
  `bill_no` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `short_code` varchar(20) NOT NULL,
  `quantity` int(255) NOT NULL,
  `unit_no` int(255) NOT NULL,
  `unit_price` double NOT NULL,
  `page_no` varchar(10) NOT NULL,
  `faculty` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `functional_status` int(1) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `ppath` varchar(200) NOT NULL,
  `stock_status` int(1) NOT NULL,
  `approved` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(1) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `password`, `type`, `faculty`, `department`) VALUES
(1, 'kirtan', 'kirtan@123', 1, 'admin', 'admin'),
(2, 'admin', 'admin', 1, 'admin', 'admin'),
(3, 'it1', 'it1', 2, 'FOT', 'IT'),
(5, 'itstd', 'itstd', 3, 'FOT', 'IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets_data`
--
ALTER TABLE `assets_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets_data`
--
ALTER TABLE `assets_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
