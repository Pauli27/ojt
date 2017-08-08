/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : db

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-08-07 13:43:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `specs`
-- ----------------------------
DROP TABLE IF EXISTS `specs`;
CREATE TABLE `specs` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `phonename` varchar(30) DEFAULT NULL,
  `phonememory` int(3) DEFAULT NULL,
  `phonestorage` int(3) DEFAULT NULL,
  `phonecamera` int(2) DEFAULT NULL,
  `phonebattery` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of specs
-- ----------------------------
INSERT INTO `specs` VALUES ('8', 'samsung s5', '4', '16', '20', '3000');
INSERT INTO `specs` VALUES ('9', 'Iphone 6S Plus', '5', '64', '20', '3500');
INSERT INTO `specs` VALUES ('19', 'Huawei P10', '4', '32', '40', '4000');
INSERT INTO `specs` VALUES ('37', 'Lenovo PHAB2', '3', '32', '13', '4000');
INSERT INTO `specs` VALUES ('47', 'Samsing note', '10', '24', '30', '3000');
INSERT INTO `specs` VALUES ('48', '', '0', '0', '0', '0');
