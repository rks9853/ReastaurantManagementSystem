-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 09:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodrestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `password`) VALUES
(5, 'bkkk', 'compsc', 'f3c1236211528060c0c90cd27bd648ea');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_food`
--

CREATE TABLE `order_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `customer_name` varchar(10) NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'chicken lollipop', 'b999', 'images/chicken lollipop.jpeg', 190),
(2, 'Fish fry', 'b1000', 'images/fish fry.jpeg', 120),
(3, 'mutton curry', 'b1001', 'images/morton.jpeg', 150),
(4, 'Lamb biriyani', 'b1002', 'images/lambbiriyani.jpeg', 160),
(5, 'chingudi curry', 'b1003', 'images/chingudi.jpeg', 140),
(6, 'egg biriyani', 'b1004', 'images/egg biriyani.jpeg', 160),
(7, 'spring roll', 'b1005', 'images/springroll.jpeg', 90),
(8, 'egg curry', 'b1006', 'images/egg curry.jpeg', 80),
(9, 'chicken pokoda', 'b1007', 'images/chicken pokoda.jpeg', 180),
(10, 'pannier finger', 'b1008', 'images/pannier finger.jpeg', 120),
(11, 'jeera rice', 'b1009', 'images/jerra rice.jpeg', 40),
(12, 'bitter chips', 'b1010', 'images/bitter chips/jpeg', 30),
(13, 'Dal', 'b1011', 'images/dal.jpeg', 50),
(14, 'pannier salad', 'b1012', 'images/pannier salad.jpeg', 110),
(15, 'allo kobi bhaja', 'b1013', 'images/allo kobi bhaja.jpeg', 40),
(16, 'matar pannier', 'b1014', 'images/mater.jpeg', 140),
(17, 'bhindi masala', 'b1015', 'images/bhindi masala.jpeg', 80),
(18, 'chicken lollipop', 'b1018', 'images/chicken lollipop.jpeg', 190);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`, `token`, `status`) VALUES
(8, 'compsc', 'bkkk@gmail.com', '345678', '$2y$10$I9GaOMYOy9kWOdlmkdrag.tru87KGI4ctIA8m/NOCzOPE6PTPtte6', '$2y$10$/mufDxsGFuiR2qrTdC8GlufESveRTP16YMv03QJlfeJdAHImA/B.G', '', ''),
(10, 'bikram', 'bkkkkkkk@gmail.com', '23456789', '$2y$10$vJ.NozIfr3Ht/YA4G5lDZehRLcH8hYiCg0/Kzkg0piSyVJ/8/2tdK', '$2y$10$UtHUSxlw2Qv5zJtrCU4BMe4Tp9SYkSM5PljiAW945FyePiNfw4Vja', '', ''),
(11, 'biku', 'abc@gmail.com', '56789', '$2y$10$lXmWevMMplAIKJzmEjj2F.9B0aRN3i0o/SZJqDB/eXtZrVrPhfdEm', '$2y$10$gqsyYuowLhRpQDx32Ge3due7pN8bCW.n2YvZ1urA2qw5wVkGXsRYi', '', ''),
(12, 'dfg', 'awdfgyuj@gmail.com', '4567890', '$2y$10$sX/GYMa.faIDPINB8sSuxulAtwbRL9tPxiCaogiMBgbREkdumk.UG', '$2y$10$Yj.J3AF5jL1KTySvkmG2Le887z8DFI/a5adEMyLYI2scVLIkasLym', 'f79b52fbbf97f5c2bb232dd250cec2', 'inactive'),
(13, 'eco', 'yut@gmail.com', '567890', '$2y$10$pzLE04EF9DyUq2rBKMWYlewaBSyMJUou/Uhq/yJiW65H6DFKeoiOu', '$2y$10$o/4vNb5gGLp79ZabNDyel.Gaj/Mtrwa5AKq4akIPiJMuWMhq6QFfS', '6f0d796f5cb6e87613734ec2506492', 'inactive'),
(20, 'Rahul', 'balaramlenka3732@gmail.com', '9658947919', '$2y$10$N0ZIFLKcnV8S5BwjHMvO0.qFVxluq5iQGKRssvYQ9/FNPzOgZaIai', '$2y$10$O5Fiiel6.ItBPdMqZ36UwOsUNT2Z.ZdPxTLL60/0doVFO39FzNj0y', 'c4e70672ebedb6c4cfb442074573d8', 'active'),
(21, 'pk', 'pkgpayonline@gmail.com', '9337894282', '$2y$10$Fej9Uipp1BNlFb8zs8bVbOhehaZ6wJ9a9r.6iZ6537PtB/OdCAzXq', '$2y$10$DjcocrZYqge1Zbf.kZhHIe4yMe5evVoRBUjq6WWc5ePLWtvMZK7.S', '0118c137dd3b97da4fde2e48f468be', 'inactive'),
(22, 'biku', 'bikramlenka98@gmail.com', '7064155716', '$2y$10$Xmg2Gxy2Mv81J1yI290Uh.qdopMrLA1VZ5a2xh6Ru.Cy5f9LT7Bb.', '$2y$10$vq0bTkczRrgjHYoTnvDeEunpL6SGVI3ZUmmowR1vOwKy4XF.5fFGO', '80e3d987e65bd2fceaacc76a27c66b', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_food`
--
ALTER TABLE `order_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_food`
--
ALTER TABLE `order_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
