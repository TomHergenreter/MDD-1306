# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.29)
# Database: MDD
# Generation Time: 2013-06-28 01:43:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table a_p_i_concepts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `a_p_i_concepts`;

CREATE TABLE `a_p_i_concepts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorite` (`user_id`),
  CONSTRAINT `favorite` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `a_p_i_concepts` WRITE;
/*!40000 ALTER TABLE `a_p_i_concepts` DISABLE KEYS */;

INSERT INTO `a_p_i_concepts` (`id`, `user_id`, `project_id`)
VALUES
	(32,3,7239677),
	(34,3,8237825),
	(35,3,8375313),
	(36,3,9049137),
	(37,6,8411689),
	(38,6,8977355),
	(39,6,9422373),
	(40,6,8881451),
	(45,3,9360909),
	(46,3,9484185),
	(48,3,8442055),
	(49,7,8429937),
	(50,7,9389725),
	(51,7,9383783);

/*!40000 ALTER TABLE `a_p_i_concepts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `picture` varchar(300) DEFAULT NULL,
  `bio` varchar(300) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`, `firstname`, `lastname`, `email`, `picture`, `bio`, `birthdate`, `location`)
VALUES
	(3,'thomas','121199211e4fdc5a98c023418711797350fd8a52','2013-06-21 05:33:31','2013-06-27 01:44:21','Thomas','Hergenreter','vdfs@gmail.com','','This is my Bio','1988-06-14','Denver, Colorado'),
	(6,'JohnDoe','121199211e4fdc5a98c023418711797350fd8a52','2013-06-27 01:51:01','2013-06-27 01:52:42','John','Doe','johndoe@madeup.io','','My name is John Doe. This is a generic bio.','1986-05-21','New York City, New York'),
	(7,'JaneDoe','121199211e4fdc5a98c023418711797350fd8a52','2013-06-27 01:51:31','2013-06-27 01:51:31','Jane','Doe','janedoe@madeup.io',NULL,'This is Jane Does bio','1986-09-17','San Fransico, CA');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
