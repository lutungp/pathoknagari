/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : masjid

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 25/12/2018 20:04:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'Kategori A');
INSERT INTO `kategori` VALUES (3, 'Kategori B');

-- ----------------------------
-- Table structure for m_berita
-- ----------------------------
DROP TABLE IF EXISTS `m_berita`;
CREATE TABLE `m_berita`  (
  `berita_id` int(11) NOT NULL AUTO_INCREMENT,
  `berita_tanggal` timestamp(0) NULL DEFAULT NULL,
  `berita_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berita_isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `berita_penulis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berita_summary` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'text yang diulis di awa list',
  `berita_photo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `berita_created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berita_created_date` datetime(0) NULL DEFAULT NULL,
  `berita_updated_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berita_updated_date` datetime(0) NULL DEFAULT NULL,
  `berita_active` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'y',
  PRIMARY KEY (`berita_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_berita
-- ----------------------------
INSERT INTO `m_berita` VALUES (3, NULL, 'Judul', 'cacascascasc                        ', NULL, NULL, 'op.jpg', NULL, NULL, NULL, NULL, 'y');

-- ----------------------------
-- Table structure for permits
-- ----------------------------
DROP TABLE IF EXISTS `permits`;
CREATE TABLE `permits`  (
  `permit_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` int(11) NOT NULL,
  `sidebar` int(11) NOT NULL,
  `permit_access` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`permit_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 65 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permits
-- ----------------------------
INSERT INTO `permits` VALUES (51, 1, 3, 'c,r,u,d');
INSERT INTO `permits` VALUES (52, 1, 4, 'c,r,u,d');
INSERT INTO `permits` VALUES (53, 1, 5, '');
INSERT INTO `permits` VALUES (54, 1, 18, 'c,r,u,d');
INSERT INTO `permits` VALUES (55, 1, 19, '');
INSERT INTO `permits` VALUES (56, 1, 20, 'c,r,u,d');
INSERT INTO `permits` VALUES (57, 1, 21, 'c,r,u,d');
INSERT INTO `permits` VALUES (58, 5, 3, 'c,r,u,d');
INSERT INTO `permits` VALUES (59, 5, 4, '');
INSERT INTO `permits` VALUES (60, 5, 5, '');
INSERT INTO `permits` VALUES (61, 5, 18, '');
INSERT INTO `permits` VALUES (62, 5, 19, '');
INSERT INTO `permits` VALUES (63, 5, 20, '');
INSERT INTO `permits` VALUES (64, 5, 21, '');

-- ----------------------------
-- Table structure for sidebar
-- ----------------------------
DROP TABLE IF EXISTS `sidebar`;
CREATE TABLE `sidebar`  (
  `sidebar_id` int(11) NOT NULL AUTO_INCREMENT,
  `sidebar_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sidebar_parent` int(11) NOT NULL,
  `sidebar_level` int(11) NOT NULL,
  `sidebar_url` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sidebar_icon` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `sidebar_active` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'y',
  PRIMARY KEY (`sidebar_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sidebar
-- ----------------------------
INSERT INTO `sidebar` VALUES (3, 'User', 5, 2, 'user_list', '', 'y');
INSERT INTO `sidebar` VALUES (4, 'User Type', 5, 2, 'user_type_list', '', 'y');
INSERT INTO `sidebar` VALUES (5, 'Master', 0, 1, '#', 'fa fa-dashboard', 'y');
INSERT INTO `sidebar` VALUES (18, 'Jadwal harian', 19, 2, 'jadwal-harian', NULL, 'y');
INSERT INTO `sidebar` VALUES (19, 'Content', 0, 1, '#', NULL, 'y');
INSERT INTO `sidebar` VALUES (20, 'Berita', 19, 2, 'Berita', 'fa fa-book', 'y');
INSERT INTO `sidebar` VALUES (21, 'Kajian', 19, 2, 'Kajian', NULL, 'y');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` int(11) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_img` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `branch` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (8, 1, 'aan sutopo', 'red.jpg', 'fcea920f7412b5da7be0cf42b8c93759', NULL);

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type`  (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`user_type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES (1, 'Administrator');
INSERT INTO `user_type` VALUES (5, 'Semi Admin');

SET FOREIGN_KEY_CHECKS = 1;
