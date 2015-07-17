-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-07-17 18:30:19
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.phpbb_acl_roles_data
DROP TABLE IF EXISTS `phpbb_acl_roles_data`;
CREATE TABLE IF NOT EXISTS `phpbb_acl_roles_data` (
  `role_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_setting` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`,`auth_option_id`),
  KEY `ath_op_id` (`auth_option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table int_ita_db.phpbb_acl_roles_data: ~406 rows (approximately)
/*!40000 ALTER TABLE `phpbb_acl_roles_data` DISABLE KEYS */;
INSERT INTO `phpbb_acl_roles_data` (`role_id`, `auth_option_id`, `auth_setting`) VALUES
	(1, 46, 1),
	(1, 48, 1),
	(1, 49, 1),
	(1, 50, 1),
	(1, 52, 1),
	(1, 53, 1),
	(1, 54, 1),
	(1, 58, 1),
	(1, 59, 1),
	(1, 60, 1),
	(1, 61, 1),
	(1, 62, 1),
	(1, 63, 1),
	(1, 64, 1),
	(1, 65, 1),
	(1, 66, 1),
	(1, 69, 1),
	(1, 71, 1),
	(1, 73, 1),
	(1, 74, 1),
	(1, 75, 1),
	(1, 76, 1),
	(1, 82, 1),
	(1, 83, 1),
	(1, 84, 1),
	(1, 85, 1),
	(1, 86, 1),
	(1, 87, 1),
	(2, 46, 1),
	(2, 49, 1),
	(2, 50, 1),
	(2, 59, 1),
	(2, 60, 1),
	(2, 61, 1),
	(2, 62, 1),
	(2, 69, 1),
	(2, 74, 1),
	(2, 82, 1),
	(2, 85, 1),
	(2, 86, 1),
	(3, 46, 1),
	(3, 49, 1),
	(3, 50, 1),
	(3, 52, 1),
	(3, 63, 1),
	(3, 64, 1),
	(3, 65, 1),
	(3, 75, 1),
	(3, 82, 1),
	(3, 83, 1),
	(3, 85, 1),
	(3, 86, 1),
	(4, 46, 1),
	(4, 47, 1),
	(4, 48, 1),
	(4, 49, 1),
	(4, 50, 1),
	(4, 51, 1),
	(4, 52, 1),
	(4, 53, 1),
	(4, 54, 1),
	(4, 55, 1),
	(4, 56, 1),
	(4, 57, 1),
	(4, 58, 1),
	(4, 59, 1),
	(4, 60, 1),
	(4, 61, 1),
	(4, 62, 1),
	(4, 63, 1),
	(4, 64, 1),
	(4, 65, 1),
	(4, 66, 1),
	(4, 67, 1),
	(4, 68, 1),
	(4, 69, 1),
	(4, 70, 1),
	(4, 71, 1),
	(4, 72, 1),
	(4, 73, 1),
	(4, 74, 1),
	(4, 75, 1),
	(4, 76, 1),
	(4, 77, 1),
	(4, 78, 1),
	(4, 79, 1),
	(4, 80, 1),
	(4, 81, 1),
	(4, 82, 1),
	(4, 83, 1),
	(4, 84, 1),
	(4, 85, 1),
	(4, 86, 1),
	(4, 87, 1),
	(5, 88, 1),
	(5, 89, 1),
	(5, 90, 1),
	(5, 91, 1),
	(5, 92, 1),
	(5, 93, 1),
	(5, 94, 1),
	(5, 95, 1),
	(5, 96, 1),
	(5, 97, 1),
	(5, 98, 1),
	(5, 99, 1),
	(5, 100, 1),
	(5, 101, 1),
	(5, 102, 1),
	(5, 103, 1),
	(5, 104, 1),
	(5, 105, 1),
	(5, 106, 1),
	(5, 107, 1),
	(5, 108, 1),
	(5, 109, 1),
	(5, 110, 1),
	(5, 111, 1),
	(5, 112, 1),
	(5, 113, 1),
	(5, 114, 1),
	(5, 115, 1),
	(5, 116, 1),
	(5, 117, 1),
	(5, 118, 1),
	(5, 119, 1),
	(5, 120, 1),
	(5, 121, 1),
	(6, 88, 1),
	(6, 89, 1),
	(6, 90, 1),
	(6, 91, 1),
	(6, 92, 1),
	(6, 95, 1),
	(6, 96, 1),
	(6, 97, 1),
	(6, 98, 1),
	(6, 100, 1),
	(6, 101, 1),
	(6, 102, 1),
	(6, 103, 1),
	(6, 104, 1),
	(6, 105, 1),
	(6, 106, 1),
	(6, 107, 1),
	(6, 110, 1),
	(6, 111, 1),
	(6, 112, 1),
	(6, 113, 1),
	(6, 114, 1),
	(6, 115, 1),
	(6, 116, 1),
	(6, 117, 1),
	(6, 118, 1),
	(6, 119, 1),
	(6, 121, 1),
	(7, 88, 1),
	(7, 90, 1),
	(7, 91, 1),
	(7, 92, 1),
	(7, 95, 1),
	(7, 96, 1),
	(7, 97, 1),
	(7, 98, 1),
	(7, 103, 1),
	(7, 104, 1),
	(7, 105, 1),
	(7, 106, 1),
	(7, 109, 1),
	(7, 110, 1),
	(7, 111, 1),
	(7, 112, 1),
	(7, 113, 1),
	(7, 118, 1),
	(7, 119, 1),
	(7, 121, 1),
	(8, 88, 1),
	(8, 90, 1),
	(8, 91, 1),
	(8, 92, 1),
	(8, 95, 1),
	(8, 97, 1),
	(8, 98, 1),
	(8, 100, 0),
	(8, 101, 0),
	(8, 113, 0),
	(8, 118, 0),
	(8, 119, 1),
	(8, 121, 1),
	(9, 88, 1),
	(9, 90, 0),
	(9, 91, 1),
	(9, 92, 1),
	(9, 95, 1),
	(9, 96, 1),
	(9, 97, 1),
	(9, 98, 1),
	(9, 103, 1),
	(9, 104, 1),
	(9, 105, 1),
	(9, 106, 1),
	(9, 109, 1),
	(9, 110, 1),
	(9, 111, 1),
	(9, 112, 1),
	(9, 113, 1),
	(9, 118, 1),
	(9, 119, 1),
	(9, 121, 1),
	(10, 32, 1),
	(10, 33, 1),
	(10, 34, 1),
	(10, 35, 1),
	(10, 36, 1),
	(10, 37, 1),
	(10, 38, 1),
	(10, 39, 1),
	(10, 40, 1),
	(10, 41, 1),
	(10, 42, 1),
	(10, 43, 1),
	(10, 44, 1),
	(10, 45, 1),
	(11, 32, 1),
	(11, 33, 1),
	(11, 35, 1),
	(11, 36, 1),
	(11, 37, 1),
	(11, 38, 1),
	(11, 39, 1),
	(11, 40, 1),
	(11, 41, 1),
	(11, 42, 1),
	(11, 43, 1),
	(11, 45, 1),
	(12, 32, 1),
	(12, 35, 1),
	(12, 36, 1),
	(12, 37, 1),
	(12, 41, 1),
	(12, 43, 1),
	(13, 32, 1),
	(13, 33, 1),
	(13, 36, 1),
	(14, 1, 1),
	(14, 2, 1),
	(14, 3, 1),
	(14, 4, 1),
	(14, 5, 1),
	(14, 6, 1),
	(14, 7, 1),
	(14, 8, 1),
	(14, 9, 1),
	(14, 10, 1),
	(14, 11, 1),
	(14, 12, 1),
	(14, 13, 1),
	(14, 14, 1),
	(14, 15, 1),
	(14, 16, 1),
	(14, 17, 1),
	(14, 18, 1),
	(14, 19, 1),
	(14, 20, 1),
	(14, 21, 1),
	(14, 22, 1),
	(14, 23, 1),
	(14, 24, 1),
	(14, 25, 1),
	(14, 26, 1),
	(14, 27, 1),
	(14, 28, 1),
	(14, 29, 1),
	(14, 30, 1),
	(14, 31, 1),
	(15, 1, 1),
	(15, 3, 1),
	(15, 4, 1),
	(15, 5, 1),
	(15, 6, 1),
	(15, 7, 1),
	(15, 8, 1),
	(15, 9, 1),
	(15, 11, 1),
	(15, 13, 1),
	(15, 14, 1),
	(15, 15, 1),
	(15, 17, 1),
	(15, 18, 1),
	(15, 19, 1),
	(15, 20, 1),
	(15, 21, 1),
	(15, 22, 1),
	(15, 23, 1),
	(15, 24, 1),
	(15, 25, 1),
	(15, 27, 1),
	(15, 29, 1),
	(15, 30, 1),
	(15, 31, 1),
	(16, 1, 0),
	(17, 1, 1),
	(17, 7, 1),
	(17, 14, 1),
	(17, 19, 1),
	(17, 20, 1),
	(17, 23, 1),
	(17, 27, 1),
	(18, 1, 1),
	(18, 4, 1),
	(18, 7, 1),
	(18, 8, 1),
	(18, 9, 1),
	(18, 13, 1),
	(18, 14, 1),
	(18, 15, 1),
	(18, 17, 1),
	(18, 18, 1),
	(18, 19, 1),
	(18, 20, 1),
	(18, 21, 1),
	(18, 22, 1),
	(18, 23, 1),
	(18, 24, 1),
	(18, 25, 1),
	(18, 27, 1),
	(18, 29, 1),
	(18, 31, 1),
	(19, 1, 1),
	(19, 7, 1),
	(19, 14, 1),
	(19, 19, 1),
	(19, 20, 1),
	(20, 1, 1),
	(20, 3, 1),
	(20, 4, 1),
	(20, 7, 1),
	(20, 8, 1),
	(20, 9, 1),
	(20, 13, 1),
	(20, 14, 1),
	(20, 15, 0),
	(20, 17, 1),
	(20, 18, 1),
	(20, 19, 1),
	(20, 20, 1),
	(20, 21, 1),
	(20, 22, 1),
	(20, 23, 1),
	(20, 24, 1),
	(20, 25, 1),
	(20, 27, 1),
	(20, 29, 1),
	(20, 31, 1),
	(21, 1, 1),
	(21, 3, 1),
	(21, 4, 1),
	(21, 5, 1),
	(21, 6, 1),
	(21, 7, 1),
	(21, 8, 1),
	(21, 9, 1),
	(21, 11, 1),
	(21, 13, 1),
	(21, 14, 1),
	(21, 15, 1),
	(21, 16, 1),
	(21, 17, 1),
	(21, 18, 1),
	(21, 19, 1),
	(21, 20, 1),
	(21, 21, 1),
	(21, 22, 1),
	(21, 23, 1),
	(21, 24, 1),
	(21, 25, 1),
	(21, 27, 1),
	(21, 29, 1),
	(21, 30, 1),
	(21, 31, 1),
	(22, 1, 1),
	(22, 4, 1),
	(22, 7, 1),
	(22, 8, 1),
	(22, 9, 1),
	(22, 13, 1),
	(22, 14, 1),
	(22, 15, 1),
	(22, 16, 1),
	(22, 17, 1),
	(22, 18, 1),
	(22, 19, 1),
	(22, 20, 1),
	(22, 21, 1),
	(22, 22, 1),
	(22, 23, 1),
	(22, 24, 1),
	(22, 25, 1),
	(22, 27, 1),
	(22, 29, 1),
	(22, 31, 1),
	(23, 96, 0),
	(23, 100, 0),
	(23, 101, 0),
	(23, 118, 0),
	(24, 15, 0);
/*!40000 ALTER TABLE `phpbb_acl_roles_data` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
