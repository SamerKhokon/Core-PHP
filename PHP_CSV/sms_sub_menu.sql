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

/*Table structure for table `sms_sub_menu` */

DROP TABLE IF EXISTS `sms_sub_menu`;

CREATE TABLE `sms_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `page` varchar(250) DEFAULT NULL,
  `main_menu_id` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `publish` varchar(5) DEFAULT 'YES',
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `sms_sub_menu` */

insert  into `sms_sub_menu`(`id`,`title`,`page`,`main_menu_id`,`ordering`,`publish`,`creation_date`) values (5,'Post Article','post_content',1,4,'YES','2014-09-26 21:19:32'),(6,'Dashboard','main_content',1,1,'YES','2014-09-26 21:19:32'),(7,'Post Add','addvertisement_content',1,5,'YES','2014-09-26 21:19:32');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
