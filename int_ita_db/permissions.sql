-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-06-12 18:18:34
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id_user` int(11) NOT NULL,
  `id_resource` int(11) NOT NULL,
  `rights` tinyint(10) NOT NULL,
  PRIMARY KEY (`id_user`,`id_resource`),
  KEY `FK_permissions_lectures` (`id_resource`),
  CONSTRAINT `FK_permissions_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='User rights for lectures: TINYINT(10) \r\n0 - read\r\n1 - edit\r\n2 - create\r\n3 - delete  ';

-- Dumping data for table int_ita_db.permissions: ~131 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id_user`, `id_resource`, `rights`) VALUES
	(1, 1, 15),
	(1, 2, 2),
	(1, 3, 7),
	(1, 5, 1),
	(1, 14, 7),
	(1, 15, 1),
	(1, 16, 1),
	(1, 17, 1),
	(1, 18, 1),
	(1, 19, 1),
	(1, 20, 1),
	(1, 21, 1),
	(1, 22, 1),
	(1, 23, 1),
	(1, 24, 1),
	(1, 26, 1),
	(1, 27, 1),
	(1, 31, 5),
	(1, 32, 1),
	(1, 33, 15),
	(11, 1, 0),
	(11, 31, 1),
	(11, 32, 1),
	(11, 33, 1),
	(38, 1, 15),
	(38, 2, 15),
	(38, 3, 15),
	(38, 5, 15),
	(38, 14, 15),
	(38, 15, 15),
	(38, 16, 15),
	(38, 17, 15),
	(38, 18, 15),
	(38, 19, 15),
	(38, 20, 15),
	(38, 21, 15),
	(38, 22, 15),
	(38, 23, 15),
	(38, 24, 15),
	(38, 26, 15),
	(38, 27, 15),
	(38, 31, 15),
	(38, 32, 15),
	(38, 33, 15),
	(38, 34, 15),
	(38, 36, 15),
	(38, 39, 15),
	(38, 43, 15),
	(38, 44, 15),
	(38, 45, 15),
	(38, 47, 15),
	(38, 48, 15),
	(38, 49, 15),
	(38, 50, 15),
	(39, 1, 15),
	(39, 2, 15),
	(39, 31, 1),
	(39, 32, 1),
	(39, 33, 1),
	(39, 51, 15),
	(40, 1, 1),
	(40, 2, 1),
	(40, 3, 1),
	(40, 5, 1),
	(40, 14, 1),
	(40, 15, 1),
	(40, 16, 1),
	(40, 17, 1),
	(40, 18, 1),
	(40, 19, 1),
	(40, 20, 1),
	(40, 21, 1),
	(40, 26, 7),
	(40, 27, 1),
	(41, 1, 15),
	(41, 2, 15),
	(42, 1, 15),
	(42, 2, 15),
	(42, 3, 1),
	(42, 5, 7),
	(42, 14, 1),
	(42, 15, 1),
	(42, 16, 1),
	(42, 17, 1),
	(42, 18, 1),
	(42, 19, 1),
	(42, 20, 1),
	(42, 21, 1),
	(42, 26, 1),
	(42, 27, 1),
	(43, 1, 15),
	(43, 2, 15),
	(45, 1, 1),
	(45, 2, 1),
	(45, 3, 1),
	(45, 5, 1),
	(45, 14, 1),
	(45, 15, 1),
	(45, 16, 1),
	(45, 19, 1),
	(45, 27, 1),
	(49, 1, 1),
	(49, 2, 1),
	(49, 3, 1),
	(49, 5, 1),
	(49, 14, 1),
	(49, 15, 1),
	(49, 16, 1),
	(49, 17, 1),
	(49, 18, 1),
	(49, 19, 1),
	(49, 20, 1),
	(49, 21, 1),
	(49, 26, 1),
	(49, 27, 1),
	(49, 31, 1),
	(49, 32, 1),
	(49, 33, 1),
	(50, 1, 15),
	(50, 2, 1),
	(50, 3, 1),
	(50, 5, 1),
	(50, 14, 1),
	(50, 15, 1),
	(50, 16, 1),
	(50, 17, 1),
	(50, 18, 1),
	(50, 19, 1),
	(50, 20, 1),
	(50, 21, 1),
	(50, 26, 1);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
