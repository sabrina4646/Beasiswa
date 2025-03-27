-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 05:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bantuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'amin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `akun_mahasiswa`
--

CREATE TABLE `akun_mahasiswa` (
  `nim` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_mahasiswa`
--

INSERT INTO `akun_mahasiswa` (`nim`, `nama`, `password`) VALUES
(1, 'andi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_daftar` int(15) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nim` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL,
  `ipk` decimal(10,2) NOT NULL,
  `pil_beasiswa` enum('A','NA') NOT NULL COMMENT 'A=akademik| NA=non_akademik',
  `berkas` varchar(35) NOT NULL,
  `status` enum('B','D','T') NOT NULL COMMENT 'B=Belum Diverifikasi| D=Diterima | T=Ditolak',
  `id_admin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`id_daftar`, `tgl_daftar`, `nim`, `email`, `no_hp`, `semester`, `ipk`, `pil_beasiswa`, `berkas`, `status`, `id_admin`) VALUES
(13, '2023-09-21', 1, 'coba@gmail.com', '081111111111111', 1, '3.00', 'A', '1.sql', '', 1),
(14, '2023-09-21', 2, 'b@gmail.com', '081111111111111', 1, '3.00', 'A', '2.HEIC', 'B', 0),
(16, '2023-09-21', 16, '', '', 0, '2.50', '', '', '', 0),
(17, '2023-09-21', 9, '', '', 0, '2.50', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akun_mahasiswa`
--
ALTER TABLE `akun_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_daftar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
