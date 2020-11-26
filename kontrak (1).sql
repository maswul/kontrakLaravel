-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2020 pada 15.27
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontrak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `j_termins`
--

CREATE TABLE `j_termins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `no_spk` int(11) DEFAULT NULL,
  `no_ba_lapdal` int(11) DEFAULT NULL,
  `no_ba_lapkhir` int(11) DEFAULT NULL,
  `no_bast_lapdal` int(11) DEFAULT NULL,
  `no_bast_lapkhir` int(11) DEFAULT NULL,
  `no_bast_pekerjaan` int(11) DEFAULT NULL,
  `no_bast_pembayaran` int(11) DEFAULT NULL,
  `tgl_spk` date DEFAULT NULL,
  `tgl_ba_lapdal` date DEFAULT NULL,
  `tgl_ba_lapkhir` date DEFAULT NULL,
  `tgl_bast_lapdal` date DEFAULT NULL,
  `tgl_bast_lapkhir` date DEFAULT NULL,
  `tgl_bast_pekerjaan` date DEFAULT NULL,
  `tgl_bast_pembayaran` date DEFAULT NULL,
  `tgl_0` date DEFAULT NULL,
  `tgl_1` date DEFAULT NULL,
  `no_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_2` date DEFAULT NULL,
  `no_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_3` date DEFAULT NULL,
  `no_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_4` date DEFAULT NULL,
  `no_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_5` date DEFAULT NULL,
  `no_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_6` date DEFAULT NULL,
  `no_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_7` date DEFAULT NULL,
  `no_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_8` date DEFAULT NULL,
  `no_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_9` date DEFAULT NULL,
  `no_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_10` date DEFAULT NULL,
  `no_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_11` date DEFAULT NULL,
  `no_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_12` date DEFAULT NULL,
  `no_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_13` date DEFAULT NULL,
  `no_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_14` date DEFAULT NULL,
  `no_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_15` date DEFAULT NULL,
  `no_15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_16` date DEFAULT NULL,
  `tgl_17` date DEFAULT NULL,
  `no_17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_18` date DEFAULT NULL,
  `no_18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_19` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `j_termins`
--

INSERT INTO `j_termins` (`id`, `pekerjaan_id`, `no_spk`, `no_ba_lapdal`, `no_ba_lapkhir`, `no_bast_lapdal`, `no_bast_lapkhir`, `no_bast_pekerjaan`, `no_bast_pembayaran`, `tgl_spk`, `tgl_ba_lapdal`, `tgl_ba_lapkhir`, `tgl_bast_lapdal`, `tgl_bast_lapkhir`, `tgl_bast_pekerjaan`, `tgl_bast_pembayaran`, `tgl_0`, `tgl_1`, `no_1`, `tgl_2`, `no_2`, `tgl_3`, `no_3`, `tgl_4`, `no_4`, `tgl_5`, `no_5`, `tgl_6`, `no_6`, `tgl_7`, `no_7`, `tgl_8`, `no_8`, `tgl_9`, `no_9`, `tgl_10`, `no_10`, `tgl_11`, `no_11`, `tgl_12`, `no_12`, `tgl_13`, `no_13`, `tgl_14`, `no_14`, `tgl_15`, `no_15`, `tgl_16`, `tgl_17`, `no_17`, `tgl_18`, `no_18`, `tgl_19`, `created_at`, `updated_at`) VALUES
(1, 1, 19670, 20643, 21525, 20644, 21526, 21526, 21613, '2020-10-13', '2020-10-26', '2020-11-11', '2020-10-26', '2020-11-11', '2020-11-11', '2020-11-12', '2020-09-24', '2020-09-25', '18334', NULL, '18335', NULL, '18431', NULL, '18557', NULL, '18659', NULL, NULL, NULL, '18744', NULL, '18822', NULL, '18928', NULL, '19018', NULL, '19134', NULL, '19135', NULL, '19235', NULL, '19236', NULL, '19319', NULL, NULL, '19670', NULL, '19671', '2020-11-11', '2020-11-26 14:24:03', '2020-11-26 14:24:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2020_11_25_142318_create_perusahaans_table', 1),
(23, '2020_11_26_050933_create_pekerjaans_table', 1),
(24, '2020_11_26_101245_create_j_termins_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perusahaan_id` int(11) NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `kode_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5 2 2 21 02',
  `kode_keg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '10335003',
  `dpa_skpd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '914/207.P/203.2/2020 Tanggal 12 Oktober 2020',
  `hps` int(11) NOT NULL,
  `penawaran` int(11) NOT NULL,
  `nego` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `perusahaan_id`, `program`, `kegiatan`, `pekerjaan`, `tahun`, `kode_rek`, `kode_keg`, `dpa_skpd`, `hps`, `penawaran`, `nego`, `created_at`, `updated_at`) VALUES
(1, 2, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Penyusunan FS Intake Kawasan Kali Rejoso Pasuruan', 2020, '5 2 2 21 02', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 99997700, 98824000, 98714000, '2020-11-26 14:21:08', '2020-11-26 14:21:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direktur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `nama`, `direktur`, `npwp`, `bank`, `rekening`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'CV. JATI SURYA PERSADA', 'LAILI RACHMAWATI CHAIRIYAH', '03.155.691.3-643.000', NULL, NULL, 'PSJ Taman Paris A1/35 , Desa Gedangan, Kecamatan Gedangan, Sidoarjo', '2020-11-26 14:18:06', '2020-11-26 14:18:06'),
(2, 'CV. GRIYA TEKNIKA', 'AGUS CAHYANTO', '02.287.640.0-643.000', 'PT. Bank Jatim Cabang Utama Surabaya', '0011238467', 'Jl. Garuda V No. 9 Perumahan Rewwin, Waru - Sidoarjo', '2020-11-26 14:18:40', '2020-11-26 14:18:40'),
(3, 'CV. SINAR MULYA', 'RUSTIYONO, ST', '01.610.359.0-609.000', NULL, NULL, 'Jl. Ngagel Mulyo XIV / 9 Surabaya', '2020-11-26 14:19:04', '2020-11-26 14:19:04'),
(4, 'CV. MARLIM', 'HJ. RIRIN AGUS IRWANTY, S.Psi', '02.080.049.6-657.000', NULL, NULL, 'Jl. Sumber Wuni Indah A - 12, Kel. Kalirejo, Kec. Lawang, Kab. Malang', '2020-11-26 14:19:31', '2020-11-26 14:19:31'),
(5, 'CV. KARYA NUGRAHA ABADI', 'DARWANTO', '02.576.997.7-648.000', NULL, NULL, 'Jl. Piere Tendean No. 45 Kel. Sidomulyo Kab. Tuban', '2020-11-26 14:19:59', '2020-11-26 14:19:59'),
(6, 'CV. MULTI RAYA', 'MUDJIANTO', '01.682.464.1-604.000', NULL, NULL, 'Jl. Simo Hilir Barat Raya VI - G / 18 Surabaya', '2020-11-26 14:20:23', '2020-11-26 14:20:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `j_termins`
--
ALTER TABLE `j_termins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `j_termins`
--
ALTER TABLE `j_termins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
