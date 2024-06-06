-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 06:23 AM
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
-- Database: `db_evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'admin', 'admin', '2022-08-24 17:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voted_for` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `email`, `voter_id`, `voted_for`) VALUES
(1, 'Rashi Gupta', 'don.coolbuddy.xxx@gmail.com', 546754, 'BJP'),
(3, 'Chadan Singh', 'chabdan@gmail.com', 65786, 'BJP'),
(4, 'Aman Jain', 'aman@live.in', 896740, 'BJP'),
(5, 'Vicky Kausal', 'lastworker@gmail.com', 45432, 'BJP'),
(6, 'Abhishek Singh', 'abhi6751@gmail.com', 87430, 'BJP'),
(7, 'Amit Bash', 'avneet@gmail.com', 74629, 'INC'),
(8, 'Sonam Kapur', 'santa@gmail.com', 89378, 'TMC'),
(9, 'Arvind Kejriwal', 'arvind@gmail.com', 94940, 'AAP'),
(10, 'Manish Sisodia', 'manish@live.in', 6483, 'AAP'),
(11, 'Raja Ram', 'rahulraj@hmail.com', 9749403, 'INC'),
(12, 'Subham Kumar', 'subham@gmail.com', 95678, 'BJP\r\n'),
(13, 'Chadan Babu', 'chabdan@gmail.com', 5, 'BJP'),
(14, 'Abhishek Singh', 'abhi6751@gmail.com', 12345, 'TMC'),
(15, 'Abhishek Kumar', 'ak@gmail.com', 12345, 'TMC'),
(16, 'Anbhi', 'navin@gmail.com', 132214314, 'BJP'),
(17, 'Ravish', 'rah@gmail.com', 2437, 'BJP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
