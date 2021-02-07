-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 09:18 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ename` varchar(50) NOT NULL,
  `edate` varchar(30) NOT NULL,
  `edis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ename`, `edate`, `edis`) VALUES
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hallbook`
--

CREATE TABLE `hallbook` (
  `society` varchar(30) NOT NULL,
  `wing` varchar(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `flatno` int(10) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hallbook`
--

INSERT INTO `hallbook` (`society`, `wing`, `fname`, `flatno`, `purpose`, `date`, `time`) VALUES
('iyjtky', 'B', 'a', 10, 'ksfjhsdjfi', '0200-12-25', '12:30:00'),
('gokuldham', 'A', 'c', 10, 'ksfjhsdjfi', '2000-12-23', '23:12:00'),
('jhbkh', 'A', 'a', 203, '12', '2020-02-01', '10:10:00'),
('ram', 'B', 'jay', 10, 'jcobsjvxvjcvh wkejhrkl2xermw eiwf 2qiehfdih ', '2020-02-13', '15:12:00'),
('jhbkh', 'A', 'a', 10, 'jcobsjvxvjcvh wkejhrkl2xermw eiwf 2qiehfdih ', '2020-02-28', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ntitle` varchar(50) NOT NULL,
  `ndis` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ntitle`, `ndis`) VALUES
('', ''),
('', ''),
('', 't54er');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `fname` text NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `wing` varchar(10) NOT NULL,
  `status` int(50) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fname`, `mob`, `email`, `password`, `wing`, `status`) VALUES
('dharmi', 9898247492, 'b@gmail.com', '1234', 'A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `sname-` varchar(50) NOT NULL,
  `swing` varchar(80) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` varchar(52) NOT NULL,
  `photo` varchar(522) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `wing` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `flatno` int(20) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lastname`, `mob`, `gender`, `wing`, `email`, `pass`, `flatno`, `status`) VALUES
('a', 'parmar', 978645312, 'male', 'A', 'a@gmail.com', '123456', 203, 1),
('a', 'ikahck', 978645312, 'male', 'A', 'd@gmail.com', '12345', 10, 0),
('jay', 'parmar', 9558418115, 'male', 'A', 'jayparmar1227@gmail.com', '123', 0, 0),
('abc', 'xyz', 7894561230, 'male', 'B', 't@gmail.com', 'raj0123', 204, 0),
('abc', 'xyz', 6549873210, 'male', 'A', 'w@gmail.com', '12345', 302, 0);

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `sname` varchar(20) NOT NULL,
  `saddress` varchar(70) NOT NULL,
  `secname` varchar(30) NOT NULL,
  `secemail` varchar(50) NOT NULL,
  `secmob` bigint(10) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`sname`, `saddress`, `secname`, `secemail`, `secmob`, `status`) VALUES
('abc', 'rajkot', 'yierfe', 'b@gmail.com', 8956784589, 2),
('xyz', 'ghgh', 'iusdudj', 'c@gmail.com', 8989564578, 2),
('xyz', 'dharmi', 'abc', 'dhdhdh@gmail.com', 9898247492, 2),
('gud', 'rr', 'rr', 'rrr@gmail.com', 68975663, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ucomplain`
--

CREATE TABLE `ucomplain` (
  `uemail` varchar(50) NOT NULL,
  `society` varchar(30) NOT NULL,
  `wing` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `flatno` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `discript` varchar(150) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ucomplain`
--

INSERT INTO `ucomplain` (`uemail`, `society`, `wing`, `name`, `flatno`, `subject`, `discript`, `status`) VALUES
('d@gmail.com', 'jhbkh', 'A', 'sms', 20, 'uioi', 'hi', 0),
('e@gmail.com', 'jhbkh', 'A', 'jkj', 10, 'hj', 'hi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ulogin`
--

CREATE TABLE `ulogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulogin`
--

INSERT INTO `ulogin` (`email`, `password`) VALUES
('a@gmail.com', '123'),
('w@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `viewevent`
--

CREATE TABLE `viewevent` (
  `purpose` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `discript` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewevent`
--

INSERT INTO `viewevent` (`purpose`, `date`, `time`, `discript`) VALUES
('ksfjhsdjfi', '2020-02-01', '00:00:10', 'hi'),
('Dhuleti Ce', '2020-02-08', '10:10:00', 'Let celebrate'),
('holi', '2020-02-10', '10:10:00', 'holi'),
('ksfjhsdjfi', '2000-02-23', '12:30:00', 'hi'),
('ksfjhsdjfi', '2020-02-20', '12:20:00', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `wing`
--

CREATE TABLE `wing` (
  `sname` varchar(30) NOT NULL,
  `wname` varchar(30) NOT NULL,
  `secname` varchar(20) NOT NULL,
  `secmob` bigint(10) NOT NULL,
  `secemail` varchar(30) NOT NULL,
  `total_flats` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallbook`
--
ALTER TABLE `hallbook`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`secemail`);

--
-- Indexes for table `ucomplain`
--
ALTER TABLE `ucomplain`
  ADD PRIMARY KEY (`uemail`);

--
-- Indexes for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
