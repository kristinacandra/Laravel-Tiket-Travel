-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 08:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitiket_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `waktu_keberangkatan` time NOT NULL,
  `tanggal_tiba` date NOT NULL,
  `waktu_tiba` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `tanggal_keberangkatan`, `waktu_keberangkatan`, `tanggal_tiba`, `waktu_tiba`, `created_at`, `updated_at`) VALUES
(2, '2023-05-29', '14:51:00', '2023-05-29', '15:51:00', '2023-06-02 00:49:42', '2023-06-04 10:48:58'),
(3, '2023-06-01', '14:57:00', '2023-06-01', '17:01:00', '2023-06-02 00:56:42', '2023-06-04 10:50:09'),
(4, '2023-06-03', '07:00:00', '2023-06-03', '11:19:00', '2023-06-03 03:07:41', '2023-06-04 10:50:22'),
(5, '2023-06-05', '08:35:00', '2023-06-05', '13:36:00', '2023-06-04 11:36:15', '2023-06-04 11:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`id`, `kode_kapal`, `nama_kapal`, `kode_rute`, `created_at`, `updated_at`) VALUES
(3, 'KL01', 'KM KELUD', 'TJPR-BLWN', '2023-06-02 03:35:08', '2023-06-03 07:34:50'),
(4, 'KL02', 'KM AWU', 'SBY-KPG', '2023-06-03 07:35:59', '2023-06-03 07:35:59'),
(5, 'KL03', 'KM CIREMAI', 'JKT-JYP', '2023-06-03 07:36:41', '2023-06-03 07:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`id`, `kode_kereta`, `nama_kereta`, `kode_rute`, `created_at`, `updated_at`) VALUES
(2, 'KA01', 'GAJAYANA', 'GMBR-MLG', '2023-06-03 07:32:13', '2023-06-03 07:32:13'),
(3, 'KA02', 'SINGASARI', 'JKT-BL', '2023-06-03 07:33:06', '2023-06-03 07:33:06'),
(4, 'KA03', 'KARTANEGARA', 'ML-PWT', '2023-06-03 07:33:51', '2023-06-03 07:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `kode_kota`, `kota_asal`, `kota_tujuan`, `created_at`, `updated_at`) VALUES
(2, 'MLG-SBY', 'MALANG', 'SURABAYA', '2023-06-03 07:17:37', '2023-06-04 10:53:52'),
(3, 'JKT-BDG', 'JAKARTA', 'BANDUNG', '2023-06-03 07:17:52', '2023-06-04 10:55:52'),
(4, 'SDA-BGR', 'SIDOARJO', 'BOGOR', '2023-06-03 07:18:26', '2023-06-04 10:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `maskapai`
--

CREATE TABLE `maskapai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_maskapai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_maskapai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maskapai`
--

INSERT INTO `maskapai` (`id`, `kode_maskapai`, `nama_maskapai`, `kode_rute`, `created_at`, `updated_at`) VALUES
(2, 'M01', 'GARUDA INDONESIA', 'JKT-SBY', '2023-06-03 07:20:27', '2023-06-03 07:46:02'),
(3, 'M02', 'LION AIR', 'JKT-DIY', '2023-06-03 07:24:25', '2023-06-03 07:46:08'),
(4, 'M03', 'CITILINK INDONESIA', 'SMG-BJM', '2023-06-03 07:27:36', '2023-06-04 10:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_06_02_065013_create_jadwals_table', 1),
(5, '2023_06_02_085443_create_kapals_table', 2),
(6, '2023_06_02_132241_create_tiketpesawats_table', 3),
(7, '2023_06_02_140336_create_tiketpesawat_table', 4),
(8, '2023_06_02_142411_create_keretas_table', 5),
(9, '2023_06_02_144127_create_kotas_table', 6),
(10, '2023_06_02_145458_create_maskapais_table', 7),
(11, '2023_06_03_035220_create_tiketpesawat_table', 8),
(12, '2023_06_03_042802_create_pegawais_table', 9),
(13, '2023_06_03_053825_create_penggunas_table', 10),
(14, '2023_06_03_102230_create_tiketkapals_table', 11),
(15, '2023_06_03_105142_create_tiketkeretas_table', 12),
(16, '2023_06_03_113819_create_pespesawats_table', 13),
(17, '2023_06_03_124023_create_peskapals_table', 14),
(18, '2023_06_03_133215_create_peskeretas_table', 15),
(19, '2023_06_04_074310_create_tiketpesawat_table', 16),
(20, '2023_06_04_090354_create_tiketkapal_table', 17),
(21, '2023_06_04_095918_create_tiketkereta_table', 18);

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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `id_pegawai`, `nama_pegawai`, `jabatan`, `id_pesanan`, `created_at`, `updated_at`) VALUES
(2, 'PGW01', 'KRISTINA', 'ADMINISTRASI', 'PSP01', '2023-06-02 23:34:44', '2023-06-03 07:38:01'),
(3, 'PGW02', 'LIA', 'PROMOTOR', 'PSKA04', '2023-06-03 07:39:19', '2023-06-03 07:39:19'),
(4, 'PGW03', 'ABIAN', 'ADMINISTRATOR', 'PKL02', '2023-06-03 07:40:00', '2023-06-03 07:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `id_pengguna`, `nama_pengguna`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'PEG01', 'CANDRA', 'MALANG', '087654321580', '2023-06-02 23:38:14', '2023-06-02 23:38:23'),
(2, 'PEG02', 'DEWI', 'SURABAYA', '081263920192', '2023-06-03 07:41:08', '2023-06-03 07:41:08'),
(3, 'PEG03', 'TIARA', 'MALANG', '085610026498', '2023-06-03 07:41:39', '2023-06-03 07:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `peskapal`
--

CREATE TABLE `peskapal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peskapal`
--

INSERT INTO `peskapal` (`id`, `id_pesanan`, `id_tiket`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'PKL01', 'TK01', 140000, '2023-06-03 06:31:15', '2023-06-03 08:00:58'),
(2, 'PKL02', 'TKL04', 210000, '2023-06-03 08:00:48', '2023-06-03 08:00:48'),
(3, 'PKL03', 'TKL02', 130000, '2023-06-03 08:01:18', '2023-06-03 08:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `peskereta`
--

CREATE TABLE `peskereta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peskereta`
--

INSERT INTO `peskereta` (`id`, `id_pesanan`, `id_tiket`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'PKA01', 'TKA01', 67000, '2023-06-03 07:58:48', '2023-06-03 07:58:48'),
(2, 'PKA02', 'TKA03', 78000, '2023-06-03 07:59:09', '2023-06-03 07:59:09'),
(3, 'PKA03', 'TKA05', 80000, '2023-06-03 07:59:28', '2023-06-03 07:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `tiketkapal`
--

CREATE TABLE `tiketkapal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kapal` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiketkapal`
--

INSERT INTO `tiketkapal` (`id`, `id_tiket`, `id_kapal`, `id_jadwal`, `id_kota`, `id_pengguna`, `kelas`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'TKL01', 3, 4, 3, 3, 'EKONOMI', 150000, '2023-06-04 02:28:58', '2023-06-04 10:48:22'),
(5, 'TKL02', 3, 3, 4, 1, 'EKONOMI', 210000, '2023-06-04 11:35:01', '2023-06-04 11:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `tiketkereta`
--

CREATE TABLE `tiketkereta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kereta` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiketkereta`
--

INSERT INTO `tiketkereta` (`id`, `id_tiket`, `id_kereta`, `id_jadwal`, `id_kota`, `id_pengguna`, `kelas`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'TKA01', 3, 4, 4, 2, 'EKSEKUTIF', 150000, '2023-06-04 05:43:54', '2023-06-04 11:31:54'),
(2, 'TKA02', 2, 2, 2, 1, 'EKONOMI', 15000, '2023-06-04 05:54:10', '2023-06-04 11:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `tiketpesawat`
--

CREATE TABLE `tiketpesawat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_maskapai` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiketpesawat`
--

INSERT INTO `tiketpesawat` (`id`, `id_tiket`, `id_maskapai`, `id_jadwal`, `id_kota`, `id_pengguna`, `kelas`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'TP01', 2, 3, 3, 1, 'EKONOMI', 130000, '2023-06-04 01:53:39', '2023-06-04 10:58:27'),
(2, 'TP02', 4, 4, 4, 3, 'EKSEKUTIF', 210000, '2023-06-04 09:50:25', '2023-06-04 10:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kapal_kode_kapal_unique` (`kode_kapal`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kereta_kode_kereta_unique` (`kode_kereta`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kota_kode_kota_unique` (`kode_kota`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maskapai_kode_maskapai_unique` (`kode_maskapai`);

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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_id_pegawai_unique` (`id_pegawai`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengguna_id_pengguna_unique` (`id_pengguna`);

--
-- Indexes for table `peskapal`
--
ALTER TABLE `peskapal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peskapal_id_pesanan_unique` (`id_pesanan`);

--
-- Indexes for table `peskereta`
--
ALTER TABLE `peskereta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peskereta_id_pesanan_unique` (`id_pesanan`);

--
-- Indexes for table `tiketkapal`
--
ALTER TABLE `tiketkapal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tiketkapal_id_tiket_unique` (`id_tiket`),
  ADD KEY `tiketkapal_id_kapal_foreign` (`id_kapal`),
  ADD KEY `tiketkapal_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `tiketkapal_id_kota_foreign` (`id_kota`),
  ADD KEY `tiketkapal_id_pengguna_foreign` (`id_pengguna`);

--
-- Indexes for table `tiketkereta`
--
ALTER TABLE `tiketkereta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tiketkereta_id_tiket_unique` (`id_tiket`),
  ADD KEY `tiketkereta_id_kereta_foreign` (`id_kereta`),
  ADD KEY `tiketkereta_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `tiketkereta_id_kota_foreign` (`id_kota`),
  ADD KEY `tiketkereta_id_pengguna_foreign` (`id_pengguna`);

--
-- Indexes for table `tiketpesawat`
--
ALTER TABLE `tiketpesawat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tiketpesawat_id_tiket_unique` (`id_tiket`),
  ADD KEY `tiketpesawat_id_maskapai_foreign` (`id_maskapai`),
  ADD KEY `tiketpesawat_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `tiketpesawat_id_kota_foreign` (`id_kota`),
  ADD KEY `tiketpesawat_id_pengguna_foreign` (`id_pengguna`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maskapai`
--
ALTER TABLE `maskapai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peskapal`
--
ALTER TABLE `peskapal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peskereta`
--
ALTER TABLE `peskereta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiketkapal`
--
ALTER TABLE `tiketkapal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tiketkereta`
--
ALTER TABLE `tiketkereta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiketpesawat`
--
ALTER TABLE `tiketpesawat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiketkapal`
--
ALTER TABLE `tiketkapal`
  ADD CONSTRAINT `tiketkapal_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketkapal_id_kapal_foreign` FOREIGN KEY (`id_kapal`) REFERENCES `kapal` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketkapal_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketkapal_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tiketkereta`
--
ALTER TABLE `tiketkereta`
  ADD CONSTRAINT `tiketkereta_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketkereta_id_kereta_foreign` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketkereta_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketkereta_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tiketpesawat`
--
ALTER TABLE `tiketpesawat`
  ADD CONSTRAINT `tiketpesawat_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketpesawat_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketpesawat_id_maskapai_foreign` FOREIGN KEY (`id_maskapai`) REFERENCES `maskapai` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiketpesawat_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
