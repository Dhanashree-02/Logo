-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 12:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$09g9zYMYxJDAes9n71DJ3O4IHtIrQXXZJ9t64AjbUu2SGO0CdgxSu');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_description` text NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_description`, `client_image`, `created_at`) VALUES
(1, 'Demo Logo ', 'These logo is for Demo', '67b531594cb4b.jpeg', '2025-02-19 01:18:17'),
(2, 'Logo ', 'These is Logo Image ', '67b540bfa9d2a.jpeg', '2025-02-19 02:23:59'),
(3, 'Devcons', 'These is Devcons logo', '67be91d134422.webp', '2025-02-26 04:00:17'),
(4, 'Smart matrixds', 'These logo is for smart matrix', '67c0d1be78534.webp', '2025-02-27 20:57:34'),
(5, 'RP', 'These logo is for RPBS\r\n', '67c0d3ca54acf.png', '2025-02-27 21:06:18'),
(6, 'Nimbja', 'These logo is for Nimbja ', '67c0d41e149ce.png', '2025-02-27 21:07:42'),
(9, 'JDIT', 'These is JDIT Logo', '67c0e308d74e1.png', '2025-02-27 22:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `verification_code` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`, `verification_code`, `created_at`) VALUES
(1, 'hello', 'hr@smartmatrixds.com', 'addacxds', 'HL0Y3I', '2025-01-15 00:21:08'),
(2, 'ads', 'shree@gmail.com', 'hello ', 'L77QA7', '2025-01-16 21:52:57'),
(3, 'Shree', 'shree@gmail.com', 'hello ', 'hekjkn', '2025-01-16 21:54:59'),
(4, 'Abcd', 'shree@gmail.com', 'hello', 'vRmzmn', '2025-01-16 22:02:10'),
(5, 'ggjhj', 'dhanashree.sonune02@gmail.com', 'ghhgy', 'guguj', '2025-01-24 21:55:01'),
(6, 'jsdjsa', 'contacthynix@gmail.com', 'ffn', 'gshaj', '2025-01-24 22:05:13'),
(7, 'AWDS', 'shree@gmail.com', 'badawj', 'G31EQX', '2025-01-24 22:28:10'),
(8, 'bjebfje', 'abcd@gmail.com', 'djwd', 'djw', '2025-01-24 22:40:55'),
(9, 'Abcd', 'shree@gmail.com', 'hello', 'VorY', '2025-01-24 22:43:46'),
(10, 'vhvdhw', 'contacthynix@gmail.com', 'HRUH', 'KHIH', '2025-01-24 22:45:55'),
(11, 'Shree', 'shree@gmail.com', 'hello', 'orUK4l', '2025-01-24 22:50:10'),
(12, 'geh', 'shree@gmail.com', 'ded', 'VZFLmv', '2025-01-24 23:00:50'),
(13, 'hello', 'shree@gmail.com', 'hello', 'bxaeLx', '2025-01-30 22:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `created_at`, `read_status`) VALUES
(1, 'New order received for product: t sgirt by Dhanashree', '2024-12-17 22:13:39', 0),
(2, 'New order received for product: hello by dhanashree', '2024-12-17 22:40:33', 0),
(3, 'New order received for product: hwjshdj by DHJS', '2024-12-18 22:59:44', 0),
(4, 'New order received for product: sas by dd', '2025-01-01 21:23:25', 0),
(5, 'New order received for product: try by dhanahsree', '2025-01-03 02:48:02', 0),
(6, 'New order received for product: try by DHANASHREE', '2025-01-03 02:50:55', 0),
(7, 'New order received for product: demo by root', '2025-01-03 02:52:30', 0),
(8, 'New order received for product: demo by adssd', '2025-01-03 03:01:11', 0),
(9, 'New order received for product: demo by adssd', '2025-01-03 03:01:30', 0),
(10, 'New order received for product: demo by adssd', '2025-01-03 03:01:33', 0),
(11, 'New order received for product: Abcd by dhanashree', '2025-01-03 03:03:16', 0),
(12, 'New order received for product: try by Dha', '2025-01-05 20:42:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `quantity`, `user_name`, `user_email`, `order_date`, `status`) VALUES
(1, 't sgirt', 1, 'Dhanashree', 'shree@gmail.com', '2024-12-17 22:13:39', 1),
(2, 'hello', 2, 'dhanashree', 'shree@gmail.com', '2024-12-17 22:40:33', 1),
(3, 'hwjshdj', 2, 'DHJS', 'shree@gmail.com', '2024-12-18 22:59:44', 1),
(4, 'sas', 3, 'dd', 'dhansashree@gmaom', '2025-01-01 21:23:25', 2),
(5, 'try', 2, 'dhanahsree', 'dhansashree@gmaom', '2025-01-03 02:48:01', 0),
(6, 'try', 3, 'DHANASHREE', 'shree@gmail.com', '2025-01-03 02:50:55', 0),
(7, 'demo', 2, 'root', 'dhansashree@gmaom', '2025-01-03 02:52:30', 0),
(8, 'demo', 3, 'adssd', 'dhansashree@gmaom', '2025-01-03 03:01:11', 0),
(9, 'demo', 3, 'adssd', 'dhansashree@gmaom', '2025-01-03 03:01:30', 0),
(10, 'demo', 3, 'adssd', 'dhansashree@gmaom', '2025-01-03 03:01:33', 0),
(11, 'Abcd', 2, 'dhanashree', 'dhansashree@gmaom', '2025-01-03 03:03:16', 0),
(12, 'try', 9, 'Dha', 'shree@gmail.com', '2025-01-05 20:42:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `image_default` varchar(255) NOT NULL,
  `image_hover` varchar(255) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `discount_price`, `image_default`, `image_hover`, `rating`, `stock`, `status`) VALUES
(2, 'laptop', 'laptopbag', 30000.00, 2000.00, 'laptopbag2.jfif', 'img2.jpeg', 5.00, 0, 1),
(3, 'jacket', 'jacket', 40000.00, 2000.00, 'jacket1.jfif', 'img.jpeg', 5.00, 0, 1),
(4, 'round neck', 'round_neck_tshirt', 2400.00, 2000.00, 'roundneck1.jfif', 'img5.jpeg', 5.00, 0, 1),
(5, 'v neck', 'v_neck_tshirt', 4000.00, 3000.00, 'vneck1.jfif', 'img16.jpeg', 5.00, 0, 1),
(6, 'hand bag', 'handbag', 6000.00, 4400.00, 'handbag1.jfif', 'img12.jpeg', 5.00, 0, 1),
(7, 'travel bag ', 'travelbag', 8000.00, 6000.00, 'travelbag1.jfif', 'img13.jpeg', 5.00, 9, 1),
(10, 'Cap', 'cap', 6000.00, 5000.00, 'cap1.jpg', 'img10.jpeg', 5.00, 9, 1),
(11, 'round neck T-SHIRT', 'round_neck_tshirt', 3000.00, 2000.00, 'roundneck2.jfif', 'img10.jpeg', 5.00, 8, 1),
(12, 'ROUND NECK T-SHIRT', 'round_neck_tshirt', 5000.00, 4000.00, 'roundneck1.jfif', 'img7.jpeg', 5.00, 4, 1),
(13, 't shirt ', 'round_neck_tshirt', 6000.00, 4000.00, 'roundneck2.jfif', 'img2.jpeg', 5.00, 10, 1),
(14, 'cap', 'cap', 7000.00, 6000.00, 'cap3.jfif', 'img7.jpeg', 5.00, 7, 1),
(16, 'Corporate', 'corporate', 80000.00, 7000.00, 'School1.jpg', 'img16.jpeg', 5.00, 10, 1),
(17, 'Medical', 'medical', 40000.00, 3500.00, 'Medical.jpg', 'img9.jpeg', 5.00, 20, 1),
(18, 'hotal', 'hotal', 7000.00, 6500.00, 'Hotal.jpg', 'img2.jpeg', 5.00, 9, 1),
(19, 'School', 'school', 4000.00, 3000.00, 'School1.jpg', 'img7.jpeg', 5.00, 10, 1),
(21, 'security', 'security', 5000.00, 4500.00, 'security.jfif', 'img2.jpeg', 5.00, 6, 1),
(22, 'leather', 'leatherofficebag', 4000.00, 3000.00, 'leather.jpg', 'img7.jpeg', 5.00, 6, 1),
(23, 'Round Neck', 'round_neck_tshirt', 7000.00, 6000.00, 'round.jpg', 'img8.jpeg', 5.00, 6, 1),
(24, 'v neck', 'v_neck_tshirt', 6000.00, 5500.00, 'v5.jfif', 'img11.jpeg', 5.00, 6, 1),
(25, 'v neck', 'v_neck_tshirt', 7000.00, 6000.00, 'vneck2.jfif', 'img11.jpeg', 5.00, 6, 1),
(26, 'v neck', 'v_neck_tshirt', 400000.00, 3000.00, 'v2.jpg', 'img4.jpeg', 5.00, 5, 1),
(27, 'vneck', 'v_neck_tshirt', 40000.00, 3000.00, 'vneck1.jfif', 'img.jpeg', 5.00, 5, 1),
(28, 'pool t shirt', 'pool_tshirt', 5000.00, 4500.00, 'pool2.jfif', 'img9.jpeg', 5.00, 5, 1),
(29, 'Basic Pool Tshirt', 'basicpool', 600.00, 500.00, 'basci2.jpg', 'img9.jpeg', 5.00, 5, 1),
(30, 'Basic Pool Tshirt', 'basicpool', 700.00, 500.00, 'basci.jfif', 'img7.jpeg', 5.00, 9, 1),
(31, 'Hand Bag', 'handbag', 2000.00, 1500.00, 'handbag2.jfif', 'img8.jpeg', 5.00, 6, 1),
(32, 'Hand Bag', 'handbag', 4000.00, 3000.00, 'handbag4.jfif', 'img10.jpeg', 5.00, 6, 1),
(33, 'School Uniform ', 'school', 4000.00, 3000.00, 'School.jpg', 'img10.jpeg', 5.00, 6, 1),
(34, 'School Uniform ', 'school', 3000.00, 2000.00, 'school3.jfif', 'img10.jpeg', 5.00, 5, 1),
(35, 'School Uniform ', 'school', 3000.00, 2000.00, 'school4.jfif', 'img11.jpeg', 5.00, 5, 1),
(36, 'School Uniform ', 'school', 3500.00, 2000.00, 'school2.jfif', 'img7.jpeg', 5.00, 10, 1),
(37, 'Corporate Uniform', 'corporate', 3000.00, 2500.00, 'corporate.jfif', 'img16.jpeg', 5.00, 7, 1),
(38, 'Corporate Uniform', 'corporate', 4000.00, 3000.00, 'corporate4.png', 'img8.jpeg', 5.00, 5, 1),
(40, 'Corporate Uniform', 'corporate', 4000.00, 3000.00, 'Corporate3.jpg', 'img10.jpeg', 5.00, 5, 1),
(41, 'security', 'security', 3000.00, 2000.00, 'security1.jpg', 'img2.jpeg', 4.50, 5, 1),
(42, 'security', 'security', 4000.00, 3000.00, 'security4.jpg', 'img11.jpeg', 5.00, 5, 1),
(43, 'security', 'security', 3000.00, 2000.00, 'security3.jpg', 'img10.jpeg', 5.00, 3, 1),
(44, 'security', 'security', 3000.00, 2800.00, 'security2.jpg', 'img6.jpeg', 5.00, 4, 1),
(45, 'hotal', 'hotal', 2000.00, 1000.00, 'hotal2.jpg', 'img9.jpeg', 5.00, 5, 1),
(46, 'hotal', 'hotal', 3000.00, 2500.00, 'Hotal1.jfif', 'img16.jpeg', 5.00, 6, 1),
(47, 'medical', 'medical', 3000.00, 2500.00, 'medical1.jfif', 'img16.jpeg', 5.00, 5, 1),
(48, 'Medical', 'medical', 4000.00, 3000.00, 'Medical3.jfif', 'img8.jpeg', 4.00, 3, 1),
(49, 'Medical', 'medical', 5000.00, 3500.00, 'medical4.png', 'img2.jpeg', 5.00, 7, 1),
(50, 'Round Neck', 'round_neck_tshirt', 6000.00, 4000.00, 'roundneck1.jfif', 'img9.jpeg', 5.00, 5, 1),
(51, 'Round Neck', 'round_neck_tshirt', 3000.00, 2000.00, 'roundneck2.jfif', 'img2.jpeg', 4.00, 5, 1),
(52, 'Round Neck', 'round_neck_tshirt', 6000.00, 5000.00, 'round4.png', 'img10.jpeg', 5.00, 6, 1),
(53, 'V Neck', 'v_neck_tshirt', 3000.00, 2000.00, 'v2.jpg', 'img7.jpeg', 5.00, 6, 1),
(54, 'V Neck T shirt', 'v_neck_tshirt', 5000.00, 3000.00, 'v5.jfif', 'img.jpeg', 5.00, 5, 1),
(55, 'T shirt', 'v_neck_tshirt', 5000.00, 3800.00, 'v2.jpg', 'img12.jpeg', 4.50, 8, 1),
(56, 'pool', 'pool_tshirt', 2000.00, 1500.00, 'pool.jfif', 'img9.jpeg', 5.00, 5, 1),
(58, 'Pool ', 'pool_tshirt', 6000.00, 5000.00, 'pool1.jpg', 'img10.jpeg', 5.00, 5, 1),
(59, 'pool', 'pool_tshirt', 4000.00, 3900.00, 'pool.jpg', 'img7.jpeg', 5.00, 6, 1),
(60, 'Pool', 'pool_tshirt', 3400.00, 2000.00, 'pool4.jpg', 'img8.jpeg', 5.00, 5, 1),
(61, 'pool', 'pool_tshirt', 5000.00, 3300.00, 'pool5.jpg', 'img.jpeg', 5.00, 5, 1),
(62, 'Pool', 'pool_tshirt', 5000.00, 3300.00, 'pool2.jpg', 'img8.jpeg', 5.00, 5, 1),
(63, 'pool', 'pool_tshirt', 7000.00, 5000.00, 'pool.jpg', 'img5.jpeg', 5.00, 7, 1),
(64, 'cut and sew', 'cutSew', 2000.00, 1000.00, 'cut.jfif', 'img10.jpeg', 5.00, 5, 1),
(65, 'cut and sew', 'cutSew', 5000.00, 3000.00, 'cut1.jfif', 'img6.jpeg', 5.00, 5, 1),
(66, 'Cut and Sew', 'cutSew', 3300.00, 2200.00, 'cut2.jpg', 'img9.jpeg', 5.00, 6, 1),
(67, 'Cut and Sew', 'cutSew', 5000.00, 2300.00, 'cut3.jfif', 'img10.jpeg', 5.00, 6, 1),
(68, 'Cut and Sew', 'cutSew', 6600.00, 4500.00, 'cut4.jfif', 'img4.jpeg', 5.00, 7, 1),
(69, 'Cut and Sew', 'cutSew', 6600.00, 5000.00, 'cut5.jfif', 'img16.jpeg', 5.00, 6, 1),
(70, 'cut and sew', 'cutSew', 2000.00, 1000.00, 'cut1.jfif', 'img10.jpeg', 5.00, 7, 1),
(71, 'cut and sew', 'cutSew', 5009.00, 4000.00, 'cut2.jpg', 'img11.jpeg', 5.00, 6, 1),
(72, 'Basic Pool Tshirt', 'basicpool', 600.00, 300.00, 'basic1.jpg', 'img10.jpeg', 5.00, 6, 1),
(73, 'Basic Pool Tshirt', 'basicpool', 4550.00, 3000.00, 'basci.jfif', 'img11.jpeg', 5.00, 6, 1),
(74, 'Basic Pool Tshirt', 'basicpool', 6000.00, 4000.00, 'basic5.jpg', 'img5.jpeg', 5.00, 5, 1),
(75, 'Basic Pool Tshirt', 'basicpool', 5000.00, 4000.00, 'basic3.jpeg', 'img10.jpeg', 5.00, 5, 1),
(76, 'Basic Pool Tshirt', 'basicpool', 6000.00, 4000.00, 'basic4.jpg', 'img8.jpeg', 5.00, 5, 1),
(77, 'Basic Pool Tshirt', 'basicpool', 3000.00, 2500.00, 'basci2.jpg', 'img9.jpeg', 4.00, 5, 1),
(78, 'Cap', 'cap', 4000.00, 3000.00, 'cap.jfif', 'img7.jpeg', 5.00, 5, 1),
(79, 'Cap', 'cap', 2000.00, 1000.00, 'cap5.jpg', 'img4.jpeg', 5.00, 5, 1),
(80, 'Cap', 'cap', 3560.00, 2050.00, 'cap4.jpg', 'img11.jpeg', 5.00, 5, 1),
(82, 'Cap', 'cap', 5000.00, 4000.00, 'cap7.jpg', 'img8.jpeg', 4.00, 7, 1),
(83, 'Cap', 'cap', 4400.00, 3300.00, 'cap6.jpg', 'img16.jpeg', 5.00, 8, 1),
(84, 'Cap', 'cap', 5000.00, 3000.00, 'cap3.jfif', 'img2.jpeg', 5.00, 5, 1),
(85, 'Jacket', 'jacket', 3000.00, 1000.00, 'jacket.jpg', 'img10.jpeg', 5.00, 9, 1),
(86, 'Jacket', 'jacket', 3000.00, 2000.00, 'jacket2.jpg', 'img11.jpeg', 5.00, 5, 1),
(87, 'jacket', 'jacket', 4000.00, 3000.00, 'jacket.jpg', 'img2.jpeg', 4.00, 6, 1),
(88, 'Jacket', 'jacket', 5000.00, 4000.00, 'Jacket1.jpg', 'img6.jpeg', 5.00, 7, 1),
(89, 'Jacket', 'jacket', 6000.00, 45000.00, 'Jacket5.jfif', 'img16.jpeg', 5.00, 5, 1),
(90, 'JAcket', 'jacket', 6000.00, 5500.00, 'jacket.jpg', 'img5.jpeg', 5.00, 6, 1),
(91, 'jacket', 'jacket', 7000.00, 6000.00, 'jacket7.jpg', 'img.jpeg', 5.00, 6, 1),
(92, 'sweatshirt', 'sweartshirt', 4000.00, 3000.00, 'sweatshirt5.jpg', 'img10.jpeg', 4.00, 5, 1),
(93, 'jacket', 'jacket', 5000.00, 4000.00, 'sweatshirt1.jfif', 'img7.jpeg', 5.00, 7, 1),
(94, 'Jacket', 'jacket', 6000.00, 5000.00, 'sweatshirt2.jfif', 'img2.jpeg', 5.00, 6, 1),
(95, 'Jacket', 'jacket', 7000.00, 5000.00, 'sweatshirt3.jpg', 'img8.jpeg', 5.00, 6, 1),
(96, 'sweartshirt ', 'sweartshirt', 5000.00, 6000.00, 'sweatshirt3.jpg', 'img7.jpeg', 5.00, 5, 1),
(97, 'sweatshirt', 'sweartshirt', 5000.00, 3000.00, 'sweatshirt.jpg', 'img4.jpeg', 5.00, 6, 1),
(98, 'sweatshirt', 'sweartshirt', 4000.00, 3400.00, 'sweatshirt3.jpg', 'img2.jpeg', 5.00, 6, 1),
(99, 'sweatshirt', 'sweartshirt', 5500.00, 4300.00, 'sweatshirt1.jpg', 'img9.jpeg', 4.00, 6, 1),
(100, 'sweatshirt', 'sweartshirt', 5000.00, 3000.00, 'sweatshirt2.jfif', 'img7.jpeg', 5.00, 6, 1),
(101, 'sweatshirt', 'sweartshirt', 4000.00, 3000.00, 'sweatshirt4.jpg', 'img10.jpeg', 5.00, 5, 1),
(102, 'sweatshirt', 'sweartshirt', 5500.00, 3400.00, 'sweatshirt6.jfif', 'img4.jpeg', 4.00, 6, 1),
(103, 'denim Shit', 'denimShirt', 500.00, 400.00, 'denim.jpg', 'img10.jpeg', 5.00, 8, 1),
(104, 'Denim', 'denimShirt', 600.00, 440.00, 'denim2.jfif', 'img11.jpeg', 5.00, 7, 1),
(105, 'denim', 'denimShirt', 5000.00, 3300.00, 'denim1.jfif', 'img.jpeg', 5.00, 5, 1),
(106, 'Denim', 'denimShirt', 6000.00, 4099.00, 'denim4.jpg', 'img9.jpeg', 5.00, 7, 1),
(107, 'Denim', 'denimShirt', 7850.00, 6400.00, 'denim5.jpg', 'img2.jpeg', 5.00, 8, 1),
(108, 'Denim Shirt', 'denimShirt', 5000.00, 4300.00, 'denim6.jpg', 'img5.jpeg', 5.00, 6, 1),
(109, 'Denim Shirt', 'denimShirt', 4500.00, 4000.00, 'denim5.jpg', 'img8.jpeg', 5.00, 6, 1),
(110, 'Denim ', 'denimShirt', 5690.00, 4509.00, 'Denim 7.jfif', 'img12.jpeg', 5.00, 8, 1),
(111, 'windcheaters', 'windcheaters', 7000.00, 5500.00, 'windcheaters.jpg', 'img5.jpeg', 5.00, 6, 1),
(112, 'Windcheaters', 'windcheaters', 4500.00, 3400.00, 'windcheaters1.jpg', 'img16.jpeg', 5.00, 9, 1),
(113, 'windcheaters', 'windcheaters', 4500.00, 4000.00, 'windcheaters2.jpg', 'img9.jpeg', 4.00, 5, 1),
(114, 'windcheaters', 'windcheaters', 5080.00, 4000.00, 'windcheaters3.jpeg', 'img2.jpeg', 5.00, 9, 1),
(115, 'windcheaters', 'windcheaters', 6080.00, 6000.00, 'windcheaters4.jpg', 'img9.jpeg', 5.00, 6, 1),
(116, 'windcheaters', 'windcheaters', 6070.00, 5000.00, 'windcheaters5.jpg', 'img10.jpeg', 5.00, 7, 1),
(117, 'windcheaters', 'windcheaters', 6000.00, 5000.00, 'windcheaters3.jpeg', 'img.jpeg', 5.00, 7, 1),
(118, 'windcheaters', 'windcheaters', 6500.00, 5900.00, 'windcheaters1.jpg', 'img12.jpeg', 5.00, 6, 1),
(119, 'Hand Bag', 'handbag', 5000.00, 4000.00, 'handbag.jfif', 'img12.jpeg', 5.00, 6, 1),
(120, 'handbag', 'handbag', 6500.00, 5000.00, 'handbag3.jpg', 'img8.jpeg', 5.00, 7, 1),
(121, 'Hand Bag', 'handbag', 6700.00, 5500.00, 'handbag5.jfif', 'img7.jpeg', 5.00, 6, 1),
(122, 'Hand Bag', 'handbag', 4500.00, 3900.00, 'handbag6.jpg', 'img9.jpeg', 5.00, 6, 1),
(123, 'handbag', 'handbag', 5600.00, 4500.00, 'handbag7.png', 'img16.jpeg', 5.00, 6, 1),
(124, 'Trolleybag', 'strolleybag', 5600.00, 4500.00, 'trolleybag.jfif', 'img16.jpeg', 5.00, 6, 1),
(125, 'Trolley bag', 'strolleybag', 4900.00, 4000.00, 'trolleybag1.jfif', 'img10.jpeg', 5.00, 9, 1),
(126, 'Trolleybag', 'strolleybag', 5000.00, 4000.00, 'trolleybag2.jpg', 'img13.jpeg', 5.00, 6, 1),
(127, 'Trolleybag', 'strolleybag', 6500.00, 5000.00, 'trolleybag3.jfif', 'img4.jpeg', 5.00, 3, 1),
(128, 'trolleybag', 'strolleybag', 4900.00, 3000.00, 'trolleybag4.jpg', 'img.jpeg', 5.00, 7, 1),
(129, 'trolleybag', 'strolleybag', 6000.00, 5000.00, 'trolleybag5.jpg', 'img16.jpeg', 5.00, 5, 1),
(130, 'Travel Bag ', 'strolleybag', 5000.00, 3800.00, 'trolleybag6.jpg', 'img12.jpeg', 5.00, 6, 1),
(131, 'trolleybag', 'strolleybag', 3000.00, 2000.00, 'trolleybag2.jpg', 'img9.jpeg', 5.00, 4, 1),
(132, 'travel bag ', 'travelbag', 5900.00, 5000.00, 'travelbag.png', 'img10.jpeg', 5.00, 6, 1),
(133, 'Travel Bag', 'travelbag', 6700.00, 5590.00, 'travelbag2.jfif', 'img9.jpeg', 5.00, 7, 1),
(134, 'trolleybag', 'travelbag', 4000.00, 3400.00, 'travelbag3.png', 'img.jpeg', 5.00, 6, 1),
(135, 'trolleybag', 'travelbag', 6700.00, 6000.00, 'travelbag4.jfif', 'img7.jpeg', 5.00, 8, 1),
(136, 'travel bag ', 'travelbag', 5900.00, 4000.00, 'travelbag.png', 'img4.jpeg', 5.00, 6, 1),
(137, 'travelbag', 'travelbag', 5000.00, 4000.00, 'travelbag3.png', 'img7.jpeg', 5.00, 7, 1),
(138, 'travelbag', 'travelbag', 6500.00, 5000.00, 'travelbag4.jfif', 'img13.jpeg', 5.00, 6, 1),
(139, 'backpack', 'backpacks', 5500.00, 5000.00, 'backpack.jfif', 'img2.jpeg', 5.00, 6, 1),
(140, 'B`ackpack', 'backpacks', 5000.00, 4000.00, 'backpack1.jfif', 'img9.jpeg', 5.00, 6, 1),
(141, 'back pack', 'backpacks', 6060.00, 5005.00, 'backpack3.jfif', 'img5.jpeg', 5.00, 6, 1),
(142, 'Back Pack', 'backpacks', 5400.00, 4000.00, 'backpack4.jfif', 'img10.jpeg', 5.00, 6, 1),
(143, 'backpack', 'backpacks', 4500.00, 4000.00, 'backpack5.jfif', 'img12.jpeg', 5.00, 6, 1),
(144, 'Back Pack', 'backpacks', 6000.00, 5000.00, 'backpack6.jfif', 'img8.jpeg', 5.00, 7, 1),
(145, 'backpack', 'backpacks', 3450.00, 3000.00, 'backpack7.jfif', 'img13.jpeg', 5.00, 6, 1),
(146, 'backpack', 'backpacks', 5000.00, 4000.00, 'backpack8.jfif', 'img.jpeg', 5.00, 6, 1),
(147, 'laptopbag', 'laptopbag', 5000.00, 4000.00, 'laptopbag1.jfif', 'img7.jpeg', 5.00, 6, 1),
(148, 'laptop Bag', 'laptopbag', 6000.00, 5000.00, 'laptop bag.jfif', 'img16.jpeg', 5.00, 5, 1),
(149, 'laptopbag', 'laptopbag', 6000.00, 5500.00, 'laptopbag3.jfif', 'img16.jpeg', 5.00, 9, 1),
(150, 'laptopbag', 'laptopbag', 5600.00, 5000.00, 'laptopbag5.jfif', 'img.jpeg', 5.00, 6, 1),
(151, 'Laptop Bag', 'laptopbag', 5480.00, 4800.00, 'laptopbag6.jfif', 'img13.jpeg', 5.00, 8, 1),
(152, 'laptopbag', 'laptopbag', 6000.00, 5000.00, 'laptopbag7.jfif', 'img4.jpeg', 5.00, 8, 1),
(153, 'laptopbag', 'laptopbag', 4590.00, 4000.00, 'laptopbag8.jfif', 'img9.jpeg', 5.00, 7, 1),
(154, 'trekkingbag', 'trekkingbag', 5000.00, 4000.00, 'trekkingbag.jfif', 'img.jpeg', 5.00, 5, 1),
(155, 'Trekkingbag', 'trekkingbag', 5600.00, 5000.00, 'trekkingbag1.jfif', 'img2.jpeg', 5.00, 5, 1),
(156, 'trekkingbag', 'trekkingbag', 4500.00, 4300.00, 'trekkingbag2.jfif', 'img10.jpeg', 5.00, 6, 1),
(157, 'trekking bag', 'trekkingbag', 4567.00, 4000.00, 'trekkingbag3.jfif', 'img5.jpeg', 5.00, 6, 1),
(158, 'trekking Bag', 'trekkingbag', 6000.00, 5000.00, 'trekkingbag4.jpg', 'img9.jpeg', 5.00, 5, 1),
(159, 'Trekking Bag', 'trekkingbag', 6000.00, 5400.00, 'trekkingbag5.jfif', 'img12.jpeg', 5.00, 6, 1),
(160, 'trekkingbag', 'trekkingbag', 6700.00, 5000.00, 'trekkingbag6.jfif', 'img4.jpeg', 5.00, 7, 1),
(161, 'trekkingbag', 'trekkingbag', 5600.00, 5000.00, 'trekkingbag8.jfif', 'img16.jpeg', 5.00, 5, 1),
(162, 'passport ', 'passport', 5000.00, 4000.00, 'passport.jfif', 'img10.jpeg', 5.00, 6, 1),
(163, 'Passport ', 'passport', 5000.00, 4500.00, 'passport1.jfif', 'img7.jpeg', 5.00, 6, 1),
(164, 'Passport Holder ', 'passport', 4000.00, 3000.00, 'passport2.jfif', 'img16.jpeg', 5.00, 7, 1),
(165, 'Passport holder ', 'passport', 5000.00, 4000.00, 'passport3.jfif', 'img11.jpeg', 5.00, 4, 1),
(166, 'Passport Holder ', 'passport', 5080.00, 3400.00, 'passport4.jfif', 'img4.jpeg', 5.00, 6, 1),
(167, 'passport ', 'passport', 5600.00, 4000.00, 'passport5.jfif', 'img9.jpeg', 5.00, 7, 1),
(168, 'passport', 'passport', 5600.00, 5000.00, 'passport6.jfif', 'img16.jpeg', 5.00, 7, 1),
(169, 'passport', 'passport', 6000.00, 5000.00, 'passport5.jfif', 'img2.jpeg', 5.00, 6, 1),
(170, 'Ipad', 'ipad', 5000.00, 4000.00, 'ipad.jpg', 'img8.jpeg', 5.00, 5, 1),
(171, 'I Pad', 'ipad', 6500.00, 5000.00, 'ipad1.jfif', 'img11.jpeg', 5.00, 6, 1),
(172, 'I Pad', 'ipad', 5600.00, 4500.00, 'ipad2.jpeg', 'img16.jpeg', 5.00, 5, 1),
(173, 'ipad', 'ipad', 6790.00, 5600.00, 'ipad3.jfif', 'img12.jpeg', 5.00, 5, 1),
(174, 'I Pad', 'ipad', 4567.00, 3000.00, 'ipad4.jpg', 'img7.jpeg', 5.00, 7, 1),
(175, 'ipad', 'ipad', 6780.00, 5600.00, 'ipad5.jfif', 'img8.jpeg', 5.00, 9, 1),
(176, 'ipad', 'ipad', 7000.00, 5000.00, 'ipad6.jfif', 'img.jpeg', 5.00, 7, 1),
(177, 'ipad', 'ipad', 7600.00, 6000.00, 'ipad7.jfif', 'img10.jpeg', 5.00, 5, 1),
(178, 'Laptop Hand Bag', 'laptophandbag', 7000.00, 6000.00, 'laptopbag1.jfif', 'img7.jpeg', 5.00, 5, 1),
(179, 'Laptop Hand Bag', 'laptophandbag', 6700.00, 5500.00, 'laptopbag2.jfif', 'img16.jpeg', 5.00, 5, 1),
(180, 'Laptop Hand Bag', 'laptophandbag', 5000.00, 4500.00, 'laptopbag5.jfif', 'img8.jpeg', 5.00, 5, 1),
(181, 'Laptop handBag', 'laptophandbag', 6000.00, 5000.00, 'laptopbag8.jfif', 'img9.jpeg', 5.00, 5, 1),
(182, 'Laptop Hand Bag', 'laptophandbag', 6700.00, 5000.00, 'laptopbag5.jfif', 'img11.jpeg', 5.00, 8, 1),
(183, 'Laptop Hand Bag', 'laptophandbag', 5000.00, 4000.00, 'laptopbag6.jfif', 'img12.jpeg', 5.00, 5, 1),
(184, 'Laptop Hand Bag', 'laptophandbag', 7900.00, 6000.00, 'laptopbag7.jfif', 'img16.jpeg', 5.00, 8, 1),
(185, 'Laptop Hand Bag', 'laptophandbag', 7000.00, 5000.00, 'laptopbag2.jfif', 'img7.jpeg', 5.00, 6000, 1),
(186, 'Laptop Pouch', 'laptopPouch', 6000.00, 5000.00, 'laptoppouch.jpg', 'img7.jpeg', 5.00, 5, 1),
(187, 'Laptop pouch', 'laptopPouch', 7000.00, 6000.00, 'laptoppouch1.jfif', 'img9.jpeg', 5.00, 5, 1),
(188, 'Laptop Pouch', 'laptopPouch', 6000.00, 5000.00, 'laptoppouch2.jfif', 'img9.jpeg', 5.00, 5, 1),
(189, 'Laptop Pouch', 'laptopPouch', 7000.00, 6000.00, 'laptoppouch4.jfif', 'img2.jpeg', 5.00, 5, 1),
(190, 'Laptop Pouch', 'laptopPouch', 8090.00, 6070.00, 'laptoppouch5.jfif', 'img10.jpeg', 5.00, 6, 1),
(191, 'Laptop Pouch', 'laptopPouch', 7090.00, 6000.00, 'laptoppouch6.jfif', 'img7.jpeg', 5.00, 5, 1),
(193, 'laptoppouch', 'laptopPouch', 7000.00, 6000.00, 'laptoppouch3.jfif', 'img7.jpeg', 5.00, 5, 1),
(194, 'Laptop Pouch', 'laptopPouch', 8000.00, 7000.00, 'laptoppouch2.jfif', 'img5.jpeg', 5.00, 6, 1),
(195, 'leather office bag', 'leatherofficebag', 6000.00, 5000.00, 'leather1.jfif', 'img.jpeg', 5.00, 6, 1),
(196, 'lather Office Bag', 'leatherofficebag', 6900.00, 6000.00, 'leather2.jfif', 'img2.jpeg', 5.00, 5, 1),
(197, 'leatherofficebag', 'leatherofficebag', 6900.00, 6000.00, 'leather3.jfif', 'img6.jpeg', 5.00, 5, 1),
(198, 'laptop bag', 'leatherofficebag', 7000.00, 6000.00, 'leather4.jfif', 'img7.jpeg', 5.00, 6, 1),
(199, 'leather office bag', 'leatherofficebag', 6000.00, 5000.00, 'leather7.jfif', 'img16.jpeg', 5.00, 5, 1),
(200, 'leatherofficebag', 'laptophandbag', 7000.00, 6000.00, 'leather6.jfif', 'img.jpeg', 5.00, 6, 1),
(201, 'Leather Office Bag', 'leatherofficebag', 6700.00, 5000.00, 'leather3.jfif', 'img7.jpeg', 5.00, 6, 1),
(202, 'leather office bag', 'leatherofficebag', 8900.00, 7000.00, 'leather.jpg', 'img8.jpeg', 5.00, 7, 1),
(203, 'leather Passport', 'leatherpassport', 5000.00, 4500.00, 'leatherPass.jfif', 'img2.jpeg', 5.00, 5, 1),
(204, 'Leather Passport', 'leatherpassport', 6000.00, 5000.00, 'leatherPass1.jfif', 'img2.jpeg', 5.00, 5, 1),
(205, 'leather Passport Holder', 'leatherpassport', 7000.00, 5000.00, 'leatherPass2.jfif', 'img6.jpeg', 5.00, 7, 1),
(206, 'Leather Passport Holder ', 'leatherpassport', 6789.00, 5000.00, 'leatherPass3.jfif', 'img10.jpeg', 5.00, 5, 1),
(207, 'leather Passport Holder', 'leatherpassport', 7000.00, 5000.00, 'leatherPass4.jfif', 'img16.jpeg', 5.00, 5, 1),
(208, 'leather office bag', 'leatherpassport', 6000.00, 5000.00, 'leatherPass5.jfif', 'img6.jpeg', 5.00, 5, 1),
(209, 'leather Passport Holder', 'leatherpassport', 7000.00, 6000.00, 'leatherPass6.jfif', 'img5.jpeg', 5.00, 5, 1),
(210, 'leather Passport Holder', 'leatherpassport', 6900.00, 5400.00, 'leatherPass7.jfif', 'img11.jpeg', 5.00, 5, 1),
(211, 'leather wallets', 'leatherwallets', 5000.00, 4000.00, 'leatherwallets1.jfif', 'img16.jpeg', 4.00, 6, 1),
(212, 'Wallet', 'leatherwallets', 5000.00, 4000.00, 'leatherwallets2.jfif', 'img10.jpeg', 4.00, 5, 1),
(213, 'Leather Wallet', 'leatherpassport', 6700.00, 5600.00, 'leatherwallets3.jpg', 'img4.jpeg', 5.00, 8, 1),
(214, 'Wallet', 'leatherwallets', 6000.00, 5000.00, 'leatherwallets3.jpg', 'img4.jpeg', 5.00, 5, 1),
(215, 'leather wallets', 'leatherwallets', 5600.00, 5000.00, 'leatherwallets4.jfif', 'img5.jpeg', 5.00, 5, 1),
(216, 'Wallet', 'leatherwallets', 4567.00, 4000.00, 'wallet.jfif', 'img8.jpeg', 5.00, 5, 1),
(217, 'Wallet', 'leatherwallets', 7890.00, 6700.00, 'leatherwallets1.jfif', 'img16.jpeg', 5.00, 5, 1),
(218, 'Wallet', 'leatherwallets', 5600.00, 4000.00, 'leatherwallets3.jpg', 'img12.jpeg', 5.00, 5, 1),
(219, 'Wallet', 'leatherwallets', 6000.00, 4600.00, 'leatherwallets4.jfif', 'img7.jpeg', 5.00, 5, 1),
(220, 'Leather Organizer ', 'leatherorganizer', 6000.00, 5000.00, 'leatherOrg.jfif', 'img2.jpeg', 5.00, 5, 1),
(221, 'Leather Organizer ', 'leatherorganizer', 5600.00, 4500.00, 'leatherOrg1.jfif', 'img16.jpeg', 5.00, 5, 1),
(222, 'Organizer ', 'leatherorganizer', 6700.00, 5600.00, 'leatherOrg2.jfif', 'img8.jpeg', 4.00, 6, 1),
(223, 'Organizer ', 'leatherorganizer', 6700.00, 5000.00, 'leatherOrg4.jfif', 'img6.jpeg', 5.00, 5, 1),
(224, 'leatherOrg', 'leatherorganizer', 6700.00, 6000.00, 'leatherOrg3.jfif', 'img4.jpeg', 5.00, 5, 1),
(225, 'Leather Organizer ', 'leatherorganizer', 6780.00, 5000.00, 'leatherOrg5.jfif', 'img10.jpeg', 5.00, 6, 1),
(226, 'Leather Organizer ', 'leatherorganizer', 6700.00, 5670.00, 'leatherOrg6.jfif', 'img.jpeg', 5.00, 5, 1),
(227, 'leatherOrganizet', 'leatherorganizer', 6700.00, 5000.00, 'leatherOrg7.jfif', 'img9.jpeg', 5.00, 5, 1),
(228, 'School Uniform ', 'school', 6900.00, 5600.00, 'School1.jpg', 'img9.jpeg', 5.00, 5, 1),
(229, 'School Uniform ', 'school', 5000.00, 4000.00, 'school2.jfif', 'img10.jpeg', 5.00, 5, 1),
(230, 'School', 'school', 5600.00, 4000.00, 'School6.jfif', 'img7.jpeg', 5.00, 5, 1),
(231, 'Corporate Uniform', 'corporate', 6900.00, 5000.00, 'corporate1.jpg', 'img.jpeg', 5.00, 5, 1),
(232, 'Corporate Uniform', 'corporate', 6700.00, 5000.00, 'Corporate3.jpg', 'img10.jpeg', 5.00, 5, 1),
(233, 'Corporate ', 'corporate', 6000.00, 5600.00, 'corporate4.png', 'img8.jpeg', 5.00, 5, 1),
(234, 'Corporate Uniform', 'corporate', 6000.00, 5000.00, 'corporate2.jfif', 'img6.jpeg', 5.00, 5, 1),
(235, 'Hotel Uniform', 'hotal', 6000.00, 4500.00, 'Hotel3.jfif', 'img10.jpeg', 5.00, 5, 1),
(236, 'Hotel Uniform', 'hotal', 7000.00, 5000.00, 'Hotel4.jfif', 'img9.jpeg', 5.00, 5, 1),
(237, 'Hotel staff Uniform ', 'hotal', 6890.00, 6060.00, 'hotel5.jfif', 'img16.jpeg', 5.00, 7, 1),
(238, 'Hotel Staff', 'hotal', 5670.00, 5000.00, 'Hotel6.jfif', 'img7.jpeg', 5.00, 5, 1),
(239, 'Hotal Staff', 'hotal', 6700.00, 500.00, 'Hotel.jpg', 'img4.jpeg', 5.00, 5, 1),
(240, 'security Uniform', 'security', 6000.00, 5000.00, 'security5.jfif', 'img7.jpeg', 5.00, 5, 1),
(241, 'security Uniform', 'security', 6700.00, 5000.00, 'security6.jfif', 'img.jpeg', 5.00, 5, 1),
(242, 'security Uniform', 'security', 6789.00, 5600.00, 'security7.jfif', 'img6.jpeg', 5.00, 5, 1),
(243, 'Medical', 'medical', 6000.00, 5000.00, 'medical2.JPG', 'img10.jpeg', 5.00, 5, 1),
(244, 'Medical', 'medical', 5600.00, 4000.00, 'medical5.jpg', 'img.jpeg', 5.00, 5, 1),
(245, 'Medical Uniform', 'medical', 6700.00, 5600.00, 'medical6.jfif', 'img12.jpeg', 5.00, 5, 1),
(246, 'Medical Uniform', 'medical', 6789.00, 5090.00, 'medical7.jfif', 'img7.jpeg', 5.00, 5, 1),
(247, 'Bank ', 'bank', 7000.00, 6000.00, 'Bank.jpg', 'img.jpeg', 5.00, 5, 1),
(248, 'bank Uniforms ', 'bank', 6789.00, 6000.00, 'bank1.jfif', 'img10.jpeg', 5.00, 5, 1),
(249, 'Bank Uniform', 'bank', 5000.00, 4500.00, 'bank2.jfif', 'img9.jpeg', 5.00, 5, 1),
(250, 'Bank ', 'bank', 6700.00, 5000.00, 'Bank3.jpg', 'img7.jpeg', 5.00, 5, 1),
(251, 'bank Uniform ', 'bank', 7890.00, 6096.00, 'bank4.jfif', 'img8.jpeg', 5.00, 5, 1),
(252, 'bank uniform ', 'bank', 6789.00, 5000.00, 'bank5.jfif', 'img11.jpeg', 5.00, 5, 1),
(253, 'Bank Uniform ', 'bank', 7890.00, 6000.00, 'bank6.jfif', 'img2.jpeg', 5.00, 5, 1),
(254, 'Bank ', 'bank', 6789.00, 5678.00, 'bank7.jfif', 'img5.jpeg', 5.00, 5, 1),
(255, 'Housekeeping uniforms ', 'housekeeping', 6790.00, 5900.00, 'housekeeping.jpg', 'img.jpeg', 5.00, 5, 1),
(256, 'House ', 'housekeeping', 6789.00, 5600.00, 'housekeeping1.jpg', 'img8.jpeg', 5.00, 5, 1),
(257, 'Housekeeping  Staff', 'housekeeping', 6790.00, 5600.00, 'housekeeping2.jpg', 'img16.jpeg', 5.00, 5, 1),
(258, 'Housekeeping Staff ', 'housekeeping', 6700.00, 5000.00, 'housekeeping3.jfif', 'img13.jpeg', 5.00, 5, 1),
(259, 'Housekeeping Uniform ', 'housekeeping', 5000.00, 4500.00, 'housekeeping4.jfif', 'img7.jpeg', 5.00, 5, 1),
(260, 'Housekeeping  ', 'housekeeping', 6789.00, 5000.00, 'housekeeping6.jfif', 'img4.jpeg', 5.00, 5, 1),
(261, 'Housekeeping ', 'housekeeping', 6090.00, 7000.00, 'housekeeping7.jfif', 'img16.jpeg', 5.00, 5, 1),
(262, 'Sports ', 'sports', 7900.00, 6000.00, 'sports.jpg', 'img9.jpeg', 5.00, 5, 1),
(263, 'Sports Uniform', 'sports', 6000.00, 5000.00, 'sports2.jpg', 'img.jpeg', 5.00, 5, 1),
(264, 'Sports Uniform', 'sports', 6000.00, 5000.00, 'Sports4.jfif', 'img7.jpeg', 4.00, 6, 1),
(265, 'sports uniform', 'sports', 6000.00, 5050.00, 'sports5.jfif', 'img10.jpeg', 5.00, 5, 1),
(266, 'Sports Uniform', 'sports', 7000.00, 6000.00, 'Sports6.jfif', 'img5.jpeg', 5.00, 5, 1),
(267, 'Sports Uniforms ', 'sports', 6780.00, 5698.00, 'Sports7.jfif', 'img4.jpeg', 5.00, 6, 1),
(268, 'sports uniform ', 'sports', 8000.00, 6000.00, 'sports1.jfif', 'img7.jpeg', 5.00, 5, 1),
(269, 'Sports ', 'sports', 7000.00, 6000.00, 'sports3.jfif', 'img4.jpeg', 5.00, 5, 1),
(270, 'Delivery Uniform', 'delivery', 4000.00, 3000.00, 'Delivery5.jfif', 'img.jpeg', 5.00, 5, 1),
(271, 'Delivery ', 'delivery', 6000.00, 4500.00, 'Delivery2.jfif', 'img9.jpeg', 5.00, 5, 1),
(272, 'Delivery  ', 'delivery', 6900.00, 5000.00, 'Delivery3.jfif', 'img7.jpeg', 4.00, 5, 1),
(273, 'Delivery Uniform', 'delivery', 5000.00, 4000.00, 'Delivery4.jfif', 'img10.jpeg', 5.00, 5, 1),
(274, 'Delivery Uniform', 'delivery', 5000.00, 4000.00, 'Delivery5.jfif', 'img10.jpeg', 5.00, 5, 1),
(275, 'Delivery ', 'delivery', 6780.00, 5000.00, 'Delivery.jfif', 'img9.jpeg', 5.00, 4, 1),
(276, 'Delivery ', 'delivery', 6000.00, 5000.00, 'Delivery1.jfif', 'img16.jpeg', 5.00, 5, 1),
(277, 'Delivery ', 'delivery', 6780.00, 5090.00, '6.jfif', 'img7.jpeg', 5.00, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_description` text NOT NULL,
  `service_price` decimal(10,2) NOT NULL,
  `service_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_description`, `service_price`, `service_image`) VALUES
(2, 'demo', 'demo', 4000.00, '67621f542edb6.png'),
(3, 'hello', 'hello', 2000.00, '6774e9e4c98b1.jpg'),
(4, 'Try', 'This is for try ', 3000.00, '67774722c5246.jpg'),
(5, 'Demo1', 'For demo 1', 5000.00, '6779a112d3276.jpg'),
(6, 'demo', 'hello ', 700.00, '677aef0050a53.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image_url`, `subtitle`, `title`, `description`, `price`) VALUES
(2, 'banner-1.jpg', 'hello', 'try', NULL, 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `contact`, `email`, `logo`, `quantity`) VALUES
(2, 'hello1', '7890865678ewq', 'shree@gmail.com', 'uploads/3.jpg', 5),
(3, 'hello', '67789908976', 'dhanahsree@gmail', 'uploads/1736110153_banner-1.jpg', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
