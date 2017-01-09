-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2017 at 11:38 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `chariots`
--

CREATE TABLE `chariots` (
  `id` int(10) UNSIGNED NOT NULL,
  `montant` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chariots`
--

INSERT INTO `chariots` (`id`, `montant`, `produit_id`, `user_id`, `total`, `created_at`, `updated_at`) VALUES
(20, 1, 3, 2, '300000.00', '2017-01-09 10:17:37', '2017-01-09 10:17:37'),
(21, 1, 4, 2, '76000.00', '2017-01-09 10:38:10', '2017-01-09 10:38:10');

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
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2017_01_04_124231_create_produits_table', 1),
(34, '2017_01_04_134333_create_chariots_table', 1),
(35, '2017_01_07_090956_create_orders_table', 1),
(37, '2017_01_07_092126_create_order_books_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, '', '200000.00', '2017-01-07 09:29:17', '2017-01-07 09:29:17'),
(2, 1, '', '200000.00', '2017-01-07 09:29:56', '2017-01-07 09:29:56'),
(3, 1, '', '200000.00', '2017-01-07 09:30:41', '2017-01-07 09:30:41'),
(4, 1, '', '200000.00', '2017-01-07 09:33:38', '2017-01-07 09:33:38'),
(5, 1, '', '200000.00', '2017-01-07 09:38:24', '2017-01-07 09:38:24'),
(6, 1, '', '200000.00', '2017-01-07 09:39:30', '2017-01-07 09:39:30'),
(7, 1, '', '200000.00', '2017-01-07 09:43:18', '2017-01-07 09:43:18'),
(8, 1, '', '200000.00', '2017-01-07 09:45:26', '2017-01-07 09:45:26'),
(9, 1, '', '200000.00', '2017-01-07 09:47:10', '2017-01-07 09:47:10'),
(10, 1, '', '200000.00', '2017-01-07 09:47:50', '2017-01-07 09:47:50'),
(11, 1, '', '200000.00', '2017-01-07 09:50:04', '2017-01-07 09:50:04'),
(12, 1, '', '200000.00', '2017-01-07 09:50:20', '2017-01-07 09:50:20'),
(13, 1, '', '200000.00', '2017-01-07 09:51:43', '2017-01-07 09:51:43'),
(14, 1, 'polel', '396000.00', '2017-01-07 10:18:11', '2017-01-07 10:18:11'),
(15, 1, '', '300000.00', '2017-01-07 10:21:16', '2017-01-07 10:21:16'),
(16, 1, '', '376000.00', '2017-01-07 10:21:54', '2017-01-07 10:21:54'),
(17, 1, '', '376000.00', '2017-01-07 10:24:50', '2017-01-07 10:24:50'),
(18, 1, '', '376000.00', '2017-01-07 10:26:31', '2017-01-07 10:26:31'),
(19, 1, '', '380000.00', '2017-01-07 10:28:08', '2017-01-07 10:28:08'),
(20, 1, '', '0.00', '2017-01-07 10:33:42', '2017-01-07 10:33:42'),
(21, 1, '', '0.00', '2017-01-07 10:37:50', '2017-01-07 10:37:50'),
(22, 1, '', '0.00', '2017-01-07 10:38:08', '2017-01-07 10:38:08'),
(23, 1, '', '0.00', '2017-01-07 10:39:01', '2017-01-07 10:39:01'),
(24, 1, '', '0.00', '2017-01-07 10:40:32', '2017-01-07 10:40:32'),
(25, 1, '', '0.00', '2017-01-07 10:45:57', '2017-01-07 10:45:57'),
(26, 1, '', '0.00', '2017-01-07 10:53:12', '2017-01-07 10:53:12'),
(27, 1, '', '0.00', '2017-01-07 10:53:19', '2017-01-07 10:53:19'),
(28, 1, '', '0.00', '2017-01-07 10:53:37', '2017-01-07 10:53:37'),
(29, 1, '', '0.00', '2017-01-07 10:54:43', '2017-01-07 10:54:43'),
(30, 1, '', '0.00', '2017-01-07 10:55:07', '2017-01-07 10:55:07'),
(31, 1, '', '0.00', '2017-01-07 10:55:51', '2017-01-07 10:55:51'),
(32, 2, '', '0.00', '2017-01-07 18:01:40', '2017-01-07 18:01:40'),
(33, 2, 'dakar', '76000.00', '2017-01-07 18:02:53', '2017-01-07 18:02:53'),
(34, 2, '', '300000.00', '2017-01-07 18:23:27', '2017-01-07 18:23:27'),
(35, 1, 'polel', '420000.00', '2017-01-09 08:14:45', '2017-01-09 08:14:45'),
(36, 2, 'Saracoura', '496000.00', '2017-01-09 09:48:59', '2017-01-09 09:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_produit`
--

CREATE TABLE `order_produit` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_produit`
--

INSERT INTO `order_produit` (`id`, `order_id`, `produit_id`, `amount`, `prix`, `total`) VALUES
(1, 12, 1, 1, '200000.00', '0.00'),
(2, 13, 1, 1, '200000.00', '200000.00'),
(3, 14, 8, 1, '320000.00', '320000.00'),
(4, 14, 4, 1, '76000.00', '76000.00'),
(5, 15, 3, 1, '300000.00', '300000.00'),
(6, 16, 3, 1, '300000.00', '300000.00'),
(7, 16, 4, 1, '76000.00', '76000.00'),
(8, 17, 3, 1, '300000.00', '300000.00'),
(9, 17, 4, 1, '76000.00', '76000.00'),
(10, 18, 3, 1, '300000.00', '300000.00'),
(11, 18, 4, 1, '76000.00', '76000.00'),
(12, 19, 2, 1, '180000.00', '380000.00'),
(13, 19, 1, 1, '200000.00', '380000.00'),
(14, 33, 4, 1, '76000.00', '76000.00'),
(15, 34, 3, 1, '300000.00', '300000.00'),
(16, 35, 3, 1, '300000.00', '420000.00'),
(17, 35, 5, 1, '120000.00', '420000.00'),
(18, 36, 3, 1, '300000.00', '496000.00'),
(19, 36, 4, 1, '76000.00', '496000.00'),
(20, 36, 5, 1, '120000.00', '496000.00');

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
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `filePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `title`, `description`, `filePath`, `type`, `prix`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'hp1', 'tres robuste', '2017-01-07-09-53-44-ordi2.png', 'ordinateur', 300000, 1, '2017-01-07 09:53:44', '2017-01-07 09:53:44'),
(4, 'samsung', 'restez connete', '2017-01-07-09-54-27-smartphone_PNG8519.png', 'telephone', 76000, 1, '2017-01-07 09:54:27', '2017-01-07 09:54:27'),
(5, 'htc', 'va au dela de ses limites', '2017-01-07-09-55-11-smartphone_PNG8500.png', 'telephone', 120000, 1, '2017-01-07 09:55:11', '2017-01-07 09:55:11'),
(9, 'S6 edge', 'tres robuste', '2017-01-08-16-23-21-Samsung-Galaxy-S6-edge.png', 'telephone', 350000, 2, '2017-01-08 16:23:21', '2017-01-08 16:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amad', 'a@yahoo.fr', '$2y$10$VU7uG22VskQQHpY.MCzZd.6SvZDEBjLQ9cZQkNZiV3AEkKSV9iDtW', 0, 'wHdVVM2nqGMCXUGdPI1jbgDpyS7VpcXfJzoxEX3nNapmjmWvmwVMo1TvKJDX', '2017-01-07 09:24:00', '2017-01-09 11:11:53'),
(2, 'diallo', 'amad1dia@outlook.com', '$2y$10$0kSPITXRHKKJkiU1COz13u11uv2OYR/07IPC6pUccaS0GEe2JRZ9O', 0, 'kRFb8r3x85Q6jzHYGGdXtltFZRIzElYzDXns4VGVpXQm2aLKARVoaBuJ3sM2', '2017-01-07 17:51:00', '2017-01-09 11:00:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chariots`
--
ALTER TABLE `chariots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_produit`
--
ALTER TABLE `order_produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `chariots`
--
ALTER TABLE `chariots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `order_produit`
--
ALTER TABLE `order_produit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
