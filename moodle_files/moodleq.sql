-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 12:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moodle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `User_ID` varchar(50) NOT NULL,
  `Email_address` varchar(50) NOT NULL,
  `password_hash` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`First_name`, `Last_name`, `User_ID`, `Email_address`, `password_hash`, `Gender`, `City`, `Position`, `Department`, `Batch`) VALUES
('Hemanth', 'Reddy', 'hmad', 'reddy@gmail.com', 'hemanth', 'male', 'vij', 'administrator', 'CS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ai201`
--

CREATE TABLE `ai201` (
  `course_code` varchar(50) NOT NULL,
  `instructor_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ai201`
--

INSERT INTO `ai201` (`course_code`, `instructor_name`) VALUES
('AI201', 'John McCarthy');

-- --------------------------------------------------------

--
-- Table structure for table `chatters`
--

CREATE TABLE `chatters` (
  `name` text NOT NULL,
  `seen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatters`
--

INSERT INTO `chatters` (`name`, `seen`) VALUES
('hem123', '2019-11-10 11:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_name` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_name`, `course_code`) VALUES
('Artificial Intelligence', 'AI201'),
('Computer Networks', 'CS 204 '),
('Data Structures and Algorithms Laboratory', 'CS 211'),
('Data Structures And Algorithms', 'CS201'),
('Discrete Structures', 'CS203'),
('Software Systems Lab', 'CS213'),
('Data Analysis', 'EE201'),
('Hacking', 'HK211'),
('Economics', 'HS201');

-- --------------------------------------------------------

--
-- Table structure for table `cs202`
--

CREATE TABLE `cs202` (
  `course_code` varchar(50) NOT NULL,
  `instructor_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs202`
--

INSERT INTO `cs202` (`course_code`, `instructor_name`) VALUES
('CS202', 'GN');

-- --------------------------------------------------------

--
-- Table structure for table `cs211`
--

CREATE TABLE `cs211` (
  `course_code` varchar(50) NOT NULL,
  `instructor_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs211`
--

INSERT INTO `cs211` (`course_code`, `instructor_name`) VALUES
('CS211', 'SRB');

-- --------------------------------------------------------

--
-- Table structure for table `hk211`
--

CREATE TABLE `hk211` (
  `course_code` varchar(50) NOT NULL,
  `instructor_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hk211`
--

INSERT INTO `hk211` (`course_code`, `instructor_name`) VALUES
('HK211', 'Hemanth Surya');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `course_code` varchar(50) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `User_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`course_code`, `instructor_name`, `User_ID`) VALUES
('HK211', 'Hemanth Surya', 'hamada'),
('AI201', 'John McCarthy', 'john123');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `msg`, `posted`) VALUES
('hem123', '', ''),
('hem123', 'hii', '2019-11-09 21:09:17'),
('hem123', 'ynfbthdfn', '2019-11-09 21:09:22'),
('ram', 'jii', '2019-11-09 21:13:34'),
('hem123', 'hbfbg', '2019-11-09 22:14:44'),
('hem123', 'n.glnks.dglb', '2019-11-10 11:02:33'),
('hem123', 'n mgf,n', '2019-11-10 11:02:36'),
('hem123', 'bfg,n ', '2019-11-10 11:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `User_ID` varchar(50) NOT NULL,
  `Email_address` varchar(50) NOT NULL,
  `password_hash` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Batch` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`First_name`, `Last_name`, `User_ID`, `Email_address`, `password_hash`, `Gender`, `City`, `Position`, `Department`, `Batch`) VALUES
('Hemanth', 'Surya', 'hamada', 'surya@gmail.com', 'hemanth', 'male', 'bangalore', 'staff', 'CS', 0),
('John', 'McCarthy', 'john123', 'john@gmail.com', 'john', 'male', 'Boston', 'staff', 'CS', 0),
('ram', 'gopal', 'rgvzoomin', 'rgv@gmail.com', 'rgvzoomin', 'male', 'hyderabad', 'staff', 'CS', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `studcourses`
--

CREATE TABLE `studcourses` (
  `User_ID` varchar(50) NOT NULL,
  `course1` varchar(50) NOT NULL,
  `course2` varchar(50) NOT NULL,
  `course3` varchar(50) NOT NULL,
  `course4` varchar(50) NOT NULL,
  `course5` varchar(50) NOT NULL,
  `course6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studcourses`
--

INSERT INTO `studcourses` (`User_ID`, `course1`, `course2`, `course3`, `course4`, `course5`, `course6`) VALUES
('hem123', 'CS202', 'CS211', 'HK211', 'AI201', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `User_ID` varchar(50) NOT NULL,
  `Email_address` varchar(50) NOT NULL,
  `password_hash` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Batch` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`First_name`, `Last_name`, `User_ID`, `Email_address`, `password_hash`, `Gender`, `City`, `Position`, `Department`, `Batch`) VALUES
('Hemanth', 'Reddy', 'hem123', 'nhemanthreddy0@gmail.com', 'qwerty', 'male', 'mysore', 'student', 'CS', 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `User_ID` (`User_ID`),
  ADD UNIQUE KEY `Email_address` (`Email_address`);

--
-- Indexes for table `ai201`
--
ALTER TABLE `ai201`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `cs202`
--
ALTER TABLE `cs202`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `cs211`
--
ALTER TABLE `cs211`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `hk211`
--
ALTER TABLE `hk211`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD UNIQUE KEY `User_ID` (`User_ID`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD UNIQUE KEY `User_ID` (`User_ID`),
  ADD UNIQUE KEY `Email_address` (`Email_address`);

--
-- Indexes for table `studcourses`
--
ALTER TABLE `studcourses`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `Email address` (`Email_address`),
  ADD UNIQUE KEY `User_ID` (`User_ID`),
  ADD KEY `First name` (`First_name`),
  ADD KEY `First name_2` (`First_name`),
  ADD KEY `First name_3` (`First_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
