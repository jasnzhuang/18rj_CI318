/*
 Navicat Premium Data Transfer

 Source Server         : localMySQL
 Source Server Type    : MySQL
 Source Server Version : 50712
 Source Host           : localhost:3306
 Source Schema         : cidb

 Target Server Type    : MySQL
 Target Server Version : 50712
 File Encoding         : 65001

 Date: 11/06/2018 23:26:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, '新闻');
INSERT INTO `categories` VALUES (2, '旧闻');
INSERT INTO `categories` VALUES (3, '未来视角');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'ccc', 'dc', 1);
INSERT INTO `news` VALUES (2, '上报', '上x班', 1);
INSERT INTO `news` VALUES (3, '111', '111', 2);
INSERT INTO `news` VALUES (4, '222', '222', 2);
INSERT INTO `news` VALUES (5, '333', '333', 2);
INSERT INTO `news` VALUES (6, '444', '444', 2);
INSERT INTO `news` VALUES (7, '555', '555', 1);
INSERT INTO `news` VALUES (8, '666', '666', 1);
INSERT INTO `news` VALUES (9, '777', '777', 3);
INSERT INTO `news` VALUES (10, '888', '888', 3);
INSERT INTO `news` VALUES (11, 'let\'s rock', 'gogogogo~\r\n', 3);
INSERT INTO `news` VALUES (12, 'ddd', 'ddd', 3);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `register_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'aajz', 'aajz@163.com', 'aajz', '71331f6203f990b790f7cf81c8e8bfaf', '2018-06-11 22:26:28');
INSERT INTO `users` VALUES (2, 'asd', 'asd@asd.cc', 'asd', 'a8f5f167f44f4964e6c998dee827110c', '2018-06-11 22:30:20');

SET FOREIGN_KEY_CHECKS = 1;
