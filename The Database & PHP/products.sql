-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 12:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h-e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `name`, `description`, `image_url`, `price`, `rating`) VALUES
(1, 'adidas', 'Cartoon Astronaut T-Shirts', 'A cool astronaut t-shirt', 'img/products/f1.jpg', 78.00, 5),
(2, 'adidas', 'Jasmine Astronaut T-Shirts', 'A lovely astronaut t-shirt', 'img/products/f2.jpg', 92.00, 4),
(3, 'adidas', 'Garden Astronaut T-Shirts', 'A garden themed astronaut t-shirt', 'img/products/f3.jpg', 64.00, 3),
(4, 'adidas', 'Spring Astronaut T-Shirts', 'A spring-themed astronaut t-shirt', 'img/products/f4.jpg', 98.00, 5),
(5, 'adidas', 'Flower Astronaut T-Shirts', 'A flower-themed astronaut t-shirt', 'img/products/f5.jpg', 56.00, 4),
(6, 'adidas', 'Fancy Astronaut Shirts', 'A fancy astronaut t-shirt', 'img/products/f6.jpg', 83.00, 5),
(7, 'adidas', 'Cartoon Astronaut Pants', 'Cartoon astronaut pants', 'img/products/f7.jpg', 69.00, 4),
(8, 'adidas', 'Cartoon Kittens Shirts', 'A cartoon kittens t-shirt', 'img/products/f8.jpg', 88.00, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
