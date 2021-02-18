/*
Navicat MySQL Data Transfer

Source Server         : 本地mysql
Source Server Version : 80021
Source Host           : localhost:3306
Source Database       : newswebsite

Target Server Type    : MYSQL
Target Server Version : 80021
File Encoding         : 65001

Date: 2021-02-18 16:10:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nw_news
-- ----------------------------
DROP TABLE IF EXISTS `nw_news`;
CREATE TABLE `nw_news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tid` int DEFAULT NULL COMMENT '分类id',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '新闻标题\n',
  `author` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '作者',
  `source` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '来源',
  `creatime` timestamp NULL DEFAULT NULL COMMENT '发布时间',
  `content` longtext COLLATE utf8mb4_unicode_ci COMMENT '富文本内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='新闻表';
