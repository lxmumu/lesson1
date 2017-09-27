/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50629
Source Host           : localhost:3306
Source Database       : crm_db

Target Server Type    : MYSQL
Target Server Version : 50629
File Encoding         : 65001

Date: 2017-08-23 22:03:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kh_allocation
-- ----------------------------
DROP TABLE IF EXISTS `kh_allocation`;
CREATE TABLE `kh_allocation` (
  `id` int(11) NOT NULL,
  `company` varchar(20) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `notes` varchar(20) DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_allocation
-- ----------------------------
INSERT INTO `kh_allocation` VALUES ('1', '黄笑科技', '黄笑', '黄笑科技黄笑科技黄笑科技', '自己上门', '客户', '潜在客户', '2017-05-25 14:00:00');
INSERT INTO `kh_allocation` VALUES ('2', '咏春', '叶问', '咏春宗师 叶问', '朋友推荐', '合作伙伴', '潜在客户', '2017-05-23 11:00:00');

-- ----------------------------
-- Table structure for kh_care
-- ----------------------------
DROP TABLE IF EXISTS `kh_care`;
CREATE TABLE `kh_care` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `notes` varchar(20) DEFAULT NULL,
  `zhuti` varchar(20) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `nexttime` datetime DEFAULT NULL,
  `person` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_care
-- ----------------------------
INSERT INTO `kh_care` VALUES ('1', '阿凡提', '上门拜访', '买他的羊肉串', '测试', '2017-05-25 14:00:00', '2016-01-01 00:00:00', '张三');
INSERT INTO `kh_care` VALUES ('2', '刘欢', '发短信', '测试', '测试', '2017-05-25 11:19:30', '2017-05-26 00:00:00', '张三');
INSERT INTO `kh_care` VALUES ('3', '刘欢', '发短信', '测试', '测试', '2017-05-25 11:00:00', '2017-05-26 00:00:00', '张三');

-- ----------------------------
-- Table structure for kh_connect
-- ----------------------------
DROP TABLE IF EXISTS `kh_connect`;
CREATE TABLE `kh_connect` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `nexttime` datetime DEFAULT NULL,
  `connecttype` varchar(20) DEFAULT NULL,
  `connecttitle` varchar(20) DEFAULT NULL,
  `notes` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_connect
-- ----------------------------
INSERT INTO `kh_connect` VALUES ('1', '阿凡提', '2017-05-25 14:27:44', '2017-05-26 15:05:00', '打电话', '测试', '打电话定羊肉');
INSERT INTO `kh_connect` VALUES ('2', '刘欢', '2017-05-25 11:00:00', '2017-05-26 12:00:00', '的', '测试', '测试');
INSERT INTO `kh_connect` VALUES ('3', '华纳', '2013-05-23 23:00:00', '2016-05-28 23:00:00', '谈判', '卖房', '探索');

-- ----------------------------
-- Table structure for kh_info
-- ----------------------------
DROP TABLE IF EXISTS `kh_info`;
CREATE TABLE `kh_info` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `sex` char(4) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `qq` varchar(15) DEFAULT NULL,
  `weibo` varchar(20) DEFAULT NULL,
  `msn` varchar(20) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `createman` varchar(20) DEFAULT NULL,
  `editman` varchar(20) DEFAULT NULL,
  `job` varchar(20) DEFAULT NULL,
  `notes` varchar(20) DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_info
-- ----------------------------
INSERT INTO `kh_info` VALUES ('1', '阿凡提', '男', null, '111111111', null, 'afanti@123.com', '123456', null, null, '新疆', null, '张三', null, '买羊肉串', '阿凡提的羊肉串好吃', '百度网', '合作伙伴', '意向客户');
INSERT INTO `kh_info` VALUES ('2', '李四', '男', null, '15136171850', null, 'xm@123.com', '1201201201', null, null, '向桑科技', null, '孙悟空', null, '你猜', '啦啦啦', '朋友推荐', '客户', '潜在客户');
INSERT INTO `kh_info` VALUES ('3', '张三', '男', null, '312103210320302', null, '123@123.com', '032032032032032', null, null, '3203203032', null, '孙悟空', null, '经理', '汪汪汪', '朋友推荐', '合作伙伴', '潜在客户');

-- ----------------------------
-- Table structure for kh_source
-- ----------------------------
DROP TABLE IF EXISTS `kh_source`;
CREATE TABLE `kh_source` (
  `id` int(11) NOT NULL,
  `source` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_source
-- ----------------------------
INSERT INTO `kh_source` VALUES ('1', '自己上门');
INSERT INTO `kh_source` VALUES ('2', '朋友推荐');
INSERT INTO `kh_source` VALUES ('3', '百度网');
INSERT INTO `kh_source` VALUES ('4', '网络');

-- ----------------------------
-- Table structure for kh_status
-- ----------------------------
DROP TABLE IF EXISTS `kh_status`;
CREATE TABLE `kh_status` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `scontent` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_status
-- ----------------------------
INSERT INTO `kh_status` VALUES ('1', '意向客户', '有意愿成为客户的人');
INSERT INTO `kh_status` VALUES ('2', '潜在客户', '可能成为客户的人');
INSERT INTO `kh_status` VALUES ('3', '交易客户', '正在交易的客户');

-- ----------------------------
-- Table structure for kh_type
-- ----------------------------
DROP TABLE IF EXISTS `kh_type`;
CREATE TABLE `kh_type` (
  `id` int(11) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_type
-- ----------------------------
INSERT INTO `kh_type` VALUES ('1', '客户');
INSERT INTO `kh_type` VALUES ('2', '合作伙伴');
INSERT INTO `kh_type` VALUES ('3', '供应商');

-- ----------------------------
-- Table structure for kh_yg
-- ----------------------------
DROP TABLE IF EXISTS `kh_yg`;
CREATE TABLE `kh_yg` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kh_yg
-- ----------------------------
INSERT INTO `kh_yg` VALUES ('1', '张三');
INSERT INTO `kh_yg` VALUES ('2', '李四');
