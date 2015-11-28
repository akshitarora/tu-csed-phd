-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 07:57 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phd`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `simpleproc`()
BEGIN
SELECT COUNT(*) FROM login;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sregno` int(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `coordinator` varchar(400) NOT NULL,
  `credits` float NOT NULL,
  `L` float NOT NULL,
  `T` float NOT NULL,
  `P` float NOT NULL,
  `semcode` varchar(10) NOT NULL,
  `department` varchar(4) NOT NULL,
  `class` varchar(10) NOT NULL,
  `grade` varchar(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `timestamp`, `sregno`, `cname`, `coordinator`, `credits`, `L`, `T`, `P`, `semcode`, `department`, `class`, `grade`) VALUES
(1, '2015-11-17 06:57:09', 1000000002, 'Database Management Systems', '', 4, 0, 0, 0, '1516ODDSEM', 'COE', 'UG', 'A'),
(3, '2015-11-17 06:57:09', 2147483647, 'Computer Graphics', '', 4, 0, 0, 0, '1516ODDSEM', 'COE', 'UG', NULL),
(10, '2015-11-28 12:54:46', 1000000013, 'HTML', 'Dr. Parteek Bhatia', 5.5, 2, 1.5, 2, '1516ODDSEM', 'ECE', 'PG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doc_comm`
--

CREATE TABLE IF NOT EXISTS `doc_comm` (
  `pno` int(11) NOT NULL,
  `chairman_fid` varchar(300) NOT NULL,
  `supervisor_1_fid` varchar(300) NOT NULL,
  `supervisor_2_fid` varchar(300) DEFAULT NULL,
  `inside_1_fid` varchar(300) NOT NULL,
  `inside_2_fid` varchar(300) NOT NULL,
  `outside_fid` varchar(300) NOT NULL,
  `other_dept_fid` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_comm`
--

INSERT INTO `doc_comm` (`pno`, `chairman_fid`, `supervisor_1_fid`, `supervisor_2_fid`, `inside_1_fid`, `inside_2_fid`, `outside_fid`, `other_dept_fid`) VALUES
(1, 'Dr. Deepak Garg', 'Dr. Seema Bawa', NULL, 'Dr. Karamjeet Cheema', 'Dr. Sushma Jain', 'Dr. Kulbir Singh', 'Dr. Seema Bawa'),
(2, 'Dr. Deepak Garg', 'Dr. Parteek Bhatia', 'Dr. Sushma Jain', 'Harkiran Kaur', 'Dr. Karamjeet Cheema', 'Dr. Kulbir Singh', 'Dr. Alpana Aggarwal');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(11) NOT NULL,
  `department` varchar(4) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `r_int` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `faculty_code` varchar(4) NOT NULL,
  `def` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `department`, `fname`, `email`, `designation`, `r_int`, `url`, `dob`, `phone`, `faculty_code`, `def`) VALUES
(1, 'COE', 'Dr. Deepak Garg', 'dgarg@thapar.edu', 'Associate Professor & Head', 'Machine Learning and Data Analytics, Algorithms and Data Structures, Data Mining and Pattern Discovery', 'www.gdeepak.com', '0000-00-00', '0', 'DG', 1),
(2, 'COE', 'Dr. Parteek Bhatia', 'parteek.bhatia@thapar.edu', 'Assistant Professor', 'Natural Language Processing, Information Systems, Computing Methodologies', 'https://sites.google.com/site/parteekbhatia/', '0000-00-00', '0', 'PBH', 1),
(3, 'COE', 'Harkiran Kaur', 'harkiran.kaur@thapar.edu', 'Lecturer', 'Information systems, Web Semantics, Human-centered computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=437:ms-harkiran-kaur', '0000-00-00', '0', 'HK', 1),
(4, 'COE', 'Tarunpreet Bhatia', 'tarunpreet@thapar.edu', 'Lecturer', 'Wireless Networks, Sensor Networks, Network Routing and Security', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=440:ms-tarunpreet-bhatia', '0000-00-00', '0', 'TBH', 1),
(5, 'COE', 'Dr. Sushma Jain', 'sjain@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Network architectures, Network protocols and Network algorithms', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=237:dr-sushma-jain', '0000-00-00', '0', 'SJ', 1),
(6, 'COE', 'Ashish Girdhar', 'ashish.girdhar@thapar.edu', 'Lecturer', 'Data Structure, Soft Computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=504:ashish-girdhar', '0000-00-00', '0', 'AG', 1),
(7, 'COE', 'Dr. Shivani Goel', 'shivani@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Algorithms, Software Engineering and Software Reuse', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=233:dr-shivani-goel', '0000-00-00', '0', 'SGO', 1),
(9, 'COE', 'Karamjeet Kaur Cheema', 'karamjeet@thapar.edu', 'Assistant Professor', 'Machine LEarning', 'http://www.me.com', '2013-10-28', '7696051994', 'KJK', 1),
(20, 'ECE', 'shod', 'sam@gmail.com', 'Associate Professor and Head of Department', 'boss', 'http://boss.com', '2015-01-01', '9827344939', 'sam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sno` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `_id` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `role`, `_id`, `password`, `full_name`, `phone`, `email`) VALUES
(2, 'admin', 'akshit', '$1$sa5.FC/.$5mbA2ZielWm5uOkkhy7ZA0', 'Akshit Arora', '+917696061995', ''),
(3, 'student', '1000000002', '$1$Nb0.Sy/.$OvuFgBs2Q03pJ6eduasB70', 'Akshit Arora', '', ''),
(4, 'faculty', 'KJK', '$1$mm..1E3.$eiSyEJZAUZyYFI.h9ienQ/', 'Karamjeet Kaur Cheema', '7696051994', 'karamjeet@thapar.edu'),
(7, 'admin', 'ankit', '$1$K9/.LZ4.$hSFHp/G4dCKyOBa9Lm.zz.', 'ankit goyal', '8769604995', 'ankit@thapar.edu'),
(8, 'admin', 'abhinav', '$1$ka3.d...$E5grU9yN5OdZ9kIX/y2QQ1', 'Abhinav Garg', '9988121169', 'abhinav_garg01@gmail.com'),
(9, 'admin', 'chahak', '$1$kE/.dW4.$eISfw.X5KbfzkzEfgy6Vf/', 'Chahak Gupta', '+919041114525', 'chahak@gupta.com'),
(10, 'student', '1000000003', '$1$uJ2.f25.$NKKDbTzpkycwYp2T66kiC/', 'AksA', '7696061995', 'akshitarora@gmail.com'),
(13, 'faculty', 'sam', '$1$.b5.tP..$Kx9t7aNgdw3zvfhFUnS840', 'shod', '9827344939', 'sam@gmail.com'),
(14, 'admin', 'bart', '$1$1v...B4.$JOkZUT3/9TOzcd/yIVV6w1', 'bartaz', '+914561237895', 'bart@me.com'),
(15, 'student', '1000000007', '$1$zt/.At3.$Tq5gpU7kswfbYXkS/5RFS/', 'testing', '+916875984092', 'testing@testing.com'),
(16, 'student', '1000000013', '$1$pl2.8E4.$ECQSRnOX.T.rq4P4d2IzA1', 'testing1', '+91859684959', 'aks@gm.com');

-- --------------------------------------------------------

--
-- Table structure for table `outside_faculty`
--

CREATE TABLE IF NOT EXISTS `outside_faculty` (
  `ofid` int(11) NOT NULL,
  `ofname` varchar(100) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `ofemail` varchar(300) DEFAULT NULL,
  `ofphone` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outside_faculty`
--

INSERT INTO `outside_faculty` (`ofid`, `ofname`, `institute`, `designation`, `ofemail`, `ofphone`) VALUES
(3, 'Dr. Sanjay Sharma', '', '', NULL, NULL),
(4, 'Dr. Kulbir Singh', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `sno` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `sno` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `semcode` varchar(7) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_book`
--

CREATE TABLE IF NOT EXISTS `research_book` (
  `rid` int(11) NOT NULL,
  `chapter_title` varchar(500) NOT NULL,
  `authors` varchar(500) NOT NULL,
  `publisher` varchar(600) NOT NULL,
  `page_numbers` varchar(10) NOT NULL,
  `book_publish_year` int(5) NOT NULL,
  `book_isbn` int(14) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_conference`
--

CREATE TABLE IF NOT EXISTS `research_conference` (
  `rid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `people` varchar(500) NOT NULL,
  `conference_name` varchar(300) NOT NULL,
  `conference_date` date NOT NULL,
  `conference_location` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_journal`
--

CREATE TABLE IF NOT EXISTS `research_journal` (
  `rid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `authors` varchar(500) NOT NULL,
  `journal_name` varchar(300) NOT NULL,
  `journal_volume` int(11) NOT NULL,
  `journal_no` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `journal_pages` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `sid` int(11) NOT NULL,
  `journal_impact` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semcode` varchar(11) NOT NULL,
  `year` int(4) NOT NULL,
  `odd` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semcode`, `year`, `odd`) VALUES
('1516ODDSEM', 2015, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `regno` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `full_part` varchar(5) NOT NULL,
  `status` varchar(300) NOT NULL,
  `sdob` date NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sbranch` varchar(4) DEFAULT NULL,
  `sdoa` date NOT NULL,
  `sdurb` date NOT NULL,
  `sthesis` varchar(500) NOT NULL,
  `sphone` varchar(200) NOT NULL,
  `comm_id` int(11) DEFAULT NULL,
  `slid` varchar(300) DEFAULT NULL,
  `def` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `timestamp`, `regno`, `sname`, `full_part`, `status`, `sdob`, `semail`, `sbranch`, `sdoa`, `sdurb`, `sthesis`, `sphone`, `comm_id`, `slid`, `def`) VALUES
(1, '2015-10-05 16:59:26', 2147483647, 'Pradeep Arora', 'full', 'Coursework', '1989-08-05', 'engg.pardeeparora@gmail.com', 'COE', '2010-08-01', '2012-04-27', 'Mobile Agent Based Regression Test Case Generation', '988838670', 1, '1', 1),
(2, '2015-10-05 17:02:30', 950903030, 'Kirti Wanjale', 'full', 'Coursework', '1989-07-21', 'kwanjale@yahoo.com', 'COE', '2010-06-05', '2010-10-20', 'Design of framework for Intelligent Particle Filter Based CBIR System', '955293391', 1, '1', 1),
(4, '2015-10-14 08:01:04', 1000000002, 'Akshit Arora', 'full', 'URB Pending', '2013-10-29', 'akshitarora@gmail.com', 'ECE', '2013-11-30', '2013-10-29', 'Mobile Netowrk', '1000000005', 0, '1', 1),
(5, '2015-10-15 17:50:17', 1000000003, 'AksA', 'part', 'Coursework', '2015-01-01', 'akshitarora@gmail.com', 'fdjs', '2015-01-02', '2015-01-01', 'lsdk', '7696061995', 0, '0', 1),
(6, '2015-11-27 16:23:49', 1000000007, 'testing', 'full', 'Coursework', '1994-02-02', 'testing@testing.com', 'COE', '2013-02-02', '0000-00-00', 'NULL', '+916875984092', NULL, 'NULL', 1),
(7, '2015-11-28 12:42:41', 1000000013, 'testing1', 'full', 'Coursework', '1993-11-30', 'aks@gm.com', 'ECE', '2012-10-30', '0000-00-00', 'NULL', '+91859684959', 0, 'NULL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stu_course`
--

CREATE TABLE IF NOT EXISTS `stu_course` (
  `SrNo` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_course`
--

INSERT INTO `stu_course` (`SrNo`, `sno`, `cid`) VALUES
(1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`), ADD UNIQUE KEY `sregno` (`sregno`,`cname`);

--
-- Indexes for table `doc_comm`
--
ALTER TABLE `doc_comm`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`), ADD UNIQUE KEY `faculty_code` (`faculty_code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `outside_faculty`
--
ALTER TABLE `outside_faculty`
  ADD PRIMARY KEY (`ofid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`sno`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `research_book`
--
ALTER TABLE `research_book`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `research_conference`
--
ALTER TABLE `research_conference`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `research_journal`
--
ALTER TABLE `research_journal`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semcode`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`), ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `stu_course`
--
ALTER TABLE `stu_course`
  ADD PRIMARY KEY (`SrNo`), ADD UNIQUE KEY `sno` (`sno`,`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `doc_comm`
--
ALTER TABLE `doc_comm`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `outside_faculty`
--
ALTER TABLE `outside_faculty`
  MODIFY `ofid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `research_conference`
--
ALTER TABLE `research_conference`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `research_journal`
--
ALTER TABLE `research_journal`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `stu_course`
--
ALTER TABLE `stu_course`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
