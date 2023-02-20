-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2023 lúc 06:20 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `drugstoredata`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countrys`
--

CREATE TABLE `countrys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `countrys`
--

INSERT INTO `countrys` (`id`, `name`) VALUES
(1, 'Việt Nam'),
(2, 'Thái Lan'),
(3, 'Mỹ'),
(4, 'Nhật Bản'),
(5, 'Trung Quốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imgs`
--

CREATE TABLE `imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `imgs`
--

INSERT INTO `imgs` (`id`, `path`, `file_name`, `products_id`) VALUES
(1, 'product_img', 'P17598_2.jpg', 1),
(2, 'product_img', 'P17598_3.jpg', 1),
(3, 'product_img', 'P17598_4.jpg', 1),
(4, 'product_img', 'P24162_2.jpg', 2),
(5, 'product_img', 'P24162_3.webp', 2),
(6, 'product_img', 'P21913_1.webp', 3),
(7, 'product_img', 'thuoc-giam-dau-ha-sot-glotadol-650mg-chai-200-vie-5-1.jpg', 7),
(8, 'product_img', 'thuoc-giam-dau-ha-sot-glotadol-650mg-chai-200-vie-4-1.jpg', 7),
(9, 'product_img', 'thuoc-giam-dau-ha-sot-glotadol-650mg-chai-200-vie-3-1.jpg', 7),
(10, 'product_img', 'first-up-1-hour-8vien-2-1.jpg', 8),
(12, 'product_img', 'ctt-beliver-250mg-hinh-2.jpg', 10),
(13, 'product_img', 'ctt-beliver-250mg-hinh-3.jpg', 10),
(15, 'product_img', 'ctt-beliver-250mg-hinh-5.jpg', 10),
(17, 'product_img', 'swisse-beauty-grape-seed-ho-tro-hinh-thanh-collagen-lo-180v-mac-dinh-2.jpg', 9),
(27, 'product_img', 'nucos-super-white-h-10l-mac-dinh-4.jpg', 11),
(28, 'product_img', 'nucos-super-white-h-10l-mac-dinh-3.jpg', 11),
(29, 'product_img', 'nucos-super-white-h-10l-mac-dinh-2.jpg', 11),
(30, 'product_img', 'khau-trang-winer-4-lop-mau-xanh-hop-50-cai-mac-dinh-5.jpg', 12),
(31, 'product_img', 'khau-trang-winer-4-lop-mau-xanh-hop-50-cai-mac-dinh-3.jpg', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countrys_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `countrys_id`) VALUES
(1, 'Medinsco', 1),
(2, 'TW2', 1),
(3, 'TW3', 1),
(4, 'Imexpharm', 1),
(5, 'O.P.C', 1),
(6, 'Mekophar', 1),
(7, 'Johnson & Johnson', 2),
(8, 'Pfizer Inc', 2),
(9, 'Merck & Co', 2),
(10, 'AbbVie Inc', 2),
(11, 'Bristol Myers Squibb', 2),
(12, 'GSK', 3),
(13, 'MSD', 3),
(14, 'Novartis', 3),
(15, 'Roche', 3),
(16, 'Sandoz', 3),
(17, 'JHM', 4),
(18, 'BLH', 4),
(19, 'CSPC', 4),
(20, 'Huadong Medicine', 4),
(21, 'Shanghai Fosun', 4),
(22, 'Daiichi Sankyo', 5),
(23, 'Takeda', 5),
(24, 'Astellas', 5),
(25, 'Shionogi', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_27_153821_create_countrys_table', 1),
(6, '2023_01_27_154600_create_manufacturers_table', 1),
(7, '2023_01_27_155651_create_products_table', 1),
(8, '2023_01_27_164308_create_imgs_table', 1),
(9, '2023_02_01_165843_add_role_in_users_table', 1),
(10, '2023_02_06_132056_set_defaul_path_file_in_products_table', 2),
(14, '2023_02_06_141422_add_address_phone_account_to_users_table', 3),
(15, '2023_02_06_191003_orders_table', 4),
(16, '2023_02_06_191926_create_orders_type_table', 5),
(18, '2023_02_06_193425_create_orders_table', 6),
(19, '2023_02_07_034417_create_orderproducts_table', 7),
(20, '2023_02_07_162030_change_text_to_null_in_orders_table', 8),
(21, '2023_02_10_042559_create_producttypes_table', 9),
(22, '2023_02_10_043039_change_role_in_products_table', 10),
(23, '2023_02_19_010336_change_quantity_in_orderproducts_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `quantity_of_product` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderproducts`
--

INSERT INTO `orderproducts` (`id`, `orders_id`, `products_id`, `quantity_of_product`) VALUES
(1, 23, 6, 2),
(2, 23, 3, 1),
(3, 24, 6, 5),
(4, 24, 3, 4),
(5, 27, 1, 1),
(6, 27, 2, 3),
(7, 27, 3, 2),
(8, 28, 2, 1),
(9, 28, 1, 1),
(10, 28, 3, 1),
(11, 29, 2, 1),
(12, 29, 1, 1),
(13, 29, 3, 1),
(14, 30, 1, 1),
(15, 30, 2, 1),
(16, 30, 3, 1),
(17, 30, 4, 1),
(18, 30, 6, 1),
(19, 30, 7, 1),
(20, 31, 1, 1),
(21, 31, 2, 1),
(22, 31, 3, 1),
(23, 32, 2, 2),
(24, 32, 3, 1),
(25, 33, 3, 1),
(26, 33, 2, 1),
(27, 33, 7, 2),
(28, 34, 9, 1),
(29, 34, 2, 1),
(30, 34, 3, 1),
(31, 35, 1, 1),
(32, 35, 2, 1),
(33, 35, 3, 1),
(34, 35, 4, 1),
(35, 35, 5, 1),
(36, 35, 6, 1),
(37, 35, 7, 1),
(38, 35, 8, 1),
(39, 36, 1, 1),
(40, 36, 2, 1),
(41, 36, 3, 1),
(42, 37, 1, 7),
(43, 38, 2, 1),
(44, 39, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usernametake` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `addressfortake` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonefortake` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordertypes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `usernametake`, `users_id`, `price`, `addressfortake`, `phonefortake`, `note`, `ordertypes_id`, `created_at`, `updated_at`) VALUES
(22, 'Ngô Tú Ngọc', 1, 59000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-09 20:01:33', '2023-02-09 20:01:33'),
(23, 'Ngô Tú Ngọc', 1, 59000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-09 20:04:22', '2023-02-09 20:04:22'),
(24, 'Ngô Tú Ngọc', 1, 170000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-09 20:09:44', '2023-02-09 20:09:44'),
(25, 'Ngô Tú Ngọc', 1, 402000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-19 18:10:48', '2023-02-19 18:10:48'),
(26, 'Ngô Tú Ngọc', 1, 402000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-19 18:13:01', '2023-02-19 18:13:01'),
(27, 'Ngô Tú Ngọc', 1, 402000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-19 18:15:39', '2023-02-19 18:15:39'),
(28, 'Ngô Tú Ngọc', 1, 219000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-19 18:19:48', '2023-02-19 18:19:48'),
(29, 'Ngô Tú Ngọc', 1, 219000, 'Bắc Cường, Lào Cai', '038052337', NULL, 1, '2023-02-19 19:23:44', '2023-02-19 19:23:44'),
(30, 'Ngô Tú Ngọc', 1, 556000, 'Bắc Cường, Lào Cai', '038052337', '<p>abc</p>', 1, '2023-02-19 19:25:14', '2023-02-19 19:25:14'),
(31, 'Ngọc Ngạn', 2, 219000, 'Bắc Cường, Lào Cai', '92083593058', NULL, 1, '2023-02-19 19:43:51', '2023-02-19 19:43:51'),
(32, 'Ngọc Ngạn', 2, 183000, 'Hà Nội', '53523532', NULL, 1, '2023-02-19 19:45:29', '2023-02-19 19:45:29'),
(33, 'Ngô Hoành', 3, 699000, 'Hà Nội', '09775985', '<p>ággssgs</p>', 1, '2023-02-19 19:51:21', '2023-02-19 19:51:21'),
(34, 'Ngô Hoành', 3, 513400, 'Hà Nội', '09775985', '<p>Nhận</p>', 1, '2023-02-19 19:52:47', '2023-02-19 19:52:47'),
(35, 'Ngô Tú Ngọc', 1, 882000, 'Bắc Cường, Lào Cai', '038052337', '<p>Xác nận địa chỉ</p>', 1, '2023-02-20 10:24:43', '2023-02-20 10:24:43'),
(36, 'Ngô Hoành', 3, 219000, 'Hà Nội', '09775985', NULL, 1, '2023-02-20 11:00:50', '2023-02-20 11:00:50'),
(37, 'Ngô Tú', 3, 840000, 'Hà Nội', '09775985', '<p>take all</p><p>&nbsp;</p>', 1, '2023-02-20 11:36:56', '2023-02-20 11:36:56'),
(38, 'Ngô Tú', 3, 84000, 'Hà Nội', '09775985', NULL, 2, '2023-02-20 12:00:21', '2023-02-20 12:00:21'),
(39, 'Ngô Tú', 3, 168000, 'Hà Nội', '09775985', '<p>123</p>', 1, '2023-02-20 12:01:32', '2023-02-20 12:01:32'),
(40, 'Ngọc Ngạn', 2, 40000, '26236326', '135325', NULL, 2, '2023-02-20 12:27:15', '2023-02-20 12:27:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ordertypes`
--

CREATE TABLE `ordertypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typeorder` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ordertypes`
--

INSERT INTO `ordertypes` (`id`, `typeorder`) VALUES
(1, 'tài khoản'),
(2, 'tiền mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `manufacturers_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `benefit`, `price`, `quantity`, `path`, `file_name`, `manufacturers_id`, `created_at`, `updated_at`, `role`) VALUES
(1, 'LiveSpo Clausy', '<p><strong>Thành phần</strong><br>Mỗi ống có chứa 2 tỷ bào tử lợi khuẩn <i>Bacillus clausii</i>. Nước cất vừa đủ 5ml.</p><p><strong>Đối tượng sử dụng</strong><br>– Người bị rối loạn tiêu hóa, sử dụng kháng sinh dài ngày gây rối loạn tiêu hóa.<br>– Trẻ bị tiêu chảy hoặc rối loạn tiêu hóa do loạn khuẩn đường ruột.<br>– Sản phẩm dùng được cho phụ nữ mang thai và đang cho con bú.</p><p><i><strong>Lưu ý đặc biệt</strong></i><br>Có thể nhìn thấy các hạt nhỏ trong ống do sự tập hợp các bào tử lợi khuẩn Bacillus. Điều đó chỉ ra sản phẩm không bị thay đổi chất lượng.</p><p><strong>Công dụng</strong><br><strong>- </strong>Giúp bổ sung men vi sinh có lợi cho đường ruột.<br>- Hỗ trợ giảm tình trạng rối loạn tiêu hóa do loạn khuẩn đường ruột như tiêu chảy, phân sống, đầy bụng, khó tiêu, tiêu hóa kém.</p><p><strong>Cách dùng</strong><br><strong>- </strong>Người lớn: 2-3 ống/ngày<br>- Trẻ em trên 2 tuổi: 2 ống/ngày<br>- Trẻ nhỏ dưới 2 tuổi: Xin ý kiến của bác sỹ trước khi dùng.</p><p><i><strong>Lưu ý: </strong></i>Lắc kĩ ống trước khi sử dụng, có thể pha với nước nóng, sữa nóng hoặc theo chỉ dẫn của bác sĩ.</p><p><strong>Bảo quản:</strong> Nơi thoáng mát, nhiệt độ dưới 30 độ C. Để xa tầm tay trẻ con.</p>', 'Chống rối loạn tiêu hóa', 120000, 0, 'product_img', 'P17598_1.jpg', 1, '2023-02-06 06:23:30', '2023-02-20 11:36:57', 1),
(2, 'Bio Stomach', '<p><strong>Thành phần</strong></p><p>Mai mực: 500mg, mật ong: 500mg, Nano Curcumin (10%): 100mg, Các phụ liệu sử dụng</p><p>Maltodextrin 80%, Gum Acacia 1%, lecithin 3%, Sucrose 4%, Tam thất: 100mg</p><p>&nbsp;</p><p><strong>Công dụng</strong></p><p>Giúp kiện tỳ, hỗ trợ giảm triệu chứng đau dạ dày, ợ chua</p><p>&nbsp;</p><p><strong>Đối tượng sử dụng&nbsp;</strong></p><p>Người lớn bị viêm loét dạ dày, tá tràng, có các biểu hiện đau thượng vị, ợ hơi, ợ chua</p><p>&nbsp;</p><p><strong>Cách sử dụng&nbsp;</strong></p><p>Hòa với nước đun sôi ấm, uống trước bữa ăn khoảng 30 phút</p><p>&nbsp;</p><p><strong>Khuyến cáo:</strong>&nbsp;Phụ nữ có thai và phụ nữ cho con bú, những người âm hư đa nhiệt, trẻ em không dùng.</p><p>&nbsp;</p><p><strong>Bảo quản:&nbsp;</strong>Nơi khô, nhiệt độ dưới 30 độ</p><p>&nbsp;</p><p><strong>Hạn sử dụng:&nbsp;</strong>Tối thiểu 23.10.2024</p><p>&nbsp;</p><p><strong>Quy cách đóng gói: </strong>Hộp 20 gói</p><p>&nbsp;</p><p><strong>Thương hiệu:</strong>&nbsp;Công ty Cổ Phần Dược Phẩm Bạch Dương</p><p>&nbsp;</p><p><strong>Nơi sản xuất:&nbsp;</strong>Việt Nam</p><p>&nbsp;</p><p><strong>Công ty chịu trách nhiệm sản phẩm:&nbsp;</strong>Công ty Cổ Phần Dược Phẩm Bạch Dương</p><p>&nbsp;</p><p><strong>Công ty phân phối sản phẩm:</strong>&nbsp;Công ty Cổ Phần Dược Phẩm Bạch Dương</p><p>&nbsp;</p><p><strong>Số Giấy công bố:&nbsp;</strong>5971/2019/ĐKSP</p><p>&nbsp;</p><p><strong>Số Giấy XNQC:</strong>&nbsp;02316/2019 /ATTP-XNQC<br><i>Sản phẩm này không phải là thuốc, không thể thay thế thuốc chữa bệnh</i></p>', 'Thực phẩm bảo vệ sức khỏe hỗ trợ giảm đau dạ dày', 84000, 201, 'product_img', 'P24162_1.jpg', 1, '2023-02-06 06:42:23', '2023-02-20 12:01:33', 1),
(3, 'Que thử thai HCG Allisa', '<p><strong>Thành phần</strong><br>Kháng thể kháng β-hCG 0,5mg/ml<br>Kháng thể kháng α -hCG 0,7mg/ml<br>Kháng thể để kháng IgG chuột 1,5mg/ml</p><p><strong>Công dụng</strong><br>Định tính hormone HCG trong nước tiểu người giúp phát hiện sớm thai kỳ (7-10 ngày sau khi thụ thai).</p><p><strong>Đối tượng sử dụng:</strong>&nbsp;Dùng cho nữ giới&nbsp;</p><p><strong>Cách sử dụng</strong><br>Lấy nước tiểu vào cốc, nên lấy nước tiểu giữa (không nên lấy nước tiểu đầu và cuối).<br>Lấy que thử khỏi bao nhôm và sử dụng càng sớm càng tốt (nên dùng trong vòng 10 phút).<br>Cắm que thử vào trong cốc nước tiểu theo chiều mũi tên (không ngập quá vạch đánh dấu).<br>Lấy que thử ra sau 5 - 15 giây. Để que thử trên mặt phẳng khô, sạch.<br>Đọc kết quả trong 5 phút nhưng không lâu hơn 10 phút.<br>Đọc kết quả<br>Dương tính (có thai): Hai vạch màu xuất hiện trên que thử ở cả vùng chứng (C) và vùng thử (T).<br>Âm tính (không có thai): Chỉ có một vạch màu xuất hiện tại vùng chứng (C). Không có vạch màu nào xuất hiện tại vùng thử(T).<br>Không đạt: Nếu không có vạch màu nào xuất hiện hoặc chỉ có vạch thử mà không có vạch chứng, nên thử lại với que thử mới.<br><i>Chú ý</i><br>Đọc kỹ hướng dẫn sử dụng trước khi thử. Chú ý vị trí của vạch thử và vạch chứng.<br>Bộ dụng cụ thử phải được giữ trong túi kín cho đến khi sử dụng. Không sử dụng nếu túi bị hỏng hoặc mở. Không sử dụng lại que thử. Vứt bỏ trong thùng rác sau một lần sử dụng.</p><p>&nbsp;</p><p><strong>Bảo quản:&nbsp;</strong>Nhiệt độ 4-30 độ C, nơi khô ráo</p><p>&nbsp;</p><p><strong>Hạn sử dụng:</strong>&nbsp;30 tháng kể từ ngày sản xuất</p><p>&nbsp;</p><p><strong>Đóng gói:</strong>&nbsp;1 que thử bản to 4mm,1 cốc đựng có tay cầm</p>', 'Phát hiện sớm thai kì', 15000, 483, 'product_img', 'P21913_2.webp', 1, '2023-02-06 07:02:12', '2023-02-20 11:00:50', 1),
(4, 'Fegra', '<h2>Thành phần</h2><p>Hoạt chất: Fexofenadin hydroclorid 60mg.</p><p>Tá dược: Lactose monohydrat, pregelatinized starch, natri croscarmellose, povidon, natri starch glycolat, magnesi stearat.</p><h2>Công dụng (Chỉ định)</h2><p>Dùng cho người lớn và trẻ em trên 6 tuổi.</p><p>Điều trị các chứng viêm mũi dị ứng: Hắt hơi, chảy nước mũi, nghẹt mũi, ngứa mũi, ngứa vòm miệng, họng, mắt ngứa đỏ, chảy nước mắt.</p><p>Nổi mày đay và mày đay tự phát mạn tính.</p><h2>Cách dùng - Liều dùng</h2><p>Viêm mũi dị ứng: Người lớn và trẻ em trên 12 tuổi: 60mg, 2 lần/ ngày hoặc 180mg, 1 lần/ngày. Trẻ em 6 - 12 tuổi: 30mg, 2 lần/ngày.</p><p>Mày đay mạn tính vô căn: Người lớn và trẻ em trên 12 tuổi: 60mg, 2 lần/ ngày hoặc 180mg, 1 lần/ngày. Trẻ em 6 - 12 tuổi: 30mg, 2 lần/ngày.</p><p>Bệnh nhân suy thận: Người lớn và trẻ em trên 12 tuổi bị suy thận hay phải thẩm phân máu: 60mg, 1 lần/ ngày. Trẻ em 6 - 12 tuổi bị suy thận: 30mg, 1 lần/ngày.</p><p>Bệnh nhân suy gan: Không cần điều chỉnh liều.</p><h2>Không sử dụng trong trường hợp sau (Chống chỉ định)</h2><p>Bệnh nhân mẫn cảm với bất kỳ thành phần nào của thuốc.</p><h2>Lưu ý khi sử dụng (Cảnh báo và thận trọng)</h2><p>Tuy thuốc không có độc tính trên tim như chất mẹ terfenadin, nhưng vẫn cần phải thận trọng theo dõi khi dùng fexofenadin cho người dã có nguy cơ tim mạch hoặc đã có khoảng QT kéo dài từ trước.</p><p>Khuyên bệnh nhân không nên tự dùng thêm thuốc kháng histamin nào khác khi đang sử dụng fexofenadin.</p><p>Cần thận trọng và điều chỉnh liều thích hợp khi dùng thuốc cho người suy giảm chức năng thận vì nồng độ thuốc trong huyết tương tăng do nửa đời thải trừ kéo dài. Cần thận trọng khi dùng thuốc cho người cao tuổi (trên 65 tuổi) thường có suy giảm sinh lý chức năng thận.</p><p>Độ an toàn và tính hiệu quả của thuốc ở trẻ em dưới 6 tuổi tuổi chưa xác định được.</p><p>Cần ngưng fexofenadin ít nhất 24 - 48 giờ trước khi tiến hành các thử nghiệm kháng nguyên tiêm trong da.</p><h2>Tác dụng không mong muốn (Tác dụng phụ)</h2><p>Các tác dụng không mong muốn của thuốc không bị ảnh hưởng bởi liều dùng, tuổi, giới tính và chủng tộc của bệnh nhân.</p><p>Thường gặp: Thần kinh: Buồn ngủ, mệt mỏi, đau đầu, mất ngủ, chóng mặt. Tiêu hóa: Buồn nôn, khó tiêu. Khác: Dễ bị nhiễm virus (cảm, cúm), đau bụng trong thời kỳ kinh nguyệt, dễ bị nhiễm khuẩn hô hấp trên, ngứa họng, ho, sốt, viêm tai giữa, viêm xoang, đau lưng.</p><p>Ít gặp: Thần kinh: Sợ hãi, rối loạn giấc ngủ, ác mộng. Tiêu hóa: Khô miệng, đau bụng.</p><p>Hiếm gặp: Da: Ban, mày đay, ngứa.</p><p>Phản ứng quá mẫn: Phù mạch, tức ngực, khó thở, đỏ bừng,<br>choáng phản vệ.</p><p>Thông báo cho thầy thuốc tác dụng không mong muốn gặp<br>phải khi sử dụng thuốc.</p><h2>Tương tác với các thuốc khác</h2><p>Fexofenadin rất ít chuyển hóa qua gan nên ít gây tương tác với các thuốc chuyển hóa qua gan. Dùng fexofenadin với erythromycin hoặc ketoconazol làm tăng nồng độ fexofenadin trong huyết tương gấp 2 - 3 lần. Tuy nhiên sự gia tăng này không làm ảnh hưởng lên khoảng QT, và so sánh với các thuốc trên khi dùng riêng lẻ, cũng không thấy gia tăng thêm phản ứng phụ nào.</p><p>Thuốc kháng acid chứa nhôm, magnesi nếu dùng đồng thời với fexofenadin sẽ làm giảm hấp thu thuốc, vì vậy nên dùng các thuốc này cách xa nhau (khoảng 2 giờ).</p><h2>Quá liều</h2><p>Thông tin về độc tính cấp của fexofenadin còn hạn chế. Tuy nhiên, buồn ngủ, chóng mặt, khô miệng đã được báo cáo.</p><p>Xử trí: Sử dụng các biện pháp thông thường để loại bỏ phần thuốc còn chưa được hấp thu ở ống tiêu hóa. Điều trị hỗ trợ và điều trị triệu chứng. Thẩm phân máu làm giảm nồng độ thuốc trong máu không đáng kể (1.7%). Không có thuốc giải độc đặc hiệu.</p><h2>Thai kỳ và cho con bú</h2><p>Thời kỳ mang thai: Do chưa nghiên cứu đầy đủ trên phụ nữ mang thai, nên chỉ dùng fexofenadin cho phụ nữ mang thai khi lợi ích cho người mẹ vượt trội hơn nguy cơ đối với thai nhi.</p><p>Thời kỳ cho con bú: Không rõ thuốc có bài tiết qua sữa mẹ hay không, vì vậy cần thận trọng khi dùng fexofenadin cho phụ nữ đang cho con bú.</p><h2>Bảo quản</h2><p>Nơi khô, mát (dưới 30°C). Tránh ánh sáng.</p><h2>Quy cách đóng gói</h2><p>Hộp 10 viên nang.</p><h2>Hạn dùng</h2><p>36 tháng kể từ ngày sản xuất.</p><h2>Dược lực học</h2><p>Fexofenadin là thuốc kháng histamin thế hệ thứ 2, có tác dụng đối kháng chọn lọc và đặc hiệu trên thụ thể ngoại biên. Thuốc là một chất chuyển hóa có hoạt tính của terfenadin, cũng cạnh tranh với histamin tại các thụ thể H1 ở đường tiêu hóa, mạch máu và đường hô hấp, nhưng không còn độc tính đối với tim do không ức chế kênh kali liên quan đến sự tái cực của tế bào cơ tim. Fexofenadin không có tác dụng đáng kể đối kháng acetylcholin, đối kháng dopamin và không có tác dụng ức chế thụ thể alpha hoặc beta - adrenergic.</p><p>Ở liều điều trị, thuốc không gây ngủ hay ảnh hưởng đến hệ thần kinh trung ương. Thuốc có tác dụng nhanh và kéo dài do thuốc gắn chậm vào thụ thể H1 tạo thành phức hợp bền vững và tách ra chậm.</p><h2>Dược động học</h2><p>Hấp thu: Thuốc hấp thu tốt khi dùng đường uống. Sau khi uống, nồng độ đỉnh trong máu đạt được sau 2 - 3 giờ.</p><p>Phân bố: Tỉ lệ liên kết với protein huyết tương của thuốc là 60 - 70%, chủ yếu với albumin và alpha acid glycoprotein. Thể tích phân bố là 5.4 - 5.8 lít/kg. Fexofenadin không qua hàng rào máu não.</p><p>Chuyển hóa: xấp xỉ 5% liều dùng của thuốc dược chuyển hóa. Khoảng 0.5 - 1.5% được chuyển hóa ở gan nhờ hệ enzym cytochrom P450 thành chất không có hoạt tính. 3.5% được chuyển hóa thành dẫn chất ester methyl, chủ yếu nhờ hệ vi khuẩn đường ruột.</p><p>Thải trừ: Thời gian bán thải 14,4 giờ, kéo dài hơn ở người suy thận. Thuốc thải trừ chủ yếu qua phân (xấp xỉ 80%), 11 - 12% liều dùng được thải trừ qua nước tiểu dưới dạng không đổi.</p>', 'Trị viêm mũi dị ứng, mày đay', 15000, 17, 'product_img', 'thuoc-chong-di-ung-fegra-60mg-10-vien-2-1.jpg', 1, '2023-02-07 17:01:48', '2023-02-20 10:24:43', 1),
(5, 'Telfor', '<h2>Thành phần</h2><p><i>Hoạt chất:</i> Fexofenadin HCI 60 mg.</p><p><i>Tá dược:</i> Tinh bột biến tính, microcystalline cellulose M101, croscarmellose sodium, magnesi stearat, HPMC 606, HPMC 615, PEG 6000, titan dioxyd, talc, oxyd sắt đỏ, màu cam E110 vừa đủ 1 viên.</p><h2>Công dụng (Chỉ định)</h2><p>Điều trị các triệu chứng viêm mũi dị ứng như: hắt hơi, chảy nước mũi, ngứa mũi, ngứa vòm miệng và họng, mắt ngứa đỏ và chảy nước mắt.</p><p>Điều trị các triệu chứng nổi mề đay tự phát mạn tính: ngứa, nổi mẩn đỏ.</p><h2>Cách dùng - Liều dùng</h2><p><i>Người lớn và trẻ em trên 12 tuổi:</i> uống 1 viên x 2 lần/ngày.</p><p><i>Người lớn và trẻ em trên 12 tuổi bị suy thận hay phải thẩm phân máu:</i> uống 1 viên x 1 lần/ngày.</p><p>Không cần điều chỉnh liều cho người suy gan.</p><p>Hoặc theo chỉ dẫn của thầy thuốc.</p><h2>Không sử dụng trong trường hợp sau (Chống chỉ định)</h2><p>Mẫn cảm với bất kỳ thành phần nào của thuốc.</p><h2>Lưu ý khi sử dụng (Cảnh báo và thận trọng)</h2><p>Thận trọng theo dõi khi dùng fexofenadin cho người đã có nguy cơ tim mạch hoặc có khoảng QT kéo dài từ trước. Không dùng thêm thuốc kháng histamin nào khác khi đang dùng fexofenadin.</p><p>Cần thận trọng và điều chỉnh liều thích hợp khi dùng cho người có chức năng thận suy giảm và cho người cao tuổi (trên 65 tuổi) thường có suy giảm sinh lý chức năng thận. Độ an toàn và hiệu quả của fexofenadin ở trẻ em dưới 6 tuổi chưa được nghiên cứu. cần ngừng fexofenadin ít nhất 24 - 48 giờ trước khi tiến hành các thử nghiệm kháng nguyên tiêm trong da.</p><h2>Tác dụng không mong muốn (Tác dụng phụ)</h2><p><i>Thường gặp (ADR &lt; 1/100)</i></p><p>Thần kinh: buồn ngủ, mệt mỏi, đau đầu, mất ngủ, chóng mặt. Tiêu hóa: buồn nôn, khó tiêu. Khác: nhiễm virus (cảm, cúm), đau bụng kinh, nhiễm khuẩn hô hấp trên, ngứa họng, ho, sốt, viêm tai giữa, viêm xoang, đau lưng,</p><p><i>Ít gặp (1/1000 &lt; ADR &lt; 1/100)</i></p><p>Thần kinh: sợ hãi, rối loạn giấc ngủ, ác mộng. Tiêu hóa: khô miệng, đau bụng.</p><p><i>Hiếm gặp (ADR &lt; 1/1000)</i></p><p>Da: ban, mày đay, ngứa. Phản ứng quá mẫn: phù mạch, tức ngực, khó thở, đỏ bừng, choáng phản vệ.</p><p>Thông báo cho bác sĩ những tác dụng không mong muốn gặp phải khi sử dụng thuốc.</p><h2>Tương tác với các thuốc khác</h2><p>Fexofenadin không được chuyển dạng sinh học ở gan và vì vậy không tương tác với các thuốc chuyển hóa trong gan. An toàn khi dùng kết hợp fexofenadin với erythromycin và ketoconazol, không gây ra hội chứng xoắn đỉnh, một tác dụng phụ thường gặp khi kết hợp các chất đối kháng thụ thể histamin thế hệ 1 với erythromycin và ketoconazol. Tuy vậy, erythromycin và ketoconazol làm tăng nồng độ và diện tích dưới đường cong nồng độ - thời gian của fexofenadin trong máu.</p><p>Thuốc kháng acid có chứa gel nhôm hydroxyd và magnesi hydroxyd làm giảm hấp thu fexofenadin, nên uống các thuốc này cách nhau ít nhất 2 giờ.</p><h2>Quá liều</h2><p>Thông tin về độc tính cấp của fexofenadin còn hạn chế. Tuy nhiên, buồn ngủ, chóng mặt, khô miệng đã được báo cáo.</p><p><strong>Xử trí:</strong></p><p>Sử dụng các biện pháp thông thường để loại bỏ phần thuốc còn chưa được hấp thu ở ống tiêu hóa. Điều trị hỗ trợ và điều trị triệu chứng.</p><p>Thẩm phân máu làm giảm nồng độ thuốc trong máu không đáng kể (1,7%). Không có thuốc giải độc đặc hiệu.</p><h2>Thai kỳ và cho con bú</h2><p>Chưa có nghiên cứu đầy đủ trên người mang thai nên chỉ dùng fexofenadin cho phụ nữ mang thai khi lợi ích của người mẹ vượt trội nguy cơ đối với thai nhi.</p><p>Chưa rõ thuốc có bài tiết qua sữa mẹ hay không, nên cần thận trọng khi dùng fexofenadin cho phụ nữ đang cho con bú.</p><h2>Bảo quản</h2><p>Nơi khô, nhiệt độ không quá 30°C, tránh ánh sáng.</p><h2>Quy cách đóng gói</h2><p>Hộp 2 vỉ x 10 viên.</p><h2>Hạn dùng</h2><p>36 tháng kể từ ngày sản xuất.</p><h2>Dược lực học</h2><p>Teltor với thành phần hoạt chất là fexofenadin là thuốc đối kháng histamin, tác dụng đối kháng đặc hiệu và chọn lọc trên thụ thể H1 ngoại vi, dùng để điều trị dị ứng. ở liều điều trị, thuốc không gây buồn ngủ hay ảnh hưởng đến thần kinh trung ương. Thuốc có tác dụng nhanh và kéo dài do thuốc gắn chậm vào thụ thể H1, tạo thành phức hợp bền vững và tách ra chậm.</p><h2>Dược động học</h2><p>Fexofenadin được hấp thu tốt khi dùng đường uống. Sau khi uống 1 viên nén 60 mg, nồng độ đỉnh trong huyết tương khoảng 142 nanogam/ ml, đạt được sau khi uống 2 - 3 giờ. Thức ăn làm giảm nồng độ đỉnh trong huyết tương khoảng 17% nhưng không làm chậm thời gian đạt nồng độ đỉnh của thuốc. Khoảng 60 - 70% fexofenadin gắn với protein huyết tương, chủ yếu gắn với albumin và alpha1-acid glycoprotein.</p><p>Fexofenadin không qua hàng rào máu - não. xấp xỉ 5% liều dùng của thuốc được chuyển hóa. Khoảng 0,5 -1,5% được chuyển hóa ở gan nhờ hệ enzym cytochrom P450 thành chất không có hoạt tính. 3,5% được chuyển hóa thành dẫn chất ester methyl, chủ yếu nhờ hệ vi khuẩn ruột.</p><p>Người cao tuổi (≥ 65 tuổi) nồng độ đỉnh trong huyết tương của fexofenadin lớn hơn 99% so với người &lt; 65 tuổi. Thời gian bán hủy trung bình tương đương với người bình thường.</p><p>Bệnh nhân suy thận nhẹ đến trung bình (ClCr 41 - 80 ml/phút) và suy thận nặng (ClCr 11 - 40 ml/phút) nồng độ đỉnh trong huyết tương của fexofenadin lớn hơn tương ứng 87% và 111 %, và thời gian bán thải dài hơn tương ứng là 59% và 72% so với ở người bình thường.</p><p>Bệnh nhân suy gan: Dược động học của fexofenadin ở bệnh nhân bị bệnh gan không khác nhau đáng kể so với người bình thường.</p><p>Ảnh hưởng của giới tính: Không có sự khác biệt đáng kể về dược động học liên quan đến giới tính.</p><h2>Đặc điểm</h2><p>Viên nén bao phim.</p>', 'trị viêm mũi dị ứng, mày đay', 26000, 123, 'product_img', 'telfor-60mg-mac-dinh-2.jpg', 17, NULL, '2023-02-20 10:24:43', 1),
(6, 'Fexet', '<h2>Thành phần</h2><p>Mỗi viên có chứa:</p><p><strong>Hoạt chất:</strong> Fexofenadine HCL USP 60mg.</p><p><strong>Tá dược:</strong> Tinh bột bắp, Cellulose vi tinh thể (Avicel PH 101), Cellulose vi tinh thể (Avicel PH 102), Croscarmellose Sodium, Magnesium stearate, Hydroxy Propyl Methyl Cellulose 5 CPs, Titanium dioxide, Propylene glycol.</p><h2>Công dụng (Chỉ định)</h2><p>FEXET được chỉ định để làm giảm các triệu chứng có liên quan đến bệnh:</p><p>- Viêm mũi dị ứng theo mùa bao gồm hắc hơi, sổ mũi, ngứa mũi, miệng, cổ họng, chảy nước mắt, đỏ mắt.</p><p>- Nổi mề đay tự phát mãn tính.</p><h2>Cách dùng - Liều dùng</h2><p><strong>Viêm mũi dị ứng theo mùa:</strong></p><p>- Người lớn và trẻ em từ 12 tuổi trở lên: 60mg Fexofenadine HCl x 2 lần/ngày, hoặc 120mg Fexofenadine HCl x 1 lần/ngày.</p><p>- Trẻ em 6 - 11 tuổi: 30mg Fexofenadine HCl x 2 lần/ngày.</p><p><strong>Nổi mày đay tự phát mãn tính:</strong></p><p>- Người lớn và trẻ em từ 12 tuổi trở lên: 180mg Fexofenadine HCl x 1 lần/ngày.</p><p>- Trẻ em 6 - 11 tuổi: 30mg Fexofenadine HCl x 2 lần/ngày.</p><p><strong>Liều dùng cho bệnh nhân suy thận:</strong></p><p>- Người lớn: Những bệnh nhân giảm chức năng thận, liều khuyên dùng bắt đầu là 60mg Fexofenadine HCl mỗi ngày.</p><p>- Trẻ em: Những trẻ em giảm chức năng thận, liều khuyên dùng bắt đầu là 30mg Fexofenadine HCl mỗi ngày.</p><p>Liều dùng có thể được điều chỉnh theo tuổi và triệu chứng.</p><h2>Không sử dụng trong trường hợp sau (Chống chỉ định)</h2><p>- Trẻ em dưới 6 tuổi.</p><p>- Bệnh nhân bị quá mẫn với bất cứ thành phần nào của thuốc.</p><p>- Không dùng cho phụ nữ có thai và cho con bú.</p><h2>Lưu ý khi sử dụng (Cảnh báo và thận trọng)</h2><p>- Bệnh nhân bị suy thận hoặc suy gan.</p><p>- Bệnh nhân bị bệnh tim.</p><p>- Thận trọng khi sử dụng cho phụ nữ có thai.</p><h2>Tác dụng không mong muốn (Tác dụng phụ)</h2><p>- Nhức đầu là tác dụng phụ thường thấy nhất (1,0%) đối với trẻ 6 - 11 tuổi khi sử dụng thuốc.</p><p>- Ở người lớn, những tác dụng phụ thường gặp nhất khi dùng thuốc là nhức đầu (7,3%), buồn ngủ (2,3%), buồn nôn (1,5%), chóng mặt (1,5%), mệt mỏi (0,9%).</p><p>- Ngoài ra, những tác dụng phụ khác hiếm khi xuất hiện và với tỉ lệ dưới 1% như mất ngủ, căng thẳng, rối loạn giấc ngủ như ác mộng.</p><p>- Một số hiếm trường hợp có xuất hiện mày đay, phát ban, ngứa, phản ứng dị ứng với những biểu hiện như phù mạch, tức ngực, khó thở, đỏ bừng và quá mẫn hệ thống.</p><p><i><strong>Thông báo cho bác sĩ các tác dụng phụ gặp phải khi dùng thuốc.</strong></i></p><h2>Tương tác với các thuốc khác</h2><p>- Fexofenadine không bị chuyển hóa qua gan do đó không tương tác với những thuốc chuyển hóa qua gan. Sử dụng đồng thời với erythromycin hay ketoconazole sẽ làm tăng nồng độ fexofenadine huyết tương lên gấp 2 - 3 lần do tăng sự hấp thu qua ống tiêu hóa. Sử dụng đồng thời fexofenadine với erythromycin và ketoconazole không gây ra bất cứ ảnh hưởng nào lên khoảng QT và không làm tăng tác dụng phụ so với việc sử dụng riêng một mình fexofenadine.</p><p>- Uống fexofenadine gần với thời gian uống thuốc kháng acid có chứa nhôm và magiê (15 phút) có thể làm giảm sinh khả dụng của fexofenadine. Nên dùng fexofenaine và các thuốc kháng acid có chứa nhôm, magiê cách nhau 2 tiếng.</p><h2>Quá liều</h2><p>- Quá liều fexofenadine HCl có những triệu chứng như tác dụng phụ đó là chóng mặt, mệt mỏi, khô miệng. Dùng fexofenadine HCl với liều lên đến 60mg 2 lần mỗi ngày trong vòng 2 tuần ở trẻ em; 800mg 1 lần mỗi ngày, 690mg 2 lần mỗi ngày trong vòng 1 tháng hay 240mg 1 lần mỗi ngày trong vòng 1 năm ở người trưởng thành khoẻ mạnh cho thấy không làm tăng các tác dụng phụ so với giả dược.</p><p>- Trong trường hợp quá liều, việc điều trị hợp lý là gây nôn ngoại trừ bệnh nhân bị mất ý thức (dùng sirô ipeca), tiếp theo là dùng than hoạt tính để hấp thụ phần thuốc còn lại. Nếu việc gây nôn không thành công, hoặc là chống chỉ định, việc rửa dạ dày nên được tiến hành với nước muối sinh lý.</p><p>- Fexofenadine HCl không bị thải trừ bởi quá trình thẩm tách máu. Bệnh nhân nên được theo dõi liên tục sau khi đã được cấp cứu.</p><h2>Thai kỳ và cho con bú</h2><p><strong>Phụ nữ mang thai: </strong>Tương tự như những thuốc khác, fexofenadine HCl không nên được sử dụng trong suốt thai kỳ trừ khi lợi ích điều trị cao hơn rủi ro có thể xảy ra cho bào thai.</p><p><strong>Phụ nữ đang cho con bú: </strong>Không sử dụng fexofenadine HCl cho phụ nữ đang cho con bú.</p><h2>Bảo quản</h2><p>Giữ trong bao bì kín ở nhiệt dộ dưới 30°C, tránh nóng, ánh sáng và ẩm.</p><h2>Quy cách đóng gói</h2><p>Hộp 1 vỉ x 10 viên.</p><h2>Hạn dùng</h2><p>36 tháng kể từ ngày sản xuất.</p><h2>Dược lực học</h2><p>Fexofenadine HCl là chất kháng histamine không gây buồn ngủ, có tác dụng đối kháng chọn lọc ở thụ thể H1 ngoại biên. Không có dấu hiệu buồn ngủ.</p><h2>Dược động học</h2><p><strong>Hấp thu</strong></p><p>Fexofenadine hấp thu nhanh chóng qua đường uống đạt nồng độ đỉnh 2 - 3 giờ.</p><p><strong>Phân bố</strong></p><p>Tỷ lệ gắn kết với protein huyết tương của Fexofenadine HCl đường uống là khoảng 60 - 70%, chủ yếu gắn kết với albumin và acid α1-glycoprotein.</p><p><strong>Chuyển hoá</strong></p><p>Khoảng 5% thuốc bị chuyển hoá qua đường uống, hầu như qua niêm mạc ruột non, khoảng 0,5 đến 1,5% được chuyển hóa qua gan.</p><p><strong>Thải trừ</strong></p><p>Thời gian bán hủy khoảng 14 giờ, thời gian bán hủy có thể kéo dài ở những bệnh nhân suy thận. Đào thải chính qua phân, khỏang 10% liều uống được đào thải qua nước tiểu.</p><h2>Đặc điểm</h2><p>Viên nén bao phim.</p>', 'trị viêm mũi dị ứng, mày đay', 22000, 5243, 'product_img', 'fexet-60mg-h-10v-2-1.jpg', 12, '2023-02-07 17:21:39', '2023-02-20 10:24:43', 1),
(7, 'Glotadol 650', '<h2>Thành phần</h2><p><i>Hoạt chất: </i>Paracetamol 650mg.</p><p><i>Tá dược:</i> Tinh bột ngô, povidone K30, natri starch glycolat A, natri lauryl sulfat, magnesi stearat, hypromellose 2910, macrogol 400, propylen glycol, talc, titan dioxyd.</p><h2>Công dụng (Chỉ định)</h2><p>Hạ sốt.</p><p>Làm giảm các cơn đau từ nhẹ đến vừa như đau đầu và đau cơ thông thường, đau nhức do cảm cúm hay cảm lạnh, đau lưng, đau răng, đau do viêm khớp nhẹ và đau do hành kinh.</p><h2>Cách dùng - Liều dùng</h2><p>Người lớn và trẻ em trên 12 tuổi: uống 1 viên/lần, khoảng cách giữa các lần uống thuốc từ 4 - 6 giờ, không quá 6 viên/ngày.</p><p>Trẻ em từ 6 đến 12 tuổi: uống ½ viên/lần, khoảng cách giữa các lần uống thuốc từ 4 - 6 giờ, không quá 3 viên/ngày.</p><h2>Không sử dụng trong trường hợp sau (Chống chỉ định)</h2><p>Quá mẫn với các thành phần của thuốc.</p><p>Bệnh nhân thiếu hụt glucose-6-phosphat dehydrogenase.</p><p>Bệnh viêm gan tiến triển nặng, suy gan nặng.</p><h2>Lưu ý khi sử dụng (Cảnh báo và thận trọng)</h2><p>Không dùng với các thuốc khác có chứa paracetamol.</p><p>Không được dùng paracetamol để điều trị giảm đau quá 10 ngày ở người lớn hoặc quá 5 ngày ở trẻ em nếu không có chỉ định của bác sĩ.</p><p>Thận trọng khi sử dụng trên bệnh nhân có chức năng gan hoặc thận bị suy yếu.</p><p>Thận trọng đối với những bệnh nhân có tiền sử thiếu máu.</p><p>Nên tránh hoặc hạn chế uống rượu khi dùng thuốc vì rượu có thể làm tăng độc tính của paracetamol trên gan.</p><p>Bác sĩ cần cảnh báo bệnh nhân về các dấu hiệu của phản ứng trên da nghiêm trọng như hội chứng steven-Johnson (SJS), hội chứng hoại tử da nhiễm độc (TEN) hay hội chứng Lyell, hội chứng ngoại ban mụn mủ toàn thân cấp tính (AGEP).</p><h2>Tác dụng không mong muốn (Tác dụng phụ)</h2><p>Tác dụng phụ thường nhẹ và có thể hồi phục sau khi ngưng dùng thuốc.</p><p><i>Ít gặp: 1/1000 &lt; ADR &lt; 1/100</i></p><p>Trên da: nổi mẩn, ban đỏ hay mày đay.</p><p>Dạ dày-ruột: buồn nôn, nôn.</p><p>Huyết học: giảm bạch cầu trung tính, giảm bạch cầu, giảm toàn thể huyết cầu, thiếu máu.</p><p>Thận: Bệnh thận, độc tính thận khi lạm dụng dài ngày.</p><p><i>Hiếm gặp: ADR &lt; 1/1000</i></p><p>Phản ứng quá mẫn.</p><p><strong>Ngưng sử dụng và hỏi ý kiến bác sĩ nếu: </strong>xuất hiện dấu hiệu mới bất thường, các triệu chứng không cải thiện sau 7 ngày hoặc có sốt kèm theo.</p><h2>Tương tác với các thuốc khác</h2><p>Uống dài ngày với liều cao paracetamol có thể làm tăng tác dụng của thuốc chống đông máu như <i>coumarin</i> hay <i>dẫn xuất indandion.</i></p><p>Dùng đồng thời paracetamol và phenothiazin có thể gây hạ sốt nghiêm trọng.</p><p>Uống <i>rượu</i> quá nhiều và dài ngày có thể làm tăng nguy cơ gây độc tính của paracetamol trên gan.</p><p>Nguy cơ gây độc tính của paracetamol trên gan tăng khi dùng paracetamol liều cao và kéo dài trong khi đang dùng <i>các thuốc gây cảm ứng enzym ở microsom thể gan</i> như <i>isoniazid</i> hoặc thuốc chống co giật (gồm <i>phenytoin, barbiturat, carbamazepin).</i></p><p>Thải trừ của paracetamol có thể bị ảnh hưởng và nồng độ paracetamol trong huyết tương có thể thay đổi khi dùng chung với probenecid.</p><p>Colestyramin làm giảm hấp thu paracetamol nếu được dùng trong vòng 1 giờ trước hoặc sau khi uống paracetamol.</p><h2>Quá liều</h2><p><i>Triệu chứng:</i> Buồn nôn, nôn, đau bụng và xanh xao thường xuất hiện trong giờ đầu. Quá liều từ 10g trở lên (150mg/kg cân nặng ở trẻ em) có thể gây hủy hoại tế bào gan, dẫn đến hoại tử gan hoàn toàn và không hồi phục; toan chuyển hóa và bệnh não có thể dẫn đến hôn mê và chết. Ngoài ra, nồng độ aminotransferase và bilirubin huyết tương tăng, thời gian prothrombin kéo dài, có thể xuất hiện sau 12 - 48 giờ.</p><p><i>Xử trí:</i> Rửa dạ dày hoặc cho uống than hoạt để loại trừ ngay thuốc đã uống. Tiêm tĩnh mạch hoặc cho uống N-acetylcystein, thuốc giải độc đặc hiệu của paracetamol, hiệu quả nhất là trước giờ thứ 10 sau khi dùng quá liều.</p><h2>Lái xe và vận hành máy móc</h2><p>Thuốc không gây ảnh hưởng bất lợi đến khả năng lái xe và sửdụng máy móc.</p><h2>Thai kỳ và cho con bú</h2><p><strong>Sử dụng trên phụ nữ có thai: </strong>Chưa xác định được tính an toàn của paracetamol dùng khi thai nghén liên quan đến tác dụng không mong muốn có thể có đối với thai nhi. Do vậy, chỉ nên dùng thuốc này cho phụ nữ mang thai khi thật cần thiết.</p><p><strong>Sử dụng trên phụ nữ cho con bú: </strong>Không thấy có tác dụng không mong muốn ở trẻ nhỏ bú mẹ khi người mẹ dùng paracetamol, và vì thế thuốc có thể dùng được trong thời gian cho con bú.</p><h2>Bảo quản</h2><p>Để nơi khô ráo, tránh ánh sáng, nhiệt độ không quá 30°C.</p><h2>Quy cách đóng gói</h2><p>Chai 200 viên nén bao phim.</p><h2>Hạn dùng</h2><p>36 tháng kể từ ngày sản xuất.</p><h2>Dược lực học</h2><p>Paracetamol, một dẫn xuất para-aminophenol, có tác dụng hạ sốt và giảm đau. Thuốc không có hiệu quả điều trị viêm. Paracetamol làm giảm đau bằng cách làm tăng ngưỡng đau và hạ nhiệt thông qua tác động trên trung tâm điều nhiệt ở vùng dưới đồi, không gây kích ứng dạ dày.</p><p>Paracetamol thường là thuốc giảm đau hoặc hạ sốt được lựa chọn, đặc biệt ở người già và ở bệnh nhân không được chỉ định dùng salicylat hay các thuốc kháng viêm không steroid khác. Những bệnh nhân này bao gồm những người mắc bệnh hen, người có tiền sử loét tiêu hóa, và trẻ em.</p>', 'giảm đau, hạ sốt', 300000, 96, 'product_img', 'thuoc-giam-dau-ha-sot-glotadol-650mg-chai-200-vie-2-1.jpg', 1, '2023-02-09 19:36:15', '2023-02-20 10:24:43', 1),
(8, 'Viên ngậm Hauora First Up 1 Hour', '<h2>Thành phần</h2><p>Chiết xuất Thông Biển Sao 100mg, Chiết xuất Bạch Tật Lê 100mg, Cao khô Dâm Dương Hoắc 80mg, Cao khô Nhân Sâm 50mg, L-Arginine.HCL 50mg, Nhung Hươu 5mg.</p><p>Phụ liệu: Talc, lactose, magie stearat, hương bạc hà vừa đủ 1 viên.</p><h2>Công dụng</h2><p>Hỗ trợ tăng cường sinh lực cho nam giới, giúp bổ thận, tráng dương.</p><p>Hỗ trợ làm chậm quá trình mãn dục ở nam giới.</p><h2>Cách dùng - liều dùng</h2><p>Mỗi lần dùng 1 viên, dùng tối đa 1 lần trong ngày. Ngậm viên trong miệng cho tan hết, nên dùng trước khi ngủ 60 phút.</p><h2>Đối tượng sử dụng</h2><p>Nam giới trên 18 tuổi yếu sinh lý, mãn dục sớm.</p><p>Nam giới bị đau lưng mỏi gối, tiểu đêm nhiều lần do thận yếu.</p><h2>Lưu ý</h2><p>Không sử dụng cho người dưới 18 tuổi, người có tiền sử bị huyết áp cao, mắc bệnh tim mạch, tai biến mạch máu não.</p><p>Không sử dụng cho người mẫn cảm với bất kì thành phần nào của sản phẩm.</p><p>Thực phẩm này không phải là thuốc, không có tác dụng thay thế thuốc chữa bệnh.</p><h2>Bảo quản</h2><p>Bảo quản ở nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp.</p><h2>Quy cách đóng gói</h2><p>Hộp 8 viên.</p><h2>Hạn sử dụng</h2><p>3 năm kể từ ngày sản xuất.</p>', 'tăng cường sinh lực nam giới', 300000, 19, 'product_img', 'first-up-1-hour-8vien-1.jpg', 1, '2023-02-09 22:01:58', '2023-02-20 10:24:43', 2),
(9, 'Swisse Beauty Grape Seed', '<h2>Thông tin sản phẩm</h2><p>Swisse Beauty Grape Seed với Tinh Chất Hạt Nho khô, vitamin C và E, là một nguồn giàu proanthocyanidin giúp <strong>bổ sung dưỡng chất cần thiết</strong> của bạn.</p><p>Viên uống Swisse Ultiboost Grape Seed là một trong những sản phẩm cao cấp trên thị trường <strong>giúp làn da khỏe mạnh, căng tràn sức sống, cung cấp chất chống oxy hóa tự nhiên</strong> cho cơ thể và giúp <strong>giảm sưng chân cho những người bị phù chân.</strong></p><p>Việc bổ sung viên uống chống Oxy hóa từ hạt nho Swisse Grape Seed sẽ giúp cơ thể nhận được chất chống oxy hóa tự nhiên <strong>phá hủy các gốc tự do gây hại cho cơ thể</strong>, từ đó giúp các cơ quan, cấu trúc trong cơ thể hoạt động hiệu quả.&nbsp;</p><p>Đồng thời, viên uống Swisse Ultiboost Grape Seed còn giúp <strong>tăng sinh Collagen</strong> sẽ hỗ trợ các liên kết trong các cấu trúc cơ quan đó khỏe mạnh, ngăn chặn sự oxy hóa mạnh mẽ, đem lại làn da đàn hồi, săn chắc và sáng đều màu. Duy trì sức sống và nét thanh xuân, cải thiện sức khỏe và chất lượng cuộc sống.</p><p><img src=\"https://cdn.tgdd.vn/Products/Images/7004/286695/swisse-beauty-grape-seed-ho-tro-hinh-thanh-collagen-lo-180v-2.png\" alt=\"Viên uống Swisse Beauty Grape Seed\"></p><h2>Công dụng</h2><ul><li>Hỗ trợ hình thành collagen và sức khỏe làn da.</li><li>Bổ sung vitamin C và các dưỡng chất tự nhiên giúp <strong>chống oxi hóa</strong>, <strong>tăng cường sức đề kháng</strong> cho cơ thể, giúp cơ thể khỏe mạnh.</li><li>Hỗ trợ tốt cho sức khỏe người lớn tuổi, người già, người thường xuyên vận động gặp phải các vấn đề gây tổn thương,...</li><li>Thúc đẩy quá trình làm lành các vết thương.</li><li>Cải thiện dấu hiệu tuổi tác của cơ thể, vấn đề da sạm, da khô, thiếu sức sống,...</li><li>Bảo vệ cơ thể khỏi các tác nhân gây hại, giúp cơ thể khỏe mạnh và một làn da sáng khỏe, mịn mướt, hỗ trợ tăng sinh collagen và làm sáng da giúp duy trì vẻ trẻ đẹp tự nhiên, ngăn ngừa các dấu hiệu lão hóa.</li></ul><h2>Thành phần chính trong mỗi viên Swisse Beauty Grape Seed</h2><p>Hạt nho khô (chiết xuất Vitis Vinifera 118,75mg) 14,25g.</p><p>Vitamin C (ascorbic acid từ calcium ascorbate dihydrate) 22,5mg.</p><p>Sản phẩm có chứa sulfite. Không cho thêm lactose, gluten, trứng, đậu nành.</p><p><img src=\"https://cdn.tgdd.vn/Products/Images/7004/286695/swisse-beauty-grape-seed-ho-tro-hinh-thanh-collagen-lo-180v-3.png\" alt=\"Thành phần trong viên uống Swisse Beauty Grape Seed\"></p><h2>Công dụng của từng thành phần&nbsp;</h2><p>Vitamin lão hóa, làm sáng và đều màu da, giảm thiểu sẹo, thúc đẩy da tái tạo nhờ thành phần có chứa các đặc tính chống oxy hóa giúp bảo vệ tế bào chống lại tác hại của các gốc tự do. Nó đóng một vai trò không thể thiếu trong việc hình thành collagen, hỗ trợ hình thành các mô liên kết, trẻ hóa làn da.</p><p>Trong hạt nho chứa nhiều chất chống oxy hóa, giúp bảo vệ cơ thể khỏi tác hại tiềm ẩn của các gốc tự do.</p><p>Ngoài ra, dầu hạt nho có chứa proanthocyanidin với khả năng chống oxy hóa mạnh mẽ. Proanthocyanidin giúp cải thiện da xỉn màu nếu sử dụng đều đặn trên da, đồng thời giúp cải thiện các triệu chứng của tình trạng nám da (thường xảy ra do sự tăng sắc tố trên da thường gặp ở phụ nữ tiền mãn kinh).</p><p>Đặc biệt, sản phẩm không chứa đậu nành, men, trứng và hương vị nhân tạo và thích hợp cho người ăn chay hoặc thuần chay.</p><h2>Những ai nên dùng Swisse Beauty Grape Seed</h2><p>Người trưởng thành, người lớn tuổi, người đang chuẩn bị bước vô giai đoạn lão hóa.</p><p>Người có nhu cầu cải thiện làn da khô cằn, nhăn nheo, chảy xệ, lão hóa…</p><p>Người bị các vấn đề về chân như: sưng phù chân, nặng chân, đau nhức, ngứa, châm chích chân…</p><p>Người máu xấu có các vết thương lâu lành, dù là vết thương nhỏ nhưng cơ địa khó lành nhanh, đôi khi là dễ nhiễm khuẩn và dễ thành tổn thương nặng hơn.</p><h2>Hướng dẫn sử dụng</h2><p>Mỗi ngày 2 viên, uống trong hoặc sau bữa ăn 15 - 20 phút hoặc theo sự hướng dẫn của chuyên gia y tế.</p><p>Uống cùng với nước lọc, không nên kết hợp với các loại nước hoa quả hay sinh tố khác.</p><h2>Hướng dẫn bảo quản</h2><p>Đậy kín nắp sau khi sử dụng.&nbsp;</p><p>Bảo quản dưới 25°C, ở nơi khô ráo, thoáng mát.</p><h2>Lưu ý</h2><p>Thực phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh, hiệu quả sử dụng sản phẩm tùy thuộc cơ địa của từng người.&nbsp;</p><p>Vui lòng đọc kỹ hướng dẫn in trên bao bì sản phẩm trước khi sử dụng.</p><p>Không sử dụng cho người có mẫn cảm, kiêng kị với bất kỳ thành phần nào của sản phẩm.</p><p>Hãy liên hệ chuyên gia y tế để được tư vấn nếu có các triệu chứng khác thường.</p><p>Việc bổ sung vitamin và khoáng chất không thể thay thế một chế độ ăn uống cân bằng, việc bổ sung chỉ hỗ trợ nếu chế độ ăn uống không đủ.</p><p>Không dùng sản phẩm nếu nắp bị vỡ niêm phong.</p><p>Sử dụng đều đặn để có hiệu quả như ý.</p><p>Trong trường hợp thể trạng đặc biệt: phụ nữ có thai hoặc đang trong thời gian cho con bú,…. Cần tham khảo ý kiến chuyên gia trước khi sử dụng.</p><p>Để tránh xa tầm tay trẻ em.</p><h2>Hạn dùng</h2><p>36 tháng kể từ ngày sản xuất.</p><h2>Một số câu hỏi thường gặp về sản phẩm</h2><p><strong>1. Viên uống Swisse Grape Seed có phải là thuốc không?</strong></p><p>Viên uống Swisse Grape Seed không phải là thuốc mà&nbsp;là một loại thực phẩm bổ sung vì vậy không có tác dụng thay thế thuốc chữa bệnh. Swisse Grape Seed là sản phẩm của Mỹ được sản xuất bằng cách làm khô và nghiền phần hạt nho có vị đắng&nbsp;giúp cải thiện sức khỏe tim mạch, lưu thông máu tốt, tăng cường hệ miễn dịch cho cơ thể, nâng cao kháng thể, ngăn ngừa sự xâm nhập và lây nhiễm các virut gây bệnh.</p><p><strong>2. Viên uống Swisse Grape Seed có sử dụng được cho trẻ em không?</strong></p><p>Sản phẩm được khuyến cáo sử dụng cho người lớn từ 18 tuổi, vì vậy không sử dụng cho trẻ nhỏ. Nếu cần sử dụng, nên tham khảo ý kiến của các chuyên gia trước.</p><p><strong>3. Viên uống tinh chất nho Swisse Grape Seed sử dụng trong bao lâu có hiệu quả?</strong></p><p>Tùy theo cơ địa mỗi người mà viên uống cho hiệu quả là khác nhau. Theo như phản hồi thông thường người dùng, sử dụng sản phẩm đều đặn theo liệu trình trong 3 tháng có thể thấy các thay đổi tích cực của cơ thể. Có thể sử dụng thành các đợt cách nhau để bảo vệ sức khỏe.</p>', 'hỗ trợ hình thành collagen', 414400, 19, 'product_img', 'swisse-beauty-grape-seed-ho-tro-hinh-thanh-collagen-lo-180v-mac-dinh-4.jpg', 1, '2023-02-10 05:01:56', '2023-02-20 10:29:22', 2),
(10, 'Ctt Beliver', '<h2>Thành phần</h2><p>Mỗi viên nang mềm chứa:</p><p>Arginin HCl: 250mg, Cao Actiso: 5mg, Vitamin B1: 3mg, Vitamin B6: 3mg, Vitamin PP: 10mg, Bồ công anh: 50mg, Diệp hạ châu: 50mg.</p><p>Chất phụ gia gồm: dầu đậu nành, gelatin, glycerin vừa đủ 1 viên.</p><h2>Công dụng</h2><p>Giúp giải độc gan, bảo vệ tế bào gan, tăng cường chức năng gan trong các trường hợp: viêm gan, gan nhiễm mỡ, xơ gan, mệt mỏi chán ăn, ăn uống khó tiêu.</p><p>Giúp hạ men gan, hạn chế tổn thương tế bào gan do rượu, bia, dùng thuốc kháng lao, hóa chất có hại đến gan.</p><h2>Cách dùng – liều dùng</h2><p>Người lớn: Uống mỗi lần 1 - 2 viên, ngày uống 2 - 3 lần.</p><p>Trẻ em: Ngày uống 2 lần, mỗi lần 1 viên.</p><h2>Đối tượng sử dụng</h2><p>Dùng cho người bị viêm gan virus B, C, viêm gan cấp và mãn tính, gan nhiễm mỡ, rối loạn chức năng gan dẫn đến mệt mỏi, chán ăn, vàng da, bí tiểu, táo bón, mụn nhọt, dị ứng, mẩn ngứa, nổi mề đay, sạm da, nám má, người dùng nhiều rượu, bia, thuốc lá, dùng thuốc kháng lao dài ngày.</p><h2>Lưu ý</h2><p>Sản phẩm này không phải là thuốc, không có tác dụng thay thế thuốc chữa bệnh.</p><h2>Bảo quản</h2><p>Nơi khô, nhiệt độ dưới 30°C.</p><h2>Quy cách đóng gói</h2><p>Hộp 12 vỉ x 5 viên nang mềm.</p><h2>Hạn dùng</h2><p>36 tháng tính từ ngày sản xuất.</p>', 'hỗ trợ giải độc, tăng cường chức năng gan', 90000, 2, 'product_img', 'ctt-beliver-250mg-hinh-2.jpg', 1, '2023-02-10 05:15:51', '2023-02-10 05:29:41', 1),
(11, 'Nucos Super White', '<h2>Đặc điểm nổi bật</h2><p>Nucos Super White hộp 10 lọ&nbsp;xuất xứ từ Nhật Bản, với thành phần gồm collagen tự nhiên cùng chiết xuất nấm men, chiết xuất táo đỏ, coenzym Q10, chiết xuất nhau thai... giúp bổ sung dưỡng chất cho da, hỗ trợ làm giảm nám da, giúp&nbsp;da sáng đẹp. Sản phẩm phù hợp cho người trên 18 tuổi có nhu cầu chăm sóc da, muốn&nbsp;da sáng.</p><h2>Thành phần</h2><p>Trong 1 chai 50ml có chứa:</p><p>Collagen peptide (nguồn gốc từ cá)1,350mg, L-Ascorbic acid (vitamin C) 450mg, Chiết xuất nấm men (có chứa L-cysteine peptide, Glutathione) 100mg, Chiết xuất táo đỏ Haematococcus Algae (có chứa Astaxanthin) 50mg, Dung dịch Coenzyme Q10 (có chứa coenzyme Q10) 30mg, Dung dịch hỗn hợp vitamin (B3, Bó, E) 30mg, Chiết xuất nhau thai ngựa (có chứa nhau thai ngựa) 15mg, Dung dịch chiết xuất màu từ cà chua (có chứa Lycopene) 15mg.</p><p>Thành phần khác: Chất bảo quản: sodium benzoat (211), chất điều chỉnh độ acid: orthophosphoricacid 85% (338), citric acid (330), chất điều vị: erythritol (968), chất tạo ngọt: sucralose (955), hương vài thiều JL05531, hương vàl thiều NAG - 16798, hương vải thiều 4929, hương đào - sữa chua 1314. Nước tinh khiết được thêm vào cho đến 50ml.</p><h2>Công dụng</h2><p>Bổ sung dưỡng chất cho da, hỗ trợ làm giảm nám da, giúp&nbsp;da sáng đẹp.</p><h2>Cách dùng – liều dùng</h2><p>- Liều tấn công:&nbsp;1 chai mỗi ngày trong thời gian từ 1 - 3 tháng</p><p>- Liều duy trì: 3 - 6 chai mỗi tuần</p><p>Uống sau ăn sáng hoặc ăn trưa, ngon hơn khi uống lạnh.</p><p>Lắc đều trước khi sử dụng</p><h2>Đối tượng sử dụng</h2><p>Người trên 18 tuổi, nám da, tàn nhang, người muốn&nbsp;bảo vệ và cải thiện da.</p><h2>Lưu ý</h2><p>Tránh xa tầm tay trẻ&nbsp;em</p><p>Sản phẩm này không có&nbsp;tác dụng chẩn đoán, điều trị, chữa bệnh hoặc ngăn ngừa&nbsp;bệnh tật.</p><p><i>Thực phẩm này không phải là thuốc, không có tác&nbsp;dụng thay thế thuốc chữa bệnh.</i></p><h2>Bảo quản</h2><p>Bảo quản nơi khô ráo, thoáng mát.</p><h2>Quy cách đóng gói</h2><p>Hộp 10 lọ, lọ 50ml</p><h2>Hạn dùng</h2><p>02 năm kể từ ngày sản xuất</p>', 'làm trắng da, giảm nám', 1200000, 10, 'product_img', 'nucos-super-white-h-10l-mac-dinh-2.jpg', 1, '2023-02-10 05:46:37', '2023-02-10 08:27:38', 2),
(12, 'Khẩu trang y tế Winer 4 lớp màu xanh hộp 50 cái', '<h2>Đặc điểm sản phẩm</h2><p>Lọc sạch khí ngăn ngừa vi khuẩn.</p><p>Không gây kích ứng. Ngăn bụi, khí độc, mùi hôi, ô nhiễm.</p><p>Ngăn ngừa các bệnh lây qua đường hô hấp.</p><p>Không có sợi thủy tinh, không gây dị ứng.</p><p>Cản lực thở khí thấp.</p><p>Công suất lọc cao, kháng khuẩn.</p><h2><strong>Thành phần</strong></h2><p>Gồm 2 lớp vải không dệt, 1 lớp giấy lọc chất lượng cao, thun đeo tai, thanh chắn mũi.</p><h2><strong>Ứng dụng</strong></h2><p>Được sử dụng trong phòng thẩm mỹ, bệnh viện phòng khám và nha khoa.</p><p>Phòng dịch bệnh.</p><p>Sử dụng chống bụi hằng ngày.</p><h2>Hướng dẫn sử dụng</h2><p>Rửa tay trước khi đeo khẩu trang. Đặt khẩu trang lên mặt đeo dây vòng qua tai hướng mặt có màu ra ngoài. Điều chỉnh nẹp mũi vừa sát khuôn mặt. Kéo mép dưới khẩu trang che kín cằm.\\</p><h2><strong>Kích thước</strong></h2><p>17.5 x 9.5cm.</p><h2>Quy cách đóng gói</h2><p>Hộp 50 cái, màu xanh.</p>', 'Phòng dịch bệnh. Sử dụng chống bụi hằng ngày. Sử dụng trong phòng thẩm mỹ, bệnh viện...', 30000, 55, 'product_img', 'khau-trang-winer-4-lop-mau-xanh-hop-50-cai-mac-dinh-2.jpg', 19, '2023-02-20 10:45:40', '2023-02-20 10:45:40', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttypes`
--

CREATE TABLE `producttypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `producttypes`
--

INSERT INTO `producttypes` (`id`, `name`) VALUES
(1, 'thuốc'),
(2, 'thực phẩm chức năng'),
(3, 'dụng cụ y tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `account` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `account`, `phone`, `address`) VALUES
(1, 'Ngô Tú Ngọc', 'abc1@gmail.com', NULL, '$2y$10$rQX.HQescNYaavpCFXOQfuUYu7Vi7NKqCNynBKtFq5GMLdG6aUM2u', NULL, '2023-02-06 06:03:00', '2023-02-20 10:49:08', 1, 986940861490400, '038052337', 'Bắc Cường, Lào Cai'),
(2, 'Ngọc Ngạn', 'abc3@gmail.com', NULL, '$2y$10$0GEg2DYa1KDVBIQRDBE2h.mz8xwjho2oTUafUyK/56kiLrlCvdsa6', NULL, '2023-02-06 08:05:34', '2023-02-07 13:00:26', 0, 80000, NULL, NULL),
(3, 'Ngô Tú', 'ngongoctu161@gmail.com', NULL, '$2y$10$1OvfIVhjoWnEZVr6VWl0XuNAq3kNkYGtgcLJpu9qxj5PSNgVVEMFK', NULL, '2023-02-07 11:38:33', '2023-02-20 12:01:32', 0, 1740400, '09775985', 'Hà Nội'),
(4, 'Nguyễn Du', 'abc2@gmail.com', NULL, '$2y$10$TTHszdq2QXrH6PMkfvvEdeB.uCYuKHoi14x4GKc8r2unRErVdyif.', NULL, '2023-02-07 12:52:06', '2023-02-07 12:52:06', 0, 0, '5354523', 'Lào Cai');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `countrys`
--
ALTER TABLE `countrys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imgs_products_id_foreign` (`products_id`);

--
-- Chỉ mục cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manufacturers_countrys_id_foreign` (`countrys_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderproducts_orders_id_foreign` (`orders_id`),
  ADD KEY `orderproducts_products_id_foreign` (`products_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_users_id_foreign` (`users_id`),
  ADD KEY `orders_ordertypes_id_foreign` (`ordertypes_id`);

--
-- Chỉ mục cho bảng `ordertypes`
--
ALTER TABLE `ordertypes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_manufacturers_id_foreign` (`manufacturers_id`),
  ADD KEY `products_role_foreign` (`role`);

--
-- Chỉ mục cho bảng `producttypes`
--
ALTER TABLE `producttypes`
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
-- AUTO_INCREMENT cho bảng `countrys`
--
ALTER TABLE `countrys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `ordertypes`
--
ALTER TABLE `ordertypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `producttypes`
--
ALTER TABLE `producttypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `imgs`
--
ALTER TABLE `imgs`
  ADD CONSTRAINT `imgs_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD CONSTRAINT `manufacturers_countrys_id_foreign` FOREIGN KEY (`countrys_id`) REFERENCES `countrys` (`id`);

--
-- Các ràng buộc cho bảng `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD CONSTRAINT `orderproducts_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderproducts_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ordertypes_id_foreign` FOREIGN KEY (`ordertypes_id`) REFERENCES `ordertypes` (`id`),
  ADD CONSTRAINT `orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_manufacturers_id_foreign` FOREIGN KEY (`manufacturers_id`) REFERENCES `manufacturers` (`id`),
  ADD CONSTRAINT `products_role_foreign` FOREIGN KEY (`role`) REFERENCES `producttypes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
