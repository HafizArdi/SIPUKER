-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2018 pada 12.38
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
-- Database: `sipukerr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `idTopik` int(11) NOT NULL,
  `namaTopik` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `posthome` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int(11) NOT NULL DEFAULT '0',
  `enable_threads` tinyint(1) NOT NULL DEFAULT '0',
  `thread_count` int(11) NOT NULL DEFAULT '0',
  `post_count` int(11) NOT NULL DEFAULT '0',
  `private` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `forum_categories`
--

INSERT INTO `forum_categories` (`id`, `category_id`, `title`, `description`, `weight`, `enable_threads`, `thread_count`, `post_count`, `private`, `created_at`, `updated_at`) VALUES
(1, 0, 'Shitpost', 'Isinya tentang meme', 0, 1, 2, 7, 0, NULL, NULL),
(2, 1, 'ayo tukaran', 'cok i', -9, 1, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `sequence` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `forum_posts`
--

INSERT INTO `forum_posts` (`id`, `thread_id`, `author_id`, `content`, `post_id`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'Jokowi suka ahok', NULL, 1, '2018-11-20 06:23:35', '2018-11-20 06:23:35', NULL),
(2, 1, 7, 'gyashjfkghjk', 0, 2, '2018-11-20 06:24:50', '2018-11-20 06:24:50', NULL),
(3, 1, 7, 'masak sih?', 1, 3, '2018-11-20 06:25:03', '2018-11-20 06:25:03', NULL),
(4, 2, 2, 'kene lapangan !', NULL, 1, '2018-11-22 16:28:53', '2018-11-22 16:28:53', NULL),
(5, 2, 2, 'bodoh', 4, 2, '2018-11-22 16:29:24', '2018-11-22 16:29:24', NULL),
(6, 2, 2, 'due tige ayam haram', 5, 3, '2018-11-22 16:29:47', '2018-11-22 16:29:47', NULL),
(7, 2, 2, 'mari kita bikin ucok', 6, 4, '2018-11-22 16:30:03', '2018-11-22 16:30:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_threads`
--

CREATE TABLE `forum_threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinned` tinyint(1) DEFAULT '0',
  `locked` tinyint(1) DEFAULT '0',
  `reply_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `forum_threads`
--

INSERT INTO `forum_threads` (`id`, `category_id`, `author_id`, `title`, `pinned`, `locked`, `reply_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'Meme Jokowi', 0, 0, 2, '2018-11-20 06:23:35', '2018-11-20 06:25:03', NULL),
(2, 1, 2, 'ayo sene', 0, 0, 3, '2018-11-22 16:28:53', '2018-11-22 16:30:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_threads_read`
--

CREATE TABLE `forum_threads_read` (
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `forum_threads_read`
--

INSERT INTO `forum_threads_read` (`thread_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2018-11-20 06:23:35', '2018-11-22 14:46:08'),
(1, 7, '2018-11-20 06:24:26', '2018-11-20 06:25:03'),
(2, 2, '2018-11-22 16:28:54', '2018-11-22 16:30:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatanumkm`
--

CREATE TABLE `kegiatanumkm` (
  `idKegiatan` int(11) NOT NULL,
  `idPost` int(11) NOT NULL,
  `namaPendaftar` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `NoTelpon` varchar(12) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatanumkm`
--

INSERT INTO `kegiatanumkm` (`idKegiatan`, `idPost`, `namaPendaftar`, `alamat`, `NoTelpon`, `iduser`) VALUES
(2, 2, 'Ita', 'Alamat', '90283891', 2),
(3, 3, 'ita', 'tes', '283818231', 2),
(4, 10, 'ita', 'wahaha', '0290929210', 2),
(5, 2, 'hafiz', 'ewaa', '0908878980', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `hasil_penjualan` int(11) NOT NULL,
  `laba` int(11) DEFAULT NULL,
  `rugi` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_user`, `judul`, `hasil_penjualan`, `laba`, `rugi`, `updated_at`, `created_at`) VALUES
(1, 7, 'Kontol', 1234, 12, 21, '2018-11-20 14:16:09', '2018-11-20 14:16:09'),
(2, 7, 'Kontol', 1234, 12, 21, '2018-11-21 14:16:32', '2018-11-20 14:16:32'),
(3, 7, 'Kontol', 1234, 12, 21, '2018-11-22 14:17:32', '2018-11-20 14:17:32'),
(4, 7, 'Kontol', 1234, 12, 21, '2018-11-23 14:18:03', '2018-11-20 14:18:03'),
(6, 7, 'kf', 2213125, 12, 32, '2018-11-25 15:01:10', '2018-11-20 15:01:10'),
(7, 2, 'asdalksdj', 123457890, 52525, 123, '2018-11-22 06:39:43', '2018-11-22 06:39:43'),
(8, 2, 'uju', 9, 8999, NULL, '2018-11-22 08:26:55', '2018-11-22 08:26:55'),
(9, 2, 'hibah', 98, 78, NULL, '2018-11-22 10:08:32', '2018-11-22 10:08:32');

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
(12, '2018_10_09_141445_add_foreign_keys_to_users_table', 0),
(13, '2014_05_19_151759_create_forum_table_categories', 2),
(14, '2014_05_19_152425_create_forum_table_threads', 2),
(15, '2014_05_19_152611_create_forum_table_posts', 2),
(16, '2015_04_14_180344_create_forum_table_threads_read', 2),
(17, '2015_07_22_181406_update_forum_table_categories', 2),
(18, '2015_07_22_181409_update_forum_table_threads', 2),
(19, '2015_07_22_181417_update_forum_table_posts', 2),
(20, '2016_05_24_114302_add_defaults_to_forum_table_threads_columns', 2),
(21, '2016_07_09_111441_add_counts_to_categories_table', 2),
(22, '2016_07_09_122706_add_counts_to_threads_table', 2),
(23, '2016_07_10_134700_add_sequence_to_posts_table', 2);

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
(3, 'sadf', '2345', 'xcvb', 'asdfbg', '2018-10-09', 2, 2, '2018-10-09 16:40:28', '2018-10-09 16:39:54'),
(4, 'ww', '-9', 'jjjj', 'bbbb', '2018-10-12', 2, 2, '2018-10-22 23:25:02', '2018-10-12 12:03:33'),
(5, 'hafiz', '3000', 'cicil', 'cicil', '2018-10-24', 2, 2, '2018-10-24 06:21:02', '2018-10-24 06:20:16'),
(6, 'itak', '1000', 'blblab', 'gamau dilunasin', '2018-10-24', 2, 2, '2018-10-24 06:51:27', '2018-10-24 06:50:07'),
(7, 'a', '123234', 'dssss', 'asdfbg', '2018-11-22', 2, 2, '2018-11-22 06:59:43', '2018-11-22 06:57:59'),
(8, 'juju', '1', 'opo', 'ioi', '2018-11-22', 2, 2, '2018-11-22 08:32:19', '2018-11-22 08:25:28'),
(9, 'fifi', '90', 'gigi', 'kredit', '2018-11-22', 2, 2, '2018-11-22 10:09:26', '2018-11-22 10:07:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `posthome` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`idPost`, `judul`, `foto`, `idKategori`, `deskripsi`, `posthome`) VALUES
(1, 'haai', 'hafiz.png', 1, 'asasassa', 1),
(2, 'tes', '1.jpg', 2, 'wdaad', 1),
(3, 'tes', '1.jpg', 2, 'wdaad', 1),
(4, 'tes', '1.jpg', 2, 'wdaad', 1),
(5, 'coba', '1.jpg', 1, 'akwodkaod', 1),
(10, 'hahaha', '010818000_1482306686-20161216-Reaksi-Kocak-Hewan-Saat-Bercermin-AFP-1.jpg', 2, 'asassa', 1),
(15, 'kegiatan', '', 2, 'ansmansmsanm', 1);

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
(1, 'asdfgfdsa', 'ass@gfsa.a', NULL, '$2y$10$LuC.IqwQDparnwz0MGBZJuPXfyFwPgJku3jasbLNLKL7W2sR7ZiF.', 'yuyFqUrEe0MBucWSoTbV0qm7DUdbD4xxri7nVBupmFV1L759pKvEedBw7Bca', '2018-09-25 20:28:14', '2018-09-25 20:28:14', 1, 'asdfgfw', '2018-09-17', 'Perempuan', 'asdfgf', '9876543456', 'sdffd', 'assddfdsa', 'asdfgdsa'),
(2, 'ita anak haram', 'lkjggh@g.a', NULL, '$2y$10$LuC.IqwQDparnwz0MGBZJuPXfyFwPgJku3jasbLNLKL7W2sR7ZiF.', 'B5w4Lup2xEDoluCLZkJZur8q3e32sXje6NvLK96MWFR0sqvHfDzRFb632aWe', '2018-09-25 20:53:44', '2018-09-25 20:53:44', 2, 'goa berhantu', '1998-08-11', 'Laki-Laki', 'lkjvcv', '1234567', 'kjgfd', 'kjhgfd', 'kjhgfd'),
(6, 'hh', 'sdfghui@as.s', NULL, '$2y$10$9UQufEi1RPWTXPzrzfc3hO0clVF/InsciPq9bLmy0snZXq6gd/MMa', NULL, '2018-10-10 01:07:33', '2018-10-10 01:07:33', 2, 'asd', '2018-10-13', 'Laki-Laki', 'asdfgf', '1234567', 'zaxdcvbn', 'asdvf', 'dsv'),
(7, 'ana', 'as@g.a', NULL, '$2y$10$LuC.IqwQDparnwz0MGBZJuPXfyFwPgJku3jasbLNLKL7W2sR7ZiF.', NULL, '2018-10-10 01:20:42', '2018-10-10 01:20:42', 2, 'fyuio', '2018-10-25', 'Laki-Laki', 'sdfhi', '0986543', 'zxvjl', 'kjvcxz', 'njvcx'),
(8, 'ita', 'acb@g.a', NULL, '$2y$10$OC6T299bfwGvKgqWXmQV7eSbQIPk0KbkPvF7Xb0CeRSoPF4fwezq6', NULL, '2018-10-10 01:23:33', '2018-10-10 01:23:33', 2, 'sdfghj', '2017-10-31', 'Perempuan', 'dfhjk', '987542', 'jhvcxz', 'hjgfd', 'nmbvc'),
(9, 'aaaa', 'aaaa@g.a', NULL, '$2y$10$dHFVuKurajDFpCwXerfEf.oWX9Gaqbmwoik3ftt6q3DO7zLnkHvZG', NULL, '2018-10-10 01:25:53', '2018-10-10 01:25:53', 2, 'asdf', '2018-10-12', 'Laki-Laki', 'sdcdf', '234567890', 'zc vb', 'zxcvb', 'xcv bn');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`idTopik`);

--
-- Indeks untuk tabel `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `forum_threads`
--
ALTER TABLE `forum_threads`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatanumkm`
--
ALTER TABLE `kegiatanumkm`
  ADD PRIMARY KEY (`idKegiatan`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

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
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`);

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
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `idTopik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `forum_threads`
--
ALTER TABLE `forum_threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kegiatanumkm`
--
ALTER TABLE `kegiatanumkm`
  MODIFY `idKegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
