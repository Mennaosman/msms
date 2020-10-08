-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 09:54 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mams`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `number` int(255) NOT NULL,
  `code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `admisions` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `admisions`) VALUES
('menna_o', '2161992', 'developer'),
('nagwa', '123456', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `xrays`
--

CREATE TABLE `xrays` (
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xrays`
--

INSERT INTO `xrays` (`name`, `code`) VALUES
('ct brain', 'x3571'),
('ct chest', 'x10928'),
('xray chest', 'x16194');

-- --------------------------------------------------------

--
-- Table structure for table `xray_centers`
--

CREATE TABLE `xray_centers` (
  `name` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `timetable` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `mobilnumber` int(255) NOT NULL,
  `faxnumber` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`code`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `xrays`
--
ALTER TABLE `xrays`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `xray_centers`
--
ALTER TABLE `xray_centers`
  ADD PRIMARY KEY (`pincode`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
