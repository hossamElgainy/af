-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 02:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `af_questions`
--

CREATE TABLE `af_questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `af_questions`
--

INSERT INTO `af_questions` (`id`, `user_id`, `question`, `time`) VALUES
(1, 4, 'السلام عليكم , هل الارض مسطحة ؟', '2020-07-19 00:24:14'),
(2, 4, 'من هو الصحابي الذي عند موته اهتز عرش الرحمن؟', '2020-07-19 00:42:00'),
(3, 4, 'What\'s the first thing that comes to mind when you hear the word “fidget”?\r\n', '2020-07-19 00:42:37'),
(6, 4, 'لماذا نحن هنااااااااا', '2020-07-19 00:45:23');

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
  `time` timestamp NOT NULL DEFAULT current_timestamp()
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
-- Indexes for table `af_questions`
--
ALTER TABLE `af_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `af_users`
--
ALTER TABLE `af_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `af_questions`
--
ALTER TABLE `af_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `af_users`
--
ALTER TABLE `af_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
