-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 09:04 AM
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
-- Database: `masala miles`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(100) NOT NULL,
  `Rmenu` varchar(100) NOT NULL,
  `rprice` int(100) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `resname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Rmenu`, `rprice`, `type`, `resname`) VALUES
(1, 'ff', 111, 'Non-Veg', ''),
(2, 'Premium Family Feast for 4 - Chicken', 982, 'Non-Veg', 'burger king '),
(3, 'Veg Whopper', 179, 'Veg', 'burger king '),
(4, 'Chicken Whopper', 199, 'Non-Veg', 'burger king '),
(5, 'THE 4 CHEESE PIZZA', 200, 'Veg', 'Dominoz'),
(6, 'MARGHERITA', 150, 'Veg', 'Dominoz'),
(7, 'Veg Hot Garlic Steam Momo', 147, 'Veg', 'Wow! Momo'),
(8, 'Chicken Delight Steam Momo', 200, 'Non-Veg', 'Wow! Momo'),
(9, ' Chicken Darjeeling Steam Momo', 300, 'Non-Veg', 'Wow! Momo'),
(10, 'Cheesy Veggie Moburg', 100, 'Veg', 'Wow! Momo');

-- --------------------------------------------------------

--
-- Table structure for table `patner`
--

CREATE TABLE `patner` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `Profile_Image` varchar(100) NOT NULL,
  `Restaurant_Name` varchar(100) NOT NULL,
  `Restaurant_Cuisine` varchar(100) NOT NULL,
  `Restaurant_Photo` varchar(100) NOT NULL,
  `Restaurant_Rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patner`
--

INSERT INTO `patner` (`id`, `pname`, `email`, `reason`, `psw`, `phone`, `Profile_Image`, `Restaurant_Name`, `Restaurant_Cuisine`, `Restaurant_Photo`, `Restaurant_Rating`) VALUES
(2, 'pulkit', 'Ps3066@srmist.edu.in', 'w', '111', 111, 'WIN_20201018_17_14_47_Pro.jpg', 'ded', 'chinees', 'Screenshot 2024-06-16 115042.png', '11');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(100) NOT NULL,
  `resname` varchar(100) NOT NULL,
  `rrating` varchar(1000) NOT NULL,
  `rcuisine` varchar(1000) NOT NULL,
  `rphoto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `resname`, `rrating`, `rcuisine`, `rphoto`) VALUES
(2, 'starbugs', '5 star', 'snacks', 'starbugs.jpg'),
(5, 'haldiram', '5 star', 'snacks', 'haldiram.png'),
(7, 'subway', '5 star', 'sandwich', 'subway.jpg'),
(9, 'burger king ', '5 star ', 'American cuisine', 'download.jpeg'),
(10, 'Dominoz', '5 star', 'Fast Food', 'unnamed.png'),
(11, 'Wow! Momo', '5 star', 'Fast food', 'wow.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `psw`, `phone`, `about`) VALUES
(1, 'Pulkit S', 'pulkitsharma1609@gmail.com', '', 2147483647, ''),
(2, 'Pulkit S', 'pulkitsharma1609@gmail.com', '', 2147483647, ''),
(3, 'Pulkit S', 'pulkitsharma1609@gmail.com', '', 2147483647, ''),
(4, 'pulkit', 'sunandasamanta38@gmail.com', '', 2147483647, ''),
(5, 'Pulkit S', 'pulkitsharma1609@gmail.com', '', 2147483647, ''),
(6, 'Pulkit S', 'pulkitsharma1609@gmail.com', '', 2147483647, ''),
(7, 'pulkit', 'sunandasamanta38@gmail.com', '', 2147483647, ''),
(8, 'pulkit', 'sunandasamanta38@gmail.com', '', 2147483647, ''),
(9, 'pulkit', 'sunandasamanta38@gmail.com', '', 2147483647, ''),
(10, 'Pulkit S', 'pulkitsharma1609@gmail.com', '', 2147483647, ''),
(11, 'raj', 'ddddd@gmail.com', '', 2147483647, ''),
(12, 'root', '', '11111', 0, ''),
(13, 'gggg', 'gisotib129@cnurbano.com', '123', 89777777, ''),
(14, 'root', 'pulkitsharma1609@gmail.com', 'ddd', 2147483647, 'I am very Good Boy'),
(15, 'xxdsss', 'isotisssssb129@cnurbano.com', 'sssss', 2147483647, ''),
(16, 'ccccccccccccccc', 'ccccgisotcib12cc9@cnurbano.com', 'cccccccc', 2147483647, ''),
(17, 'ccccccccccccccc', 'gisotib129@cnurbano.com', 'ddd', 2333333, ''),
(18, 'cvvvvvvvvv', 'gisotib129@cnurbano.com', 'vvv', 3333, ''),
(19, 'root', 'ps3066@srmist.edu.in', 'wwwww', 2147483647, 'I am very Good Boys'),
(20, 'tttttttt', 'isotib129@cnurbano.com', 'ttt', 4444, ''),
(21, 'iiiiiiiiii', 'isotisssssb129@cnurbano.com', 'iii', 888, ''),
(22, 'ccccccccccccccc', 'ccccgisotcib12cc9@cnurbano.com', 'ccc', 34, ''),
(23, 'ccccccccccccccc', 'gisotib129@cnurbano.com', '444', 4444, ''),
(24, '4twehdb', 'gisotib129@cnurbano.com', 'ggasf', 44, ''),
(25, 'pulkit', 'gisotib129@cnurbano.com', 'eee', 22, ''),
(26, 'ccccccc', 'gisotib129@cnurbano.com', 'ddd', 33, ''),
(27, '', '', '', 0, ''),
(28, '', '', '', 0, ''),
(29, '', '', '', 0, ''),
(30, 'ccccccccccccccc', 'sunandasamanta38@gmail.com', '33', 444, ''),
(31, '', '', '', 0, ''),
(32, 'xx', 'gisotib129@cnurbano.com', 'xx', 33, ''),
(33, '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patner`
--
ALTER TABLE `patner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patner`
--
ALTER TABLE `patner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
