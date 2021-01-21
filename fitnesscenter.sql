-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for fitnesscenter
CREATE DATABASE IF NOT EXISTS `fitnesscenter` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fitnesscenter`;

-- Dumping structure for table fitnesscenter.administration
CREATE TABLE IF NOT EXISTS `administration` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.administration: ~1 rows (approximately)
/*!40000 ALTER TABLE `administration` DISABLE KEYS */;
INSERT INTO `administration` (`admin_id`, `admin_name`, `admin_password`) VALUES
	(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
/*!40000 ALTER TABLE `administration` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_title` varchar(50) NOT NULL,
  `category_img` varchar(255) NOT NULL,
  PRIMARY KEY (`category_title`),
  UNIQUE KEY `Index 2` (`category_title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.category: ~4 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_title`, `category_img`) VALUES
	('aerobic', 'aerobic.jpg'),
	('fitness', 'yoga.jpg'),
	('pilates', 'pilates.jpg'),
	('yoga', 'yoga.jpg');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.contact: ~8 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`contact_id`, `first_name`, `last_name`, `message`) VALUES
	(4, 'Nikola', 'Petreski', 'hey there'),
	(5, 'Ivana', 'Petreska', 'hello'),
	(11, 'Emilija', 'Aceska', 'Hey'),
	(12, 'Nikola', 'Dimoski', 'hey hey'),
	(14, 'Emilija', 'Aceska', 'hey'),
	(15, 'Emilija', 'Petreski', 'hh'),
	(16, 'Nikola', 'Dimoski', 'jj'),
	(17, 'Petar', 'Naumoski', 'hello');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.instructors
CREATE TABLE IF NOT EXISTS `instructors` (
  `instructor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `category_title` varchar(50) NOT NULL,
  PRIMARY KEY (`instructor_id`),
  KEY `FK_instructors_category` (`category_title`),
  CONSTRAINT `FK_instructors_category` FOREIGN KEY (`category_title`) REFERENCES `category` (`category_title`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.instructors: ~7 rows (approximately)
/*!40000 ALTER TABLE `instructors` DISABLE KEYS */;
INSERT INTO `instructors` (`instructor_id`, `first_name`, `last_name`, `category_title`) VALUES
	(6, 'Emilija', 'Aceska', 'pilates'),
	(7, 'Emilija', 'Aceska', 'fitness'),
	(9, 'Nikola', 'Dimoski', 'aerobic'),
	(10, 'Nikola', 'Dimoski', 'fitness'),
	(11, 'Emilija', 'Dimoski', 'yoga'),
	(13, 'Nikola', 'Dimoski', 'fitness'),
	(14, 'Emilija', 'Aceska', 'pilates');
/*!40000 ALTER TABLE `instructors` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.members
CREATE TABLE IF NOT EXISTS `members` (
  `members_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` char(50) DEFAULT NULL,
  `l_name` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `phone_number` int(15) unsigned NOT NULL,
  PRIMARY KEY (`members_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.members: ~6 rows (approximately)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`members_id`, `f_name`, `l_name`, `email`, `phone_number`) VALUES
	(6, 'Emm', 'Aceska', 'ema@ema', 123456),
	(10, 'Marta', 'Hristoska', 'marta@marta', 11223344),
	(11, 'Petar', 'Dimoski', 'petar@petar', 75778899),
	(31, 'Ivana', 'Naumoski', 'ivana@ivana', 1758945623),
	(33, 'Emilija', 'petreska', 'ema@em', 4294967295),
	(35, 'Hristijan', 'Naumoski', 'hristijan@hristijan', 123456977);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `notification_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notification_title` char(30) NOT NULL,
  `notification_content` varchar(255) NOT NULL,
  `members_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`notification_id`),
  KEY `FK_notifications_members` (`members_id`),
  CONSTRAINT `FK_notifications_members` FOREIGN KEY (`members_id`) REFERENCES `members` (`members_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.notifications: ~5 rows (approximately)
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` (`notification_id`, `notification_title`, `notification_content`, `members_id`) VALUES
	(10, 'notification', 'message text', 10),
	(11, 'schedule', 'Hello Petar, You have new schedule!', 11),
	(13, 'notification', 'text text text', 11),
	(15, 'notification', 'text text text', 11),
	(16, 'notification', 'text text text', 35);
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `order_method` enum('CASH','TRANSACTION') NOT NULL DEFAULT 'CASH',
  `card_number` int(15) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`order_id`),
  KEY `FK_orders_products` (`product_id`),
  CONSTRAINT `FK_orders_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.orders: ~11 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`order_id`, `first_name`, `last_name`, `order_method`, `card_number`, `product_id`, `date_time`) VALUES
	(57, 'Nikola', 'Dimoski', 'CASH', 2147483647, 32, '2021-01-10 15:44:29'),
	(58, 'Nikola', 'Dimoski', 'CASH', 2147483647, 32, '2021-01-10 15:47:04'),
	(61, 'Petar', 'Dimoski', 'TRANSACTION', 2147483647, 32, '2021-01-10 15:53:29'),
	(62, 'Ivana', 'Petreska', 'TRANSACTION', 2147483647, 32, '2021-01-10 15:54:17'),
	(63, 'Emilija', 'Aceska', 'TRANSACTION', 2147483647, 32, '2021-01-11 17:11:28'),
	(64, 'Emilija', 'Aceska', 'TRANSACTION', 2147483647, 32, '2021-01-12 17:12:20'),
	(65, 'Petar', 'Dimoski', 'TRANSACTION', 2147483647, 34, '2021-01-12 17:12:35'),
	(66, 'Emilija', 'Aceska', 'TRANSACTION', 2147483647, 42, '2021-01-21 10:28:43'),
	(67, 'Nikola', 'Dimoski', 'TRANSACTION', 2147483647, 32, '2021-01-21 10:31:44'),
	(69, 'Emilija', 'Dimoski', 'CASH', 2147483647, 36, '2021-01-21 11:10:33'),
	(70, 'Nikola', 'Dimoski', 'CASH', 2147483647, 34, '2021-01-21 11:12:45');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.payment
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `members_id` int(10) unsigned NOT NULL,
  `payment_status` enum('PAID','NOTPAID') NOT NULL DEFAULT 'NOTPAID',
  `payment_date` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`payment_id`),
  KEY `FK_payment_products` (`product_id`),
  KEY `FK_payment_members` (`members_id`),
  CONSTRAINT `FK_payment_members` FOREIGN KEY (`members_id`) REFERENCES `members` (`members_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_payment_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.payment: ~2 rows (approximately)
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` (`payment_id`, `product_id`, `members_id`, `payment_status`, `payment_date`) VALUES
	(19, 32, 11, 'PAID', '2020-12-16'),
	(20, 34, 6, 'NOTPAID', '2020-10-19');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_price` int(5) unsigned NOT NULL DEFAULT 1000,
  `category_title` varchar(50) DEFAULT NULL,
  `instructor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FK_products_category` (`category_title`),
  KEY `FK_products_instructors` (`instructor_id`),
  CONSTRAINT `FK_products_category` FOREIGN KEY (`category_title`) REFERENCES `category` (`category_title`) ON UPDATE CASCADE,
  CONSTRAINT `FK_products_instructors` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`instructor_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.products: ~7 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_price`, `category_title`, `instructor_id`) VALUES
	(32, 'pilates', 'description', 5000, 'pilates', 6),
	(34, 'aerobic', 'description', 5000, 'aerobic', 9),
	(36, 'pilates', 'description description', 5000, 'pilates', 6),
	(40, 'fitness', 'description', 1500, 'fitness', 7),
	(41, 'yoga', 'description', 1500, 'yoga', 11),
	(42, 'aerobic', 'description', 1500, 'aerobic', 9),
	(44, 'aerobic', 'description', 1500, 'aerobic', 9);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.products_gallery
CREATE TABLE IF NOT EXISTS `products_gallery` (
  `products_gallery_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_path` varchar(255) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`products_gallery_id`),
  KEY `FK__products` (`product_id`),
  CONSTRAINT `FK__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.products_gallery: ~3 rows (approximately)
/*!40000 ALTER TABLE `products_gallery` DISABLE KEYS */;
INSERT INTO `products_gallery` (`products_gallery_id`, `gallery_path`, `product_id`) VALUES
	(21, 'yoga.jpg', 34),
	(22, 'fitness.jpg', 40),
	(23, 'yoga.jpg', 41);
/*!40000 ALTER TABLE `products_gallery` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.registration
CREATE TABLE IF NOT EXISTS `registration` (
  `registration_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`registration_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.registration: ~5 rows (approximately)
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` (`registration_id`, `first_name`, `last_name`, `email`, `password`) VALUES
	(1, 'Emilija', 'Aceska', 'emi_aceska@hotmail.com', 'pass'),
	(2, 'Petar', 'Dimoski', 'petar_dimoski@yahoo.com', 'pet'),
	(3, 'em', 'em', 'em@em.com', 'password'),
	(4, 'Emilija', 'Aceska', 'ema@ema', 'ema'),
	(5, 'Emm', 'Aceska', 'emi@emi', 'pass');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.schedules
CREATE TABLE IF NOT EXISTS `schedules` (
  `schedules_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `workout_date` datetime NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `members_id` int(10) unsigned NOT NULL,
  `instructor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`schedules_id`),
  KEY `FK_schedules_products` (`product_id`),
  KEY `FK_schedules_members` (`members_id`),
  KEY `FK_schedules_instructors` (`instructor_id`),
  CONSTRAINT `FK_schedules_instructors` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`instructor_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_schedules_members` FOREIGN KEY (`members_id`) REFERENCES `members` (`members_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_schedules_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.schedules: ~4 rows (approximately)
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
INSERT INTO `schedules` (`schedules_id`, `workout_date`, `product_id`, `members_id`, `instructor_id`) VALUES
	(19, '2020-12-19 17:00:00', 32, 6, 6),
	(20, '2020-12-19 17:00:00', 34, 6, 11),
	(21, '2020-12-28 18:00:00', 32, 10, 7),
	(23, '2020-12-19 17:00:00', 42, 6, 6);
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;

-- Dumping structure for table fitnesscenter.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fitnesscenter.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
	(4, 'user', '12dea96fec20593566ab75692c9949596833adc9');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for procedure fitnesscenter._deleteCategory
DELIMITER //
CREATE PROCEDURE `_deleteCategory`(
	IN `pk_value` VARCHAR(50)
)
BEGIN
DELETE FROM category WHERE category_title=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteContact
DELIMITER //
CREATE PROCEDURE `_deleteContact`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM contact WHERE contact_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteInstructors
DELIMITER //
CREATE PROCEDURE `_deleteInstructors`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM instructors WHERE instructor_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteMembers
DELIMITER //
CREATE PROCEDURE `_deleteMembers`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM members WHERE members_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteNotifications
DELIMITER //
CREATE PROCEDURE `_deleteNotifications`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM notifications WHERE notification_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteOrders
DELIMITER //
CREATE PROCEDURE `_deleteOrders`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM orders WHERE order_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deletePayment
DELIMITER //
CREATE PROCEDURE `_deletePayment`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM payment WHERE payment_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteProducts
DELIMITER //
CREATE PROCEDURE `_deleteProducts`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM products WHERE product_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteProductsGallery
DELIMITER //
CREATE PROCEDURE `_deleteProductsGallery`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM products_gallery WHERE products_gallery_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._deleteSchedules
DELIMITER //
CREATE PROCEDURE `_deleteSchedules`(
	IN `pk_value` INT(10)
)
BEGIN
DELETE FROM schedules WHERE schedules_id=pk_value;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertAdministration
DELIMITER //
CREATE PROCEDURE `_insertAdministration`(
	IN `admin_id_new` INT(10),
	IN `admin_name_new` VARCHAR(255),
	IN `admin_password_new` VARCHAR(255)
)
BEGIN
INSERT INTO administration(admin_id,admin_name,admin_password)
VALUES(admin_id_new,admin_name_new,admin_password_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertCategory
DELIMITER //
CREATE PROCEDURE `_insertCategory`(
	IN `category_title_new` VARCHAR(50),
	IN `category_img_new` VARCHAR(255)
)
BEGIN
INSERT INTO category(category_title,category_img)
VALUES (category_title_new,category_img_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertContact
DELIMITER //
CREATE PROCEDURE `_insertContact`(
	IN `contact_id_new` INT(10),
	IN `first_name_new` CHAR(50),
	IN `last_name_new` CHAR(50),
	IN `message_new` VARCHAR(255)
)
BEGIN
INSERT INTO orders(contact_id,first_name,last_name,message)
VALUES (contact_id_new,first_name_new,last_name_new,message_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertInsctructors
DELIMITER //
CREATE PROCEDURE `_insertInsctructors`(
	IN `instructor_id_new` INT(10),
	IN `first_name_new` CHAR(50),
	IN `last_name_new` CHAR(50),
	IN `category_title_new` VARCHAR(50)
)
BEGIN
INSERT INTO instructors(instructor_id,first_name,last_name,category_title)
VALUES(instructor_id_new,first_name_new,last_name_new,category_title_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertMembers
DELIMITER //
CREATE PROCEDURE `_insertMembers`(
	IN `members_id_new` INT(10),
	IN `first_name_new` CHAR(50),
	IN `last_name_new` CHAR(50),
	IN `email_new` CHAR(50),
	IN `phone_number_new` INT(15)
)
BEGIN
INSERT INTO members(members_id,first_name,last_name,email,phone_number)
VALUES (members_id_new,first_name_new,last_name_new,email_new,phone_number_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertNotifications
DELIMITER //
CREATE PROCEDURE `_insertNotifications`(
	IN `notification_id_new` INT(10),
	IN `notification_title_new` CHAR(30),
	IN `notification_content_new` VARCHAR(255),
	IN `members_id_new` INT(10)
)
BEGIN
INSERT INTO notifications(notification_id,notification_title,notification_content,members_id)
VALUES (notification_id_new,notification_title_new,notification_content_new,members_id_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertOrders
DELIMITER //
CREATE PROCEDURE `_insertOrders`(
	IN `order_id_new` INT(10),
	IN `first_name_new` CHAR(50),
	IN `last_name_new` CHAR(50),
	IN `order_method_new` ENUM('CASH','TRANSACTION'),
	IN `product_id_new` INT(10)
)
BEGIN
INSERT INTO orders(order_id,first_name,last_name,order_method,product_id)
VALUES (order_id_new,first_name_new,last_name_new,order_method_new,product_id_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertPayment
DELIMITER //
CREATE PROCEDURE `_insertPayment`(
	IN `payment_id_new` INT(10),
	IN `product_id_new` INT(10),
	IN `members_id_new` INT(10),
	IN `payment_status_new` ENUM('PAID','NOTPAID'),
	IN `payment_date_new` DATE
)
BEGIN
INSERT INTO payment(payment_id,product_id,members_id,payment_status,payment_date)
VALUES (payment_id_new,product_id_new,members_id_new,payment_status_new,payment_date_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertProducts
DELIMITER //
CREATE PROCEDURE `_insertProducts`(
	IN `product_id_new` INT(10),
	IN `product_title_new` VARCHAR(255),
	IN `product_description_new` VARCHAR(255),
	IN `product_price_new` INT(5),
	IN `category_title_new` VARCHAR(50)
)
BEGIN
INSERT INTO products(product_id,product_title,product_description,product_price,category_title)
VALUES (product_id_new,product_title_new,product_description_new,product_price_new,category_title_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertProducts_dallery
DELIMITER //
CREATE PROCEDURE `_insertProducts_dallery`(
	IN `products_gallery_id_new` INT(10),
	IN `gallery_path_new` VARCHAR(255),
	IN `product_id_new` INT(10)
)
BEGIN
INSERT INTO products_gallery(products_gallery_id,gallery_path,product_id)
VALUES (products_gallery_id_new,gallery_path_new,product_id_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertRegistration
DELIMITER //
CREATE PROCEDURE `_insertRegistration`(
	IN `registration_id_new` INT(10),
	IN `first_name_new` VARCHAR(255),
	IN `last_name_new` VARCHAR(255),
	IN `email_new` VARCHAR(255),
	IN `password_new` VARCHAR(255)
)
BEGIN
INSERT INTO registration(registration_id,first_name,last_name,email,password)
VALUES(registration_id_new,first_name_new,last_name_new,email_new,password_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertSchedules
DELIMITER //
CREATE PROCEDURE `_insertSchedules`(
	IN `schedules_id_new` INT(10),
	IN `workout_date_new` DATETIME,
	IN `product_id_new` INT(10),
	IN `members_id` INT(10),
	IN `instructor_id_new` INT(10)
)
BEGIN
INSERT INTO schedules(schedules_id,workout_date,product_id,members_id,instructor_id)
VALUES (schedules_id_new,workout_date_new,product_id_new,members_id_new,instructor_id_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._insertUser
DELIMITER //
CREATE PROCEDURE `_insertUser`(
	IN `user_id_new` INT(10),
	IN `user_name_new` VARCHAR(255),
	IN `user_password_new` VARCHAR(255)
)
BEGIN
INSERT INTO users(user_id,user_name,user_password)
VALUES(user_id_new,user_name_new,user_password_new);
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectCategory
DELIMITER //
CREATE PROCEDURE `_selectCategory`()
BEGIN
SELECT * FROM category;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectContact
DELIMITER //
CREATE PROCEDURE `_selectContact`()
BEGIN
SELECT * FROM contact;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectInstructors
DELIMITER //
CREATE PROCEDURE `_selectInstructors`()
BEGIN
SELECT * FROM instructors 
INNER JOIN category 
ON instructors.category_title=category.category_title;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectMembers
DELIMITER //
CREATE PROCEDURE `_selectMembers`()
BEGIN
SELECT * FROM members;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectNotifications
DELIMITER //
CREATE PROCEDURE `_selectNotifications`()
BEGIN
SELECT * FROM notifications INNER JOIN members ON notifications.members_id=members.members_id;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectOrders
DELIMITER //
CREATE PROCEDURE `_selectOrders`()
BEGIN
SELECT * FROM orders INNER JOIN products ON orders.product_id=products.product_id;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectPayment
DELIMITER //
CREATE PROCEDURE `_selectPayment`()
BEGIN
SELECT * FROM payment 
INNER JOIN members ON payment.members_id=members.members_id 
INNER JOIN products ON payment.product_id=products.product_id;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectProducts
DELIMITER //
CREATE PROCEDURE `_selectProducts`()
BEGIN
SELECT * FROM products 
INNER JOIN category 
ON products.category_title=category.category_title
INNER JOIN instructors
ON products.instructor_id=instructors.instructor_id;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectProducts_gallery
DELIMITER //
CREATE PROCEDURE `_selectProducts_gallery`()
BEGIN
SELECT * FROM products_gallery INNER JOIN products ON products_gallery.product_id=products.product_id;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._selectSchedules
DELIMITER //
CREATE PROCEDURE `_selectSchedules`()
BEGIN
SELECT * FROM schedules
INNER JOIN members ON schedules.members_id=members.members_id
INNER JOIN products ON schedules.product_id=products.product_id
INNER JOIN instructors ON schedules.instructor_id=instructors.instructor_id;
END//
DELIMITER ;

-- Dumping structure for procedure fitnesscenter._updateMembers
DELIMITER //
CREATE PROCEDURE `_updateMembers`(
	IN `first_name_new` CHAR(50),
	IN `last_name_new` CHAR(50),
	IN `email_new` CHAR(50),
	IN `phone_number_new` INT(15),
	IN `pk_value` INT(10)
)
BEGIN
UPDATE members 
SET first_name=first_name_new,last_name=last_name_new,email=email_new,phone_number=phone_number_new 
WHERE members_id=pk_value;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
