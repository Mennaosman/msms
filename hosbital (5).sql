-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 03:21 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosbital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `drname` varchar(40) NOT NULL,
  `drdepartment` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`drname`, `drdepartment`) VALUES
('ahmed ali', 'bones'),
('Ali ebrahim', 'surgery');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `payment_method` varchar(100) NOT NULL,
  `relative_relation` varchar(100) NOT NULL,
  `Patienphone` int(12) NOT NULL,
  `department` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `visitno` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `payment_method`, `relative_relation`, `Patienphone`, `department`, `doctor`, `visitno`) VALUES
('1234', 'ahmed', 25, 'globmed', 'daughter', 1201415199, 'Lab', 'ahmed ali (bones)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `services` varchar(50) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`services`, `price`) VALUES
('Ø¨Ø§ÙƒØª Ø´Ø§Ø´', 6),
('Ø¨Ø§ÙƒØª Ø´Ø§Ø´', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `admisions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `admisions`) VALUES
('ahmed_al', '12345', 'admin'),
('menna', '1234', 'acount'),
('menna_o', '1234', 'Admin'),
('samy', '1234', 'accounts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD UNIQUE KEY `drname` (`drname`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `name` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
