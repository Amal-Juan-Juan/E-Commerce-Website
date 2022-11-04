-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2022 at 05:36 PM
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
-- Database: `mobile`
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
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `quantity`) VALUES
(125, 1, 9, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date_time`, `item_id`) VALUES
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
  `category` varchar(20) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `category`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Electronics', 'Samsung', 'Samsung Galaxy 10', 152.00, './assets/products/1.png', '2020-03-28 11:08:57'),
(2, 'Electronics', 'Redmi', 'Redmi Note 7', 122.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Electronics', 'Redmi', 'Redmi Note 6', 122.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Electronics', 'Redmi', 'Redmi Note 5', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Electronics', 'Redmi', 'Redmi Note 4', 122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Electronics', 'Redmi', 'Redmi Note 8', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'Electronics', 'Redmi', 'Redmi Note 9', 122.00, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'Electronics', 'Redmi', 'Redmi Note', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Electronics', 'Samsung', 'Samsung Galaxy S6', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'Electronics', 'Samsung', 'Samsung Galaxy S7', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Electronics', 'Apple', 'Apple iPhone 5', 152.00, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Electronics', 'Apple', 'Apple iPhone 6', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'Electronics', 'Apple', 'Apple iPhone 7', 152.00, './assets/products/15.png', '2020-03-28 11:08:57'),
(14, 'Clothing', 'Puma', 'Blue Tshirt', 700.00, 'https://m.media-amazon.com/images/I/81wN6u+jHsL._AC_UL480_FMwebp_QL65_.jpg', '2022-11-01 19:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `register_date`) VALUES
(1, 'samabraham2022@gmail.com', '123456789', '2020-03-28 13:07:17'),
(2, 'george@gmail.com', '123456789', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`cart_id`, `user_id`, `item_id`) VALUES
(4, 1, 10),
(107, 1, 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
