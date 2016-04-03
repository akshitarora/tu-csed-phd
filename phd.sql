-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2016 at 06:43 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `timestamp`, `sregno`, `cname`, `coordinator`, `credits`, `L`, `T`, `P`, `semcode`, `department`, `class`, `grade`) VALUES
(1, '2015-11-29 08:37:23', 1000000004, 'Web Technologies', 'Dr. Sushma Jain', 5, 1, 2, 2, '1516ODDSEM', 'COE', 'UG', 'C'),
(2, '2015-11-29 14:07:26', 1000000046, 'DBMS', 'Tarunpreet Bhatia', 4, 1, 1.5, 1.5, '1516ODDSEM', 'COE', 'UG', 'A+'),
(3, '2016-03-25 14:05:04', 123453543, 'DBMS', 'Dr. Shivani Goel', 5, 3, 2, 0, '1415ODDSEM', 'CSED', 'UG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `sno` int(11) NOT NULL,
  `dpt_name` varchar(300) NOT NULL,
  `dpt_code` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`sno`, `dpt_name`, `dpt_code`) VALUES
(15, 'Department of Computer Science and Engineering', 'CSED'),
(2, 'Electronics and Telecommunication Department', 'E&CE'),
(3, 'School of Mathematics', 'SOM'),
(5, 'Electronics and Communication Engineering Department', 'ECED'),
(6, 'Chemical Engineering', 'ChE'),
(7, 'Electrical and Instrumentation Engineering', 'EIE'),
(8, 'Mechanical Engineering Department', 'MED'),
(9, 'Civil Engineering', 'CE');

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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `department`, `fname`, `email`, `designation`, `r_int`, `url`, `dob`, `phone`, `faculty_code`, `def`) VALUES
(1, 'CSED', 'Dr. Deepak Garg', 'dgarg@thapar.edu', 'Associate Professor', 'Machine Learning and Data Analytics, Algorithms and Data Structures, Data Mining and Pattern Discovery', 'http://www.gdeepak.com', '2022-07-21', '0', 'DG', 1),
(2, 'COE', 'Dr. Parteek Bhatia', 'parteek.bhatia@thapar.edu', 'Assistant Professor', 'Natural Language Processing, Information Systems, Computing Methodologies', 'https://sites.google.com/site/parteekbhatia/', '0000-00-00', '0', 'PBH', 1),
(3, 'COE', 'Harkiran Kaur', 'harkiran.kaur@thapar.edu', 'Lecturer', 'Information systems, Web Semantics, Human-centered computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=437:ms-harkiran-kaur', '0000-00-00', '0', 'HK', 1),
(4, 'COE', 'Tarunpreet Bhatia', 'tarunpreet@thapar.edu', 'Lecturer', 'Wireless Networks, Sensor Networks, Network Routing and Security', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=440:ms-tarunpreet-bhatia', '0000-00-00', '0', 'TBH', 1),
(5, 'COE', 'Dr. Sushma Jain', 'sjain@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Network architectures, Network protocols and Network algorithms', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=237:dr-sushma-jain', '0000-00-00', '0', 'SJ', 1),
(6, 'COE', 'Ashish Girdhar', 'ashish.girdhar@thapar.edu', 'Lecturer', 'Data Structure, Soft Computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=504:ashish-girdhar', '0000-00-00', '0', 'AG', 1),
(7, 'COE', 'Dr. Shivani Goel', 'shivani@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Algorithms, Software Engineering and Software Reuse', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=233:dr-shivani-goel', '0000-00-00', '0', 'SGO', 1),
(9, 'COE', 'Karamjeet Kaur Cheema', 'karamjeet@thapar.edu', 'Assistant Professor', 'Machine LEarning', '', '2013-10-28', '7696051994', 'KJK', 1),
(10, 'COE', 'Dr. Ajay Kumar Laura', 'ajaykumar@thapar.edu', 'Assistant Professor', 'Theoretical Computer Science and Software Testing', '', '0000-00-00', '9417192867', 'AKU', 1),
(11, 'COE', 'Dr. Anil Kumar Verma', 'akverma@thapar.edu', 'Associate Professor', 'Wireless Networks, Routing Algorithms and Securing Ad Hoc Networks', '', '0000-00-00', '9888601667', 'AKV', 1),
(12, 'COE', 'Dr. Anju Sharma', 'anjusharma@thapar.edu', 'Lecturer', 'Parallel, Distributed, Grid, Cloud and Cultural Computing', '', '0000-00-00', '9888997297', 'tu1', 1),
(13, 'COE', 'Dr. Anju Bala', 'anjubala@thapar.edu', 'Assistant Professor', 'Cloud Computing', '', '0000-00-00', '9417205339', 'tu2', 1),
(14, 'COE', 'Dr. Ashutosh Mishra', 'ashutosh.mishra@thapar.edu', 'Assistant Professor', 'Software Engineering, Intelligent Computing Methods and Database', '', '0000-00-00', '8437810985', 'tu3', 1),
(15, 'COE', 'Dr. Damandeep Kaur', 'damandeep.kaur@thapar.edu', 'Assistant Professor', 'Grid and Cloud computing, Software Engineering, Software Project Management', '', '0000-00-00', '9872403579', 'tu4', 1),
(16, 'COE', 'Dr. Husanbir Singh Pannu', 'hspannu@thapar.edu', 'Lecturer', 'Machine Learning and Cloud Computing', '', '0000-00-00', '9478015397', 'tu5', 1),
(17, 'COE', 'Dr. Inderveer Chana', 'inderveer@thapar.edu', 'Associate Professor', 'Grid and Cloud computing, Software Engineering and Software Project Management', '', '0000-00-00', '9417244465', 'tu6', 1),
(18, 'COE', 'Dr. Jhilik Bhattacharya', 'jhilik@thapar.edu', 'Assistant Professor', 'Image Enhancement, Camera Calibration, Feature Detection, Face Recognition, Robot Trajectory Logging', '', '0000-00-00', '8872815477', 'tu7', 1),
(19, 'COE', 'Dr. Maninder Kaur', 'manindersohal@thapar.edu', 'Assistant Professor', 'Evolutionary Algorithms,VLSI physical design automation', '', '0000-00-00', '9872667949', 'tu8', 1),
(20, 'COE', 'Dr. Maninder Singh', 'msingh@thapar.edu', 'Associate Professor', 'Network Security, Grid Computing', '', '0000-00-00', '9815608309', 'tu9', 1),
(21, 'COE', 'Dr. Neeraj Kumar', 'neeraj.kumar@thapar.edu', 'Associate Professor', 'Routing and Security Issues in Wired/Wireless Networks', '', '0000-00-00', '8872540189', 'tu10', 1),
(22, 'COE', 'Dr. Prashant S Rana', 'prashant.singh@thapar.edu', 'Assistant Professor', 'Machine Learning and Data Mining, Modelling and Simulation, Parallel Algorithms', '', '0000-00-00', '9855764471', 'tu11', 1),
(23, 'COE', 'Dr. Rajesh Kumar', 'rakumar@thapar.edu', 'Associate Professor', 'Fracture Mechanics, Computer Networks, Cloud Computing, Software Engineering', '', '0000-00-00', '9815609687', 'tu12', 1),
(24, 'COE', 'Dr. Rajiv Kumar', 'rkumar@thapar.edu', 'Assistant Professor', 'Component Based Software Development', '', '0000-00-00', '9888260602', 'tu13', 1),
(25, 'COE', 'Dr. Ravinder Kumar', 'ravinder@thapar.edu', 'Assistant Professor', 'Combinatorial Optimization, Approximation Algorithm, Algorithms and Mathematical Programming', '', '0000-00-00', '9814922100', 'tu14', 1),
(26, 'COE', 'Dr. Rinkle Rani', 'raggarwal@thapar.edu', 'Assistant Professor', 'Networks, Databases and Algorithms', '', '0000-00-00', '9915554748', 'tu15', 1),
(27, 'COE', 'Dr. Rupali Bhardwaj', 'rupali.bhardwaj@thapar.edu', 'Assistant Professor', 'Cellular Automata, Cryptography, Data mining', '', '0000-00-00', '8283819720', 'tu16', 1),
(28, 'COE', 'Dr. Shalini Batra', 'sbatra@thapar.edu', 'Assistant Professor', 'Compiler Construction, Computer Networks, Semantics and Machine Learning', '', '0000-00-00', '9876173704', 'tu17', 1),
(29, 'COE', 'Dr. Sharad Saxena', 'sharad.saxena@thapar.edu', 'Assistant Professor', 'Ad-hoc networks, Wireless Sensor Networks', '', '0000-00-00', '8195098711', 'tu18', 1),
(30, 'COE', 'Dr. Shivani Goel', 'shivani@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Algorithms, Software Engineering and Software Reuse', '', '0000-00-00', '9915599654', 'tu19', 1),
(31, 'COE', 'Dr. Singara Singh', 'singara@thapar.edu', 'Assistant Professor', 'Image and Video compression, Data Security', '', '0000-00-00', '9876293474', 'tu20', 1),
(32, 'COE', 'Dr. Sushma Jain', 'sjain@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Network architectures, Network protocols and Network algorithms', '', '0000-00-00', '9878235025', 'tu21', 1),
(33, 'COE', 'Dr. V.P.  Singh Kaushal', 'vpsingh@thapar.edu', 'Assistant Professor', 'Computing, Computer Networks, Computer Forensics and Cyber Law', '', '0000-00-00', '9872011326', 'tu22', 1),
(34, 'COE', 'Dr. Vijay Kumar', 'vijay_kumar@thapar.edu', 'Assistant Professor', 'Data Clustering, Metaheuristic Techniques, Pattern Recognition', '', '0000-00-00', '7073169619', 'tu23', 1),
(35, 'ECE', 'Dr. Kulbir Singh', 'ksingh@thapar.edu', 'Associate Professor', 'Digital Signal Processing, Fractional Fourier Transform, Digital Image Processing', '', '0000-00-00', '0123456789', 'tu24', 1),
(36, 'COE', 'Dr. Sanjay Kumar Jain', 'skjain@thapar.edu', 'Associate Professor', 'Power Systems', '', '0000-00-00', '0123456789', 'tu25', 1),
(37, 'COE', 'Dr. Pritpal Singh', 'pritpal.singh@thapar.edu', 'Lecturer', 'Fuzzy Logic, Artificial Neural Network, Rough Sets, Time Series Data Analysis &amp;amp; Prediction (especially weather and share stock price), Climate Modeling, &amp;amp; Grey Modeling', '', '0000-00-00', '0123456789', 'tu26', 1),
(38, 'COE', 'Dr. Sanmeet Kaur Bhatia', 'sanmeet.bhatia@thapar.edu', 'Assistant Professor', 'Software Engineering, Network Security', '', '0000-00-00', '9876075046', 'tu27', 1),
(39, 'ECE', 'Dr. Rajesh Khanna', 'rkhanna@thapar.edu', 'Associate Professor', 'Antenna design for heterogeneous networks', '', '0000-00-00', '0123456789', 'tu28', 1),
(40, 'COE', 'Dr. R.K. Sharma', 'rksharma@thapar.edu', 'Associate Professor', 'Statistical Computing, Pattern Recognition, NLP', '', '0000-00-00', '0123456789', 'tu29', 1),
(41, 'COE', 'Dr. Seema Bawa', 'seema@thapar.edu', 'Associate Professor', 'Engineering, Network Security, Parallel, Distributed, Grid and Cloud Computing', '', '0000-00-00', '0123456789', 'tu30', 1),
(42, 'COE', 'Dr. Rajesh Bhatia', 'rbhatia@pec.ac.in', 'Associate Professor', 'SOFTWARE ENGINEERING, SOFTWARE TESTING, SOFTWARE CLONE DETECTION', '', '0000-00-00', '0123456789', 'tu31', 1),
(43, 'CSED', 'Dr. L. R. Raheja', 'abc@gmail.com', 'Associate Professor', 'NIL', '', '0000-00-00', '0123456789', 'tu33', 1),
(44, 'E&am', 'Dr. V. L. Patil', 'patilvl.works@gmail.com', 'Associate Professor', 'Process Control, Instrumentation, Computer &amp;amp; Telecommunication Network, Electronics Product Design', '', '0000-00-00', '0123456789', 'tu34', 1),
(45, 'E&am', 'Dr. Aditya Abhyankar', 'aditya.abhyankar@unipune.ac.in', 'Associate Professor', 'signal and image processing, pattern recognition, wavelet analysis, biometric systems and bioinformatics, machine learning, computer vision, data analytics etc', '', '2000-01-01', '0123456789', 'tu35', 1),
(46, 'SOM', 'Dr. Rajesh Kumar Gupta', 'rajeshgupta@thapar.edu', 'Assistant Professor', 'Nonlinear Partial Differential Equations, Lie Group Theory, Exact Solutions &amp;amp; Symmetries for Nonlinear Systems, Einstein Maxwell Field Equations &amp;amp; Equations from Mathematical Physics, ', '', '2000-01-01', '0123456789', 'tu36', 1),
(47, 'SOM', 'Dr. Mahesh Kumar Sharma', 'mksharma@thapar.edu', 'Associate Professor', 'Theoretical Astrophysics', '', '2000-01-01', '0123456789', 'tu37', 1),
(49, 'CSED', 'Dr. Ajay Rana', 'ajay_rana@amity.edu', 'Associate Professor', 'NIL', '', '2000-01-01', '9891374031', 'tu38', 1),
(50, 'CSED', 'Dr. YOGESH H. DANDAWATE', 'yogesh.dandawate@viit.ac.in', 'Associate Professor', 'Signal and Image Processing, Microcontrollers, Embedded Systems, Soft Computing,Pattern Recognition', '', '0000-00-00', '(020)-26950265', 'tu39', 1),
(51, 'ECED', 'Dr. Sanjay Sharma', 'sanjay.sharma@thapar.edu', 'Associate Professor', 'Wireless Communication, Signal Processing, Embedded Systems', '', '0000-00-00', '0123456789', 'tu40', 1),
(52, 'ECED', 'Dr. Amit Kumar Kohli', 'drkohli_iitr@yahoo.co.in', 'Associate Professor', 'Advanced Digital Communication Systems &amp;amp; Advanced Wireless Communication Systems, Adaptive &amp;amp; Statistical Signal Processing, Multirate Signal Processing and Filter Design Techniques, Ne', '', '0000-00-00', '0123456789', 'tu41', 1),
(53, 'ECED', 'Dr. R. S. Kaler', 'rskaler@thapar.edu', 'Associate Professor', 'Fiber Optics Communications, Optical Networks, Optical Sensors, Free Space Optics, Communication Systems.', '', '0000-00-00', '0123456789', 'tu42', 1),
(54, 'ChE', 'Dr. Rakesh Kumar  Gupta', 'rakeshkgupta@thapar.edu', 'Assistant Professor', 'Computational fluid dynamics, fluid flow and heat transfer,  industrial pollution abatement', '', '2000-01-01', '0123456789', 'tu43', 1),
(55, 'CSED', 'Dr. V. P. Agrawal', 'vpagrawal@thapar.edu', 'Associate Professor', 'Machine Design', '', '2000-01-01', '0123456789', 'tu44', 1),
(56, 'SOM', 'Dr. A.K. Lal', 'aklal@thapar.edu', 'Associate Professor', 'Reliability Analysis and Numerical Analysis', '', '2000-01-01', '0123456789', 'tu45', 1),
(57, 'CE', 'Dr. Maneek Kumar', 'maneek@thapar.edu', 'Associate Professor', 'Reliability based design, Concrete Technology, Retrofitting and Rehabilitation', '', '2000-01-01', '0123456789', 'tu46', 1),
(58, 'CSED', 'Dr. Ankur Gupta', 'abc@gmail.com', 'Associate Professor', 'NIL', '', '1900-01-01', '0123456789', 'tu48', 1),
(59, 'EIE', 'Dr. M.D. Singh', 'mdsingh@thapar.edu', 'Assistant Professor', 'Embedded Systems, Biomedical Instrumentation', '', '1900-01-01', '0123456789', 'tu47', 1);

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
  `email` varchar(300) NOT NULL,
  `photo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `role`, `_id`, `password`, `full_name`, `phone`, `email`, `photo`) VALUES
(2, 'admin', 'akshit', '$1$C2..jQ4.$SFL2EVPAlbG.xFyQdmQdO.', 'Akshit Arora', '7696061995', 'akshit.arora1995@gmail.com', 1),
(27, 'admin', 'parteek', '$1$CI9brp9v$G2f00AiW1Xk476efkS3Ou/', 'Parteek Bhatia', '9873644848', 'parteek.bhatia@thapar.edu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sno` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `urbdate` date DEFAULT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`timestamp`, `sno`, `sid`, `urbdate`, `percentage`) VALUES
('2016-03-25 15:06:26', 4, 1000000004, '2012-02-01', 0),
('2016-03-25 15:06:26', 5, 1000000012, '2013-10-30', 33),
('2016-03-25 15:06:26', 6, 1000000005, '2013-12-29', 4),
('2016-03-25 15:06:26', 7, 1000000046, '2013-12-01', 0),
('2016-03-25 15:06:26', 8, 1000000090, '2013-11-30', 0),
('2016-03-25 15:06:26', 9, 1000000000, '0000-00-00', 30),
('2016-03-25 15:06:26', 10, 2147483647, '0000-00-00', 25),
('2016-03-25 15:06:26', 11, 1000000003, '2013-02-01', 0),
('2016-03-25 15:06:26', 12, 951003011, '0000-00-00', 45),
('2016-03-25 15:06:26', 13, 951003002, '0000-00-00', 40),
('2016-03-25 15:06:26', 14, 951003009, '0000-00-00', 50),
('2016-03-25 15:06:26', 15, 951003013, '0000-00-00', 45),
('2016-03-25 15:06:26', 16, 951103002, '0000-00-00', 60),
('2016-03-25 15:06:26', 17, 950903009, '0000-00-00', 85),
('2016-03-25 15:06:26', 18, 950903015, '0000-00-00', 70),
('2016-03-25 15:06:26', 19, 950903011, '0000-00-00', 65),
('2016-03-25 15:06:26', 20, 950903037, '0000-00-00', 60),
('2016-03-25 15:06:26', 21, 950903031, '0000-00-00', 0),
('2016-03-25 15:06:26', 22, 950903030, '2010-10-20', 80),
('2016-03-25 15:06:26', 23, 951003004, '2011-02-22', 85),
('2016-03-25 15:06:26', 24, 951003005, '2011-02-21', 85),
('2016-03-25 15:06:26', 25, 951003006, '2011-02-24', 75),
('2016-03-25 15:06:26', 26, 900903007, '2011-04-15', 70),
('2016-03-25 15:06:26', 27, 950903034, '2011-09-07', 68),
('2016-03-25 15:06:26', 28, 950903033, '2011-09-07', 50),
('2016-03-25 15:06:26', 29, 950903044, '2011-04-26', 92),
('2016-03-25 15:06:26', 30, 901003001, '2011-04-07', 70),
('2016-03-25 15:06:26', 31, 950903046, '2011-05-31', 57),
('2016-03-25 15:06:26', 32, 951003010, '2011-10-21', 85),
('2016-03-25 15:06:26', 33, 950903036, '0000-00-00', 65),
('2016-03-25 15:06:26', 34, 950903039, '0000-00-00', 0),
('2016-03-25 15:06:26', 35, 950903038, '0000-00-00', 50),
('2016-03-25 15:06:26', 36, 950903029, '0000-00-00', 65),
('2016-03-25 15:06:26', 37, 950903047, '0000-00-00', 65),
('2016-03-25 15:06:26', 38, 950903040, '0000-00-00', 35),
('2016-03-25 15:06:26', 39, 951203006, '0000-00-00', 20),
('2016-03-25 15:06:26', 40, 901203006, '0000-00-00', 23),
('2016-03-25 15:06:26', 41, 901203007, '0000-00-00', 40),
('2016-03-25 15:06:26', 42, 901203005, '2013-03-25', 40),
('2016-03-25 15:06:26', 43, 951103003, '2013-03-19', 30),
('2016-03-25 15:06:26', 44, 951103004, '2013-02-05', 40),
('2016-03-25 15:06:26', 45, 951103005, '2013-02-06', 45),
('2016-03-25 15:06:26', 46, 951203002, '2013-09-06', 40),
('2016-03-25 15:06:26', 47, 951203008, '2013-03-25', 25),
('2016-03-25 15:06:26', 48, 951203003, '2013-09-06', 15),
('2016-03-25 15:06:26', 49, 951203004, '2013-03-28', 10),
('2016-03-25 15:06:26', 50, 951103006, '2013-02-05', 30),
('2016-03-25 15:06:26', 51, 951203005, '2013-09-07', 15),
('2016-03-25 15:06:26', 52, 951003014, '2013-02-06', 30),
('2016-03-25 15:06:26', 53, 951203001, '2013-07-16', 30),
('2016-03-25 15:06:26', 54, 901203003, '2013-12-23', 50),
('2016-03-25 15:06:26', 55, 951403001, '2015-05-04', 0),
('2016-03-25 15:06:26', 56, 951303001, '2014-05-27', 13),
('2016-03-25 15:06:26', 57, 901303003, '2014-03-05', 25),
('2016-03-25 15:06:26', 58, 901303002, '2014-07-29', 15),
('2016-03-25 15:06:26', 59, 951303003, '2014-05-28', 15),
('2016-03-25 15:06:26', 60, 901403013, '2015-05-01', 0),
('2016-03-25 15:06:26', 61, 901403001, '2015-05-01', 0),
('2016-03-25 15:06:26', 62, 901203008, '2014-03-05', 35),
('2016-03-25 15:06:26', 63, 901303001, '2014-08-14', 15),
('2016-03-25 15:06:26', 64, 901403009, '2015-05-30', 0),
('2016-03-25 15:06:26', 65, 951303002, '2014-07-29', 10),
('2016-03-25 15:06:26', 66, 901403016, '2015-05-20', 0),
('2016-03-25 15:06:26', 67, 951003009, '2012-04-27', 70),
('2016-03-25 15:06:26', 68, 950903030, '2010-10-20', 85),
('2016-03-25 15:06:26', 69, 951003004, '2011-02-22', 95),
('2016-03-25 15:06:26', 70, 951003005, '2011-02-21', 95),
('2016-03-25 15:06:26', 71, 951003006, '2011-02-24', 90),
('2016-03-25 15:06:26', 72, 900903007, '2011-04-15', 85),
('2016-03-25 15:06:26', 73, 901003001, '2012-04-27', 90),
('2016-03-25 15:06:26', 74, 951003002, '2012-04-27', 70),
('2016-03-25 15:06:26', 75, 950903031, '2010-10-20', 20),
('2016-03-25 15:06:26', 76, 951203006, '2013-02-05', 30),
('2016-03-25 15:06:26', 77, 950903037, '2010-12-17', 75),
('2016-03-25 15:06:26', 78, 951003011, '2012-06-15', 85),
('2016-03-25 15:06:26', 79, 951003013, '2012-06-15', 60),
('2016-03-25 15:06:26', 80, 951403001, '2015-05-04', 15),
('2016-03-25 15:06:26', 81, 951403001, '2015-05-04', 15),
('2016-03-25 15:06:26', 82, 950903034, '2011-09-07', 93),
('2016-03-25 15:06:26', 83, 950903033, '2011-09-07', 70),
('2016-03-25 15:06:26', 84, 901203006, '2013-05-20', 55),
('2016-03-25 15:06:26', 85, 901203007, '2013-05-20', 90),
('2016-03-25 15:06:26', 86, 951303001, '2014-05-27', 35),
('2016-03-25 15:06:26', 87, 901003001, '2011-04-07', 90),
('2016-03-25 15:06:26', 88, 950903046, '2011-05-31', 57),
('2016-03-25 15:06:26', 89, 901203005, '2013-03-25', 75),
('2016-03-25 15:06:26', 90, 901303003, '2014-03-05', 70),
('2016-03-25 15:06:26', 91, 950903036, '2011-02-24', 100),
('2016-03-25 15:06:26', 92, 950903038, '2012-08-09', 57),
('2016-03-25 15:06:26', 93, 901303002, '2014-07-29', 35),
('2016-03-25 15:06:26', 94, 951103004, '2013-02-05', 45),
('2016-03-25 15:06:26', 95, 951103005, '2013-02-06', 65),
('2016-03-25 15:06:26', 96, 951203008, '2013-03-25', 40),
('2016-03-25 15:06:26', 97, 951203003, '2013-09-06', 60),
('2016-03-25 15:06:26', 98, 951303003, '2014-05-28', 25),
('2016-03-25 15:06:26', 99, 901403013, '2015-05-01', 45),
('2016-03-25 15:06:26', 100, 951203004, '2013-03-28', 30),
('2016-03-25 15:06:26', 101, 951103006, '2013-02-05', 35),
('2016-03-25 15:06:26', 102, 951203005, '2013-09-07', 40),
('2016-03-25 15:06:26', 103, 901403001, '2015-05-01', 25),
('2016-03-25 15:06:26', 104, 950903009, '2010-05-10', 90),
('2016-03-25 15:06:26', 105, 950903015, '2010-09-16', 90),
('2016-03-25 15:06:26', 106, 950903029, '2011-02-02', 92),
('2016-03-25 15:06:26', 107, 950903047, '2011-02-17', 80),
('2016-03-25 15:06:26', 108, 950903033, '2011-08-09', 50),
('2016-03-25 15:06:26', 109, 950903040, '2011-10-21', 85),
('2016-03-25 15:06:26', 110, 951003014, '2012-07-13', 75),
('2016-03-25 15:06:26', 111, 951203001, '2013-07-16', 65),
('2016-03-25 15:06:26', 112, 901203008, '2014-03-05', 60),
('2016-03-25 15:06:26', 113, 901303001, '2014-08-14', 57),
('2016-03-25 15:06:26', 114, 901403009, '2015-05-30', 10),
('2016-03-25 15:06:26', 115, 951303002, '2014-07-29', 25),
('2016-03-25 15:06:26', 116, 901403016, '2015-05-20', 25),
('2016-03-25 15:06:26', 117, 901403006, '2015-05-04', 20),
('2016-03-25 15:06:26', 118, 951203010, '2013-07-25', 80),
('2016-03-25 15:06:26', 119, 901403021, '2015-12-10', 15),
('2016-03-25 15:06:26', 120, 901403007, '0000-00-00', 20),
('2016-03-25 15:06:26', 121, 951003001, '2012-04-27', 90),
('2016-03-30 02:27:04', 122, 123, '2016-03-19', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_conference`
--

INSERT INTO `research_conference` (`rid`, `title`, `people`, `conference_name`, `conference_date`, `conference_location`, `status`, `sid`) VALUES
(1, 'test ILS tool', 'A, B, C, D, F', 'AHFE', '2016-02-25', 'Austin, TX, USA', 'Published', 900903007);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_journal`
--

INSERT INTO `research_journal` (`rid`, `title`, `authors`, `journal_name`, `journal_volume`, `journal_no`, `publish_date`, `journal_pages`, `status`, `sid`, `journal_impact`) VALUES
(1, 'testjournal', 'akshit, chahak, abhinav', 'ijcai', 3, 24, '2016-03-01', '2-3', 'Accepted', 950903036, 2.3);

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
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `timestamp`, `regno`, `sname`, `full_part`, `status`, `sdob`, `semail`, `sbranch`, `sdoa`, `sdurb`, `sthesis`, `sphone`, `chair`, `supervisor1`, `supervisor2`, `cognate1`, `cognate2`, `outside`, `def`) VALUES
(20, '2015-12-15 06:16:13', 2147483647, 'Vinay Arora', 'full', 'Synopsis Submitted', '0000-00-00', 'vinay.arora@thapar.edu', 'COE', '0000-00-00', '0000-00-00', 'Slicing Technique for Test Path Generation in Cconcurrent Programs', '0123456789', 'Dr. Deepak Garg', 'Dr. Rajesh Bhatia', 'Dr. Maninder Singh', 'Dr. Seema Bawa', 'Dr. Shalini Batra', 'Dr. Rajesh Kumar', 1),
(29, '2015-12-24 09:43:11', 951003011, 'Sushil Kumar', 'full', 'Ongoing', '0000-00-00', 'sushilyadav.thapar@gmail.com', 'COE', '0000-00-00', '2012-06-15', 'An Efficient Routing Protocol for VANET', '0123456789', 'Dr. Deepak Garg', 'Dr. Anil Kumar Verma', 'NULL', 'Dr. Neeraj Kumar', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Khanna', 1),
(30, '2015-12-24 09:47:53', 951003002, 'Raj Kumar Tekchandani', 'full', 'Ongoing', '0000-00-00', 'rtekchandani@thapar.edu', 'COE', '0000-00-00', '2012-04-27', 'Development of an Efficient Semantic Code Clone Detection Technique', '0123456789', 'Dr. Deepak Garg', 'Dr. Rajesh Bhatia', 'Dr. Maninder Singh', 'Dr. Seema Bawa', 'Dr. Inderveer Chana', 'Dr. Rajesh Kumar', 1),
(31, '2015-12-24 09:56:47', 951003009, 'Pradeep Arora', 'full', 'Ongoing', '0000-00-00', 'Engg.pardeeparora@gmail.com', 'COE', '0000-00-00', '2012-04-27', 'Mobile Agent Based Regression Test Case Generation', '0123456789', 'Dr. Deepak Garg', 'Dr. Rajesh Bhatia', 'Dr. Deepak Garg', 'Dr. Shalini Batra', 'Dr. Inderveer Chana', 'Dr. R.K. Sharma', 1),
(32, '2015-12-24 10:00:17', 951003013, 'Kalpna', 'full', 'Ongoing', '0000-00-00', 'kalpna.phd@thapar.edu', 'COE', '0000-00-00', '2012-06-15', 'An Enhanced Routing Technique for Wireless Sensor Networks', '0123456789', 'Dr. Deepak Garg', 'Dr. Anil Kumar Verma', 'NULL', 'Dr. Neeraj Kumar', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Khanna', 1),
(33, '2015-12-24 10:05:01', 951103002, 'Karamjit Kaur', 'full', 'Ongoing', '0000-00-00', 'karamjit.kaur@thapar.edu', 'COE', '0000-00-00', '0000-00-00', 'A Novel Framework for Querying Multiparadigm Database', '0123456789', 'Dr. Deepak Garg', 'Dr. Rinkle Rani', 'NULL', 'Dr. Parteek Bhatia', 'Dr. Shalini Batra', 'Dr. Rajesh Kumar', 1),
(34, '2015-12-24 10:24:52', 950903009, 'Sunil Kumar', 'full', 'Ongoing', '0000-00-00', 'sunilgautam82@gmail.com', 'COE', '0000-00-00', '2010-05-10', 'An efficient technique for reusable software component clustering', '0123456789', 'Dr. Deepak Garg', 'Dr. Rajesh Bhatia', 'Dr. Rajesh Kumar', 'Dr. Deepak Garg', 'NULL', 'Dr. Maninder Singh', 1),
(35, '2015-12-24 10:31:47', 950903015, 'Karun Verma', 'full', 'Ongoing', '0000-00-00', 'karun.verma@thapar.edu', 'COE', '0000-00-00', '2010-09-16', 'Efficinet Hidden Markov models for online hand writen gurmukhi script recognition', '0123456789', 'Dr. Deepak Garg', 'Dr. R.K. Sharma', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Deepak Garg', 'Dr. Rajesh Kumar', 1),
(36, '2015-12-24 10:36:53', 950903011, 'Vikas Jindal', 'full', 'Ongoing', '0000-00-00', 'jindal35@gmail.com', 'COE', '0000-00-00', '0000-00-00', 'Efficient Framework for Semantic Search on Web', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'Dr. Shalini Batra', 'Dr. Maninder Singh', 'Dr. Inderveer Chana', 'Dr. Rajesh Kumar', 1),
(37, '2015-12-24 11:06:16', 950903037, 'Bhawna Singla', 'full', 'Ongoing', '0000-00-00', 'bhawna_singla@yahoo.com', 'COE', '0000-00-00', '2010-12-17', 'Design and Development of Efficient Secure AODV Routing Protocol', '0123456789', 'Dr. Deepak Garg', 'Dr. L. R. Raheja', 'Dr. Anil Kumar Verma', 'Dr. Maninder Singh', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Khanna', 1),
(38, '2015-12-24 11:25:25', 950903031, 'Narendra P Pathak', 'full', 'Ongoing', '0000-00-00', 'npp_viit@yahoo.co.in', 'COE', '0000-00-00', '2010-10-20', 'Performance Analysis and Traffic Optimization of Wired Networks Using  Traffic Metrics', '0123456789', 'Dr. Deepak Garg', 'Dr. V. L. Patil', 'Dr. Maninder Singh', 'Dr. Deepak Garg', 'Dr. Anil Kumar Verma', 'Dr. Rajesh Khanna', 1),
(39, '2015-12-28 10:08:34', 950903030, 'Kirti Wanjale', 'full', 'Ongoing', '1900-01-01', 'kwanjale@yahoo.com', 'COE', '2000-01-01', '2010-10-20', 'Design of framework for Intelligent Particle Filter Based CBIR System', '0123456789', 'Dr. Deepak Garg', 'Dr. Aditya Abhyankar', 'Dr. Deepak Garg', 'Dr. Maninder Singh', 'Dr. V.P.  Singh Kaushal', 'Dr. Kulbir Singh', 1),
(40, '2015-12-28 10:23:54', 951003004, 'Vaishali', 'full', 'Ongoing', '1900-01-01', 'wadhwavaishali@gmail.com', 'COE', '2000-01-01', '2011-02-22', 'Improved Approximation Algorithms for Facility Location Problems', '0123456789', 'Dr. Deepak Garg', 'Dr. Deepak Garg', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Kumar Gupta', 1),
(41, '2015-12-28 10:26:56', 951003005, 'Sunita', 'full', 'Ongoing', '1900-01-01', 'sunita.tu@gmail.com', 'COE', '2000-01-01', '2011-02-21', 'Improved Data Structures for Dynamic and Massive Data', '0123456789', 'Dr. Deepak Garg', 'Dr. Deepak Garg', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. V.P.  Singh Kaushal', 'Dr. R.K. Sharma', 1),
(42, '2015-12-28 10:29:58', 951003006, 'Monika', 'full', 'Ongoing', '1900-01-01', 'manglamona@gmail.com', 'COE', '2000-01-01', '2011-02-24', 'Efficient Geometric Algorithms for Resource Location Models', '0123456789', 'Dr. Deepak Garg', 'Dr. Deepak Garg', 'NULL', 'Dr. Seema Bawa', 'Dr. Inderveer Chana', 'Dr. Kulbir Singh', 1),
(43, '2015-12-28 10:39:48', 900903007, 'Kuldeep Sharma', 'full', 'Synopsis Submitted', '1900-01-01', 'kuldeep.sharma@thapar.edu', 'CSED', '2000-01-01', '2011-04-15', 'Efficient Randomized Algorithms for Graph Theoretic Applications', '1123456789', 'Dr. Deepak Garg', 'Dr. Deepak Garg', 'NULL', 'Dr. Seema Bawa', 'Dr. Anil Kumar Verma', 'Dr. Mahesh Kumar Sharma', 1),
(44, '2015-12-28 10:48:50', 950903034, 'Hari Singh', 'full', 'Ongoing', '1900-01-01', 'harirawat@rediffmail.com', 'COE', '2000-01-01', '2011-09-07', 'Efficient Grid-GIS Framework for Spatial Data', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Khanna', 1),
(45, '2015-12-28 10:57:31', 950903033, 'Sitender', 'full', 'Ongoing', '1900-01-01', 'sitender007@gmail.com', 'COE', '2000-01-01', '2011-08-09', 'Sanskrit Language En-conversion to Universal Networking Language (UNL)', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'NULL', 'Dr. V.P.  Singh Kaushal', 'Dr. Rinkle Rani', 'Dr. R.K. Sharma', 1),
(46, '2015-12-28 11:08:21', 950903044, 'Ajay Kumar', 'full', 'Ongoing', '1900-01-01', 'ajaycpp@gmail.com', 'COE', '2000-01-01', '2011-04-26', 'Dynamic and Scalable Data Access and Interation Services for Cloud Computing Environment', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'NULL', 'Dr. Inderveer Chana', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Kumar', 1),
(47, '2015-12-28 11:11:48', 901003001, 'Nidhi Jain Kansal', 'full', 'Ongoing', '1900-01-01', 'nidhi.kavya@gmail.com', 'COE', '2000-01-01', '2011-04-07', 'Energy Aware Load Balancing Techniques for Cloud Computing', '0123456789', 'Dr. Deepak Garg', 'Dr. Inderveer Chana', 'NULL', 'Dr. Seema Bawa', 'Dr. V.P.  Singh Kaushal', 'Dr. Kulbir Singh', 1),
(48, '2015-12-28 11:15:36', 950903046, 'Vikas Raheja', 'full', 'Ongoing', '1900-01-01', 'rahejavikas@yahoo.com', 'COE', '2000-01-01', '2011-05-31', 'Reliability Analysis for Cloud Services using Bayesian Network', '0123456789', 'Dr. Deepak Garg', 'Dr. Inderveer Chana', 'NULL', 'Dr. Seema Bawa', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Khanna', 1),
(49, '2015-12-28 11:42:38', 951003010, 'Priyanka', 'full', 'Ongoing', '1900-01-01', 'priyankamatrix@gmail.com', 'COE', '2000-01-01', '2011-10-21', 'A Framework for Testing As a Service over Cloud', '0123456789', 'Dr. Deepak Garg', 'Dr. Ajay Rana', 'Dr. Inderveer Chana', 'Dr. Neeraj Kumar', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Kumar', 1),
(50, '2015-12-29 04:05:37', 950903036, 'Anju Bhandari', 'full', 'Ongoing', '0000-00-00', 'er.anjugandhi@gmail.com', 'COE', '0000-00-00', '2011-02-24', 'Design and Performance Evaluation of Intelligent LSPs in Multiprotocol Label Switching Networks', '0123456789', 'Dr. Deepak Garg', 'Dr. V.P.  Singh Kaushal', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Inderveer Chana', 'Dr. Rajesh Khanna', 1),
(51, '2015-12-29 04:13:06', 950903039, 'Rajan Saluja', 'full', 'Ongoing', '0000-00-00', 'rajansaluja@yahoo.com', 'COE', '0000-00-00', '0000-00-00', 'Design of Scheduling and Routing Algorithm using Cross Layer Design in Wireless Mesh Network', '0123456789', 'Dr. Deepak Garg', 'Dr. V.P.  Singh Kaushal', 'NULL', 'Dr. Seema Bawa', 'Dr. Inderveer Chana', 'Dr. Rajesh Khanna', 1),
(52, '2015-12-29 04:16:37', 950903038, 'Mandeep Kaur', 'full', 'Ongoing', '0000-00-00', 'mandeep.kaur79@gmail.com', 'COE', '0000-00-00', '2012-08-09', 'Efficient Audit and Security Techniques in Cloud Computing', '0123456789', 'Dr. Deepak Garg', 'Dr. V.P.  Singh Kaushal', 'NULL', 'Dr. Rinkle Rani', 'Dr. Inderveer Chana', 'Dr. Rajesh Khanna', 1),
(53, '2015-12-29 04:35:45', 950903029, 'Jayashri V Baghade', 'full', 'Ongoing', '0000-00-00', 'jayashrihedaoo@rediffmail.com', 'COE', '0000-00-00', '2011-02-02', 'Optimal framework design for No reference Image Quality Assessment based on Genetic Statistical Modelling', '0123456789', 'Dr. Deepak Garg', 'Dr. Kulbir Singh', 'Dr. YOGESH H. DANDAWATE', 'Dr. Anil Kumar Verma', 'Dr. Inderveer Chana', 'Dr. Rajesh Khanna', 1),
(54, '2015-12-29 05:41:25', 950903047, 'Ranjeeta', 'full', 'Ongoing', '0000-00-00', 'er_ranjeeta@yahoo.co.in', 'COE', '0000-00-00', '2011-02-17', 'An Efficient Algorithm for Embedding Digital Watermark in Curvelet Domain', '0123456789', 'Dr. Deepak Garg', 'Dr. Sanjay Sharma', 'Dr. L. R. Raheja', 'Dr. Anil Kumar Verma', 'Dr. V.P.  Singh Kaushal', 'Dr. Amit Kumar Kohli', 1),
(55, '2015-12-29 05:59:22', 950903040, 'Kailash Chander Bhardwaj', 'full', 'Ongoing', '0000-00-00', 'kailashbhar@gmail.com', 'COE', '0000-00-00', '2011-10-21', 'Design a Framework for Efficient Discovery of Web Services using Data Mining Techniques', '0123456789', 'Dr. Deepak Garg', 'Dr. R.K. Sharma', 'NULL', 'Dr. Seema Bawa', 'Dr. Inderveer Chana', 'Dr. Rajesh Khanna', 1),
(56, '2015-12-29 06:52:32', 951203006, 'Maninder SIngh', 'full', 'Ongoing', '0000-00-00', 'maninder.tiet@gmail.com', 'COE', '0000-00-00', '2013-02-05', 'Efficient IP Traceback for DDOS Attacks in IPv6 Networks', '0123456789', 'Dr. Deepak Garg', 'Dr. Maninder Singh', 'Dr. Shalini Batra', 'Dr. Anil Kumar Verma', 'Dr. Neeraj Kumar', 'Dr. R. S. Kaler', 1),
(57, '2015-12-29 06:57:51', 901203006, 'Neenu Garg', 'full', 'Synopsis Submitted', '0000-00-00', 'neenu.garg@thapar.edu', 'COE', '0000-00-00', '2013-05-20', 'A Framework for Data Integrity Checking in Cloud Computing', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'NULL', 'Dr. Inderveer Chana', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Kumar', 1),
(58, '2015-12-29 07:07:07', 901203007, 'Amit Dua', 'full', 'Ongoing', '0000-00-00', 'amitdua@thapar.edu', 'COE', '0000-00-00', '2013-05-20', 'Efficient Data Dissemination in Vehicular Ad Hoc Network', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'Dr. Neeraj Kumar', 'Dr. Anil Kumar Verma', 'Dr. Shalini Batra', 'Dr. Rajesh Khanna', 1),
(59, '2016-01-01 10:59:56', 901203005, 'Tarandeep Kaur', 'full', 'Ongoing', '1900-01-01', 'tarandeep.kaur@thapar.edu', 'COE', '2000-01-01', '2013-03-25', 'Energy-Efficient Resource Scheduling Technique for Cloud Computing', '0123456789', 'Dr. Deepak Garg', 'Dr. Inderveer Chana', 'NULL', 'Dr. Seema Bawa', 'Dr. Neeraj Kumar', 'Dr. Rakesh Kumar  Gupta', 1),
(60, '2016-01-01 11:05:47', 951103003, 'Gurpal SIngh', 'full', 'Ongoing', '1900-01-01', 'gurpal.singh@thapar.edu', 'COE', '2000-01-01', '2013-03-19', 'Design and Implementation of Computer and Network Forensics Framework', '0123456789', 'Dr. Deepak Garg', 'Dr. V.P.  Singh Kaushal', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Neeraj Kumar', 'Dr. Rajesh Khanna', 1),
(61, '2016-01-01 11:09:11', 951103004, 'Rajeev Tiwari', 'full', 'Ongoing', '1900-01-01', 'errajeev.tiwari@gmail.com', 'COE', '2000-01-01', '2013-02-05', 'Dynamic Cache Invalidation in Wireless Environments', '0123456789', 'Dr. Deepak Garg', 'Dr. Neeraj Kumar', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Rinkle Rani', 'Dr. Rajesh Khanna', 1),
(62, '2016-01-01 11:13:51', 951103005, 'Vinod Kumar', 'full', 'Ongoing', '1900-01-01', 'vkbhalla@thapar.edu', 'COE', '2000-01-01', '2013-02-06', 'Design and Implementation of an Efficient Framework for Web Page Classification', '0123456789', 'Dr. Deepak Garg', 'Dr. Neeraj Kumar', 'NULL', 'Dr. Shalini Batra', 'Dr. Shivani Goel', 'Dr. Rajesh Kumar', 1),
(63, '2016-01-01 11:17:10', 951203002, 'Rasmeet Bali', 'full', 'Ongoing', '1900-01-01', 'rasmeetsbali@gmail.com', 'COE', '2000-01-01', '2013-09-06', 'Efficient Secure Data Clustering in Vehicular Ad Hoc Networks', '0123456789', 'Dr. Deepak Garg', 'Dr. Neeraj Kumar', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. V.P.  Singh Kaushal', 'Dr. Rajesh Khanna', 1),
(64, '2016-01-01 11:21:34', 951203008, 'Rupinderdeep Kaur', 'full', 'Ongoing', '1900-01-01', 'rupinderdeep@thapar.edu', 'COE', '2000-01-01', '2013-03-25', 'Prosody Based Text-To-Speech System for Punjabi Language', '0123456789', 'Dr. Deepak Garg', 'Dr. R.K. Sharma', 'Dr. Parteek Bhatia', 'Dr. Seema Bawa', 'Dr. Anil Kumar Verma', 'Dr. Rajesh Kumar', 1),
(65, '2016-01-05 05:01:09', 951203003, 'Varinder Pal Singh', 'full', 'Ongoing', '1900-01-01', 'varinderpal@thapar.edu', 'COE', '2000-01-01', '2013-09-06', 'Word Sense Disambiguation for Punjabi Language', '0123456789', 'Dr. Deepak Garg', 'Dr. Parteek Bhatia', 'NULL', 'Dr. Seema Bawa', 'Dr. Shalini Batra', 'Dr. R.K. Sharma', 1),
(66, '2016-01-05 05:11:54', 951203004, 'Prabhjot Kaur', 'full', 'Ongoing', '1900-01-01', 'jolly.prabhjot@gmail.com', 'COE', '2000-01-01', '2013-03-28', 'An Efficient Technique for Security of Mobile Agents', '0123456789', 'Dr. Deepak Garg', 'Dr. Shalini Batra', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Neeraj Kumar', 'Dr. Rajesh Kumar', 1),
(67, '2016-01-05 05:17:22', 951103006, 'Saurabh', 'full', 'Ongoing', '1900-01-01', 'saurabh.mittal@galaxyglobaledu.com', 'COE', '2000-01-01', '2013-02-05', 'Energy Efficient Fault-Tolerance and Recovery in Wireless Sensor Networks', '0123456789', 'Dr. Deepak Garg', 'Dr. Rinkle Rani', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Neeraj Kumar', 'Dr. Rajesh Khanna', 1),
(68, '2016-01-05 05:21:21', 951203005, 'Deepak Gupta', 'full', 'Ongoing', '1900-01-01', 'deepak.vd@gmail.com', 'COE', '2000-01-01', '2013-09-07', 'A Novel Framework for Analysis of Big Data', '0123456789', 'Dr. Deepak Garg', 'Dr. Rinkle Rani', 'NULL', 'Dr. Inderveer Chana', 'Dr. Neeraj Kumar', 'Dr. Rajesh Kumar', 1),
(69, '2016-01-05 06:37:20', 951003014, 'Ashish Aggarwal', 'full', 'Ongoing', '1900-01-01', 'ashish.aggarwal@thapar.edu', 'COE', '2000-01-01', '2012-07-13', 'GlobeConDBUnit A framework for Testing Database Applications', '0123456789', 'Dr. Deepak Garg', 'Dr. V. P. Agrawal', 'NULL', 'Dr. Parteek Bhatia', 'Dr. Shalini Batra', 'Dr. R.K. Sharma', 1),
(70, '2016-01-05 06:57:04', 951203001, 'Sanjeev Guleria', 'full', 'Ongoing', '1900-01-01', 'skguleria@thapar.edu', 'COE', '2000-01-01', '2013-07-16', 'Interactive Decision Support System for Planned Student Scheduling and Incremental Changes in Large Scale Timetabling', '0123456789', 'Dr. Deepak Garg', 'Dr. A.K. Lal', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Shalini Batra', 'Dr. Maneek Kumar', 1),
(71, '2016-01-05 07:00:47', 901203003, 'Vishal Sharma', 'full', 'Ongoing', '1900-01-01', 'vishal_sharma2012@hotmail.com', 'COE', '2000-01-01', '2013-12-23', 'Network Framework for Multi-UAV Guided Ground Ad Hoc Network', '0123456789', 'Dr. Deepak Garg', 'Dr. Rajesh Kumar', 'NULL', 'Dr. V.P.  Singh Kaushal', 'Dr. Rinkle Rani', 'Dr. Kulbir Singh', 1),
(72, '2016-03-02 05:55:43', 951403001, 'Tarunpreet Bhatia', 'full', 'Ongoing', '1900-01-01', 'tarunpreet@thapar.edu', 'COE', '1900-01-01', '2015-05-04', 'A Novel Framework for Data Security in Mobile Cloud Computing Paradigm', '9501351188', 'Dr. Deepak Garg', 'Dr. Anil Kumar Verma', 'NULL', 'Dr. Neeraj Kumar', 'Dr. Shalini Batra', 'Dr. Kulbir Singh', 1),
(73, '2016-03-02 06:03:16', 951303001, 'Harcharan Jit Singh', 'full', 'Ongoing', '1900-01-01', 'harcharan@thapar.edu', 'COE', '1900-01-01', '2014-05-27', 'Scalable Metadata Storage and Retrieval Techniques For very large Distributed Storage Systems', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'NULL', 'Dr. Rinkle Rani', 'Dr. Inderveer Chana', 'Dr. Mahesh Kumar Sharma', 1),
(74, '2016-03-02 06:16:28', 901303003, 'Sukhpal Singh', 'full', 'Ongoing', '1900-01-01', 'ssgill@thapar.edu', 'COE', '1900-01-01', '2014-03-05', 'QoS Aware Automatic Resource Provisioning and Scheduling for Cloud Computing', '9855581444', 'Dr. Deepak Garg', 'Dr. Inderveer Chana', 'NULL', 'Dr. Anil Kumar Verma', 'Dr. Shivani Goel', 'Dr. Deepak Garg', 1),
(75, '2016-03-02 06:21:15', 901303002, 'Harjeet Singh', 'full', 'Ongoing', '1900-01-01', 'harjeet.singh@thapar.edu', 'COE', '1900-01-01', '2014-07-29', 'Language Model Based Online Handwritten Recognition System for Punjabi Language', '0123456789', 'Dr. Deepak Garg', 'Dr. V.P.  Singh Kaushal', 'NULL', 'Dr. Ashutosh Mishra', 'Dr. Parteek Bhatia', 'Dr. Deepak Garg', 1),
(76, '2016-03-02 06:40:25', 951303003, 'Vaibhav Agarwal', 'full', 'Ongoing', '1900-01-01', 'vaibhavagg123@gmail.com', 'COE', '1900-01-01', '2014-05-28', 'Universal Networking Language Based Question Answering System for Information Retrieval of Punjabi Language', '0123456789', 'Dr. Deepak Garg', 'Dr. Parteek Bhatia', 'NULL', 'Dr. Rinkle Rani', 'Dr. Ashutosh Mishra', 'Dr. Kulbir Singh', 1),
(77, '2016-03-02 06:58:09', 901403013, 'Sujata Rani', 'full', 'Ongoing', '1900-01-01', 'sujata2305@gmail.com', 'COE', '1900-01-01', '2015-05-01', 'Sentiment Analysis of Social Media for Hindi Language', '0123456789', 'Dr. Deepak Garg', 'Dr. Parteek Bhatia', 'NULL', 'Dr. Rinkle Rani', 'Dr. Maninder Singh', 'Dr. Deepak Garg', 1),
(78, '2016-03-02 07:05:31', 901403001, 'Vandana Bhatia', 'full', 'Ongoing', '1900-01-01', 'vbhatia91@gmail.com', 'COE', '1900-01-01', '2015-05-01', 'Efficient Pattern Mining of Big Data using Graphs', '0123456789', 'Dr. Deepak Garg', 'Dr. Rinkle Rani', 'NULL', 'Dr. Parteek Bhatia', 'Dr. Damandeep Kaur', 'Dr. Kulbir Singh', 1),
(79, '2016-03-02 07:09:46', 901203008, 'Divya Pandove', 'full', 'Ongoing', '1900-01-01', 'dpandove@gmail.com', 'COE', '1900-01-01', '2014-03-05', 'Big Data Clustering Based Recommendation System Model through Correlations', '0123456789', 'Dr. Deepak Garg', 'Dr. Shivani Goel', 'NULL', 'Dr. Rinkle Rani', 'Dr. Sushma Jain', 'Dr. Kulbir Singh', 1),
(80, '2016-03-02 07:17:48', 901303001, 'MEGHA', 'full', 'Ongoing', '1900-01-01', 'megha@thapar.edu', 'COE', '1900-01-01', '2014-08-14', 'A Generic Framework for Improving Software Product Line using an Ontological Rule based Approach', '0123456789', 'Dr. Deepak Garg', 'Dr. Shivani Goel', 'NULL', 'Dr. Parteek Bhatia', 'Dr. Ashutosh Mishra', 'Dr. Deepak Garg', 1),
(81, '2016-03-02 07:22:29', 901403009, 'Shaify Kansal', 'full', 'Ongoing', '1900-01-01', 'shaifykansal@gmail.com', 'COE', '1900-01-01', '2015-05-30', 'Developing an Efficient Framework for Image Mining', '0123456789', 'Dr. Deepak Garg', 'Dr. Shivani Goel', 'NULL', 'Dr. Sushma Jain', 'Dr. Jhilik Bhattacharya', 'Dr. Deepak Garg', 1),
(84, '2016-03-02 08:12:58', 951303002, 'Sukhchandan Randhawa', 'full', 'Ongoing', '1900-01-01', 'Sukhchandan@thapar.edu', 'COE', '1900-01-01', '2014-07-29', 'Efficient Load Balancing and Data Aggregation for Multipath Routing in Wireless Sensor Networks', '0123456789', 'Dr. Deepak Garg', 'Dr. Sushma Jain', 'NULL', 'Dr. Rinkle Rani', 'Dr. Damandeep Kaur', 'Dr. Rakesh Kumar  Gupta', 1),
(85, '2016-03-02 08:17:17', 901403016, 'Baljit Kaur', 'full', 'Ongoing', '1900-01-01', 'baljitkaur13@gmail.com', 'COE', '1900-01-01', '2015-05-20', 'Augmented Map Based Intelligent Navigation System', '0123456789', 'Dr. Deepak Garg', 'Dr. Jhilik Bhattacharya', 'NULL', 'Dr. Ashutosh Mishra', 'Dr. Singara Singh', 'Dr. Deepak Garg', 1),
(86, '2016-03-03 06:02:01', 901403006, 'Kuldeep Singh', 'full', 'Ongoing', '1900-01-01', 'kuldeepisp@gmail.com', 'COE', '1900-01-01', '2015-05-04', 'A Secure Framework for Flying Ad-hoc Networks', '0123456789', 'Dr. Deepak Garg', 'Dr. Anil Kumar Verma', 'NULL', 'Dr. Neeraj Kumar', 'Dr. Maninder Singh', 'Dr. Mahesh Kumar Sharma', 1),
(87, '2016-03-03 06:28:16', 951203010, 'Lohit Kapoor', 'full', 'Ongoing', '1900-01-01', 'lohit.kapoor@thapar.edu', 'COE', '1900-01-01', '2013-07-25', 'An Efficient and Secure Intercloud Framework', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'Dr. Ankur Gupta', 'Dr. Neeraj Kumar', 'Dr. Inderveer Chana', 'Dr. M.D. Singh', 1),
(88, '2016-03-03 06:31:33', 901403021, 'Nishtha Hooda', 'full', 'Ongoing', '1900-01-01', '27nishtha@gmail.com', 'COE', '1900-01-01', '2015-12-10', 'Ensemble Machine Learning Framework for Big Data Analytics', '0123456789', 'Dr. Deepak Garg', 'Dr. Seema Bawa', 'Dr. Prashant S Rana', 'Dr. Rinkle Rani', 'Dr. Shalini Batra', 'Dr. Deepak Garg', 1),
(89, '2016-03-03 08:15:26', 901403007, 'Loveleen Kaur', 'full', 'Ongoing', '1900-01-01', 'loveleen3390@gmail.com', 'COE', '1900-01-01', '0000-00-00', 'Selection of reusable software components using the expertise of Semantic Web and Intelligent Computing Methods', '0123456789', 'Dr. Deepak Garg', 'Dr. Ashutosh Mishra', 'NULL', 'Dr. Parteek Bhatia', 'Dr. Shivani Goel', 'Dr. M.D. Singh', 1),
(90, '2016-03-03 10:13:14', 951003001, 'Vinay Arora', 'full', 'Ongoing', '1900-01-01', 'vinay.arora@thapar.edu', 'COE', '1900-01-01', '2012-04-27', 'Slicing Technique for Test Path Generation in Concurrent Programs', '0123456789', 'Dr. Deepak Garg', 'Dr. Maninder Singh', 'Dr. Rajesh Bhatia', 'Dr. Seema Bawa', 'Dr. Shalini Batra', 'Dr. M.D. Singh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`), ADD UNIQUE KEY `sregno` (`sregno`,`cname`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`sno`);

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
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `research_book`
--
ALTER TABLE `research_book`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `research_conference`
--
ALTER TABLE `research_conference`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `research_journal`
--
ALTER TABLE `research_journal`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
