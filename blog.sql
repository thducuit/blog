/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-23 06:44:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for apartments
-- ----------------------------
DROP TABLE IF EXISTS `apartments`;
CREATE TABLE `apartments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of apartments
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for rent_aparts
-- ----------------------------
DROP TABLE IF EXISTS `rent_aparts`;
CREATE TABLE `rent_aparts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `acreage` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `direction` varchar(100) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `gallery` longtext,
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `rent_time` varchar(255) DEFAULT NULL,
  `furniture` text,
  `util` text,
  `feature` text,
  `des_pos` text,
  `des_feature` text,
  `people` text,
  `edu` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rent_aparts
-- ----------------------------
INSERT INTO `rent_aparts` VALUES ('1', 'aaa1', '2', '0', '', null, null, null, null, null, null, null, null, '/uploads/photos/Jellyfish.jpg', '[{\"src\":\"/uploads/photos/Jellyfish.jpg\",\"des\":\"\"}]', '0', '0', '', null, null, '', '', '', '', '');

-- ----------------------------
-- Table structure for rent_apart_cats
-- ----------------------------
DROP TABLE IF EXISTS `rent_apart_cats`;
CREATE TABLE `rent_apart_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rent_apart_cats
-- ----------------------------

-- ----------------------------
-- Table structure for sell_aparts
-- ----------------------------
DROP TABLE IF EXISTS `sell_aparts`;
CREATE TABLE `sell_aparts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `acreage` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `direction` varchar(100) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `gallery` longtext,
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `rent_time` varchar(255) DEFAULT NULL,
  `furniture` text,
  `util` text,
  `feature` text,
  `des_pos` text,
  `des_feature` text,
  `people` text,
  `edu` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sell_aparts
-- ----------------------------
INSERT INTO `sell_aparts` VALUES ('1', 'aaa1', '2', '0', '', null, null, null, null, null, null, null, null, '/uploads/photos/Jellyfish.jpg', '[{\"src\":\"/uploads/photos/Jellyfish.jpg\",\"des\":\"\"}]', '0', '0', '', null, null, '', '', '', '', '');
INSERT INTO `sell_aparts` VALUES ('3', 'aaabbb', '0', '0', '', null, null, null, null, null, null, null, null, '/uploads/photos/Penguins.jpg', '[{\"src\":\"/uploads/photos/Penguins.jpg\",\"des\":\"\"}]', '0', '0', '', '[\"2\",\"3\"]', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Duc Nguyen', 'thducuit@gmail.com', '$2y$10$e1IsnzvGWqyHyz6/VRaO0.exBTR9gwROeixi/DpGBUNHM0DWpYlHy', 'AYUhguR7rNgk1SVlBY8EljlQeDPewftyidlR1YoL6vdzc4ZHIjg5Rh3OvtXh', '2019-04-22 16:01:30', '2019-04-22 16:06:48');
