-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2021 at 01:53 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dist_akadmvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `comples`
--

DROP TABLE IF EXISTS `comples`;
CREATE TABLE IF NOT EXISTS `comples` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `studyyear` bigint(20) UNSIGNED NOT NULL,
  `semestr` bigint(20) UNSIGNED NOT NULL,
  `kurs` bigint(20) UNSIGNED NOT NULL,
  `guruh` bigint(20) UNSIGNED NOT NULL,
  `teacher` bigint(20) UNSIGNED NOT NULL,
  `fan` bigint(20) UNSIGNED NOT NULL,
  `fanName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `comples_studyyear_foreign` (`studyyear`),
  KEY `comples_semestr_foreign` (`semestr`),
  KEY `comples_kurs_foreign` (`kurs`),
  KEY `comples_guruh_foreign` (`guruh`),
  KEY `comples_teacher_foreign` (`teacher`),
  KEY `comples_fan_foreign` (`fan`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comples`
--

INSERT INTO `comples` (`id`, `studyyear`, `semestr`, `kurs`, `guruh`, `teacher`, `fan`, `fanName`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, 3, 2, 1, 'AX 1k1s2021', '2021-08-11 07:38:25', '2021-08-14 06:37:30'),
(3, 1, 3, 2, 3, 4, 2, 'Dastlabki tergov 2k3s2021', '2021-08-13 23:38:15', '2021-08-13 23:38:15'),
(4, 1, 4, 2, 3, 4, 2, 'Dastlabki tergov 2k4s2021', '2021-08-14 01:19:55', '2021-08-14 01:19:55'),
(5, 1, 1, 1, 1, 2, 1, 'AX 1k1s101-21', '2021-08-14 01:56:30', '2021-08-14 01:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

DROP TABLE IF EXISTS `fans`;
CREATE TABLE IF NOT EXISTS `fans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kafId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fans_fname_unique` (`fName`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fans`
--

INSERT INTO `fans` (`id`, `fName`, `kafId`, `created_at`, `updated_at`) VALUES
(1, 'Axborot xavfsizligi', 1, '2021-08-11 06:51:03', '2021-08-11 06:51:18'),
(2, 'Dastlabki tergov', 3, '2021-08-11 23:17:29', '2021-08-11 23:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `guruhs`
--

DROP TABLE IF EXISTS `guruhs`;
CREATE TABLE IF NOT EXISTS `guruhs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurs` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `guruhs_group_unique` (`group`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guruhs`
--

INSERT INTO `guruhs` (`id`, `group`, `kurs`, `created_at`, `updated_at`) VALUES
(1, '101-21', 1, '2021-08-11 06:51:36', '2021-08-11 06:51:36'),
(3, '101-20', 2, '2021-08-11 07:24:52', '2021-08-11 07:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `kafedras`
--

DROP TABLE IF EXISTS `kafedras`;
CREATE TABLE IF NOT EXISTS `kafedras` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kafName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletor` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kafedras`
--

INSERT INTO `kafedras` (`id`, `kafName`, `creator`, `deletor`, `created_at`, `updated_at`) VALUES
(1, 'Axborot tehnologiyalari kafedrasi', 'Administrator', NULL, '2021-08-09 05:26:03', '2021-08-09 05:26:10'),
(3, 'Dastlabki tergov', 'Administrator', NULL, '2021-08-11 23:16:53', '2021-08-11 23:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

DROP TABLE IF EXISTS `kurs`;
CREATE TABLE IF NOT EXISTS `kurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kurs` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`id`, `kurs`, `created_at`, `updated_at`) VALUES
(1, '1-kurs', '2021-08-11 12:24:06', '0000-00-00 00:00:00'),
(2, '2-kurs', '2021-08-11 12:24:06', '0000-00-00 00:00:00'),
(3, '3-kurs', '2021-08-11 12:24:16', '0000-00-00 00:00:00'),
(4, '4-kurs', '2021-08-11 12:24:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2021_07_22_135854_create_questions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quizzes_id` bigint(20) UNSIGNED NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `creator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_quizzes_id_foreign` (`quizzes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quizName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(192) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `kursid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `semestrs`;
CREATE TABLE IF NOT EXISTS `semestrs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `semestrName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `studyyear_id` bigint(20) UNSIGNED NOT NULL,
  `is_current` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `semestrs_studyyearid_foreign` (`studyyear_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semestrs`
--

INSERT INTO `semestrs` (`id`, `semestrName`, `studyyear_id`, `is_current`, `created_at`, `updated_at`) VALUES
(1, '1-semestr', 1, 1, '2021-08-11 07:29:28', '2021-08-11 07:29:28'),
(2, '2-semestr', 1, NULL, '2021-08-11 07:29:32', '2021-08-11 07:29:32'),
(3, '3-semestr', 1, 1, '2021-08-13 23:37:54', '2021-08-13 23:37:54'),
(4, '4-semestr', 1, NULL, '2021-08-14 01:19:17', '2021-08-14 01:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `studyyears`
--

DROP TABLE IF EXISTS `studyyears`;
CREATE TABLE IF NOT EXISTS `studyyears` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `studyyear` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_current` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `studyyears_studyyear_unique` (`studyyear`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studyyears`
--

INSERT INTO `studyyears` (`id`, `studyyear`, `is_current`, `created_at`, `updated_at`) VALUES
(1, '2021-2022', 1, '2021-08-11 07:15:24', '2021-08-11 07:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kafID` int(11) DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guruh` int(11) DEFAULT NULL,
  `creator` varchar(192) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `kafID`, `name`, `email`, `role`, `guruh`, `creator`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Administrator', 'odil@mail.ru', '1', NULL, NULL, NULL, '$2y$10$qQkfMlOao.SqnGh0g2v6SeOGbctVniVS6srno0Mj/bgIXQIeGH.rW', NULL, NULL, NULL),
(2, 1, 'Iminov Abdurasul', 'iminov@mail.ru', '2', NULL, 'Administrator', NULL, '$2y$10$n2waulqN1lKmhfslsWWCu.xTLdkyK7PkuaLa5zuj3qRqXIpvE/T0q', NULL, '2021-08-09 05:51:19', '2021-08-09 05:51:19'),
(3, NULL, 'Usmonkulov Oxunjon', 'Usmonkulov@mail.ru', '3', 1, 'Administrator', NULL, '$2y$10$yazbXnh5vDKyii2XYfemPuDaVQIeCuDntI12CaVis750D69QSDSmq', NULL, '2021-08-11 07:14:38', '2021-08-11 07:15:10'),
(4, 3, 'Uralov Sarvar', 'sarvar@mail.ru', '2', NULL, 'Administrator', NULL, '$2y$10$5Nb6RXb7bl.cY0baqSMIP.n2jMpKvTeCgR9wxtFCoMw8p8the.XKG', NULL, '2021-08-11 23:17:14', '2021-08-11 23:17:14'),
(5, NULL, 'Gulmatov Mamur Abdixalikovich', 'Gulmatov@mail.ru', '3', 3, 'Administrator', NULL, '$2y$10$kDHtO3oWKuOKG5Wc8NFFKubqengSaTjcWFo0g3WKE2ak54UlrvzBm', NULL, '2021-08-13 23:26:53', '2021-08-13 23:36:36');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_comples`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_comples`;
CREATE TABLE IF NOT EXISTS `v_comples` (
`fan` bigint(20) unsigned
,`fanName` varchar(191)
,`fid` bigint(20) unsigned
,`fName` varchar(191)
,`gid` bigint(20) unsigned
,`group` varchar(191)
,`id` bigint(20) unsigned
,`kid` int(11)
,`kurs` varchar(25)
,`name` varchar(191)
,`role` varchar(11)
,`semestrName` varchar(191)
,`semid` bigint(20) unsigned
,`sid` bigint(20) unsigned
,`studyyear` varchar(191)
,`uid` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_fantokafedras`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_fantokafedras`;
CREATE TABLE IF NOT EXISTS `v_fantokafedras` (
`fName` varchar(191)
,`id` bigint(20) unsigned
,`kafName` varchar(255)
,`kid` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_questions`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_questions`;
CREATE TABLE IF NOT EXISTS `v_questions` (
`ans1` varchar(191)
,`ans2` varchar(191)
,`ans3` varchar(191)
,`ans4` varchar(191)
,`ans5` varchar(191)
,`creator` varchar(191)
,`creator_id` int(11)
,`id` bigint(20) unsigned
,`kursid` int(11)
,`question` text
,`quizName` varchar(191)
,`quizzes_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_quiz`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_quiz`;
CREATE TABLE IF NOT EXISTS `v_quiz` (
`creator_id` int(11)
,`fanName` varchar(191)
,`fName` varchar(191)
,`id` bigint(20) unsigned
,`kurs` varchar(25)
,`kursid` bigint(20) unsigned
,`quizName` varchar(191)
,`semestrName` varchar(191)
,`studyyear` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_quiz_full`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_quiz_full`;
CREATE TABLE IF NOT EXISTS `v_quiz_full` (
`ans1` varchar(191)
,`ans2` varchar(191)
,`ans3` varchar(191)
,`ans4` varchar(191)
,`ans5` varchar(191)
,`cid` bigint(20) unsigned
,`creator` varchar(191)
,`creator_id` int(11)
,`fanName` varchar(191)
,`id` bigint(20) unsigned
,`question` text
,`quizName` varchar(191)
,`quizzes_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_semestrs`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_semestrs`;
CREATE TABLE IF NOT EXISTS `v_semestrs` (
`created_at` timestamp
,`id` bigint(20) unsigned
,`semestrName` varchar(191)
,`studyyear` varchar(191)
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_students`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_students`;
CREATE TABLE IF NOT EXISTS `v_students` (
`email` varchar(191)
,`gid` int(11)
,`group` varchar(191)
,`id` bigint(20) unsigned
,`kid` int(11)
,`kurs` varchar(25)
,`name` varchar(191)
,`password` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_teachers`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_teachers`;
CREATE TABLE IF NOT EXISTS `v_teachers` (
`created_at` timestamp
,`email` varchar(191)
,`email_verified_at` timestamp
,`id` bigint(20) unsigned
,`kafid` int(11)
,`name` varchar(191)
,`password` varchar(191)
,`remember_token` varchar(100)
,`role` varchar(11)
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_usertokafedra`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_usertokafedra`;
CREATE TABLE IF NOT EXISTS `v_usertokafedra` (
`email` varchar(191)
,`id` bigint(20) unsigned
,`kafid` int(11)
,`kafName` varchar(255)
,`name` varchar(191)
,`role` varchar(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_comples`
--
DROP TABLE IF EXISTS `v_comples`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_comples`  AS  select `c`.`id` AS `id`,`c`.`fan` AS `fan`,`c`.`fanName` AS `fanName`,`sy`.`id` AS `sid`,`sy`.`studyyear` AS `studyyear`,`s`.`id` AS `semid`,`s`.`semestrName` AS `semestrName`,`f`.`id` AS `fid`,`f`.`fName` AS `fName`,`t`.`id` AS `uid`,`t`.`name` AS `name`,`t`.`role` AS `role`,`k`.`id` AS `kid`,`k`.`kurs` AS `kurs`,`g`.`id` AS `gid`,`g`.`group` AS `group` from ((((((`comples` `c` left join `studyyears` `sy` on((`c`.`studyyear` = `sy`.`id`))) left join `semestrs` `s` on((`c`.`semestr` = `s`.`id`))) left join `kurs` `k` on((`c`.`kurs` = `k`.`id`))) left join `guruhs` `g` on((`c`.`guruh` = `g`.`id`))) left join `v_usertokafedra` `t` on((`c`.`teacher` = `t`.`id`))) left join `fans` `f` on((`c`.`fan` = `f`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_fantokafedras`
--
DROP TABLE IF EXISTS `v_fantokafedras`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fantokafedras`  AS  select `f`.`id` AS `id`,`f`.`fName` AS `fName`,`k`.`kafName` AS `kafName`,`k`.`id` AS `kid` from (`fans` `f` left join `kafedras` `k` on((`f`.`kafId` = `k`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_questions`
--
DROP TABLE IF EXISTS `v_questions`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_questions`  AS  select `qu`.`quizName` AS `quizName`,`qu`.`kursid` AS `kursid`,`q`.`id` AS `id`,`q`.`quizzes_id` AS `quizzes_id`,`q`.`question` AS `question`,`q`.`ans1` AS `ans1`,`q`.`ans2` AS `ans2`,`q`.`ans3` AS `ans3`,`q`.`ans4` AS `ans4`,`q`.`ans5` AS `ans5`,`q`.`creator` AS `creator`,`q`.`creator_id` AS `creator_id` from (`questions` `q` left join `quizzes` `qu` on((`q`.`quizzes_id` = `qu`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_quiz`
--
DROP TABLE IF EXISTS `v_quiz`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_quiz`  AS  select `q`.`id` AS `id`,`q`.`quizName` AS `quizName`,`k`.`id` AS `kursid`,`k`.`fanName` AS `fanName`,`k`.`fName` AS `fName`,`k`.`studyyear` AS `studyyear`,`k`.`semestrName` AS `semestrName`,`k`.`kurs` AS `kurs`,`q`.`creator_id` AS `creator_id` from (`quizzes` `q` left join `v_comples` `k` on((`q`.`kursid` = `k`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_quiz_full`
--
DROP TABLE IF EXISTS `v_quiz_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_quiz_full`  AS  select `q`.`id` AS `id`,`q`.`question` AS `question`,`q`.`ans1` AS `ans1`,`q`.`ans2` AS `ans2`,`q`.`ans3` AS `ans3`,`q`.`ans4` AS `ans4`,`q`.`ans5` AS `ans5`,`q`.`creator_id` AS `creator_id`,`q`.`creator` AS `creator`,`q`.`quizzes_id` AS `quizzes_id`,`qu`.`quizName` AS `quizName`,`c`.`id` AS `cid`,`c`.`fanName` AS `fanName` from ((`questions` `q` left join `quizzes` `qu` on((`q`.`quizzes_id` = `qu`.`id`))) left join `comples` `c` on((`qu`.`kursid` = `c`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_semestrs`
--
DROP TABLE IF EXISTS `v_semestrs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_semestrs`  AS  select `s`.`id` AS `id`,`s`.`semestrName` AS `semestrName`,`sy`.`studyyear` AS `studyyear`,`s`.`created_at` AS `created_at`,`s`.`updated_at` AS `updated_at` from (`semestrs` `s` left join `studyyears` `sy` on((`s`.`studyyear_id` = `sy`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_students`
--
DROP TABLE IF EXISTS `v_students`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_students`  AS  select `u`.`id` AS `id`,`u`.`name` AS `name`,`u`.`email` AS `email`,`u`.`password` AS `password`,`u`.`guruh` AS `gid`,`k`.`id` AS `kid`,`k`.`kurs` AS `kurs`,`g`.`group` AS `group` from ((`users` `u` left join `guruhs` `g` on((`u`.`guruh` = `g`.`id`))) left join `kurs` `k` on((`g`.`kurs` = `k`.`id`))) where (`u`.`role` = 3) order by `u`.`id` desc ;

-- --------------------------------------------------------

--
-- Structure for view `v_teachers`
--
DROP TABLE IF EXISTS `v_teachers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_teachers`  AS  select `users`.`id` AS `id`,`users`.`kafID` AS `kafid`,`users`.`name` AS `name`,`users`.`email` AS `email`,`users`.`role` AS `role`,`users`.`email_verified_at` AS `email_verified_at`,`users`.`password` AS `password`,`users`.`remember_token` AS `remember_token`,`users`.`created_at` AS `created_at`,`users`.`updated_at` AS `updated_at` from `users` where (`users`.`role` = 2) ;

-- --------------------------------------------------------

--
-- Structure for view `v_usertokafedra`
--
DROP TABLE IF EXISTS `v_usertokafedra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usertokafedra`  AS  select `u`.`id` AS `id`,`u`.`kafID` AS `kafid`,`u`.`name` AS `name`,`u`.`email` AS `email`,`u`.`role` AS `role`,`k`.`kafName` AS `kafName` from (`users` `u` left join `kafedras` `k` on((`u`.`kafID` = `k`.`id`))) where (`u`.`role` = 2) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
