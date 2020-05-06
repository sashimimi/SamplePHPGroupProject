-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2020 at 03:39 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mockstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(299) NOT NULL,
  `fave_pet` varchar(299) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `first_name`, `last_name`, `email`, `fave_pet`) VALUES
(1, 'Huda', 'Judeh', 'huda.judeh@mail.com', 'dog'),
(2, 'harry', 'potter', 'yourealizardharry@mail.com', 'lizard '),
(3, 'silly', 'sally', 'isverysilly@mail.com', 'cat'),
(4, 'that', 'turtle guy', 'turtles4me@mail.com', 'mice'),
(5, 'billy', 'bob', 'billynotsilly@mail.com', 'billy goats'),
(6, 'cindy', 'roller', 'ciny.roller@mail.com', 'dog'),
(7, 'roger', 'morris', 'roger.morris@mail.com', 'dog');

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

DROP TABLE IF EXISTS `orderproducts`;
CREATE TABLE IF NOT EXISTS `orderproducts` (
  `f_order_id` int(10) NOT NULL,
  `f_product_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproducts`
--

INSERT INTO `orderproducts` (`f_order_id`, `f_product_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_cust_id` int(10) NOT NULL,
  `f_prod_id` int(10) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `f_cust_id`, `f_prod_id`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `color`) VALUES
(1, 'Test Product', 'Test Product description.', '5', 'blue'),
(2, 'Beep Boop', 'This is a beep boop.', '1', 'blurple'),
(3, 'name', 'desc', '5', 'red'),
(4, 'product', 'description', '5', 'red');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
