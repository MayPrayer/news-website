/*
Navicat MySQL Data Transfer

Source Server         : 本地mysql
Source Server Version : 80021
Source Host           : localhost:3306
Source Database       : newswebsite

Target Server Type    : MYSQL
Target Server Version : 80021
File Encoding         : 65001

Date: 2021-02-18 16:10:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nw_newstypes
-- ----------------------------
DROP TABLE IF EXISTS `nw_newstypes`;
CREATE TABLE `nw_newstypes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `typename` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haschild` int NOT NULL,
  `pid` int DEFAULT NULL,
  `createtime` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='新闻分类表';
