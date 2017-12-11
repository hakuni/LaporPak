-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 03:12 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `id_laporan` int(11) NOT NULL,
  `no_KTP` bigint(16) NOT NULL,
  `topik` text NOT NULL,
  `laporan` text NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `no_KTP`, `topik`, `laporan`, `tanggal`, `foto`, `status`) VALUES
(20, 1771061007980001, 'Jalan Rusak!!', 'Jalan rusak di depan kosan saya jancuk!', '2017-12-10 10:45:34', 'file_1512902734.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `kode_pembayaran` int(11) NOT NULL,
  `no_KTP` bigint(16) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `total_biaya` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `no_pengumuman` int(11) NOT NULL,
  `topik_pengumuman` text NOT NULL,
  `deskripsi_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE IF NOT EXISTS `rumah` (
  `id_rumah` int(11) NOT NULL,
  `pemilik` bigint(16) NOT NULL,
  `nomor_rumah` int(10) NOT NULL,
  `jumlah_penghuni` int(10) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no_KTP` bigint(16) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `otoritas` int(11) DEFAULT '4',
  `foto_profil` varchar(100) DEFAULT NULL,
  `nomor_rumah` int(11) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `telepon` int(12) DEFAULT NULL,
  `jenis_k` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no_KTP`, `username`, `nama`, `password`, `otoritas`, `foto_profil`, `nomor_rumah`, `agama`, `telepon`, `jenis_k`) VALUES
(1234567890123456, 'neni', 'Neni', '7a57a80314a2af4e4fc836700d291429', 2, '', NULL, NULL, NULL, NULL),
(1771061007980001, 'ilhamk', 'Ilham Kurniawan', 'b749aeda54a5ad4aac8e5340da5600c6', 1, '', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`no_pengumuman`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id_rumah`),
  ADD UNIQUE KEY `nomor_rumah` (`nomor_rumah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no_KTP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `no_pengumuman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
