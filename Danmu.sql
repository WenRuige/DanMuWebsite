/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : Danmu

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2016-09-26 20:15:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `danmu`
-- ----------------------------
DROP TABLE IF EXISTS `danmu`;
CREATE TABLE `danmu` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '弹幕id',
  `video_id` int(10) NOT NULL DEFAULT '0' COMMENT '视频id',
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '内容',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` tinyint(4) NOT NULL COMMENT '是否删除(0未删除,1已经删除)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of danmu
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户邮箱',
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户密码(md5加密)',
  `token` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'token值md5($email.$password)',
  `token_expire_time` int(10) DEFAULT NULL COMMENT 'token过期时间',
  `status` tinyint(1) NOT NULL COMMENT '邮箱状态(0为激活,1已激活)',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '用户创建时间',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `deleted_at` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除(0未删除,1已删除)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('9', '941137860@qq.com', 'fcea920f7412b5da7be0cf42b8c93759', null, null, '1', '2016-09-24 07:48:10', '2016-09-24 09:14:34', '0');
