/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : inventory

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-08-07 13:49:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `inventoryrecord`
-- ----------------------------
DROP TABLE IF EXISTS `inventoryrecord`;
CREATE TABLE `inventoryrecord` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(35) DEFAULT NULL,
  `description` varchar(35) DEFAULT NULL,
  `quantity` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inventoryrecord
-- ----------------------------
INSERT INTO `inventoryrecord` VALUES ('13', 'Mikee', 'shoes', '100');
INSERT INTO `inventoryrecord` VALUES ('44', 'Zedrick', 'Bscs', '100');
INSERT INTO `inventoryrecord` VALUES ('74', 'zed', 'shoes', '12345');
