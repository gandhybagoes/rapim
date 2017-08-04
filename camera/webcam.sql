-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2016 at 02:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcam`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(238) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `name`, `images`) VALUES
(1, '', 'images/20161221151914.jpg'),
(2, '', 'images/20161221151959.jpg'),
(3, '', 'images/20161221152001.jpg'),
(4, '', 'images/20161221152043.jpg'),
(5, '', 'images/20161221152051.jpg'),
(6, '', 'images/20161221152136.jpg'),
(7, '', 'images/20161221152213.jpg'),
(8, '', 'images/20161221152330.jpg'),
(9, '', 'images/20161221152355.jpg'),
(10, '', 'images/20161221152416.jpg'),
(11, '', 'images/20161221152427.jpg'),
(12, '', 'images/20161222054628.jpg'),
(13, '', 'images/20161222054639.jpg'),
(14, '', 'images/20161222054647.jpg'),
(15, '', 'images/20161222054649.jpg'),
(16, '', 'images/20161222054831.jpg'),
(17, '', 'images/20161222054841.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
