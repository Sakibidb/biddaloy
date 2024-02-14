-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 02:16 PM
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
-- Database: `biddaloy`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not, 1:yes',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(6, 'Class Three', 0, 0, 18, '2024-02-04 04:26:33', '2024-02-04 04:26:33'),
(7, 'Class Six', 0, 0, 18, '2024-02-04 04:35:26', '2024-02-04 04:35:26'),
(8, 'class Nine', 0, 0, 18, '2024-02-04 04:35:32', '2024-02-04 04:35:32'),
(9, 'Class One', 0, 0, 18, '2024-02-04 04:35:39', '2024-02-04 04:35:39'),
(11, 'Class Two', 0, 0, 1, '2024-02-06 03:41:17', '2024-02-06 03:41:17'),
(12, 'Class Four', 0, 0, 1, '2024-02-06 03:41:33', '2024-02-06 03:41:33'),
(13, 'Class Five', 0, 0, 1, '2024-02-06 03:41:44', '2024-02-06 03:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`id`, `class_id`, `subject_id`, `created_by`, `is_delete`, `status`, `created_at`, `updated_at`) VALUES
(17, 6, 12, 1, 1, 0, '2024-02-05 06:59:21', '2024-02-05 07:00:38'),
(18, 6, 13, 1, 1, 0, '2024-02-05 06:59:21', '2024-02-05 07:00:37'),
(19, 6, 14, 1, 1, 0, '2024-02-05 06:59:21', '2024-02-05 07:00:36'),
(20, 7, 12, 1, 1, 0, '2024-02-05 06:59:30', '2024-02-05 07:00:35'),
(21, 7, 13, 1, 1, 0, '2024-02-05 06:59:30', '2024-02-05 07:00:14'),
(22, 7, 14, 1, 1, 0, '2024-02-05 07:01:11', '2024-02-05 07:01:21'),
(29, 12, NULL, 1, 0, 0, '2024-02-05 07:02:01', '2024-02-05 09:21:18'),
(32, 13, NULL, 1, 0, 0, '2024-02-05 09:26:57', '2024-02-05 09:27:08'),
(33, 8, 12, 1, 0, 0, '2024-02-05 09:27:33', '2024-02-05 09:27:33'),
(34, 14, NULL, 1, 0, 0, '2024-02-05 09:27:33', '2024-02-06 03:00:19'),
(35, 8, 14, 1, 0, 0, '2024-02-05 09:27:33', '2024-02-05 09:27:33'),
(36, 6, 16, 1, 0, 0, '2024-02-06 03:44:33', '2024-02-06 03:44:33'),
(37, 6, 15, 1, 0, 0, '2024-02-06 03:44:42', '2024-02-06 03:44:42'),
(38, 12, 13, 1, 1, 0, '2024-02-06 03:44:56', '2024-02-11 03:11:04'),
(39, 12, 15, 1, 1, 0, '2024-02-06 03:44:56', '2024-02-11 03:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not, 1:yes',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `type`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(12, 'Bangla', 'Theory', 1, 0, 0, '2024-02-05 06:37:23', '2024-02-05 06:37:23'),
(13, 'English', 'Theory', 1, 0, 0, '2024-02-05 06:39:00', '2024-02-05 06:39:00'),
(14, 'Math', 'Theory', 1, 0, 0, '2024-02-05 06:39:12', '2024-02-05 06:39:12'),
(15, 'Bangla', 'Theory', 1, 0, 0, '2024-02-06 03:42:46', '2024-02-06 03:42:46'),
(16, 'Physics', 'Theory', 1, 0, 0, '2024-02-06 03:43:28', '2024-02-06 03:43:28'),
(17, 'Physics', 'Practical', 1, 0, 0, '2024-02-06 03:43:46', '2024-02-06 03:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `admission_number` varchar(50) DEFAULT NULL,
  `roll_number` varchar(50) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1:admin, 2:teacher, 3:student, 4:parent',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not deleted, 1: deleted',
  `status` tinyint(4) DEFAULT 0 COMMENT '0:active, 1:inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `parent_id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `admission_number`, `roll_number`, `class_id`, `gender`, `date_of_birth`, `caste`, `religion`, `address`, `occupation`, `mobile_number`, `admission_date`, `profile_pic`, `blood_group`, `height`, `weight`, `user_type`, `is_delete`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', NULL, 'admin@gmail.com', NULL, '$2y$12$AnvXxM2uykz4uYV.bjbKQOrY4CFCDun1R4v7a..nFxzLUGol2bBza', 'vsGkO3Ac1b56yh8oZOnKk4PdrhLK5yosSgpWeN7LlVU3SE5tfUnfQJbCkyjg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2024-01-29 13:33:21', '2024-02-11 22:21:27'),
(2, NULL, 'teacher', NULL, 'teacher@gmail.com', NULL, '$2y$12$VxM1v8qz1TzxDsfwiZsxE.eji7fNQJSw/pGyKJ4CkbIl4C0tsI8F6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, 0, '2024-01-29 13:33:21', '2024-02-11 22:22:18'),
(3, NULL, 'student', NULL, 'student@gmail.com', NULL, '$2y$12$lgWxYITbfQalWfmDrizvferr5iEpV2I9eDmbonGBHqOBubrgCH/LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, '2024-01-29 13:33:21', '2024-01-22 13:33:21'),
(4, NULL, 'parent', NULL, 'parent@gmail.com', NULL, '$2y$12$lgWxYITbfQalWfmDrizvferr5iEpV2I9eDmbonGBHqOBubrgCH/LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 0, '2024-01-29 13:33:21', '2024-01-22 13:33:21'),
(29, 33, 'Nazmus', 'Sakib', 'sakib@gmail.com', NULL, '$2y$12$jbEBdvqT6tgpy9xePJvZfeT7sqjSIUg0vH7oGZitTRLINfYQxHFxu', NULL, '01', '1274006', 13, 'Male', '1997-02-02', '', 'Islam', NULL, NULL, '01312008372', '2024-02-01', '240213065950yrw4p2qk8cnrq0ornkjzym5svxm0pr.jpg', 'B+', '5.5', '63', 3, 0, 0, '2024-02-13 00:59:50', '2024-02-14 06:39:31'),
(30, NULL, 'Nazmus', 'Sakib', 'sakibnazmus@gmail.com', NULL, '$2y$12$s.rB6FjnyPs0NIh0ICR.wul2KXYzXUZTeGja/BGy84V0FzovNSAdC', NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, '01853705638', NULL, '240214055844rb4awovvoywqv6hn2rstbduo74392s.jpg', NULL, NULL, NULL, 4, 0, 0, '2024-02-13 23:58:44', '2024-02-13 23:58:44'),
(31, NULL, 'Sayem', 'Uddin', 'sayem@gmail.com', NULL, '$2y$12$8uTj0hswSs5DP4tmX1z.kezxHN/VpkN2WE9X/UrDrcmT.7sb1lbHK', NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, '811, Gulshan', 'Teacher', '01915577704', NULL, '240214073454tddn4104ryoxzdszkwhd70w1cjyeeg.jpg', NULL, NULL, NULL, 4, 1, 0, '2024-02-14 00:12:41', '2024-02-14 01:36:57'),
(33, NULL, 'Saadat', 'Najmus', 'saadat@gmail.com', NULL, '$2y$12$Zx3rtTpfa8MDYcXRFSk/EuuhqBJYlGD7qP.V.Ctk3dzjgWae4J17C', NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, '811, Gulshan', 'Business', '01716477600', NULL, '240214123415kaudcyievpiw4ynjvjoshhrhnf4ixf.jpg', NULL, NULL, NULL, 4, 0, 0, '2024-02-14 06:34:15', '2024-02-14 06:34:15'),
(34, NULL, 'Anika', 'Tabassum', 'anika@gmail.com', NULL, '$2y$12$/PrlbGs78hKrdTyRurdRl.1HICNcA5v11WfTZRtpnDu7lRvLTdH9u', NULL, '100', '200', 11, 'Female', '2024-02-06', '', 'islam', NULL, NULL, '01596128566', '2024-02-15', '240214123715i2rqes41rwfn9ps37cxfmoklqg4xeq.png', 'A+', '4.9', '45', 3, 0, 0, '2024-02-14 06:37:15', '2024-02-14 06:37:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
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
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
