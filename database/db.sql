-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2022 at 05:44 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atoz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`cart_id`),
  UNIQUE KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `quantity`) VALUES
(185, 7, 9, 1),
(186, 1, 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item_id` int NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date_time`, `item_id`) VALUES
(54, 5, '2022-11-09 17:37:30', 0),
(53, 5, '2022-11-09 17:37:30', 4),
(52, 5, '2022-11-09 17:37:30', 10),
(51, 5, '2022-11-09 17:36:17', 0),
(50, 5, '2022-11-09 17:36:17', 33),
(49, 5, '2022-11-09 17:36:17', 5),
(48, 5, '2022-11-09 17:36:17', 34),
(47, 5, '2022-11-09 17:33:48', 12),
(43, 1, '2022-11-06 17:06:03', 0),
(42, 1, '2022-11-06 17:06:03', 3),
(41, 1, '2022-11-06 17:03:51', 0),
(40, 1, '2022-11-06 17:03:51', 8),
(39, 1, '2022-11-06 17:03:51', 9),
(38, 1, '2022-11-04 15:54:03', 0),
(37, 1, '2022-11-04 15:54:03', 6),
(36, 1, '2022-11-04 15:31:19', 0),
(35, 1, '2022-11-04 15:31:19', 14),
(33, 1, '2022-11-03 20:43:02', 2),
(32, 1, '2022-11-03 20:43:02', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `seller_id` int NOT NULL DEFAULT '1',
  `category` varchar(20) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `seller_id`, `category`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 1, 'Electronics', 'Samsung', 'Samsung Galaxy 10', 15200.00, './assets/products/1.png', '2020-03-28 11:08:57'),
(3, 1, 'Electronics', 'Redmi', 'Redmi Note 6', 12267.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 1, 'Electronics', 'Redmi', 'Redmi Note 5', 12256.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 1, 'Electronics', 'Redmi', 'Redmi Note 4', 12122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 1, 'Electronics', 'Redmi', 'Redmi Note 8', 12223.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 1, 'Electronics', 'Redmi', 'Redmi Note 9', 12223.00, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 1, 'Electronics', 'Redmi', 'Redmi Note', 12342.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 1, 'Electronics', 'Samsung', 'Samsung Galaxy S6', 15342.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 1, 'Electronics', 'Samsung', 'Samsung Galaxy S7', 15112.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 1, 'Electronics', 'Apple', 'Apple iPhone 5', 15232.00, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 1, 'Electronics', 'Apple', 'Apple iPhone 6', 15322.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 1, 'Electronics', 'Apple', 'Apple iPhone 7', 1532.00, './assets/products/15.png', '2020-03-28 11:08:57'),
(33, 1, 'Clothing', 'NIKE', 'Grey hoodie', 1800.00, 'https://m.media-amazon.com/images/I/71GzDJYcZvL._AC_UL480_FMwebp_QL65_.jpg', NULL),
(34, 1, 'Clothing', 'NIKE', 'Black hoodie', 1987.00, 'https://m.media-amazon.com/images/I/61g7o5FjOUL._AC_UL480_FMwebp_QL65_.jpg', NULL),
(35, 1, 'Clothing', 'Adidas', 'Blue tshirt', 1789.00, 'https://m.media-amazon.com/images/I/81EyJEVRiRL._AC_UL480_FMwebp_QL65_.jpg', NULL),
(36, 1, 'Clothing', 'Puma', 'Green Tshirt', 1270.00, 'https://m.media-amazon.com/images/I/719QG6Ss2rL._AC_UL480_FMwebp_QL65_.jpg', NULL),
(37, 1, 'Clothing', 'Adidas', 'Grey hoodie', 9890.00, 'https://m.media-amazon.com/images/I/61g7o5FjOUL._AC_UL480_FMwebp_QL65_.jpg', '2022-11-09 23:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `seller_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) NOT NULL,
  `register_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`seller_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `email`, `password`, `register_date`) VALUES
(1, 'samabraham2022@gmail.com', '123456789', '2020-03-28 13:07:17'),
(2, 'george@gmail.com', '123456789', '2020-03-28 13:07:17'),
(4, 'samabraham.joshy2020@vitstudent.ac.in', '123', '2022-11-10 02:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `register_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `address`, `register_date`) VALUES
(1, 'samabraham2022@gmail.com', '123', 'asdasdasdadasdad', '2020-03-28 13:07:17'),
(2, 'george@gmail.com', '123456789', '', '2020-03-28 13:07:17'),
(7, 'samabraham.joshy2020@vitstudent.ac.in', '12345', 'ALUKKAL HOUSE', '2022-11-09 23:14:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
