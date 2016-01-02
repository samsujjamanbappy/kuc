-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2015 at 04:56 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `2nd_semester`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batch` varchar(25) NOT NULL,
  `total_student` int(11) NOT NULL,
  PRIMARY KEY (`batch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `full_name`, `password`, `type`, `department`, `phone`, `email`) VALUES
(1, 'admin', 'Samsujjaman Bappy', 'admin', 'admin', '', '+8801824168996', 'Samsujjamanbappy@gmail.com'),
(2, 'shathee', 'Shathee Akter', '123', 'teacher', 'Bangla', '01625363400', 'shathee@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pre_test`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `result_publish`
--

CREATE TABLE IF NOT EXISTS `result_publish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` int(11) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `status` varchar(23) NOT NULL,
  `message` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Table structure for table `section_teacher`
--

CREATE TABLE IF NOT EXISTS `section_teacher` (
  `teacher_id` int(11) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `test_exam`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `year_final`
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
