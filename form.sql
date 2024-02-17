-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 04:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `phoneta`
--

CREATE TABLE `phoneta` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phoneta`
--

INSERT INTO `phoneta` (`id`, `Name`, `address`, `phone`, `designation`) VALUES
(3, 'mustaf', 'Howlwadaag', '0618630475', 'programmer'),
(4, 'hafsiina', 'Boondhere', '0618630475', 'programmer'),
(5, 'haliima', 'Boondhere', '67767789', 'programmer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'hafza', 'hafzaabdulkhadir@gmail.com', '$2y$10$r9cb6bvUmSD.j6yEI0XHr.K'),
(4, 'Zafaah', 'Hafzaabdulkhadir@gmail.com', '$2y$10$KxH.sEAVH4oUIj1rLHS3yeC'),
(5, 'Aisha', 'Aisha@gmail.com', '$2y$10$18w265GZi4IpBvR2VXMJWeC'),
(7, 'xaawa', 'xaawa@gmail.com', '$2y$10$ZfCZjdinNna8URTw1RE19uY'),
(8, 'ikraan', 'ikraan@gmail.com', '$2y$10$DeTEWs0nVLPNz3Rtno.T9.P'),
(9, 'xaliima ', 'xalima@gmail.com', '$2y$10$AtNJLKsFGLS5f1v1HV.cs.W'),
(10, 'maaido', 'maaida@gmail.com', '$2y$10$nGm8v6v0zGk07xW3RGIW4.u'),
(11, 'intisaar', 'intisaar@gmail.com', '$2y$10$QjMJUzI3YYr8uoZF9l34VOr'),
(12, 'Mustaf', 'mustaf@gmail.com', '$2y$10$E5XBRnJwx2hEtQQuq0zTP.q'),
(13, 'abdirsak', 'Abdi@gmail.com', '$2y$10$CeTCdTsDb8MY52oUnLsfdOB'),
(14, 'salaado', 'Aisha@gmail.com', '$2y$10$Ds.olfCn2k3IvKDQLQQ42Ob'),
(15, 'Admin', 'admin@gmail.com', '$2y$10$.ps.AupN59g0Mzz7qZT80e0'),
(16, 'inti', 'intisaar@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phoneta`
--
ALTER TABLE `phoneta`
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
-- AUTO_INCREMENT for table `phoneta`
--
ALTER TABLE `phoneta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
