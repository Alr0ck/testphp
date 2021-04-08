/*
 Navicat Premium Data Transfer

 Source Server         : localMySQL
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : localhost:3306
 Source Schema         : dbtest

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : 65001

 Date: 09/04/2021 00:22:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nama_Pelanggan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Tanggal` date NULL DEFAULT NULL,
  `Total_Belanja` decimal(15, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of history
-- ----------------------------

-- ----------------------------
-- Table structure for laporan
-- ----------------------------
DROP TABLE IF EXISTS `laporan`;
CREATE TABLE `laporan`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Omset` decimal(15, 2) NULL DEFAULT NULL,
  `Total_Quantity` int NULL DEFAULT NULL,
  `Tanggal` date NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of laporan
-- ----------------------------
INSERT INTO `laporan` VALUES (1, 3000000.00, 175, '2020-01-03');
INSERT INTO `laporan` VALUES (2, 4000000.00, 200, '2020-01-04');
INSERT INTO `laporan` VALUES (3, 5000000.00, 250, '2020-01-05');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nama_Pelanggan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Quantity` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, 'Adi', 70);
INSERT INTO `transaksi` VALUES (2, 'Budi', 100);
INSERT INTO `transaksi` VALUES (3, 'Cinta', 80);

SET FOREIGN_KEY_CHECKS = 1;
