/*
Navicat MySQL Data Transfer

Source Server         : DB
Source Server Version : 50636
Source Host           : nosmania.lima-db.de:3306
Source Database       : db_370046_1

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2017-11-15 21:36:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for einkaufsliste
-- ----------------------------
DROP TABLE IF EXISTS `einkaufsliste`;
CREATE TABLE `einkaufsliste` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `anzahl` varchar(255) NOT NULL,
  `preis` varchar(255) NOT NULL,
  `markt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of einkaufsliste
-- ----------------------------
INSERT INTO `einkaufsliste` VALUES ('1', 'Black Ice', '2', '16.99', 'LIDL');
INSERT INTO `einkaufsliste` VALUES ('2', 'Aligator', '5', '3.99', 'LIDL');
INSERT INTO `einkaufsliste` VALUES ('3', 'Angry Wolf', '3', '24.99', 'KAUFLAND');
INSERT INTO `einkaufsliste` VALUES ('4', 'Großer Kanonenschlag', '11', '1.99', 'KAUFLAND');
INSERT INTO `einkaufsliste` VALUES ('5', 'Power Tower', '1', '17.99', 'NORMA');
INSERT INTO `einkaufsliste` VALUES ('6', 'Champ Edition', '3', '9.99', 'NORMA');
