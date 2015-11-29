-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2015 at 12:00 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `timestamp`, `sregno`, `cname`, `coordinator`, `credits`, `L`, `T`, `P`, `semcode`, `department`, `class`, `grade`) VALUES
(1, '2015-11-29 08:37:23', 1000000004, 'Web Technologies', 'Dr. Sushma Jain', 5, 1, 2, 2, '1516ODDSEM', 'COE', 'UG', 'C');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `role`, `_id`, `password`, `full_name`, `phone`, `email`) VALUES
(2, 'admin', 'akshit', '$1$sa5.FC/.$5mbA2ZielWm5uOkkhy7ZA0', 'Akshit Arora', '+917696061995', ''),
(22, 'student', '1000000004', '$1$tW1.yH1.$HhtwYqkNp8vctMrUs7HcP0', 'akshit', '+91859684959', 'aks@gm.com'),
(23, 'student', '1000000012', '$1$SE/.zH4.$.IcfHKB2JXg5rhWuMDVlv.', 'test1234', '+91859684959', 'testing@testing.com'),
(24, 'student', '1000000005', '$1$A94.JY4.$6KRm1A7gBcuv1quabdbJj/', 'test', '+91859684959', 'akshit.arora1995@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `sno` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `urbdate` date DEFAULT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`sno`, `sid`, `urbdate`, `percentage`) VALUES
(4, 1000000004, '2012-02-01', 0),
(5, 1000000012, '2013-10-30', 33),
(6, 1000000005, '2013-12-29', 4);

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
('1415EVESEM', 2015, 0),
('1415ODDSEM', 2014, 1),
('1516EVESEM', 2016, 0),
('1516ODDSEM', 2015, 1),
('1617ODDSEM', 2016, 1),
('1718EVESEM', 2018, 0),
('1920EVESEM', 2020, 0),
('1920ODDSEM', 2019, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `timestamp`, `regno`, `sname`, `full_part`, `status`, `sdob`, `semail`, `sbranch`, `sdoa`, `sdurb`, `sthesis`, `sphone`, `chair`, `supervisor1`, `supervisor2`, `cognate1`, `cognate2`, `outside`, `def`) VALUES
(13, '2015-11-29 08:36:45', 1000000004, 'akshit', 'full', 'Synopsis Submitted', '1996-03-01', 'aks@gm.com', 'COE', '2012-02-01', '2014-10-29', 'dksjkh', '+91859684959', 'Dr. Deepak Garg', 'Dr. Deepak Garg', 'NULL', 'Dr. Deepak Garg', 'NULL', 'Dr. Sushma Jain', 1),
(14, '2015-11-29 10:14:05', 1000000012, 'test1234', 'full', 'Synopsis Submitted', '1987-11-30', 'testing@testing.com', 'COE', '2012-10-30', '2013-10-30', 'Mobile Application Development', '+91859684959', 'Dr. Deepak Garg', 'Ashish Girdhar', 'Dr. Parteek Bhatia', 'Dr. Sushma Jain', 'Dr. Sushma Jain', 'Ashish Girdhar', 1),
(15, '2015-11-29 10:23:14', 1000000005, 'test', 'full', 'Synopsis Submitted', '1997-03-01', 'akshit.arora1995@gmail.com', 'COE', '2012-10-28', '2013-12-29', 'MAPREDUCE', '+91859684959', 'Dr. Deepak Garg', 'Dr. Sushma Jain', 'Karamjeet Kaur Cheema', 'Harkiran Kaur', 'Tarunpreet Bhatia', 'Karamjeet Kaur Cheema', 1);

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
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `research_book`
--
ALTER TABLE `research_book`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
