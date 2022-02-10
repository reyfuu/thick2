-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2022 at 07:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_THICK`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` varchar(225) NOT NULL,
  `id_konsentrasi` int(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kompetensi` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `level` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `id_konsentrasi`, `nama`, `kompetensi`, `email`, `kontak`, `gambar`, `level`, `created_at`, `updated_at`) VALUES
('1', 1, 'Admin', 'Admin', 'admin.tester@ukdc.ac.id', '1', 'https://lh3.googleusercontent.com/a/AATXAJyeK9lMFNtusDdjss0EjiLe1n1ObPXrid9wrQWB=s96-c', 1, '2022-02-07 14:39:10', '2022-02-07 14:39:10'),
('19340019', 4, 'Audi Nathanael', 'CISCO', 'audi.nathanael@student.ukdc.ac.id', '081938137432', 'https://lh3.googleusercontent.com/a/AATXAJxU32eSWXJiNivd3dokzrKrNXXiU30Bb3h-gD8-=s96-c', 4, '2022-02-02 19:42:37', '2022-02-02 19:42:37'),
('19340008', 1, 'Brielt Bella Gracitwo', 'Web Programing', 'brielt.bella@student.ukdc.ac.id', '089530950620', 'https://lh3.googleusercontent.com/a-/AOh14GjFu4LufYHQzurihdnNiz69zdDZSfftpaavV_obrw=s96-c', 4, '2022-02-02 19:30:11', '2022-02-02 19:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` int(100) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `sinopsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id`, `judul`, `slug`, `sinopsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Senpai ga Uzai Kouhai no Hanashi', 'Senpai-ga-Uzai-Kouhai-no-Hanashi', 'Pekerjaan baru Igarashi Futuba akan sangat bagus jika senpainya, Takeda Harumi, tidak terlalu menyebalkan! Futuba membenci tawanya, dia membenci seberapa besar dia, dan dia benar-benar benci bahwa dia memperlakukannya seperti anak kecil. Hanya karena Futuba pendek dan terlihat muda tidak membuatnya seperti anak kecil, dan hanya karena dia menghabiskan begitu banyak waktu dengan Takeda bukan berarti dia menganggapnya sebagai senpai yang menyebalkan…atau dia?!', 'Senpai-ga-Uzai-Kouhai-no-Hanashi.jpg', NULL, NULL),
(2, 'Komi-san wa Comyushou desu', 'Komi-san-wa-Comyushou-desu', 'Ini adalah hari pertama Shouko Komi di Sekolah Menengah Swasta Itan yang bergengsi, dan dia telah naik ke status Madonna sekolah. Dengan rambut hitam panjang dan penampilan yang tinggi dan anggun, dia menarik perhatian siapa pun yang bertemu dengannya. Hanya ada satu masalah—terlepas dari popularitasnya, Shouko sangat buruk dalam berkomunikasi dengan orang lain.', 'Komi-san-wa-Comyushou-desu.jpg', NULL, NULL),
(3, 'coba2', 'coba2', 'ini sinopsis yang kedua', 'Screenshot_2021-12-22_02_59_19.png', '2022-01-27 19:39:38', '2022-01-28 01:18:00'),
(4, 'astaha', 'astaha', 'cobaataga', 'Screenshot_2021-12-22_02_59_20.png', '2022-01-27 19:46:04', '2022-01-28 01:18:20'),
(5, 'coba saja', 'coba-saja', 'coba saja', 'meme.png', '2022-01-27 19:47:30', '2022-01-28 08:32:19'),
(8, 'anime', 'anime', 'anime', 'Screenshot_2021-12-21_19_58_47.png', '2022-01-28 09:24:16', '2022-01-28 09:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `konsentrasi`
--

CREATE TABLE `konsentrasi` (
  `id_konsentrasi` int(225) NOT NULL,
  `id_prodi` int(225) NOT NULL,
  `konsentrasi` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsentrasi`
--

INSERT INTO `konsentrasi` (`id_konsentrasi`, `id_prodi`, `konsentrasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Engineering', NULL, NULL),
(2, 1, 'Computer Science', NULL, NULL),
(3, 1, 'Enterprise System', NULL, NULL),
(4, 1, 'Computer Network', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(225) NOT NULL,
  `prodi` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `prodi`, `created_at`, `updated_at`) VALUES
(1, 'Ilmu Informatika', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  ADD PRIMARY KEY (`id_konsentrasi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  MODIFY `id_konsentrasi` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
