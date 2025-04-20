# Host: localhost  (Version 5.5.5-10.4.32-MariaDB)
# Date: 2024-11-05 04:23:03
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "siswa"
#

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `nis` double NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (1001,'Nugroho','L','11 TJKT 1'),(1002,'Budi','L','11 TJKT 1'),(1003,'Caca','P','11 TJKT 2'),(1004,'Dika','L','11 TJKT 2'),(1005,'Edo','L','11 TJKT 3');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` double NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin',123),(2,'user1',123),(3,'user2',123);
