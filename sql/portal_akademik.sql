# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2021-01-04 10:51:04
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (2,'smp','smp');

#
# Structure for table "kelas"
#

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(255) DEFAULT NULL,
  `ta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES (1,'VII A','2020/2021');

#
# Structure for table "kkm"
#

CREATE TABLE `kkm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matpel` varchar(255) DEFAULT NULL,
  `kkm` varchar(255) DEFAULT NULL,
  `nilai_1` varchar(255) DEFAULT NULL,
  `hasil_1` varchar(255) DEFAULT NULL,
  `nilai_2` varchar(255) DEFAULT NULL,
  `hasil_2` varchar(255) DEFAULT NULL,
  `nilai_3` varchar(255) DEFAULT NULL,
  `hasil_3` varchar(255) DEFAULT NULL,
  `nilai_4` varchar(255) DEFAULT NULL,
  `hasil_4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "kkm"
#

INSERT INTO `kkm` VALUES (1,'bhsviia2020','79','100','A','70','B','60','C','50','D'),(2,'mtkviia2020','79','100','A','70','B','60','C','50','D');

#
# Structure for table "matpel"
#

CREATE TABLE `matpel` (
  `kode` varchar(32) NOT NULL,
  `matpel` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "matpel"
#

INSERT INTO `matpel` VALUES ('bhsviia2020','Bahasa indonesia','VII A'),('mtkviia2020','Matematika','VII A');

#
# Structure for table "menu"
#

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "menu"
#

INSERT INTO `menu` VALUES (1,'Raport'),(2,'Data Siswa');

#
# Structure for table "nilai"
#

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `kode_matpel` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `nilai_p` varchar(255) DEFAULT NULL,
  `nilai_k` varchar(255) DEFAULT NULL,
  `nilai_s` varchar(255) DEFAULT NULL,
  `nilai_mid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "nilai"
#

INSERT INTO `nilai` VALUES (1,'100','mtkviia2020','GASAL','89','76',NULL,NULL),(2,'100','bhsviia2020','GASAL','94','55',NULL,NULL);

#
# Structure for table "predikat"
#

CREATE TABLE `predikat` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_1` varchar(255) DEFAULT NULL,
  `predikat_1` varchar(255) DEFAULT NULL,
  `nilai_2` varchar(255) DEFAULT NULL,
  `predikat_2` varchar(255) DEFAULT NULL,
  `nilai_3` varchar(255) DEFAULT NULL,
  `predikat_3` varchar(255) DEFAULT NULL,
  `nilai_4` varchar(255) DEFAULT NULL,
  `predikat_4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "predikat"
#

INSERT INTO `predikat` VALUES (1,'A','sangat baik dsb','B','baik dsb','C','cukup dsb','D','kurang dsb');

#
# Structure for table "semester"
#

CREATE TABLE `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "semester"
#

INSERT INTO `semester` VALUES (1,'Semester Gasal'),(2,'Semester Genap'),(3,'MID GASAL'),(4,'MID GENAP');

#
# Structure for table "sikap"
#

CREATE TABLE `sikap` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_1` varchar(255) DEFAULT NULL,
  `predikat_1` varchar(255) DEFAULT NULL,
  `nilai_2` varchar(255) DEFAULT NULL,
  `predikat_2` varchar(255) DEFAULT NULL,
  `nilai_3` varchar(255) DEFAULT NULL,
  `predikat_3` varchar(255) DEFAULT NULL,
  `nilai_4` varchar(255) DEFAULT NULL,
  `predikat_4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "sikap"
#


#
# Structure for table "siswa"
#

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(11) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=551 DEFAULT CHARSET=utf8mb4;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (548,'100','2006-11-29','testing','000000');

#
# Structure for table "siswa_kelas"
#

CREATE TABLE `siswa_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "siswa_kelas"
#


#
# Structure for table "sub_menu"
#

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(255) DEFAULT NULL,
  `sub_menu` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "sub_menu"
#

INSERT INTO `sub_menu` VALUES (1,'1','Semua Jenis','fas fa-fw fa fa-folder',NULL),(2,'2','List Siswa ','fas fa-fw fa fa-address-card ','siswa'),(3,'1','Raport Mid Ganjil','fas fa-fw fa-folder','raport_mid1'),(4,'1','Raport Semester 1','fas fa-fw fa-folder','raport_s1'),(5,'1','Raport Mid Genap','fas fa-fw fa-folder ','raport_mid2'),(6,'1','Raport Semester 2','fas fa-fw fa-folder','raport_s2');
