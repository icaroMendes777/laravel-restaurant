-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2023 at 08:37 AM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` smallint NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `order`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sanduíches!', 1, 1, NULL, '2023-11-12 03:18:00', NULL),
(2, 'Bebidas', 1, 0, '2023-11-12 01:24:34', '2023-11-12 03:18:22', NULL),
(3, 'Pratos Feitos', 1, 1, '2023-11-12 01:25:02', '2023-11-12 03:18:46', NULL),
(4, 'Outros', 1, 1, '2023-11-12 01:25:02', '2023-11-12 01:25:02', NULL),
(5, 'teste', 1, 0, '2023-11-12 03:33:50', '2023-11-12 03:33:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_11_11_161127_create_products_table', 2),
(12, '2023_11_11_164211_create_categories_table', 3),
(13, '2023_11_11_223643_add_category_id_to_products', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` smallint NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `ingredients` text COLLATE utf8mb4_unicode_ci,
  `price` double(5,2) DEFAULT NULL,
  `picture1_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture2_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture3_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `order`, `description`, `ingredients`, `price`, `picture1_url`, `picture2_url`, `picture3_url`, `active`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(1, 'Burguer', NULL, 1, NULL, NULL, 27.50, NULL, NULL, NULL, 0, NULL, '2023-11-24 03:44:51', NULL, 4),
(2, 'pastel', '2', 1, 'Pastel desc', 'massa e vento', 100.00, NULL, NULL, NULL, 1, '2023-11-11 22:17:20', '2023-11-12 21:48:21', NULL, 1),
(3, 'asc', NULL, 4, NULL, NULL, 12.00, NULL, NULL, NULL, 1, '2023-11-11 22:18:13', '2023-11-12 21:48:21', NULL, 1),
(4, 'Comida', NULL, 1, NULL, NULL, 2.10, NULL, NULL, NULL, 0, '2023-11-11 22:18:25', '2023-11-24 03:44:54', NULL, 2),
(5, 'novo', NULL, 1, NULL, NULL, 2.00, NULL, NULL, NULL, 1, '2023-11-11 22:34:07', '2023-11-12 00:25:12', NULL, NULL),
(6, 'teste', '1t', 2, 'descrição teste', 'ingredientes teste', 12.50, NULL, NULL, NULL, 1, '2023-11-11 23:30:14', '2023-11-12 22:00:07', NULL, 3),
(7, 'Sorvete', 'asc', 1, 'asc', 'asc', 27.00, NULL, NULL, NULL, 0, '2023-11-11 23:47:20', '2023-11-24 03:46:06', NULL, 2),
(8, 'Pastel', '1', 1, 'pasteu!', 'pasteu!', 19.90, NULL, NULL, NULL, 1, '2023-11-12 00:09:05', '2023-11-12 00:09:05', NULL, NULL),
(9, 'qqq', 'qq', 3, 'q', 'q', 1.00, NULL, NULL, NULL, 1, '2023-11-12 01:52:13', '2023-11-24 03:42:06', NULL, 1),
(10, '111', '1', 1, '1', '1', 1.00, NULL, NULL, NULL, 1, '2023-11-12 01:52:55', '2023-11-12 01:52:55', NULL, NULL),
(11, '111', NULL, 1, NULL, NULL, 1.00, NULL, NULL, NULL, 1, '2023-11-12 01:56:04', '2023-11-12 01:56:04', NULL, NULL),
(12, 'teste??', NULL, 3, '11', NULL, 11.00, NULL, NULL, NULL, 1, '2023-11-12 02:07:50', '2023-11-12 22:00:07', NULL, 3),
(13, 'Burguer', NULL, 1, NULL, NULL, 27.50, NULL, NULL, NULL, 0, NULL, '2023-11-12 22:00:07', NULL, 3),
(14, 'pastel', '2', 3, 'Pastel desc', 'massa e vento', 100.00, NULL, NULL, NULL, 1, '2023-11-11 22:17:20', '2023-11-12 21:48:21', NULL, 1),
(15, 'Sorvete', 'asc', 1, 'asc', 'asc', 27.00, NULL, NULL, NULL, 1, '2023-11-11 23:47:20', '2023-11-12 00:24:52', NULL, 2),
(16, 'Sushi', NULL, 1, NULL, 'peixe, arroz', 27.00, NULL, NULL, NULL, 0, '2023-11-12 23:17:36', '2023-11-12 23:17:36', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
