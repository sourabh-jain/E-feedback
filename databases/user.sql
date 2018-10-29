-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2014 at 12:00 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` tinytext NOT NULL,
  `rollno` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `programme_name` tinytext NOT NULL,
  `year_of_adminission` int(5) NOT NULL,
  `semester` int(2) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `username` (`username`),
  FULLTEXT KEY `username_2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `rollno`, `name`, `programme_name`, `year_of_adminission`, `semester`) VALUES
('sourabh', 'ajtajt', 'IT-2K11-38', 'Sourabh Jain', 'M.Tech 5 + 1/2 Years', 2011, 6),
('surbhi', 'ajtajt', 'IC-2K11-34', 'Surbhi Jain', 'MCA 6 Years', 2011, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
