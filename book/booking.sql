-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2023 at 12:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `movie_id` int(2) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `promocode` varchar(20) DEFAULT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `movie_id`, `date`, `time`, `user_id`, `promocode`, `dt_created`, `dt_updated`) VALUES
(1, 2, '2023-11-24', '11pm', 1, 'NEW', '2023-11-24 09:30:38', '2023-11-24 09:30:38'),
(2, 1, '2023-11-25', '5pm', 1, 'NEW', '2023-11-24 09:40:43', '2023-11-24 09:40:43'),
(3, 1, '2023-11-24', '5pm', 1, '', '2023-11-24 09:40:57', '2023-11-24 09:40:57'),
(4, 1, '2023-11-24', '5pm', 3, 'NEW', '2023-11-24 09:42:19', '2023-11-24 09:42:19'),
(5, 1, '2023-11-25', '5pm', 3, '', '2023-11-24 09:42:31', '2023-11-24 09:42:31'),
(6, 2, '2023-11-25', '2pm', 1, 'LOOT', '2023-11-24 10:24:51', '2023-11-24 10:24:51'),
(7, 3, '2023-11-25', '2pm', 1, 'LOOT', '2023-11-24 10:25:26', '2023-11-24 10:25:26'),
(8, 1, '2023-11-24', '5pm', 1, 'NEW', '2023-11-24 10:35:17', '2023-11-24 10:35:17'),
(9, 3, '2023-11-24', '5pm', 1, 'NEW', '2023-11-24 10:35:48', '2023-11-24 10:35:48'),
(10, 2, '2023-11-25', '5pm', 3, 'NEW', '2023-11-24 10:36:27', '2023-11-24 10:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `seat`, `dt_created`, `dt_updated`) VALUES
(1, 1, '8,9', '2023-11-24 09:30:38', '2023-11-24 09:30:38'),
(2, 2, '3', '2023-11-24 09:40:44', '2023-11-24 09:40:44'),
(3, 3, '6', '2023-11-24 09:40:57', '2023-11-24 09:40:57'),
(4, 4, '12,15', '2023-11-24 09:42:20', '2023-11-24 09:42:20'),
(5, 5, '6', '2023-11-24 09:42:31', '2023-11-24 09:42:31'),
(6, 6, '15', '2023-11-24 10:24:51', '2023-11-24 10:24:51'),
(7, 7, '5', '2023-11-24 10:25:26', '2023-11-24 10:25:26'),
(8, 8, '9', '2023-11-24 10:35:17', '2023-11-24 10:35:17'),
(9, 9, '12', '2023-11-24 10:35:49', '2023-11-24 10:35:49'),
(10, 10, '3', '2023-11-24 10:36:27', '2023-11-24 10:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `promocode_id` varchar(20) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `user_id`, `promocode_id`, `dt_created`, `dt_updated`) VALUES
(7, '1', '1', '2023-11-24 10:35:16', '2023-11-24 10:35:16'),
(8, '1', '1', '2023-11-24 10:35:48', '2023-11-24 10:35:48'),
(9, '3', '1', '2023-11-24 10:36:27', '2023-11-24 10:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

CREATE TABLE `promocode` (
  `id` int(11) NOT NULL,
  `promocode_name` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount` varchar(20) NOT NULL,
  `maxuses` int(3) NOT NULL,
  `used` int(3) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`id`, `promocode_name`, `start_date`, `end_date`, `discount`, `maxuses`, `used`, `dt_created`, `dt_updated`) VALUES
(1, 'NEW', '2023-11-19', '2023-11-25', '20', 3, 3, '2023-11-15 10:38:53', '2023-11-24 10:36:27'),
(3, 'LOOT', '2023-11-22', '2023-11-26', '10', 3, 0, '2023-11-22 06:30:46', '2023-11-24 10:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gender`, `email`, `dt_created`, `dt_updated`) VALUES
(1, 'prakash', '121212', 'male', 'gaurav1@gmail.com', '2023-11-16 05:37:32', '2023-11-16 05:37:32'),
(2, 'rohan', '121212', 'male', 'rohan@gmail.com', '2023-11-16 05:51:35', '2023-11-16 05:51:35'),
(3, 'jignesh', '121212', 'male', 'gaurav1@gmail.com', '2023-11-20 11:55:48', '2023-11-20 11:55:48'),
(4, 'ria', '121212', 'female', 'ria@gmial.com', '2023-11-20 13:00:11', '2023-11-20 13:00:11'),
(5, 'kalp', '121212', 'male', 'kalp@gmial.com', '2023-11-20 13:00:11', '2023-11-20 13:00:11'),
(6, 'urmi', '121212', 'female', 'as@gm.com', '2023-11-22 10:55:30', '2023-11-22 10:55:30'),
(7, 'ishi', '121212', 'male', 'as@gm.com', '2023-11-24 10:57:36', '2023-11-24 10:57:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_details_booking_id_fk` (`booking_id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocode`
--
ALTER TABLE `promocode`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `promocode`
--
ALTER TABLE `promocode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
