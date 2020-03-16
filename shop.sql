-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2020 at 08:22 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `category` enum('camera','shirt','watch') DEFAULT NULL,
  `purchase_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Price` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `purchase_timestamp`, `Price`) VALUES
(1, 'CannonEOS', 'camera', '2020-02-25 14:14:37', '36000'),
(2, 'SonyDSLR', 'camera', '2020-02-25 14:14:37', '40000'),
(3, 'SonyDSLR', 'camera', '2020-02-25 14:14:37', '50000'),
(4, 'OlympusDSLR', 'camera', '2020-02-25 14:14:37', '80000'),
(5, 'Titan Model #301', 'watch', '2020-02-25 14:14:37', '13000'),
(6, 'Titan Model #201', 'watch', '2020-02-25 14:14:37', '3000'),
(7, 'HMT Milan', 'watch', '2020-02-25 14:14:37', '8000'),
(8, 'Faber Luba', 'watch', '2020-02-25 14:14:37', '18000'),
(9, 'H&W', 'shirt', '2020-02-25 14:14:37', '800'),
(10, 'Luis Phil', 'shirt', '2020-02-25 14:14:37', '1000'),
(11, 'John Zok', 'shirt', '2020-02-25 14:14:37', '1500'),
(12, 'Jhalsani', 'shirt', '2020-02-25 14:14:37', '1300');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `city`, `address`, `contact`) VALUES
(1, 'priya@xyz.com', 'Priya', '123456', 'Ropar', '22,Mally', 876456782),
(2, 'parul@xyz.com', 'Parul', '23456', 'Hoshiarpur', '13,Valley', 839840942),
(3, 'rahul@xyz.com', 'Rahul', '34567', 'Alwar', '11,Rally', 948983492),
(4, 'sanjana@xyz.com', 'sanjana', '45678', 'beas', '20, Adally', 987654673);

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

DROP TABLE IF EXISTS `user_product`;
CREATE TABLE IF NOT EXISTS `user_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_product`
--
ALTER TABLE `user_product`
  ADD CONSTRAINT `user_product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
