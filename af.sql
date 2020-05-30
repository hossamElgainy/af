-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 02:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `af`
--

-- --------------------------------------------------------

--
-- Table structure for table `af_users`
--

CREATE TABLE `af_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `af_users`
--

INSERT INTO `af_users` (`id`, `name`, `username`, `email`, `phone`, `password`, `avatar`, `time`) VALUES
(4, 'moud elnajar', 'halaa', 'elnajar76@gmail.com', '+201126776468', '$2y$10$jSPeS73M8EBAXbbn1hTTe.WfR30xypycU.OgBeFyTIWwFLSwF4E2O', 'user.jpeg', '2020-05-30 12:46:00'),
(5, 'Ahmed test', 'ahmed123', 'ahmed@gmail.com', '', '$2y$10$AK9dBI6lX2QHdeTszJwlwejvnc6vra.1GWEQlbPeuf4ok.7b/jRxq', '1004_right.png', '2020-05-30 12:50:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `af_users`
--
ALTER TABLE `af_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `af_users`
--
ALTER TABLE `af_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
