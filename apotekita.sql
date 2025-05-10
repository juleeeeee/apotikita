-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Apr 2017 pada 08.25
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekita`
--

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
(1, '2017_03_24_043153_create_table_pegawaii', 1),
(2, '2017_03_27_021302_create_table_obatt', 1),
(3, '2017_03_27_023036_create_table_pembayaran', 1),
(4, '2017_03_27_233251_PembayaranController', 1),
(5, '2017_03_29_025144_add_foto_table_pegawaii', 1),
(6, '2017_03_29_033831_create_table_user', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id_login`, `nama_user`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$8iJ0nGsI4Ao5pQJG7Q6C5.3hiYyBaDeOn0OJqdu4iOODD94J00jBC', 'L5USlHQjKtalrFgh6pFnIVcOoSE8Y4u5R1oC6slgdmou23UQl33WJVzcxK6u', '2017-03-31 03:19:23', '2017-03-31 03:19:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_obatt`
--

CREATE TABLE `t_obatt` (
  `kode_obat` int(10) UNSIGNED NOT NULL,
  `nama_obat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_obat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_obat` double(8,2) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_obatt`
--

INSERT INTO `t_obatt` (`kode_obat`, `nama_obat`, `jenis_obat`, `kategori`, `harga_obat`, `stok`) VALUES
(1, 'Bodrex', 'Tablet', 'Ringan', 1000.00, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pegawaii`
--

CREATE TABLE `t_pegawaii` (
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_pegawaii`
--

INSERT INTO `t_pegawaii` (`id_pegawai`, `nama_pegawai`, `jk`, `alamat`, `notelp`, `foto`) VALUES
(1, 'Fina Aprilia Azzahra', 'P', 'Jl 1', '081111111111', 'Fina Aprilia Azzahra.jpg'),
(2, 'Mohamad Taofik Setiawan', 'L', 'Jl 2', '082222222222', 'Mohamad Taofik Setiawan.jpg'),
(3, 'Zulfan Nurrahman', 'L', 'Jl 3', '083333333333', 'Zulfan Nurrahman.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pembayaran`
--

CREATE TABLE `t_pembayaran` (
  `no_bayar` int(10) UNSIGNED NOT NULL,
  `tgl_bayar` date NOT NULL,
  `kode_obat` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `total_bayar` double(8,2) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_pembayaran`
--

INSERT INTO `t_pembayaran` (`no_bayar`, `tgl_bayar`, `kode_obat`, `kuantitas`, `total_bayar`, `id_pegawai`) VALUES
(1, '2017-03-31', 1, 1, 1000.00, 1),
(2, '2017-02-01', 1, 2, 2000.00, 2),
(3, '2017-01-01', 1, 3, 3000.00, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `t_obatt`
--
ALTER TABLE `t_obatt`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `t_pegawaii`
--
ALTER TABLE `t_pegawaii`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD PRIMARY KEY (`no_bayar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_obatt`
--
ALTER TABLE `t_obatt`
  MODIFY `kode_obat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_pegawaii`
--
ALTER TABLE `t_pegawaii`
  MODIFY `id_pegawai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  MODIFY `no_bayar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
