-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2019 pada 10.35
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_neraca`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `neraca_kategori`
--

CREATE TABLE `neraca_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL,
  `kategori_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `neraca_kategori`
--

INSERT INTO `neraca_kategori` (`kategori_id`, `kategori_nama`, `kategori_date_created`) VALUES
(1, 'Timbangan Pasar', '2019-08-02 14:57:08'),
(3, 'Timbangan Mobil', '2019-08-03 14:20:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `neraca_produk`
--

CREATE TABLE `neraca_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_kategori` int(11) NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_foto` text NOT NULL,
  `produk_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `neraca_produk`
--

INSERT INTO `neraca_produk` (`produk_id`, `produk_nama`, `produk_kategori`, `produk_deskripsi`, `produk_harga`, `produk_foto`, `produk_date_created`) VALUES
(1, 'Timbangan Beras', 1, 'ini adalah timbangan beras', 2000000000, 'bab_21.png', '2019-08-03 15:16:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `neraca_user`
--

CREATE TABLE `neraca_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `neraca_kategori`
--
ALTER TABLE `neraca_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `neraca_produk`
--
ALTER TABLE `neraca_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `neraca_user`
--
ALTER TABLE `neraca_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `neraca_kategori`
--
ALTER TABLE `neraca_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `neraca_produk`
--
ALTER TABLE `neraca_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `neraca_user`
--
ALTER TABLE `neraca_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
