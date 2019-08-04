-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 10:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `neraca_kategori`
--

CREATE TABLE `neraca_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL,
  `kategori_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neraca_kategori`
--

INSERT INTO `neraca_kategori` (`kategori_id`, `kategori_nama`, `kategori_date_created`) VALUES
(1, 'Timbangan Pasar', '2019-08-02 14:57:08'),
(3, 'Timbangan Mobil', '2019-08-03 14:20:45'),
(4, 'Timbangan Emas', '2019-08-04 14:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `neraca_pesan`
--

CREATE TABLE `neraca_pesan` (
  `pesan_id` int(11) NOT NULL,
  `pesan_nama` varchar(100) NOT NULL,
  `pesan_email` varchar(100) NOT NULL,
  `pesan_isi` text NOT NULL,
  `pesan_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neraca_pesan`
--

INSERT INTO `neraca_pesan` (`pesan_id`, `pesan_nama`, `pesan_email`, `pesan_isi`, `pesan_date_created`) VALUES
(1, 'Jihad Benastey', 'jihad@gmail.com', 'pak misalnya aku ', '2019-08-04 15:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `neraca_produk`
--

CREATE TABLE `neraca_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_kategori` int(11) NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_foto` text NOT NULL,
  `produk_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neraca_produk`
--

INSERT INTO `neraca_produk` (`produk_id`, `produk_nama`, `produk_kategori`, `produk_deskripsi`, `produk_harga`, `produk_foto`, `produk_date_created`) VALUES
(1, 'Timbangan Beras', 1, 'ini adalah timbangan beras', 2000000000, 'bab_21.png', '2019-08-03 15:16:37'),
(2, 'Timbangan Mantap', 3, 'Timbangan ini didesign untuk yang mantap mantap. okee?', 250000, '111.jpg', '2019-08-04 14:15:22'),
(3, 'Timbangan Transportasi dan Logistik', 4, 'Mengkombinasikan transportasi dan penimbangan dalam satu gerakan sederhana dengan menggunakan dongkrak palet dan timbangan truk.', 229996, 'tim-analitik.jpeg', '2019-08-04 14:54:27'),
(4, 'Jembatan Timbang', 3, 'Jembatan Timbang ini adalah bla bla bla', 3000000, 'bans.png', '2019-08-04 14:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `neraca_user`
--

CREATE TABLE `neraca_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(25) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `neraca_kategori`
--
ALTER TABLE `neraca_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `neraca_pesan`
--
ALTER TABLE `neraca_pesan`
  ADD PRIMARY KEY (`pesan_id`);

--
-- Indexes for table `neraca_produk`
--
ALTER TABLE `neraca_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `neraca_user`
--
ALTER TABLE `neraca_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `neraca_kategori`
--
ALTER TABLE `neraca_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `neraca_pesan`
--
ALTER TABLE `neraca_pesan`
  MODIFY `pesan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `neraca_produk`
--
ALTER TABLE `neraca_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `neraca_user`
--
ALTER TABLE `neraca_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
