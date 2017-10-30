-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 11:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pplfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `kualitas`
--

CREATE TABLE `kualitas` (
  `id_kualitas` int(11) UNSIGNED NOT NULL,
  `cekHama` int(11) NOT NULL,
  `cekBau` int(11) NOT NULL,
  `cekDerajatSosoh` int(11) NOT NULL,
  `cekKadarAir` int(11) NOT NULL,
  `cekButirUtuh` int(11) NOT NULL,
  `cekButirPatah` int(11) NOT NULL,
  `cekButirMenir` int(11) NOT NULL,
  `cekButirHijau` int(11) NOT NULL,
  `cekButirKuningRusak` int(11) NOT NULL,
  `cekButirGabah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kualitas`
--

INSERT INTO `kualitas` (`id_kualitas`, `cekHama`, `cekBau`, `cekDerajatSosoh`, `cekKadarAir`, `cekButirUtuh`, `cekButirPatah`, `cekButirMenir`, `cekButirHijau`, `cekButirKuningRusak`, `cekButirGabah`) VALUES
(1, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
(2, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
(3, 50, 50, 80, 80, 80, 80, 80, 50, 50, 80),
(4, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dwiki', 'dwikiaditya07@gmail.com', '$2y$10$usiG7rKoeokw3xjfTI.ANudym37c2BY.kz5Bm/ik6q7j5XZ/nCQR2', 'zPyP8lOlUW0zeIEdyIKzOGteUJnZsVktA6z9EMLB256xsXvH4oNFLS3Vulds', '2017-10-25 07:09:36', '2017-10-25 07:09:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kualitas`
--
ALTER TABLE `kualitas`
  ADD PRIMARY KEY (`id_kualitas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kualitas`
--
ALTER TABLE `kualitas`
  MODIFY `id_kualitas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
