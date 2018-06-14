/*
 Navicat Premium Data Transfer

 Source Server         : localMySQL
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : localhost:3306
 Source Schema         : cidb

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : 65001

 Date: 14/06/2018 16:44:01
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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, '新闻');
INSERT INTO `categories` VALUES (2, '旧闻');
INSERT INTO `categories` VALUES (3, '未来视角');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `write_datetime` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `news_id` int(11) NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 123, '2018-06-12 18:48:55', 'a123', 1, 0);
INSERT INTO `comments` VALUES (2, 124, '2018-06-12 18:48:58', 'b124', 1, 0);
INSERT INTO `comments` VALUES (3, 125, '2018-06-12 18:49:01', 'c125', 1, 0);
INSERT INTO `comments` VALUES (4, 126, '2018-06-12 18:49:03', 'd127', 1, 2);
INSERT INTO `comments` VALUES (5, 127, '2018-06-12 18:49:20', 'e128', 1, 2);

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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'ccc', 'dc', 1);
INSERT INTO `news` VALUES (2, '上报', '上x班', 1);
INSERT INTO `news` VALUES (3, '111', '111', 2);
INSERT INTO `news` VALUES (4, '222', '222', 2);
INSERT INTO `news` VALUES (5, '333', '333', 2);
INSERT INTO `news` VALUES (7, '555', '555', 1);
INSERT INTO `news` VALUES (8, '666', '666', 1);
INSERT INTO `news` VALUES (9, '777', '777', 3);
INSERT INTO `news` VALUES (10, '888', '888', 3);
INSERT INTO `news` VALUES (11, 'let\'s rock', 'gogogogo~\r\n', 3);
INSERT INTO `news` VALUES (12, 'ddd', 'ddd', 3);
INSERT INTO `news` VALUES (13, '444', '44444', 2);

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
  `groups` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'aajz', 'aajz@163.com', 'aajz', '71331f6203f990b790f7cf81c8e8bfaf', '2018-06-11 22:26:28', 0);
INSERT INTO `users` VALUES (2, 'asd', 'asd@asd.cc', 'asd', 'a8f5f167f44f4964e6c998dee827110c', '2018-06-11 22:30:20', 1);
INSERT INTO `users` VALUES (3, 'xhh', 'xhh@xhh.com', 'xhh', '45c4e939d19e7680d0d2b94a5c541157', '2018-06-12 13:34:32', 1);
INSERT INTO `users` VALUES (4, '显示个昵称而已', 'aaa@aaa.cc', 'z5y', 'd64d2ff176f3f8a1c08e47c7524c80a3', '2018-06-13 15:34:31', 1);
INSERT INTO `users` VALUES (5, '嘟嘟嘟', 'du@du.cc', 'd5u', 'e1b3fe251ea07efedd6cb417e427fc7f', '2018-06-13 15:43:15', 1);
INSERT INTO `users` VALUES (6, 'j', 'jing@jing.cc', 'jing', '9ccb908b48f95c03da2f7a4a06ef626b', '2018-06-13 15:44:03', 1);

SET FOREIGN_KEY_CHECKS = 1;
