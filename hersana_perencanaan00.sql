-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 12:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hersana_perencanaan00`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hersana Khoerul Anwar', '2018-05-26 23:28:12', '2018-05-26 23:28:12'),
(2, 'Isep Saepudin', '2018-05-26 23:28:28', '2018-05-26 23:28:28'),
(3, 'Wawan Setiawan', '2018-05-26 23:28:42', '2018-05-26 23:28:42'),
(4, 'Dedeh Kurniasih', '2018-05-26 23:28:56', '2018-05-26 23:28:56'),
(5, 'Tiara Delani Rizkiya', '2018-05-26 23:29:09', '2018-05-26 23:29:09'),
(6, 'Amira Hasna Najibah', '2018-05-26 23:29:20', '2018-05-26 23:29:20'),
(7, 'Abim Misbah Haikal', '2018-05-26 23:29:33', '2018-05-26 23:29:33'),
(8, 'H. Syarif Husen', '2018-05-26 23:29:53', '2018-05-26 23:29:53'),
(9, 'Hj. Rohimah', '2018-05-26 23:30:03', '2018-05-26 23:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `bahans`
--

CREATE TABLE `bahans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bahans`
--

INSERT INTO `bahans` (`id`, `kode`, `nama`, `keterangan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'MTR01', 'Material 01', 'ABS', 1, '2018-05-19 23:26:26', '2018-05-19 23:26:26'),
(2, 'MTR02', 'Material 02', 'Additive', 1, '2018-05-19 23:26:45', '2018-05-19 23:26:45'),
(3, 'MTR03', 'Material 03', 'PMMA', 1, '2018-05-19 23:27:03', '2018-05-19 23:27:03'),
(4, 'MTR04', 'Material 04', 'Recycle', 1, '2018-05-19 23:27:23', '2018-05-19 23:27:23'),
(5, 'MTR05', 'Material 05', 'Additive', 1, '2018-05-19 23:51:52', '2018-05-19 23:51:52'),
(6, 'MTR06', 'Material 06', 'Additive', 1, '2018-06-27 02:53:16', '2018-06-27 02:53:16'),
(7, 'MTR07', 'Material 07', 'Additive', 1, '2018-06-27 03:02:46', '2018-06-27 03:02:46'),
(8, 'MTR08', 'Material 08', 'ABS', 1, '2018-06-27 03:03:10', '2018-06-27 03:03:10'),
(9, 'MTR09', 'Material 09', 'PMMA', 1, '2018-06-27 03:03:29', '2018-06-27 03:03:29'),
(10, 'MTR10', 'Material 10', 'Recycle', 1, '2018-06-27 03:03:49', '2018-06-27 03:03:49'),
(11, 'MTR11', 'Material 11', 'ABS', 1, '2018-06-27 03:04:09', '2018-06-27 03:04:09'),
(12, 'MTR12', 'Material 12', 'Additive', 1, '2018-06-27 03:04:25', '2018-06-27 03:04:25'),
(13, 'MTR13', 'Material 13', 'PMMA', 1, '2018-06-27 03:04:43', '2018-06-27 03:04:43'),
(14, 'MTR14', 'Material 14', 'Recycle', 1, '2018-06-27 03:05:01', '2018-06-27 03:05:01'),
(15, 'MTR15', 'Material 15', 'ABS', 1, '2018-06-27 03:05:18', '2018-06-27 03:05:18'),
(16, 'MTR16', 'Material 16', 'Additive', 1, '2018-06-27 03:05:33', '2018-06-27 03:05:33'),
(17, 'MTR17', 'Material 17', 'PMMA', 1, '2018-06-27 03:05:49', '2018-06-27 03:05:49'),
(18, 'MTR18', 'Material 18', 'Recycle', 1, '2018-06-27 03:06:11', '2018-06-27 03:06:11'),
(19, 'MTR19', 'Material 19', 'Additive', 1, '2018-06-27 03:06:30', '2018-06-27 03:06:30'),
(20, 'MTR20', 'Material 20', 'ABS', 1, '2018-06-27 03:06:47', '2018-06-27 03:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `amount`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Life Must Go On', 9, 10, NULL, '2018-05-26 23:30:49', '2018-05-26 23:30:49'),
(2, 'Struggle Within', 8, 10, NULL, '2018-05-26 23:31:23', '2018-05-26 23:31:23'),
(3, 'CIkaracak Ninggang Batu', 3, 7, NULL, '2018-05-26 23:31:54', '2018-05-26 23:31:54'),
(4, 'Laun-laun Jadi Legok', 2, 7, NULL, '2018-05-26 23:32:16', '2018-05-26 23:32:16'),
(5, 'Pretending Everything is Perfect', 4, 8, NULL, '2018-05-26 23:32:44', '2018-05-26 23:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_logs`
--

CREATE TABLE `borrow_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `is_returned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `negara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `kode`, `nama`, `negara`, `keterangan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'CS01', 'Customer 01', 'Negara 01', '-', 1, '2018-05-19 22:54:58', '2018-05-19 22:54:58'),
(2, 'CS02', 'Customer 02', 'Negara 02', '-', 1, NULL, NULL),
(3, 'CS03', 'Customer 03', 'Negara 03', '-', 1, '2018-06-27 02:42:40', '2018-06-27 02:42:40'),
(4, 'CS04', 'Customer 04', 'Negara 04', '-', 1, '2018-06-27 02:43:20', '2018-06-27 02:43:20'),
(5, 'cs05', 'Customer 05', 'Negara 05', '-', 1, '2018-06-27 02:43:39', '2018-06-27 02:43:39'),
(6, 'CS06', 'Customer 06', 'Negara 06', '-', 1, '2018-06-27 02:44:14', '2018-06-27 02:44:14'),
(7, 'CS07', 'Customer 07', 'Negara 07', '-', 1, '2018-06-27 02:44:37', '2018-06-27 02:44:37'),
(8, 'CS08', 'Customer 08', 'Negara 08', '-', 1, '2018-06-27 02:44:55', '2018-06-27 02:44:55'),
(9, 'CS09', 'Customer 09', 'Negara 09', '-', 1, '2018-06-27 02:45:13', '2018-06-27 02:45:13'),
(10, 'CS10', 'Customer 10', 'Negara 10', '-', 1, '2018-06-27 02:45:35', '2018-06-27 02:45:35'),
(11, 'CS11', 'Customer 11', 'Negara 11', '-', 1, '2018-06-27 02:45:58', '2018-06-27 02:46:18'),
(12, 'CS12', 'Customer 12', 'Negara 12', '-', 1, '2018-06-27 02:46:36', '2018-06-27 02:46:36'),
(13, 'CS13', 'Customer 13', 'Negara 13', '-', 1, '2018-06-27 02:47:02', '2018-06-27 02:47:02'),
(14, 'CS14', 'Customer 14', 'Negara 14', '-', 1, '2018-06-27 02:47:19', '2018-06-27 02:47:19'),
(15, 'CS15', 'Customer 15', 'Negara 15', '-', 1, '2018-06-27 02:47:42', '2018-06-27 02:47:42'),
(16, 'CS16', 'Customer 16', 'Negara 16', '-', 1, '2018-06-27 02:47:59', '2018-06-27 02:47:59'),
(17, 'CS17', 'Customer 17', 'Negara 17', '-', 1, '2018-06-27 02:48:22', '2018-06-27 02:48:22'),
(18, 'CS18', 'Customer 18', 'Negara 18', '-', 1, '2018-06-27 02:48:42', '2018-06-27 02:48:42'),
(19, 'CS19', 'Customer 19', 'Negara 19', '-', 1, '2018-06-27 02:48:58', '2018-06-27 02:48:58'),
(20, 'CS20', 'Customer 20', 'Negara 20', '-', 1, '2018-06-27 02:49:16', '2018-06-27 02:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `komposisis`
--

CREATE TABLE `komposisis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spk_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_warna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `prod_date` date NOT NULL,
  `length` int(10) UNSIGNED NOT NULL,
  `width` int(10) UNSIGNED NOT NULL,
  `thickness` decimal(5,2) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `calspeed` decimal(5,4) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komposisis`
--

INSERT INTO `komposisis` (`id`, `kode`, `spk_num`, `kode_warna`, `customer_id`, `prod_date`, `length`, `width`, `thickness`, `quantity`, `calspeed`, `keterangan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'KMPS0001', '0012/FU-CS1/09/TI/2018', 'White_9305', 1, '2018-05-20', 2440, 1220, '0.80', 2000, '3.1000', '-', 1, '2018-05-20 00:09:58', '2018-05-20 00:09:58'),
(2, 'KMPS0002', '0066/FU-CS1/03/TI/V/2018', 'Beige_1480', 2, '2018-05-09', 2440, 1230, '0.80', 2000, '3.1000', '-', 1, '2018-06-08 22:31:28', '2018-06-08 22:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_details`
--

CREATE TABLE `komposisi_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `komposisi_id` int(10) UNSIGNED NOT NULL,
  `no_mesin` int(10) UNSIGNED NOT NULL,
  `melt_pump` int(10) UNSIGNED NOT NULL,
  `mat_com1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `per_com1` int(10) UNSIGNED NOT NULL,
  `per_com2` int(10) UNSIGNED NOT NULL,
  `per_com3` int(10) UNSIGNED NOT NULL,
  `per_com4` int(10) UNSIGNED NOT NULL,
  `per_com5` int(10) UNSIGNED NOT NULL,
  `per_com6` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komposisi_details`
--

INSERT INTO `komposisi_details` (`id`, `komposisi_id`, `no_mesin`, `melt_pump`, `mat_com1`, `mat_com2`, `mat_com3`, `mat_com4`, `mat_com5`, `mat_com6`, `per_com1`, `per_com2`, `per_com3`, `per_com4`, `per_com5`, `per_com6`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 10, '1', '', '', '', '', '', 100, 0, 0, 0, 0, 0, '2018-05-20 00:09:58', '2018-05-20 00:09:58'),
(2, 1, 1, 13, '1', '', '', '', '', '', 100, 0, 0, 0, 0, 0, '2018-05-20 00:09:58', '2018-05-20 00:09:58'),
(3, 1, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '2018-05-20 00:09:58', '2018-05-20 00:09:58'),
(4, 1, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '2018-05-20 00:09:58', '2018-05-20 00:09:58'),
(5, 2, 4, 14, '1', '', '', '', '', '', 100, 0, 0, 0, 0, 0, '2018-06-08 22:31:28', '2018-06-08 22:31:28'),
(6, 2, 2, 20, '2', '4', '', '', '', '', 100, 10, 0, 0, 0, 0, '2018-06-08 22:31:28', '2018-06-08 22:31:28'),
(7, 2, 1, 20, '2', '3', '', '', '', '', 50, 50, 0, 0, 0, 0, '2018-06-08 22:31:29', '2018-06-08 22:31:29'),
(8, 2, 3, 8, '2', '', '', '', '', '', 100, 0, 0, 0, 0, 0, '2018-06-08 22:31:29', '2018-06-08 22:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_12_11_110857_create_posts_table', 1),
(4, '2016_12_11_131056_laratrust_setup_tables', 1),
(5, '2016_12_12_114448_create_authors_table', 1),
(6, '2016_12_12_120408_create_books_table', 1),
(7, '2016_12_30_094623_create_borrow_logs_table', 1),
(8, '2018_03_20_154604_create_bahans_table', 1),
(9, '2018_03_20_155305_create_stoks_table', 1),
(10, '2018_03_20_170029_create_customers_table', 1),
(11, '2018_03_20_172044_create_komposisis_table', 1),
(12, '2018_03_20_172136_create_komposisi_details_table', 1),
(13, '2018_03_20_172232_create_perencanaans_table', 1),
(14, '2018_03_20_172313_create_perencanaan_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perencanaans`
--

CREATE TABLE `perencanaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `komposisi_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spk_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_warna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `length` int(10) UNSIGNED NOT NULL,
  `width` int(10) UNSIGNED NOT NULL,
  `thickness` decimal(5,2) UNSIGNED NOT NULL,
  `allowance` int(10) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan_details`
--

CREATE TABLE `perencanaan_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `perencanaan_id` int(10) UNSIGNED NOT NULL,
  `no_mesin` int(10) UNSIGNED NOT NULL,
  `melt_pump` int(10) UNSIGNED NOT NULL,
  `mat_com1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_com6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `per_com1` int(10) UNSIGNED NOT NULL,
  `per_com2` int(10) UNSIGNED NOT NULL,
  `per_com3` int(10) UNSIGNED NOT NULL,
  `per_com4` int(10) UNSIGNED NOT NULL,
  `per_com5` int(10) UNSIGNED NOT NULL,
  `per_com6` int(10) UNSIGNED NOT NULL,
  `need_com1` double(8,2) UNSIGNED NOT NULL,
  `need_com2` double(8,2) UNSIGNED NOT NULL,
  `need_com3` double(8,2) UNSIGNED NOT NULL,
  `need_com4` double(8,2) UNSIGNED NOT NULL,
  `need_com5` double(8,2) UNSIGNED NOT NULL,
  `need_com6` double(8,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Tips Menjadi Android Developer', 'lorem ipsum', NULL, NULL),
(2, 'Eminem Phonomenal Book', 'lorem ipsum', NULL, NULL),
(3, 'Ultraviolet Developer Company', 'lorem ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2018-05-19 22:51:16', '2018-05-19 22:51:16'),
(2, 'member', 'Member', NULL, '2018-05-19 22:51:17', '2018-05-19 22:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stoks`
--

CREATE TABLE `stoks` (
  `id` int(10) UNSIGNED NOT NULL,
  `bahan_id` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stoks`
--

INSERT INTO `stoks` (`id`, `bahan_id`, `jumlah`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5000, 1, '2018-05-19 23:33:46', '2018-05-19 23:33:46'),
(2, 2, 1000, 1, '2018-05-19 23:34:08', '2018-05-19 23:34:08'),
(3, 3, 2000, 1, '2018-06-27 03:13:45', '2018-06-27 03:13:45'),
(4, 4, 3000, 1, '2018-06-27 03:13:57', '2018-06-27 03:13:57'),
(5, 5, 10000, 1, '2018-06-27 03:14:11', '2018-06-27 03:14:11'),
(6, 7, 4000, 1, '2018-06-27 03:14:23', '2018-06-27 03:14:23'),
(7, 8, 5000, 1, '2018-06-27 03:14:37', '2018-06-27 03:14:37'),
(8, 6, 4000, 1, '2018-06-27 03:14:53', '2018-06-27 03:14:53'),
(9, 9, 4000, 1, '2018-06-27 03:15:35', '2018-06-27 03:15:35'),
(10, 10, 7000, 1, '2018-06-27 03:15:51', '2018-06-27 03:15:51'),
(11, 11, 10000, 1, '2018-06-27 03:16:03', '2018-06-27 03:16:03'),
(12, 12, 9000, 1, '2018-06-27 03:16:19', '2018-06-27 03:16:19'),
(13, 20, 2000, 1, '2018-06-27 03:16:33', '2018-06-27 03:16:33'),
(14, 19, 6000, 1, '2018-06-27 03:16:45', '2018-06-27 03:16:45'),
(15, 17, 7000, 1, '2018-06-27 03:16:59', '2018-06-27 03:16:59'),
(16, 13, 3000, 1, '2018-06-27 03:17:20', '2018-06-27 03:17:20'),
(17, 14, 4000, 1, '2018-06-27 03:17:36', '2018-06-27 03:17:36'),
(18, 15, 5000, 1, '2018-06-27 03:17:51', '2018-06-27 03:17:51'),
(19, 16, 7000, 1, '2018-06-27 03:18:05', '2018-06-27 03:18:05'),
(20, 18, 8000, 1, '2018-06-27 03:18:34', '2018-06-27 03:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hersana', 'hersana27@gmail.com', '$2y$10$PWoPIDvTMZPUDo8dC3mM8eKUcDvp7H12UA9O46w2gvk0RDwtEZ8OC', NULL, '2018-05-19 22:51:17', '2018-05-19 22:51:17'),
(2, 'Sample Member', 'member@gmail.com', '$2y$10$ubqkUa0KPq8KhjrIXoVDDeBwfrOJLvFOXeOpyQr7Ymg5RNFtPPHi.', NULL, '2018-05-19 22:51:17', '2018-05-19 22:51:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahans`
--
ALTER TABLE `bahans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bahans_kode_unique` (`kode`),
  ADD UNIQUE KEY `bahans_nama_unique` (`nama`),
  ADD KEY `bahans_user_id_index` (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `borrow_logs`
--
ALTER TABLE `borrow_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrow_logs_book_id_index` (`book_id`),
  ADD KEY `borrow_logs_user_id_index` (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_index` (`user_id`);

--
-- Indexes for table `komposisis`
--
ALTER TABLE `komposisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komposisis_customer_id_index` (`customer_id`),
  ADD KEY `komposisis_user_id_index` (`user_id`);

--
-- Indexes for table `komposisi_details`
--
ALTER TABLE `komposisi_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komposisi_details_komposisi_id_index` (`komposisi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `perencanaans`
--
ALTER TABLE `perencanaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perencanaans_komposisi_id_index` (`komposisi_id`),
  ADD KEY `perencanaans_customer_id_index` (`customer_id`),
  ADD KEY `perencanaans_user_id_index` (`user_id`);

--
-- Indexes for table `perencanaan_details`
--
ALTER TABLE `perencanaan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perencanaan_details_perencanaan_id_index` (`perencanaan_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `stoks`
--
ALTER TABLE `stoks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stoks_bahan_id_index` (`bahan_id`),
  ADD KEY `stoks_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bahans`
--
ALTER TABLE `bahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `borrow_logs`
--
ALTER TABLE `borrow_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komposisis`
--
ALTER TABLE `komposisis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komposisi_details`
--
ALTER TABLE `komposisi_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `perencanaans`
--
ALTER TABLE `perencanaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perencanaan_details`
--
ALTER TABLE `perencanaan_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stoks`
--
ALTER TABLE `stoks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahans`
--
ALTER TABLE `bahans`
  ADD CONSTRAINT `bahans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrow_logs`
--
ALTER TABLE `borrow_logs`
  ADD CONSTRAINT `borrow_logs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komposisis`
--
ALTER TABLE `komposisis`
  ADD CONSTRAINT `komposisis_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komposisis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komposisi_details`
--
ALTER TABLE `komposisi_details`
  ADD CONSTRAINT `komposisi_details_komposisi_id_foreign` FOREIGN KEY (`komposisi_id`) REFERENCES `komposisis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perencanaans`
--
ALTER TABLE `perencanaans`
  ADD CONSTRAINT `perencanaans_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perencanaans_komposisi_id_foreign` FOREIGN KEY (`komposisi_id`) REFERENCES `komposisis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perencanaans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perencanaan_details`
--
ALTER TABLE `perencanaan_details`
  ADD CONSTRAINT `perencanaan_details_perencanaan_id_foreign` FOREIGN KEY (`perencanaan_id`) REFERENCES `perencanaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stoks`
--
ALTER TABLE `stoks`
  ADD CONSTRAINT `stoks_bahan_id_foreign` FOREIGN KEY (`bahan_id`) REFERENCES `bahans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stoks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
