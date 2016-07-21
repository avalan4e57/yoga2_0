# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: yoga2_0
# Generation Time: 2016-07-03 06:22:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `page_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `page_alias` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `page_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `page_h1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `page_s_desc` text CHARACTER SET latin1,
  `page_content` text CHARACTER SET latin1,
  `page_publish` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `page_name` tinytext,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`page_id`, `page_alias`, `page_title`, `page_h1`, `page_s_desc`, `page_content`, `page_publish`, `page_name`)
VALUES
	(1,'home','Yoga everyday','Yoga everyday',NULL,NULL,'Y','Main'),
	(2,'dayOne','Day One Program',NULL,NULL,'content/dayOne.php','Y','День 1'),
	(3,'dayTwo','Day Two Program',NULL,NULL,'content/dayTwo.php','Y','День 2'),
	(4,'nidra','Nidra',NULL,NULL,'content/nidra.php','Y','Нидра');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wx_pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wx_pages`;

CREATE TABLE `wx_pages` (
  `page_id` smallint(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) DEFAULT NULL,
  `page_alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `wx_pages` WRITE;
/*!40000 ALTER TABLE `wx_pages` DISABLE KEYS */;

INSERT INTO `wx_pages` (`page_id`, `page_title`, `page_alias`)
VALUES
	(1,'home','home');

/*!40000 ALTER TABLE `wx_pages` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
