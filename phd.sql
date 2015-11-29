-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2015 at 01:57 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `department`, `fname`, `email`, `designation`, `r_int`, `url`, `dob`, `phone`, `faculty_code`, `def`) VALUES
(1, 'COE', 'Dr. Deepak Garg', 'dgarg@thapar.edu', 'Associate Professor', 'Machine Learning and Data Analytics, Algorithms and Data Structures, Data Mining and Pattern Discovery', 'www.gdeepak.com', '0000-00-00', '0', 'DG', 1),
(2, 'COE', 'Dr. Parteek Bhatia', 'parteek.bhatia@thapar.edu', 'Assistant Professor', 'Natural Language Processing, Information Systems, Computing Methodologies', 'https://sites.google.com/site/parteekbhatia/', '0000-00-00', '0', 'PBH', 1),
(3, 'COE', 'Harkiran Kaur', 'harkiran.kaur@thapar.edu', 'Lecturer', 'Information systems, Web Semantics, Human-centered computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=437:ms-harkiran-kaur', '0000-00-00', '0', 'HK', 1),
(4, 'COE', 'Tarunpreet Bhatia', 'tarunpreet@thapar.edu', 'Lecturer', 'Wireless Networks, Sensor Networks, Network Routing and Security', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=440:ms-tarunpreet-bhatia', '0000-00-00', '0', 'TBH', 1),
(5, 'COE', 'Dr. Sushma Jain', 'sjain@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Network architectures, Network protocols and Network algorithms', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=237:dr-sushma-jain', '0000-00-00', '0', 'SJ', 1),
(6, 'COE', 'Ashish Girdhar', 'ashish.girdhar@thapar.edu', 'Lecturer', 'Data Structure, Soft Computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=504:ashish-girdhar', '0000-00-00', '0', 'AG', 1),
(7, 'COE', 'Dr. Shivani Goel', 'shivani@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Algorithms, Software Engineering and Software Reuse', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=233:dr-shivani-goel', '0000-00-00', '0', 'SGO', 1),
(9, 'COE', 'Karamjeet Kaur Cheema', 'karamjeet@thapar.edu', 'Assistant Professor', 'Machine LEarning', 'http://www.me.com', '2013-10-28', '7696051994', 'KJK', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `role`, `_id`, `password`, `full_name`, `phone`, `email`) VALUES
(2, 'admin', 'akshit', '$1$sa5.FC/.$5mbA2ZielWm5uOkkhy7ZA0', 'Akshit Arora', '+917696061995', ''),
(19, 'student', '1000000081', '$1$60..Vc3.$k/znCgj3Y4qlunDH9kCX51', 'aksfd', '+91859684959', 'dsfklj@gmail.com'),
(20, 'student', '1000000089', '$1$tQ5.y33.$SUIY.rwHlISqZI0uBMh/s/', 'kirti aggarwal', '+91859684959', 'testing@testing.com'),
(21, 'student', '1000000040', '$1$4t/.5U4.$BH6B9bgK4Shxc7.4FYVuT0', 'testing', '+91859684959', 'testing@testing.com');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `sno` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `urbdate` date DEFAULT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`sno`, `sid`, `urbdate`, `percentage`) VALUES
(1, 1000000081, NULL, 44),
(2, 1000000089, NULL, 33),
(3, 1000000040, NULL, 66);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_book`
--

INSERT INTO `research_book` (`rid`, `chapter_title`, `authors`, `publisher`, `page_numbers`, `book_publish_year`, `book_isbn`, `sid`, `status`) VALUES
(1, 'sfkdljs', 'njkf', 'dsjfk', 'kslnfj', 2004, 0, 950903030, 'dmsfakj');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_conference`
--

INSERT INTO `research_conference` (`rid`, `title`, `people`, `conference_name`, `conference_date`, `conference_location`, `status`, `sid`) VALUES
(1, 'dsfdg', 'fjkg', 'dfkljk', '0000-00-00', 'dsmf,dk', 'Accepted', 950903030);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_journal`
--

INSERT INTO `research_journal` (`rid`, `title`, `authors`, `journal_name`, `journal_volume`, `journal_no`, `publish_date`, `journal_pages`, `status`, `sid`, `journal_impact`) VALUES
(1, 'haha', 'testihgdso', 'dksjakf', 1, 3, '0000-00-00', '1203', 'Accepted', 1000000002, 1.23),
(2, 'haha', 'testihgdso', 'dksjakf', 1, 3, '2015-02-01', '1203', 'Accepted', 1000000002, 1.23),
(3, 'hdhh', 'lsdkfaj', 'kdjfkg', 1, 3, '2014-11-29', 'dsklfjh', 'Published', 1000000003, 1.34),
(4, 'hdhh', 'lsdkfaj', 'kdjfkg', 1, 3, '2014-11-29', 'dsklfjh', 'Published', 1000000003, 1.34);

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
('1415EVESEM', 2015, 0),
('1415ODDSEM', 2014, 1),
('1516EVESEM', 2016, 0),
('1516ODDSEM', 2015, 1),
('1617ODDSEM', 2016, 1);

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
  `chair` varchar(500) NOT NULL,
  `supervisor1` varchar(500) NOT NULL,
  `supervisor2` varchar(500) NOT NULL,
  `cognate1` varchar(500) NOT NULL,
  `cognate2` varchar(500) NOT NULL,
  `outside` varchar(500) NOT NULL,
  `def` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `timestamp`, `regno`, `sname`, `full_part`, `status`, `sdob`, `semail`, `sbranch`, `sdoa`, `sdurb`, `sthesis`, `sphone`, `chair`, `supervisor1`, `supervisor2`, `cognate1`, `cognate2`, `outside`, `def`) VALUES
(10, '2015-11-28 23:56:51', 1000000081, 'aksfd', 'full', 'Ongoing', '1995-03-02', 'dsfklj@gmail.com', 'ECE', '2013-09-30', '2014-10-30', 'fk.jdgsh', '+91859684959', 'Dr. Deepak Garg', '', 'Tarunpreet Bhatia', 'Karamjeet Kaur Cheema', 'Ashish Girdhar', 'Dr. Parteek Bhatia', 1),
(11, '2015-11-28 23:58:52', 1000000089, 'kirti aggarwal', 'full', 'Ongoing', '1997-10-30', 'testing@testing.com', 'COE', '2014-10-30', '2015-10-30', 'klfje', '+91859684959', 'Dr. Deepak Garg', '', 'NULL', 'Dr. Deepak Garg', 'NULL', 'Dr. Deepak Garg', 1),
(12, '2015-11-29 00:02:09', 1000000040, 'testing', 'full', 'Ongoing', '1992-10-30', 'testing@testing.com', 'MTX', '2014-10-30', '2015-11-30', 'sdlsklj', '+91859684959', 'Dr. Parteek Bhatia', 'Dr. Deepak Garg', 'NULL', 'Dr. Deepak Garg', 'NULL', 'Dr. Deepak Garg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`), ADD UNIQUE KEY `sregno` (`sregno`,`cname`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `research_book`
--
ALTER TABLE `research_book`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `research_conference`
--
ALTER TABLE `research_conference`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `research_journal`
--
ALTER TABLE `research_journal`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
