-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2025 at 10:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `mobile`, `email`, `age`, `course`, `username`, `password`) VALUES
(43, 'nilesh jain', '7728868387', 'nilesh@gmail.com', '27', 'pgdca', 'nilesh', 'admin'),
(44, 'mateen', '8560860786', 'mateen@gmail.com', '27', 'mca', 'mateen', 'admin'),
(45, 'arshad', '8560860786', 'arshad@gmail.com', '27', 'mca', 'arshad', 'admin'),
(46, 'alpana sheikh', '7728868357', 'alpana@gmail.com                  ', '28', 'bca', 'alpana', 'admin'),
(47, 'antima', '8560780785', 'antima@gmail.com', '22', 'mca', 'antima', 'admin'),
(80, 'vinod sir', '7728868387', 'sohinLI786@gmail.com', '21', 'commerce', 'sohin', 'sohim'),
(98, 'sonu', '7728868387', 'sohinali786@gmail.com', '21', 'BCA', 'sonu', 'sonu'),
(105, 'sohin ali', '7728868387', 'sohin7575@gmail.com', '27', 'bca', 'sohin', '7575'),
(110, 'ramzan ali', '7728868387', 'sohin@gmail.com', '25', 'BCA', 'ramzan', '7575'),
(112, 'ravi', '7728868387', 'soinali786@gmail.com', '24', 'bca', 'ravi', '75754'),
(113, 'sohin', '8560860786', 'mohin7878@gmail.com', '28', 'bca', 'sohin', '7575'),
(114, 'raghu singh', '7728868387', 'raghu@gmail.com', '21', 'jwdjwb', 'raghu', '7575'),
(115, 'sohin', '6565656565', 'fgf@gmail.com', '21', 'btech', 'sohin', '7575');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
