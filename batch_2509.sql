-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2026 at 01:10 PM
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
-- Database: `batch_2509`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `std_name` varchar(250) NOT NULL,
  `std_email` varchar(250) NOT NULL,
  `std_phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `std_name`, `std_email`, `std_phone`) VALUES
(4, 'Rhonda Molina', 'moxekedyja@mailinator.com', '+1 (324) 901-8935'),
(5, 'Zane Gallegos', 'hapekydat@mailinator.com', '+1 (701) 481-8556'),
(6, 'Rhonda Molina', 'moxekedyja@mailinator.com', '+1 (324) 901-8935'),
(7, 'Zane Gallegos', 'hapekydat@mailinator.com', '+1 (701) 481-8556'),
(8, 'Kaseem Combs', 'rahigyze@mailinator.com', '+1 (474) 368-4387'),
(9, 'shourab dev', 'shourab@gmail.com', '0123456789'),
(10, 'Amena Stephens', 'kukosozo@mailinator.com', '+1 (851) 802-7557'),
(11, 'George Buchanan', 'muduh@mailinator.com', '+1 (366) 712-8125'),
(12, 'Fay Fuller', 'zakomofafa@mailinator.com', '+1 (536) 761-9489'),
(13, 'Reuben Garrett', 'mibyfojah@mailinator.com', '+1 (308) 596-5477'),
(14, 'Connor Bradford', 'hodadi@mailinator.com', '+1 (577) 838-8184'),
(15, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
