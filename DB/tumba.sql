-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 02:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumba`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regno` varchar(9) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `depart` varchar(10) NOT NULL,
  `academic` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `Linux_marks` varchar(11) DEFAULT 'null',
  `Researc` varchar(11) DEFAULT 'null',
  `Math` varchar(11) DEFAULT 'null',
  `Networking` varchar(11) DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regno`, `fname`, `lname`, `sex`, `depart`, `academic`, `level`, `Linux_marks`, `Researc`, `Math`, `Networking`) VALUES
('19RP11731', 'BISANGWA', 'Fabrice', 'Male', 'RE', '2019-2020', 'Level One', '70', '80', '60', '78'),
('19RP38488', 'NKURANGA2', 'Alphonse', 'Female', 'IT', '2019-2020', 'Level One', 'null', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `Username`, `password`) VALUES
(1, 'Linux', 'Linux'),
(2, 'Networking', 'Networking'),
(3, 'Math', 'Math'),
(4, 'Research', 'Research');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
