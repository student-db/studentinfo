-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 01:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studmanag`
--

-- --------------------------------------------------------

--
-- Table structure for table `accademic_year`
--

CREATE TABLE `accademic_year` (
  `id` int(20) NOT NULL,
  `academic_year` varchar(50) CHARACTER SET utf16 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `ad_name` varchar(20) DEFAULT NULL,
  `ad_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `ad_name`, `ad_pass`) VALUES
(1, 'admin', 'admin@');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(50) NOT NULL,
  `rollno` varchar(25) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `attend` varchar(50) DEFAULT NULL,
  `course_name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `rollno`, `name`, `attend`, `course_name`, `date`) VALUES
(1, 'LTKM18MCA038', 'Anandu', 'Present', 'Python', '2021-01-16'),
(9, 'TKM19MCA006', 'ARYA RAJAN', 'Present', 'Python', '2021-01-17'),
(12, 'TKM19MCA008', 'Jane', 'Absent', 'Python', '2021-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(20) NOT NULL,
  `course_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `course_name`) VALUES
(301, 'Web Data Mining'),
(303, 'E Commerce'),
(305, 'Cryptography'),
(365, ' Cyber Forensics'),
(367, 'Internet of Things'),
(369, 'Python'),
(387, 'Computer Graphics');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(20) NOT NULL,
  `dept_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(50) NOT NULL,
  `rollno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `batch` varchar(25) NOT NULL,
  `sub1` int(20) DEFAULT NULL,
  `sub2` int(20) DEFAULT NULL,
  `sub3` int(20) DEFAULT NULL,
  `sub4` varchar(20) DEFAULT NULL,
  `sub5` int(20) DEFAULT NULL,
  `sub6` int(20) DEFAULT NULL,
  `lab1` int(20) DEFAULT NULL,
  `lab2` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `rollno`, `name`, `batch`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `lab1`, `lab2`) VALUES
(1, 40, 'Anandu', 'MCA2K19A', 50, 48, 50, '50', 49, 50, 45, 49);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(50) NOT NULL,
  `regno` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `admissionno` int(50) DEFAULT NULL,
  `contactno` int(50) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `academicyear` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `regno`, `name`, `dept`, `admissionno`, `contactno`, `batch`, `academicyear`) VALUES
(11, 'TKM19MCA006', 'ARYA R', 'MCA', 1051, 999587664, 'MCA2K19A', '2016-2020'),
(12, 'TKM19MCA008', 'Jane', 'mca', 7887, 2147483647, 'MCA2K19A', '2016-2020');

-- --------------------------------------------------------

--
-- Table structure for table `stulogin`
--

CREATE TABLE `stulogin` (
  `id` int(11) NOT NULL,
  `stud_name` varchar(20) DEFAULT NULL,
  `stud_pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stulogin`
--

INSERT INTO `stulogin` (`id`, `stud_name`, `stud_pass`) VALUES
(1, 'arya', 'arya@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accademic_year`
--
ALTER TABLE `accademic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stulogin`
--
ALTER TABLE `stulogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accademic_year`
--
ALTER TABLE `accademic_year`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stulogin`
--
ALTER TABLE `stulogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
