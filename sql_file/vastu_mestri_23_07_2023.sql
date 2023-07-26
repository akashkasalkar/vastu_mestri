-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 08:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vastu_mestri`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `brand_name` varchar(300) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `fk_category_id`, `brand_name`, `status`, `discount`, `photo`, `created_date`, `updated_date`) VALUES
(4, 1, 'Demo1', '0', 0, './resources/brand/64adb96cf0ca59611f8fc72f70191da2brand-logo-after.jpeg', '2023-07-18 00:38:29', '2023-07-18 00:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Python', '', '2023-07-18 00:32:20', '2023-07-18 00:32:20'),
(2, 'Plumbing', '', '2023-07-20 17:05:12', '2023-07-20 17:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupan`
--

CREATE TABLE `coupan` (
  `coupan_id` int(11) NOT NULL,
  `fk_brand_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `amount` int(11) NOT NULL,
  `expiry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(300) NOT NULL,
  `status` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `coupan_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `fk_payment_id` int(11) NOT NULL,
  `fk_checkout_id` int(11) NOT NULL,
  `fk_user_location_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `coupan_code` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `order_status` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `fk_order_id` int(11) NOT NULL,
  `payment_mode` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `fk_sub_cat_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `fk_sub_cat_id`, `product_name`, `description`, `photo`, `status`, `created_date`, `updated_date`) VALUES
(4, 1, 'P1', '11111111', 'brand-logo-after.jpeg', '', '2023-07-23 16:58:22', '2023-07-23 16:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_price_details`
--

CREATE TABLE `product_price_details` (
  `ppd_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `fk_size_id` int(11) NOT NULL,
  `price` varchar(10) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `cgst` varchar(10) NOT NULL,
  `sgst` varchar(10) NOT NULL,
  `igst` varchar(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `description`, `created_date`, `updated_date`) VALUES
(1, '1*1', '2023-07-23 15:26:46', '2023-07-23 15:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `fk_brand_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `fk_brand_id`, `name`, `discount`, `created_date`, `updated_date`) VALUES
(1, 4, 'abc', '10', '2023-07-23 15:18:13', '2023-07-23 15:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_location`
--

CREATE TABLE `user_location` (
  `user_location_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `fk_category_id` (`fk_category_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_user_id` (`fk_user_id`),
  ADD KEY `fk_product_id` (`fk_product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`),
  ADD KEY `fk_user_id` (`fk_user_id`),
  ADD KEY `fk_product_id` (`fk_product_id`);

--
-- Indexes for table `coupan`
--
ALTER TABLE `coupan`
  ADD PRIMARY KEY (`coupan_id`),
  ADD KEY `fk_product_id` (`fk_product_id`),
  ADD KEY `fk_brand_id` (`fk_brand_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_checkout_id` (`fk_checkout_id`),
  ADD KEY `fk_payment_id` (`fk_payment_id`),
  ADD KEY `fk_user_location_id` (`fk_user_location_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_order_id` (`fk_order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_brand_id` (`fk_sub_cat_id`);

--
-- Indexes for table `product_price_details`
--
ALTER TABLE `product_price_details`
  ADD PRIMARY KEY (`ppd_id`),
  ADD KEY `fk_p_id2` (`fk_product_id`),
  ADD KEY `fksizeid` (`fk_size_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `fk_product_id` (`fk_product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_brand_id2` (`fk_brand_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_location`
--
ALTER TABLE `user_location`
  ADD PRIMARY KEY (`user_location_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `fk_product_id` (`fk_product_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_price_details`
--
ALTER TABLE `product_price_details`
  MODIFY `ppd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_location`
--
ALTER TABLE `user_location`
  MODIFY `user_location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`fk_category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `coupan`
--
ALTER TABLE `coupan`
  ADD CONSTRAINT `coupan_ibfk_1` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `coupan_ibfk_2` FOREIGN KEY (`fk_brand_id`) REFERENCES `brand` (`brand_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`fk_checkout_id`) REFERENCES `checkout` (`checkout_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`fk_payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`fk_user_location_id`) REFERENCES `user_location` (`user_location_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`fk_order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`fk_sub_cat_id`) REFERENCES `sub_category` (`id`);

--
-- Constraints for table `product_price_details`
--
ALTER TABLE `product_price_details`
  ADD CONSTRAINT `fk_p_id2` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fksizeid` FOREIGN KEY (`fk_size_id`) REFERENCES `size` (`id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `fk_brand_id2` FOREIGN KEY (`fk_brand_id`) REFERENCES `brand` (`brand_id`);

--
-- Constraints for table `user_location`
--
ALTER TABLE `user_location`
  ADD CONSTRAINT `user_location_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
