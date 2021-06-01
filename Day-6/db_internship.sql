-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 06:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_gender` varchar(6) NOT NULL,
  `st_dob` datetime NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_mobile` int(10) NOT NULL,
  `stt_address` text NOT NULL,
  `st_password` text NOT NULL,
  `st_area` text NOT NULL,
  `st_blodgroup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`st_id`, `st_name`, `st_gender`, `st_dob`, `st_email`, `st_mobile`, `stt_address`, `st_password`, `st_area`, `st_blodgroup`) VALUES
(4, 'Princy Shah', '0', '2021-06-01 00:00:00', 'admin', 2147483647, 'Wadhwan, Surendranagr', 'princy#2806', 'Wadhwan', 'B+'),
(5, 'Princy Shah', '0', '2021-06-01 00:00:00', 'admin', 2147483647, 'Wadhwan, Surendranagr', 'princy#2806', 'Wadhwan', 'B+'),
(6, 'Maya', '0', '2021-06-01 00:00:00', 'maya@gmail.com', 2147483647, 'Surendranagar', 'Maya@1234', 'Wadhwan', 'A+'),
(7, 'Maya', 'Female', '2021-06-01 00:00:00', 'maya@gmail.com', 2147483647, 'Surendranagar', 'Maya@1234', 'Wadhwan', 'A+'),
(8, 'Mansi', 'Female', '2021-06-01 00:00:00', 'mansi@gmail.com', 2147483647, 'Ahmedabad', 'Mansi@1234', 'Ahmedabad', '0+'),
(18, 'Mital', 'Male', '2021-06-01 00:00:00', 'mital@gmail.com', 2147483647, 'Surat', 'Mital@123', 'Surat', 'A+'),
(21, 'Ansh', 'Male', '2021-06-28 00:00:00', 'ansh@gmail.com', 2147483647, 'Surendranagar', 'Ansh@123', '80 feet road', 'A+'),
(26, 'Hiral', 'Female', '2021-06-20 00:00:00', 'hiral@gmail.com', 2147483647, 'Mahesana', 'Hiral123', 'Mehsana', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_mobile`) VALUES
(1, 'Princy', 'Female', 9999999990),
(34, 'mansi', 'Female', 3333333330),
(36, 'maya', 'Female', 2222222222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
