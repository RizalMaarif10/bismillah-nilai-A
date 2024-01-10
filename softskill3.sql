-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2023 pada 16.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softskill3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_22_031705_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `prodi` enum('Teknologi Informasi','Teknik Sipil','','') NOT NULL,
  `level` enum('2021','2022','2023','') NOT NULL,
  `fasilitator` varchar(50) NOT NULL,
  `nilai` int(100) NOT NULL,
  `grade` varchar(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nim`, `nama`, `password`, `prodi`, `level`, `fasilitator`, `nilai`, `grade`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '212520001', 'Rizal Maarif', '$2y$10$6CinbACNvzSYkzAW7ypOj.C.9jixV5j4Bt/tpl6UjBP1cteVRJm96', 'Teknologi Informasi', '2021', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(2, '212520002', 'Nur Cholis R', '$2y$10$IEoj.rulwMdnfY/z2eQra.hSUGhi1zeCOdlcSWBCRnSrPXi42LMgK', 'Teknologi Informasi', '2021', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(3, '212520003', 'Iqbal Junaed', '$2y$10$aw/8P/GLDWum5PZ94lKEJuTST14m1xIP5jwPHuFZiYSPoPRx4TSM.', 'Teknologi Informasi', '2021', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(4, '212520004', 'Dito Fahri S', '$2y$10$..5FKPM/cO6by0h.FZrq/u.42iEttA.I7u1SlJHgkuwwDfT.MlvV6', 'Teknologi Informasi', '2021', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(5, '212520005', 'Indra', '$2y$10$vEjik9UWoQ//9.MBntt8suDWa3HDDjlzsOxS0lLCG009R21nabc5a', 'Teknologi Informasi', '2021', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(6, '212520006', 'Panggah', '$2y$10$SDtTwaePfF8kwOLluht7julNVuOTyLxTbrSIQr5sm1FP2rDNVdO2.', 'Teknologi Informasi', '2021', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(7, '222520001', 'Agil M', '$2y$10$q9Zd9Sa0GSsPNNvjC8bprOXfrqRhqDm.NHJbep9xPLPHqOB5uTWxW', 'Teknik Sipil', '2022', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(8, '222520002', 'Fajar Satria T', '$2y$10$z8Fc4aSWJlI5W25DanmS7.AbVmIWuy6/F3uREb/8lfilnTMef8aSi', 'Teknik Sipil', '2022', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(9, '222520003', 'Fatur Rohman', '$2y$10$liHIpMD2khRymx7d69TLi.bSVKdj3dlLfnsz5cd6aS3vmD2wn7392', 'Teknik Sipil', '2022', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL),
(10, '222520004', 'Zein Rahmat H', '$2y$12$k375KD1wxwxj38mEIJWQhuQaXZ8qLB687QH6YcbE2J5LfmG4KIvR2', 'Teknik Sipil', '2022', 'Pilih Fasilitator', 0, 'E', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
