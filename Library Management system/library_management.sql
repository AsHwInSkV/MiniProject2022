-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 05:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`, `confirm_password`) VALUES
(1, 'ASHWIN', 'KSD19CS043', 'lbscek', 'lbscek'),
(2, 'ALLEN', 'KSD19CS054', 'Lbscek', 'Lbscek'),
(3, 'MALAVIKA', 'KSD19CS023', 'Lbscek@123', 'Lbscek@123'),
(4, 'LAYANA', 'KSD10CS003', 'lbscek@2001', 'lbscek@2001'),
(5, ' Aradhya', ' KSD19CS001', '  Aru@123', '  Aru@123'),
(6, ' Nithya', ' KSD19CS06', '  123#a', '  123#a');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `admin_logid` int(30) NOT NULL,
  `admin_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date_log` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

CREATE TABLE `barcode` (
  `barcode_id` varchar(50) NOT NULL,
  `pre_barcode` varchar(50) NOT NULL,
  `mid_barcode` varchar(50) NOT NULL,
  `suff_barcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barcode`
--

INSERT INTO `barcode` (`barcode_id`, `pre_barcode`, `mid_barcode`, `suff_barcode`) VALUES
('LBS001CSE', 'LBS', '001', 'CSE'),
('LBS002CSE', 'LBS', '002', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `barcode_no` varchar(50) DEFAULT NULL,
  `book_id` int(20) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_copies` int(20) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`barcode_no`, `book_id`, `book_title`, `author`, `book_copies`, `publisher_name`, `ISBN`, `remarks`) VALUES
('LBS001CSE', 1000, 'NETWORK', 'M.N. ROY', 3, 'ARAVIND', ' 100-3-19-2019106-0', 'GOOD'),
(' LBS002CSE', 1002, ' COMPILER', ' RANIYA', 1, '  SIDDHARTH', ' 100-3-19-2019106-1', ' GOOD'),
(' LBS003CSE', 1003, ' DATASTRUCTURE', ' K.K.AMLA', 4, '  MYTHILI RAM', ' 100-3-19-2019106-2', ' GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `issuebook_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrowed` date NOT NULL,
  `due_date` date NOT NULL,
  `date_returned` date NOT NULL,
  `borrow_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`issuebook_id`, `member_id`, `book_id`, `date_borrowed`, `due_date`, `date_returned`, `borrow_status`) VALUES
(1087, 101, 1000, '2022-07-01', '2022-07-21', '0000-00-00', 'borrowed');

-- --------------------------------------------------------

--
-- Table structure for table `member_registration`
--

CREATE TABLE `member_registration` (
  `member_id` int(11) NOT NULL,
  `college_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `semester` varchar(10) NOT NULL,
  `Gender` char(10) NOT NULL,
  `type` char(10) NOT NULL,
  `dept` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`member_id`, `college_id`, `name`, `contact`, `semester`, `Gender`, `type`, `dept`) VALUES
(101, 2019106, ' Varsha ', '9061646178', '  6', '  female', ' student', ' CSE'),
(102, 1000000, ' Abhilash', '9870912345', '  ', '  male', ' staff', ' ME'),
(103, 1000001, ' Remya', ' 9087345271', '  ', '  female', ' staff', ' CIVIL');

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE `return_book` (
  `returnbook_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(20) NOT NULL,
  `date_borrowed` date NOT NULL,
  `due_date` date NOT NULL,
  `date_returned` date NOT NULL,
  `borrow_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_book`
--

INSERT INTO `return_book` (`returnbook_id`, `member_id`, `book_id`, `date_borrowed`, `due_date`, `date_returned`, `borrow_status`) VALUES
(1085, 102, 1002, '2021-07-01', '2021-07-23', '2021-07-07', 'returned');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`admin_logid`);

--
-- Indexes for table `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`barcode_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`issuebook_id`);

--
-- Indexes for table `member_registration`
--
ALTER TABLE `member_registration`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`returnbook_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
