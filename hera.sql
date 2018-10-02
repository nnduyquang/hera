-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2018 lúc 11:53 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hera`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_items`
--

CREATE TABLE `category_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `path`, `description`, `content`, `image`, `image_mobile`, `level`, `parent_id`, `type`, `order`, `isActive`, `created_at`, `updated_at`, `seo_id`) VALUES
(6, 'Dịch Vụ', 'dich-vu', '<p>\r\n	<span style=\"color:#ffffff;\">Tại Hera Center, sự kiện của bạn dẫn đầu xu hướng và lưu lại dấu ấn đỉnh cao cho từng thực khách trải nghiệm.</span>\r\n</p>', NULL, 'images/uploads/images/dichvu/banner-dich-vu-food-decor.jpg', NULL, 0, NULL, 0, 1, 1, '2018-09-17 08:05:17', '2018-09-27 01:13:41', 13),
(7, 'Thư Viện', 'thu-vien', NULL, NULL, '0', NULL, 0, NULL, 0, 1, 1, '2018-09-17 08:08:34', '2018-09-17 08:08:34', 20),
(8, 'Thực Đơn', 'thuc-don', '<h6>\r\n	<span style=\"color:null;\"><strong><span style=\"font-size:24px;\">ẨM THỰC ÂU - Á KẾT HỢP</span></strong></span>\r\n</h6>\r\n\r\n<p>\r\n	<span style=\"color:null;\">Không dừng lại ở những món ăn thuần túy của dân tộc, Hera còn nghiên cứu về ẩm thực Châu Á lẫn Châu Âu để cho ra đời nhiều món ăn ngon &ndash; lạ &ndash; đẹp được kết hợp hết sức tinh tế giữa hai nền ẩm thực đặc sắc mà vẫn phù hợp với khẩu vị của người dân Việt Nam.</span>\r\n</p>', '<h5>\r\n	<span style=\"color:#21b6ff;\"><strong><span style=\"font-size:24px;\">MENU THAM KHẢO TẠI ĐÂY</span></strong></span>\r\n</h5>\r\n\r\n<p>\r\n	<span style=\"color:null;\">5 món mặn + 1 tráng miệng</span>\r\n</p>\r\n\r\n<p>\r\n	<span style=\"color:null;\">KHAI VỊ BA MÓN 700,000 VNĐ<br>\r\n	<br>\r\n	1 Nghêu Quay Giòn &ndash; Gỏi Mực Rau Câu &ndash; Sushi Thăn Heo Chiên<br>\r\n	2 Chả Giò Mayonnaise &ndash; Salad Nhật &ndash; Sushi Tôm<br>\r\n	3. Bacon Cuộn Cá &ndash; Salad Gà Chiên Giòn &ndash; Tôm Xù Cốm</span>\r\n</p>\r\n\r\n<p>\r\n	<span style=\"color:null;\">KHAI VỊ HAI MÓN<br>\r\n	<br>\r\n	1. Khai Vị Gà 2 Món 450,000 VNĐ<br>\r\n	Gà Sauce Chua Ngọt &ndash; Gà Teriyaki<br>\r\n	2. Khai Vị Tôm 2 Món 500,000 VNĐ<br>\r\n	Tôm Hạnh Nhân &ndash; Tôm Sauce Chanh<br>\r\n	3. Khai Vị Cá 600,000 VNĐ<br>\r\n	Cá Cuộn Nấm &ndash; Cá Hồi Chiên Giòn<br>\r\n	4. Khai Vị Hải Sản 2 Món 650,000 VNĐ<br>\r\n	Tôm Sauce Wasabi &ndash; Tôm Salad Trái Cây</span>\r\n</p>\r\n\r\n<p>\r\n	<span style=\"color:null;\">SOUP</span><br>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span style=\"color:null;\">* Soup Bông Cải 390,000 VNĐ<br>\r\n	* Soup Gà Nấm Tuyết 400,000 VNĐ<br>\r\n	* Soup Jambon Gà Xé 450,000 VNĐ<br>\r\n	* Soup Bóng Cá Tóc Tiên 450,000 VNĐ<br>\r\n	* Soup Hải Sản Tuyết Cua 500,000 VNĐ<br>\r\n	* Soup Măng Tây Cua 500,000 VNĐ<br>\r\n	* Soup Bò Thượng Hải 550,000 VNĐ<br>\r\n	* Soup Cá Hồi Hải Sản 700,000 VNĐ<br>\r\n	* Soup Nghêu Rong Biển Chua Cay 700,000 VNĐ<br>\r\n	* Soup Hải Sản Tứ Xuyên 750,000 VNĐ<br>\r\n	* Soup Cá Hồi HongKong 800,000 VNĐ<br>\r\n	* Soup Đuôi Bò Artichoke 866,000 VNĐ<br>\r\n	* Soup Bào Ngư,Vi Cá, Hải Sâm </span><span style=\"color:#ffffff;\">950,000 VNĐ</span>\r\n</p>', 'images/uploads/images/An%20Suong%20(3).jpg', NULL, 0, NULL, 0, 1, 1, '2018-09-18 03:32:20', '2018-10-01 09:13:36', 50),
(9, 'Ưu Đãi', 'uu-dai', NULL, NULL, '0', NULL, 0, NULL, 0, 1, 1, '2018-09-18 04:00:03', '2018-09-18 04:00:03', 51),
(10, 'Tin Tức', 'tin-tuc', NULL, NULL, 'images/uploads/images/tintuc/bg-title-uudai.jpg', NULL, 0, NULL, 0, 1, 1, '2018-09-18 08:07:44', '2018-10-02 03:53:28', 57),
(11, 'Ưu Đãi Tiệc Cưới', 'uu-dai-tiec-cuoi', NULL, NULL, NULL, NULL, 0, 9, 0, 1, 1, '2018-10-02 04:41:08', '2018-10-02 04:41:08', 65),
(12, 'Ưu Đãi Hội Nghị', 'uu-dai-hoi-nghi', NULL, NULL, NULL, NULL, 1, 9, 0, 1, 1, '2018-10-02 04:41:29', '2018-10-02 04:41:29', 66);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_many`
--

CREATE TABLE `category_many` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_many`
--

INSERT INTO `category_many` (`category_id`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-09-12 14:56:37', '2018-09-12 14:56:37'),
(4, 1, '2018-09-13 02:48:34', '2018-09-13 02:48:34'),
(5, 1, '2018-09-12 14:56:37', '2018-09-12 14:56:37'),
(6, 2, '2018-09-17 08:06:29', '2018-09-17 08:06:29'),
(6, 3, '2018-09-17 08:06:53', '2018-09-17 08:06:53'),
(6, 4, '2018-09-17 08:07:16', '2018-09-17 08:07:16'),
(6, 5, '2018-09-17 08:07:34', '2018-09-17 08:07:34'),
(7, 6, '2018-09-17 08:08:56', '2018-09-17 08:08:56'),
(7, 7, '2018-09-17 08:09:16', '2018-09-17 08:09:16'),
(7, 8, '2018-09-17 08:09:59', '2018-09-17 08:09:59'),
(8, 25, '2018-09-18 04:09:16', '2018-09-18 04:09:16'),
(8, 26, '2018-10-01 03:00:18', '2018-10-01 03:00:18'),
(9, 29, '2018-10-02 04:11:47', '2018-10-02 04:11:47'),
(9, 30, '2018-10-02 04:13:31', '2018-10-02 04:13:31'),
(10, 27, '2018-10-02 03:24:35', '2018-10-02 03:24:35'),
(10, 28, '2018-10-02 03:40:24', '2018-10-02 03:40:24'),
(11, 29, '2018-10-02 06:48:03', '2018-10-02 06:48:03'),
(11, 30, '2018-10-02 06:48:26', '2018-10-02 06:48:26'),
(12, 29, '2018-10-02 06:48:17', '2018-10-02 06:48:17'),
(12, 30, '2018-10-02 06:48:26', '2018-10-02 06:48:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(2, 'User', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(3, 'Menu', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(4, 'Page', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(5, 'Post', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(7, 'Product', '2018-03-27 03:05:29', '2018-03-27 03:05:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p>\r\n	<strong><em><span style=\"background-color:#f1c40f;\">Hotline đặt hàng</span>:</em></strong><em>&nbsp;&nbsp;<strong>097.388.9336 - 0914.675.777</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;&nbsp;<strong>097.388.9336</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Thông tin liên hệ với chúng tôi:</em></strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ THÉP KHÁNH NAM</strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>TRỤ SỞ CHÍNH:</strong>&nbsp;<em>201 Bình Thành, KP 4, P. Bình Hưng Hòa, Q. Bình Tân, thành phố Hồ Chí Minh</em>\r\n</p>\r\n\r\n<p>\r\n	<strong>Di động:</strong><em>&nbsp;097.388.9336 - 0914.675.777</em>\r\n</p>', 1, NULL, '2018-03-30 09:07:51'),
(3, 'config-company-name', 'Quang', 1, NULL, '2018-09-19 08:26:28'),
(4, 'config-phone', NULL, 1, NULL, NULL),
(5, 'config-email', NULL, 1, NULL, NULL),
(6, 'config-seo-keywords', NULL, 1, NULL, NULL),
(7, 'config-seo-title', NULL, 1, NULL, NULL),
(8, 'config-seo-description', NULL, 1, NULL, NULL),
(9, 'config-seo-image', NULL, 1, NULL, NULL),
(10, 'email-receive', 'nnduyquang@gmail.com', 1, NULL, '2018-09-19 08:44:00'),
(11, 'email-sender-subject', NULL, 1, NULL, NULL),
(12, 'email-sender-from', NULL, 1, NULL, NULL),
(13, 'email-receive-subject', NULL, 1, NULL, NULL),
(14, 'email-receive-from', NULL, 1, NULL, NULL),
(15, 'email-sender-content', NULL, 1, NULL, NULL),
(16, 'email-signatures', NULL, 1, NULL, NULL),
(17, 'script-js-header', NULL, 1, NULL, '2018-09-19 08:58:22'),
(18, 'script-js-body', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 'Trang Chủ', '/', '_self', NULL, '#000000', NULL, 1, '2018-09-14 04:10:33', '2018-09-26 07:51:32', NULL, ''),
(2, 'Dịch Vụ', 'dich-vu', '_self', NULL, '#000000', NULL, 2, '2018-09-14 04:48:02', '2018-09-26 02:56:29', NULL, ''),
(3, 'Tiệc Cưới', 'dich-vu/dich-vu.html', '_self', NULL, '#000000', 2, 1, '2018-09-14 04:49:28', '2018-09-26 02:57:02', NULL, ''),
(4, 'Hội Nghị', 'dich-vu/dich-vu.html', '_self', NULL, '#000000', 2, 2, '2018-09-26 02:44:10', '2018-09-26 02:57:14', NULL, ''),
(5, 'Sự Kiện', 'dich-vu/dich-vu.html', '_self', NULL, '#000000', 2, 3, '2018-09-26 02:44:30', '2018-09-26 02:57:18', NULL, ''),
(6, 'Tiệc Ngoài Trời', 'dich-vu/dich-vu.html', '_self', NULL, '#000000', 2, 4, '2018-09-26 02:44:46', '2018-09-26 02:57:23', NULL, ''),
(7, 'Thư Viện', 'thu-vien', '_self', NULL, '#000000', NULL, 3, '2018-09-26 02:44:57', '2018-10-02 02:36:05', NULL, ''),
(8, 'Sảnh', 'hinh-anh', '_self', NULL, '#000000', 7, 1, '2018-09-26 02:45:20', '2018-09-26 02:57:43', NULL, ''),
(9, 'Trang Trí', 'hinh-anh', '_self', NULL, '#000000', 7, 2, '2018-09-26 02:45:29', '2018-09-26 02:57:47', NULL, ''),
(10, 'Tiệc Cưới', 'hinh-anh', '_self', NULL, '#000000', 7, 3, '2018-09-26 02:45:52', '2018-09-26 02:57:53', NULL, ''),
(11, 'Video Clip', 'hinh-anh', '_self', NULL, '#000000', 7, 4, '2018-09-26 02:46:07', '2018-09-26 02:57:58', NULL, ''),
(12, 'Thực Đơn', 'thuc-don', '_self', NULL, '#000000', NULL, 4, '2018-09-26 02:46:18', '2018-09-26 02:58:12', NULL, ''),
(13, 'Set Menu', '', '_self', NULL, '#000000', 12, 1, '2018-09-26 02:46:34', '2018-10-01 07:17:55', 'thucdon.detail', '{\r\n\"path\":\"set-menu\"\r\n}'),
(14, 'Thực Đơn Chọn Món', 'thuc-don', '_self', NULL, '#000000', 12, 2, '2018-09-26 02:46:58', '2018-09-26 02:58:30', NULL, ''),
(15, 'Ưu Đãi', 'uu-dai', '_self', NULL, '#000000', NULL, 5, '2018-09-26 02:47:10', '2018-09-26 02:58:38', NULL, ''),
(16, 'Tin Tức', 'tin-tuc', '_self', NULL, '#000000', NULL, 6, '2018-09-26 02:47:19', '2018-09-26 02:58:48', NULL, ''),
(17, 'Liên Hệ', 'lien-he', '_self', NULL, '#000000', NULL, 7, '2018-09-26 02:47:34', '2018-09-26 02:59:00', NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_14_140923_create_entrust_setup_tables', 1),
(4, '2018_07_12_085612_create_seos_table', 2),
(5, '2018_07_12_090313_add_seo_id_to_posts_table', 3),
(6, '2018_07_12_091007_add_seo_id_to_products_table', 4),
(7, '2018_07_12_091116_add_seo_id_to_category_items_table', 5),
(8, '2018_07_17_084914_create_category_many_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(9, 'menu-list', 'Toàn Quyền Menu', 'Được Toàn Quyền Menu', 3, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(10, 'menu-create', 'Thêm Mới Menu', 'Được Thêm Mới Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(11, 'menu-edit', 'Cập Nhật Menu', 'Được Cập Nhật Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(12, 'menu-delete', 'Xóa Menu', 'Được Xóa Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(13, 'page-list', 'Toàn Quyền Trang', 'Được Toàn Quyền Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(14, 'page-create', 'Thêm Mới Trang', 'Được Thêm Mới Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(15, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(16, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(17, 'post-list', 'Toàn Quyền Bài Viết', 'Được Toàn Quyền Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(18, 'post-create', 'Thêm Mới Bài Viết', 'Được Thêm Mới Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(19, 'post-edit', 'Cập Nhật Bài Viết', 'Được Cập Nhật Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(20, 'post-delete', 'Xóa Bài Viết', 'Được Xóa Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(21, 'product-list', 'Toàn Quyền Sản Phẩm', 'Được Toàn Quyền Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(22, 'product-create', 'Thêm Mới Sản Phẩm', 'Được Thêm Mới Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(23, 'product-edit', 'Cập Nhật Sản Phẩm', 'Được Cập Nhật Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(24, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_image` longtext COLLATE utf8mb4_unicode_ci,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `category_item_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `sub_image`, `post_type`, `is_active`, `category_item_id`, `user_id`, `created_at`, `updated_at`, `seo_id`) VALUES
(2, 'Tiệc Cưới', 'tiec-cuoi', '<p>\r\n	Tiệc Cưới\r\n</p>', '<h5>\r\n	<span style=\"font-size:22px;\">CHÚNG TÔI ĐEM ĐẾN CHO BẠN</span>\r\n</h5>\r\n\r\n<h6>\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/dichvu/hoinghi/Trung-tam-to-chuc-hoi-nghi.jpg\" style=\"width: 100%; height: 100%;\">\r\n</h6>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HÌNH ẢNH CHUYÊN NGHIỆP CHO THƯƠNG HIỆU CỦA DOANH NGHIỆP</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Địa điểm và cơ sở vật chất lý tưởng cho một sự kiện đẳng cấp của doanh nghiệp!&nbsp;<br>\r\n	Lựa chọn địa điểm đúng đắn là tiền đề quan trọng cho thành công của một hội nghị. Capella Gallery Hall chính là nơi hội tụ các giá trị vượt trội để đạt đến những kết quả mĩ mãn. Nội thất sang trọng, hệ thống màn hình LED, âm thanh ánh sáng tiên tiến và các sảnh cực kỳ ấn tượng, Capella Gallery Hall mở ra một đẳng cấp mới, xứng đáng được lựa chọn cho những hội nghị quan trọng của các doanh nghiệp trong nước và quốc tế.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HỖ TRỢ VÀ SỰ QUAN TÂM</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Capella Gallery Hall lắng nghe và quan tâm tới mong muốn và góp ý của khách hàng!&nbsp;<br>\r\n	Quan tâm và thấu hiểu, các chuyên gia tổ chức hội nghị sẽ hỗ trợ bạn hiện thực hóa một cách tối ưu những yêu cầu khắc khe nhất. Đối với Capella Gallery Hall, chăm chút trong từng chi tiết và hoàn thiện mỗi chuyển động trong từng hội nghị là một nấc thang bước đến đỉnh thành công.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">ẨM THỰC TINH TẾ &ndash; SỰ KẾT NỐI TIỀM NĂNG</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Mở ra các câu chuyện giao hữu trên bàn tiệc thượng đỉnh!&nbsp;<br>\r\n	Mỗi sự kiện dường như được cá nhân hóa hơn khi các thực khách trò chuyện và kết nối với nhau trong buổi tiệc trà (Tea-break) ấm cúng hay qua bàn dạ tiệc đẳng cấp tại Capella Gallery Hall. Chúng tôi tạo dựng sự tinh tế và phong phú trong ẩm thực như là cầu nối giữa các thực khách với nhau.\r\n</p>', 'images/uploads/images/dichvu/tieccuoi/dv2.jpg', 'images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn4-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/Moet-conference-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg', 1, 1, NULL, 1, '2018-09-17 08:06:29', '2018-09-26 08:30:21', 15),
(3, 'Hội Nghị', 'hoi-nghi', '<p>\r\n	Hội Nghị\r\n</p>', '<h5>\r\n	<span style=\"font-size:22px;\">CHÚNG TÔI ĐEM ĐẾN CHO BẠN</span>\r\n</h5>\r\n\r\n<h6>\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/dichvu/hoinghi/Trung-tam-to-chuc-hoi-nghi.jpg\" style=\"width: 100%; height: 100%;\">\r\n</h6>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HÌNH ẢNH CHUYÊN NGHIỆP CHO THƯƠNG HIỆU CỦA DOANH NGHIỆP</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Địa điểm và cơ sở vật chất lý tưởng cho một sự kiện đẳng cấp của doanh nghiệp!&nbsp;<br>\r\n	Lựa chọn địa điểm đúng đắn là tiền đề quan trọng cho thành công của một hội nghị. Capella Gallery Hall chính là nơi hội tụ các giá trị vượt trội để đạt đến những kết quả mĩ mãn. Nội thất sang trọng, hệ thống màn hình LED, âm thanh ánh sáng tiên tiến và các sảnh cực kỳ ấn tượng, Capella Gallery Hall mở ra một đẳng cấp mới, xứng đáng được lựa chọn cho những hội nghị quan trọng của các doanh nghiệp trong nước và quốc tế.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HỖ TRỢ VÀ SỰ QUAN TÂM</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Capella Gallery Hall lắng nghe và quan tâm tới mong muốn và góp ý của khách hàng!&nbsp;<br>\r\n	Quan tâm và thấu hiểu, các chuyên gia tổ chức hội nghị sẽ hỗ trợ bạn hiện thực hóa một cách tối ưu những yêu cầu khắc khe nhất. Đối với Capella Gallery Hall, chăm chút trong từng chi tiết và hoàn thiện mỗi chuyển động trong từng hội nghị là một nấc thang bước đến đỉnh thành công.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">ẨM THỰC TINH TẾ &ndash; SỰ KẾT NỐI TIỀM NĂNG</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Mở ra các câu chuyện giao hữu trên bàn tiệc thượng đỉnh!&nbsp;<br>\r\n	Mỗi sự kiện dường như được cá nhân hóa hơn khi các thực khách trò chuyện và kết nối với nhau trong buổi tiệc trà (Tea-break) ấm cúng hay qua bàn dạ tiệc đẳng cấp tại Capella Gallery Hall. Chúng tôi tạo dựng sự tinh tế và phong phú trong ẩm thực như là cầu nối giữa các thực khách với nhau.\r\n</p>', 'images/uploads/images/dichvu/hoinghi/div1.jpg', 'images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn4-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/Moet-conference-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg', 1, 1, NULL, 1, '2018-09-17 08:06:53', '2018-09-26 08:28:29', 16),
(4, 'Sự Kiện', 'su-kien', '<p>\r\n	Sự Kiện\r\n</p>', '<h5>\r\n	<span style=\"font-size:22px;\">CHÚNG TÔI ĐEM ĐẾN CHO BẠN</span>\r\n</h5>\r\n\r\n<h6>\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/dichvu/hoinghi/Trung-tam-to-chuc-hoi-nghi.jpg\" style=\"width: 100%; height: 100%;\">\r\n</h6>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HÌNH ẢNH CHUYÊN NGHIỆP CHO THƯƠNG HIỆU CỦA DOANH NGHIỆP</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Địa điểm và cơ sở vật chất lý tưởng cho một sự kiện đẳng cấp của doanh nghiệp!&nbsp;<br>\r\n	Lựa chọn địa điểm đúng đắn là tiền đề quan trọng cho thành công của một hội nghị. Capella Gallery Hall chính là nơi hội tụ các giá trị vượt trội để đạt đến những kết quả mĩ mãn. Nội thất sang trọng, hệ thống màn hình LED, âm thanh ánh sáng tiên tiến và các sảnh cực kỳ ấn tượng, Capella Gallery Hall mở ra một đẳng cấp mới, xứng đáng được lựa chọn cho những hội nghị quan trọng của các doanh nghiệp trong nước và quốc tế.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HỖ TRỢ VÀ SỰ QUAN TÂM</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Capella Gallery Hall lắng nghe và quan tâm tới mong muốn và góp ý của khách hàng!&nbsp;<br>\r\n	Quan tâm và thấu hiểu, các chuyên gia tổ chức hội nghị sẽ hỗ trợ bạn hiện thực hóa một cách tối ưu những yêu cầu khắc khe nhất. Đối với Capella Gallery Hall, chăm chút trong từng chi tiết và hoàn thiện mỗi chuyển động trong từng hội nghị là một nấc thang bước đến đỉnh thành công.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">ẨM THỰC TINH TẾ &ndash; SỰ KẾT NỐI TIỀM NĂNG</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Mở ra các câu chuyện giao hữu trên bàn tiệc thượng đỉnh!&nbsp;<br>\r\n	Mỗi sự kiện dường như được cá nhân hóa hơn khi các thực khách trò chuyện và kết nối với nhau trong buổi tiệc trà (Tea-break) ấm cúng hay qua bàn dạ tiệc đẳng cấp tại Capella Gallery Hall. Chúng tôi tạo dựng sự tinh tế và phong phú trong ẩm thực như là cầu nối giữa các thực khách với nhau.\r\n</p>', 'images/uploads/images/dichvu/sukien/dv3.jpg', 'images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn4-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/Moet-conference-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg', 1, 1, NULL, 1, '2018-09-17 08:07:16', '2018-09-26 08:31:05', 18),
(5, 'Tiệc Ngoài Trời', 'tiec-ngoai-troi', '<p>\r\n	Tiệc Ngoài Trời\r\n</p>', '<h5>\r\n	<span style=\"font-size:22px;\">CHÚNG TÔI ĐEM ĐẾN CHO BẠN</span>\r\n</h5>\r\n\r\n<h6>\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/dichvu/hoinghi/Trung-tam-to-chuc-hoi-nghi.jpg\" style=\"width: 100%; height: 100%;\">\r\n</h6>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HÌNH ẢNH CHUYÊN NGHIỆP CHO THƯƠNG HIỆU CỦA DOANH NGHIỆP</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Địa điểm và cơ sở vật chất lý tưởng cho một sự kiện đẳng cấp của doanh nghiệp!&nbsp;<br>\r\n	Lựa chọn địa điểm đúng đắn là tiền đề quan trọng cho thành công của một hội nghị. Capella Gallery Hall chính là nơi hội tụ các giá trị vượt trội để đạt đến những kết quả mĩ mãn. Nội thất sang trọng, hệ thống màn hình LED, âm thanh ánh sáng tiên tiến và các sảnh cực kỳ ấn tượng, Capella Gallery Hall mở ra một đẳng cấp mới, xứng đáng được lựa chọn cho những hội nghị quan trọng của các doanh nghiệp trong nước và quốc tế.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">HỖ TRỢ VÀ SỰ QUAN TÂM</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Capella Gallery Hall lắng nghe và quan tâm tới mong muốn và góp ý của khách hàng!&nbsp;<br>\r\n	Quan tâm và thấu hiểu, các chuyên gia tổ chức hội nghị sẽ hỗ trợ bạn hiện thực hóa một cách tối ưu những yêu cầu khắc khe nhất. Đối với Capella Gallery Hall, chăm chút trong từng chi tiết và hoàn thiện mỗi chuyển động trong từng hội nghị là một nấc thang bước đến đỉnh thành công.\r\n</p>\r\n\r\n<h6>\r\n	<span style=\"color:#dbbc85;\"><span style=\"font-size:22px;\">ẨM THỰC TINH TẾ &ndash; SỰ KẾT NỐI TIỀM NĂNG</span></span>\r\n</h6>\r\n\r\n<p>\r\n	Mở ra các câu chuyện giao hữu trên bàn tiệc thượng đỉnh!&nbsp;<br>\r\n	Mỗi sự kiện dường như được cá nhân hóa hơn khi các thực khách trò chuyện và kết nối với nhau trong buổi tiệc trà (Tea-break) ấm cúng hay qua bàn dạ tiệc đẳng cấp tại Capella Gallery Hall. Chúng tôi tạo dựng sự tinh tế và phong phú trong ẩm thực như là cầu nối giữa các thực khách với nhau.\r\n</p>', 'images/uploads/images/dichvu/tiecngoaitroi/dv4.jpg', 'images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn4-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg;images/uploads/images/dichvu/hoinghi/Moet-conference-300x225.jpg;images/uploads/images/dichvu/hoinghi/hn3-300x225.jpg', 1, 1, NULL, 1, '2018-09-17 08:07:34', '2018-09-26 08:31:40', 19),
(6, 'Sảnh', 'sanh', '<p>\r\n	Sảnh\r\n</p>', '<p>\r\n	Sảnh\r\n</p>', NULL, 'images/uploads/images/thuvien/sanh/1.jpg;images/uploads/images/thuvien/sanh/10.jpg;images/uploads/images/thuvien/sanh/11.jpg;images/uploads/images/thuvien/sanh/12.jpg;images/uploads/images/thuvien/sanh/2.jpg;images/uploads/images/thuvien/sanh/3.jpg;images/uploads/images/thuvien/sanh/4.jpg;images/uploads/images/thuvien/sanh/5.jpg;images/uploads/images/thuvien/sanh/6.jpg;images/uploads/images/thuvien/sanh/7.jpg;images/uploads/images/thuvien/sanh/8.jpg;images/uploads/images/thuvien/sanh/9.jpg', 1, 1, NULL, 1, '2018-09-17 08:08:56', '2018-10-02 02:34:36', 21),
(7, 'Trang Trí', 'trang-tri', '<p>\r\n	Trang Trí\r\n</p>', '<p>\r\n	Trang Trí\r\n</p>', NULL, 'images/uploads/images/thuvien/trangtri/trang-tri-1.jpg;images/uploads/images/thuvien/trangtri/trang-tri-10.jpg;images/uploads/images/thuvien/trangtri/trang-tri-2.jpg;images/uploads/images/thuvien/trangtri/trang-tri-3.jpg;images/uploads/images/thuvien/trangtri/trang-tri-4.jpg;images/uploads/images/thuvien/trangtri/trang-tri-5.jpg;images/uploads/images/thuvien/trangtri/trang-tri-6.jpg;images/uploads/images/thuvien/trangtri/trang-tri-7.jpg;images/uploads/images/thuvien/trangtri/trang-tri-8.jpg;images/uploads/images/thuvien/trangtri/trang-tri-9.jpg', 1, 1, NULL, 1, '2018-09-17 08:09:16', '2018-10-02 03:06:01', 22),
(8, 'Sảnh Tiệc Cưới', 'sanh-tiec-cuoi', '<p>\r\n	Sảnh Tiệc Cưới\r\n</p>', '<p>\r\n	Sảnh Tiệc Cưới\r\n</p>', NULL, NULL, 1, 1, NULL, 1, '2018-09-17 08:09:59', '2018-10-02 03:06:41', 23);
INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `sub_image`, `post_type`, `is_active`, `category_item_id`, `user_id`, `created_at`, `updated_at`, `seo_id`) VALUES
(25, 'Set Menu', 'set-menu', '<h6>\r\n	<span style=\"font-size:24px;\"><strong>ẨM THỰC ÂU - Á KẾT HỢP</strong></span>\r\n</h6>\r\n\r\n<p>\r\n	Không dừng lại ở những món ăn thuần túy của dân tộc, Hera còn nghiên cứu về ẩm thực Châu Á lẫn Châu Âu để cho ra đời nhiều món ăn ngon &ndash; lạ &ndash; đẹp được kết hợp hết sức tinh tế giữa hai nền ẩm thực đặc sắc mà vẫn phù hợp với khẩu vị của người dân Việt Nam.\r\n</p>', '<p style=\"text-align: center;\">\r\n	<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><b><span style=\"font-size:14.0pt\">MENU</span></b></span></span>\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><b><i>5 món mặn + 1 tráng miệng</i></b></span></span>\r\n</p>\r\n\r\n<p>\r\n	<span style=\"font-size:11pt\"><span style=\"tab-stops:360.15pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><b>KHAI VỊ BA MÓN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>700,000 VNĐ</span></span></span>\r\n</p>\r\n\r\n<p>\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:141%\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1 Nghêu Quay Giòn &ndash; Gỏi Mực Rau Câu &ndash; Sushi Thăn Heo Chiên </span></span></span>\r\n</p>\r\n\r\n<p class=\"MsoBodyText\" style=\"margin: 4.15pt 0in 0.0001pt;\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:141%\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">2 Chả Giò Mayonnaise &ndash; Salad Nhật &ndash; Sushi Tôm</span></span></span>\r\n</p>\r\n\r\n<p class=\"MsoBodyText\" style=\"margin: 4.15pt 0in 0.0001pt;\">\r\n	<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">3. Bacon Cuộn Cá &ndash; Salad Gà Chiên Giòn &ndash; Tôm Xù Cốm</span></span>\r\n</p>\r\n\r\n<p class=\"MsoBodyText\" style=\"margin: 4.15pt 0in 0.0001pt;\">\r\n	<strong><span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">KHAI VỊ HAI MÓN</span></span></strong>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span style=\"tab-stops:18.8pt 360.15pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Khai Vị Gà 2 Món&nbsp;</span></span></span>\r\n				</p>\r\n\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><i>Gà Sauce Chua Ngọt </i>&ndash; <i>Gà Teriyaki</i></span></span>\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11pt\"><span style=\"tab-stops:18.8pt 360.15pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">450,000 VNĐ</span></span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Khai Vị Tôm 2 Món&nbsp;&nbsp;</span></span></span>\r\n				</p>\r\n\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><i>Tôm Hạnh Nhân </i>&ndash; <i>Tôm Sauce Chanh</i></span></span>\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11pt\"><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">500,000 VNĐ</span></span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Khai Vị Cá&nbsp;</span></span></span>\r\n				</p>\r\n\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><i>Cá Cuộn Nấm </i>&ndash; <i>Cá Hồi Chiên Giòn</i></span></span>\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11pt\"><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">600,000 VNĐ</span></span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Khai Vị <span style=\"letter-spacing:-.1pt\">Hải </span>Sản 2 Món&nbsp;</span></span></span>\r\n				</p>\r\n\r\n				<p>\r\n					<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><i>Tôm Sauce Wasabi </i>&ndash; <i>Tôm Salad Trái Cây</i></span></span>\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11pt\"><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">650,000 VNĐ</span></span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-top:5.25pt; margin-right:0in; margin-bottom:.0001pt; margin:4.15pt 0in 0.0001pt 16.25pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"margin-top:2.5pt; margin-right:0in; margin-bottom:.0001pt; margin-left:24.95pt; margin:0in 0in 0.0001pt\">\r\n	<strong><span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">SOUP</span></span></strong>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Bông Cải</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">390,000 VNĐ</span><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp;</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Gà Nấm Tuyết</span><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp; &nbsp;</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">400,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Jambon Gà Xé</span><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp;</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">450,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Bóng Cá Tóc Tiên</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">450,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup <span style=\"letter-spacing:-.1pt\">Hải </span>Sản Tuyết <span style=\"letter-spacing:-.15pt\">Cua</span></span><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"> &nbsp;</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">500,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Măng Tây Cua</span><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp;</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">500,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Bò Thượng Hải</span><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp;</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">550,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Cá <span style=\"letter-spacing:-.15pt\">Hồi</span> Hải Sản</span><span style=\"tab-stops:18.85pt 360.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp;</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">700,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Nghêu Rong Biển Chua Cay</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">700,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup <span style=\"letter-spacing:-.1pt\">Hải </span>Sản Tứ Xuyên</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">750,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Cá <span style=\"letter-spacing:-.15pt\">Hồi</span> HongKong</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Đuôi Bò Artichoke</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">866,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Soup Bào <span style=\"letter-spacing:-.15pt\">Ngư,Vi </span>Cá, Hải Sâm</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">950,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-top:2.5pt; margin-right:0in; margin-bottom:.0001pt; margin-left:24.95pt; margin:0in 0in 0.0001pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"margin-top:2.5pt; margin-right:0in; margin-bottom:.0001pt; margin-left:24.95pt; margin:0in 0in 0.0001pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:12.2pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><b>HẢI SẢN</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bào Ngư Cuộn Cá Sauce Đặc Biệt</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Bào Ngư Sauce Hồng Xíu\r\n			</td>\r\n			<td>\r\n				<p class=\"TableParagraph\" style=\"margin-top:1.8pt; margin-right:0in; margin-bottom:.0001pt; margin-left:39.05pt; margin:0in 0in 0.0001pt\">\r\n					<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,000,000 VNĐ</span></span>\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tôm Càng Nướng Bơ Tỏi - Hàu <span style=\"letter-spacing:-.15pt\">Đút</span> Lò</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,150,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-top:2.5pt; margin-right:0in; margin-bottom:.0001pt; margin-left:24.95pt; margin:0in 0in 0.0001pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"margin-top:2.5pt; margin-right:0in; margin-bottom:.0001pt; margin-left:24.95pt; margin:0in 0in 0.0001pt\">\r\n	<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><b>TÔM</b></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tôm Sauce Mayonnaise</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">750,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tôm Sauce Creamy Spicy &ndash; Salad</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tôm Chiên Cocktail</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tôm Trứng Muối Kiểu HongKong</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">890,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tôm Càng Sauce Teriyaki</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,100,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tôm Càng Sauce <span style=\"letter-spacing:-.15pt\">Rượu</span> <span style=\"letter-spacing:-.15pt\">Calvados</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,200,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class=\"TableParagraph\" style=\"margin-top:10.3pt; margin-right:0in; margin-bottom:.0001pt; margin-left:2.5pt; margin:0in 0in 0.0001pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p class=\"TableParagraph\" style=\"margin-top:10.3pt; margin-right:0in; margin-bottom:.0001pt; margin-left:2.5pt; margin:0in 0in 0.0001pt\">\r\n	<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><b>GÀ</b></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Gà Hầm Nấm Đông Cô</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">480,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Gà Cuộn Bó Xôi &ndash; Salad Nấm</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">600,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Gà Sauce Rượu Porto &ndash; Salad</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">600,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Gà BBQ Thượng <span style=\"letter-spacing:-.1pt\">Hải</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">650,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Gà Xào Nấm Sauce Quảng Châu &ndash; Bánh Bao</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">700,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Gà Đút Lò Sauce ThaiLand</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">790,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Gà Cuộn Phô Mai Sauce Dâu Tây</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">790,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class=\"TableParagraph\" style=\"margin-top:10.3pt; margin-right:0in; margin-bottom:.0001pt; margin-left:2.5pt; margin:0in 0in 0.0001pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p class=\"TableParagraph\" style=\"margin-top:10.3pt; margin-right:0in; margin-bottom:.0001pt; margin-left:2.5pt; margin:0in 0in 0.0001pt\">\r\n	<span style=\"font-size:11pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><b>CÁ</b></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Chẽm Sauce Chua Ngọt &ndash; Bánh Bao</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">650,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Chẽm Tứ Xuyên &ndash; Salad</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">650,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Bớp <span style=\"letter-spacing:-.15pt\">Đút </span>Lò Sauce Triều Châu</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">900,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Chẽm Sauce Batazaky X.O &ndash; Salad</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">850,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Bớp Hấp Bách Thảo Sauce Xì Dầu</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">850,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Mú HongKong</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,092,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Mú Sauce Cam &ndash; <span style=\"letter-spacing:-.15pt\">Bánh</span> <span style=\"letter-spacing:-.15pt\">Bao</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,100,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cá Mú Sauce Nấm</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,120,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span class=\"TableParagraph\" style=\"margin-bottom:.0001pt;margin-left:2.5pt;margin-right:0in;margin-top:10.3pt;margin:0in 0in 0.0001pt;\"><span style=\"font-size:11pt;\"><span new=\"\" roman=\"\" times=\"\"><b>HEO</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Sườn <span style=\"letter-spacing:-.1pt\">Heo </span><span style=\"letter-spacing:-.15pt\">Đút </span>Lò Sauce Đậu &ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">700,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lưỡi Heo Sò Điệp Sauce Bào<span style=\"letter-spacing:-.15pt\"> Ngư</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">650,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Giò </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Heo Hầm Gân<span style=\"letter-spacing:-.15pt\"> Nai</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Sườn BBQ Sauce Chua Ngọt</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">850,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Giò </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Heo Chiên Giòn Sauce Balsamic &amp; Salad</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">900,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span class=\"TableParagraph\" style=\"margin-bottom:.0001pt;margin-left:2.5pt;margin-right:0in;margin-top:10.3pt;margin:0in 0in 0.0001pt;\"><span style=\"font-size:11pt;\"><span new=\"\" roman=\"\" times=\"\"><b>BÒ</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Xào Thượng <span style=\"letter-spacing:-.1pt\">Hải</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">550,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Hầm Singapore &ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">600,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Xào Sauce ThaiLand &ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">600,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Nấu Nấm &ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">650,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Xào Balsamic &ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">650,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Bắp </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Hầm <span style=\"letter-spacing:-.1pt\">Đậu </span>&ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">700,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Nấu Tiêu Xanh &ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">700,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Mỹ Sauce Kim <span style=\"letter-spacing:-.15pt\">Chi </span>&ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">750,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Hầm Táo Đỏ &ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Bắp </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bò Hầm <span style=\"letter-spacing:-.1pt\">Gấc </span>&ndash; Bánh Mì</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">900,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span class=\"TableParagraph\" style=\"margin-bottom:.0001pt;margin-left:2.5pt;margin-right:0in;margin-top:10.3pt;margin:0in 0in 0.0001pt;\"><span style=\"font-size:11pt;\"><span new=\"\" roman=\"\" times=\"\"><b>CƠM</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cơm Chiên Hải Sản Lạp Vịt</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">480,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cơm Chiên Hải Sản <span style=\"letter-spacing:-.1pt\">Đậu</span> Nành</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">550,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cơm Gà Cá Mặn Trứng Muối</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">700,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cơm Chiên Thịt Cua</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">750,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cơm Chiên Hải Sản <span style=\"letter-spacing:-.15pt\">Hawaii</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Cơm Chiên Tôm X.O</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">800,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span class=\"TableParagraph\" style=\"margin-bottom:.0001pt;margin-left:2.5pt;margin-right:0in;margin-top:10.3pt;margin:0in 0in 0.0001pt;\"><span style=\"font-size:11pt;\"><span new=\"\" roman=\"\" times=\"\"><b>LẨU</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Gà Sa tế &ndash; Bún Gạo</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">850,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Gà Nấm &ndash; Mì Somen</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">866,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu ThaiLand &ndash; Bún Tươi</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">872,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Hải Sản Nấm &ndash; Mì Sợi</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">872,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Hải Sản <span style=\"letter-spacing:-.15pt\">Chilli Garlic </span>&ndash; <span style=\"letter-spacing:-.15pt\">Bún</span> <span style=\"letter-spacing:-.1pt\">Gạo</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">908,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Hải Sản Kiểu Nhật &ndash; Mì Somen</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">940,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Hải Sản Sa tế &ndash; Bún Gạo</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">977,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Hải Sản Kim Chi &ndash; Mì Somen</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,000,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Lẩu Hải Sản Miso &ndash; Mì Udon</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,097,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span class=\"TableParagraph\" style=\"margin-bottom:.0001pt;margin-left:2.5pt;margin-right:0in;margin-top:10.3pt;margin:0in 0in 0.0001pt;\"><span style=\"font-size:11pt;\"><span new=\"\" roman=\"\" times=\"\"><b>MÌ / MIẾN / MÌ UDON</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Mì Udon <span style=\"letter-spacing:-.1pt\">Hải</span> Sản</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,000,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Mì Udon Gà Kiểu Hàn Quốc</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,000,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Mì Xào Xá Xíu Vịt Lạp</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,100,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Miến Bồ <span style=\"letter-spacing:-.15pt\">Câu</span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">1,200,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span class=\"TableParagraph\" style=\"margin-bottom:.0001pt;margin-left:2.5pt;margin-right:0in;margin-top:10.3pt;margin:0in 0in 0.0001pt;\"><span style=\"font-size:11pt;\"><span new=\"\" roman=\"\" times=\"\"><b>MÓN ĂN KÈM</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Đậu</span></span></span> <span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hủ Tempura</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">200,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Nấm Xào Sauce Bào Ngư</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">220,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Cải </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Thìa Xào X.O</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">250,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Canh Sườn Legume</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">300,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Cải </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Rổ Xào Tỏi</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">300,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Cải </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Rổ Xào X.O</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">300,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Canh Nghêu Miso</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">320,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span class=\"TableParagraph\" style=\"margin-bottom:.0001pt;margin-left:2.5pt;margin-right:0in;margin-top:10.3pt;margin:0in 0in 0.0001pt;\"><span style=\"font-size:11pt;\"><span new=\"\" roman=\"\" times=\"\"><b>TRÁNG MIỆNG</b></span></span></span>\r\n</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table-thucdon\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Rau Câu </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Đỏ &amp; Trà Xanh</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">350,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.15pt\">Râu Câu </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Trà Xanh &ndash; Phô mai</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">390,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Râu Câu </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Chocolate &ndash; Phô mai</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">400,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Rau Câu</span></span></span> <span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.1pt\">Dâu </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tây</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">400,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.15pt\">Rau Câu </span></span></span><span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Phúc Bồn Tử</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">400,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"letter-spacing:-.15pt\">Chè</span></span></span> <span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">HongKong</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">450,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Nho &amp; Cam</span></span>\r\n			</td>\r\n			<td>\r\n				<span style=\"font-size:11.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">450,000 VNĐ</span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/thucdon/setmenu/Picture1.jpg;images/uploads/images/thucdon/setmenu/Picture2.jpg;images/uploads/images/thucdon/setmenu/Picture3.jpg;images/uploads/images/thucdon/setmenu/Picture4.jpg;images/uploads/images/thucdon/setmenu/Picture5.jpg;images/uploads/images/thucdon/setmenu/raucau.jpg;images/uploads/images/thucdon/setmenu/supngheu.jpg', 1, 1, NULL, 1, '2018-09-18 04:09:16', '2018-10-02 01:26:52', 54),
(26, 'Thực Đơn Chọn Món', 'thuc-don-chon-mon', NULL, NULL, NULL, '', 1, 1, NULL, 1, '2018-10-01 03:00:18', '2018-10-01 09:17:37', 58);
INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `sub_image`, `post_type`, `is_active`, `category_item_id`, `user_id`, `created_at`, `updated_at`, `seo_id`) VALUES
(27, '5 địa điểm cho tuần trăng mật lý tưởng nhất thế giới', '5-dia-diem-cho-tuan-trang-mat-ly-tuong-nhat-the-gioi', '<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Với những cặp đôi vừa &ldquo;về cùng một nhà&rdquo;, tuần trăng mật là một trong những khoảng thời gian riêng tư đẹp nhất và đáng nhớ nhất.</span></i></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Chắc hẳn bạn sẽ cùng người bạn đời của mình lên kế hoạch cho những chuyến đi xa, đến những nơi thật đẹp và ăn những món thật ngon đúng không?</span></i></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Nếu vẫn còn đang băn khoăn chưa biết sẽ đi đâu, hãy cùng <b>Hera Center</b> tham khảo 5 địa điểm để hưởng tuần trăng mật lý tưởng nhất thế giới bạn nhé</span></i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">!</span></span></span></span>\r\n</p>', '<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"font-size:18.0pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">TUẦN TRĂNG MẬT LÃNG MẠN</span></span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Với những cặp đôi vừa &ldquo;về cùng một nhà&rdquo;, tuần trăng mật là một trong những khoảng thời gian riêng tư đẹp nhất và đáng nhớ nhất.</span></i></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Chắc hẳn bạn sẽ cùng người bạn đời của mình lên kế hoạch cho những chuyến đi xa, đến những nơi thật đẹp và ăn những món thật ngon đúng không?</span></i></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Nếu vẫn còn đang băn khoăn chưa biết sẽ đi đâu, hãy cùng <b>Hera Center</b> tham khảo 5 địa điểm để hưởng tuần trăng mật lý tưởng nhất thế giới bạn nhé</span></i><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">!</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Maldives</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Nếu bạn mong muốn đến một nơi chỉ có riêng bạn và người bạn đời cùng đi dạo chân trần trên những bãi cát trắng mịn màng, dưới bóng dừa tươi mát và trầm mình trong màu biển xanh vô tận thì Maldives là nơi hoàn hảo nhất với vẻ đẹp thuần khiết và sự bình yên. Maldives như từng bức tranh ghép lại, cảnh sắc thiên nhiên hoà hợp, khí hậu mát mẻ và những dịch vụ vô cùng &ldquo;sang chảnh&rdquo; ở đây sẽ khiến tuần trăng mật của bạn trở thành những ngày tuyệt vời nhất để bắt đầu cuộc hôn nhân hạnh phúc.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/m_1.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/m_2.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hòn đảo Santorini</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Santorini hùng vĩ và đẹp như chốn thiên đường trên hạ giới là điều không còn gì bàn cãi nữa.&nbsp; Từ lâu, nơi đây đã nổi tiếng với những vách đá dựng đứng ôm lấy bờ biển cát đen đặc trưng của bụi núi lửa, cùng với nét kiến trúc độc đáo của hai gam màu trắng và xanh da trời, những căn nhà trên đỉnh Oia được xây theo hình bậc thang tạo nên vẻ cổ điển khó kiếm được nơi đâu khác. Và chính vì khung cảnh đặc biệt của nơi này mà Santorini được chọn làm bối cảnh của bộ phim Mama Mia nổi tiếng. Đặc biệt, chẳng cần phải tìm kiếm, bất cứ góc độ nào, khung cảnh nào ở Santorini cũng đều là phông nền tự nhiên hoàn hảo để ghi lại những khoảnh khắc hạnh phúc nhất của tình yêu. Đây chỉ có thể là Santorini!</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/s_1.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/s_2.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Thành phố Florence, Ý</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Được ca ngợi là thành phố đẹp nhất thế giới. Nơi đây vẫn còn giữ được gần như nguyên vẹn của những công trình nghệ thuật, nét cổ kính từ hàng trăm năm trước. Tại đây, bạn có thể dễ dàng bắt gặp những tòa lâu đài cổ, những nhà thờ, những viện bảo tàng đầy ắp những bức tranh quý hiếm cùng những bức tượng quý giá.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/f_1.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/f_2.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Thị trấn St. Morizt, Thụy Sĩ</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Nhắc đến Thụy Sĩ, là nhắc đến những ngọn núi cao hùng vĩ cùng sườn núi trắng toát một màu của tuyết. Nổi tiếng trong số đó là Thị trấn Engadin St. Moritz. Nó luôn khoác lên mình những bộ cánh trắng muốt kiêu sa. Cũng một phần do địa hình cao và thời tiết &ldquo;phù hợp&rdquo; nên nơi này rất phổ biến các môn thể thao mùa đông. Nếu không thích bạn cũng có thể thử với những môn thể thao khác. Hấp dẫn hơn hết vẫn là các môn thể thao leo núi hay đạp xe quanh các lối mòn của thị trấn.. Đây sẽ là những trải nghiệm tuyệt vời nhất của bạn và vị hôn thê của mình đấy.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/1.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/2.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Quần đảo Hawaii</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hawaii được Tạp chí Bride bình chọn là địa điểm du lịch trăng mật hàng đầu thế giới. Theo khảo sát của tờ này, hơn 20 triệu du khách trên thế giới đã đến Hawaii và hơn 6.000 đám cưới đã được tổ chức ở đây. Do nằm ở trung tâm nhiệt đới nên Hawaii chịu sự điều tiết của khí hậu biển, bốn mùa mát mẻ. Vì vậy mà quanh năm nơi đây đều thu hút nhiều khách du lịch tới tham quan và nghỉ dưỡng. Đến với đảo Hawaii, du khách sẽ phải ngỡ ngàng trước vẻ đẹp của những bãi biển và phong cảnh thiên nhiên xinh đẹp.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/h_1.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/5diadiem/h_2.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Với những gợi ý trên, <b><i>Hera Center</i></b> hi vọng những cặp đôi sẽ có được tuần trăng mật tuyệt vời để khởi đầu cuộc sống hôn nhân hạnh phúc!!! </span></span></span></span>\r\n</p>', 'images/uploads/images/tintuc/5diadiem/1.jpg', NULL, 1, 1, NULL, 1, '2018-10-02 03:24:35', '2018-10-02 03:25:27', 59),
(28, 'Áo dài cưới cho cô dâu chú rể: Lựa chọn thế nào để bắt kịp thời đại?', 'ao-dai-cuoi-cho-co-dau-chu-re-lua-chon-the-nao-de-bat-kip-thoi-dai', '<p>\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Với các cô dâu thì việc mặc áo dài cưới chắc chắn không còn xa lạ nhưng với các chú rể thì việc diện một bộ áo dài trong ngày trọng đại này thì chắc hẳn vẫn còn là điều khá mới mẻ. Vậy làm thế nào để lựa chọn áo dài cưới cho cô dâu, chú rể sao cho thật xứng đôi?</span></span></span></span></span></span>\r\n</p>', '<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><b><i><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Áo dài cưới cho cô dâu chú rể: Lựa chọn thế nào để bắt kịp thời đại?</span></span></span></i></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><b><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Với các cô dâu thì việc mặc áo dài cưới chắc chắn không còn xa lạ nhưng với các chú rể thì việc diện một bộ áo dài trong ngày trọng đại này thì chắc hẳn vẫn còn là điều khá mới mẻ. Vậy làm thế nào để lựa chọn áo dài cưới cho cô dâu, chú rể sao cho thật xứng đôi?</span></span></span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><b><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">&nbsp;Hãy tham khảo những chia sẻ dưới đây của <i>Hera Center</i> để tìm lời giải đáp và lựa chọn được những bộ áo dài thật hài hòa và độc đáo nhé.</span></span></span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Từ xưa, các mẫu áo dài truyền thống được lựa chọn làm trang phục cưới bởi vì nó mang những nét đặc trưng cho văn hóa dân tộc. Hiện nay, điều này vẫn còn được lưu giữ, các cặp đôi vẫn lựa chọn áo dài cưới cho ngày trọng đại của cuộc đời mình. Vẫn là những bộ áo dài cưới truyền thống nhưng lựa chọn như thế nào để không bị mất đi vẻ đẹp hiện đại và sang trọng, đó là việc khiến các cặp đôi lại càng trăn trở hơn. </span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Phải lựa chọn làm sao để thể hiện được sự nhất quan về phong cách, hài hòa có đôi có cặp và thể hiện được sự tương đồng về quan điểm cũng như lối sống hiện đại mà tất cả chúng ta đang hướng đến?</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/aodaicuoi/1.jpg\" style=\"width: 100%; height: 100%;\">\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Việc chọn lựa áo dài cưới tưởng chừng đơn giản tuy nhiên khi có sự đồng quan điểm trong việc chọn áo dài cưới cũng đã phần nào báo hiệu cuộc sống vợ chồng hòa thuận, hạnh phúc. Hình ảnh cô dâu thướt tha, yểu điệu bên cạnh chú rể nam tính, mạnh mẽ trong tà áo dài chắc chắn sẽ khiến cho hai bạn vô cùng nổi bật giữa lễ cưới.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Và để làm được điều đó, các cô dâu, chú rể cần lưu ý những vấn đề sau:\\</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><b><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Lựa chọn áo dài cho cô dâu:</span></span></span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Áo dài từ lâu là trang phục truyền thống nhằm tôn vinh vẻ đẹp thuần khiết của người phụ nữ Việt Nam, do đó việc lựa chọn áo dài cho cô dâu trong ngày cưới lại càng được quan tâm hơn.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/aodaicuoi/2.jpg\" style=\"width: 100%; height: 100%;\">\r\n</p>\r\n\r\n<p align=\"center\" style=\"text-align:center; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Nếu cô dâu có dáng người &ldquo;bánh bèo&rdquo; thì nên tránh chọn những chất liệu bóng hay có ánh cao. Vì như vậy sẽ khiến cho cơ thể của bạn thêm phần mũm mĩm. Thay vào đó hãy lựa chọn các loại vải mềm và rũ, như vậy sẽ giúp cho cô dâu trở nên thon gọn hơn.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Bên cạnh đó nếu muốn tạo sự thoải mái và nét thanh thoát cho trang phục, bạn có thể lựa chọn những mẫu áo dài cách tân có cổ thuyền hay cổ rộng cùng với đó là những họa tiết kiểu sọc đứng và được thiết kế trên nền vài trơn một màu.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Nếu cô dâu mang một vóc dáng gầy thì hãy lựa chọn những mẫu vải với màu trắng tươi sáng như màu trắng, màu kem hoặc hồng. Về họa tiết nên lựa chọn những thiết kế với họa tiết to, trải dài từ trên xuống dưới, có thể đính cườm hoặc đá ở phần ngực áo. Như vậy sẽ giúp cho cô dâu trở nên đầy đặn hơn.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/aodaicuoi/3.jpg\" style=\"width: 100%; height: 100%;\">\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Còn với những cô dâu có chiều cao hơi hạn chế thì không nên lựa chọn những kiểu áo tà lớn mà thay vào đó nên chọn những mẫu áo có tà dài vừa chạm đất, ống quần không may quá ôm với dáng người. Như vậy bạn có thể dễ dàng &ldquo;ăn gian&rdquo; chiều cao khi kết hợp cùng với giày cao gót. Nếu muốn khắc phục vấn đề chiều cao bạn nên chọn những mẫu áo dài với thiết kế kiểu hoa văn dọc theo thân áo từ phần vai xuống giữa tà áo. Lưu ý, những mẫu áo dài có họa tiết to trải ngang ngực sẽ dễ dàng &ldquo;tố cáo&rdquo; chiều cao thật của bạn do đó nếu không muốn mọi người nhận ra yếu điểm của mình thì hãy tránh lựa chọn những bộ áo dài như thế này.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><b><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Lựa chọn áo dài cưới cho chú rể</span></span></span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Khác với việc lựa chọn áo dài cưới cho cô dâu, việc chọn áo dài cưới cho chú rể phần nào được thực hiện dễ dàng hơn. Sang trọng, lịch sự và thể hiện được vẻ đẹp nam tính của mình là tất cả những điều mà các chú rể quan tâm khi lựa chọn áo dài cưới cho mình. </span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/aodaicuoi/4.jpg\" style=\"width: 100%; height: 100%;\">\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Với những chú rể có thân hình cân đối thì việc lựa chọn áo dài cưới cũng không quá khó khăn, chỉ cần bộ áo dài đó phù hợp với không gian ngày cưới cũng như tông màu áo dài của cô dâu để mang đến sự đồng điều nhất quán.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Đối với những chú rể hơi mập một chút thì những mẫu áo dài cưới tà lửng với tông màu trầm, thiết kế không quá ôm sát và các họa tiết được thiết kế theo chiều dọc,&nbsp; sẽ là lựa chọn tối ưu nhất.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Ngược lại với những chú rể hơi gầy thì nên chọn những bộ áo dài có tông màu sáng, kết hợp với những họa tiết trang trí theo chiều ngang.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/tintuc/aodaicuoi/5.jpg\" style=\"width: 100%; height: 100%;\">\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p align=\"center\" style=\"text-align:center; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Các bạn lưu ý, về tông màu áo dài của chú rể nên chọn những màu đồng điệu với màu áo dài của cô dâu hoặc những tông màu có thể bổ trợ cho nhau. Tuy nhiên phải đảm bảo phù hợp với sự sang trọng của một lễ cưới.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:115%\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"line-height:115%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Trong điều kiện hiện nay, việc chọn lựa áo dài cưới cho cô dâu chú rể không khó bởi những mẫu áo dài cưới rất phong phú và đa đạng. Chúng tôi xin chúc các cặp đôi có thể lựa chọn cho mình được những mẫu áo dài dưới cô dâu chú rể đẹp nhất, ấn tượng nhất.</span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style=\"text-align:justify; margin:0in 0in 10pt\">\r\n	&nbsp;\r\n</p>', 'images/uploads/images/tintuc/aodaicuoi/1.jpg', NULL, 1, 1, NULL, 1, '2018-10-02 03:40:24', '2018-10-02 03:40:24', 60),
(29, 'Mách mẹ nơi tổ chức tiệc sinh nhật đáng yêu cho bé và tiết kiệm cho me lên đến 8.000.000 đồng.', 'mach-me-noi-to-chuc-tiec-sinh-nhat-dang-yeu-cho-be-va-tiet-kiem-cho-me-len-den-8000000-dong', '<p>\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Ngày sinh nhật của &ldquo;gấu con&rdquo; yêu thương đang đến, mẹ và ba muốn tổ chức một buổi tiệc sinh nhật thật đáng yêu và ý nghĩa cho &ldquo;gấu con&rdquo; yêu thương nhưng chưa chọn được nơi tổ chức. Chúng tôi xin giới thiệu đến gia đình bé một nơi tổ chức sinh nhật lý tưởng, đầy hoa cỏ xanh tươi, thoáng mát và hứa hẹn cực kỳ thú vị ở ngay trung tâm đô <span style=\"background:yellow\"><span style=\"background-color:#ffffff;\">thị Celadon, quân Tân Phú. Chắc chắn bữa</span></span> tiệc sinh nhật của bé sẽ làm hài lòng tất cả thành viên trong gia đình và quan khách một cách tuyệt đối.</span></span></span></span>\r\n</p>', '<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Ngày sinh nhật của &ldquo;gấu con&rdquo; yêu thương đang đến, mẹ và ba muốn tổ chức một buổi tiệc sinh nhật thật đáng yêu và ý nghĩa cho &ldquo;gấu con&rdquo; yêu thương nhưng chưa chọn được nơi tổ chức. Chúng tôi xin giới thiệu đến gia đình bé một nơi tổ chức sinh nhật lý tưởng, đầy hoa cỏ xanh tươi, thoáng mát và hứa hẹn cực kỳ thú vị ở ngay trung tâm đô <span style=\"background:yellow\"><span style=\"background-color:#ffffff;\">thị Celadon, quân Tân Phú. Chắc chắn bữa</span></span> tiệc sinh nhật của bé sẽ làm hài lòng tất cả thành viên trong gia đình và quan khách một cách tuyệt đối.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hera Center- Không gian đậm chất Châu Âu đầy tinh tế và sang trọng</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tọa lạc ngay trung tâm đô thị phồn thịnh nhất Celadon City của quân Tân phú, Thành phô Hồ Chí Minh. Hera Center như một vệt sáng rất được ưa chuộng với các dịch vụ hàng đầu về hội nghị- tiệc cưới. Điểm nhấn của Hera Center chính là sự kết hợp hài hòa và tinh tế giữa phong cách cổ điển thời kỳ Phục Hưng Châu Âu và sự mộc mạc Á Đông tạo nên một vẻ đẹp giao thoa sang trọng và đẳng cấp.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/uudai/tiecsinhnhat/2.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hera Center- tiệc &ldquo;sinh nhật hồng&rdquo; đáng yêu như truyện cổ tích cho &ldquo;gấu con&rdquo; yêu thương.</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Với đội ngũ nhân viên yêu nghề, chúng tôi luôn mang đến những bữa tiệc sinh nhật thật đáng yêu theo yêu cầu và sở thích của bé và gia đình, đảm bảo bé yêu của bạn sẽ mê tít bữa tiệc sinh nhật của chính mình. Hera Center luôn đồng hành cùng gia đình bé với tất cả sự tận tâm, chuyên nghiệp, sự thân thiện để gia đình và quan khách thoải mái nhất, mang lại cảm giác dù ở nhà hàng nhưng cũng như ở nhà.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/uudai/tiecsinhnhat/3.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hera Center &ndash; tuyệt đỉnh ẩm thực.</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Với các chuyên gia đầu bếp giàu kinh nghiệm, Hera Center đáp ứng các yêu cầu về ẩm thực Á &ndash; Âu theo yêu cầu của khách hàng. Tiêu chí sạch &ndash; đảm bảo an toàn luôn được đặt lên hàng đầu để khách hàng yên tâm khi sử dụng dịch vụ.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Ẩm thực Hera Center được đánh giá là món ngon tròn vị và luôn làm hài lòng thực khách khó tính.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/uudai/tiecsinhnhat/4.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><b><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hera Center- Nơi tổ chức tiệc sinh nhật giá rẻ ở TP HCM với dịch vụ chuyên nghiệp đẳng cấp 3 sao giúp mẹ tiết kiệm chi phí đến 8.000.000 đồng.</span></b></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Mẹ sẽ tiết kiệm được một khoản chi phí không hề nhỏ với gói ưu đãi không còn gì hấp dẫn hơn &ldquo;sinh nhật hồng&rdquo;cho tiệc sinh nhật của bé yêu.</span></span></span></span>\r\n</p>\r\n\r\n<ul>\r\n	<li style=\"margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tặng gói trang trí sinh nhật lên đến 8.000.000 đồng.</span></span></span></span>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Trang trí bong bóng toàn sảnh tiệc.</span></span></span></span>\r\n	</li>\r\n	<li style=\"text-align:justify; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Bàn gallery.</span></span></span></span>\r\n	</li>\r\n	<li style=\"text-align:justify; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Tháp bánh cupcake</span></span></span></span>\r\n	</li>\r\n	<li style=\"text-align:justify; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Chú hề tạo hình bong bóng tặng khách.</span></span></span></span>\r\n	</li>\r\n	<li style=\"text-align:justify; margin:0in 0in 8pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">MC chú hề hoạt náo suốt tiệc.</span></span></span></span>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><u><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Điều kiện áp dung:</span></u></span></span></span>\r\n</p>\r\n\r\n<ul>\r\n	<li style=\"margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Đặt tiệc 15 bàn trở lên, được tặng 100% gói trang trí trị giá lên đến 8.000.000 đồng.</span></span></span></span>\r\n	</li>\r\n	<li style=\"margin:0in 0in 8pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Đặt tiệc dưới 15 bàn, được tặng 50% gói trang trí trị giá lên đến 8.000.000 đồng.</span></span></span></span>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><u><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Thời gian áp dụng:</span></u><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"> từ 26/06/2018 đến 26/09/2018.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Hãy chọn Hera Center tổ chức sinh nhật cho bé ở Tp HCM để đưa bé vào không gian cổ tích thần tiên, tận hưởng dịch vụ hoàn hảo, ẩm thực tuyệt đỉnh nhưng lại tiết kiệm cho mẹ và hơn hết là có một buổi tiệc sinh nhật thật đáng nhớ.</span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/uudai/tiecsinhnhat/5.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/uudai/tiecsinhnhat/6.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/uudai/tiecsinhnhat/7.jpg\" style=\"width: 100%; height: 100%;\"></span></span></span></span>\r\n</p>', 'images/uploads/images/uudai/tiecsinhnhat/1.png', NULL, 1, 1, NULL, 1, '2018-10-02 04:11:47', '2018-10-02 06:48:03', 61);
INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `sub_image`, `post_type`, `is_active`, `category_item_id`, `user_id`, `created_at`, `updated_at`, `seo_id`) VALUES
(30, 'TIỆC CƯỚI RỰC RỠ CÙNG “NGÀY HẠNH PHÚC”', 'tiec-cuoi-ruc-ro-cung-ngay-hanh-phuc', '<p>\r\n	<span style=\"font-size:13.5pt\"><span style=\"line-height:107%\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Nắng đầu mùa, nóng và oi nồng. Bằng lăng tím hé nụ, rạo rực và chờ mong! Hè dần đến, những ngày tháng nóng bỏng nhất cũng đang dần đến và thời khắc hòa hợp của các đôi uyên ương đang cận kề. Cùng Hera Center tổ chức những tiệc cưới rực rỡ dưới nắng vàng cho mùa hè này thêm đắm say ngây ngất.</span></span></span></span>\r\n</p>', '<p style=\"margin-bottom:.25in; margin:0in 0in 8pt\">\r\n	<img alt=\"\" src=\"http://localhost:8080/hera/images/uploads/images/uudai/ngayhanhphuc/2.png\" style=\"width: 100%; height: 100%;\">\r\n</p>\r\n\r\n<p style=\"margin-bottom:.25in; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Nắng đầu mùa, nóng và oi nồng. Bằng lăng tím hé nụ, rạo rực và chờ mong! Hè dần đến, những ngày tháng nóng bỏng nhất cũng đang dần đến và thời khắc hòa hợp của các đôi uyên ương đang cận kề. Cùng Hera Center tổ chức những tiệc cưới rực rỡ dưới nắng vàng cho mùa hè này thêm đắm say ngây ngất. </span></span></span></b></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.25in; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Tiệc cưới rực rỡ dưới nắng vàng làm cho ngọn lửa tình yêu thêm bất diệt. Khi yêu, người ta thường mơ ước tới một hôn lễ như trong xứ sở thần tiên, màu nhiệm như truyện cổ tích. Ước mơ sẽ không còn là mơ ước khi tiệc cưới của bạn được tổ chức tại Hera Center, chúng tôi sẽ mang đến cho bạn tiệc cưới rực rỡ như trong tâm tưởng của bạn. </span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.25in; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Tiệc cưới rực rỡ dưới nắng vàng, chúng tôi sẽ đưa bạn đi qua từng trang sách thần tiên mang tên Hera Center trong sắc xanh của hoa cỏ, mát ngọt trong lành của dòng nước trong xanh, yên bình ngưng đọng cùng tiếng gió thì thầm và tiếng hót thanh thót của các loài lông vũ. Cùng với tiếng nhạc du dương trong không gian tiệc cưới rực rỡ đầy lãng mạng ấy, câu chuyện tình yêu của bạn là một đề tài bất tận và là nguồn cảm hứng của biết bao thi sĩ đang đắm say hương nồng tình ái cho những tuyệt tác tương lai. </span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.25in; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Tiệc cưới rực rỡ, rực rỡ cả không gian say lìm ý thơ, chất nhạc và tuyệt tác ẩm thực đỉnh cao. Tiệc cưới rực rỡ là rực rỡ đến từng giọt vang, miếng ngon thơm phức và từng giọt nước chấm nồng nàn. </span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.25in; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Tiệc cưới rực rỡ sẽ càng rực rỡ hơn với chương trình ưu đãi hấp dẫn &quot;Ngày Hạnh Phúc&quot; mà chỉ Hera Center mới có.</span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.25in; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Đặt tiệc 15 bàn, được tặng ngay:</span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<ul>\r\n	<li style=\"margin-bottom:.25in; margin:0in 0in 8pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">T<span style=\"border:none windowtext 1.0pt; padding:0in\">ặng trọn gói trang trí cao cấp:</span></span></span></span></b></span></span></span></span></span>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"border:none windowtext 1.0pt; font-size:13.5pt; padding:0in\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">+ Bàn gallery</span></span></span></b></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"border:none windowtext 1.0pt; font-size:13.5pt; padding:0in\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">+ Background</span></span></span></b><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">.</span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<ul>\r\n	<li style=\"margin-bottom:.0001pt; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"border:none windowtext 1.0pt; font-size:13.5pt; padding:0in\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Tặng tiền mặt 300.000đ/ bàn</span></span></span></b></span></span></span></span></span>\r\n	</li>\r\n	<li style=\"margin-bottom:.0001pt; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"border:none windowtext 1.0pt; font-size:13.5pt; padding:0in\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Tặng nước ngọt, nước suối và bia Heineken chai trong suốt buổi tiệc.</span></span></span></b></span></span></span></span></span>\r\n	</li>\r\n	<li style=\"margin-bottom:.0001pt; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"border:none windowtext 1.0pt; font-size:13.5pt; padding:0in\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Trọn gói nghi lễ (MC, ban nhạc điện tử, vũ đoàn)</span></span></span></b></span></span></span></span></span>\r\n	</li>\r\n	<li style=\"margin-bottom:.0001pt; margin:0in 0in 8pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span style=\"border:none windowtext 1.0pt; font-size:13.5pt; padding:0in\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Tặng toàn bộ thiêp cưới</span></span></span></b></span></span></span></span></span>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><u><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">ĐIỀU KIỆN ÁP DỤNG:</span></span></span></u></span></span></span></span></span>\r\n</p>\r\n\r\n<ul>\r\n	<li style=\"margin-bottom:.0001pt; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Áp dụng từ 200 khách trở lên.</span></span></span></span></span></span></span></span>\r\n	</li>\r\n	<li style=\"margin-bottom:.25in; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Thời gian ký hợp đồng từ 10/6/2018 đến 25/6/2018 và Thời gian tổ chức từ nay đến 31/10/2018.</span></span></span></span></span></span></span></span>\r\n	</li>\r\n	<li style=\"margin-bottom:.25in; margin:0in 0in 0.0001pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Không áp dụng chung với các chương trình ưu đãi khác.</span></span></span></span></span></span></span></span>\r\n	</li>\r\n	<li style=\"margin-bottom:.25in; margin:0in 0in 8pt 0.5in\">\r\n		<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Không áp dụng với các hợp đồng đặt tiệc đã ký hoặc hợp đồng hủy ký lại.</span></span></span></span></span></span></span></span>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Liên hệ ngay với <b>Trung tâm Tiệc cưới Hera Center</b> để được hỗ trợ tư vấn miễn phí.</span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Hotline: 01663997777</span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Email: info@heracenter.com</span></span></span></span></span></span></span></span>\r\n</p>\r\n\r\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 8pt\">\r\n	<span style=\"font-size:11pt\"><span style=\"background:white\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:black\">Website: http://heracenter.com</span></span></span></span></span></span></span></span>\r\n</p>', 'images/uploads/images/uudai/ngayhanhphuc/2.png', NULL, 1, 1, NULL, 1, '2018-10-02 04:13:31', '2018-10-02 06:48:26', 62);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `final_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2018-03-14 07:23:50', '2018-03-14 07:23:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seos`
--

INSERT INTO `seos` (`id`, `seo_title`, `seo_description`, `seo_keywords`, `seo_image`, `created_at`, `updated_at`) VALUES
(6, 'test bài viết', 'test bài viết', 'test bài viết', NULL, '2018-07-17 03:13:47', '2018-07-17 03:13:47'),
(8, NULL, NULL, NULL, NULL, '2018-09-12 14:36:28', '2018-09-12 14:36:28'),
(9, NULL, NULL, NULL, NULL, '2018-09-12 14:50:50', '2018-09-12 14:50:50'),
(10, NULL, NULL, NULL, NULL, '2018-09-12 14:53:02', '2018-09-12 14:53:02'),
(11, NULL, NULL, NULL, NULL, '2018-09-12 14:54:14', '2018-09-12 14:54:14'),
(13, NULL, NULL, NULL, NULL, '2018-09-17 08:05:17', '2018-09-17 08:05:17'),
(14, NULL, NULL, NULL, NULL, '2018-09-17 08:06:20', '2018-09-17 08:06:20'),
(15, NULL, NULL, NULL, NULL, '2018-09-17 08:06:29', '2018-09-17 08:06:29'),
(16, NULL, NULL, NULL, NULL, '2018-09-17 08:06:53', '2018-09-17 08:06:53'),
(17, NULL, NULL, NULL, NULL, '2018-09-17 08:07:08', '2018-09-17 08:07:08'),
(18, NULL, NULL, NULL, NULL, '2018-09-17 08:07:16', '2018-09-17 08:07:16'),
(19, NULL, NULL, NULL, NULL, '2018-09-17 08:07:34', '2018-09-17 08:07:34'),
(20, NULL, NULL, NULL, NULL, '2018-09-17 08:08:34', '2018-09-17 08:08:34'),
(21, NULL, NULL, NULL, NULL, '2018-09-17 08:08:56', '2018-09-17 08:08:56'),
(22, NULL, NULL, NULL, NULL, '2018-09-17 08:09:16', '2018-09-17 08:09:16'),
(23, NULL, NULL, NULL, NULL, '2018-09-17 08:09:59', '2018-09-17 08:09:59'),
(50, NULL, NULL, NULL, NULL, '2018-09-18 03:32:20', '2018-09-18 03:32:20'),
(51, NULL, NULL, NULL, NULL, '2018-09-18 04:00:03', '2018-09-18 04:00:03'),
(54, NULL, NULL, NULL, NULL, '2018-09-18 04:09:16', '2018-09-18 04:09:16'),
(57, NULL, NULL, NULL, NULL, '2018-09-18 08:07:44', '2018-09-18 08:07:44'),
(58, NULL, NULL, NULL, NULL, '2018-10-01 03:00:18', '2018-10-01 03:00:18'),
(59, NULL, NULL, NULL, NULL, '2018-10-02 03:24:35', '2018-10-02 03:24:35'),
(60, NULL, NULL, NULL, NULL, '2018-10-02 03:40:24', '2018-10-02 03:40:24'),
(61, NULL, NULL, NULL, NULL, '2018-10-02 04:11:47', '2018-10-02 04:11:47'),
(62, NULL, NULL, NULL, NULL, '2018-10-02 04:13:31', '2018-10-02 04:13:31'),
(65, NULL, NULL, NULL, NULL, '2018-10-02 04:41:08', '2018-10-02 04:41:08'),
(66, NULL, NULL, NULL, NULL, '2018-10-02 04:41:29', '2018-10-02 04:41:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$mStg572JFNI89/0Cg7TOGOUkACFaBl/nsNeOvx8zglr1qyJPA0tj6', 'UqW9eVB1Ogz2KQkPtONlMLRlKghDrbeYutuGZv6ggYjFH64Sg2Gvr7wXdV9T', '2018-03-14 07:24:10', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_items_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `category_many`
--
ALTER TABLE `category_many`
  ADD PRIMARY KEY (`category_id`,`item_id`);

--
-- Chỉ mục cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_product_id_foreign` (`category_product_id`),
  ADD KEY `products_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD CONSTRAINT `category_items_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
