/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - db_nilai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_nilai` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_nilai`;

/*Table structure for table `tbl_nilai` */

DROP TABLE IF EXISTS `tbl_nilai`;

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_x` double NOT NULL,
  `nilai_y` double NOT NULL,
  `nilai_z` double NOT NULL,
  `nilai_w` double NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_nilai` */

insert  into `tbl_nilai`(`id_nilai`,`nilai_x`,`nilai_y`,`nilai_z`,`nilai_w`) values 
(1,11,11,11,11),
(2,11,11,11,11),
(3,11,11,11,11),
(4,5,13,14,7);

/*Table structure for table `tbl_peserta` */

DROP TABLE IF EXISTS `tbl_peserta`;

CREATE TABLE `tbl_peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nama_peserta` varchar(255) NOT NULL,
  `email_peserta` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_peserta` */

insert  into `tbl_peserta`(`id_peserta`,`nama_peserta`,`email_peserta`,`nilai`) values 
(1,'Dhimas Yudhatama 123','user@gmail.com',3),
(2,'Jaya','jaya@gmail.com',4);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
