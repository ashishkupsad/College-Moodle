-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 07:19 PM
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
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `fname` varchar(125) NOT NULL,
  `lname` varchar(125) NOT NULL,
  `uname` varchar(125) NOT NULL,
  `pass` varchar(125) NOT NULL,
  `remail` varchar(125) NOT NULL,
  `gender` text NOT NULL,
  `batch` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`fname`, `lname`, `uname`, `pass`, `remail`, `gender`, `batch`, `dept`, `position`) VALUES
('Donald', 'Trump', 'dt123', 'dt123', 'dt@abc.com', 'male', 'instructor', 'CS', 'instructor'),
('Ashish', 'Kupsad', 'ashpro', '123456', 'ash@gmail.com', 'male', 'instructor', 'CS', 'instructor'),
('Hiro', 'Hamada', 'hamada', '123456', 'hiro@abc.com', 'male', 'instructor', 'CS', 'instructor'),
('Rama', 'Teja', 'ramtej', '123456', 'ramtej@gmail.com', 'male', '2018', 'ME', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(15) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `course_name`) VALUES
('HS201', 'History'),
('ML203', 'Machine Learning'),
('DM302', 'Data Mining');

-- --------------------------------------------------------

--
-- Table structure for table `dm302`
--

CREATE TABLE `dm302` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hs201`
--

CREATE TABLE `hs201` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `user_id` varchar(15) NOT NULL,
  `course_1` varchar(15) NOT NULL,
  `course_2` varchar(15) NOT NULL,
  `course_3` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`user_id`, `course_1`, `course_2`, `course_3`) VALUES
('', '', '', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ml203`
--

CREATE TABLE `ml203` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `user_id` varchar(15) NOT NULL,
  `course_1` varchar(15) NOT NULL,
  `course_2` varchar(15) NOT NULL,
  `course_3` varchar(15) NOT NULL,
  `course_4` varchar(15) NOT NULL,
  `course_5` varchar(15) NOT NULL,
  `course_6` varchar(15) NOT NULL,
  `course_7` varchar(15) NOT NULL,
  `course_8` varchar(15) NOT NULL,
  `course_9` varchar(15) NOT NULL,
  `course_10` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`user_id`, `course_1`, `course_2`, `course_3`, `course_4`, `course_5`, `course_6`, `course_7`, `course_8`, `course_9`, `course_10`) VALUES
('dt123', 'T101', 'T102', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dm302`
--
ALTER TABLE `dm302`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs201`
--
ALTER TABLE `hs201`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ml203`
--
ALTER TABLE `ml203`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dm302`
--
ALTER TABLE `dm302`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hs201`
--
ALTER TABLE `hs201`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ml203`
--
ALTER TABLE `ml203`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
