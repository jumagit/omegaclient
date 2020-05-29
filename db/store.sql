-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 09:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT 0,
  `brand_status` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`, `created_by`, `client_id`, `created_on`, `updated_on`) VALUES
(2, 'Scholastic', 1, 1, '', 1, '2020-04-27 10:23:16', '2020-05-10 06:58:16'),
(3, 'Daako', 1, 1, '', 1, '2020-04-27 10:28:13', '2020-05-10 06:58:22'),
(7, 'Swalah', 1, 1, 'Ibanda Akilam', 1, '2020-04-27 10:43:16', '2020-05-10 06:58:26'),
(8, 'Samona', 1, 1, 'Ibanda Akilam', 1, '2020-04-27 10:58:48', '2020-05-10 06:58:31'),
(11, 'Toyota', 0, 0, 'Ibanda Akilam', 1, '2020-04-27 11:18:07', '2020-05-10 06:58:34'),
(12, 'Benz', 0, 1, 'Ibanda Akilam', 1, '2020-04-27 11:21:35', '2020-05-10 06:58:40'),
(13, 'Land Cruiser', 0, 0, 'Ibanda Akilam', 1, '2020-04-27 11:23:59', '2020-05-10 06:58:45'),
(14, 'Movit', 0, 0, 'Ibanda Akilam', 1, '2020-04-27 12:03:06', '2020-05-10 06:58:49'),
(16, 'master', 0, 1, 'MukoovaJuma', 0, '2020-04-29 07:44:13', '2020-05-06 10:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT 0,
  `categories_status` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`, `created_by`, `client_id`, `created_on`, `updated_on`) VALUES
(1, 'Omo', 1, 1, '', 1, '2020-04-26 09:41:03', '2020-05-10 06:56:01'),
(2, 'hom', 1, 1, 'Ibanda Akilam', 1, '2020-04-29 15:14:13', '2020-05-10 06:56:07'),
(3, 'Human', 1, 0, 'Ibanda Akilam', 1, '2020-04-29 17:52:29', '2020-05-10 06:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `location` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `cpassword` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `fullName`, `email`, `mobile`, `location`, `username`, `password`, `account_status`, `cpassword`, `created_by`, `created_on`, `updated_on`) VALUES
(1, 'Ibanda Akilam', 'ibandaakilam@gmail.com', '0705207032', 'Busei, Iganga', 'akilam', '62608e08adc29a8d6dbc9754e659f125', 1, '', 'Mukoova', '2020-04-27 09:19:34', '2020-04-27 09:22:27'),
(3, 'Katuntubiru Med', 'med@gmail.com', '0706644545', 'Buwagi', 'med', '243e61e9410a9f577d2d662c67025ee9', 0, '', 'Ibanda Akilam', '2020-04-27 19:51:30', '2020-04-27 19:51:30'),
(6, 'Juma', 'juma@gmail.com', '0703923949', 'Butto', 'juma', 'c7362fda35e4a8fbd5b8fceaa5695d81', 0, '*!5ATwf7C', 'MukoovaJuma', '2020-05-02 09:35:04', '2020-05-02 09:35:04'),
(7, 'Kabunga Hameem', 'kabunga@gmail.com', '0703223030', 'Kayunga', 'hameem', '6467c459ac2fe5c39ef11b50272af2c3', 0, '8Fh&mCG5w', 'Ibanda Akilam', '2020-05-04 18:41:04', '2020-05-04 18:41:04'),
(8, 'Nakaibale Sharitah', 'mukoovajumag8@gmail.com', '0705955955', 'Munyonyo', 'sharitah', '4fcab400858d58a02b48f097bfdbc411e838ee12', 0, 'fbU@T57?e', 'MukoovaJuma', '2020-05-09 08:56:34', '2020-05-09 17:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `fullName` varchar(45) NOT NULL,
  `userLevel` varchar(45) NOT NULL,
  `Title` varchar(45) NOT NULL,
  `centreCode` varchar(75) NOT NULL,
  `fullCentreName` varchar(45) NOT NULL,
  `phoneNumber` varchar(150) NOT NULL,
  `emailAddress` text NOT NULL,
  `Status` varchar(30) NOT NULL,
  `assigned_centers` text NOT NULL,
  `assigned_roles` text NOT NULL,
  `default_center` text NOT NULL,
  `default_role` text NOT NULL,
  `last_login_ip` text NOT NULL,
  `last_login_activity` datetime NOT NULL,
  `last_login_date` text NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `project_centers` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_place` int(11) NOT NULL,
  `gstn` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `user_id`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `payment_place`, `gstn`, `order_status`, `client_id`, `created_at`, `updated_at`) VALUES
(1, '2020-05-05', '', '', '44900.00', 1, '8082.00', '52982.00', '4', '52978.00', '60000', '-7022.00', 3, 1, 1, '8082.00', 2, 1, '2020-05-04 19:02:26', '2020-05-10 06:56:51'),
(2, '2020-05-05', '', '', '44900.00', 1, '8082.00', '52982.00', '4', '52978.00', '60000', '-7022.00', 3, 1, 1, '8082.00', 2, 1, '2020-05-04 19:02:26', '2020-05-10 06:56:56'),
(3, '2020-05-01', 'ream', '086060660', '14100.00', 1, '2538.00', '16638.00', '8', '16630.00', '20000', '-3370.00', 1, 2, 1, '2538.00', 2, 1, '2020-05-04 19:02:26', '2020-05-10 07:00:03'),
(4, '2020-05-05', 'meddie', '0702394935', '36200.00', 1, '6516.00', '42716.00', '4', '42712.00', '50000', '-7288.00', 1, 1, 1, '6516.00', 2, 1, '2020-05-04 19:02:26', '2020-05-10 06:59:57'),
(5, '2020-05-05', 'meddie', '0702394935', '36200.00', 1, '6516.00', '42716.00', '4', '42712.00', '50000', '-7288.00', 1, 1, 1, '6516.00', 2, 1, '2020-05-04 19:02:26', '2020-05-10 06:59:52'),
(6, '2020-05-01', 'meddie', '0707966956', '16200.00', 1, '2916.00', '19116.00', '4', '19112.00', '20000', '-888.00', 1, 1, 1, '2916.00', 2, 1, '2020-05-04 19:02:26', '2020-05-10 06:59:50'),
(7, '2020-05-08', 'maato', '0703233223', '47000.00', 1, '8460.00', '55460.00', '2', '55458.00', '60000', '-4542.00', 1, 2, 1, '8460.00', 1, 1, '2020-05-04 19:02:26', '2020-05-10 06:59:46'),
(8, '2020-05-09', 'rahim', '070055665', '47000.00', 1, '8460.00', '55460.00', '3', '55457.00', '200000', '-144543.00', 1, 1, 1, '8460.00', 1, 1, '2020-05-04 19:02:26', '2020-05-10 06:59:43'),
(9, '2020-05-01', 'huhu', '090987888', '67000.00', 1, '12060.00', '79060.00', '9', '79051.00', '89', '78962.00', 1, 2, 2, '12060.00', 1, 1, '2020-05-04 19:02:26', '2020-05-10 06:59:39'),
(10, '2020-05-04', 'Emly', '06055959449', '82000.00', 1, '14760.00', '96760.00', '3', '96757.00', '100000', '-3243.00', 2, 1, 2, '14760.00', 1, 1, '2020-05-04 19:02:26', '2020-05-10 06:59:35'),
(11, '2020-05-13', 'Hemereo', '0704055553', '236000.00', 1, '42480.00', '278480.00', '3', '278477.00', '300000', '-21523.00', 1, 1, 1, '42480.00', 1, 1, '2020-05-05 09:03:44', '2020-05-10 06:59:32'),
(12, '2020-05-07', 'JoS', '07949686856', '130000.00', 1, '23400.00', '153400.00', '2', '153398.00', '200000', '-46602.00', 1, 1, 1, '23400.00', 1, 1, '2020-05-05 09:22:02', '2020-05-10 07:00:41'),
(13, '2020-05-07', 'JoS', '07949686856', '130000.00', 1, '23400.00', '153400.00', '2', '153398.00', '200000', '-46602.00', 1, 1, 1, '23400.00', 1, 1, '2020-05-05 09:22:20', '2020-05-10 07:00:37'),
(14, '2020-05-01', 'Ready', '079586595', '80000.00', 1, '14400.00', '94400.00', '4', '94396.00', '100000', '-5604.00', 1, 2, 1, '14400.00', 1, 1, '2020-05-05 09:25:34', '2020-05-10 06:59:27'),
(15, '2020-05-01', 'Eromical', '070394994', '219000.00', 1, '39420.00', '258420.00', '12', '258408.00', '300000', '-41592.00', 1, 1, 1, '39420.00', 1, 1, '2020-05-05 09:35:34', '2020-05-10 07:00:33'),
(16, '2020-05-07', 'rayan', '0707969959', '73000.00', 1, '13140.00', '86140.00', '3', '86137.00', '34000', '52137.00', 1, 1, 1, '13140.00', 1, 1, '2020-05-05 09:50:06', '2020-05-10 07:00:29'),
(17, '2020-05-07', 'rayan', '0707969959', '73000.00', 1, '13140.00', '86140.00', '3', '86137.00', '34000', '52137.00', 1, 1, 1, '13140.00', 1, 1, '2020-05-05 09:50:25', '2020-05-10 07:00:25'),
(18, '2020-05-06', 'tundulu', '0795955945', '280000.00', 1, '50400.00', '330400.00', '10', '330390.00', '400000', '-69610.00', 1, 1, 1, '50400.00', 1, 1, '2020-05-05 09:53:44', '2020-05-10 07:00:22'),
(19, '2020-05-01', 'Rahim', '979779799', '283000.00', 1, '50940.00', '333940.00', '12', '333928.00', '400000', '-66072.00', 2, 2, 1, '50940.00', 1, 1, '2020-05-05 09:55:38', '2020-05-10 07:00:18'),
(20, '2020-05-07', 'juma', '0703499434', '55000.00', 1, '9900.00', '64900.00', '2', '64898.00', '70000', '-5102.00', 2, 1, 1, '9900.00', 1, 1, '2020-05-06 08:28:23', '2020-05-10 07:00:14'),
(21, '2020-05-05', 'Meme', '0705594433', '73000.00', 1, '13140.00', '86140.00', '2', '86138.00', '90000', '-3862.00', 1, 1, 1, '13140.00', 1, 1, '2020-05-06 08:51:56', '2020-05-10 07:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantityTaken` int(25) NOT NULL,
  `total` bigint(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT 0,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantityTaken`, `total`, `order_item_status`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 5, 0, 2, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(2, 4, 3, 1, 0, 2, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(3, 5, 3, 1, 0, 2, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(4, 6, 3, 1, 0, 2, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(5, 7, 4, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(6, 7, 5, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(7, 7, 6, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(8, 8, 4, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(9, 8, 5, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(10, 8, 6, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(11, 9, 4, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(12, 9, 6, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(13, 9, 6, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(14, 10, 6, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(15, 10, 7, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(16, 10, 8, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(17, 11, 7, 8, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(18, 11, 7, 2, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(19, 11, 9, 3, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(20, 12, 7, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(21, 12, 7, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(22, 12, 8, 3, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(23, 13, 7, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(24, 13, 7, 1, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(25, 13, 8, 3, 0, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(26, 14, 7, 1, 20000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(27, 14, 8, 1, 30000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(28, 14, 8, 1, 30000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(29, 15, 7, 3, 60000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(30, 15, 8, 3, 90000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(31, 15, 10, 3, 69000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(32, 16, 7, 1, 20000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(33, 16, 8, 1, 30000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(34, 16, 10, 1, 23000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(35, 17, 7, 1, 20000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(36, 17, 8, 1, 30000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(37, 17, 10, 1, 23000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(38, 18, 7, 1, 20000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(39, 18, 11, 1, 230000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(40, 18, 8, 1, 30000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(41, 19, 10, 1, 23000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(42, 19, 8, 1, 30000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(43, 19, 11, 1, 230000, 1, 0, '2020-05-05 09:57:25', '2020-05-05 09:57:25'),
(44, 20, 6, 1, 32000, 1, 0, '2020-05-06 08:28:23', '2020-05-06 08:28:23'),
(45, 20, 10, 1, 23000, 1, 0, '2020-05-06 08:28:23', '2020-05-06 08:28:23'),
(46, 21, 7, 1, 20000, 1, 0, '2020-05-06 08:51:56', '2020-05-06 08:51:56'),
(47, 21, 8, 1, 30000, 1, 0, '2020-05-06 08:51:56', '2020-05-06 08:51:56'),
(48, 21, 10, 1, 23000, 1, 0, '2020-05-06 08:51:56', '2020-05-06 08:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `out_stock`
--

CREATE TABLE `out_stock` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(14) NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `total_amount` bigint(30) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `reset_key` text DEFAULT NULL,
  `username` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `total_sales` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `price`, `rate`, `active`, `status`, `total_sales`, `created_by`, `client_id`, `created_on`, `updated_on`) VALUES
(2, 'Liquid Soap', '../assets/images/stock/19690679095ea8f623f1b2a.jpg', 2, 1, '0', 900, '4', 1, 1, 0, 'Ibanda Akilam', 1, '2020-04-29 03:36:03', '2020-05-10 06:57:48'),
(3, 'Hand Sanitiser', '../assets/images/stock/5280158245ea906abdd410.jpg', 3, 1, '0', 1200, '3', 2, 2, 0, 'Ibanda Akilam', 1, '2020-04-29 04:46:35', '2020-05-10 06:57:45'),
(4, 'Hand Cleanser', '../assets/images/stock/15547903245ea90ae478073.jpg', 2, 1, '0', 3000, '2', 2, 1, 0, 'Ibanda Akilam', 1, '2020-04-29 05:04:36', '2020-05-10 06:57:41'),
(5, 'Washing Soap', '../assets/images/stock/5168576175ea90cf7a2f69.jpg', 7, 1, '0', 12000, '2', 2, 1, 0, 'Ibanda Akilam', 1, '2020-04-29 05:13:27', '2020-05-10 06:57:36'),
(6, 'Laptop', '../assets/images/stock/15993333485ead813708ec6.jpg', 3, 2, '-3', 32000, '3', 1, 1, 0, 'Ibanda Akilam', 1, '2020-05-02 14:18:31', '2020-05-10 06:57:33'),
(7, 'Chocolate', '../assets/images/stock/4113064725eb28758c87ef.jpg', 3, 2, '72', 20000, '3', 0, 1, 0, 'Ibanda Akilam', 1, '2020-05-04 17:12:53', '2020-05-10 06:57:29'),
(8, 'Malewaos', '../assets/images/stock/18810199845eb2935c7d299.jpg', 7, 2, '1039', 30000, '302', 0, 1, 0, 'Ibanda Akilam', 1, '2020-05-04 17:13:30', '2020-05-10 06:57:25'),
(9, 'Boxes', '../assets/images/stock/3718330985eb04d670c6d2.jpg', 3, 2, '0', 12000, '4', 1, 1, 0, 'Ibanda Akilam', 1, '2020-05-04 17:14:15', '2020-05-10 06:57:21'),
(10, 'Apples', '../assets/images/stock/8872747865eb131f275be0.jpg', 7, 1, '155', 23000, '21', 1, 1, 0, 'Ibanda Akilam', 1, '2020-05-05 09:29:22', '2020-05-10 06:57:17'),
(11, 'Sumsung', '../assets/images/stock/7910915035eb28afb1b806.jpg', 3, 1, '111', 230000, '123', 0, 1, 0, 'Ibanda Akilam', 1, '2020-05-05 09:30:07', '2020-05-10 06:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `system_access_logs`
--

CREATE TABLE `system_access_logs` (
  `id` int(11) NOT NULL,
  `activity` text DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `month` varchar(40) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `activity_time` text NOT NULL,
  `log_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_access_logs`
--

INSERT INTO `system_access_logs` (`id`, `activity`, `day`, `month`, `year`, `username`, `activity_time`, `log_type`) VALUES
(1, 'Juma logged In', 1, '2', 2020, 'juma', '2:30', 'Success'),
(2, 'logged in from ::1', 25, 'April', 2020, 'admin', 'Saturday 25<sup>th</sup>, April 2020 (12:44:53 PM)', 'SUCCESS'),
(3, 'logged in from ::1', 25, 'April', 2020, 'admin', 'Saturday 25<sup>th</sup>, April 2020 (01:29:55 PM)', 'SUCCESS'),
(4, 'logged in from ::1', 25, 'April', 2020, 'admin', 'Saturday 25<sup>th</sup>, April 2020 (06:04:48 PM)', 'SUCCESS'),
(5, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (07:28:33 AM)', 'SUCCESS'),
(6, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:42:23 AM)', 'SUCCESS'),
(7, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:43:56 AM)', 'SUCCESS'),
(8, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:57:05 AM)', 'SUCCESS'),
(9, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (09:07:14 AM)', 'SUCCESS'),
(10, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:00:46 AM)', 'INFO'),
(11, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:01:20 AM)', 'INFO'),
(12, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:12:39 AM)', 'SUCCESS'),
(13, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:13:25 AM)', 'INFO'),
(14, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:13:33 AM)', 'SUCCESS'),
(15, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:21:05 AM)', 'INFO'),
(16, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:21:13 AM)', 'SUCCESS'),
(17, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:24:35 AM)', 'INFO'),
(18, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:24:47 AM)', 'SUCCESS'),
(19, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:24:55 AM)', 'INFO'),
(20, 'logged out from ::1', 26, 'April', 2020, '', 'Sunday 26<sup>th</sup>, April 2020 (12:10:46 PM)', 'INFO'),
(21, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (05:43:16 PM)', 'SUCCESS'),
(22, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (06:30:19 PM)', 'INFO'),
(23, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (06:37:41 PM)', 'SUCCESS'),
(24, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (06:37:58 PM)', 'INFO'),
(25, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:18:00 PM)', 'SUCCESS'),
(26, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (10:22:45 PM)', 'SUCCESS'),
(27, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (10:23:02 PM)', 'INFO'),
(28, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:05:37 PM)', 'SUCCESS'),
(29, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:08:29 PM)', 'INFO'),
(30, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:09:02 PM)', 'SUCCESS'),
(31, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:09:31 PM)', 'SUCCESS'),
(32, 'logged in from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (10:10:11 AM)', 'SUCCESS'),
(33, 'logged in from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (11:19:56 AM)', 'SUCCESS'),
(34, 'logged in from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (11:46:06 AM)', 'SUCCESS'),
(35, 'logged out from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (12:23:25 PM)', 'INFO'),
(36, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (12:24:24 PM)', 'SUCCESS'),
(37, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (12:25:34 PM)', 'INFO'),
(38, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (12:25:55 PM)', 'SUCCESS'),
(39, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:26:43 PM)', 'SUCCESS'),
(40, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:27:49 PM)', 'SUCCESS'),
(41, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:33:53 PM)', 'INFO'),
(42, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:34:09 PM)', 'SUCCESS'),
(43, 'Made an edit on the Brand : Pajerods  from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (04:43:11 PM)', 'INFO'),
(44, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (06:11:44 PM)', 'SUCCESS'),
(45, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (11:00:25 PM)', 'INFO'),
(46, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (11:02:49 PM)', 'SUCCESS'),
(47, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (11:04:11 PM)', 'INFO'),
(48, 'logged in from ::1', 27, 'April', 2020, 'mak', 'Monday 27<sup>th</sup>, April 2020 (11:04:32 PM)', 'SUCCESS'),
(49, 'logged in from ::1', 28, 'April', 2020, 'akilam', 'Tuesday 28<sup>th</sup>, April 2020 (11:38:05 PM)', 'SUCCESS'),
(50, 'logged out from ::1', 29, 'April', 2020, 'akilam', 'Wednesday 29<sup>th</sup>, April 2020 (10:41:07 AM)', 'INFO'),
(51, 'logged in from ::1', 29, 'April', 2020, 'admins', 'Wednesday 29<sup>th</sup>, April 2020 (10:42:33 AM)', 'SUCCESS'),
(52, 'logged in from ::1', 29, 'April', 2020, 'akilam', 'Wednesday 29<sup>th</sup>, April 2020 (06:13:53 PM)', 'SUCCESS'),
(53, 'logged in from ::1', 29, 'April', 2020, 'akilam', 'Wednesday 29<sup>th</sup>, April 2020 (09:07:39 PM)', 'SUCCESS'),
(54, 'logged in from ::1', 30, 'April', 2020, 'akilam', 'Thursday 30<sup>th</sup>, April 2020 (05:45:48 AM)', 'SUCCESS'),
(55, 'logged in from ::1', 2, 'May', 2020, 'akilam', 'Saturday 2<sup>nd</sup>, May 2020 (12:31:52 PM)', 'SUCCESS'),
(56, 'logged out from ::1', 2, 'May', 2020, 'akilam', 'Saturday 2<sup>nd</sup>, May 2020 (12:32:35 PM)', 'INFO'),
(57, 'logged in from ::1', 2, 'May', 2020, 'admins', 'Saturday 2<sup>nd</sup>, May 2020 (12:33:24 PM)', 'SUCCESS'),
(58, 'logged out from ::1', 2, 'May', 2020, 'admins', 'Saturday 2<sup>nd</sup>, May 2020 (12:40:25 PM)', 'INFO'),
(59, 'logged in from ::1', 2, 'May', 2020, 'akilam', 'Saturday 2<sup>nd</sup>, May 2020 (12:40:39 PM)', 'SUCCESS'),
(60, 'logged in from ::1', 2, 'May', 2020, 'akilam', 'Saturday 2<sup>nd</sup>, May 2020 (02:31:06 PM)', 'SUCCESS'),
(61, 'logged in from ::1', 2, 'May', 2020, 'akilam', 'Saturday 2<sup>nd</sup>, May 2020 (07:59:50 PM)', 'SUCCESS'),
(62, 'logged in from ::1', 3, 'May', 2020, 'akilam', 'Sunday 3<sup>rd</sup>, May 2020 (07:56:14 AM)', 'SUCCESS'),
(63, 'logged in from ::1', 3, 'May', 2020, 'akilam', 'Sunday 3<sup>rd</sup>, May 2020 (08:07:05 AM)', 'SUCCESS'),
(64, 'logged in from ::1', 3, 'May', 2020, 'akilam', 'Sunday 3<sup>rd</sup>, May 2020 (12:18:07 PM)', 'SUCCESS'),
(65, 'logged in from ::1', 3, 'May', 2020, 'akilam', 'Sunday 3<sup>rd</sup>, May 2020 (03:29:39 PM)', 'SUCCESS'),
(66, 'logged in from ::1', 3, 'May', 2020, 'akilam', 'Sunday 3<sup>rd</sup>, May 2020 (04:49:22 PM)', 'SUCCESS'),
(67, 'logged in from ::1', 4, 'May', 2020, 'akilam', 'Monday 4<sup>th</sup>, May 2020 (10:10:00 AM)', 'SUCCESS'),
(68, 'logged in from ::1', 4, 'May', 2020, 'akilam', 'Monday 4<sup>th</sup>, May 2020 (10:45:21 AM)', 'SUCCESS'),
(69, 'logged out from ::1', 4, 'May', 2020, 'akilam', 'Monday 4<sup>th</sup>, May 2020 (12:03:56 PM)', 'INFO'),
(70, 'logged in from ::1', 4, 'May', 2020, 'akilam', 'Monday 4<sup>th</sup>, May 2020 (12:05:13 PM)', 'SUCCESS'),
(71, 'logged in from ::1', 4, 'May', 2020, 'akilam', 'Monday 4<sup>th</sup>, May 2020 (06:34:17 PM)', 'SUCCESS'),
(72, 'logged in from ::1', 4, 'May', 2020, 'akilam', 'Monday 4<sup>th</sup>, May 2020 (09:28:18 PM)', 'SUCCESS'),
(73, 'logged in from ::1', 5, 'May', 2020, 'akilam', 'Tuesday 5<sup>th</sup>, May 2020 (11:21:31 AM)', 'SUCCESS'),
(74, 'Made an edit on the Brand : master  from ::1', 5, 'May', 2020, 'akilam', 'Tuesday 5<sup>th</sup>, May 2020 (03:53:01 PM)', 'INFO'),
(75, 'Made an edit on the Brand : Scholastic  from ::1', 5, 'May', 2020, 'akilam', 'Tuesday 5<sup>th</sup>, May 2020 (03:53:41 PM)', 'INFO'),
(76, 'Made an edit on the A Category : Humans  from ::1', 5, 'May', 2020, 'Ibanda Akilam', 'Tuesday 5<sup>th</sup>, May 2020 (05:12:45 PM)', 'INFO'),
(77, 'logged in from ::1', 5, 'May', 2020, 'akilam', 'Tuesday 5<sup>th</sup>, May 2020 (05:46:12 PM)', 'SUCCESS'),
(78, 'Made an edit on the A Product : Malewao  from ::1', 5, 'May', 2020, 'Ibanda Akilam', 'Tuesday 5<sup>th</sup>, May 2020 (08:36:18 PM)', 'INFO'),
(79, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (09:39:25 AM)', 'INFO'),
(80, 'Made an edit on the A Product : Chocolate  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (11:13:06 AM)', 'INFO'),
(81, 'Made an edit on the A Product : Malewao  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (11:13:27 AM)', 'INFO'),
(82, 'logged in from ::1', 6, 'May', 2020, 'akilam', 'Wednesday 6<sup>th</sup>, May 2020 (11:25:47 AM)', 'SUCCESS'),
(83, 'logged in from ::1', 6, 'May', 2020, 'akilam', 'Wednesday 6<sup>th</sup>, May 2020 (11:40:48 AM)', 'SUCCESS'),
(84, 'Made an edit on the A Product : Apples  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:10:04 PM)', 'INFO'),
(85, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:16:16 PM)', 'INFO'),
(86, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:17:38 PM)', 'INFO'),
(87, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:24:27 PM)', 'INFO'),
(88, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:25:05 PM)', 'INFO'),
(89, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:32:09 PM)', 'INFO'),
(90, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:33:09 PM)', 'INFO'),
(91, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:33:52 PM)', 'INFO'),
(92, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:34:47 PM)', 'INFO'),
(93, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:36:16 PM)', 'INFO'),
(94, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:37:31 PM)', 'INFO'),
(95, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:39:32 PM)', 'INFO'),
(96, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:41:02 PM)', 'INFO'),
(97, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:42:06 PM)', 'INFO'),
(98, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:42:24 PM)', 'INFO'),
(99, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:43:32 PM)', 'INFO'),
(100, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:43:50 PM)', 'INFO'),
(101, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:44:25 PM)', 'INFO'),
(102, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:45:03 PM)', 'INFO'),
(103, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:45:20 PM)', 'INFO'),
(104, 'Made an edit on the A Product : Chocolate  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:46:00 PM)', 'INFO'),
(105, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:46:20 PM)', 'INFO'),
(106, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (12:46:41 PM)', 'INFO'),
(107, 'Made an edit on the A Product : Sumsungs  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:01:31 PM)', 'INFO'),
(108, 'Made an edit on the A Product : Malewaos  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:01:47 PM)', 'INFO'),
(109, 'Made an edit on the A Product : Malewaos  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:37:16 PM)', 'INFO'),
(110, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:37:34 PM)', 'INFO'),
(111, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:38:18 PM)', 'INFO'),
(112, 'Made an edit on the A Product : Sumsung  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:39:15 PM)', 'INFO'),
(113, 'Made an edit on the A Product : Malewaos  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:39:39 PM)', 'INFO'),
(114, 'Made an edit on the A Category : Human  from ::1', 6, 'May', 2020, 'Ibanda Akilam', 'Wednesday 6<sup>th</sup>, May 2020 (01:41:05 PM)', 'INFO'),
(115, 'logged in from ::1', 7, 'May', 2020, 'akilam', 'Thursday 7<sup>th</sup>, May 2020 (06:21:43 AM)', 'SUCCESS'),
(116, 'logged in from ::1', 7, 'May', 2020, 'akilam', 'Thursday 7<sup>th</sup>, May 2020 (09:29:20 AM)', 'SUCCESS'),
(117, 'logged in from ::1', 7, 'May', 2020, 'akilam', 'Thursday 7<sup>th</sup>, May 2020 (02:49:06 PM)', 'SUCCESS'),
(118, 'logged in from ::1', 7, 'May', 2020, 'akilam', 'Thursday 7<sup>th</sup>, May 2020 (05:21:13 PM)', 'SUCCESS'),
(119, 'logged in from ::1', 7, 'May', 2020, 'akilam', 'Thursday 7<sup>th</sup>, May 2020 (09:31:45 PM)', 'SUCCESS'),
(120, 'logged in from ::1', 7, 'May', 2020, 'akilam', 'Thursday 7<sup>th</sup>, May 2020 (09:39:09 PM)', 'SUCCESS'),
(121, 'logged in from ::1', 9, 'May', 2020, 'akilam', 'Saturday 9<sup>th</sup>, May 2020 (07:39:11 AM)', 'SUCCESS'),
(122, 'logged out from ::1', 9, 'May', 2020, 'akilam', 'Saturday 9<sup>th</sup>, May 2020 (07:40:38 AM)', 'INFO'),
(123, 'logged in from ::1', 9, 'May', 2020, 'admins', 'Saturday 9<sup>th</sup>, May 2020 (07:47:19 AM)', 'SUCCESS'),
(124, 'logged in from ::1', 9, 'May', 2020, 'admins', 'Saturday 9<sup>th</sup>, May 2020 (11:01:20 AM)', 'SUCCESS'),
(125, 'logged in from ::1', 9, 'May', 2020, 'akilam', 'Saturday 9<sup>th</sup>, May 2020 (11:01:49 AM)', 'SUCCESS'),
(126, 'logged in from ::1', 9, 'May', 2020, 'admins', 'Saturday 9<sup>th</sup>, May 2020 (11:54:19 AM)', 'SUCCESS'),
(127, 'logged in from ::1', 9, 'May', 2020, 'sharitah', 'Saturday 9<sup>th</sup>, May 2020 (12:02:36 PM)', 'SUCCESS'),
(128, 'logged in from ::1', 9, 'May', 2020, 'admins', 'Saturday 9<sup>th</sup>, May 2020 (12:04:47 PM)', 'SUCCESS'),
(129, 'logged in from ::1', 9, 'May', 2020, 'akilam', 'Saturday 9<sup>th</sup>, May 2020 (08:37:00 PM)', 'SUCCESS'),
(130, 'logged out from ::1', 9, 'May', 2020, 'akilam', 'Saturday 9<sup>th</sup>, May 2020 (08:37:30 PM)', 'INFO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `oname` varchar(100) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `accountType` int(11) DEFAULT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `pass_update` int(11) NOT NULL,
  `last_login_ip` text NOT NULL,
  `last_login_date` text NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `registered` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `sname`, `fname`, `oname`, `username`, `gender`, `email`, `mobile`, `password`, `role`, `accountType`, `account_status`, `pass_update`, `last_login_ip`, `last_login_date`, `created_by`, `registered`, `created_on`, `updated_on`) VALUES
(1, 'Mukoova', 'Juma', 'peepetu', 'admins', 'Male', 'mukoovajuma183@gmail.com', '0702499649', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 1, 1, 0, '::1', 'Saturday 2<sup>nd</sup>, May 2020 (12:40:25 PM)', 'Juma', 0, '2020-04-25 13:05:32', '2020-05-09 04:46:58'),
(2, 'Kange', 'Rahim', 'owo', 'raha', 'm', 'm@gmail.com', '070230440', '1a1dc91c907325c69271ddf0c944bc72', 2, 1, 0, 0, '12:00', '12/12/2019', 'juma', 0, '2020-04-29 08:06:31', '2020-05-04 18:55:43'),
(3, 'Maganda', '', 'Bakali', 'mankaluba', '1', 'maganda@gmail.com', '0702394495', '721a3b13a3898a8ff3c52aaaae7bd7b2', 1, 0, 1, 0, '', '', 'MukoovaJuma', 1, '2020-04-29 11:00:10', '2020-05-10 07:04:08'),
(4, 'Mutungi', 'Ian', 'Ian', 'ian', '1', 'ian@gmail.com', '0702399539', 'ed409817b76348be7ce4accb35a8f856', 2, 0, 1, 0, '', '', 'MukoovaJuma', 1, '2020-04-29 11:01:54', '2020-05-10 07:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role_name` text DEFAULT NULL,
  `roles_allowed` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `out_stock`
--
ALTER TABLE `out_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `system_access_logs`
--
ALTER TABLE `system_access_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `out_stock`
--
ALTER TABLE `out_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `system_access_logs`
--
ALTER TABLE `system_access_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
