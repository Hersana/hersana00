-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 01:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hersana00`
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
(1, 'Verly Ananda', '2016-12-30 02:53:34', '2016-12-30 02:53:34'),
(2, 'Asep Mubarok', '2016-12-30 02:53:42', '2018-03-25 03:08:31'),
(3, 'Eminem', '2017-01-02 04:43:01', '2017-01-02 04:43:01'),
(4, 'Ucing endogan', '2017-01-03 04:43:53', '2017-01-03 04:43:53'),
(5, 'Arista', '2018-03-26 05:21:03', '2018-03-26 05:21:03');

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
(1, 'XSV0157', 'Starex SV-0157', 'ABS', 7, '2018-03-26 07:35:09', '2018-03-26 08:45:41'),
(2, 'M3404', 'Magnum 3404', 'ABS', 7, '2018-03-26 07:45:57', '2018-03-26 08:45:33'),
(4, 'SUMLG', 'Sumipex LG', 'PMMA', 7, '2018-03-26 08:53:51', '2018-03-26 08:53:51'),
(5, 'SUMEX', 'Sumipex EX', 'PMMA', 7, '2018-03-26 08:54:30', '2018-03-26 08:54:30'),
(6, 'WH9301', 'Recycle Mixing White_9301', 'Recycle', 7, '2018-03-26 08:55:31', '2018-03-26 09:10:17'),
(8, 'SINKD323', 'Sinkral D323', 'ABS', 7, '2018-03-26 08:58:37', '2018-03-26 08:58:37'),
(9, 'GR7901M', 'Recycle Mixing Grey_7901M', 'Recycle', 7, '2018-03-26 08:59:20', '2018-03-26 09:10:04'),
(10, 'PWKS8500', 'Polywhite Schulman KS8500', 'Additive', 7, '2018-03-26 09:00:14', '2018-03-26 09:10:32'),
(11, 'LXE-1', 'Pearl Tiara LXE-1', 'Additive', 7, '2018-03-26 09:01:07', '2018-03-26 09:10:52'),
(12, 'GR7603M', 'Recycle Mixing Grey_7603M', 'Recycle', 7, '2018-03-26 11:22:58', '2018-03-26 11:22:58');

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
(1, 'Tutorial Membuat AR', 1, 1, NULL, '2016-12-30 02:54:04', '2017-01-02 00:15:32'),
(2, 'Rombak Rumah', 2, 4, NULL, '2016-12-30 02:54:31', '2017-01-03 03:16:50'),
(3, 'Tips Membeli Laptop ', 1, 4, '29e121948479185bf49cb59f951be420.jpg', '2017-01-02 01:20:22', '2017-01-02 01:20:22'),
(5, 'Rap God', 3, 2, NULL, '2017-01-02 04:55:31', '2017-01-02 04:55:31'),
(6, 'Not Afraid Story', 3, 1, NULL, '2017-01-02 05:04:51', '2017-01-03 03:14:52'),
(7, 'Cara dapet jodoh dengan cepat', 4, 2, NULL, '2017-01-03 04:44:25', '2017-01-03 04:44:25');

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
(3, 'SUN', 'Sunyu', 'Singapore', '-', 7, NULL, '2018-03-26 07:18:50'),
(4, 'TI', 'Taishi', 'Malaysia', '-', 7, '2018-03-26 07:22:20', '2018-03-26 07:22:20'),
(5, 'TZB', 'Tischlerzentrum Bandung', 'Indonesia', '-', 7, '2018-03-26 07:27:33', '2018-03-26 07:39:08'),
(6, 'SD', 'Supreme Decor', 'Thailand', '-', 7, '2018-03-26 09:01:59', '2018-03-26 09:01:59'),
(7, 'SK', 'Sumber Kreasi', 'Indonesia', '-', 7, '2018-03-26 09:02:29', '2018-03-26 09:02:29'),
(8, 'KZ', 'Kurz', 'Jerman', '-', 7, '2018-03-26 09:03:05', '2018-03-26 09:03:05'),
(9, 'OM', 'Oakmoore', 'Australia', '-', 7, '2018-03-26 09:03:28', '2018-03-26 09:03:28'),
(10, 'OP', 'Omni Profit', 'China', '-', 7, '2018-03-26 09:04:04', '2018-03-26 09:04:04'),
(11, 'MP', 'Moc Phat', 'Thailand', '-', 7, '2018-03-26 09:05:00', '2018-03-26 09:05:00'),
(12, 'IC', 'Iran Choob', 'Iran', '-', 7, '2018-03-26 09:05:20', '2018-03-26 09:05:20'),
(13, 'RH', 'Rehau', 'Jerman', '-', 7, '2018-03-26 09:06:14', '2018-03-26 09:06:14'),
(14, 'CS1', 'Customer 1', 'Negara 1', '-', 7, '2018-03-26 09:07:40', '2018-03-26 09:07:40'),
(15, 'CS2', 'Customer 2', 'Negara 2', '-', 7, '2018-03-26 09:08:04', '2018-03-26 09:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `komposisies`
--

CREATE TABLE `komposisies` (
  `id` int(10) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_details`
--

CREATE TABLE `komposisi_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_master` int(10) UNSIGNED NOT NULL,
  `no_mesin` int(10) UNSIGNED NOT NULL,
  `melt_pump` int(10) UNSIGNED NOT NULL,
  `mat_comp1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `per_com1` int(10) UNSIGNED NOT NULL,
  `per_com2` int(10) UNSIGNED NOT NULL,
  `per_com3` int(10) UNSIGNED NOT NULL,
  `per_com4` int(10) UNSIGNED NOT NULL,
  `per_com5` int(10) UNSIGNED NOT NULL,
  `per_com6` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(11, '2018_03_20_172044_create_komposisiess_table', 1),
(12, '2018_03_20_172136_create_komposisies_details_table', 1),
(13, '2018_03_20_172232_create_perencanaansss_table', 1),
(14, '2018_03_20_172313_create_perencanaanss_detailss_table', 1),
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2016_12_11_110857_create_posts_table', 1),
(28, '2016_12_11_131056_laratrust_setup_tables', 1),
(29, '2016_12_12_114448_create_authors_table', 1),
(30, '2016_12_12_120408_create_books_table', 1),
(31, '2016_12_30_094623_create_borrow_logs_table', 1);

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
  `id_master` int(10) UNSIGNED NOT NULL,
  `no_mesin` int(10) UNSIGNED NOT NULL,
  `melt_pump` int(10) UNSIGNED NOT NULL,
  `mat_comp1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_comp6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
(1, 'admin', 'Admin', NULL, NULL, NULL),
(2, 'member', 'Member', NULL, NULL, NULL);

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
(1, 2),
(2, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stoks`
--

CREATE TABLE `stoks` (
  `id` int(10) UNSIGNED NOT NULL,
  `bahans_id` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stoks`
--

INSERT INTO `stoks` (`id`, `bahans_id`, `jumlah`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 12, 500, 7, '2018-03-26 11:57:35', '2018-03-26 11:57:35'),
(2, 10, 90, 7, '2018-03-27 16:08:06', '2018-03-27 16:08:06'),
(4, 8, 80, 7, '2018-03-28 07:16:31', '2018-03-28 10:13:58'),
(5, 2, 55, 7, '2018-03-28 10:18:32', '2018-03-28 10:18:32'),
(6, 11, 90, 7, '2018-03-29 04:01:50', '2018-03-29 04:01:50');

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
(1, 'Hersana', 'hersana27@gmail.com', '$2y$10$bktLLtgI5ZLPiHhebyd8X.n1lk/RDa9a.MniuLXw6y9RLG5hg1A2K', '8LhpGd9e1F0M0TXQBmjcU6VqmD0TkY0ybBpNXcs3FWO9NtDhGJQgeqdetssO', '2018-03-23 21:01:35', '2018-03-26 05:10:20'),
(2, 'Admin', 'admin@gmail.com', '$2y$10$LRaFArSCs22u34DbhVjH5O9nRnhnpl.Nd705tO9EIl96j27/xaQFO', 'YthCtFTGc3IDznGhCieZJwQFjckWNr5EmH6VcQf9fxzyDblhXaCX3Krn8rln', '2018-03-23 21:02:44', '2018-03-23 21:02:50'),
(7, 'SuperAdmin', 'sadmin@gmail.com', '$2y$10$qoQj8CPR6apOS6sOMhx5r.X70oYmIS1bOZbF8vl43Uhv08nQz/jr6', 'IBUkdA8bcf8kkw462SO7N2c1Lpk1qP5KicehoOUpDxV4z6IyUmiDSrGWmJFf', '2018-03-24 20:48:35', '2018-03-26 05:07:04');

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
-- Indexes for table `komposisies`
--
ALTER TABLE `komposisies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `komposisies_spk_num_unique` (`spk_num`),
  ADD KEY `komposisies_id_customer_index` (`customer_id`),
  ADD KEY `komposisies_user_id_index` (`user_id`);

--
-- Indexes for table `komposisi_details`
--
ALTER TABLE `komposisi_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komposisi_details_id_master_index` (`id_master`);

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
  ADD KEY `perencanaans_id_komposisi_index` (`komposisi_id`),
  ADD KEY `perencanaans_id_customer_index` (`customer_id`),
  ADD KEY `perencanaans_user_id_index` (`user_id`);

--
-- Indexes for table `perencanaan_details`
--
ALTER TABLE `perencanaan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perencanaan_details_id_master_index` (`id_master`);

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
  ADD KEY `stoks_user_id_index` (`user_id`),
  ADD KEY `stoks_bahans_id_foreign` (`bahans_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bahans`
--
ALTER TABLE `bahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `borrow_logs`
--
ALTER TABLE `borrow_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `komposisies`
--
ALTER TABLE `komposisies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komposisi_details`
--
ALTER TABLE `komposisi_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stoks`
--
ALTER TABLE `stoks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `komposisies`
--
ALTER TABLE `komposisies`
  ADD CONSTRAINT `komposisies_id_customer_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komposisies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komposisi_details`
--
ALTER TABLE `komposisi_details`
  ADD CONSTRAINT `komposisi_details_id_master_foreign` FOREIGN KEY (`id_master`) REFERENCES `komposisies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perencanaans`
--
ALTER TABLE `perencanaans`
  ADD CONSTRAINT `perencanaans_id_customer_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perencanaans_id_komposisi_foreign` FOREIGN KEY (`komposisi_id`) REFERENCES `komposisies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perencanaans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perencanaan_details`
--
ALTER TABLE `perencanaan_details`
  ADD CONSTRAINT `perencanaan_details_id_master_foreign` FOREIGN KEY (`id_master`) REFERENCES `perencanaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `stoks_bahans_id_foreign` FOREIGN KEY (`bahans_id`) REFERENCES `bahans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stoks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
