/*
Navicat MySQL Data Transfer

Source Server         : DB
Source Server Version : 50636
Source Host           : nosmania.lima-db.de:3306
Source Database       : db_370046_1

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2017-11-15 22:04:22
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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of einkaufsliste
-- ----------------------------
INSERT INTO `einkaufsliste` VALUES ('1', 'Black Ice', '2', '16.99', 'LIDL');
INSERT INTO `einkaufsliste` VALUES ('2', 'Aligator', '5', '3.99', 'LIDL');
INSERT INTO `einkaufsliste` VALUES ('3', 'Angry Wolf', '3', '24.99', 'KAUFLAND');
INSERT INTO `einkaufsliste` VALUES ('4', 'Großer Kanonenschlag', '11', '1.99', 'KAUFLAND');
INSERT INTO `einkaufsliste` VALUES ('5', 'Power Tower', '1', '17.99', 'NORMA');
INSERT INTO `einkaufsliste` VALUES ('6', 'Champ Edition', '3', '9.99', 'NORMA');
INSERT INTO `einkaufsliste` VALUES ('7', 'King of Colour', '2', '10.99', 'PENNY');
INSERT INTO `einkaufsliste` VALUES ('8', 'Hip Hop Dancer', '5', '2.99', 'PENNY');
INSERT INTO `einkaufsliste` VALUES ('9', 'Guardian', '2', '8.99', 'ALDI');
INSERT INTO `einkaufsliste` VALUES ('10', 'Sword of Fire', '4', '18.99', 'ALDI');
INSERT INTO `einkaufsliste` VALUES ('11', 'Götterfunken', '2', '14.98', 'ROTER_NETTO');
INSERT INTO `einkaufsliste` VALUES ('12', 'Imperator', '3', '19.98', 'ROTER_NETTO');
INSERT INTO `einkaufsliste` VALUES ('13', 'Escape', '3', '13.99', 'THOMAS_PHILIPPS');
INSERT INTO `einkaufsliste` VALUES ('14', 'Space Ship One', '1', '8.88', 'THOMAS_PHILIPPS');
INSERT INTO `einkaufsliste` VALUES ('15', 'Flying Arrows', '3', '12.99', 'MUELLER');
INSERT INTO `einkaufsliste` VALUES ('16', 'Turbe Tube', '2', '9.99', 'MUELLER');
