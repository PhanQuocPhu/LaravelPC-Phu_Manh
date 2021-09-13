-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2021 lúc 03:19 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pconline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `address`) VALUES
(13, 'Phan Quốc Phú', 'phanquocphu1998@gmail.com', NULL, NULL, 1, '$2y$10$abCdrRLNgq6MXJvPguA8uOKEW1pRPkg8ffFZruPwYuv3Ku5hIKfSe', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_active` tinyint(4) NOT NULL DEFAULT 1,
  `a_author_id` int(10) UNSIGNED NOT NULL,
  `a_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_active` tinyint(4) NOT NULL DEFAULT 1,
  `c_total_product` int(11) NOT NULL DEFAULT 0,
  `c_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `c_home` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Hiện trên trang chủ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_active`, `c_total_product`, `c_title_seo`, `c_description_seo`, `c_keyword_seo`, `created_at`, `updated_at`, `c_home`) VALUES
(10, 'MainBoard - Bo mạch chủ', 'mainboard-bo-mach-chu', '2021-06-07__020-motherboard.png', NULL, 1, 0, 'MainBoard', NULL, NULL, '2021-04-07 20:17:29', '2021-06-13 08:35:47', 1),
(11, 'CPU - Vi xử lý', 'cpu-vi-xu-ly', '2021-06-07__013-processor.png', NULL, 1, 0, 'CPU', NULL, NULL, '2021-04-07 20:18:06', '2021-06-13 08:35:49', 1),
(13, 'SSD - Ổ cứng thể rắn', 'ssd-o-cung-the-ran', '2021-06-07__006-ssd.png', NULL, 1, 0, 'SSD - Ổ cứng thể rắn', NULL, NULL, '2021-05-09 21:27:31', '2021-06-07 05:00:46', 0),
(14, 'HDD - Ổ cứng', 'hdd-o-cung', '2021-06-07__026-hard-drive.png', NULL, 1, 0, 'HDD - Ổ cứng', NULL, NULL, '2021-05-09 21:28:17', '2021-06-07 05:00:27', 0),
(15, 'PSU - Nguồn máy tính', 'psu-nguon-may-tinh', '2021-06-07__018-nas.png', NULL, 1, 0, 'PSU - Nguồn máy tính', NULL, NULL, '2021-05-09 21:29:12', '2021-06-07 05:01:38', 0),
(16, 'Case - Vỏ máy tính', 'case-vo-may-tinh', '2021-06-07__031-cpu-tower.png', NULL, 1, 0, 'Case - Vỏ máy tính', NULL, NULL, '2021-05-09 21:29:24', '2021-06-07 05:01:52', 0),
(18, 'Chuột', 'chuot', '2021-06-07__019-mouse.png', NULL, 1, 0, 'Chuột', NULL, NULL, '2021-05-09 21:30:25', '2021-06-07 05:02:08', 0),
(19, 'Bàn phím', 'ban-phim', '2021-06-07__025-keyboard.png', NULL, 1, 0, 'Bàn phím', NULL, NULL, '2021-05-09 21:30:31', '2021-06-07 05:02:23', 0),
(20, 'Màn hình', 'man-hinh', '2021-06-07__021-monitor.png', NULL, 1, 0, 'Màn hình', NULL, NULL, '2021-05-11 19:19:31', '2021-06-07 05:02:42', 0),
(22, 'Ram - Bộ nhớ phụ', 'ram-bo-nho-phu', '2021-06-07__memory.png', NULL, 1, 0, 'Ram - Bộ nhớ phụ', NULL, NULL, '2021-06-07 04:41:16', '2021-06-07 04:41:16', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `c_email`, `c_title`, `c_content`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'Alo', 'phanquocphu1998@gmail.com', 'Loli', 'QWERTY', 1, NULL, NULL),
(2, 'Alo', 'phanquocphu1998@gmail.com', 'Loli', 'Test liên hệ update', 0, '2021-04-27 19:39:04', '2021-05-06 06:03:56');

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
(3, '2021_03_15_122402_create_categories_table', 1),
(4, '2021_04_04_103340_create_products_table', 2),
(5, '2021_04_05_101017_alter_column_pro_content_and_pro_title_seo_in_table_products', 3),
(6, '2021_04_13_114054_create_article_table', 4),
(7, '2021_04_27_114036_create_contact_table', 5),
(8, '2021_05_02_022219_create_transaction_table', 6),
(9, '2021_05_02_022256_create_order_table', 6),
(10, '2021_05_05_124221_create_rating_table', 7),
(11, '2021_05_05_124846_alter_column_rating_in_table_products', 7),
(12, '2021_05_11_104948_alter_column_total_pay_in_table_users', 8),
(13, '2021_05_17_021858_alter_column_c_home_in_table_categories', 9),
(14, '2021_05_18_122858_create_admins_table', 14),
(15, '2021_05_20_103842_alter_column_address_in_table_users', 11),
(16, '2021_05_31_034626_alter2_users_table', 12),
(17, '2021_06_01_104545_alter_table_transactions_collumn_tr_payment', 13),
(18, '2021_06_01_125459_create_table_payments', 14),
(19, '2021_06_02_105141_alter_table_payment__colunm_p_transaction_code', 15),
(20, '2021_06_10_123914_alter_colunm_address_to_table_admins', 16),
(23, '2021_06_13_131645_create_test_table', 18),
(26, '2021_06_13_120005_create_out_banners_table', 19),
(27, '2021_06_13_120016_create_slide_banners_table', 19),
(28, '2021_06_14_024103_alter_col_status_in_slide_banners_table', 19),
(29, '2021_06_14_024216_alter_col_status_in_out_banners_table', 19),
(30, '2021_06_22_110551_create_product_images_table', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(10) UNSIGNED NOT NULL,
  `or_product_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` int(11) NOT NULL DEFAULT 0,
  `or_sale` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(99, 107, 17, 1, 12490000, 0, NULL, NULL),
(100, 108, 17, 1, 12490000, 0, NULL, NULL),
(101, 109, 17, 1, 12490000, 0, NULL, NULL),
(102, 110, 19, 1, 19370000, 2, NULL, NULL),
(103, 112, 24, 1, 1890000, 5, NULL, NULL),
(104, 113, 17, 1, 12490000, 0, NULL, NULL),
(105, 114, 23, 1, 2499000, 10, NULL, NULL),
(106, 114, 19, 1, 19370000, 2, NULL, NULL),
(107, 114, 24, 2, 1890000, 5, NULL, NULL),
(108, 115, 17, 2, 12490000, 0, NULL, NULL),
(109, 116, 17, 2, 12490000, 0, NULL, NULL),
(110, 117, 17, 2, 12490000, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `out_banners`
--

CREATE TABLE `out_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ob_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ob_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ob_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `out_banners`
--

INSERT INTO `out_banners` (`id`, `ob_img`, `ob_link`, `created_at`, `updated_at`, `ob_status`) VALUES
(1, '2021-06-14__solid1.jpg', 'http://pconline.abc/danh-muc/mainboard-bo-mach-chu-10', '2021-06-13 20:27:40', '2021-06-14 04:55:27', 1),
(2, '2021-06-14__solid2-1.jpg', 'http://pconline.abc/danh-muc/man-hinh-20', '2021-06-13 20:53:34', '2021-06-13 21:19:12', 1),
(3, '2021-06-14__solid3.jpg', 'http://pconline.abc/danh-muc/cpu-vi-xu-ly-11', '2021-06-13 20:55:40', '2021-06-13 21:21:05', 1),
(4, '2021-06-14__solid4.jpg', 'http://pconline.abc/danh-muc/man-hinh-20', '2021-06-13 20:57:46', '2021-06-13 21:17:24', 1),
(5, '2021-06-14__solid5.jpg', 'http://pconline.abc/danh-muc/man-hinh-20', '2021-06-14 03:34:18', '2021-06-14 04:15:37', 1);

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
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_transaction_id` int(10) UNSIGNED DEFAULT NULL,
  `p_user_id` int(10) UNSIGNED DEFAULT NULL,
  `p_money` int(10) DEFAULT NULL COMMENT 'Số tiền thanh toán',
  `p_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Nội dung thanh toán',
  `p_vnp_response_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mã phản hồi',
  `p_code_vnp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mã giao dịch vnpay',
  `p_code_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mã ngân hàng',
  `p_time` datetime DEFAULT NULL COMMENT 'Thời gian chuyển tiền',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p_transaction_code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_author_id` int(11) NOT NULL DEFAULT 0,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_pay` tinyint(4) NOT NULL DEFAULT 0,
  `pro_number` tinyint(4) NOT NULL DEFAULT 0,
  `pro_total_rating` int(11) NOT NULL DEFAULT 0 COMMENT 'Tổng đánh giá sản phẩm',
  `pro_total_number` int(11) NOT NULL DEFAULT 0 COMMENT 'Tổng điểm đánh giá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_description`, `pro_avatar`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_title_seo`, `pro_content`, `pro_pay`, `pro_number`, `pro_total_rating`, `pro_total_number`) VALUES
(17, 'ASUS Prime TRX40 -Pro', 'asus-prime-trx40-pro', 10, 12490000, 0, 0, 1, 0, 0, '- Nhà sản xuất : ASUS\r\n\r\n- Bảo hành : 36 tháng \r\n\r\n- Tình trạng: Mới 100%', '2021-06-23__gearvn-asus-trx40-pro-1-97fe2dc13811487db9e855db82178f75.jpg', 'ASUS Prime TRX40 -Pro', NULL, '2021-06-23 04:27:02', '2021-07-05 05:21:03', 'ASUS Prime TRX40 -Pro', '<p><strong>Th&ocirc;ng số kỹ thuật&nbsp;</strong></p>\r\n\r\n<table border=\"3\" cellpadding=\"3\" cellspacing=\"3\" style=\"width:900px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\"><strong>M&ocirc; tả chi tiết&nbsp;</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU</td>\r\n			<td>AMD Socket sTRX4 for 3rd Gen AMD Ryzen&trade; Threadripper&trade; Series Desktop Processors<br />\r\n			&nbsp;Refer to www.asus.com for CPU support list</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset</td>\r\n			<td>&nbsp;&nbsp;&nbsp; Build in AMD TRX40</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>8 x DIMM, Max. 256GB, DDR4 3200/2933/2800/2666/2400/2133 MHz ECC and non-ECC, Un-buffered Memory</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\">Multi-GPU Support</td>\r\n			<td>Supports NVIDIA&reg; Quad-GPU SLI&reg; Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Supports NVIDIA&reg; 2-Way SLI&reg; Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Supports AMD Quad-GPU CrossFireX&trade; Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Supports AMD 2-Way CrossFireX Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\">Expansion Slots</td>\r\n			<td>3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3 x PCIe 4.0 x16 (x16/x16/x16) *</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x PCIe 4.0 (x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"6\">Storage</td>\r\n			<td>3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x M.2 Socket 3, with M key, type 2242/2260/2280/22110 storage devices support(PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 Socket 3, with vertical M key, type 2242/2260/2280/22110 storage devices support(SATA &amp; PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x SATA 6Gb/s port(s),</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Support Raid 0, 1, 10</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"3\">LAN</td>\r\n			<td>Intel&reg; I211-AT</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Turbo LAN Utility</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS LAN Guard</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"12\">Audio</td>\r\n			<td>Realtek&reg; ALC S1220 8-Channel High Definition Audio CODEC featuring Crystal Sound 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Impedance sense for front and rear headphone outputs</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Internal audio Amplifier to enhance the highest quality sound for headphone and speakers</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Supports : Jack-detection, Multi-streaming, Front Panel Jack-retasking</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- High quality 120 dB (Line-out at rear) and 108 dB SNR recording input (Line-in)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Audio Feature :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- DTS X&reg;:Ultra</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Optical S/PDIF out port(s) at back panel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Audio Shielding: Ensures precision analog/digital separation and greatly reduced multi-lateral interference</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Dedicated audio PCB layers: Separate layers for left and right channels to guard the quality of the sensitive audio signals</td>\r\n		</tr>\r\n		<tr>\r\n			<td>#NAME?</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Unique de-pop circuit: Reduces start-up popping noise to audio outputs</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"12\">USB Ports</td>\r\n			<td>AMD Ryzen&trade; Threadripper&trade; Processors :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 2 port(s) (4 at back panel, , 3 x Type-A+1 x Type-C)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB 3.2 Gen 2 front panel connector port(s) (1 at mid-board)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6 x USB 3.2 Gen 1 port(s) (2 at back panel, , Type-A, 4 at mid-board)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 2.0 port(s) (2 at mid-board)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASMedia&reg; USB 3.2 Gen 1 controller :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 1 port(s) (4 at back panel, , Type-A)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GL852G USB Hub :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 2.0 port(s) (2 at mid-board)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"31\">Special Features</td>\r\n			<td>ASUS Dual Intelligent Processors 5-Way Optimization by Dual Intelligent Processors 5 :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5Way Optimization tuning key perfectly consolidates TPU, EPU, DIGI+ VRM, Fan Expert 4, and Turbo App</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS SafeSlot&nbsp;- Protect your graphics card Investment</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AURA :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Aura RGB Strip Headers</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Aura Lighting Effects Synchronization with compatible ASUS ROG devices</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Addressable Gen 2 Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Exclusive Features&nbsp;:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- AI Suite 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Ai Charger</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Onboard Button : Power</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS UEFI BIOS EZ Mode featuring friendly graphics user interface</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Turbo LAN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Crystal Sound 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Armoury Crate</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Pre-mounted I/O Shield</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Quiet Thermal Solution&nbsp;:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Stylish Design Heat-pipe solution</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Stylish Fanless Design with M.2 Heat-sink solution</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Fan Xpert 4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS EZ DIY :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS EZ Flash 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS USB BIOS FlashBack&trade;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS UEFI BIOS EZ Mode</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Multi-language BIOS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Q-Design :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Code</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-LED (CPU, DRAM, VGA, Boot Device LED)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Slot</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-DIMM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"6\">Back I/O Ports</td>\r\n			<td>1 x LAN (RJ45) port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 2 (teal blue) (3 x Type-A+1 x Type-C) (one port can be switched to USB BIOS FlashBack&trade;)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6 x USB 3.2 Gen 1 (blue)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Optical S/PDIF out</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5 x Audio jack(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB BIOS FlashBack&trade;&nbsp;Button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"23\">Internal I/O Ports</td>\r\n			<td>1 x Q_Code</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x Aura RGB Strip Header(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x Addressable Gen 2 header(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 3.2 Gen 1(up to 5Gbps) connector(s) support(s) additional 4 USB 3.2 Gen 1 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 2.0 connector(s) support(s) additional 4 USB 2.0 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x M.2 Socket 3 with M key, type 2242/2260/2280/22110 storage devices support(SATA &amp; PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 Socket 3 with vertical M key, type 2242/2260/2280/22110 storage devices support(SATA &amp; PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 with E key for Wi-Fi module</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x SATA 6Gb/s connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x CPU Fan connector(s) (1 x 4 -pin)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x CPU OPT Fan connector(s) (1 x 4 -pin)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3 x Chassis Fan connector(s) (3 x 4 -pin)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x AIO_PUMP connector (1 x 4 -pin)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x W_PUMP+ connector (1 x 4 -pin)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x 24-pin EATX Power connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x 8-pin ATX 12V Power connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Front panel audio connector(s) (AAFP)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x System panel(s) (Q-Connector) x With flexkey function</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Thermal sensor connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Power-on button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Clear CMOS jumper(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Node Connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB 3.2 Gen 2 front panel connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>BIOS</td>\r\n			<td>1 x 128 Mb Flash ROM, UEFI AMI BIOS, PnP, WfM2.0, SM BIOS 3.2, ACPI 6.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Manageability</td>\r\n			<td>WfM 2.0, WOL by PME, PXE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>Support for Windows 10 64-bit</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch Thước&nbsp;</td>\r\n			<td>ATX Form Factor 12 inch x 9.6 inch ( 30.5 cm x 24.4 cm )</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, 98, 1, 5),
(18, 'ASUS ROG Strix TRX40-E Gaming', 'asus-rog-strix-trx40-e-gaming', 10, 13740000, 0, 0, 1, 0, 0, '- Nhà sản xuất : ASUS\r\n\r\n- Bảo hành : 36 tháng \r\n\r\n- Tình trạng: Mới 100%', '2021-06-23__gearvn-rog-strix-trx40-e-gaming-9-99-6a707eaaffcd421bb4ca9088e14e1c3e.jpg', 'ASUS ROG Strix TRX40-E Gaming', NULL, '2021-06-23 04:33:19', NULL, 'ASUS ROG Strix TRX40-E Gaming', '<p><strong>Th&ocirc;ng số kỹ thuật&nbsp;</strong></p>\r\n\r\n<table border=\"3\" cellpadding=\"3\" cellspacing=\"3\" style=\"width:900px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\"><strong>&nbsp;M&ocirc; tả chi tiết&nbsp;</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU</td>\r\n			<td>AMD Socket sTRX4 for 3rd Gen AMD Ryzen&trade; Threadripper&trade; Series Desktop Processors<br />\r\n			&nbsp;Refer to www.asus.com for CPU support list</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset</td>\r\n			<td>&nbsp;Build in AMD TRX40</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>8 x DIMM, Max. 256GB, DDR4 3200/2933/2800/2666/2400/2133 MHz ECC and non-ECC, Un-buffered Memory</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">Multi-GPU Support</td>\r\n			<td>Supports NVIDIA&reg; 2-Way SLI&reg; Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Supports AMD 2-Way CrossFireX Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"3\">Expansion Slots</td>\r\n			<td>3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3 x PCIe 4.0 x16 (x16/x16/x16)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x PCIe 4.0 x4</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"6\">Storage</td>\r\n			<td>3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x M.2 Socket 3, with M key, type 2242/2260/2280/22110 storage devices support(PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 Socket 3, with vertical M key, type 2242/2260/2280/22110 storage devices support(SATA &amp; PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x SATA 6Gb/s port(s),</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>ASMedia&reg; SATA 6Gb/s controller :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>4 x SATA 6Gb/s port(s),</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Support Raid 0, 1, 10</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\">LAN</td>\r\n			<td>Realtek&reg; RTL8125-CG 2.5G LAN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Intel&reg; I211-AT, 1 x Gigabit LAN Controller(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Anti-surge LANGuard</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ROG GameFirst V Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wireless Data Network</td>\r\n			<td>Intel&reg; Wi-Fi 6 AX200</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Wi-Fi 802.11 ax, Bluetooth&reg; 5.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Supports dual band frequency 2.4/5 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Supports 2x2 MU-MIMO</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Supports channel bandwidth: HT20/HT40/HT80/HT160. Up to 1.73Gbps transfer speed</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"11\">Audio</td>\r\n			<td>ROG SupremeFX 8-Channel High Definition Audio CODEC S1220</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Dual OP Amplifiers</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Supports : Jack-detection, Multi-streaming, Front Panel MIC Jack-retasking</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- High quality 120 dB SNR stereo playback output 108 dB SNR recording input</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Supports up to 32-Bit/192kHz playback</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Audio Feature :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>#NAME?</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Studio III + Sonic Studio Virtual Mixer</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- DTS&reg; Sound Unbound</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Optical S/PDIF out port(s) at back panel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Radar III</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"10\">USB Ports</td>\r\n			<td>3rd Gen AMD Ryzen&trade; Threadripper&trade; Processors :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 2 port(s) (4 at back panel, red)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB 3.2 Gen 2 front panel connector port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 2 port(s) (4 at back panel, red, 3 x Type-A+1 x Type-C)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x USB 2.0 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASMedia&reg; USB 3.2 Gen 1 controller :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 1 port(s) (4 at mid-board)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"7\">ROG Exclusive Features</td>\r\n			<td>ROG Exclusive Software</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- RAMCache III</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- CPU-Z</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- GameFirst V</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Studio III + Sonic Studio Link</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Radar III</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Overwolf</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"27\">Special Features</td>\r\n			<td>5-Way Optimization by Dual Intelligent Processors 5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Whole system optimization with a single click! 5-Way Optimization tuning key perfectly consolidates TPU, EPU, DIGI+ Power Control, Fan Xpert 4, and Turbo App together, providing better CPU performance, efficient power saving, precise digital power control, whole system cooling and even tailor your own app usages.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gamer&#39;s Guardian:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- DRAM Overcurrent Protection</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Highly Durable Components</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- DIGI+ VRM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- SafeSlot</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ESD Guards on LAN, Audio,and USB ports</td>\r\n		</tr>\r\n		<tr>\r\n			<td>LiveDash OLED 1.3 &rdquo;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AURA :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Aura Lighting Control</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Addressable Gen 2 Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Exclusive Features&nbsp;:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- USB BIOS FlashBack&trade;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- AI Suite 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Ai Charger</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Pre-mounted I/O Shield</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS NODE: hardware control interface</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- BIOS FlashBack&trade;&nbsp;Button</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS EZ DIY :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS CrashFree BIOS 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS EZ Flash 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Q-Design :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-LED (CPU, DRAM, VGA, Boot Device LED)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Slot</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-DIMM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"7\">Back I/O Ports</td>\r\n			<td>1 x LAN (RJ45) port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x USB 3.2 Gen 2 (7 x Type-A+1 x Type-C)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 2.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Optical S/PDIF out</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5 x Audio jack(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Anti-surge 2.5G LAN (RJ45) port</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB BIOS FlashBack&trade;&nbsp;Button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"26\">Internal I/O Ports</td>\r\n			<td>2 x Aura RGB Strip Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x Addressable Gen 2 header(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 3.2 Gen 1(up to 5Gbps) connector(s) support(s) additional 4 USB 3.2 Gen 1 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 2.0 connector(s) support(s) additional 4 USB 2.0 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x M.2 Socket 1 with M key, type 2242/2260/2280/22110 storage devices support(PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 Socket 2 with vertical M key, type 2242/2260/2280/22110 storage devices support(SATA &amp; PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x TPM header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x SATA 6Gb/s connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x CPU Fan connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x CPU OPT Fan connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3 x Chassis Fan connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x AIO_PUMP connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x W_PUMP+ connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x 24-pin EATX Power connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x 8-pin ATX 12V Power connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>0 x Front panel audio connector(s) (AAFP)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Thermal sensor connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Power-on button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Clear CMOS jumper(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Node Connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB BIOS FlashBack&trade;&nbsp;button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x System panel connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB 3.2 Gen 2 front panel connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Speaker connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Chipset Fan Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x VRM_HS_FAN Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>BIOS</td>\r\n			<td>128 Mb Flash ROM, UEFI AMI BIOS, PnP, WfM2.0, SM BIOS 3.2, ACPI 6.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>Support for Windows 10 64-bit</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch Thước&nbsp;</td>\r\n			<td>ATX Form Factor 12 inch x 9.6 inch ( 30.5 cm x 24.4 cm )</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-strix-trx40-e-gaming-3_558f20cb00364d48a44c6b431a0227a1.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-strix-trx40-e-gaming-4_d98d5404f43f42e4b1003ca5617035ea.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-strix-trx40-e-gaming-5_16a097d9bc1f493c8f53ec7723eb49c2.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-strix-trx40-e-gaming-6_e836ada99749476882ad5ec288116801.jpg\" /></p>', 0, 90, 0, 0),
(19, 'ASUS ROG Zenith II Extreme', 'asus-rog-zenith-ii-extreme', 10, 19370000, 0, 2, 1, 0, 0, '- Nhà sản xuất : ASUS\r\n\r\n- Bảo hành : 36 tháng \r\n\r\n- Tình trạng: Mới 100%', '2021-06-23__gearvn-rog-zenith-ii-extreme-233-6ff3684c83474b5185c30a0ada243e84.jpg', 'ASUS ROG Zenith II Extreme', NULL, '2021-06-23 04:42:36', NULL, 'ASUS ROG Zenith II Extreme', '<p><strong>Th&ocirc;ng số kỹ thuật&nbsp;</strong></p>\r\n\r\n<table border=\"3\" cellpadding=\"3\" cellspacing=\"3\" style=\"width:900px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;CPU</td>\r\n			<td>&nbsp;AMD Socket sTRX4 for 3rd Gen AMD Ryzen&trade; Threadripper&trade; Series Desktop Processors<br />\r\n			&nbsp;Refer to www.asus.com for CPU support list</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Chipset</td>\r\n			<td>&nbsp;AMD TRX40</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">&nbsp; Bộ nhớ\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;8 x DIMM, Max. 256GB, DDR4 3200/2933/2800/2666/2400/2133 MHz ECC and non-ECC, Un-buffered&nbsp; &nbsp;Memory</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">&nbsp; Multi-GPU Support</td>\r\n			<td>&nbsp;Supports NVIDIA&reg; 2-Way SLI&reg; Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Supports AMD 2-Way CrossFireX Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">&nbsp; Expansion Slots</td>\r\n			<td>&nbsp;3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;4 x PCIe 4.0 (x16, x16/x16, x16/x8/x16, x16/x8/x16/x8)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"10\">&nbsp; Storage</td>\r\n			<td>&nbsp;3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;1 x ROG DIMM.2 Module supports 2 M.2 Socket 3 , with M key, type 2242/2260/2280/22110 storage&nbsp; &nbsp;devices support(SATA &amp; PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;2 x M.2 Socket 3, with M Key, type 2242/2260/2280 (PCIe 4.0 x4 mode)*1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;3rd&nbsp;Gen AMD Ryzen&trade;&nbsp;Threadripper&trade;&nbsp;Series Desktop processors :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;1 x M.2 Socket 3, with M Key, type 2242/2260/2280 (PCIe 4.0 x4/x2 mode)*2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Support Raid 0, 1, 10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;4 x SATA 6Gb/s port(s),</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;ASMedia&reg; SATA 6Gb/s controller :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;4 x SATA 6Gb/s port(s),</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\">&nbsp; LAN</td>\r\n			<td>&nbsp;Intel&reg; I211-AT, 1 x Gigabit LAN Controller(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Aquantia AQC-107 10G</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Anti-surge LANGuard</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;ROG GameFirst V Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"5\">&nbsp; Wireless Data Network</td>\r\n			<td>&nbsp;Intel&reg; Wi-Fi 6 AX200</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Wi-Fi 802.11 ax, Bluetooth&reg; 5.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Supports dual band frequency 2.4/5 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Supports 2x2 MU-MIMO</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Supports channel bandwidth: HT20/HT40/HT80/HT160. Up to 1.73Gbps transfer speed</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"11\">Audio</td>\r\n			<td>ROG SupremeFX 8-Channel High Definition Audio CODEC S1220</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Impedance sense for front and rear headphone outputs</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Supports : Jack-detection, Multi-streaming, Front Panel MIC Jack-retasking</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- High quality 120 dB SNR stereo playback output 108 dB SNR recording input</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ESS&reg; ESS9018Q2C</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Audio Feature :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- SupremeFX Shielding&trade; Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Studio III + Sonic Studio Virtual Mixer</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- DTS&reg; Sound Unbound</td>\r\n		</tr>\r\n		<tr>\r\n			<td>LED-illuminated design - Brighten up your build with the gorgeous illuminated audio trace path.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Radar III</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"12\">USB Ports</td>\r\n			<td>3rd Gen AMD Ryzen&trade; Threadripper&trade; Processors :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 2 port(s) (4 at back panel, red)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 3.2 Gen 2 front panel connector port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3 x USB 3.2 Gen 2 port(s) (3 at back panel, red, 2 x Type-A+1 x Type-C)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AMD TRX40 chipset :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3 x USB 2.0 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASMedia&reg; USB 3.2 Gen 1 controller :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x USB 3.2 Gen 1 port(s) (4 at back panel, blue)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASMedia&reg; USB 3.2 Gen2x2 controller :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB 3.2 Gen 2x2 (up to 20Gbps) port(s) (1 at back panel, , Type-C)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"7\">ROG Exclusive Features</td>\r\n			<td>ROG Exclusive Software</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- RAMCache III</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- CPU-Z</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- GameFirst V</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Studio III + Sonic Studio Link</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Sonic Radar III</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Overwolf</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"30\">Special Features</td>\r\n			<td>ASUS Dual Intelligent Processors 5-Way Optimization by Dual Intelligent Processors 5 :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- 5-Way Optimization tuning key perfectly consolidates TPU, EPU, DIGI+ VRM, Fan Expert 4, and Turbo App</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gamer&#39;s Guardian:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- DRAM Overcurrent Protection</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- 10K Black Metallic Capacitors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- DIGI+ VRM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- SafeSlot</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ESD Guards on LAN, Audio,and USB ports</td>\r\n		</tr>\r\n		<tr>\r\n			<td>LiveDash OLED 1.77 &rdquo;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AURA :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Aura Lighting Control</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Aura RGB Strip Headers</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Addressable Gen 2 Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Exclusive Features&nbsp;:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- AI Suite 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Ai Charger+</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Pre-mounted I/O Shield</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS EZ Flash 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS C.P.R.(CPU Parameter Recall)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- BIOS FlashBack&trade;&nbsp;Button</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- Clear CMOS Button</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ASUS Q-Design :</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Code</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-LED (CPU, DRAM, VGA, Boot Device LED, HDD LED)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Slot</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-DIMM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>- ASUS Q-Connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Digi+VRM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MemOK! II</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Armoury Crate</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"9\">Back I/O Ports</td>\r\n			<td>1 x LAN (RJ45) port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB 3.2 Gen 2x2 (up to 20Gbps) ports (Type-C)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4 x USB 3.2 Gen 1 blue</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5 x USB 3.2 Gen 2 (red) (3 x Type-A+1 x Type-C)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Optical S/PDIF out</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Clear CMOS button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5 x LED-illuminated audio jacks</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Aquantia AQC-107 10G LAN port</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x USB BIOS FlashBack&trade;&nbsp;Button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"39\">Internal I/O Ports</td>\r\n			<td>2 x Aura RGB Strip Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x Addressable Gen 2 header(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 3.2 Gen 1(up to 5Gbps) connector(s) support(s) additional 4 USB 3.2 Gen 1 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 2.0 connector(s) support(s) additional 3 USB 2.0 port(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 Socket 3 with M key, type 2242/2260/2280 storage devices(support PCIe 4.0 x4 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 Socket 3 with M key, type 2242/2260/2280 storage devices(support PCIe 4.0 x4/x2 mode)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x TPM header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8 x SATA 6Gb/s connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x CPU Fan connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x CPU OPT Fan connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x Chassis Fan connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x H_AMP fan connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x W_PUMP+ connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x WB_SENSOR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x 6-pin EATX 12 V Power connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x 24-pin EATX Power connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x 8-pin EATX 12V Power connectors</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x 4-pin EZ_PLUG Power connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Front panel audio connector(s) (AAFP)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7 x ProbeIt Measurement Points</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x BIOS Switch button(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Node Connector(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x LN2 Mode jumper(s)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Safe Boot button</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x ReTry button</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x W_IN header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x W_OUT header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x W_FLOW header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 x USB 3.2 Gen 2 front panel connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Speaker connector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x DIMM.2 Slot supports 2 M.2 drives (2242-22110)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x RSVD Switch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Start button</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x FlexKey button</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x FS Mode switch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2_3 cold storage Switch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x Chipset Fan Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x VRM_HS_FAN Header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1 x M.2 socket pre-installed with a Wi-Fi/Bluetooth module</td>\r\n		</tr>\r\n		<tr>\r\n			<td>BIOS</td>\r\n			<td>2 x 128 Mb Flash ROM, UEFI AMI BIOS, PnP, WfM2.0, SM BIOS 3.2, ACPI 6.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>Support for Windows 10 64-bit</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch Thước&nbsp;</td>\r\n			<td>Extended ATX Form Factor 12.2 inch x 10.9 inch ( 31 cm x 27.7 cm )</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-zenith-ii-extreme-222jpg_b43585e106924656937cc6efcf8b11c6.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-zenith-ii-extreme-2330_314d7f254a7c4f0486c508c0eb227726.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-zenith-ii-extreme-22222jpg_0a35a4cb700244bc88d7e1a8ae8c7081.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-rog-zenith-ii-extreme-2222222jpg_8e4a5646d97f445187180d42725cdd62.jpg\" /></p>', 0, 90, 0, 0),
(20, 'GIGABYTE Z590 UD (rev. 1.0)', 'gigabyte-z590-ud-rev-10', 10, 4890000, 0, 0, 1, 0, 0, 'Thông tin chung:\r\n\r\nHãng sản xuất: Gigabyte \r\nTình trạng: Mới\r\nBảo hành: 36 Tháng', '2021-06-23__z590-ud-01-a0c566d0fc6c42cf98d7fcaaa0c5cf6c.png', 'GIGABYTE Z590 UD (rev. 1.0)', NULL, '2021-06-23 05:08:51', '2021-06-23 05:08:51', 'GIGABYTE Z590 UD (rev. 1.0)', '<h2>Mainboard&nbsp;GIGABYTE Z590 UD (rev. 1.0)</h2>\r\n\r\n<p><strong>Th&ocirc;ng số kỹ thuật:</strong></p>\r\n\r\n<table border=\"3\" cellpadding=\"3\" cellspacing=\"3\" id=\"tblGeneralAttribute\">\r\n	<tbody>\r\n		<tr>\r\n			<td>H&atilde;ng sản xuất:</td>\r\n			<td>GIGABYTE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>Z590 UD</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://gearvn.com/collections/cpu-bo-vi-xu-ly\" title=\"CPU\">CPU</a>:</td>\r\n			<td>\r\n			<p>11th Generation Intel<sup>&reg;</sup>&nbsp;<a href=\"https://gearvn.com/products/intel-core-i9-10900k\" title=\"Core i9\">Core i9</a>&nbsp;processors / Intel<sup>&reg;</sup>&nbsp;Core i7 processors / Intel<sup>&reg;</sup>&nbsp;Core&trade; i5 processors</p>\r\n\r\n			<p>10th Generation Intel<sup>&reg;</sup>&nbsp;Core i9 processors / Intel<sup>&reg;</sup>&nbsp;<a href=\"https://gearvn.com/products/intel-core-i7-10700k\" title=\"Core i7\">Core i7</a>&nbsp;processors / Intel<sup>&reg;</sup>&nbsp;Core&trade; i5 processors / Intel<sup>&reg;</sup>&nbsp;Core&trade; i3 processors/ Intel<sup>&reg;</sup>&nbsp;Pentium<sup>&reg;</sup>&nbsp;processors / Intel<sup>&reg;</sup>&nbsp;Celeron<sup>&reg;</sup>&nbsp;processors*<br />\r\n			&nbsp;</p>\r\n\r\n			<p>L3 cache varies with CPU</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset:</td>\r\n			<td>Intel Z590 Express Chipset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Bộ nhớ:</p>\r\n			</td>\r\n			<td>\r\n			<ul>\r\n				<li>11th Generation Intel&reg; Core&trade; i9/i7/i5 processors: Support for DDR4 3200/3000/2933/2666/2400/2133 MHz memory modules</li>\r\n				<li>10th Generation Intel&reg; Core&trade; i9/i7 processors: Support for DDR4 2933/2666/2400/2133 MHz memory modules</li>\r\n				<li>10th Generation Intel&reg; Core&trade; i5/i3/Pentium&reg;/Celeron&reg; processors: Support for DDR4 2666/2400/2133 MHz memory modules</li>\r\n				<li>4 x DDR4 DIMM sockets supporting up to 128 GB (32 GB single DIMM capacity) of system memory</li>\r\n				<li>Dual channel memory architecture</li>\r\n				<li>Support for ECC Un-buffered DIMM 1Rx8/2Rx8 memory modules (operate in non-ECC mode)</li>\r\n				<li>Support for non-ECC Un-buffered DIMM 1Rx8/2Rx8/1Rx16 memory modules</li>\r\n				<li>Support for Extreme Memory Profile (XMP) memory modules</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><a href=\"https://gearvn.com/collections/vga-card-man-hinh\" title=\"Card đồ họa\">Card đồ họa</a>&nbsp;t&iacute;ch hợp:</p>\r\n			</td>\r\n			<td>\r\n			<p>Integrated Graphics Processor-Intel<sup>&reg;</sup>&nbsp;HD Graphics support:</p>\r\n\r\n			<p>1 x DisplayPort, supporting a maximum resolution of 4096x2304@60 Hz * Support for DisplayPort 1.2 version and HDCP 2.3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&Acirc;m thanh:</p>\r\n			</td>\r\n			<td>\r\n			<p>Realtek&reg; audio CODEC</p>\r\n\r\n			<p>High Definition Audio</p>\r\n\r\n			<p>2/4/5.1/7.1-channel</p>\r\n\r\n			<p>Support for S/PDIF Out</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>LAN:</td>\r\n			<td>Realtek 2.5GbE LAN chip (2.5 Gbit/1 Gbit/100 Mbit)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Khe cắm mở rộng:</p>\r\n			</td>\r\n			<td>\r\n			<p>1 x PCI Express x16 slot, running at x16 (PCIEX16)</p>\r\n\r\n			<p>1 x PCI Express x16 slot, running at x4 (PCIEX4)</p>\r\n\r\n			<p>2 x PCI Express x1 slots (The PCIEX4 and PCIEX1 slots conform to PCI Express 3.0 standard.)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ đa card đồ họa:</td>\r\n			<td>Support for AMD Quad-GPU CrossFire&trade; and 2-Way AMD CrossFire&trade; technologies</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Giao diện lưu trữ:</p>\r\n			</td>\r\n			<td><strong>CPU:</strong>\r\n			<ul>\r\n				<li>1 x M.2 connector (Socket 3, M key, type 2260/2280/22110 PCIe 4.0 x4 SSD support) (M2P_CPU) (Note)</li>\r\n			</ul>\r\n			<strong>Chipset:</strong>\r\n\r\n			<ul>\r\n				<li>1 x M.2 connector (Socket 3, M key, type 2260/2280/22110 SATA and PCIe 3.0 x4/x2 SSD support) (M2A_SB)</li>\r\n				<li>1 x M.2 connector (Socket 3, M key, type 2260/2280/22110 PCIe 3.0 x4/x2 SSD support) (M2M_SB)</li>\r\n			</ul>\r\n			5 x SATA 6Gb/s connectors<br />\r\n			Support for RAID 0, RAID 1, RAID 5, and RAID 10<br />\r\n			Intel<sup>&reg;</sup>&nbsp;Optane&trade; Memory Ready</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>USB:</p>\r\n			</td>\r\n			<td><strong>Chipset:</strong>\r\n			<ul>\r\n				<li>2 x USB 3.2 Gen 2 Type-A ports (red) on the back panel</li>\r\n				<li>6 x USB 3.2 Gen 1 ports (4 ports on the back panel, 2 ports available through the internal USB header)</li>\r\n				<li>1 x USB Type-C<sup>&reg;</sup>&nbsp;port with USB 3.2 Gen 1 support, available through the internal USB header</li>\r\n			</ul>\r\n			<strong>Chipset+2 USB 2.0 Hubs:</strong>\r\n\r\n			<ul>\r\n				<li>6 x USB 2.0/1.1 ports (2 ports on the back panel, 4 ports available through the internal USB headers)</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Kết nối I/O b&ecirc;n trong:</p>\r\n			</td>\r\n			<td>\r\n			<p>1 x 24-pin ATX main power connector</p>\r\n\r\n			<p>1 x 8-pin ATX 12V power connector</p>\r\n\r\n			<p>1 x 4-pin ATX 12V power connector</p>\r\n\r\n			<p>1 x CPU fan header</p>\r\n\r\n			<p>4 x system fan headers</p>\r\n\r\n			<p>2 x addressable LED strip headers</p>\r\n\r\n			<p>2 x RGB LED strip headers</p>\r\n\r\n			<p>1 x Q-Flash Plus button</p>\r\n\r\n			<p>5 x SATA 6Gb/s connectors</p>\r\n\r\n			<p>3 x M.2 Socket 3 connectors</p>\r\n\r\n			<p>1 x front panel header</p>\r\n\r\n			<p>1 x front panel audio header</p>\r\n\r\n			<p>1 x S/PDIF Out header</p>\r\n\r\n			<p>1 x USB 3.2 Gen 1 header 1</p>\r\n\r\n			<p>x USB Type-C&reg; header, with USB 3.2 Gen 1 support</p>\r\n\r\n			<p>2 x USB 2.0/1.1 headers</p>\r\n\r\n			<p>1 x Trusted Platform Module header (For the GC-TPM2.0 SPI/GC-TPM2.0 SPI 2.0 module only)</p>\r\n\r\n			<p>2 x Thunderbolt&trade; add-in card connectors</p>\r\n\r\n			<p>1 x serial port header</p>\r\n\r\n			<p>1 x Clear CMOS jumper</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Kết nối bảng ph&iacute;a sau:</p>\r\n			</td>\r\n			<td>\r\n			<p>1 x PS/2 keyboard/mouse port</p>\r\n\r\n			<p>1 x DisplayPort</p>\r\n\r\n			<p>2 x USB 3.2 Gen 2 Type-A ports (red)</p>\r\n\r\n			<p>4 x USB 3.2 Gen 1 ports</p>\r\n\r\n			<p>2 x USB 2.0/1.1 ports</p>\r\n\r\n			<p>1 x RJ-45 port</p>\r\n\r\n			<p>3 x audio jacks</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Điều khiển I/O:</td>\r\n			<td>iTE&reg; I/O Controller Chip</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Theo d&otilde;i phần cứng:</td>\r\n			<td>Voltage detection Temperature detection Fan speed detection Fan fail warning Fan speed control</td>\r\n		</tr>\r\n		<tr>\r\n			<td>BIOS:</td>\r\n			<td>1 x 256 Mbit flash Use of licensed AMI UEFI BIOS PnP 1.0a, DMI 2.7, WfM 2.0, SM BIOS 2.7, ACPI 5.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>T&iacute;nh năng duy nhất:</p>\r\n			</td>\r\n			<td>Support for APP Center * Available applications in APP Center may vary by motherboard model. Supported functions of each application may also vary depending on motherboard specifications. @BIOS EasyTune Fast Boot Game Boost ON/OFF Charge RGB Fusion Smart Backup System Information Viewer Support for Q-Flash Plus Support for Q-Flash Support for Xpress Install</td>\r\n		</tr>\r\n		<tr>\r\n			<td>G&oacute;i phần mềm:</td>\r\n			<td>Norton&reg; Internet Security (OEM version) Realtek&reg; 8125 Gaming LAN Bandwidth Control Utility</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh:</td>\r\n			<td>Support for&nbsp;<a href=\"https://gearvn.com/collections/windows-10-pro\" title=\"Windows 10 64-bit\">Windows 10 64-bit</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ số khu&ocirc;n:</td>\r\n			<td>\r\n			<p>ATX Form Factor</p>\r\n\r\n			<p>30.5cm x 24.4cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lưu &yacute;:</td>\r\n			<td>Supported by 11th Generation processors only.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Đ&aacute;nh gi&aacute; chi tiết&nbsp;Mainboard&nbsp;GIGABYTE Z590 UD (rev. 1.0)</h2>\r\n\r\n<p>GIGABYTE Z590 UD (rev. 1.0) l&agrave; một trong những d&ograve;ng motherboard mới nhất mang đến nguồn năng lượng v&agrave; hiệu quả cao hơn cho CPU với hiệu suất tốt nhất. Đảm bảo được sự ổn định dưới tần số cao v&agrave; tải nặng.&nbsp;</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-gigabyte-z590-ud-rev-1-0_b7d7e7f2e34748ddabaa682af156f53f.png\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GIGABYTE Z590 UD sử dụng chipset&nbsp;Intel&nbsp;<a href=\"https://gearvn.com/collections/mainboard-z590\" title=\"Z590\">Z590</a>&nbsp;Express hỗ trợ v&agrave; n&acirc;ng cấp mang đến&nbsp;nhiều ưu điểm khi tăng gấp đ&ocirc;i băng th&ocirc;ng cho CPU, cho ph&eacute;p hỗ trợ nhiều th&agrave;nh phần phần cứng hơn để tận dụng tối đa hiệu năng.&nbsp;</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-gigabyte-z590-ud-rev-1-0-1_49dff0922e1c4aa6816277e0ed3fed83.png\" style=\"height:767px; width:635px\" /></p>\r\n\r\n<p>GIGABYTE cung cấp giải ph&aacute;p tản nhiệt cho c&aacute;c thiết bị&nbsp;<a href=\"https://gearvn.com/collections/ssd-o-cung-the-ran\" title=\"SSD\">SSD</a>&nbsp;M.2&nbsp;ngăn chặn việc điều tiết v&agrave; tắc nghẽn.&nbsp;Smart Fan 6 với t&iacute;nh năng l&agrave;m m&aacute;t độc đ&aacute;o đảm bảo&nbsp;<a href=\"https://gearvn.com/pages/pc-gvn\" title=\"PC gaming\">PC gaming</a>&nbsp;v&agrave; duy tr&igrave; hiệu suất hoạt động.&nbsp;Nhiều đầu cắm quạt c&oacute; thể hỗ trợ quạt v&agrave; m&aacute;y bơm PWM / DC.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-gigabyte-z590-ud-rev-1-0-2_de09af9ca4b4450c97791466f7ece10f.png\" style=\"height:693px; width:693px\" /></p>\r\n\r\n<p>RGB Fusion 2.0 cung cấp cho người d&ugrave;ng t&ugrave;y chọn để điều khiển dải đ&egrave;n RGB tr&ecirc;n bo mạch v&agrave; đ&egrave;n LED. Người d&ugrave;ng c&oacute; thể t&ugrave;y chỉnh hệ thống LED để đồng bộ với to&agrave;n bộ hệ thống PC th&ocirc;ng qua phần mềm một c&aacute;ch nhanh ch&oacute;ng v&agrave; tiện lợi với nhiều chế độ LED kh&aacute;c nhau.</p>', 0, 90, 0, 0);
INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_description`, `pro_avatar`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_title_seo`, `pro_content`, `pro_pay`, `pro_number`, `pro_total_rating`, `pro_total_number`) VALUES
(21, 'MSI Z590 PRO WIFI', 'msi-z590-pro-wifi', 10, 4990000, 0, 15, 1, 0, 0, 'Thông tin chung:\r\n\r\nHãng sản xuất: MSI\r\nBảo hành: 36 Tháng', '2021-06-23__msi-z590-pro-wifi-box-c17df5c6dc2047b9b28a318c2e73bc35.png', 'MSI Z590 PRO WIFI', NULL, '2021-06-23 05:09:11', '2021-06-23 05:09:11', 'MSI Z590 PRO WIFI', '<h2>Bo mạch chủ&nbsp;MSI Z590 PRO WIFI</h2>\r\n\r\n<p><strong>Th&ocirc;ng số kỹ thuật</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"3\" cellspacing=\"0\" id=\"tblGeneralAttribute\">\r\n	<tbody>\r\n		<tr>\r\n			<td>CPU (MAX SUPPORT)</td>\r\n			<td>i9</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SOCKET</td>\r\n			<td>1200</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CHIPSET</td>\r\n			<td>Intel&reg; Z590 Chipset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DDR4 MEMORY</td>\r\n			<td>5333(OC) / 5200(OC) / 5000(OC)/ 4800(OC)/ 4600(OC)/ 4533(OC)/ 4400(OC)/ 4300(OC)/ 4266(OC)/ 4200(OC)/ 4133(OC)/ 4000(OC)/ 3866(OC)/ 3733(OC)/ 3600(OC)/ 3466(OC)/ 3400(OC)/ 3333(OC)/ 3300(OC)/ 3200(OC)/ 3000(OC)/ 2933(JEDEC)/ 2666(JEDEC)/ 2400(JEDEC)/ 2133(JEDEC) MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MEMORY CHANNEL</td>\r\n			<td>Dual</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DIMM SLOTS</td>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MAX MEMORY (GB)</td>\r\n			<td>128</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PCI-E X16</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PCI-E GEN</td>\r\n			<td>Gen4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PCI-E X1</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SATAIII</td>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M.2 SLOT</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAID</td>\r\n			<td>0/1/5/10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TPM (HEADER)</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>LAN</td>\r\n			<td>1x Intel&reg; I225-V 2.5Gbps LAN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>WIFI &amp; BLUETOOTH</td>\r\n			<td>Intel&reg; Wi-Fi 6E AX210</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB 3.2 PORTS (FRONT)</td>\r\n			<td>1(Gen 2, Type C), 4(Gen 1, Type A)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB 3.2 PORTS (REAR)</td>\r\n			<td>1(Gen 2x2, Type C), 1(Gen 2, Type A), 2(Gen 1, Type A)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB 2.0 PORTS (FRONT)</td>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB 2.0 PORTS (REAR)</td>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SERIAL PORTS(FRONT)</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AUDIO PORTS (REAR)</td>\r\n			<td>Realtek&reg; ALC897 Codec</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DISPLAYPORT</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HDMI</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DIRECTX</td>\r\n			<td>12</td>\r\n		</tr>\r\n		<tr>\r\n			<td>FORM FACTOR</td>\r\n			<td>ATX</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CROSSFIRE</td>\r\n			<td>Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>OPERATING SYSTEM</td>\r\n			<td>Support for Windows&reg; 10 64-bit</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Đ&aacute;nh gi&aacute; chi tiết bo mạch chủ&nbsp;MSI Z590 PRO WIFI</h2>\r\n\r\n<p><a href=\"https://gearvn.com/collections/mainboard-bo-mach-chu\">Bo mạch chủ</a>&nbsp;MSI Z590 PRO WIFI l&agrave; d&ograve;ng PRO gi&uacute;p người sử dụng c&oacute; được trải nghiệm hiệu quả v&agrave; năng suất cao hơn. Kh&ocirc;ng chỉ c&oacute; thể d&ograve;ng mainboard n&agrave;y c&ograve;n c&oacute; độ bền cao gi&uacute;p tăng cường tuổi thọ của thiết bị cũng như c&aacute;c linh kiện kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Bo mạch chủ MSI Z590 PRO WIFI\" src=\"https://file.hstatic.net/1000026716/file/msi-z590-pro-wifi_e0b88ef72cb74e8ab577ec0170db1ad1.jpg\" /></p>\r\n\r\n<h3><strong>Tốc độ truyền tải cao</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>&nbsp;- Giải ph&aacute;p mạng 2.5G:</strong>&nbsp;Với mạng LAN 2.5G cao cấp mang lại trỉa nghiệm mạng tốt hơn</li>\r\n	<li><strong>&nbsp;- Lightning USB 20G:</strong>&nbsp;Cổng USB 3.2 Gen 2x2 t&iacute;nh hợp, cung cấp tốc độ truyền 20Gbps, nhanh hơn 4 lần so với USB 3.2 Gen 1</li>\r\n	<li><strong>&nbsp;- Intel Wifi 6E:</strong>&nbsp;Giải ph&aacute;p kh&ocirc;ng d&acirc;y mới nhất hỗ trợ MU-MIMO v&agrave; c&ocirc;ng nghệ m&agrave;u BSS, mang lại tốc độ l&ecirc;n đến 2400Mbps</li>\r\n	<li><strong>&nbsp;- Tăng tốc DDR4:</strong>&nbsp;Mạch DDR được c&aacute;ch ly ho&agrave;n to&agrave;n để cung cấp tin hiệu dữ liệu thuần t&uacute;y cho hiệu năng &eacute;p xung v&agrave; chơi game tốt nhất</li>\r\n	<li><strong>&nbsp;- Giải ph&aacute;p Lightning Gen 4:</strong>&nbsp;Giải ph&aacute;p Gen 5 PCI-E v&agrave; M.2 mới nhất với bằng th&ocirc;ng l&ecirc;n đến 64GB / s cho tốc độ truyền tối đa</li>\r\n</ul>\r\n\r\n<p><img alt=\"Bo mạch chủ MSI Z590 PRO WIFI\" src=\"https://file.hstatic.net/1000026716/file/msi-z590-pro-wifi-1_006e792bc1584be39e17bbb167a52e7b.jpg\" /></p>\r\n\r\n<h3><strong>T&iacute;nh năng độc quyền</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>&nbsp;- C&ocirc;ng nghệ Core Boost:</strong>&nbsp;Kết hợp c&aacute;c đầu nối nguồn 8 + 5 ch&acirc;n v&agrave; thiết kế bố cục cao cấp, sẵn s&agrave;ng để giải ph&oacute;ng hiệu suất tối đa</li>\r\n	<li><strong>&nbsp;- PCB 6 lớp với đồng d&agrave;y 2oz:</strong>&nbsp;PCB 6 lớp với đồng d&agrave;y 2oz mang lại hiệu suất cao hơn v&agrave; hệ thống ổn định l&acirc;u d&agrave;i m&agrave; kh&ocirc;ng c&oacute; bất kỳ sự thỏa hiệp n&agrave;o</li>\r\n	<li><strong>&nbsp;- PWN kỹ thuật số:</strong>&nbsp;IC nguồn kỹ thuật linh kiện chất lượng cao nhất đảm bảo hệ thống của bạn chạy trơn tru trong những điều kiện khắc nghiệt nhất</li>\r\n	<li><strong>&nbsp;- Gi&aacute;p th&eacute;p PCI-E:</strong>&nbsp;Bảo vệ card VGA khỏi bị bẻ cong v&agrave; EMI để c&oacute; hiệu suất độ ổn định v&agrave; sức mạnh tốt hơn</li>\r\n</ul>\r\n\r\n<p><img alt=\"Bo mạch chủ MSI Z590 PRO WIFI\" src=\"https://file.hstatic.net/1000026716/file/msi-z590-pro-wifi-2_3c25a8158f844faab927082846c70ca3.jpg\" /></p>\r\n\r\n<h3><strong>Giải ph&aacute;p tản nhiệt cao cấp</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>&nbsp;- Tản nhiệt mở rộng:</strong>&nbsp;MSI mở rộng PWM v&agrave; thiết kế mạch n&acirc;ng cao đảm bảo cho c&aacute;c bộ vi xử l&yacute; cao cấp chạy với tốc độ tối đa</li>\r\n	<li><strong>&nbsp;- M.2 Shield Frozr:</strong>&nbsp;Tăng cường giải ph&aacute;p tản nhiệt M.2 t&iacute;ch hợp. Giữ an to&agrave;n cho ổ&nbsp;<a href=\"https://gearvn.com/collections/ssd-o-cung-the-ran\">SSD</a>&nbsp;M.2 đồng thời gi&uacute;p ch&uacute;ng chạy nhanh hơn</li>\r\n	<li><strong>&nbsp;- Hỗ trợ m&aacute;y bơm:</strong>&nbsp;Kiểm so&aacute;t tốc độ m&aacute;y bơm l&agrave;m m&aacute;t nước để kiểm so&aacute;t d&ograve;ng chảy v&agrave; tiếng ồn tốt nhất</li>\r\n</ul>\r\n\r\n<p>L&agrave; một trong những sản phẩm mới nhất của&nbsp;<a href=\"https://gearvn.com/collections/mainboard-z590\">Mainboard Z590</a>&nbsp;vậy n&ecirc;n chất lượng v&agrave; hiệu suất m&agrave; chiếc mainboard n&agrave;y mang lại v&ocirc; c&ugrave;ng lớn. Đ&acirc;y chắc chắn sẽ l&agrave; mẫu sản phẩm l&agrave;m mưa l&agrave;m gi&oacute; tr&ecirc;n thị trường năm 2021.</p>', 0, 90, 0, 0),
(23, 'Mainboard ASROCK B460M Pro4', 'mainboard-asrock-b460m-pro4', 10, 2499000, 0, 10, 1, 0, 0, 'Socket: Socket 1200 hỗ trợ CPU intel thế hệ 10\r\nKích thước: m-ATX\r\nKhe cắm RAM: 4 khe (Tối đa 128GB)', '2021-06-23__32981-b460m-pro4-l1.png', 'Mainboard ASROCK B460M Pro4', NULL, '2021-06-23 06:06:28', NULL, 'Mainboard ASROCK B460M Pro4', '<p>9 thiết kế pha điện với c&aacute;c th&agrave;nh phần mạnh mẽ v&agrave; cung cấp năng lượng ho&agrave;n to&agrave;n trơn tru cho CPU.&nbsp;Cung cấp khả năng &eacute;p xung v&ocirc; song v&agrave; hiệu năng n&acirc;ng cao với nhiệt độ thấp nhất cho c&aacute;c game thủ cao cấp.</p>\r\n\r\n<p>Cuộn cảm 50A cao cấp của ASRock c&oacute; hiệu quả l&agrave;m cho d&ograve;ng b&atilde;o h&ograve;a tốt hơn đến ba lần, do đ&oacute; cung cấp điện &aacute;p Vcore cải tiến v&agrave; cải tiến cho bo mạch chủ.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://www.asrock.com/mb/features/PowerPhase950A-B460%20Pro4.jpg\" style=\"height:231px; width:493px\" /></p>\r\n\r\n<p>ASRock cung cấp một điều khiển rất to&agrave;n diện để thực hiện c&aacute;c đ&egrave;n LED RGB t&iacute;ch hợp hoặc c&aacute;c dải đ&egrave;n LED được kết nối, quạt CPU, bộ l&agrave;m m&aacute;t, khung gầm v&agrave; bất kỳ thiết bị RGB n&agrave;o.&nbsp;C&aacute;c thiết bị cũng c&oacute; thể được đồng bộ h&oacute;a tr&ecirc;n c&aacute;c&nbsp;phụ kiện&nbsp;được chứng nhận Polychrom RGB Sync&nbsp;.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://www.anphatpc.com.vn/media/product/32981_b460m_pro4_l4_.png\" style=\"height:463px; width:556px\" /></p>\r\n\r\n<p>Intel&nbsp;<sup>&reg;</sup>&nbsp;LAN cung cấp hiệu suất th&ocirc;ng lượng tốt nhất, sử dụng CPU thấp hơn, tăng cường độ ổn định v&agrave; c&oacute; thể mang lại trải nghiệm mạng tối ưu&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.asrock.com/mb/features/LANx1-Intel.jpg\" style=\"height:171px; width:548px\" /></p>\r\n\r\n<p>Bảo vệ SSD M.2 tốt rất quan trọng đối với tuổi thọ v&agrave; độ ổn định.&nbsp;ASRock cung cấp giải ph&aacute;p &aacute;o gi&aacute;p M.2 ho&agrave;n chỉnh gi&uacute;p SSD chạy ở nhiệt độ thấp nhất định.</p>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"https://www.asrock.com/mb/features/DualM2-SSD-B460%20Pro4.jpg\" style=\"height:268px; width:396px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khe cắm th&eacute;p PCI-E ti&ecirc;n tiến được đ&oacute;ng g&oacute;i với vỏ bọc chắc chắn ngăn chặn mọi nhiễu t&iacute;n hiệu với card đồ họa.&nbsp;</p>\r\n\r\n<p>B&ecirc;n cạnh cổng LAN tr&ecirc;n bo mạch, người d&ugrave;ng cũng c&oacute; thể chọn kết nối kh&ocirc;ng d&acirc;y 802.11ac theo khe M.2 (Kh&oacute;a E).<img alt=\"\" src=\"https://www.asrock.com/mb/features/M.2%20Key%20For%20WiFi.jpg\" style=\"height:179px; width:528px\" /></p>', 0, 90, 0, 0),
(24, 'Intel Pentium Gold G5420 / 4M / 3.8GHz / 2 nhân 4 luồng', 'intel-pentium-gold-g5420-4m-38ghz-2-nhan-4-luong', 11, 1890000, 0, 5, 1, 0, 0, '-Nhà sản xuất : Intel\r\n-Tình trạng : NEW - 100%\r\n\r\n-Bảo hành : 36 tháng', '2021-06-23__intel-pentium-gold-g5420-gearvn-grande-ae70249cf9d74102874227b427ce3a53.jpg', 'Intel Pentium Gold G5420 / 4M / 3.8GHz / 2 nhân 4 luồng', NULL, '2021-06-23 06:18:08', NULL, 'Intel Pentium Gold G5420 / 4M / 3.8GHz / 2 nhân 4 luồng', '<p><strong>T&iacute;nh năng nổi bật:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"4\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>&nbsp;Socket</strong></td>\r\n			<td>\r\n			<p>&nbsp;&nbsp;<strong>LGA1151v2</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Bộ nhớ đệm</strong></td>\r\n			<td>&nbsp; 4MB</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Thuật in</strong></td>\r\n			<td>&nbsp; 14 nm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Số nh&acirc;n (Cores)</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>2</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Số luồng (Threads)</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>4</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Xung cơ bản</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>3.8GHz</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Điện ti&ecirc;u thụ</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>54W</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;RAM tối đa</strong></td>\r\n			<td>&nbsp; 64GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Loại RAM</strong></td>\r\n			<td>&nbsp; DDR4-2400</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Card Onboard&nbsp;</strong></td>\r\n			<td>&nbsp;&nbsp;Intel&reg;&nbsp;<strong>UHD Graphics 610</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 90, 0, 0),
(25, 'Intel Core i5 11400F / 12MB / 2.6GHZ / 6 nhân 12 luồng / LGA 1200', 'intel-core-i5-11400f-12mb-26ghz-6-nhan-12-luong-lga-1200', 11, 5590000, 0, 10, 1, 0, 0, 'Hãng sản xuất: Intel\r\nBảo hành: 36 Tháng', '2021-06-23__10400f-71634928fe5b44f1a956f0e652e65d59.jpg', 'Intel Core i5 11400F / 12MB / 2.6GHZ / 6 nhân 12 luồng / LGA 1200', NULL, '2021-06-23 06:19:35', NULL, 'Intel Core i5 11400F / 12MB / 2.6GHZ / 6 nhân 12 luồng / LGA 1200', '<h2>ntel Core i5-11400F / 12MB / 2.6GHZ / 6 nh&acirc;n 12 luồng / LGA 1200</h2>\r\n\r\n<p><strong>Th&ocirc;ng số kỹ thuật</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"3\" cellspacing=\"0\" id=\"tblGeneralAttribute\">\r\n	<tbody>\r\n		<tr>\r\n			<td>H&atilde;ng sản xuất</td>\r\n			<td>Intel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Socket</td>\r\n			<td>FCLGA1200</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D&ograve;ng CPU</td>\r\n			<td>Core i5</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://gearvn.com/collections/cpu-bo-vi-xu-ly\" title=\"CPU\">CPU</a></td>\r\n			<td>Intel&reg; Core&reg; i5-11400F (Rocket Lake) no GPU</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số nh&acirc;n</td>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số luồng</td>\r\n			<td>12</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ xử l&yacute;</td>\r\n			<td>2.60 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ&nbsp;xử l&yacute; tối đa</td>\r\n			<td>4.40 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Điện năng ti&ecirc;u thụ</td>\r\n			<td>65 W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ CPU</td>\r\n			<td>14 nm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ đệm</td>\r\n			<td>12 MB Intel&reg; Smart Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ hổ trợ tối đa</td>\r\n			<td>128 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại bộ nhớ</td>\r\n			<td>DDR4-3200</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2><strong>Đ&aacute;nh gi&aacute; chi tiết CPU Intel Core i5-11400F</strong></h2>\r\n\r\n<h3><strong>Th&ocirc;ng số kỹ thuật tuyệt vời cho gaming</strong></h3>\r\n\r\n<p><strong>CPU Intel Core i5-11400F</strong>&nbsp;l&agrave;&nbsp;<a href=\"https://gearvn.com/collections/cpu-bo-vi-xu-ly\" title=\"bộ vi xử lý\">bộ vi xử l&yacute;</a>&nbsp;thuộc thế hệ 11 từ nh&agrave; Intel. Được sản xuất dựa tr&ecirc;n tiến tr&igrave;nh 14nm v&agrave; sở hữu cho m&igrave;nh 6 nh&acirc;n 12 luồng cho khả năng xử l&yacute; nhiều t&aacute;c vụ mạnh mẽ trong c&ugrave;ng thời điểm. C&ugrave;ng xung nhịp cơ bản đạt 2.60 GHz v&agrave; turbo boost l&ecirc;n đến 4.40 GHz cho i5-11400F tốc độ c&ugrave;ng hiệu suất xử l&yacute; nhanh ch&oacute;ng, cho d&ugrave; đ&oacute; l&agrave; render video hay chơi game.</p>\r\n\r\n<p><img alt=\"GEARVN.COM - CPU Intel Core i5-11400F\" src=\"https://file.hstatic.net/1000026716/file/gearvn-cpu-intel-core-i5-11400f-03_9790c226d2774b12904c7bf1f1ca5add.jpg\" /></p>\r\n\r\n<h3><strong>Mức ti&ecirc;u thụ điện thấp gi&uacute;p tiết kiệm</strong></h3>\r\n\r\n<p>Intel cho i5-11400F trang bị một mức ti&ecirc;u thụ điện năng kh&aacute; thấp, 65 W. Đi k&egrave;m l&agrave; chiếc quạt tản nhiệt,&nbsp;<a href=\"https://gearvn.com/products/intel-core-i5-11400f\" title=\"CPU Intel Core i5-11400F\">CPU Intel Core i5-11400F</a>&nbsp;vừa c&oacute; khả năng tiết kiệm chi ph&iacute; về điện c&ugrave;ng phần l&agrave;m m&aacute;t. Tuy nhi&ecirc;n bạn vẫn n&ecirc;n c&acirc;n nhắc về việc trang bị th&ecirc;m những&nbsp;<a href=\"https://gearvn.com/collections/tan-nhiet-may-tinh\" title=\"quạt tản nhiệt\">quạt tản nhiệt</a>&nbsp;để hỗ trợ cho khả năng tản nhiệt tốt nhất c&oacute; thể.</p>\r\n\r\n<p><img alt=\"GEARVN.COM - CPU Intel Core i5-11400F\" src=\"https://file.hstatic.net/1000026716/file/gearvn-cpu-intel-core-i5-11400f-01_fd05a5e77de04f6dadd5fc3fad203ba8.jpg\" /></p>\r\n\r\n<h3><strong>Băng th&ocirc;ng RAM lớn hỗ trợ &eacute;p xung</strong></h3>\r\n\r\n<p>CPU Intel Core i5-11400F được trang bị mức RAM được hỗ trợ tăng khoảng 20% từ 2666 MHz l&ecirc;n 3200 MHz khi chạy ở mức mặc định.&nbsp;<a href=\"https://gearvn.com/collections/cpu-11th-gen\" title=\"CPU Gen 11\">CPU Gen 11</a>&nbsp;được trang bị khả năng &eacute;p xung tr&ecirc;n tất cả mainboard sử dụng chipset 500 series như mainboard B560, chưa cần đến&nbsp;<a href=\"https://gearvn.com/collections/mainboard-z590\" title=\"Z590\">Z590</a>.</p>\r\n\r\n<p><img alt=\"GEARVN.COM - CPU Intel Core i5-11400F\" src=\"https://file.hstatic.net/1000026716/file/gearvn-cpu-intel-core-i5-11400f-02_77cbbb6c7b324208aa2f781bae2f912d.jpg\" /></p>', 0, 80, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pi_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pi_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pi_product_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `pi_name`, `pi_slug`, `pi_product_id`, `created_at`, `updated_at`) VALUES
(9, 'gearvn-asus-trx40-pro-3_1f8d114f40dd448586e6d991589bb462.jpg', '2021-06-23__gearvn-asus-trx40-pro-3-1f8d114f40dd448586e6d991589bb462jpg.jpg', 17, '2021-06-23 04:27:02', NULL),
(10, 'gearvn-asus-trx40-pro-4_ece2a5c57f9a407194712a6dadb5a368.jpg', '2021-06-23__gearvn-asus-trx40-pro-4-ece2a5c57f9a407194712a6dadb5a368jpg.jpg', 17, '2021-06-23 04:27:02', NULL),
(11, 'gearvn-asus-trx40-pro-5_83cf1634b0274db99d5b21c948cf8122.jpg', '2021-06-23__gearvn-asus-trx40-pro-5-83cf1634b0274db99d5b21c948cf8122jpg.jpg', 17, '2021-06-23 04:27:02', NULL),
(12, 'gearvn-rog-strix-trx40-e-gaming-9-999_7430f6175bf84828aee2a4a99afe6090.jpg', '2021-06-23__gearvn-rog-strix-trx40-e-gaming-9-999-7430f6175bf84828aee2a4a99afe6090jpg.jpg', 18, '2021-06-23 04:33:19', NULL),
(13, 'gearvn-rog-strix-trx40-e-gaming-9-9109_afe3e850807f4790b719e572443e8bab.jpg', '2021-06-23__gearvn-rog-strix-trx40-e-gaming-9-9109-afe3e850807f4790b719e572443e8babjpg.jpg', 18, '2021-06-23 04:33:19', NULL),
(14, 'gearvn-rog-zenith-ii-extreme-243_98acd3ee753a4b8cb73d6a3e6f159775.jpg', '2021-06-23__gearvn-rog-zenith-ii-extreme-243-98acd3ee753a4b8cb73d6a3e6f159775jpg.jpg', 19, '2021-06-23 04:42:36', NULL),
(15, 'gearvn-rog-zenith-ii-extreme-323_adfe41e758204eae91a5e3c57aa32157.jpg', '2021-06-23__gearvn-rog-zenith-ii-extreme-323-adfe41e758204eae91a5e3c57aa32157jpg.jpg', 19, '2021-06-23 04:42:36', NULL),
(16, 'intel-pentium-gen-10th_3bcbe46bd81f4b06849f8b9c1da4c692.png', '2021-06-23__intel-pentium-gen-10th-3bcbe46bd81f4b06849f8b9c1da4c692png.png', 19, '2021-06-23 04:42:36', NULL),
(17, 'z590_ud_02_4401fab4e87b41e0a0aca97ec0ca7f9b.png', '2021-06-23__z590-ud-02-4401fab4e87b41e0a0aca97ec0ca7f9bpng.png', 20, '2021-06-23 05:02:54', NULL),
(18, 'z590_ud_03_e0417bf8b6a544088cd2ab593c6f4501.png', '2021-06-23__z590-ud-03-e0417bf8b6a544088cd2ab593c6f4501png.png', 20, '2021-06-23 05:02:54', NULL),
(19, 'z590_ud_04_aa8e8d3d972c424f97709728649f59ad.png', '2021-06-23__z590-ud-04-aa8e8d3d972c424f97709728649f59adpng.png', 20, '2021-06-23 05:02:54', NULL),
(20, 'z590_ud_05_49198c6ecac04aa598d4fcd2e0dccb02.png', '2021-06-23__z590-ud-05-49198c6ecac04aa598d4fcd2e0dccb02png.png', 20, '2021-06-23 05:02:54', NULL),
(21, 'msi-z590_pro_wifi-2d_849dc6a593f5440e8718a42913e5b702.png', '2021-06-23__msi-z590-pro-wifi-2d-849dc6a593f5440e8718a42913e5b702png.png', 21, '2021-06-23 05:08:32', NULL),
(23, 'msi-z590_pro_wifi-3d2_16c725b8a1b7457cae05ef27853e66a3.png', '2021-06-23__msi-z590-pro-wifi-3d2-16c725b8a1b7457cae05ef27853e66a3png.png', 21, '2021-06-23 05:08:32', NULL),
(24, 'msi-z590_pro_wifi-3d3_5a2cf270b48648019f09746aefebb77c.png', '2021-06-23__msi-z590-pro-wifi-3d3-5a2cf270b48648019f09746aefebb77cpng.png', 21, '2021-06-23 05:08:32', NULL),
(25, 'msi-z590_pro_wifi-io_f15358c73f79406a906b659792063c01.png', '2021-06-23__msi-z590-pro-wifi-io-f15358c73f79406a906b659792063c01png.png', 21, '2021-06-23 05:08:32', NULL),
(26, 'msi-z590-pro-wifi-accessories_ef828edbdd294bec9764056e370ef775.png', '2021-06-23__msi-z590-pro-wifi-accessories-ef828edbdd294bec9764056e370ef775png.png', 21, '2021-06-23 05:08:32', NULL),
(31, '32981_b460m_pro4_l2_.png', '2021-06-23__32981-b460m-pro4-l2-png.png', 23, '2021-06-23 06:06:28', NULL),
(32, '32981_b460m_pro4_l3_.png', '2021-06-23__32981-b460m-pro4-l3-png.png', 23, '2021-06-23 06:06:28', NULL),
(33, '32981_b460m_pro4_l4_.png', '2021-06-23__32981-b460m-pro4-l4-png.png', 23, '2021-06-23 06:06:28', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ra_product_id` int(10) UNSIGNED NOT NULL,
  `ra_number` tinyint(4) NOT NULL DEFAULT 0,
  `ra_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `ra_product_id`, `ra_number`, `ra_content`, `ra_user_id`, `created_at`, `updated_at`) VALUES
(21, 17, 5, 'Ổn', 5, '2021-06-24 03:28:41', '2021-06-24 03:28:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_banners`
--

CREATE TABLE `slide_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sb_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sb_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_banners`
--

INSERT INTO `slide_banners` (`id`, `sb_img`, `sb_link`, `created_at`, `updated_at`, `sb_status`) VALUES
(1, '2021-06-14__slideshow-1.jpg', 'http://pconline.abc/danh-muc/mainboard-bo-mach-chu-10', '2021-06-14 04:49:08', '2021-06-14 06:01:42', 1),
(2, '2021-06-14__slideshow-2.jpg', 'http://pconline.abc/danh-muc/cpu-vi-xu-ly-11', '2021-06-14 04:49:15', '2021-06-14 05:17:42', 1),
(3, '2021-06-14__slideshow-3.jpg', 'http://pconline.abc/danh-muc/ssd-o-cung-the-ran-13', '2021-06-14 04:49:25', '2021-06-14 05:17:33', 1),
(4, '2021-06-14__slideshow-4.jpg', 'http://pconline.abc/danh-muc/hdd-o-cung-14', '2021-06-14 04:49:34', '2021-06-14 05:17:56', 1),
(5, '2021-06-14__slideshow-5.jpg', 'http://pconline.abc/danh-muc/psu-nguon-may-tinh-15', '2021-06-14 04:49:41', '2021-06-14 06:01:40', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `tr_total` int(11) NOT NULL DEFAULT 0,
  `tr_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tr_payment` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`, `tr_payment`) VALUES
(107, 5, 12490000, 'Giao trong giờ hành chính', '47 đường 783 tạ quang bửu p4', '0981805990', 1, '2021-06-23 04:44:09', '2021-07-04 20:31:48', 1),
(108, 5, 12490000, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 2, '2021-06-29 20:58:37', '2021-07-05 05:21:03', 0),
(109, 5, 12490000, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-06-29 21:00:00', '2021-06-29 21:00:00', 0),
(110, 5, 18982600, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 1, '2021-06-29 21:00:52', '2021-07-05 20:04:59', 1),
(111, 5, 0, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-06-29 21:02:05', '2021-06-29 21:02:05', 0),
(112, 5, 1795500, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-06-29 21:02:54', '2021-06-29 21:02:54', 0),
(113, 5, 12490000, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-06-29 21:11:13', '2021-06-29 21:11:13', 0),
(114, 5, 24822700, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-07-04 10:29:09', '2021-07-04 10:29:09', 0),
(115, 5, 24980000, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-07-04 10:30:05', '2021-07-04 10:30:05', 0),
(116, 5, 24980000, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-07-04 10:31:07', '2021-07-04 10:31:07', 0),
(117, 5, 24980000, NULL, '47 đường 783 tạ quang bửu p4', '0981805990', 0, '2021-07-04 10:31:37', '2021-07-04 10:31:37', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_pay` int(11) NOT NULL DEFAULT 0 COMMENT 'Thành viên hay mua',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Địa chỉ gốc',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `total_pay`, `address`, `provider`, `provider_id`) VALUES
(4, 'nhi thieu phan', 'phangiatamthieu@gmail.com', NULL, NULL, 1, ' ', NULL, '2021-05-31 07:21:02', '2021-05-31 07:21:02', 0, NULL, 'google', '109759817659695674665'),
(5, 'Phan Quoc Phu', 'phanquocphu1998@gmail.com', '0981805990', NULL, 1, '$2y$10$hPNkoNKdtrnf.2lUC72Lk.1aqW5Tl6sNSfp/QUYIxEvK7HVLG1L/.', NULL, '2021-05-31 20:03:26', '2021-06-01 20:14:05', 4, '47 đường 783 tạ quang bửu p4', 'google', '105984671964004971167'),
(6, 'Phan Quoc Phu', '16110180@student.hcmute.edu.vn', NULL, NULL, 1, ' ', NULL, '2021-06-05 00:01:04', '2021-06-05 00:01:04', 0, NULL, 'google', '114615243600740308299'),
(7, 'dai thieu phan', 'phangianhithieu@gmail.com', NULL, NULL, 1, ' ', NULL, '2021-06-07 03:17:22', '2021-06-07 03:17:22', 0, NULL, 'google', '108601473002403733010'),
(13, 'Kiri Gaya', 'phanquocphu93@gmail.com', '0981805990', NULL, 1, ' ', NULL, '2021-06-13 19:17:32', '2021-06-18 04:22:19', 0, '783 ta quang buu street, holygrand, f15', 'google', '100245910797596861093'),
(15, 'phan quoc phu', 'phanquocphu19988@gmail.com', '0981805990', NULL, 1, '$2y$10$zXqyB5JtituO9deSa5WndOQMRjSoua8KWXIerAMAvvl16I0G9BESy', NULL, '2021-06-15 21:05:29', '2021-06-21 20:15:26', 0, '783 ta quang buu street, holygrand, f15', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_active_index` (`active`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_a_name_unique` (`a_name`),
  ADD KEY `article_a_slug_index` (`a_slug`),
  ADD KEY `article_a_active_index` (`a_active`),
  ADD KEY `article_a_author_id_index` (`a_author_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`),
  ADD KEY `categories_c_home_index` (`c_home`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_or_transaction_id_index` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_index` (`or_product_id`),
  ADD KEY `or_transaction_id` (`or_transaction_id`);

--
-- Chỉ mục cho bảng `out_banners`
--
ALTER TABLE `out_banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_transaction_id` (`p_transaction_id`),
  ADD KEY `p_user_id` (`p_user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_category_id_index` (`pro_category_id`),
  ADD KEY `products_pro_author_id_index` (`pro_author_id`),
  ADD KEY `products_pro_active_index` (`pro_active`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pi_product_id` (`pi_product_id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_ra_product_id_index` (`ra_product_id`),
  ADD KEY `ratings_ra_user_id_index` (`ra_user_id`);

--
-- Chỉ mục cho bảng `slide_banners`
--
ALTER TABLE `slide_banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `test_email_unique` (`email`),
  ADD KEY `test_active_index` (`active`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_index` (`tr_user_id`),
  ADD KEY `transactions_tr_status_index` (`tr_status`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT cho bảng `out_banners`
--
ALTER TABLE `out_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `slide_banners`
--
ALTER TABLE `slide_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`a_author_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`or_transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`or_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`p_transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`p_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`pro_category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`pi_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`ra_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`tr_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
