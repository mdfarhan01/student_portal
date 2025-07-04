-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 11:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `gender` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender`) VALUES
(2, 'Male'),
(3, 'Female'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

CREATE TABLE `hello` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th'),
(5, '5th'),
(6, '6th'),
(7, '7th'),
(8, '8th');

-- --------------------------------------------------------

--
-- Table structure for table `student_portal`
--

CREATE TABLE `student_portal` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `roll` int(11) NOT NULL,
  `student_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_portal`
--

INSERT INTO `student_portal` (`id`, `student_name`, `email`, `phone`, `date_of_birth`, `gender`, `address`, `department`, `semester`, `roll`, `student_image`) VALUES
(3, 'Victor Copeland', 'fadev@mailinator.com', '+1 (786) 885-7686', 2025, '3', 'Repellendus Fugit', 'Irure similique quae', '7', 448, 'images/Barefoot Dragonfly training pic.jpg'),
(4, 'Lysandra Aguirre', 'mozinecyq@mailinator.com', '+1 (624) 231-8766', 2025, '4', 'Ipsa est adipisici', 'Temporibus consectet', '2', 628, 'images/ChatGPT Image May 30, 2025, 02_31_30 PM.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hello`
--
ALTER TABLE `hello`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_portal`
--
ALTER TABLE `student_portal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hello`
--
ALTER TABLE `hello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_portal`
--
ALTER TABLE `student_portal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
