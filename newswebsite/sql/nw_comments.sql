/*
Navicat MySQL Data Transfer

Source Server         : 本地mysql
Source Server Version : 80021
Source Host           : localhost:3306
Source Database       : newswebsite

Target Server Type    : MYSQL
Target Server Version : 80021
File Encoding         : 65001

Date: 2021-02-18 16:10:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nw_comments
-- ----------------------------
DROP TABLE IF EXISTS `nw_comments`;
CREATE TABLE `nw_comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `newsid` int NOT NULL COMMENT '新闻id',
  `content` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '评论内容',
  `uid` int NOT NULL COMMENT '评论来源',
  `ishow` int NOT NULL COMMENT '是否显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='评论表';
