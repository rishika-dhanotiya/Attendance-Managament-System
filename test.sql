-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 06:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `facultytable`
--

CREATE TABLE `facultytable` (
  `facultyname` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultytable`
--

INSERT INTO `facultytable` (`facultyname`, `subject`) VALUES
('shaligram prajapat', 'numerical analysis & design'),
('akshay patidar', 'analog electronics'),
('vivek shrivastav', 'computer architecture'),
('kirti mathur', 'system programming'),
('jugendra dongre', 'computer graphics');

-- --------------------------------------------------------

--
-- Table structure for table `logincheck`
--

CREATE TABLE `logincheck` (
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logincheck`
--

INSERT INTO `logincheck` (`loginid`, `pass`, `status`) VALUES
('29', 'rishi', 'student'),
('30', 'dost', 'student'),
('admin', 'admin', 'admin'),
('faculty', 'faculty', 'faculty'),
('rishika', '29', 'student'),
('student', 'student', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `sname` varchar(50) NOT NULL,
  `roll_no` varchar(25) NOT NULL,
  `course` varchar(25) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`sname`, `roll_no`, `course`, `semester`, `contact_no`, `address`) VALUES
('Ojasvi Dixit', 'IT-2K15-20', 'Mtech', '6', 13658954, '12abs'),
('Paramita Majumdar', 'IT-2K15-21', 'Mtech', '6', 9874562211, '12frgdf'),
('Pooja Patel', 'IT-2K15-23', 'Mtech', '6', 5465131666, 'dsddfc12'),
('Rishika Dhanotiya', 'IT-2K15-29', 'Mtech', '6', 9713584236, '12ccsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logincheck`
--
ALTER TABLE `logincheck`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`roll_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
