-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2014 at 09:12 AM
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
('F-32', 'Mr. Rajesh Verma', 'IC-203', 'A'),
('F-33', 'Ms. Shrishti Choudhary', 'IC-204', 'A'),
('F-34', 'Ms. Neha Chouhan', 'IC-205', 'A'),
('F-35', 'Ms. Shrishti Choudhary', 'IC-206', 'A'),
('F-36', 'Dr. Rahul Singhai', 'IC-207', 'A'),
('F-37', 'Dr. M.K. Mishra', 'IC-201', 'B'),
('F-39', 'Mr. Rajesh Verma', 'IC-203', 'B'),
('F-4', 'Mr. Basnt Namdeo', 'IT-204', '-'),
('F-40', 'Ms. Shrishti Choudhary', 'IC-204', 'B'),
('F-41', 'Ms. Neha Chouhan', 'IC-205', 'B'),
('F-42', 'Ms. Shrishti Choudhary', 'IC-206', 'B'),
('F-43', 'Mr. Rupesh Sendre', 'IC-207', 'B'),
('F-45', 'Dr. D.K. Banerjee', 'IC-402', 'A'),
('F-46', 'Mr. Basant Namdeo', 'IC-403', 'A'),
('F-47', 'Mr. Pradeep Jatav', 'IC-404', 'A'),
('F-48', 'Mr. Arpit Neema', 'IC-405', 'A'),
('F-49', 'Ms. Kirti Vijayvargia', 'IC-406', 'A'),
('F-5', 'Guest', 'IT-205', '-'),
('F-50', 'Ms. Kirti Vijayvargia', 'IC-407', 'A'),
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
('F-77', 'Mr. Vivek Shrivastav', 'IC-806', 'A'),
('F-78', 'Ms. Poonam Mangwani', 'IC-801', 'B'),
('F-79', 'Mr. Shaligram Prajapat', 'IC-802', 'B'),
('F-8', 'Dr. Ajay Chabariya', 'IT-401', '-'),
('F-80', 'Mr. Nitin Nagar', 'IC-803', 'B'),
('F-81', 'Mr. Arpit Neema', 'IC-804', 'B'),
('F-83', 'Ms. Yasmin Shaikh', 'IC-806', 'B'),
('F-85', 'Mr. Jugendra Dongre', 'IC-1002', 'A'),
('F-86', 'Ms. Yasmin Shaikh', 'IC-1003', 'A'),
('F-87', 'Ms. Manju Suchdeo', 'IC-1004', 'A'),
('F-88', 'Mr. Ramesh Thakur', 'IC-1005', 'A'),
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
  PRIMARY KEY (`question_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_questions`
--

INSERT INTO `faculty_questions` (`question_no`, `question`) VALUES
(1, 'Ability to bring conceptual clarity'),
(2, 'Teacher’s subject knowledge'),
(3, 'Compliments theory with practical examples'),
(4, 'Handling of cases / assignments / exercises / activities'),
(5, 'Motivation provided by the teacher'),
(6, 'Ability to control the class'),
(7, 'Completion & Coverage of Course'),
(8, 'Teacher’s Communication Skill'),
(9, 'Teacher’s Regularity & Punctuality'),
(10, 'Interaction & guidance outside the classroom'),
(11, 'Relevance of syllabus as per industry requirement'),
(12, 'Sufficiency of course content');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_data`
--

CREATE TABLE IF NOT EXISTS `feedback_data` (
  `programme_name` varchar(50) NOT NULL,
  `semester` int(2) NOT NULL,
  `data` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_data`
--

INSERT INTO `feedback_data` (`programme_name`, `semester`, `data`) VALUES
('M.Tech(IT) 5 + 1/2 Years', 6, '{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}'),
('M.Tech(IT) 5 + 1/2 Years', 6, '{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}'),
('M.Tech(IT) 5 + 1/2 Years', 6, '{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}'),
('M.Tech(IT) 5 + 1/2 Years', 6, '{Average,Average,Average,Average,Average,Average}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}{3,3,3,3,3,3,3}');

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
  `password` varchar(50) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `section` varchar(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `programme_name` varchar(45) NOT NULL,
  `year_of_admission` int(5) NOT NULL,
  `semester` int(2) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `rollno` (`rollno`),
  KEY `username` (`username`),
  FULLTEXT KEY `username_2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `rollno`, `section`, `name`, `programme_name`, `year_of_admission`, `semester`, `status`) VALUES
('amita', 'amiami', 'IT-2K11-06', '-', 'Amita Sanole', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'OK'),
('anjali', 'anjali', 'IT-2K12-7', '-', 'Anjali Rodwal', 'M.Tech(IT) 5 + 1/2 Years', 2013, 4, 'PENDING'),
('devu', 'devu', 'IT-2K11-10', '-', 'Devendra Malviya', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING'),
('rishabh', 'jaiswal', 'IT-2K11-28', '-', 'Rishabh Jaiswal', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING'),
('rupesh', 'rupesh', 'IT-2K11-31', '-', 'Rupesh Kumar Verma', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING'),
('sourabh', 'ajtajt', 'IT-2K11-38', '-', 'Sourabh Jain', 'M.Tech(IT) 5 + 1/2 Years', 2011, 6, 'PENDING'),
('sourabh2fsdf', '', 'af', 'A', 'Sourabh Jain', 'MCA 6 Years(Section A)', 2014, 10, 'PENDING'),
('sourabhjain', 'fjsajasfjsak', 'ABCD', 'A', 'Sourabh Jain', 'MCA 6 Years(Section A)', 2014, 10, 'PENDING'),
('surbhi', 'ajtajt', 'IC-2K11-34', 'A', 'Surbhi Jain', 'MCA 6 Years(Section A)', 2011, 6, 'PENDING'),
('tejal', 'tejal', 'IC-2K11-97', 'A', 'Tejal Gupta', 'MCA 6 Years(Section A)', 2013, 6, 'PENDING');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
