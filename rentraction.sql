-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 10:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentraction`
--

-- --------------------------------------------------------

--
-- Table structure for table `chattings`
--

CREATE TABLE `chattings` (
  `chat_message_id` int(10) UNSIGNED NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chattings`
--

INSERT INTO `chattings` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'hello', '2018-11-06 15:50:28', 0),
(2, 1, 2, 'class', '2018-11-06 15:50:39', 0),
(3, 2, 1, 'bill', '2018-11-06 16:01:50', 0),
(4, 1, 2, 'html{{}}😆', '2018-11-06 16:02:29', 0),
(5, 1, 2, 'sad', '2018-11-06 16:05:54', 0),
(6, 5, 3, 'hrrhrh', '2018-11-14 00:03:33', 1),
(7, 4, 3, 'sadasd', '2018-11-14 00:04:28', 0),
(8, 7, 6, 'adasd', '2018-11-18 03:44:23', 0),
(9, 6, 7, 'mor shala', '2018-11-18 03:44:32', 0),
(10, 1, 6, 'managing employees clas', '2018-11-21 23:50:52', 1),
(11, 6, 9, 'tai naki?', '2018-11-22 00:02:35', 0),
(12, 6, 9, 'sddasd', '2018-11-22 00:02:35', 0),
(13, 1, 6, 'asd', '2018-11-21 23:53:22', 1),
(14, 1, 9, 'asdasd', '2018-11-21 23:53:35', 1),
(15, 9, 6, 'tai', '2018-11-22 00:02:49', 0),
(16, 9, 6, 'hello', '2018-11-22 00:05:19', 0),
(17, 6, 9, 'hari', '2018-11-22 00:05:33', 0),
(18, 6, 9, 'hello hari?? how are you???', '2018-11-22 00:05:43', 0),
(19, 6, 9, 'haskldjhasjkldhaslkd', '2018-11-22 00:06:08', 0),
(20, 6, 9, 'asdasdasdas', '2018-11-22 00:06:13', 0),
(21, 9, 6, 'asdasdasdasd', '2018-11-22 00:06:24', 0),
(22, 34, 6, 'mor', '2018-11-23 22:00:46', 0),
(23, 6, 34, 'tui o mor🤣😂', '2018-11-23 22:01:04', 0),
(24, 33, 6, 'qw', '2018-11-26 20:13:29', 0),
(25, 6, 33, 'ty', '2018-11-26 20:13:39', 0),
(26, 9, 6, 'hello!!!!!', '2018-11-27 14:41:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`, `created_at`, `updated_at`) VALUES
(17, 6, '2018-12-19 00:31:51', 'yes', '2018-11-13 23:13:06', '2018-12-18 23:31:51'),
(18, 7, '2018-11-19 17:15:32', 'no', '2018-11-13 23:13:34', '2018-11-19 22:15:32'),
(19, 9, '2018-11-30 18:17:48', 'yes', '2018-11-17 20:59:42', '2018-11-30 17:17:48'),
(20, 11, '2018-11-19 00:01:46', 'no', '2018-11-19 00:01:46', '2018-11-19 00:01:46'),
(21, 32, '2018-11-26 03:53:49', 'no', '2018-11-19 19:12:03', '2018-11-26 08:53:49'),
(22, 33, '2018-11-30 18:04:21', 'no', '2018-11-22 01:32:48', '2018-11-30 23:04:21'),
(23, 34, '2018-11-30 14:32:58', 'no', '2018-11-22 01:33:26', '2018-11-30 19:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_10_29_034207_create_chattings_table', 1),
(22, '2018_10_29_041037_create_login_details_table', 1),
(25, '2018_11_17_031143_create_properties_table', 2),
(28, '2018_11_20_225832_create_tenant_applicants_table', 3),
(29, '2018_11_22_033553_add_apply_status_to_tenant_applicants_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_number` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `property_type`, `street_number`, `street_name`, `address2`, `city`, `state`, `zip_code`, `rent`, `img`, `created_at`, `updated_at`) VALUES
(1, 6, 'Apartment', 'House-53/7,8,9, Mirpur,Dhaka', '455, Rankin Avenue', 'ddddd', 'Windsor', 'Ontario', 'N9B 2R6', 12313213, '1.JPG', '2018-11-17 09:08:23', '2018-11-17 09:08:23'),
(2, 6, 'Apartment', 'House-53/7,8,9, Mirpur,Dhaka', '455, Rankin Avenue', 'ddddd', 'Windsor', 'Ontario', 'N9B 2R6', 12313213, '2.JPG', '2018-11-17 09:09:45', '2018-11-17 09:09:45'),
(5, 6, 'Single Family House', 'sa', '455, Rankin Avenue', 'ddd', 'Windsor', 'Ontario', 'N9B 2R6', 12, '3.JPG', '2018-11-17 19:41:48', '2018-11-17 19:41:48'),
(6, 6, 'Single Family House', 'sa', '455, Rankin Avenue', 'ddd', 'Windsor', 'Ontario', 'N9B 2R6', 12, '1.JPG', '2018-11-17 19:43:38', '2018-11-17 19:43:38'),
(7, 6, 'Single Family House', 'sa', '455, Rankin Avenue', 'ddd', 'Windsor', 'Ontario', 'N9B 2R6', 12, '2.JPG', '2018-11-17 19:43:59', '2018-11-17 19:43:59'),
(8, 6, 'Duplex/Triplex/Townhouse', '2132132', '455, Rankin Avenue', 'House-53/7,8,9, Mirpur,Dhaka', 'Windsor', 'Ontario', 'N9B 2R6', 10000, 'Capture.JPG', '2018-11-19 04:28:04', '2018-11-19 04:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_applicants`
--

CREATE TABLE `tenant_applicants` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `apply_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_applicants`
--

INSERT INTO `tenant_applicants` (`id`, `property_id`, `tenant_id`, `owner_id`, `status`, `apply_status`, `created_at`, `updated_at`) VALUES
(17, 1, 33, 6, 1, 1, '2018-11-22 03:04:12', '2018-11-27 01:12:28'),
(18, 1, 9, 6, 1, 1, '2018-11-22 03:05:16', '2018-11-23 04:33:18'),
(19, 2, 9, 6, 1, 1, '2018-11-22 03:11:01', '2018-11-23 04:33:21'),
(20, 1, 34, 6, 1, 1, '2018-11-22 03:21:10', '2018-11-23 04:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `email`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Muhaimeen', 'Ahmed', 'saif', 'ahmed.muhaimeen@gmail.com', 'test', 1, NULL, NULL, '2018-11-13 23:13:06', '2018-11-13 23:13:06'),
(7, 'Muhaimeen', 'Ahmed', 'saif2', 'muhaimeen.ahmed@gmail.com', 'test', 1, NULL, NULL, '2018-11-13 23:13:34', '2018-11-13 23:13:34'),
(9, 'Ayon', 'Ahmed', 'tenant', 'tenant@gmail.com', 'test', 2, NULL, NULL, '2018-11-17 20:59:42', '2018-11-17 20:59:42'),
(32, 'Muhaimeen', 'Ahmed', 'ayon@gmail.com', 'ayon@gmail.com', 'test', 1, NULL, NULL, '2018-11-19 19:12:03', '2018-11-19 19:12:03'),
(33, 'Charan', 'Charan', 'Charan', 'charan@gmail.com', 'test', 2, NULL, NULL, '2018-11-22 01:32:48', '2018-11-22 01:32:48'),
(34, 'Subuh', 'Khan', 'subuh', 'subuh@gmail.com', 'test', 2, NULL, NULL, '2018-11-22 01:33:25', '2018-11-22 01:33:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chattings`
--
ALTER TABLE `chattings`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant_applicants`
--
ALTER TABLE `tenant_applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chattings`
--
ALTER TABLE `chattings`
  MODIFY `chat_message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tenant_applicants`
--
ALTER TABLE `tenant_applicants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
