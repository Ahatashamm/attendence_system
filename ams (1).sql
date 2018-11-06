-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 12:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(100) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(172, 'nigar', '', '312CSE0001', 'CSE ', '1st ', 'Computer programming ', '19th ', 'Spring-2016 ', 1, '2016-09-21 00:00:00'),
(173, 'nigar', '', '312CSE0002', 'CSE ', '1st ', 'Computer programming ', '19th ', 'Spring-2016 ', 1, '2016-09-21 00:00:00'),
(174, 'nigar', '', '312CSE0004', 'CSE ', '1st ', 'Computer programming ', '19th ', 'Spring-2016 ', 1, '2016-09-21 00:00:00'),
(175, 'Shamim Hossen', '', '312CSE0001', 'CSE ', '1st ', 'Computer fundamental ', '19th ', 'Spring-2016 ', 1, '2016-09-21 00:00:00'),
(176, 'Shamim Hossen', '', '312CSE0001', 'CSE ', '1st ', 'Computer programming ', '19th ', 'Spring-2016 ', 1, '2016-09-23 00:00:00'),
(177, 'Shamim Hossen', '', '312CSE0002', 'CSE ', '1st ', 'Computer programming ', '19th ', 'Spring-2016 ', 1, '2016-09-23 00:00:00'),
(178, 'Shamim Hossen', '', '312CSE0001', 'CSE ', '1st ', 'Computer fundamental ', '19th ', 'Spring-2016 ', 1, '2016-09-23 00:00:00'),
(179, 'Shamim Hossen', '', '312CSE0002', 'CSE ', '1st ', 'Computer fundamental ', '19th ', 'Spring-2016 ', 1, '2016-09-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendence02`
--

CREATE TABLE `attendence02` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence02`
--

INSERT INTO `attendence02` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(5, 'sultana', '', '312CSE0003', 'CSE ', '2nd ', 'Algorithm ', '3rd ', 'Spring-2016 ', 1, '2016-09-23'),
(6, 'sultana', '', '312CSE0003', 'CSE ', '2nd ', 'Algorithm ', '3rd ', 'Spring-2016 ', 1, '2016-09-23'),
(7, 'sultana', '', '312CSE0011', 'CSE ', '2nd ', 'Algorithm ', '3rd ', 'Spring-2016 ', 1, '2016-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendence03`
--

CREATE TABLE `attendence03` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(300) NOT NULL,
  `studentid` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence03`
--

INSERT INTO `attendence03` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(3, 'faysal', '', '312CSE0033', 'CSE ', '3rd ', 'compiler ', '6th ', 'Spring-2016 ', 1, '2016-09-23'),
(4, 'faysal', '', '312CSE0035', 'CSE ', '3rd ', 'compiler ', '6th ', 'Spring-2016 ', 1, '2016-09-23'),
(5, 'faysal', '', '312CSE0033', 'CSE ', '3rd ', 'compiler ', '6th ', 'Spring-2016 ', 1, '2016-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendence04`
--

CREATE TABLE `attendence04` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(500) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence04`
--

INSERT INTO `attendence04` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(7, 'Dev', '', '312CSE0023', 'CSE ', '4th ', 'Data Communication ', '5th ', 'Spring-2016 ', 1, '2016-09-21'),
(8, 'Dev', '', '312CSE0031', 'CSE ', '4th ', 'Data Communication ', '5th ', 'Spring-2016 ', 1, '2016-09-21'),
(9, 'Dev', '', '312CSE0023', 'CSE ', '4th ', 'Data Communication ', '5th ', 'Spring-2016 ', 1, '2016-09-23'),
(10, 'Dev', '', '312CSE0031', 'CSE ', '4th ', 'Data Communication ', '5th ', 'Spring-2016 ', 1, '2016-09-23'),
(11, 'Dev', '', '312CSE0032', 'CSE ', '4th ', 'Data Communication ', '5th ', 'Spring-2016 ', 1, '2016-09-23'),
(12, 'ahatasham', '', '312CSE0023', 'CSE ', '4th ', 'Telecommunication ', '5th ', 'Spring-2016 ', 1, '2016-09-23'),
(13, 'ahatasham', '', '312CSE0032', 'CSE ', '4th ', 'Telecommunication ', '5th ', 'Spring-2016 ', 1, '2016-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendence05`
--

CREATE TABLE `attendence05` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(300) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence05`
--

INSERT INTO `attendence05` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(5, 'mona', '', '312CSE0050', 'CSE ', '5th ', 'Architecture ', '4th ', 'Spring-2016 ', 1, '2016-09-23'),
(6, 'mona', '', '312CSE0051', 'CSE ', '5th ', 'Architecture ', '4th ', 'Spring-2016 ', 1, '2016-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendence06`
--

CREATE TABLE `attendence06` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence06`
--

INSERT INTO `attendence06` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(3, 'sujon', '', '312CSE0028', 'CSE ', '6th ', 'Simulation ', '3rd ', 'Spring-2016 ', 1, '2016-09-23'),
(4, 'sujon', '', '312CSE0030', 'CSE ', '6th ', 'Simulation ', '3rd ', 'Spring-2016 ', 1, '2016-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendence07`
--

CREATE TABLE `attendence07` (
  `id` int(11) NOT NULL,
  `teacher` varchar(300) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence08`
--

CREATE TABLE `attendence08` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence08`
--

INSERT INTO `attendence08` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(3, 'sajib', '', '312CSE0024', 'CSE ', '8th ', 'AI ', '1st ', 'Spring-2016 ', 1, '2016-09-23'),
(4, 'sajib', '', '312CSE0025', 'CSE ', '8th ', 'AI ', '1st ', 'Spring-2016 ', 1, '2016-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendence2`
--

CREATE TABLE `attendence2` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `studentid` varchar(100) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence2`
--

INSERT INTO `attendence2` (`id`, `teacher`, `student`, `studentid`, `dept`, `semester`, `course`, `batch`, `session`, `active`, `date`) VALUES
(0, '', '', '', '', '', '', '', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batchid` int(11) NOT NULL,
  `batchtitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batchid`, `batchtitle`) VALUES
(1, '10th'),
(2, '15th'),
(6, '3th'),
(7, '8th'),
(8, '9th'),
(9, '19th'),
(10, '18th'),
(11, '17th');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(15) NOT NULL,
  `departmentname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`) VALUES
(1, 'CSE'),
(2, 'BBA'),
(3, 'English'),
(4, 'LLB'),
(5, 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `programid` int(11) NOT NULL,
  `programtitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`programid`, `programtitle`) VALUES
(1, 'B.sc.'),
(2, 'BBA'),
(3, 'B. A.'),
(4, 'LLB'),
(5, 'M. A.');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semesterid` int(11) NOT NULL,
  `semestertitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semesterid`, `semestertitle`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th'),
(5, '5th'),
(6, '6th'),
(7, '7th'),
(9, '8th');

-- --------------------------------------------------------

--
-- Table structure for table `semester_category`
--

CREATE TABLE `semester_category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_category`
--

INSERT INTO `semester_category` (`id`, `name`) VALUES
(1, 'Spring-2016'),
(2, 'Fall-2016'),
(3, 'Spring-2015'),
(4, 'Fall-2015'),
(5, 'Summer-2016');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `serial_no` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `departmentname` varchar(20) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `batchname` varchar(20) NOT NULL,
  `programname` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `session` varchar(100) NOT NULL,
  `admit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`serial_no`, `studentname`, `studentid`, `departmentname`, `semester`, `batchname`, `programname`, `password`, `session`, `admit_date`) VALUES
(5, 'Farzana Akter', '312CSE0001', 'CSE', '1st', '19th', 'B.sc.', '12345', 'summer-2016', '2012-10-01'),
(6, 'Selim', '312CSE0002', 'CSE', '1st', '19th', 'B.sc.', '1234', '', '2016-08-13'),
(7, 'Harun Ahamed', '312CSE0003', 'CSE', '2nd', '3rd', 'B.sc.', '', '', '2016-08-12'),
(10, 'Harun', '312CSE0004', 'CSE', '1st', '19th', 'B.sc.', '', '', '2016-08-12'),
(15, 'Sham', '312CSE0010', ' CSE', '2nd', '3rd', 'B.sc.', '12345', '', '2016-09-15'),
(16, 'Sagor Ahmed', '311CSE007', '  CSE', '1st', '19th', 'B.sc.', '12345', 'Spring-2016', '2016-09-15'),
(17, 'Rajib', '312CSE0011', 'CSE', '2nd', '3rd', 'B.sc.', '12345', 'Spring-2016', '2016-09-22'),
(18, 'sultana', '312CSE0020', 'CSE', '2nd', '4th', 'B.sc.', '12345', 'Spring-2016', '2016-10-03'),
(19, 'sajia', '312CSE0021', 'CSE', '3rd', '2nd', 'B.sc.', '12345', 'Spring-2016', '2016-10-03'),
(20, 'sumona', '312CSE0022', 'CSE', '3rd', '2nd', 'B.sc.', '12345', 'Spring-2016', '2016-10-03'),
(21, 'sultana', '312CSE0023', 'CSE', '4th', '5th', 'B.sc.', '12345', 'Spring-2016', '2016-10-03'),
(22, 'Sunny', '312CSE0024', 'CSE', '8th', '1st', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(23, 'Apu', '312CSE0025', 'CSE', '8th', '1st', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(24, 'rajib', '312CSE0026', 'CSE', '7th', '2nd', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(25, 'shetu', '312CSE0027', 'CSE', '7th', '2nd', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(26, 'sopnil', '312CSE0028', 'CSE', '6th', '3rd', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(27, 'ahatasham', '312CSE0030', 'CSE', '6th', '3rd', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(28, 'dev', '312CSE0031', 'CSE', '4th', '5th', 'B.sc.', '12345', 'Fall-2016', '2016-10-04'),
(29, 'sriti', '312CSE0032', 'CSE', '4th', '5th', 'B.sc.', '12345', 'Fall-2016', '2016-10-04'),
(30, 'shamim', '312CSE0033', 'CSE', '3rd', '6th', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(31, 'nahid', '312CSE0035', 'CSE', '3rd', '6th', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(32, 'shammi', '312CSE0036', 'CSE', '2nd', '7th', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(33, 'Apu', '312CSE0040', 'CSE', '2nd', '7th', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(34, 'karim', '312CSE0041', 'CSE', '1st', '8th', 'B.sc.', '12345', 'Fall-2016', '2016-10-04'),
(35, 'sajia', '312CSE0043', 'CSE', '1st', '8th', 'B.sc.', '12345', 'Fall-2016', '2016-10-04'),
(36, 'hatem', '312CSE0050', 'CSE', '5th', '4th', 'B.sc.', '12345', 'Spring-2016', '2016-10-04'),
(37, 'jahanara', '312CSE0051', 'CSE', '5th', '4th', 'B.sc.', '12345', 'Spring-2016', '2016-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `departmentname` varchar(20) NOT NULL,
  `programname` varchar(20) NOT NULL,
  `semestername` varchar(20) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `taken_classes` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subjectname`, `teacher`, `departmentname`, `programname`, `semestername`, `batch`, `taken_classes`) VALUES
(1, 'Computer Programming', 'nigar', 'CSE ', 'B.sc. ', '1st', ' 3rd', 25),
(7, 'Computer fundamental', 'Shamim Hossen', 'CSE', 'B.sc.', '1st', '19th', 27),
(8, 'Data Structure', 'Hashem ali', 'CSE', 'B.sc.', '2nd', '3rd', 1),
(9, 'Algorithm', 'sultana', 'CSE', 'B.sc.', '2nd', '3rd', 3),
(10, 'System Analysis', 'Rajib', 'CSE  ', 'B.sc.  ', '7th ', '2nd  ', 2),
(11, 'Telecommunication', 'ahatasham', 'CSE', 'B.sc.', '4th', '5th', 2),
(12, 'Data Communication', 'Dev', 'CSE', 'B.sc.', '4th', '5th', 3),
(13, 'Math', 'koddus', 'CSE', 'B.sc.', '5th', '4th', 1),
(14, 'Architecture', 'Mona', 'CSE ', 'B.sc. ', '5th ', '4th ', 2),
(15, 'Simulation', 'sujon', 'CSE', 'B.sc.', '6th', '3rd', 2),
(16, 'Software Engineering', 'sony ', 'CSE', 'B.sc.', '6th', '3rd', 0),
(17, 'AI', 'sajib', 'CSE', 'B.sc.', '8th', '1st', 2),
(18, 'compiler', 'faysal', 'CSE', 'B.sc.', '3rd', '6th', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject_configure`
--

CREATE TABLE `subject_configure` (
  `serial_no` int(11) NOT NULL,
  `course` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_configure`
--

INSERT INTO `subject_configure` (`serial_no`, `course`) VALUES
(1, 'Computer programming'),
(2, 'Computer fundamental'),
(3, 'Data Structure'),
(4, 'Algorithm'),
(5, 'Discrete Math'),
(6, 'Java'),
(7, 'Math'),
(8, 'Architecture'),
(9, 'Telecommunication'),
(10, 'Data Communication'),
(11, 'Simulation'),
(12, 'Software Engineering'),
(13, 'System Analysis'),
(14, 'Image Processing'),
(15, 'AI'),
(16, 'Robotics'),
(17, 'compiler');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `serial_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `joint_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`serial_no`, `name`, `rank`, `degree`, `joint_date`, `email`, `faculty`, `contact`, `address`) VALUES
(201600001, 'Hashem ali', 'Teacher', 'M.Sc in CSE ', '2016-08-05', 'mamundpi.6@gmail.com ', 'CSE ', '019565223546 ', 'Dhaka '),
(201600002, 'Shamim Hossen', 'Teacher', 'M.Sc in CSE', '2016-08-04', 'ah728005@gmail.com', 'CSE', '01122', 'Dhaka'),
(201600003, 'sham', 'Teacher', 'M.sc in cse ', '2016-09-12', 'mdahatasham58@gmail. ', 'CSE ', '0172222222 ', 'nikunjo-2 ,khilkhet '),
(201600004, 'sultana', 'teacher', 'M.sc. in  (CSE.) ', '2015-02-02', 'mdahatasham58@gmail.com ', 'CSE ', '01746952089 ', 'nikunjo-2 ,khilkhet '),
(201600005, 'Rajib', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatasham58@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet'),
(201600006, 'sujon', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatashamm@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet'),
(201600007, 'sony ', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatasham58@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet'),
(201600008, 'ahatasham', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatasham58@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet'),
(201600009, 'Dev', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatasham58@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet'),
(201600010, 'koddus', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatasham58@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet'),
(201600011, 'sajib', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatasham58@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet'),
(201600012, 'faysal', 'teacher', 'M.sc. in  (CSE.)', '2015-02-02', 'mdahatasham58@gmail.com', 'CSE', '01746952089', 'nikunjo-2 ,khilkhet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `serial_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `desgination` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`serial_no`, `name`, `password`, `desgination`, `user`) VALUES
(1, 'Nigar', '1234', 'Admin', 'nigar'),
(2, 'Mona', '1234', 'Teacher', 'mona'),
(3, 'Habib Hossian', '1234', 'Student', 'habib'),
(4, 'shamim hossen', '1234', 'teacher', 'Shamim Hossen'),
(5, 'Hashem ali', '1234', 'teacher', 'Hashem ali'),
(6, 'sultana', '1234', 'teacher', 'sultana'),
(7, 'Rajib', '1234', 'teacher', 'Rajib'),
(8, 'sujon', '1234', 'teacher', 'sujon'),
(9, 'sony ', '1234', 'teacher', 'sony '),
(10, 'ahatasham', '1234', 'teacher', 'ahatasham'),
(11, 'Dev', '1234', 'teacher', 'Dev'),
(12, 'koddus', '1234', 'teacher', 'koddus'),
(13, 'sajib', '1234', 'teacher', 'sajib'),
(14, 'faysal', '1234', 'teacher', 'faysal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence02`
--
ALTER TABLE `attendence02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence03`
--
ALTER TABLE `attendence03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence04`
--
ALTER TABLE `attendence04`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence05`
--
ALTER TABLE `attendence05`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence06`
--
ALTER TABLE `attendence06`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence07`
--
ALTER TABLE `attendence07`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence08`
--
ALTER TABLE `attendence08`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence2`
--
ALTER TABLE `attendence2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batchid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentid`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`programid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semesterid`);

--
-- Indexes for table `semester_category`
--
ALTER TABLE `semester_category`
  ADD PRIMARY KEY (`name`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `serial_no` (`serial_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_configure`
--
ALTER TABLE `subject_configure`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `serial_no` (`serial_no`),
  ADD KEY `serial_no_2` (`serial_no`),
  ADD KEY `serial_no_3` (`serial_no`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `serial_no` (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `attendence02`
--
ALTER TABLE `attendence02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `attendence03`
--
ALTER TABLE `attendence03`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `attendence04`
--
ALTER TABLE `attendence04`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `attendence05`
--
ALTER TABLE `attendence05`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `attendence06`
--
ALTER TABLE `attendence06`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `attendence07`
--
ALTER TABLE `attendence07`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendence08`
--
ALTER TABLE `attendence08`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `programid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semesterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `semester_category`
--
ALTER TABLE `semester_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `subject_configure`
--
ALTER TABLE `subject_configure`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201600013;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
