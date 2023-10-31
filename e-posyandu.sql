-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 08:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayi_0-12bulan`
--

CREATE TABLE `bayi_0-12bulan` (
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bbl(kg)` double NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl_timbang` date NOT NULL,
  `hasil_penimbangan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bayi_13-36bulan`
--

CREATE TABLE `bayi_13-36bulan` (
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bbl(kg)` double NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl_timbang` date NOT NULL,
  `hasil_penimbangan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bayi_37-60bulan`
--

CREATE TABLE `bayi_37-60bulan` (
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bbl(kg)` double NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl_timbang` date NOT NULL,
  `hasil_penimbangan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE `data_anak` (
  `NIK` int(11) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `RT/RW` char(10) NOT NULL,
  `pos` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_bidan`
--

CREATE TABLE `data_bidan` (
  `NIP` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `No_telp` varchar(16) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu`
--

CREATE TABLE `data_ibu` (
  `NIK` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `RT/RW` char(50) NOT NULL,
  `no.telp` varchar(16) NOT NULL,
  `pos` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_ibuhamil`
--

CREATE TABLE `data_ibuhamil` (
  `NIK` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `RT/RW` char(50) NOT NULL,
  `tgl_kelahiran` date NOT NULL,
  `pos` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_ibumelahirkan`
--

CREATE TABLE `data_ibumelahirkan` (
  `NIK` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_meninggalbayi` date NOT NULL,
  `tgl_meninggalibu` date NOT NULL,
  `keterangan` text NOT NULL,
  `pos` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_imunisasi`
--

CREATE TABLE `data_imunisasi` (
  `imunisasi_0-12bulan` date NOT NULL,
  `imunisasi_13-36bulan` date NOT NULL,
  `imunisasi_37-60bulan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_kader`
--

CREATE TABLE `data_kader` (
  `id kader` int(11) NOT NULL,
  `nama_kader` varchar(100) NOT NULL,
  `jabatan` text NOT NULL,
  `no.telp` varchar(16) NOT NULL,
  `bertugas_dipos` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_penimbangan`
--

CREATE TABLE `data_penimbangan` (
  `bayi_0-12bulan` varchar(20) NOT NULL,
  `bayi_13-36bulan` varchar(20) NOT NULL,
  `bayi_37-60bulan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_posposyandu`
--

CREATE TABLE `data_posposyandu` (
  `kode_pos` int(11) NOT NULL,
  `nama_posyandu` varchar(100) NOT NULL,
  `RT/RW` char(10) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_vaksin`
--

CREATE TABLE `data_vaksin` (
  `kode` int(11) NOT NULL,
  `nama_vaksin` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi_0-12bulan`
--

CREATE TABLE `imunisasi_0-12bulan` (
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `imunisasi_diberikan` varchar(20) NOT NULL,
  `pelayan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi_13-36bulan`
--

CREATE TABLE `imunisasi_13-36bulan` (
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_Ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `imunisasi_diberikan` varchar(20) NOT NULL,
  `pelayan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi_37-60bulan`
--

CREATE TABLE `imunisasi_37-60bulan` (
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `imunisasi_diberikan` varchar(100) NOT NULL,
  `pelayan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_bidan`
--
ALTER TABLE `data_bidan`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_ibuhamil`
--
ALTER TABLE `data_ibuhamil`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_ibumelahirkan`
--
ALTER TABLE `data_ibumelahirkan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_kader`
--
ALTER TABLE `data_kader`
  ADD PRIMARY KEY (`id kader`);

--
-- Indexes for table `data_penimbangan`
--
ALTER TABLE `data_penimbangan`
  ADD UNIQUE KEY `bayi_0-12bulan` (`bayi_0-12bulan`,`bayi_13-36bulan`,`bayi_37-60bulan`);

--
-- Indexes for table `data_posposyandu`
--
ALTER TABLE `data_posposyandu`
  ADD PRIMARY KEY (`kode_pos`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anak`
--
ALTER TABLE `data_anak`
  MODIFY `NIK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_bidan`
--
ALTER TABLE `data_bidan`
  MODIFY `NIP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `NIK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_ibuhamil`
--
ALTER TABLE `data_ibuhamil`
  MODIFY `NIK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_ibumelahirkan`
--
ALTER TABLE `data_ibumelahirkan`
  MODIFY `NIK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kader`
--
ALTER TABLE `data_kader`
  MODIFY `id kader` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_posposyandu`
--
ALTER TABLE `data_posposyandu`
  MODIFY `kode_pos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
