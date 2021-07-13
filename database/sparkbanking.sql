-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 11:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(120) NOT NULL,
  `sender_account` varchar(120) NOT NULL,
  `reciever_name` varchar(120) NOT NULL,
  `reciever_account` varchar(120) NOT NULL,
  `Balance` float NOT NULL,
  `trans_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender_name`, `sender_account`, `reciever_name`, `reciever_account`, `Balance`, `trans_date`) VALUES
(15, 'vicky kumar', '30330199', 'sachida nand ray', '36085546', 2000, '2021-07-07 23:44:53'),
(16, 'sachida nand ray', '36085546', 'vicky kumar', '30330199', 200, '2021-07-07 23:47:17'),
(17, 'sachida nand ray', '36085546', 'Raja', '6463624', 40000, '2021-07-07 23:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `account` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `account`, `name`, `email`, `balance`) VALUES
(46, '30330199', 'vicky kumar', 'vickysharma_123@outlook.com', 9200),
(48, '6463624', 'Raja', 'rajja@gmail.com', 48000),
(49, '37439041', 'Nishant kuamr', 'nishant@gmail.com', 5000),
(50, '41683438', 'Sahil Parwez', 'sahil@gmail.com', 3000),
(51, '47132626', 'Rakesh Kumar', 'rakesh@gmail.com', 6000),
(52, '26898507', 'Abhinav Kumar', 'abhinav@gmail.com', 8000),
(53, '82049749', 'Subham kumar', 'subham@gmail.com', 7000),
(54, '23486802', 'Anurag Kumar', 'anurag@gmail.com', 4000),
(55, '47084592', 'Rishav dewangan', 'rishav@gmail.com', 9000),
(56, '17790223', 'Ramakant Sharma', 'ramakant@gmail.com', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
