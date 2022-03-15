-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 01:27 PM
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
  `fanName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comples`
--

INSERT INTO `comples` (`id`, `studyyear`, `semestr`, `kurs`, `guruh`, `teacher`, `fan`, `fanName`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 2, 2, 1, 'AX', '2021-11-05 04:45:51', '2021-11-05 04:45:51'),
(2, 1, 1, 1, 3, 4, 2, 'Dastlabki tergov 1m2021', '2021-11-07 05:36:20', '2021-11-07 05:36:20'),
(3, 1, 1, 2, 2, 2, 3, 'Tizimli tahlil', '2021-11-10 11:56:37', '2021-11-10 11:56:37'),
(4, 1, 1, 1, 5, 19, 4, 'IIOBF1M', '2021-11-10 12:48:36', '2021-11-10 12:48:36'),
(5, 1, 1, 1, 5, 20, 5, 'MPK1M', '2021-11-04 13:56:33', '2021-11-04 13:56:33');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Axborot xavfsizligi', 1, '2021-11-05 04:25:29', '2021-11-05 04:30:09'),
(2, 'Tergov', 2, '2021-11-07 05:34:10', '2021-11-07 05:34:10'),
(3, 'Tizimli tahlil', 1, '2021-11-10 11:56:11', '2021-11-10 11:56:11'),
(4, 'IIOning boshqaruv faoliyati', 3, '2021-11-10 12:47:01', '2021-11-10 12:47:01'),
(5, 'Muomila psixologiyasi va konfilktologiya', 3, '2021-11-04 13:54:53', '2021-11-04 13:54:53');

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
(2, '201-21', 2, '2021-11-05 04:02:09', '2021-11-07 05:34:51'),
(3, '101-21', 1, '2021-11-07 05:34:59', '2021-11-07 05:34:59'),
(4, '202-21', 2, '2021-11-10 08:45:22', '2021-11-10 08:45:22'),
(5, '1', 1, '2021-11-10 12:33:13', '2021-11-10 12:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `jnjurnals`
--

CREATE TABLE `jnjurnals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `jnid` bigint(20) NOT NULL,
  `baho` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `status2` int(11) DEFAULT NULL,
  `comple_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jnjurnals`
--

INSERT INTO `jnjurnals` (`id`, `user_id`, `jnid`, `baho`, `created_at`, `updated_at`, `status`, `status2`, `comple_id`) VALUES
(58, 18, 20, '1.00', '2021-11-24 05:58:12', '2021-11-04 12:21:01', NULL, NULL, 4),
(59, 17, 20, '1.00', '2021-11-24 05:59:56', '2021-11-24 05:59:56', NULL, NULL, 4),
(60, 16, 20, '1.00', '2021-11-24 06:00:02', '2021-11-24 06:00:02', NULL, NULL, 4),
(61, 15, 20, '1.00', '2021-11-24 06:00:05', '2021-11-24 06:00:05', NULL, NULL, 4),
(62, 14, 20, '1.00', '2021-11-24 06:00:09', '2021-11-24 06:00:09', NULL, NULL, 4),
(63, 13, 20, '1.00', '2021-11-24 06:00:14', '2021-11-04 12:18:30', NULL, NULL, 4),
(64, 12, 20, '1.00', '2021-11-24 06:00:20', '2021-11-24 06:00:20', NULL, NULL, 4),
(65, 11, 20, '1.00', '2021-11-24 06:00:24', '2021-11-24 06:00:24', NULL, NULL, 4),
(66, 10, 20, '1.00', '2021-11-24 06:00:28', '2021-11-24 06:00:28', NULL, NULL, 4),
(67, 9, 20, '1.00', '2021-11-24 06:00:31', '2021-11-24 06:00:31', NULL, NULL, 4),
(68, 8, 20, '1.00', '2021-11-24 06:00:33', '2021-11-04 12:18:47', NULL, NULL, 4),
(69, 18, 21, '2.00', '2021-11-24 06:54:44', '2021-11-24 06:54:44', NULL, NULL, 4),
(70, 17, 21, '2.00', '2021-11-24 06:54:53', '2021-11-24 06:54:53', NULL, NULL, 4),
(71, 16, 21, '2.00', '2021-11-24 06:54:56', '2021-11-24 06:54:56', NULL, NULL, 4),
(72, 15, 21, '2.00', '2021-11-24 06:54:59', '2021-11-24 06:54:59', NULL, NULL, 4),
(73, 14, 21, '2.00', '2021-11-24 06:55:03', '2021-11-24 06:55:03', NULL, NULL, 4),
(74, 13, 21, '2.00', '2021-11-24 06:55:07', '2021-11-24 06:55:07', NULL, NULL, 4),
(75, 12, 21, '2.00', '2021-11-24 06:55:11', '2021-11-24 06:55:11', NULL, NULL, 4),
(76, 11, 21, '2.00', '2021-11-24 06:55:13', '2021-11-24 06:55:13', NULL, NULL, 4),
(77, 10, 21, '2.00', '2021-11-24 06:55:17', '2021-11-24 06:55:17', NULL, NULL, 4),
(78, 9, 21, '2.00', '2021-11-24 06:55:19', '2021-11-24 06:55:19', NULL, NULL, 4),
(79, 8, 21, '2.00', '2021-11-24 06:55:22', '2021-11-24 06:55:22', NULL, NULL, 4),
(80, 18, 22, '3.00', '2021-11-24 07:07:55', '2021-11-24 07:07:55', NULL, NULL, 4),
(81, 17, 22, '3.00', '2021-11-24 07:07:59', '2021-11-04 12:20:43', NULL, NULL, 4),
(82, 16, 22, '3.00', '2021-11-24 07:08:01', '2021-11-24 07:08:01', NULL, NULL, 4),
(83, 15, 22, '3.00', '2021-11-24 07:08:05', '2021-11-24 07:08:05', NULL, NULL, 4),
(84, 14, 22, '3.00', '2021-11-24 07:08:08', '2021-11-24 07:08:08', NULL, NULL, 4),
(85, 13, 22, '3.00', '2021-11-24 07:08:10', '2021-11-24 07:08:10', NULL, NULL, 4),
(86, 12, 22, '3.00', '2021-11-24 07:08:14', '2021-11-24 07:08:14', NULL, NULL, 4),
(87, 11, 22, '3.00', '2021-11-24 07:08:17', '2021-11-24 07:08:17', NULL, NULL, 4),
(88, 10, 22, '3.00', '2021-11-24 07:08:20', '2021-11-24 07:08:20', NULL, NULL, 4),
(89, 9, 22, '3.00', '2021-11-24 07:08:23', '2021-11-24 07:08:23', NULL, NULL, 4),
(90, 8, 22, '3.00', '2021-11-24 07:08:26', '2021-11-24 07:08:26', NULL, NULL, 4),
(91, 18, 23, '4.00', '2021-11-04 13:48:48', '2021-11-04 13:51:59', NULL, NULL, 4),
(92, 17, 23, '4.00', '2021-11-04 13:48:55', '2021-11-04 13:48:55', NULL, NULL, 4),
(93, 16, 23, '4.00', '2021-11-04 13:48:58', '2021-11-04 13:48:58', NULL, NULL, 4),
(94, 15, 23, '4.00', '2021-11-04 13:49:00', '2021-11-04 13:49:00', NULL, NULL, 4),
(95, 14, 23, '4.00', '2021-11-04 13:49:04', '2021-11-04 13:49:04', NULL, NULL, 4),
(96, 13, 23, '4.00', '2021-11-04 13:49:07', '2021-11-04 13:49:07', NULL, NULL, 4),
(97, 12, 23, '4.00', '2021-11-04 13:49:09', '2021-11-04 13:49:09', NULL, NULL, 4),
(98, 11, 23, '4.00', '2021-11-04 13:49:14', '2021-11-04 13:49:14', NULL, NULL, 4),
(99, 10, 23, '4.00', '2021-11-04 13:49:26', '2021-11-04 13:49:26', NULL, NULL, 4),
(100, 9, 23, '4.00', '2021-11-04 13:49:30', '2021-11-04 13:49:30', NULL, NULL, 4),
(101, 8, 23, '4.00', '2021-11-04 13:49:33', '2021-11-04 13:49:33', NULL, NULL, 4),
(102, 18, 24, '5.00', '2021-11-04 13:52:59', '2021-11-04 13:52:59', NULL, NULL, 4),
(103, 17, 24, '5.00', '2021-11-04 13:53:02', '2021-11-04 13:53:02', NULL, NULL, 4),
(104, 16, 24, '5.00', '2021-11-04 13:53:04', '2021-11-04 13:53:04', NULL, NULL, 4),
(105, 15, 24, '5.00', '2021-11-04 13:53:07', '2021-11-04 13:53:07', NULL, NULL, 4),
(106, 14, 24, '5.00', '2021-11-04 13:53:10', '2021-11-04 13:53:10', NULL, NULL, 4),
(107, 13, 24, '5.00', '2021-11-04 13:53:14', '2021-11-04 13:53:14', NULL, NULL, 4),
(108, 12, 24, '5.00', '2021-11-04 13:53:17', '2021-11-04 13:53:17', NULL, NULL, 4),
(109, 11, 24, '5.00', '2021-11-04 13:53:20', '2021-11-04 13:53:20', NULL, NULL, 4),
(110, 10, 24, '5.00', '2021-11-04 13:53:25', '2021-11-04 13:53:25', NULL, NULL, 4),
(111, 9, 24, '5.00', '2021-11-04 13:53:28', '2021-11-04 13:53:28', NULL, NULL, 4),
(112, 8, 24, '5.00', '2021-11-04 13:53:31', '2021-11-04 13:53:31', NULL, NULL, 4),
(113, 18, 25, '1.00', '2021-11-05 10:55:49', '2021-11-05 10:55:49', NULL, NULL, 5),
(114, 17, 25, '1.00', '2021-11-05 10:55:52', '2021-11-05 10:55:52', NULL, NULL, 5),
(115, 16, 25, '1.00', '2021-11-05 10:55:55', '2021-11-05 10:55:55', NULL, NULL, 5),
(116, 15, 25, '1.00', '2021-11-05 10:55:57', '2021-11-05 10:55:57', NULL, NULL, 5),
(117, 14, 25, '1.00', '2021-11-05 10:56:02', '2021-11-05 10:56:02', NULL, NULL, 5),
(118, 13, 25, '1.00', '2021-11-05 10:56:05', '2021-11-05 10:56:05', NULL, NULL, 5),
(119, 12, 25, '1.00', '2021-11-05 10:56:09', '2021-11-05 10:56:09', NULL, NULL, 5),
(120, 11, 25, '1.00', '2021-11-05 10:56:12', '2021-11-05 10:56:12', NULL, NULL, 5),
(121, 10, 25, '1.00', '2021-11-05 10:56:15', '2021-11-05 10:56:15', NULL, NULL, 5),
(122, 9, 25, '1.00', '2021-11-05 10:56:18', '2021-11-05 10:56:18', NULL, NULL, 5),
(123, 8, 25, '1.00', '2021-11-05 10:56:21', '2021-11-05 10:56:26', NULL, NULL, 5),
(124, 18, 26, '2.00', '2021-11-05 10:59:39', '2021-11-05 10:59:39', NULL, NULL, 5),
(125, 17, 26, '2.00', '2021-11-05 10:59:41', '2021-11-05 10:59:41', NULL, NULL, 5),
(126, 16, 26, '2.00', '2021-11-05 10:59:44', '2021-11-05 10:59:44', NULL, NULL, 5),
(127, 15, 26, '2.00', '2021-11-05 10:59:46', '2021-11-05 10:59:46', NULL, NULL, 5),
(128, 14, 26, '2.00', '2021-11-05 10:59:49', '2021-11-05 10:59:49', NULL, NULL, 5),
(129, 13, 26, '2.00', '2021-11-05 10:59:52', '2021-11-05 10:59:52', NULL, NULL, 5),
(130, 12, 26, '2.00', '2021-11-05 10:59:54', '2021-11-05 10:59:54', NULL, NULL, 5),
(131, 11, 26, '2.00', '2021-11-05 10:59:57', '2021-11-05 10:59:57', NULL, NULL, 5),
(132, 10, 26, '2.00', '2021-11-05 11:00:02', '2021-11-05 11:00:02', NULL, NULL, 5),
(133, 9, 26, '2.00', '2021-11-05 11:00:11', '2021-11-05 11:00:11', NULL, NULL, 5),
(134, 8, 26, '2.00', '2021-11-05 11:00:14', '2021-11-05 11:00:14', NULL, NULL, 5);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joriynazorats`
--

INSERT INTO `joriynazorats` (`id`, `name`, `comples_id`, `created_at`, `updated_at`) VALUES
(20, 'JN1', 4, '2021-11-24 05:57:59', '2021-11-24 05:57:59'),
(21, 'JN2', 4, '2021-11-24 06:54:34', '2021-11-24 06:54:34'),
(22, 'JN3', 4, '2021-11-24 07:07:46', '2021-11-24 07:07:46'),
(23, 'JN4', 4, '2021-11-04 13:48:12', '2021-11-04 13:48:12'),
(24, 'JN5', 4, '2021-11-04 13:52:47', '2021-11-04 13:52:47'),
(25, 'JN1', 5, '2021-11-05 10:55:34', '2021-11-05 10:55:34'),
(26, 'JN2', 5, '2021-11-05 10:59:29', '2021-11-05 10:59:29');

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
(1, 'Axborot tehnologiyalari kafedrasi', 'Administrator', NULL, '2021-11-04 13:25:29', '2021-11-04 13:25:40'),
(2, 'Dastlabki tergov va kriminalistika kafedrasi', 'Administrator', NULL, '2021-11-07 05:33:55', '2021-11-07 05:33:55'),
(3, 'Boshqaruv fanlari kafedrasi', 'Administrator', NULL, '2021-11-10 12:42:04', '2021-11-10 12:42:04'),
(4, 'Huquqiy fanlar kafedrasi', 'Administrator', NULL, '2021-11-10 12:42:17', '2021-11-10 12:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE `kurs` (
  `id` int(11) NOT NULL,
  `kurs` varchar(252) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`id`, `kurs`, `created_at`, `updated_at`) VALUES
(1, 'Tashkiliy-strategik boshqaruv', '2021-11-05 04:01:53', NULL),
(2, 'Tashkiliy-taktik boshqaruv', '2021-11-05 04:01:53', NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(12, '2021_10_24_064644_create_mavzus_table', 1),
(13, '2021_10_25_033509_create_joriynazorats_table', 1),
(14, '2021_10_28_105019_create_jnjurnals_table', 1),
(15, '2021_11_02_112541_create_oraliqnazorats_table', 1),
(16, '2021_11_03_164150_create_onjurnals_table', 1),
(17, '2021_11_03_164959_create_ongenerates_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ongenerates`
--

INSERT INTO `ongenerates` (`id`, `uid`, `comples_id`, `onid`, `randomnum`, `created_at`, `updated_at`, `status`) VALUES
(45, 8, 5, 7, '6539195', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(44, 9, 5, 7, '2833446', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(43, 10, 5, 7, '1852469', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(42, 11, 5, 7, '6919502', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(41, 12, 5, 7, '1411865', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(40, 13, 5, 7, '2607697', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(39, 14, 5, 7, '1558287', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(38, 15, 5, 7, '5887487', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(37, 16, 5, 7, '3193345', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(36, 17, 5, 7, '6601962', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2),
(35, 18, 5, 7, '8669909', '2021-11-05 10:54:02', '2021-11-05 10:54:02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `onjurnals`
--

CREATE TABLE `onjurnals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `comples_id` bigint(20) NOT NULL,
  `onid` bigint(20) NOT NULL,
  `baho` decimal(5,2) NOT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `status2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onjurnals`
--

INSERT INTO `onjurnals` (`id`, `user_id`, `comples_id`, `onid`, `baho`, `creator`, `deletor`, `status`, `status2`, `created_at`, `updated_at`) VALUES
(67, 11, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:55:01', '2021-11-05 10:55:01'),
(66, 10, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:57', '2021-11-05 10:54:57'),
(65, 8, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:55', '2021-11-05 10:54:55'),
(64, 14, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:52', '2021-11-05 10:54:52'),
(63, 18, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:50', '2021-11-05 10:54:50'),
(62, 15, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:47', '2021-11-05 10:54:47'),
(61, 17, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:44', '2021-11-05 10:54:44'),
(60, 9, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:41', '2021-11-05 10:54:41'),
(59, 13, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:36', '2021-11-05 10:54:36'),
(58, 16, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:32', '2021-11-05 10:54:32'),
(57, 12, 5, 7, '100.00', '20', NULL, NULL, 2, '2021-11-05 10:54:26', '2021-11-05 10:54:26');

--
-- Triggers `onjurnals`
--
DELIMITER $$
CREATE TRIGGER `trg_change_ongen_status` AFTER INSERT ON `onjurnals` FOR EACH ROW UPDATE ongenerates SET status=2
WHERE  uid=new.user_id and onid=new.onid and comples_id=new.comples_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `oraliqnazorats`
--

CREATE TABLE `oraliqnazorats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comples_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `status2` int(11) DEFAULT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oraliqnazorats`
--

INSERT INTO `oraliqnazorats` (`id`, `name`, `comples_id`, `status`, `status2`, `creator`, `deletor`, `created_at`, `updated_at`) VALUES
(7, 'ON', 5, 2, 2, 'Administrator', NULL, '2021-11-05 10:53:47', '2021-11-05 11:08:22');

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quizzes_id` bigint(20) UNSIGNED NOT NULL,
  `questions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quizName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semestrs`
--

CREATE TABLE `semestrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semestrName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studyyear_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semestrs`
--

INSERT INTO `semestrs` (`id`, `semestrName`, `studyyear_id`, `created_at`, `updated_at`) VALUES
(1, '1-modul', 1, '2021-11-05 04:39:25', '2021-11-05 04:41:00'),
(2, '2-modul', 1, '2021-11-10 12:43:31', '2021-11-10 12:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `studyyears`
--

CREATE TABLE `studyyears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studyyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studyyears`
--

INSERT INTO `studyyears` (`id`, `studyyear`, `created_at`, `updated_at`) VALUES
(1, '2021-2022', '2021-11-05 04:30:48', '2021-11-05 04:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kafid` int(11) DEFAULT NULL,
  `guruh` int(11) DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `kafid`, `guruh`, `creator`) VALUES
(1, 'Administrator', 'admin@mail.ru', 1, NULL, '$2y$10$eHuMVXAhTOf4gO.Q6nXmsuZAc8PiARM5nJLP54hfmntr29Nu2Ht6e', NULL, '2021-11-04 04:41:18', '2021-11-04 04:41:18', NULL, NULL, NULL),
(3, 'O\'rinkulov Odiljon Naziraliyevich', 'odil@mail.ru', 3, NULL, '$2y$10$f8gwNjVyXZcCq1oe687/AugRvYeiwNbS7peDb.q/Vrnz6WVNZcFCC', NULL, '2021-11-05 04:24:20', '2021-11-05 04:24:20', NULL, 2, 'Administrator'),
(5, 'Usmonkulov Oxunjon', 'oxun@mail.ru', 3, NULL, '$2y$10$ZIOh2A7nMquPJQjFPVQvRu.y5PB53u0j47ufO6cmJ53Mh9di86kcK', NULL, '2021-11-07 05:41:19', '2021-11-07 05:41:19', NULL, 3, 'Administrator'),
(6, 'ivanov Ivan Ivanovich', 'ivan@mail.ru', 3, NULL, '$2y$10$YY3OyqdntDHVpbkBm0XWVulbiRYp0rqRDj1k2dDTjgg8EntUHqeHq', NULL, '2021-11-07 11:17:38', '2021-11-07 11:17:38', NULL, 2, 'Administrator'),
(7, 'Abdukadirov Farhod', 'farhod@mail.ru', 3, NULL, '$2y$10$/tz.Ifdl2XoVTLPJS.rO6uwp/0PLcUq0h/436AhczyW4XziIha7ca', NULL, '2021-11-10 04:24:55', '2021-11-10 04:24:55', NULL, 2, 'Administrator'),
(8, 'Авазов Жўрабек Файзуллаевич', 'avazov@mail.ru', 3, NULL, '$2y$10$kEJ9aVNaKmFjxA1mNpc3IeZNPgXOO.T6CEIdT4K2PP5OD2Y7Iv6Jy', NULL, '2021-11-10 12:33:52', '2021-11-10 12:33:52', NULL, 5, 'Administrator'),
(9, 'Қаюмов Нурилла Чоршанбиевич', 'qayumov@mail.ru', 3, NULL, '$2y$10$9f1nfup9tnlbGES7McCUZ.oZvsbLiZh9LzLVGGDeUJYrf1a7DvQ0i', NULL, '2021-11-10 12:34:28', '2021-11-10 12:34:28', NULL, 5, 'Administrator'),
(10, 'Эшимбетов Ғуломжон Султонбоевич', 'gulomov@mail.ru', 3, NULL, '$2y$10$8SDrHk6DBYJCOar2jgqD5OE4ekUa2AmIOo8x/phSYJwjDviMYdcGO', NULL, '2021-11-10 12:34:52', '2021-11-10 12:34:52', NULL, 5, 'Administrator'),
(11, 'Мамадалиев Азизбек Мансурович', 'azizbek@mail.ru', 3, NULL, '$2y$10$c26jCEubY.liuRU4R31g9u74hYJRBwOswwFBvndqmLoYJpaGhd.ia', NULL, '2021-11-10 12:35:18', '2021-11-10 12:35:18', NULL, 5, 'Administrator'),
(12, 'Отажонов Ражаббой Наримович', 'otajonov@mail.ru', 3, NULL, '$2y$10$OI2GSw2I6cSMrThqrEgt3ei54Vid57VHTc6EyBsbU1f9RFscQ8VmK', NULL, '2021-11-10 12:35:38', '2021-11-10 12:35:38', NULL, 5, 'Administrator'),
(13, 'Узакбаев Куанышбай Гайыпбаевич', 'uzakbayev@mail.ru', 3, NULL, '$2y$10$.9oVqzOXOJnLDE3toIJIaeIFFh.rQtgA60Mj1UHFSykPLqpYRBR4O', NULL, '2021-11-10 12:36:03', '2021-11-10 12:36:03', NULL, 5, 'Administrator'),
(14, 'Садиков Акромхон Абдулазизович', 'sadikov@mail.ru', 3, NULL, '$2y$10$3CIb.A11XAukgFvwQ/o8GeGlTlo2Mj4FROGmpDA2BNEgNe55c.eaS', NULL, '2021-11-10 12:36:30', '2021-11-10 12:36:30', NULL, 5, 'Administrator'),
(15, 'Джавкашев Жамол Абдурахмонович', 'djavkashev@mail.ru', 3, NULL, '$2y$10$DfBJtlfZRba1Z5YOiXnd/e669Yhs3Hz3JkeqtcgDD9nDECIhJ7in.', NULL, '2021-11-10 12:36:55', '2021-11-10 12:36:55', NULL, 5, 'Administrator'),
(16, 'Исмаилов Файзулла Хикматович', 'fayzulla@mail.ru', 3, NULL, '$2y$10$agnTzi9LBZwjwQg10NcgN.oTiSXT2ywz1iCnVxJ/7ck/qPW4ICGyC', NULL, '2021-11-10 12:37:28', '2021-11-10 12:37:28', NULL, 5, 'Administrator'),
(17, 'Хайдаров Азамат Саидович', 'xayddarov@mail.ru', 3, NULL, '$2y$10$9pa9FniAqZrpGSP6OoRPPuoWMUegAB3fuLC5Ospnq90f34OLYhdoC', NULL, '2021-11-10 12:40:18', '2021-11-10 12:40:18', NULL, 5, 'Administrator'),
(18, 'Таджибоев Авазбек Ахмадуллаевич', 'tadjibayev@mail.ru', 3, NULL, '$2y$10$Q2p8FYSyQusXPcTLx77RXuNb.XqUBDzaOmbx61.t9HnET5/WY1bCq', NULL, '2021-11-10 12:41:02', '2021-11-10 12:41:02', NULL, 5, 'Administrator'),
(19, 'Adilov Bahrom Qaxramanovich', 'adilov@mail.ru', 2, NULL, '$2y$10$EqKXI4Y4pIUWfdqYJHWjFOaETjqtPvdg/d5KHnc/HO39YbEUAPtUq', NULL, '2021-11-10 12:42:49', '2021-11-10 12:42:49', 3, NULL, 'Administrator'),
(20, 'To\'raho\'jayeva Ra\'no Rustamovna', 'turahojaeva@mail.ru', 2, NULL, '$2y$10$aWG/sC7ilCYcPNy0g/V5NehJ5RCwyNwiisBDcztBlDgL5PVUkKPkG', NULL, '2021-11-04 13:55:40', '2021-11-04 13:55:40', 3, NULL, 'Administrator');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_comples`
-- (See below for the actual view)
--
CREATE TABLE `v_comples` (
`id` bigint(20) unsigned
,`fan` bigint(20) unsigned
,`fanName` varchar(255)
,`sid` bigint(20) unsigned
,`studyyear` varchar(191)
,`semid` bigint(20) unsigned
,`semestrName` varchar(191)
,`fid` bigint(20) unsigned
,`fName` varchar(191)
,`uid` bigint(20) unsigned
,`name` varchar(191)
,`role` tinyint(1)
,`kid` int(11)
,`kurs` varchar(252)
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
,`guruh` int(11)
,`group` varchar(191)
,`kafid` int(11)
,`kurs` varchar(252)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_guruh`
-- (See below for the actual view)
--
CREATE TABLE `v_guruh` (
`id` bigint(20) unsigned
,`group` varchar(191)
,`kid` bigint(20)
,`kurs` varchar(252)
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
,`guruh` int(11)
,`semestrName` varchar(191)
,`jn` decimal(27,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jnjurnals`
-- (See below for the actual view)
--
CREATE TABLE `v_jnjurnals` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`guruh` int(11)
,`group` varchar(191)
,`kafid` int(11)
,`kurs` varchar(252)
,`jnjurnalid` bigint(20) unsigned
,`jnid` bigint(20) unsigned
,`jnName` varchar(255)
,`comples_id` bigint(20)
,`baho` decimal(5,2)
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
,`fName` varchar(191)
,`sid` bigint(20) unsigned
,`gid` bigint(20) unsigned
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
,`guruh` int(11)
,`comples_id` int(11)
,`jn` decimal(27,2)
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
,`guruh` int(11)
,`group` varchar(191)
,`kafid` int(11)
,`kurs` varchar(252)
,`comples_id` bigint(20)
,`onid` bigint(20)
,`status` int(11)
,`status2` int(11)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_onjadval`
-- (See below for the actual view)
--
CREATE TABLE `v_onjadval` (
`id` bigint(20) unsigned
,`uid` bigint(20)
,`name` varchar(191)
,`onsum` decimal(27,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_onjadval_new`
-- (See below for the actual view)
--
CREATE TABLE `v_onjadval_new` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`comples_id` bigint(20)
,`onid` bigint(20)
,`guruh` int(11)
,`baho` decimal(27,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_onjurnals`
-- (See below for the actual view)
--
CREATE TABLE `v_onjurnals` (
`sid` bigint(20) unsigned
,`name` varchar(191)
,`randomnum` varchar(255)
,`baho` decimal(5,2)
,`onid` bigint(20)
,`status` int(11)
,`status2` int(11)
,`onName` varchar(191)
,`comples_id` bigint(20)
,`guruh` int(11)
,`group` varchar(191)
,`kafid` int(11)
,`kurs` varchar(252)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_onjurnals2`
-- (See below for the actual view)
--
CREATE TABLE `v_onjurnals2` (
`id` bigint(20) unsigned
,`sid` bigint(20)
,`name` varchar(191)
,`randomnum` varchar(255)
,`comples_id` bigint(20)
,`onid` bigint(20)
,`baho` decimal(5,2)
,`status` int(11)
,`status2` int(11)
,`created_at` timestamp
,`creator` varchar(191)
,`guruh` int(11)
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
,`fanName` varchar(255)
,`sid` bigint(20) unsigned
,`gid` bigint(20) unsigned
,`studyyear` varchar(191)
,`semid` bigint(20) unsigned
,`semestrName` varchar(191)
,`status` int(11)
,`status2` int(11)
,`creator` varchar(191)
,`deletor` varchar(191)
,`created_at` timestamp
,`updated_at` timestamp
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
-- Stand-in structure for view `v_studentonsum`
-- (See below for the actual view)
--
CREATE TABLE `v_studentonsum` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`gid` int(11)
,`comples_id` bigint(20)
,`oraliq` decimal(27,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_students`
-- (See below for the actual view)
--
CREATE TABLE `v_students` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`gid` int(11)
,`email` varchar(191)
,`guruh` int(11)
,`kafid` int(11)
,`password` varchar(191)
,`kurs` varchar(252)
,`group` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_teachers`
-- (See below for the actual view)
--
CREATE TABLE `v_teachers` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`email` varchar(191)
,`role` tinyint(1)
,`email_verified_at` timestamp
,`password` varchar(191)
,`remember_token` varchar(100)
,`created_at` timestamp
,`updated_at` timestamp
,`kafid` int(11)
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
,`role` tinyint(1)
,`email` varchar(191)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_gennumbers`  AS SELECT `o`.`id` AS `id`, `u`.`id` AS `uid`, `u`.`name` AS `name`, `o`.`randomnum` AS `randomnum`, `o`.`comples_id` AS `comples_id`, `o`.`onid` AS `onid`, `u`.`guruh` AS `guruh`, `u`.`group` AS `group`, `u`.`kafid` AS `kafid`, `u`.`kurs` AS `kurs`, `o`.`created_at` AS `created_at`, `o`.`updated_at` AS `updated_at` FROM (`v_students` `u` left join `ongenerates` `o` on(`u`.`id` = `o`.`uid`)) ORDER BY `o`.`randomnum` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_guruh`
--
DROP TABLE IF EXISTS `v_guruh`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_guruh`  AS SELECT `g`.`id` AS `id`, `g`.`group` AS `group`, `g`.`kurs` AS `kid`, `k`.`kurs` AS `kurs` FROM (`guruhs` `g` left join `kurs` `k` on(`g`.`kurs` = `k`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_jnjadval_new`
--
DROP TABLE IF EXISTS `v_jnjadval_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jnjadval_new`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, `j`.`comple_id` AS `comples_id`, `j`.`jnid` AS `jnid`, `s`.`guruh` AS `guruh`, `c`.`semestrName` AS `semestrName`, sum(ifnull(`j`.`baho`,0)) AS `jn` FROM ((`jnjurnals` `j` left join `v_students` `s` on(`j`.`user_id` = `s`.`id`)) left join `v_comples` `c` on(`j`.`comple_id` = `c`.`id`)) GROUP BY `s`.`id`, `s`.`name`, `j`.`comple_id`, `j`.`jnid`, `s`.`guruh`, `c`.`semestrName` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_jnjurnals`
--
DROP TABLE IF EXISTS `v_jnjurnals`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jnjurnals`  AS SELECT `u`.`id` AS `id`, `u`.`name` AS `name`, `u`.`guruh` AS `guruh`, `u`.`group` AS `group`, `u`.`kafid` AS `kafid`, `u`.`kurs` AS `kurs`, `j`.`id` AS `jnjurnalid`, `jn`.`id` AS `jnid`, `jn`.`name` AS `jnName`, `jn`.`comples_id` AS `comples_id`, `j`.`baho` AS `baho`, `j`.`status` AS `status`, `j`.`created_at` AS `created_at` FROM ((`v_students` `u` left join `jnjurnals` `j` on(`u`.`id` = `j`.`user_id`)) left join `joriynazorats` `jn` on(`j`.`jnid` = `jn`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_joriynazorat`
--
DROP TABLE IF EXISTS `v_joriynazorat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_joriynazorat`  AS SELECT `j`.`id` AS `id`, `j`.`name` AS `name`, `c`.`id` AS `comples_id`, `c`.`fName` AS `fName`, `c`.`sid` AS `sid`, `c`.`gid` AS `gid`, `c`.`studyyear` AS `studyyear`, `c`.`semid` AS `semid`, `c`.`semestrName` AS `semestrName` FROM (`joriynazorats` `j` left join `v_comples` `c` on(`j`.`comples_id` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_joriysumpocomples`
--
DROP TABLE IF EXISTS `v_joriysumpocomples`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_joriysumpocomples`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, `s`.`guruh` AS `guruh`, `j`.`comple_id` AS `comples_id`, sum(ifnull(`j`.`baho`,0)) AS `jn` FROM (`jnjurnals` `j` left join `v_students` `s` on(`j`.`user_id` = `s`.`id`)) GROUP BY `s`.`id`, `s`.`name`, `s`.`guruh`, `j`.`comple_id` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_ongenerate`
--
DROP TABLE IF EXISTS `v_ongenerate`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ongenerate`  AS SELECT `o`.`id` AS `id`, `u`.`id` AS `sid`, `u`.`name` AS `name`, `o`.`randomnum` AS `randomnum`, `u`.`guruh` AS `guruh`, `u`.`group` AS `group`, `u`.`kafid` AS `kafid`, `u`.`kurs` AS `kurs`, `o`.`comples_id` AS `comples_id`, `o`.`onid` AS `onid`, `o`.`status` AS `status`, `j`.`status2` AS `status2`, `o`.`created_at` AS `created_at`, `o`.`updated_at` AS `updated_at` FROM ((`v_students` `u` left join `ongenerates` `o` on(`u`.`id` = `o`.`uid`)) left join `onjurnals` `j` on(`u`.`id` = `j`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_onjadval`
--
DROP TABLE IF EXISTS `v_onjadval`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_onjadval`  AS SELECT `onjur`.`id` AS `id`, `onjur`.`user_id` AS `uid`, `s`.`name` AS `name`, sum(ifnull(`onjur`.`baho`,0)) AS `onsum` FROM (`onjurnals` `onjur` left join `v_students` `s` on(`onjur`.`user_id` = `s`.`id`)) GROUP BY `onjur`.`id`, `onjur`.`user_id`, `s`.`name` ;

-- --------------------------------------------------------

--
-- Structure for view `v_onjadval_new`
--
DROP TABLE IF EXISTS `v_onjadval_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_onjadval_new`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, `o`.`comples_id` AS `comples_id`, `o`.`onid` AS `onid`, `s`.`guruh` AS `guruh`, sum(ifnull(`o`.`baho`,0)) AS `baho` FROM (`onjurnals` `o` left join `v_students` `s` on(`o`.`user_id` = `s`.`id`)) GROUP BY `s`.`id`, `s`.`name`, `o`.`comples_id`, `o`.`onid`, `s`.`guruh` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_onjurnals`
--
DROP TABLE IF EXISTS `v_onjurnals`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_onjurnals`  AS SELECT `g`.`sid` AS `sid`, `g`.`name` AS `name`, `g`.`randomnum` AS `randomnum`, `o`.`baho` AS `baho`, `o`.`onid` AS `onid`, `o`.`status` AS `status`, `o`.`status2` AS `status2`, `n`.`name` AS `onName`, `g`.`comples_id` AS `comples_id`, `g`.`guruh` AS `guruh`, `g`.`group` AS `group`, `g`.`kafid` AS `kafid`, `g`.`kurs` AS `kurs` FROM ((`v_ongenerate` `g` left join `onjurnals` `o` on(`g`.`sid` = `o`.`user_id` and `g`.`onid` = `o`.`onid`)) left join `oraliqnazorats` `n` on(`o`.`onid` = `n`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_onjurnals2`
--
DROP TABLE IF EXISTS `v_onjurnals2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_onjurnals2`  AS SELECT `o`.`id` AS `id`, `o`.`user_id` AS `sid`, `s`.`name` AS `name`, `g`.`randomnum` AS `randomnum`, `o`.`comples_id` AS `comples_id`, `o`.`onid` AS `onid`, `o`.`baho` AS `baho`, `o`.`status` AS `status`, `o`.`status2` AS `status2`, `o`.`created_at` AS `created_at`, `o`.`creator` AS `creator`, `s`.`gid` AS `guruh` FROM ((`onjurnals` `o` left join `ongenerates` `g` on(`o`.`user_id` = `g`.`uid` and `o`.`comples_id` = `g`.`comples_id` and `o`.`onid` = `g`.`onid`)) left join `v_students` `s` on(`o`.`user_id` = `s`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_oraliqnazorat`
--
DROP TABLE IF EXISTS `v_oraliqnazorat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_oraliqnazorat`  AS SELECT `o`.`id` AS `id`, `o`.`name` AS `name`, `o`.`comples_id` AS `comples_id`, `c`.`fan` AS `fan`, `c`.`fanName` AS `fanName`, `c`.`sid` AS `sid`, `c`.`gid` AS `gid`, `c`.`studyyear` AS `studyyear`, `c`.`semid` AS `semid`, `c`.`semestrName` AS `semestrName`, `o`.`status` AS `status`, `o`.`status2` AS `status2`, `o`.`creator` AS `creator`, `o`.`deletor` AS `deletor`, `o`.`created_at` AS `created_at`, `o`.`updated_at` AS `updated_at` FROM (`oraliqnazorats` `o` left join `v_comples` `c` on(`o`.`comples_id` = `c`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_semestrs`
--
DROP TABLE IF EXISTS `v_semestrs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_semestrs`  AS SELECT `s`.`id` AS `id`, `s`.`semestrName` AS `semestrName`, `sy`.`studyyear` AS `studyyear`, `s`.`created_at` AS `created_at`, `s`.`updated_at` AS `updated_at` FROM (`semestrs` `s` left join `studyyears` `sy` on(`s`.`studyyear_id` = `sy`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_studentonsum`
--
DROP TABLE IF EXISTS `v_studentonsum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_studentonsum`  AS SELECT `s`.`id` AS `id`, `s`.`name` AS `name`, `s`.`gid` AS `gid`, `j`.`comples_id` AS `comples_id`, sum(ifnull(`j`.`baho`,0)) AS `oraliq` FROM (`onjurnals` `j` left join `v_students` `s` on(`j`.`user_id` = `s`.`id`)) GROUP BY `s`.`id`, `s`.`name`, `s`.`gid`, `j`.`comples_id` ORDER BY `s`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_students`
--
DROP TABLE IF EXISTS `v_students`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_students`  AS SELECT `u`.`id` AS `id`, `u`.`name` AS `name`, `u`.`guruh` AS `gid`, `u`.`email` AS `email`, `u`.`guruh` AS `guruh`, `u`.`kafid` AS `kafid`, `u`.`password` AS `password`, `k`.`kurs` AS `kurs`, `g`.`group` AS `group` FROM ((`users` `u` left join `guruhs` `g` on(`u`.`guruh` = `g`.`id`)) left join `kurs` `k` on(`g`.`kurs` = `k`.`id`)) WHERE `u`.`role` = 3 ORDER BY `u`.`id` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `v_teachers`
--
DROP TABLE IF EXISTS `v_teachers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_teachers`  AS SELECT `users`.`id` AS `id`, `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`role` AS `role`, `users`.`email_verified_at` AS `email_verified_at`, `users`.`password` AS `password`, `users`.`remember_token` AS `remember_token`, `users`.`created_at` AS `created_at`, `users`.`updated_at` AS `updated_at`, `users`.`kafid` AS `kafid` FROM `users` WHERE `users`.`role` = 2 ;

-- --------------------------------------------------------

--
-- Structure for view `v_usertokafedra`
--
DROP TABLE IF EXISTS `v_usertokafedra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usertokafedra`  AS SELECT `u`.`id` AS `id`, `u`.`kafid` AS `kafid`, `u`.`name` AS `name`, `u`.`role` AS `role`, `u`.`email` AS `email`, `k`.`kafName` AS `kafName` FROM (`users` `u` left join `kafedras` `k` on(`u`.`kafid` = `k`.`id`)) WHERE `u`.`role` = 2 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comples`
--
ALTER TABLE `comples`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `comples_id` (`comple_id`),
  ADD KEY `users_id` (`user_id`);

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
-- Indexes for table `onjurnals`
--
ALTER TABLE `onjurnals`
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fans`
--
ALTER TABLE `fans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guruhs`
--
ALTER TABLE `guruhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jnjurnals`
--
ALTER TABLE `jnjurnals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `joriynazorats`
--
ALTER TABLE `joriynazorats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kafedras`
--
ALTER TABLE `kafedras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `onjurnals`
--
ALTER TABLE `onjurnals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `oraliqnazorats`
--
ALTER TABLE `oraliqnazorats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semestrs`
--
ALTER TABLE `semestrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studyyears`
--
ALTER TABLE `studyyears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quizzes_id_foreign` FOREIGN KEY (`quizzes_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
