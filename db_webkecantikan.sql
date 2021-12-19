-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2021 pada 14.03
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webkecantikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(200) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(0, 'widya', 'dyanisam', '123'),
(1, 'anisa', 'anisam', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_artikel`
--

CREATE TABLE `data_artikel` (
  `id_artikel` int(200) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` text NOT NULL,
  `gambar` tinyblob NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_artikel`
--

INSERT INTO `data_artikel` (`id_artikel`, `id_admin`, `judul`, `gambar`, `deskripsi`) VALUES
(0, 0, 'Tips Penggunaan Serum', 0xffd8ffe000104a46494600010100000100010000ffdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc00011080320032003012200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a108, 'Halloo beauties..\r\nUdah tau belum kalo penggunaan serum harus baik dan benar karna mempengaruhi efektifitas penggunaannya? yuk cek gambar diatas untuk step-stepnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_review`
--

CREATE TABLE `data_review` (
  `id_review` int(200) NOT NULL,
  `id_user` int(200) NOT NULL,
  `judul` text NOT NULL,
  `gambar` text NOT NULL,
  `id_jeniskulit` int(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wantto`
--

CREATE TABLE `data_wantto` (
  `id_wantto` int(200) NOT NULL,
  `id_user` int(200) NOT NULL,
  `id_datawantto` int(200) NOT NULL,
  `namaproduk` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kulit`
--

CREATE TABLE `jenis_kulit` (
  `id_jeniskulit` int(200) NOT NULL,
  `nama_jeniskulit` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kulit`
--

INSERT INTO `jenis_kulit` (`id_jeniskulit`, `nama_jeniskulit`) VALUES
(0, 'kulit berminyak'),
(1, 'kulit kering'),
(2, 'kulit sensitif'),
(3, 'kulit berjerawat'),
(4, 'kulit kombinasi'),
(5, 'kulit normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(200) NOT NULL,
  `nama` text NOT NULL,
  `domisili` text NOT NULL,
  `tanggallahir` date NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `domisili`, `tanggallahir`, `username`, `password`, `email`) VALUES
(0, 'Desi Juniar', '0', '1999-06-04', 'desijuniar', '1234', 'desijuniar@gmail.com'),
(1, 'Intania Salsabila', '0', '2000-02-24', 'ntanias', '1234', 'intanias@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `want_to`
--

CREATE TABLE `want_to` (
  `id_wantto` int(200) NOT NULL,
  `want_to` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `want_to`
--

INSERT INTO `want_to` (`id_wantto`, `want_to`) VALUES
(0, 'want to sell'),
(1, 'want to trade'),
(2, 'want to donate'),
(3, 'want to buy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_artikel`
--
ALTER TABLE `data_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `data_review`
--
ALTER TABLE `data_review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jeniskulit` (`id_jeniskulit`);

--
-- Indeks untuk tabel `data_wantto`
--
ALTER TABLE `data_wantto`
  ADD PRIMARY KEY (`id_wantto`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_datawantto` (`id_datawantto`);

--
-- Indeks untuk tabel `jenis_kulit`
--
ALTER TABLE `jenis_kulit`
  ADD PRIMARY KEY (`id_jeniskulit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `want_to`
--
ALTER TABLE `want_to`
  ADD PRIMARY KEY (`id_wantto`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_artikel`
--
ALTER TABLE `data_artikel`
  ADD CONSTRAINT `data_artikel_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `data_review`
--
ALTER TABLE `data_review`
  ADD CONSTRAINT `data_review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `data_review_ibfk_2` FOREIGN KEY (`id_jeniskulit`) REFERENCES `jenis_kulit` (`id_jeniskulit`);

--
-- Ketidakleluasaan untuk tabel `data_wantto`
--
ALTER TABLE `data_wantto`
  ADD CONSTRAINT `data_wantto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `data_wantto_ibfk_2` FOREIGN KEY (`id_datawantto`) REFERENCES `want_to` (`id_wantto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
