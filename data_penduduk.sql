-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2025 at 06:37 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int NOT NULL,
  `id_kk` int NOT NULL,
  `id_pend` int NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `id_kk`, `id_pend`, `hubungan`) VALUES
(15, 6, 19, 'Kepala Keluarga'),
(16, 7, 22, 'Istri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datang`
--

CREATE TABLE `tb_datang` (
  `id_datang` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_datang` varchar(20) NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `tgl_datang` date NOT NULL,
  `pelapor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datang`
--

INSERT INTO `tb_datang` (`id_datang`, `nik`, `nama_datang`, `jekel`, `tgl_datang`, `pelapor`) VALUES
(5, '998877', 'Supardi', 'LK', '2025-01-16', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `kepala`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`) VALUES
(6, '102038292321', 'Nugroho', 'Jomokerto', '01', '0', 'Ambadesa', 'Cilacap', 'Jawa Tengah'),
(7, '356163565', 'Restu', 'Jomokerto', '002', '004', 'Ambadesa', 'Cilacap', 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahir`
--

CREATE TABLE `tb_lahir` (
  `id_lahir` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `id_kk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lahir`
--

INSERT INTO `tb_lahir` (`id_lahir`, `nama`, `tgl_lh`, `jekel`, `id_kk`) VALUES
(3, 'Restu', '2021-05-14', 'LK', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mendu`
--

CREATE TABLE `tb_mendu` (
  `id_mendu` int NOT NULL,
  `id_pdd` int NOT NULL,
  `tgl_mendu` date NOT NULL,
  `sebab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdd`
--

CREATE TABLE `tb_pdd` (
  `id_pend` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lh` varchar(15) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `desa` varchar(15) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdd`
--

INSERT INTO `tb_pdd` (`id_pend`, `nik`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `kawin`, `pekerjaan`, `status`) VALUES
(19, '12345', 'Abi', 'Cilacap', '2005-05-15', 'LK', 'Jomokerto', '9', '9', 'Islam', 'Belum', 'Fullstack Engineering', 'Ada'),
(22, '98765', 'Siti', 'Cilacap', '1996-01-01', 'PR', 'Jomokerto', '9', '9', 'Islam', 'Sudah', 'Barista', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Kaur Pemerintah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Josindo Radit', 'admin', 'admin', 'Administrator'),
(3, 'Abi Maulana', 'admin2', 'admin2', 'Kaur Pemerintah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pindah`
--

CREATE TABLE `tb_pindah` (
  `id_pindah` int NOT NULL,
  `id_pdd` int NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pend`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD PRIMARY KEY (`id_datang`),
  ADD KEY `pelapor` (`pelapor`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD PRIMARY KEY (`id_lahir`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD PRIMARY KEY (`id_mendu`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indexes for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_datang`
--
ALTER TABLE `tb_datang`
  MODIFY `id_datang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  MODIFY `id_lahir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  MODIFY `id_mendu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  MODIFY `id_pend` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  MODIFY `id_pindah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_pend`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD CONSTRAINT `tb_datang_ibfk_1` FOREIGN KEY (`pelapor`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD CONSTRAINT `tb_lahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD CONSTRAINT `tb_mendu_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD CONSTRAINT `tb_pindah_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
