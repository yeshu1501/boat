-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 10:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boat`
--

-- --------------------------------------------------------

--
-- Table structure for table `boattbl`
--

CREATE TABLE `boattbl` (
  `ID` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boattbl`
--

INSERT INTO `boattbl` (`ID`, `image`, `image_text`) VALUES
(5, '1.jpg', 'Description: Albin Marlin 240hp\r\n\r\nPrice: Rs 8,500,000'),
(6, '2.jpg', 'Description: Finn-Marin 40hp\r\n\r\nPrice: Rs 355,000'),
(7, '3.jpg', 'Description: Legend 300hp\r\n\r\nPrice: Rs 4,450,000'),
(8, '4.jpg', 'Description: Legend 230hp\r\n\r\nPrice: Rs 1,270,000'),
(9, '5.jpg', 'Description: Luxurious Legend 36\r\n\r\nPrice: Rs 3,500,000'),
(10, '6.jpg', 'Description: Speedster Seadoo 430hp\r\n\r\nPrice: Rs 200,000');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `code`, `image`, `price`) VALUES
(5, 'Description: Albin Marlin 240hp', '1', 'images/1.jpg', 8500000),
(6, 'Description: Finn-Marin 40hp', '2', 'images/2.jpg', 355000),
(7, 'Description: Legend 300hp', '3', 'images/3.jpg', 2450000),
(8, 'Description: Legend 230hp', '4', 'images/4.jpg', 1270000),
(9, 'Description: Luxurious Legend 36 600hp', '5', 'images/5.jpg', 3500000),
(10, 'Description: Seadoo Speedster 430hp', '6', 'images/6.jpg', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(2, 'test2', 'test2@hotmail.com', '3ba1bddf37a702dbb7bf29dc8b4db240', '2020-08-03 19:11:37'),
(6, 'yuv', 'yuv@hotmail.com', '0f6895d5d358b563d1b1e9f8c7437acd', '2020-08-12 10:01:58'),
(7, 'yuv', 'yuv@gmail.com', '0f6895d5d358b563d1b1e9f8c7437acd', '2020-08-12 10:06:25'),
(8, 'test45', 'test45@hotmail.com', 'ce532efc40e83f9faaa94183c4383193', '2020-08-12 10:07:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boattbl`
--
ALTER TABLE `boattbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
-- AUTO_INCREMENT for table `boattbl`
--
ALTER TABLE `boattbl`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
