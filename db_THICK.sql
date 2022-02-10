-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2022 at 08:03 AM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` varchar(225) NOT NULL,
  `id_concentration` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `competence` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `picture` varchar(225) NOT NULL,
  `level` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `id_concentration`, `name`, `competence`, `email`, `contact`, `picture`, `level`, `created_at`, `updated_at`) VALUES
('1', 1, 'Admin', 'Admin', 'admin.tester@ukdc.ac.id', '1', 'https://lh3.googleusercontent.com/a/AATXAJyeK9lMFNtusDdjss0EjiLe1n1ObPXrid9wrQWB=s96-c', 1, '2022-02-07 14:39:10', '2022-02-07 14:39:10'),
('19340019', 4, 'Audi Nathanael', 'CISCO', 'audi.nathanael@student.ukdc.ac.id', '081938137432', 'https://lh3.googleusercontent.com/a/AATXAJxU32eSWXJiNivd3dokzrKrNXXiU30Bb3h-gD8-=s96-c', 4, '2022-02-02 19:42:37', '2022-02-02 19:42:37'),
('19340008', 1, 'Brielt Bella Gracitwo', 'Web Programing', 'brielt.bella@student.ukdc.ac.id', '000', 'https://lh3.googleusercontent.com/a-/AOh14GjFu4LufYHQzurihdnNiz69zdDZSfftpaavV_obrw=s96-c', 4, '2022-02-08 19:32:25', '2022-02-08 19:32:25'),
('1234', 1, 'Einsten', 'Hardware', 'einsten@ukdc.ac.id', '', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Albert_Einstein_Head.jpg/450px-Albert_Einstein_Head.jpg', 3, NULL, NULL),
('11111', 1, 'member 1', 'coba', 'member1@student.ukdc.ac.id', '000', '', 4, NULL, NULL),
('22222', 1, 'member 2', 'coba', 'member2@student.ukdc.ac.id', '00', '', 4, NULL, NULL),
('12345', 2, 'Nicola Tesla', 'Listrik', 'nicola.tesla@ukdc.ac.id', '1', 'https://www.akupaham.com/wp-content/uploads/2017/05/Biografi-Nikola-Tesla-e1504254213735.jpg', 3, NULL, NULL);

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
-- Table structure for table `concentration`
--

CREATE TABLE `concentration` (
  `id_concentration` int(225) NOT NULL,
  `id_departement` int(225) NOT NULL,
  `concentration` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concentration`
--

INSERT INTO `concentration` (`id_concentration`, `id_departement`, `concentration`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Engineering', NULL, NULL),
(2, 1, 'Computer Science', NULL, NULL),
(3, 1, 'Enterprise System', NULL, NULL),
(4, 1, 'Computer Network', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(225) NOT NULL,
  `departement` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id_departement`, `departement`, `created_at`, `updated_at`) VALUES
(1, 'Ilmu Informatika', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_project` int(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email`, `id_project`, `created_at`, `updated_at`) VALUES
(1, 'member1@student.ukdc.ac.id', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(225) NOT NULL,
  `id_lecturer` varchar(225) NOT NULL,
  `id_head` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(25) NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `id_lecturer`, `id_head`, `name`, `type`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, '123', '19340008', 'coba 1', 'Application', '2022-02-10', NULL, NULL, NULL),
(2, '123', '19340007', 'coba 2', 'Application', '2022-02-10', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concentration`
--
ALTER TABLE `concentration`
  ADD PRIMARY KEY (`id_concentration`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `concentration`
--
ALTER TABLE `concentration`
  MODIFY `id_concentration` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
