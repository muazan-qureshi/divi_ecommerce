-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 12:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybase`
--

-- --------------------------------------------------------

--
-- Table structure for table `catlog`
--

CREATE TABLE `catlog` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catlog`
--

INSERT INTO `catlog` (`c_id`, `c_name`, `status`) VALUES
(2, 'Shoes', 1),
(3, 'Watches', 1),
(4, 'T-shirts', 1),
(5, 'Shirts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`u_id`, `name`, `email`, `psw`, `contact`, `address`, `date_time`) VALUES
(4, 'ALi', 'ali@gmail.com', '123', '12312312', 'check', '2021-02-12 10:49:21'),
(6, 'ALi', 'ali@gmail.com', '1231231231', '242342342', 'check', '2021-02-12 10:55:51'),
(7, 'ALi', 'ali@gmail.com', '1231231231231231241', '15', 'CHECK', '2021-02-13 08:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_dec` varchar(200) NOT NULL,
  `p_buy_price` int(11) NOT NULL,
  `p_sale_price` int(11) NOT NULL,
  `p_stock` int(11) NOT NULL,
  `p_catlog` int(11) NOT NULL,
  `p_img` varchar(1000) NOT NULL,
  `p_status` int(11) NOT NULL DEFAULT 1,
  `p_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `p_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_dec`, `p_buy_price`, `p_sale_price`, `p_stock`, `p_catlog`, `p_img`, `p_status`, `p_date_time`, `p_user`) VALUES
(1, 'Curren Watches Official', 'Check data', 4500, 3500, 10, 3, '[\"e471cf0737d2338ba695f8ea4417e2cf.jpg\"]', 1, '2021-02-17 09:32:49', 2),
(2, 'Watch ', 'Black color watch', 5500, 1200, 66, 3, '[\"c678cad4831ee328333cf66374e3073d.jpg\"]', 1, '2021-02-17 09:35:14', 2),
(3, 'Wrist Watch', 'watch ', 1200, 1100, 3, 3, '[\"CURREN-atches-for-Women-Top-Brand-Luxury-Ladies-Watch-Stainless-Steel-Simple-Girl-Clock-Blue-Quartz.jpg\"]', 1, '2021-02-17 09:35:48', 2),
(4, 'Silver watch', 'Silver color eatch', 2000, 1999, 15, 3, '[\"e73beeebf0b0c1f04bf252ac82b430c1.jpg\"]', 1, '2021-02-17 09:36:30', 2),
(5, 'Blackshoes', 'Black colr shoes\r\n', 2500, 2499, 12, 2, '[\"41Leu3gBUFL.jpg\"]', 2, '2021-02-17 09:37:50', 2),
(6, 'T-Shirts, Tank Tops, & Graphic Tees ', 'check data', 1200, 999, 10, 5, '[\"4c51580aaeea7c57aedbebfd564ca8c4.jpg\"]', 1, '2021-02-17 09:53:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_psw` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `u_img` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`u_id`, `u_name`, `u_email`, `u_psw`, `contact`, `address`, `u_img`, `date_time`, `status`) VALUES
(1, 'ALi', 'ali@gmail.com', '12345', '3242342342', 'lab 209', 'q0Vmc13y.jpg', '2021-02-13 10:58:33', 1),
(2, 'M Arsalan', 'arsalan@gmail.com', '12345', '154515248', 'lab 219', '190619-imran-khan_16b743b13a5_large.jpg', '2021-02-15 09:21:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catlog`
--
ALTER TABLE `catlog`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catlog`
--
ALTER TABLE `catlog`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
