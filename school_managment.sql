-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 08:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `address`, `contact`) VALUES
(2, 'Sprit', 'Minawali', '0458988889'),
(3, 'LLLLL', 'adsf', 'adsf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll` varchar(70) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(60) NOT NULL,
  `contact` varchar(41) NOT NULL,
  `school_id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll`, `name`, `class`, `contact`, `school_id`, `address`) VALUES
('1234', 'Laeeq Khan', 'asdf', 'asdf', 0, '03055466154'),
('45434', 'Laeeq Khan', '', '03055466154', 0, 'asdf'),
('adsaf', 'asdf', 'asdf', 'asdf', 0, 'adsf'),
('asdf', 'sfsdf', 'adsf', 'asdfads', 0, 'asdf'),
('BSCSF15MM10', 'Luqman Ahmad', '10th', 'Minawali', 0, 'Pindi'),
('ewrqewds', 'xdfadsf', 'sfvf', 'sv', 0, 'sff');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `location_home_town` varchar(500) NOT NULL,
  `address` varchar(50) NOT NULL,
  `school_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `contact`, `location_home_town`, `address`, `school_id`) VALUES
(4, 'Ahe', '03055466154', '', 'asdf', 'City Scholl'),
(7, 'LAeeq Khan Niazi', 'adsf', '', '03055466154', 'Sprit'),
(8, 'wajeeha', '202', '', '234234', 'Sprit'),
(9, 'NABEEL', '202 a BLOCK', '', '1231232', 'LLLLL'),
(10, 'NABEEL', '202', 'Pakistan', 'qe34234', 'LLLLL'),
(11, 'NABEEL', '03064452393', 'Aus', '202', 'LLLLL'),
(12, 'NABEEL', '03064452393', 'Aus', '202', 'LLLLL'),
(13, 'ali', '1223', 'India', '205', 'll'),
(14, '2423', '202 a BLOCK', 'xyz', '12343214', 'Sprit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
