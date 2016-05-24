/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50610
Source Host           : 127.0.0.1:3306
Source Database       : oik

Target Server Type    : MYSQL
Target Server Version : 50610
File Encoding         : 65001

Date: 2016-05-19 00:27:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `register_time` datetime NOT NULL,
  `last_reg_time` datetime NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '10', 'zhao', '123456', '2016-05-16 23:12:40', '2016-05-17 23:12:45', 'admin');
INSERT INTO `user` VALUES ('2', '10', 'wan', '123456', '2016-05-16 23:12:40', '2016-05-17 23:12:45', 'admin');
INSERT INTO `user` VALUES ('3', '20', 'asdas', '123', '2016-05-16 23:12:40', '2016-05-17 23:12:45', 'admin');
INSERT INTO `user` VALUES ('4', null, ':user_name', ':user_password', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null);
INSERT INTO `user` VALUES ('5', null, 'lu', '123', '2016-05-18 23:44:26', '2016-05-18 23:44:26', null);
INSERT INTO `user` VALUES ('6', null, 'qwe', '123', '2016-05-18 23:44:34', '2016-05-18 23:44:34', null);
INSERT INTO `user` VALUES ('7', null, 'qwe', '123', '2016-05-18 23:46:10', '2016-05-18 23:46:10', null);
INSERT INTO `user` VALUES ('8', null, 'qfsdfa', '123', '2016-05-18 23:46:24', '2016-05-18 23:46:24', null);
INSERT INTO `user` VALUES ('9', null, 'asasdf', '123456', '2016-05-18 23:48:13', '2016-05-18 23:48:13', null);
INSERT INTO `user` VALUES ('10', null, 'asasdf', '123456', '2016-05-18 23:48:43', '2016-05-18 23:48:43', null);
INSERT INTO `user` VALUES ('11', null, 'hahah', '123456', '2016-05-18 23:48:54', '2016-05-18 23:48:54', null);
INSERT INTO `user` VALUES ('12', null, 'é˜¿æ–¯è’‚èŠ¬', '753275675', '2016-05-18 23:54:31', '2016-05-18 23:54:31', null);
INSERT INTO `user` VALUES ('13', null, 'é˜¿è¨å¾·', '456', '2016-05-18 23:59:12', '2016-05-18 23:59:12', null);
INSERT INTO `user` VALUES ('14', null, 'æ’’æ—¦', '', '2016-05-19 00:01:43', '2016-05-19 00:01:43', null);
INSERT INTO `user` VALUES ('15', null, 'root', '123456', '2016-05-19 00:09:29', '2016-05-19 00:09:29', null);
INSERT INTO `user` VALUES ('16', null, 'root', '123456', '2016-05-19 00:09:57', '2016-05-19 00:09:57', null);
INSERT INTO `user` VALUES ('17', null, 'root', '1234', '2016-05-19 00:12:26', '2016-05-19 00:12:26', null);
INSERT INTO `user` VALUES ('18', null, 'sdf', '4', '2016-05-19 00:13:01', '2016-05-19 00:13:01', null);
INSERT INTO `user` VALUES ('19', null, 'sfsdf', '345', '2016-05-19 00:13:41', '2016-05-19 00:13:41', null);
INSERT INTO `user` VALUES ('20', null, 'asd', '356', '2016-05-19 00:14:29', '2016-05-19 00:14:29', null);
INSERT INTO `user` VALUES ('21', null, 'asdf', '4545', '2016-05-19 00:15:55', '2016-05-19 00:15:55', null);
INSERT INTO `user` VALUES ('22', null, 'sadfas', '56', '2016-05-19 00:18:57', '2016-05-19 00:18:57', null);
INSERT INTO `user` VALUES ('23', null, 'asdfas', '123', '2016-05-19 00:19:32', '2016-05-19 00:19:32', null);
INSERT INTO `user` VALUES ('24', null, 'asdf', '123', '2016-05-19 00:22:06', '2016-05-19 00:22:06', null);
INSERT INTO `user` VALUES ('25', null, 'asdf', '123', '2016-05-19 00:25:52', '2016-05-19 00:25:52', null);
INSERT INTO `user` VALUES ('26', null, 'asdf', '122435', '2016-05-19 00:25:58', '2016-05-19 00:25:58', null);

-- ----------------------------
-- Table structure for user_group
-- ----------------------------
DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `other` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of user_group
-- ----------------------------
INSERT INTO `user_group` VALUES ('1', '管理员组', '网站后台管理操作');
INSERT INTO `user_group` VALUES ('10', 'vip会员', 'balabalabala');
INSERT INTO `user_group` VALUES ('20', '普通会员', 'balabalabala');
