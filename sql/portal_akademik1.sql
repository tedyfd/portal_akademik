# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2021-02-21 11:09:17
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
# Structure for table "conf_kelas_th"
#

CREATE TABLE `conf_kelas_th` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL DEFAULT '',
  `kelas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "conf_kelas_th"
#

INSERT INTO `conf_kelas_th` VALUES (1,'Kelas 7','2,3,4,5,6,7');

#
# Structure for table "conf_matpel_th"
#

CREATE TABLE `conf_matpel_th` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `matpel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "conf_matpel_th"
#

INSERT INTO `conf_matpel_th` VALUES (1,'Matpel VII','1,2,3,4,5,6,7,8,9');

#
# Structure for table "hari"
#

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_hari`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "hari"
#

INSERT INTO `hari` VALUES (1,'Senin'),(2,'Selasa'),(3,'Rabu'),(4,'Kamis'),(5,'Jumat');

#
# Structure for table "kelas"
#

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES (1,'VII A'),(2,'VII B'),(3,'VII C'),(4,'VII D'),(5,'VII E'),(6,'VII F'),(7,'VII G'),(8,'VII H'),(9,'VII I'),(10,'VII J'),(11,'VII K'),(12,'VII L'),(13,'VIII A'),(14,'VIII B'),(15,'VIII C'),(16,'VIII D'),(17,'VIII E'),(18,'VIII F'),(19,'VIII G'),(20,'VIII H'),(21,'VIII I'),(22,'VIII J'),(23,'VIII K'),(24,'VIII L'),(25,'IX A'),(26,'IX B'),(27,'IX C'),(28,'IX D'),(29,'IX E'),(30,'IX F'),(31,'IX G'),(32,'IX H'),(33,'IX I'),(34,'IX J'),(35,'IX K'),(36,'IX L'),(37,'IX M'),(38,NULL),(39,'tes'),(40,NULL);

#
# Structure for table "matpel"
#

CREATE TABLE `matpel` (
  `id_matpel` int(11) NOT NULL AUTO_INCREMENT,
  `matpel` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "matpel"
#

INSERT INTO `matpel` VALUES (1,'Bahasa'),(2,'Pendidikan Kewarganegaraan'),(3,'Bahasa Indonesia'),(4,'Matematika'),(5,'Ilmu Pengetahuan Alam'),(6,'Ilmu Pengetahuan Sosial'),(7,'Bahasa Inggris'),(8,'Seni Budaya'),(9,'Penjas'),(10,'Prakarya'),(11,'TIK'),(12,'pancasila'),(13,'Kewarganegaraan');

#
# Structure for table "menu"
#

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "menu"
#

INSERT INTO `menu` VALUES (1,'Raport'),(2,'Data Siswa'),(3,'Pengumuman'),(4,'Data Ajaran'),(5,'Relasi Data Ajaran');

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


#
# Structure for table "nilai_pengetahuan"
#

CREATE TABLE `nilai_pengetahuan` (
  `id_nilai_p` int(11) NOT NULL AUTO_INCREMENT,
  `id_semester` int(11) NOT NULL DEFAULT 0,
  `id_th_matpel` int(11) DEFAULT NULL,
  `nilai_p` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_p`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "nilai_pengetahuan"
#


#
# Structure for table "pengumuman"
#

CREATE TABLE `pengumuman` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `adminid` int(5) NOT NULL,
  `created` varchar(64) DEFAULT NULL,
  `modified` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pengumuman` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `shorten` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "pengumuman"
#

INSERT INTO `pengumuman` VALUES (1,0,'07-02-2021',NULL,'pengumuman 1',NULL,'tes pengumuman 1','pengumuman1',NULL);

#
# Structure for table "semester"
#

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "semester"
#

INSERT INTO `semester` VALUES (1,'Mid Gasal'),(2,'Semester Gasal'),(3,'Mid Genap'),(4,'Semester Genap');

#
# Structure for table "siswa"
#

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(11) NOT NULL DEFAULT '',
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=554 DEFAULT CHARSET=utf8mb4;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (548,'100','123','testing','000000'),(551,'123','123','budi','000'),(552,'111','123','andi','111'),(553,'4444','123','andi','444');

#
# Structure for table "siswa_menu"
#

CREATE TABLE `siswa_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "siswa_menu"
#

INSERT INTO `siswa_menu` VALUES (1,'Akademik'),(2,'Pengumuman');

#
# Structure for table "siswa_sub_menu"
#

CREATE TABLE `siswa_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(255) DEFAULT NULL,
  `sub_menu` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "siswa_sub_menu"
#

INSERT INTO `siswa_sub_menu` VALUES (8,'1','Mata Pelajaran',NULL,'matpel'),(9,'1','Hasil Penilaian',NULL,'nilai'),(10,'2','Pengumuman',NULL,'pengumuman');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "sub_menu"
#

INSERT INTO `sub_menu` VALUES (1,'1','Semua Jenis','fas fa-fw fa fa-folder',NULL),(2,'2','List Siswa ','fas fa-fw fa fa-address-card ','siswa'),(3,'1','Raport Mid Ganjil','fas fa-fw fa-folder','raport_mid1'),(4,'1','Raport Semester 1','fas fa-fw fa-folder','raport_s1'),(5,'1','Raport Mid Genap','fas fa-fw fa-folder ','raport_mid2'),(6,'1','Raport Semester 2','fas fa-fw fa-folder','raport_s2'),(7,'3','Pengumuman','fas fa-fw fa-bell','pengumuman'),(8,'4','List Kelas','fas fa-fw fa-folder','kelas'),(9,'4','List Tahun Ajaran','fas fa-fw fa-folder','ta'),(10,'4','List Mata Pelajaran','fas fa-fw fa-folder','matpel'),(11,'4','List Semester','fas fa-fw fa-folder','semester'),(12,'5','Kelas Berdasarkan Tahun Ajaran ','fas fa-fw fa-folder','kelas_ta'),(13,'5','Matpel Berdasarkan Kelas dan TA','fas fa-fw fa-folder','matpel_ta'),(14,'5','Jadwal Mata Pelajaran','fas fa-fw fa-calendar','jadwal_matpel');

#
# Structure for table "th_ajaran"
#

CREATE TABLE `th_ajaran` (
  `id_th` int(11) NOT NULL AUTO_INCREMENT,
  `th_ajaran` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_th`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "th_ajaran"
#

INSERT INTO `th_ajaran` VALUES (1,'2020/2021'),(2,'2021/2022'),(3,'2022/2023'),(4,'2023/2024'),(5,'2024/2025');

#
# Structure for table "th_kelas"
#

CREATE TABLE `th_kelas` (
  `id_th_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_th` int(11) NOT NULL DEFAULT 0,
  `id_kelas` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_th_kelas`),
  KEY `th` (`id_th`),
  KEY `kelas` (`id_kelas`),
  CONSTRAINT `kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  CONSTRAINT `th` FOREIGN KEY (`id_th`) REFERENCES `th_ajaran` (`id_th`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "th_kelas"
#

INSERT INTO `th_kelas` VALUES (2,1,1),(3,1,2),(7,1,3),(8,1,4),(9,1,5),(10,1,6),(11,1,7),(12,1,2),(13,1,3),(14,1,4),(15,1,5),(16,1,6),(17,1,7);

#
# Structure for table "th_kelas_siswa"
#

CREATE TABLE `th_kelas_siswa` (
  `id_th_kelas_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(11) NOT NULL DEFAULT '',
  `id_th_kelas` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_th_kelas_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "th_kelas_siswa"
#

INSERT INTO `th_kelas_siswa` VALUES (1,'100',2);

#
# Structure for table "th_matpel"
#

CREATE TABLE `th_matpel` (
  `Id_th_matpel` int(11) NOT NULL AUTO_INCREMENT,
  `id_th_kelas` int(11) DEFAULT NULL,
  `id_matpel` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_th_matpel`),
  KEY `th_kelas` (`id_th_kelas`),
  KEY `matpel` (`id_matpel`),
  CONSTRAINT `matpel` FOREIGN KEY (`id_matpel`) REFERENCES `matpel` (`id_matpel`),
  CONSTRAINT `th_kelas` FOREIGN KEY (`id_th_kelas`) REFERENCES `th_kelas` (`id_th_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

#
# Data for table "th_matpel"
#

INSERT INTO `th_matpel` VALUES (3,2,1),(4,2,2),(5,7,1),(6,7,2),(7,7,3),(8,7,4),(9,7,5),(10,7,6),(11,7,7),(12,7,8),(13,7,9),(14,11,1),(15,11,2),(16,11,3),(17,11,4),(18,11,5),(19,11,6),(20,11,7),(21,11,8),(22,11,9),(23,12,1),(24,12,2),(25,12,3),(26,12,4),(27,12,5),(28,12,6),(29,12,7),(30,12,8),(31,12,9);

#
# Structure for table "jadwal"
#

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_th_matpel` int(11) DEFAULT NULL,
  `id_hari` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `th_matpel` (`id_th_matpel`),
  KEY `hari` (`id_hari`),
  CONSTRAINT `hari` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`),
  CONSTRAINT `th_matpel` FOREIGN KEY (`id_th_matpel`) REFERENCES `th_matpel` (`Id_th_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "jadwal"
#

INSERT INTO `jadwal` VALUES (2,25,1),(3,25,2);
