-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 01:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sem` int(2) NOT NULL,
  `uname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `upass`, `branch`, `sem`, `uname`) VALUES
('1622910037', '1622910037', 'CSE', 4, 'Himanshu'),
('1622910042', '1622910042', 'IT', 4, 'Sapna'),
('1622910045', '1622910045', 'CSE', 4, 'Kunal');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sunject_code` varchar(10) NOT NULL,
  `subject_name` varchar(40) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `sem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sunject_code`, `subject_name`, `branch`, `sem`) VALUES
('kabs-121', 'alksndljsa', 'IT', 4),
('RAS-402', 'Ecology', 'CSE', 4),
('RCS-401', 'Operating System', 'CSE', 4),
('RCS-402', 'Software Engineering', 'CSE', 4),
('RCS-403', 'Automata', 'CSE', 4),
('REC-405', 'Microprocessor', 'CSE', 4),
('ROE-047', 'Material Science', 'CSE', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sunject_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
