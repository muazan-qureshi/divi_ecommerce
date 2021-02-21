-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 06:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divisma`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `ceateDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `createby`, `ceateDT`) VALUES
(1, 'Jump Suits', 1, '2021-02-20 02:35:28'),
(2, 'Face Masks', 1, '2021-02-20 02:35:39'),
(3, 'Tops', 1, '2021-02-20 02:35:48'),
(4, 'Hand Bags', 1, '2021-02-20 02:36:09'),
(5, 'Sunglasses', 1, '2021-02-20 02:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `cpstatus`
--

CREATE TABLE `cpstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpstatus`
--

INSERT INTO `cpstatus` (`id`, `status`) VALUES
(1, 'New Arrivals'),
(2, 'Featured'),
(3, 'Latest'),
(4, 'Out of Stock');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `userstatus` int(11) DEFAULT NULL,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `buyprice` int(11) DEFAULT NULL,
  `saleprice` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `cpstatus` int(11) DEFAULT 1,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createby` int(11) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `description`, `stock`, `buyprice`, `saleprice`, `category`, `cpstatus`, `createDT`, `createby`, `image`) VALUES
(1, 'Irovy White Slash Tie Dress', 'divi1001', 'Irovy White Slash Tie Dress bla bla bla', 12, 3000, 2500, 1, 1, '2021-02-20 02:40:18', 1, '[\"ivory-white-slash-neck-tie-hdsfjit.webp\",\"ivory-white-slash-neck-tie-psuit.webp\",\"ivory-white-slash-neck-tie-waist-culotte-jumpsuit.webp\",\"ivory-white-slash-nuit.webp\"]'),
(2, 'Petite Monochrome High Neck Striped Jumpsuit', 'divi1002', 'Petite Monochrome High Neck Striped Jumpsuit bla bla bla\r\n', 6, 4200, 3500, 1, 1, '2021-02-20 02:41:27', 1, '[\"Untitled-1_0016_IMG_1497_2048x.jpg\",\"Untitled-1_0017_IMG_1486_2048x.jpg\",\"Untitled-1_0018_IMG_1480_2048x.jpg\",\"Untitled-1_0019_IMG_1477_2048x.jpg\"]'),
(3, 'Dotted Color Face Mask', 'divi1003', 'Dotted Face Mask For Girls bla bla bla', 48, 900, 600, 2, 1, '2021-02-20 02:42:49', 1, '[\"1_c866ce05-d32e-4d2e-9eb6-adb75a06f434_2048x.webp\",\"7_1bff63f8-cfd1-4895-b7b9-9e15494008b8_2048x.webp\"]'),
(4, 'Monochrome High Neck Striped Jumpsuit', 'divi1004', 'Petite Monochrome High Neck Striped Jumpsuit bla bla bla', 36, 5200, 5000, 1, 1, '2021-02-20 02:43:58', 1, '[\"black-petite-monochrome-high-neck-striped-jssumpsuit.webp\",\"black-petite-monochrome-high-neck-striped-jumpsuit.webp\",\"blome-high-neck-striped-judsfsdfsdfmpsuit.webp\"]'),
(5, 'Sun Glasses for Womens', 'divi1005', 'Sun glasses for Womens', 60, 2500, 2100, 5, 1, '2021-02-20 02:45:14', 1, '[\"57053_2048x.webp\",\"57056_2048x.webp\"]'),
(6, 'Trending Face Masks', 'divi1006', 'Face Maks for All', 59, 350, 200, 2, 1, '2021-02-20 02:46:09', 1, '[\"1200x1800_0001_57282_2048x.webp\",\"1200x1800_0001_Layer2_2048x.webp\"]'),
(7, 'BLACK TOP WITH MESH SLEEVES', 'divi1007', 'A top featuring crew neckline, gold buttons on shoulder, mesh sleeves, glitter velvet pannel on shoulder and sleeves. Jersey inner attached. ', 23, 4500, 4250, 3, 1, '2021-02-21 17:15:27', 1, '[\"asdere.jpg\",\"gfdgfgf.jpg\",\"hthtthththt.jpg\",\"ssadsaddsa.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `DT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `subject`, `message`, `DT`) VALUES
(1, 'Muazan Qureshi', 'muazan.web@gmail.com', 'My Order', 'Where is my order', '2021-02-20 15:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `roletype`
--

CREATE TABLE `roletype` (
  `id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roletype`
--

INSERT INTO `roletype` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `userstatus` int(11) DEFAULT 1,
  `roletype` int(11) DEFAULT NULL,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(500) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `phone`, `password`, `gender`, `dob`, `userstatus`, `roletype`, `createDT`, `address`, `image`) VALUES
(1, 'Muazan Qureshi', 'muazan', 'muazanqureshi3@gmail.com', '0301-0301642', '12', 'Male', '2001-07-05', 1, 1, '2021-02-18 18:16:12', 'Azam Basti, Karachi.', 'IMG_20210206_174703.jpg'),
(2, 'Umair Warsi', 'umair_warsi', 'umair@yahoo.com', '03082569874', '12', 'Male', '1995-02-02', 1, 2, '2021-02-19 03:16:15', 'Gulshan< Karachi.', 'IMG_20201210_165127.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userstatus`
--

CREATE TABLE `userstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userstatus`
--

INSERT INTO `userstatus` (`id`, `status`) VALUES
(1, 'active'),
(2, 'deactive'),
(3, 'left');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cpstatus`
--
ALTER TABLE `cpstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roletype`
--
ALTER TABLE `roletype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userstatus`
--
ALTER TABLE `userstatus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cpstatus`
--
ALTER TABLE `cpstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roletype`
--
ALTER TABLE `roletype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userstatus`
--
ALTER TABLE `userstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
