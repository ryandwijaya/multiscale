-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2019 pada 12.29
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
-- Database: `ope_siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendaftar`
--

CREATE TABLE `detail_pendaftar` (
  `detail_id` int(11) NOT NULL,
  `detail_ayah` text NOT NULL,
  `detail_ibu` text NOT NULL,
  `detail_istri` text NOT NULL,
  `detail_ayah_istri` text NOT NULL,
  `detail_ibu_istri` text NOT NULL,
  `detail_tgl_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pendaftar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pendaftar`
--

INSERT INTO `detail_pendaftar` (`detail_id`, `detail_ayah`, `detail_ibu`, `detail_istri`, `detail_ayah_istri`, `detail_ibu_istri`, `detail_tgl_buat`, `pendaftar_id`) VALUES
(2, '{\"nama\":\"Dujiono\",\"tempat_lahir\":\"Kampar\",\"tgl_lahir\":\"1965-09-09\",\"nik\":\"197979787979\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Petani\",\"pendidikan\":\"SMA\",\"alamat\":\"Jl Uka\"}', '{\"nama\":\"Sujatmi\",\"tempat_lahir\":\"Pekanbaru\",\"tgl_lahir\":\"1967-09-09\",\"nik\":\"13338881\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Petani\",\"pendidikan\":\"SMA\",\"alamat\":\"Jl Uka\"}', '{\"nama\":\"Wahyuni Nanda\",\"tempat_lahir\":\"Jakarta\",\"tgl_lahir\":\"1997-09-09\",\"nik\":\"1979797931\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Perawat\",\"pendidikan\":\"Strata 1\",\"alamat\":\"Jl Keliling\"}', '{\"nama\":\"Karni Ilyas\",\"tempat_lahir\":\"Jakarta\",\"tgl_lahir\":\"1966-09-08\",\"nik\":\"134567773\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Wartawan\",\"pendidikan\":\"Magister\",\"alamat\":\"Jl Pendidikan\"}', '{\"nama\":\"Herniati\",\"tempat_lahir\":\"Bandung\",\"tgl_lahir\":\"1969-01-01\",\"nik\":\"1397910003805\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Dokter\",\"pendidikan\":\"Strata 1\",\"alamat\":\"Jl Pahlawan\"}', '2019-03-30 22:48:11', 1),
(3, '{\"nama\":\"Bagas\",\"tempat_lahir\":\"Pekanbaru\",\"tgl_lahir\":\"1968-08-08\",\"nik\":\"243423532523\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Petani\",\"pendidikan\":\"SMP\",\"alamat\":\"Jl Swakarya\"}', '{\"nama\":\"Darti\",\"tempat_lahir\":\"Jakarta\",\"tgl_lahir\":\"1968-07-07\",\"nik\":\"985976972\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Guru\",\"pendidikan\":\"Strata 1\",\"alamat\":\"Jl Teluk baru\"}', '{\"nama\":\"Ratna\",\"tempat_lahir\":\"Pekanbaru\",\"tgl_lahir\":\"1996-03-05\",\"nik\":\"23301884\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Guru\",\"pendidikan\":\"Strata 1\",\"alamat\":\"Jl Indah\"}', '{\"nama\":\"Darto\",\"tempat_lahir\":\"Pekanbaru\",\"tgl_lahir\":\"1966-09-02\",\"nik\":\"29686987777777\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Wiraswasta\",\"pendidikan\":\"SMA\",\"alamat\":\"Jl Petai\"}', '{\"nama\":\"Herniati\",\"tempat_lahir\":\"Kampar\",\"tgl_lahir\":\"1998-01-01\",\"nik\":\"2038080802\",\"kewarganegaraan\":\"Indonesia\",\"agama\":\"islam\",\"pekerjaan\":\"Guru\",\"pendidikan\":\"Strata 1\",\"alamat\":\"Jl indah karya\"}', '2019-04-04 00:57:07', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `dokumen_id` int(11) NOT NULL,
  `dokumen_data` text NOT NULL,
  `status_dokumen` enum('lengkap','belum','','') NOT NULL DEFAULT 'belum',
  `dokumen_tgl_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pendaftar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`dokumen_id`, `dokumen_data`, `status_dokumen`, `dokumen_tgl_buat`, `pendaftar_id`) VALUES
(2, '[{\"form\":\"n3\",\"filename\":\"berkas-32156\",\"path\":\"http://localhost/simrp/assets/docs/berkas/berkas-32156.jpg\"},{\"form\":\"dispensasi-camat\",\"filename\":\"berkas-32161\",\"path\":\"http://localhost/simrp/assets/docs/berkas/berkas-32161.jpg\"}]', 'belum', '2019-04-07 17:16:04', 1),
(3, '[{\"form\":\"n1\",\"filename\":\"berkas-32689\",\"path\":\"http://localhost/simrp/assets/docs/berkas/berkas-32689.jpg\"},{\"form\":\"n2\",\"filename\":\"berkas-32698\",\"path\":\"http://localhost/simrp/assets/docs/berkas/berkas-32698.jpg\"},{\"form\":\"dispensasi-camat\",\"filename\":\"berkas-32704\",\"path\":\"http://localhost/simrp/assets/docs/berkas/berkas-32704.jpg\"},{\"form\":\"surat-izin-komandan\",\"filename\":\"berkas-32708\",\"path\":\"http://localhost/simrp/assets/docs/berkas/berkas-32708.jpg\"}]', 'belum', '2019-04-07 17:25:11', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `lokasi` text NOT NULL,
  `jadwal_tgl_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pendaftar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `pendaftar_id` int(11) NOT NULL,
  `pendaftar_nama` varchar(255) NOT NULL,
  `pendaftar_tempat_lahir` varchar(255) NOT NULL,
  `pendaftar_tgl_lahir` datetime NOT NULL,
  `pendaftar_nik` varchar(255) NOT NULL,
  `pendaftar_kewarganegaraan` varchar(255) NOT NULL,
  `pendaftar_agama` enum('islam','kristen','hindu','budha','katolik','konghucu') NOT NULL,
  `pendaftar_pekerjaan` varchar(255) NOT NULL,
  `pendaftar_pendidikan` varchar(255) NOT NULL,
  `pendaftar_alamat` varchar(255) NOT NULL,
  `pendaftar_tgl_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`pendaftar_id`, `pendaftar_nama`, `pendaftar_tempat_lahir`, `pendaftar_tgl_lahir`, `pendaftar_nik`, `pendaftar_kewarganegaraan`, `pendaftar_agama`, `pendaftar_pekerjaan`, `pendaftar_pendidikan`, `pendaftar_alamat`, `pendaftar_tgl_buat`) VALUES
(1, 'Bagus Sujatmiding', 'Pekanbaru', '1998-03-05 00:00:00', '115551101836', 'Indonesia', 'islam', 'Buruh Lepas', 'SMA', 'Jl Karyawan gg rukun', '2019-03-28 22:26:21'),
(2, 'Bagus Adibaskara', 'Semarang', '1995-02-01 00:00:00', '19797971192894', 'Indonesia', 'islam', 'Petani', 'SMA', 'Jl Uka ', '2019-03-28 22:40:04'),
(6, 'Supardjo', 'Jambi', '1996-03-09 00:00:00', '97971100091', 'Indonesia', 'islam', 'Buruh Lepas', 'SMA', 'Jl Keramat Jati Jambi Kota', '2019-03-29 21:36:18'),
(7, 'Adi Idam', 'Kampar', '1997-09-09 00:00:00', '97917979879874982', 'Indonesia', 'islam', 'Petani Kelapa Sawit', 'SMA', 'Jl Pekansari', '2019-04-04 00:52:28'),
(8, 'adsad', 'jgjg', '1997-09-09 00:00:00', '175758', 'Indonesia', 'islam', 'jbjk', 'klkhlk', 'nlkhlk', '2019-04-07 17:21:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `sandi_pengguna` varchar(255) NOT NULL,
  `level_pengguna` enum('registrasi','pencatatan','kua','') NOT NULL,
  `pengguna_tgl_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `nama_pengguna`, `sandi_pengguna`, `level_pengguna`, `pengguna_tgl_buat`) VALUES
(1, 'adam', 'admin', 'registrasi', '2019-03-15 14:07:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pendaftar`
--
ALTER TABLE `detail_pendaftar`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `detail_pendaftar` (`pendaftar_id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`dokumen_id`),
  ADD KEY `dokumen_peserta` (`pendaftar_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`pendaftar_id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pendaftar`
--
ALTER TABLE `detail_pendaftar`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `dokumen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `pendaftar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pendaftar`
--
ALTER TABLE `detail_pendaftar`
  ADD CONSTRAINT `detail_pendaftar` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`pendaftar_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_peserta` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`pendaftar_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
