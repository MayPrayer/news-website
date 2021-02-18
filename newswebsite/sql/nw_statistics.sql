/*
Navicat MySQL Data Transfer

Source Server         : 本地mysql
Source Server Version : 80021
Source Host           : localhost:3306
Source Database       : newswebsite

Target Server Type    : MYSQL
Target Server Version : 80021
File Encoding         : 65001

Date: 2021-02-18 16:10:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nw_statistics
-- ----------------------------
DROP TABLE IF EXISTS `nw_statistics`;
CREATE TABLE `nw_statistics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tid` int NOT NULL,
  `count` mediumtext COLLATE utf8mb4_unicode_ci,
  `creatime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='新闻统计表';
