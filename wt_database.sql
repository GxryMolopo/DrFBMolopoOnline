-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2019 at 10:59 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CID` int(5) NOT NULL,
  `DID` int(5) NOT NULL,
  `DOV` date NOT NULL,
  `Timestamp` datetime NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Username`, `Fname`, `Gender`, `CID`, `DID`, `DOV`, `Timestamp`, `Status`) VALUES
(9, 'user', '105 OR 1=1', 'male', 1, 1, '2018-10-16', '2018-10-09 09:27:31', 'accepted'),
(2, 'hn', 'hah', 'male', 1, 1, '2018-09-18', '2018-09-15 18:09:18', 'hkjh'),
(3, 'user', 'user', 'male', 1, 1, '2018-09-19', '2018-09-15 20:26:57', 'Accepted'),
(4, 'user', 'user', 'male', 1, 1, '2018-09-18', '2018-09-15 20:31:49', 'Cancelled by Patient'),
(5, 'user', 'user', 'male', 1, 1, '2018-09-19', '2018-09-15 20:33:43', 'Booking Registered.Wait for the update'),
(6, 'user', 'user', 'male', 1, 1, '2018-09-19', '2018-09-15 21:09:50', 'Booking Registered.Wait for the update'),
(7, 'user', 'user', 'male', 1, 1, '2018-09-18', '2018-09-15 21:12:37', 'Booking Registered.Wait for the update'),
(8, 'user', 'user', 'male', 1, 1, '2018-09-26', '2018-09-19 11:54:29', 'Cancelled by Patient'),
(10, 'Gman', 'sdf', 'female', 1, 1, '2018-10-17', '2018-10-11 11:21:11', 'Cancelled by Patient'),
(11, 'Gman', 'sfd', 'female', 1, 1, '2018-10-15', '2018-10-11 11:22:14', 'Cancelled by Patient'),
(12, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-16', '2018-10-11 11:27:19', 'Booking Registered.Wait for the update'),
(13, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-16', '2018-10-11 11:29:12', 'Booking Registered.Wait for the update'),
(14, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-16', '2018-10-11 11:31:35', 'Booking Registered.Wait for the update'),
(15, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-15', '2018-10-11 11:32:48', 'Booking Registered.Wait for the update'),
(16, 'user', 'user', 'male', 1, 1, '2018-10-16', '2018-10-11 11:36:35', 'Booking Registered.Wait for the update'),
(17, 'user', 'user', 'male', 1, 1, '2018-10-13', '2018-10-11 11:38:21', 'Booking Registered.Wait for the update'),
(18, 'user', 'user', 'male', 1, 1, '2018-10-18', '2018-10-11 11:39:22', 'Booking Registered.Wait for the update'),
(19, 'user', 'user', 'male', 1, 1, '2018-10-16', '2018-10-11 11:47:52', 'Booking Registered.Wait for the update'),
(20, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-17', '2018-10-11 11:49:48', 'Booking Registered.Wait for the update'),
(21, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-17', '2018-10-11 13:27:40', 'Booking Registered.Wait for the update'),
(22, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-17', '2018-10-11 13:36:11', 'Booking Registered.Wait for the update'),
(23, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-16', '2018-10-11 13:39:01', 'Booking Registered.Wait for the update'),
(24, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-17', '2018-10-11 13:45:44', 'Booking Registered.Wait for the update'),
(25, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-10-17', '2018-10-11 13:46:30', 'Accepted'),
(26, 'user', 'user', 'male', 1, 1, '2018-11-27', '2018-11-26 08:39:38', 'Booking Registered.Wait for the update'),
(27, 'user', 'user', 'male', 1, 1, '2018-11-29', '2018-11-26 08:41:01', 'Booking Registered.Wait for the update'),
(28, 'user', 'user', 'male', 1, 1, '2018-11-29', '2018-11-26 08:42:04', 'Booking Registered.Wait for the update'),
(29, 'user', 'user', 'male', 1, 1, '2018-11-27', '2018-11-26 08:44:01', 'Booking Registered.Wait for the update'),
(30, 'Gman', 'Sydney Molopo', 'male', 1, 1, '2018-11-28', '2018-11-26 08:54:03', 'Booking Registered.Wait for the update');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `town` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mid` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `experience` int(11) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `gender`, `dob`, `experience`, `specialization`, `contact`, `address`, `username`, `password`, `region`) VALUES
(1, 'Dr FB Molopo', 'male', '1980-01-01', 10, 'Orthodontist', 9999999999, 'XYZ tower, CST', 'doctor', 'doctor', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_availability`
--

CREATE TABLE `doctor_availability` (
  `cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `name`, `gender`, `dob`, `contact`, `address`, `username`, `password`, `region`) VALUES
(1, 'Manager', 'male', '1990-01-01', 8888899999, 'XYZ complex CST', 'manager', 'manager', 'Mumbai'),
(2, 'sydney', 'male', '2018-09-05', 670223758, 'hagsdhj', 'sydney', 'sydney', 'gauteng');

-- --------------------------------------------------------

--
-- Table structure for table `manager_clinic`
--

CREATE TABLE `manager_clinic` (
  `cid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_clinic`
--

INSERT INTO `manager_clinic` (`cid`, `mid`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `gender`, `dob`, `contact`, `email`, `username`, `password`) VALUES
('user', 'male', '1985-01-01', 7897897897, 'user@test.com', 'user', 'user'),
('g', 'male', '2018-09-19', 788618980, 'gmanthaiv@gmail.com', 'g', '123'),
('hah', 'male', '2018-09-03', 98, 'gmanthaiv@gmail.com', 'hn', '123'),
('Sydney Molopo', 'male', '1994-07-26', 670223758, 'sydneymolopo@icloud.com', 'Gman', '66567674'),
('gman', 'male', '0199-10-23', 6876, 'ghh@gmail.com', 'ghh', '123'),
('who', 'male', '2018-10-24', 5675, 'ads@gmail.com', 'ads', '123'),
('GGG', 'male', '2018-10-25', 35, 'dd@gmail.com', 'dd', '123'),
('qwe', 'male', '2018-10-17', 788618980, 'dd@gmail.com', 'qew', '123'),
('gg', 'male', '2018-10-10', 728618980, 'dd@gmail.com', 'aa', '123'),
('rt', 'male', '2018-10-09', 762223007, 'dd@gmail.com', 'we', '123'),
('sfsdf', 'male', '2018-10-16', 833393122, 'dd@gmail.com', 'user', '123'),
('gdhg', 'male', '2018-10-09', 833393122, 'gmangman@gmail.com', 'user', '123'),
('sfsdf', 'male', '2018-10-24', 833393122, 'gmanthaiv@gmail.com', 'dd', '123'),
('fdg', 'male', '2018-10-10', 833393122, 'gmanthaiv@gmail.com', 'ty', '123'),
('sdf', 'male', '2018-10-16', 833393122, 'gmanthaiv@gmail.com', 'we', '123'),
('gg', 'male', '2018-10-11', 833393122, 'gmanthaiv@gmail.com', 'aa', '123'),
('kk', 'male', '2018-10-09', 833393122, 'gmanthaiv@gmail.com', 'sss', '123'),
('sad', 'male', '2018-10-10', 833393122, 'gmanthaiv@gmail.com', 'zz', '123'),
('dfg', 'male', '2018-10-16', 833393122, 'gmanthaiv@gmail.com', 'cc', '123'),
('sfd', 'male', '2018-10-08', 833393122, 'cc@gmail.com', 'gman', '123'),
('sfsdf', 'male', '2018-10-16', 833393122, 'mm@gmail.com', 'gman', '123'),
('fgh', 'male', '2018-10-09', 833393122, 'tt@gmail.com', 'gman', '123'),
('dfg', 'male', '2018-10-16', 833393122, 'io@gmail.com', 'gman', '123'),
('sfd', 'male', '2018-10-16', 833393122, 'sss@gmail.com', 'gman', '123'),
('sdf', 'male', '2018-10-09', 833393122, 'qwe@gmail.com', 'gman', '123'),
('dfg', 'male', '2018-10-09', 833393122, 'sdf@gmail.com', 'gman', '123'),
('qwe', 'male', '2018-10-17', 833393122, 'tyu@gmail.com', 'gman', '123'),
('wqeqe', 'male', '2018-10-17', 833393122, 'hhhh@gmail.com', 'gman', '123'),
('sdf', 'male', '2018-10-17', 833393122, 'cvb@gmail.com', 'gman', '123'),
('gg', 'male', '2018-10-08', 833393122, 'ertert@gmail.com', 'gman', '123'),
('sfsdf', 'male', '2018-10-09', 833393122, 'gmanthaiv@gmail.com', 'gman', '123'),
('g', 'male', '2018-10-09', 833393122, 'qweqwe@gmail.com', 'gman', '123'),
('afs', 'male', '2018-10-16', 833393122, 'sdfsdf@gmail.com', 'gman', '123'),
('kajsdhkjasd', 'male', '2018-10-17', 833393122, 'asdasdasd@gmail.com', 'gman', '123'),
('sfsdf', 'male', '2018-10-17', 833393122, 'sdfsdfsdfsfd@gmail.com', 'gman', '123'),
('asdads', 'male', '2018-10-16', 833393122, 'asdasdasdasdasd@gmail.com', 'gman', '123'),
('wer', 'male', '2018-10-09', 833393122, 'qqq@gmail.com', 'gman', '123'),
('asd', 'male', '2018-10-23', 833393122, 'fff@gmail.com', 'gman', '123'),
('asdd', 'male', '2018-10-16', 670223758, 'rrr@gamil.com', 'gman', '123'),
('fgh', 'male', '2018-10-02', 833393122, 'sfa@gmsil.com', 'gman', '123'),
('sdf', 'male', '2018-10-16', 833393122, 'se@gmail.com', 'gman', '123'),
('adsasd', 'male', '2018-10-17', 833393122, 'gmanthaiv@gmail.com', 'x', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cid`,`name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctor_availability`
--
ALTER TABLE `doctor_availability`
  ADD PRIMARY KEY (`cid`,`did`,`day`,`starttime`,`endtime`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `manager_clinic`
--
ALTER TABLE `manager_clinic`
  ADD PRIMARY KEY (`cid`,`mid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`email`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
