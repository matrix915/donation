/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.11-MariaDB : Database - donation_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`donation_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `donation_db`;

/*Data for the table `profile` */

insert  into `profile`(`p_id`,`p_image`,`p_textarea`,`user_key`) values 
(1,NULL,NULL,NULL);

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_image`,`user_name`,`user_email`,`user_pass`,`text_area`,`paypal`,`withdraw`) values 
(56,'Screenshot_5.png','test','test@test.com','6e35f8a4380b5fbadc37de56f374bf56','Thanks for your donation','',70),
(57,'YTokA-exLaA.jpg','aaa','aaa@aaa.com','47bce5c74f589f4867dbd57e9ca9f808','Thanks for your donation',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
