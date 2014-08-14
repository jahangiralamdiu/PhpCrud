-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2014 at 01:00 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10013 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `code`) VALUES
(10002, 'Laravel', 'LRA-2014'),
(10003, 'ASP.net', 'AS-2014'),
(10004, 'Unity 3D', 'UT-2004'),
(10008, 'Java', 'JV-2014'),
(10009, 'Good Name', 'abl-2014');

-- --------------------------------------------------------

--
-- Table structure for table `course_map`
--

CREATE TABLE IF NOT EXISTS `course_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`student_id`,`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `course_map`
--

INSERT INTO `course_map` (`id`, `student_id`, `course_id`) VALUES
(1, 101, 10001),
(2, 101, 10002),
(3, 103, 10003),
(4, 0, 0),
(5, 0, 0),
(6, 10001, 117),
(7, 0, 118),
(8, 10004, 119),
(9, 10002, 120),
(10, 10003, 120),
(11, 10004, 120),
(12, 0, 0),
(13, 0, 0),
(14, 0, 0),
(15, 122, 10004),
(16, 122, 10008),
(17, 123, 10002),
(18, 123, 10008),
(19, 124, 10003),
(20, 124, 10004),
(21, 125, 10002),
(22, 125, 10003),
(23, 125, 10008),
(24, 105, 0),
(25, 105, 0),
(26, 105, 0),
(27, 105, 0),
(28, 101, 10002),
(29, 101, 10003),
(30, 101, 10004),
(31, 101, 10008),
(32, 102, 10004),
(33, 102, 10008),
(34, 128, 10002),
(35, 128, 10003),
(36, 128, 10004),
(37, 129, 10002),
(38, 129, 10003),
(39, 129, 10004);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(45) DEFAULT NULL,
  `grade` varchar(45) DEFAULT NULL,
  `gpa` float DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`result_id`),
  KEY `FK_resutl_stuid_idx` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `exam_name`, `grade`, `gpa`, `student_id`) VALUES
(1, 'SSC', 'A', 4.6, 101),
(2, 'H.S.C', 'A+', 5, 102),
(3, 'SSC', 'B', 3, 101),
(5, 'H.S.C', 'C', 2.2, 103);

-- --------------------------------------------------------

--
-- Table structure for table `ssc_results`
--

CREATE TABLE IF NOT EXISTS `ssc_results` (
  `result_id` int(11) NOT NULL,
  `bangla` float DEFAULT NULL,
  `english` float DEFAULT NULL,
  `math` float DEFAULT NULL,
  `gpa` float DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`result_id`),
  KEY `FK_ssc_result_stuid_idx` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  KEY `mobile` (`mobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `email`, `mobile`) VALUES
(100, 'Jahangir', 'jahangir@gamil.com', '01923774442'),
(101, 'Abrar', 'abrar@gmail.com', '01784778747'),
(102, 'Tanjim', 'tanjim@yahoo.com', '01774777744'),
(103, 'Jui', 'jui@gmail.com', '0178877877'),
(105, 'Joaria', 'joaria@gmail.com', '01923774442'),
(106, 'Jennifer', 'dfsd@gmail.com', '01923774442'),
(107, 'Jakia Sultana', 'jakia@yahoo.com', '01923587985'),
(108, 'Jakia Sultana', 'jakia@yahoo.com', '01923587985'),
(109, 'Takwa Siddika', 'takwa@gmail.com', '01586988588'),
(110, 'Jakir Hossain', 'jakir@yahoo.com', '0191147547'),
(111, 'Shohag', 'sohag@gmail.com', '0174787787'),
(112, 'Hamid', 'hamid@yahoo.com', '017777774'),
(113, 'Ishrat Sharmin', 'israt@gmail.com', '01477477774'),
(114, 'Kethy', 'kethy@yahoo.com', '0157857888'),
(115, 'Zahidul', 'zahidul@gmail.com', '0178858878'),
(116, 'Sazia', 'sazia@yahoo.com', '01744587777'),
(117, 'Md. Jahangir Alam', 'jahangir@shalsolutions.com', '0178478777'),
(118, 'Tanjim', 'tanjim@yahoo.com', '0178877'),
(119, 'Hamid', 'joaria@gmail.com', '01755477'),
(120, 'Nasrin Jahan', 'naj@gmail.com', '0147744774'),
(121, 'Rusdid', 'rus@gmail.com', '017747787'),
(122, 'Ashraf', 'ashraf@gmail.com', '0147855777'),
(123, 'Zakir Hassan', 'zakir@yahoo.com', '019858878'),
(124, 'Shuvo', 'suvo@yahoo.com', '01447777'),
(125, 'Jennifer', 'dfsd@gmail.com', '01923774442'),
(126, 'Sayema', 'sayma@gmail.com', '017447747'),
(127, 'Jahangir Alam', 'jahangir@yahoo.com', '025778877'),
(129, 'Tanim', 'janim@gmail.com', '01777477');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE IF NOT EXISTS `student_courses` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(45) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`student_id`, `student_name`, `create_date`) VALUES
(100, 'Jahangir', '2014-10-01 00:00:00'),
(101, 'Tanjim', '2014-03-02 00:00:00'),
(103, 'Sajia', '2014-01-02 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `FK_resutl_stuid` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ssc_results`
--
ALTER TABLE `ssc_results`
  ADD CONSTRAINT `FK_ssc_result_stuid` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
