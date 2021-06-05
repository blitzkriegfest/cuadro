-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2021 at 04:59 AM
-- Server version: 5.6.51
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
-- Database: `cuadroph_cuadro`
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '2021-04-21 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'rmagsakay@myoptimind.com', '09676616215', '$2y$10$OkcRP57HLz0.QUnb7fr.T.ZD6To394gqzU9tGbFViq.UK1qGgFR7e', '2021-04-20 14:41:21', '2021-04-21 11:50:37'),
(7, 'April Ang', 'april@myoptimind.com', '', '$2y$10$4Q6O.dfpqHP.qgFyTuDWDOX7kwVZrNlE0fXQscdHnWmuXMlmylZPi', '2021-05-19 11:39:22', '2021-04-21 00:00:00'),
(9, 'Kitty Mella', 'keepit100marketing@gmail.com', '', '$2y$10$biIBAklMP/VPgvcEidbY6OB.ZIfb4900fWPhbkGnHYXhpXVATYx2m', '2021-05-28 11:00:24', '2021-06-03 00:52:43'),
(10, 'Marx Mella', 'marx_alternate@yahoo.com', '', '$2y$10$mH6dS04YhS2NLPoVLaZTHeaJ2qo4D8285GG/DimDIX4sqbgQ4lRHe', '2021-05-28 11:02:07', '2021-04-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_number` varchar(200) NOT NULL,
  `contact_address` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `contact_number`, `contact_address`, `created_at`, `updated_at`) VALUES
(2, 'Operations', '639995851756', 'Our greatest asset is our customers! Let us help you. You can email us at customersupport@cuadroph.com', '2021-05-27 05:44:29', '2021-06-03 01:10:38'),
(3, 'Sales & Marketing', '6384778644, 639995851753', 'Still haven\'t received your beautiful Cuadro frames yet? You can email us at sales@cuadroph.com', '2021-05-27 05:44:59', '2021-06-04 05:11:49');

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '2021-04-20 00:00:00' ON UPDATE CURRENT_TIMESTAMP
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(3, 'Why choose Cuadro?', 'Everyone has thousands of photos on their phone, but nobody wants to go through the trouble of going to the photo print shop to have them framed. Seeing photo frames on the table gathering dust is no fun either, but everyone wants to showcase their precious photos. We at Cuadro solves all these!', '2021-04-30 13:01:30', '2021-05-11 08:06:18'),
(4, 'How do I order Cuadro?', 'Visit our website www.cuadroph.com and simply upload your favorite photos from your phone or social media accounts like Facebook & Instagram. Then, sit back, relax and we’ll deliver your frames right to your doorstep.', '2021-04-30 13:01:50', '2021-05-11 03:22:16'),
(5, 'What are the sizes of the frames?', '8 x 8 inches or 20 x 20cm. We have 5 beautiful different frames to\r\nchoose from.', '2021-04-30 13:02:04', '1990-01-01 00:00:00'),
(6, 'What is the minimum photo resolution should I use?', 'For clear HD-quality photo printouts, your photos should have at least\r\n499x499 pixels or 300 DPI resolution.', '2021-04-30 13:02:32', '1990-01-01 00:00:00'),
(7, 'How much does Cuadro cost?', 'Each order begins with ₱ 1,800  (Tax Inclusive) for your first 3 frames, then ₱ 450 for each additional frame in your set.', '2021-04-30 13:02:49', '1990-01-01 00:00:00'),
(8, 'Can I hang my Cuadro frames anywhere?', 'For best results, make sure that you hang them on clean, smooth,\r\nand flat surfaces.', '2021-04-30 13:03:03', '1990-01-01 00:00:00'),
(9, 'How do I hang my Cuadro Frames?', 'Your hammer &amp; nails stay in storage where they belong! All of our\r\nframes has a tape adhesive on the back side. Just gently strip off the\r\nclear tape cover and start creating your wall art.', '2021-04-30 13:03:22', '1990-01-01 00:00:00'),
(10, 'Can I move my Cuadro frame one spot to another?', 'Absolutely yes! The special tape adhesive gives you the freedom to\r\nmove your frames from one spot to another and it will NOT damage\r\nyour walls.', '2021-04-30 13:03:56', '1990-01-01 00:00:00'),
(11, 'How soon can I receive my photos?', 'Upon confirmation of your order, you can expect to receive your beautiful photos within 7-14 days.', '2021-04-30 13:15:07', '1990-01-01 00:00:00'),
(12, 'How much do I pay for shipping?', 'Great news! All your orders are FREE of shipping fees, anywhere in the Philippines!', '2021-04-30 13:15:22', '1990-01-01 00:00:00'),
(13, 'Do you ship to other countries?', 'Please like our Facebook ( https://www.facebook.com/cuadroframes) and Instagram (https://www.instagram.com/cuadroframes/) page for our announcements on this soon!', '2021-04-30 13:15:39', '1990-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `feature_title` text NOT NULL,
  `feature_description` text NOT NULL,
  `feature_image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_title`, `feature_description`, `feature_image`, `created_at`, `updated_at`) VALUES
(1, 'No more banging on your walls', 'Our frames use a special tape adhesive.', '1622510228_no-nail.png', '2021-05-27 16:13:17', '2021-05-31 20:17:08'),
(2, 'Frames stick and unstick from your wall without any damage', 'Our frames stick to any FLAT surface.', '1622510240_stick.png', '2021-05-27 16:16:01', '2021-05-31 20:17:20'),
(3, 'Conveniently delivered to your doorstep', '<span>FREE DELIVERY</span> nationwide within 7-14 days.', '1622510250_free-delivery.png', '2021-05-27 16:16:32', '2021-05-31 20:17:30');

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frames`
--

INSERT INTO `frames` (`frame_id`, `frame_type`, `frame_image`, `data_boundary`, `data_percentage_boundary`, `created_at`, `updated_at`) VALUES
(11, 'Bestseller', '1619762879_best-seller.png', 42, 18, '2021-04-30 13:27:53', '2021-05-20 04:59:41'),
(12, 'Midnight', '1619762893_midnight.png', 12, 5, '2021-04-30 13:28:08', '2021-05-20 04:59:48'),
(13, 'Natural', '1619762903_natural.png', 42, 18, '2021-04-30 13:28:14', '2021-05-20 04:59:53'),
(14, 'Snow', '1619762916_snow.png', 12, 5, '2021-04-30 13:29:05', '2021-05-20 05:00:00'),
(15, 'Infinity', '1619762935_infinity.png', 0, 0, '2021-04-30 13:29:10', '2021-05-20 05:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(9) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` tinytext,
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderimages`
--

INSERT INTO `orderimages` (`image_id`, `order_id`, `order_images`, `cropped_images`, `created_at`, `updated_at`) VALUES
(1, 1, '', '202105270714000.jpg', '2021-05-27 19:14:00', '1990-01-01 00:00:00'),
(2, 1, '', '202105270714001.jpg', '2021-05-27 19:14:00', '1990-01-01 00:00:00'),
(3, 1, '', '202105270714002.jpg', '2021-05-27 19:14:00', '1990-01-01 00:00:00'),
(4, 2, '', '202105270747360.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(5, 2, '', '202105270747361.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(6, 2, '', '202105270747362.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(7, 2, '', '202105270747363.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(8, 2, '', '202105270747364.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(9, 2, '', '202105270747365.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(10, 2, '', '202105270747366.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(11, 2, '', '202105270747367.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(12, 2, '', '202105270747368.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(13, 2, '', '202105270747369.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(14, 2, '', '2021052707473610.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(15, 2, '', '2021052707473611.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(16, 2, '', '2021052707473612.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(17, 2, '', '2021052707473613.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(18, 2, '', '2021052707473614.jpg', '2021-05-27 19:47:36', '1990-01-01 00:00:00'),
(19, 3, '', '202105270911310.jpg', '2021-05-27 21:11:31', '1990-01-01 00:00:00'),
(20, 3, '', '202105270911311.jpg', '2021-05-27 21:11:31', '1990-01-01 00:00:00'),
(21, 3, '', '202105270911312.jpg', '2021-05-27 21:11:31', '1990-01-01 00:00:00'),
(22, 3, '', '202105270911313.jpg', '2021-05-27 21:11:31', '1990-01-01 00:00:00'),
(23, 4, '', '202105271201520.jpg', '2021-05-28 00:01:52', '1990-01-01 00:00:00'),
(24, 4, '', '202105271201521.jpg', '2021-05-28 00:01:52', '1990-01-01 00:00:00'),
(25, 4, '', '202105271201522.jpg', '2021-05-28 00:01:52', '1990-01-01 00:00:00'),
(26, 4, '', '202105271201523.jpg', '2021-05-28 00:01:52', '1990-01-01 00:00:00'),
(27, 4, '', '202105271201524.jpg', '2021-05-28 00:01:52', '1990-01-01 00:00:00'),
(28, 4, '', '202105271201525.jpg', '2021-05-28 00:01:52', '1990-01-01 00:00:00'),
(29, 5, '', '202105280539520.jpg', '2021-05-28 17:39:52', '1990-01-01 00:00:00'),
(30, 5, '', '202105280539521.jpg', '2021-05-28 17:39:52', '1990-01-01 00:00:00'),
(31, 5, '', '202105280539522.jpg', '2021-05-28 17:39:52', '1990-01-01 00:00:00'),
(32, 13, '', '202106010410570.jpg', '2021-05-31 23:10:57', '1990-01-01 00:00:00'),
(33, 13, '', '202106010410571.jpg', '2021-05-31 23:10:57', '1990-01-01 00:00:00'),
(34, 13, '', '202106010410572.jpg', '2021-05-31 23:10:57', '1990-01-01 00:00:00'),
(35, 14, '', '202106010618460.jpg', '2021-06-01 01:18:46', '1990-01-01 00:00:00'),
(36, 14, '', '202106010618461.jpg', '2021-06-01 01:18:46', '1990-01-01 00:00:00'),
(37, 14, '', '202106010618462.jpg', '2021-06-01 01:18:46', '1990-01-01 00:00:00'),
(38, 15, '', '202106010635460.jpg', '2021-06-01 01:35:46', '1990-01-01 00:00:00'),
(39, 15, '', '202106010635461.jpg', '2021-06-01 01:35:46', '1990-01-01 00:00:00'),
(40, 15, '', '202106010635462.jpg', '2021-06-01 01:35:46', '1990-01-01 00:00:00'),
(41, 16, '', '202106010641520.jpg', '2021-06-01 01:41:52', '1990-01-01 00:00:00'),
(42, 16, '', '202106010641521.jpg', '2021-06-01 01:41:52', '1990-01-01 00:00:00'),
(43, 16, '', '202106010641522.jpg', '2021-06-01 01:41:52', '1990-01-01 00:00:00'),
(44, 17, '', '202106010804080.jpg', '2021-06-01 03:04:08', '1990-01-01 00:00:00'),
(45, 17, '', '202106010804081.jpg', '2021-06-01 03:04:08', '1990-01-01 00:00:00'),
(46, 17, '', '202106010804082.jpg', '2021-06-01 03:04:08', '1990-01-01 00:00:00'),
(47, 17, '', '202106010804083.jpg', '2021-06-01 03:04:08', '1990-01-01 00:00:00'),
(48, 17, '', '202106010804084.jpg', '2021-06-01 03:04:08', '1990-01-01 00:00:00'),
(49, 17, '', '202106010804085.jpg', '2021-06-01 03:04:08', '1990-01-01 00:00:00');

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
  `order_status` varchar(200) NOT NULL DEFAULT 'Pending Payment',
  `proof_of_payment` text,
  `mode_of_payment` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `email`, `number`, `address_1`, `address_2`, `city`, `state_province`, `postal_code`, `sender_name`, `sender_email`, `sender_number`, `order_type`, `order_cost`, `order_status`, `proof_of_payment`, `mode_of_payment`, `created_at`, `updated_at`) VALUES
(1, 'Marx Mella', 'marx_alternate@yahoo.com', '09995851753', '3 Kaimito St.', 'TCEV ', 'Antipolo ', 'Rizal ', '1870', NULL, NULL, NULL, 'Midnight', 1800, 'Pending Payment', '1622114040_A791AEC8-D744-4BB5-92E1-4F8CA26CA60B.jpeg', 'Gcash', '2021-05-27 07:14:00', '1990-01-01 00:00:00'),
(2, 'Jahshshdhd', 'marx_alternate@yahoo.com', '72736632783', 'Gehehhs', 'Janshssh', 'Hshdhjsjd', 'Hshshdhd', '19273', NULL, NULL, NULL, 'Bestseller', 1800, 'Ready for Delivery', '1622116056_97DB5498-1203-4470-96F6-1F100C72E696.png', 'Bank Transfer', '2021-05-27 07:47:36', '1990-01-01 00:00:00'),
(3, 'Abdul Abubakar', 'marx_alternate@yahoo.com', '09995851753', '43 Caballero St.', 'Town & Country Executive Village ', 'Antipolo ', 'Rizal ', '1870', NULL, NULL, NULL, 'Snow', 1800, 'Processing Order', '1622121091_6A84B276-527C-488C-92ED-FDBAA63488AF.jpeg', 'Gcash', '2021-05-27 09:11:31', '1990-01-01 00:00:00'),
(4, 'Shawn Michael Yohan', 'shawnyohan.204@gmail.com', '09455790484', 'Blk 193 Lot 20 Ph 4', 'Paliparan 3', 'Cavite', 'Dasmariñas City', '4114', NULL, NULL, NULL, 'Midnight', 1800, 'Delivered', '1622131312_snake_plant.jpg', 'Gcash', '2021-05-27 12:01:52', '1990-01-01 00:00:00'),
(5, 'Marx Mella', 'marx_alternate@yahoo.com', '09995851753', '3 Kaimito St.', ' Town & Country Executive Village', 'Antipolo', 'Rizal', '1870', NULL, NULL, NULL, 'bestseller', 1800, 'Processing Order', '1622194792_CUADRO.png', 'Gcash', '2021-05-28 05:39:52', '1990-01-01 00:00:00'),
(17, 'Ryan Jacinto', 'rmagsakay@myoptimind.com', '09676616215', '347 National Road', 'None', 'Makati', 'Rizal', '1940', NULL, NULL, NULL, 'Infinity', 3150, 'Pending Payment', '1622534648_partner-gcash.png', 'Gcash', '2021-06-01 08:04:08', '1990-01-01 00:00:00');

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_desc`, `product_stock`, `created_at`, `updated_at`) VALUES
(2, 'Coming Soon!', '1622518233_placeholder.png', 'Coming Soon!', 2, '2021-05-03 13:56:20', '2021-05-31 22:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_image`, `created_at`, `updated_at`) VALUES
(6, '', '1622015896_IMG_8068.jpeg', '2021-04-30 15:39:03', '2021-05-26 09:58:16'),
(7, '&nbsp;', '1622015926_IMG_8089.jpeg', '2021-05-26 09:58:46', '1990-01-01 00:00:00'),
(8, '&nbsp;', '1622015962_IMG_7936.jpeg', '2021-05-26 09:59:23', '1990-01-01 00:00:00'),
(9, '&nbsp;', '1622015998_IMG_7954.jpeg', '2021-05-26 09:59:59', '1990-01-01 00:00:00'),
(10, '&nbsp;', '1622016040_IMG_7967.jpeg', '2021-05-26 10:00:40', '1990-01-01 00:00:00'),
(11, '&nbsp;', '1622016070_IMG_8038.jpeg', '2021-05-26 10:01:12', '1990-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `base_rate` int(11) NOT NULL,
  `additional_rate_per_frame` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1990-01-01 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `base_rate`, `additional_rate_per_frame`, `created_at`, `updated_at`) VALUES
(1, 1800, 450, '2021-05-04 13:44:09', '2021-05-27 18:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `homepage_image` text NOT NULL,
  `yiframe_title` varchar(200) NOT NULL,
  `yiframe_desc` varchar(200) NOT NULL,
  `yiframe_embed` varchar(500) NOT NULL,
  `location_embed` varchar(500) NOT NULL,
  `terms` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `homepage_image`, `yiframe_title`, `yiframe_desc`, `yiframe_embed`, `location_embed`, `terms`, `created_at`, `updated_at`) VALUES
(1, '1622093517_IMG_6150.jpg', 'FRAME YOUR TREASURES<br>TREASURE YOUR FRAMES', 'Turn your walls into galleries of your most special moments or favorite decor', '&lt;iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VW7EdTC9bRs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen&gt;&lt;/iframe&gt;', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3860.8055240921017!2d121.0793966!3d14.6101517!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x2c718a49bf834007!2sEastwood Mall!5e0!3m2!1sen!2sph!4v1622799159543!5m2!1sen!2sph', '<p>Welcome to the Website of Cuadro Corporation (<a href=\"http://www.cuadroph.com/\">www.cuadroph.com</a>) owned and operated by Keep It 100 Marketing (the \"Company\"). By accessing and using the Website, You agree to be bound by the terms and conditions set forth below. If You do not agree to by bound by this Agreement, do not understand the Agreement, or if You need more time to review and consider this Agreement, please leave the Website immediately. The Company only agrees to provide use of the Website and Services to You if You assent to this Agreement.</p>\r\n\r\n<h6><strong>1. DEFINITIONS</strong></h6>\r\n\r\n<p>The parties referred to in this Agreement shall be defined as follows:</p>\r\n\r\n<p>a. Company, Us, We: The Company, as the creator, operator, and publisher of the Website, makes the Website and certain Services on it, available to users. Cuadro Corporation, Company, We, Us, Our, Ours and other first person pronouns will refer to the Company, as well as all employees and affiliates of the Company.</p>\r\n\r\n<p>b. You, the User, the Client: You, as the user of the website will be referred to throughout this Agreement with second-person pronouns such as You, Your, Yours, or as User or Client.</p>\r\n\r\n<p>c. Parties: Collectively, the parties to this Agreement (the Company and You) will be referred to as Parties.</p>\r\n\r\n<h6><strong>2. AGE RESTRICTION</strong></h6>\r\n\r\n<p>You must be at least Eighteen (18) years of age to use this Website or any Services contained herein. By using this Website, You represent and warrant that You are at least 18 years of age and may legally agree to this Agreement. The Company assumes no responsibility or liability for any misrepresentation of Your age.</p>\r\n\r\n<h6><strong>3. INTELLECTUAL PROPERTY</strong></h6>\r\n\r\n<p>The Website, including all content features in the Website including all text, graphics,images, logos, trademarks, and the link (the \"Content\"), and Services provided by the Company are the property of the Company. You agree that that the Company owns all right, title, interest in and to the Content and that You will not use the Content for any unlawful or infringing purpose.<br>\r\n<br>\r\nSubject to this Agreement, the Company grants You a non-exclusive, limited, non- transferable, and revocable license to use the Content solely in connection with Your use of the Website and Services. The Content may not be used for any other purpose, and this license terminates upon Your cessation of the use of the Website or Services or at the termination of this Agreement.<br>\r\n<br>\r\nYou agree not to reproduce or distribute the Content in any way, including electronically or via registration of any new trademarks, trade names, service marks, or Uniform Resource Locators (URLs), without express written permission from the Company.</p>\r\n\r\n<h6><strong>4. USER ACCOUNTS AND OBLIGATIONS</strong></h6>\r\n\r\n<p>Some content on the Website may only be accessed by the User by registering with Us. When You do so, You will choose a user identifier, which may be Your email address. You may also be required to provide personal information, including, but not limited to, Your name. You are responsible for ensuring the accuracy of this information.<br>\r\n<br>\r\nYou agree to keep Your user identifier and that You will not share such identifying information with any third party. If You discover that Your identifying information has been compromised, You agree to notify Us immediately in writing. Email notification will suffice.<br>\r\n<br>\r\nYou are responsible for maintaining the safety and security of Your identifying information as well as keeping Us informed of any changes to Your identifying information. Providing false or inaccurate information, or using the Website or Services to further fraud or unlawful activity is grounds for immediate termination of this Agreement.<br>\r\n<br>\r\nYou agree that You are solely responsible for all acts or omissions that occur under Your identifying information, including the content of any transmissions using the Website or Service.<br>\r\n </p>\r\n\r\n<h6><strong>5. ACCEPTABLE USE</strong></h6>\r\n\r\n<p>As a condition of Your use of the Website or Services, You agree not to use the Website or Service for any unlawful purpose or any purpose prohibited under this clause. You agree not to use the Website or Services in any way that could damage the Website, Services, or general business of the Company. You further agree not to use the Website or Services to:</p>\r\n\r\n<p>a. Harass, abuse, or threaten others or otherwise violate any person&#39;s legal rights;</p>\r\n\r\n<p>b. Violate any intellectual property rights of the Company or any third party;</p>\r\n\r\n<p>c. Perpetrate any fraud;</p>\r\n\r\n<p>d. Engage in or create any unlawful gambling, sweepstakes, or pyramid scheme;</p>\r\n\r\n<p>e. Attempt to gain unauthorized access to the Website or Service, other accounts, computer systems or networks connected with the Website or Service;</p>\r\n\r\n<p>f. Transmit or upload any content or material that contains viruses, trojan horses, ransomware, or other harmful or deleterious programs or software;</p>\r\n\r\n<p>g. Publish or distribute any obscene or defamatory material;</p>\r\n\r\n<p>h. Publish or distribute any material that incites violence, date, or discrimination towards any group;</p>\r\n\r\n<p>i. Unlawfully gather information about others, including email addresses;</p>\r\n\r\n<p>j. Interfere with another user&#39;s use and enjoyment of the Website or Service or any similar Website or Service.</p>\r\n\r\n<h6><strong>6. THIRD PARTY LINKS</strong></h6>\r\n\r\n<p>You acknowledge that We may, from time to time, include links or references to other websites, other content, or other materials (\"Third Party Links\"), none of which are controlled by Us.<br>\r\n<br>\r\nThird Party Links are provided for Your information only and We do not make any representations, warranties, or guarantees as to the accuracy, completeness, performance, reliability, timeliness, quality, or suitability for a particular purpose of these Third Party Links. We do not endorse, approve, or support these Third Party Links.<br>\r\n<br>\r\nYou use the Third Party Links at Your own risk.</p>\r\n\r\n<h6><strong>7. SALE OF GOODS/SERVICES</strong></h6>\r\n\r\n<p>We may sell Goods or Services on the Website. If this occurs, then some specific exclusions of liability will apply, as described in the \"Exclusion of Liability\" Clause. Please refer to Our additional terms and conditions for sale of goods and/or terms and conditions for sale of services as applicable.<br>\r\n<br>\r\nFrom time to time, the Company may post promotional offers for Goods and Services on the website. The frequency of such offers, as well as their terms and conditions are determined by the Company.<br>\r\n<br>\r\nThe user is aware that the number of promotional offers for Goods and Services is limited.<br>\r\n<br>\r\nThe Company does not guarantee or promise to Users that:</p>\r\n\r\n<p>a. the purchase of any promotional Goods and Services on the website is any way beneficial for the User and/or third parties; and</p>\r\n\r\n<p>b. the cost of promotional Goods and Services is necessarily lower than their usual cost on the website or on other third-party websites.</p>\r\n\r\n<h6><strong>8. EXCLUSION OF LIABILITY</strong></h6>\r\n\r\n<p>a. The Website and Service, and its Content, are provided for general information only and may change at any time without prior notice.</p>\r\n\r\n<p>b. You accept and acknowledge that the Website, Service, Goods, or Services may contain mistakes, errors, and inaccuracies.</p>\r\n\r\n<p>c. Your use of the Website, Content, and information or documentation that We may provide to You in connection with Your use of the Goods, Services, or Products including documentation, data, and information developed by Us or owned by Us, and other materials which may assist in Your use of Goods or Services or Website (collectively, the \"Materials\"), is entirely at Your risk. It is Your responsibility to make sure that any Goods, Services, Materials, Content, or other information available through the Website or Service suits Your particular purpose.</p>\r\n\r\n<p>d. Neither We, nor any third parties provide any guarantees or warranties regarding the accuracy, completeness, performance, reliability, timeliness, quality, merchantability, safety, legality, or suitability for a particular purpose of the Website, Goods, or Services.</p>\r\n\r\n<p>e. To the maximum extent permitted by law, We hereby expressly exclude all warranties, guarantees, representations, or terms (whether express or implied) except for those expressly set out in these Agreements.</p>\r\n\r\n<p>f. To the maximum extent permitted by law, We hereby expressly exclude any liability in relation to the accuracy, completeness, performance, reliability, timeliness, quality, merchantability, safety, legality, or suitability for a particular purpose of the Website, Goods, or Services.</p>\r\n\r\n<p>g. To the maximum extent permitted by law, We hereby expressly exclude any liability in relation to loss of data, interruption to Your business or any damages which are incidental to or arise from such loss of data or interruption to business.</p>\r\n\r\n<p>h. To the maximum extent permitted by law, We will not be liabile for any damage, loss, cost, or expense including legal costs and expenses, whether direct or indirect, incurred by You in connection with Your use of the Website, Goods, or Services.</p>\r\n\r\n<h6><strong>9. PAYMENT/SHIPPING/DELIVERY</strong></h6>\r\n\r\n<p>You agree to ensure payment for any items You may purchase from Us, and You acknowledge and affirm that prices are subject to change. You agree to provide Us with a valid email and a valid billing information. When purchasing a physical good, You also agree to provide us with a valid shipping address. When purchasing a Good or Service, We reserve the right to reject or cancel an order for any reason, including errors or omissions in the information that You provide to us. If We do so after payment has been processed, We will issue a refund to You in the amount of the purchase price. We may also request additional information from You prior to confirming a sale, and We reserve the right to place any additional restrictions on the sale of any of Our products. You agree to ensure payment for any items You may purchase from Us, and You acknowledge and affirm that prices are subject to change. You agree to monitor Your method of payment.<br>\r\n<br>\r\nThe Company accepts the following methods of payment through the website:</p>\r\n\r\n<p>If payment will be by card, you must be fully entitled to use the card or account. Shipment dates are subject to change and may be different from the dates that You are quoted due to unforeseen circumstances.<br>\r\n<br>\r\nIf Goods are damaged during delivery, please contact Us using the details at the end of this Agreement. We may choose in Our sole discretion whether or not to replace Goods which are lost or damaged during delivery.</p>\r\n\r\n<p>Peso Pay Account</p>\r\n\r\n<h6><strong>10. RETURNS/REFUNDS</strong></h6>\r\n\r\n<p>The following is our returns/refunds policy:</p>\r\n\r\n<p>We regret to inform you that we strictly do not do refunds.</p>\r\n\r\n<p>If you are not 100% satisfied with your purchase, you can return the product and exchange the product for another one, be it similar or not.  </p>\r\n\r\n<p>Any product you return must be in the same condition you received it and in the original packaging.  </p>\r\n\r\n<p>Please keep the receipt.</p>\r\n\r\n<p>We can accept exchanges if the item you have received is a defective item. You can contact us at customersupport@cuadroph.com with details of the product and the defect.  </p>\r\n\r\n<p>You can also send the item you consider defective to our office address at:</p>\r\n\r\n<p>3 Kaimito Street Town & Country Executive Village Marcos Highway Antipolo Rizal 1870  </p>\r\n\r\n<p>You will be responsible for paying for your own shipping cost for returning your item/s.  </p>\r\n\r\n<p>Upon receipt of the returned product, we will fully examine it and notify you via e- mail, within a reasonable period of time, whether you are entitled to a replacement as a result of the defect.</p>\r\n\r\n<p>If you are entitled to a replacement, we will replace the product and send it back to you, FREE OF CHARGE. This offer applies to 1 exchange only per transaction.</p>\r\n\r\n<h6><strong>11. ASSUMPTION OF RISK</strong></h6>\r\n\r\n<p>The Website and Services are provided for communication purposes only. You acknowledge and agree that any information posted on Our Website is not intended to be legal advice, medical advice, or financial advice, and no fiduciary relationship has been created between You and the Company.<br>\r\n<br>\r\nYou further agree that Your purchase of any products on the Website is at Your own risk. The Company does not assume responsibility or liability for any advice or other information given on the Website.<br>\r\n<br>\r\nWe shall not be liable for any damage to any computer, equipment, software, data, or other information caused by Your access or use of the Website or Service. We shall likewise not be liable for any action of third parties.</p>\r\n\r\n<h6><strong>12. PRIVACY</strong></h6>\r\n\r\n<p>Through Your Use of the Website and Services, You may provide Us with certain information. By using the Website or the Services, You authorize the Company to use Your information in the Philippines and any other country where We may operate. We take Our privacy obligations very seriously.<br>\r\n<br>\r\nPlease refer to Our privacy policy (<a href=\"http://cuadro.blitzworx.com/PrivacyPolicy\">www.cuadro.blitzworx.com/PrivacyPolicy</a>) for further information about what information We collect, how We use it and store it, and Your rights in relation to it.</p>\r\n\r\n<h6><strong>13. COOKIES</strong></h6>\r\n\r\n<p>This Website uses Cookies. Please refer to Our Cookies policy for information on the information that we collect: <a href=\"http://www.cuadroph.com/cookies\">www.cuadroph.com/cookies</a>.</p>\r\n\r\n<h6><strong>14. INDEMNITY</strong></h6>\r\n\r\n<p>You agree to defend and indemnify the Company and any of its affiliated (if applicable) and hold Us harmless against and legal claims and demands, including reasonable attorney&#39;s fees, which may arise from or relate to Your use or misuse of the Website or Services, Your breach of this Agreement, or Your conduct or actions. You agree that the Company shall be able to select its own legal counsel and may participate in its own defense, if the Company wishes.</p>\r\n\r\n<h6><strong>15. OTHER ACTION</strong></h6>\r\n\r\n<p>We reserve the right to take any of the following actions in Our sole discretion:</p>\r\n\r\n<p>a. Determine whether or not You have breached this Agreement;</p>\r\n\r\n<p>b. Record any correspondence that occurs in public sections of the Website or Service;</p>\r\n\r\n<p>c. Review any allegations about breaches of these Website or Service, and determine in Our sole discretion whether to take any action in response to those alleged breaches, including removal of any Content in relation to those alleged breaches;</p>\r\n\r\n<p>d. Determine in our sole discretion whether to terminate Your or another user&#39;s access to any particular section or sections of the Website or Service.</p>\r\n\r\n<h6><strong>16. SPAM POLICY</strong></h6>\r\n\r\n<p>You are strictly prohibited from using the Website or any of the Company&#39;s Services for spam activities, including gathering email address and personal information from others or sending any mass commercial emails.</p>\r\n\r\n<h6><strong>17. REVERSE ENGINEERING & SECURITY</strong></h6>\r\n\r\n<p>You agree not to undertake any of the following actions:</p>\r\n\r\n<p>a. Reverse engineer, or attempt to reverse engineer or disassemble any code or software from or on the Website or Services;</p>\r\n\r\n<p>b. Violate the security of the Website or Services through any unauthorized access, circumvention of encryption or other security tools, data mining, or interference to any host, user, or network.</p>\r\n\r\n<h6><strong>18. MODIFICATION & SERVICE INTERRUPTIONS</strong></h6>\r\n\r\n<p>The Company may, in Our sole discretion, vary, alter, amend, change, or update the Website or Service and/or its Content at any time. The Company may need to interrupt Your access to the Website to implement any change or to perform maintenance or emergency services on a scheduled or unscheduled basis. You agree that Your access to the Website may be affected by unanticipated or unscheduled downtime, for any reason, but that the Company shall have no liability for any damage or loss caused as a result of such downtime.</p>\r\n\r\n<h6><strong>19. VARIATION OF TERMS</strong></h6>\r\n\r\n<p>The Company may, from time to time and at any time without notice to You, modify this Agreement. You agree that the Company has the right to modify this Agreement or revise anything contained herein. You further agree that all modifications to this Agreement and are in full force and effect immediately upon posting on the Website and that the modifications or variations will replace any prior version of this Agreement, unless prior versions are specifically referred to or incorporated into the latest modification or variation of this Agreement.<br>\r\n<br>\r\nYou agree to routinely monitor this Agreement and refer to the Effective date at the bottom part of this Agreement to note modifications or variations. You further agree to clear Your cache when doing so to avoid accessing an older version of this Agreement.<br>\r\n<br>\r\nYour continued use of the Website after any modifications to this Agreement is a manifestation of Your continued assent to this Agreement.<br>\r\n<br>\r\nIn the event that You fail to monitor any modifications to or variations of this Agreement, You agree that such failure shall be considered an affirmative waiver of Your right to review the modified Agreement.</p>\r\n\r\n<h6><strong>20. ENTIRE AGREEMENT</strong></h6>\r\n\r\n<p>This Agreement constitutes the entire understanding between the Parties with respect to any and all use of this Website. The Agreement supersedes and replaces all prior or contemporaneous agreements or understandings, written or oral, regarding the use of this Website.</p>\r\n\r\n<h6><strong>21. APPLICABLE LAW</strong></h6>\r\n\r\n<p>This Agreement and Your use of the Website and all non-contractual relationships arising out of Your use shall be governed and construed in accordance with the laws of the Philippines.<br>\r\n<br>\r\nIn case of any dispute or litigation, the Parties agree to submit to the jurisdiction of the Philippines courts.</p>\r\n\r\n<h6><strong>22. ASSIGNMENT</strong></h6>\r\n\r\n<p>This Agreement, or the rights granted hereunder, may not be assigned, sold, leased, or otherwise transferred in whole or in part by You. Should this Agreement, or the rights granted hereunder, be assigned, sold, leased, or otherwise transferred by the Company, the rights and liabilities of the Company will bind and inure to any assignees, administrators, successors, and executors.</p>\r\n\r\n<h6><strong>23. SEVERABILITY</strong></h6>\r\n\r\n<p>If any part or sub-part of this Agreement is held invalid or unenforceable by a court of law or competent arbitrator, the remaining parts and sub-parts will be enforced to the maximum extent possible. In such condition, the remainder of this Agreement shall continue in full force.</p>\r\n\r\n<h6><strong>24. NO WAIVER</strong></h6>\r\n\r\n<p>Our failure to enforce any provision of this Agreement shall not constitute a waiver of any future enforcement of that provision or of any other provision. No waiver shall be deemed to have been made unless expressed in writing and signed by Us. Waiver of any part or sub-part of this Agreement will not constitute a waiver of any other part or sub-part or of the same part or sub-part on a future date.</p>\r\n\r\n<h6><strong>25. HEADINGS</strong></h6>\r\n\r\n<p>Headings of parts and sub-parts under this Agreement are for convenience and organization only. Headings shall not affect the meaning of any provisions of this Agreement.</p>\r\n\r\n<h6><strong>26. CONTACT US</strong></h6>\r\n\r\n<p>You can contact us about this Agreement using the following details: customersupport@cuadroph.com</p>\r\n\r\n<h6><strong>27. EFFECTIVE DATE</strong></h6>\r\n\r\n<p>This Agreement will become effective on 1 June 2021.</p>\r\n\r\n<p> </p>\r\n', '2021-05-27 03:39:23', '2021-06-04 04:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `tags` text NOT NULL,
  `value` text NOT NULL,
  `page` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `tags`, `value`, `page`, `created_at`, `updated_at`) VALUES
(1, 'meta-title', 'test', '', '2021-05-31 22:15:14', '2021-06-05 00:53:59'),
(2, 'meta-title', 'restickable picture frames philippines', '', '2021-06-05 00:54:42', '2021-06-05 00:55:49'),
(3, 'meta-title', 'lightweight ', '', '2021-06-05 00:56:23', '2021-06-05 00:56:23');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orderimages`
--
ALTER TABLE `orderimages`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
