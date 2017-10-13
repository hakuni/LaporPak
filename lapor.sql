-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 05:34 PM
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
  `tanggal` timestamp NULL DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `no_KTP`, `topik`, `laporan`, `tanggal`, `foto`, `status`) VALUES
(2, 1771061007980001, 'Jalan Rusak!!', 'Jalan rusak di depan kosan saya', '2017-12-12 17:00:00', 'l-file_1513149537.jpg', 0),
(3, 1771061007980001, 'hahah', 'hahahah', '2017-12-12 17:00:00', 'l-file_1513170775.jpg', 0);

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
  `no_KTP` bigint(16) NOT NULL,
  `nomor_rumah` int(10) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `no_KTP`, `nomor_rumah`, `alamat`) VALUES
(1, 1111111111111111, 1, 'gang masjid'),
(2, 1010101010101010, 2, 'Badoneng');

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
  `foto_profil` varchar(100) DEFAULT 'default.jpg',
  `nomor_rumah` int(11) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `jenis_k` char(1) DEFAULT NULL,
  `create_when` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no_KTP`, `username`, `nama`, `password`, `otoritas`, `foto_profil`, `nomor_rumah`, `agama`, `telepon`, `jenis_k`, `create_when`) VALUES
(1000000000000000, 'kkkk', 'kkkk', 'fa7f08233358e9b466effa1328168527', 4, 'default.jpg', 1, NULL, NULL, 'L', '2017-11-13'),
(1010100101011010, 'oyon', 'suryono', '836c6d8e155de751a497359d07af41d8', 4, 'default.jpg', 1, NULL, NULL, 'L', '2017-12-13'),
(1010101010101010, 'krn02', 'kurniawan', '3ff2ffef91f9a9d09c5a8fb35f782a68', 3, 'f-file_1513101923.jpg', 2, 'Islam', '081377792468', 'L', '2017-12-13'),
(1029183821731231, 'abab', 'ababa', '585adf88cdd3693831b0748f409ce846', 4, 'default.jpg', 1, NULL, NULL, 'P', '2017-11-13'),
(1111111111111111, 'jonggi', 'jonggi abialdo', '96c69cc69291497f6b075b5f9df8d6f3', 3, 'f-file_1513102013.png', 1, 'Islam', '081377792444', 'L', '2017-12-13'),
(1122211121212121, 'aaaaa', 'aaa', '594f803b380a41396ed63dca39503542', 4, 'default.jpg', 1, NULL, NULL, 'P', '2017-11-13'),
(1233321231231232, 'yudha', 'Yudha P', '2b9633304de305ed5c03fe19b7a06afe', 4, 'default.jpg', 1, NULL, NULL, 'L', '2017-10-13'),
(1234567890123456, 'neni', 'Neni', '7a57a80314a2af4e4fc836700d291429', 2, 'default.jpg', NULL, NULL, NULL, 'P', '2017-12-13'),
(1771061007980001, 'ilhamk', 'Ilham Kurniawan', 'b749aeda54a5ad4aac8e5340da5600c6', 1, 'f-file_1513162694.jpg', NULL, 'Islam', '1234567890', 'L', '2017-12-13');

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
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `no_pengumuman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
