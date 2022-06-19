-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2022 pada 08.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luwe_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `foto_makanan` varchar(100) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `caption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `foto_makanan`, `nama_makanan`, `slug`, `caption`) VALUES
(1, 'pecel.jpg', 'Pecel Mbok Yem', 'pecel', 'Pecel paling top sak semarang pokoke jossss'),
(2, 'sate.jpg', 'Sate Madura Cak Met', 'sate', 'Te Sate Tak ye'),
(3, 'lotek.jpg', 'Lotek Buah Terlengkap', 'lotek-buah', 'Lotek buah terlengkap setiap buah didunia ini ada semua bahkan buah khuldi pun ada sak nabi adame'),
(4, 'all_you_can_eat.jpg', 'All You Can Eat', 'wagyu', 'Makan Wagyu bayar sekali makan berkali-kali sak wareg e'),
(5, 'sus.jpg', 'Kue Sus', 'kue-sus', 'Kue sus yang paling enak, terdapat berbagai rasa kecuali rasa ingin memiliki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warung`
--

CREATE TABLE `warung` (
  `id` int(11) NOT NULL,
  `foto_warung` varchar(100) NOT NULL,
  `nama_warung` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `jenis_warung` varchar(50) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warung`
--

INSERT INTO `warung` (`id`, `foto_warung`, `nama_warung`, `slug`, `jenis_warung`, `lokasi`, `instagram`, `telp`) VALUES
(1, 'bakaran_lek_james.jpg', 'Bakaran Lek James', 'bakaran-lek-james', 'Restoran', 'Jl. Deo Iskandar No.42, Banyumanik', '@lekjames_bakaran', '087452136541'),
(2, 'bandos_oke.jpg', 'Bandos OKE', 'bandos-oke', 'Kedai', 'Jl. Pahlawan No.45, Semarang Tengah', '@okendos', '084512364215'),
(3, 'berkah_lawuh.jpg', 'Berkah Lawuh', 'berkah-lawuh', 'Kedai', 'Jl. Kesehatan No.20, Wonosobo Timur', '@berkahlawuh73', '086412546231'),
(4, 'bp55.jpg', 'Bakpia Pathok 55', 'bakpia-patok-55', 'Kedai', 'jl. Labuhan Sari Utara II no.43 Semarang Utara', '@diphatokbakpia55', '08546978132');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `warung`
--
ALTER TABLE `warung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
