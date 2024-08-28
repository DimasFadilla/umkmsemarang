-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2023 pada 08.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblokasi`
--

CREATE TABLE `tblokasi` (
  `idlokasi` int(11) NOT NULL,
  `namalokasi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longtitude` varchar(50) NOT NULL,
  `idkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tblokasi`
--

INSERT INTO `tblokasi` (`idlokasi`, `namalokasi`, `deskripsi`, `latitude`, `longtitude`, `idkategori`) VALUES
(12, 'Owabong', 'Wisata Air di Purbalingga', '-7.3488905', '109.3474883', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblokasi`
--
ALTER TABLE `tblokasi`
  ADD PRIMARY KEY (`idlokasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblokasi`
--
ALTER TABLE `tblokasi`
  MODIFY `idlokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
