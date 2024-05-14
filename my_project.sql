-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 09:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fist_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fist_name`, `last_name`, `email`) VALUES
(1, 'nethula', 'sasmeka', 'nethulasasmeka@gmail'),
(2, 'kamal', 'perera', 'kamalperera@gmail'),
(3, 'nimal', 'sulakshana', 'nimalsulakshana@gmail'),
(4, 'dumidu', 'thikshana', 'dumiduthikshana@gmail'),
(5, 'hasadu', 'galapatti', 'hasadhugalapatt@gmail'),
(6, 'avishka', 'kodhagoda', 'avishkakodhagoda@gmail'),
(7, 'dulana', 'bandara', 'dulanabandara@gmail'),
(8, 'sathsarani', 'ransadhi', 'sathsaraniransadhi@gmail.com'),
(9, 'agith', 'hearath', 'agithherat@gmail.com'),
(23, 'agith', 'hearath', 'agithherat@gmail.com'),
(24, 'agith', 'hearath', 'agithherat@gmail.com'),
(25, 'agith', 'hearath', 'agithherat@gmail.com'),
(35, 'kamal', 'rathnayaka', 'kamalrathnayaka@gmail.com'),
(42, 'idika', 'samatha', 'indikasamanth@gmail.com'),
(45, 'himasa', 'bandara', 'himasabandara@gmil.com'),
(50, '', '', ''),
(51, '', '', ''),
(52, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_document`
--

CREATE TABLE `student_document` (
  `id` int(11) NOT NULL,
  `lesson_numbers` int(11) NOT NULL,
  `lesson_name` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_questions`
--

CREATE TABLE `student_questions` (
  `id` int(11) NOT NULL,
  `lesson_numbers` int(11) NOT NULL,
  `lesson_name` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_video`
--

CREATE TABLE `student_video` (
  `id` int(11) NOT NULL,
  `lesson_numbers` int(11) NOT NULL,
  `lesson_name` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_document`
--
ALTER TABLE `student_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_questions`
--
ALTER TABLE `student_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_video`
--
ALTER TABLE `student_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `student_document`
--
ALTER TABLE `student_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_questions`
--
ALTER TABLE `student_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_video`
--
ALTER TABLE `student_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
