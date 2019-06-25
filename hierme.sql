-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 11:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hierme`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2019_03_21_093739_tbl_categories', 2),
(4, '2019_03_21_094058_tbl_skills', 3),
(5, '2019_03_25_061123_tbl_task', 4),
(6, '2019_03_26_053006_tbl_task_skill', 5),
(21, '2014_10_12_100000_create_password_resets_table', 6),
(22, '2019_04_01_112019_tbl_categories', 6),
(23, '2019_04_01_112115_tbl_skills', 6),
(24, '2019_04_01_112210_tbl_task', 6),
(25, '2019_04_08_060329_tbl_flanguage', 6),
(26, '2019_04_08_060345_tbl_fskills', 6),
(27, '2019_04_08_060355_tbl_feducation', 6),
(28, '2019_04_08_060410_tbl_fawards', 6),
(29, '2019_04_08_153308_tbl_working', 6),
(30, '2019_04_30_041757_tbl_bidding', 6),
(31, '2019_04_30_063218_tbl_user_posts', 6),
(32, '2019_05_02_060825_tbl_fbasic', 7),
(33, '2019_05_03_051708_tbl_approve_bids', 7),
(34, '2019_05_03_102405_create_messages_table', 7);

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
-- Table structure for table `tbl_approve_bids`
--

CREATE TABLE `tbl_approve_bids` (
  `a_bid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `tid` bigint(20) UNSIGNED NOT NULL,
  `bid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidding`
--

CREATE TABLE `tbl_bidding` (
  `bid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `tid` bigint(20) UNSIGNED NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcomments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bstatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidstatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_bidding`
--

INSERT INTO `tbl_bidding` (`bid`, `fid`, `tid`, `rate`, `bcomments`, `time`, `dtype`, `bstatus`, `bidstatus`, `rating`) VALUES
(1, 16, 4, '3000', 'i can complete this in two weeks', '14', 'Days', 'Requested', '0', '5'),
(2, 14, 4, '3000', 'i can complete this in two weeks', '10', 'Days', 'Requested', '0', '4'),
(3, 14, 5, '45666', 'in 10 days', '10', 'Hours', 'Waiting', '0', '0'),
(4, 12, 5, '35467', 'esrxtcgvhb', '3', 'Hours', 'Waiting', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Engineering & science', NULL, NULL),
(2, 'product Sourcing & Manufacturing Skills', NULL, NULL),
(3, 'Sales & marketing', NULL, NULL),
(4, 'Translation & Language', NULL, NULL),
(5, 'Business,Accounting,Human Resource & Legal', NULL, NULL),
(6, 'Websites,IT $ Software', NULL, NULL),
(7, 'Design,Media & Architecture', NULL, NULL),
(8, 'Writing & Content', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fawards`
--

CREATE TABLE `tbl_fawards` (
  `f_aid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `award` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_fawards`
--

INSERT INTO `tbl_fawards` (`f_aid`, `fid`, `award`, `authority`, `year`, `created_at`, `updated_at`) VALUES
(1, 12, '', '', '', '2019-05-03 11:33:29', '2019-05-03 11:33:29'),
(2, 14, '', '', '', '2019-05-03 11:48:46', '2019-05-03 11:48:46'),
(3, 16, '', '', '', '2019-05-03 11:58:34', '2019-05-03 11:58:34'),
(4, 18, '', '', '', '2019-05-04 00:57:35', '2019-05-04 00:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fbasic`
--

CREATE TABLE `tbl_fbasic` (
  `f_bid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_fbasic`
--

INSERT INTO `tbl_fbasic` (`f_bid`, `fid`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 12, '1556896238t4.jpg', 'am good in php, laravel, mySql, ajax, ajax...', '2019-05-03 09:40:38', '2019-05-03 09:40:38'),
(2, 14, '1556903861mpf1.jpg', 'I can work in PhP laravel, I konw ajax,js ect', '2019-05-03 11:47:41', '2019-05-03 11:47:41'),
(3, 16, '1556904484r2.jpg', 'somethig related to unknown certainity. Intrested in writing such as articles. Known languages such as enlish, hindi', '2019-05-03 11:58:04', '2019-05-03 11:58:04'),
(4, 18, '1556951159mb1.jpg', 'I can work in Angulr,MySQL', '2019-05-04 00:55:59', '2019-05-04 00:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feducation`
--

CREATE TABLE `tbl_feducation` (
  `f_eid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_feducation`
--

INSERT INTO `tbl_feducation` (`f_eid`, `fid`, `title`, `major`, `year`, `created_at`, `updated_at`) VALUES
(1, 12, 'BA', 'English', '2007', '2019-05-03 11:33:29', '2019-05-03 11:33:29'),
(2, 14, 'BCA,MCA', 'Computer Applications,Computer Applications', '2007,2009', '2019-05-03 11:48:46', '2019-05-03 11:48:46'),
(3, 16, 'BA', 'English', '2008', '2019-05-03 11:58:34', '2019-05-03 11:58:34'),
(4, 18, 'BCA,', 'Computer,', '2009,', '2019-05-04 00:57:35', '2019-05-04 00:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flanguage`
--

CREATE TABLE `tbl_flanguage` (
  `f_lid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_flanguage`
--

INSERT INTO `tbl_flanguage` (`f_lid`, `fid`, `language`, `level`, `created_at`, `updated_at`) VALUES
(1, 12, 'English,', 'Conversational,', '2019-05-03 09:40:38', '2019-05-03 09:40:38'),
(2, 14, 'English', 'Conversational', '2019-05-03 11:47:41', '2019-05-03 11:47:41'),
(3, 16, 'English,Hindi', 'Fluent,Fluent', '2019-05-03 11:58:04', '2019-05-03 11:58:04'),
(4, 18, 'English', 'Conversational', '2019-05-04 00:56:00', '2019-05-04 00:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fskills`
--

CREATE TABLE `tbl_fskills` (
  `f_sid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_fskills`
--

INSERT INTO `tbl_fskills` (`f_sid`, `fid`, `category`, `skills`, `created_at`, `updated_at`) VALUES
(1, 12, '1', '16,17,18', '2019-05-03 11:33:29', '2019-05-03 11:33:29'),
(2, 14, '6', '9,10,13', '2019-05-03 11:48:46', '2019-05-03 11:48:46'),
(3, 16, '4', '9,10,13', '2019-05-03 11:58:34', '2019-05-03 11:58:34'),
(4, 18, '6', '9,10,13,14,32,35', '2019-05-04 00:57:35', '2019-05-04 00:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills`
--

CREATE TABLE `tbl_skills` (
  `s_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_skills`
--

INSERT INTO `tbl_skills` (`s_id`, `cat_id`, `skill`, `created_at`, `updated_at`) VALUES
(1, 4, 'English', NULL, NULL),
(2, 4, 'Hindi', NULL, NULL),
(3, 4, 'Malayalam', NULL, NULL),
(4, 4, 'Tamil', NULL, NULL),
(5, 4, 'Telugu', NULL, NULL),
(6, 5, 'History', NULL, NULL),
(7, 5, 'Tax Compliance and Outsourcing', NULL, NULL),
(8, 7, 'photshop', NULL, NULL),
(9, 6, 'PHP', NULL, NULL),
(10, 6, 'Laravel', NULL, NULL),
(11, 6, 'Java', NULL, NULL),
(12, 6, 'C#', NULL, NULL),
(13, 6, 'MySQL', NULL, NULL),
(14, 6, 'MongoDB', NULL, NULL),
(15, 4, '.NET', NULL, NULL),
(16, 1, 'AutoCAD', NULL, NULL),
(17, 1, 'CAD/CAM', NULL, NULL),
(18, 1, 'Statistical Analysis', NULL, NULL),
(19, 1, 'PCB Layout', NULL, NULL),
(20, 2, 'Prouduct Design', NULL, NULL),
(21, 2, 'Product Sourcing', NULL, NULL),
(22, 2, '3D Printing', NULL, NULL),
(23, 3, 'Internet Marketing', NULL, NULL),
(24, 3, 'Google Adwords', NULL, NULL),
(25, 3, 'Content Marketing', NULL, NULL),
(26, 3, 'Facebook Marketing', NULL, NULL),
(27, 3, 'Email Marketing', NULL, NULL),
(28, 3, 'Sales', NULL, NULL),
(29, 3, 'Social Media', NULL, NULL),
(30, 5, 'Legal Research', NULL, NULL),
(31, 5, 'Human Resource', NULL, NULL),
(32, 6, 'Ajax', NULL, NULL),
(33, 6, 'Javascript', NULL, NULL),
(34, 6, 'Node.js', NULL, NULL),
(35, 6, 'Angular', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `t_id` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `tname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tskills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tfiles` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tdescription` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`t_id`, `id`, `tname`, `category`, `tskills`, `date`, `minimum`, `maximum`, `ptype`, `tfiles`, `tdescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 13, 'web site design', '6', '9,10,13', '20-06-2019', '23455', '32363', 'fixed price', '1556903557thomas joseph.docx', 'Complete this work early as possible. this is for my store. That is sales shop.', 'InActive', '2019-05-03 11:42:37', '2019-05-03 11:42:37'),
(2, 15, 'web site design', '6', '9,13', '16-07-2019', '23455', '32363', 'hourly price', '1556904363website.jpg', 'AM looking for a website designers ,that early as possiblle..firther details please contact me', 'Active', '2019-05-03 11:56:03', '2019-05-03 11:56:03'),
(3, 17, 'Sales and Marketing', '3', '23,26,29', '21-06-2019', '3000', '4500', 'fixed price', '1556904750website.jpg', 'Spread our product to the world. Through the social media', 'Active', '2019-05-03 12:02:30', '2019-05-03 12:02:30'),
(4, 17, 'Sales', '3', '28', '14-08-2019', '600', '2000', 'fixed price', '1556904940FRONT_page.docx', 'Sell our product to people.. Selling one product you wil get Rs 600 ..when you sell more products then you will get more income', 'Active', '2019-05-03 12:05:40', '2019-05-03 12:05:40'),
(5, 15, 'web site design', '6', '9,10,13', '17-07-2019', '3000', '32363', 'fixed price', '1556954199RECRUITMENT OF ASSISTANT ADMINISTRATIVE OFFICER (AAO) (GENERALIST_ IT_ CHARTERED ACCOUNTANT_ ACTUARIAL _ RAJBHASHA).pdf', 'dsvgdiug uriqugq', 'Active', '2019-05-04 01:46:39', '2019-05-04 01:46:39'),
(6, 13, 'card designer', '7', '8', '18-07-2019', '23455', '234567', 'fixed price', '1557825858MTS APPU.pdf', 'Nothing beats a one-of-a-kind card, made by you. Forget about generic, shop-bought cards. With templates for every occasion—from birthdays to anniversaries to “just thinking about you”—you can create the perfect card for your loved one, and save time and money, too.', 'Active', '2019-05-14 03:54:18', '2019-05-14 03:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_posts`
--

CREATE TABLE `tbl_user_posts` (
  `pid` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
  `files` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pstatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user_posts`
--

INSERT INTO `tbl_user_posts` (`pid`, `fid`, `files`, `comments`, `pstatus`, `created_at`, `updated_at`) VALUES
(1, 16, '1556903320-autocad.jpg', 'This is the work i completed for MNC during in 2019', '0', NULL, NULL),
(2, 14, '1556904010-website.jpg', 'This is done for abcd company at july 2018', '0', NULL, NULL),
(3, 18, '1556951304-website.jpg', 'This is the work i completed for MNC during the year 2012 in 3 days', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_working`
--

CREATE TABLE `tbl_working` (
  `wid` bigint(20) UNSIGNED NOT NULL,
  `award` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcompleted` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `status`, `pcompleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'admin', 'hiermeadmin@gmail.com', NULL, '$2y$10$W/.5FvAMPCUbb.6Dd33PeesF2b4wrU026IgE6hPM5zVY4xZfbEX9K', 'admin', '1', '', NULL, '2019-03-21 09:47:32', '2019-03-21 09:47:32'),
(12, 'Anu Ani Joseph', 'anuanijoseph5@gmail.com', NULL, '$2y$10$93kuWdzUEucHjwk2pjv6XON1P/DvrcXSImCQ8K0knU8oTRG4RMD8e', 'freelancer', '1', '1', NULL, '2019-05-03 09:38:37', '2019-05-03 09:38:37'),
(13, 'Thomas Joseph', 'thomasvjoseph6@gmail.com', NULL, '$2y$10$zFBvUuDETiofzceYzXFbZOZ8ZI4co4Lh67uqHSSOELPS4GnauI7X.', 'employer', '1', '0', NULL, '2019-05-03 11:40:06', '2019-05-03 11:40:06'),
(14, 'vinayan', 'vinayanav86@gmail.com', NULL, '$2y$10$AprnMOW8k271n0HMG6MU.eRKEvjCNePQr.ACsL.w0HX7kLL/uiIz6', 'freelancer', '1', '1', NULL, '2019-05-03 11:46:27', '2019-05-03 11:46:27'),
(15, 'Albin', 'albinsalu@gmail.com', NULL, '$2y$10$.E1lnhc6XXcppnNFEiE5bu/HjARchmntM6rm2AvnyQANsbnJ.Diwq', 'employer', '1', '0', NULL, '2019-05-03 11:51:33', '2019-05-03 11:51:33'),
(16, 'Zach', 'zachjerald28@yahoo.com', NULL, '$2y$10$GiHTKs74DCFbzAs/ukYuIeS3Xfvl0jCt1n1hdkTgPHYw4Kj5r85Oy', 'freelancer', '1', '1', NULL, '2019-05-03 11:53:45', '2019-05-03 11:53:45'),
(17, 'Shane', 'shanewatson@gmail.com', NULL, '$2y$10$pdzmkvB1RMTU7u.nKOhTYOvozdFRwD61/lf..7ROWCoiYhf9QCkvK', 'employer', '1', '0', NULL, '2019-05-03 12:00:17', '2019-05-03 12:00:17'),
(18, 'Rahul Chacko', 'rahulchacko07@gmail.com', NULL, '$2y$10$oi4pFZ9FkNjJe7jmQmpYgetL0MtkgIrcxUcBD.N5ejihjBo4Tyuz.', 'freelancer', '1', '1', NULL, '2019-05-04 00:51:54', '2019-05-04 00:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_fid_foreign` (`fid`);

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
-- Indexes for table `tbl_approve_bids`
--
ALTER TABLE `tbl_approve_bids`
  ADD PRIMARY KEY (`a_bid`),
  ADD KEY `tbl_approve_bids_fid_foreign` (`fid`),
  ADD KEY `tbl_approve_bids_tid_foreign` (`tid`),
  ADD KEY `tbl_approve_bids_bid_foreign` (`bid`);

--
-- Indexes for table `tbl_bidding`
--
ALTER TABLE `tbl_bidding`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `tbl_bidding_fid_foreign` (`fid`),
  ADD KEY `tbl_bidding_tid_foreign` (`tid`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `tbl_categories_category_unique` (`category`);

--
-- Indexes for table `tbl_fawards`
--
ALTER TABLE `tbl_fawards`
  ADD PRIMARY KEY (`f_aid`),
  ADD KEY `tbl_fawards_fid_foreign` (`fid`);

--
-- Indexes for table `tbl_fbasic`
--
ALTER TABLE `tbl_fbasic`
  ADD PRIMARY KEY (`f_bid`),
  ADD KEY `tbl_fbasic_fid_foreign` (`fid`);

--
-- Indexes for table `tbl_feducation`
--
ALTER TABLE `tbl_feducation`
  ADD PRIMARY KEY (`f_eid`),
  ADD KEY `tbl_feducation_fid_foreign` (`fid`);

--
-- Indexes for table `tbl_flanguage`
--
ALTER TABLE `tbl_flanguage`
  ADD PRIMARY KEY (`f_lid`),
  ADD KEY `tbl_flanguage_fid_foreign` (`fid`);

--
-- Indexes for table `tbl_fskills`
--
ALTER TABLE `tbl_fskills`
  ADD PRIMARY KEY (`f_sid`),
  ADD KEY `tbl_fskills_fid_foreign` (`fid`);

--
-- Indexes for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `tbl_skills_skills_unique` (`skill`),
  ADD KEY `tbl_skills_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `tbl_task_id_foreign` (`id`);

--
-- Indexes for table `tbl_user_posts`
--
ALTER TABLE `tbl_user_posts`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `tbl_user_posts_fid_foreign` (`fid`);

--
-- Indexes for table `tbl_working`
--
ALTER TABLE `tbl_working`
  ADD PRIMARY KEY (`wid`);

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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_approve_bids`
--
ALTER TABLE `tbl_approve_bids`
  MODIFY `a_bid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bidding`
--
ALTER TABLE `tbl_bidding`
  MODIFY `bid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_fawards`
--
ALTER TABLE `tbl_fawards`
  MODIFY `f_aid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_fbasic`
--
ALTER TABLE `tbl_fbasic`
  MODIFY `f_bid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_feducation`
--
ALTER TABLE `tbl_feducation`
  MODIFY `f_eid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_flanguage`
--
ALTER TABLE `tbl_flanguage`
  MODIFY `f_lid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_fskills`
--
ALTER TABLE `tbl_fskills`
  MODIFY `f_sid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  MODIFY `s_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `t_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_posts`
--
ALTER TABLE `tbl_user_posts`
  MODIFY `pid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_working`
--
ALTER TABLE `tbl_working`
  MODIFY `wid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_approve_bids`
--
ALTER TABLE `tbl_approve_bids`
  ADD CONSTRAINT `tbl_approve_bids_bid_foreign` FOREIGN KEY (`bid`) REFERENCES `tbl_bidding` (`bid`),
  ADD CONSTRAINT `tbl_approve_bids_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tbl_approve_bids_tid_foreign` FOREIGN KEY (`tid`) REFERENCES `tbl_task` (`t_id`);

--
-- Constraints for table `tbl_bidding`
--
ALTER TABLE `tbl_bidding`
  ADD CONSTRAINT `tbl_bidding_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tbl_bidding_tid_foreign` FOREIGN KEY (`tid`) REFERENCES `tbl_task` (`t_id`);

--
-- Constraints for table `tbl_fawards`
--
ALTER TABLE `tbl_fawards`
  ADD CONSTRAINT `tbl_fawards_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_fbasic`
--
ALTER TABLE `tbl_fbasic`
  ADD CONSTRAINT `tbl_fbasic_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_feducation`
--
ALTER TABLE `tbl_feducation`
  ADD CONSTRAINT `tbl_feducation_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_flanguage`
--
ALTER TABLE `tbl_flanguage`
  ADD CONSTRAINT `tbl_flanguage_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_fskills`
--
ALTER TABLE `tbl_fskills`
  ADD CONSTRAINT `tbl_fskills_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  ADD CONSTRAINT `tbl_skills_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `tbl_categories` (`cat_id`);

--
-- Constraints for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD CONSTRAINT `tbl_task_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_user_posts`
--
ALTER TABLE `tbl_user_posts`
  ADD CONSTRAINT `tbl_user_posts_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
