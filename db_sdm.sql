-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2022 pada 03.58
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sdm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` char(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `jumlah_bimbingan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `jenis_kelamin`, `alamat`, `email`, `no_hp`, `bidang`, `pengalaman`, `dokumen`, `jumlah_bimbingan`) VALUES
('20.01.4545', 'Muhammad Seno Bimantoro', 'pria', 'Yogyakarta', 'seno@gmail.com', '081343198508', 'Struktur Data', '6d669ead866f355ea7fe42a0ced03f82.pdf', '7d6f3eabc2b469e6d6f9b6bce58b62ef.pdf', '2'),
('20.01.4550', 'Fardhan Ardi Wibowo', 'pria', 'Yogyakarta', 'fardan@gmail.com', '081343198508', 'Perancangan Web', 'a7568056f65ee9a091f126e478e41837.pdf', '339896aa73fb53fd4ce4adb8be2710f7.pdf', '3'),
('20.01.4559', 'Muhammad Saifullah', 'pria', 'Maluku Tengah', 'saif@gmail.com', '081343198508', 'Perancangan BasisData', '210df0fac65864a4f994b3f031555558.pdf', 'a9ff41e8e3f0ebbfc9e17b0b3e53d546.pdf', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
