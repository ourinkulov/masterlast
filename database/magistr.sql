-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 05:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magistr`
--

-- --------------------------------------------------------

--
-- Table structure for table `comples`
--

CREATE TABLE `comples` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studyyear` bigint(20) UNSIGNED NOT NULL,
  `semestr` bigint(20) UNSIGNED NOT NULL,
  `kurs` bigint(20) UNSIGNED NOT NULL,
  `guruh` bigint(20) UNSIGNED NOT NULL,
  `teacher` bigint(20) UNSIGNED NOT NULL,
  `fan` bigint(20) UNSIGNED NOT NULL,
  `fanName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comples`
--

INSERT INTO `comples` (`id`, `studyyear`, `semestr`, `kurs`, `guruh`, `teacher`, `fan`, `fanName`, `created_at`, `updated_at`) VALUES
(8, 2, 5, 2, 4, 13, 3, 'Boshqaruvda AT(101-21)', '2021-11-08 04:55:51', '2021-11-08 04:55:51'),
(9, 2, 5, 2, 5, 13, 3, 'Boshqaruvda AT(102-21)', '2021-11-08 04:56:10', '2021-11-08 04:56:10'),
(10, 2, 5, 2, 6, 17, 4, 'Kadrlar faoliyatini tashkil etish (103-21)', '2021-11-08 12:30:36', '2021-11-08 12:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

CREATE TABLE `fans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kafId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fans`
--

INSERT INTO `fans` (`id`, `fName`, `kafId`, `created_at`, `updated_at`) VALUES
(3, 'Boshqaruvda axborot tehnologiyalari', 4, '2021-11-08 04:53:35', '2021-11-08 04:53:35'),
(4, 'Kadrlar faoliyatini tashkil etish', 5, '2021-11-08 12:28:20', '2021-11-08 12:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `guruhs`
--

CREATE TABLE `guruhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurs` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guruhs`
--

INSERT INTO `guruhs` (`id`, `group`, `kurs`, `created_at`, `updated_at`) VALUES
(4, '101-21', 2, '2021-11-08 04:33:14', '2021-11-08 04:33:14'),
(5, '102-21', 2, '2021-11-08 04:53:07', '2021-11-08 04:53:07'),
(6, '103-21', 2, '2021-11-08 12:26:47', '2021-11-08 12:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `jnjurnals`
--

CREATE TABLE `jnjurnals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `comples_id` int(11) DEFAULT NULL,
  `jnid` bigint(20) NOT NULL,
  `baho` decimal(10,2) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jnjurnals`
--

INSERT INTO `jnjurnals` (`id`, `uid`, `comples_id`, `jnid`, `baho`, `status`, `created_at`, `updated_at`) VALUES
(60, 14, 8, 12, '71.00', NULL, '2021-11-08 04:58:37', '2021-11-08 04:58:37'),
(61, 15, 9, 13, '86.00', NULL, '2021-11-08 04:59:03', '2021-11-08 04:59:03'),
(62, 14, 8, 14, '74.00', NULL, '2021-11-08 08:45:09', '2021-11-08 08:45:09'),
(63, 14, 8, 15, '86.00', NULL, '2021-11-08 08:45:17', '2021-11-08 08:45:17'),
(64, 15, 9, 16, '50.24', NULL, '2021-11-08 09:24:53', '2021-11-08 09:24:53'),
(65, 15, 9, 17, '86.79', NULL, '2021-11-08 09:25:02', '2021-11-08 09:25:02'),
(66, 16, 9, 13, '14.28', NULL, '2021-11-08 09:36:10', '2021-11-08 09:36:10'),
(67, 16, 9, 16, '58.98', NULL, '2021-11-08 09:36:31', '2021-11-08 09:36:31'),
(68, 16, 9, 17, '23.58', NULL, '2021-11-08 09:36:42', '2021-11-08 09:36:42'),
(69, 18, 10, 18, '88.00', NULL, '2021-11-08 12:34:47', '2021-11-08 12:34:47'),
(70, 18, 10, 19, '86.00', NULL, '2021-11-08 12:35:18', '2021-11-08 12:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `joriynazorats`
--

CREATE TABLE `joriynazorats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comples_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joriynazorats`
--

INSERT INTO `joriynazorats` (`id`, `name`, `comples_id`, `created_at`, `updated_at`) VALUES
(12, 'JN1', 8, '2021-11-08 04:56:59', '2021-11-08 04:56:59'),
(13, ' JN1', 9, '2021-11-08 04:57:15', '2021-11-08 04:57:15'),
(14, 'JN2', 8, '2021-11-08 08:44:45', '2021-11-08 08:44:45'),
(15, ' JN3', 8, '2021-11-08 08:44:53', '2021-11-08 08:44:53'),
(16, 'JN2', 9, '2021-11-08 09:24:23', '2021-11-08 09:24:23'),
(17, ' JN3', 9, '2021-11-08 09:24:36', '2021-11-08 09:24:36'),
(18, 'JN1', 10, '2021-11-08 12:32:26', '2021-11-08 12:32:26'),
(19, 'JN2', 10, '2021-11-08 12:33:12', '2021-11-08 12:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `kafedras`
--

CREATE TABLE `kafedras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kafName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kafedras`
--

INSERT INTO `kafedras` (`id`, `kafName`, `creator`, `deletor`, `created_at`, `updated_at`) VALUES
(4, 'Axborot tehnologiyalari kafedrasi', 'Administrator', NULL, '2021-11-08 04:31:47', '2021-11-08 04:31:47'),
(5, 'Boshqaruv fanlar kafedrasi', 'Administrator', NULL, '2021-11-08 12:25:08', '2021-11-08 12:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE `kurs` (
  `id` int(11) NOT NULL,
  `kurs` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`id`, `kurs`, `created_at`, `updated_at`) VALUES
(1, 'Tashkiliy-strategik', '2021-08-11 12:24:06', '2021-10-24 07:13:57'),
(2, 'Tashkiliy-taktik', '2021-08-11 12:24:06', '2021-10-24 07:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `mavzus`
--

CREATE TABLE `mavzus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fanid` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maruza` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slayd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_28_102926_create_kafedras_table', 1),
(5, '2021_06_30_103404_create_fans_table', 1),
(6, '2021_07_02_101310_create_guruhs_table', 1),
(7, '2021_07_05_034936_create_studyyears_table', 1),
(8, '2021_07_05_050715_create_semestrs_table', 1),
(9, '2021_07_07_071928_create_comples_table', 1),
(10, '2021_07_22_135724_create_quizzes_table', 1),
(11, '2021_07_22_135854_create_questions_table', 1),
(12, '2021_10_24_064644_create_mavzus_table', 2),
(13, '2021_10_25_033509_create_joriynazorats_table', 3),
(14, '2021_10_28_105019_create_jnjurnals_table', 4),
(15, '2021_11_02_112541_create_oraliqnazorats_table', 5),
(16, '2021_11_03_164150_create_onjurnals_table', 6),
(17, '2021_11_03_164959_create_ongenerates_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ongenerates`
--

CREATE TABLE `ongenerates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) NOT NULL,
  `comples_id` bigint(20) NOT NULL,
  `onid` bigint(20) NOT NULL,
  `randomnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ongenerates`
--

INSERT INTO `ongenerates` (`id`, `uid`, `comples_id`, `onid`, `randomnum`, `status`, `created_at`, `updated_at`) VALUES
(36, 11, 7, 1, '1358187', NULL, '2021-11-06 10:28:07', '2021-11-06 10:28:07'),
(37, 10, 7, 1, '2504485', NULL, '2021-11-06 10:28:07', '2021-11-06 10:28:07'),
(38, 11, 7, 2, '8725765', NULL, '2021-11-06 10:28:20', '2021-11-06 10:28:20'),
(39, 10, 7, 2, '3365308', NULL, '2021-11-06 10:28:20', '2021-11-06 10:28:20'),
(40, 14, 8, 8, '5000450', 1, '2021-11-08 05:05:36', '2021-11-08 05:05:36'),
(41, 15, 9, 9, '3558665', 1, '2021-11-08 05:21:15', '2021-11-08 05:21:15'),
(42, 18, 10, 10, '9326056', 1, '2021-11-08 12:39:42', '2021-11-08 12:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `oraliqnazorats`
--

CREATE TABLE `oraliqnazorats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comples_id` bigint(20) NOT NULL,
  `status` decimal(2,0) NOT NULL,
  `status2` int(11) DEFAULT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oraliqnazorats`
--

INSERT INTO `oraliqnazorats` (`id`, `name`, `comples_id`, `status`, `status2`, `creator`, `deletor`, `created_at`, `updated_at`) VALUES
(8, 'ON1', 8, '2', 1, 'Administrator', NULL, '2021-11-08 05:04:06', '2021-11-08 07:54:02'),
(9, 'ON1', 9, '1', 1, 'Administrator', NULL, '2021-11-08 05:04:19', '2021-11-08 07:54:20'),
(10, 'ON1', 10, '2', 2, 'Administrator', NULL, '2021-11-08 12:39:02', '2021-11-08 12:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quizzes_id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quizzes_id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `creator_id`, `creator`, `created_at`, `updated_at`) VALUES
(1, 1, 'Savol 1', 'a', 'b', 'c', 'd', 'ans1', 2, NULL, '2021-08-13 07:17:40', '2021-08-13 07:17:40'),
(2, 1, 'Savol 2', 'A', 'B', 'C', 'D', 'ans2', 2, 'Iminov Abdurasul', '2021-08-13 07:20:19', '2021-08-13 07:20:19'),
(3, 1, 'Savol 3', 'A variant', 'B variant', 'C variant', 'D  variant', 'ans3', 2, 'Iminov Abdurasul', '2021-08-13 07:32:14', '2021-08-13 07:32:14'),
(4, 1, 'Displey ekrani satrlarga  va ustunlarga  ajratib chiqilgan bo’lib , har bir qator va ustun kesishgan joyda   ..... deb ataluvchi  juda kichik tasvir bo’laklari  joylashgan ', 'Nuqta ', 'yacheyka ', 'piksel', 'dyum', 'ans3', 2, 'Iminov Abdurasul', '2021-08-13 07:49:13', '2021-08-13 07:49:13'),
(5, 2, 'Savol test 1', 'A', 'B', 'C', 'D', 'ans1', 2, 'Iminov Abdurasul', '2021-08-15 07:32:50', '2021-08-15 07:32:50'),
(6, 2, 'vfvf', 'fv', 'fv', 'fv', 'ghghgh', 'ans2', 2, 'Iminov Abdurasul', '2021-08-15 07:35:37', '2021-08-15 07:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quizName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `kursid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `quizName`, `creator`, `creator_id`, `kursid`, `created_at`, `updated_at`) VALUES
(1, 'Axborot xavfsizligi', 'Iminov Abdurasul', 2, 1, '2021-08-13 01:06:00', '2021-08-13 01:06:00'),
(2, 'Axborot xavfsizligi', 'Iminov Abdurasul', 2, 5, '2021-08-15 07:28:38', '2021-08-15 07:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `semestrs`
--

CREATE TABLE `semestrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semestrName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studyyear_id` bigint(20) UNSIGNED NOT NULL,
  `is_current` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semestrs`
--

INSERT INTO `semestrs` (`id`, `semestrName`, `studyyear_id`, `is_current`, `created_at`, `updated_at`) VALUES
(5, '1-modul', 2, NULL, '2021-11-08 04:54:39', '2021-11-08 04:54:39'),
(6, '2-modul', 2, NULL, '2021-11-08 12:29:15', '2021-11-08 12:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `studyyears`
--

CREATE TABLE `studyyears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studyyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_current` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studyyears`
--

INSERT INTO `studyyears` (`id`, `studyyear`, `is_current`, `created_at`, `updated_at`) VALUES
(2, '2021-2022', NULL, '2021-11-08 04:54:24', '2021-11-08 04:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kafID` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guruh` int(11) DEFAULT NULL,
  `creator` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `kafID`, `name`, `email`, `role`, `guruh`, `creator`, `email_verified_at`, `password`, `remember_token`, `telegram_user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'Administrator', 'odil@mail.ru', '1', NULL, NULL, NULL, '$2y$10$qQkfMlOao.SqnGh0g2v6SeOGbctVniVS6srno0Mj/bgIXQIeGH.rW', NULL, 0, NULL, NULL),
(13, 4, 'Iminov Abdurasul Abdulatipovich', 'iminov@mail.ru', '2', NULL, 'Administrator', NULL, '$2y$10$g.4oIHjY8kqTSn6nIxenPut3prGw1rp2In84ERy1zNIic3MSYECuK', NULL, NULL, '2021-11-08 04:32:31', '2021-11-08 04:32:31'),
(14, NULL, 'Ivanov Ivan Ivanovich', 'ivan@mail.ru', '3', 4, 'Administrator', NULL, '$2y$10$c..q3RnNRJeB3Mjcsu/XvOg6O9uNTi6pl9T/6BDthWv95Gm7aaGL.', NULL, NULL, '2021-11-08 04:52:46', '2021-11-08 04:52:46'),
(15, NULL, 'Sergev Sergey Sergevich', 'sergey@mail.ru', '3', 5, 'Administrator', NULL, '$2y$10$4TAdaZI76558pbL5Yna7q.ocEpYekA34FSzGTg5RSWsB6wDwSuGQu', NULL, NULL, '2021-11-08 04:54:12', '2021-11-08 04:54:12'),
(16, NULL, 'Papov Yevgeniy Vladimirovich ', 'papov@mail.ru', '3', 5, 'Administrator', NULL, '$2y$10$CnXzzsuPERRoT5SJ6qyWf.a9X35R/mSXSIm0at6T9KJHS7zHiweDW', NULL, NULL, '2021-11-08 09:35:27', '2021-11-08 09:35:27'),
(17, 5, 'Adilov Bahrom', 'adilov@mail.ru', '2', NULL, 'Administrator', NULL, '$2y$10$lh/MW/zYtKJMuA1JJpu0dO0m2r9pVDI0ZPqCf55xO0t/FfY79QyUG', NULL, NULL, '2021-11-08 12:26:07', '2021-11-08 12:26:07'),
(18, NULL, 'Sharipov Ildar', 'sharipov@mail.ru', '3', 6, 'Administrator', NULL, '$2y$10$tZkO4kosu9GSOs.R8L7Yeu0dr.03s8RmEQs9T1fxl9RIkMitYrOWS', NULL, NULL, '2021-11-08 12:34:16', '2021-11-08 12:34:16');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_comples`
-- (See below for the actual view)
--
CREATE TABLE `v_comples` (
`id` bigint(20) unsigned
,`fan` bigint(20) unsigned
,`fanName` varchar(191)
,`sid` bigint(20) unsigned
,`studyyear` varchar(191)
,`semid` bigint(20) unsigned
,`semestrName` varchar(191)
,`fid` bigint(20) unsigned
,`fName` varchar(191)
,`uid` bigint(20) unsigned
,`name` varchar(191)
,`role` varchar(11)
,`kid` int(11)
,`kurs` varchar(25)
,`gid` bigint(20) unsigned
,`group` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_fantokafedras`
-- (See below for the actual view)
--
CREATE TABLE `v_fantokafedras` (
`id` bigint(20) unsigned
,`fName` varchar(191)
,`kafName` varchar(255)
,`kid` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_gennumbers`
-- (See below for the actual view)
--
CREATE TABLE `v_gennumbers` (
`id` bigint(20) unsigned
,`uid` bigint(20) unsigned
,`name` varchar(191)
,`randomnum` varchar(255)
,`comples_id` bigint(20)
,`onid` bigint(20)
,`gid` int(11)
,`group` varchar(191)
,`kid` int(11)
,`kurs` varchar(25)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jnjadval`
-- (See below for the actual view)
--
CREATE TABLE `v_jnjadval` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`jn` decimal(32,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jnjadval_new`
-- (See below for the actual view)
--
CREATE TABLE `v_jnjadval_new` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`comples_id` int(11)
,`jnid` bigint(20)
,`gid` int(11)
,`jn` decimal(32,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jnjurnals`
-- (See below for the actual view)
--
CREATE TABLE `v_jnjurnals` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`gid` int(11)
,`group` varchar(191)
,`kid` int(11)
,`kurs` varchar(25)
,`jnjurnalid` bigint(20) unsigned
,`jnid` bigint(20) unsigned
,`jnName` varchar(255)
,`baho` decimal(10,2)
,`comples_id` int(11)
,`status` int(11)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_joriynazorat`
-- (See below for the actual view)
--
CREATE TABLE `v_joriynazorat` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`comples_id` bigint(20) unsigned
,`fanName` varchar(191)
,`sid` bigint(20) unsigned
,`studyyear` varchar(191)
,`semid` bigint(20) unsigned
,`semestrName` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_joriysumpocomples`
-- (See below for the actual view)
--
CREATE TABLE `v_joriysumpocomples` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`gid` int(11)
,`comples_id` int(11)
,`jn` decimal(32,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mavzu`
-- (See below for the actual view)
--
CREATE TABLE `v_mavzu` (
`id` bigint(20) unsigned
,`fanid` bigint(20)
,`fanName` varchar(191)
,`title` varchar(255)
,`maruza` varchar(191)
,`slayd` varchar(191)
,`video` varchar(191)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ongenerate`
-- (See below for the actual view)
--
CREATE TABLE `v_ongenerate` (
`id` bigint(20) unsigned
,`sid` bigint(20) unsigned
,`name` varchar(191)
,`randomnum` varchar(255)
,`gid` int(11)
,`group` varchar(191)
,`kid` int(11)
,`kurs` varchar(25)
,`comples_id` bigint(20)
,`onid` bigint(20)
,`status` int(11)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_onjadval`
-- (See below for the actual view)
--
CREATE TABLE `v_onjadval` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_onjadval_new`
-- (See below for the actual view)
--
CREATE TABLE `v_onjadval_new` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_onjurnals`
-- (See below for the actual view)
--
CREATE TABLE `v_onjurnals` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_oraliqnazorat`
-- (See below for the actual view)
--
CREATE TABLE `v_oraliqnazorat` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`comples_id` bigint(20)
,`fan` bigint(20) unsigned
,`fanName` varchar(191)
,`sid` bigint(20) unsigned
,`studyyear` varchar(191)
,`semid` bigint(20) unsigned
,`semestrName` varchar(191)
,`status` decimal(2,0)
,`status2` int(11)
,`creator` varchar(191)
,`deletor` varchar(191)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_questions`
-- (See below for the actual view)
--
CREATE TABLE `v_questions` (
`quizName` varchar(191)
,`kursid` int(11)
,`id` bigint(20) unsigned
,`quizzes_id` bigint(20) unsigned
,`question` text
,`ans1` varchar(191)
,`ans2` varchar(191)
,`ans3` varchar(191)
,`ans4` varchar(191)
,`ans5` varchar(191)
,`creator` varchar(191)
,`creator_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_quiz`
-- (See below for the actual view)
--
CREATE TABLE `v_quiz` (
`id` bigint(20) unsigned
,`quizName` varchar(191)
,`kursid` bigint(20) unsigned
,`fanName` varchar(191)
,`fName` varchar(191)
,`studyyear` varchar(191)
,`semestrName` varchar(191)
,`kurs` varchar(25)
,`creator_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_quiz_full`
-- (See below for the actual view)
--
CREATE TABLE `v_quiz_full` (
`id` bigint(20) unsigned
,`question` text
,`ans1` varchar(191)
,`ans2` varchar(191)
,`ans3` varchar(191)
,`ans4` varchar(191)
,`ans5` varchar(191)
,`creator_id` int(11)
,`creator` varchar(191)
,`quizzes_id` bigint(20) unsigned
,`quizName` varchar(191)
,`cid` bigint(20) unsigned
,`fanName` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_semestrs`
-- (See below for the actual view)
--
CREATE TABLE `v_semestrs` (
`id` bigint(20) unsigned
,`semestrName` varchar(191)
,`studyyear` varchar(191)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_students`
-- (See below for the actual view)
--
CREATE TABLE `v_students` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`email` varchar(191)
,`password` varchar(191)
,`gid` int(11)
,`kid` int(11)
,`kurs` varchar(25)
,`group` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_teachers`
-- (See below for the actual view)
--
CREATE TABLE `v_teachers` (
`id` bigint(20) unsigned
,`kafid` int(11)
,`name` varchar(191)
,`email` varchar(191)
,`role` varchar(11)
,`email_verified_at` timestamp
,`password` varchar(191)
,`remember_token` varchar(100)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_usertokafedra`
-- (See below for the actual view)
--
CREATE TABLE `v_usertokafedra` (
`id` bigint(20) unsigned
,`kafid` int(11)
,`name` varchar(191)
,`email` varchar(191)
,`role` varchar(11)
,`kafName` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `v_comples`
--
DROP TABLE IF EXISTS `v_comples`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_comples`  AS SELECT `c`.`id` AS `id`, `c`.`fan` AS `fan`, `c`.`fanName` AS `fanName`, `sy`.`id` AS `sid`, `sy`.`studyyear` AS `studyyear`, `s`.`id` AS `semid`, `s`.`semestrName` AS `semestrName`, `f`.`id` AS `fid`, `f`.`fName` AS `fName`, `t`.`id` AS `uid`, `t`.`name` AS `name`, `t`.`role` AS `role`, `k`.`id` AS `kid`, `k`.`kurs` AS `kurs`, `g`.`id` AS `gid`, `g`.`group` AS `group` FROM ((((((`comples` `c` left join `studyyears` `sy` on(`c`.`studyyear` = `sy`.`id`)) left join `semestrs` `s` on(`c`.`semestr` = `s`.`id`)) left join `kurs` `k` on(`c`.`kurs` = `k`.`id`)) left join `guruhs` `g` on(`c`.`guruh` = `g`.`id`)) left join `v_usertokafedra` `t` on(`c`.`teacher` = `t`.`id`)) left join `fans` `f` on(`c`.`fan` = `f`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_fantokafedras`
--
DROP TABLE IF EXISTS `v_fantokafedras`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fantokafedras`  AS SELECT `f`.`id` AS `id`, `f`.`fName` AS `fName`, `k`.`kafName` AS `kafName`, `k`.`id` AS `kid` FROM (`fans` `f` left join `kafedras` `k` on(`f`.`kafId` = `k`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_gennumbers`
--
DROP TABLE IF EXISTS `v_gennumbers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_gennumbers`  AS SELECT `o`.`id` AS `id`, `u`.`id` AS `uid`, `u`.`name` AS `name`, `o`.`randomnum` AS `randomnum`, `o`.`comples_id` AS `comples_id`, `o`.`onid` AS `onid`, `u`.`gid` AS `gid`, `u`.`group` AS `group`, `u`.`kid` AS `kid`, `u`.`kurs` AS `kurs`, `o`.`created_at` AS `created_at`, `o`.`updated_at` AS `updated_at` FROM (`v_students` `u` left join `ongenerates` `o` on(`u`.`id` = `o`.`uid`)) ORDER BY `o`.`randomnum` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_jnjadval`
--
DROP TABLE IF EXISTS `v_jnjadval`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jnjadval`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, sum(ifnull(`j`.`baho`,0)) AS `jn` FROM (`jnjurnals` `j` left join `v_students` `s` on(`j`.`uid` = `s`.`id`)) GROUP BY `s`.`id`, `s`.`name` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_jnjadval_new`
--
DROP TABLE IF EXISTS `v_jnjadval_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jnjadval_new`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, `j`.`comples_id` AS `comples_id`, `j`.`jnid` AS `jnid`, `s`.`gid` AS `gid`, sum(ifnull(`j`.`baho`,0)) AS `jn` FROM ((`jnjurnals` `j` left join `v_students` `s` on(`j`.`uid` = `s`.`id`)) left join `v_comples` `c` on(`j`.`comples_id` = `c`.`id`)) GROUP BY `s`.`id`, `s`.`name`, `j`.`comples_id`, `j`.`jnid` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_jnjurnals`
--
DROP TABLE IF EXISTS `v_jnjurnals`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jnjurnals`  AS SELECT `u`.`id` AS `id`, `u`.`name` AS `name`, `u`.`gid` AS `gid`, `u`.`group` AS `group`, `u`.`kid` AS `kid`, `u`.`kurs` AS `kurs`, `j`.`id` AS `jnjurnalid`, `jn`.`id` AS `jnid`, `jn`.`name` AS `jnName`, `j`.`baho` AS `baho`, `j`.`comples_id` AS `comples_id`, `j`.`status` AS `status`, `j`.`created_at` AS `created_at` FROM ((`v_students` `u` left join `jnjurnals` `j` on(`u`.`id` = `j`.`uid`)) left join `joriynazorats` `jn` on(`j`.`jnid` = `jn`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_joriynazorat`
--
DROP TABLE IF EXISTS `v_joriynazorat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_joriynazorat`  AS SELECT `j`.`id` AS `id`, `j`.`name` AS `name`, `c`.`id` AS `comples_id`, `c`.`fanName` AS `fanName`, `c`.`sid` AS `sid`, `c`.`studyyear` AS `studyyear`, `c`.`semid` AS `semid`, `c`.`semestrName` AS `semestrName` FROM (`joriynazorats` `j` left join `v_comples` `c` on(`j`.`comples_id` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_joriysumpocomples`
--
DROP TABLE IF EXISTS `v_joriysumpocomples`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_joriysumpocomples`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, `s`.`gid` AS `gid`, `j`.`comples_id` AS `comples_id`, sum(ifnull(`j`.`baho`,0)) AS `jn` FROM (`jnjurnals` `j` left join `v_students` `s` on(`j`.`uid` = `s`.`id`)) GROUP BY `s`.`id`, `s`.`name`, `s`.`gid`, `j`.`comples_id` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_mavzu`
--
DROP TABLE IF EXISTS `v_mavzu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mavzu`  AS SELECT `m`.`id` AS `id`, `m`.`fanid` AS `fanid`, `c`.`fanName` AS `fanName`, `m`.`title` AS `title`, `m`.`maruza` AS `maruza`, `m`.`slayd` AS `slayd`, `m`.`video` AS `video`, `m`.`created_at` AS `created_at` FROM (`mavzus` `m` left join `v_comples` `c` on(`m`.`fanid` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_ongenerate`
--
DROP TABLE IF EXISTS `v_ongenerate`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ongenerate`  AS SELECT `o`.`id` AS `id`, `u`.`id` AS `sid`, `u`.`name` AS `name`, `o`.`randomnum` AS `randomnum`, `u`.`gid` AS `gid`, `u`.`group` AS `group`, `u`.`kid` AS `kid`, `u`.`kurs` AS `kurs`, `o`.`comples_id` AS `comples_id`, `o`.`onid` AS `onid`, `o`.`status` AS `status`, `o`.`created_at` AS `created_at`, `o`.`updated_at` AS `updated_at` FROM (`v_students` `u` left join `ongenerates` `o` on(`u`.`id` = `o`.`uid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_onjadval`
--
DROP TABLE IF EXISTS `v_onjadval`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_onjadval`  AS SELECT `onjur`.`id` AS `id`, `onjur`.`uid` AS `uid`, `s`.`name` AS `name`, sum(ifnull(`onjur`.`baho`,0)) AS `onsum` FROM (`onjurnals` `onjur` left join `v_students` `s` on(`onjur`.`uid` = `s`.`id`)) GROUP BY `onjur`.`id`, `onjur`.`uid`, `s`.`name` ;

-- --------------------------------------------------------

--
-- Structure for view `v_onjadval_new`
--
DROP TABLE IF EXISTS `v_onjadval_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_onjadval_new`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, `o`.`comples_id` AS `comples_id`, `o`.`onid` AS `onid`, `s`.`gid` AS `gid`, sum(ifnull(`o`.`baho`,0)) AS `baho` FROM (`onjurnals` `o` left join `v_students` `s` on(`o`.`uid` = `s`.`id`)) GROUP BY `s`.`id`, `s`.`name`, `o`.`comples_id`, `o`.`onid`, `s`.`gid` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_onjurnals`
--
DROP TABLE IF EXISTS `v_onjurnals`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_onjurnals`  AS SELECT `g`.`sid` AS `sid`, `g`.`name` AS `name`, `g`.`randomnum` AS `randomnum`, `o`.`baho` AS `baho`, `o`.`onid` AS `onid`, `n`.`name` AS `onName`, `g`.`comples_id` AS `comples_id`, `g`.`gid` AS `gid`, `g`.`group` AS `group`, `g`.`kid` AS `kid`, `g`.`kurs` AS `kurs` FROM ((`v_ongenerate` `g` left join `onjurnals` `o` on(`g`.`sid` = `o`.`uid` and `g`.`onid` = `o`.`onid`)) left join `oraliqnazorats` `n` on(`o`.`onid` = `n`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_oraliqnazorat`
--
DROP TABLE IF EXISTS `v_oraliqnazorat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_oraliqnazorat`  AS SELECT `o`.`id` AS `id`, `o`.`name` AS `name`, `o`.`comples_id` AS `comples_id`, `c`.`fan` AS `fan`, `c`.`fanName` AS `fanName`, `c`.`sid` AS `sid`, `c`.`studyyear` AS `studyyear`, `c`.`semid` AS `semid`, `c`.`semestrName` AS `semestrName`, `o`.`status` AS `status`, `o`.`status2` AS `status2`, `o`.`creator` AS `creator`, `o`.`deletor` AS `deletor`, `o`.`created_at` AS `created_at`, `o`.`updated_at` AS `updated_at` FROM (`oraliqnazorats` `o` left join `v_comples` `c` on(`o`.`comples_id` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_questions`
--
DROP TABLE IF EXISTS `v_questions`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_questions`  AS SELECT `qu`.`quizName` AS `quizName`, `qu`.`kursid` AS `kursid`, `q`.`id` AS `id`, `q`.`quizzes_id` AS `quizzes_id`, `q`.`question` AS `question`, `q`.`ans1` AS `ans1`, `q`.`ans2` AS `ans2`, `q`.`ans3` AS `ans3`, `q`.`ans4` AS `ans4`, `q`.`ans5` AS `ans5`, `q`.`creator` AS `creator`, `q`.`creator_id` AS `creator_id` FROM (`questions` `q` left join `quizzes` `qu` on(`q`.`quizzes_id` = `qu`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_quiz`
--
DROP TABLE IF EXISTS `v_quiz`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_quiz`  AS SELECT `q`.`id` AS `id`, `q`.`quizName` AS `quizName`, `k`.`id` AS `kursid`, `k`.`fanName` AS `fanName`, `k`.`fName` AS `fName`, `k`.`studyyear` AS `studyyear`, `k`.`semestrName` AS `semestrName`, `k`.`kurs` AS `kurs`, `q`.`creator_id` AS `creator_id` FROM (`quizzes` `q` left join `v_comples` `k` on(`q`.`kursid` = `k`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_quiz_full`
--
DROP TABLE IF EXISTS `v_quiz_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_quiz_full`  AS SELECT `q`.`id` AS `id`, `q`.`question` AS `question`, `q`.`ans1` AS `ans1`, `q`.`ans2` AS `ans2`, `q`.`ans3` AS `ans3`, `q`.`ans4` AS `ans4`, `q`.`ans5` AS `ans5`, `q`.`creator_id` AS `creator_id`, `q`.`creator` AS `creator`, `q`.`quizzes_id` AS `quizzes_id`, `qu`.`quizName` AS `quizName`, `c`.`id` AS `cid`, `c`.`fanName` AS `fanName` FROM ((`questions` `q` left join `quizzes` `qu` on(`q`.`quizzes_id` = `qu`.`id`)) left join `comples` `c` on(`qu`.`kursid` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_semestrs`
--
DROP TABLE IF EXISTS `v_semestrs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_semestrs`  AS SELECT `s`.`id` AS `id`, `s`.`semestrName` AS `semestrName`, `sy`.`studyyear` AS `studyyear`, `s`.`created_at` AS `created_at`, `s`.`updated_at` AS `updated_at` FROM (`semestrs` `s` left join `studyyears` `sy` on(`s`.`studyyear_id` = `sy`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_students`
--
DROP TABLE IF EXISTS `v_students`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_students`  AS SELECT `u`.`id` AS `id`, `u`.`name` AS `name`, `u`.`email` AS `email`, `u`.`password` AS `password`, `u`.`guruh` AS `gid`, `k`.`id` AS `kid`, `k`.`kurs` AS `kurs`, `g`.`group` AS `group` FROM ((`users` `u` left join `guruhs` `g` on(`u`.`guruh` = `g`.`id`)) left join `kurs` `k` on(`g`.`kurs` = `k`.`id`)) WHERE `u`.`role` = 3 ORDER BY `u`.`id` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `v_teachers`
--
DROP TABLE IF EXISTS `v_teachers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_teachers`  AS SELECT `users`.`id` AS `id`, `users`.`kafID` AS `kafid`, `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`role` AS `role`, `users`.`email_verified_at` AS `email_verified_at`, `users`.`password` AS `password`, `users`.`remember_token` AS `remember_token`, `users`.`created_at` AS `created_at`, `users`.`updated_at` AS `updated_at` FROM `users` WHERE `users`.`role` = 2 ;

-- --------------------------------------------------------

--
-- Structure for view `v_usertokafedra`
--
DROP TABLE IF EXISTS `v_usertokafedra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usertokafedra`  AS SELECT `u`.`id` AS `id`, `u`.`kafID` AS `kafid`, `u`.`name` AS `name`, `u`.`email` AS `email`, `u`.`role` AS `role`, `k`.`kafName` AS `kafName` FROM (`users` `u` left join `kafedras` `k` on(`u`.`kafID` = `k`.`id`)) WHERE `u`.`role` = 2 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comples`
--
ALTER TABLE `comples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comples_studyyear_foreign` (`studyyear`),
  ADD KEY `comples_semestr_foreign` (`semestr`),
  ADD KEY `comples_kurs_foreign` (`kurs`),
  ADD KEY `comples_guruh_foreign` (`guruh`),
  ADD KEY `comples_teacher_foreign` (`teacher`),
  ADD KEY `comples_fan_foreign` (`fan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fans_fname_unique` (`fName`);

--
-- Indexes for table `guruhs`
--
ALTER TABLE `guruhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guruhs_group_unique` (`group`);

--
-- Indexes for table `jnjurnals`
--
ALTER TABLE `jnjurnals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joriynazorats`
--
ALTER TABLE `joriynazorats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kafedras`
--
ALTER TABLE `kafedras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mavzus`
--
ALTER TABLE `mavzus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongenerates`
--
ALTER TABLE `ongenerates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oraliqnazorats`
--
ALTER TABLE `oraliqnazorats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quizzes_id_foreign` (`quizzes_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semestrs`
--
ALTER TABLE `semestrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semestrs_studyyearid_foreign` (`studyyear_id`);

--
-- Indexes for table `studyyears`
--
ALTER TABLE `studyyears`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studyyears_studyyear_unique` (`studyyear`);

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
-- AUTO_INCREMENT for table `comples`
--
ALTER TABLE `comples`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fans`
--
ALTER TABLE `fans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guruhs`
--
ALTER TABLE `guruhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jnjurnals`
--
ALTER TABLE `jnjurnals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `joriynazorats`
--
ALTER TABLE `joriynazorats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kafedras`
--
ALTER TABLE `kafedras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mavzus`
--
ALTER TABLE `mavzus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ongenerates`
--
ALTER TABLE `ongenerates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `oraliqnazorats`
--
ALTER TABLE `oraliqnazorats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semestrs`
--
ALTER TABLE `semestrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studyyears`
--
ALTER TABLE `studyyears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
