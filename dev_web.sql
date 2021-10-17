-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Okt 2021 pada 10.02
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(5) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `profil`, `name`, `short_name`, `email`, `instagram`, `alamat`) VALUES
(1, 'images/bayu.jpg', 'Raviy Bayu Setiaji', 'Bayu', 'bayu.setiaji709@gmail.com', 'https://www.instagram.com/raviy_bayu/', 'Prasung Tani RT 01. RW 01. Kec. Buduran Kab. Sidoarjo Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `description`
--

CREATE TABLE `description` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `description`
--

INSERT INTO `description` (`id`, `name`, `description`) VALUES
(1, 'about', 'Saya adalah anak ke 5 dari 5 bersaudara. Saya sekarang berumur 21 tahun, sedang berkuliah di UPN Veteran Jawa Timur. Saya menempuh semester 5 di program studi Informatika. Saya memiliki hobi, yaitu : bermain game, memancing, badminton, dan sepak bola. Saya bertempat tinggal di Sidoarjo Jawa Timur.'),
(2, 'skill', 'Bahasa pemrograman yang sebelumnya sudah saya pelajari. Saya belajar mulai dari jenjang sebelumnya di Sekolah Menengah Kejuruan dan Universitas. Saya juga belajar dari luar kegiatan akademik.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(8, 'wisnu', 'wisnu@email.com', 'Testing Message', 'ini message untuk bayu\r\n'),
(9, 'Indra', 'indra@mail.com', 'Pesanku', 'Pesan untuk bayu\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `persen_val` varchar(25) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `name`, `persen_val`, `class`) VALUES
(1, 'HTML & CSS', '75%', 'line html'),
(2, 'PHP', '65%', 'line css'),
(3, 'JavaScript', '50%', 'line js'),
(4, 'MySql', '80%', 'line php'),
(5, 'Golang', '30%', 'line golang'),
(6, 'Labstack Echo', '100%', 'asdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `studi`
--

CREATE TABLE `studi` (
  `id` int(10) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `tahun_lulus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `studi`
--

INSERT INTO `studi` (`id`, `jenjang`, `tempat`, `waktu`, `tahun_lulus`) VALUES
(1, 'SD', 'SDN Wadungasih I', '6 Tahun', '2013'),
(2, 'SMP', 'SMP Negeri 1 Buduran', '3 Tahun', '2016'),
(3, 'SMK', 'SMK Negeri 2 Buduran', '3 Tahun', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE `teman` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `kota_asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teman`
--

INSERT INTO `teman` (`id`, `foto`, `name`, `universitas`, `kota_asal`) VALUES
(1, 'images/dz.jpeg', 'M. Ilham Dzulfikar', 'Universitas Muhammadiyah Sidoarjo', 'Sidoarjo'),
(2, 'images/aan.jpg', 'Aan Evian Nanda', 'UPN Veteran Jawa Timur', 'Magetan'),
(3, 'images/alwin.jpg', 'M. Izdihar Alwin', 'UPN Veteran Jawa Timur', 'Kupang'),
(4, 'images/nando.jpeg', 'Muhammad Alfyando', 'UPN Veteran Jawa Timur', 'Nganjuk'),
(5, 'images/indra.jpeg', 'Indra Arsy Kaloka', 'UNTAG Surabaya', 'Sidoarjo'),
(6, 'images/diva.jpg', 'Fatwa Zuhri D. P.', 'UPN Veteran Jawa Timur', 'Lamongan'),
(11, 'images/bayu.jpeg', 'Raviy Bayu S', 'Universitas Sidoarjo', 'Sidoarjo'),
(12, 'images/bayu.jpeg', 'Raviy Bayu S', 'Universitas Sidoarjo', 'Sidoarjo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studi`
--
ALTER TABLE `studi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teman`
--
ALTER TABLE `teman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studi`
--
ALTER TABLE `studi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teman`
--
ALTER TABLE `teman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
