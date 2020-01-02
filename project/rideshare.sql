-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2020 at 05:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rideshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `departure` datetime NOT NULL,
  `vehicle` text NOT NULL,
  `seats` int(255) NOT NULL,
  `selected` text NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT 1,
  `posted_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `source`, `destination`, `departure`, `vehicle`, `seats`, `selected`, `available`, `posted_at`) VALUES
(3, 9, 'biratnagar', 'butwal', '2019-12-18 07:07:07', 'Bike', 1, '', 1, '2019-12-30 20:08:43'),
(4, 8, 'janakpur', 'bhaktapur', '2020-01-15 13:05:00', 'car', 2, '', 1, '2019-12-30 22:11:27'),
(5, 10, 'dharan', 'urlabari', '2019-12-31 22:55:00', 'Bike', 2, '[11,11]', 1, '2019-12-30 22:31:52'),
(8, 11, 'ktm', 'lpt', '1999-12-31 02:13:00', 'jeep', 3, '', 1, '2020-01-01 17:04:16'),
(9, 11, 'wqe', 'wqe', '1111-01-01 14:02:00', 'wee', 2, '', 1, '2020-01-01 17:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(8, 'Avash G', 'avash@gmail.com', '$2y$10$mvuQ5kkaFGFBQLl0WI.XfeRZK/BR/bW7NEhtiQ.FIpR8MMnUeOOpy'),
(9, 'john doe', 'jd@gmail.com', '$2y$10$0/c1sic8EfN7w8msBzX/YOXVwotOuJHRlOR43o8oqsV2OO83VcbrW'),
(10, 'David Gilmour', 'dave@gmail.com', '$2y$10$bZF/Bvl4ihp4rPCZ3G0EMephjTfra0VyMlNnT3esUEa5bt7SAXDAe'),
(11, 'apple', 'apple@ball.com', '$2y$10$WPR8Hqdg7wah6YJ/onqAcu83DGhpG7FWdjk/hwuGK248j2Y/kef42'),
(12, 'appleball', 'apple@123.com', '$2y$10$SolW/1LISOgTIYdVocP8t.QrlyD6k8FwDUFM.LkTieSl5.AbSmrmu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `available` (`available`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
