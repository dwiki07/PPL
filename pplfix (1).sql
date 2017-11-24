-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 02:05 PM
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
-- Table structure for table `beras`
--

CREATE TABLE `beras` (
  `id` int(10) UNSIGNED NOT NULL,
  `idGabah` int(11) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `tanggalKeluar` date DEFAULT NULL,
  `jumlahBeras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beras`
--

INSERT INTO `beras` (`id`, `idGabah`, `tanggalMasuk`, `tanggalKeluar`, `jumlahBeras`) VALUES
(2, 13, '2017-11-15', '2017-11-16', 2),
(3, 14, '2017-11-15', '2017-11-16', 3),
(4, 15, '2017-11-15', NULL, 2),
(5, 16, '2017-11-15', NULL, 1),
(6, 17, '2017-11-15', NULL, 2),
(7, 18, '2017-11-15', NULL, 2),
(8, 19, '2017-11-15', NULL, 2),
(9, 20, '2017-11-15', NULL, 4),
(10, 22, '2017-11-15', NULL, 2),
(11, 21, '2017-11-16', NULL, 2),
(12, 23, '2017-11-16', NULL, 5),
(13, 25, '2017-11-16', NULL, 1),
(14, 24, '2017-11-20', NULL, 1),
(15, 26, '2017-11-21', NULL, 2),
(16, 26, '2017-11-21', NULL, 1),
(17, 28, '2017-11-21', NULL, 1),
(18, 27, '2017-11-23', NULL, 3),
(19, 29, '2017-11-23', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gudangs`
--

CREATE TABLE `gudangs` (
  `idSupplier` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `tanggalPenerimaan` date NOT NULL,
  `tanggalPenggilingan` date DEFAULT NULL,
  `jumlahGabah` int(11) NOT NULL,
  `hargaGabah` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudangs`
--

INSERT INTO `gudangs` (`idSupplier`, `id`, `tanggalPenerimaan`, `tanggalPenggilingan`, `jumlahGabah`, `hargaGabah`) VALUES
(3, 9, '2017-11-16', '2017-11-15', 9, 8000),
(2, 10, '2017-11-15', '2017-11-16', 2, 8000),
(1, 11, '2017-11-09', '2017-11-15', 2, 2000),
(1, 12, '2017-11-16', '2017-11-15', 4, 8000),
(2, 13, '2017-11-08', '2017-11-15', 2, 2500),
(3, 14, '2017-11-16', '2017-11-15', 6, 8000),
(1, 15, '2017-11-13', '2017-11-15', 2, 8500),
(3, 16, '2017-11-15', '2017-11-15', 3, 7000),
(2, 17, '2017-11-17', '2017-11-15', 5, 2500),
(2, 18, '2017-11-22', '2017-11-15', 4, 2000),
(2, 19, '2017-11-01', '2017-11-15', 6, 8000),
(1, 20, '2017-11-17', '2017-11-15', 6, 8000),
(1, 21, '2017-11-17', '2017-11-16', 4, 9000),
(3, 22, '2017-11-16', '2017-11-15', 4, 7000),
(2, 23, '2017-11-16', '2017-11-16', 6, 8000),
(3, 24, '2017-11-23', '2017-11-20', 8, 4500),
(2, 25, '2017-11-15', '2017-11-16', 5, 2900),
(3, 26, '2017-11-20', '2017-11-21', 4, 8000),
(1, 27, '2017-11-01', '2017-11-23', 3, 3000),
(2, 28, '2017-11-22', '2017-11-21', 7, 6000),
(1, 29, '2017-11-21', '2017-11-23', 5, 5000),
(4, 30, '2017-11-21', NULL, 5, 7000),
(1, 31, '2017-11-12', NULL, 12, 2300),
(3, 32, '2017-11-02', NULL, 12, 2400),
(4, 33, '2017-11-21', NULL, 6, 6000),
(2, 34, '2017-11-22', NULL, 6, 56789);

-- --------------------------------------------------------

--
-- Table structure for table `kualitas`
--

CREATE TABLE `kualitas` (
  `idGabah` int(11) NOT NULL,
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
  `cekButirGabah` int(11) NOT NULL,
  `kualitas` varchar(1) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kualitas`
--

INSERT INTO `kualitas` (`idGabah`, `id_kualitas`, `cekHama`, `cekBau`, `cekDerajatSosoh`, `cekKadarAir`, `cekButirUtuh`, `cekButirPatah`, `cekButirMenir`, `cekButirHijau`, `cekButirKuningRusak`, `cekButirGabah`, `kualitas`, `updated_at`, `created_at`) VALUES
(10, 47, 50, 100, 100, 80, 100, 100, 100, 100, 100, 100, 'A', '2017-11-15 11:36:32', '2017-11-15 11:36:32'),
(9, 48, 50, 50, 30, 30, 30, 30, 30, 100, 100, 100, 'B', '2017-11-15 11:42:40', '2017-11-15 11:42:40'),
(9, 49, 100, 100, 100, 100, 100, 100, 80, 100, 100, 100, 'A', '2017-11-15 11:52:09', '2017-11-15 11:52:09'),
(9, 50, 100, 100, 100, 100, 100, 100, 80, 100, 100, 100, 'A', '2017-11-15 11:53:32', '2017-11-15 11:53:32'),
(11, 51, 50, 100, 100, 100, 100, 100, 100, 100, 100, 100, 'A', '2017-11-15 12:11:35', '2017-11-15 12:11:35'),
(12, 52, 50, 50, 30, 100, 100, 100, 100, 100, 100, 100, 'B', '2017-11-15 13:47:29', '2017-11-15 13:47:29'),
(13, 53, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 'A', '2017-11-15 14:40:53', '2017-11-15 14:40:53'),
(14, 54, 50, 100, 100, 100, 100, 100, 100, 100, 100, 100, 'A', '2017-11-15 15:15:09', '2017-11-15 15:15:09'),
(15, 55, 100, 100, 100, 100, 100, 100, 100, 100, 100, 80, 'A', '2017-11-15 15:18:02', '2017-11-15 15:18:02'),
(16, 56, 50, 100, 100, 100, 100, 30, 30, 50, 50, 30, 'B', '2017-11-15 15:21:07', '2017-11-15 15:21:07'),
(17, 57, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 'A', '2017-11-15 15:29:13', '2017-11-15 15:29:13'),
(18, 58, 50, 50, 30, 30, 30, 30, 30, 50, 50, 30, 'C', '2017-11-15 15:31:13', '2017-11-15 15:31:13'),
(19, 59, 50, 50, 30, 30, 30, 30, 30, 50, 50, 30, 'C', '2017-11-15 15:32:32', '2017-11-15 15:32:32'),
(20, 60, 100, 100, 30, 30, 30, 30, 30, 50, 50, 30, 'C', '2017-11-15 17:06:34', '2017-11-15 17:06:34'),
(22, 61, 50, 50, 30, 30, 30, 30, 30, 50, 50, 30, 'C', '2017-11-15 17:25:16', '2017-11-15 17:25:16'),
(21, 62, 50, 100, 100, 100, 100, 100, 100, 100, 100, 100, 'A', '2017-11-16 00:29:46', '2017-11-16 00:29:46'),
(23, 63, 100, 50, 80, 80, 30, 100, 80, 100, 50, 80, 'B', '2017-11-16 00:35:32', '2017-11-16 00:35:32'),
(25, 64, 50, 50, 100, 100, 100, 100, 100, 100, 50, 30, 'A', '2017-11-16 06:05:31', '2017-11-16 06:05:31'),
(24, 65, 50, 100, 100, 100, 100, 100, 80, 100, 100, 100, 'A', '2017-11-20 12:08:40', '2017-11-20 12:08:40'),
(26, 66, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 'A', '2017-11-21 07:38:36', '2017-11-21 07:38:36'),
(26, 67, 50, 50, 80, 80, 30, 80, 30, 100, 50, 80, 'B', '2017-11-21 07:41:24', '2017-11-21 07:41:24'),
(28, 68, 100, 50, 80, 100, 30, 80, 100, 50, 100, 80, 'B', '2017-11-21 09:19:22', '2017-11-21 09:19:22'),
(27, 69, 50, 100, 80, 80, 80, 80, 100, 100, 100, 80, 'A', '2017-11-23 01:16:21', '2017-11-23 01:16:21'),
(29, 70, 50, 50, 30, 30, 30, 30, 30, 50, 50, 30, 'C', '2017-11-23 01:17:32', '2017-11-23 01:17:32');

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
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaSupplier` varchar(255) NOT NULL,
  `alamatSupplier` varchar(255) NOT NULL,
  `nomorTelepon` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `namaSupplier`, `alamatSupplier`, `nomorTelepon`) VALUES
(1, 'ivan Noor', 'banyuwangi', 628123456789),
(2, 'Kiki', 'jember', 62812098765),
(3, 'Annas', 'magetan', 6294737348690),
(4, 'putri', 'TULUNGAGUNG', 6289765432456);

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
(1, 'dwiki', 'dwikiaditya07@gmail.com', '$2y$10$usiG7rKoeokw3xjfTI.ANudym37c2BY.kz5Bm/ik6q7j5XZ/nCQR2', 'kTcxsWtBORPJs1f6YWTzP5V2OLckcdXg1nGw5CS2v5c31M6tKyduzn2BBsrq', '2017-10-25 07:09:36', '2017-10-25 07:09:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beras`
--
ALTER TABLE `beras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `beras`
--
ALTER TABLE `beras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `kualitas`
--
ALTER TABLE `kualitas`
  MODIFY `id_kualitas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
