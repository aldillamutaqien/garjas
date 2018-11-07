/*
 Navicat Premium Data Transfer

 Source Server         : koneksi_ke_sql_local
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost:3306
 Source Schema         : garjas

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 07/11/2018 07:52:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user_type_access
-- ----------------------------
DROP TABLE IF EXISTS `user_type_access`;
CREATE TABLE `user_type_access`  (
  `user_type_id` int(11) NOT NULL,
  `class` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `method` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `access` int(11) NOT NULL,
  UNIQUE INDEX `user_type_id`(`user_type_id`, `class`, `method`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_type_access
-- ----------------------------
INSERT INTO `user_type_access` VALUES (0, 'admin', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'departemen', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'personil', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'suratkeluar', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'suratmasuk', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'users', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'workflow', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'workflowsurat', '*', 1);
INSERT INTO `user_type_access` VALUES (1, 'front', '*', 1);

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types`  (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`user_type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (1, 'Front');
INSERT INTO `user_types` VALUES (2, 'Admin');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_password` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `on_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  `flag_del` int(1) NULL DEFAULT 0,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1, '2016-04-11 19:04:28', NULL, NULL, NULL);
INSERT INTO `users` VALUES (23, 'deka', '57ef16a773d505292b52918bcd6d8d29', 1, 1, '2018-11-04 13:06:32', NULL, NULL, 0);
INSERT INTO `users` VALUES (24, 'admindeka', '99f9b2cd7dfc324b219ac2e5ce29e5d5', 0, 1, '2018-11-04 13:07:50', NULL, NULL, 0);
INSERT INTO `users` VALUES (25, 'love', 'b5c0b187fe309af0f4d35982fd961d7e', 1, 1, '2018-11-04 13:24:48', '2018-11-04 01:24:48', NULL, 0);
INSERT INTO `users` VALUES (26, 'lola', 'fceeb9b9d469401fe558062c4bd25954', 1, 1, '2018-11-04 13:26:50', '2018-11-04 13:26:50', '2018-11-04 13:29:25', 1);
INSERT INTO `users` VALUES (27, 'to', '01b6e20344b68835c5ed1ddedf20d531', 0, 1, '2018-11-07 05:58:48', '2018-11-07 05:58:48', NULL, 0);

SET FOREIGN_KEY_CHECKS = 1;
