-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-07-27 18:55:17
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.phpbb_user_notifications
DROP TABLE IF EXISTS `phpbb_user_notifications`;
CREATE TABLE IF NOT EXISTS `phpbb_user_notifications` (
  `item_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `item_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `method` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `notify` tinyint(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table int_ita_db.phpbb_user_notifications: ~188 rows (approximately)
/*!40000 ALTER TABLE `phpbb_user_notifications` DISABLE KEYS */;
INSERT INTO `phpbb_user_notifications` (`item_type`, `item_id`, `user_id`, `method`, `notify`) VALUES
	('notification.type.post', 0, 2, '', 1),
	('notification.type.post', 0, 2, 'notification.method.email', 1),
	('notification.type.topic', 0, 2, '', 1),
	('notification.type.topic', 0, 2, 'notification.method.email', 1),
	('notification.type.post', 0, 3, '', 1),
	('notification.type.post', 0, 3, 'notification.method.email', 1),
	('notification.type.topic', 0, 3, '', 1),
	('notification.type.topic', 0, 3, 'notification.method.email', 1),
	('notification.type.post', 0, 4, '', 1),
	('notification.type.post', 0, 4, 'notification.method.email', 1),
	('notification.type.topic', 0, 4, '', 1),
	('notification.type.topic', 0, 4, 'notification.method.email', 1),
	('notification.type.post', 0, 5, '', 1),
	('notification.type.post', 0, 5, 'notification.method.email', 1),
	('notification.type.topic', 0, 5, '', 1),
	('notification.type.topic', 0, 5, 'notification.method.email', 1),
	('notification.type.post', 0, 6, '', 1),
	('notification.type.post', 0, 6, 'notification.method.email', 1),
	('notification.type.topic', 0, 6, '', 1),
	('notification.type.topic', 0, 6, 'notification.method.email', 1),
	('notification.type.post', 0, 7, '', 1),
	('notification.type.post', 0, 7, 'notification.method.email', 1),
	('notification.type.topic', 0, 7, '', 1),
	('notification.type.topic', 0, 7, 'notification.method.email', 1),
	('notification.type.post', 0, 8, '', 1),
	('notification.type.post', 0, 8, 'notification.method.email', 1),
	('notification.type.topic', 0, 8, '', 1),
	('notification.type.topic', 0, 8, 'notification.method.email', 1),
	('notification.type.post', 0, 9, '', 1),
	('notification.type.post', 0, 9, 'notification.method.email', 1),
	('notification.type.topic', 0, 9, '', 1),
	('notification.type.topic', 0, 9, 'notification.method.email', 1),
	('notification.type.post', 0, 10, '', 1),
	('notification.type.post', 0, 10, 'notification.method.email', 1),
	('notification.type.topic', 0, 10, '', 1),
	('notification.type.topic', 0, 10, 'notification.method.email', 1),
	('notification.type.post', 0, 11, '', 1),
	('notification.type.post', 0, 11, 'notification.method.email', 1),
	('notification.type.topic', 0, 11, '', 1),
	('notification.type.topic', 0, 11, 'notification.method.email', 1),
	('notification.type.post', 0, 12, '', 1),
	('notification.type.post', 0, 12, 'notification.method.email', 1),
	('notification.type.topic', 0, 12, '', 1),
	('notification.type.topic', 0, 12, 'notification.method.email', 1),
	('notification.type.post', 0, 13, '', 1),
	('notification.type.post', 0, 13, 'notification.method.email', 1),
	('notification.type.topic', 0, 13, '', 1),
	('notification.type.topic', 0, 13, 'notification.method.email', 1),
	('notification.type.post', 0, 14, '', 1),
	('notification.type.post', 0, 14, 'notification.method.email', 1),
	('notification.type.topic', 0, 14, '', 1),
	('notification.type.topic', 0, 14, 'notification.method.email', 1),
	('notification.type.post', 0, 15, '', 1),
	('notification.type.post', 0, 15, 'notification.method.email', 1),
	('notification.type.topic', 0, 15, '', 1),
	('notification.type.topic', 0, 15, 'notification.method.email', 1),
	('notification.type.post', 0, 16, '', 1),
	('notification.type.post', 0, 16, 'notification.method.email', 1),
	('notification.type.topic', 0, 16, '', 1),
	('notification.type.topic', 0, 16, 'notification.method.email', 1),
	('notification.type.post', 0, 17, '', 1),
	('notification.type.post', 0, 17, 'notification.method.email', 1),
	('notification.type.topic', 0, 17, '', 1),
	('notification.type.topic', 0, 17, 'notification.method.email', 1),
	('notification.type.post', 0, 18, '', 1),
	('notification.type.post', 0, 18, 'notification.method.email', 1),
	('notification.type.topic', 0, 18, '', 1),
	('notification.type.topic', 0, 18, 'notification.method.email', 1),
	('notification.type.post', 0, 19, '', 1),
	('notification.type.post', 0, 19, 'notification.method.email', 1),
	('notification.type.topic', 0, 19, '', 1),
	('notification.type.topic', 0, 19, 'notification.method.email', 1),
	('notification.type.post', 0, 20, '', 1),
	('notification.type.post', 0, 20, 'notification.method.email', 1),
	('notification.type.topic', 0, 20, '', 1),
	('notification.type.topic', 0, 20, 'notification.method.email', 1),
	('notification.type.post', 0, 21, '', 1),
	('notification.type.post', 0, 21, 'notification.method.email', 1),
	('notification.type.topic', 0, 21, '', 1),
	('notification.type.topic', 0, 21, 'notification.method.email', 1),
	('notification.type.post', 0, 22, '', 1),
	('notification.type.post', 0, 22, 'notification.method.email', 1),
	('notification.type.topic', 0, 22, '', 1),
	('notification.type.topic', 0, 22, 'notification.method.email', 1),
	('notification.type.post', 0, 23, '', 1),
	('notification.type.post', 0, 23, 'notification.method.email', 1),
	('notification.type.topic', 0, 23, '', 1),
	('notification.type.topic', 0, 23, 'notification.method.email', 1),
	('notification.type.post', 0, 24, '', 1),
	('notification.type.post', 0, 24, 'notification.method.email', 1),
	('notification.type.topic', 0, 24, '', 1),
	('notification.type.topic', 0, 24, 'notification.method.email', 1),
	('notification.type.post', 0, 25, '', 1),
	('notification.type.post', 0, 25, 'notification.method.email', 1),
	('notification.type.topic', 0, 25, '', 1),
	('notification.type.topic', 0, 25, 'notification.method.email', 1),
	('notification.type.post', 0, 26, '', 1),
	('notification.type.post', 0, 26, 'notification.method.email', 1),
	('notification.type.topic', 0, 26, '', 1),
	('notification.type.topic', 0, 26, 'notification.method.email', 1),
	('notification.type.post', 0, 27, '', 1),
	('notification.type.post', 0, 27, 'notification.method.email', 1),
	('notification.type.topic', 0, 27, '', 1),
	('notification.type.topic', 0, 27, 'notification.method.email', 1),
	('notification.type.post', 0, 28, '', 1),
	('notification.type.post', 0, 28, 'notification.method.email', 1),
	('notification.type.topic', 0, 28, '', 1),
	('notification.type.topic', 0, 28, 'notification.method.email', 1),
	('notification.type.post', 0, 29, '', 1),
	('notification.type.post', 0, 29, 'notification.method.email', 1),
	('notification.type.topic', 0, 29, '', 1),
	('notification.type.topic', 0, 29, 'notification.method.email', 1),
	('notification.type.post', 0, 30, '', 1),
	('notification.type.post', 0, 30, 'notification.method.email', 1),
	('notification.type.topic', 0, 30, '', 1),
	('notification.type.topic', 0, 30, 'notification.method.email', 1),
	('notification.type.post', 0, 31, '', 1),
	('notification.type.post', 0, 31, 'notification.method.email', 1),
	('notification.type.topic', 0, 31, '', 1),
	('notification.type.topic', 0, 31, 'notification.method.email', 1),
	('notification.type.post', 0, 32, '', 1),
	('notification.type.post', 0, 32, 'notification.method.email', 1),
	('notification.type.topic', 0, 32, '', 1),
	('notification.type.topic', 0, 32, 'notification.method.email', 1),
	('notification.type.post', 0, 33, '', 1),
	('notification.type.post', 0, 33, 'notification.method.email', 1),
	('notification.type.topic', 0, 33, '', 1),
	('notification.type.topic', 0, 33, 'notification.method.email', 1),
	('notification.type.post', 0, 34, '', 1),
	('notification.type.post', 0, 34, 'notification.method.email', 1),
	('notification.type.topic', 0, 34, '', 1),
	('notification.type.topic', 0, 34, 'notification.method.email', 1),
	('notification.type.post', 0, 35, '', 1),
	('notification.type.post', 0, 35, 'notification.method.email', 1),
	('notification.type.topic', 0, 35, '', 1),
	('notification.type.topic', 0, 35, 'notification.method.email', 1),
	('notification.type.post', 0, 36, '', 1),
	('notification.type.post', 0, 36, 'notification.method.email', 1),
	('notification.type.topic', 0, 36, '', 1),
	('notification.type.topic', 0, 36, 'notification.method.email', 1),
	('notification.type.post', 0, 37, '', 1),
	('notification.type.post', 0, 37, 'notification.method.email', 1),
	('notification.type.topic', 0, 37, '', 1),
	('notification.type.topic', 0, 37, 'notification.method.email', 1),
	('notification.type.post', 0, 38, '', 1),
	('notification.type.post', 0, 38, 'notification.method.email', 1),
	('notification.type.topic', 0, 38, '', 1),
	('notification.type.topic', 0, 38, 'notification.method.email', 1),
	('notification.type.post', 0, 39, '', 1),
	('notification.type.post', 0, 39, 'notification.method.email', 1),
	('notification.type.topic', 0, 39, '', 1),
	('notification.type.topic', 0, 39, 'notification.method.email', 1),
	('notification.type.post', 0, 40, '', 1),
	('notification.type.post', 0, 40, 'notification.method.email', 1),
	('notification.type.topic', 0, 40, '', 1),
	('notification.type.topic', 0, 40, 'notification.method.email', 1),
	('notification.type.post', 0, 41, '', 1),
	('notification.type.post', 0, 41, 'notification.method.email', 1),
	('notification.type.topic', 0, 41, '', 1),
	('notification.type.topic', 0, 41, 'notification.method.email', 1),
	('notification.type.post', 0, 42, '', 1),
	('notification.type.post', 0, 42, 'notification.method.email', 1),
	('notification.type.topic', 0, 42, '', 1),
	('notification.type.topic', 0, 42, 'notification.method.email', 1),
	('notification.type.post', 0, 43, '', 1),
	('notification.type.post', 0, 43, 'notification.method.email', 1),
	('notification.type.topic', 0, 43, '', 1),
	('notification.type.topic', 0, 43, 'notification.method.email', 1),
	('notification.type.post', 0, 44, '', 1),
	('notification.type.post', 0, 44, 'notification.method.email', 1),
	('notification.type.topic', 0, 44, '', 1),
	('notification.type.topic', 0, 44, 'notification.method.email', 1),
	('notification.type.post', 0, 45, '', 1),
	('notification.type.post', 0, 45, 'notification.method.email', 1),
	('notification.type.topic', 0, 45, '', 1),
	('notification.type.topic', 0, 45, 'notification.method.email', 1),
	('notification.type.post', 0, 46, '', 1),
	('notification.type.post', 0, 46, 'notification.method.email', 1),
	('notification.type.topic', 0, 46, '', 1),
	('notification.type.topic', 0, 46, 'notification.method.email', 1),
	('notification.type.post', 0, 47, '', 1),
	('notification.type.post', 0, 47, 'notification.method.email', 1),
	('notification.type.topic', 0, 47, '', 1),
	('notification.type.topic', 0, 47, 'notification.method.email', 1),
	('notification.type.post', 0, 48, '', 1),
	('notification.type.post', 0, 48, 'notification.method.email', 1),
	('notification.type.topic', 0, 48, '', 1),
	('notification.type.topic', 0, 48, 'notification.method.email', 1);
/*!40000 ALTER TABLE `phpbb_user_notifications` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
