/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.21-MariaDB : Database - lapor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lapor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lapor`;

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL AUTO_INCREMENT,
  `no_KTP` bigint(16) NOT NULL,
  `topik` text NOT NULL,
  `laporan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `laporan` */

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `kode_pembayaran` int(11) NOT NULL,
  `no_KTP` bigint(16) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `total_biaya` int(100) NOT NULL,
  PRIMARY KEY (`kode_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `no_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `topik_pengumuman` text NOT NULL,
  `deskripsi_pengumuman` text NOT NULL,
  PRIMARY KEY (`no_pengumuman`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pengumuman` */

/*Table structure for table `rumah` */

DROP TABLE IF EXISTS `rumah`;

CREATE TABLE `rumah` (
  `id_rumah` int(11) NOT NULL AUTO_INCREMENT,
  `no_KTP` bigint(16) NOT NULL,
  `nomor_rumah` int(10) NOT NULL,
  `jumlah_penghuni` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rumah`),
  UNIQUE KEY `nomor_rumah` (`nomor_rumah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rumah` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `no_KTP` bigint(16) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `otoritas` int(11) NOT NULL DEFAULT '4',
  `foto_profil` varchar(100) NOT NULL,
  `nomor_rumah` int(11) NOT NULL,
  PRIMARY KEY (`no_KTP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`no_KTP`,`username`,`nama`,`password`,`otoritas`,`foto_profil`,`nomor_rumah`) values (1234567890123456,'neni','NANIII !!!!!','',4,'',5),(1771061007980001,'ilhamk','Ilham Kurniawan','b749aeda54a5ad4aac8e5340da5600c6',1,'',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
