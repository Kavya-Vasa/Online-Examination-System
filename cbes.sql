-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 05:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbes_db`
--
CREATE DATABASE IF NOT EXISTS `cbes_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cbes_db`;

-- --------------------------------------------------------

--
-- Table structure for table `addquestions_tbl`
--

CREATE TABLE `addquestions_tbl` (
  `course_name` varchar(15) NOT NULL,
  `question_number` int(10) NOT NULL,
  `question` varchar(70) NOT NULL,
  `option_1` varchar(50) NOT NULL,
  `option_2` varchar(50) NOT NULL,
  `option_3` varchar(50) NOT NULL,
  `option_4` varchar(50) NOT NULL,
  `correct_option` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup_tbl`
--

CREATE TABLE `adminsignup_tbl` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `enrollment_number` varchar(20) NOT NULL,
  `candidate_name` varchar(25) NOT NULL,
  `candidate_username` varchar(20) NOT NULL,
  `candidate_password` varchar(20) NOT NULL,
  `candidate_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `index_tbl`
--

CREATE TABLE `index_tbl` (
  `student_id` int(10) NOT NULL,
  `student_name` varchar(25) NOT NULL,
  `student_password` varchar(25) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `managecourses_tbl`
--

CREATE TABLE `managecourses_tbl` (
  `course_name` varchar(20) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `exam_date` int(20) NOT NULL,
  `eligible_students` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentsignup_tbl`
--

CREATE TABLE `studentsignup_tbl` (
  `student_id` int(10) NOT NULL,
  `student_name` varchar(25) NOT NULL,
  `student_password` varchar(25) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `updatestudent_tbl`
--

CREATE TABLE `updatestudent_tbl` (
  `student_id` int(10) NOT NULL,
  `student_username` varchar(25) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addquestions_tbl`
--
ALTER TABLE `addquestions_tbl`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `adminsignup_tbl`
--
ALTER TABLE `adminsignup_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`enrollment_number`);

--
-- Indexes for table `index_tbl`
--
ALTER TABLE `index_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `managecourses_tbl`
--
ALTER TABLE `managecourses_tbl`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `studentsignup_tbl`
--
ALTER TABLE `studentsignup_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `updatestudent_tbl`
--
ALTER TABLE `updatestudent_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addquestions_tbl`
--
ALTER TABLE `addquestions_tbl`
  MODIFY `question_number` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminsignup_tbl`
--
ALTER TABLE `adminsignup_tbl`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `index_tbl`
--
ALTER TABLE `index_tbl`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentsignup_tbl`
--
ALTER TABLE `studentsignup_tbl`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `updatestudent_tbl`
--
ALTER TABLE `updatestudent_tbl`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
