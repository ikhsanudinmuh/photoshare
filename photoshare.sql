-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2019 pada 10.33
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoshare`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `fullname` text NOT NULL,
  `since` text NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `pass`, `fullname`, `since`, `level`) VALUES
(7, 'ikhsan', '123', 'MUHAMMAD IKHSANUDIN', '14-12-2018', 'User'),
(8, 'syafiq', '123', 'SYAFIQ ZAHRAN', '14-12-2018', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `caption` text NOT NULL,
  `username` text NOT NULL,
  `category` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `url`, `caption`, `username`, `category`, `date`) VALUES
(13, '00000IMG_00000_BURST20180713094745427_COVER.jpg', 'bunga indah', 'ikhsan', 'Nature', '14-12-2018 07:42'),
(15, '00000IMG_00000_BURST20180723143753873_COVER.jpg', 'botol fruit tea', 'ikhsan', 'Other', '14-12-2018 09:48'),
(16, '00000IMG_00000_BURST20180722113938201_COVER.jpg', 'bunga', 'syafiq', 'Nature', '14-12-2018 09:51'),
(17, 'contoh.jpg', 'tes', 'ikhsan', 'Other', '14-12-2018 19:15'),
(18, 'email_PNG51.png', 'message', 'ikhsan', 'Other', '04-04-2019 09:14'),
(19, '256-256-d4635e484670e5f084ab26e2e47d452a.png', 'dwda', 'ikhsan', 'Animal', '04-04-2019 09:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `category_name` enum('Animal','Nature','Black and White','Vehicle','Street','Vintage','Other','Sports','Travel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `category_name`) VALUES
(1, 'Animal'),
(2, 'Nature'),
(3, 'Black and White'),
(4, 'Vehicle'),
(5, 'Street'),
(6, 'Vintage'),
(7, 'Other'),
(8, 'Sports'),
(9, 'Travel');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
