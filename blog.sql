/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-22 07:16:56
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rent_aparts
-- ----------------------------
INSERT INTO `rent_aparts` VALUES ('1', 'aaa1', '2', '0', '', null, null, null, null, null, null, null, null, '/uploads/photos/Jellyfish.jpg', '[{\"src\":\"/uploads/photos/Jellyfish.jpg\",\"des\":\"\"}]');

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
