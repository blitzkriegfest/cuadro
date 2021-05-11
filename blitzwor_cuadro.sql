-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2021 at 11:04 AM
-- Server version: 10.3.28-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blitzwor_cuadro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '2021-04-21 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'rmagsakay@myoptimind.com', '09676616215', '$2y$10$OkcRP57HLz0.QUnb7fr.T.ZD6To394gqzU9tGbFViq.UK1qGgFR7e', '2021-04-20 14:41:21', '2021-04-21 11:50:37'),
(5, 'Karen Joy Morales', 'kmorales@myoptimind.com', '', '$2y$10$RQcgEvklifhkA2rKgfR4qubuG11XYdyL3GRKiLAjFiojYlLrsJJQ.', '2021-04-22 11:55:17', '2021-04-21 00:00:00'),
(6, 'Nathaniel Mendoza', 'nmendoza@myoptimind.com', '', '$2y$10$J2DVa7aQnd0/Csnih/WGKewprUdp8EIU3Z0NcN8FzeD/sVPaSeKZy', '2021-05-07 07:02:20', '2021-04-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(9) NOT NULL,
  `some_varchar_field` varchar(200) NOT NULL,
  `some_text_field` text NOT NULL,
  `image_url` text NOT NULL,
  `some_int_field` int(11) NOT NULL,
  `some_datetime_field` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '2021-04-20 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `some_varchar_field`, `some_text_field`, `image_url`, `some_int_field`, `some_datetime_field`, `created_at`, `updated_at`) VALUES
(1, 'Veroem ipsum adasdasd', 'Hooooh', '', 123, '0000-00-00 00:00:00', '2021-04-20 14:41:20', '2021-04-20 00:00:00'),
(2, 'Ahahahah ipsum adasdasd', 'Hohhhhheeeeoh', '', 131323, '2017-06-04 00:00:00', '2021-04-20 14:41:21', '2021-04-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(3, 'Why choose Cuadro?', 'Everyone has thousands of photos on their phone, but nobody wants to go through the trouble of going to the photo print shop to have them framed. Seeing photo frames on the table gathering dust is no fun either, but everyone wants to showcase their precious photos. We, at Cuadro solves all these!', '2021-04-30 13:01:30', '2021-05-11 08:06:18'),
(4, 'How do I order Cuadro?', 'Visit our website  www.cuadro.com and simply upload your favorite photos from your phone or social media accounts like Facebook & Instagram. Then, sit back and we’ll deliver your frames right to your doorstep.', '2021-04-30 13:01:50', '2021-05-11 03:22:16'),
(5, 'What are the sizes of the frames?', '8 x 8 inches or 20 x 20cm. We have 5 beautiful different frames to\r\nchoose from.', '2021-04-30 13:02:04', '1990-01-01 00:00:00'),
(6, 'What is the minimum photo resolution should I use?', 'For clear HD-quality photo printouts, your photos should have at least\r\n499x499 pixels or 300 DPI resolution.', '2021-04-30 13:02:32', '1990-01-01 00:00:00'),
(7, 'How much does Cuadro cost?', 'Each order begins with ₱ 1,700 for your first 3 frames, then ₱ 450 for\r\neach additional frame in your set.', '2021-04-30 13:02:49', '1990-01-01 00:00:00'),
(8, 'Can I hang my Cuadro frames anywhere?', 'For best results, make sure that you hang them on clean, smooth,\r\nand flat surfaces.', '2021-04-30 13:03:03', '1990-01-01 00:00:00'),
(9, 'How do I hang my Cuadro Frames?', 'Your hammer &amp; nails stay in storage where they belong! All of our\r\nframes has a tape adhesive on the back side. Just gently strip off the\r\nclear tape cover and start creating your wall art.', '2021-04-30 13:03:22', '1990-01-01 00:00:00'),
(10, 'Can I move my Cuadro frame one spot to another?', 'Absolutely yes! The special tape adhesive gives you the freedom to\r\nmove your frames from one spot to another and it will NOT damage\r\nyour walls.', '2021-04-30 13:03:56', '1990-01-01 00:00:00'),
(11, 'How soon can I receive my photos?', 'Upon confirmation of your order, you can expect to receive your beautiful photos within 7-14 days.', '2021-04-30 13:15:07', '1990-01-01 00:00:00'),
(12, 'How much do I pay for shipping?', 'Great news! All your orders are FREE of shipping fees, anywhere in the Philippines!', '2021-04-30 13:15:22', '1990-01-01 00:00:00'),
(13, 'Do you ship to other countries?', 'Please like our Facebook ( https://www.facebook.com/cuadroframes) and Instagram ( https://www.instagram.com/cuadroframes/) page for our announcements on this soon!', '2021-04-30 13:15:39', '1990-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

CREATE TABLE `frames` (
  `frame_id` int(10) NOT NULL,
  `frame_type` varchar(200) NOT NULL,
  `frame_image` text NOT NULL,
  `data_boundary` int(11) NOT NULL,
  `data_percentage_boundary` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frames`
--

INSERT INTO `frames` (`frame_id`, `frame_type`, `frame_image`, `data_boundary`, `data_percentage_boundary`, `created_at`, `updated_at`) VALUES
(11, 'bestseller', '1619762879_best-seller.png', 42, 18, '2021-04-30 13:27:53', '2021-05-07 08:53:24'),
(12, 'midnight', '1619762893_midnight.png', 12, 5, '2021-04-30 13:28:08', '2021-05-07 08:49:11'),
(13, 'natural', '1619762903_natural.png', 42, 18, '2021-04-30 13:28:14', '2021-05-07 08:48:05'),
(14, 'snow', '1619762916_snow.png', 12, 5, '2021-04-30 13:29:05', '2021-05-07 08:49:25'),
(15, 'infinity', '1619762935_infinity.png', 0, 0, '2021-04-30 13:29:10', '2021-05-03 17:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(9) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` tinytext DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20180625000001);

-- --------------------------------------------------------

--
-- Table structure for table `orderimages`
--

CREATE TABLE `orderimages` (
  `image_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_images` text NOT NULL,
  `cropped_images` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` text NOT NULL,
  `address_1` text NOT NULL,
  `address_2` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state_province` varchar(500) NOT NULL,
  `postal_code` varchar(200) NOT NULL,
  `sender_name` varchar(200) DEFAULT NULL,
  `sender_email` varchar(200) DEFAULT NULL,
  `sender_number` varchar(200) DEFAULT NULL,
  `order_type` varchar(200) NOT NULL,
  `order_cost` int(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_image` text NOT NULL,
  `product_desc` varchar(300) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_desc`, `product_stock`, `created_at`, `updated_at`) VALUES
(2, 'Test Product', '1620021380_placeholder-image.png', 'This is a test Product.', 2, '2021-05-03 13:56:20', '1990-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_image`, `created_at`, `updated_at`) VALUES
(1, 'Ariel\'s Bedroom', '1619768171_project1.jpg', '2021-04-30 15:36:11', '1990-01-01 00:00:00'),
(2, 'Office', '1619768220_project2.jpg', '2021-04-30 15:37:00', '1990-01-01 00:00:00'),
(3, 'Kitchen', '1619768237_project3.jpg', '2021-04-30 15:37:17', '1990-01-01 00:00:00'),
(4, 'Bedroom', '1619768315_project4.jpg', '2021-04-30 15:38:36', '1990-01-01 00:00:00'),
(5, 'Living Room', '1619768330_project5.jpg', '2021-04-30 15:38:50', '1990-01-01 00:00:00'),
(6, 'Stair Case', '1619768343_project6.jpg', '2021-04-30 15:39:03', '1990-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `base_rate` int(11) NOT NULL,
  `additional_rate_per_frame` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `base_rate`, `additional_rate_per_frame`, `created_at`, `updated_at`) VALUES
(1, 1700, 450, '2021-05-04 13:44:09', '2021-05-11 07:52:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `frames`
--
ALTER TABLE `frames`
  ADD PRIMARY KEY (`frame_id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderimages`
--
ALTER TABLE `orderimages`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `frames`
--
ALTER TABLE `frames`
  MODIFY `frame_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderimages`
--
ALTER TABLE `orderimages`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
