/*
SQLyog Professional v12.09 (64 bit)
MySQL - 10.1.9-MariaDB : Database - pam_v1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pam_v1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pam_v1`;

/*Table structure for table `checker` */

DROP TABLE IF EXISTS `checker`;

CREATE TABLE `checker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_cek` date NOT NULL,
  `no_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `zona` varchar(25) NOT NULL,
  `tarif` int(11) NOT NULL,
  `pakai_meter` int(11) NOT NULL,
  `catat_meter` int(11) NOT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `checker` */

insert  into `checker`(`id`,`tgl_cek`,`no_pelanggan`,`nama`,`zona`,`tarif`,`pakai_meter`,`catat_meter`,`user_create`,`create_date`,`user_update`,`update_date`) values (2,'2020-01-11',29877367,'Wulan Maria Ulfah ST','Z1',50000,30,90,NULL,NULL,'dani hamdani','2020-02-07'),(3,'2020-01-18',29877367,'Wulan Maria Ulfah ST','Z1',50000,30,50,NULL,NULL,NULL,NULL),(4,'2020-01-02',8631255,'tukang aambekan','Z2',6000,10,12,NULL,NULL,NULL,NULL),(5,'2020-01-15',8631255,'tukang aambekan','Z2',6000,10,50,NULL,NULL,NULL,NULL),(6,'2020-01-01',912763271,'tukang sewot','Z3',6000,45,10,NULL,NULL,NULL,NULL),(7,'2020-01-16',912763271,'tukang sewot','Z3',6000,45,20,NULL,NULL,NULL,NULL),(8,'2020-01-25',29877367,'Wulan Maria Ulfah ST','Z1',50000,30,10,NULL,NULL,NULL,NULL),(9,'2020-02-07',29877367,'Wulan Maria Ulfah ST','Z1',50000,30,12,NULL,NULL,NULL,NULL),(10,'2020-02-08',9277812,'Dudi Hidayat','Z3',7500,120,80,'dani hamdani','2020-02-07',NULL,NULL),(11,'2020-02-29',9277812,'Dudi Hidayat','Z3',7500,40,12,'dani hamdani','2020-02-16',NULL,NULL),(12,'2020-02-20',8631255,'tukang aambekan','Z2',6000,10,2,'dani hamdani','2020-02-16',NULL,NULL);

/*Table structure for table `gambar` */

DROP TABLE IF EXISTS `gambar`;

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `gambar` */

insert  into `gambar`(`id`,`deskripsi`,`nama_file`,`ukuran_file`,`tipe_file`) values (1,'aaa','3x4.jpg',299.69,'image/jpeg'),(2,'a','4x6.jpg',461,'image/jpeg');

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`id_level`,`nama_level`) values (1,'admin'),(2,'checker'),(3,'owner'),(4,'pelanggan');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` int(11) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kontrak` varchar(10) NOT NULL,
  `status_pegawai` varchar(30) NOT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id`,`no_ktp`,`no_telp`,`nama_pegawai`,`jk`,`tgl_lahir`,`alamat`,`email`,`tgl_masuk`,`kontrak`,`status_pegawai`,`user_create`,`create_date`,`user_update`,`update_date`) values (1,2147483647,'04930543745','dudu','laki-laki','2020-02-07','jalan jalan wae','wulammariaulfah@gmail.com','2020-02-08','8','Kontrak','dani hamdani','2020-02-07','dani hamdani','2020-02-07');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `telp_rumah` varchar(13) DEFAULT NULL,
  `zona` varchar(25) NOT NULL,
  `tarif` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pakai_meter` int(11) NOT NULL,
  `tgl_reg` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `biaya_instalasi` int(11) DEFAULT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `user_create` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `user_update` varchar(50) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id`,`no_pelanggan`,`nama`,`alamat`,`email`,`tgl_lahir`,`jk`,`no_ktp`,`no_telp`,`telp_rumah`,`zona`,`tarif`,`kategori`,`pakai_meter`,`tgl_reg`,`status`,`biaya_instalasi`,`nama_pegawai`,`user_create`,`create_date`,`user_update`,`update_date`) values (1,29877367,'Wulan Maria Ulfah ST','Ds.Sukawening','wulammariaulfah@gmail.com','1994-09-13','perempuan',2147483647,'0182762183','12923849','Z1',200000,'golongan c',30,'2020-01-17','Aktif',0,'','','0000-00-00','','0000-00-00'),(2,912763271,'tukang sewot','dimana we','','1993-01-12','-',2147483647,'088713561236','','Z3',15000,'',45,'0000-00-00','',0,'','','0000-00-00','','0000-00-00'),(3,8631255,'tukang aambekan','Ds.Sukawening','','2000-01-10','perempuan',2147483647,'0182762183','','Z2',50000,'',10,'0000-00-00','',0,'','','0000-00-00','','0000-00-00'),(4,9277812,'Dudi Hidayat','jalan jalan wae','dudi@gmail.com','1992-01-12','laki-laki',2147483647,'04930543745','120392101238','Z3',20000,'golongan c',120,'2020-01-24','Aktif',0,'','','0000-00-00','dani hamdani','2020-01-25'),(5,290392190,'heru','jalan jalan','danihmaiad','1990-01-24','laki-laki',2147483647,'12312312','123123','Z3',20000,'golongan c',120,'2020-01-24','Aktif',0,'','dani hamdani','2020-01-25','','0000-00-00'),(6,92301008,'dodo','jatiluhur','hahahahah@gmail','2020-02-07','perempuan',2147483647,'1231231','778688','Z1',4500,'golongan b',120,'2020-02-08','Aktif',90000,'dudu','dani hamdani','2020-02-07','dani hamdani','2020-02-07'),(7,90213,'ujian','jhadjh','dani@g','2020-02-21','laki-laki',12312321,'6564643','23123213','Z5',2000,'golongan a',120,'2020-02-07','Aktif',60000,'dudu','dani hamdani','2020-02-07','','0000-00-00'),(8,322233,'dani','jatinangor','dani@gmail.com','0000-00-00','laki-laki',2147483647,'1243342','231312321','Z1',5000,'gol2',45,'0000-00-00','aktif',50000,'wulan','','0000-00-00','','0000-00-00');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `no_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `catat_meter` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `biaya_admin` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`id`,`no_transaksi`,`tgl_bayar`,`no_pelanggan`,`nama`,`zona`,`kategori`,`tarif`,`catat_meter`,`total_bayar`,`biaya_admin`,`denda`,`grand_total`,`user_create`,`create_date`,`user_update`,`update_date`) values (1,1212,'2020-02-22',8631255,'tukang aambekan','Z2','',50000,2,100000,9000,900,109900,NULL,NULL,'dani hamdani','2020-02-21'),(2,9090,'2020-02-23',8631255,'tukang aambekan','Z2','',50000,2,100000,5000,9000,114000,NULL,NULL,NULL,NULL),(3,909011,'2020-02-29',8631255,'tukang aambekan','Z2','',6000,2,12000,5000,900,17900,NULL,NULL,NULL,NULL);

/*Table structure for table `penanganan` */

DROP TABLE IF EXISTS `penanganan`;

CREATE TABLE `penanganan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_penanganan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no_pengaduan` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `bukti_foto` char(100) NOT NULL,
  `biaya_perbaikan` int(11) NOT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `penanganan` */

insert  into `penanganan`(`id`,`no_penanganan`,`tgl`,`no_pengaduan`,`nama_pegawai`,`bukti_foto`,`biaya_perbaikan`,`user_create`,`create_date`,`user_update`,`update_date`) values (1,777,'2020-03-26',3331,'dudu','',60000,'dani hamdani','2020-03-25','dani hamdani','2020-03-25');

/*Table structure for table `pengaduan` */

DROP TABLE IF EXISTS `pengaduan`;

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pengaduan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no_pelanggan` int(11) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `pengaduan` */

insert  into `pengaduan`(`id`,`no_pengaduan`,`tgl`,`no_pelanggan`,`keluhan`,`foto`,`user_create`,`create_date`,`user_update`,`update_date`) values (9,11,'0000-00-00',290392190,'jarang jalan','',NULL,NULL,NULL,NULL),(10,44,'0000-00-00',9277812,'jarang jalan','',NULL,NULL,NULL,NULL),(11,3331,'0000-00-00',0,'q','default.jpg','dani hamdani','2020-03-09',NULL,NULL),(12,11,'0000-00-00',290392190,'jarang jalan','default.jpg','dani hamdani','2020-03-09',NULL,NULL);

/*Table structure for table `tbl_galeri` */

DROP TABLE IF EXISTS `tbl_galeri`;

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_galeri` */

insert  into `tbl_galeri`(`id`,`judul`,`gambar`) values (1,'Gambar 1','5ef3427928f34c7bf2517b75670fa2ce.jpg'),(2,'Steve Jobs','9ca6c75707e602f24c484171d8a2662d.jpg'),(3,'Image 2','0599345835f97ff80d914b50bc5b74cf.png'),(4,'aaa','489583f0d3497f534fda61bd2213af5d.jpg');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `username` varchar(100) NOT NULL,
  `photo` char(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `id_level` int(20) NOT NULL,
  `user_create` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `user_update` varchar(50) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama_user`,`id_level`,`user_create`,`create_date`,`user_update`,`update_date`) values (1,'dani','dani','dani hamdani',1,'','0000-00-00','','0000-00-00'),(7,'wulan','eulan','wulan maria ulfah',3,'','0000-00-00','','0000-00-00'),(8,'ouu','dani','juara',4,'','0000-00-00','dani hamdani','2020-01-24'),(9,'gila','dani','juara',2,'dani hamdani','2020-01-24','dani hamdani','2020-01-25'),(10,'Wulantok','wulan','Wulantok',1,'dani hamdani','2020-02-21','','0000-00-00');

/*Table structure for table `zona` */

DROP TABLE IF EXISTS `zona`;

CREATE TABLE `zona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(25) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `user_create` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `user_update` varchar(50) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `zona` */

insert  into `zona`(`id`,`zona`,`wilayah`,`kategori`,`tarif`,`user_create`,`create_date`,`user_update`,`update_date`) values (1,'Z1','Jatinangor2','golongan b',4500,'','0000-00-00','','0000-00-00'),(2,'Z2','cileunyi','golongan b',50000,'','0000-00-00','','0000-00-00'),(4,'Z3','Jatinangor','golongan b',20000,'','0000-00-00','dani hamdani','2020-02-07'),(5,'Z4','Jatir','golongan a',2000,'','0000-00-00','dani hamdani','2020-01-25'),(7,'Z5','Cipacing','golongan a',2000,'dani hamdani','2020-02-07','','0000-00-00'),(8,'A1','Bandung 1','Juara 1',5000,'','0000-00-00','','0000-00-00'),(9,'A2','Bandung 2','Juara 2',6000,'','0000-00-00','','0000-00-00'),(10,'A3','Bandung 3','Juara 3',7000,'','0000-00-00','','0000-00-00'),(11,'A4','Bandung 4','Juara 4',8000,'','0000-00-00','','0000-00-00'),(12,'B1','Jakarta 1','Juara 1',5000,'','0000-00-00','','0000-00-00'),(13,'B2','Jakarta 2','Juara 2',6000,'','0000-00-00','','0000-00-00'),(14,'B3','Jakarta 3','Juara 3',7000,'','0000-00-00','','0000-00-00'),(15,'B4','Jakarta 4','Juara 4',8000,'','0000-00-00','','0000-00-00');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

/*!50001 DROP VIEW IF EXISTS `login` */;
/*!50001 DROP TABLE IF EXISTS `login` */;

/*!50001 CREATE TABLE  `login`(
 `id_user` int(11) ,
 `username` varchar(10) ,
 `password` varchar(20) ,
 `nama_user` varchar(20) ,
 `user_create` varchar(50) ,
 `create_date` date ,
 `user_update` varchar(50) ,
 `update_date` date ,
 `id_level` int(11) ,
 `nama_level` varchar(20) 
)*/;

/*Table structure for table `total_catat` */

DROP TABLE IF EXISTS `total_catat`;

/*!50001 DROP VIEW IF EXISTS `total_catat` */;
/*!50001 DROP TABLE IF EXISTS `total_catat` */;

/*!50001 CREATE TABLE  `total_catat`(
 `no_pelanggan` int(11) ,
 `nama` varchar(50) ,
 `zona` varchar(25) ,
 `tarif` int(11) ,
 `catat_meter` decimal(32,0) 
)*/;

/*View structure for view login */

/*!50001 DROP TABLE IF EXISTS `login` */;
/*!50001 DROP VIEW IF EXISTS `login` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login` AS select `user`.`id_user` AS `id_user`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`nama_user` AS `nama_user`,`user`.`user_create` AS `user_create`,`user`.`create_date` AS `create_date`,`user`.`user_update` AS `user_update`,`user`.`update_date` AS `update_date`,`level`.`id_level` AS `id_level`,`level`.`nama_level` AS `nama_level` from (`user` left join `level` on((`user`.`id_level` = `level`.`id_level`))) */;

/*View structure for view total_catat */

/*!50001 DROP TABLE IF EXISTS `total_catat` */;
/*!50001 DROP VIEW IF EXISTS `total_catat` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_catat` AS (select `pelanggan`.`no_pelanggan` AS `no_pelanggan`,`pelanggan`.`nama` AS `nama`,`checker`.`zona` AS `zona`,`checker`.`tarif` AS `tarif`,sum(`checker`.`catat_meter`) AS `catat_meter` from (`pelanggan` left join `checker` on((`pelanggan`.`no_pelanggan` = `checker`.`no_pelanggan`))) where ((`checker`.`tgl_cek` >= 'checker.tgl_cek') and (`checker`.`tgl_cek` <= 'checker.tgl_cek')) group by `pelanggan`.`no_pelanggan`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
