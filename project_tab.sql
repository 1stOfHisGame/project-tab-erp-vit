-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 10:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_tab`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `username` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `guide_name` varchar(30) NOT NULL,
  `designation` varchar(10) NOT NULL DEFAULT 'Professor',
  `dept` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`username`, `pwd`, `guide_name`, `designation`, `dept`) VALUES
('sachin.d', '123', 'Sachin Deshpande', 'HOD', 'CMPN'),
('sneha.a', '123', 'Sneha Annapannavar', 'Professor', 'CMPN');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `proj_id` int(3) NOT NULL,
  `proj_title` varchar(100) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `roll_1` varchar(10) NOT NULL,
  `roll_2` varchar(10) NOT NULL,
  `roll_3` varchar(10) NOT NULL,
  `1_title` varchar(100) DEFAULT NULL,
  `1_comments` varchar(150) DEFAULT NULL,
  `2_title` varchar(100) DEFAULT NULL,
  `2_comments` varchar(150) DEFAULT NULL,
  `3_title` varchar(100) DEFAULT NULL,
  `3_comments` varchar(150) DEFAULT NULL,
  `4_title` varchar(100) DEFAULT NULL,
  `4_comments` varchar(150) DEFAULT NULL,
  `5_title` varchar(100) DEFAULT NULL,
  `5_comments` varchar(150) DEFAULT NULL,
  `6_title` varchar(100) DEFAULT NULL,
  `6_comments` varchar(150) DEFAULT NULL,
  `7_title` varchar(100) DEFAULT NULL,
  `7_comments` varchar(150) DEFAULT NULL,
  `8_title` varchar(100) DEFAULT NULL,
  `8_comments` varchar(150) DEFAULT NULL,
  `9_title` varchar(100) DEFAULT NULL,
  `9_comments` varchar(150) DEFAULT NULL,
  `10_title` varchar(100) DEFAULT NULL,
  `10_comments` varchar(150) DEFAULT NULL,
  `11_title` varchar(100) DEFAULT NULL,
  `11_comments` varchar(150) DEFAULT NULL,
  `12_title` varchar(100) DEFAULT NULL,
  `12_comments` varchar(150) DEFAULT NULL,
  `13_title` varchar(100) DEFAULT NULL,
  `13_comments` varchar(150) DEFAULT NULL,
  `14_title` varchar(100) DEFAULT NULL,
  `14_comments` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`proj_id`, `proj_title`, `dept`, `username`, `roll_1`, `roll_2`, `roll_3`, `1_title`, `1_comments`, `2_title`, `2_comments`, `3_title`, `3_comments`, `4_title`, `4_comments`, `5_title`, `5_comments`, `6_title`, `6_comments`, `7_title`, `7_comments`, `8_title`, `8_comments`, `9_title`, `9_comments`, `10_title`, `10_comments`, `11_title`, `11_comments`, `12_title`, `12_comments`, `13_title`, `13_comments`, `14_title`, `14_comments`) VALUES
(1, 'Project status tab in ERP', 'CMPN', 'sneha.a', '14102a0070', '14102a0075', '14101a0062', 'design ui', 'completed', 'documentation', 'incomplete', 'ppt', '', '', '', '', '', '', '', '', ' ', '', ' ', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Image Processing', 'CMPN', 'sachin.d', '14102a0072', '', '', 'design ui', 'completed', 'documentation', 'incomplete', 'Review', 'incomplete', '', '', '', '', '', '', '', ' ', '', ' ', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'V Cafe', 'CMPN', 'sneha.a', '14102a0074', '', '', 'design ui', 'completed', 'documentation', 'incomplete', 'research', 'incomplete', 'review', 'incomplete', 'ppt', 'completed', '', '', '', ' ', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` varchar(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `proj_id` int(3) DEFAULT NULL,
  `dept` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `pwd`, `stud_name`, `proj_id`, `dept`) VALUES
('14101a0062', '123', 'Vedant', 1, 'CMPN'),
('14102a0070', '123', 'Rushabh', 1, 'CMPN'),
('14102a0072', '123', 'Ishant', 2, 'CMPN'),
('14102a0074', '123', 'Esha', 3, 'CMPN'),
('14102a0075', '123', 'Abhishek', 1, 'CMPN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`username`);
ALTER TABLE `guide` ADD FULLTEXT KEY `guide_first_name` (`guide_name`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`proj_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`),
  ADD KEY `proj_id` (`proj_id`);
ALTER TABLE `student` ADD FULLTEXT KEY `first_name` (`stud_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`username`) REFERENCES `guide` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
