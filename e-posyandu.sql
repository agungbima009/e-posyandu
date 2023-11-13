-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2023 at 02:00 PM
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
-- Database: `e-posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `nama`, `foto`) VALUES
('admin@gmail.com', 'admin', 'galuh', '65522b24df4b0.jpg'),
('aizat@gmail.com', 'aiz1234', 'Aizatganteng', NULL),
('hgdhjsf', 'hfbjas', 'galuh', NULL),
('hgsahjg', 'gashjd', 'hagdj', NULL),
('xet@gmail.com', 'hhhh', 'zeetlas', NULL),
('zeettlaass@gmail.com', '123', 'aiz', '655228da88218.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE `data_anak` (
  `NIK` char(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `BBL` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_ibu` char(16) NOT NULL,
  `kd_pos` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_anak`
--

INSERT INTO `data_anak` (`NIK`, `nama_anak`, `tgl_lahir`, `tempat_lahir`, `usia`, `jenis_kelamin`, `BBL`, `id_ibu`, `kd_pos`) VALUES
('0987656789', 'hgj', '2023-08-01', 'jemberk', '3 bln', 'Laki-laki', '9k', '87437', 'kd0004'),
('1234565', 'bayi1', '2023-11-10', 'jember', '0 bln', 'Laki-laki', '2,5kg', '745172451872458', 'kd0002'),
('1234567890', 'galuh', '2023-10-05', 'jember', '1 bln', 'Perempuan', '9kg', '123456789123456', 'kd0001'),
('123456789123456', 'nanang', '2023-07-05', 'jember', '1 bln', 'Laki-laki', '10kg', '123456789123456', 'kd0001'),
('123456789123478', 'gtyuio', '2021-11-04', 'jember', '1 bln', 'Perempuan', '10kg', '532749873252', 'kd0005'),
('3224233333', '5thoke', '2018-11-09', 'jember', '5 th', 'Perempuan', '10kg', '87437', 'kd0004'),
('41217', 'aizat', '2023-01-02', 'tulungagung', '10 bln', 'Laki-laki', '100kg', '627432234', 'kd0003'),
('526536721', 'teskader', '2023-03-01', 'jember', '8 bln', 'Laki-laki', '10kg', '532749873252', 'kd0005'),
('643712561765535', 'fajar', '2023-11-07', 'jember', '1bln', 'Laki-laki', '10kg', '627432234', 'kd0003'),
('734872', 'gdfjvjda', '2022-07-05', 'jember', '1 th', 'Laki-laki', '10kg', '745172451872458', 'kd0002'),
('782743249873249', 'galuh', '2023-10-01', 'jemberk', '1 bln', 'Perempuan', '9kg', '532749873252', 'kd0005'),
('dfwe', '3thoke', '2020-11-09', 'jember', '3 th', 'Laki-laki', '10kg', 't4781240074823', 'kd0003');

-- --------------------------------------------------------

--
-- Table structure for table `data_bidan`
--

CREATE TABLE `data_bidan` (
  `NIP` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `No_telp` varchar(16) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `foto` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_bidan`
--

INSERT INTO `data_bidan` (`NIP`, `Nama`, `Alamat`, `No_telp`, `Email`, `Password`, `foto`) VALUES
('0967534554', 'gsafdg', 'dadf', '242121', 'te@gmail.com', '2134', NULL),
('12345678765432', 'eva', 'batokan,ngantru,tulungagung', '13456798765423', 'eva@gmail.com', 'eva123', '65522927de3fd.jpg'),
('2341235', 'ef', 'q', 'ew', 'ww', 'w', NULL),
('6217378632', 'anak', 'dbsvaj', '123', 'acs dbj', 'asc wer', NULL),
('625376', 'yoii', 'hjgb', '256', 'dh', 'fdg', NULL),
('64327423', 'dmsbn', 'adbfn', 'dbaf', 'afbd', 'vfdsah', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu`
--

CREATE TABLE `data_ibu` (
  `NIK` char(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `suami` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rt_rw` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_telp` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kd_pos` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_ibu`
--

INSERT INTO `data_ibu` (`NIK`, `nama_ibu`, `suami`, `rt_rw`, `no_telp`, `kd_pos`) VALUES
('123456789123456', 'ayu', 'budi', '05/04', '123456789234', 'kd0001'),
('532749873252', 'neneng', 'bdvsahbj', '03/02', '329', 'kd0005'),
('627432234', 'bcvzbcx', 'nbczvxmnb', '03/02', 'nmbdfmsa', 'kd0003'),
('745172451872458', 'marni', 'ftft', '7627864', '02/01', 'kd0002'),
('87437', 'angel', 'dbvsajb', '02/01', '289729', 'kd0004'),
('t4781240074823', 'sdab', 'dhsbgkdsa', 'abvfjh', 'wgyfgew', 'kd0003');

-- --------------------------------------------------------

--
-- Table structure for table `data_ibumelahirkan`
--

CREATE TABLE `data_ibumelahirkan` (
  `idlahir` int NOT NULL,
  `nik_ibu` char(16) NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_meninggalbayi` date DEFAULT NULL,
  `tgl_meninggalibu` date DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `kd_pos` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_ibumelahirkan`
--

INSERT INTO `data_ibumelahirkan` (`idlahir`, `nik_ibu`, `nama_bayi`, `tgl_lahir`, `tgl_meninggalbayi`, `tgl_meninggalibu`, `keterangan`, `kd_pos`) VALUES
(1, '123456789123456', 'gvghv', '2023-11-08', '2023-11-08', '2023-11-08', 'vhgv', 'kd0001'),
(3, '745172451872458', 'nanang', '2023-11-08', NULL, '2023-11-08', NULL, 'kd0002'),
(10, '627432234', 'bascbs', '2023-11-08', NULL, NULL, NULL, 'kd0003'),
(11, '532749873252', 'budiiianto', '2023-11-08', NULL, NULL, NULL, 'kd0005'),
(12, '532749873252', 'nanang', '2023-11-08', NULL, NULL, NULL, 'kd0005'),
(13, 't4781240074823', 'budiiianto', '2023-11-09', NULL, NULL, NULL, 'kd0003');

-- --------------------------------------------------------

--
-- Table structure for table `data_imunisasi`
--

CREATE TABLE `data_imunisasi` (
  `idimunisasi` int NOT NULL,
  `nik_anak` char(16) NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `imuni_dbr` varchar(50) NOT NULL,
  `plyan_dbr` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_imunisasi`
--

INSERT INTO `data_imunisasi` (`idimunisasi`, `nik_anak`, `tgl_imunisasi`, `imuni_dbr`, `plyan_dbr`) VALUES
(1, '782743249873249', '2023-11-09', 'bn', 'jgf'),
(3, '782743249873249', '2023-11-09', 'op', 'bhvhg'),
(5, '782743249873249', '2023-11-09', 'bn', 'hhhh'),
(6, '782743249873249', '2023-11-08', 'gf', 'yyyyy'),
(8, '123456789123478', '2023-11-09', 'ad', 'mbg'),
(12, '3224233333', '2023-11-07', 'm,', 'hhhh'),
(13, '123456789123456', '2023-11-09', 'op', NULL),
(14, '643712561765535', '2023-10-31', 'ad', NULL),
(15, '3224233333', '2023-11-15', 'op', 'uhuiii'),
(16, '643712561765535', '2023-11-16', 'gf', NULL),
(18, 'dfwe', '2023-11-09', 'gf', 'hhhh'),
(19, 'dfwe', '2023-11-09', 'cv', 'hhhh'),
(20, '3224233333', '2023-11-09', 'gf', 'gfhv'),
(21, 'dfwe', '2023-11-07', 'bn', NULL),
(22, '782743249873249', '2023-11-08', 'cv', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_kader`
--

CREATE TABLE `data_kader` (
  `id_kader` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_kader` varchar(100) NOT NULL,
  `jabatan` text NOT NULL,
  `no_telp` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bertugas_dipos` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_kader`
--

INSERT INTO `data_kader` (`id_kader`, `nama_kader`, `jabatan`, `no_telp`, `bertugas_dipos`, `email`, `password`, `foto`) VALUES
('kdr_0001', 'kader', 'hvjhv', 'gfhg', 'kd0003', 'kader@gmail.com', 'kader', '655228a353506.jpg'),
('kdr0002', 'jdnsjk', 'bhfjsd', '682743', 'kd0001', 'ger', 'user123', NULL),
('kdr0003', 'sa', 'fewf', 'fsa', 'kd0001', 'fsa', 'fsa', NULL),
('kdr0004', 'sad', 'asd', 'ad', 'kd0005', 'ads', 'asd', NULL),
('kdr0005', 'fsdf', 'nsdm av', 'sdv mn', 'kd0004', 'assd', 'dfasf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_penimbangan`
--

CREATE TABLE `data_penimbangan` (
  `idtimbang` int NOT NULL,
  `nik_anak` char(16) NOT NULL,
  `tgl_timbamg` date NOT NULL,
  `hasil_timbang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_penimbangan`
--

INSERT INTO `data_penimbangan` (`idtimbang`, `nik_anak`, `tgl_timbamg`, `hasil_timbang`) VALUES
(1, '782743249873249', '2023-11-08', '10kg'),
(3, 'dfwe', '2023-11-08', '12kg'),
(4, '3224233333', '2023-11-08', '135kg'),
(6, '123456789123456', '2023-11-09', '120kg'),
(18, '643712561765535', '2023-11-07', '10kg'),
(19, 'dfwe', '2023-11-07', '108kg'),
(20, '123456789123478', '2023-11-08', '10kg'),
(23, '3224233333', '2023-11-08', '15kg'),
(24, '643712561765535', '2023-11-09', '20kg'),
(25, '643712561765535', '2023-11-09', '20kg'),
(26, '3224233333', '2023-11-09', '21kg'),
(27, '0987656789', '2023-11-01', '14kg'),
(28, '782743249873249', '2023-11-09', '20kg'),
(29, '3224233333', '2023-11-10', '2,5kg'),
(30, '1234567890', '2023-11-22', '9kg'),
(31, '3224233333', '2023-11-10', '23kg'),
(32, '1234567890', '2023-11-10', '3kg'),
(33, '3224233333', '2023-11-10', '5,5kg');

-- --------------------------------------------------------

--
-- Table structure for table `data_posposyandu`
--

CREATE TABLE `data_posposyandu` (
  `kd_pos` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_posyandu` varchar(100) NOT NULL,
  `RT_RW` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lokasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_posposyandu`
--

INSERT INTO `data_posposyandu` (`kd_pos`, `nama_posyandu`, `RT_RW`, `lokasi`) VALUES
('kd0001', 'Posyandu 1', 'sdfghj', 'bapaknfj'),
('kd0002', 'Posyandu 2', 'djsnf', 'bsfadb'),
('kd0003', 'Posyandu 3', '3/5', 'rumah bapak'),
('kd0004', 'Posyandu 4', '3/5', 'rumah bapak'),
('kd0005', 'Posyandu 5', '3/5', 'rumah bapak'),
('kd0006', 'Posyandu 6', '3/5', 'rumah bapak');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`email`, `password`, `nama`, `foto`) VALUES
('jabdfk', 'badkfs ', 'nfakfba', NULL),
('jdbsk', '23442rwe', 'fbsfbhjs', NULL),
('user@gmail.com', 'user123', 'user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_vaksin`
--

CREATE TABLE `data_vaksin` (
  `kd_vaksin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_vaksin` varchar(20) NOT NULL,
  `stok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_vaksin`
--

INSERT INTO `data_vaksin` (`kd_vaksin`, `nama_vaksin`, `stok`) VALUES
('ad', 'vaksin1', 16),
('bn', 'vaksin2', 14),
('cv', 'vaksin3', 1),
('gf', 'vaksin4', 1),
('m,', 'vaksin5', 8),
('op', 'vaksin6', 1),
('p', 'vaksin7', 1),
('vb', 'vaksin8', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD KEY `id_ibu` (`id_ibu`),
  ADD KEY `kd_pos` (`kd_pos`);

--
-- Indexes for table `data_bidan`
--
ALTER TABLE `data_bidan`
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indexes for table `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD KEY `kd_pos` (`kd_pos`);

--
-- Indexes for table `data_ibumelahirkan`
--
ALTER TABLE `data_ibumelahirkan`
  ADD PRIMARY KEY (`idlahir`),
  ADD KEY `nik_ibu` (`nik_ibu`),
  ADD KEY `kd_pos` (`kd_pos`);

--
-- Indexes for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  ADD PRIMARY KEY (`idimunisasi`),
  ADD KEY `nik_anak` (`nik_anak`),
  ADD KEY `imuni_dbr` (`imuni_dbr`);

--
-- Indexes for table `data_kader`
--
ALTER TABLE `data_kader`
  ADD UNIQUE KEY `id_kader` (`id_kader`),
  ADD KEY `bertugas_dipos` (`bertugas_dipos`);

--
-- Indexes for table `data_penimbangan`
--
ALTER TABLE `data_penimbangan`
  ADD PRIMARY KEY (`idtimbang`),
  ADD KEY `nik_anak` (`nik_anak`);

--
-- Indexes for table `data_posposyandu`
--
ALTER TABLE `data_posposyandu`
  ADD UNIQUE KEY `kd_pos` (`kd_pos`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  ADD UNIQUE KEY `kd_vaksin` (`kd_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_ibumelahirkan`
--
ALTER TABLE `data_ibumelahirkan`
  MODIFY `idlahir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  MODIFY `idimunisasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `data_penimbangan`
--
ALTER TABLE `data_penimbangan`
  MODIFY `idtimbang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD CONSTRAINT `data_anak_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `data_ibu` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_anak_ibfk_2` FOREIGN KEY (`kd_pos`) REFERENCES `data_posposyandu` (`kd_pos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD CONSTRAINT `data_ibu_ibfk_1` FOREIGN KEY (`kd_pos`) REFERENCES `data_posposyandu` (`kd_pos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_ibumelahirkan`
--
ALTER TABLE `data_ibumelahirkan`
  ADD CONSTRAINT `data_ibumelahirkan_ibfk_3` FOREIGN KEY (`nik_ibu`) REFERENCES `data_ibu` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibumelahirkan_ibfk_4` FOREIGN KEY (`kd_pos`) REFERENCES `data_posposyandu` (`kd_pos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  ADD CONSTRAINT `data_imunisasi_ibfk_3` FOREIGN KEY (`imuni_dbr`) REFERENCES `data_vaksin` (`kd_vaksin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_imunisasi_ibfk_4` FOREIGN KEY (`nik_anak`) REFERENCES `data_anak` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_kader`
--
ALTER TABLE `data_kader`
  ADD CONSTRAINT `data_kader_ibfk_1` FOREIGN KEY (`bertugas_dipos`) REFERENCES `data_posposyandu` (`kd_pos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_penimbangan`
--
ALTER TABLE `data_penimbangan`
  ADD CONSTRAINT `data_penimbangan_ibfk_3` FOREIGN KEY (`nik_anak`) REFERENCES `data_anak` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
