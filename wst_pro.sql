-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 06:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wst_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pnumber` varchar(11) NOT NULL,
  `blood_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_id`, `name`, `email`, `pnumber`, `blood_type`) VALUES
(1, 'Jesseca Ramirez', 'jesseca/ramirez@gmail.com', '09067824456', 'B+'),
(2, 'Ana Plaza', 'ana@gmail.com', '09067823346', 'B-'),
(5, 'Alvin Rivera', 'aalvinnn@gmail.com', '0925782563', 'A+'),
(6, 'Kenzo Danque', 'kenken@gmail.com', '09167867346', 'A-'),
(10, 'Mergielyn Arimuhanan', 'arimuhanan@gmail.com', '09355423686', 'AB-'),
(11, 'Lloyd Limeta', 'll@gmail.com', '09351726484', 'A+'),
(12, 'Darna', 'darn@gmail.com', '09664527882', 'A+'),
(14, 'Danica Decastro', 'ddan@gmail.com', '09623451823', 'O+'),
(15, 'Izina', 'izin@gmail.com', '09665217994', 'O+'),
(19, 'Lovely Girl', 'lov@gmail.com', '09062367864', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `blood_type` varchar(25) NOT NULL,
  `avail` int(25) NOT NULL,
  `recipient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `blood_type`, `avail`, `recipient`) VALUES
(1, 'A+', 2, 'O+, O-,  A+,  A-'),
(2, 'A-', 2, 'O-,'),
(3, 'B+', 1, 'O+, O-,  B+,  B-'),
(4, 'B-', 1, 'O-,  B-'),
(5, 'AB+', 0, 'A+, A-,  B+,  B-, O+, O-,  AB+,  AB-'),
(6, 'AB-', 1, 'A-, B-, O-,  AB-'),
(7, 'O+', 2, 'O+,  O-'),
(8, 'O-', 0, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pnumber` varchar(25) NOT NULL,
  `blood_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `pnumber`, `blood_type`) VALUES
(1, 'Jessie Yow', 'jy@gmail.com', '09663416389', 'O-'),
(2, 'Jessie kha', 'jy@gmail.com', '09663416389', 'O-'),
(5, 'Dammica Ram', 'dr@gmail.com', '0999243556', 'A-'),
(9, 'Merge Ari', 'mer@gmail.com', '12345678911', 'AB-'),
(10, 'Acy lou', 'ac@gmail.com', '09062167864', 'A-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
