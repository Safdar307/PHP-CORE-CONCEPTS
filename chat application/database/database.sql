/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - b14_42314337_group_chat_application
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`b14_42314337_group_chat_application` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `b14_42314337_group_chat_application`;

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `sent_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`chat_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `chat` */

insert  into `chat`(`chat_id`,`message`,`user_id`,`sent_on`) values 
(15,'Hi',6,'1782945021'),
(16,'Hello',6,'1782946966'),
(17,'Hi, How are you?',7,'1782946997'),
(18,'hi',8,'1782947414'),
(19,'im fine what about you',8,'1782948315');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_picture` varchar(500) DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT 0,
  `last_seen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`user_id`,`first_name`,`last_name`,`email`,`password`,`profile_picture`,`is_online`,`last_seen`) values 
(6,'Safdar','Ali','safdar@gmail.com','123456','1.png',0,'1782948504'),
(7,'Ahmed','Ali','ahmed@gmail.com','123456','2.png',0,'1782947276'),
(8,'shahbaz','Ahmed','shahbaz@gmail.com','123456','3.png',0,'1782948325');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
