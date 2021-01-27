-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 07:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smswt`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `roll` int(6) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll`, `class`, `name`, `fname`, `mname`, `address`, `phone`, `photo`, `date_time`) VALUES
(6, 2222, 'Class 5', 'sabil u 2', 'khairul alam', 'ferdousy', 'Bogura', '01735356323', '2222.jpg', '2020-12-15 15:37:17'),
(8, 1088, 'Class 3', 'sabilul haque', 'sabil', 'ferdousy', 'dhaka', '01935721578', '1088.jpeg', '2020-12-20 04:43:44'),
(10, 2222, 'Class 1', 'sabilul haque', 'khairul alam', 'ferdousy', 'dhaka', '01731243479', '2222.jpeg', '2020-12-20 04:45:29'),
(12, 7777, 'Class 4', 'sabilul haque', 'khairul alam', 'ferdousy', 'Bogura u', '01731243479', '7777.jpg', '2020-12-24 06:45:57'),
(13, 9999, 'Class 3', 'maruf', 'maruf 2', 'lyfofl6d', 'dhaka', '01935721578', '9999.jpeg', '2021-01-12 05:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `userswt`
--

CREATE TABLE `userswt` (
  `id` int(11) NOT NULL,
  `name` varchar(6) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userswt`
--

INSERT INTO `userswt` (`id`, `name`, `email`, `password`, `photo`, `date_time`) VALUES
(5, 'Sabil', 'sabilbup2018@gmail.com', '12345678', 'Sabil.jpg', '2020-12-15 09:04:08'),
(6, 'sabilu', '', '12345678', 'sabilul haque.jpg', '2020-12-15 09:31:17'),
(7, 'sabilu', 'sabilul.msh@gmail.com', '12345678', 'sabilul haque.png', '2020-12-22 16:30:22'),
(8, 'abc', 'abc@gmail.com', '12345678', 'abc.png', '2020-12-23 04:07:39'),
(9, 'Ariyan', 'a@gmail.com', '12345678', 'Ariyan mahmud.svg', '2020-12-24 05:49:24'),
(10, 'zhuma', 'z@gmail.com', '12345678', 'zhuma.svg', '2020-12-24 06:43:38'),
(11, 'sajib', 'sajib@gmail.com', '12345678', 'sajib.jpeg', '2021-01-12 05:44:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userswt`
--
ALTER TABLE `userswt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userswt`
--
ALTER TABLE `userswt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
