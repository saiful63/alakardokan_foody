-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2023 at 09:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alakardokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `no` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `age` varchar(256) NOT NULL,
  `qual` varchar(256) NOT NULL,
  `id` int(11) NOT NULL,
  `phn` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`no`, `name`, `age`, `qual`, `id`, `phn`) VALUES
(3, 'Asadullah', '25/01/23', 'Chinese', 7, '01945673245'),
(4, 'Hafizur rahman', '29/01/23', 'Bengali', 23, '01656435678');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `no` int(11) NOT NULL,
  `nmae` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `shop` varchar(100) DEFAULT NULL,
  `id` int(100) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`no`, `nmae`, `category`, `img`, `price`, `place`, `shop`, `id`, `title`) VALUES
(1, 'Cotton half Sleeve', 't-shirt', '165_1-removebg-preview.png', '185 TK', 'narayanganj', 'MadeBy', 1, ''),
(2, 'Cotton half Sleeve', 't-shirt', '165_tk2-removebg-preview.png', '185 TK', 'narayanganj', 'Outfit', 1, ''),
(3, 'Cotton half Sleeve', 't-shirt', '165_tk3-removebg-preview.png', '185 TK\r\n', 'narayanganj', 'Leebas', 1, ''),
(4, 'Cotton half Sleeve', 't-shirt', '165_tk4-removebg-preview.png', '185 TK\r\n', 'kaladi', 'Shade ', 2, ''),
(5, 'Cotton half Sleeve', 't-shirt', '165_tk5-removebg-preview.png', '185 TK\r\n', 'kaladi', 'SunShine', 2, ''),
(6, 'Cotton half Sleeve', 't-shirt', '165_tk6-removebg-preview.png', '185 TK\r\n', 'kaladi', 'Apparel', 2, ''),
(7, 'Cotton half Sleeve', 't-shirt', 'TK_155_4.png165_tk7-removebg-preview.png', '185 TK\r\n', 'Golakandail', 'Longsided', 3, ''),
(8, 'Cotton half Sleeve', 't-shirt', 'TK_155_2-removebg-preview.png', '185 TK\r\n', 'nstu', 'Desire', 5, ''),
(9, 'Cotton half Sleeve', 't-shirt', 'TK_155_3-removebg-preview.png', '185 TK\r\n', 'nstu', 'Customzed', 5, ''),
(10, 'Cotton half Sleeve', 't-shirt', 'TK_155_4-removebg-preview.png', '185 TK\r\n', 'nstu', 'Showcase', 5, ''),
(11, NULL, 'Men', 'men1.jpg', NULL, '325 Tk', NULL, NULL, 'Try Something from indian test.\n'),
(12, NULL, 'Men', 'men2.jpg', 'Price:70 Tk', NULL, NULL, NULL, 'Another type indiginious food around you.\n'),
(13, NULL, 'Men', 'men3.jpg', '325 Tk', NULL, NULL, NULL, 'Spanish pizza that you can love in monday.'),
(14, NULL, 'Men', 'men4.jpg', '499 Tk', NULL, NULL, NULL, 'Chili flavoured pizza.\n\n'),
(16, NULL, 'Men', 'men6.jpg', '\r\nPrice:325 Tk', NULL, NULL, NULL, 'Special one plate fucka.\n'),
(17, NULL, 'Women', 'women1.jpg', '\r\n99 Tk', NULL, NULL, NULL, 'Masala pizza made with onoin.'),
(19, NULL, 'Women', 'women3.jpg', '165 Tk', NULL, NULL, NULL, 'Friday sweat special.'),
(20, NULL, 'Women', 'women4.jpg', '110 Tk', NULL, NULL, NULL, 'Village typed fried tuna fish.'),
(21, NULL, 'Women', 'women5.jpg', '399 Tk', NULL, NULL, NULL, 'Homemade Buna khichuri '),
(22, NULL, 'Women', 'women6.jpg', '\r\n94 Tk', NULL, NULL, NULL, 'Fried hilsha fish.'),
(25, NULL, 'Children', 'chi3.jpg', '\r\n345 Tk', NULL, NULL, NULL, 'Several food in platar.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `c_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `c_password`) VALUES
(8, 'Saiful Islam', 'saifulislamraihan64@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(9, 'brobrobro', 'bro@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(10, 'monshimonshi', 'monsi@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(11, 'mmmmmmmmmm', 'm@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(12, 'luhahhhhhh', 'luha@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(13, 'qwertyui', 'mig@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(14, 'Luimilia', 'lui@gmail.com', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad'),
(15, 'lolololo', 'peace9g@hotmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(16, 'Sharifur Rahman  ', 'sharif1811027m@gmail.com', '9ce2f775a1ea91b650414e35e3b8b6c1', '9ce2f775a1ea91b650414e35e3b8b6c1'),
(17, 'jaira wasim', 'jaira@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', '6eea9b7ef19179a06954edd0f6c05ceb'),
(18, 'loatreyu', 'loat@gmail.com', '0223af7ad7fb3306b85427e92de59bfd', '0223af7ad7fb3306b85427e92de59bfd'),
(19, 'Sadiavuti', 'nafisatanjinsadia90@gmail.com', '2a9c20ec13dd5d915b081bfe8aa49c8a', '2a9c20ec13dd5d915b081bfe8aa49c8a'),
(20, 'Hadiqul Islam ', 'md.hadiqulislam@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b'),
(21, 'Sadiajahan56', 'sadiabh@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(22, 'Shariful___Islam', 'sharifulislam.ice@gmail.com', '4428c6c474502e61151877825bb41961', '4428c6c474502e61151877825bb41961'),
(23, 'Saiful Islam1', 'jn@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f'),
(24, 'Saiful raihan', 'saiful@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `seller_registration`
--

CREATE TABLE `seller_registration` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_registration`
--

INSERT INTO `seller_registration` (`id`, `name`, `email`, `password`, `c_password`, `place`, `status`) VALUES
(3, 'lunalunaluna', 'luna@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f', 'narayangonj', 'inactive'),
(4, 'erwkyuidoh', 'ewuguwegy@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f', 'narayangonj', 'inactive'),
(5, 'nayem123', 'nayem@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'e807f1fcf82d132f9bb018ca6738a19f', 'narayangonj', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_registration`
--
ALTER TABLE `seller_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seller_registration`
--
ALTER TABLE `seller_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
