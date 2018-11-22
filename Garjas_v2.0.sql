/*
 Navicat Premium Data Transfer

 Source Server         : koneksi_ke_sql_local
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost:3306
 Source Schema         : garjas4

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 23/11/2018 05:00:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dataadmin
-- ----------------------------
DROP TABLE IF EXISTS `dataadmin`;
CREATE TABLE `dataadmin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pangkat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `korps` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nrp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `kesatuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `matra` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  `flag_del` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dataadmin
-- ----------------------------
INSERT INTO `dataadmin` VALUES (1, 1, 'Atho', 'Serda', 'JAS', '223445555', 'Pria', '1976-12-24', 'Jasdam Jaya', 'Baur Jas', 'TNI AD', '2018-11-08 11:36:00', NULL, 0);
INSERT INTO `dataadmin` VALUES (2, 1, 'Timur Yulis Santosa', 'Sertu', 'EKO', NULL, 'Pria', '1989-07-14', 'Puskodal TNI AL', 'Ba Urharkomp', 'TNI AL', '2018-11-08 06:13:22', NULL, 0);

-- ----------------------------
-- Table structure for jenis_seldik
-- ----------------------------
DROP TABLE IF EXISTS `jenis_seldik`;
CREATE TABLE `jenis_seldik`  (
  `id_seldik` int(11) NOT NULL AUTO_INCREMENT,
  `nama_seldik` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_seldik`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for kotama
-- ----------------------------
DROP TABLE IF EXISTS `kotama`;
CREATE TABLE `kotama`  (
  `id_kotama` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kotama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_mabes` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_kotama`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for lari_pria
-- ----------------------------
DROP TABLE IF EXISTS `lari_pria`;
CREATE TABLE `lari_pria`  (
  `id_nilai` int(11) NOT NULL,
  `waktu_lari` time(0) NULL DEFAULT NULL,
  `I` int(11) NULL DEFAULT NULL,
  `II` int(11) NULL DEFAULT NULL,
  `III` int(11) NULL DEFAULT NULL,
  `IV` int(11) NULL DEFAULT NULL,
  `V` int(11) NULL DEFAULT NULL,
  `VI` int(11) NULL DEFAULT NULL,
  `VII` int(11) NULL DEFAULT NULL,
  `VIII` int(11) NULL DEFAULT NULL,
  `IX` int(11) NULL DEFAULT NULL,
  `X` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_nilai`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of lari_pria
-- ----------------------------
INSERT INTO `lari_pria` VALUES (1, '00:10:57', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (2, '00:11:01', 99, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (3, '00:11:05', 98, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (4, '00:11:09', 97, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (5, '00:11:13', 96, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (6, '00:11:17', 95, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (7, '00:11:21', 94, 99, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (8, '00:11:25', 93, 98, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (9, '00:11:29', 92, 97, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (10, '00:11:33', 91, 96, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (11, '00:11:37', 90, 95, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (12, '00:11:41', 89, 94, 99, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (13, '00:11:45', 88, 93, 98, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (14, '00:11:49', 87, 92, 97, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (15, '00:11:53', 86, 91, 96, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (16, '00:11:57', 85, 90, 95, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (17, '00:12:01', 84, 89, 94, 99, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (18, '00:12:06', 83, 88, 93, 98, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (19, '00:12:11', 82, 87, 92, 97, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (20, '00:12:16', 81, 86, 91, 96, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (21, '00:12:21', 80, 85, 90, 95, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (22, '00:12:26', 79, 84, 89, 94, 99, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (23, '00:12:31', 78, 83, 88, 93, 98, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (24, '00:12:36', 77, 82, 87, 92, 97, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (25, '00:12:41', 76, 81, 86, 91, 96, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (26, '00:12:46', 75, 80, 85, 90, 95, 100, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (27, '00:12:51', 74, 79, 84, 89, 94, 99, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (28, '00:12:57', 73, 78, 83, 88, 93, 98, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (29, '00:13:03', 72, 77, 82, 87, 92, 97, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (30, '00:13:09', 71, 76, 81, 86, 91, 96, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (31, '00:13:15', 70, 75, 80, 85, 90, 95, 100, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (32, '00:13:21', 69, 74, 79, 84, 89, 94, 99, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (33, '00:13:27', 68, 73, 78, 83, 88, 93, 98, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (34, '00:13:33', 67, 72, 77, 82, 87, 92, 97, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (35, '00:13:39', 66, 71, 76, 81, 86, 91, 96, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (36, '00:13:45', 65, 70, 75, 80, 85, 90, 95, 100, 100, 100);
INSERT INTO `lari_pria` VALUES (37, '00:13:51', 64, 69, 74, 79, 84, 89, 94, 99, 100, 100);
INSERT INTO `lari_pria` VALUES (38, '00:13:58', 63, 68, 73, 78, 83, 88, 93, 98, 100, 100);
INSERT INTO `lari_pria` VALUES (39, '00:14:05', 62, 67, 72, 77, 82, 87, 92, 97, 100, 100);
INSERT INTO `lari_pria` VALUES (40, '00:14:12', 61, 66, 71, 76, 81, 86, 91, 96, 100, 100);
INSERT INTO `lari_pria` VALUES (41, '00:14:19', 60, 65, 70, 75, 80, 85, 90, 95, 100, 100);
INSERT INTO `lari_pria` VALUES (42, '00:14:26', 59, 64, 69, 74, 79, 84, 89, 94, 100, 100);
INSERT INTO `lari_pria` VALUES (43, '00:14:33', 58, 63, 68, 73, 78, 83, 88, 93, 100, 100);
INSERT INTO `lari_pria` VALUES (44, '00:14:40', 57, 62, 67, 72, 77, 82, 87, 92, 100, 100);
INSERT INTO `lari_pria` VALUES (45, '00:14:47', 56, 61, 66, 71, 76, 81, 86, 91, 99, 100);
INSERT INTO `lari_pria` VALUES (46, '00:14:54', 55, 60, 65, 70, 75, 80, 85, 90, 98, 100);
INSERT INTO `lari_pria` VALUES (47, '00:15:01', 54, 59, 64, 69, 74, 79, 84, 89, 97, 100);
INSERT INTO `lari_pria` VALUES (48, '00:15:09', 53, 58, 63, 68, 73, 78, 83, 88, 96, 100);
INSERT INTO `lari_pria` VALUES (49, '00:15:17', 52, 57, 62, 67, 72, 77, 82, 87, 95, 100);
INSERT INTO `lari_pria` VALUES (50, '00:15:25', 51, 56, 61, 66, 71, 76, 81, 86, 94, 100);
INSERT INTO `lari_pria` VALUES (51, '00:15:33', 50, 55, 60, 65, 70, 75, 80, 85, 93, 100);
INSERT INTO `lari_pria` VALUES (52, '00:15:41', 49, 54, 59, 64, 69, 74, 79, 84, 92, 100);
INSERT INTO `lari_pria` VALUES (53, '00:15:49', 48, 53, 58, 63, 68, 73, 78, 83, 91, 99);
INSERT INTO `lari_pria` VALUES (54, '00:15:57', 47, 52, 57, 62, 67, 72, 77, 82, 90, 98);
INSERT INTO `lari_pria` VALUES (55, '00:16:05', 46, 51, 56, 61, 66, 71, 76, 81, 89, 97);
INSERT INTO `lari_pria` VALUES (56, '00:16:13', 45, 50, 55, 60, 65, 70, 75, 80, 88, 96);
INSERT INTO `lari_pria` VALUES (57, '00:16:21', 44, 49, 54, 59, 64, 69, 74, 79, 87, 95);
INSERT INTO `lari_pria` VALUES (58, '00:16:30', 43, 48, 53, 58, 63, 68, 73, 78, 86, 94);
INSERT INTO `lari_pria` VALUES (59, '00:16:39', 42, 47, 52, 57, 62, 67, 72, 77, 85, 93);
INSERT INTO `lari_pria` VALUES (60, '00:16:48', 41, 46, 51, 56, 61, 66, 71, 76, 84, 92);
INSERT INTO `lari_pria` VALUES (61, '00:16:57', 40, 45, 50, 55, 60, 65, 70, 75, 83, 91);
INSERT INTO `lari_pria` VALUES (62, '00:17:06', 39, 44, 49, 54, 59, 64, 69, 74, 82, 90);
INSERT INTO `lari_pria` VALUES (63, '00:17:15', 38, 43, 48, 53, 58, 63, 68, 73, 81, 89);
INSERT INTO `lari_pria` VALUES (64, '00:17:24', 37, 42, 47, 52, 57, 62, 67, 72, 80, 88);
INSERT INTO `lari_pria` VALUES (65, '00:17:33', 36, 41, 46, 51, 56, 61, 66, 71, 79, 87);
INSERT INTO `lari_pria` VALUES (66, '00:17:42', 35, 40, 45, 50, 55, 60, 65, 70, 78, 86);
INSERT INTO `lari_pria` VALUES (67, '00:17:51', 34, 39, 44, 49, 54, 59, 64, 69, 77, 85);
INSERT INTO `lari_pria` VALUES (68, '00:18:01', 33, 38, 43, 48, 53, 58, 63, 68, 76, 84);
INSERT INTO `lari_pria` VALUES (69, '00:18:11', 32, 37, 42, 47, 52, 57, 62, 67, 75, 83);
INSERT INTO `lari_pria` VALUES (70, '00:18:21', 31, 36, 41, 46, 51, 56, 61, 66, 74, 82);
INSERT INTO `lari_pria` VALUES (71, '00:18:31', 30, 35, 40, 45, 50, 55, 60, 65, 73, 81);
INSERT INTO `lari_pria` VALUES (72, '00:18:41', 29, 34, 39, 44, 49, 54, 59, 64, 72, 80);
INSERT INTO `lari_pria` VALUES (73, '00:18:51', 28, 33, 38, 43, 48, 53, 58, 63, 71, 79);
INSERT INTO `lari_pria` VALUES (74, '00:19:01', 27, 32, 37, 42, 47, 52, 57, 62, 70, 78);
INSERT INTO `lari_pria` VALUES (75, '00:19:11', 26, 31, 36, 41, 46, 51, 56, 61, 69, 77);
INSERT INTO `lari_pria` VALUES (76, '00:19:21', 25, 30, 35, 40, 45, 50, 55, 60, 68, 76);
INSERT INTO `lari_pria` VALUES (77, '00:19:31', 24, 29, 34, 39, 44, 49, 54, 59, 67, 75);
INSERT INTO `lari_pria` VALUES (78, '00:19:42', 23, 28, 33, 38, 43, 48, 53, 58, 66, 74);
INSERT INTO `lari_pria` VALUES (79, '00:19:53', 22, 27, 32, 37, 42, 47, 52, 57, 65, 73);
INSERT INTO `lari_pria` VALUES (80, '00:20:04', 21, 26, 31, 36, 41, 46, 51, 56, 64, 72);
INSERT INTO `lari_pria` VALUES (81, '00:20:15', 20, 25, 30, 35, 40, 45, 50, 55, 63, 71);
INSERT INTO `lari_pria` VALUES (82, '00:20:26', 19, 24, 29, 34, 39, 44, 49, 54, 62, 70);
INSERT INTO `lari_pria` VALUES (83, '00:20:37', 18, 23, 28, 33, 38, 43, 48, 53, 61, 69);
INSERT INTO `lari_pria` VALUES (84, '00:20:48', 17, 22, 27, 32, 37, 42, 47, 52, 60, 68);
INSERT INTO `lari_pria` VALUES (85, '00:20:59', 16, 21, 26, 31, 36, 41, 46, 51, 59, 67);
INSERT INTO `lari_pria` VALUES (86, '00:21:10', 15, 20, 25, 30, 35, 40, 45, 50, 58, 66);
INSERT INTO `lari_pria` VALUES (87, '00:21:21', 14, 19, 24, 29, 34, 39, 44, 49, 57, 65);
INSERT INTO `lari_pria` VALUES (88, '00:21:33', 13, 18, 23, 28, 33, 38, 43, 48, 56, 64);
INSERT INTO `lari_pria` VALUES (89, '00:21:45', 12, 17, 22, 27, 32, 37, 42, 47, 55, 63);
INSERT INTO `lari_pria` VALUES (90, '00:21:57', 11, 16, 21, 26, 31, 36, 41, 46, 54, 62);
INSERT INTO `lari_pria` VALUES (91, '00:22:09', 10, 15, 20, 25, 30, 35, 40, 45, 53, 61);
INSERT INTO `lari_pria` VALUES (92, '00:22:21', 9, 14, 19, 24, 29, 34, 39, 44, 52, 60);
INSERT INTO `lari_pria` VALUES (93, '00:22:33', 8, 13, 18, 23, 28, 33, 38, 43, 51, 59);
INSERT INTO `lari_pria` VALUES (94, '00:22:45', 7, 12, 17, 22, 27, 32, 37, 42, 50, 58);
INSERT INTO `lari_pria` VALUES (95, '00:22:57', 6, 11, 16, 21, 26, 31, 36, 41, 49, 57);
INSERT INTO `lari_pria` VALUES (96, '00:23:09', 5, 10, 15, 20, 25, 30, 35, 40, 48, 56);
INSERT INTO `lari_pria` VALUES (97, '00:23:21', 4, 9, 14, 19, 24, 29, 34, 39, 47, 55);
INSERT INTO `lari_pria` VALUES (98, '00:23:34', 3, 8, 13, 18, 23, 28, 33, 38, 46, 54);
INSERT INTO `lari_pria` VALUES (99, '00:23:47', 2, 7, 12, 17, 22, 27, 32, 37, 45, 53);
INSERT INTO `lari_pria` VALUES (100, '00:24:00', 1, 6, 11, 16, 21, 26, 31, 36, 44, 52);
INSERT INTO `lari_pria` VALUES (101, '00:24:13', 0, 5, 10, 15, 20, 25, 30, 35, 43, 51);
INSERT INTO `lari_pria` VALUES (102, '00:24:26', 0, 4, 9, 14, 19, 24, 29, 34, 42, 50);
INSERT INTO `lari_pria` VALUES (103, '00:24:39', 0, 3, 8, 13, 18, 23, 28, 33, 41, 49);
INSERT INTO `lari_pria` VALUES (104, '00:24:52', 0, 2, 7, 12, 17, 22, 27, 32, 40, 48);
INSERT INTO `lari_pria` VALUES (105, '00:25:05', 0, 1, 6, 11, 16, 21, 26, 31, 39, 47);
INSERT INTO `lari_pria` VALUES (106, '00:25:18', 0, 0, 5, 10, 15, 20, 25, 30, 38, 46);
INSERT INTO `lari_pria` VALUES (107, '00:25:31', 0, 0, 4, 9, 14, 19, 24, 29, 37, 45);
INSERT INTO `lari_pria` VALUES (108, '00:25:45', 0, 0, 3, 8, 13, 18, 23, 28, 36, 44);
INSERT INTO `lari_pria` VALUES (109, '00:25:59', 0, 0, 2, 7, 12, 17, 22, 27, 35, 43);
INSERT INTO `lari_pria` VALUES (110, '00:26:13', 0, 0, 1, 6, 11, 16, 21, 26, 34, 42);
INSERT INTO `lari_pria` VALUES (111, '00:26:27', 0, 0, 0, 5, 10, 15, 20, 25, 33, 41);
INSERT INTO `lari_pria` VALUES (112, '00:26:41', 0, 0, 0, 4, 9, 14, 19, 24, 32, 40);
INSERT INTO `lari_pria` VALUES (113, '00:26:55', 0, 0, 0, 3, 8, 13, 18, 23, 31, 39);
INSERT INTO `lari_pria` VALUES (114, '00:27:09', 0, 0, 0, 2, 7, 12, 17, 22, 30, 38);
INSERT INTO `lari_pria` VALUES (115, '00:27:23', 0, 0, 0, 1, 6, 11, 16, 21, 29, 37);
INSERT INTO `lari_pria` VALUES (116, '00:27:37', 0, 0, 0, 0, 5, 10, 15, 20, 28, 36);
INSERT INTO `lari_pria` VALUES (117, '00:27:51', 0, 0, 0, 0, 4, 9, 14, 19, 27, 35);
INSERT INTO `lari_pria` VALUES (118, '00:28:06', 0, 0, 0, 0, 3, 8, 13, 18, 26, 34);
INSERT INTO `lari_pria` VALUES (119, '00:28:21', 0, 0, 0, 0, 2, 7, 12, 17, 25, 33);
INSERT INTO `lari_pria` VALUES (120, '00:28:36', 0, 0, 0, 0, 1, 6, 11, 16, 24, 32);
INSERT INTO `lari_pria` VALUES (121, '00:28:51', 0, 0, 0, 0, 0, 5, 10, 15, 23, 31);
INSERT INTO `lari_pria` VALUES (122, '00:29:06', 0, 0, 0, 0, 0, 4, 9, 14, 22, 30);
INSERT INTO `lari_pria` VALUES (123, '00:29:21', 0, 0, 0, 0, 0, 3, 8, 13, 21, 29);
INSERT INTO `lari_pria` VALUES (124, '00:29:36', 0, 0, 0, 0, 0, 2, 7, 12, 20, 28);
INSERT INTO `lari_pria` VALUES (125, '00:29:51', 0, 0, 0, 0, 0, 1, 6, 11, 19, 27);
INSERT INTO `lari_pria` VALUES (126, '00:30:06', 0, 0, 0, 0, 0, 0, 5, 10, 18, 26);
INSERT INTO `lari_pria` VALUES (127, '00:30:21', 0, 0, 0, 0, 0, 0, 4, 9, 17, 25);
INSERT INTO `lari_pria` VALUES (128, '00:30:37', 0, 0, 0, 0, 0, 0, 3, 8, 16, 24);
INSERT INTO `lari_pria` VALUES (129, '00:30:53', 0, 0, 0, 0, 0, 0, 2, 7, 15, 23);
INSERT INTO `lari_pria` VALUES (130, '00:31:09', 0, 0, 0, 0, 0, 0, 1, 6, 14, 22);
INSERT INTO `lari_pria` VALUES (131, '00:31:25', 0, 0, 0, 0, 0, 0, 0, 5, 13, 21);
INSERT INTO `lari_pria` VALUES (132, '00:31:41', 0, 0, 0, 0, 0, 0, 0, 4, 12, 20);
INSERT INTO `lari_pria` VALUES (133, '00:31:57', 0, 0, 0, 0, 0, 0, 0, 3, 11, 19);
INSERT INTO `lari_pria` VALUES (134, '00:32:13', 0, 0, 0, 0, 0, 0, 0, 2, 10, 18);
INSERT INTO `lari_pria` VALUES (135, '00:32:29', 0, 0, 0, 0, 0, 0, 0, 1, 9, 17);
INSERT INTO `lari_pria` VALUES (136, '00:32:46', 0, 0, 0, 0, 0, 0, 0, 0, 8, 16);
INSERT INTO `lari_pria` VALUES (137, '00:33:03', 0, 0, 0, 0, 0, 0, 0, 0, 7, 15);
INSERT INTO `lari_pria` VALUES (138, '00:33:20', 0, 0, 0, 0, 0, 0, 0, 0, 6, 14);
INSERT INTO `lari_pria` VALUES (139, '00:33:37', 0, 0, 0, 0, 0, 0, 0, 0, 5, 13);
INSERT INTO `lari_pria` VALUES (140, '00:33:54', 0, 0, 0, 0, 0, 0, 0, 0, 4, 12);
INSERT INTO `lari_pria` VALUES (141, '00:34:11', 0, 0, 0, 0, 0, 0, 0, 0, 3, 11);
INSERT INTO `lari_pria` VALUES (142, '00:34:28', 0, 0, 0, 0, 0, 0, 0, 0, 2, 10);
INSERT INTO `lari_pria` VALUES (143, '00:34:46', 0, 0, 0, 0, 0, 0, 0, 0, 1, 9);
INSERT INTO `lari_pria` VALUES (144, '00:35:04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 8);
INSERT INTO `lari_pria` VALUES (145, '00:35:22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 7);
INSERT INTO `lari_pria` VALUES (146, '00:35:40', 0, 0, 0, 0, 0, 0, 0, 0, 0, 6);
INSERT INTO `lari_pria` VALUES (147, '00:35:58', 0, 0, 0, 0, 0, 0, 0, 0, 0, 5);
INSERT INTO `lari_pria` VALUES (148, '00:36:16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 4);
INSERT INTO `lari_pria` VALUES (149, '00:36:34', 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);
INSERT INTO `lari_pria` VALUES (150, '00:36:52', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2);
INSERT INTO `lari_pria` VALUES (151, '00:37:10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- ----------------------------
-- Table structure for lari_wanita
-- ----------------------------
DROP TABLE IF EXISTS `lari_wanita`;
CREATE TABLE `lari_wanita`  (
  `id_nilai` int(11) NOT NULL,
  `waktu_lari` time(0) NULL DEFAULT NULL,
  `I` int(11) NULL DEFAULT NULL,
  `II` int(11) NULL DEFAULT NULL,
  `III` int(11) NULL DEFAULT NULL,
  `IV` int(11) NULL DEFAULT NULL,
  `V` int(11) NULL DEFAULT NULL,
  `VI` int(11) NULL DEFAULT NULL,
  `VII` int(11) NULL DEFAULT NULL,
  `VIII` int(11) NULL DEFAULT NULL,
  `IX` int(11) NULL DEFAULT NULL,
  `X` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_nilai`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of lari_wanita
-- ----------------------------
INSERT INTO `lari_wanita` VALUES (1, '00:13:15', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (2, '00:13:21', 99, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (3, '00:13:27', 98, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (4, '00:13:33', 97, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (5, '00:13:39', 96, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (6, '00:13:45', 95, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (7, '00:13:51', 94, 99, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (8, '00:13:58', 93, 98, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (9, '00:14:05', 92, 97, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (10, '00:14:12', 91, 96, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (11, '00:14:19', 90, 95, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (12, '00:14:26', 89, 94, 99, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (13, '00:14:33', 88, 93, 98, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (14, '00:14:40', 87, 92, 97, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (15, '00:14:47', 86, 91, 96, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (16, '00:14:54', 85, 90, 95, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (17, '00:15:01', 84, 89, 94, 99, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (18, '00:15:09', 83, 88, 93, 98, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (19, '00:15:17', 82, 87, 92, 97, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (20, '00:15:25', 81, 86, 91, 96, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (21, '00:15:33', 80, 85, 90, 95, 100, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (22, '00:15:41', 79, 84, 89, 94, 99, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (23, '00:15:49', 78, 83, 88, 93, 98, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (24, '00:15:57', 77, 82, 87, 92, 97, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (25, '00:16:05', 76, 81, 86, 91, 96, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (26, '00:16:13', 75, 80, 85, 90, 95, 100, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (27, '00:16:21', 74, 79, 84, 89, 94, 99, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (28, '00:16:30', 73, 78, 83, 88, 93, 98, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (29, '00:16:39', 72, 77, 82, 87, 92, 97, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (30, '00:16:48', 71, 76, 81, 86, 91, 96, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (31, '00:16:57', 70, 75, 80, 85, 90, 95, 100, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (32, '00:17:06', 69, 74, 79, 84, 89, 94, 99, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (33, '00:17:15', 68, 73, 78, 83, 88, 93, 98, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (34, '00:17:24', 67, 72, 77, 82, 87, 92, 97, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (35, '00:17:33', 66, 71, 76, 81, 86, 91, 96, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (36, '00:17:42', 65, 70, 75, 80, 85, 90, 95, 100, 100, 100);
INSERT INTO `lari_wanita` VALUES (37, '00:17:51', 64, 69, 74, 79, 84, 89, 94, 99, 100, 100);
INSERT INTO `lari_wanita` VALUES (38, '00:18:01', 63, 68, 73, 78, 83, 88, 93, 98, 100, 100);
INSERT INTO `lari_wanita` VALUES (39, '00:18:11', 62, 67, 72, 77, 82, 87, 92, 97, 100, 100);
INSERT INTO `lari_wanita` VALUES (40, '00:18:21', 61, 66, 71, 76, 81, 86, 91, 96, 100, 100);
INSERT INTO `lari_wanita` VALUES (41, '00:18:31', 60, 65, 70, 75, 80, 85, 90, 95, 100, 100);
INSERT INTO `lari_wanita` VALUES (42, '00:18:41', 59, 64, 69, 74, 79, 84, 89, 94, 100, 100);
INSERT INTO `lari_wanita` VALUES (43, '00:18:51', 58, 63, 68, 73, 78, 83, 88, 93, 100, 100);
INSERT INTO `lari_wanita` VALUES (44, '00:19:01', 57, 62, 67, 72, 77, 82, 87, 92, 100, 100);
INSERT INTO `lari_wanita` VALUES (45, '00:19:11', 56, 61, 66, 71, 76, 81, 86, 91, 99, 100);
INSERT INTO `lari_wanita` VALUES (46, '00:19:21', 55, 60, 65, 70, 75, 80, 85, 90, 98, 100);
INSERT INTO `lari_wanita` VALUES (47, '00:19:31', 54, 59, 64, 69, 74, 79, 84, 89, 97, 100);
INSERT INTO `lari_wanita` VALUES (48, '00:19:42', 53, 58, 63, 68, 73, 78, 83, 88, 96, 100);
INSERT INTO `lari_wanita` VALUES (49, '00:19:53', 52, 57, 62, 67, 72, 77, 82, 87, 95, 100);
INSERT INTO `lari_wanita` VALUES (50, '00:20:04', 51, 56, 61, 66, 71, 76, 81, 86, 94, 100);
INSERT INTO `lari_wanita` VALUES (51, '00:20:15', 50, 55, 60, 65, 70, 75, 80, 85, 93, 100);
INSERT INTO `lari_wanita` VALUES (52, '00:20:26', 49, 54, 59, 64, 69, 74, 79, 84, 92, 100);
INSERT INTO `lari_wanita` VALUES (53, '00:20:37', 48, 53, 58, 63, 68, 73, 78, 83, 91, 99);
INSERT INTO `lari_wanita` VALUES (54, '00:20:48', 47, 52, 57, 62, 67, 72, 77, 82, 90, 98);
INSERT INTO `lari_wanita` VALUES (55, '00:20:59', 46, 51, 56, 61, 66, 71, 76, 81, 89, 97);
INSERT INTO `lari_wanita` VALUES (56, '00:21:10', 45, 50, 55, 60, 65, 70, 75, 80, 88, 96);
INSERT INTO `lari_wanita` VALUES (57, '00:21:21', 44, 49, 54, 59, 64, 69, 74, 79, 87, 95);
INSERT INTO `lari_wanita` VALUES (58, '00:21:33', 43, 48, 53, 58, 63, 68, 73, 78, 86, 94);
INSERT INTO `lari_wanita` VALUES (59, '00:21:45', 42, 47, 52, 57, 62, 67, 72, 77, 85, 93);
INSERT INTO `lari_wanita` VALUES (60, '00:21:57', 41, 46, 51, 56, 61, 66, 71, 76, 84, 92);
INSERT INTO `lari_wanita` VALUES (61, '00:22:09', 40, 45, 50, 55, 60, 65, 70, 75, 83, 91);
INSERT INTO `lari_wanita` VALUES (62, '00:22:21', 39, 44, 49, 54, 59, 64, 69, 74, 82, 90);
INSERT INTO `lari_wanita` VALUES (63, '00:22:33', 38, 43, 48, 53, 58, 63, 68, 73, 81, 89);
INSERT INTO `lari_wanita` VALUES (64, '00:22:45', 37, 42, 47, 52, 57, 62, 67, 72, 80, 88);
INSERT INTO `lari_wanita` VALUES (65, '00:22:57', 36, 41, 46, 51, 56, 61, 66, 71, 79, 87);
INSERT INTO `lari_wanita` VALUES (66, '00:23:09', 35, 40, 45, 50, 55, 60, 65, 70, 78, 86);
INSERT INTO `lari_wanita` VALUES (67, '00:23:21', 34, 39, 44, 49, 54, 59, 64, 69, 77, 85);
INSERT INTO `lari_wanita` VALUES (68, '00:23:34', 33, 38, 43, 48, 53, 58, 63, 68, 76, 84);
INSERT INTO `lari_wanita` VALUES (69, '00:23:47', 32, 37, 42, 47, 52, 57, 62, 67, 75, 83);
INSERT INTO `lari_wanita` VALUES (70, '00:24:00', 31, 36, 41, 46, 51, 56, 61, 66, 74, 82);
INSERT INTO `lari_wanita` VALUES (71, '00:24:13', 30, 35, 40, 45, 50, 55, 60, 65, 73, 81);
INSERT INTO `lari_wanita` VALUES (72, '00:24:26', 29, 34, 39, 44, 49, 54, 59, 64, 72, 80);
INSERT INTO `lari_wanita` VALUES (73, '00:24:39', 28, 33, 38, 43, 48, 53, 58, 63, 71, 79);
INSERT INTO `lari_wanita` VALUES (74, '00:24:52', 27, 32, 37, 42, 47, 52, 57, 62, 70, 78);
INSERT INTO `lari_wanita` VALUES (75, '00:25:05', 26, 31, 36, 41, 46, 51, 56, 61, 69, 77);
INSERT INTO `lari_wanita` VALUES (76, '00:25:18', 25, 30, 35, 40, 45, 50, 55, 60, 68, 76);
INSERT INTO `lari_wanita` VALUES (77, '00:25:31', 24, 29, 34, 39, 44, 49, 54, 59, 67, 75);
INSERT INTO `lari_wanita` VALUES (78, '00:25:45', 23, 28, 33, 38, 43, 48, 53, 58, 66, 74);
INSERT INTO `lari_wanita` VALUES (79, '00:25:59', 22, 27, 32, 37, 42, 47, 52, 57, 65, 73);
INSERT INTO `lari_wanita` VALUES (80, '00:26:13', 21, 26, 31, 36, 41, 46, 51, 56, 64, 72);
INSERT INTO `lari_wanita` VALUES (81, '00:26:27', 20, 25, 30, 35, 40, 45, 50, 55, 63, 71);
INSERT INTO `lari_wanita` VALUES (82, '00:26:41', 19, 24, 29, 34, 39, 44, 49, 54, 62, 70);
INSERT INTO `lari_wanita` VALUES (83, '00:26:55', 18, 23, 28, 33, 38, 43, 48, 53, 61, 69);
INSERT INTO `lari_wanita` VALUES (84, '00:27:09', 17, 22, 27, 32, 37, 42, 47, 52, 60, 68);
INSERT INTO `lari_wanita` VALUES (85, '00:27:23', 16, 21, 26, 31, 36, 41, 46, 51, 59, 67);
INSERT INTO `lari_wanita` VALUES (86, '00:27:37', 15, 20, 25, 30, 35, 40, 45, 50, 58, 66);
INSERT INTO `lari_wanita` VALUES (87, '00:27:51', 14, 19, 24, 29, 34, 39, 44, 49, 57, 65);
INSERT INTO `lari_wanita` VALUES (88, '00:28:06', 13, 18, 23, 28, 33, 38, 43, 48, 56, 64);
INSERT INTO `lari_wanita` VALUES (89, '00:28:21', 12, 17, 22, 27, 32, 37, 42, 47, 55, 63);
INSERT INTO `lari_wanita` VALUES (90, '00:28:36', 11, 16, 21, 26, 31, 36, 41, 46, 54, 62);
INSERT INTO `lari_wanita` VALUES (91, '00:28:51', 10, 15, 20, 25, 30, 35, 40, 45, 53, 61);
INSERT INTO `lari_wanita` VALUES (92, '00:29:06', 9, 14, 19, 24, 29, 34, 39, 44, 52, 60);
INSERT INTO `lari_wanita` VALUES (93, '00:29:21', 8, 13, 18, 23, 28, 33, 38, 43, 51, 59);
INSERT INTO `lari_wanita` VALUES (94, '00:29:36', 7, 12, 17, 22, 27, 32, 37, 42, 50, 58);
INSERT INTO `lari_wanita` VALUES (95, '00:29:51', 6, 11, 16, 21, 26, 31, 36, 41, 49, 57);
INSERT INTO `lari_wanita` VALUES (96, '00:30:06', 5, 10, 15, 20, 25, 30, 35, 40, 48, 56);
INSERT INTO `lari_wanita` VALUES (97, '00:30:21', 4, 9, 14, 19, 24, 29, 34, 39, 47, 55);
INSERT INTO `lari_wanita` VALUES (98, '00:30:37', 3, 8, 13, 18, 23, 28, 33, 38, 46, 54);
INSERT INTO `lari_wanita` VALUES (99, '00:30:53', 2, 7, 12, 17, 22, 27, 32, 37, 45, 53);
INSERT INTO `lari_wanita` VALUES (100, '00:31:09', 1, 6, 11, 16, 21, 26, 31, 36, 44, 52);
INSERT INTO `lari_wanita` VALUES (101, '00:31:25', 0, 5, 10, 15, 20, 25, 30, 35, 43, 51);
INSERT INTO `lari_wanita` VALUES (102, '00:31:41', 0, 4, 9, 14, 19, 24, 29, 34, 42, 50);
INSERT INTO `lari_wanita` VALUES (103, '00:31:57', 0, 3, 8, 13, 18, 23, 28, 33, 41, 49);
INSERT INTO `lari_wanita` VALUES (104, '00:32:13', 0, 2, 7, 12, 17, 22, 27, 32, 40, 48);
INSERT INTO `lari_wanita` VALUES (105, '00:32:29', 0, 1, 6, 11, 16, 21, 26, 31, 39, 47);
INSERT INTO `lari_wanita` VALUES (106, '00:32:46', 0, 0, 5, 10, 15, 20, 25, 30, 38, 46);
INSERT INTO `lari_wanita` VALUES (107, '00:33:03', 0, 0, 4, 9, 14, 19, 24, 29, 37, 45);
INSERT INTO `lari_wanita` VALUES (108, '00:33:20', 0, 0, 3, 8, 13, 18, 23, 28, 36, 44);
INSERT INTO `lari_wanita` VALUES (109, '00:33:37', 0, 0, 2, 7, 12, 17, 22, 27, 35, 43);
INSERT INTO `lari_wanita` VALUES (110, '00:33:54', 0, 0, 1, 6, 11, 16, 21, 26, 34, 42);
INSERT INTO `lari_wanita` VALUES (111, '00:34:11', 0, 0, 0, 5, 10, 15, 20, 25, 33, 41);
INSERT INTO `lari_wanita` VALUES (112, '00:34:28', 0, 0, 0, 4, 9, 14, 19, 24, 32, 40);
INSERT INTO `lari_wanita` VALUES (113, '00:34:46', 0, 0, 0, 3, 8, 13, 18, 23, 31, 39);
INSERT INTO `lari_wanita` VALUES (114, '00:35:04', 0, 0, 0, 2, 7, 12, 17, 22, 30, 38);
INSERT INTO `lari_wanita` VALUES (115, '00:35:22', 0, 0, 0, 1, 6, 11, 16, 21, 29, 37);
INSERT INTO `lari_wanita` VALUES (116, '00:35:40', 0, 0, 0, 0, 5, 10, 15, 20, 28, 36);
INSERT INTO `lari_wanita` VALUES (117, '00:35:58', 0, 0, 0, 0, 4, 9, 14, 19, 27, 35);
INSERT INTO `lari_wanita` VALUES (118, '00:36:16', 0, 0, 0, 0, 3, 8, 13, 18, 26, 34);
INSERT INTO `lari_wanita` VALUES (119, '00:36:34', 0, 0, 0, 0, 2, 7, 12, 17, 25, 33);
INSERT INTO `lari_wanita` VALUES (120, '00:36:52', 0, 0, 0, 0, 1, 6, 11, 16, 24, 32);
INSERT INTO `lari_wanita` VALUES (121, '00:37:10', 0, 0, 0, 0, 0, 5, 10, 15, 23, 31);
INSERT INTO `lari_wanita` VALUES (122, '00:37:29', 0, 0, 0, 0, 0, 4, 9, 14, 22, 30);
INSERT INTO `lari_wanita` VALUES (123, '00:37:48', 0, 0, 0, 0, 0, 3, 8, 13, 21, 29);
INSERT INTO `lari_wanita` VALUES (124, '00:38:07', 0, 0, 0, 0, 0, 2, 7, 12, 20, 28);
INSERT INTO `lari_wanita` VALUES (125, '00:38:26', 0, 0, 0, 0, 0, 1, 6, 11, 19, 27);
INSERT INTO `lari_wanita` VALUES (126, '00:38:45', 0, 0, 0, 0, 0, 0, 5, 10, 18, 26);
INSERT INTO `lari_wanita` VALUES (127, '00:39:04', 0, 0, 0, 0, 0, 0, 4, 9, 17, 25);
INSERT INTO `lari_wanita` VALUES (128, '00:39:23', 0, 0, 0, 0, 0, 0, 3, 8, 16, 24);
INSERT INTO `lari_wanita` VALUES (129, '00:39:42', 0, 0, 0, 0, 0, 0, 2, 7, 15, 23);
INSERT INTO `lari_wanita` VALUES (130, '00:40:01', 0, 0, 0, 0, 0, 0, 1, 6, 14, 22);
INSERT INTO `lari_wanita` VALUES (131, '00:40:20', 0, 0, 0, 0, 0, 0, 0, 5, 13, 21);
INSERT INTO `lari_wanita` VALUES (132, '00:40:40', 0, 0, 0, 0, 0, 0, 0, 4, 12, 20);
INSERT INTO `lari_wanita` VALUES (133, '00:41:00', 0, 0, 0, 0, 0, 0, 0, 3, 11, 19);
INSERT INTO `lari_wanita` VALUES (134, '00:41:20', 0, 0, 0, 0, 0, 0, 0, 2, 10, 18);
INSERT INTO `lari_wanita` VALUES (135, '00:41:40', 0, 0, 0, 0, 0, 0, 0, 1, 9, 17);
INSERT INTO `lari_wanita` VALUES (136, '00:42:00', 0, 0, 0, 0, 0, 0, 0, 0, 8, 16);
INSERT INTO `lari_wanita` VALUES (137, '00:42:20', 0, 0, 0, 0, 0, 0, 0, 0, 7, 15);
INSERT INTO `lari_wanita` VALUES (138, '00:42:40', 0, 0, 0, 0, 0, 0, 0, 0, 6, 14);
INSERT INTO `lari_wanita` VALUES (139, '00:43:00', 0, 0, 0, 0, 0, 0, 0, 0, 5, 13);
INSERT INTO `lari_wanita` VALUES (140, '00:43:20', 0, 0, 0, 0, 0, 0, 0, 0, 4, 12);
INSERT INTO `lari_wanita` VALUES (141, '00:43:40', 0, 0, 0, 0, 0, 0, 0, 0, 3, 11);
INSERT INTO `lari_wanita` VALUES (142, '00:44:01', 0, 0, 0, 0, 0, 0, 0, 0, 2, 10);
INSERT INTO `lari_wanita` VALUES (143, '00:44:22', 0, 0, 0, 0, 0, 0, 0, 0, 1, 9);
INSERT INTO `lari_wanita` VALUES (144, '00:44:43', 0, 0, 0, 0, 0, 0, 0, 0, 0, 8);
INSERT INTO `lari_wanita` VALUES (145, '00:45:04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 7);
INSERT INTO `lari_wanita` VALUES (146, '00:45:25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 6);
INSERT INTO `lari_wanita` VALUES (147, '00:45:46', 0, 0, 0, 0, 0, 0, 0, 0, 0, 5);
INSERT INTO `lari_wanita` VALUES (148, '00:46:07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 4);
INSERT INTO `lari_wanita` VALUES (149, '00:46:28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);
INSERT INTO `lari_wanita` VALUES (150, '00:46:49', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2);
INSERT INTO `lari_wanita` VALUES (151, '00:47:10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- ----------------------------
-- Table structure for mabes
-- ----------------------------
DROP TABLE IF EXISTS `mabes`;
CREATE TABLE `mabes`  (
  `id_mabes` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mabes` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_mabes`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for nilai_b_pria
-- ----------------------------
DROP TABLE IF EXISTS `nilai_b_pria`;
CREATE TABLE `nilai_b_pria`  (
  `id` int(11) NOT NULL,
  `I` int(11) NULL DEFAULT NULL,
  `II` int(11) NULL DEFAULT NULL,
  `III` int(11) NULL DEFAULT NULL,
  `IV` int(11) NULL DEFAULT NULL,
  `V` int(11) NULL DEFAULT NULL,
  `VI` int(11) NULL DEFAULT NULL,
  `VII` int(11) NULL DEFAULT NULL,
  `VIII` int(11) NULL DEFAULT NULL,
  `IX` int(11) NULL DEFAULT NULL,
  `X` int(11) NULL DEFAULT NULL,
  `pull_up` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sit_up` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `push_up` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `shuttle_run` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nilai_b_pria
-- ----------------------------
INSERT INTO `nilai_b_pria` VALUES (1, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, '18', '45', '43', '15.9');
INSERT INTO `nilai_b_pria` VALUES (2, 99, 100, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '16');
INSERT INTO `nilai_b_pria` VALUES (3, 98, 100, 100, 100, 100, 100, 100, 100, 100, 100, '-', '44', '42', '16.1');
INSERT INTO `nilai_b_pria` VALUES (4, 97, 100, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '16.2');
INSERT INTO `nilai_b_pria` VALUES (5, 96, 100, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '16.3');
INSERT INTO `nilai_b_pria` VALUES (6, 95, 100, 100, 100, 100, 100, 100, 100, 100, 100, '17', '43', '41', '16.4');
INSERT INTO `nilai_b_pria` VALUES (7, 94, 99, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '16.5');
INSERT INTO `nilai_b_pria` VALUES (8, 93, 98, 100, 100, 100, 100, 100, 100, 100, 100, '-', '42', '40', '16.6');
INSERT INTO `nilai_b_pria` VALUES (9, 92, 97, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '16.7');
INSERT INTO `nilai_b_pria` VALUES (10, 91, 96, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '16.8');
INSERT INTO `nilai_b_pria` VALUES (11, 90, 95, 100, 100, 100, 100, 100, 100, 100, 100, '16', '41', '39', '16.9');
INSERT INTO `nilai_b_pria` VALUES (12, 89, 94, 99, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '17');
INSERT INTO `nilai_b_pria` VALUES (13, 88, 93, 98, 100, 100, 100, 100, 100, 100, 100, '-', '40', '38', '17.1');
INSERT INTO `nilai_b_pria` VALUES (14, 87, 92, 97, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '17.2');
INSERT INTO `nilai_b_pria` VALUES (15, 86, 91, 96, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', '17.3');
INSERT INTO `nilai_b_pria` VALUES (16, 85, 90, 95, 100, 100, 100, 100, 100, 100, 100, '15', '39', '37', '17.4');
INSERT INTO `nilai_b_pria` VALUES (17, 84, 89, 94, 99, 100, 100, 100, 100, 100, 100, '-', '-', '-', '17.5');
INSERT INTO `nilai_b_pria` VALUES (18, 83, 88, 93, 98, 100, 100, 100, 100, 100, 100, '-', '38', '36', '17.6');
INSERT INTO `nilai_b_pria` VALUES (19, 82, 87, 92, 97, 100, 100, 100, 100, 100, 100, '-', '-', '-', '17.7');
INSERT INTO `nilai_b_pria` VALUES (20, 81, 86, 91, 96, 100, 100, 100, 100, 100, 100, '-', '-', '-', '17.8');
INSERT INTO `nilai_b_pria` VALUES (21, 80, 85, 90, 95, 100, 100, 100, 100, 100, 100, '14', '37', '35', '17.9');
INSERT INTO `nilai_b_pria` VALUES (22, 79, 84, 89, 94, 99, 100, 100, 100, 100, 100, '-', '-', '-', '18');
INSERT INTO `nilai_b_pria` VALUES (23, 78, 83, 88, 93, 98, 100, 100, 100, 100, 100, '-', '36', '34', '18.1');
INSERT INTO `nilai_b_pria` VALUES (24, 77, 82, 87, 92, 97, 100, 100, 100, 100, 100, '-', '-', '-', '18.2');
INSERT INTO `nilai_b_pria` VALUES (25, 76, 81, 86, 91, 96, 100, 100, 100, 100, 100, '-', '-', '-', '18.3');
INSERT INTO `nilai_b_pria` VALUES (26, 75, 80, 85, 90, 95, 100, 100, 100, 100, 100, '13', '35', '33', '18.4');
INSERT INTO `nilai_b_pria` VALUES (27, 74, 79, 84, 89, 94, 99, 100, 100, 100, 100, '-', '-', '-', '18.5');
INSERT INTO `nilai_b_pria` VALUES (28, 73, 78, 83, 88, 93, 98, 100, 100, 100, 100, '-', '34', '32', '18.6');
INSERT INTO `nilai_b_pria` VALUES (29, 72, 77, 82, 87, 92, 97, 100, 100, 100, 100, '-', '-', '-', '18.7');
INSERT INTO `nilai_b_pria` VALUES (30, 71, 76, 81, 86, 91, 96, 100, 100, 100, 100, '-', '-', '-', '18.8');
INSERT INTO `nilai_b_pria` VALUES (31, 70, 75, 80, 85, 90, 95, 100, 100, 100, 100, '12', '33', '31', '18.9');
INSERT INTO `nilai_b_pria` VALUES (32, 69, 74, 79, 84, 89, 94, 99, 100, 100, 100, '-', '-', '-', '19');
INSERT INTO `nilai_b_pria` VALUES (33, 68, 73, 78, 83, 88, 93, 98, 100, 100, 100, '-', '32', '30', '19.1');
INSERT INTO `nilai_b_pria` VALUES (34, 67, 72, 77, 82, 87, 92, 97, 100, 100, 100, '-', '-', '-', '19.2');
INSERT INTO `nilai_b_pria` VALUES (35, 66, 71, 76, 81, 86, 91, 96, 100, 100, 100, '-', '-', '-', '19.3');
INSERT INTO `nilai_b_pria` VALUES (36, 65, 70, 75, 80, 85, 90, 95, 100, 100, 100, '11', '31', '29', '19.4');
INSERT INTO `nilai_b_pria` VALUES (37, 64, 69, 74, 79, 84, 89, 94, 99, 100, 100, '-', '-', '-', '19.5');
INSERT INTO `nilai_b_pria` VALUES (38, 63, 68, 73, 78, 83, 88, 93, 98, 100, 100, '-', '30', '28', '19.6');
INSERT INTO `nilai_b_pria` VALUES (39, 62, 67, 72, 77, 82, 87, 92, 97, 100, 100, '-', '-', '-', '19.7');
INSERT INTO `nilai_b_pria` VALUES (40, 61, 66, 71, 76, 81, 86, 91, 96, 100, 100, '-', '29', '27', '19.8');
INSERT INTO `nilai_b_pria` VALUES (41, 60, 65, 70, 75, 80, 85, 90, 95, 100, 100, '-', '-', '-', '19.9');
INSERT INTO `nilai_b_pria` VALUES (42, 59, 64, 69, 74, 79, 84, 89, 94, 100, 100, '-', '28', '26', '20');
INSERT INTO `nilai_b_pria` VALUES (43, 58, 63, 68, 73, 78, 83, 88, 93, 100, 100, '-', '-', '-', '20.1');
INSERT INTO `nilai_b_pria` VALUES (44, 57, 62, 67, 72, 77, 82, 87, 92, 100, 100, '10', '27', '25', '20.2');
INSERT INTO `nilai_b_pria` VALUES (45, 56, 61, 66, 71, 76, 81, 86, 91, 99, 100, '-', '-', '-', '20.3');
INSERT INTO `nilai_b_pria` VALUES (46, 55, 60, 65, 70, 75, 80, 85, 90, 98, 100, '-', '26', '24', '20.4');
INSERT INTO `nilai_b_pria` VALUES (47, 54, 59, 64, 69, 74, 79, 84, 89, 97, 100, '-', '-', '-', '20.5');
INSERT INTO `nilai_b_pria` VALUES (48, 53, 58, 63, 68, 73, 78, 83, 88, 96, 100, '-', '25', '23', '20.6');
INSERT INTO `nilai_b_pria` VALUES (49, 52, 57, 62, 67, 72, 77, 82, 87, 95, 100, '-', '-', '-', '20.7');
INSERT INTO `nilai_b_pria` VALUES (50, 51, 56, 61, 66, 71, 76, 81, 86, 94, 100, '-', '24', '22', '20.8');
INSERT INTO `nilai_b_pria` VALUES (51, 50, 55, 60, 65, 70, 75, 80, 85, 93, 100, '-', '-', '-', '20.9');
INSERT INTO `nilai_b_pria` VALUES (52, 49, 54, 59, 64, 69, 74, 79, 84, 92, 100, '9', '23', '21', '21');
INSERT INTO `nilai_b_pria` VALUES (53, 48, 53, 58, 63, 68, 73, 78, 83, 91, 99, '-', '-', '-', '21.1');
INSERT INTO `nilai_b_pria` VALUES (54, 47, 52, 57, 62, 67, 72, 77, 82, 90, 98, '-', '-', '-', '21.2');
INSERT INTO `nilai_b_pria` VALUES (55, 46, 51, 56, 61, 66, 71, 76, 81, 89, 97, '-', '-', '-', '21.3');
INSERT INTO `nilai_b_pria` VALUES (56, 45, 50, 55, 60, 65, 70, 75, 80, 88, 96, '8', '22', '20', '21.4');
INSERT INTO `nilai_b_pria` VALUES (57, 44, 49, 54, 59, 64, 69, 74, 79, 87, 95, '-', '-', '-', '21.5');
INSERT INTO `nilai_b_pria` VALUES (58, 43, 48, 53, 58, 63, 68, 73, 78, 86, 94, '-', '-', '-', '21.6');
INSERT INTO `nilai_b_pria` VALUES (59, 42, 47, 52, 57, 62, 67, 72, 77, 85, 93, '-', '-', '-', '21.7');
INSERT INTO `nilai_b_pria` VALUES (60, 41, 46, 51, 56, 61, 66, 71, 76, 84, 92, '7', '21', '19', '21.8');
INSERT INTO `nilai_b_pria` VALUES (61, 40, 45, 50, 55, 60, 65, 70, 75, 83, 91, '-', '-', '-', '21.9');
INSERT INTO `nilai_b_pria` VALUES (62, 39, 44, 49, 54, 59, 64, 69, 74, 82, 90, '-', '-', '-', '22');
INSERT INTO `nilai_b_pria` VALUES (63, 38, 43, 48, 53, 58, 63, 68, 73, 81, 89, '-', '-', '-', '22.1');
INSERT INTO `nilai_b_pria` VALUES (64, 37, 42, 47, 52, 57, 62, 67, 72, 80, 88, '-', '20', '18', '22.2');
INSERT INTO `nilai_b_pria` VALUES (65, 36, 41, 46, 51, 56, 61, 66, 71, 79, 87, '-', '-', '-', '22.3');
INSERT INTO `nilai_b_pria` VALUES (66, 35, 40, 45, 50, 55, 60, 65, 70, 78, 86, '-', '-', '-', '22.4');
INSERT INTO `nilai_b_pria` VALUES (67, 34, 39, 44, 49, 54, 59, 64, 69, 77, 85, '-', '-', '-', '22.5');
INSERT INTO `nilai_b_pria` VALUES (68, 33, 38, 43, 48, 53, 58, 63, 68, 76, 84, '6', '19', '17', '22.6');
INSERT INTO `nilai_b_pria` VALUES (69, 32, 37, 42, 47, 52, 57, 62, 67, 75, 83, '-', '-', '-', '22.7');
INSERT INTO `nilai_b_pria` VALUES (70, 31, 36, 41, 46, 51, 56, 61, 66, 74, 82, '-', '-', '-', '22.8');
INSERT INTO `nilai_b_pria` VALUES (71, 30, 35, 40, 45, 50, 55, 60, 65, 73, 81, '-', '-', '-', '22.9');
INSERT INTO `nilai_b_pria` VALUES (72, 29, 34, 39, 44, 49, 54, 59, 64, 72, 80, '-', '18', '16', '23');
INSERT INTO `nilai_b_pria` VALUES (73, 28, 33, 38, 43, 48, 53, 58, 63, 71, 79, '-', '-', '-', '23.1');
INSERT INTO `nilai_b_pria` VALUES (74, 27, 32, 37, 42, 47, 52, 57, 62, 70, 78, '-', '-', '-', '23.2');
INSERT INTO `nilai_b_pria` VALUES (75, 26, 31, 36, 41, 46, 51, 56, 61, 69, 77, '-', '-', '-', '23.3');
INSERT INTO `nilai_b_pria` VALUES (76, 25, 30, 35, 40, 45, 50, 55, 60, 68, 76, '5', '17', '15', '23.4');
INSERT INTO `nilai_b_pria` VALUES (77, 24, 29, 34, 39, 44, 49, 54, 59, 67, 75, '-', '-', '-', '23.5');
INSERT INTO `nilai_b_pria` VALUES (78, 23, 28, 33, 38, 43, 48, 53, 58, 66, 74, '-', '-', '-', '23.6');
INSERT INTO `nilai_b_pria` VALUES (79, 22, 27, 32, 37, 42, 47, 52, 57, 65, 73, '-', '-', '-', '23.7');
INSERT INTO `nilai_b_pria` VALUES (80, 21, 26, 31, 36, 41, 46, 51, 56, 64, 72, '-', '16', '14', '23.8');
INSERT INTO `nilai_b_pria` VALUES (81, 20, 25, 30, 35, 40, 45, 50, 55, 63, 71, '-', '-', '-', '23.9');
INSERT INTO `nilai_b_pria` VALUES (82, 19, 24, 29, 34, 39, 44, 49, 54, 62, 70, '-', '-', '-', '24');
INSERT INTO `nilai_b_pria` VALUES (83, 18, 23, 28, 33, 38, 43, 48, 53, 61, 69, '-', '-', '-', '24.1');
INSERT INTO `nilai_b_pria` VALUES (84, 17, 22, 27, 32, 37, 42, 47, 52, 60, 68, '4', '15', '13', '24.2');
INSERT INTO `nilai_b_pria` VALUES (85, 16, 21, 26, 31, 36, 41, 46, 51, 59, 67, '-', '-', '-', '24.3');
INSERT INTO `nilai_b_pria` VALUES (86, 15, 20, 25, 30, 35, 40, 45, 50, 58, 66, '-', '-', '-', '24.4');
INSERT INTO `nilai_b_pria` VALUES (87, 14, 19, 24, 29, 34, 39, 44, 49, 57, 65, '-', '-', '-', '24.5');
INSERT INTO `nilai_b_pria` VALUES (88, 13, 18, 23, 28, 33, 38, 43, 48, 56, 64, '-', '14', '12', '24.6');
INSERT INTO `nilai_b_pria` VALUES (89, 12, 17, 22, 27, 32, 37, 42, 47, 55, 63, '-', '-', '-', '24.7');
INSERT INTO `nilai_b_pria` VALUES (90, 11, 16, 21, 26, 31, 36, 41, 46, 54, 62, '-', '-', '-', '24.8');
INSERT INTO `nilai_b_pria` VALUES (91, 10, 15, 20, 25, 30, 35, 40, 45, 53, 61, '-', '-', '-', '24.9');
INSERT INTO `nilai_b_pria` VALUES (92, 9, 14, 19, 24, 29, 34, 39, 44, 52, 60, '3', '13', '11', '25');
INSERT INTO `nilai_b_pria` VALUES (93, 8, 13, 18, 23, 28, 33, 38, 43, 51, 59, '-', '-', '-', '25.1');
INSERT INTO `nilai_b_pria` VALUES (94, 7, 12, 17, 22, 27, 32, 37, 42, 50, 58, '-', '-', '-', '25.2');
INSERT INTO `nilai_b_pria` VALUES (95, 6, 11, 16, 21, 26, 31, 36, 41, 49, 57, '-', '-', '-', '25.3');
INSERT INTO `nilai_b_pria` VALUES (96, 5, 10, 15, 20, 25, 30, 35, 40, 48, 56, '-', '12', '10', '25.4');
INSERT INTO `nilai_b_pria` VALUES (97, 4, 9, 14, 19, 24, 29, 34, 39, 47, 55, '-', '-', '-', '25.5');
INSERT INTO `nilai_b_pria` VALUES (98, 3, 8, 13, 18, 23, 28, 33, 38, 46, 54, '-', '-', '-', '25.6');
INSERT INTO `nilai_b_pria` VALUES (99, 2, 7, 12, 17, 22, 27, 32, 37, 45, 53, '-', '-', '-', '25.7');
INSERT INTO `nilai_b_pria` VALUES (100, 1, 6, 11, 16, 21, 26, 31, 36, 44, 52, '2', '-', '-', '25.8');
INSERT INTO `nilai_b_pria` VALUES (101, 0, 5, 10, 15, 20, 25, 30, 35, 43, 51, '-', '-', '-', '25.9');
INSERT INTO `nilai_b_pria` VALUES (102, 0, 4, 9, 14, 19, 24, 29, 34, 42, 50, '-', '-', '-', '26');
INSERT INTO `nilai_b_pria` VALUES (103, 0, 3, 8, 13, 18, 23, 28, 33, 41, 49, '-', '11', '9', '26.1');
INSERT INTO `nilai_b_pria` VALUES (104, 0, 2, 7, 12, 17, 22, 27, 32, 40, 48, '-', '-', '-', '26.2');
INSERT INTO `nilai_b_pria` VALUES (105, 0, 1, 6, 11, 16, 21, 26, 31, 39, 47, '-', '-', '-', '26.3');
INSERT INTO `nilai_b_pria` VALUES (106, 0, 0, 5, 10, 15, 20, 25, 30, 38, 46, '-', '-', '-', '26.4');
INSERT INTO `nilai_b_pria` VALUES (107, 0, 0, 4, 9, 14, 19, 24, 29, 37, 45, '1', '10', '8', '26.5');
INSERT INTO `nilai_b_pria` VALUES (108, 0, 0, 3, 8, 13, 18, 23, 28, 36, 44, '-', '-', '-', '26.6');
INSERT INTO `nilai_b_pria` VALUES (109, 0, 0, 2, 7, 12, 17, 22, 27, 35, 43, '-', '-', '-', '26.7');
INSERT INTO `nilai_b_pria` VALUES (110, 0, 0, 1, 6, 11, 16, 21, 26, 34, 42, '-', '-', '-', '26.8');
INSERT INTO `nilai_b_pria` VALUES (111, 0, 0, 0, 5, 10, 15, 20, 25, 33, 41, '-', '9', '7', '26.9');
INSERT INTO `nilai_b_pria` VALUES (112, 0, 0, 0, 4, 9, 14, 19, 24, 32, 40, '-', '-', '-', '27');
INSERT INTO `nilai_b_pria` VALUES (113, 0, 0, 0, 3, 8, 13, 18, 23, 31, 39, '-', '-', '-', '27.1');
INSERT INTO `nilai_b_pria` VALUES (114, 0, 0, 0, 2, 7, 12, 17, 22, 30, 38, '-', '-', '-', '27.2');
INSERT INTO `nilai_b_pria` VALUES (115, 0, 0, 0, 1, 6, 11, 16, 21, 29, 37, '-', '-', '-', '27.3');
INSERT INTO `nilai_b_pria` VALUES (116, 0, 0, 0, 0, 5, 10, 15, 20, 28, 36, '-', '-', '-', '27.4');
INSERT INTO `nilai_b_pria` VALUES (117, 0, 0, 0, 0, 4, 9, 14, 19, 27, 35, '-', '8', '6', '27.5');
INSERT INTO `nilai_b_pria` VALUES (118, 0, 0, 0, 0, 3, 8, 13, 18, 26, 34, '-', '-', '-', '27.6');
INSERT INTO `nilai_b_pria` VALUES (119, 0, 0, 0, 0, 2, 7, 12, 17, 25, 33, '-', '-', '-', '27.7');
INSERT INTO `nilai_b_pria` VALUES (120, 0, 0, 0, 0, 1, 6, 11, 16, 24, 32, '-', '-', '-', '27.8');
INSERT INTO `nilai_b_pria` VALUES (121, 0, 0, 0, 0, 0, 5, 10, 15, 23, 31, '-', '-', '-', '27.9');
INSERT INTO `nilai_b_pria` VALUES (122, 0, 0, 0, 0, 0, 4, 9, 14, 22, 30, '-', '7', '5', '28');
INSERT INTO `nilai_b_pria` VALUES (123, 0, 0, 0, 0, 0, 3, 8, 13, 21, 29, '-', '-', '-', '28.1');
INSERT INTO `nilai_b_pria` VALUES (124, 0, 0, 0, 0, 0, 2, 7, 12, 20, 28, '-', '-', '-', '28.2');
INSERT INTO `nilai_b_pria` VALUES (125, 0, 0, 0, 0, 0, 1, 6, 11, 19, 27, '-', '-', '-', '28.3');
INSERT INTO `nilai_b_pria` VALUES (126, 0, 0, 0, 0, 0, 0, 5, 10, 18, 26, '-', '-', '-', '28.4');
INSERT INTO `nilai_b_pria` VALUES (127, 0, 0, 0, 0, 0, 0, 4, 9, 17, 25, '-', '6', '4', '28.5');
INSERT INTO `nilai_b_pria` VALUES (128, 0, 0, 0, 0, 0, 0, 3, 8, 16, 24, '-', '-', '-', '28.6');
INSERT INTO `nilai_b_pria` VALUES (129, 0, 0, 0, 0, 0, 0, 2, 7, 15, 23, '-', '-', '-', '28.7');
INSERT INTO `nilai_b_pria` VALUES (130, 0, 0, 0, 0, 0, 0, 1, 6, 14, 22, '-', '-', '-', '28.8');
INSERT INTO `nilai_b_pria` VALUES (131, 0, 0, 0, 0, 0, 0, 0, 5, 13, 21, '-', '-', '-', '28.9');
INSERT INTO `nilai_b_pria` VALUES (132, 0, 0, 0, 0, 0, 0, 0, 4, 12, 20, '-', '5', '3', '29');
INSERT INTO `nilai_b_pria` VALUES (133, 0, 0, 0, 0, 0, 0, 0, 3, 11, 19, '-', '-', '-', '29.1');
INSERT INTO `nilai_b_pria` VALUES (134, 0, 0, 0, 0, 0, 0, 0, 2, 10, 18, '-', '-', '-', '29.2');
INSERT INTO `nilai_b_pria` VALUES (135, 0, 0, 0, 0, 0, 0, 0, 1, 9, 17, '-', '-', '-', '29.3');
INSERT INTO `nilai_b_pria` VALUES (136, 0, 0, 0, 0, 0, 0, 0, 0, 8, 16, '-', '-', '-', '29.4');
INSERT INTO `nilai_b_pria` VALUES (137, 0, 0, 0, 0, 0, 0, 0, 0, 7, 15, '-', '-', '-', '29.5');
INSERT INTO `nilai_b_pria` VALUES (138, 0, 0, 0, 0, 0, 0, 0, 0, 6, 14, '-', '4', '2', '29.6');
INSERT INTO `nilai_b_pria` VALUES (139, 0, 0, 0, 0, 0, 0, 0, 0, 5, 13, '-', '-', '-', '29.7');
INSERT INTO `nilai_b_pria` VALUES (140, 0, 0, 0, 0, 0, 0, 0, 0, 4, 12, '-', '-', '-', '29.8');
INSERT INTO `nilai_b_pria` VALUES (141, 0, 0, 0, 0, 0, 0, 0, 0, 3, 11, '-', '-', '-', '29.9');
INSERT INTO `nilai_b_pria` VALUES (142, 0, 0, 0, 0, 0, 0, 0, 0, 2, 10, '-', '-', '-', '30.0');
INSERT INTO `nilai_b_pria` VALUES (143, 0, 0, 0, 0, 0, 0, 0, 0, 1, 9, '-', '3', '-', '30.1');
INSERT INTO `nilai_b_pria` VALUES (144, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, '-', '-', '-', '30.2');
INSERT INTO `nilai_b_pria` VALUES (145, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, '-', '-', '-', '30.3');
INSERT INTO `nilai_b_pria` VALUES (146, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, '-', '-', '-', '30.4');
INSERT INTO `nilai_b_pria` VALUES (147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, '-', '2', '1', '30.5');
INSERT INTO `nilai_b_pria` VALUES (148, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, '-', '-', '-', '30.6');
INSERT INTO `nilai_b_pria` VALUES (149, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, '-', '-', '-', '30.7');
INSERT INTO `nilai_b_pria` VALUES (150, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, '-', '-', '-', '30.8');
INSERT INTO `nilai_b_pria` VALUES (151, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '-', '1', '-', '30.9');

-- ----------------------------
-- Table structure for nilai_b_wanita
-- ----------------------------
DROP TABLE IF EXISTS `nilai_b_wanita`;
CREATE TABLE `nilai_b_wanita`  (
  `id` int(11) NOT NULL,
  `I` int(11) NULL DEFAULT NULL,
  `II` int(11) NULL DEFAULT NULL,
  `III` int(11) NULL DEFAULT NULL,
  `IV` int(11) NULL DEFAULT NULL,
  `V` int(11) NULL DEFAULT NULL,
  `VI` int(11) NULL DEFAULT NULL,
  `VII` int(11) NULL DEFAULT NULL,
  `VIII` int(11) NULL DEFAULT NULL,
  `IX` int(11) NULL DEFAULT NULL,
  `X` int(11) NULL DEFAULT NULL,
  `pull_up` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sit_up` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `push_up` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `shuttle_run` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nilai_b_wanita
-- ----------------------------
INSERT INTO `nilai_b_wanita` VALUES (1, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, '63', '42', '28', 17.2);
INSERT INTO `nilai_b_wanita` VALUES (2, 99, 100, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', 17.3);
INSERT INTO `nilai_b_wanita` VALUES (3, 98, 100, 100, 100, 100, 100, 100, 100, 100, 100, '62', '41', '27', 17.4);
INSERT INTO `nilai_b_wanita` VALUES (4, 97, 100, 100, 100, 100, 100, 100, 100, 100, 100, '61', '-', '-', 17.5);
INSERT INTO `nilai_b_wanita` VALUES (5, 96, 100, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', 17.6);
INSERT INTO `nilai_b_wanita` VALUES (6, 95, 100, 100, 100, 100, 100, 100, 100, 100, 100, '60', '40', '26', 17.7);
INSERT INTO `nilai_b_wanita` VALUES (7, 94, 99, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', 17.8);
INSERT INTO `nilai_b_wanita` VALUES (8, 93, 98, 100, 100, 100, 100, 100, 100, 100, 100, '59', '39', '25', 17.9);
INSERT INTO `nilai_b_wanita` VALUES (9, 92, 97, 100, 100, 100, 100, 100, 100, 100, 100, '58', '-', '-', 18);
INSERT INTO `nilai_b_wanita` VALUES (10, 91, 96, 100, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', 18.1);
INSERT INTO `nilai_b_wanita` VALUES (11, 90, 95, 100, 100, 100, 100, 100, 100, 100, 100, '57', '38', '24', 18.2);
INSERT INTO `nilai_b_wanita` VALUES (12, 89, 94, 99, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', 18.3);
INSERT INTO `nilai_b_wanita` VALUES (13, 88, 93, 98, 100, 100, 100, 100, 100, 100, 100, '56', '37', '23', 18.4);
INSERT INTO `nilai_b_wanita` VALUES (14, 87, 92, 97, 100, 100, 100, 100, 100, 100, 100, '55', '-', '-', 18.5);
INSERT INTO `nilai_b_wanita` VALUES (15, 86, 91, 96, 100, 100, 100, 100, 100, 100, 100, '-', '-', '-', 18.6);
INSERT INTO `nilai_b_wanita` VALUES (16, 85, 90, 95, 100, 100, 100, 100, 100, 100, 100, '54', '36', '22', 18.7);
INSERT INTO `nilai_b_wanita` VALUES (17, 84, 89, 94, 99, 100, 100, 100, 100, 100, 100, '-', '-', '-', 18.8);
INSERT INTO `nilai_b_wanita` VALUES (18, 83, 88, 93, 98, 100, 100, 100, 100, 100, 100, '53', '35', '21', 18.9);
INSERT INTO `nilai_b_wanita` VALUES (19, 82, 87, 92, 97, 100, 100, 100, 100, 100, 100, '52', '-', '-', 19);
INSERT INTO `nilai_b_wanita` VALUES (20, 81, 86, 91, 96, 100, 100, 100, 100, 100, 100, '-', '-', '-', 19.1);
INSERT INTO `nilai_b_wanita` VALUES (21, 80, 85, 90, 95, 100, 100, 100, 100, 100, 100, '51', '34', '20', 19.2);
INSERT INTO `nilai_b_wanita` VALUES (22, 79, 84, 89, 94, 99, 100, 100, 100, 100, 100, '-', '-', '-', 19.3);
INSERT INTO `nilai_b_wanita` VALUES (23, 78, 83, 88, 93, 98, 100, 100, 100, 100, 100, '50', '33', '19', 19.4);
INSERT INTO `nilai_b_wanita` VALUES (24, 77, 82, 87, 92, 97, 100, 100, 100, 100, 100, '49', '-', '-', 19.5);
INSERT INTO `nilai_b_wanita` VALUES (25, 76, 81, 86, 91, 96, 100, 100, 100, 100, 100, '-', '-', '-', 19.6);
INSERT INTO `nilai_b_wanita` VALUES (26, 75, 80, 85, 90, 95, 100, 100, 100, 100, 100, '48', '32', '18', 19.7);
INSERT INTO `nilai_b_wanita` VALUES (27, 74, 79, 84, 89, 94, 99, 100, 100, 100, 100, '-', '-', '-', 19.8);
INSERT INTO `nilai_b_wanita` VALUES (28, 73, 78, 83, 88, 93, 98, 100, 100, 100, 100, '47', '-', '17', 19.9);
INSERT INTO `nilai_b_wanita` VALUES (29, 72, 77, 82, 87, 92, 97, 100, 100, 100, 100, '46', '31', '-', 20);
INSERT INTO `nilai_b_wanita` VALUES (30, 71, 76, 81, 86, 91, 96, 100, 100, 100, 100, '-', '-', '-', 20.1);
INSERT INTO `nilai_b_wanita` VALUES (31, 70, 75, 80, 85, 90, 95, 100, 100, 100, 100, '45', '30', '16', 20.2);
INSERT INTO `nilai_b_wanita` VALUES (32, 69, 74, 79, 84, 89, 94, 99, 100, 100, 100, '-', '-', '-', 20.3);
INSERT INTO `nilai_b_wanita` VALUES (33, 68, 73, 78, 83, 88, 93, 98, 100, 100, 100, '44', '29', '15', 20.4);
INSERT INTO `nilai_b_wanita` VALUES (34, 67, 72, 77, 82, 87, 92, 97, 100, 100, 100, '43', '-', '-', 20.5);
INSERT INTO `nilai_b_wanita` VALUES (35, 66, 71, 76, 81, 86, 91, 96, 100, 100, 100, '-', '-', '-', 20.6);
INSERT INTO `nilai_b_wanita` VALUES (36, 65, 70, 75, 80, 85, 90, 95, 100, 100, 100, '42', '28', '14', 20.7);
INSERT INTO `nilai_b_wanita` VALUES (37, 64, 69, 74, 79, 84, 89, 94, 99, 100, 100, '-', '-', '-', 20.8);
INSERT INTO `nilai_b_wanita` VALUES (38, 63, 68, 73, 78, 83, 88, 93, 98, 100, 100, '-', '-', '-', 20.9);
INSERT INTO `nilai_b_wanita` VALUES (39, 62, 67, 72, 77, 82, 87, 92, 97, 100, 100, '41', '27', '13', 21);
INSERT INTO `nilai_b_wanita` VALUES (40, 61, 66, 71, 76, 81, 86, 91, 96, 100, 100, '-', '-', '-', 21.1);
INSERT INTO `nilai_b_wanita` VALUES (41, 60, 65, 70, 75, 80, 85, 90, 95, 100, 100, '-', '-', '-', 21.2);
INSERT INTO `nilai_b_wanita` VALUES (42, 59, 64, 69, 74, 79, 84, 89, 94, 100, 100, '40', '26', '-', 21.3);
INSERT INTO `nilai_b_wanita` VALUES (43, 58, 63, 68, 73, 78, 83, 88, 93, 100, 100, '-', '-', '-', 21.4);
INSERT INTO `nilai_b_wanita` VALUES (44, 57, 62, 67, 72, 77, 82, 87, 92, 100, 100, '39', '25', '12', 21.5);
INSERT INTO `nilai_b_wanita` VALUES (45, 56, 61, 66, 71, 76, 81, 86, 91, 99, 100, '-', '-', '-', 21.6);
INSERT INTO `nilai_b_wanita` VALUES (46, 55, 60, 65, 70, 75, 80, 85, 90, 98, 100, '38', '-', '-', 21.7);
INSERT INTO `nilai_b_wanita` VALUES (47, 54, 59, 64, 69, 74, 79, 84, 89, 97, 100, '-', '24', '11', 21.8);
INSERT INTO `nilai_b_wanita` VALUES (48, 53, 58, 63, 68, 73, 78, 83, 88, 96, 100, '-', '-', '-', 21.9);
INSERT INTO `nilai_b_wanita` VALUES (49, 52, 57, 62, 67, 72, 77, 82, 87, 95, 100, '37', '-', '-', 22);
INSERT INTO `nilai_b_wanita` VALUES (50, 51, 56, 61, 66, 71, 76, 81, 86, 94, 100, '-', '23', '-', 22.1);
INSERT INTO `nilai_b_wanita` VALUES (51, 50, 55, 60, 65, 70, 75, 80, 85, 93, 100, '-', '-', '10', 22.2);
INSERT INTO `nilai_b_wanita` VALUES (52, 49, 54, 59, 64, 69, 74, 79, 84, 92, 100, '36', '22', '-', 22.3);
INSERT INTO `nilai_b_wanita` VALUES (53, 48, 53, 58, 63, 68, 73, 78, 83, 91, 99, '-', '-', '-', 22.4);
INSERT INTO `nilai_b_wanita` VALUES (54, 47, 52, 57, 62, 67, 72, 77, 82, 90, 98, '-', '-', '-', 22.5);
INSERT INTO `nilai_b_wanita` VALUES (55, 46, 51, 56, 61, 66, 71, 76, 81, 89, 97, '35', '21', '-', 22.6);
INSERT INTO `nilai_b_wanita` VALUES (56, 45, 50, 55, 60, 65, 70, 75, 80, 88, 96, '-', '-', '-', 22.7);
INSERT INTO `nilai_b_wanita` VALUES (57, 44, 49, 54, 59, 64, 69, 74, 79, 87, 95, '-', '-', '-', 22.8);
INSERT INTO `nilai_b_wanita` VALUES (58, 43, 48, 53, 58, 63, 68, 73, 78, 86, 94, '34', '20', '-', 22.9);
INSERT INTO `nilai_b_wanita` VALUES (59, 42, 47, 52, 57, 62, 67, 72, 77, 85, 93, '-', NULL, '-', 23);
INSERT INTO `nilai_b_wanita` VALUES (60, 41, 46, 51, 56, 61, 66, 71, 76, 84, 92, '-', '-', '-', 23.1);
INSERT INTO `nilai_b_wanita` VALUES (61, 40, 45, 50, 55, 60, 65, 70, 75, 83, 91, '33', '19', '9', 23.2);
INSERT INTO `nilai_b_wanita` VALUES (62, 39, 44, 49, 54, 59, 64, 69, 74, 82, 90, '-', '-', '-', 23.3);
INSERT INTO `nilai_b_wanita` VALUES (63, 38, 43, 48, 53, 58, 63, 68, 73, 81, 89, '-', '-', '-', 23.4);
INSERT INTO `nilai_b_wanita` VALUES (64, 37, 42, 47, 52, 57, 62, 67, 72, 80, 88, '32', '18', '-', 23.5);
INSERT INTO `nilai_b_wanita` VALUES (65, 36, 41, 46, 51, 56, 61, 66, 71, 79, 87, '-', '-', '-', 23.6);
INSERT INTO `nilai_b_wanita` VALUES (66, 35, 40, 45, 50, 55, 60, 65, 70, 78, 86, '31', '-', '-', 23.7);
INSERT INTO `nilai_b_wanita` VALUES (67, 34, 39, 44, 49, 54, 59, 64, 69, 77, 85, '-', '-', '-', 23.8);
INSERT INTO `nilai_b_wanita` VALUES (68, 33, 38, 43, 48, 53, 58, 63, 68, 76, 84, '30', '17', '-', 23.9);
INSERT INTO `nilai_b_wanita` VALUES (69, 32, 37, 42, 47, 52, 57, 62, 67, 75, 83, '-', NULL, '-', 24);
INSERT INTO `nilai_b_wanita` VALUES (70, 31, 36, 41, 46, 51, 56, 61, 66, 74, 82, '29', '-', '-', 24.1);
INSERT INTO `nilai_b_wanita` VALUES (71, 30, 35, 40, 45, 50, 55, 60, 65, 73, 81, '-', NULL, '8', 24.2);
INSERT INTO `nilai_b_wanita` VALUES (72, 29, 34, 39, 44, 49, 54, 59, 64, 72, 80, '28', '-', '-', 24.3);
INSERT INTO `nilai_b_wanita` VALUES (73, 28, 33, 38, 43, 48, 53, 58, 63, 71, 79, '-', '16', '-', 24.4);
INSERT INTO `nilai_b_wanita` VALUES (74, 27, 32, 37, 42, 47, 52, 57, 62, 70, 78, '-', '-', '-', 24.5);
INSERT INTO `nilai_b_wanita` VALUES (75, 26, 31, 36, 41, 46, 51, 56, 61, 69, 77, '27', '-', '-', 24.6);
INSERT INTO `nilai_b_wanita` VALUES (76, 25, 30, 35, 40, 45, 50, 55, 60, 68, 76, '-', '15', '-', 24.7);
INSERT INTO `nilai_b_wanita` VALUES (77, 24, 29, 34, 39, 44, 49, 54, 59, 67, 75, '26', NULL, '-', 24.8);
INSERT INTO `nilai_b_wanita` VALUES (78, 23, 28, 33, 38, 43, 48, 53, 58, 66, 74, '-', '-', '-', 24.9);
INSERT INTO `nilai_b_wanita` VALUES (79, 22, 27, 32, 37, 42, 47, 52, 57, 65, 73, '25', '14', '-', 25);
INSERT INTO `nilai_b_wanita` VALUES (80, 21, 26, 31, 36, 41, 46, 51, 56, 64, 72, '-', '-', '-', 25.1);
INSERT INTO `nilai_b_wanita` VALUES (81, 20, 25, 30, 35, 40, 45, 50, 55, 63, 71, '24', NULL, '7', 25.2);
INSERT INTO `nilai_b_wanita` VALUES (82, 19, 24, 29, 34, 39, 44, 49, 54, 62, 70, '-', '13', '-', 25.3);
INSERT INTO `nilai_b_wanita` VALUES (83, 18, 23, 28, 33, 38, 43, 48, 53, 61, 69, '23', NULL, '-', 25.4);
INSERT INTO `nilai_b_wanita` VALUES (84, 17, 22, 27, 32, 37, 42, 47, 52, 60, 68, '-', '-', '-', 25.5);
INSERT INTO `nilai_b_wanita` VALUES (85, 16, 21, 26, 31, 36, 41, 46, 51, 59, 67, '22', '12', '-', 25.6);
INSERT INTO `nilai_b_wanita` VALUES (86, 15, 20, 25, 30, 35, 40, 45, 50, 58, 66, '-', '-', '-', 25.7);
INSERT INTO `nilai_b_wanita` VALUES (87, 14, 19, 24, 29, 34, 39, 44, 49, 57, 65, '21', '-', '-', 25.8);
INSERT INTO `nilai_b_wanita` VALUES (88, 13, 18, 23, 28, 33, 38, 43, 48, 56, 64, '-', '11', '-', 25.9);
INSERT INTO `nilai_b_wanita` VALUES (89, 12, 17, 22, 27, 32, 37, 42, 47, 55, 63, '20', NULL, '-', 26);
INSERT INTO `nilai_b_wanita` VALUES (90, 11, 16, 21, 26, 31, 36, 41, 46, 54, 62, '-', '-', '-', 26.1);
INSERT INTO `nilai_b_wanita` VALUES (91, 10, 15, 20, 25, 30, 35, 40, 45, 53, 61, '19', '10', '6', 26.2);
INSERT INTO `nilai_b_wanita` VALUES (92, 9, 14, 19, 24, 29, 34, 39, 44, 52, 60, '-', '-', '-', 26.3);
INSERT INTO `nilai_b_wanita` VALUES (93, 8, 13, 18, 23, 28, 33, 38, 43, 51, 59, '18', NULL, '-', 26.4);
INSERT INTO `nilai_b_wanita` VALUES (94, 7, 12, 17, 22, 27, 32, 37, 42, 50, 58, '-', '9', '-', 26.5);
INSERT INTO `nilai_b_wanita` VALUES (95, 6, 11, 16, 21, 26, 31, 36, 41, 49, 57, '17', NULL, '-', 26.6);
INSERT INTO `nilai_b_wanita` VALUES (96, 5, 10, 15, 20, 25, 30, 35, 40, 48, 56, '-', '-', '-', 26.7);
INSERT INTO `nilai_b_wanita` VALUES (97, 4, 9, 14, 19, 24, 29, 34, 39, 47, 55, '16', '8', '-', 26.8);
INSERT INTO `nilai_b_wanita` VALUES (98, 3, 8, 13, 18, 23, 28, 33, 38, 46, 54, '-', '-', '-', 26.9);
INSERT INTO `nilai_b_wanita` VALUES (99, 2, 7, 12, 17, 22, 27, 32, 37, 45, 53, '15', NULL, '-', 27);
INSERT INTO `nilai_b_wanita` VALUES (100, 1, 6, 11, 16, 21, 26, 31, 36, 44, 52, '-', '7', '-', 27.1);
INSERT INTO `nilai_b_wanita` VALUES (101, 0, 5, 10, 15, 20, 25, 30, 35, 43, 51, '14', '-', '5', 27.2);
INSERT INTO `nilai_b_wanita` VALUES (102, 0, 4, 9, 14, 19, 24, 29, 34, 42, 50, '-', '-', '-', 27.3);
INSERT INTO `nilai_b_wanita` VALUES (103, 0, 3, 8, 13, 18, 23, 28, 33, 41, 49, '13', '6', '-', 27.4);
INSERT INTO `nilai_b_wanita` VALUES (104, 0, 2, 7, 12, 17, 22, 27, 32, 40, 48, '-', '-', '-', 27.5);
INSERT INTO `nilai_b_wanita` VALUES (105, 0, 1, 6, 11, 16, 21, 26, 31, 39, 47, '12', '-', '-', 27.6);
INSERT INTO `nilai_b_wanita` VALUES (106, 0, 0, 5, 10, 15, 20, 25, 30, 38, 46, '-', '5', '-', 27.7);
INSERT INTO `nilai_b_wanita` VALUES (107, 0, 0, 4, 9, 14, 19, 24, 29, 37, 45, '11', '-', '-', 27.8);
INSERT INTO `nilai_b_wanita` VALUES (108, 0, 0, 3, 8, 13, 18, 23, 28, 36, 44, '-', '-', '-', 27.9);
INSERT INTO `nilai_b_wanita` VALUES (109, 0, 0, 2, 7, 12, 17, 22, 27, 35, 43, '10', '4', '-', 28);
INSERT INTO `nilai_b_wanita` VALUES (110, 0, 0, 1, 6, 11, 16, 21, 26, 34, 42, '-', '-', '-', 28.1);
INSERT INTO `nilai_b_wanita` VALUES (111, 0, 0, 0, 5, 10, 15, 20, 25, 33, 41, '9', '-', '4', 28.2);
INSERT INTO `nilai_b_wanita` VALUES (112, 0, 0, 0, 4, 9, 14, 19, 24, 32, 40, '-', '3', '-', 28.3);
INSERT INTO `nilai_b_wanita` VALUES (113, 0, 0, 0, 3, 8, 13, 18, 23, 31, 39, '8', '-', '-', 28.4);
INSERT INTO `nilai_b_wanita` VALUES (114, 0, 0, 0, 2, 7, 12, 17, 22, 30, 38, '-', '-', '-', 28.5);
INSERT INTO `nilai_b_wanita` VALUES (115, 0, 0, 0, 1, 6, 11, 16, 21, 29, 37, '7', '2', '-', 28.6);
INSERT INTO `nilai_b_wanita` VALUES (116, 0, 0, 0, 0, 5, 10, 15, 20, 28, 36, '-', '-', '-', 28.7);
INSERT INTO `nilai_b_wanita` VALUES (117, 0, 0, 0, 0, 4, 9, 14, 19, 27, 35, '6', '-', '-', 28.8);
INSERT INTO `nilai_b_wanita` VALUES (118, 0, 0, 0, 0, 3, 8, 13, 18, 26, 34, '-', '1', '-', 28.9);
INSERT INTO `nilai_b_wanita` VALUES (119, 0, 0, 0, 0, 2, 7, 12, 17, 25, 33, '5', '-', '-', 29);
INSERT INTO `nilai_b_wanita` VALUES (120, 0, 0, 0, 0, 1, 6, 11, 16, 24, 32, '-', '-', '-', 29.1);
INSERT INTO `nilai_b_wanita` VALUES (121, 0, 0, 0, 0, 0, 5, 10, 15, 23, 31, '4', '-', '3', 29.2);
INSERT INTO `nilai_b_wanita` VALUES (122, 0, 0, 0, 0, 0, 4, 9, 14, 22, 30, '-', '-', '-', 29.3);
INSERT INTO `nilai_b_wanita` VALUES (123, 0, 0, 0, 0, 0, 3, 8, 13, 21, 29, '3', '-', '-', 29.4);
INSERT INTO `nilai_b_wanita` VALUES (124, 0, 0, 0, 0, 0, 2, 7, 12, 20, 28, '-', '-', '-', 29.5);
INSERT INTO `nilai_b_wanita` VALUES (125, 0, 0, 0, 0, 0, 1, 6, 11, 19, 27, '2', '-', '-', 29.6);
INSERT INTO `nilai_b_wanita` VALUES (126, 0, 0, 0, 0, 0, 0, 5, 10, 18, 26, '-', '-', '-', 29.7);
INSERT INTO `nilai_b_wanita` VALUES (127, 0, 0, 0, 0, 0, 0, 4, 9, 17, 25, '1', '-', '-', 29.8);
INSERT INTO `nilai_b_wanita` VALUES (128, 0, 0, 0, 0, 0, 0, 3, 8, 16, 24, '-', '-', '-', 29.9);
INSERT INTO `nilai_b_wanita` VALUES (129, 0, 0, 0, 0, 0, 0, 2, 7, 15, 23, '-', '-', '-', 30);
INSERT INTO `nilai_b_wanita` VALUES (130, 0, 0, 0, 0, 0, 0, 1, 6, 14, 22, '-', '-', '-', 30.1);
INSERT INTO `nilai_b_wanita` VALUES (131, 0, 0, 0, 0, 0, 0, 0, 5, 13, 21, '-', '-', '-', 30.2);
INSERT INTO `nilai_b_wanita` VALUES (132, 0, 0, 0, 0, 0, 0, 0, 4, 12, 20, '-', '-', '2', 30.3);
INSERT INTO `nilai_b_wanita` VALUES (133, 0, 0, 0, 0, 0, 0, 0, 3, 11, 19, '-', '-', '-', 30.4);
INSERT INTO `nilai_b_wanita` VALUES (134, 0, 0, 0, 0, 0, 0, 0, 2, 10, 18, '-', '-', '-', 30.5);
INSERT INTO `nilai_b_wanita` VALUES (135, 0, 0, 0, 0, 0, 0, 0, 1, 9, 17, '-', '-', '-', 30.6);
INSERT INTO `nilai_b_wanita` VALUES (136, 0, 0, 0, 0, 0, 0, 0, 0, 8, 16, '-', '-', '-', 30.7);
INSERT INTO `nilai_b_wanita` VALUES (137, 0, 0, 0, 0, 0, 0, 0, 0, 7, 15, '-', '-', '-', 30.8);
INSERT INTO `nilai_b_wanita` VALUES (138, 0, 0, 0, 0, 0, 0, 0, 0, 6, 14, '-', '-', '-', 30.9);
INSERT INTO `nilai_b_wanita` VALUES (139, 0, 0, 0, 0, 0, 0, 0, 0, 5, 13, '-', '-', '-', 31);
INSERT INTO `nilai_b_wanita` VALUES (140, 0, 0, 0, 0, 0, 0, 0, 0, 4, 12, '-', '-', '-', 31.1);
INSERT INTO `nilai_b_wanita` VALUES (141, 0, 0, 0, 0, 0, 0, 0, 0, 3, 11, '-', '-', '-', 31.2);
INSERT INTO `nilai_b_wanita` VALUES (142, 0, 0, 0, 0, 0, 0, 0, 0, 2, 10, '-', '-', '1', 31.3);
INSERT INTO `nilai_b_wanita` VALUES (143, 0, 0, 0, 0, 0, 0, 0, 0, 1, 9, '-', '-', '-', 31.4);
INSERT INTO `nilai_b_wanita` VALUES (144, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, '-', '-', '-', 31.5);
INSERT INTO `nilai_b_wanita` VALUES (145, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, '-', '-', '-', 31.6);
INSERT INTO `nilai_b_wanita` VALUES (146, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, '-', '-', '-', 31.7);
INSERT INTO `nilai_b_wanita` VALUES (147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, '-', '-', '-', 31.8);
INSERT INTO `nilai_b_wanita` VALUES (148, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, '-', '-', '-', 31.9);
INSERT INTO `nilai_b_wanita` VALUES (149, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, '-', '-', '-', 32);
INSERT INTO `nilai_b_wanita` VALUES (150, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, '-', '-', '-', 32.1);
INSERT INTO `nilai_b_wanita` VALUES (151, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '-', '-', '-', 32.2);

-- ----------------------------
-- Table structure for personel
-- ----------------------------
DROP TABLE IF EXISTS `personel`;
CREATE TABLE `personel`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pangkat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `korps` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nrp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_satker` int(11) NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  `flag_del` int(1) NULL DEFAULT NULL,
  `kesatuan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `matra` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of personel
-- ----------------------------
INSERT INTO `personel` VALUES (1, 25, 'Atho ', 'Serda', 'Jas', '12345666', 'Pria', '1979-06-08', 'Baur JAs', NULL, '2018-11-08 07:48:59', NULL, 0, NULL, NULL);
INSERT INTO `personel` VALUES (2, 1, 'Timur Yulis Santosa', 'Sertu', 'EKO', '114142', 'Pria', '1989-07-14', 'Ba Urharkomp', NULL, '2018-11-08 04:37:14', NULL, 0, NULL, NULL);
INSERT INTO `personel` VALUES (3, 1, 'Timur Yulis Santosa', 'Sertu', 'EKO', NULL, 'Pria', '1989-07-14', 'Ba Urharkomp', NULL, '2018-11-08 06:12:57', NULL, 1, NULL, NULL);
INSERT INTO `personel` VALUES (4, 24, 'Ahmad', 'Serka', 'CZI', '456787888', 'Pria', '1983-06-20', 'Baur Prog', NULL, '2018-11-11 16:16:36', NULL, 0, NULL, NULL);
INSERT INTO `personel` VALUES (5, 1, 'Kapuskodal TNI AL', 'Kolonel', 'P', '49494884', 'Pria', '1970-06-15', 'Kapuskodal', NULL, '2018-11-12 02:29:06', NULL, 0, NULL, NULL);
INSERT INTO `personel` VALUES (6, 23, 'Putri', 'Serka', 'PDK', '345544', 'Wanita', '1987-07-16', 'Baur Prog', NULL, '2018-11-15 03:55:07', NULL, 0, NULL, NULL);
INSERT INTO `personel` VALUES (7, 37, 'Fandeka', 'Kapten', 'Hub', '123345566', 'Pria', '0000-00-00', 'Kabid Prog', NULL, '2018-11-19 15:34:50', NULL, 0, NULL, NULL);
INSERT INTO `personel` VALUES (9, 39, 'Ferianto', 'Sertu', NULL, '116789', 'Pria', '0000-00-00', 'Baur Peta', NULL, '2018-11-19 15:43:07', NULL, 0, NULL, NULL);

-- ----------------------------
-- Table structure for ren_mil_das_pria
-- ----------------------------
DROP TABLE IF EXISTS `ren_mil_das_pria`;
CREATE TABLE `ren_mil_das_pria`  (
  `id_renang` int(11) NULL DEFAULT NULL,
  `waktu_renang` time(0) NULL DEFAULT NULL,
  `I` int(11) NULL DEFAULT NULL,
  `II` int(11) NULL DEFAULT NULL,
  `III` int(11) NULL DEFAULT NULL,
  `IV` int(11) NULL DEFAULT NULL,
  `V` int(11) NULL DEFAULT NULL,
  `VI` int(11) NULL DEFAULT NULL,
  `VII` int(11) NULL DEFAULT NULL,
  `VIII` int(11) NULL DEFAULT NULL,
  `IX` int(11) NULL DEFAULT NULL,
  `X` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ren_mil_das_pria
-- ----------------------------
INSERT INTO `ren_mil_das_pria` VALUES (1, '00:00:33', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (2, '00:00:34', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (3, '00:00:35', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (4, '00:00:36', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (5, '00:00:37', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (6, '00:00:38', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (7, '00:00:39', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (8, '00:00:40', 99, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (9, '00:00:41', 98, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (10, '00:00:42', 97, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (11, '00:00:43', 96, 99, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (12, '00:00:44', 95, 98, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (13, '00:00:45', 94, 97, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (14, '00:00:46', 93, 96, 99, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (15, '00:00:47', 92, 95, 98, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (16, '00:00:48', 91, 94, 97, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (17, '00:00:49', 90, 93, 96, 99, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (18, '00:00:50', 89, 92, 95, 98, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (19, '00:00:51', 88, 91, 94, 97, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (20, '00:00:52', 87, 90, 93, 96, 99, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (21, '00:00:53', 86, 89, 92, 95, 98, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (22, '00:00:54', 85, 88, 91, 94, 97, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (23, '00:00:55', 84, 87, 90, 93, 96, 99, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (24, '00:00:56', 83, 86, 89, 92, 95, 98, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (25, '00:00:57', 82, 85, 88, 91, 94, 97, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (26, '00:00:58', 81, 84, 87, 90, 93, 96, 99, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (27, '00:00:59', 80, 83, 86, 89, 92, 95, 98, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (28, '00:01:00', 79, 82, 85, 88, 91, 94, 97, 100, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (29, '00:01:01', 78, 81, 84, 87, 90, 93, 96, 99, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (30, '00:01:02', 77, 80, 83, 86, 89, 92, 95, 98, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (31, '00:01:03', 76, 79, 82, 85, 88, 91, 94, 97, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (32, '00:01:04', 75, 78, 81, 84, 87, 90, 93, 96, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (33, '00:01:05', 74, 77, 80, 83, 86, 89, 92, 95, 100, 100);
INSERT INTO `ren_mil_das_pria` VALUES (34, '00:01:06', 73, 76, 79, 82, 85, 88, 91, 94, 99, 100);
INSERT INTO `ren_mil_das_pria` VALUES (35, '00:01:07', 72, 75, 78, 81, 84, 87, 90, 93, 98, 100);
INSERT INTO `ren_mil_das_pria` VALUES (36, '00:01:08', 71, 74, 77, 80, 83, 86, 89, 92, 97, 100);
INSERT INTO `ren_mil_das_pria` VALUES (37, '00:01:09', 70, 73, 76, 79, 82, 85, 88, 91, 96, 100);
INSERT INTO `ren_mil_das_pria` VALUES (38, '00:01:10', 69, 72, 75, 78, 81, 84, 87, 90, 95, 100);
INSERT INTO `ren_mil_das_pria` VALUES (39, '00:01:11', 68, 71, 74, 77, 80, 83, 86, 89, 94, 99);
INSERT INTO `ren_mil_das_pria` VALUES (40, '00:01:12', 67, 70, 73, 76, 79, 82, 85, 88, 93, 98);
INSERT INTO `ren_mil_das_pria` VALUES (41, '00:01:13', 66, 69, 72, 75, 78, 81, 84, 87, 92, 97);
INSERT INTO `ren_mil_das_pria` VALUES (42, '00:01:14', 65, 68, 71, 74, 77, 80, 83, 86, 91, 96);
INSERT INTO `ren_mil_das_pria` VALUES (43, '00:01:15', 64, 67, 70, 73, 76, 79, 82, 85, 90, 95);
INSERT INTO `ren_mil_das_pria` VALUES (44, '00:01:16', 63, 66, 69, 72, 75, 78, 81, 84, 89, 94);
INSERT INTO `ren_mil_das_pria` VALUES (45, '00:01:17', 62, 65, 68, 71, 74, 77, 80, 83, 88, 93);
INSERT INTO `ren_mil_das_pria` VALUES (46, '00:01:18', 61, 64, 67, 70, 73, 76, 79, 82, 87, 92);
INSERT INTO `ren_mil_das_pria` VALUES (47, '00:01:19', 60, 63, 66, 69, 72, 75, 78, 81, 86, 91);
INSERT INTO `ren_mil_das_pria` VALUES (48, '00:01:20', 59, 62, 65, 68, 71, 74, 77, 80, 85, 90);
INSERT INTO `ren_mil_das_pria` VALUES (49, '00:01:21', 58, 61, 64, 67, 70, 73, 76, 79, 84, 89);
INSERT INTO `ren_mil_das_pria` VALUES (50, '00:01:22', 57, 60, 63, 66, 69, 72, 75, 78, 83, 88);
INSERT INTO `ren_mil_das_pria` VALUES (51, '00:01:23', 56, 59, 62, 65, 68, 71, 74, 77, 82, 87);
INSERT INTO `ren_mil_das_pria` VALUES (52, '00:01:24', 55, 58, 61, 64, 67, 70, 73, 76, 81, 86);
INSERT INTO `ren_mil_das_pria` VALUES (53, '00:01:25', 54, 57, 60, 63, 66, 69, 72, 75, 80, 85);
INSERT INTO `ren_mil_das_pria` VALUES (54, '00:01:26', 53, 56, 59, 62, 65, 68, 71, 74, 79, 84);
INSERT INTO `ren_mil_das_pria` VALUES (55, '00:01:27', 52, 55, 58, 61, 64, 67, 70, 73, 78, 83);
INSERT INTO `ren_mil_das_pria` VALUES (56, '00:01:28', 51, 54, 57, 60, 63, 66, 69, 72, 77, 82);
INSERT INTO `ren_mil_das_pria` VALUES (57, '00:01:29', 50, 53, 56, 59, 62, 65, 68, 71, 76, 81);
INSERT INTO `ren_mil_das_pria` VALUES (58, '00:01:30', 49, 52, 55, 58, 61, 64, 67, 70, 75, 80);
INSERT INTO `ren_mil_das_pria` VALUES (59, '00:01:31', 48, 51, 54, 57, 60, 63, 66, 69, 74, 79);
INSERT INTO `ren_mil_das_pria` VALUES (60, '00:01:32', 47, 50, 53, 56, 59, 62, 65, 68, 73, 78);
INSERT INTO `ren_mil_das_pria` VALUES (61, '00:01:33', 46, 49, 52, 55, 58, 61, 64, 67, 72, 77);
INSERT INTO `ren_mil_das_pria` VALUES (62, '00:01:34', 45, 48, 51, 54, 57, 60, 63, 66, 71, 76);
INSERT INTO `ren_mil_das_pria` VALUES (63, '00:01:35', 44, 47, 50, 53, 56, 59, 62, 65, 70, 75);
INSERT INTO `ren_mil_das_pria` VALUES (64, '00:01:36', 43, 46, 49, 52, 55, 58, 61, 64, 69, 74);
INSERT INTO `ren_mil_das_pria` VALUES (65, '00:01:37', 42, 45, 48, 51, 54, 57, 60, 63, 68, 73);
INSERT INTO `ren_mil_das_pria` VALUES (66, '00:01:38', 41, 44, 47, 50, 53, 56, 59, 62, 67, 72);
INSERT INTO `ren_mil_das_pria` VALUES (67, '00:01:39', 40, 43, 46, 49, 52, 55, 58, 61, 66, 71);
INSERT INTO `ren_mil_das_pria` VALUES (68, '00:01:40', 39, 42, 45, 48, 51, 54, 57, 60, 65, 70);
INSERT INTO `ren_mil_das_pria` VALUES (69, '00:01:41', 38, 41, 44, 47, 50, 53, 56, 59, 64, 69);
INSERT INTO `ren_mil_das_pria` VALUES (70, '00:01:42', 37, 40, 43, 46, 49, 52, 55, 58, 63, 68);
INSERT INTO `ren_mil_das_pria` VALUES (71, '00:01:43', 36, 39, 42, 45, 48, 51, 54, 57, 62, 67);
INSERT INTO `ren_mil_das_pria` VALUES (72, '00:01:44', 35, 38, 41, 44, 47, 50, 53, 56, 61, 66);
INSERT INTO `ren_mil_das_pria` VALUES (73, '00:01:45', 34, 37, 40, 43, 46, 49, 52, 55, 60, 65);
INSERT INTO `ren_mil_das_pria` VALUES (74, '00:01:46', 33, 36, 39, 42, 45, 48, 51, 54, 59, 64);
INSERT INTO `ren_mil_das_pria` VALUES (75, '00:01:47', 32, 35, 38, 41, 44, 47, 50, 53, 58, 63);
INSERT INTO `ren_mil_das_pria` VALUES (76, '00:01:48', 31, 34, 37, 40, 43, 46, 49, 52, 57, 62);
INSERT INTO `ren_mil_das_pria` VALUES (77, '00:01:49', 30, 33, 36, 39, 42, 45, 48, 51, 56, 61);
INSERT INTO `ren_mil_das_pria` VALUES (78, '00:01:50', 29, 32, 35, 38, 41, 44, 47, 50, 55, 60);
INSERT INTO `ren_mil_das_pria` VALUES (79, '00:01:51', 28, 31, 34, 37, 40, 43, 46, 49, 54, 59);
INSERT INTO `ren_mil_das_pria` VALUES (80, '00:01:52', 27, 30, 33, 36, 39, 42, 45, 48, 53, 58);
INSERT INTO `ren_mil_das_pria` VALUES (81, '00:01:53', 26, 29, 32, 35, 38, 41, 44, 47, 52, 57);
INSERT INTO `ren_mil_das_pria` VALUES (82, '00:01:54', 25, 28, 31, 34, 37, 40, 43, 46, 51, 56);
INSERT INTO `ren_mil_das_pria` VALUES (83, '00:01:55', 24, 27, 30, 33, 36, 39, 42, 45, 50, 55);
INSERT INTO `ren_mil_das_pria` VALUES (84, '00:01:56', 23, 26, 29, 32, 35, 38, 41, 44, 49, 54);
INSERT INTO `ren_mil_das_pria` VALUES (85, '00:01:57', 22, 25, 28, 31, 34, 37, 40, 43, 48, 53);
INSERT INTO `ren_mil_das_pria` VALUES (86, '00:01:58', 21, 24, 27, 30, 33, 36, 39, 42, 47, 52);
INSERT INTO `ren_mil_das_pria` VALUES (87, '00:01:59', 20, 23, 26, 29, 32, 35, 38, 41, 46, 51);
INSERT INTO `ren_mil_das_pria` VALUES (88, '00:02:00', 19, 22, 25, 28, 31, 34, 37, 40, 45, 50);
INSERT INTO `ren_mil_das_pria` VALUES (89, '00:02:01', 18, 21, 24, 27, 30, 33, 36, 39, 44, 49);
INSERT INTO `ren_mil_das_pria` VALUES (90, '00:02:02', 17, 20, 23, 26, 29, 32, 35, 38, 43, 48);
INSERT INTO `ren_mil_das_pria` VALUES (91, '00:02:03', 16, 19, 22, 25, 28, 31, 34, 37, 42, 47);
INSERT INTO `ren_mil_das_pria` VALUES (92, '00:02:04', 15, 18, 21, 24, 27, 30, 33, 36, 41, 46);
INSERT INTO `ren_mil_das_pria` VALUES (93, '00:02:05', 14, 17, 20, 23, 26, 29, 32, 35, 40, 45);
INSERT INTO `ren_mil_das_pria` VALUES (94, '00:02:06', 13, 16, 19, 22, 25, 28, 31, 34, 39, 44);
INSERT INTO `ren_mil_das_pria` VALUES (95, '00:02:07', 12, 15, 18, 21, 24, 27, 30, 33, 38, 43);
INSERT INTO `ren_mil_das_pria` VALUES (96, '00:02:08', 11, 14, 17, 20, 23, 26, 29, 32, 37, 42);
INSERT INTO `ren_mil_das_pria` VALUES (97, '00:02:09', 10, 13, 16, 19, 22, 25, 28, 31, 36, 41);
INSERT INTO `ren_mil_das_pria` VALUES (98, '00:02:10', 9, 12, 15, 18, 21, 24, 27, 30, 35, 40);
INSERT INTO `ren_mil_das_pria` VALUES (99, '00:02:11', 8, 11, 14, 17, 20, 23, 26, 29, 34, 39);
INSERT INTO `ren_mil_das_pria` VALUES (100, '00:02:12', 7, 10, 13, 16, 19, 22, 25, 28, 33, 38);
INSERT INTO `ren_mil_das_pria` VALUES (101, '00:02:13', 6, 9, 12, 15, 18, 21, 24, 27, 32, 37);
INSERT INTO `ren_mil_das_pria` VALUES (102, '00:02:14', 5, 8, 11, 14, 17, 20, 23, 26, 31, 36);
INSERT INTO `ren_mil_das_pria` VALUES (103, '00:02:15', 4, 7, 10, 13, 16, 19, 22, 25, 30, 35);
INSERT INTO `ren_mil_das_pria` VALUES (104, '00:02:16', 3, 6, 9, 12, 15, 18, 21, 24, 29, 34);
INSERT INTO `ren_mil_das_pria` VALUES (105, '00:02:17', 2, 5, 8, 11, 14, 17, 20, 23, 28, 33);
INSERT INTO `ren_mil_das_pria` VALUES (106, '00:02:18', 1, 4, 7, 10, 13, 16, 19, 22, 27, 32);
INSERT INTO `ren_mil_das_pria` VALUES (107, '00:02:19', 1, 3, 6, 9, 12, 15, 18, 21, 26, 31);
INSERT INTO `ren_mil_das_pria` VALUES (108, '00:02:20', 1, 2, 5, 8, 11, 14, 17, 20, 25, 30);
INSERT INTO `ren_mil_das_pria` VALUES (109, '00:02:21', 1, 1, 4, 7, 10, 13, 16, 19, 24, 29);
INSERT INTO `ren_mil_das_pria` VALUES (110, '00:02:22', 1, 1, 3, 6, 9, 12, 15, 18, 23, 28);
INSERT INTO `ren_mil_das_pria` VALUES (111, '00:02:23', 1, 1, 2, 5, 8, 11, 14, 17, 22, 27);
INSERT INTO `ren_mil_das_pria` VALUES (112, '00:02:24', 1, 1, 1, 4, 7, 10, 13, 16, 21, 26);
INSERT INTO `ren_mil_das_pria` VALUES (113, '00:02:25', 1, 1, 1, 3, 6, 9, 12, 15, 20, 25);
INSERT INTO `ren_mil_das_pria` VALUES (114, '00:02:26', 1, 1, 1, 2, 5, 8, 11, 14, 19, 24);
INSERT INTO `ren_mil_das_pria` VALUES (115, '00:02:27', 1, 1, 1, 1, 4, 7, 10, 13, 18, 23);
INSERT INTO `ren_mil_das_pria` VALUES (116, '00:02:28', 1, 1, 1, 1, 3, 6, 9, 12, 17, 22);
INSERT INTO `ren_mil_das_pria` VALUES (117, '00:02:29', 1, 1, 1, 1, 2, 5, 8, 11, 16, 21);
INSERT INTO `ren_mil_das_pria` VALUES (118, '00:02:30', 1, 1, 1, 1, 1, 4, 7, 10, 15, 20);
INSERT INTO `ren_mil_das_pria` VALUES (119, '00:02:31', 1, 1, 1, 1, 1, 3, 6, 9, 14, 19);
INSERT INTO `ren_mil_das_pria` VALUES (120, '00:02:32', 1, 1, 1, 1, 1, 2, 5, 8, 13, 18);
INSERT INTO `ren_mil_das_pria` VALUES (121, '00:02:33', 1, 1, 1, 1, 1, 1, 4, 7, 12, 17);
INSERT INTO `ren_mil_das_pria` VALUES (122, '00:02:34', 1, 1, 1, 1, 1, 1, 3, 6, 11, 16);
INSERT INTO `ren_mil_das_pria` VALUES (123, '00:02:35', 1, 1, 1, 1, 1, 1, 2, 5, 10, 15);
INSERT INTO `ren_mil_das_pria` VALUES (124, '00:02:36', 1, 1, 1, 1, 1, 1, 1, 4, 9, 14);
INSERT INTO `ren_mil_das_pria` VALUES (125, '00:02:37', 1, 1, 1, 1, 1, 1, 1, 3, 8, 13);
INSERT INTO `ren_mil_das_pria` VALUES (126, '00:02:38', 1, 1, 1, 1, 1, 1, 1, 2, 7, 12);
INSERT INTO `ren_mil_das_pria` VALUES (127, '00:02:39', 1, 1, 1, 1, 1, 1, 1, 1, 6, 11);
INSERT INTO `ren_mil_das_pria` VALUES (128, '00:02:40', 1, 1, 1, 1, 1, 1, 1, 1, 5, 10);
INSERT INTO `ren_mil_das_pria` VALUES (129, '00:02:41', 1, 1, 1, 1, 1, 1, 1, 1, 4, 9);
INSERT INTO `ren_mil_das_pria` VALUES (130, '00:02:42', 1, 1, 1, 1, 1, 1, 1, 1, 3, 8);
INSERT INTO `ren_mil_das_pria` VALUES (131, '00:02:43', 1, 1, 1, 1, 1, 1, 1, 1, 2, 7);
INSERT INTO `ren_mil_das_pria` VALUES (132, '00:02:44', 1, 1, 1, 1, 1, 1, 1, 1, 1, 6);
INSERT INTO `ren_mil_das_pria` VALUES (133, '00:02:45', 1, 1, 1, 1, 1, 1, 1, 1, 1, 5);
INSERT INTO `ren_mil_das_pria` VALUES (134, '00:02:46', 1, 1, 1, 1, 1, 1, 1, 1, 1, 4);
INSERT INTO `ren_mil_das_pria` VALUES (135, '00:02:47', 1, 1, 1, 1, 1, 1, 1, 1, 1, 3);
INSERT INTO `ren_mil_das_pria` VALUES (136, '00:02:48', 1, 1, 1, 1, 1, 1, 1, 1, 1, 2);
INSERT INTO `ren_mil_das_pria` VALUES (137, '00:02:49', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- ----------------------------
-- Table structure for ren_mil_das_wan
-- ----------------------------
DROP TABLE IF EXISTS `ren_mil_das_wan`;
CREATE TABLE `ren_mil_das_wan`  (
  `id_renang` int(11) NULL DEFAULT NULL,
  `waktu_renang` time(0) NULL DEFAULT NULL,
  `I` int(11) NULL DEFAULT NULL,
  `II` int(11) NULL DEFAULT NULL,
  `III` int(11) NULL DEFAULT NULL,
  `IV` int(11) NULL DEFAULT NULL,
  `V` int(11) NULL DEFAULT NULL,
  `VI` int(11) NULL DEFAULT NULL,
  `VII` int(11) NULL DEFAULT NULL,
  `VIII` int(11) NULL DEFAULT NULL,
  `IX` int(11) NULL DEFAULT NULL,
  `X` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ren_mil_das_wan
-- ----------------------------
INSERT INTO `ren_mil_das_wan` VALUES (1, '00:00:59', 92, 95, 98, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (2, '00:01:00', 91, 94, 97, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (3, '00:01:01', 90, 93, 96, 99, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (4, '00:01:02', 89, 92, 95, 98, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (5, '00:01:03', 88, 91, 94, 97, 100, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (6, '00:01:04', 87, 90, 93, 96, 99, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (7, '00:01:05', 86, 89, 92, 95, 98, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (8, '00:01:06', 85, 88, 91, 94, 97, 100, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (9, '00:01:07', 84, 87, 90, 93, 96, 99, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (10, '00:01:08', 83, 86, 89, 92, 95, 98, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (11, '00:01:09', 82, 85, 88, 91, 94, 97, 100, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (12, '00:01:10', 81, 84, 87, 90, 93, 96, 99, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (13, '00:01:11', 80, 83, 86, 89, 92, 95, 98, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (14, '00:01:12', 79, 82, 85, 88, 91, 94, 97, 100, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (15, '00:01:13', 78, 81, 84, 87, 90, 93, 96, 99, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (16, '00:01:14', 77, 80, 83, 86, 89, 92, 95, 98, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (17, '00:01:15', 76, 79, 82, 85, 88, 91, 94, 97, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (18, '00:01:16', 75, 78, 81, 84, 87, 90, 93, 96, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (19, '00:01:17', 74, 77, 80, 83, 86, 89, 92, 95, 100, 100);
INSERT INTO `ren_mil_das_wan` VALUES (20, '00:01:18', 73, 76, 79, 82, 85, 88, 91, 94, 99, 100);
INSERT INTO `ren_mil_das_wan` VALUES (21, '00:01:19', 72, 75, 78, 81, 84, 87, 90, 93, 98, 100);
INSERT INTO `ren_mil_das_wan` VALUES (22, '00:01:20', 71, 74, 77, 80, 83, 86, 89, 92, 97, 100);
INSERT INTO `ren_mil_das_wan` VALUES (23, '00:01:21', 70, 73, 76, 79, 82, 85, 88, 91, 96, 100);
INSERT INTO `ren_mil_das_wan` VALUES (24, '00:01:22', 69, 72, 75, 78, 81, 84, 87, 90, 95, 100);
INSERT INTO `ren_mil_das_wan` VALUES (25, '00:01:23', 68, 71, 74, 77, 80, 83, 86, 89, 94, 99);
INSERT INTO `ren_mil_das_wan` VALUES (26, '00:01:24', 67, 70, 73, 76, 79, 82, 85, 88, 93, 98);
INSERT INTO `ren_mil_das_wan` VALUES (27, '00:01:25', 66, 69, 72, 75, 78, 81, 84, 87, 92, 97);
INSERT INTO `ren_mil_das_wan` VALUES (28, '00:01:26', 65, 68, 71, 74, 77, 80, 83, 86, 91, 96);
INSERT INTO `ren_mil_das_wan` VALUES (29, '00:01:27', 64, 67, 70, 73, 76, 79, 82, 85, 90, 95);
INSERT INTO `ren_mil_das_wan` VALUES (30, '00:01:28', 63, 66, 69, 72, 75, 78, 81, 84, 89, 94);
INSERT INTO `ren_mil_das_wan` VALUES (31, '00:01:29', 62, 65, 68, 71, 74, 77, 80, 83, 88, 93);
INSERT INTO `ren_mil_das_wan` VALUES (32, '00:01:30', 61, 64, 67, 70, 73, 76, 79, 82, 87, 92);
INSERT INTO `ren_mil_das_wan` VALUES (33, '00:01:31', 60, 63, 66, 69, 72, 75, 78, 81, 86, 91);
INSERT INTO `ren_mil_das_wan` VALUES (34, '00:01:32', 59, 62, 65, 68, 71, 74, 77, 80, 85, 90);
INSERT INTO `ren_mil_das_wan` VALUES (35, '00:01:33', 58, 61, 64, 67, 70, 73, 76, 79, 84, 89);
INSERT INTO `ren_mil_das_wan` VALUES (36, '00:01:34', 57, 60, 63, 66, 69, 72, 75, 78, 83, 88);
INSERT INTO `ren_mil_das_wan` VALUES (37, '00:01:35', 56, 59, 62, 65, 68, 71, 74, 77, 82, 87);
INSERT INTO `ren_mil_das_wan` VALUES (38, '00:01:36', 55, 58, 61, 64, 67, 70, 73, 76, 81, 86);
INSERT INTO `ren_mil_das_wan` VALUES (39, '00:01:37', 54, 57, 60, 63, 66, 69, 72, 75, 80, 85);
INSERT INTO `ren_mil_das_wan` VALUES (40, '00:01:38', 53, 56, 59, 62, 65, 68, 71, 74, 79, 84);
INSERT INTO `ren_mil_das_wan` VALUES (41, '00:01:39', 52, 55, 58, 61, 64, 67, 70, 73, 78, 83);
INSERT INTO `ren_mil_das_wan` VALUES (42, '00:01:40', 51, 54, 57, 60, 63, 66, 69, 72, 77, 82);
INSERT INTO `ren_mil_das_wan` VALUES (43, '00:01:41', 50, 53, 56, 59, 62, 65, 68, 71, 76, 81);
INSERT INTO `ren_mil_das_wan` VALUES (44, '00:01:42', 49, 52, 55, 58, 61, 64, 67, 70, 75, 80);
INSERT INTO `ren_mil_das_wan` VALUES (45, '00:01:43', 48, 51, 54, 57, 60, 63, 66, 69, 74, 79);
INSERT INTO `ren_mil_das_wan` VALUES (46, '00:01:44', 47, 50, 53, 56, 59, 62, 65, 68, 73, 78);
INSERT INTO `ren_mil_das_wan` VALUES (47, '00:01:45', 46, 49, 52, 55, 58, 61, 64, 67, 72, 77);
INSERT INTO `ren_mil_das_wan` VALUES (48, '00:01:46', 45, 48, 51, 54, 57, 60, 63, 66, 71, 76);
INSERT INTO `ren_mil_das_wan` VALUES (49, '00:01:47', 44, 47, 50, 53, 56, 59, 62, 65, 70, 75);
INSERT INTO `ren_mil_das_wan` VALUES (50, '00:01:48', 43, 46, 49, 52, 55, 58, 61, 64, 69, 74);
INSERT INTO `ren_mil_das_wan` VALUES (51, '00:01:49', 42, 45, 48, 51, 54, 57, 60, 63, 68, 73);
INSERT INTO `ren_mil_das_wan` VALUES (52, '00:01:50', 41, 44, 47, 50, 53, 56, 59, 62, 67, 72);
INSERT INTO `ren_mil_das_wan` VALUES (53, '00:01:51', 40, 43, 46, 49, 52, 55, 58, 61, 66, 71);
INSERT INTO `ren_mil_das_wan` VALUES (54, '00:01:52', 39, 42, 45, 48, 51, 54, 57, 60, 65, 70);
INSERT INTO `ren_mil_das_wan` VALUES (55, '00:01:53', 38, 41, 44, 47, 50, 53, 56, 59, 64, 69);
INSERT INTO `ren_mil_das_wan` VALUES (56, '00:01:54', 37, 40, 43, 46, 49, 52, 55, 58, 63, 68);
INSERT INTO `ren_mil_das_wan` VALUES (57, '00:01:55', 36, 39, 42, 45, 48, 51, 54, 57, 62, 67);
INSERT INTO `ren_mil_das_wan` VALUES (58, '00:01:56', 35, 38, 41, 44, 47, 50, 53, 56, 61, 66);
INSERT INTO `ren_mil_das_wan` VALUES (59, '00:01:57', 34, 37, 40, 43, 46, 49, 52, 55, 60, 65);
INSERT INTO `ren_mil_das_wan` VALUES (60, '00:01:58', 33, 36, 39, 42, 45, 48, 51, 54, 59, 64);
INSERT INTO `ren_mil_das_wan` VALUES (61, '00:01:59', 32, 35, 38, 41, 44, 47, 50, 53, 58, 63);
INSERT INTO `ren_mil_das_wan` VALUES (62, '00:02:00', 31, 34, 37, 40, 43, 46, 49, 52, 57, 62);
INSERT INTO `ren_mil_das_wan` VALUES (63, '00:02:01', 30, 33, 36, 39, 42, 45, 48, 51, 56, 61);
INSERT INTO `ren_mil_das_wan` VALUES (64, '00:02:02', 29, 32, 35, 38, 41, 44, 47, 50, 55, 60);
INSERT INTO `ren_mil_das_wan` VALUES (65, '00:02:03', 28, 31, 34, 37, 40, 43, 46, 49, 54, 59);
INSERT INTO `ren_mil_das_wan` VALUES (66, '00:02:04', 27, 30, 33, 36, 39, 42, 45, 48, 53, 58);
INSERT INTO `ren_mil_das_wan` VALUES (67, '00:02:05', 26, 29, 32, 35, 38, 41, 44, 47, 52, 57);
INSERT INTO `ren_mil_das_wan` VALUES (68, '00:02:06', 25, 28, 31, 34, 37, 40, 43, 46, 51, 56);
INSERT INTO `ren_mil_das_wan` VALUES (69, '00:02:07', 24, 27, 30, 33, 36, 39, 42, 45, 50, 55);
INSERT INTO `ren_mil_das_wan` VALUES (70, '00:02:08', 23, 26, 29, 32, 35, 38, 41, 44, 49, 54);
INSERT INTO `ren_mil_das_wan` VALUES (71, '00:02:09', 22, 25, 28, 31, 34, 37, 40, 43, 48, 53);
INSERT INTO `ren_mil_das_wan` VALUES (72, '00:02:10', 21, 24, 27, 30, 33, 36, 39, 42, 47, 52);
INSERT INTO `ren_mil_das_wan` VALUES (73, '00:02:11', 20, 23, 26, 29, 32, 35, 38, 41, 46, 51);
INSERT INTO `ren_mil_das_wan` VALUES (74, '00:02:12', 19, 22, 25, 28, 31, 34, 37, 40, 45, 50);
INSERT INTO `ren_mil_das_wan` VALUES (75, '00:02:13', 18, 21, 24, 27, 30, 33, 36, 39, 44, 49);
INSERT INTO `ren_mil_das_wan` VALUES (76, '00:02:14', 17, 20, 23, 26, 29, 32, 35, 38, 43, 48);
INSERT INTO `ren_mil_das_wan` VALUES (77, '00:02:15', 16, 19, 22, 25, 28, 31, 34, 37, 42, 47);
INSERT INTO `ren_mil_das_wan` VALUES (78, '00:02:16', 15, 18, 21, 24, 27, 30, 33, 36, 41, 46);
INSERT INTO `ren_mil_das_wan` VALUES (79, '00:02:17', 14, 17, 20, 23, 26, 29, 32, 35, 40, 45);
INSERT INTO `ren_mil_das_wan` VALUES (80, '00:02:18', 13, 16, 19, 22, 25, 28, 31, 34, 39, 44);
INSERT INTO `ren_mil_das_wan` VALUES (81, '00:02:19', 12, 15, 18, 21, 24, 27, 30, 33, 38, 43);
INSERT INTO `ren_mil_das_wan` VALUES (82, '00:02:20', 11, 14, 17, 20, 23, 26, 29, 32, 37, 42);
INSERT INTO `ren_mil_das_wan` VALUES (83, '00:02:21', 10, 13, 16, 19, 22, 25, 28, 31, 36, 41);
INSERT INTO `ren_mil_das_wan` VALUES (84, '00:02:22', 9, 12, 15, 18, 21, 24, 27, 30, 35, 40);
INSERT INTO `ren_mil_das_wan` VALUES (85, '00:02:23', 8, 11, 14, 17, 20, 23, 26, 29, 34, 39);
INSERT INTO `ren_mil_das_wan` VALUES (86, '00:02:24', 7, 10, 13, 16, 19, 22, 25, 28, 33, 38);
INSERT INTO `ren_mil_das_wan` VALUES (87, '00:02:25', 6, 9, 12, 15, 18, 21, 24, 27, 32, 37);
INSERT INTO `ren_mil_das_wan` VALUES (88, '00:02:26', 5, 8, 11, 14, 17, 20, 23, 26, 31, 36);
INSERT INTO `ren_mil_das_wan` VALUES (89, '00:02:27', 4, 7, 10, 13, 16, 19, 22, 25, 30, 35);
INSERT INTO `ren_mil_das_wan` VALUES (90, '00:02:28', 3, 6, 9, 12, 15, 18, 21, 24, 29, 34);
INSERT INTO `ren_mil_das_wan` VALUES (91, '00:02:29', 2, 5, 8, 11, 14, 17, 20, 23, 28, 33);
INSERT INTO `ren_mil_das_wan` VALUES (92, '00:02:30', 1, 4, 7, 10, 13, 16, 19, 22, 27, 32);
INSERT INTO `ren_mil_das_wan` VALUES (93, '00:02:31', 1, 3, 6, 9, 12, 15, 18, 21, 26, 31);
INSERT INTO `ren_mil_das_wan` VALUES (94, '00:02:32', 1, 2, 5, 8, 11, 14, 17, 20, 25, 30);
INSERT INTO `ren_mil_das_wan` VALUES (95, '00:02:33', 1, 1, 4, 7, 10, 13, 16, 19, 24, 29);
INSERT INTO `ren_mil_das_wan` VALUES (96, '00:02:34', 1, 1, 3, 6, 9, 12, 15, 18, 23, 28);
INSERT INTO `ren_mil_das_wan` VALUES (97, '00:02:35', 1, 1, 2, 5, 8, 11, 14, 17, 22, 27);
INSERT INTO `ren_mil_das_wan` VALUES (98, '00:02:36', 1, 1, 1, 4, 7, 10, 13, 16, 21, 26);
INSERT INTO `ren_mil_das_wan` VALUES (99, '00:02:37', 1, 1, 1, 3, 6, 9, 12, 15, 20, 25);
INSERT INTO `ren_mil_das_wan` VALUES (100, '00:02:38', 1, 1, 1, 2, 5, 8, 11, 14, 19, 24);
INSERT INTO `ren_mil_das_wan` VALUES (101, '00:02:39', 1, 1, 1, 1, 4, 7, 10, 13, 18, 23);
INSERT INTO `ren_mil_das_wan` VALUES (102, '00:02:40', 1, 1, 1, 1, 3, 6, 9, 12, 17, 22);
INSERT INTO `ren_mil_das_wan` VALUES (103, '00:02:41', 1, 1, 1, 1, 2, 5, 8, 11, 16, 21);
INSERT INTO `ren_mil_das_wan` VALUES (104, '00:02:42', 1, 1, 1, 1, 1, 4, 7, 10, 15, 20);
INSERT INTO `ren_mil_das_wan` VALUES (105, '00:02:43', 1, 1, 1, 1, 1, 3, 6, 9, 14, 19);
INSERT INTO `ren_mil_das_wan` VALUES (106, '00:02:44', 1, 1, 1, 1, 1, 2, 5, 8, 13, 18);
INSERT INTO `ren_mil_das_wan` VALUES (107, '00:02:45', 1, 1, 1, 1, 1, 1, 4, 7, 12, 17);
INSERT INTO `ren_mil_das_wan` VALUES (108, '00:02:46', 1, 1, 1, 1, 1, 1, 3, 6, 11, 16);
INSERT INTO `ren_mil_das_wan` VALUES (109, '00:02:47', 1, 1, 1, 1, 1, 1, 2, 5, 10, 15);
INSERT INTO `ren_mil_das_wan` VALUES (110, '00:02:48', 1, 1, 1, 1, 1, 1, 1, 4, 9, 14);
INSERT INTO `ren_mil_das_wan` VALUES (111, '00:02:49', 1, 1, 1, 1, 1, 1, 1, 3, 8, 13);
INSERT INTO `ren_mil_das_wan` VALUES (112, '00:02:50', 1, 1, 1, 1, 1, 1, 1, 2, 7, 12);
INSERT INTO `ren_mil_das_wan` VALUES (113, '00:02:51', 1, 1, 1, 1, 1, 1, 1, 1, 6, 11);
INSERT INTO `ren_mil_das_wan` VALUES (114, '00:02:52', 1, 1, 1, 1, 1, 1, 1, 1, 5, 10);
INSERT INTO `ren_mil_das_wan` VALUES (115, '00:02:53', 1, 1, 1, 1, 1, 1, 1, 1, 4, 9);
INSERT INTO `ren_mil_das_wan` VALUES (116, '00:02:54', 1, 1, 1, 1, 1, 1, 1, 1, 3, 8);
INSERT INTO `ren_mil_das_wan` VALUES (117, '00:02:55', 1, 1, 1, 1, 1, 1, 1, 1, 2, 7);
INSERT INTO `ren_mil_das_wan` VALUES (118, '00:02:56', 1, 1, 1, 1, 1, 1, 1, 1, 1, 6);
INSERT INTO `ren_mil_das_wan` VALUES (119, '00:02:57', 1, 1, 1, 1, 1, 1, 1, 1, 1, 5);
INSERT INTO `ren_mil_das_wan` VALUES (120, '00:02:58', 1, 1, 1, 1, 1, 1, 1, 1, 1, 4);
INSERT INTO `ren_mil_das_wan` VALUES (121, '00:02:59', 1, 1, 1, 1, 1, 1, 1, 1, 1, 3);
INSERT INTO `ren_mil_das_wan` VALUES (122, '00:03:00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 2);
INSERT INTO `ren_mil_das_wan` VALUES (123, '00:03:01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- ----------------------------
-- Table structure for satker
-- ----------------------------
DROP TABLE IF EXISTS `satker`;
CREATE TABLE `satker`  (
  `id_satker` int(11) NOT NULL AUTO_INCREMENT,
  `nama_satker` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_kotama` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_satker`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_nilai
-- ----------------------------
DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE `tb_nilai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_data_personil` int(11) NULL DEFAULT NULL,
  `kelompok_umur` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tinggi_badan` int(11) NULL DEFAULT NULL,
  `berat_badan` int(11) NULL DEFAULT NULL,
  `kelas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai_bmi` int(11) NULL DEFAULT NULL,
  `nilai_postur` int(11) NULL DEFAULT NULL,
  `kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lari` time(0) NULL DEFAULT NULL,
  `pull_up` int(11) NULL DEFAULT NULL,
  `sit_up` int(11) NULL DEFAULT NULL,
  `push_up` int(11) NULL DEFAULT NULL,
  `shuttle_run` double NULL DEFAULT NULL,
  `renang` time(0) NULL DEFAULT NULL,
  `nilai` double NULL DEFAULT NULL,
  `keterangan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_seldik` int(11) NULL DEFAULT NULL,
  `date_created` date NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  `flag_del` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_nilai
-- ----------------------------
INSERT INTO `tb_nilai` VALUES (1, 2, 'III', 176, 95, NULL, NULL, NULL, NULL, '00:16:45', 4, 36, 25, 20, '00:01:25', NULL, NULL, NULL, '2018-11-11', NULL, '1');
INSERT INTO `tb_nilai` VALUES (2, 1, 'VI', 169, 89, NULL, NULL, NULL, NULL, '00:18:56', 14, 35, 35, 19, '00:00:45', NULL, NULL, NULL, '2018-11-11', NULL, '0');
INSERT INTO `tb_nilai` VALUES (3, 4, 'V', 175, 73, 'Ideal Atas', 24, 91, 'Memenuhi Sarat', '00:18:30', 4, 35, 35, 19, '00:01:10', 66.7125, 'Tidak Lulus', NULL, '2018-11-11', '2018-11-19 10:01:30', '0');
INSERT INTO `tb_nilai` VALUES (7, 2, 'III', 175, 80, 'Harmonis Atas', 26, 71, 'Memenuhi Sarat', '00:13:00', 3, 30, 30, 18.3, '00:00:20', 75.7, 'Tidak Lulus', NULL, '2018-08-11', '2018-11-15 11:13:34', '0');
INSERT INTO `tb_nilai` VALUES (8, 6, 'IV', 165, 70, 'Harmonis Atas', 26, 71, 'Memenuhi Sarat', '00:20:00', 35, 25, 25, 20, '00:01:30', 72.7, 'Lulus', NULL, '2018-11-15', '2018-11-15 11:01:03', '0');
INSERT INTO `tb_nilai` VALUES (9, 6, 'IV', 175, 70, 'Ideal Bawah', 23, 81, 'Memenuhi Sarat', '00:20:00', 30, 20, 20, 20, '00:01:40', 68.1, 'Tidak Lulus', NULL, '2018-11-15', '2018-11-15 11:00:42', '0');

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
INSERT INTO `user_type_access` VALUES (0, 'dataadmin', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'datanilai', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'personel', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'suratmasuk', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'users', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'workflow', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'workflowsurat', '*', 1);
INSERT INTO `user_type_access` VALUES (1, 'datanilaifront', '*', 1);
INSERT INTO `user_type_access` VALUES (1, 'front', '*', 1);
INSERT INTO `user_type_access` VALUES (1, 'personelfront', '*', 1);
INSERT INTO `user_type_access` VALUES (2, 'satker', '*', 1);
INSERT INTO `user_type_access` VALUES (3, 'kotama', '*', 1);
INSERT INTO `user_type_access` VALUES (4, 'mabes', '*', 1);

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types`  (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`user_type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (0, 'Admin');
INSERT INTO `user_types` VALUES (1, 'Front');
INSERT INTO `user_types` VALUES (2, 'Satker');
INSERT INTO `user_types` VALUES (3, 'Kotama');
INSERT INTO `user_types` VALUES (4, 'Mabes');

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
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1, '2016-04-11 19:04:28', NULL, NULL, NULL);
INSERT INTO `users` VALUES (23, 'dekahuha', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '2018-11-04 13:06:32', NULL, '2018-11-07 15:37:21', 0);
INSERT INTO `users` VALUES (24, 'admindeka', '99f9b2cd7dfc324b219ac2e5ce29e5d5', 0, 1, '2018-11-04 13:07:50', NULL, NULL, 0);
INSERT INTO `users` VALUES (25, 'love', 'b5c0b187fe309af0f4d35982fd961d7e', 1, 1, '2018-11-04 13:24:48', '2018-11-04 01:24:48', NULL, 0);
INSERT INTO `users` VALUES (26, 'lola', 'fceeb9b9d469401fe558062c4bd25954', 1, 1, '2018-11-04 13:26:50', '2018-11-04 13:26:50', '2018-11-04 13:29:25', 1);
INSERT INTO `users` VALUES (27, 'to', '01b6e20344b68835c5ed1ddedf20d531', 0, 1, '2018-11-07 05:58:48', '2018-11-07 05:58:48', NULL, 0);
INSERT INTO `users` VALUES (37, '123345566', '3c4f40c702600b2df7e4ab5a5154ba81', 1, 1, '2018-11-19 15:34:50', '2018-11-19 15:34:50', NULL, 0);
INSERT INTO `users` VALUES (39, '116789', '29f9b600ea2ffbe9e572af61b898f12f', 1, 1, '2018-11-19 15:43:07', '2018-11-19 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (40, 'satker', '418b6672efe440cdce92f2f1233f9815', 2, 1, '2018-11-23 04:27:47', '2018-11-23 04:27:47', '2018-11-23 04:28:21', 0);
INSERT INTO `users` VALUES (41, 'kotama', '8370ff304b6240d6c7bcdf8620ca645a', 3, 1, '2018-11-23 04:36:57', '2018-11-23 04:36:57', NULL, 0);
INSERT INTO `users` VALUES (42, 'mabes', 'e166e46270d57df7c47ebba087c635f0', 4, 1, '2018-11-23 04:40:40', '2018-11-23 04:40:40', NULL, 0);

SET FOREIGN_KEY_CHECKS = 1;
