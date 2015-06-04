-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-06-03 18:29:21
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.aa_authorizations
DROP TABLE IF EXISTS `aa_authorizations`;
CREATE TABLE IF NOT EXISTS `aa_authorizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(5) unsigned NOT NULL,
  `when_enter` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `when_enter` (`when_enter`),
  CONSTRAINT `aa_authorizations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `aa_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_authorizations: ~60 rows (approximately)
/*!40000 ALTER TABLE `aa_authorizations` DISABLE KEYS */;
INSERT INTO `aa_authorizations` (`id`, `user_id`, `when_enter`, `ip`) VALUES
	(1, 2, '2015-03-02 15:33:25', '::1'),
	(2, 2, '2015-03-02 15:33:25', '::1'),
	(3, 2, '2015-03-02 15:41:58', '::1'),
	(4, 2, '2015-03-02 15:41:59', '::1'),
	(5, 3, '2015-03-02 15:45:10', '::1'),
	(6, 3, '2015-03-02 15:45:10', '::1'),
	(7, 2, '2015-03-03 15:04:10', '::1'),
	(8, 2, '2015-03-03 15:04:10', '::1'),
	(9, 2, '2015-03-03 15:41:31', '::1'),
	(10, 2, '2015-03-03 15:41:32', '::1'),
	(11, 2, '2015-03-03 17:26:15', '::1'),
	(12, 2, '2015-03-03 17:26:15', '::1'),
	(13, 2, '2015-03-04 12:54:56', '::1'),
	(14, 2, '2015-03-04 12:54:56', '::1'),
	(15, 2, '2015-03-05 14:12:11', '::1'),
	(16, 2, '2015-03-05 14:12:12', '::1'),
	(17, 2, '2015-03-06 13:21:13', '::1'),
	(18, 2, '2015-03-06 13:21:13', '::1'),
	(19, 2, '2015-03-06 13:33:29', '::1'),
	(20, 2, '2015-03-06 13:33:30', '::1'),
	(21, 2, '2015-03-07 01:19:06', '::1'),
	(22, 2, '2015-03-07 01:19:07', '::1'),
	(23, 2, '2015-03-07 10:31:26', '::1'),
	(24, 2, '2015-03-07 10:31:27', '::1'),
	(25, 2, '2015-03-10 14:40:09', '::1'),
	(26, 2, '2015-03-10 14:40:09', '::1'),
	(27, 2, '2015-03-12 17:10:57', '::1'),
	(28, 2, '2015-03-12 17:10:57', '::1'),
	(29, 2, '2015-03-12 18:59:14', '::1'),
	(30, 2, '2015-03-12 18:59:14', '::1'),
	(31, 2, '2015-03-13 13:24:19', '::1'),
	(32, 2, '2015-03-13 13:24:21', '::1'),
	(33, 2, '2015-03-13 16:25:37', '::1'),
	(34, 2, '2015-03-13 16:25:37', '::1'),
	(35, 2, '2015-03-19 15:45:40', '::1'),
	(36, 2, '2015-03-19 15:45:41', '::1'),
	(37, 2, '2015-03-20 15:14:18', '::1'),
	(38, 2, '2015-03-20 15:14:18', '::1'),
	(39, 2, '2015-03-23 14:29:03', '::1'),
	(40, 2, '2015-03-23 14:29:04', '::1'),
	(41, 2, '2015-03-24 19:48:01', '::1'),
	(42, 2, '2015-03-24 19:48:01', '::1'),
	(43, 2, '2015-03-26 16:11:11', '::1'),
	(44, 2, '2015-03-26 16:11:12', '::1'),
	(45, 2, '2015-04-02 16:57:52', '::1'),
	(46, 2, '2015-04-02 16:57:52', '::1'),
	(47, 2, '2015-04-07 16:12:17', '::1'),
	(48, 2, '2015-04-07 16:12:17', '::1'),
	(49, 2, '2015-04-09 13:46:07', '::1'),
	(50, 2, '2015-04-09 13:46:07', '::1'),
	(51, 2, '2015-05-05 23:41:47', '::1'),
	(52, 2, '2015-05-05 23:41:47', '::1'),
	(53, 2, '2015-05-06 14:29:21', '::1'),
	(54, 2, '2015-05-06 14:29:21', '::1'),
	(55, 2, '2015-05-06 19:24:31', '::1'),
	(56, 2, '2015-05-06 19:24:31', '::1'),
	(57, 2, '2015-05-10 22:46:16', '::1'),
	(58, 2, '2015-05-10 22:46:16', '::1'),
	(59, 2, '2015-05-21 16:59:55', '::1'),
	(60, 2, '2015-05-21 16:59:56', '::1');
/*!40000 ALTER TABLE `aa_authorizations` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
