-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 07:16 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuc`
--
CREATE DATABASE IF NOT EXISTS `kuc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kuc`;

-- --------------------------------------------------------

--
-- Table structure for table `1st_semester`
--

DROP TABLE IF EXISTS `1st_semester`;
CREATE TABLE IF NOT EXISTS `1st_semester` (
  `roll` int(11) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub1_m` varchar(20) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub2_m` varchar(20) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub3_m` varchar(20) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub4_m` varchar(20) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub5_m` varchar(20) NOT NULL,
  `sub6` varchar(50) NOT NULL,
  `sub6_m` varchar(20) NOT NULL,
  `sub7` varchar(50) NOT NULL,
  `sub7_m` varchar(20) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1st_semester`
--

INSERT INTO `1st_semester` (`roll`, `sub1`, `sub1_m`, `sub2`, `sub2_m`, `sub3`, `sub3_m`, `sub4`, `sub4_m`, `sub5`, `sub5_m`, `sub6`, `sub6_m`, `sub7`, `sub7_m`) VALUES
(123, 'Bangla', '', 'English', '', 'ICT', '', 'Physic', '78', 'Chemistry', '', 'Biology', '', 'Mathematics', ''),
(223, 'Bangla', '', 'English', '', 'ICT', '', 'Accounting', '', 'Management', '', 'Production Management & Supply', '', 'Secraterial Science', ''),
(334, 'Bangla', '', 'English', '', 'ICT', '', 'Economices', '', 'Civics', '', 'History of Islam', '', 'Psychology', '');

-- --------------------------------------------------------

--
-- Table structure for table `2nd_semester`
--

DROP TABLE IF EXISTS `2nd_semester`;
CREATE TABLE IF NOT EXISTS `2nd_semester` (
  `roll` int(11) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub1_m` varchar(20) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub2_m` varchar(20) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub3_m` varchar(20) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub4_m` varchar(20) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub5_m` varchar(20) NOT NULL,
  `sub6` varchar(50) NOT NULL,
  `sub6_m` varchar(20) NOT NULL,
  `sub7` varchar(50) NOT NULL,
  `sub7_m` varchar(20) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2nd_semester`
--

INSERT INTO `2nd_semester` (`roll`, `sub1`, `sub1_m`, `sub2`, `sub2_m`, `sub3`, `sub3_m`, `sub4`, `sub4_m`, `sub5`, `sub5_m`, `sub6`, `sub6_m`, `sub7`, `sub7_m`) VALUES
(123, 'Bangla', '', 'English', '', 'ICT', '', 'Physic', '', 'Chemistry', '', 'Biology', '', 'Mathematics', ''),
(223, 'Bangla', '', 'English', '', 'ICT', '', 'Accounting', '', 'Management', '', 'Production Management & Supply', '', 'Secraterial Science', ''),
(334, 'Bangla', '', 'English', '', 'ICT', '', 'Economices', '', 'Civics', '', 'History of Islam', '', 'Psychology', '');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

DROP TABLE IF EXISTS `batch`;
CREATE TABLE IF NOT EXISTS `batch` (
  `batch` varchar(25) NOT NULL,
  `total_student` int(11) NOT NULL,
  PRIMARY KEY (`batch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch`, `total_student`) VALUES
('2015', 3),
('2016', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `full_name` varchar(222) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `full_name`, `password`, `type`, `department`, `phone`, `email`) VALUES
(1, 'admin', 'Samsujjaman Bappy', 'admin', 'admin', '', '+8801824168996', 'Samsujjamanbappy@gmail.com'),
(2, 'shathee', 'Shathee Akter', '123', 'teacher', 'Bangla', '01625363400', 'shathee@gmail.com'),
(7, 'bappy', 'bappy', '123', 'teacher', 'ICT', '', ''),
(8, 'bappy1', 'bappy1', '123', 'teacher', 'Physic', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pre_test`
--

DROP TABLE IF EXISTS `pre_test`;
CREATE TABLE IF NOT EXISTS `pre_test` (
  `roll` int(11) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub1_m` varchar(20) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub2_m` varchar(20) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub3_m` varchar(20) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub4_m` varchar(20) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub5_m` varchar(20) NOT NULL,
  `sub6` varchar(50) NOT NULL,
  `sub6_m` varchar(20) NOT NULL,
  `sub7` varchar(50) NOT NULL,
  `sub7_m` varchar(20) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre_test`
--

INSERT INTO `pre_test` (`roll`, `sub1`, `sub1_m`, `sub2`, `sub2_m`, `sub3`, `sub3_m`, `sub4`, `sub4_m`, `sub5`, `sub5_m`, `sub6`, `sub6_m`, `sub7`, `sub7_m`) VALUES
(123, 'Bangla', '', 'English', '', 'ICT', '', 'Physic', '', 'Chemistry', '', 'Biology', '', 'Mathematics', ''),
(223, 'Bangla', '', 'English', '', 'ICT', '', 'Accounting', '', 'Management', '', 'Production Management & Supply', '', 'Secraterial Science', ''),
(334, 'Bangla', '', 'English', '', 'ICT', '', 'Economices', '', 'Civics', '', 'History of Islam', '', 'Psychology', '');

-- --------------------------------------------------------

--
-- Table structure for table `result_publish`
--

DROP TABLE IF EXISTS `result_publish`;
CREATE TABLE IF NOT EXISTS `result_publish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` int(11) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `status` varchar(23) NOT NULL,
  `message` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `result_publish`
--

INSERT INTO `result_publish` (`id`, `batch`, `exam_type`, `status`, `message`, `short_name`) VALUES
(33, 2015, 'Frist Semester Exam', 'YES', 'Exam is not held yet !!!', '1st'),
(34, 2015, 'Second Semester Exam', 'YES', 'Exam is not held yet !!!', '2nd'),
(35, 2015, 'Year Change Exam', 'NO', 'Exam is not held yet !!!', '3rd'),
(36, 2015, 'Pre-Test Exam', 'NO', 'Exam is not held yet !!!', 'pre-test'),
(37, 2015, 'Test Exam', 'YES', 'Exam is not held yet !!!', 'test'),
(43, 2016, 'Frist Semester Exam', 'NO', 'Exam is not held yet !!!', '1st'),
(44, 2016, 'Second Semester Exam', 'NO', 'Exam is not held yet !!!', '2nd'),
(45, 2016, 'Year Change Exam', 'NO', 'Exam is not held yet !!!', '3rd'),
(46, 2016, 'Pre-Test Exam', 'NO', 'Exam is not held yet !!!', 'pre-test'),
(47, 2016, 'Test Exam', 'NO', 'Exam is not held yet !!!', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `section_teacher`
--

DROP TABLE IF EXISTS `section_teacher`;
CREATE TABLE IF NOT EXISTS `section_teacher` (
  `teacher_id` int(11) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_teacher`
--

INSERT INTO `section_teacher` (`teacher_id`, `batch`) VALUES
(8, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `gender` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `group_name` varchar(70) NOT NULL,
  `ssc_cgpa` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `batch` varchar(25) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`name`, `roll`, `father_name`, `mother_name`, `gender`, `phone`, `dob`, `password`, `group_name`, `ssc_cgpa`, `address`, `batch`) VALUES
('Bappy', 123, '', '', 'Male', '', '15-02-1992', '123', 'Science', '4', 'iubat\r\n', '2015'),
('MD Nuruzzaman Sabbir', 223, '', '', 'Male', '', '15-02-1992', '223', 'Business studies', '4.50', 'iubat', '2015'),
('shohan', 334, '', '', 'Male', '12345678', '15-02-1992', '334', 'Humanity', '4', 'iuabt', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `test_exam`
--

DROP TABLE IF EXISTS `test_exam`;
CREATE TABLE IF NOT EXISTS `test_exam` (
  `roll` int(11) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub1_m` varchar(20) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub2_m` varchar(20) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub3_m` varchar(20) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub4_m` varchar(20) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub5_m` varchar(20) NOT NULL,
  `sub6` varchar(50) NOT NULL,
  `sub6_m` varchar(20) NOT NULL,
  `sub7` varchar(50) NOT NULL,
  `sub7_m` varchar(20) NOT NULL,
  `sub8` varchar(50) NOT NULL,
  `sub8_m` varchar(20) NOT NULL,
  `sub9` varchar(50) NOT NULL,
  `sub9_m` varchar(20) NOT NULL,
  `sub10` varchar(50) NOT NULL,
  `sub10_m` varchar(20) NOT NULL,
  `sub11` varchar(50) NOT NULL,
  `sub11_m` varchar(20) NOT NULL,
  `sub12` varchar(50) NOT NULL,
  `sub12_m` varchar(20) NOT NULL,
  `sub13` varchar(50) NOT NULL,
  `sub13_m` varchar(20) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_exam`
--

INSERT INTO `test_exam` (`roll`, `sub1`, `sub1_m`, `sub2`, `sub2_m`, `sub3`, `sub3_m`, `sub4`, `sub4_m`, `sub5`, `sub5_m`, `sub6`, `sub6_m`, `sub7`, `sub7_m`, `sub8`, `sub8_m`, `sub9`, `sub9_m`, `sub10`, `sub10_m`, `sub11`, `sub11_m`, `sub12`, `sub12_m`, `sub13`, `sub13_m`) VALUES
(123, 'Bangla', '57', 'Bangla', '65', 'English', '76', 'English', '55', 'ICT', '87', 'Physic', '66', 'Physic', '88', 'Chemistry', '55', 'Chemistry', '74', 'Biology', '66', 'Biology', '77', 'Mathematics', '88', 'Mathematics', '99'),
(223, 'Bangla', '', 'Bangla', '', 'English', '', 'English', '', 'ICT', '', 'Accounting', '', 'Accounting', '', 'Management', '', 'Management', '', 'Production Management & Supply', '', 'Production Management & Supply', '', 'Secraterial Science', '', 'Secraterial Science', ''),
(334, 'Bangla', '', 'Bangla', '', 'English', '', 'English', '', 'ICT', '', 'Economices', '', 'Economices', '', 'Civics', '', 'Civics', '', 'History of Islam', '', 'History of Islam', '', 'Psychology', '', 'Psychology', '');

-- --------------------------------------------------------

--
-- Table structure for table `year_final`
--

DROP TABLE IF EXISTS `year_final`;
CREATE TABLE IF NOT EXISTS `year_final` (
  `roll` int(11) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub1_m` varchar(20) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub2_m` varchar(20) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub3_m` varchar(20) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub4_m` varchar(20) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub5_m` varchar(20) NOT NULL,
  `sub6` varchar(50) NOT NULL,
  `sub6_m` varchar(20) NOT NULL,
  `sub7` varchar(50) NOT NULL,
  `sub7_m` varchar(20) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_final`
--

INSERT INTO `year_final` (`roll`, `sub1`, `sub1_m`, `sub2`, `sub2_m`, `sub3`, `sub3_m`, `sub4`, `sub4_m`, `sub5`, `sub5_m`, `sub6`, `sub6_m`, `sub7`, `sub7_m`) VALUES
(123, 'Bangla', '', 'English', '', 'ICT', '', 'Physic', '', 'Chemistry', '', 'Biology', '', 'Mathematics', ''),
(223, 'Bangla', '', 'English', '', 'ICT', '', 'Accounting', '', 'Management', '', 'Production Management & Supply', '', 'Secraterial Science', ''),
(334, 'Bangla', '', 'English', '', 'ICT', '', 'Economices', '', 'Civics', '', 'History of Islam', '', 'Psychology', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
