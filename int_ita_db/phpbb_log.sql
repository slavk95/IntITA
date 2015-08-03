-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-08-04 01:53:53
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.phpbb_log
DROP TABLE IF EXISTS `phpbb_log`;
CREATE TABLE IF NOT EXISTS `phpbb_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `log_type` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reportee_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `log_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  `log_operation` text COLLATE utf8_bin NOT NULL,
  `log_data` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_type` (`log_type`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `reportee_id` (`reportee_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table int_ita_db.phpbb_log: ~117 rows (approximately)
/*!40000 ALTER TABLE `phpbb_log` DISABLE KEYS */;
INSERT INTO `phpbb_log` (`log_id`, `log_type`, `user_id`, `forum_id`, `topic_id`, `reportee_id`, `log_ip`, `log_time`, `log_operation`, `log_data`) VALUES
	(1, 0, 2, 0, 0, 0, '127.0.0.1', 1431076934, 'LOG_INSTALL_INSTALLED', 'a:1:{i:0;s:5:"3.1.4";}'),
	(2, 2, 1, 0, 0, 0, '::1', 1431693780, 'LOG_GENERAL_ERROR', 'a:2:{i:0;s:13:"General Error";i:1;s:1513:"SQL ERROR [ mysqli ]<br /><br />Table \'int_ita_db.phpbb_acl_groups\' doesn\'t exist [1146]<br /><br />SQL<br /><br />DELETE FROM phpbb_acl_groups\r\n		WHERE forum_id NOT IN (0, \'1\', \'2\')<br /><br />BACKTRACE<br /><div style="font-family: monospace;"><br /><b>FILE:</b> (not given by php)<br /><b>LINE:</b> (not given by php)<br /><b>CALL:</b> msg_handler()<br /><br /><b>FILE:</b> [ROOT]/phpbb/db/driver/driver.php<br /><b>LINE:</b> 855<br /><b>CALL:</b> trigger_error()<br /><br /><b>FILE:</b> [ROOT]/phpbb/db/driver/mysqli.php<br /><b>LINE:</b> 193<br /><b>CALL:</b> phpbb\\db\\driver\\driver-&gt;sql_error()<br /><br /><b>FILE:</b> [ROOT]/phpbb/db/driver/factory.php<br /><b>LINE:</b> 329<br /><b>CALL:</b> phpbb\\db\\driver\\mysqli-&gt;sql_query()<br /><br /><b>FILE:</b> [ROOT]/includes/functions_admin.php<br /><b>LINE:</b> 3113<br /><b>CALL:</b> phpbb\\db\\driver\\factory-&gt;sql_query()<br /><br /><b>FILE:</b> [ROOT]/phpbb/cron/task/core/tidy_database.php<br /><b>LINE:</b> 50<br /><b>CALL:</b> tidy_database()<br /><br /><b>FILE:</b> (not given by php)<br /><b>LINE:</b> (not given by php)<br /><b>CALL:</b> phpbb\\cron\\task\\core\\tidy_database-&gt;run()<br /><br /><b>FILE:</b> [ROOT]/phpbb/cron/task/wrapper.php<br /><b>LINE:</b> 104<br /><b>CALL:</b> call_user_func_array()<br /><br /><b>FILE:</b> [ROOT]/cron.php<br /><b>LINE:</b> 64<br /><b>CALL:</b> phpbb\\cron\\task\\wrapper-&gt;__call()<br /><br /><b>FILE:</b> [ROOT]/cron.php<br /><b>LINE:</b> 64<br /><b>CALL:</b> phpbb\\cron\\task\\wrapper-&gt;run()<br /></div>";}'),
	(3, 2, 1, 0, 0, 0, '::1', 1433429455, 'LOG_GENERAL_ERROR', 'a:2:{i:0;s:13:"General Error";i:1;s:1513:"SQL ERROR [ mysqli ]<br /><br />Table \'int_ita_db.phpbb_acl_groups\' doesn\'t exist [1146]<br /><br />SQL<br /><br />DELETE FROM phpbb_acl_groups\r\n		WHERE forum_id NOT IN (0, \'1\', \'2\')<br /><br />BACKTRACE<br /><div style="font-family: monospace;"><br /><b>FILE:</b> (not given by php)<br /><b>LINE:</b> (not given by php)<br /><b>CALL:</b> msg_handler()<br /><br /><b>FILE:</b> [ROOT]/phpbb/db/driver/driver.php<br /><b>LINE:</b> 855<br /><b>CALL:</b> trigger_error()<br /><br /><b>FILE:</b> [ROOT]/phpbb/db/driver/mysqli.php<br /><b>LINE:</b> 193<br /><b>CALL:</b> phpbb\\db\\driver\\driver-&gt;sql_error()<br /><br /><b>FILE:</b> [ROOT]/phpbb/db/driver/factory.php<br /><b>LINE:</b> 329<br /><b>CALL:</b> phpbb\\db\\driver\\mysqli-&gt;sql_query()<br /><br /><b>FILE:</b> [ROOT]/includes/functions_admin.php<br /><b>LINE:</b> 3113<br /><b>CALL:</b> phpbb\\db\\driver\\factory-&gt;sql_query()<br /><br /><b>FILE:</b> [ROOT]/phpbb/cron/task/core/tidy_database.php<br /><b>LINE:</b> 50<br /><b>CALL:</b> tidy_database()<br /><br /><b>FILE:</b> (not given by php)<br /><b>LINE:</b> (not given by php)<br /><b>CALL:</b> phpbb\\cron\\task\\core\\tidy_database-&gt;run()<br /><br /><b>FILE:</b> [ROOT]/phpbb/cron/task/wrapper.php<br /><b>LINE:</b> 104<br /><b>CALL:</b> call_user_func_array()<br /><br /><b>FILE:</b> [ROOT]/cron.php<br /><b>LINE:</b> 64<br /><b>CALL:</b> phpbb\\cron\\task\\wrapper-&gt;__call()<br /><br /><b>FILE:</b> [ROOT]/cron.php<br /><b>LINE:</b> 64<br /><b>CALL:</b> phpbb\\cron\\task\\wrapper-&gt;run()<br /></div>";}'),
	(5, 0, 2, 0, 0, 0, '81.30.164.98', 1436605567, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(6, 0, 2, 0, 0, 0, '81.30.164.98', 1436605706, 'LOG_FORUM_ADD', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(7, 0, 2, 0, 0, 0, '81.30.164.98', 1436605722, 'LOG_FORUM_ADD', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(8, 0, 2, 0, 0, 0, '81.30.164.98', 1436605740, 'LOG_FORUM_ADD', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(9, 0, 2, 0, 0, 0, '81.30.164.98', 1436605765, 'LOG_FORUM_ADD', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(10, 0, 2, 0, 0, 0, '81.30.164.98', 1436606118, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(11, 0, 2, 0, 0, 0, '81.30.164.98', 1436606137, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(12, 0, 2, 0, 0, 0, '81.30.164.98', 1436606146, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(13, 0, 2, 0, 0, 0, '81.30.164.98', 1436606275, 'LOG_FORUM_ADD', 'a:1:{i:0;s:27:"Програміст (Java)";}'),
	(14, 0, 2, 0, 0, 0, '81.30.164.98', 1436606306, 'LOG_FORUM_ADD', 'a:1:{i:0;s:27:"Програміст (С++)";}'),
	(15, 0, 2, 0, 0, 0, '81.30.164.98', 1436606568, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(16, 0, 2, 0, 0, 0, '81.30.164.98', 1436606599, 'LOG_FORUM_ADD', 'a:1:{i:0;s:41:"Англійська мова для ІТ";}'),
	(17, 0, 2, 0, 0, 0, '81.30.164.98', 1436606628, 'LOG_FORUM_ADD', 'a:1:{i:0;s:41:"Англійська мова для ІТ";}'),
	(18, 0, 2, 0, 0, 0, '81.30.164.98', 1436606662, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:41:"Англійська мова для ІТ";}'),
	(19, 0, 2, 0, 0, 0, '81.30.164.98', 1436606742, 'LOG_FORUM_EDIT', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(20, 0, 2, 0, 0, 0, '81.30.164.98', 1436606742, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:38:"Ваша перша категорія";i:1;s:46:"Інтернет програміст (РНР)";}'),
	(21, 0, 2, 0, 0, 0, '81.30.164.98', 1436607558, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(22, 0, 2, 0, 0, 0, '81.30.164.98', 1436607835, 'LOG_FORUM_EDIT', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(23, 0, 2, 0, 0, 0, '81.30.164.98', 1436607835, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:38:"Ваша перша категорія";i:1;s:46:"Інтернет програміст (РНР)";}'),
	(24, 0, 2, 0, 0, 0, '81.30.164.98', 1436616850, 'LOG_ADMIN_AUTH_FAIL', ''),
	(25, 0, 2, 0, 0, 0, '81.30.164.98', 1436616859, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(26, 0, 2, 0, 0, 0, '81.30.164.98', 1436970132, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(27, 0, 2, 0, 0, 0, '81.30.164.98', 1436971652, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(28, 0, 2, 0, 0, 0, '81.30.164.98', 1436971734, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(29, 0, 2, 0, 0, 0, '81.30.164.98', 1436976080, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(30, 0, 2, 0, 0, 0, '81.30.164.98', 1436976124, 'LOG_FORUM_DEL_FORUMS', 'a:1:{i:0;s:38:"Ваша перша категорія";}'),
	(31, 0, 2, 0, 0, 0, '81.30.164.98', 1436976137, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(32, 0, 2, 0, 0, 0, '81.30.164.98', 1436976148, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:27:"Програміст (Java)";}'),
	(33, 0, 2, 0, 0, 0, '81.30.164.98', 1436976165, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:27:"Програміст (С++)";}'),
	(34, 0, 2, 0, 0, 0, '81.30.164.98', 1436976173, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:41:"Англійська мова для ІТ";}'),
	(35, 0, 2, 0, 0, 0, '81.30.164.98', 1436977413, 'LOG_FORUM_ADD', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(36, 0, 2, 0, 0, 0, '81.30.164.98', 1436982874, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(37, 0, 2, 0, 0, 0, '81.30.164.98', 1436985882, 'LOG_FORUM_ADD', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(38, 0, 2, 0, 0, 0, '81.30.164.98', 1436985894, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(39, 0, 2, 0, 0, 0, '81.30.164.98', 1436985933, 'LOG_FORUM_ADD', 'a:1:{i:0;s:27:"Програміст (Java)";}'),
	(40, 0, 2, 0, 0, 0, '81.30.164.98', 1436985937, 'LOG_FORUM_ADD', 'a:1:{i:0;s:27:"Програміст (Java)";}'),
	(41, 0, 2, 0, 0, 0, '81.30.164.98', 1436985946, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:27:"Програміст (Java)";}'),
	(42, 0, 2, 0, 0, 0, '81.30.164.98', 1437051512, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(43, 0, 2, 0, 0, 0, '81.30.164.98', 1437051522, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:27:"Програміст (Java)";}'),
	(44, 0, 2, 0, 0, 0, '81.30.164.98', 1437051528, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(45, 0, 2, 0, 0, 0, '81.30.164.98', 1437051563, 'LOG_FORUM_ADD', 'a:1:{i:0;s:46:"Інтернет програміст (РНР)";}'),
	(46, 0, 2, 0, 0, 0, '81.30.164.98', 1437051892, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(47, 0, 2, 0, 0, 0, '81.30.164.98', 1437051932, 'LOG_FORUM_ADD', 'a:1:{i:0;s:59:"Модуль 1.	 Вступ до програмування";}'),
	(48, 0, 2, 0, 0, 0, '81.30.164.98', 1437051932, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:59:"Модуль 1.	 Вступ до програмування";}'),
	(49, 0, 2, 0, 0, 0, '81.30.164.98', 1437051965, 'LOG_FORUM_ADD', 'a:1:{i:0;s:92:"Модуль 2.	 Алгоритмізація і програмування на мові С";}'),
	(50, 0, 2, 0, 0, 0, '81.30.164.98', 1437051965, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:92:"Модуль 2.	 Алгоритмізація і програмування на мові С";}'),
	(51, 0, 2, 0, 0, 0, '81.30.164.98', 1437052010, 'LOG_FORUM_ADD', 'a:1:{i:0;s:27:"Програміст (Java)";}'),
	(52, 0, 2, 0, 0, 0, '81.30.164.98', 1437052010, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:27:"Програміст (Java)";}'),
	(53, 0, 2, 0, 0, 0, '81.30.164.98', 1437052132, 'LOG_FORUM_ADD', 'a:1:{i:0;s:27:"Програміст (С++)";}'),
	(54, 0, 2, 0, 0, 0, '81.30.164.98', 1437052132, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:27:"Програміст (С++)";}'),
	(55, 0, 2, 0, 0, 0, '81.30.164.98', 1437052156, 'LOG_FORUM_ADD', 'a:1:{i:0;s:41:"Англійська мова для ІТ";}'),
	(56, 0, 2, 0, 0, 0, '81.30.164.98', 1437052156, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:41:"Англійська мова для ІТ";}'),
	(57, 0, 2, 0, 0, 0, '81.30.164.98', 1437052176, 'LOG_FORUM_ADD', 'a:1:{i:0;s:54:"Побудова успішної ІТ кар’єри";}'),
	(58, 0, 2, 0, 0, 0, '81.30.164.98', 1437052176, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:54:"Побудова успішної ІТ кар’єри";}'),
	(59, 0, 2, 0, 0, 0, '81.30.164.98', 1437052554, 'LOG_FORUM_ADD', 'a:1:{i:0;s:51:"Інтернет програміст (Java Script)";}'),
	(60, 0, 2, 0, 0, 0, '81.30.164.98', 1437052577, 'LOG_FORUM_ADD', 'a:1:{i:0;s:25:"Програміст (C#)";}'),
	(61, 0, 2, 0, 0, 0, '81.30.164.98', 1437052601, 'LOG_FORUM_ADD', 'a:1:{i:0;s:29:"Тестувальник (QA)";}'),
	(62, 0, 2, 0, 0, 0, '81.30.164.98', 1437052601, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:29:"Тестувальник (QA)";}'),
	(63, 0, 2, 0, 0, 0, '81.30.164.98', 1437052620, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:51:"Інтернет програміст (Java Script)";}'),
	(64, 0, 2, 0, 0, 0, '81.30.164.98', 1437052632, 'LOG_FORUM_DEL_POSTS', 'a:1:{i:0;s:25:"Програміст (C#)";}'),
	(65, 0, 2, 0, 0, 0, '81.30.164.98', 1437052654, 'LOG_FORUM_ADD', 'a:1:{i:0;s:25:"Програміст (C#)";}'),
	(66, 0, 2, 0, 0, 0, '81.30.164.98', 1437052654, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:25:"Програміст (C#)";}'),
	(67, 0, 2, 0, 0, 0, '81.30.164.98', 1437052675, 'LOG_FORUM_ADD', 'a:1:{i:0;s:29:"Тестувальник (QA)";}'),
	(68, 0, 2, 0, 0, 0, '81.30.164.98', 1437052675, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:29:"Тестувальник (QA)";}'),
	(69, 0, 2, 0, 0, 0, '81.30.164.98', 1437052702, 'LOG_FORUM_ADD', 'a:1:{i:0;s:35:"Програміст (Objective С)";}'),
	(70, 0, 2, 0, 0, 0, '81.30.164.98', 1437052702, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:35:"Програміст (Objective С)";}'),
	(71, 0, 2, 0, 0, 0, '81.30.164.98', 1437052729, 'LOG_FORUM_ADD', 'a:1:{i:0;s:47:"Верстальник сайтів (HTML, CSS)";}'),
	(72, 0, 2, 0, 0, 0, '81.30.164.98', 1437052729, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:47:"Верстальник сайтів (HTML, CSS)";}'),
	(73, 0, 2, 0, 0, 0, '81.30.164.98', 1437052972, 'LOG_FORUM_ADD', 'a:1:{i:0;s:43:"Елементарна математика";}'),
	(74, 0, 2, 0, 0, 0, '81.30.164.98', 1437052972, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:43:"Елементарна математика";}'),
	(75, 0, 2, 0, 0, 0, '81.30.164.98', 1437053006, 'LOG_FORUM_ADD', 'a:1:{i:0;s:48:"Елементи вищої математики";}'),
	(76, 0, 2, 0, 0, 0, '81.30.164.98', 1437053006, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:48:"Елементи вищої математики";}'),
	(77, 0, 2, 0, 0, 0, '81.30.164.98', 1437053031, 'LOG_FORUM_ADD', 'a:1:{i:0;s:34:"Комп\'ютерні мережі";}'),
	(78, 0, 2, 0, 0, 0, '81.30.164.98', 1437053031, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:34:"Комп\'ютерні мережі";}'),
	(79, 0, 2, 0, 0, 0, '81.30.164.98', 1437053050, 'LOG_FORUM_ADD', 'a:1:{i:0;s:100:"Розробка та аналіз алгоритмів. Комбінаторні алгоритми";}'),
	(80, 0, 2, 0, 0, 0, '81.30.164.98', 1437053050, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:100:"Розробка та аналіз алгоритмів. Комбінаторні алгоритми";}'),
	(81, 0, 2, 0, 0, 0, '81.30.164.98', 1437053074, 'LOG_FORUM_ADD', 'a:1:{i:0;s:39:"Дискретна математика";}'),
	(82, 0, 2, 0, 0, 0, '81.30.164.98', 1437053074, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:39:"Дискретна математика";}'),
	(83, 0, 2, 0, 0, 0, '81.30.164.98', 1437053092, 'LOG_FORUM_ADD', 'a:1:{i:0;s:39:"Бази даних ( Частина 1)";}'),
	(84, 0, 2, 0, 0, 0, '81.30.164.98', 1437053093, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:39:"Бази даних ( Частина 1)";}'),
	(85, 0, 2, 0, 0, 0, '81.30.164.98', 1437053110, 'LOG_FORUM_ADD', 'a:1:{i:0;s:39:"Бази даних ( Частина 2)";}'),
	(86, 0, 2, 0, 0, 0, '81.30.164.98', 1437053110, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:39:"Бази даних ( Частина 2)";}'),
	(87, 0, 2, 0, 0, 0, '81.30.164.98', 1437053129, 'LOG_FORUM_ADD', 'a:1:{i:0;s:54:"Програмування на PHP (Частина 1)";}'),
	(88, 0, 2, 0, 0, 0, '81.30.164.98', 1437053129, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:54:"Програмування на PHP (Частина 1)";}'),
	(89, 0, 2, 0, 0, 0, '81.30.164.98', 1437053149, 'LOG_FORUM_ADD', 'a:1:{i:0;s:31:"Регулярні вирази";}'),
	(90, 0, 2, 0, 0, 0, '81.30.164.98', 1437053149, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:31:"Регулярні вирази";}'),
	(91, 0, 2, 0, 0, 0, '81.30.164.98', 1437053157, 'LOG_FORUM_MOVE_UP', 'a:2:{i:0;s:43:"Елементарна математика";i:1;s:75:"Алгоритмізація і програмування на мові С";}'),
	(92, 0, 2, 0, 0, 0, '81.30.164.98', 1437053171, 'LOG_FORUM_ADD', 'a:1:{i:0;s:54:"Програмування на PHP (Частина 2)";}'),
	(93, 0, 2, 0, 0, 0, '81.30.164.98', 1437053171, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:54:"Програмування на PHP (Частина 2)";}'),
	(94, 0, 2, 0, 0, 0, '81.30.164.98', 1437053188, 'LOG_FORUM_ADD', 'a:1:{i:0;s:29:"Верстка на HTML, CSS";}'),
	(95, 0, 2, 0, 0, 0, '81.30.164.98', 1437053189, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:29:"Верстка на HTML, CSS";}'),
	(96, 0, 2, 0, 0, 0, '81.30.164.98', 1437053209, 'LOG_FORUM_ADD', 'a:1:{i:0;s:42:"Програмування на JavaScript";}'),
	(97, 0, 2, 0, 0, 0, '81.30.164.98', 1437053209, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:42:"Програмування на JavaScript";}'),
	(98, 0, 2, 0, 0, 0, '81.30.164.98', 1437053225, 'LOG_FORUM_ADD', 'a:1:{i:0;s:67:"Сучасні технології розробки програм";}'),
	(99, 0, 2, 0, 0, 0, '81.30.164.98', 1437053225, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:67:"Сучасні технології розробки програм";}'),
	(100, 0, 2, 0, 0, 0, '81.30.164.98', 1437053239, 'LOG_FORUM_ADD', 'a:1:{i:0;s:50:"Командний дипломний проект";}'),
	(101, 0, 2, 0, 0, 0, '81.30.164.98', 1437053239, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:46:"Інтернет програміст (РНР)";i:1;s:50:"Командний дипломний проект";}'),
	(102, 0, 2, 0, 0, 0, '81.30.164.98', 1437053321, 'LOG_FORUM_ADD', 'a:1:{i:0;s:13:"For beginners";}'),
	(103, 0, 2, 0, 0, 0, '81.30.164.98', 1437053321, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:41:"Англійська мова для ІТ";i:1;s:13:"For beginners";}'),
	(104, 0, 2, 0, 0, 0, '81.30.164.98', 1437053339, 'LOG_FORUM_ADD', 'a:1:{i:0;s:16:"Pre Intermediate";}'),
	(105, 0, 2, 0, 0, 0, '81.30.164.98', 1437053339, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:41:"Англійська мова для ІТ";i:1;s:16:"Pre Intermediate";}'),
	(106, 0, 2, 0, 0, 0, '81.30.164.98', 1437053354, 'LOG_FORUM_ADD', 'a:1:{i:0;s:12:"Intermediate";}'),
	(107, 0, 2, 0, 0, 0, '81.30.164.98', 1437053354, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:41:"Англійська мова для ІТ";i:1;s:12:"Intermediate";}'),
	(108, 0, 2, 0, 0, 0, '81.30.164.98', 1437053445, 'LOG_FORUM_ADD', 'a:1:{i:0;s:97:"Побудова індивідуального плану успішної ІТ кар’єри.";}'),
	(109, 0, 2, 0, 0, 0, '81.30.164.98', 1437053445, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:54:"Побудова успішної ІТ кар’єри";i:1;s:97:"Побудова індивідуального плану успішної ІТ кар’єри.";}'),
	(110, 0, 2, 0, 0, 0, '81.30.164.98', 1437053483, 'LOG_FORUM_ADD', 'a:1:{i:0;s:52:"Ефективне працевлаштування.";}'),
	(111, 0, 2, 0, 0, 0, '81.30.164.98', 1437053483, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:54:"Побудова успішної ІТ кар’єри";i:1;s:52:"Ефективне працевлаштування.";}'),
	(112, 0, 2, 0, 0, 0, '81.30.164.98', 1437053501, 'LOG_FORUM_ADD', 'a:1:{i:0;s:33:"Психологія успіху";}'),
	(113, 0, 2, 0, 0, 0, '81.30.164.98', 1437053501, 'LOG_FORUM_COPIED_PERMISSIONS', 'a:2:{i:0;s:54:"Побудова успішної ІТ кар’єри";i:1;s:33:"Психологія успіху";}'),
	(114, 0, 2, 0, 0, 0, '81.30.164.98', 1437055050, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(115, 2, 22, 0, 0, 0, '178.94.81.41', 1437135643, 'LOG_IP_BROWSER_FORWARDED_CHECK', 'a:6:{i:0;s:9:"178.94.81";i:1;s:9:"178.92.66";i:2;s:65:"mozilla/5.0 (windows nt 6.1; rv:40.0) gecko/20100101 firefox/40.0";i:3;s:65:"mozilla/5.0 (windows nt 6.1; rv:40.0) gecko/20100101 firefox/40.0";i:4;s:0:"";i:5;s:0:"";}'),
	(116, 2, 52, 0, 0, 0, '94.179.33.38', 1437550299, 'LOG_IP_BROWSER_FORWARDED_CHECK', 'a:6:{i:0;s:9:"94.179.33";i:1;s:9:"94.179.58";i:2;s:65:"mozilla/5.0 (windows nt 6.1; rv:40.0) gecko/20100101 firefox/40.0";i:3;s:65:"mozilla/5.0 (windows nt 6.1; rv:40.0) gecko/20100101 firefox/40.0";i:4;s:0:"";i:5;s:0:"";}'),
	(117, 0, 2, 0, 0, 0, '81.30.164.98', 1438188522, 'LOG_ADMIN_AUTH_SUCCESS', ''),
	(118, 2, 45, 0, 0, 0, '178.94.166.76', 1438196845, 'LOG_IP_BROWSER_FORWARDED_CHECK', 'a:6:{i:0;s:10:"178.94.166";i:1;s:7:"37.54.2";i:2;s:125:"mozilla/5.0 (linux; android 5.0; k012 build/lrx21v) applewebkit/537.36 (khtml, like gecko) chrome/42.0.2311.109 safari/537.36";i:3;s:125:"mozilla/5.0 (linux; android 5.0; k012 build/lrx21v) applewebkit/537.36 (khtml, like gecko) chrome/42.0.2311.109 safari/537.36";i:4;s:0:"";i:5;s:0:"";}');
/*!40000 ALTER TABLE `phpbb_log` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
