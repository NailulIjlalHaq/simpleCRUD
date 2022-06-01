/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 5.5.38-MariaDB : Database - crud
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crud`;

/*Table structure for table `data_siswa` */

DROP TABLE IF EXISTS `data_siswa`;

CREATE TABLE `data_siswa` (
  `idsiswa` int(11) NOT NULL AUTO_INCREMENT,
  `namasiswa` varchar(100) DEFAULT NULL,
  `kelassiswa` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  KEY `idsiswa` (`idsiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `data_siswa` */

insert  into `data_siswa`(`idsiswa`,`namasiswa`,`kelassiswa`,`alamat`,`telepon`) values 
(1,'Nailul','XI RPL','Suwayuwo','085748485227'),
(3,'Erlangga','XI RPL','Suwayuwo','0895367093041');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
