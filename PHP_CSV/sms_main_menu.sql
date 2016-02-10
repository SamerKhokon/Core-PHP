/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.17 : Database - sms_admin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sms_admin` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sms_admin`;

/*Table structure for table `sms_main_menu` */

DROP TABLE IF EXISTS `sms_main_menu`;

CREATE TABLE `sms_main_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `page` varchar(250) NOT NULL,
  `ordering` int(11) NOT NULL,
  `publish` varchar(5) NOT NULL DEFAULT 'YES',
  `is_sub_menu` int(11) NOT NULL DEFAULT '1',
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `sms_main_menu` */

insert  into `sms_main_menu`(`id`,`title`,`page`,`ordering`,`publish`,`is_sub_menu`,`creation_date`) values (1,'menuA','',1,'YES',1,'2014-09-26 18:55:25');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
