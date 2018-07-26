/*
SQLyog Community v11.52 (64 bit)
MySQL - 5.6.39-cll-lve : Database - nutrionics
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nutrionics` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nutrionics`;

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` text,
  `status` int(10) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`id`,`name`,`email`,`message`,`status`,`createdat`) values (1,'bhavya','renu@gmail.com','db',0,'2018-07-20 01:43:27'),(2,'','','',0,'2018-07-20 02:13:04'),(3,'vbxcvb','vbxcvb@gmail.com','vcbxcvbvbxcv',0,'2018-07-20 03:13:58'),(4,'vbxcvb','inventory@gmail.com','fgsdfg',0,'2018-07-20 03:21:30'),(5,'vani','renu@gmail.com','dfg',0,'2018-07-20 04:12:16'),(6,'bhavya','vasu@gmail.com','wert',0,'2018-07-20 04:14:23'),(7,'bhavya','renu@gmail.com','fgvhbj',0,'2018-07-20 04:15:28'),(8,'vani','vasu@gmail.com','asdfgh',0,'2018-07-20 04:17:17'),(9,'fgdfg','vasu@gmail.com','fgsdf',0,'2018-07-20 04:28:32'),(10,'bhavya','renu@gmail.com','asdfg',0,'2018-07-20 04:31:05'),(11,'renu','sss@gmail.com','sdfgh',0,'2018-07-20 05:03:40'),(12,'vikas','sss@gmail.com','zxdcfg',0,'2018-07-20 05:17:25'),(13,'mani','sss@gmail.com','cvghjkj',0,'2018-07-20 05:18:19'),(14,'bhavya','aa@gmail.com','qqqq',1,'2018-07-20 05:22:20'),(15,'bhavya','reddy.bhavya97@gmail.com','erfdgfhgnmn,',1,'2018-07-20 22:46:02'),(16,'bhavya','banuribhavya97@gmail.com','aaaaaaaaaaaaaaaaaa',1,'2018-07-20 23:54:28'),(17,'qqqqq','reddy.bhavya97@gmail.com','qqqqqqqqqqqqqqqqqqqqq',1,'2018-07-21 00:23:54'),(18,'sdcxf','renu@gmail.com','dfgbhn',0,'2018-07-21 00:26:51'),(19,'qwerty','reddy.bhavya97@gmail.com','qwertyuuu',1,'2018-07-21 00:32:23'),(20,'vani','renu@gmail.com','sdsfg',0,'2018-07-21 00:48:00'),(21,'mani','sss@gmail.com','cvbn,',0,'2018-07-21 00:50:12'),(22,'bhavya','reddy.bhavya97@gmail.com','sdvb,m',1,'2018-07-21 03:12:43'),(23,'vani','vasu@gmail.com','sdfb',0,'2018-07-21 03:32:54'),(24,'bhavya','reddy.bhavya97@gmail.com','asdfvgb ',1,'2018-07-21 03:37:27'),(25,'sdf','vasudevareddy549@gmail.com','qqqqqq',1,'2018-07-21 03:54:51');

/*Table structure for table `subscribe` */

DROP TABLE IF EXISTS `subscribe`;

CREATE TABLE `subscribe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mail` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `subscribe` */

insert  into `subscribe`(`id`,`mail`) values (1,'fghhjk'),(2,'aaa'),(3,'fghj'),(4,'sdrfg'),(5,'asdfASDF'),(6,'fghj'),(7,'fghhjk'),(8,'asdftgh'),(9,'fghj'),(10,'bb@gmail.com'),(11,'aa@gmail.com'),(12,'aa@gmail.com'),(13,'renu@gmail.com'),(14,'aa@gmail.com'),(15,'dfsd@gmail.com'),(16,'testin@gmail.com'),(17,'sdrfg@gmail.com'),(18,'zxcxvgbhnm@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
