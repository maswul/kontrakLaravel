-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 09:01 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontrakv2`
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
-- Table structure for table `j_termins`
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

-- --------------------------------------------------------

--
-- Table structure for table `lelangs`
--

CREATE TABLE `lelangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
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
  `pekerjaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lelangs`
--

INSERT INTO `lelangs` (`id`, `created_at`, `updated_at`, `tgl_0`, `tgl_1`, `no_1`, `tgl_2`, `no_2`, `tgl_3`, `no_3`, `tgl_4`, `no_4`, `tgl_5`, `no_5`, `tgl_6`, `no_6`, `tgl_7`, `no_7`, `tgl_8`, `no_8`, `tgl_9`, `no_9`, `tgl_10`, `no_10`, `tgl_11`, `no_11`, `tgl_12`, `no_12`, `tgl_13`, `no_13`, `tgl_14`, `no_14`, `tgl_15`, `no_15`, `tgl_16`, `tgl_17`, `no_17`, `tgl_18`, `no_18`, `tgl_19`, `pekerjaan_id`) VALUES
(2, '2020-12-01 04:07:06', '2020-12-01 04:07:06', '2020-09-24', '2020-09-25', '18318', '2020-09-25', '18325', '2020-09-28', '18425', '2020-09-29', '18550', '2020-09-30', '18652', '2020-10-01', 'JSD/12/X/2020', '2020-10-01', '18737', '2020-10-02', '18815', '2020-10-05', '18921', '2020-10-06', '19011', '2020-10-07', '19118', '2020-10-07', '19125', '2020-10-08', '19219', '2020-10-08', '19226', '2020-10-09', '19312', '2020-10-12', '2020-10-13', '19518', '2020-10-13', '19525', '2020-10-27', 4),
(3, '2020-12-01 04:14:51', '2020-12-01 04:14:51', '2020-10-09', '2020-10-12', '19401', '2020-10-12', '19410', '2020-10-13', '19531', '2020-10-14', '19601', '2020-10-15', '19701', '2020-10-16', 'IDK/112/X/2020', '2020-10-16', '19805', '2020-10-19', '19901', '2020-10-20', '20001', '2020-10-21', '20101', '2020-10-22', '20206', '2020-10-22', '20215', '2020-10-23', '20307', '2020-10-23', '20316', '2020-10-26', '20409', '2020-10-27', '2020-10-27', '20514', '2020-10-27', '20523', '2020-12-10', 5),
(4, '2020-12-01 04:19:28', '2020-12-01 04:19:28', '2020-10-09', '2020-10-12', '19402', '2020-10-12', '19411', '2020-10-13', '19532', '2020-10-14', '19602', '2020-10-15', '19702', '2020-10-16', 'IDK/113/X/2020', '2020-10-16', '19806', '2020-10-19', '19902', '2020-10-20', '20002', '2020-10-21', '20102', '2020-10-22', '20207', '2020-10-22', '20216', '2020-10-23', '20308', '2020-10-23', '20317', '2020-10-26', '20410', '2020-10-27', '2020-10-27', '20515', '2020-10-27', '20524', '2020-12-10', 6),
(5, '2020-12-02 02:53:13', '2020-12-02 02:53:13', '2020-10-09', '2020-10-12', '19448', '2020-10-12', '19496', '2020-10-13', '19569', '2020-10-14', '19639', '2020-10-15', '19739', '2020-10-16', 'MRM / 017 / X / 2020', '2020-10-16', '19843', '2020-10-19', '19939', '2020-10-20', '20039', '2020-10-21', '20139', '2020-10-22', '20253', '2020-10-22', '20268', '2020-10-23', '20354', '2020-10-23', '20436', '2020-10-26', '20483', '2020-10-27', '2020-10-27', '20560', '2020-10-27', '20612', '2020-12-10', 9),
(6, '2020-12-02 03:18:29', '2020-12-02 03:18:29', '2020-12-09', '2020-10-12', '19449', '2020-10-12', '19497', '2020-10-13', '19570', '2020-10-14', '09640', '2020-10-15', '19740', '2020-10-16', 'MRM / 018 / X / 2020', '2020-10-16', '19844', '2020-10-19', '19940', '2020-10-20', '20040', '2020-10-21', '20140', '2020-10-22', '20254', '2020-10-22', '20369', '2020-10-23', '20355', '2020-10-23', '20437', '2020-10-26', '20484', '2020-10-27', '2020-10-27', '20561', '2020-10-27', '20613', '2020-12-10', 10),
(7, '2020-12-02 06:31:24', '2020-12-02 06:31:24', '2020-12-02', '2020-10-12', '19408', '2020-10-12', '19417', '2020-10-13', '19538', '2020-10-14', '19608', '2020-10-15', '19708', '2020-10-16', NULL, '2020-10-16', '19812', '2020-10-19', '19908', '2020-10-20', '20008', '2020-10-21', '20008', '2020-10-22', '20213', '2020-10-22', '20222', '2020-10-23', '20314', '2020-10-23', '20323', '2020-10-26', '20416', '2020-10-27', '2020-10-27', '20521', '2020-10-27', '20930', '2020-12-25', 11),
(8, '2020-12-02 07:15:28', '2020-12-02 07:15:28', '2020-12-09', '2020-10-12', '19441', '2020-10-12', '19489', '2020-10-13', '19562', '2020-10-14', '19632', '2020-10-15', '19732', '2020-10-16', 'SWR / 011 / x / 2020', '2020-10-16', '19836', '2020-10-19', '19932', '2020-10-20', '20032', '2020-10-21', '20132', '2020-10-22', '20246', '2020-10-22', '20293', '2020-10-23', '20347', '2020-10-23', '20429', '2020-10-26', '20476', '2020-10-27', '2020-10-27', '20553', '2020-10-27', '20605', '2020-12-10', 12),
(9, '2020-12-02 08:40:41', '2020-12-04 04:19:50', '2020-10-09', '2020-10-12', '19460', '2020-10-12', '19594', '2020-10-13', '19579', '2020-10-14', '19651', '2020-10-15', '19751', '2020-10-16', 'EKA-SBY/012/X/2020', '2020-10-16', '19855', '2020-10-19', '19951', '2020-10-20', '20051', '2020-10-21', '20151', '2020-10-22', '20265', '2020-10-22', '20380', '2020-10-23', '20366', '2020-10-23', '20448', '2020-10-26', '20495', '2020-10-27', '2020-10-27', '20572', '2020-10-27', '20624', '2020-12-10', 13),
(10, '2020-12-03 07:20:34', '2020-12-03 07:20:34', '2020-10-09', '2020-10-12', '19461', '2020-10-12', '19595', '2020-10-13', '19580', '2020-10-14', '19652', '2020-10-15', '19752', '2020-10-16', 'KKI/016/PNW-Pas/X/2020', '2020-10-16', '19856', '2020-10-19', '19952', '2020-10-20', '20052', '2020-10-21', '20152', '2020-10-22', '20266', '2020-10-22', '20381', '2020-10-23', '20367', '2020-10-23', '20449', '2020-10-26', '20496', '2020-10-27', '2020-10-27', '20573', '2020-10-27', '20625', '2020-12-10', 14),
(11, '2020-12-03 08:55:20', '2020-12-04 05:29:57', '2020-10-09', '2020-10-12', '19463', '2020-10-12', '19597', '2020-10-13', '19582', '2020-10-14', '19654', '2020-10-15', '19754', '2020-10-16', 'MDV/017/PNWRN/Sby/X/2020', '2020-10-16', '19858', '2020-10-19', '19954', '2020-10-20', '20054', '2020-10-21', '20154', '2020-10-22', '20268', '2020-10-22', '20383', '2020-10-23', '20387', '2020-10-23', '20451', '2020-10-26', '20498', '2020-10-27', '2020-10-27', '20575', '2020-10-27', '20627', '2020-12-31', 15),
(12, '2020-12-03 09:09:46', '2020-12-03 09:09:46', '2020-10-09', '2020-10-12', '19464', '2020-10-12', '19598', '2020-10-13', '19583', '2020-10-14', '19655', '2020-10-15', '19755', '2020-10-16', 'MDV/018/PNWRN/Sby/X/2020', '2020-10-16', '19859', '2020-10-19', '19955', '2020-10-20', '20055', '2020-10-21', '20155', '2020-10-22', '20269', '2020-10-22', '20384', '2020-10-23', '20388', '2020-10-23', '20452', '2020-10-26', '20499', '2020-10-27', '2020-10-27', '20576', '2020-10-27', '20628', '2020-12-25', 16),
(13, '2020-12-03 09:25:50', '2020-12-03 09:25:50', '2020-10-09', '2020-10-12', '19462', '2020-10-12', '19596', '2020-10-13', '19581', '2020-10-14', '19653', '2020-10-15', '19753', '2020-10-16', 'GU/013/PNW/Batu/X/2020', '2020-10-16', '19857', '2020-10-19', '19953', '2020-10-20', '20053', '2020-10-21', '20153', '2020-10-22', '20267', '2020-10-22', '20382', '2020-10-23', '20386', '2020-10-23', '20450', '2020-10-26', '20497', '2020-10-27', '2020-10-27', '20574', '2020-10-27', '20626', '2020-12-10', 18),
(14, '2020-12-03 09:41:35', '2020-12-03 09:41:35', '2020-10-09', '2020-10-12', '19447', '2020-10-12', '19495', '2020-10-13', '19568', '2020-10-14', '19638', '2020-10-15', '19738', '2020-10-16', 'SM / 031 / X / 2020', '2020-10-16', '19842', '2020-10-19', '19938', '2020-10-20', '20038', '2020-01-21', '20138', '2020-10-22', '20252', '2020-10-22', '20299', '2020-10-23', '20353', '2020-10-23', '20435', '2020-10-26', '20482', '2020-10-27', '2020-10-27', '20559', '2020-10-27', '20611', '2020-12-10', 19),
(15, '2020-12-03 11:52:46', '2020-12-03 11:52:46', '2020-10-09', '2020-10-12', '19450', '2020-10-12', '19498', '2020-10-13', '19571', '2020-10-14', '19641', '2020-10-15', '19741', '2020-10-16', 'KNA / 029 / X /2020', '2020-10-16', '19845', '2020-10-19', '19941', '2020-10-20', '20041', '2020-10-21', '20141', '2020-10-22', '20255', '2020-10-22', '20370', '2020-10-23', '20356', '2020-10-23', '20438', '2020-10-26', '20485', '2020-10-27', '2020-10-27', '20562', '2020-10-27', '20614', '2020-12-10', 20),
(16, '2020-12-04 04:28:26', '2020-12-04 04:28:26', '2020-10-09', '2020-10-12', '19452', '2020-10-12', '19500', '2020-10-13', '19571', '2020-10-14', '19643', '2020-10-15', '19743', '2020-10-16', 'KEN-Aa / 07 / X / 2020', '2020-10-16', '19847', '2020-10-19', '19943', '2020-10-20', '20043', '2020-10-21', '20143', '2020-10-22', '20257', '2020-10-22', '20372', '2020-10-23', '20358', '2020-10-23', '20440', '2020-10-26', '20487', '2020-10-27', '2020-10-27', '20564', '2020-10-27', '20616', '2020-12-10', 21),
(17, '2020-12-04 06:58:37', '2020-12-04 07:00:50', '2020-10-09', '2020-10-12', '19453', '2020-10-12', '19587', '2020-10-13', '19572', '2020-10-14', '19644', '2020-10-15', '19744', '2020-10-16', 'KEN-Aa / 09 / X / 2020', '2020-10-16', '19843', '2020-10-19', '19944', '2020-10-20', '20044', '2020-10-21', '20144', '2020-10-22', '20258', '2020-10-22', '20273', '2020-10-23', '20359', '2020-10-23', '20441', '2020-10-26', '20488', '2020-10-27', '2020-10-27', '20565', '2020-10-27', '20617', '2020-12-10', 23);

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2020_11_25_142318_create_perusahaans_table', 1),
(26, '2020_11_26_050933_create_pekerjaans_table', 1),
(27, '2020_11_26_101245_create_j_termins_table', 1),
(28, '2020_11_27_175919_add_col_to_pekerjaans', 1),
(29, '2020_11_30_200716_create_termin_perencanaans_table', 1),
(30, '2020_11_30_202425_create_termin_pengawasans_table', 1),
(31, '2020_11_30_202439_create_termin_fisiks_table', 1),
(32, '2020_11_30_210552_create_lelangs_table', 1),
(33, '2020_12_02_053204_create_termyns_table', 2),
(34, '2020_12_02_113659_add_column_to_perusahaans', 3),
(35, '2020_12_02_113939_chg_column_to_perusahaans', 4),
(36, '2020_12_03_054249_add_col_to_pekerjaans2', 5),
(37, '2020_12_04_102101_tmbh_col_ke_pekerjaans', 6);

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
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perusahaan_id` int(11) NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` int(11) NOT NULL DEFAULT 1,
  `tahun` year(4) NOT NULL,
  `kode_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5 2 2 21 02',
  `kode_keg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '10335003',
  `dpa_skpd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '914/207.P/203.2/2020 Tanggal 12 Oktober 2020',
  `hps` int(11) NOT NULL,
  `penawaran` int(11) NOT NULL,
  `nego` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_monitoring` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_monitoring` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perusahaan_pengawas` int(11) DEFAULT NULL,
  `pekerjaan_diawasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `perusahaan_id`, `program`, `kegiatan`, `pekerjaan`, `tipe`, `tahun`, `kode_rek`, `kode_keg`, `dpa_skpd`, `hps`, `penawaran`, `nego`, `created_at`, `updated_at`, `nama_monitoring`, `nip_monitoring`, `perusahaan_pengawas`, `pekerjaan_diawasi`) VALUES
(4, 1, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Dsn. Karangpilang, Desa Kedungrejo, Kec. Modo, Kab. Lamongan; Desa Sumberharjo, Kec. Sumberejo, Kab. Bojonegoro; Desa Sugihwaras, Kec. Ngraho, Kab. Bojonegoro', 3, 2020, '5 2 2  24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 41973400, 41890200, 41175200, '2020-12-01 03:26:23', '2020-12-03 07:08:58', 'WULYO HENGKY SUGIHARTO, S.T.', '199305292019031009', 1, NULL),
(5, 8, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Dsn. Karangpilang, Desa Kedungrejo, Kec. Modo, Kab. Lamongan; Desa Sumberharjo, Kec. Sumberejo, Kab. Bojonegoro; Desa Sugihwaras, Kec. Ngraho, Kab. Bojonegoro', 4, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 23980000, 23050500, 22814000, '2020-12-01 03:30:13', '2020-12-04 04:04:48', 'WULYO HENGKY SUGIHARTO, S.T.', '19930529 201903 1 009', NULL, '7,'),
(6, 8, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Munggugebang, Kec. Benjeng, Kab. Gresik; Desa Kandangan, Kec. Cerme, Kab. Gresik; Desa Ngasin, Kec. Balongpanggang, Kab. Gresik; Desa Jatiklabang, Kec. Jatirogo, Kab. Tuban; Desa Punggulrejo, Kec. Rengel, Kab. Tuban', 4, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 39985000, 39671500, 39589000, '2020-12-01 03:53:51', '2020-12-03 09:30:32', 'WULYO HENGKY SUGIHARTO, S.T.', '19930529 201903 1 009', NULL, NULL),
(7, 6, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Dsn. Karangpilang, Desa Kedungrejo, Kec. Modo, Kab. Lamongan', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199008986, 197038600, 197038600, '2020-12-01 23:22:14', '2020-12-04 04:09:29', 'WIDADA, ST', '19630413 200701 1 005', 8, NULL),
(8, 3, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Munggugebang, Kec. Benjeng, Kab. Gresik', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 0, 0, 198320100, '2020-12-01 23:23:14', '2020-12-01 23:23:14', NULL, NULL, NULL, NULL),
(9, 4, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Ngasin, Kec. Balongpanggang, Kab. Gresik', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199100200, 198905800, 198903100, '2020-12-02 02:44:13', '2020-12-03 08:39:41', 'WULYO HENGKY SUGIHARTO, S.T.', '199305292019031009', 8, NULL),
(10, 4, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Jatiklabang, Kec. Jatirogo, Kab. Tuban', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199100500, 197699300, 197645800, '2020-12-02 03:12:44', '2020-12-03 08:12:24', 'WULYO HENGKY SUGIHARTO, S.T.', '199305292019031009', 8, NULL),
(11, 15, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Umbulan Kec. Winongan Kab. Pasuruan, Desa Sidepan Kec. Winongan Kab. Pasuruan, Desa Ledokombo Kec. Sumber Kab. Probolinggo, Desa Slawu Kec. Patrang Kab. Jember, Desa Bintoro Kec. Patrang Kab. Jember', 4, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 39814500, 38703500, 38676000, '2020-12-02 06:25:27', '2020-12-02 06:25:27', NULL, NULL, NULL, NULL),
(12, 16, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Klangon, Kec. Saradan, Kab. Madiun', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199809100, 198434300, 196735000, '2020-12-02 06:42:28', '2020-12-03 09:26:34', 'WIDADA, ST', '19630413 200701 1 005', 18, NULL),
(13, 9, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Umbulan, Kec. Winongan, Kab. Pasuruan', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199499000, 197425000, 197426900, '2020-12-02 08:39:30', '2020-12-03 04:29:05', 'ACHMAD CAESAR. ST', '19921215 201903 1 009', 15, NULL),
(14, 11, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Sidepan, Kec. Winongan, Kab. Pasuruan', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199923000, 197480200, 197421200, '2020-12-03 07:14:12', '2020-12-03 09:16:33', 'ACHMAD CAESAR. ST', '19921215 201903 1 009', 15, NULL),
(15, 17, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Slawu, Kec. Patrang, Kab.Jember', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199619200, 198151800, 197987900, '2020-12-03 08:37:01', '2020-12-03 08:56:57', 'ACHMAD CAESAR. ST', '19921215 201903 1 009', 15, NULL),
(16, 17, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Bintoro, Kec. Patrang, Kab.Jember', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199734700, 198295900, 197917500, '2020-12-03 08:40:34', '2020-12-03 08:59:06', 'ACHMAD CAESAR. ST', '19921215 201903 1 009', 15, NULL),
(18, 10, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Ledokombo, Kec. Sumber, Kab. Probolinggo', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199647800, 198118800, 197905400, '2020-12-03 09:19:42', '2020-12-03 09:19:42', 'ACHMAD CAESAR. ST', '19921215 201903 1 009', 15, NULL),
(19, 3, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Kandangan, Kec. Cerme, Kab. Gresik', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199574700, 198154100, 200000000, '2020-12-03 09:36:03', '2020-12-03 12:40:08', 'WULYO HENGKY SUGIHARTO, S.T.', '19930529 201903 1 009', 8, NULL),
(20, 5, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Punggulrejo, Kec. Rengel, Kab. Tuban', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 198548100, 196884400, 196874700, '2020-12-03 11:30:46', '2020-12-03 11:30:46', 'WULYO HENGKY SUGIHARTO, S.T.', '19930529 201903 1 009', 8, NULL),
(21, 14, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Sumberharjo, Kec. Sumberejo, Kab. Bojonegoro', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199978700, 199236000, 196820200, '2020-12-04 04:21:06', '2020-12-04 04:24:48', 'WULYO HENGKY SUGIHARTO, S.T.', '19930529 201903 1 009', 8, NULL),
(23, 14, 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi', 'Penyelenggaraan Sistem Penyediaan Air Minum', 'Desa Sugihwaras, Kec. Ngraho, Kab. Bojonegoro', 2, 2020, '5 2 2 24 01', '10335003', '914/207.P/203.2/2020 Tanggal 12 Oktober 2020', 199994800, 199195500, 196616200, '2020-12-04 06:53:40', '2020-12-04 07:02:48', 'WULYO HENGKY SUGIHARTO, S.T.', '19930529 201903 1 009', 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notaris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notaris_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notaris_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perubahan_notaris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perubahan_notaris_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perubahan_notaris_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `nama`, `direktur`, `npwp`, `bank`, `rekening`, `alamat`, `created_at`, `updated_at`, `kota`, `notaris`, `notaris_tanggal`, `notaris_no`, `perubahan_notaris`, `perubahan_notaris_tanggal`, `perubahan_notaris_no`) VALUES
(1, 'CV. JATI SURYA PERSADA', 'CHAIRUL ANWAR, SE', '03.155.691.3-643.000', 'PT. Bank Jatim Cabang Pembantu Gedangan', '1731000090', 'PSJ Taman Paris Barat A1/35 RT.04 RW.01, Gedangan - Sidoarjo', '2020-11-26 07:18:06', '2020-12-01 09:40:07', 'SIDOARJO', '', '', '', '', '', ''),
(2, 'CV. GRIYA TEKNIKA', 'AGUS CAHYANTO', '02.827.640.0-643.000', 'PT. Bank Jatim Cabang Utama Surabaya', '0011238467', 'Jl. Garuda V No. 9 Perumahan Rewwin, Waru - Sidoarjo', '2020-11-26 07:18:40', '2020-12-02 04:58:52', 'SIDOARJO', NULL, NULL, NULL, '', '', ''),
(3, 'CV. SINAR MULYA', 'RUSTIYONO, ST', '01.610.359.0-609.000', NULL, NULL, 'Jl. Ngagel Mulyo XIV / 9 Surabaya', '2020-11-26 07:19:04', '2020-12-03 09:56:36', 'SURABAYA', 'TRINING ARISWATI, S.H.', '7 Juli 1993', '7', '', '', ''),
(4, 'CV. MARLIM', 'HJ. RIRIN AGUS IRWANTY, S.Psi', '02.080.049.6-657.000', 'PT. BANK PEMBANGUNAN DAERAH JAWA TIMUR CABANG MALANG', '0041025411', 'Jl. Sumber Wuni Indah A - 12, Kel. Kalirejo, Kec. Lawang, Kab. Malang', '2020-11-26 07:19:31', '2020-12-02 06:46:39', 'MALANG', 'BENEDIKTUS BOSU, SH', '24 Juli 2010', '89', '', '', ''),
(5, 'CV. KARYA NUGRAHA ABADI', 'DARWANTO', '02.576.997.7-648.000', NULL, NULL, 'Jl. Piere Tendean No. 45 Kel. Sidomulyo Kab. Tuban', '2020-11-26 07:19:59', '2020-12-03 11:32:50', 'TUBAN', 'BUDI RAHAYU, S.H.', '3 Agustus 2006', '1', '', '', ''),
(6, 'CV. MULTI RAYA', 'MUDJIANTO', '01.682.464.1-604.000', NULL, NULL, 'Jl. Simo Hilir Barat Raya VI - G / 18 Surabaya', '2020-11-26 07:20:23', '2020-12-02 04:59:08', 'SURABAYA', NULL, NULL, NULL, '', '', ''),
(8, 'CV. IDEA KARYA NUSA', 'ABDUL MAJID', '74.019.272.9.618.000', 'PT. Bank Jatim Cab. Utama Surabaya', '0321022707', 'Jl. Wiyung II No. 10 Surabaya', '2020-12-01 03:32:55', '2020-12-01 09:28:29', 'SURABAYA', '', '', '', '', '', ''),
(9, 'CV. EKA JAYA PERKASA', 'MARIA ULFA', '75.5433.774.6-619.000', 'PT. Bank Jatim Cabang Utama Surabaya', '0011268684', 'Jl. Ambengan Batu DKA No. 29, Kel. Tambaksari - Surabaya', '2020-12-02 02:57:34', '2020-12-03 09:04:00', 'SURABAYA', 'DESLINA SUARNI, SH', '24 Februari 2016', '17', '', '', ''),
(10, 'CV. GLOBAL UTAMA', 'M. HUDA MUTTAQIEN, ST', '02.080.084.3-651.000', NULL, NULL, 'Jl. M. Sahar No. 20, Kel. Ngaglik, Kota Batu', '2020-12-02 02:59:31', '2020-12-03 08:00:34', 'BATU', 'DR. BENEDIKTUS BOSU, SH, SPN, MSc', '20 Oktober 2001', '318', '', '', ''),
(11, 'CV. KIRAN KARYA INDAH', 'FATHKUL HIDAYAT', '82.550.401.2-624.000', NULL, NULL, 'Dsn. Umbulan Lor RT.02/01, Ds. Umbulan, Kec. Winongan, Kab. Pasuruan', '2020-12-02 03:02:29', '2020-12-03 09:05:47', 'PASURUAN', 'DESLINA SUARNI, SH', '17 September 2019', '33', '', '', ''),
(14, 'CV. KEN', 'SEPTA DIHARJA, A.Md', '31.700.176.6-652.000', 'PT. Bank Jatim Cabang Malang', '0041071877', 'Jl. Papa Kuning III / 12 RT. 03 RW. 15 Kel. Tulusrejo, Kec. Lowokwaur, Kota Malang', '2020-12-02 06:13:18', '2020-12-04 04:18:54', 'MALANG', 'BENEDIKTUS BOSU, SH', '08 Februari 2013', '38', NULL, NULL, NULL),
(15, 'CV. FIRDA KONSULTAN', 'FIRULLAH SANDY OKTANOVA, ST', '21.000.460.2-609.000', NULL, NULL, 'Jl. Ketintang Barat II/4 Kel. Ketintang, Kec. Gayungan - Surabaya', '2020-12-02 06:23:20', '2020-12-02 06:23:20', 'SURABAYA', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'CV. SWARNA BHUMI', 'SUWARNO, ST', '31.642.431.6-628.000', 'PT. BANK PEMBANGUNAN DAERAH JAWA TIMUR CABANG BATU', '0401008621', 'JL. LILIN EMAS no. 277, Kel. Dadaprejo, Kec. Junrejo, Kota Batu', '2020-12-02 06:39:06', '2020-12-02 06:48:08', 'BATU', 'ENY DWI ASTUTIK, S.H.', '23 November 2012', '24', NULL, NULL, NULL),
(17, 'CV. MADHAVA KARYA INDONESIA', 'MOCH FATHKI', '94.766.466.0-604.000', 'PT. Bank Jatim Cabang Utama Surabaya', '0011290264', 'Jl. Simorejo Timur 8/3 RT.05/03. Kel. Simomulyo - Surabaya', '2020-12-03 08:05:31', '2020-12-03 08:07:16', 'SURABAYA', 'RINA RUSTIANING WARNI, SH', '22 April 2020', '20', NULL, NULL, NULL),
(18, 'CV. JAYA KONSULTAN', 'Ir. Drs. TARMAIN', '02.102.461.7-619.000', NULL, NULL, 'Jl. Manyar Airdas 2/12 Kel. Manyar Sabrangan Kec. Mulyorejo Surabaya', '2020-12-03 09:25:36', '2020-12-03 09:25:36', 'SURABAYA', 'IRI ASTUTIEK, S.H.', '14 MEI 2007', '02', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `termin_fisiks`
--

CREATE TABLE `termin_fisiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `termin_tgl_1` date DEFAULT NULL,
  `termin_tgl_2` date DEFAULT NULL,
  `termin_tgl_3` date DEFAULT NULL,
  `termin_no_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_4` date DEFAULT NULL,
  `termin_no_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_5` date DEFAULT NULL,
  `termin_no_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_6` date DEFAULT NULL,
  `termin_no_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_7` date DEFAULT NULL,
  `termin_no_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_8` date DEFAULT NULL,
  `termin_no_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `termin_pengawasans`
--

CREATE TABLE `termin_pengawasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `termin_tgl_1` date DEFAULT NULL,
  `termin_tgl_2` date DEFAULT NULL,
  `termin_no_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_3` date DEFAULT NULL,
  `termin_no_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_4` date DEFAULT NULL,
  `termin_no_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_5` date DEFAULT NULL,
  `termin_no_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_6` date DEFAULT NULL,
  `termin_no_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termin_pengawasans`
--

INSERT INTO `termin_pengawasans` (`id`, `created_at`, `updated_at`, `termin_tgl_1`, `termin_tgl_2`, `termin_no_2`, `termin_tgl_3`, `termin_no_3`, `termin_tgl_4`, `termin_no_4`, `termin_tgl_5`, `termin_no_5`, `termin_tgl_6`, `termin_no_6`, `pekerjaan_id`) VALUES
(1, '2020-12-01 04:14:51', '2020-12-01 04:14:51', '2020-12-09', '2020-12-10', '23652', '2020-12-11', '23778', '2020-12-11', '23780', '2020-12-14', '23862', '2020-12-15', '23918', 5),
(2, '2020-12-01 04:19:28', '2020-12-01 04:20:16', '2020-12-09', '2020-12-10', '23653', '2020-12-11', '23779', '2020-12-11', '23781', '2020-12-14', '23863', '2020-12-15', '23919', 6);

-- --------------------------------------------------------

--
-- Table structure for table `termin_perencanaans`
--

CREATE TABLE `termin_perencanaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `termin_tgl_1` date DEFAULT NULL,
  `termin_tgl_2` date DEFAULT NULL,
  `termin_no_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_3` date DEFAULT NULL,
  `termin_tgl_4` date DEFAULT NULL,
  `termin_tgl_5` date DEFAULT NULL,
  `termin_no_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_6` date DEFAULT NULL,
  `termin_no_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_7` date DEFAULT NULL,
  `termin_no_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_8` date DEFAULT NULL,
  `termin_no_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_9` date DEFAULT NULL,
  `termin_no_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termin_perencanaans`
--

INSERT INTO `termin_perencanaans` (`id`, `created_at`, `updated_at`, `termin_tgl_1`, `termin_tgl_2`, `termin_no_2`, `termin_tgl_3`, `termin_tgl_4`, `termin_tgl_5`, `termin_no_5`, `termin_tgl_6`, `termin_no_6`, `termin_tgl_7`, `termin_no_7`, `termin_tgl_8`, `termin_no_8`, `termin_tgl_9`, `termin_no_9`, `pekerjaan_id`) VALUES
(1, '2020-12-01 04:07:06', '2020-12-01 04:07:06', '2020-10-27', '2020-10-27', '20676', '2020-10-27', '2020-12-10', '2020-12-10', '23648', '2020-12-10', '23650', '2020-12-11', '23774', '2020-12-11', '23776', '2020-12-14', '23860', 4);

-- --------------------------------------------------------

--
-- Table structure for table `termyns`
--

CREATE TABLE `termyns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `termin_tgl_1` date DEFAULT NULL,
  `termin_no_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_2` date DEFAULT NULL,
  `termin_no_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_3` date DEFAULT NULL,
  `termin_no_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_4` date DEFAULT NULL,
  `termin_no_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_5` date DEFAULT NULL,
  `termin_no_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_6` date DEFAULT NULL,
  `termin_no_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_7` date DEFAULT NULL,
  `termin_no_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_8` date DEFAULT NULL,
  `termin_no_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termin_tgl_9` date DEFAULT NULL,
  `termin_no_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termyns`
--

INSERT INTO `termyns` (`id`, `created_at`, `updated_at`, `termin_tgl_1`, `termin_no_1`, `termin_tgl_2`, `termin_no_2`, `termin_tgl_3`, `termin_no_3`, `termin_tgl_4`, `termin_no_4`, `termin_tgl_5`, `termin_no_5`, `termin_tgl_6`, `termin_no_6`, `termin_tgl_7`, `termin_no_7`, `termin_tgl_8`, `termin_no_8`, `termin_tgl_9`, `termin_no_9`, `pekerjaan_id`) VALUES
(1, '2020-12-01 23:14:40', '2020-12-03 07:13:34', '2020-10-27', 'JSD/ 22 / X /2020', '2020-10-27', '20676', '2020-10-27', 'JSD/ 27 /X/2020', '2020-12-10', 'JSD/09/XII/2020', '2020-12-10', '23648', '2020-12-10', '23650', '2020-12-11', '23774', '2020-12-11', '23776', '2020-12-14', '23860', 4),
(2, '2020-12-01 23:17:18', '2020-12-01 23:17:18', '2020-12-09', NULL, '2020-12-10', '23652', '2020-12-11', '23778', '2020-12-11', '23780', '2020-12-14', '23862', '2020-12-15', '23918', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(3, '2020-12-01 23:18:19', '2020-12-01 23:18:19', '2020-12-09', NULL, '2020-12-10', '23653', '2020-12-11', '23779', '2020-12-11', '23781', '2020-12-14', '23863', '2020-12-15', '23919', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(4, '2020-12-02 02:53:13', '2020-12-03 08:41:28', '2020-12-09', 'MRM / 025 / X / 2020', '2020-12-09', 'MRM / 07 / XII / 2020', '2020-12-09', '23514', '2020-12-10', '23656', '2020-12-11', '23784', '2020-12-11', '23789', '2020-12-11', '23794', '2020-12-14', '23867', NULL, NULL, 9),
(5, '2020-12-02 03:18:29', '2020-12-03 08:59:01', '2020-12-09', 'MRM / 026 / X / 2020', '2020-12-09', 'MRM / 08 / XII / 2020', '2020-12-09', '23515', '2020-12-10', '23657', '2020-12-11', '23785', '2020-12-11', '23790', '2020-12-11', '23795', '2020-12-14', '23867', NULL, NULL, 10),
(6, '2020-12-02 06:31:24', '2020-12-02 06:32:47', '2020-12-09', NULL, '2020-12-23', '23638', '2020-12-23', '23749', '2020-12-23', '23751', '2020-12-23', '23851', '2020-12-23', '23916', NULL, NULL, NULL, NULL, NULL, NULL, 11),
(7, '2020-12-02 07:15:28', '2020-12-02 07:15:28', '2020-12-02', NULL, '2020-12-02', NULL, '2020-12-02', NULL, '2020-12-02', NULL, '2020-12-02', NULL, '2020-12-02', NULL, '2020-12-02', NULL, '2020-12-02', NULL, NULL, NULL, 12),
(8, '2020-12-02 08:40:41', '2020-12-04 01:32:33', '2020-12-09', 'EKA/ 013 / Pemer - Sby./ XII /2020', '2020-12-09', 'EKA/ 014 / Lap - Sby./ XII /2020', '2020-12-09', '23500', '2020-12-10', '23632', '2020-12-11', '23731', '2020-12-11', '23737', '2020-12-11', '23743', '2020-12-14', '23745', NULL, NULL, 13),
(9, '2020-12-03 07:20:34', '2020-12-03 07:23:00', '2020-12-09', 'KKI/ 023 / Pemer / XII /2020', '2020-12-09', 'KKI/ 024 / Lap/ XII /2020', '2020-12-09', '23501', '2020-12-10', '23633', '2020-12-11', '23732', '2020-12-11', '23738', '2020-12-11', '23744', '2020-12-14', '2374', NULL, NULL, 14),
(10, '2020-12-03 08:55:20', '2020-12-04 05:54:16', '2020-12-23', 'MDV/ 013 / PEM/SBY/ XII /2020', '2020-12-23', 'MDV/ 014 / LAP/SBY/ XII /2020', '2020-12-23', '23503', '2020-12-23', '23635', '2020-12-23', '23734', '2020-12-28', '23740', '2020-12-29', '23746', '2020-12-29', '23748', NULL, NULL, 15),
(11, '2020-12-03 09:09:46', '2020-12-04 06:05:21', '2020-12-23', 'MDV/ 015 / PEM/SBY/ XII /2020', '2020-12-23', 'MDV/ 016 / LAP /SBY/ XII /2020', '2020-12-23', '23504', '2020-12-23', '23636', '2020-12-23', '23735', '2020-12-28', '23741', '2020-12-29', '23747', '2020-12-29', '23749', NULL, NULL, 16),
(12, '2020-12-03 09:25:50', '2020-12-03 09:28:49', '2020-12-09', 'GU/ 008 /PEM / Batu / XII /2020', '2020-12-09', 'GU/ 009 / Lap/ Batu / XII /2020', '2020-12-09', '23502', '2020-12-10', '23634', '2020-12-11', '23733', '2020-12-11', '23739', '2020-12-11', '23745', '2020-12-14', '23747', NULL, NULL, 18),
(13, '2020-12-03 09:41:35', '2020-12-03 09:41:35', '2020-12-09', 'SM / 011 / XII / 2020', '2020-12-09', 'SM / 012 / XII / 2020', '2020-12-09', '23513', '2020-12-10', '23655', '2020-12-11', '23783', '2020-12-11', '23788', '2020-12-11', '23793', '2020-12-14', '23865', NULL, NULL, 19),
(14, '2020-12-03 11:52:46', '2020-12-03 11:52:46', '2020-12-09', 'KNA-A / 011 / XII / 2020', '2020-12-09', 'KNA-A / 012 / XII / 2020', '2020-12-09', '23516', '2020-12-10', '23658', '2020-12-11', '23786', '2020-12-11', '23791', '2020-12-11', '23796', '2020-12-14', '23868', NULL, NULL, 20),
(15, '2020-12-04 04:28:26', '2020-12-04 04:28:26', '2020-12-09', 'KEN-Aa / 08 / XII / 2020', '2020-12-09', 'KEN-Aa / 09 / XII / 2020', '2020-12-09', '23520', '2020-12-10', '23663', '2020-12-11', '23871', '2020-12-11', '23874', '2020-12-11', '23877', '2020-12-14', '23889', NULL, NULL, 21),
(16, '2020-12-04 06:58:37', '2020-12-04 07:19:42', '2020-12-08', 'KEN-Aa / 011 / XII / 2020', '2020-12-08', 'KEN-Aa / 012 / XII / 2020', '2020-12-08', '23521', '2020-12-10', '23664', '2020-12-11', '23872', '2020-12-11', '23875', '2020-12-11', '23883', '2020-12-14', '23890', NULL, NULL, 23);

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
-- Indexes for table `j_termins`
--
ALTER TABLE `j_termins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lelangs`
--
ALTER TABLE `lelangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lelangs_pekerjaan_id_unique` (`pekerjaan_id`);

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
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termin_fisiks`
--
ALTER TABLE `termin_fisiks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `termin_fisiks_pekerjaan_id_unique` (`pekerjaan_id`);

--
-- Indexes for table `termin_pengawasans`
--
ALTER TABLE `termin_pengawasans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `termin_pengawasans_pekerjaan_id_unique` (`pekerjaan_id`);

--
-- Indexes for table `termin_perencanaans`
--
ALTER TABLE `termin_perencanaans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `termin_perencanaans_pekerjaan_id_unique` (`pekerjaan_id`);

--
-- Indexes for table `termyns`
--
ALTER TABLE `termyns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `termyns_pekerjaan_id_unique` (`pekerjaan_id`);

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
-- AUTO_INCREMENT for table `j_termins`
--
ALTER TABLE `j_termins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lelangs`
--
ALTER TABLE `lelangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `termin_fisiks`
--
ALTER TABLE `termin_fisiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `termin_pengawasans`
--
ALTER TABLE `termin_pengawasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `termin_perencanaans`
--
ALTER TABLE `termin_perencanaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `termyns`
--
ALTER TABLE `termyns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
