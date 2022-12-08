-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(445) NOT NULL,
  `adress` varchar(545) NOT NULL,
  `email` varchar(154) NOT NULL,
  `number` int(10) NOT NULL,
  `department` varchar(55) NOT NULL,
  `working` varchar(55) NOT NULL,
  `hobbies` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`id`, `name`, `adress`, `email`, `number`, `department`, `working`, `hobbies`) VALUES
(3, 'Mohit Kumar', '108/04 New delhi India', 'ishit239@gmail.com', 2147483647, 'HR', 'Full time', 'onion'),
(5, 'Mohit Kumar', '108/04 New delhi India', 'ishit239@gmail.com', 2147483647, 'HR', 'Full time', 'Dancing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'elias', '123', 'Elias'),
(2, 'john', 'abc', 'John');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
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
-- AUTO_INCREMENT for table `tb_employee`
--
ALTER TABLE `tb_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
