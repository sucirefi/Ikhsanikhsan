-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2018 pada 19.13
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mug`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamug`
--

CREATE TABLE `datamug` (
  `datamug_id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mugtabel`
--

CREATE TABLE `mugtabel` (
  `pemesan_id` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mugtabel`
--

INSERT INTO `mugtabel` (`pemesan_id`, `nama_pemesan`, `tanggal`, `alamat`, `jumlah`) VALUES
(1, 'nana', '2018-04-03', 'subang', 2),
(2, 'nunu', '2018-04-18', 'kalijati', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamug`
--
ALTER TABLE `datamug`
  ADD PRIMARY KEY (`datamug_id`);

--
-- Indexes for table `mugtabel`
--
ALTER TABLE `mugtabel`
  ADD PRIMARY KEY (`pemesan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamug`
--
ALTER TABLE `datamug`
  MODIFY `datamug_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mugtabel`
--
ALTER TABLE `mugtabel`
  MODIFY `pemesan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
