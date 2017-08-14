/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.17-log : Database - jonjud8
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jonjud8` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `jonjud8`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` char(50) DEFAULT NULL,
  `lname` char(50) DEFAULT NULL,
  `address` char(50) DEFAULT NULL,
  `bday` char(50) DEFAULT NULL,
  `contact` char(50) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `username` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`id`,`fname`,`lname`,`address`,`bday`,`contact`,`gender`,`username`,`password`,`isAdmin`) values (10,'test','test','test','test','test','Male','test1','test',1),(11,'alex','test','test','test','test','Male','test2','test',0);

/*Table structure for table `creservation` */

DROP TABLE IF EXISTS `creservation`;

CREATE TABLE `creservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rService` char(50) DEFAULT NULL,
  `rStaff` char(50) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `date` char(50) DEFAULT NULL,
  `time` char(50) DEFAULT NULL,
  `rStatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `creservation` */

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rService` char(50) DEFAULT NULL,
  `rStaff` char(50) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `date` char(50) DEFAULT NULL,
  `time` char(50) DEFAULT NULL,
  `rStatus` int(11) DEFAULT '0',
  `datetime` datetime DEFAULT NULL,
  `rStartTime` datetime DEFAULT NULL,
  `rEndTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

/*Data for the table `reservation` */

insert  into `reservation`(`id`,`rService`,`rStaff`,`username`,`date`,`time`,`rStatus`,`datetime`,`rStartTime`,`rEndTime`) values (59,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-29','05:20',0,'2017-08-29 05:20:00',NULL,NULL),(64,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-16','01:42',0,'2017-08-16 01:42:00',NULL,NULL),(65,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-16','01:42',0,'2017-08-16 00:00:00',NULL,NULL),(69,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-24','01:51',0,'2017-08-24 01:51:00',NULL,NULL),(70,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-24','01:51',0,'2017-08-24 00:00:00',NULL,NULL),(74,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-15','00:30',0,'2017-08-15 00:30:00',NULL,NULL),(79,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-15','19:30',0,'2017-08-15 19:30:00',NULL,NULL),(84,'Women\'s Haircut','JR Valenzuela','test2','2017-08-15','00:36',0,'2017-08-15 00:36:00',NULL,NULL),(89,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-28','21:45',0,'2017-08-28 21:45:00',NULL,NULL),(94,'Blow Dry and Styling','Joel Valenzuela','test2','2017-08-15','22:10',0,'2017-08-15 22:10:00',NULL,NULL),(99,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-15','22:20',0,'2017-08-15 22:20:00',NULL,NULL),(104,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-15','19:40',0,'2017-08-15 19:40:00',NULL,NULL),(109,'Women\'s Haircut','JR Valenzuela','test2','2017-08-27','21:11',0,'2017-08-27 21:11:00',NULL,NULL),(114,'Men\'s Haircut','JR Valenzuela','test2','2017-08-29','10:15',0,'2017-08-29 10:15:00',NULL,NULL),(119,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-29','22:25',0,'2017-08-29 22:25:00',NULL,NULL);

/*Table structure for table `site_services` */

DROP TABLE IF EXISTS `site_services`;

CREATE TABLE `site_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sService` char(50) DEFAULT NULL,
  `sPrice` int(10) DEFAULT NULL,
  `sCategory` char(50) DEFAULT NULL,
  `sHour` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `site_services` */

insert  into `site_services`(`id`,`sService`,`sPrice`,`sCategory`,`sHour`) values (1,'Women\'s Haircut',70,'Basic Hair Services','1 hour'),(2,'Blow Dry and Styling',100,'Basic Hair Services','1 hour'),(3,'Men\'s Haircut',70,'Basic Hair Services','1 hour'),(4,'Hair Color',300,'Special Services','1 hour'),(5,'Rebond',800,'Special Services','1 hour'),(6,'Relax',500,'Special Services','1 hour'),(7,'Brazilian',1000,'Special Services','1 hour'),(8,'Hair and Make-up',700,'Special Services','1 hour'),(9,'Manicure',50,'Nails Services','1 hour'),(10,'Pedicure',50,'Nails Services','1 hour'),(11,'Nail Art',30,'Nails Services','1 hour'),(12,'Test',80,'Special Services',NULL);

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staffName` char(30) DEFAULT NULL,
  `staffAvail` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `staff` */

insert  into `staff`(`id`,`staffName`,`staffAvail`) values (1,'Joel Valenzuela',0),(2,'JR Valenzuela',0),(3,'Colleen Jean Parotcha',0),(4,'Jerry Valenzuela',0),(5,'Jocelyn Valenzuela',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
