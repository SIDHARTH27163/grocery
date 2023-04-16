-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 12:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(30) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_price` int(20) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `o_status` varchar(205) NOT NULL,
  `p_status` varchar(205) NOT NULL,
  `d_status` varchar(205) NOT NULL,
  `up_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(30) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `cat_name`) VALUES
(1, 'Vegitables'),
(2, 'Fruits'),
(3, 'Dairy Products'),
(4, 'Chicken , Meat And Fish');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ID` int(30) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ID`, `city_name`, `up_date`) VALUES
(1, 'Dharamshala', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `ID` int(30) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`ID`, `district_name`, `up_date`) VALUES
(1, 'Kangra', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `pincodes`
--

CREATE TABLE `pincodes` (
  `ID` int(30) NOT NULL,
  `pincode_name` varchar(255) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pincodes`
--

INSERT INTO `pincodes` (`ID`, `pincode_name`, `up_date`) VALUES
(1, '176215', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `postoffices`
--

CREATE TABLE `postoffices` (
  `ID` int(30) NOT NULL,
  `postoffice` varchar(255) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postoffices`
--

INSERT INTO `postoffices` (`ID`, `postoffice`, `up_date`) VALUES
(1, 'Lower Ram Nagar', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(30) NOT NULL,
  `veg_name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `pack_size1` varchar(255) NOT NULL,
  `pack_size2` varchar(255) NOT NULL,
  `pack_size3` varchar(255) NOT NULL,
  `pack_size4` varchar(255) NOT NULL,
  `o_price` varchar(255) NOT NULL,
  `price_dis` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `veg_name`, `image1`, `image2`, `image3`, `image4`, `category_name`, `sub_category_name`, `pack_size1`, `pack_size2`, `pack_size3`, `pack_size4`, `o_price`, `price_dis`, `date`) VALUES
(1, 'Carrot', 'download (1).jpg', 'download (1).jpg', 'download.jpg', 'download.jpg', 'Vegitables ', 'Local ', '1', '2', '5', '10', '15', '12', '2023-03-24'),
(2, 'Broccoli', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Vegitables ', 'Local ', '1', '2', '5', '10', '120', '10', '2023-03-24'),
(3, 'Potato', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Vegitables ', 'Local ', '1', '2', '5', '10', '120', '10', '2023-03-24'),
(4, 'Tomato', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Vegitables ', 'Local ', '1', '2', '5', '10', '120', '10', '2023-03-24'),
(5, 'Onion', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Vegitables ', 'Local ', '1', '2', '5', '10', '120', '100', '2023-03-24'),
(6, 'Ladyfinger', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Vegitables ', 'Local ', '1', '2', '5', '10', '120', '10', '2023-03-24'),
(7, 'Ghee', 'milk.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Dairy Products', 'Local ', '1', '2', '5', '10', '120', '10', '2023-03-24'),
(9, 'Butter', 'milk.jpg', 'istockphoto-507180560-612x612.jpg', 'milk.jpg', 'download (2).jpg', 'Dairy Products', 'Local ', '1', '2', '5', '10', '120', '10', '2023-03-24'),
(10, 'Lassi', 'milk.jpg', 'istockphoto-507180560-612x612.jpg', 'milk.jpg', 'download (2).jpg', 'Dairy Products', 'Local ', '1', '2', '5', '10', '120', '10', '2023-03-24'),
(11, 'Curd', 'milk.jpg', 'istockphoto-507180560-612x612.jpg', 'milk.jpg', 'download (2).jpg', 'Dairy Products', 'Local ', '1', '2', '5', '10', '120', '100', '2023-03-24'),
(12, 'Orange', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Fruits', 'Local ', '1', '2', '5', '10', '120', '100', '2023-03-24'),
(13, 'Mango', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Fruits', 'Local ', '1', '2', '5', '10', '120', '100', '2023-03-24'),
(14, 'Apple', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Fruits', 'Local ', '1', '2', '5', '10', '120', '100', '2023-03-24'),
(15, 'Apple', 'istockphoto-507180560-612x612.jpg', 'istockphoto-507180560-612x612.jpg', 'download (2).jpg', 'download (2).jpg', 'Fruits', 'Local ', '1', '2', '5', '10', '120', '100', '2023-03-24'),
(16, 'Brocolli', 'images.jpg', 'images.jpg', 'images.jpg', 'images.jpg', 'Vegitables ', 'Green Vegis ', '1', '2', '5', '20', '200', '150', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `ID` int(30) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`ID`, `state_name`, `up_date`) VALUES
(1, 'Himachal Pardesh', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `ID` int(30) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`ID`, `cat_id`, `sub_category_name`) VALUES
(1, '1 ', 'Green Vegis'),
(2, '2 ', 'Local');

-- --------------------------------------------------------

--
-- Table structure for table `tehsils`
--

CREATE TABLE `tehsils` (
  `ID` int(30) NOT NULL,
  `tehsil_name` varchar(255) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tehsils`
--

INSERT INTO `tehsils` (`ID`, `tehsil_name`, `up_date`) VALUES
(1, 'Dharamshala', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `postoffice` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `tehsil` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `update_date` date DEFAULT current_timestamp(),
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `phone`, `user_type`, `password`, `village`, `postoffice`, `pincode`, `tehsil`, `district`, `state`, `update_date`, `created_date`) VALUES
(1, 'sidharth ', 'sid@gmail.com', '9816127163', '1', 'sidharth', 'Ram Nagar ', 'Lower Ram Nagar ', '176215 ', 'Dharamshala ', 'Kangra ', 'Himachal Pardesh ', NULL, '2023-04-01'),
(2, 'admin', 'admin@gmail.com', '9816127163', '0', '9816127163', 'Ram Nagar ', 'Lower Ram Nagar ', '176215 ', 'Dharamshala ', 'Kangra ', 'Himachal Pardesh ', NULL, '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `vill_loc`
--

CREATE TABLE `vill_loc` (
  `ID` int(30) NOT NULL,
  `vill_loc` varchar(255) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vill_loc`
--

INSERT INTO `vill_loc` (`ID`, `vill_loc`, `up_date`) VALUES
(1, 'Ram Nagar', '2023-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pincodes`
--
ALTER TABLE `pincodes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `postoffices`
--
ALTER TABLE `postoffices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tehsils`
--
ALTER TABLE `tehsils`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vill_loc`
--
ALTER TABLE `vill_loc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pincodes`
--
ALTER TABLE `pincodes`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `postoffices`
--
ALTER TABLE `postoffices`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tehsils`
--
ALTER TABLE `tehsils`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vill_loc`
--
ALTER TABLE `vill_loc`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
