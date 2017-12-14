-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 10:43 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toro`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE IF NOT EXISTS `enquery` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `company` varchar(222) NOT NULL,
  `official` varchar(255) NOT NULL,
  `escort` varchar(255) NOT NULL,
  `escortname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`id`, `Name`, `email`, `Telephone`, `company`, `official`, `escort`, `escortname`) VALUES
(1, 'John', 'vk82880@gmail.com', '587878', '', 'dsdd', 'sfdfdsf', 'fdsfsf'),
(2, 'name', 'mail', 'tele', '', 'compny', 'office', 'esname'),
(3, 'name', 'mail', 'tele', 'office', 'compny', 'escorts', 'esname');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
