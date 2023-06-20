-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 09:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batch_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `roll`, `email`, `address`) VALUES
(1, 'Asad', '20CSE006', 'asad428161@gmail.com', 'Magura'),
(2, 'Tanvir', '20CSE004', 'tanvir8161@gmail.com', 'Barishal'),
(3, 'Zakir', '20CSE037', 'zakirneyamar01@gmail.com', 'khulna'),
(19, '', '', '', ''),
(20, 'ugjk', '45', 'sdg@gmail.com', ''),
(21, 'ugjk', '45', 'sdg@gmail.com', 'gdh'),
(22, 'Ashik', '20CSE010', 'ashik2233g@gmail.com', 'Barishal'),
(23, 'Ashik', '20CSE010', 'ashik2233g@gmail.com', 'Barishal'),
(24, 'Ashik', '20CSE010', 'ashik2233g@gmail.com', 'Barishal'),
(25, 'Ashik', '20CSE010', 'ashik2233g@gmail.com', 'Barishal');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `designation`, `phone`, `dob`, `address`) VALUES
(1, 'Akash', 'professor', '+8801765166881', '1990-02-03', 'Magura'),
(2, 'Rahim', ' Assistant professor', '+8801763366881', '1992-05-02', 'Khulna'),
(3, 'Rasel', 'Lecturer', '+8801787666881', '1989-01-03', 'Barishal'),
(8, 'Jamal', 'Professor', '+88018833124', '1990-03-12', 'Khulna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
