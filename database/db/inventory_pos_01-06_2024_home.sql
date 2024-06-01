/*
 Navicat Premium Data Transfer

 Source Server         : laragon
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : inventory_pos

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 01/06/2024 22:48:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity_log
-- ----------------------------
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subject_id` bigint UNSIGNED NULL DEFAULT NULL,
  `causer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `causer_id` bigint UNSIGNED NULL DEFAULT NULL,
  `properties` json NULL,
  `batch_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `subject`(`subject_type` ASC, `subject_id` ASC) USING BTREE,
  INDEX `causer`(`causer_type` ASC, `causer_id` ASC) USING BTREE,
  INDEX `activity_log_log_name_index`(`log_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of activity_log
-- ----------------------------
INSERT INTO `activity_log` VALUES (1, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 1, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 1, \"logo\": null, \"name\": \"gfffgf\", \"status\": 1, \"created_at\": \"2024-06-01T08:21:34.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T08:21:34.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 08:21:34', '2024-06-01 08:21:34');
INSERT INTO `activity_log` VALUES (2, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 2, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 2, \"logo\": null, \"name\": \"dfdfdfd\", \"status\": 1, \"created_at\": \"2024-06-01T08:23:09.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T08:23:09.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 08:23:09', '2024-06-01 08:23:09');
INSERT INTO `activity_log` VALUES (3, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 3, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 3, \"logo\": null, \"name\": \"Alias aliquid sit qu\", \"status\": 1, \"created_at\": \"2024-06-01T08:28:33.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T08:28:33.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 08:28:33', '2024-06-01 08:28:33');
INSERT INTO `activity_log` VALUES (4, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 4, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 4, \"logo\": null, \"name\": \"asasasa\", \"status\": 1, \"created_at\": \"2024-06-01T08:28:48.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T08:28:48.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 08:28:48', '2024-06-01 08:28:48');
INSERT INTO `activity_log` VALUES (5, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 5, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 5, \"logo\": null, \"name\": \"ggfgfg\", \"status\": 1, \"created_at\": \"2024-06-01T08:33:49.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T08:33:49.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 08:33:49', '2024-06-01 08:33:49');
INSERT INTO `activity_log` VALUES (6, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 6, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 6, \"logo\": null, \"name\": \"ghghghg\", \"status\": 1, \"created_at\": \"2024-06-01T08:34:35.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T08:34:35.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 08:34:35', '2024-06-01 08:34:35');
INSERT INTO `activity_log` VALUES (7, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 7, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 7, \"logo\": null, \"name\": \"212\", \"status\": 1, \"created_at\": \"2024-06-01T08:54:37.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T08:54:37.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 08:54:37', '2024-06-01 08:54:37');
INSERT INTO `activity_log` VALUES (8, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 8, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 8, \"logo\": null, \"name\": \"ghghgghg\", \"status\": 1, \"created_at\": \"2024-06-01T09:02:22.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:02:22.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:02:22', '2024-06-01 09:02:22');
INSERT INTO `activity_log` VALUES (9, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 9, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 9, \"logo\": null, \"name\": \"ghghgh\", \"status\": 1, \"created_at\": \"2024-06-01T09:02:55.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:02:55.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:02:55', '2024-06-01 09:02:55');
INSERT INTO `activity_log` VALUES (10, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 10, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 10, \"logo\": null, \"name\": \"hjjjj\", \"status\": 1, \"created_at\": \"2024-06-01T09:11:32.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:11:32.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:11:32', '2024-06-01 09:11:32');
INSERT INTO `activity_log` VALUES (11, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 11, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 11, \"logo\": null, \"name\": \"gghghg\", \"status\": 1, \"created_at\": \"2024-06-01T09:12:33.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:12:33.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:12:33', '2024-06-01 09:12:33');
INSERT INTO `activity_log` VALUES (12, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 12, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 12, \"logo\": null, \"name\": \"fddfdfdfd\", \"status\": 1, \"created_at\": \"2024-06-01T09:12:53.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:12:53.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:12:53', '2024-06-01 09:12:53');
INSERT INTO `activity_log` VALUES (13, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 13, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 13, \"logo\": null, \"name\": \"sdsdsdsds\", \"status\": 1, \"created_at\": \"2024-06-01T09:13:53.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:13:53.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:13:53', '2024-06-01 09:13:53');
INSERT INTO `activity_log` VALUES (14, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 14, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 14, \"logo\": null, \"name\": \"aaaaaa\", \"status\": 1, \"created_at\": \"2024-06-01T09:14:25.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:14:25.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:14:25', '2024-06-01 09:14:25');
INSERT INTO `activity_log` VALUES (15, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 15, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 15, \"logo\": null, \"name\": \"777777\", \"status\": 1, \"created_at\": \"2024-06-01T09:14:56.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:14:56.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:14:56', '2024-06-01 09:14:56');
INSERT INTO `activity_log` VALUES (16, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 16, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 16, \"logo\": null, \"name\": \"5460003\", \"status\": 1, \"created_at\": \"2024-06-01T09:15:10.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:15:10.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:15:10', '2024-06-01 09:15:10');
INSERT INTO `activity_log` VALUES (17, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 17, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 17, \"logo\": null, \"name\": \"asasasasa\", \"status\": 1, \"created_at\": \"2024-06-01T09:18:00.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:18:00.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:18:00', '2024-06-01 09:18:00');
INSERT INTO `activity_log` VALUES (18, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 18, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 18, \"logo\": null, \"name\": \"sdsdsds\", \"status\": 1, \"created_at\": \"2024-06-01T09:18:10.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:18:10.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:18:10', '2024-06-01 09:18:10');
INSERT INTO `activity_log` VALUES (19, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 19, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 19, \"logo\": null, \"name\": \"dfdddddddd541201\", \"status\": 1, \"created_at\": \"2024-06-01T09:19:04.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:19:04.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:19:04', '2024-06-01 09:19:04');
INSERT INTO `activity_log` VALUES (20, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 21, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 21, \"logo\": null, \"name\": \"sdsdsdsdsdsdsdsdsdss\", \"status\": 1, \"created_at\": \"2024-06-01T09:25:06.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:25:06.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:25:06', '2024-06-01 09:25:06');
INSERT INTO `activity_log` VALUES (21, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 22, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 22, \"logo\": null, \"name\": \"dssdsdsdsd\", \"status\": 1, \"created_at\": \"2024-06-01T09:25:21.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:25:21.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:25:21', '2024-06-01 09:25:21');
INSERT INTO `activity_log` VALUES (22, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 23, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 23, \"logo\": null, \"name\": \"554444545433fdffddfd\", \"status\": 1, \"created_at\": \"2024-06-01T09:30:02.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:30:02.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:30:02', '2024-06-01 09:30:02');
INSERT INTO `activity_log` VALUES (23, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 25, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 25, \"logo\": null, \"name\": \"er454\", \"status\": 1, \"created_at\": \"2024-06-01T09:41:46.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:41:46.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:41:46', '2024-06-01 09:41:46');
INSERT INTO `activity_log` VALUES (24, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 26, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 26, \"logo\": null, \"name\": \"er454fdfd\", \"status\": 1, \"created_at\": \"2024-06-01T09:43:19.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:43:19.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:43:19', '2024-06-01 09:43:19');
INSERT INTO `activity_log` VALUES (25, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 27, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 27, \"logo\": null, \"name\": \"55555fvff\", \"status\": 1, \"created_at\": \"2024-06-01T09:43:40.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:43:40.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:43:40', '2024-06-01 09:43:40');
INSERT INTO `activity_log` VALUES (26, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 28, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 28, \"logo\": null, \"name\": \"sdsss3433\", \"status\": 1, \"created_at\": \"2024-06-01T09:44:55.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:44:55.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:44:55', '2024-06-01 09:44:55');
INSERT INTO `activity_log` VALUES (27, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 29, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 29, \"logo\": null, \"name\": \"dsdssds\", \"status\": 1, \"created_at\": \"2024-06-01T09:51:24.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:51:24.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:51:24', '2024-06-01 09:51:24');
INSERT INTO `activity_log` VALUES (28, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 31, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 31, \"logo\": null, \"name\": \"dfdfdfddffdfe33\", \"status\": 1, \"created_at\": \"2024-06-01T09:51:45.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:51:45.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:51:45', '2024-06-01 09:51:45');
INSERT INTO `activity_log` VALUES (29, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 32, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 32, \"logo\": null, \"name\": \"sdsdsd sdsdsd\", \"status\": 1, \"created_at\": \"2024-06-01T09:51:59.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:51:59.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:51:59', '2024-06-01 09:51:59');
INSERT INTO `activity_log` VALUES (30, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 33, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 33, \"logo\": null, \"name\": \"sdsd3434343\", \"status\": 1, \"created_at\": \"2024-06-01T09:52:53.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:52:53.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:52:53', '2024-06-01 09:52:53');
INSERT INTO `activity_log` VALUES (31, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 34, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 34, \"logo\": null, \"name\": \"sds343544\", \"status\": 1, \"created_at\": \"2024-06-01T09:54:16.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:54:16.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:54:16', '2024-06-01 09:54:16');
INSERT INTO `activity_log` VALUES (32, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 35, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 35, \"logo\": null, \"name\": \"sdsds sdsdsds54454\", \"status\": 1, \"created_at\": \"2024-06-01T09:54:39.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:54:39.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:54:39', '2024-06-01 09:54:39');
INSERT INTO `activity_log` VALUES (33, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 36, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 36, \"logo\": null, \"name\": \"dfdfd dfdfdfdfdd\", \"status\": 1, \"created_at\": \"2024-06-01T09:54:55.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T09:54:55.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 09:54:55', '2024-06-01 09:54:55');
INSERT INTO `activity_log` VALUES (34, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 37, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 37, \"logo\": null, \"name\": \"fdde434 er\", \"status\": 1, \"created_at\": \"2024-06-01T10:06:50.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:06:50.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:06:50', '2024-06-01 10:06:50');
INSERT INTO `activity_log` VALUES (35, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 38, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 38, \"logo\": null, \"name\": \"dsss443434\", \"status\": 1, \"created_at\": \"2024-06-01T10:09:16.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:09:16.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:09:16', '2024-06-01 10:09:16');
INSERT INTO `activity_log` VALUES (36, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 39, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 39, \"logo\": null, \"name\": \"fff fgfgf\", \"status\": 1, \"created_at\": \"2024-06-01T10:16:54.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:16:54.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:16:54', '2024-06-01 10:16:54');
INSERT INTO `activity_log` VALUES (37, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 40, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 40, \"logo\": null, \"name\": \"sassasa\", \"status\": 1, \"created_at\": \"2024-06-01T10:19:30.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:19:30.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:19:30', '2024-06-01 10:19:30');
INSERT INTO `activity_log` VALUES (38, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 41, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 41, \"logo\": null, \"name\": \"fg fgfg fgffgfgfgf fgfgfgfgf\", \"status\": 1, \"created_at\": \"2024-06-01T10:21:28.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:21:28.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:21:28', '2024-06-01 10:21:28');
INSERT INTO `activity_log` VALUES (39, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 42, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 42, \"logo\": null, \"name\": \"1111111111111111111111111111\", \"status\": 1, \"created_at\": \"2024-06-01T10:23:31.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:23:31.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:23:31', '2024-06-01 10:23:31');
INSERT INTO `activity_log` VALUES (40, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 43, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 43, \"logo\": null, \"name\": \"aaaaa222\", \"status\": 1, \"created_at\": \"2024-06-01T10:23:50.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:23:50.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:23:50', '2024-06-01 10:23:50');
INSERT INTO `activity_log` VALUES (41, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 44, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 44, \"logo\": null, \"name\": \"fgfgfg f10000\", \"status\": 1, \"created_at\": \"2024-06-01T10:24:17.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:24:17.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:24:17', '2024-06-01 10:24:17');
INSERT INTO `activity_log` VALUES (42, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 45, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 45, \"logo\": null, \"name\": \"9999999\", \"status\": 1, \"created_at\": \"2024-06-01T10:34:16.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:34:16.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:34:16', '2024-06-01 10:34:16');
INSERT INTO `activity_log` VALUES (43, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 46, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 46, \"logo\": null, \"name\": \"add nhjjhjh\", \"status\": 1, \"created_at\": \"2024-06-01T10:36:20.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:36:20.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:36:20', '2024-06-01 10:36:20');
INSERT INTO `activity_log` VALUES (44, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 47, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 47, \"logo\": null, \"name\": \"sdsdsd dsds dsds dsdsdsdsdsds\", \"status\": 1, \"created_at\": \"2024-06-01T10:38:44.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:38:44.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:38:44', '2024-06-01 10:38:44');
INSERT INTO `activity_log` VALUES (45, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 48, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 48, \"logo\": null, \"name\": \"ssdsd sdsdsd ssdsdsds dsdsdsd sdsds dsds dsdsdsds\", \"status\": 1, \"created_at\": \"2024-06-01T10:39:37.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:39:37.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:39:37', '2024-06-01 10:39:37');
INSERT INTO `activity_log` VALUES (46, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 49, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 49, \"logo\": null, \"name\": \"ssdsd sdsdsd ssdsdsds dsdsdsd sdsds dsds dsdsdsdssd ssds dsds\", \"status\": 1, \"created_at\": \"2024-06-01T10:39:45.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:39:45.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:39:45', '2024-06-01 10:39:45');
INSERT INTO `activity_log` VALUES (47, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 50, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 50, \"logo\": null, \"name\": \"ddd544 44 544\", \"status\": 1, \"created_at\": \"2024-06-01T10:40:34.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:40:34.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:40:34', '2024-06-01 10:40:34');
INSERT INTO `activity_log` VALUES (48, 'Brand', 'Brand created', 'App\\Models\\Brand', 'created', 51, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 51, \"logo\": null, \"name\": \"0001111111\", \"status\": 1, \"created_at\": \"2024-06-01T10:44:02.000000Z\", \"created_by\": null, \"updated_at\": \"2024-06-01T10:44:02.000000Z\", \"updated_by\": null, \"description\": null}}', NULL, '2024-06-01 10:44:02', '2024-06-01 10:44:02');
INSERT INTO `activity_log` VALUES (49, 'Unit', 'Unit created', 'App\\Models\\Unit', 'created', 1, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 1, \"name\": \"aaa\", \"status\": 1, \"base_unit\": \"1\", \"created_at\": \"2024-06-01T12:51:52.000000Z\", \"created_by\": null, \"short_name\": \"aaaa\", \"updated_at\": \"2024-06-01T12:51:52.000000Z\", \"updated_by\": null}}', NULL, '2024-06-01 12:51:52', '2024-06-01 12:51:52');
INSERT INTO `activity_log` VALUES (50, 'Unit', 'Unit created', 'App\\Models\\Unit', 'created', 2, 'App\\Models\\User', 1, '{\"attributes\": {\"id\": 2, \"name\": \"fgfgfgf\", \"status\": 1, \"base_unit\": \"1\", \"created_at\": \"2024-06-01T14:24:47.000000Z\", \"created_by\": null, \"short_name\": \"fgfgf\", \"updated_at\": \"2024-06-01T14:24:47.000000Z\", \"updated_by\": null}}', NULL, '2024-06-01 14:24:47', '2024-06-01 14:24:47');
INSERT INTO `activity_log` VALUES (51, 'Unit', 'Unit updated', 'App\\Models\\Unit', 'updated', 1, 'App\\Models\\User', 1, '{\"old\": {\"name\": \"aaa\", \"short_name\": \"aaaa\", \"updated_at\": \"2024-06-01T12:51:52.000000Z\"}, \"attributes\": {\"name\": \"aaa2\", \"short_name\": \"aaaa2\", \"updated_at\": \"2024-06-01T14:34:28.000000Z\"}}', NULL, '2024-06-01 14:34:28', '2024-06-01 14:34:28');
INSERT INTO `activity_log` VALUES (52, 'Unit', 'Unit updated', 'App\\Models\\Unit', 'updated', 2, 'App\\Models\\User', 1, '{\"old\": {\"name\": \"fgfgfgf\", \"short_name\": \"fgfgf\", \"updated_at\": \"2024-06-01T14:24:47.000000Z\"}, \"attributes\": {\"name\": \"fgfgfgf3\", \"short_name\": \"fgfgf3\", \"updated_at\": \"2024-06-01T14:34:44.000000Z\"}}', NULL, '2024-06-01 14:34:44', '2024-06-01 14:34:44');

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_by` int NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `brands_name_unique`(`name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 52 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (1, 'gfffgf', NULL, NULL, 1, NULL, NULL, '2024-06-01 08:21:34', '2024-06-01 08:21:34');
INSERT INTO `brands` VALUES (2, 'dfdfdfd', NULL, NULL, 1, NULL, NULL, '2024-06-01 08:23:09', '2024-06-01 08:23:09');
INSERT INTO `brands` VALUES (3, 'Alias aliquid sit qu', NULL, NULL, 1, NULL, NULL, '2024-06-01 08:28:33', '2024-06-01 08:28:33');
INSERT INTO `brands` VALUES (4, 'asasasa', NULL, NULL, 1, NULL, NULL, '2024-06-01 08:28:48', '2024-06-01 08:28:48');
INSERT INTO `brands` VALUES (5, 'ggfgfg', NULL, NULL, 1, NULL, NULL, '2024-06-01 08:33:49', '2024-06-01 08:33:49');
INSERT INTO `brands` VALUES (6, 'ghghghg', NULL, NULL, 1, NULL, NULL, '2024-06-01 08:34:35', '2024-06-01 08:34:35');
INSERT INTO `brands` VALUES (7, '212', NULL, NULL, 1, NULL, NULL, '2024-06-01 08:54:37', '2024-06-01 08:54:37');
INSERT INTO `brands` VALUES (8, 'ghghgghg', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:02:22', '2024-06-01 09:02:22');
INSERT INTO `brands` VALUES (9, 'ghghgh', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:02:55', '2024-06-01 09:02:55');
INSERT INTO `brands` VALUES (10, 'hjjjj', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:11:32', '2024-06-01 09:11:32');
INSERT INTO `brands` VALUES (11, 'gghghg', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:12:33', '2024-06-01 09:12:33');
INSERT INTO `brands` VALUES (12, 'fddfdfdfd', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:12:53', '2024-06-01 09:12:53');
INSERT INTO `brands` VALUES (13, 'sdsdsdsds', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:13:53', '2024-06-01 09:13:53');
INSERT INTO `brands` VALUES (14, 'aaaaaa', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:14:25', '2024-06-01 09:14:25');
INSERT INTO `brands` VALUES (15, '777777', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:14:56', '2024-06-01 09:14:56');
INSERT INTO `brands` VALUES (16, '5460003', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:15:10', '2024-06-01 09:15:10');
INSERT INTO `brands` VALUES (17, 'asasasasa', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:18:00', '2024-06-01 09:18:00');
INSERT INTO `brands` VALUES (18, 'sdsdsds', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:18:10', '2024-06-01 09:18:10');
INSERT INTO `brands` VALUES (19, 'dfdddddddd541201', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:19:04', '2024-06-01 09:19:04');
INSERT INTO `brands` VALUES (21, 'sdsdsdsdsdsdsdsdsdss', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:25:06', '2024-06-01 09:25:06');
INSERT INTO `brands` VALUES (22, 'dssdsdsdsd', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:25:21', '2024-06-01 09:25:21');
INSERT INTO `brands` VALUES (23, '554444545433fdffddfd', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:30:02', '2024-06-01 09:30:02');
INSERT INTO `brands` VALUES (25, 'er454', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:41:46', '2024-06-01 09:41:46');
INSERT INTO `brands` VALUES (26, 'er454fdfd', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:43:19', '2024-06-01 09:43:19');
INSERT INTO `brands` VALUES (27, '55555fvff', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:43:40', '2024-06-01 09:43:40');
INSERT INTO `brands` VALUES (28, 'sdsss3433', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:44:55', '2024-06-01 09:44:55');
INSERT INTO `brands` VALUES (29, 'dsdssds', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:51:24', '2024-06-01 09:51:24');
INSERT INTO `brands` VALUES (31, 'dfdfdfddffdfe33', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:51:45', '2024-06-01 09:51:45');
INSERT INTO `brands` VALUES (32, 'sdsdsd sdsdsd', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:51:59', '2024-06-01 09:51:59');
INSERT INTO `brands` VALUES (33, 'sdsd3434343', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:52:53', '2024-06-01 09:52:53');
INSERT INTO `brands` VALUES (34, 'sds343544', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:54:16', '2024-06-01 09:54:16');
INSERT INTO `brands` VALUES (35, 'sdsds sdsdsds54454', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:54:39', '2024-06-01 09:54:39');
INSERT INTO `brands` VALUES (36, 'dfdfd dfdfdfdfdd', NULL, NULL, 1, NULL, NULL, '2024-06-01 09:54:55', '2024-06-01 09:54:55');
INSERT INTO `brands` VALUES (37, 'fdde434 er', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:06:50', '2024-06-01 10:06:50');
INSERT INTO `brands` VALUES (38, 'dsss443434', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:09:16', '2024-06-01 10:09:16');
INSERT INTO `brands` VALUES (39, 'fff fgfgf', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:16:54', '2024-06-01 10:16:54');
INSERT INTO `brands` VALUES (40, 'sassasa', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:19:30', '2024-06-01 10:19:30');
INSERT INTO `brands` VALUES (41, 'fg fgfg fgffgfgfgf fgfgfgfgf', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:21:28', '2024-06-01 10:21:28');
INSERT INTO `brands` VALUES (42, '1111111111111111111111111111', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:23:31', '2024-06-01 10:23:31');
INSERT INTO `brands` VALUES (43, 'aaaaa222', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:23:50', '2024-06-01 10:23:50');
INSERT INTO `brands` VALUES (44, 'fgfgfg f10000', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:24:17', '2024-06-01 10:24:17');
INSERT INTO `brands` VALUES (45, '9999999', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:34:16', '2024-06-01 10:34:16');
INSERT INTO `brands` VALUES (46, 'add nhjjhjh', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:36:20', '2024-06-01 10:36:20');
INSERT INTO `brands` VALUES (47, 'sdsdsd dsds dsds dsdsdsdsdsds', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:38:44', '2024-06-01 10:38:44');
INSERT INTO `brands` VALUES (48, 'ssdsd sdsdsd ssdsdsds dsdsdsd sdsds dsds dsdsdsds', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:39:37', '2024-06-01 10:39:37');
INSERT INTO `brands` VALUES (49, 'ssdsd sdsdsd ssdsdsds dsdsdsd sdsds dsds dsdsdsdssd ssds dsds', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:39:45', '2024-06-01 10:39:45');
INSERT INTO `brands` VALUES (50, 'ddd544 44 544', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:40:34', '2024-06-01 10:40:34');
INSERT INTO `brands` VALUES (51, '0001111111', NULL, NULL, 1, NULL, NULL, '2024-06-01 10:44:02', '2024-06-01 10:44:02');

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cache
-- ----------------------------

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int NULL DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED NULL DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for media
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `collection_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `media_uuid_unique`(`uuid` ASC) USING BTREE,
  INDEX `media_model_type_model_id_index`(`model_type` ASC, `model_id` ASC) USING BTREE,
  INDEX `media_order_column_index`(`order_column` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of media
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2024_06_01_054527_create_permission_tables', 2);
INSERT INTO `migrations` VALUES (5, '2024_06_01_062341_create_media_table', 3);
INSERT INTO `migrations` VALUES (6, '2024_06_01_063514_create_activity_log_table', 4);
INSERT INTO `migrations` VALUES (7, '2024_06_01_063515_add_event_column_to_activity_log_table', 4);
INSERT INTO `migrations` VALUES (8, '2024_06_01_063516_add_batch_uuid_column_to_activity_log_table', 4);
INSERT INTO `migrations` VALUES (9, '2024_06_01_065820_create_brands_table', 5);
INSERT INTO `migrations` VALUES (10, '2024_06_01_065821_create_brands_table', 6);
INSERT INTO `migrations` VALUES (11, '2024_06_01_082207_create_products_table', 7);
INSERT INTO `migrations` VALUES (12, '2024_06_01_120915_create_units_table', 7);
INSERT INTO `migrations` VALUES (13, '2024_06_01_133311_add_image_to_users_table', 8);
INSERT INTO `migrations` VALUES (14, '2024_06_01_133538_add_display_name_to_permissions_and_roles', 9);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id` ASC) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('AU91ySbc50EPhmj5F4UdL5zn8ocSpgx5nd0IkHLS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUDUwWHdQTHd1YXJCRTdKM0dlUm9EY2JMSVQxZjZBbW44OXVHRkxEQyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovL2ludmVudG9yeS1wb3MudGVzdC91bml0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1717260423);
INSERT INTO `sessions` VALUES ('glw4Ze5VejXTfgNTA5f8zM4IJ3DLuQfaSSkoKk4C', NULL, NULL, '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZDRKU3lrYktMSnkxVnIzTGp1NGFaUkRYTllpd0RzV1BnYlVKUXFaOCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo4OiJodHRwOi8vOiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717238700);
INSERT INTO `sessions` VALUES ('nuckymt1tyhKieuRfas2yZagWuHdalkHJPmP4mQo', NULL, NULL, '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicllCeEdlTWdWNmZIUnVvZG53cUFQY3JjdHg2MUpMUWRadG1ab2xkOSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo4OiJodHRwOi8vOiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717238151);
INSERT INTO `sessions` VALUES ('OXmYS14bOspOWBeNWRviMIvW2Hg14ZLYZIWUcVMx', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRTFkMU50RTQ2ZFNwNk5Pa1lwd1NTQm5ZMFZGV0JQMk9hRW92Y3p0eSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovL2ludmVudG9yeS1wb3MudGVzdC9icmFuZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1717238648);
INSERT INTO `sessions` VALUES ('UFGxzHWEJQHvkIp1s9x6EHGu0So4OPwwiAuKSfnz', NULL, NULL, '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidnRrNUhtdmEyMkhlcExZVUlVTmtKSFk5aURYdGc1YjJzeXJqdFpxQSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo4OiJodHRwOi8vOiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717238568);
INSERT INTO `sessions` VALUES ('VEdmGlsLtrR31F2IxlD5DPmJiJQw8XwPbwgbos5U', NULL, NULL, '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUJaalBLT1phUUlpSWtQempEZ2MwdmowM2M5enAzdUFZdjVjQXdPbyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo4OiJodHRwOi8vOiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717238289);
INSERT INTO `sessions` VALUES ('WJOd7WbTY7xlpBQEK1ZvLSS4w9Byfwe2RxzZpCcO', NULL, NULL, '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSHIweDUxdWJVdkc5VDlQamFyWkg4a3ZiWEVJaklaVFhGdnJxWnp2NyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo4OiJodHRwOi8vOiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717238164);
INSERT INTO `sessions` VALUES ('xi6WS7QzJQneirfU13ZhQqWm0QEd20IpgT9U2CMK', NULL, NULL, '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidXMxMmZ5d1RucW9yVENqM2swQ21DVTgzVWRpN0xQSDUwZU1jQUxFViI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo4OiJodHRwOi8vOiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717237643);

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_unit` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_by` int NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `units_name_unique`(`name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES (1, 'aaa2', 'aaaa2', '1', 1, NULL, NULL, '2024-06-01 12:51:52', '2024-06-01 14:34:28');
INSERT INTO `units` VALUES (2, 'fgfgfgf3', 'fgfgf3', '1', 1, NULL, NULL, '2024-06-01 14:24:47', '2024-06-01 14:34:44');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Nafiur Rahman', 'nafiur@outlook.com', NULL, '$2y$12$tj7pgplcy0l00T/nRUeKH.d3Gp58WexS5Hi4XFgbTuqbI1GLmtUc2', NULL, 'DHEcNtqT5yO8J4VhphMEcs9YkzFyWNc4kY34kV2T33S968La0r3KDqfYDwvp', '2024-05-31 13:51:41', '2024-05-31 13:51:41');

SET FOREIGN_KEY_CHECKS = 1;
