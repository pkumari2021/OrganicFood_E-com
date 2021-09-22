-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 05:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `price`) VALUES
(1, 'Cannon EOS', '', 36000),
(2, 'Sony DSLR', '', 40000),
(3, 'Sony DSLR', '', 50000),
(4, 'Olympus DSLR', '', 80000),
(5, 'Titan Model #301', '', 13000),
(6, 'Titan Model #201', '', 3000),
(7, 'HMT Milan', '', 8000),
(8, 'Favre Lueba #111', '', 18000),
(9, 'Raymond', '', 1500),
(10, 'Charles', '', 1000),
(11, 'HXR', '', 900),
(12, 'PINK', '', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'vst', '123'),
(3, 'ssn', '132@'),
(4, '', '$2y$10$E5mENO9.Iqaxh');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `category`, `code`, `image`, `price`) VALUES
(5, 'papaya.jpg', '', 'Fruit1', 'product-images/papaya.jpg', 2.00),
(6, 'pineapple.jpg', 'fruit', 'Fruit2', 'product-images/pineapple.jpg', 3.00),
(7, 'grapes.jpg', 'fruit', 'Fruit3', 'product-images/grapes.jpg', 2.00),
(8, 'banana.jpg', 'fruit', 'Fruit4', 'product-images/banana.jpg', 2.00),
(9, 'mango.jpg', 'fruit', 'Fruit5', 'product-images/mango.jpg', 4.00),
(10, 'cherry.jpg', 'fruit', 'Fruit6', 'product-images/cherry.jpg', 6.00),
(12, 'chilly', 'vegitabel', 'vegitabel1', 'product-images/chilly.jpg', 3.00),
(13, 'carrot', 'vegitabel', 'vegitabel2', 'product-images/carrot.jpg', 2.00),
(14, 'cabbage', 'vegitabel', 'vegitabel3', 'product-images/cabbage.jpg', 2.00),
(15, 'ladiesfinger', 'vegitabel', 'vegitabel4', 'product-images/ladiesfinger.jpg', 2.00),
(16, 'big_chilli', 'vegitabel', 'vegitabel5', 'product-images/big_chilli.jpg', 2.00),
(17, 'bean', 'vegitabel', 'vegitabel6', 'product-images/bean.jpg', 2.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(4, 'yugesh verma', 'yugeshverma32@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '6263056779', 'bhilai', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.'),
(5, 'yugesh', 'yugeshverma@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '9165063741', 'bhilai', 'bhilai'),
(6, 'vimala', 'revseela@gmail.com', 'f21c4d0d84e875a0ca502b8516fdedb9', '0716246091', 'colombo', 'rewwwtwt, wewww, werwtg'),
(7, 'vimala', 'seela@gmail.com', '390282df71a83875d7d34185517413f5', '0123456789', 'colombo', 'ergeg, wwrwertg, wrtwrt, wrtw'),
(8, 'wekum', 'joneltoledo@yahoo.com', '14e1b600b1fd579f47433b88e8d85291', '0123456789', 'colombo', 'ergeg, wwrwertg, wrtwrt, wrtw'),
(9, 'vimala', 'ress@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0123456789', 'colombo', 'ergeg, wwrwertg, wrtwrt, wrtw'),
(10, 'vimala', 'wer@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0123456789', 'colombo', 'ergeg, wwrwertg, wrtwrt, wrtw'),
(11, 'vimala', 'ws@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0123456789', 'monara', 'ergeg, wwrwertg, wrtwrt, wrtw'),
(12, 'wer', 'aq@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0716246091', 'colombo', 'ergeg, wwrwertg, wrtwrt, wrtw'),
(13, 'prabodha', 'prabodha@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', '0123456789', 'colombo', 'rewwwtwt, wewww, werwtg');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(8, 3, 4, 'Added to cart'),
(9, 3, 5, 'Added to cart'),
(10, 3, 11, 'Added to cart'),
(11, 1, 9, 'Added to cart'),
(12, 1, 2, 'Added to cart'),
(13, 1, 8, 'Added to cart'),
(14, 4, 2, 'Confirmed'),
(18, 5, 11, 'Added to cart'),
(20, 5, 5, 'Added to cart'),
(31, 6, 2, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
