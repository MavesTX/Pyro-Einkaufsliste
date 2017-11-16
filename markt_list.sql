/*
Navicat MySQL Data Transfer

Source Server         : DB
Source Server Version : 50636
Source Host           : nosmania.lima-db.de:3306
Source Database       : db_370046_1

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2017-11-16 18:07:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for markt_list
-- ----------------------------
DROP TABLE IF EXISTS `markt_list`;
CREATE TABLE `markt_list` (
  `markt_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `ort` varchar(255) NOT NULL,
  `prospekt_url` varchar(255) NOT NULL,
  PRIMARY KEY (`markt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of markt_list
-- ----------------------------
INSERT INTO `markt_list` VALUES ('1', 'Lidl', 'Berlin', '');
INSERT INTO `markt_list` VALUES ('2', 'Kaufland', 'Berlin', '');
INSERT INTO `markt_list` VALUES ('3', 'Aldi', 'Berlin', '');
INSERT INTO `markt_list` VALUES ('4', 'Penny', 'Berlin', '');
INSERT INTO `markt_list` VALUES ('5', 'Müller', 'Berlin', '');
INSERT INTO `markt_list` VALUES ('6', 'Thomas Philipps', 'Berlin', '');
INSERT INTO `markt_list` VALUES ('7', 'Netto Marken Discount', 'Berlin', '');
