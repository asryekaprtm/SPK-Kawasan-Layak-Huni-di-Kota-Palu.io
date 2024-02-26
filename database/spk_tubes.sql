-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 21.03
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternative`
--

CREATE TABLE `alternative` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternative`
--

INSERT INTO `alternative` (`id`, `kelurahan`, `kecamatan`) VALUES
(7, 'Mamboro', 'Palu Utara'),
(8, 'Mamboro Barat', 'Palu Utara'),
(9, 'Kayumalue Pajeko', 'Palu Utara'),
(10, 'Kayumalue Ngapa', 'Palu Utara'),
(11, 'Taipa ', 'Palu Utara'),
(12, 'Baru', 'Palu Barat'),
(13, 'Buluri', 'Ulujadi'),
(14, 'Tipo', 'Ulujadi'),
(15, 'Balaroa', 'Palu Barat'),
(16, 'Kamonji', 'Palu Barat'),
(17, 'Lere', 'Palu Barat'),
(18, 'Siranindi', 'Palu Barat'),
(19, 'Ujuna', 'Palu Barat'),
(20, 'Petobo', 'Palu Selatan'),
(21, 'Donggala kodi', 'Ulujadi'),
(22, 'Silae', 'Ulujadi'),
(23, 'Birobuli Utara', 'Palu Selatan'),
(24, 'Birobuli Selatan', 'Palu Selatan'),
(25, 'Tatura Selatan', 'Palu Selatan'),
(26, 'Tatura Utara', 'Palu Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `nilai_qi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `kelurahan`, `kecamatan`, `nilai_qi`) VALUES
(1, 'Mamboro', '', '3.5983045397884'),
(2, 'Mamboro Barat', '', '3.6771471624672'),
(3, 'Kayumalue Pajeko', '', '3.7506313578402'),
(4, 'Kayumalue Ngapa', '', '3.624666466447'),
(5, 'Taipa ', '', '3.7029330067091'),
(6, 'Baru', '', '3.5903586886376'),
(7, 'Buluri', '', '3.4033511362737'),
(8, 'Tipo', '', '3.3076074310872'),
(9, 'Balaroa', '', '3.4134672386029'),
(10, 'Kamonji', '', '3.5833888729561'),
(11, 'Lere', '', '3.4659344361927'),
(12, 'Siranindi', '', '3.4640150582869'),
(13, 'Ujuna', '', '3.6032818671439'),
(14, 'Petobo', '', '3.4601173546921'),
(15, 'Donggala kodi', '', '3.4996633466029'),
(16, 'Silae', '', '3.5216719120752'),
(17, 'Birobuli Utara', '', '3.7522700770689'),
(18, 'Birobuli Selatan', '', '3.7522700770689'),
(19, 'Tatura Selatan', '', '3.8445032730693'),
(20, 'Tatura Utara', '', '3.829089807363');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kepadatan_penduduk` varchar(100) NOT NULL,
  `kondisi_jalan` varchar(100) NOT NULL,
  `kondisi_drainase` varchar(100) NOT NULL,
  `kemiringan_tanah` varchar(100) NOT NULL,
  `struktur_tanah` varchar(100) NOT NULL,
  `jarak_dari_laut` varchar(100) NOT NULL,
  `zona_rawan_bencana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kepadatan_penduduk`, `kondisi_jalan`, `kondisi_drainase`, `kemiringan_tanah`, `struktur_tanah`, `jarak_dari_laut`, `zona_rawan_bencana`) VALUES
(3, '0.15', '0.05', '0.1', '0.05', '0.15', '0.2', '0.3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_ternormalisasi`
--

CREATE TABLE `m_ternormalisasi` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_ternormalisasi`
--

INSERT INTO `m_ternormalisasi` (`id`, `kelurahan`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`) VALUES
(1, 'Mamboro', '0.5', '1', '1', '0.66666666666667', '1', '0.2', '0.75'),
(2, 'Mamboro Barat', '0.5', '1', '1', '0.66666666666667', '1', '0.2', '1'),
(3, 'Kayumalue Pajeko', '1', '0.75', '1', '0.66666666666667', '1', '0.2', '1'),
(4, 'Kayumalue Ngapa', '0.33333333333333', '0.75', '1', '0.66666666666667', '1', '0.2', '1'),
(5, 'Taipa ', '1', '0.75', '0.66666666666667', '0.5', '1', '0.2', '1'),
(6, 'Baru', '0.33333333333333', '1', '0.66666666666667', '0.5', '1', '0.2', '1'),
(7, 'Buluri', '0.2', '0.75', '1', '0.5', '1', '0.2', '0.5'),
(8, 'Tipo', '0.5', '0.75', '1', '0.4', '0.66666666666667', '0.2', '0.25'),
(9, 'Balaroa', '0.25', '0.75', '0.66666666666667', '1', '1', '0.2', '0.5'),
(10, 'Kamonji', '0.2', '0.75', '1', '0.66666666666667', '1', '0.2', '1'),
(11, 'Lere', '0.25', '0.75', '0.66666666666667', '0.5', '0.5', '0.2', '1'),
(12, 'Siranindi', '0.33333333333333', '0.5', '1', '0.5', '0.66666666666667', '0.2', '0.75'),
(13, 'Ujuna', '1', '0.75', '1', '1', '0.5', '0.2', '0.75'),
(14, 'Petobo', '0.25', '0.25', '0.66666666666667', '0.66666666666667', '1', '1', '0.25'),
(15, 'Donggala kodi', '0.33333333333333', '0.75', '0.66666666666667', '1', '1', '0.8', '0.25'),
(16, 'Silae', '0.33333333333333', '0.75', '1', '0.5', '0.5', '0.4', '0.75'),
(17, 'Birobuli Utara', '0.33333333333333', '0.75', '1', '0.5', '1', '1', '0.75'),
(18, 'Birobuli Selatan', '0.33333333333333', '0.75', '1', '0.5', '1', '1', '0.75'),
(19, 'Tatura Selatan', '0.33333333333333', '1', '1', '0.5', '1', '1', '1'),
(20, 'Tatura Utara', '0.5', '1', '1', '0.5', '0.66666666666667', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kepadatan_penduduk` varchar(100) NOT NULL,
  `kondisi_jalan` varchar(100) NOT NULL,
  `kondisi_drainase` varchar(100) NOT NULL,
  `kemiringan_tanah` varchar(100) NOT NULL,
  `struktur_tanah` varchar(100) NOT NULL,
  `jarak_dari_laut` varchar(100) NOT NULL,
  `zona_rawan_bencana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id`, `kelurahan`, `kepadatan_penduduk`, `kondisi_jalan`, `kondisi_drainase`, `kemiringan_tanah`, `struktur_tanah`, `jarak_dari_laut`, `zona_rawan_bencana`) VALUES
(4, 'Mamboro', '2', '4', '3', '3', '2', '1', '3'),
(5, 'Mamboro Barat', '2', '4', '3', '3', '2', '1', '4'),
(6, 'Kayumalue Pajeko', '1', '3', '3', '3', '2', '1', '4'),
(7, 'Kayumalue Ngapa', '3', '3', '3', '3', '2', '1', '4'),
(8, 'Taipa ', '1', '3', '2', '4', '2', '1', '4'),
(9, 'Baru', '3', '4', '2', '4', '2', '1', '4'),
(10, 'Buluri', '5', '3', '3', '4', '2', '1', '2'),
(11, 'Tipo', '2', '3', '3', '5', '3', '1', '1'),
(12, 'Balaroa', '4', '3', '2', '2', '2', '1', '2'),
(13, 'Kamonji', '5', '3', '3', '3', '2', '1', '4'),
(14, 'Lere', '4', '3', '2', '4', '4', '1', '4'),
(15, 'Siranindi', '3', '2', '3', '4', '3', '1', '3'),
(16, 'Ujuna', '1', '3', '3', '2', '4', '1', '3'),
(17, 'Petobo', '4', '1', '2', '3', '2', '5', '1'),
(18, 'Donggala kodi', '3', '3', '2', '2', '2', '4', '1'),
(19, 'Silae', '3', '3', '3', '4', '4', '2', '3'),
(20, 'Birobuli Utara', '3', '3', '3', '4', '2', '5', '3'),
(21, 'Birobuli Selatan', '3', '3', '3', '4', '2', '5', '3'),
(22, 'Tatura Selatan', '3', '4', '3', '4', '2', '5', '4'),
(23, 'Tatura Utara', '2', '4', '3', '4', '3', '5', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `class` varchar(125) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `class`, `nama`, `username`, `email`, `password`) VALUES
(2, 'admin', 'admin', 'admin', 'admin', 'admin'),
(4, 'user', 'Dhivanny ', 'dipo', 'dipo@gmail.com', '123'),
(5, 'user', 'Asry ', 'aci', 'aci@gmail.com', '123'),
(6, 'user', 'Rina', 'rina', 'rina@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_ternormalisasi`
--
ALTER TABLE `m_ternormalisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternative`
--
ALTER TABLE `alternative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_ternormalisasi`
--
ALTER TABLE `m_ternormalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
