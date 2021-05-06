-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 01:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `act04_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `username`, `activity`, `time`) VALUES
(1, 'Kari', 'LogIn', '2021-05-06 19:00:19'),
(2, 'Kari', 'LogOut', '2021-05-06 19:00:26'),
(3, 'Kari', 'ChangePassword', '2021-05-06 19:02:53'),
(4, 'Kari', 'LogIn', '2021-05-06 19:03:33'),
(5, 'Kari', 'LogOut', '2021-05-06 19:03:41'),
(6, 'ADMIN', 'LogIn', '2021-05-06 19:04:45'),
(7, 'ADMIN', 'LogOut', '2021-05-06 19:05:02'),
(8, 'ADMIN', 'LogIn', '2021-05-06 19:12:40'),
(9, 'ADMIN', 'LogOut', '2021-05-06 19:13:29'),
(10, 'Kari', 'LogIn', '2021-05-06 19:21:07'),
(11, 'Kari', 'LogOut', '2021-05-06 19:21:22'),
(12, 'Kari', 'ChangePassword', '2021-05-06 19:21:50'),
(13, 'Kari', 'LogIn', '2021-05-06 19:22:29'),
(14, 'Kari', 'LogOut', '2021-05-06 19:22:36'),
(15, 'ADMIN', 'LogIn', '2021-05-06 19:22:54'),
(16, 'ADMIN', 'LogOut', '2021-05-06 19:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bopols`
--

CREATE TABLE `bopols` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otp` int(10) NOT NULL,
  `curdate` varchar(50) NOT NULL,
  `endate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bopols`
--

INSERT INTO `bopols` (`id`, `username`, `otp`, `curdate`, `endate`) VALUES
(1, 'Kari', 445625, '2021-05-06 19:00:12', '2021-05-06 19:05:12'),
(2, 'Kari', 329920, '2021-05-06 19:03:23', '2021-05-06 19:08:23'),
(3, 'ADMIN', 657122, '2021-05-06 19:04:36', '2021-05-06 19:09:36'),
(4, 'ADMIN', 371792, '2021-05-06 19:12:33', '2021-05-06 19:17:33'),
(5, 'Kari', 943730, '2021-05-06 19:20:58', '2021-05-06 19:25:58'),
(6, 'Kari', 621207, '2021-05-06 19:22:23', '2021-05-06 19:27:23'),
(7, 'ADMIN', 882928, '2021-05-06 19:22:48', '2021-05-06 19:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'ADMIN', 'admin123', 'admin@gmail.com'),
(2, 'Kari', 'Kari12345*', 'charles@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bopols`
--
ALTER TABLE `bopols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bopols`
--
ALTER TABLE `bopols`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
