-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 04:55 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_delete`
--

CREATE TABLE `add_delete` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `emailid` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_delete`
--

INSERT INTO `add_delete` (`id`, `content`, `emailid`) VALUES
(9, 'aa', 'p@gmail.com'),
(8, 'aaa', 'a@gmail.com'),
(14, 'hiii\n\n', 'a@gmail.com'),
(15, 'kya haal hai\n', NULL),
(13, 'aaa', NULL),
(16, 'hh\n', NULL),
(17, 'kk', NULL),
(18, 'ggg\n', NULL),
(19, 'kk', NULL),
(20, 'guu\n', NULL),
(21, 'assddsaa\n', NULL),
(22, 'aaa', NULL),
(23, 'aa\n', NULL),
(24, 'aaa', NULL),
(25, 'aaaa', NULL),
(26, 'aaaa', NULL),
(27, 'ss', 'p@gmail.com'),
(28, 'aaa', NULL),
(29, 'aaa', NULL),
(30, 'asad', NULL),
(31, 'aaa', NULL),
(32, 'aaa', NULL),
(33, 'aa', NULL),
(34, 'dddadddad', NULL),
(35, 'aaaaa', NULL),
(36, 'ss', ''),
(37, 'aaa', 'p@gmail.com'),
(48, 'hhh', 't@gmail.com'),
(43, 'wwww', 'k@gmail.com'),
(44, 'www', 'k@gmail.com'),
(45, 'sddsasdasdsdascasdfaas', 'aaaa@gmail.com'),
(49, 'hhh', 't@gmail.com'),
(41, 'aaaa', 'k@gmail.com'),
(42, 'dddffs', 'k@gmail.com'),
(46, 'dd', 'aaaa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_delete`
--
ALTER TABLE `add_delete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_delete`
--
ALTER TABLE `add_delete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
