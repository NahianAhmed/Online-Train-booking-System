-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 08:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nahian`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `lid` int(11) NOT NULL,
  `station` varchar(20) DEFAULT NULL,
  `des` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `station`, `des`) VALUES
(28, 'Dhaka', 'Dhaka'),
(29, 'Barisal', 'Barisal'),
(30, 'Mymansingh', 'Mymansingh'),
(31, 'Jessore', 'Jessore'),
(32, 'Chittagong', 'Chittagong'),
(33, 'Sylhet', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `pid` int(11) NOT NULL,
  `station` varchar(50) DEFAULT NULL,
  `des` varchar(50) DEFAULT NULL,
  `shedule` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sit` varchar(10) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `pay` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pid`, `station`, `des`, `shedule`, `class`, `gender`, `age`, `name`, `sit`, `mobile`, `pay`) VALUES
(7, 'Dhaka', 'Jessore', 'Ekota Express 08.30 AM', '600TK', 'male', 'Adult', 'nahian ahmed', 'Block A a1', '01677035933', 'DBBL NEXUS'),
(8, 'Dhaka', 'Mymansingh', 'Sonar Bangla Express 08.30 AM', '1st Class 885TK', 'male', 'Adult', 'nahian ahmed', 'Block A a1', '01677035933', 'DBBL NEXUS'),
(9, 'Dhaka', 'Barisal', 'Sonar Bangla Express 05.00 PM', '1st Class 525TK', 'male', 'Adult', 'ABC', 'Block B b2', '01677035933', 'DBBL Mobile'),
(11, 'Dhaka', 'Mymansingh', 'Sonar Bangla Express 08.30 AM', '2nd Class 708TK', 'male', 'Children', 'Rabby Ahmed', 'Block A : ', '01775084984', 'DBBL Mobile'),
(12, 'Dhaka', 'Mymansingh', 'Sonar Bangla Express 08.30 AM', '2nd Class 708TK', 'male', 'Children', 'Monsur Ahmed', 'Block A b1', '0167703597', 'Bcash'),
(14, 'Dhaka', 'Jessore', 'Ekota Express 08.30 AM', '3rd Class 320TK', 'female', 'Children', 'tarik', 'Block A a1', '01775084984', 'VISA'),
(15, 'Dhaka', 'Sylhet', 'Sonar Bangla Express 02.30 AM', '2nd Class 480TK', 'female', 'Adult', 'Happy', 'Block A b1', '01775084984', 'Bcash'),
(16, 'Dhaka', 'Chittagong', 'Upaban Express 02.00 PM', '1st Class 750TK', 'male', 'Adult', 'dipok', 'Block A b1', '017777777', 'VISA'),
(17, 'Dhaka', 'Jessore', 'Ekota Express 08.30 AM', '1st Class 600TK', 'male', 'Adult', 'nahian ahmed', 'Block B b2', '01677035933', 'DBBL NEXUS'),
(18, 'Dhaka', 'Jessore', 'Ekota Express 08.30 AM', '1st Class 600TK', 'male', 'Adult', 'nahian ahmed', 'Block A a1', '01677035933', 'DBBL NEXUS'),
(19, 'Dhaka', 'Barisal', 'Sonar Bangla Express 05.00 PM', '1st Class 525TK', 'male', 'Adult', 'Nahian Ahmed', 'Block A b1', '01677035977', 'DBBL Mobile'),
(20, 'Dhaka', 'Barisal', 'Sonar Bangla Express 05.00 PM', '1st Class 525TK', 'male', 'Adult', 'Monsur Ahmed', 'Block A a1', '01921289239', 'DBBL NEXUS'),
(21, 'Dhaka', 'Barisal', 'Sonar Bangla Express 05.00 PM', '1st Class 525TK', 'male', 'Adult', 'Monsur Ahmed', 'Block A a1', '01921289239', 'DBBL NEXUS');

-- --------------------------------------------------------

--
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` (`id`, `name`, `email`, `mobile`, `pass`) VALUES
(1, 'Nahian', 'nahianahmedcse@gmail.com', '01677035977', '9193ce3b31332b03f7d8af056c692b84'),
(2, 'Monsur Ahmed', 'monsurahmed@gamil.com', '01677035977', '197639b278057c519189add5413712e3'),
(3, 'Tarikul', 'tarikul@gmil.com', '01921289239', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `tid` int(11) NOT NULL,
  `block` varchar(10) DEFAULT NULL,
  `sit` varchar(10) DEFAULT NULL,
  `s` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`tid`, `block`, `sit`, `s`) VALUES
(1, 'A', 'a1', 'x'),
(2, 'A', 'a2', 'bucked'),
(3, 'A', 'b1', 'x'),
(4, 'B', 'b2', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ti_id` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sno` int(11) NOT NULL,
  `dnme` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `tid` int(11) NOT NULL,
  `trainname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`tid`, `trainname`) VALUES
(1, 'Ekota Express'),
(2, 'Bijoy Express'),
(3, 'Sonar Bangla Express'),
(4, 'Upaban Express'),
(5, 'Joyantika Express'),
(6, 'Tista Express');

-- --------------------------------------------------------

--
-- Table structure for table `t_time`
--

CREATE TABLE `t_time` (
  `tid` int(11) NOT NULL,
  `station` varchar(50) DEFAULT NULL,
  `des` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `train` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_time`
--

INSERT INTO `t_time` (`tid`, `station`, `des`, `time`, `train`, `price`) VALUES
(10, 'Dhaka', 'Barisal', '05.00 PM', 'Sonar Bangla Express', 350),
(11, 'Dhaka', 'Mymansingh', '08.30 AM', 'Sonar Bangla Express', 590),
(13, 'Dhaka', 'Jessore', '08.30 AM', 'Ekota Express', 400),
(15, 'Barisal', 'Mymansingh', '08.30 AM', 'Bijoy Express', 400),
(16, 'Dhaka', 'Chittagong', '09.00 AM', 'Ekota Express', 400),
(17, 'Dhaka', 'Jessore', '08.30 AM', 'Tista Express', 400),
(18, 'Dhaka', 'Sylhet', '02.30 AM', 'Sonar Bangla Express', 400),
(19, 'Dhaka', 'Chittagong', '02.00 PM', 'Upaban Express', 500),
(20, 'Barisal', 'Dhaka', '08.30 AM', 'Bijoy Express', 490),
(21, 'Barisal', 'Mymansingh', '08.30 AM', 'Ekota Express', 490);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `singup`
--
ALTER TABLE `singup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ti_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `t_time`
--
ALTER TABLE `t_time`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `singup`
--
ALTER TABLE `singup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_time`
--
ALTER TABLE `t_time`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
