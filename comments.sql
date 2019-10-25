-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 12:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `cryptanalysis`
--

CREATE TABLE `cryptanalysis` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryptanalysis`
--

INSERT INTO `cryptanalysis` (`id`, `name`, `date`, `message`) VALUES
(3, '', '2019-06-26 10:33:29', ''),
(4, '', '2019-06-26 10:33:29', ''),
(5, '', '2019-06-26 10:33:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `cryptocurrency`
--

CREATE TABLE `cryptocurrency` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryptocurrency`
--

INSERT INTO `cryptocurrency` (`id`, `name`, `date`, `message`) VALUES
(3, 'doreen', '2019-06-26 08:13:51', 'excellent'),
(4, 'sham', '2019-06-26 09:24:36', 'nice work');

-- --------------------------------------------------------

--
-- Table structure for table `cryptography`
--

CREATE TABLE `cryptography` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryptography`
--

INSERT INTO `cryptography` (`id`, `name`, `date`, `message`) VALUES
(3, 'bai', '2019-06-26 08:23:38', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `hacking`
--

CREATE TABLE `hacking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `coment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hacking`
--

INSERT INTO `hacking` (`id`, `name`, `date`, `coment`) VALUES
(1, '', '2019-05-26 02:49:27', ''),
(2, '', '2019-05-26 02:49:27', ''),
(3, 'Christian Adam', '2019-06-16 04:25:00', 'Testing the system');

-- --------------------------------------------------------

--
-- Table structure for table `identity_theft`
--

CREATE TABLE `identity_theft` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identity_theft`
--

INSERT INTO `identity_theft` (`id`, `name`, `date`, `message`) VALUES
(1, '', '2019-05-26 02:17:22', ''),
(2, 'Test', '2019-05-26 02:17:28', 'Testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cryptanalysis`
--
ALTER TABLE `cryptanalysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptocurrency`
--
ALTER TABLE `cryptocurrency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptography`
--
ALTER TABLE `cryptography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hacking`
--
ALTER TABLE `hacking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identity_theft`
--
ALTER TABLE `identity_theft`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cryptanalysis`
--
ALTER TABLE `cryptanalysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cryptocurrency`
--
ALTER TABLE `cryptocurrency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cryptography`
--
ALTER TABLE `cryptography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hacking`
--
ALTER TABLE `hacking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `identity_theft`
--
ALTER TABLE `identity_theft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
