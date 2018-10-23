-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2018 pada 20.27
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipuker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_user`) VALUES
(1, 'Pemerintah'),
(2, 'Pengusaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_24_145510_create_level_table', 0),
(4, '2018_09_24_145510_create_password_resets_table', 0),
(5, '2018_09_24_145510_create_users_table', 0),
(6, '2018_10_09_141441_create_level_table', 0),
(7, '2018_10_09_141441_create_password_resets_table', 0),
(8, '2018_10_09_141441_create_pinjaman_table', 0),
(9, '2018_10_09_141441_create_status_table', 0),
(10, '2018_10_09_141441_create_users_table', 0),
(11, '2018_10_09_141445_add_foreign_keys_to_pinjaman_table', 0),
(12, '2018_10_09_141445_add_foreign_keys_to_users_table', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_peminjam` int(11) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `besar_pinjaman` decimal(10,0) NOT NULL,
  `jenis_pinjaman` varchar(100) NOT NULL,
  `metode_pelunasan` varchar(100) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `id_status` int(10) NOT NULL,
  `id_pengusaha` int(11) UNSIGNED NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id_peminjam`, `nama_peminjam`, `besar_pinjaman`, `jenis_pinjaman`, `metode_pelunasan`, `tanggal_pinjam`, `id_status`, `id_pengusaha`, `updated_at`, `created_at`) VALUES
(1, 'asdasdas', '123', 'dssss', 'sssss', '2018-10-09', 2, 2, '2018-10-09 14:02:30', '2018-10-09 13:18:45'),
(2, 'qewghgfdw', '123234', 'dssssasdv', 'ssssssdfvb', '2018-10-09', 2, 2, '2018-10-09 14:03:04', '2018-10-09 13:21:54'),
(3, 'sadf', '2345', 'xcvb', 'asdfbg', '2018-10-09', 2, 2, '2018-10-09 16:40:28', '2018-10-09 16:39:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status_pinjaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status_pinjaman`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Sudah Diverifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_level` int(11) NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ukm` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ukm` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ukm` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_level`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telpon`, `nama_ukm`, `jenis_ukm`, `alamat_ukm`) VALUES
(1, 'asdfgfdsa', 'ass@gfsa.a', NULL, '$2y$10$LuC.IqwQDparnwz0MGBZJuPXfyFwPgJku3jasbLNLKL7W2sR7ZiF.', 'fDDRyijnwK8zTjiq4Ha5pkkzZnu0zLOiqyli4bxyduURzaTkpIJJ8r9Ge9if', '2018-09-25 20:28:14', '2018-09-25 20:28:14', 1, 'asdfgfw', '2018-09-17', 'Perempuan', 'asdfgf', '9876543456', 'sdffd', 'assddfdsa', 'asdfgdsa'),
(2, 'ita anak haram', 'lkjggh@g.a', NULL, '$2y$10$LuC.IqwQDparnwz0MGBZJuPXfyFwPgJku3jasbLNLKL7W2sR7ZiF.', 'ng7qb1gD1jqHmbhVMddB1ezKhbn7pgUx9cyhpu2xc6PNJ80YBT6UpP5E22XO', '2018-09-25 20:53:44', '2018-09-25 20:53:44', 2, 'goa berhantu', '1998-08-11', 'Laki-Laki', 'lkjvcv', '1234567', 'kjgfd', 'kjhgfd', 'kjhgfd'),
(6, 'hh', 'sdfghui@as.s', NULL, '$2y$10$9UQufEi1RPWTXPzrzfc3hO0clVF/InsciPq9bLmy0snZXq6gd/MMa', NULL, '2018-10-10 01:07:33', '2018-10-10 01:07:33', 2, 'asd', '2018-10-13', 'Laki-Laki', 'asdfgf', '1234567', 'zaxdcvbn', 'asdvf', 'dsv'),
(7, 'anang', 'asu@g.a', NULL, '$2y$10$frGSxmjyjKQcLczzxI/HGu8p3InmdxBLvmkTO1W1qBzs65JHhaDF.', NULL, '2018-10-10 01:20:42', '2018-10-10 01:20:42', 2, 'fyuio', '2018-10-25', 'Laki-Laki', 'sdfhi', '0986543', 'zxvjl', 'kjvcxz', 'njvcx'),
(8, 'ita', 'acb@g.a', NULL, '$2y$10$OC6T299bfwGvKgqWXmQV7eSbQIPk0KbkPvF7Xb0CeRSoPF4fwezq6', NULL, '2018-10-10 01:23:33', '2018-10-10 01:23:33', 2, 'sdfghj', '2017-10-31', 'Perempuan', 'dfhjk', '987542', 'jhvcxz', 'hjgfd', 'nmbvc'),
(9, 'aaaa', 'aaaa@g.a', NULL, '$2y$10$dHFVuKurajDFpCwXerfEf.oWX9Gaqbmwoik3ftt6q3DO7zLnkHvZG', NULL, '2018-10-10 01:25:53', '2018-10-10 01:25:53', 2, 'asdf', '2018-10-12', 'Laki-Laki', 'sdcdf', '234567890', 'zc vb', 'zxcvb', 'xcv bn');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

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
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_pengusaha` (`id_pengusaha`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `pinjaman_ibfk_2` FOREIGN KEY (`id_pengusaha`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
