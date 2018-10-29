-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2014 at 03:57 PM
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
CREATE DATABASE IF NOT EXISTS `feedback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `feedback`;

-- --------------------------------------------------------

--
-- Table structure for table `activesession`
--

CREATE TABLE IF NOT EXISTS `activesession` (
  `username` varchar(50) NOT NULL,
  `activity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`) VALUES
('rishabh'),
('sourabh');

-- --------------------------------------------------------

--
-- Table structure for table `analysis_data`
--

CREATE TABLE IF NOT EXISTS `analysis_data` (
  `header` varchar(1000) NOT NULL,
  `no` int(5) NOT NULL,
  `faculty_names` varchar(1000) NOT NULL,
  `subject_names` varchar(1000) NOT NULL,
  `timedate` datetime NOT NULL,
  `total_records` varchar(1000) NOT NULL,
  `mean` varchar(400) NOT NULL,
  `median` varchar(1000) NOT NULL,
  `mode` varchar(1000) NOT NULL,
  `sd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analysis_data`
--

INSERT INTO `analysis_data` (`header`, `no`, `faculty_names`, `subject_names`, `timedate`, `total_records`, `mean`, `median`, `mode`, `sd`) VALUES
('Analysis Report 1 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 1, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 05:38:21', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 2 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 2, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 05:42:24', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 3 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 3, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 05:43:00', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 4 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 4, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 05:48:04', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 5 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 5, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 05:58:11', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 6 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 6, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 05:58:23', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 7 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 7, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 06:04:37', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 7 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 7, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 06:05:11', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 7 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 7, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 06:07:02', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 8 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 8, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-15 06:23:22', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 9 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 9, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-16 10:02:03', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 9 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 9, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-16 10:02:34', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 10 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 10, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-17 09:19:22', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 10 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 10, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-17 09:19:47', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 10 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 10, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-17 09:20:01', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 10 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 10, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-17 09:20:18', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 11 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 11, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-17 10:44:40', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 12 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 12, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-17 10:48:59', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 13 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 13, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-17 11:15:58', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 14 : For M.Tech(IT) 5 + 1/2 Years 6th Sem', 14, 'Mr. Ravi Bunkar;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Rupesh Sendre;Guest;Ms. Manju Suchdeo;Ms. Shraddha Soni;', 'PPM;Programming in Java;Data and Computer Communication;System Analysis & Design;Analog Electronics;Project;Computer Lab;', '2014-04-17 05:06:54', '1;1;1;1;1;1;1;', '3.25;3;2.83;3.75;3.17;3.17;2.92;', '4;4;3;4;3;3;3;', '5;1;1;4;2;3;3;', '1.42;1.53;1.52;0.83;1.34;1.07;1.38;'),
('Analysis Report 15 : For M.Tech(IT) 5 + 1/2 Years 6th Sem', 15, 'Mr. Ravi Bunkar;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Rupesh Sendre;Guest;Ms. Manju Suchdeo;Ms. Shraddha Soni;', 'PPM;Programming in Java;Data and Computer Communication;System Analysis & Design;Analog Electronics;Project;Computer Lab;', '2014-04-17 05:08:44', '1;1;1;1;1;1;1;', '3.25;3;2.83;3.75;3.17;3.17;2.92;', '4;4;3;4;3;3;3;', '5;1;1;4;2;3;3;', '1.42;1.53;1.52;0.83;1.34;1.07;1.38;'),
('Analysis Report 16 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 16, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-19 03:42:18', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 17 : For M.Tech(IT) 5 + 1/2 Years 2nd Sem', 17, '', '', '2014-04-19 03:49:04', '', '', '', '', ''),
('Analysis Report 18 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 18, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-19 03:49:57', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 19 : For M.Tech(IT) 5 + 1/2 Years 4th Sem', 19, 'Dr. Ajay Chabariya;Dr. Sanjay Jain;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Vivek Shrivastav;Mr. Vivek Shrivastav;', 'AFM I;Linear Algebra;Database Programming;Digital Computer Organization;UNIX;Computer Lab ;', '2014-04-19 03:56:44', '4;4;4;4;4;4;', '2.9;2.92;3.21;2.98;2.85;2.98;', '3;3;3;3;3;3;', '2;1;3;3;1;4;', '1.42;1.54;1.35;1.31;1.4;1.35;'),
('Analysis Report 20 : For M.Tech(IT) 5 + 1/2 Years 6th Sem', 20, 'Mr. Ravi Bunkar;Ms. Shraddha Soni;Mr. Pradeep Jatav ;Mr. Rupesh Sendre;Guest;Ms. Manju Suchdeo;Ms. Shraddha Soni;', 'PPM;Programming in Java;Data and Computer Communication;System Analysis & Design;Analog Electronics;Project;Computer Lab;', '2014-04-19 03:56:58', '1;1;1;1;1;1;1;', '3.25;3;2.83;3.75;3.17;3.17;2.92;', '4;4;3;4;3;3;3;', '5;1;1;4;2;3;3;', '1.42;1.53;1.52;0.83;1.34;1.07;1.38;');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` varchar(10) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`faculty_id`),
  UNIQUE KEY `subject_id` (`subject_id`,`section`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `subject_id`, `section`) VALUES
('F-1', 'Dr. Sanjay Jain', 'IT-201', '-'),
('F-10', 'Ms. Shraddha Soni', 'IT-403', '-'),
('F-11', 'Mr. Pradeep Jatav ', 'IT-404', '-'),
('F-12', 'Mr. Vivek Shrivastav', 'IT-405', '-'),
('F-13', 'Mr. Vivek Shrivastav', 'IT-406', '-'),
('F-14', 'Mr. Ravi Bunkar', 'IT-601', '-'),
('F-15', 'Ms. Shraddha Soni', 'IT-602', '-'),
('F-16', 'Mr. Pradeep Jatav ', 'IT-603', '-'),
('F-17', 'Mr. Rupesh Sendre', 'IT-604', '-'),
('F-18', 'Guest', 'IT-605', '-'),
('F-19', 'Ms. Manju Suchdeo', 'IT-606', '-'),
('F-2', 'Guest', 'IT-202', '-'),
('F-20', 'Ms. Shraddha Soni', 'IT-607', '-'),
('F-21', 'Ms. Poonam Mangwani', 'IT-801', '-'),
('F-22', 'Mr. Shaligram Prajapat', 'IT-802', '-'),
('F-23', 'Ms. Kirti Vijayvargia', 'IT-803', '-'),
('F-24', 'Ms. Kirti Mathur', 'IT-804', '-'),
('F-25', 'Guest', 'IT-805', '-'),
('F-26', 'Ms. Yasmin Shaikh', 'IT-1001', '-'),
('F-27', 'Mr. Vivek Shrivastav', 'IT-1002', '-'),
('F-28', 'Ms. Kirti Mathur', 'IT-1003', '-'),
('F-29', 'Mr. Shaligram Prajapat', 'IT-1004', '-'),
('F-3', 'Mr. Rajesh Verma', 'IT-203', '-'),
('F-30', 'Dr. M.K. Mishra', 'IC-201', 'A'),
('F-31', 'Guest', 'IC-202', 'A'),
('F-32', 'Mr. Rajesh Verma', 'IC-203', 'A'),
('F-33', 'Ms. Shrishti Choudhary', 'IC-204', 'A'),
('F-34', 'Ms. Neha Chouhan', 'IC-205', 'A'),
('F-35', 'Ms. Shrishti Choudhary', 'IC-206', 'A'),
('F-36', 'Dr. Rahul Singhai', 'IC-207', 'A'),
('F-37', 'Dr. M.K. Mishra', 'IC-201', 'B'),
('F-38', 'Guest', 'IC-202', 'B'),
('F-39', 'Mr. Rajesh Verma', 'IC-203', 'B'),
('F-4', 'Mr. Basnt Namdeo', 'IT-204', '-'),
('F-40', 'Ms. Shrishti Choudhary', 'IC-204', 'B'),
('F-41', 'Ms. Neha Chouhan', 'IC-205', 'B'),
('F-42', 'Ms. Shrishti Choudhary', 'IC-206', 'B'),
('F-43', 'Mr. Rupesh Sendre', 'IC-207', 'B'),
('F-44', 'Guest', 'IC-401', 'A'),
('F-45', 'Dr. D.K. Banerjee', 'IC-402', 'A'),
('F-46', 'Mr. Basant Namdeo', 'IC-403', 'A'),
('F-47', 'Mr. Pradeep Jatav', 'IC-404', 'A'),
('F-48', 'Mr. Arpit Neema', 'IC-405', 'A'),
('F-49', 'Ms. Kirti Vijayvargia', 'IC-406', 'A'),
('F-5', 'Guest', 'IT-205', '-'),
('F-50', 'Ms. Kirti Vijayvargia', 'IC-407', 'A'),
('F-51', 'Guest', 'IC-401', 'B'),
('F-52', 'Dr. D.K. Banerjee', 'IC-402', 'B'),
('F-53', 'Mr. Basant Namdeo', 'IC-403', 'B'),
('F-54', 'Ms. Shraddha Soni', 'IC-404', 'B'),
('F-55', 'Mr. Arpit Neema', 'IC-405', 'B'),
('F-56', 'Ms. Kirti Vijayvargia', 'IC-406', 'B'),
('F-57', 'Mr. Arpit Neema', 'IC-407', 'B'),
('F-58', 'Ms. Monalisa Khatre', 'IC-601', 'A'),
('F-59', 'Mr. Rupesh Sendre', 'IC-602', 'A'),
('F-6', 'Mr. Basnt Namdeo', 'IT-206', '-'),
('F-60', 'Mr. Nitin Nagar', 'IC-603', 'A'),
('F-61', 'Dr. Rahul Singhai', 'IC-604', 'A'),
('F-62', 'Mr. Kapil Kushwah', 'IC-605', 'A'),
('F-63', 'Mr. Jugendra Dongre', 'IC-606', 'A'),
('F-64', 'Mr. Nitin Nagar', 'IC-607', 'A'),
('F-65', 'Ms. Monalisa Khatre', 'IC-601', 'B'),
('F-66', 'Mr. Rupesh Sendre', 'IC-602', 'B'),
('F-67', 'Mr. Nitin Nagar', 'IC-603', 'B'),
('F-68', 'Dr. Rahul Singhai', 'IC-604', 'B'),
('F-69', 'Mr. Kapil Kushwah', 'IC-605', 'B'),
('F-7', 'Mr. Rajesh Verma', 'IT-207', '-'),
('F-70', 'Ms. Poonam Mangwani', 'IC-606', 'B'),
('F-71', 'Mr. Pradeep Jatav', 'IC-607', 'B'),
('F-72', 'Ms. Poonam Mangwani', 'IC-801', 'A'),
('F-73', 'Mr. Ramesh Thakur', 'IC-802', 'A'),
('F-74', 'Dr. Rahul Singhai', 'IC-803', 'A'),
('F-75', 'Ms. Kirti Mathur', 'IC-804', 'A'),
('F-76', 'Guest', 'IC-805', 'A'),
('F-77', 'Mr. Vivek Shrivastav', 'IC-806', 'A'),
('F-78', 'Ms. Poonam Mangwani', 'IC-801', 'B'),
('F-79', 'Mr. Shaligram Prajapat', 'IC-802', 'B'),
('F-8', 'Dr. Ajay Chabariya', 'IT-401', '-'),
('F-80', 'Mr. Nitin Nagar', 'IC-803', 'B'),
('F-81', 'Mr. Arpit Neema', 'IC-804', 'B'),
('F-82', 'Guest', 'IC-805', 'B'),
('F-83', 'Ms. Yasmin Shaikh', 'IC-806', 'B'),
('F-84', 'Guest', 'IC-1001', 'A'),
('F-85', 'Mr. Jugendra Dongre', 'IC-1002', 'A'),
('F-86', 'Ms. Yasmin Shaikh', 'IC-1003', 'A'),
('F-87', 'Ms. Manju Suchdeo', 'IC-1004', 'A'),
('F-88', 'Mr. Ramesh Thakur', 'IC-1005', 'A'),
('F-89', 'Guest', 'IC-1001', 'B'),
('F-9', 'Dr. Sanjay Jain', 'IT-402', '-'),
('F-90', 'Mr. Jugendra Dongre', 'IC-1002', 'B'),
('F-91', 'Ms. Yasmin Shaikh', 'IC-1003', 'B'),
('F-92', 'Ms. Manju Suchdeo', 'IC-1004', 'B'),
('F-93', 'Mr. Ramesh Thakur', 'IC-1005', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_questions`
--

CREATE TABLE IF NOT EXISTS `faculty_questions` (
  `question_no` int(5) NOT NULL,
  `question` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  PRIMARY KEY (`question_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_questions`
--

INSERT INTO `faculty_questions` (`question_no`, `question`, `weight`) VALUES
(1, 'Ability to bring conceptual clarity', 1),
(2, 'Teacher''s subject knowledge', 1),
(3, 'Compliments theory with practical examples', 1),
(4, 'Handling of cases / assignments / exercises / activities', 1),
(5, 'Motivation provided by the teacher', 1),
(6, 'Ability to control the class', 1),
(7, 'Completion & Coverage of Course', 1),
(8, 'Teacher''s Communication Skill', 1),
(9, 'Teacher''s Regularity & Punctuality', 1),
(10, 'Interaction & guidance outside the classroom', 1),
(11, 'Relevance of syllabus as per industry requirement', 1),
(12, 'Sufficiency of course content', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_data`
--

CREATE TABLE IF NOT EXISTS `feedback_data` (
  `programme_name` varchar(50) NOT NULL,
  `semester` int(2) NOT NULL,
  `data` varchar(10000) NOT NULL,
  `cgpa` float NOT NULL,
  `attendanceperc` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_data`
--

INSERT INTO `feedback_data` (`programme_name`, `semester`, `data`, `cgpa`, `attendanceperc`) VALUES
('M.Tech(IT) 5 + 1/2 Years', 4, '3,3,3,3,3,3#5,2,3,3,1,2#1,3,1,2,1,2#4,1,2,5,2,2#5,2,5,4,1,2#4,1,3,2,3,1#2,4,4,2,4,4#2,4,3,3,2,4#3,4,4,3,2,3#1,2,2,5,5,1#4,4,4,3,5,1#2,2,3,4,1,1#2,5,5,5,2,2#', 9.4, 85),
('M.Tech(IT) 5 + 1/2 Years', 4, '3,3,3,3,3,3#5,1,1,1,2,4#4,1,1,1,1,3#1,2,4,1,1,4#5,5,3,3,1,4#4,5,2,5,5,1#2,5,5,2,2,2#1,4,3,3,3,4#2,5,5,2,1,1#4,5,1,3,5,3#1,3,5,3,4,4#2,1,5,3,3,3#4,2,2,4,4,5#', 9.4, 85),
('M.Tech(IT) 5 + 1/2 Years', 4, '3,3,3,3,3,3#2,5,4,5,4,4#1,5,3,3,5,5#2,3,3,1,4,1#2,3,3,5,5,2#3,5,3,2,3,3#1,1,5,1,3,2#4,2,4,2,3,5#5,1,1,4,4,5#1,4,3,3,3,4#5,2,3,3,1,2#2,5,4,3,3,5#2,1,4,1,2,1#', 9, 90),
('M.Tech(IT) 5 + 1/2 Years', 4, '3,3,3,3,3,3#3,4,5,4,1,1#5,1,4,4,4,5#2,4,4,5,3,3#3,3,1,3,2,2#5,1,5,1,2,3#3,2,2,5,4,4#4,1,1,3,5,5#4,4,5,2,3,4#2,5,4,1,4,4#5,3,1,3,2,4#1,1,4,5,1,3#2,1,2,2,5,3#', 9.4, 85),
('M.Tech(IT) 5 + 1/2 Years', 6, '4,5,5,4,5,5#5,5,1,3,2,4,2#1,4,5,4,1,3,1#4,1,3,5,4,4,3#3,1,4,2,3,4,3#2,1,3,4,3,3,3#4,4,1,4,4,2,3#5,4,1,4,2,3,1#2,4,4,4,2,1,5#5,3,2,4,5,5,4#4,1,5,5,2,4,1#1,3,4,3,5,3,4#3,5,1,3,5,2,5#', 9, 90);

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure_questions`
--

CREATE TABLE IF NOT EXISTS `infrastructure_questions` (
  `question_no` int(5) NOT NULL,
  `question` varchar(100) NOT NULL,
  PRIMARY KEY (`question_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infrastructure_questions`
--

INSERT INTO `infrastructure_questions` (`question_no`, `question`) VALUES
(1, 'Availability of books in Library'),
(2, 'Basic Requirements like furniture, desk, chair etc'),
(3, 'Technological Support like OHP, LCD'),
(4, 'Photocopy of Study Material'),
(5, 'Availability of other resources like Internet/ Computer/ software / databases etc'),
(6, 'Cleanliness of the classroom');

-- --------------------------------------------------------

--
-- Table structure for table `masteradmin`
--

CREATE TABLE IF NOT EXISTS `masteradmin` (
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masteradmin`
--

INSERT INTO `masteradmin` (`username`) VALUES
('sourabh');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` varchar(10) NOT NULL,
  `section` varchar(1) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  PRIMARY KEY (`subject_id`,`section`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `section`, `subject_name`, `faculty_id`) VALUES
('IC-1001', 'A', 'Simulation & Modeling', 'F-84'),
('IC-1001', 'B', 'Simulation & Modeling', 'F-89'),
('IC-1002', 'A', 'Artificial Intelligence', 'F-85'),
('IC-1002', 'B', 'Artificial Intelligence', 'F-90'),
('IC-1003', 'A', 'Compiler Design', 'F-86'),
('IC-1003', 'B', 'Compiler Design', 'F-91'),
('IC-1004', 'A', 'Parallel Processing', 'F-87'),
('IC-1004', 'B', 'Parallel Processing', 'F-92'),
('IC-1005', 'A', 'Enterprise Computing Technique', 'F-88'),
('IC-1005', 'B', 'Enterprise Computing Technique', 'F-93'),
('IC-201', 'A', 'Mathematics II', 'F-30'),
('IC-201', 'B', 'Mathematics II', 'F-37'),
('IC-202', 'A', 'Statistical Methods', 'F-31'),
('IC-202', 'B', 'Statistical Methods', 'F-38'),
('IC-203', 'A', 'Basic Electronics', 'F-32'),
('IC-203', 'B', 'Basic Electronics', 'F-39'),
('IC-204', 'A', 'Object Oriented Programming Using C++', 'F-33'),
('IC-204', 'B', 'Object Oriented Programming Using C++', 'F-40'),
('IC-205', 'A', 'Hindi', 'F-34'),
('IC-205', 'B', 'Hindi', 'F-41'),
('IC-206', 'A', 'Computer Lab', 'F-35'),
('IC-206', 'B', 'Computer Lab', 'F-42'),
('IC-207', 'A', 'Electronics Lab', 'F-36'),
('IC-207', 'B', 'Electronics Lab', 'F-43'),
('IC-401', 'A', 'AFM-I', 'F-44'),
('IC-401', 'B', 'AFM-I', 'F-51'),
('IC-402', 'A', 'Linear Algebra', 'F-45'),
('IC-402', 'B', 'Linear Algebra', 'F-52'),
('IC-403', 'A', 'Internet Tools', 'F-46'),
('IC-403', 'B', 'Internet Tools', 'F-53'),
('IC-404', 'A', 'Digital Computer Organization', 'F-47'),
('IC-404', 'B', 'Digital Computer Organization', 'F-54'),
('IC-405', 'A', 'UNIX', 'F-48'),
('IC-405', 'B', 'UNIX', 'F-55'),
('IC-406', 'A', 'Database Programming', 'F-49'),
('IC-406', 'B', 'Database Programming', 'F-56'),
('IC-407', 'A', 'Computer Lab', 'F-50'),
('IC-407', 'B', 'Computer Lab', 'F-57'),
('IC-601', 'A', 'PPM', 'F-58'),
('IC-601', 'B', 'PPM', 'F-65'),
('IC-602', 'A', 'Data And Computer Communication', 'F-59'),
('IC-602', 'B', 'Data And Computer Communication', 'F-66'),
('IC-603', 'A', 'Programming in Java', 'F-60'),
('IC-603', 'B', 'Programming in Java', 'F-67'),
('IC-604', 'A', 'System Analysis & Design', 'F-61'),
('IC-604', 'B', 'System Analysis & Design', 'F-68'),
('IC-605', 'A', 'Analog Electronics', 'F-62'),
('IC-605', 'B', 'Analog Electronics', 'F-69'),
('IC-606', 'A', 'Project', 'F-63'),
('IC-606', 'B', 'Project', 'F-70'),
('IC-607', 'A', 'Computer Lab', 'F-64'),
('IC-607', 'B', 'Computer Lab', 'F-71'),
('IC-801', 'A', 'Computer Network', 'F-72'),
('IC-801', 'B', 'Computer Network', 'F-78'),
('IC-802', 'A', 'Analysis & Design Of Algorithm', 'F-73'),
('IC-802', 'B', 'Analysis & Design Of Algorithm', 'F-79'),
('IC-803', 'A', 'Advance Database Management System', 'F-74'),
('IC-803', 'B', 'Advance Database Management System', 'F-80'),
('IC-804', 'A', 'Software Engineering', 'F-75'),
('IC-804', 'B', 'Software Engineering', 'F-81'),
('IC-805', 'A', 'Control System', 'F-76'),
('IC-805', 'B', 'Control System', 'F-82'),
('IC-806', 'A', 'ERP/Project', 'F-77'),
('IC-806', 'B', 'ERP/Project', 'F-83'),
('IT-1001', '-', 'Formal Language Theory', 'F-26'),
('IT-1002', '-', 'Parallel Processing', 'F-27'),
('IT-1003', '-', 'Research in Computing', 'F-28'),
('IT-1004', '-', 'Project', 'F-29'),
('IT-201', '-', 'Maths II', 'F-1'),
('IT-202', '-', 'Statistical Methods', 'F-2'),
('IT-203', '-', 'Basic Electronics', 'F-3'),
('IT-204', '-', 'Programming With C++', 'F-4'),
('IT-205', '-', 'Interpersonal Communication', 'F-5'),
('IT-206', '-', 'Computer Lab Batch I & Batch II', 'F-6'),
('IT-207', '-', 'Electronics Lab Batch I & Batch II', 'F-7'),
('IT-401', '-', 'AFM I', 'F-8'),
('IT-402', '-', 'Linear Algebra', 'F-9'),
('IT-403', '-', 'Database Programming', 'F-10'),
('IT-404', '-', 'Digital Computer Organization', 'F-11'),
('IT-405', '-', 'UNIX', 'F-12'),
('IT-406', '-', 'Computer Lab ', 'F-13'),
('IT-601', '-', 'PPM', 'F-14'),
('IT-602', '-', 'Programming in Java', 'F-15'),
('IT-603', '-', 'Data and Computer Communication', 'F-16'),
('IT-604', '-', 'System Analysis & Design', 'F-17'),
('IT-605', '-', 'Analog Electronics', 'F-18'),
('IT-606', '-', 'Project', 'F-19'),
('IT-607', '-', 'Computer Lab', 'F-20'),
('IT-801', '-', 'Computer Networks', 'F-21'),
('IT-802', '-', 'Analysis & Design Of Algorithm', 'F-22'),
('IT-803', '-', 'Advance Database Management System', 'F-23'),
('IT-804', '-', 'Software Engineering', 'F-24'),
('IT-805', '-', 'Control system', 'F-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(512) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `section` varchar(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `programme_name` varchar(45) NOT NULL,
  `year_of_admission` int(5) NOT NULL,
  `semester` int(2) NOT NULL,
  `status` varchar(8) NOT NULL,
  `Date` datetime NOT NULL,
  `cgpa` float NOT NULL,
  `attendanceperc` float NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `rollno` (`rollno`),
  KEY `username` (`username`),
  FULLTEXT KEY `username_2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `rollno`, `section`, `name`, `gender`, `programme_name`, `year_of_admission`, `semester`, `status`, `Date`, `cgpa`, `attendanceperc`) VALUES
('amita', '5ec18777c9499584089612465dad73925a14aef29fca9e9749cc83b51c920d03f65aeffe7e86001125db833f67e73a126ed24c96dd0b6a2b5c43b59635fc8e51', 'IT-2K11-06', '-', 'Amita Sanole', 'F', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING', '2014-04-10 03:12:37', 9, 90),
('anil', '2c4b2f5989fa4d076d45f05e700f5a64a7c201e12dcead12caaa623cd7452569d3a06c9d17fbbcd65b9de48baf39eac1257089728a9258b9fb53ea66009a1a85', 'IT-2K10-03', '-', 'Anil Kumar Chouhan', 'M', 'M.Tech(IT) 5 + 1/2 Years', 2012, 6, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('anjali', 'f93e50f4bdae95218bfd494242e412cf65d1e503de3dafc98bb2e7024fde0f31a2f80f6c856d4aa88d86b8b292b2bd6d15211910ab8e60c2714d96ac91ad208b', 'IT-2K12-7', '-', 'Anjali Rodwal', 'F', 'M.Tech(IT) 5 + 1/2 Years', 2013, 4, 'PENDING', '0000-00-00 00:00:00', 9.4, 85),
('devu', 'bb184ce1a417b6f3da5d6d1abe8f516b72812cf75859607c1ae44485ee27871bab5301344425b45a4aebed226f4dff6fbc75acac52f166ef569a0b2fb52047d8', 'IT-2K11-10', '-', 'Devendra Malviya', 'M', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('harman', '31b736923d110dad94dc4e181c63cfefe4637edeacf01cefdbf2288a8d91fdfaeebd875bb357cccdfec1a30bdefe1fd542866e3250ce7de956d6c6a69fdfa963', 'IT-2K11-11', '-', 'HarmanJeet', 'M', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING', '2014-04-07 08:15:49', 9, 90),
('priya', '1abc1d481131a3145e932fa918b7ace4bd4b33ec88b95a747935c11d2f4e32cc666dca438a9d760a6578a0973e72169a4fb76f251aa0e41c7f07a42f7068fc5e', 'IT-2K13-38', '-', 'Priya', 'F', 'M.Tech(IT) 5 + 1/2 Years', 2013, 2, 'PENDING', '2014-04-13 11:59:36', 9, 90),
('rishabh', 'aa79fa56139d87a2e65ec5037262225b8e4926db6bae402c0ef5fd4a460ccc14578afc9015fb8761c6d2704b9133c718340a1ef2f3684b50e7ebe09f7e8eb5f7', 'IT-2K11-28', '-', 'Rishabh Jaiswal', 'M', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('rupesh', '6dc51c0db6d309303c48eb429b8efbb3b3c87c64f1ea2f2a8e01f1d8932aaccabcdedf623925e5259a84959c134b4cbf018f06a03e3a42b3327e67f780d40366', 'IT-2K11-31', '-', 'Rupesh Kumar Verma', 'M', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('savan', '5d0d1ebd8b588095a9370b2e1cae1208928778118a5d781b0b6accd3b092a4658195be7f991d4c19bdfc7153f1405033adf9308e2eff4db39611ba47dc0b149e', 'IT-2K11-36', '-', 'Savan Katara', 'M', 'M.Tech(IT) 5 + 1/2 Years', 2013, 6, 'PENDING', '2014-04-03 03:54:08', 9, 90),
('sourabh', '1ef83216cf824d50242c3508184caa6d4d2f191f670d3f3d67203691aafa08314d5e3cf33fbbbbbb0687be7b67ed9afd983fc72c1bba8391f9f20d440c6ee629', 'IT-2K11-38', '-', 'Sourabh Jain', 'M', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('sourabh2fsdf', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', 'af', 'A', 'Sourabh Jain', 'M', 'MCA 6 Years(Section A)', 2014, 10, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('sourabhjain', '66de5d6ebe3a7d624f4665662f51d14214f8a2530892d47b9be1260a1facb77a87c26fc7572286b6d86697931f5f4bb1c55ed78ba044deae2496403c6f57c21c', 'ABCD', 'A', 'Sourabh Jain', 'M', 'MCA 6 Years(Section A)', 2014, 10, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('surbhi', '1ef83216cf824d50242c3508184caa6d4d2f191f670d3f3d67203691aafa08314d5e3cf33fbbbbbb0687be7b67ed9afd983fc72c1bba8391f9f20d440c6ee629', 'IC-2K11-34', 'A', 'Surbhi Jain', 'F', 'MCA 6 Years(Section A)', 2011, 6, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('tejal', '24686f363d6802dcd9788154ef09a5c3f7766d368c196bb56db13e46dfea1b5d8b0a53eb4926f569d36e3ff69479612936f756cadcd2f112f3749ef2240bfc30', 'IC-2K11-97', 'B', 'Tejal Gupta', 'F', 'MCA 6 Years(Section A)', 2013, 10, 'PENDING', '0000-00-00 00:00:00', 9, 90),
('vikas', 'd469557f65f9a283e119d36dd2b1474fb33cbc4f9c0b83e3d4f3379562e771dad9e5e51c975f3b14a41fd5922eb9495e9d786572b4899d68b57e711d90b3e1ba', 'IC-2K11-89', 'A', 'Vikash Chouhan', 'M', 'MCA 6 Years(Section A)', 2011, 6, 'PENDING', '2014-03-31 09:10:30', 9, 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
