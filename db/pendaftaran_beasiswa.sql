-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2023 at 06:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int NOT NULL,
  `nama_beasiswa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama_beasiswa`, `status`) VALUES
(1, 'Akademik', 'Buka'),
(2, 'Non Akademik', 'Buka'),
(3, 'KIP Kuliah', 'Buka'),
(4, 'Unggulan', 'Buka');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `last_login`) VALUES
(1, 'Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2023-08-22 13:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_hp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `semester` int NOT NULL,
  `ipk` decimal(3,2) NOT NULL,
  `pilihan_beasiswa` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `berkas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_ajuan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status_color` varchar(10) COLLATE utf8mb4_general_ci DEFAULT 'yellow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `nama`, `email`, `nomor_hp`, `semester`, `ipk`, `pilihan_beasiswa`, `berkas`, `status_ajuan`, `status_color`) VALUES
(23, 'Azharangga Kusuma', 'azharanggakusuma01@gmail.com', '0895364527280', 5, '3.10', 'KIP Kuliah', 'MTCNA.jpg', 'Diterima', 'yellow'),
(24, 'v', 'contoh@gmail.com', '12345678', 7, '3.07', 'Non Akademik', 'kalkulator.png', 'Ditolak', 'yellow'),
(25, 'Aldiyansyah Kurniawan', 'aldiyansyahkurniawann@gmail.com', '12345678', 5, '3.64', 'Unggulan', 'ecommerce.png', 'Diterima', 'yellow'),
(26, 'Nurul Hikmah', 'hikmahnurul211@gmail.com', '12345678', 5, '3.71', 'KIP Kuliah', 'personal_website.png', 'Diterima', 'yellow'),
(27, 'aji susanto', 'ajisusan@gmail.com', '0895364527280', 5, '3.85', 'KIP Kuliah', 'Terinah 20_08_2023 19_04_17.png', 'Ditangguhkan', 'yellow'),
(28, 'Azharangga Kusuma', 'azharanggakusuma01@gmail.com', '12345678', 5, '3.33', 'KIP Kuliah', 'CCNAv7.jpg', 'Ditangguhkan', 'yellow'),
(29, 'j', 'admin@gmail.com', '12345678', 5, '3.08', 'KIP Kuliah', 'CNSS.jpg', 'Belum di verifikasi', 'yellow'),
(30, 'contoh', 'contoh@gmail.com', '12345678', 4, '3.46', 'Unggulan', 'PCAP.jpg', 'Belum di verifikasi', 'yellow'),
(31, 'mobile', 'mobile@gmail.com', '12345678', 7, '3.13', 'Akademik', 'NDG Linux Unhatched.jpg', 'Diterima', 'yellow'),
(32, 'contoh', 'contoh@gmail.com', '12345678', 5, '3.11', 'Akademik', 'Juara-3.png', 'Belum di verifikasi', 'yellow'),
(33, 'contoh', 'contoh@gmail.com', '12345678', 5, '3.45', 'Non Akademik', 'Juara-3.png', 'Belum di verifikasi', 'yellow'),
(34, 'contoh', 'contoh@gmail.com', '12345678', 5, '3.44', 'Akademik', 'Dasar Pemrograman Web.jpg', 'Belum di verifikasi', 'yellow'),
(35, 'Baru', 'Baru@gmail.com', '1111111111111', 5, '3.14', 'KIP Kuliah', 'CCNAv7.jpg', 'Diterima', 'yellow'),
(36, 'test', 'test@gmail.com', '1234567891111', 3, '3.31', 'Akademik', 'CNSS.jpg', 'Belum di verifikasi', 'yellow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
