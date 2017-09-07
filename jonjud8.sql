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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`id`,`fname`,`lname`,`address`,`bday`,`contact`,`gender`,`username`,`password`,`isAdmin`) values (10,'test','test','test','test','test','Male','test1','test',1),(11,'alex','test','test','test','test','Male','test2','test',0),(12,'eca','balucio','dasma','01/01/1998','09123456789','Male','eca','test',0);

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
  `rStartTime` datetime DEFAULT NULL,
  `rEndTime` datetime DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `companion` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

/*Data for the table `creservation` */

insert  into `creservation`(`id`,`rService`,`rStaff`,`username`,`date`,`time`,`rStatus`,`rStartTime`,`rEndTime`,`duration`,`companion`) values (4,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-29','05:20',NULL,NULL,NULL,NULL,NULL),(5,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-16','01:42',NULL,NULL,NULL,NULL,NULL),(6,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-16','01:42',NULL,NULL,NULL,NULL,NULL),(7,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-24','01:51',NULL,NULL,NULL,NULL,NULL),(8,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-24','01:51',NULL,NULL,NULL,NULL,NULL),(9,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-15','00:30',NULL,NULL,NULL,NULL,NULL),(12,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-15','19:30',NULL,NULL,NULL,NULL,NULL),(13,'Women\'s Haircut','JR Valenzuela','test2','2017-08-15','00:36',NULL,NULL,NULL,NULL,NULL),(15,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-28','21:45',NULL,NULL,NULL,NULL,NULL),(17,'Blow Dry and Styling','Joel Valenzuela','test2','2017-08-15','22:10',NULL,NULL,NULL,NULL,NULL),(18,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-15','22:20',NULL,NULL,NULL,NULL,NULL),(19,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-15','19:40',NULL,NULL,NULL,NULL,NULL),(22,'Women\'s Haircut','JR Valenzuela','test2','2017-08-27','21:11',NULL,NULL,NULL,NULL,NULL),(23,'Men\'s Haircut','JR Valenzuela','test2','2017-08-29','10:15',NULL,NULL,NULL,NULL,NULL),(24,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-29','22:25',NULL,NULL,NULL,NULL,NULL),(25,'Women\'s Haircut','Joel Valenzuela','test2','','14:30',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `custmessages` */

DROP TABLE IF EXISTS `custmessages`;

CREATE TABLE `custmessages` (
  `messID` int(11) NOT NULL AUTO_INCREMENT,
  `custAddress` varchar(999) DEFAULT NULL COMMENT 'Customer''s Address',
  `custName` varchar(999) DEFAULT NULL COMMENT 'Customer''s Name',
  `custMessage` varchar(999) DEFAULT NULL COMMENT 'Customer''s Message',
  PRIMARY KEY (`messID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `custmessages` */

insert  into `custmessages`(`messID`,`custAddress`,`custName`,`custMessage`) values (1,NULL,'test2',NULL),(2,NULL,'test2',NULL);

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
  `duration` time DEFAULT NULL,
  `companion` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=236 DEFAULT CHARSET=utf8;

/*Data for the table `reservation` */

insert  into `reservation`(`id`,`rService`,`rStaff`,`username`,`date`,`time`,`rStatus`,`datetime`,`rStartTime`,`rEndTime`,`duration`,`companion`) values (129,'Women\'s Haircut','JR Valenzuela','test2','2017-08-16','15:20',1,'2017-08-16 15:20:00',NULL,NULL,NULL,NULL),(134,'Women\'s Haircut','Joel Valenzuela','test2','2017-08-16','14:30',1,'2017-08-16 14:30:00',NULL,NULL,NULL,NULL),(139,'Men\'s Haircut','Joel Valenzuela','test2','2017-08-16','15:30',1,'2017-08-16 15:30:00',NULL,NULL,NULL,NULL),(144,'Blow Dry and Styling','Joel Valenzuela','test2','2017-08-17','15:15',0,'2017-08-17 15:15:00',NULL,NULL,NULL,NULL),(145,'Women\'s Haircut','Any Staff','test2','2017-08-17','15:15',0,'2017-08-17 15:15:00',NULL,NULL,NULL,NULL),(149,'Hair Color','Jerry Valenzuela','test2','2017-08-18','15:00',0,'2017-08-18 15:00:00',NULL,NULL,NULL,NULL),(150,'Women\'s Haircut','Jerry Valenzuela','test2','2017-08-18','15:00',0,'2017-08-18 15:00:00',NULL,NULL,NULL,NULL),(151,'Men\'s Haircut','Any Staff','test2','2017-08-18','15:00',0,'2017-08-18 15:00:00',NULL,NULL,NULL,NULL),(152,'Rebond','Any Staff','test2','2017-08-18','15:00',0,'2017-08-18 15:00:00',NULL,NULL,NULL,NULL),(154,'Men\'s Haircut','Jerry Valenzuela','eca','2017-08-18','16:00',0,'2017-08-18 16:00:00',NULL,NULL,NULL,NULL),(155,'Rebond','Joel Valenzuela','test2','2017-09-07','09:45',0,'2017-09-07 10:45:00',NULL,NULL,'00:30:00',NULL),(156,'Rebond','Any Staff','test2','2017-09-07','09:45',0,NULL,NULL,NULL,'00:30:00',NULL),(160,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-21','13:05',0,NULL,NULL,NULL,NULL,NULL),(165,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-21','13:05',0,NULL,NULL,NULL,NULL,NULL),(170,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-04','15:45',0,NULL,NULL,NULL,NULL,NULL),(175,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-04','15:45',0,NULL,NULL,NULL,NULL,NULL),(180,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-04','15:45',0,'2017-09-04 16:45:00',NULL,NULL,'00:30:00',NULL),(185,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-29','09:15',0,NULL,NULL,NULL,NULL,NULL),(186,'Women\'s Haircut','Any Staff','test2','2017-09-29','09:15',0,NULL,NULL,NULL,NULL,NULL),(190,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-29','09:15',0,'0000-00-00 00:00:00',NULL,NULL,'00:00:00',NULL),(191,'Women\'s Haircut','Any Staff','test2','2017-09-29','09:15',0,'0000-00-00 00:00:00',NULL,NULL,'00:00:00',NULL),(195,'Women\'s Haircut','Any Staff','test2','2017-09-15','10:55',0,NULL,NULL,NULL,NULL,NULL),(196,'Women\'s Haircut','Any Staff','test2','2017-09-15','10:55',0,NULL,NULL,NULL,NULL,NULL),(200,'Rebond','Any Staff','test2','2017-09-21','10:55',0,'2017-09-21 11:55:00',NULL,NULL,'00:30:00',NULL),(201,'Rebond','Any Staff','test2','2017-09-21','10:55',0,NULL,NULL,NULL,'00:30:00',NULL),(205,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-26','10:00',0,'2017-09-26 10:00:00',NULL,NULL,NULL,NULL),(210,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-28','12:00',0,'2017-09-28 12:00:00','2017-09-28 12:00:00','2017-09-28 13:00:00','00:30:00',NULL),(215,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-25','12:00',0,'2017-09-25 12:00:00','2017-09-25 12:00:00','2017-09-25 13:00:00','02:30:00',NULL),(220,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-20','12:00',0,'2017-09-20 12:00:00','2017-09-20 12:00:00','2017-09-20 11:00:00','00:30:00',NULL),(225,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-17','12:00',0,'2017-09-17 12:00:00','2017-09-17 12:00:00','2017-09-17 11:00:00','00:30:00',NULL),(230,'Women\'s Haircut','Joel Valenzuela','test2','2017-09-29','12:00',0,'2017-09-29 12:00:00','2017-09-29 12:00:00','2017-09-29 13:00:00','01:00:00',NULL),(231,'Women\'s Haircut','Any Staff','test2','2017-09-28','11:00',0,'2017-09-28 11:00:00','2017-09-28 11:00:00','2017-09-28 12:00:00','01:00:00','None');

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

insert  into `site_services`(`id`,`sService`,`sPrice`,`sCategory`,`sHour`) values (1,'Women\'s Haircut',70,'Basic Hair Services','1 hour'),(2,'Blow Dry and Styling',100,'Basic Hair Services','1 hour'),(3,'Men\'s Haircut',70,'Basic Hair Services','1 hour'),(4,'Hair Color',300,'Special Services','3 hours'),(5,'Rebond',800,'Special Services','6 hours'),(6,'Relax',500,'Special Services','4 hours'),(7,'Brazilian',1000,'Special Services','6 hours'),(8,'Hair and Make-up',700,'Special Services','2 hours'),(9,'Manicure',50,'Nails Services','1 hour'),(10,'Pedicure',50,'Nails Services','1 hour'),(11,'Nail Art',30,'Nails Services','1 hour'),(12,'Test',80,'Special Services',NULL);

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
