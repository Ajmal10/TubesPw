-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mei 2018 pada 04.19
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040147`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ilmuan`
--

CREATE TABLE `ilmuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `asal` varchar(64) NOT NULL,
  `penemuan` varchar(64) NOT NULL,
  `lahir` date NOT NULL,
  `wafat` date NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ilmuan`
--

INSERT INTO `ilmuan` (`id`, `nama`, `asal`, `penemuan`, `lahir`, `wafat`, `gambar`) VALUES
(1, 'Albert Einstein', 'German', 'Teori Relativitas', '1879-03-14', '1955-04-18', 'Albert.jpg'),
(2, 'Alessandro Volta', 'Como (Milan)', 'Batu Baterai', '1745-02-18', '1827-03-05', 'Alessandro2.jpg'),
(3, 'Alexander Graham Bell', 'Skotlandia', 'Perusahaan Telepon Bell', '1847-03-03', '1922-08-02', 'Alexander3.jpg'),
(4, 'Alfred Nobel', 'Swedia', 'Dinamit', '1833-10-21', '1896-12-10', 'alfred4.jpg'),
(5, 'Benjamin Franklin', 'Amerika Serikat', 'Kaca Mata', '1706-01-17', '1790-04-17', 'Benjamin5.jpg'),
(6, 'Benjamin Holt Leroy', 'Amerika Serikat', 'Traktor', '1849-01-01', '1920-12-05', 'Benjamin6.jpg'),
(7, 'Blaise Pascal', 'Prancis', 'Mesin Hitung', '1623-06-19', '1662-08-19', 'Blaise7.jpg'),
(8, 'Charles Goodyear', 'Amerika Serikat', 'Ban Karet Vulkanisasi', '1800-12-29', '1860-07-01', 'CharlesGoodyear.jpg'),
(9, 'Christopher Latham Sholes', 'Amerika Serikat', 'Mesin Ketik', '1819-02-14', '1890-02-17', 'Christopher9.jpg'),
(10, 'Dmitri Mendeleev', 'Rusia', 'Tabel Periodik', '1834-02-08', '1906-02-02', 'Dmitri10.jpg'),
(11, 'ajmal', 'adjawjkd', 'kjwaf', '1999-10-01', '9999-09-09', '5aff871143e09.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$fJ.5gzBiZndwYD3mee4WpOvRrUtmBm/6nJnyE.h2LBRitpOUooK1K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ilmuan`
--
ALTER TABLE `ilmuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ilmuan`
--
ALTER TABLE `ilmuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
