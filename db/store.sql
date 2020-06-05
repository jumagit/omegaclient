-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 10:57 PM
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
(16, 'master', 0, 1, 'MukoovaJuma', 0, '2020-04-29 07:44:13', '2020-05-06 10:52:54'),
(17, 'Yamaha', 0, 1, 'Juma', 6, '2020-05-10 07:21:03', '2020-05-10 07:21:03'),
(18, 'Bajaj', 0, 1, 'Juma', 6, '2020-05-10 10:03:13', '2020-05-10 10:03:13'),
(19, 'Senke', 0, 1, 'Juma', 6, '2020-05-10 10:03:41', '2020-05-10 10:03:41'),
(20, 'TVS', 0, 1, 'Juma', 6, '2020-05-10 10:04:01', '2020-05-10 10:04:01'),
(21, 'Mate', 0, 1, 'Juma', 6, '2020-05-10 10:04:36', '2020-05-10 10:04:36'),
(22, 'Tuku Tuku', 0, 1, 'Juma', 6, '2020-05-10 10:05:08', '2020-05-10 10:05:08');

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
(1, 'Detergents', 1, 0, '', 1, '2020-04-26 09:41:03', '2020-05-11 10:14:25'),
(2, 'cosmetics', 1, 0, 'Ibanda Akilam', 1, '2020-04-29 15:14:13', '2020-05-11 10:13:57'),
(3, 'Human', 1, 0, 'Ibanda Akilam', 1, '2020-04-29 17:52:29', '2020-05-10 06:56:10'),
(4, 'Toyota', 1, 1, 'Juma', 6, '2020-05-10 07:23:06', '2020-05-10 07:23:06'),
(5, 'Mitsubish', 1, 1, 'Juma', 6, '2020-05-10 10:05:41', '2020-05-10 10:05:41'),
(6, 'Ford', 1, 1, 'Juma', 6, '2020-05-10 10:05:51', '2020-05-10 10:05:51'),
(7, 'Honda', 0, 1, 'Juma', 6, '2020-05-10 10:06:04', '2020-05-10 10:06:04'),
(8, 'Honda', 1, 1, 'Juma', 6, '2020-05-10 10:06:10', '2020-05-10 10:06:10'),
(9, 'Humans', 1, 1, 'Ibanda Akilam', 1, '2020-06-01 04:20:08', '2020-06-01 04:20:08');

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
  `suppliercode` varchar(3) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `fullName`, `email`, `mobile`, `location`, `username`, `password`, `account_status`, `cpassword`, `suppliercode`, `created_by`, `created_on`, `updated_on`) VALUES
(1, 'Ibanda Akilam', 'ibandaakilam@gmail.com', '0705207032', 'Busei, Iganga', 'akilam', '62608e08adc29a8d6dbc9754e659f125', 1, '', 'DEV', 'Mukoova', '2020-04-27 09:19:34', '2020-06-01 14:50:36'),
(3, 'Katuntubiru Med', 'med@gmail.com', '0706644545', 'Buwagi', 'med', '243e61e9410a9f577d2d662c67025ee9', 0, '', 'MOV', 'Ibanda Akilam', '2020-04-27 19:51:30', '2020-06-01 15:45:56'),
(6, 'Juma', 'juma@gmail.com', '0703923949', 'Butto', 'juma', 'c7362fda35e4a8fbd5b8fceaa5695d81', 0, '*!5ATwf7C', '', 'MukoovaJuma', '2020-05-02 09:35:04', '2020-05-02 09:35:04'),
(7, 'Kabunga Hameem', 'kabunga@gmail.com', '0703223030', 'Kayunga', 'hameem', '6467c459ac2fe5c39ef11b50272af2c3', 0, '8Fh&mCG5w', '', 'Ibanda Akilam', '2020-05-04 18:41:04', '2020-05-04 18:41:04'),
(8, 'Nakaibale Sharitah', 'mukoovajumag8@gmail.com', '0705955955', 'Munyonyo', 'sharitah', '4fcab400858d58a02b48f097bfdbc411e838ee12', 0, 'fbU@T57?e', '', 'MukoovaJuma', '2020-05-09 08:56:34', '2020-05-09 17:31:27'),
(9, 'Juma', 'juma@gmail.com', '0706696655', 'Mbale', 'jumagit', '53667d26c19eff9cf0840ccba0c41e2c', 0, '2%9BEguyD', 'MOV', 'MukoovaJuma', '2020-06-01 07:00:56', '2020-06-01 07:00:56'),
(10, 'juma', 'juma@gmail.com', '0705554434', 'Kampala', 'wow', '1258fdf5e917813dc406c35fc1a26854', 0, 'gVm8Gw!eF', 'MOV', 'MukoovaJuma', '2020-06-01 07:05:06', '2020-06-01 07:05:06'),
(11, 'Mukoova Hassan', 'mukoovajuma120@gmail.com', '0795969559', 'masaka', 'jumason', '0a5df9bad966e549c7098e1757c7e035', 0, '#nEVQD#H3', 'MOV', 'MukoovaJuma', '2020-06-01 07:21:59', '2020-06-01 07:21:59'),
(12, 'mukoova Hassan', 'mukoovajuma183@gmail.com', '0695594944', 'locdm', 'hassan', 'c5f2e95214a47e7a6bc73c2e8cdbdc8f', 0, 'k?Zw29xgV', 'PER', 'MukoovaJuma', '2020-06-01 07:39:52', '2020-06-01 07:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `customer_names` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email_address` varchar(60) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `address`, `customer_names`, `contact`, `email_address`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 'Kampala, Uganda', 'Wilson Bugembe', '265-702-495-444', 'wilson@gmail.com', 1, '2020-06-04 17:16:49', '2020-06-04 17:16:49'),
(2, 'Kaberamaido', 'Malaika Angel', '256-702-564-687', 'angel@yahoo.co.ug', 1, '2020-06-04 17:18:05', '2020-06-04 17:18:05'),
(3, 'Bweyogerere, Buttos', 'Mukoova Juma', '07073444455', 'mukoovajumag8@gmail.com', 1, '2020-06-04 17:35:36', '2020-06-04 17:49:16');

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
  `invoice_number` varchar(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `invoice_number`, `customer_id`, `sub_total`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`, `client_id`, `created_at`, `updated_at`) VALUES
(1, '2020-06-05', 'OME/DEV/0001/2020', 2, '200000.00', '200000.00', '200000', '0.00', 2, 3, 1, 1, '2020-06-05 14:42:12', '2020-06-05 14:42:12'),
(2, '2020-06-05', 'OME/DEV/0002/2020', 3, '400000.00', '400000.00', '400000', '0.00', 1, 3, 1, 1, '2020-06-05 14:47:07', '2020-06-05 14:47:07');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantityTaken`, `total`, `order_item_status`, `created_at`, `updated_at`) VALUES
(4, 1, 1, 2, 200000, 1, '2020-06-05 14:45:09', '2020-06-05 14:45:09'),
(6, 2, 1, 7, 400000, 1, '2020-06-05 14:50:30', '2020-06-05 14:50:30');

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
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
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

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `categories_id`, `quantity`, `price`, `active`, `status`, `total_sales`, `created_by`, `client_id`, `created_on`, `updated_on`) VALUES
(1, 'Brothers', '../assets/images/stock/2198954005eda599d7ee4c.jpg', 1, '110', 200000, 1, 1, 16, 'Ibanda Akilam', 1, '2020-06-05 14:41:33', '2020-06-05 14:50:30');

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
  `log_type` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_access_logs`
--

INSERT INTO `system_access_logs` (`id`, `activity`, `day`, `month`, `year`, `username`, `activity_time`, `log_type`, `status`) VALUES
(1, 'Made an order with Invoice Number OME/DEV/0001/2020', 5, 'June', 2020, 'akilam', 'Friday 5<sup>th</sup>, June 2020 (05:42:12 PM)', 'SUCCESS', 0),
(2, 'Made an order with Invoice Number OME/DEV/0002/2020', 5, 'June', 2020, 'akilam', 'Friday 5<sup>th</sup>, June 2020 (05:47:08 PM)', 'SUCCESS', 0),
(3, 'logged in from ::1', 5, 'June', 2020, 'akilam', 'Friday 5<sup>th</sup>, June 2020 (10:35:59 PM)', 'SUCCESS', 0),
(4, 'logged in from ::1', 5, 'June', 2020, 'akilam', 'Friday 5<sup>th</sup>, June 2020 (10:48:51 PM)', 'SUCCESS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `track_payments`
--

CREATE TABLE `track_payments` (
  `id` int(11) NOT NULL,
  `client_name` varchar(60) NOT NULL,
  `amount_paid` bigint(60) NOT NULL,
  `balance` bigint(60) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track_payments`
--

INSERT INTO `track_payments` (`id`, `client_name`, `amount_paid`, `balance`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'Malaika Angel', 200000, 0, 1, '2020-06-05 14:42:12', '2020-06-05 14:42:12'),
(2, 'Mukoova Juma', 400000, 0, 2, '2020-06-05 14:47:07', '2020-06-05 14:47:07');

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
(1, 'Mukoova', 'Juma', 'peepetu', 'admins', 'Male', 'mukoovajuma183@gmail.com', '0702499649', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 1, 1, 0, '::1', 'Thursday 14<sup>th</sup>, May 2020 (11:20:32 AM)', 'Juma', 0, '2020-04-25 13:05:32', '2020-05-22 05:39:14'),
(2, 'Kange', 'Rahim', 'owo', 'raha', 'm', 'm@gmail.com', '070230440', '1a1dc91c907325c69271ddf0c944bc72', 1, 1, 0, 0, '12:00', '12/12/2019', 'juma', 0, '2020-04-29 08:06:31', '2020-05-22 05:38:16'),
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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

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
-- Indexes for table `track_payments`
--
ALTER TABLE `track_payments`
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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_access_logs`
--
ALTER TABLE `system_access_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `track_payments`
--
ALTER TABLE `track_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
