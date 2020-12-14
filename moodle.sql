-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 08:15 AM
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
-- Table structure for table `ai201`
--

CREATE TABLE `ai201` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ai201submissions`
--

CREATE TABLE `ai201submissions` (
  `id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `score*(9/10)` int(10) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('Rama', 'Teja', 'ramtej', '123456', 'ramtej@gmail.com', 'male', '2018', 'ME', 'student'),
('Ravi', 'Kiran', 'ravikiran', '123456', 'ravi@gmail.com', 'male', '2018', 'ME', 'student'),
('Billy', 'kid', 'kid1', '123456', 'kid1@gmail.com', 'male', '2018', 'CS', 'student'),
('hemanth', 'reddy', 'nck', '123456', 'nck@abc', 'male', 'instructor', 'ME', 'instructor'),
('ADMIN', 'IITDH', 'admin', '123456', 'admin@iitdh', 'male', 'admin', 'CS', 'admin'),
('sanath', 'kumar', 'sanath', '123456', 'sanath@gmail.com', 'male', '2019', 'CS', 'student'),
('hvmhv', 'hmvhm', 'hmvm', 'hvjvhj', 'uhrwauh@gmail.com', 'male', '2019', 'CS', 'student'),
('harsh', 'raj', 'harshraj22', '123456', 'harshraj@gmail.com', 'male', '2018', 'CS', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `chatters`
--

CREATE TABLE `chatters` (
  `name` text NOT NULL,
  `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatters`
--

INSERT INTO `chatters` (`name`, `seen`) VALUES
('nck', '2019-11-11 01:11:07'),
('harshraj22', '2019-11-11 01:13:48'),
('admin', '2019-11-11 01:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `name` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`name`, `msg`) VALUES
('kid1', 'mess problem'),
('kid1', 'hxfgdsajsrhytgrf'),
('nck', 'water'),
('harshraj22', 'Internet is not working');

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
('PH201', 'Physics'),
('ME202', 'Engineering Materials'),
('AI201', 'Artificial Intelligence'),
('CS204', 'Computer Networks'),
('HS101', 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `cs204`
--

CREATE TABLE `cs204` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cs204submissions`
--

CREATE TABLE `cs204submissions` (
  `id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `score*(9/10)` int(10) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hs101`
--

CREATE TABLE `hs101` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hs101submissions`
--

CREATE TABLE `hs101submissions` (
  `id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `score*(9/10)` int(10) NOT NULL,
  `remarks` varchar(200) NOT NULL
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
('ashpro', 'ML203', 'DM302', ''),
('nck', 'ME202', 'PH201', '');

-- --------------------------------------------------------

--
-- Table structure for table `me202`
--

CREATE TABLE `me202` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `me202`
--

INSERT INTO `me202` (`id`, `title`, `date`, `description`, `file_uploads`, `dead_line`) VALUES
(1, 'test 1', '2019-11-10', 'desc', '../courses/ME202/assignments/1/flag.png', '2019-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `me202submissions`
--

CREATE TABLE `me202submissions` (
  `id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `score*(9/10)` int(10) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `msg`, `posted`) VALUES
('nck', 'hiii', '2019-11-10 15:19:23'),
('harshraj22', 'hello', '2019-11-11 01:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `ph201`
--

CREATE TABLE `ph201` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `file_uploads` varchar(50) DEFAULT NULL,
  `dead_line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph201`
--

INSERT INTO `ph201` (`id`, `title`, `date`, `description`, `file_uploads`, `dead_line`) VALUES
(1, 'test assignment', '2019-11-10', 'git', '../courses/PH201/assignments/1/git_tig.png', '2019-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `ph201submissions`
--

CREATE TABLE `ph201submissions` (
  `id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `score*(9/10)` int(10) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph201submissions`
--

INSERT INTO `ph201submissions` (`id`, `user_id`, `file_path`, `comments`, `score*(9/10)`, `remarks`) VALUES
(1, 'kid1', '../courses/PH201/submissions/1/kid1/transcript.png', 'text here...', 10, ''),
(1, 'kid1', '../courses/PH201/submissions/1/kid1/dogsss.jpg', 'qwerty', 10, ''),
(1, 'ravikiran', '../courses/PH201/submissions/1/ravikiran/flag.png', 'dfaghdgf', 10, ''),
(1, 'kid1', '../courses/PH201/submissions/1/kid1/challenge.c', 'c program', 10, ''),
(1, 'kid1', '../courses/PH201/submissions/1/kid1/git_tig.png', 'text here...', 10, ''),
(1, 'kid1', '../courses/PH201/submissions/1/kid1/git_tig.png', 'text here...', 10, '');

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
('kid1', 'PH201', 'T101', '', '', '', '', '', '', '', ''),
('ravikiran', 'PH201', 'T101', '', '', '', '', '', '', '', ''),
('idev', 'DM302', 'DM302', 'CS213', '', '', '', '', '', '', ''),
('idev', 'ME202', 'AI201', 'PH201', '', '', '', '', '', '', ''),
('harshraj22', 'PH201', 'HS101', 'CS204', 'ME202', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai201`
--
ALTER TABLE `ai201`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs204`
--
ALTER TABLE `cs204`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs101`
--
ALTER TABLE `hs101`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `me202`
--
ALTER TABLE `me202`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph201`
--
ALTER TABLE `ph201`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai201`
--
ALTER TABLE `ai201`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cs204`
--
ALTER TABLE `cs204`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hs101`
--
ALTER TABLE `hs101`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `me202`
--
ALTER TABLE `me202`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ph201`
--
ALTER TABLE `ph201`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
