-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 22, 2021 lúc 04:07 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_backend_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_06_02_175428_create_tbl_admin_table', 1),
(7, '2021_06_02_232414_create_tbl_category_product', 2),
(8, '2021_06_03_072547_create_tbl_brand_product', 3),
(9, '2021_06_03_074801_create_tbl_product', 4),
(10, '2021_06_06_043820_tbl_customer', 5),
(11, '2021_06_06_085327_tbl_shipping', 6),
(15, '2021_06_06_140449_tbl_payment', 7),
(16, '2021_06_06_140537_tbl_order', 7),
(17, '2021_06_06_140605_tbl_order_details', 7),
(19, '2021_06_09_040826_create_tbl_brand', 8),
(20, '2021_06_16_071606_tbl_customer', 9),
(21, '2021_06_16_075425_tbl_customer', 10),
(23, '2021_06_16_075618_tbl_customer', 11),
(24, '2021_06_16_083038_tbl_customer', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hieu Le', '0974697842', '2021-06-02 18:10:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_author`
--

DROP TABLE IF EXISTS `tbl_author`;
CREATE TABLE IF NOT EXISTS `tbl_author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_author`
--

INSERT INTO `tbl_author` (`author_id`, `author_name`, `author_description`, `author_image`, `author_slogan`) VALUES
(1, 'Lê Trung Hiếu', 'Tên: Lê Trung Hiếu thuộc Aquarius, sinh ra và lớn lên: Đà Lạt, thích Lucifer nhưng thừa hưởng ý chí Hokage cùng với cái đầu của Luffy, tài mọn: ngủ, thành tựu: ăn không bao giờ mập, trắc trở: đường tình duyên', 'leetrunghieu.jpg', 'Tán em không khó. Khó ở chỗ chả biết khó thể nào '),
(2, 'Cao Trung Hiếu', 'Nói chung xong cái đồ án là khoẻ rồi, Description cái gì', 'caotrunghieu.jpg', 'Anh Dev cục xúc thích cà khịa'),
(3, 'Cao Minh Hiếu', '• Họ tên: Cao Minh Hiếu • Là một Designer, Editor đang làm việc cho HIPFEST - Một tổ chức quốc tế được thành lập bởi các cựu du học sinh làm việc ở cả trong lẫn ngoài nước, dưới sự tài trợ chủ chốt từ iAN (International Alumni Network).', 'caominhhieu.jpg', 'Thứ duy nhất ta tìm kiếm là câu trả lời cho bản thân mình'),
(4, 'Trần Hữu Phúc', 'Tên: Trần Hữu Phúc Sở thích: đọc truyện, anime, đi du lịch dù không có tiền cũng ráng lếch đi. Yêu thích: thể thao đặc biệt là bóng đá. Thần tượng: Lionel Messi. Sở trường: ăn, ngủ, phá. Sở đoản: lười, lười vcl. Ước mơ: dùng mọi cách kiếm thật nhiều tiền', 'tranhuuphuc.jpg', 'Dù thế giới có quay lưng với em Thế giới hướng nào anh quay theo hướng đó');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_image`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'adidas.gif', 'adidas Limited AG là một thương hiệu chuyên sản xuất các sản phẩm thời trang, thiết bị, dụng cụ thể thao đến từ Đức, một thành viên của tập đoàn adidas Group\r\nNhà sáng lập: Adolf Dassler\r\nNgày thành lập: 18 tháng 8, 1949, Herzogenaurach, Đức\r\nTrụ sở: Herzogenaurach, Đức', 0, NULL, NULL),
(2, 'Gucci', 'gucci.png', 'The House of Gucci, hay được biết đến ngắn gọn là Gucci, là một biểu tượng thời trang sở hữu bởi Ý và Pháp, một nhãn hiệu đồ da nổi tiếng.\r\nNhà sáng lập: Guccio Gucci\r\nNgày thành lập: 1921, Florence, Ý\r\nCông ty mẹ: Kering', 0, NULL, NULL),
(3, 'Supreme', 'supreme.gif', 'Supreme là một thương hiệu thời trang của Mỹ khởi nguồn từ quần áo và ván trượt.\r\nNhà sáng lập: James Jebbia\r\nNgày thành lập: tháng 4 năm 1994, Thành phố New York, Tiểu bang New York, Hoa Kỳ\r\nCông ty mẹ: VF Corporation', 0, NULL, NULL),
(4, 'Hermes', 'hermes.png', 'Hermès là một công ty thời trang chuyên sản xuất hàng da, phụ kiện thời trang, nước hoa, hàng xa xỉ, và quần áo may sẵn.\r\nNhà sáng lập: Thierry Hermès\r\nNgày thành lập: 1837, Pa ri, Pháp\r\nTrụ sở: Pa ri, Pháp', 0, NULL, NULL),
(5, 'Calvin Klein', 'calvinklein.gif', 'Calvin Klein là một nhãn hiệu thời trang được nhà thiết kế cùng tên Calvin Klein thành lập.\r\nNgày thành lập: 1968, Thành phố New York, Tiểu bang New York, Hoa Kỳ\r\nTrụ sở chính: New York City, Hoa Kỳ\r\nNhà sáng lập: Calvin Klein, Barry K. Schwartz', 0, NULL, NULL),
(6, 'Chanel', 'chanel.gif', 'Chanel là tên thông dụng của một hãng thời trang Pháp.\r\nNhà sáng lập: Coco Chanel\r\nNgày thành lập: 1910, Pa-ri, Pháp\r\nTrụ sở: Luân Đôn, Vương Quốc Anh\r\nCông ty mẹ: Chanel Limited', 1, NULL, NULL),
(7, 'Nike', 'nike.gif', 'Nike, Inc. là một tập đoàn đa quốc gia của Mỹ hoạt động trong lĩnh vực thiết kế, phát triển, sản xuất, quảng bá cũng như kinh doanh các mặt hàng giày dép, quần áo, phụ kiện, trang thiết bị và dịch vụ liên quan đến thể thao.\r\nNgày thành lập: 25 tháng 1, 1964, Eugene, Oregon, Hoa Kỳ\r\nTrụ sở: Beaverton, Oregon, Hoa Kỳ\r\nCông ty con: Converse, NIKE Australia Pty. Ltd, THÊM\r\nNhà sáng lập: Phil Knight, Bill Bowerman', 0, NULL, NULL),
(8, 'Prada', 'prada.gif', 'Prada là một nhãn hiệu thời trang của Ý chuyên về các sản phẩm cao cấp cho nam và nữ.\r\nNhà sáng lập: Mario Prada\r\nNgày thành lập: 1913, Milan, Ý\r\nTrụ sở: Milan, Ý\r\nCông ty mẹ: Prada Holding S.P.A.', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

DROP TABLE IF EXISTS `tbl_category_product`;
CREATE TABLE IF NOT EXISTS `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_image`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 'Shirt', 'shirt.jpg', 0, NULL, NULL),
(2, 'T-shirt', 'T-shirt', 'T-shirt.jpg', 0, NULL, NULL),
(3, 'Jacket', 'Jacket', 'Jacket..png', 0, NULL, NULL),
(4, 'Sandals', 'Sandals', 'Sandals.jpg', 0, NULL, NULL),
(5, 'Shoes', 'Shoes', 'Shoes.png', 0, NULL, NULL),
(6, 'Pants', 'Pants', 'Pants.jpg', 0, NULL, NULL),
(7, 'Jean', 'Jean', 'Jean.jpg', 1, NULL, NULL),
(8, 'Short', 'Short', 'Short.jpg', 1, NULL, NULL),
(9, 'Hat', 'Hat', 'Hat.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_rating` int(11) DEFAULT 5,
  `time_post` datetime DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment_content`, `comment_rating`, `time_post`, `product_id`, `customer_id`) VALUES
(59, 'Cái nón gì giống cáo quần vậy ??', 4, '2021-06-21 03:05:23', 276, 18),
(60, 'Tôi năm nay hơn 70 tuổi rồi mà tôi chưa thấy cái nón nào xấu như cái nón này', 1, '2021-06-21 03:06:32', 276, 21),
(61, 'Tôi đang bình luận 1 bình luận mới', 3, '2021-06-21 03:15:27', 276, 18),
(64, 'Tôi đã sai', 2, '2021-06-21 03:29:41', 276, 18),
(66, '3 sao', 3, '2021-06-22 08:58:13', 24, 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(18, 'Cao Trung Hiếu', 'caotrunghieu.tdc2019@gmail.com', '781e5e245d69b566979b86e28d23f2c7', 363054865, NULL, NULL),
(19, 'Cao Trung Hiếu', 'caotrunghieu@gmail.com', '781e5e245d69b566979b86e28d23f2c7', 123456789, NULL, NULL),
(20, 'Cao Trung Hiếu', 'caotrunghieu.tdc20192@gmail.com', '0192023a7bbd73250516f069df18b500', 123456789, NULL, NULL),
(21, 'Trần Hữu Phúc', 'tranhuuphuc@gmail.com', '781e5e245d69b566979b86e28d23f2c7', 123456789, NULL, NULL),
(22, 'Hiếu Cao', '19211tt0067@mail.tdc.edu.vn', '781e5e245d69b566979b86e28d23f2c7', 363054865, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(105, 22, 59, 167, '400,000.00', 'Đang giao hàng', NULL, NULL),
(103, 18, 57, 165, '210,000.00', 'New Status', NULL, NULL),
(104, 18, 58, 166, '655,000.00', 'Pending...', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(74, 105, 25, 'Áo Sơ mi Adidas SM-224', '200000', 2, NULL, NULL),
(73, 104, 28, 'Áo sơ mi adidas', '260000', 1, NULL, NULL),
(70, 103, 24, 'Áo Sơ Mi Nam Trắng Adidas GS120', '210000', 1, NULL, NULL),
(71, 104, 24, 'Áo Sơ Mi Nam Trắng Adidas GS120', '210000', 1, NULL, NULL),
(72, 104, 27, 'ÁO SƠ MI TRẮNG ADIDAS ASM658', '185000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(167, '1', 'Pending...', NULL, NULL),
(166, '1', 'Pending...', NULL, NULL),
(165, '1', 'Pending...', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_star_rating` int(11) DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=283 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `product_star_rating`, `created_at`, `updated_at`) VALUES
(24, 1, 1, 'Áo Sơ Mi Nam Trắng Adidas GS120', 'Áo Sơ Mi Nam Trắng Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính', 'none', '210000', 'Ao-So-Mi-Nam-Trang-Adidas-bodz-1.jpg', 0, 3, NULL, NULL),
(25, 1, 1, 'Áo Sơ mi Adidas SM-224', 'Áo Sơ Mi Nam Trắng Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính ', 'none', '200000', 'agFWIkQl.jpg', 1, 5, NULL, NULL),
(26, 1, 1, 'ÁO SƠ MI NAM THỜI TRANG CAO CẤP ADIDAS', 'Áo Sơ Mi Nam Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính, phù hợp cho sinh viên', 'none', '130000', '46b432b98161d3ec905b1710cf8a8e34.jpg', 1, 5, NULL, NULL),
(27, 1, 1, 'ÁO SƠ MI TRẮNG ADIDAS ASM658', 'Phong cách Hàn Quốc ôm body, in logo Adidas với thiết kế thanh lịch, ba nút ngang ở cổ áo tạo sự trẻ trung và đậm chất nam tính. Chất liệu thông thoáng', 'none', '185000', 'ao-so-mi-trang-adidas-asm658-4839-slide-1.jpg', 0, 5, NULL, NULL),
(28, 1, 1, 'Áo sơ mi adidas', 'Vải kate lụa co giãn nhẹ, màu sắc có thể hơi khác do ánh sáng', 'none', '260000', '22448570_1678034495602399_2960329806400078310_n.jpg', 0, 5, NULL, NULL),
(29, 1, 1, 'Áo sơ mi adidas SB135', 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng. ', 'none', '250000', '41575497_2048526202127012_1411856480063193088_n.jpg', 0, 5, NULL, NULL),
(30, 1, 1, 'Áo sơ mi adidas SB140', 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng.', 'none', '250000', '41462116_2048526212127011_6155881302852632576_n.png', 0, 5, NULL, NULL),
(31, 1, 1, 'Áo sơ mi adidas SB139', 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng.', 'none', '250000', '41527296_2048526198793679_7924116083030622208_n.png', 0, 5, NULL, NULL),
(32, 2, 1, 'WXE TEE AOP', 'No returns, no refunds Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền trừ trường hợp \n             pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và khuyến mãi nào. Giới hạn số lượng 1 sản phẩm \n             trên mỗi đơn hàng.', 'none', '700000', 'WxE_Tee_AOP_Nhieu_mau_H43944_21_model.jpg', 1, 5, NULL, NULL),
(33, 2, 1, 'LINEAR LOGO TEE', 'Áo phong thiết kế thoáng mát, nhẹ nhàng', 'none', '700000', 'LINEAR_LOGO_TEE_Ngoc_lam_HB1818_21_model.jpg', 0, 5, NULL, NULL),
(34, 2, 1, 'LINEAR REPEAT', 'Áo phong xanh đậm thiết kế đơn giản, nhẹ nhàng', 'none', '700000', 'LINEAR_REPEAT_Mau_xanh_da_troi_GN7128_21_model.jpg', 1, 5, NULL, NULL),
(35, 2, 1, 'ÁO THUN GRAPHIC SPRT', 'Dấu ấn lịch sử của adidas trải dài biết bao lĩnh vực, bao thế hệ và vượt xa mọi kỳ vọng. Không giới hạn. \n             Hãy mang trọn tâm thế ấy khi diện chiếc áo thun này. Chính xác là hãy luôn mang trọn tâm thế ấy, \n             nhưng logo adidas hiện diện như lời nhắc nếu bạn cần. Nếu không, bạn sẽ đơn giản là tận hưởng cảm giác dễ chịu đến từ chất vải cotton \n             mềm mại. Các sản phẩm cotton của chúng tôi giúp hỗ trợ ngành trồng bông bền vững. Sản phẩm này thể hiện mong muốn của chúng tôi hướng \n             tới chấm dứt rác thải nhựa.', 'none', '850000', 'Ao_thun_graphic_SPRT_trang_GN2428_21_model.jpg', 0, 5, NULL, NULL),
(36, 2, 1, 'ÁO THUN GRAPHIC ICONS PRIMEBLUE FOR THE OCEANS', 'CHIẾC ÁO THUN GRAPHIC LÀM TỪ CHẤT LIỆU TÁI CHẾ. Tái chế thật phong cách. Chiếc áo thun ngắn tay adidas này mang họa tiết \n             graphic \"Reduce and Reuse\" cỡ lớn trước ngực. Sắc màu táo bạo cho bạn vẻ ngoài đầy nổi bật. Sản phẩm này may bằng vải công nghệ \n             Primeblue, chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.', 'none', '480000', 'Ao_Thun_Graphic_Icons_Primeblue_For_The_Oceans_DJen_GL3263_21_model.jpg', 1, 5, NULL, NULL),
(37, 2, 1, 'ÁO THUN 3 SỌC SPRT', 'CHIẾC ÁO THUN COTTON MỀM MẠI VỚI THIẾT KẾ TỐI GIẢN. Đơn điệu? Không hề. Nâng tầm outfit adidas của bạn với chiếc áo thun \n             SPRT này. Thêm phần phong cách với thiết kế viền 3 Sọc và logo Ba Lá thêu nổi. Vì nhàm chán không phải là tính cách của bạn. \n             Các sản phẩm cotton của chúng tôi giúp hỗ trợ ngành trồng bông bền vững. Sản phẩm này thể hiện mong muốn của chúng tôi hướng tới \n             chấm dứt rác thải nhựa.', 'none', '850000', 'Ao_thun_3_Soc_SPRT_trang_GN2418_21_model.jpg', 0, 5, NULL, NULL),
(38, 2, 1, 'ÁO THUN GRAPHIC RUN FOR THE OCEANS', 'CHIẾC ÁO THUN CHẠY BỘ VÌ TƯƠNG LAI ĐẠI DƯƠNG XANH. Bất kể trên hè phố, đường mòn hay sân vận động, bộ môn chạy bộ đều kết nối bạn với mặt đất. \n             Hãy chung tay cùng adidas quyết tâm bảo vệ Trái Đất. Là một bước tiến nhỏ góp phần chấm dứt rác thải nhựa, chiếc áo thun chạy bộ này làm từ chất liệu tái \n             chế. Áo giúp bạn luôn khô ráo nhờ công nghệ AEROREADY thấm hút ẩm. Sản phẩm này may bằng vải công nghệ Primeblue, chất liệu tái chế hiệu năng cao có \n             sử dụng sợi Parley Ocean Plastic.', 'none', '550000', 'Ao_thun_graphic_Run_for_the_Oceans_Be_GJ6456_21_model.jpg', 0, 5, NULL, NULL),
(39, 2, 1, 'ÁO THUN CHẠY BỘ HEAT.RDY', 'Đánh bay mồ hôi nhễ nhại và chấm dứt vấn nạn rác thải nhựa. Chiếc áo thun chạy bộ này làm từ chất liệu tái chế, là một phần cam kết của adidas \n            hướng tới chấm dứt rác thải nhựa. Chất vải công nghệ HEAT.RDY cho bạn cảm giác mềm mại, siêu nhẹ trên da. Và cả cảm giác tạo ra sự khác biệt. \n            Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.', 'none', '1100000', 'Ao_Thun_Chay_Bo_HEAT.RDY_trai_cam_GM1544_21_model.jpg', 0, 5, NULL, NULL),
(40, 2, 1, 'ÁO THUN FORUM ', 'ÁO THUN FORUM', 'none', '700000', 'áo-thun-forum.jpg', 0, 5, NULL, NULL),
(41, 2, 1, 'ÁO THUN GRAPHIC PHỦ HỌA TIẾT', 'CHIẾC ÁO THUN CỔ TRÒN IN HỌA TIẾT RẰN RI. Đôi khi trang phục rằn ri giúp bạn nổi bật chứ không phải để ẩn mình. Với những nét cọ mạnh mẽ, \n            chiếc áo thun adidas này biến tấu họa tiết rằn ri theo hướng hội họa. Chất vải jersey cotton mềm mại chính là tấm toan vẽ. \n            Các sản phẩm cotton của chúng tôi hỗ trợ ngành trồng bông bền vững. Đây là một phần cam kết của chúng tôi hướng tới chấm dứt rác thải nhựa.', 'none', '1100000', 'Ao_Thun_Graphic_Phu_Hoa_Tiet_trang_GP0884_21_model.jpg', 1, 5, NULL, NULL),
(42, 3, 1, 'ÁO GIÓ R.Y.V.', 'ÁO KHOÁC SIÊU NHẸ GIÚP BẠN LÊN ĐỒ PHÚT CHÓT. Sải bước mạnh mẽ. Lan tỏa tuyên ngôn. Tự tin thể hiện cá tính. Khi có cả một ngày dài bận rộn phía trước,\n             đừng quên mang theo chiếc áo gió adidas này để bạn luôn sành điệu và thoải mái.', 'none', '2200000', 'Ao_gio_R.Y.V._nau_GD9300_21_model.jpg', 0, 5, NULL, NULL),
(43, 3, 1, 'ÁO GIÓ ADIDAS PT3 KARKAJ', 'No description', 'none', '1900000', 'áo-gió-adidas-pt3-karkaj.jpg', 1, 5, NULL, NULL),
(44, 3, 1, 'ÁO KHOÁC GIÓ NGẮN TAY', 'CHIẾC ÁO GIÓ CHƠI GOLF CHE CHẮN CHO BẠN TRONG ĐIỀU KIỆN THỜI TIẾT THẤT THƯỜNG. Điều kiện thời tiết thay đổi đòi hỏi sự linh hoạt trong thi đấu.\n             Chiếc áo gió chơi golf adidas này sẽ đồng hành cùng bạn khi thời tiết thất thường. Cổ đứng và khóa kéo lửng giúp bạn tùy chỉnh độ che chắn. Chất vải chắn\n              gió giúp bảo vệ bạn khi trời trở gió. Chất liệu mềm mại, thoáng khí và co giãn bốn chiều cho khả năng vận động không giới hạn. Sản phẩm này may bằng vải \n              công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao', 'none', '1700000', 'Ao_khoac_gio_ngan_tay_DJen_GM0084_21_model.jpg', 1, 5, NULL, NULL),
(45, 3, 1, 'ÁO GIÓ ADICOLOR FTO', 'CHIẾC ÁO GIÓ ADIDAS ADICOLOR MANG HƠI HƯỚNG RETRO. Ghi điểm với phong cách 3 Sọc. Không ngừng nghỉ. Xuống phố đầy phong cách bất chấp mọi thời\n             tiết với chiếc áo gió này. Thiết kế ba màu đậm chất hoài niệm mang đến cho bạn phong cách thể thao retro. Trời trở gió ư? Chuyện nhỏ.Mẫu áo gió này may\n             bằng vải công nghệ Primeblue, chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.', 'none', '2700000', 'Ao_Gio_Adicolor_FTO_DJo_GN3561_21_model.jpg', 0, 5, NULL, NULL),
(46, 3, 1, 'ÁO KHOÁC CHẠY BỘ HALF-ZIP PRIMEBLUE', 'CHIẾC ÁO KHOÁC CHẠY BỘ ẤM ÁP CÓ TÚI. Đừng để trời lạnh làm bạn nhụt chí. Hãy ra đường chạy bộ với cảm giác ấm áp dễ chịu đến từ chiếc áo khoác chạy bộ adidas này. \n            Các chi tiết tinh tế như khóa kéo lửng và lỗ xỏ ngón cái giúp bạn điều chỉnh độ che chắn tùy ý. Túi khóa kéo trước ngực đựng điện thoại khi bạn mu ốn đếm bước chân. \n            Chiếc áo khoác này làm từ chất liệu tái chế thân thiện với Trái Đất, cũng chính là nơi chúng ta chạy bộ.Sản phẩm này may bằng vải công nghệ Primeblue, \n            chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.', 'none', '1400000', 'Ao_Khoac_Chay_Bo_Half-Zip_Primeblue_trang_GP6487_21_model.jpg', 0, 5, NULL, NULL),
(47, 4, 1, 'SANDAL ADILETTE COMFORT', 'ĐÔI DÉP PHONG CÁCH GIÚP BẠN THOẢI MÁI MỖI NGÀY. Trước hết để bàn chân chìm vào thoải mái. Với thiết kế cổ điển, đôi dép adidas này chính là \n            thực thể cô đọng tính đa năng và cảm giác thoải mái. Thân dép có đường viền ôm chân giúp nâng đỡ êm ái cho bạn cả ngày dễ chịu. Thân dép quai ngang đầy \n            phong cách tự hào thương hiệu adidas.', 'none', '800000', 'Sandal_Adilette_Comfort_DJen_FZ1750.jpg', 0, 5, NULL, NULL),
(48, 4, 1, 'DÉP ĐẾ BẦN ADILETTE', 'ĐẮM MÌNH TRONG KHUNG CẢNH BIỂN XANH CÁT TRẮNG KHI MANG ĐÔI DÉP ADILETTE NÀY. Hòa mình vào xung quanh hoặc tự tạo nên khung cảnh. \n            Thật dễ dàng với họa tiết đại dương mơ màng trên phần quai bằng da mượt mà của đôi dép adidas adilette này. \n            Nếu vẫn chưa nghe thấy tiếng sóng biển thì bạn cũng sắp tới nơi rồi. Đôi dép này sẽ giúp bạn luôn thoải mái suốt dọc đường.', 'none', '1500000', 'Dep_DJe_Ban_adilette_trang_GZ1025.jpg', 1, 5, NULL, NULL),
(49, 4, 1, 'DÉP XỎ NGÓN EEZAY FLIP-FLOPS', 'ĐÔI XĂNG ĐAN DÀNH CHO VIỆC DẠO CHƠI TRÊN BIỂN VỚI LỚP ĐỆM SIÊU NHẸ. Một thiết kế kinh điển mang lại sự thoải mái hàng ngày. \n            Đôi dép xỏ ngón nhẹ này thật tiện để tháo và xỏ khi ở trên bãi biển. Được thiết kế với lớp đệm tăng cường, đôi giày mang lại cho người đi cảm giác nhẹ nhàng, \n            êm ái.', 'none', '500000', 'Dep_xo_ngon_Eezay_Flip-Flops_Hong_FY8112.jpg', 0, 5, NULL, NULL),
(50, 4, 1, 'DÉP NHÀ TẮM ADILETTE', 'DÉP QUAI NGANG LÓT ĐỆM CHO BÉ CẢM GIÁC THOẢI MÁI SAU GIỜ BƠI. Nuông chiều đôi chân bé khi ra khỏi bể bơi với đôi dép trẻ em thoải mái này. Nhanh khô và mềm mại, \n            đôi dép này nâng niu bàn chân bé với lớp đệm siêu nhẹ. Biểu tượng adidas cỡ lớn táo bạo cho vẻ ngoài kinh điển.', 'none', '480000', 'Dep_nha_tam_Adilette_DJen_FZ1716.jpg', 0, 5, NULL, NULL),
(51, 4, 1, 'DÉP ADILETTE COMFORT', 'ĐÔI DÉP THOẢI MÁI PHÙ HỢP CẢ TRONG VÀ NGOÀI PHÒNG GYM. Đôi dép adidas này đẹp đến mức bạn sẽ muốn đi suốt cả ngày chứ không chỉ trong phòng thay đồ. Dép cho cảm giác \n            siêu thoải mái nhờ lòng dép ôm chân và quai ngang mềm dẻo dễ chịu mà cố định bàn chân chắc chắn. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất \n            liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', 'none', '800000', 'Dep_adilette_Comfort_DJen_FZ1701.jpg', 0, 5, NULL, NULL),
(52, 5, 1, 'Giày Sneaker Nam Adidas ZX 2K 4D FW2002 “Cloud White”', 'Hàng nghìn vận động viên. Nhiều năm trời thu thập dữ liệu. adidas 4D chính là công nghệ cho tương lai. Đế giữa in kỹ thuật số không chỉ mang \n            vẻ ngoài tân tiến, từng mảng lưới làm bằng nhựa lỏng cho cảm giác độc đáo dưới chân. Phom giày được chế tác bằng ánh sáng và hoàn thiện bằng nhiệt. \n            Tất cả tạo nên một đôi giày chạy bộ với thiết kế riêng thúc đẩy bạn tiến lên phía trước. Phiên bản đường phố này có phom dáng tối ưu, bề mặt sần và màu sắc \n            neon vui mắt, gợi nhớ đến dòng giày ZX lần đầu ra mắt vào thập niên 80.', 'none', '6000000', 'zx-2k-4d-shoes-white-fw2002-01-standard.jpg', 0, 5, NULL, NULL),
(53, 5, 1, 'Giày Sneaker Nam Adidas Ultraboost 20 City Pack FX7815 “Osaka”', 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày Adidas Ultraboost 20 FX7815 hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. \n            Các đường may trong trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải \n            mái hơn. Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi', 'none', '5000000', 'ultraboost-20-city-pack-hype-djen-fx7815-01-standard.jpg', 1, 5, NULL, NULL),
(54, 5, 1, 'Giày Sneaker Nam Adidas Ultraboost 4.0 DNA FU9993 “5th Anniversary”', 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. \n            Các đường may trong trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. \n            Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy \n            mãi mãi.', 'none', '5000000', 'ultraboost-dna-shoes-black-fu9993-01-standard.jpg', 0, 5, NULL, NULL),
(55, 5, 1, 'Giày Sneaker Nam Adidas Ultraboost 4.0 DNA FW4898 “Grey Silver”', 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. Các đường may trong trợ \n            lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. Lớp đệm đàn \n            hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi.', 'none', '5000000', 'ultraboost-dna-shoes-grey-fw4898-01-standard.jpg', 1, 5, NULL, NULL),
(56, 5, 1, 'Giày Sneaker Nam Adidas X9000L3 EH0047 ”Core Black”', 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. Các đường may trong \n            trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. \n            Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi.', 'none', '5000000', 'x9000l3-shoes-black-eh0047-01-standard.jpg', 0, 5, NULL, NULL),
(57, 6, 1, 'QUẦN THỂ THAO VẢI DỆT LOGO BA LÁ LỚN TRỪU TƯỢNG', 'QUẦN THỂ THAO VỚI LOGO BA LÁ TRONG DIỆN MẠO MỚI. Bạn những tưởng logo Ba Lá chỉ có kích thước nhỏ? Không hẳn. Chiếc quần thể thao adidas này tự hào khoe logo trứ danh \n            đầy nổi bật. Để bạn luôn tự tin, táo bạo và sẵn sàng xuống phố', 'none', '1800000', 'Quan_the_thao_vai_det_logo_Ba_La_lon_truu_tuong_DJen_GE0831_21_model.jpg', 1, 5, NULL, NULL),
(58, 6, 1, 'QUẦN THỂ THAO 3 SỌC BA LÁ 3D', 'QUẦN THỂ THAO MẶC HÀNG NGÀY TÔN VINH BIỂU TƯỢNG 3 SỌC. Bạn đang lên đồ? Đừng căng thẳng. \n            Khỏi cần đau đầu khi đã có chiếc quần thể thao adidas này. \n            Ban đầu vốn được thiết kế cho cảm giác thoải mái bên ngoài sân đấu, \n            trang phục này đã lấn sân mạnh mẽ kể từ thập niên 70. Trên sân khấu. Trong đám đông. \n            Trên đường phố. Chắc chắn bạn sẽ bắt gặp hình bóng của phong cách đầy biểu tượng này mỗi ngày. \n            Nhưng bạn vẫn có thể tạo nên chất riêng của mình. Vì bất kể bạn mặc gì, đó chính là cá tính của bạn.', 'none', '1800000', 'Quan_the_thao_3_Soc_Ba_La_3D_Mau_vang_GE0845_21_model.jpg', 0, 5, NULL, NULL),
(59, 6, 1, 'TRACK PANTS VẢI DỆT SPRT SUPERSPORT', 'CHIẾC QUẦN TRACK PANTS TÔN VINH DI SẢN THỂ THAO CÙNG NÉT BIẾN TẤU MỚI MẺ. Thì ra bạn hoàn toàn có thể mặc theo mọi phong cách. \n            Ít nhất là với chiếc quần track pants adidas này. Quần vừa thoải mái như đồ mặc nhà lại vừa chất chơi khi diện ra đường. Chẳng cần thay đồ khi hội bạn nổi \n            hứng hẹn nhau đi chơi. Bởi bạn vốn đã sẵn sàng cho ngày mới năng động. Hoặc lười biếng. Sản phẩm này có sử dụng chất liệu tái chế, là một phần cam kết của \n            chúng tôi hướng tới chấm dứt rác thải nhựa.', 'none', '2200000', 'Track_Pants_Vai_Det_SPRT_SuperSport_DJen_GN2462_21_model.jpg', 0, 5, NULL, NULL),
(60, 6, 1, 'QUẦN NỈ R.Y.V.', 'QUẦN ADIDAS MANG PHONG CÁCH THỜI TRANG ĐƯỜNG PHỐ ĐẬM CHẤT THƯƠNG HIỆU. Mỗi chi tiết, thói quen hay tính cách đều làm nên con người bạn. \n            Bạn có thể chọn phong cách tinh tế hoặc táo bạo. Nhưng đó vẫn luôn là bạn. Cơ hội mới để bộc lộ bản thân. Tinh thần chính của bộ sưu tập adidas Reveal \n            Your Voice là tiên phong mở đường và kiến tạo xu hướng của riêng bạn. Chiếc quần nỉ R.Y.V. này khoe những mảng nylon màu sắc táo bạo cho vẻ ngoài thu hút mọi \n            ánh nhìn.', 'none', '1800000', 'Quan_ni_R.Y.V._Xam_FM2239_21_model.jpg', 0, 5, NULL, NULL),
(61, 6, 1, 'TRACK PANTS TRICOLOR ADICOLOR', 'TRACK PANTS ADICOLOR ÁNH KIM THÊU LOGO BA LÁ. Không thể nhầm lẫn. Diện lên mình phong cách adidas hoàn toàn mới mẻ với chiếc track pants này. \n            Chất liệu màng bạch kim tạo hiệu ứng như phủ lớp bạc lóng lánh. Nếu chừng đó vẫn chưa đủ nổi bật, các logo Ba Lá thêu nổi sẽ giúp bạn nâng tầm phong cách. \n            Tự tin chinh phục ngày mới. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.', 'none', '2200000', 'Track_pants_Tricolor_Adicolor_Bac_GN4213_21_model.jpg', 0, 5, NULL, NULL),
(62, 8, 1, 'QUẦN SHORT 3 SỌC KẺ', 'MẪU QUẦN SHORT VỚI PHONG CÁCH 3 SỌC KẺ VƯỢT THỜI GIAN. Mẫu quần short này tôn vinh phong cách adidas đích thực. \n            Quần may bằng vải thun vảy cá mềm mại cho cảm giác dễ chịu. Bộ sưu tập Adicolor. Lấy cảm hứng từ di sản của adidas, Adicolor hiện đại mà đậm chất adidas. \n            Các chi tiết mang tính biểu tượng.3 Sọc Kẻ đặc trưng và logo thêu Bông Hoa Ba Cánh khoe niềm tự hào adidas', 'none', '1200000', 'Quan_short_3_Soc_Ke_DJen_DH5798_21_model.jpg', 1, 5, NULL, NULL),
(63, 8, 1, 'Quần short thể thao nam Adidas - DU1577', 'Chiếc quần short tập luyện này giúp cho bạn khô ráo khi tăng cường độ tập luyện squat và đạp đùi. Chất vải siêu nhẹ giúp rũ sạch mồ hôi trên da bạn. \n            Miếng can bằng vải lưới mang lại khả năng thông khí có định hướng trong khi tập luyện.', 'none', '550000', 'untitled1_92e9c598afcc4256826610bb88d9f238_small.jpg', 0, 5, NULL, NULL),
(64, 8, 1, 'Quần short thể thao Nam Adidas ID Stadium Sho - DU1143', 'Quần short thể thao Nam Adidas ID Stadium Sho - DU1143 được sử dụng công nghệ hiện đại vào các sản phẩm quần áo để tăng cường sự lưu thông nhiệt \n            và độ ẩm cho người sử dụng suốt một ngày dài hoạt động. Thiết kế thời trang, năng động là sự kết hợp công nghệ của Adidas tạo sự thoải mái, uyển chuyển cho \n            người mặc. Màu sắc trang nhã, phong cách hiện đại sẽ góp phần khẳng định phong cách thời trang của bạn. Thiết kế trẻ trung năng động, dễ dàng mix đồ tao nên \n            phong cách thời trang cá tính riên bạn.', 'none', '600000', '6545908bf049b6d00aecf52e56ac7fd1.jpg', 1, 5, NULL, NULL),
(65, 8, 1, 'Adidas - Quần ngắn Nam 4K 3S+ Short Core Sport SS20-FJ72', 'Bạn không thể kiểm soát nhiệt độ. Nhưng bạn có thể kiểm soát mức độ thoải mái của bạn. Trải nhiệm với áo thun tập luyện Adidas này để luyện tập \n            trong những đợt nắng nóng. Chất vải nhẹ giúp làm mát, giữ cho bạn khô ráo và cho bạn hoàn toàn tự do di chuyển. Kiểu dáng đẹp và kỹ thuật khâu cao cấp với \n            đường khâu zigzag bền và kết thúc liên kết mịn.', 'none', '1500000', '14_4c5976ee30bf49a28a48189113677c1d_master.jpg', 0, 5, NULL, NULL),
(66, 8, 1, 'QUẦN SHORT KẺ SỌC NHỎ ULTIMATE365 CLUB', 'QUẦN SHORT CHƠI GOLF CHO CHUYỂN ĐỘNG DỄ DÀNG. Bỏ lại sau lưng tuần làm việc căng thẳng. Tập trung vào cú vung gậy với chiếc quần short chơi \n            golf adidas Ultimate365. Bạn sẽ có nhiều không gian để cử động cùng độ co giãn dễ chịu cho cảm giác thư thái và động tác đưa gậy theo bóng tự nhiên. \n            Hôm nào cũng là một ngày tuyệt vời để chơi golf.', 'none', '1795000', 'Quan_short_ke_soc_nho_Ultimate365_Club_DJen_FJ9866_21_model.jpg', 0, 5, NULL, NULL),
(67, 9, 1, 'MŨ BÓNG CHÀY THÊU NỔI SIÊU NHẸ', 'CHIẾC MŨ LƯỠI TRAI TÙY CHỈNH LÀM TỪ CHẤT LIỆU TÁI CHẾ. Hãy đội chiếc mũ adidas này trước khi ra đường. \n            Mũ có chỉ số chống tia UV 50 giúp che chắn cho bạn khi tập luyện hay dạo phố. Chất vải siêu nhẹ và mượt mà trên da. \n            Điều chỉnh quai mũ phía sau cho độ vừa vặn phù hợp. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.', 'none', '380000', 'Mu_bong_chay_theu_noi_sieu_nhe_DJen_GM4509_01_standard.jpg', 0, 5, NULL, NULL),
(68, 9, 1, 'MŨ BÓNG CHÀY 3 SỌC AEROREADY', 'CHIẾC MŨ LƯỠI TRAI CLASSIC CHE NẮNG CHO BẠN. Đêm nóng, kem lạnh và mũ bóng chày. Mùa hè đến rồi. Hãy đi luyện ném bóng với chiếc mũ adidas này. \n            Công nghệ AEROREADY đánh bay mồ hôi và giúp bạn luôn thoáng mát trên sân tập. Vành cong che nắng cho mắt cùng 3 Sọc thể hiện tinh thần thể thao trong bạn. \n            Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.', 'none', '430000', 'Mu_Bong_Chay_3_Soc_AEROREADY_DJen_GM6278_01_standard.jpg', 0, 5, NULL, NULL),
(69, 9, 1, 'MŨ PERFORMANCE', 'MŨ CHƠI GOLF CO GIÃN TÍCH HỢP KHẢ NĂNG KHÁNG TIA UV. Duy trì sự tập trung trên sân golf trong những ngày ẩm ướt. Chiếc mũ chơi golf adidas này cho độ \n            che chắn vượt trội suốt những vòng golf ngập nắng. Kiếm tìm cảm giác vừa vặn tuyệt đối cho riêng bạn để chinh phục 18 lỗ golf.', 'none', '525000', 'Mu_Performance_DJen_FI3092_01_standard.jpg', 1, 5, NULL, NULL),
(70, 9, 1, 'MŨ DAD CAP', 'MŨ VẢI TWILL MỀM MẠI VỚI KIỂU DÁNG VÀ CẢM GIÁC THOẢI MÁI, ÍT ĐỊNH HÌNH HƠN. Thư giãn với phong cách phóng khoáng và xu hướng thoải mái. \n            Chiếc mũ adidas Dad Cap mang đến phong cách thường ngày với kiểu dáng và cảm giác mềm mại. Vành mũ cong sẵn tạo ấn tượng như một món phụ kiện được yêu thích từ \n            lâu ngay từ lần đội đầu tiên.', 'none', '400000', 'Mu_Dad_Cap_DJen_FK3189_01_standard.jpg', 0, 5, NULL, NULL),
(71, 9, 1, 'MŨ BUCKET BA LÁ', 'CHIẾC MŨ PHONG CÁCH MÙA HÈ ĐẦY CÁ TÍNH. Khoe phong cách mùa hè của bạn với chiếc mũ bucket Core. Với chất vải twill cotton mềm mại và thoáng khí, \n            chiếc mũ này có thêu logo Ba Lá ở mặt trước tạo điểm nhấn phong cách.', 'none', '600000', 'Mu_bucket_Ba_La_DJen_AJ8995_01_standard.jpg', 1, 5, NULL, NULL),
(72, 1, 2, 'Áo sơ mi tay dài thời trang nam', 'Áo sơ mi tay dài thời trang nam họa tiết Gucci - Chất liệu: kate lụa - Hàng có sẵn', 'none', '230000', '73ea5145066e70452a1363afedd8eafa.jpg', 1, 5, NULL, NULL),
(73, 1, 2, 'Áo sơ mi gucci chất vải lanh bóng hàn quốc cao cấp', 'Áo sơ mi gucci chất vải lanh bóng hàn quốc cao cấp', 'none', '280000', 'ao_so_mi_gucci_chat_vai_lanh_bong_han_quoc.jpg', 0, 5, NULL, NULL),
(74, 1, 2, 'Áo sơ mi nam tay dài họa tiết cao cấp Gucci RSM051', 'Chất liệu: Kate lụa cao cấp, siêu mềm mịn, dày dặn, mặc cực thoải mái. Màu sắc: Trắng', 'none', '240000', 'ao-so-mi-nam-gucci-rsm051.jpg', 1, 5, NULL, NULL),
(75, 2, 2, 'Áo Polo Gucci Polo Ss2019 Màu Trắng', 'Áo Polo Gucci Polo Ss2019 Màu Trắng được thiết kế cổ bẻ, tay ngắn, có họa tiết con ong nhiều màu đặc trưng của \n            Gucci tạo nên sự năng động, trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. \n            Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc.', 'none', '12050000', 'ao-polo-gucci-polo-ss2019-mau-trang-5e71d4a8907bb-18032020145832.jpg', 0, 5, NULL, NULL),
(76, 2, 2, 'Áo Polo Gucci Blue Polo Ss20 Màu Xanh Dương', 'Áo Polo Gucci Blue Polo Ss20 Màu Xanh Dương được thiết kế cổ bẻ, tay ngắn, có họa tiết GG ở ngực đặc trưng của Gucci tạo nên sự năng động, \n            trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái \n            cho người mặc.', 'none', '12050000', 'ao-polo-gucci-blue-polo-ss20-mau-xanh-duong-5e71cc4852f2f-18032020142248.jpg', 0, 5, NULL, NULL),
(77, 2, 2, 'Áo Polo Gucci Ss2020 Màu Be', 'Áo được làm với chất liệu 100% cotton mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc. Form áo với các đường may vô cùng tinh tế và \n            chắc chắn hài lòng mọi khách hàng. Màu sắc đơn giản dễ dàng kết hợp với các trang phục khác nhau cho bạn trở nên nổi bật hơn. Áo thiết kế cổ bẻ, tay ngắn phù \n            hợp mặc trong nhiều hoàn cảnh khác nhau, từ công sở lịch lãm đến những trang phục mặc thường ngày.', 'none', '16900000', 'ao-polo-gucci-ss2020-mau-trang-5e71b8e5d1ff4-18032020130005.jpg', 1, 5, NULL, NULL),
(78, 3, 2, 'Blue & Off-White \'Gucci Band\' Varsity Jacket', 'Áo khoác len ống tay dài và áo khoác bomber da cừu màu tím và trắng. Cổ áo đứng, cổ tay áo và viền len đan có gân lệch. Đóng cửa báo chí ở phía trước. \n            Các mảng logo thêu nhiều màu ở ngực. Túi có dây có đinh kim tự tháp ở eo. Văn bản và đồ họa thêu có màu trắng, đen, đỏ và xanh lam ở phía sau. \n            Túi vá có nút ở nội thất. Lót satin chần bông màu hồng. Màu của nhà cung cấp: Xanh lam. Sản xuất tại Ý.', 'none', '6200000', 'gucci-blue-and-off-white-gucci-band-varsity-jacket.jpg', 0, 5, NULL, NULL),
(79, 3, 2, 'Áo khoác Gucci Technical Jersey Jacket', 'Lấy cảm hứng từ thời trang thập niên 90, thời kì hoàng kim của thời trang sportwear, áo khoác Gucci Technical Jersey Jacket có thiết kế như một chiếc áo khoác thể thao \n            với phần cổ cao, hai dải băng trắng – xanh lam chạy dọc hai bên cánh tay, nổi bật tên thương hiệu màu đỏ. Phần cổ tay bo chun trang trí bằng sọc xanh – \n            đỏ đặc trưng của hãng.', 'none', '21600000', 'Gucci-Technical-Jersey-Jacket.jpg', 0, 5, NULL, NULL),
(80, 3, 2, 'Black & White Patch Bomber Jacket', 'Áo khoác bomber dài tay bằng len chải đen và da cừu trắng \'tự nhiên\'. Cổ áo đứng đan gân, cổ tay áo và viền sọc trắng và đỏ. \n            Đóng cửa báo chí ở phía trước. Đính thêu màu đen, đỏ và trắng ở ngực. Túi có dây ở eo. Các họa tiết thêu chữ màu xanh lam và màu cam ở phía sau. \n            Túi có dây ở bên trong. Đã lót đầy đủ. Phần cứng âm có khắc logo. Đường khâu theo đường chéo. Sản xuất tại Ý.', 'none', '5500000', 'gucci-black-and-white-patch-bomber-jacket.jpg', 1, 5, NULL, NULL),
(81, 4, 2, 'Black Pursuit Slides', 'Dép xỏ ngón cao su màu đen. Mở ngón chân tròn. Các sọc đặc trưng màu đỏ và xanh lá cây ở vamp. Chân đế cao su đúc. \n                Đế giữa bằng cao su có kết cấu hình tam giác có logo in nổi ở mặt ngoài. Đế ngoài bằng cao su có rãnh tam giác. Sản xuất tại Ý.', 'none', '7000000', 'gucci-black-pursuit-slides.jpg', 1, 5, NULL, NULL),
(82, 4, 2, 'Dép Gucci Men’s GG Disney', 'Sự đồng bộ về tư duy và triết lý thẩm mỹ được gìn giữ qua nhiều thế hệ của nhà Gucci. Bắt nguồn từ lối sống xa hoa và phô trương \n            của giới quý tộc Châu Âu những năm đầu thế kỷ 20, nghề thủ công bậc thầy và thẩm mỹ nghệ thuật thời trang đậm chất Ý đã cho ra đời các “tác phẩm” chất \n            lượng cao cấp, xa xỉ và có giá trị vượt thời gian.', 'none', '9900000', 'm2.jpg', 0, 5, NULL, NULL),
(83, 4, 2, 'Gucci Kids', 'Lấy dấu hiệu từ giày nam và giày nữ, sọc Gucci được làm lại bằng cao su, nâng cao mặt trước của một đôi sandal trượt dành cho trẻ em. \n            Họa tiết thể thao lấy cảm hứng từ biểu tượng băng chạy dọc hai bên của bộ đồ thể thao cổ điển từ những năm 80. Các đường trượt hồ bơi này có lớp cao su \n            màu trắng với sọc Gucci đỏ và đen, chân đế cao su đúc và logo Gucci in nổi trên đế. Sản xuất tại Ý', 'none', '6500000', 'Gucci_Kids.png', 0, 5, NULL, NULL),
(84, 5, 2, 'Giày Gucci Calfskin Black Sneaker Đen', 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, \n            tràn đầy sức sống. Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn \n            cảm thấy thoải mái. Giày basic rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp \n            từng đường kim mũi chỉ đảm bảo hài lòng ngay cả với khách hàng khó tính nhất. Màu sắc đen dễ dàng kết hợp với nhiều trang phục \n            khác nhau để thay đổi phong cách cho bản thân theo sở thích. ', 'none', '9450000', 'giay-gucci-calfskin-black-sneaker-mau-den-5efeec1a1f02f-03072020152810.jpg', 1, 5, NULL, NULL),
(85, 5, 2, 'Giày Thể Thao Gucci Ace Signature Sneaker Đen', 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, \n            tràn đầy sức sống. Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn cảm \n            thấy thoải mái. Giày basic rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp từng \n            đường kim mũi chỉ đảm bảo hài lòng ngay cả với khách hàng khó tính nhất. Màu sắc đen dễ dàng kết hợp với nhiều trang phục khác \n            nhau để thay đổi phong cách cho bản thân theo sở thích. ', 'none', '15000000', 'giay-ace-gucci-signature-sneaker-mau-den-5d8ec921c06a7-28092019094449.jpg', 1, 5, NULL, NULL),
(86, 5, 2, 'Giày Gucci Men\'s Ace Embroidered Sneaker Trắng', 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, tràn đầy sức sống. \n            Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn cảm thấy thoải mái. Giày basic \n            rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp từng đường kim mũi chỉ đảm bảo hài lòng ngay \n            cả với khách hàng khó tính nhất. Màu sắc trắng dễ dàng kết hợp với nhiều trang phục khác nhau để thay đổi phong cách cho bản thân theo sở thích. \n            Sneaker Gucci GC luôn là sự lựa chọn hàng đầu bởi sự năng động, trẻ trung, tiện dụng, dễ dàng phối kết hợp với nhiều bộ trang phục và phù hợp trong \n            nhiều hoàn cảnh khác nhau.', 'none', '16200000', 'giay-gucci-men-s-ace-embroidered-sneaker-mau-trang-5e04762f9f7ed-26122019155823.jpg', 0, 5, NULL, NULL),
(87, 6, 2, 'Beige GG Logo Lounge Pants', 'Relaxed-fit cotton-blend jersey lounge pants featuring logo pattern in beige and brown. Mid-rise. Two-pocket styling. Drawstring in off-white at \n            elasticized waistband. Rib knit cuffs in beige. Supplier color: Camel. Body: 55% polyester, 45% cotton. Trim: 72% polyester, 25% polyamide, 3% elastane. \n            Made in Italy.', 'none', '35000000', 'gucci-beige-gg-logo-lounge-pants.jpg', 0, 5, NULL, NULL),
(88, 6, 2, 'Brown GG Flora Lounge Pants', 'Tapered technical jersey lounge pants featuring logo pattern in brown and beige and multicolor graphic print throughout. Mid-rise. \n            Drawstring in off-white at elasticized waistband. Two-pocket styling. Tape trim in red and green at outseams. Supplier color: Brown 61% polyester, \n            39% cotton. Made in Italy.', 'none', '37000000', 'gucci-brown-gg-flora-lounge-pants.jpg', 0, 5, NULL, NULL),
(89, 6, 2, 'Quần Gucci Technical Jersey', 'Quần Gucci Technical Jersey được thiết kế theo phong cách thể thao với hai dải băng sọc màu be bên hông, \n            phần gấu được bo chun nổi bật với những vạch kẻ đỏ – xanh lá vô cùng đặc trưng của hãng. Dòng chữ GUCCI cững được đặt khéo léo giữa các \n            đường kẻ bên hông quần, tạo nên sự nổi bật. Quần có hai túi trước và hai túi sau vô cùng tiện dụng. Quần và áo khoác Gucci Technical Jersey là \n            một sự kết hợp hoàn hảo đại diện cho phong cách athleisure năng động, thời thượng. Tuy nhiên, bạn cũng có thể kết hợp quần Gucci cùng áo phông, \n            sweater hay hoodie để tạo nên bản sắc thời trang riêng.', 'none', '23000000', 'Quan-Gucci-Technical-Jersey-14234.jpg', 0, 5, NULL, NULL),
(90, 7, 2, 'Indigo GG Jeans', 'Flared non-stretch denim jeans in indigo featuring logo pattern in tan. High-rise. Subtle fading throughout. \n            Five-pocket styling. Belt loops at waistband. Leather logo patch in black and gold-tone at back waistband. Buffed lambskin trim in brown at back pocket. \n            Zip-fly. Antiqued brass-tone and copper-tone hardware. Supplier color: Dark blue. Body: 100% cotton. Trim: 100% lambskin. Made in Italy.', 'none', '29000000', 'gucci-indigo-gg-jeans.jpg', 0, 5, NULL, NULL),
(91, 7, 2, 'Blue Symbol Tapered Jeans', 'Tapered non-stretch denim jeans in blue. Mid-rise. Multicolor embroidered graphic patches, fading, and whiskering throughout. \n            Five-pocket styling. Belt loops at waistband. Leather logo patch in tan at back waistband. Button-fly. Silver-tone hardware. Contrast stitching in tan. \n            Supplier color: Blue. Body: 100% cotton. Trim: 100% cotton. Made in Italy.', 'none', '31500000', 'gucci-blue-symbol-tapered-jeans.jpg', 0, 5, NULL, NULL),
(92, 7, 2, 'Black Skinny Jeans', 'Skinny-fit washed stretch denim jeans in black. Mid-rise. Five-pocket styling. Belt loops at waistband. Embossed \n            leather logo patch in black and gold-tone at back waistband. Zip-fly. Antiqued bronze-tone and copper-tone hardware. Supplier color: \n            Black. Body: 98% cotton, 2% elastane. Made in Italy.', 'none', '15000000', 'gucci-black-skinny-jeans.jpg', 1, 5, NULL, NULL),
(93, 8, 2, 'Tiger Head Applique Stripe Cotton Shorts', 'Gucci Men\'s Bottoms. Fashion category: Shorts. SKU: 497251 X9I98 1295. Color: Grey. Tiger Head Applique Stripe Cotton Shorts. \n            Crafted in grey felted cotton jersey, this shorts from Gucci features an elasticated waistband with drawstring detail, front pockets and Gucci \n            jacquard stripe with tiger head applique. Material: 100% Cotton. Made in Italy.', 'none', '21000000', 'gucci-tiger-head-applique-stripe-cotton-shorts-brand-size-small-497251-x9i98-1295.jpg', 1, 5, NULL, NULL),
(94, 8, 2, 'Blue Denim Eco Washed GG Shorts', 'Non-stretch organic cotton denim shorts in blue. Jacquard logo pattern in beige throughout. Mid-rise. Four-pocket styling. \n            Partially elasticized waistband. Lambskin trim in tan at back pockets. Button-fly. Brown hardware.Supplier color: Dark blue. Body: 100% cotton. \n            Trim: 100% lambskin. Made in Italy. ', 'none', '23000000', 'gucci-blue-denim-eco-washed-gg-shorts.jpg', 1, 5, NULL, NULL),
(95, 8, 2, 'Black GG Peony Print Shorts', 'Silk crepe shorts in black featuring tonal logo pattern throughout. Mid-rise. Multicolor floral pattern throughout. \n            Four-pocket styling. Elasticized waistband. Button-fly. Supplier color: Black/Pink. Body: 100% silk. Lining: 100% cotton. Made in Italy.', 'none', '28000000', 'gucci-black-gg-peony-print-shorts.jpg', 0, 5, NULL, NULL),
(96, 9, 2, 'Mũ Gucci Original GG Canvas Black', 'Mũ Gucci Original GG Canvas Black màu đen là chiếc mũ unisex cao cấp, làm bằng chất liệu vải Canvas được in hình logo \"GG\" nối nhau đặc trưng của hãng Gucci, \n            xung quanh mũ được may với các đường chỉ cực kì sắc nét.', 'none', '6500000', 'mu-gucci-original-gg-canvas-black-5d9446b2bb3f7-02102019134154.jpg', 0, 5, NULL, NULL),
(97, 9, 2, 'Mũ Gucci Original GG Canvas Baseball With Web Beige', 'Hai bên mũ được thêu mỗi tấm vải gồm 2 màu đỏ xanh huyền thoại của hãng Gucci. Lưỡi mũ được bao bọc 1 miếng da quanh viền và được may mỗi tấm vải 2 bên với những đường chỉ rất tinh tế. \n            Miếng dán bằng da sau mũ, điều chỉnh tăng giảm được.', 'none', '6200000', 'mu-gucci-original-gg-canvas-baseball-with-web-beige-5c85ea2fac92b-11032019115511.jpg', 0, 5, NULL, NULL),
(98, 9, 2, 'Mũ Gucci Original GG Canvas Baseball With Web Black', 'Mũ Gucci Original GG Canvas Baseball With Web Black Size M là chiếc mũ cho nam cao cấp, làm bằng chất liệu vải Canvas được \n            in hình logo \"GG\" nối nhau đặc trưng của hãng Gucci, xung quanh mũ được may với các đường chỉ cực kì sắc nét.', 'none', '7600000', 'mu-gucci-original-gg-canvas-baseball-with-web-size-m-5d1430bac03e2-27062019095802.jpg', 0, 5, NULL, NULL),
(99, 1, 3, 'Supreme Men\'s Black X Mike Kelley More Love Hours Shirt', 'Chiếc áo \'Rayon Supreme x Mike Kelley \' là sự hợp tác giới hạn giữa gã khổng lồ thời trang đường phố NYC và nghệ sĩ người Mỹ nổi tiếng với những tác phẩm trừu tượng. Chiếc áo sơ mi rayon thời tiết ấm áp, với kết cấu thoáng mát và phong cách dễ mặc', 'none', '11115000', 'supremeblackXMikeKelleyMoreLoveHoursShirt.jpeg', 1, 5, NULL, NULL),
(100, 1, 3, 'SupremeObamaShirt', 'Tổng thống của bạn là ai? Hãy thể hiện lòng trung thành của bạn với Tổng thống thứ 44 của Hoa Kỳ với chiếc Áo sơ mi Obama cotton màu xanh lá cây này của Supreme. Có bạn có thể. Có hình in toàn bộ, hình in ảnh, cổ áo nhọn, cài nút phía trước, tay áo ngắn và túi trước ngực', 'none', '9800500', 'Supreme Obama Shirt.jpg', 1, 5, NULL, NULL),
(101, 1, 3, 'Supreme Rose Buffalo Plaid Shirt', 'Áo sơ mi sọc ca rô trâu bông hồng bông màu xanh hoàng gia của hãng tối cao có cổ áo cổ điển, cài cúc phía trước, tay áo dài, khuy cài và viền cong. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới', 'none', '6204000', 'SupremeRoseBuffaloPlaidShirt.jpg', 1, 5, NULL, NULL),
(102, 1, 3, 'Supreme x Comme des Garçons Graphic Button Up Shirt', 'Comme des Garçons x Supreme Graphic Button-Up Shirt là một món đồ trang nhã hoặc giản dị tập hợp những lý tưởng của hai gã khổng lồ thời trang dạo phố. -- Sản xuất tại Pháp ', 'none', '9778000', 'SupremexCommedesGarçonsGraphicButtonUpShirt.png', 0, 5, NULL, NULL),
(103, 1, 3, 'Supreme CDG Harold Hunter baseball top', 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. \n                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. Hãy giữ cho trang phục thường ngày trở nên thú vị \n                với việc bổ sung chiếc áo khoác này từ tối cao. Được làm thủ công từ bông, chiếc áo bóng chày này có in hình Harold Hunter. Khá là đoạn hội thoại! \n                Có cổ tròn, tay ngắn, cài cúc trước và in hình họa tiết -- Sản xuất tại Pháp ', 'none', '14090000', 'SupremeCDGHaroldHunterbaseballtop.png', 1, 5, NULL, NULL),
(104, 2, 3, 'Supreme Bela Lugosi Tee', 'Supreme Bela Lugosi Tee dành cho những người hâm mộ ma cà rồng, những người đánh giá cao cơn sốt Gothic \n            nguyên bản bắt đầu từ gần 100 năm trước. Hình ảnh ở giữa ngực có hình ảnh nổi tiếng trong bộ phim kinh điển năm 1931 \"Dracula\", \n            trong đó nam diễn viên Bela Lugosi.-- Sản xuất tại Hoa Kỳ ', 'none', '1893000', 'SupremeBelaLugosiTee.png', 0, 5, NULL, NULL),
(105, 2, 3, 'Supreme Winter Print T-shirt', 'Cảm thấy lạnh mùa đông? Giải quyết điều đó một cách dễ dàng với chiếc áo phông có logo mùa đông cotton trắng này của Supreme. \n                Sẽ sớm trở thành mùa yêu thích mới của bạn. Có cổ tròn, tay ngắn, in hình họa tiết và phom dáng vừa vặn -- Sản xuất tại Hoa Kỳ', 'none', '2123000', 'SupremeWinterPrintT-shirt.png', 0, 5, NULL, NULL),
(106, 2, 3, 'Supreme Faces Print T-shirt', 'Tối và quyến rũ. Chiếc áo phông in hình mặt cotton màu xanh nước biển này của Supreme có ống tay dài vừa vặn thoải mái, \n                hoàn chỉnh với hình in đồ họa của những khuôn mặt không có mắt để tạo nên một kết thúc kỳ cục. Bạn sẽ có mọi ánh nhìn về bạn. Đặc \n                trưng với cổ tròn, tay áo dài, viền và cổ tay áo có gân -- Sản xuất tại Hoa Kỳ', 'none', '2377000', 'SupremeFacesPrintT-shirt.png', 1, 5, NULL, NULL),
(107, 2, 3, 'Supreme Printed Pocket T-shirt', 'Bỏ tất cả những rắc rối của bạn vào \'túi\' và đi khám phá thế giới trong chiếc áo phông đen tối cao này. Tất cả đều tốt', 'none', '3715000', 'SupremePrintedPocketT-shirt.png', 1, 5, NULL, NULL),
(108, 2, 3, 'Supreme Logo T-shirt', 'Chiếc áo phông này khẳng định gu thẩm mỹ đường phố của Supreme. Được làm từ cotton, chiếc áo phông này có cổ tròn, \n                tay dài và in logo trên áo. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. \n                Chỉ dự trữ giày dép và quần áo được tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới', 'none', '5146000', 'SupremeLogoT-shirt.png', 1, 5, NULL, NULL),
(109, 3, 3, 'Supreme City Lights Puffer Jacket', 'Áo khoác ngoài như một suy nghĩ sau? Không còn nữa. Chiếc áo khoác tay phồng City Lights này của Supreme sẽ là tâm điểm trong \n                toàn bộ diện mạo của bạn', 'none', '13614000', 'SupremeCityLightsPufferJacket.png  ', 1, 5, NULL, NULL),
(110, 3, 3, 'Supreme Cowboy Print Denim Work Jacket', 'Áo khoác denim họa tiết cao bồi bằng cotton nhiều màu của hãng cao cấp có cổ áo nhọn, khóa zip phía trước, hai túi phía trước và hình \n            in đồ họa. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được tìm \n            kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới', 'none', '26558000', 'SupremeCowboyPrintDenimWorkJacket.png', 1, 5, NULL, NULL),
(111, 3, 3, 'Supreme Aerial Tapestry Harrington Jacket', 'Áo khoác Aerial Tapestry Harrington điểm nổi bật màu xanh da trời bông. Đường chân trời của Thành phố New York cổ điển buộc phía trước \n                giấu kín áo dài tay -- Sản xuất tại Hoa Kỳ ', 'none', '14721000', 'SupremeAerialTapestryHarringtonJacket.png', 0, 5, NULL, NULL),
(112, 3, 3, 'Supreme Reversible Color Blocked Fleece Jacket', 'Nếu điều đầu tiên xuất hiện trong đầu bạn khi nhìn vào bức tranh này, là bức tranh của Mondrian, thì bạn đang đi đúng hướng. \n                Tự hào với bản in hình học nhiều màu, chiếc áo khoác lông cừu tối cao này sẽ trở thành một nghệ sĩ thực thụ - ý của chúng tôi là phong cách.', 'none', '11699000', 'SupremeReversibleColorBlockedFleeceJacket.png', 0, 5, NULL, NULL),
(113, 3, 3, 'Supreme Patchwork Anorak Jacket', 'Chiếc áo khoác anorak chắp vá bằng cotton nhiều màu này có mũ trùm đầu bằng dây rút, khóa zip phía trước, túi phía trước được \n                giấu kín, logo trước ngực, túi trước và tay áo dài', 'none', '61653000', 'SupremePatchworkAnorakJacket.png', 0, 5, NULL, NULL),
(114, 4, 3, 'Supreme Flip Flop Sandals Black White', 'Dép xỏ ngón Supreme Đế ngoài bằng cao su tự nhiên, siêu thoải mái, đế trượt nano, đế mút chống trượt.', 'none', '1593000', 'SupremeFlipFlopSandalsBlackWhite.jpg', 0, 5, NULL, NULL),
(115, 4, 3, 'Supreme Suprize Design 2018ss White Red Sandals Slippers', 'Thiết kế tinh tế mới nhất của Supreme Suprize 2018 với Dép sandal nam nữ màu trắng / đỏ ', 'none', '1593000', 'SupremeSuprizeDesign2018ssWhiteRedSandalsSlippers.jpg', 0, 5, NULL, NULL),
(116, 4, 3, 'Supreme Suprize Design 2018ss Black White Sandals Slippers', 'Chất lượng cao Supreme Suprize Design 2018ss Dép nam nữ màu đen / trắng ', 'none', '1592000', 'SupremeSuprizeDesign2018ssBlackWhiteSandalsSlippers.jpg', 0, 5, NULL, NULL),
(117, 4, 3, 'Supreme Flip Flop Sandals White Red Summer Beach Slippers', 'Dép xỏ ngón Supreme chất lượng cao cho nam-nữ đi biển mùa hè trắng / đỏ Dép đi trong nhà', 'none', '1593000', 'SupremeFlipFlopSandalsWhiteRedSummerBeachSlippers.jpg', 0, 5, NULL, NULL),
(118, 4, 3, 'Supreme Frette Slippers White ', 'Supreme đã cùng với nhà sản xuất kính râm, Frette, hợp tác sản xuất một đôi dép lê. Đôi dép được phát hành với hai màu, đỏ và trắng, và có từ \"Supreme\" được viết trên đôi. \n                Supreme x Frette Slippers được phát hành vào thứ Năm, ngày 6 tháng 6 năm 2019', 'none', '2769000', 'SupremeFretteSlippersWhite.png', 1, 5, NULL, NULL),
(119, 5, 3, 'Supreme Vans Authentic Pro Checkered Red', 'Supreme chuẩn bị cho Vans ’Skate-ready Pro Authentic Pro với một sự thay đổi độc đáo trong thiết kế bàn cờ, có in ca rô màu đỏ và trắng có gắn logo hộp Supreme vào thiết kế. \n                Tương phản với đế giữa màu trắng, đôi giày cũng thực hiện mô hình lực kéo bánh quế cổ điển trên đế ngoài.', 'none', '45155000', 'SupremeVansAuthenticProCheckeredRed.jpg', 1, 5, NULL, NULL),
(120, 5, 3, 'Supreme NIke x NBA x Air Force 1 Mid 07 \'White\' AQ8017-100', 'Supreme và Nike đã bỏ một sự hợp tác lớn khác cho mùa xuân / hè 2018 khi họ hợp tác với NBA. \n                Bộ sưu tập giày dép và quần áo có in toàn bộ bao gồm các logo NBA và Supreme. Điểm nổi bật của bộ sưu tập là \n                Supreme x NBA x Nike Air Force 1 Mid. Một sự trở lại với thời trang dạo phố đầu năm 2000, phối màu trắng này \n                của Supreme x NBA x Nike Air Force 1 Mid có phần trên bằng da cao cấp với chữ \"Supreme\" được thêu trên dây đeo mắt cá chân.', 'none', '16983000', 'SupremeNIkexNBAxAirForce1Mid07\'White\'AQ8017-100.jpg', 1, 5, NULL, NULL),
(121, 5, 3, 'Supreme Nike Air More Uptempo Suptempo Red', 'Được thiết kế bởi Wilson Smith, được mặc bởi Scottie Pippen, Nike Air More Uptempo - \n                được biết đến với thương hiệu “AIR” lớn ở hai bên và giữa - là một trong những đôi giày thể thao bóng \n                rổ táo bạo nhất từ trước đến nay. Tùy chọn Varsity Red này có phần trên bằng da lộn sôi động. Chữ Tối cao có màu trắng với ánh sáng trong bóng tối; midsole \n                cũng được tạo điểm nhấn bởi Varsity Red và trắng. Các đầu ren có các từ \"Thế giới\" và \"Nổi tiếng\".', 'none', '31357000', 'NikeAirMoreUptempoSupremeSuptempoRed.jpg', 1, 5, NULL, NULL),
(122, 5, 3, 'Supreme Comme des Garcons Nike Air Force 1 Low Shirt', 'Bộ sưu tập Xuân / Hè 2017 của Supreme bao gồm sự hợp tác rất được mong đợi với COMME des GARÇONS SHIRT. \n                Bản phát hành lấy cảm hứng từ tác phẩm ‘Giải phẫu giấy’ của nghệ sĩ ý tưởng Stephen J Shanabrook, được anh sử dụng \n                làm tài liệu nguồn cho quảng cáo trong chiến dịch Xuân / Hè 2010 của COMME des GARÇONS SHIRT. Phần trang phục của bộ \n                sưu tập Supreme x COMME des GARÇONS SHIRT xuất hiện đầu tiên, tiếp theo là phiên bản đầy nghệ thuật này của Nike Air Force 1. \n                Màu trắng băng giá trên nền trắng. Đồng thương hiệu Supreme và CDG xuất hiện ở mặt trong của lưỡi để hoàn thiện thiết kế sạch sẽ.', 'none', '33872000', 'SupremeCommedesGarconsNikeAirForce1LowShirt.jpg', 0, 5, NULL, NULL),
(123, 5, 3, 'Supreme Nike Air Max 98 Snakeskin', 'Dễ dàng là phối màu được tìm kiếm nhiều nhất của sự hợp tác năm 2016 giữa Supreme và Nike, phiên bản này kỳ lạ với phần trên bằng da \n                rắn với lưới màu xám và các chi tiết phản chiếu.', 'none', '16429000', 'SupremeNikeAirMax98Snakeskin.jpg', 1, 5, NULL, NULL),
(124, 6, 3, 'Supreme Warm Up Pants SS18', 'Quần Supreme Warm Up là một mẫu quần trong bộ sưu tập Xuân / Hè 2018 của thương hiệu giày trượt băng. Một họa tiết rằn ri \n                màu xanh lam với màu xanh lá cây, xám và đen quân sự bao phủ ống quần. Được thiết kế với nhiều khoảng trống, những chiếc quần này được \n                cắt để vừa vặn thoải mái và bao gồm một dây thắt lưng đàn hồi và còng có khóa ở phía dưới. Logo Supreme màu trắng nằm dọc theo khe khóa \n                dán ở mỗi mắt cá chân và ống quần được hoàn thiện với một túi có khóa kéo ở phía sau.', 'none', '4313000', 'SupremeWarmUpPantsSS18.jpg', 1, 5, NULL, NULL),
(125, 6, 3, 'Supreme Side Logo Track Pants', 'Hãy xuống phố thật phong cách với chiếc quần thể thao có logo bên này. Logo của Supreme New York được in sang một bên chắc \n                chắn sẽ quay đầu. Đơn giản mà hiệu quả.', 'none', '7407000', 'SupremeSideLogoTrackPants.png', 1, 5, NULL, NULL),
(126, 6, 3, 'Supreme Logo Print Track Pants', 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. \n                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. Cập nhật tủ quần áo hàng ngày của bạn \n                trong mùa này với những chiếc quần thể thao in logo cotton màu đen này của hãng Supreme có chiều dài dài, cạp chun co giãn và hai túi phía trước.', 'none', '12322000', 'SupremeLogoPrintTrackPants.png', 0, 5, NULL, NULL),
(127, 6, 3, 'Supreme x Nike Trail Running Trousers', 'Còn gì tốt hơn một thương hiệu thời trang dạo phố? Tại sao tất nhiên là một thương hiệu thời trang dạo phố hợp tác với gã \n                khổng lồ thể thao Nike. Lấy ví dụ như chiếc quần chạy bộ Nike Trail màu hồng này của Supreme. Chạy trên. Có dây thắt lưng co giãn, ống côn, \n                túi xẻ bên và chiều dài đều đặn.', 'none', '7407000', 'SupremexNikeTrailRunningTrousers.png', 0, 5, NULL, NULL),
(128, 6, 3, 'Supreme Warm Up Track Pants', 'You better Warm Up because once you put on these Supreme track pants you\'ll want to run a thousand miles just to show them off. \n                Và chúng tôi không thể đánh giá bạn. Chúng tôi có thể sẽ làm như vậy.', 'none', '5515000', 'SupremeWarmUpTrackPants.png', 0, 5, NULL, NULL),
(129, 7, 3, 'Louis Vuitton X Supreme Camo Jeans', 'Quần jean camo Louis Vuitton X Supreme màu xanh lá cây của hãng cao cấp có dây thắt lưng với vòng đai, nút và khóa kéo, \n                thiết kế năm túi, chi tiết đinh tán tông màu vàng và in logo toàn bộ. Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết \n                các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo \n                tính xác thực -- Sản xuất tại Pháp', 'none', '36850000', 'LouisVuittonXSupremeCamoJeans.png', 1, 5, NULL, NULL),
(130, 7, 3, 'Supreme Stone Washed Slim Jeans Stone Washed Indigo', 'Phong cách 5 túi cổ điển với nút bay, túi một đồng xu, đinh tán đồng và miếng dán logo bằng da ở mặt sau -- Sản xuất tại Hoa Kỳ', 'none', '4013000', 'SupremeStoneWashedSlimJeansStoneWashedIndigo.png', 0, 5, NULL, NULL);
INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `product_star_rating`, `created_at`, `updated_at`) VALUES
(131, 7, 3, 'Supreme Logo Stripe Jacquard Regular Jean Blue Hype Clothinga Thumbnail', 'Sọc Logo Tối Cao Jacquard Jean Thường. The Supreme\'s Droplist được lặp lại trong cuộc hẹn thứ Năm thông thường, đánh dấu sự sụt giảm của tuần thứ 15. Được giới thiệu ở đây là một dòng quần jean denim vừa vặn thông thường với họa tiết Jacquard, một kỹ thuật khâu nối tiếp cho phép tạo ra các hình học phức tạp.', 'none', '13950000', 'SupremeLogoStripJacquardRegularJeanBlueHypeClothingaThumbnail.jpg', 1, 5, NULL, NULL),
(132, 7, 3, 'Supreme White Slim Jeans', 'Phiên bản denim trắng của quần jean mỏng cứng cổ điển -- Miếng dán da màu tự nhiên với thương hiệu Supreme -- Sản xuất tại Mỹ', 'none', '8071000', 'SupremeWhiteSlimJeans.jpg', 1, 5, NULL, NULL),
(133, 7, 3, 'Supreme Waves Work Jeans Multicolor', 'Phong cách 5 túi cổ điển với nút bấm, túi một đồng xu, đinh tán oxit đồng và miếng dán logo bằng da ở mặt sau.', 'none', '8902000', 'SupremeWavesWorkJeansMulticolor.jpg', 1, 5, NULL, NULL),
(134, 8, 3, 'Supreme Straight-Leg Cargo Shorts', 'Thời tiết trở nên ấm hơn? Những chiếc quần đùi hàng hiệu Supreme chân thẳng này sẽ là món đồ đầu tiên mà bạn muốn. Và ai có \n                thể đổ lỗi cho bạn? ', 'none', '4313000', 'SupremeStraight-LegCargoShorts.png', 1, 5, NULL, NULL),
(135, 8, 3, 'Supreme Patchwork Pique Shorts', 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. \n                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. \n                Tay phải màu đỏ, chân trái màu vàng. Với những chiếc quần short pique bằng vải cotton nhiều màu này từ Supreme. Đừng để bị xoắn. Có phần nhô cao, \n                dây thắt lưng co giãn, túi bên, túi sau, thiết kế khối màu ốp và vừa vặn thoải mái.', 'none', '4313000', 'SupremePatchworkPiqueShorts.jpg', 1, 5, NULL, NULL),
(136, 8, 3, 'Supreme Straight-leg Work Shorts', 'Thời tiết chuyển sang ấm hơn? Những chiếc quần đùi đi làm cho chân thẳng này là cặp đôi mà bạn sẽ đạt được. Logo hộp tối cao là chi tiết lý tưởng.', 'none', '3713000', 'SupremeStraight-legWorkShorts.png', 0, 5, NULL, NULL),
(137, 8, 3, 'Supreme x Lacoste Logo Sweat Shorts', 'Ngay từ sự hợp tác giữa Lacoste và Supreme, những chiếc quần đùi thể thao có logo bằng cotton màu đen này sẽ là người bạn đồng hành \n                hoàn hảo cho dù bạn đang ở trên sân đấu hay trên ghế dài. Nhặt bóng rổ hay bỏng ngô, tùy bạn. Có dây thắt lưng đàn hồi, túi bên, túi vá phía sau, \n                chiều dài quá đầu gối và logo thêu ở bên cạnh.', 'none', '4912000', 'SupremexLacosteLogoSweatshorts.png', 1, 5, NULL, NULL),
(138, 8, 3, 'Supreme Printed Shorts', 'Quần short in nhiều màu của hãng Supreme có phần cạp ở giữa, cạp chun co giãn, túi sau, chiều dài ngắn và họa tiết hoa. \n                Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được \n                tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới.', 'none', '5512000', 'SupremePrintedShorts.png', 0, 5, NULL, NULL),
(139, 9, 3, 'Supreme Static Knitted Beanie Hat', 'Trượt lên một chút ấm áp. Được chế tác từ chất liệu dệt kim mềm mại, chiếc mũ len dệt kim tĩnh từ Supreme này được hoàn \n                thiện với logo thêu trên vành mũ để tạo thêm điểm nhấn. Các phụ kiện hoàn hảo.', 'none', '1685000', 'SupremeStaticKnittedBeanieHat.jpg', 0, 5, NULL, NULL),
(140, 9, 3, 'Supreme Checkerboard Boucle Camp Cap SS19', 'Nếu bạn đi xuống rừng hôm nay, hãy chắc chắn rằng bạn được trang bị đầy đủ. Hôm nay là ngày bạn đi dã ngoại, vì vậy đừng để \n                bị bắt gặp nếu không có chăn hoặc thậm chí là chiếc mũ cắm trại màu đỏ và trắng pha trộn kẻ caro \'SS19\' của Supreme. Chỉ cần không bị lạc. Có vành cứng,\n                 miếng dán logo phía trước, dây buộc có thể điều chỉnh được, họa tiết ca rô và vải tweed hoa văn.', 'none', '2377000', 'SupremeCheckerboardBoucleCampCapSS19.png', 0, 5, NULL, NULL),
(141, 9, 3, 'Supreme Coated Linen Camp Cap', 'Đã đến lúc thay đổi phong cách của bạn. Tự hào với biểu tượng Supreme mang tính biểu tượng ở mặt trước, Mũ cắm trại bằng vải \n                lanh tráng màu đỏ này là phụ kiện duy nhất bạn cần', 'none', '4315000', 'SupremeCoatedLinenCampCap.jpg', 1, 5, NULL, NULL),
(142, 9, 3, 'Supreme South 2 West 8 Jungle Hat Camo', 'Vải cotton 3 lớp chống thấm nước với dây cotton đóng và nút da. Băng vải tiện ích xung quanh vành và logo in 3M Reflective. \n                Sản xuất dành riêng cho Tối cao.', 'none', '4267000', 'SupremeSOUTH2WEST8JungleHatCamo.jpg', 0, 5, NULL, NULL),
(143, 9, 3, 'Supreme Clayton Patterson/Supreme Skulls 5-Panel-White', 'Tất cả các loại mũ bằng vải cotton chino twill 5-Panel có chốt đóng. Hình thêu trên mặt trước, mặt bên, mặt sau và tấm che mặt. \n                Tác phẩm nghệ thuật gốc của Clayton Patterson.', 'none', '3459000', 'SupremeClaytonPattersonSupremeSkulls5PanelWhite.jpg', 1, 5, NULL, NULL),
(144, 1, 4, 'Hermes Micro Shirt', 'Áo sơ mi vải cotton đan chéo (100% cotton) -- Mặt trước bên trái có thêu \"Caleche\" -- Cổ tay áo, cổ áo \n                trong và nút hướng ra ngoài được buộc chặt bằng nút ngọc trai -- Sản xuất tại Pháp', 'none', '23651000', 'HermesMicroShirt.jpg', 0, 5, NULL, NULL),
(145, 1, 4, 'Hermes Shirt', 'Áo sơ mi cotton đan chéo (100% cotton) -- Mặt trước bên trái có thêu \"Caleche\" -- Tay áo và chốt cài phía \n                trước được buộc chặt bằng các nút khảm xà cừ -- Sản xuất tại Pháp', 'none', '27112000', 'HermesShirt.jpg', 1, 5, NULL, NULL),
(146, 1, 4, 'Hermes Jacket Shirt With Swing Collar', 'Áo khoác sơ mi tay ngắn bằng vải bông và in \"Rayures rythmees fil a fil\" với cổ bẻ và phần dưới có gân (100% cotton) -- \n                Sản xuất tại Pháp -- Chiều dài: 26,8 \"| Kích thước được chỉ ra tương ứng với kích thước 39, chúng có thể thay đổi +/- 0,4\" tùy thuộc vào kích thước. ', 'none', '25958000', 'HermesJacketShirtWithSwingCollar.jpg', 0, 5, NULL, NULL),
(147, 1, 4, 'Hermes Polo Shirt With Striped Ribbon Detail', 'Áo sơ mi polo bằng vải cotton trơn với cổ áo thẳng linh hoạt và chi tiết ruy băng sọc (100% cotton) -- Sản xuất tại Pháp -- \n                Chiều dài: 29,1 \"| Các kích thước được chỉ ra tương ứng với kích thước 39, chúng có thể thay đổi +/- 0,4\" tùy thuộc vào kích thước.', 'none', '13614000', 'HermesPoloShirtWithStripedRibbonDetail.jpg', 0, 5, NULL, NULL),
(148, 1, 4, 'Hermes Competition Shirt', 'Áo dài tay thi đấu -- Cắt thẳng -- Vải mềm và thoáng khí -- Cổ áo và cổ tay áo bằng vải bông có nút đinh hình yên ngựa \n                \"Hermes Sellier\" -- (73% cotton, 24% polyamide, 3% elasthane)', 'none', '12229000', 'HermesCompetitionShirt.jpg', 1, 5, NULL, NULL),
(149, 2, 4, 'Hermes Micro Embroidered Pocket T-Shirt', 'Áo thun siêu nhỏ in áo thun cotton trơn (100% cotton) -- Cổ áo trang trí sườn -- Túi có thêu \"Clochette\" -- Sản xuất tại Pháp', 'none', '11999000', 'HermesMicroEmbroideredPocketT-Shirt.jpg', 1, 5, NULL, NULL),
(150, 2, 4, 'Hermes Bicolor Jogging T-Shirt', 'Áo thun tay ngắn cổ thuyền chạy bộ bằng cotton với các chi tiết Toilovent trên vai và tay áo (100% cotton) -- Sản xuất tại Ý', 'none', '10499000', 'HermesBicolorJoggingTShirt.jpg', 1, 5, NULL, NULL),
(151, 2, 4, 'Hermes Labyrinthe T-Shirt', ' Áo thun cổ thuyền tay ngắn bằng vải bông crepe và in \"Labyrinthe\" với một sợi chỉ khổ 18 (100% cotton) -- Sản xuất tại Ý', 'none', '27112000', 'HermesLabyrintheT-Shirt.jpg', 0, 5, NULL, NULL),
(152, 2, 4, 'Herems Maillons T-Shirt', 'Áo thun cổ thuyền tay ngắn bằng vải jacquard, len crepe thập niên 120 và in \"Maillons\" với một sợi chỉ khổ 18 -- \n                Một minh họa trang nhã về các liên kết Chaine d\'Ancre mang tính biểu tượng (100% len) -- Sản xuất tại Ý ', 'none', '28265000', 'HeremsMaillonsT-Shirt.jpg', 0, 5, NULL, NULL),
(153, 2, 4, 'Hermes Rayures Mix And Match T-Shirt', 'Áo thun cổ thuyền tay ngắn bằng vải bông crepe và in \"Rayures Mix and match\" với một sợi chỉ khổ 18 (100% cotton) -- Sản xuất tại Ý ', 'none', '22382000', 'HermesRayuresMixAndMatchT-Shirt.jpg', 0, 5, NULL, NULL),
(154, 3, 4, 'Hermes Rayures Et Maillons Esquisses Straight Cut Jacket', 'Áo khoác cắt thẳng bằng cotton và in \"Rayures maillons esquisses\" với cổ áo cài cúc, khóa kéo hai chiều và túi bên hông có cúc và khóa kéo (100% cotton) -- Sản xuất tại Pháp -- \n                Chiều dài lưng: 25,6 \"| Kích thước được chỉ ra tương ứng với kích thước 48, chúng có thể thay đổi +/- 0,4\" tùy thuộc vào kích thước. ', 'none', '72105000', 'HermesRayuresEtMaillonsEsquissesStraightCutJacket.jpg', 0, 5, NULL, NULL),
(155, 3, 4, 'Hermes Reversible Rib Trim Jacket', 'Áo khoác có viền có thể đảo ngược bằng vải cotton, in chữ \"Danse des chevaux\" và Toilovent chống thấm nước với cổ áo và còng có \n                viền, túi hai bên có khóa kéo và zip (80% nylon và 20% elastane) -- Sản xuất tại Pháp -- Chiều dài lưng: 25,6 \"| Kích thước được chỉ ra tương ứng \n                với kích thước 48, chúng có thể thay đổi +/- 0,4\" tùy thuộc vào kích thước.', 'none', '93448000', 'HermesReversibleRibTrimJacket.jpg', 0, 5, NULL, NULL),
(156, 3, 4, 'Hermes Doudoune Courte', 'Áo khoác cưỡi ngựa bằng da hươu đã giặt (100% da hươu) -- Lớp lót với họa tiết \"H passant\" -- \n                Dây chuyền mạ palladium -- Buộc chặt túi bằng zip mạ palladium -- Chốt phía trước ở giữa với các nút mạ palladium khắc \n                \"Clou de selle\" và nút sừng phẳng -- Sản xuất tại Ý', 'none', '145363000', 'HermesDoudouneCourte.jpg', 1, 5, NULL, NULL),
(157, 3, 4, 'Hermes Sartorial Jacket', 'Áo khoác Sartorial vải lanh (100% vải lanh) -- Túi và lót túi phía trước bên trái bên trong bằng vải bông xương cá co giãn \n                -- Túi có đường ống -- Chốt phía trước với các nút mạ palladium tráng men và nút sừng phẳng', 'none', '53069000', 'HermesSartorialJacket.jpg', 0, 5, NULL, NULL),
(158, 3, 4, 'Hermes RayuresS erties 24 Twins Light Jacket', 'Jacket in cotton and \"Rayures serties\" print with notched collar, 2 horn buttons, 2 mesh pockets, one front pocket and \n                contrasting fabric on the front closure (100% cotton) -- Made in Italy -- Back length: 30.3\" | The dimensions indicated correspond to \n                a size 50, they may vary by +/- 0.4\" depending on the size', 'none', '65183000', 'HermesRayuresSerties24TwinsLightJacket.jpg', 1, 5, NULL, NULL),
(159, 4, 4, 'Hermes Oran Sandal White', 'Sandal in Box da bê với đường cắt chữ \"H\" mang tính biểu tượng -- Một phong cách mang tính biểu tượng của Hermes, \n                hình bóng này là một phần thiết yếu trong mọi tủ quần áo', 'none', '14537000', 'HermesOranSandalWhite.jpg', 1, 5, NULL, NULL),
(160, 4, 4, 'Hermes Legend Sandal', 'Sandal cao gót bằng da bê với đường cắt chữ \"H\" mang tính biểu tượng và dây đeo mảnh ở mắt cá chân -- \n                Một phong cách mang tính biểu tượng của Hermes, hình bóng này là một phần thiết yếu trong mọi tủ quần áo', 'none', '19844000', 'HermesLegendSandal.jpg', 0, 5, NULL, NULL),
(161, 4, 4, 'Hermes Santorini Sandal', 'Sandal da bê với chi tiết viền thô, chi tiết cắt chữ \"H\" và dây đeo mảnh ở mắt cá chân -- Một phong cách sang trọng \n                và giản dị hoàn hảo để sử dụng hàng ngày', 'none', '18228000', 'HermesSantoriniSandal.jpg', 0, 5, NULL, NULL),
(162, 4, 4, 'Hermes Avenue Sandal', 'Sandal bằng da bê với khóa Kelly mạ palladium mang tính biểu tượng --  Đối với sự thanh lịch hàng ngày', 'none', '24228000', 'HermesAvenueSandal.jpg', 1, 5, NULL, NULL),
(163, 4, 4, 'Hermes Premiere 70 Sandal', 'Sandal mang tính biểu tượng bằng da lộn và sa tanh với các chi tiết pha lê và dây đeo mắt cá chân mỏng -- Sản xuất tại Ý', 'none', '27112000', 'HermesPremiere70Sandal.jpg', 1, 5, NULL, NULL),
(164, 5, 4, 'Hermes Boomerang Sneaker', 'Giày sneaker tối giản bằng da bê Epsom in với đế màu cam mang tính biểu tượng -- Một cái nhìn hiện đại và hợp thời trang -- \n                Sản xuất tại Ý', 'none', '20305000', 'HermesBoomerangSneaker.jpg', 0, 5, NULL, NULL),
(165, 5, 4, 'Hermes Crew Sneaker', 'Giày thể thao bằng da dê đan và da lộn với đế cao su đặc trưng -- Một cái nhìn sang trọng và thể thao', 'none', '18228000', 'HermesCrewSneaker.jpg', 0, 5, NULL, NULL),
(166, 5, 4, 'Hermes Avantage Sneaker', 'Giày thể thao bằng da bê với họa tiết \"H en Biais\" tương phản -- Một thiết kế đồ họa và kiểu dáng đẹp -- Sản xuất tại Ý', 'none', '18228000', 'HermesAvantageSneaker.jpg', 1, 5, NULL, NULL),
(167, 5, 4, 'Hermes Addict Sneaker', 'Giày thể thao đan hai màu với ảo ảnh quang học -- Bản diễn giải lại phong cách cổ điển -- Sản xuất tại Ý', 'none', '19613000', 'HermesAddictSneaker.jpg', 0, 5, NULL, NULL),
(168, 5, 4, 'Hermes Alessandro Loafer', 'Giày lười lái xe bằng da bò lộn với dây da bện và khóa \"Chaine d\'Ancre\" -- Một chiếc giày lười kiểu hải lý lý tưởng cho đất liền \n                hoặc biển', 'none', '20305000', 'HermesAlessandroLoafer.jpg', 0, 5, NULL, NULL),
(169, 6, 4, 'Hermes Esprit Jogging H Pants', 'Quần chạy bộ Esprit chất liệu len \"Maille Voyage\" với họa tiết chữ \"H\" trơn (len nguyên chất 100%) -- \n                Thắt lưng và mắt cá chân có viền gân -- Thắt lưng có dây rút bằng len với các chi tiết chạm khắc mạ palladium', 'none', '27689000', 'HermesEspritJoggingHPants.jpg', 1, 5, NULL, NULL),
(170, 6, 4, 'Hermes Chino Pants', 'Quần ống loe chất liệu cotton co giãn kép (96% cotton, 4% elastane) -- \n                Túi, lót trước và sau bằng bông xương cá co giãn -- Thắt lưng bên trong bằng nút sừng -- \n                Chốt phía trước bằng zip mạ palladium -- Sản xuất tại Pháp', 'none', '33457000', 'HermesChinoPants.jpg', 0, 5, NULL, NULL),
(171, 6, 4, 'Hermes Carrot Pants', 'Quần cà rốt lưng cao bằng len nhiệt đới (len nguyên chất 100%) -- Chốt mặt trước bằng nút còi \n                -- Chốt lưng bằng khóa mạ palladium -- Sản xuất tại Pháp', 'none', '39225000', 'HermesCarrotPants.jpg', 1, 5, NULL, NULL),
(172, 6, 4, 'Hermes Saint Germain Fitted Pants', 'Quần được may bằng vải chéo cotton co giãn (97% cotton và 3% elastane) -- Sản xuất tại Ý -- Độ mở của chân: 7,5 \n                \"| Các kích thước được chỉ ra tương ứng với cỡ 42, chúng có thể thay đổi +/- 0,4\" tùy thuộc vào kích thước', 'none', '14537000', 'HermesSaintGermainFittedPants.jpg', 0, 5, NULL, NULL),
(173, 6, 4, 'Hermes Poste Et Cavalerie-Jogging Pants', 'Quần chạy bộ bằng vải thô in \"Poste et Cavalerie\" (100% cotton) -- Túi trong áo bông -- Dây thắt lưng trang trí sườn -- Dây thắt lưng có dây bện -- \n                Dây có chi tiết mạ palladium -- Sản xuất tại Pháp ', 'none', '25381000', 'HermesPosteEtCavalerie-JoggingPants.jpg', 0, 5, NULL, NULL),
(174, 7, 4, 'Hermes Denim Jeans', 'Quần jean denim bằng vải cotton với họa tiết \"Chaine d\'Ancre\' tương phản (100% cotton) -- \n                Túi lót bằng bông xương cá co giãn -- Hai túi trước và túi được vá với đinh tán mạ palladium khắc \'Clou de selle\' \n                và hai túi sau -- Cạp lưng bằng da nổi \'Hermes Paris\' ở mặt phải -- Chốt phía trước bằng nút mạ palladium khắc chữ \'Clou de selle\' \n                -- Sản xuất tại Ý ', 'none', '33457000', 'HermesDenimJeans.jpg', 1, 5, NULL, NULL),
(175, 7, 4, 'Hermes Pantalon Court', '100% cotton -- Size: FR36, FR37, FR38  ', 'none', '37356000', 'HermesPantalonCourt.jpg', 1, 5, NULL, NULL),
(176, 7, 4, 'Hermes Denim Street Style Plain Long Jeans', 'Quần jean từ HERMES, Phong cách đường phố, Trơn, Dài ', 'none', '37610000', 'HermesDenimStreetStylePlainLongJeans.jpg', 0, 5, NULL, NULL),
(177, 7, 4, 'Hermes Pocket Pants', '100% cotton -- Size: 36, 38, 40, 42', 'none', '38302000', 'HermesPocketPants.jpg', 1, 5, NULL, NULL),
(178, 7, 4, 'Hermes Jeans Denim Shorts', 'Quần short denim bằng vải cotton với họa tiết tương phản \"chaine d\'ancre\' (100% cotton) -- lót túi bằng vải bông xương cá kéo dài -- \n                hai túi trước và túi có miếng vá với đinh tán mạ palladium khắc \"clou de selle\" và hai túi sau -- dây thắt lưng sau bằng da dập nổi \'hermes paris\' \n                ở phía bên phải -- khóa cài phía trước bằng nút mạ palladium khắc \'clou de selle\' -- khóa phía trước bằng zip mạ palladium được làm tại Ý', 'none', '37864000', 'HermesJeansDenimShorts.jpg', 1, 5, NULL, NULL),
(179, 8, 4, 'Hermes Circuit 24 Faubourg Beach Shorts', 'Quần đùi đi biển in hình \"Circuit 24 Faubourg\" in polyamide (100% polyamide) -- Dây thắt lưng có dây co giãn -- Chi tiết dây cao su \n                -- Ổ cắm dây với khoen mạ palladium và chi tiết cao su tròn -- Dây thắt lưng có thun bên trong -- Túi sau với aquazip -- Sản xuất tại Ý  ', 'none', '16844000', 'HermesCircuit24FaubourgBeachShorts.jpg', 1, 5, NULL, NULL),
(180, 8, 4, 'Hermes Nagoya Shorts With Double Pocket', 'Quần đùi cắt thẳng bằng mũi khoan cotton không thấm nước với túi kép bù đắp và 2 túi lưới sau cài cúc (100% cotton) \n                -- Sản xuất tại Ý -- Chiều dài: 19,3 \"| Độ mở chân: 11,4\" | Tăng: 10,8 \"', 'none', '17075000', 'HermesNagoyaShortsWithDoublePocket.jpg', 0, 5, NULL, NULL),
(181, 8, 4, 'Hermes Shorts', 'Quần short bằng vải chéo cotton co giãn kép (96% cotton, 4% elastane) -- Túi và lót lưng bằng vải bông xương cá co giãn \n                -- Nắp túi bên hông bằng chốt khóa mạ palladium khắc chữ \"Clou de selle\" -- Chốt lưng bằng khóa mạ palladium -- Sản xuất tại Ý', 'none', '36341000', 'HermesShorts.jpg', 0, 5, NULL, NULL),
(182, 8, 4, 'Hermes Bicolor Ribbed Jogging Shorts', 'Quần đùi chạy bộ có gân hai màu bằng cotton với các chi tiết Toilovent ở hai bên (100% cotton) -- Sản xuất tại Ý ', 'none', '11537000', 'HermesBicolorRibbedJoggingShorts.jpg', 1, 5, NULL, NULL),
(183, 8, 4, 'Hermes Bicolor Ribbed Jogging Shorts Black', 'Quần đùi chạy bộ có gân hai màu bằng cotton với các chi tiết Toilovent ở hai bên (100% cotton) -- Sản xuất tại Ý', 'none', '11537000', 'HermesBicolorRibbedJoggingShortsBlack.jpg', 0, 5, NULL, NULL),
(184, 9, 4, 'Hermes Hood', 'Mỗi miếng petit h là duy nhất: chất liệu, hoa văn và màu sắc của sản phẩm của bạn sẽ là một điều bất ngờ \n                -- Mũ trùm đầu chống thấm nước bằng polyamide (59%), cotton (41%) và tơ tằm (100% lụa) -- Máy hút mùi có túi đựng -- Cỡ phổ thông.', 'none', '12229000', 'HermesHood.jpg', 0, 5, NULL, NULL),
(185, 9, 4, 'Hermes Nevada Hello Mr Farrier Cap', 'Nắp bằng vải cotton co giãn với miếng dán da cừu \"Hello Mr Farrier\" -- Sản xuất tại Ý \n                -- Chiều cao vương miện: 6,7 \"| Chiều dài tấm che: 2,8\"', 'none', '10499000', 'HermesNevadaHelloMrFarrierCap.jpg', 0, 5, NULL, NULL),
(186, 9, 4, 'Hermes Miles Cap', 'Mũ bằng vải lanh đã giặt với tấm che mặt bằng da bê Swift khâu yên ngựa và thêu chữ \"H Droit\". \n                Bạn có thể tìm thấy một dải điều chỉnh bằng da bê Swift với khóa Etriviere ở phần phía sau -- Sản xuất tại Pháp \n                -- Chiều cao vương miện: 6,7 \"| Chiều dài tấm che: 2,8\\\"', 'none', '21689000', 'HermesMilesCap.jpg', 0, 5, NULL, NULL),
(187, 9, 4, 'Hermes Petit Chalutier BucketHat', 'Mũ xô bằng vải canvas có in \"Petit Chalutier\" (58% cotton và 42% linen) -- In phun ở Ý -- Sản xuất tại Pháp -- Kích thước 52 ', 'none', '8422000', 'HermesPetitChalutierBucketHat.jpg', 0, 5, NULL, NULL),
(188, 9, 4, 'Hermes Riley Sport Cap', 'Nắp bằng gabardine kỹ thuật chống nước với đàn hồi sọc hai màu và chi tiết mạ palladium Clou de Selle -- Sản xuất tại Pháp -- Chiều cao vương miện: 6,7 \"| Chiều dài tấm che: 2,8\" ', 'none', '8422000', 'HermesRileySportCap.jpg', 0, 5, NULL, NULL),
(189, 2, 5, 'TONAL LOGO SLIM POLO SHIRT', 'This polo shirt from Calvin Klein Jeans is made from 100% cotton. It is cut in a slim fit, with a pointed collar, \n                and a 2-button placket with a tonal embroidered logo.', 'none', '790000', 'TONAL LOGO SLIM POLO SHIRT.jpg', 1, 5, NULL, NULL),
(190, 2, 5, 'URBAN SKATER BOX PRINT TEE', 'From the Collection of URBAN SKATE. Cut to a regular fit, this cotton blend tee from Calvin Klein Jeans feature a \n                photographic skater box print at the chest. Finished with an updated monogram print at the back.', 'none', '650000', 'URBAN SKATER BOX PRINT TEE.jpg', 1, 5, NULL, NULL),
(191, 2, 5, 'TONAL SPRAY PRINT LOGO TEE', 'From the Collection of HYBRID. A subtle spray print adds an urban touch to this cotton stretch tee \n                from Calvin Klein Jeans. It is cut to a slim fit, featuring a classic logo print across the chest.', 'none', '590000', 'TONAL SPRAY PRINT LOGO TEE.jpg', 1, 5, NULL, NULL),
(192, 2, 5, 'ILLUMINATED CK LOGO TEE', 'From the Collection of REFLECTION. Cut to a regular fit, this cotton tee from Calvin Klein Jeans \n                feature an illuminated logo print at the front for an elevated look.', 'none', '590000', 'ILLUMINATED CK LOGO TEE.jpg', 0, 5, NULL, NULL),
(193, 2, 5, 'MONOGRAM CLEAR PRINT TEE', 'Cut to a regular fit, this cotton tee from Calvin Klein Jeans feature a minimal logo \n                print at the front and an oversized clear monogram print at the back.', 'none', '590000', 'MONOGRAM CLEAR PRINT TEE.jpg', 1, 5, NULL, NULL),
(194, 3, 5, 'RIB KNIT SWEATER WITH QUILT SLEEVES', 'This season, the timeless rib-knit pullover sweater from Calvin Klein Jeans is updated with contemporary details. \n                Made from a luxurious wool blend, the sweater is tailored with a crew neck, long quilted sleeves and a sleeve zip pocket.', 'none', '845000', 'RIB KNIT SWEATER WITH QUILT SLEEVES.jpg', 0, 5, NULL, NULL),
(195, 3, 5, 'CHINESE NEW YEAR CAPSULE GRAPHIC SWEATSHIRT', 'From the Collection of CNY CAPSULE. Celebrate the Chinese New Year with this reinterpreted top from \n                Calvin Klein Jeans. Cut to a regular fit, this cotton sweatshirt features a special print at the front in honor of \n                the Year of the Ox, finished with an embroidered monogram on a cuff.', 'none', '763000', 'CHINESE NEW YEAR CAPSULE GRAPHIC SWEATSHIRT.jpg', 1, 5, NULL, NULL),
(196, 3, 5, 'GRAPHIC BACK PRINT SWEATER', 'Crafted from a wool blend, this pullover sweater from Calvin Klein Jeans combines a timeless rib knit design and a \n                playful graphic pattern at the back. finished with a statement logo patch at the back of the waist.', 'none', '858000', 'GRAPHIC BACK PRINT SWEATER.jpg', 1, 5, NULL, NULL),
(197, 3, 5, 'TV SERVICE KNIT PULLOVER', 'A classic design with a playful twist, this 100% wool pullover jumper from ck Calvin Klein features TV-themed details on the front and back. \n                It is tailored with a crew neck, long sleeves and a comfortable slouchy fit.', 'none', '1156000', 'TV SERVICE KNIT PULLOVER.jpg', 0, 5, NULL, NULL),
(198, 3, 5, 'KNIT MERINO TOP WITH NYLON POCKET', 'Crafted from fine spun merino, this knit top from ck calvin klein has a stand up collar with adjustable drawstrings, \n                front zip opening and long sleeves. the top also features a front pouch pocket and the top zip closure gusset made from nylon.\n                ', 'none', '1316000', 'KNIT MERINO TOP WITH NYLON POCKET.jpg', 0, 5, NULL, NULL),
(199, 7, 5, 'INDIGO RINSE DENIM STRAIGHT LEG JEANS', 'Classic straight leg fit jeans in an indigo rinse wash. Made from traditional, organic, and recycled cotton blend denim for a sustainable design.', 'none', '1590000', 'INDIGO RINSE DENIM STRAIGHT LEG JEANS.jpg', 0, 5, NULL, NULL),
(200, 7, 5, 'GARMENT-DYED CANVAS STRAIGHT LEG JEANS', 'Classic straight leg fit jeans in a garment-dyed wash. Made from organic cotton blend canvas with custom logo detailing.', 'none', '1590000', 'GARMENT-DYED CANVAS STRAIGHT LEG JEANS.jpg', 1, 5, NULL, NULL),
(201, 7, 5, 'CKJ 017 THE BASICS BODY SKINNY JEANS', 'From the Collection of THE BASICS. Cut in a CKJ 017 fit, these men\'s jeans are designed in a mid-rise and skinny silhouette. \n                They have a zip fly, 5-pocket style and body-defining details for a contoured fit. Finished with a monogram patch at the back waist.', 'none', '1490000', 'CKJ 017 THE BASICS BODY SKINNY JEANS.jpg', 1, 5, NULL, NULL),
(202, 7, 5, 'CKJ 059 URBAN SKATE BODY TAPER JEANS', 'From the Collection of URBAN SKATE. Cut in a CKJ 059 fit, these men\'s jeans are shaped in a low-rise and tapered silhouette, \n                with body-defining details for a contoured fit. They have a zip fly, 5-pocket style and a monogram patch at the back.', 'none', '1290000', 'CKJ 059 URBAN SKATE BODY TAPER JEANS.jpg    ', 1, 5, NULL, NULL),
(203, 7, 5, 'CKJ 059 BODY TAPER JEANS', 'Designed in a CKJ 059 fit, these men\'s jeans feature a low-rise waist and tapered legs with body-defining \n                details for a contoured fit. The overlapping text prints add a contemporary twist to the look. They have a zip fly with a \n                logo-engraved metal button, a 5-pocket style and an embroidered logo at the back.', 'none', '954000', 'CKJ 059 BODY TAPER JEANS.jpg', 1, 5, NULL, NULL),
(204, 8, 5, 'French Terry Drawstring Shorts', 'Designed with a solid body and iconic logo embroidery, these updated shorts feature \n                a plush cotton french terry for premium, all-day comfort. Finished with a drawstring waistband and \n                pull-on styling, dual front slip pockets and a straight leg for a relaxed silhouette.', 'none', '695000', 'French Terry Drawstring Shorts.jpg', 1, 5, NULL, NULL),
(205, 8, 5, 'Slim Fit Straight Leg Chino 9 Shorts', 'Designed with a solid body, these refined chino shorts feature a slim fit for an easy-to-style look. \n                Designed with front slip pockets, back welt pockets, a signature woven logo tag and a 9\" inseam.', 'none', '416000', 'Slim Fit Straight Leg Chino 9 Shorts.jpg', 1, 5, NULL, NULL),
(206, 8, 5, 'Logo Piping Drawstring Pull-On Shorts', 'Detailed with logo piping, these shorts feature a drawstring waistband and front slip pockets.', 'none', '416000', 'Logo Piping Drawstring Pull-On Shorts.jpg', 0, 5, NULL, NULL),
(207, 8, 5, 'French Terry Drawstring Shorts 3', 'Designed with a solid body and iconic logo embroidery, these updated shorts feature a plush cotton french \n                terry for premium, all-day comfort. Finished with a drawstring waistband and pull-on styling, dual front slip pockets and a \n                straight leg for a relaxed silhouette.\n                ', 'none', '500000', 'French Terry Drawstring Shorts 3.jpg', 0, 5, NULL, NULL),
(208, 8, 5, 'Printed Drawstring Pull-On 7 Shorts', 'Designed with an allover abstract print, these modern shorts feature a drawstring waistband and a 7\" inseam.', 'none', '516000', 'Printed Drawstring Pull-On 7 Shorts.jpg', 1, 5, NULL, NULL),
(209, 6, 5, 'Monogram Logo Drawstring Fleece Joggers', 'Crafted from a plush cotton knit blend for premium comfort, these on-trend sweatpants are \n                made with a retro-inspired, iconic logo at the front. Finished with a drawstring waistband, front slip pockets and ribbed knit trim for a snug fit.', 'none', '790000', 'Monogram Logo Drawstring Fleece Joggers.jpg', 1, 5, NULL, NULL),
(210, 6, 5, 'Solid Pull-On Pants', 'Designed with moisture wicking technology to help keep you cool and dry, these athletic joggers are made with a solid body and \n                reflective accents. Features an elasticated waistband, front zip pockets, logo printing and elasticated cuffs.', 'none', '590000', 'Solid Pull-On Pants.jpg', 0, 5, NULL, NULL),
(211, 6, 5, 'Modern Stretch Slim Fit Linen Blend Chino Pants', 'Cut in a sleek slim fit, these essential summer chinos are made with a cotton linen stretch blend for effortless comfort. \n                Designed with front slip pockets, back pockets with an embroidered CK logo and a solid look.', 'none', '590000', 'Modern Stretch Slim Fit Linen Blend Chino Pants.jpg', 0, 5, NULL, NULL),
(212, 6, 5, 'Skinny Fit Black Suit Pants', 'Made with four-season wool with natural stretch, these suit pants are made with a timeless solid black design, an extended \n                tab closure, front slip pockets, back button pockets and skinny fit shaping.', 'none', '845000', 'Skinny Fit Black Suit Pants.jpg', 0, 5, NULL, NULL),
(213, 6, 5, 'Move 365 Slim Fit Stretch Cotton 5-Pocket Pants', 'Refined pants that move like your favorite sweats. Feature packed with innovative fabric technologies, these pants are part of our Move 365 collection, \n                designed for life-on-the-go.', 'none', '954000', 'Move 365 Slim Fit Stretch Cotton 5-Pocket Pants.jpg', 0, 5, NULL, NULL),
(214, 1, 5, 'Dot Print Logo Button-Down Long Sleeve Shirt', 'Designed with an allover dot print, this modern button-down shirt is made from lightweight cotton stretch blend with a sleek \n                silhouette. Features a point collar with button-front closures, barrel cuffs, an embroidered CK logo at the chest and a shirttail hem.', 'none', '980000', 'Dot Print Logo Button-Down Long Sleeve Shirt.jpg', 0, 5, NULL, NULL),
(215, 1, 5, 'Liquid Touch Jacquard Dot Button-Down Shirt', 'Supremely soft with a cool feel and a lustrous finish, this signature Calvin Klein long sleeve shirt is crafted from liquid touch cotton for the ultimate \n                in premium comfort. Features a jacquard dot design, a point collar, button-front closures and a shirttail hem for a refined, tailored look.', 'none', '880000', 'Liquid Touch Jacquard Dot Button-Down Shirt.jpg', 1, 5, NULL, NULL),
(216, 1, 5, 'Dot Print Logo Button-Down Long Sleeve Shirt 2', 'Designed with an allover dot print, this modern button-down shirt is made from lightweight cotton stretch blend with a sleek silhouette. Features a point \n                collar with button-front closures, barrel cuffs, an embroidered CK logo at the chest and a shirttail hem.', 'none', '980000', 'Dot Print Logo Button-Down Long Sleeve Shirt 2.jpg', 0, 5, NULL, NULL),
(217, 1, 5, 'Liquid Touch Jacquard Dot Button-Down Shirt 2', 'Supremely soft with a cool feel and a lustrous finish, this signature Calvin Klein long sleeve shirt is \n                crafted from liquid touch cotton for the ultimate in premium comfort. Features a jacquard dot design, a point collar, \n                button-front closures and a shirttail hem for a refined, tailored look.', 'none', '880000', 'Liquid Touch Jacquard Dot Button-Down Shirt 2.jpg', 0, 5, NULL, NULL),
(218, 1, 5, 'Slim Fit Herringbone Point Collar Performance Non-Iron Dress Shirt', 'This steel slim fit dress shirt features a solid herringbone design, a point collar and high-tech non-iron performance \n                cotton fabric to wick away moisture for cool, dry comfort.', 'none', '1590000', 'Slim Fit Herringbone Point Collar Performance Non-Iron Dress Shirt.jpg', 0, 5, NULL, NULL),
(219, 3, 6, 'Face-patch oversized hoodie', 'Let\'s face it, this will elevate your wardrobe. Made from blush pink organic cotton, \n                this oversized hoodie from Acne Studios makes a charming addition to your comfy-wear rotation. Keep it cute.', 'none', '940000', 'face-patch oversized hoodie.jpg', 1, 5, NULL, NULL),
(220, 3, 6, 'Face-patch hoodie', 'It\'s time to slip into something a little more comfortable. Like this face-patch hoodie from Acne Studios. Its laidback design makes it perfect for off-duty days.', 'none', '960000', 'face-patch hoodie.jpg', 1, 5, NULL, NULL),
(221, 3, 6, 'Face patch oversized sweatshirt', 'Acne Studios keeps it cool, casual and care-free with this powder pink oversized sweatshirt. Made from cotton and detailed with the signature \n                face patch at the chest, this relaxed top masters the laid-back vibe you\'re going for.', 'none', '990000', 'face patch oversized sweatshirt.jpg', 1, 5, NULL, NULL),
(222, 3, 6, 'Oversized face-patch sweatshirt', 'How cool can you get? A lot more you\'re wearing this Acne Studios sweatshirt. \n                Featuring a signature face patch at the chest, this piece will be your number one choice for a relaxed outfit.', 'none', '980000', 'Oversized face-patch sweatshirt.jpg', 1, 5, NULL, NULL),
(223, 8, 6, 'Chanel sports line pants', 'Chanel’s Sport Line combines minimalist sophistication, practical materials and outstanding design. Case in point: these black cotton shorts. \n                Featuring a front button fastening, belt loops, side pockets, contrasting white trims and a rear buttoned flap pocket.', 'none', '940000', 'Chanel sports line pants.jpg', 0, 5, NULL, NULL),
(224, 8, 6, 'CC logo shorts', 'Heiress of a neutrally refined palette and impeccable clean cuts, the maison \n                Chanel persists in its reign as one of the best luxury brands for the sophisticated and elegant.', 'none', '863000', 'CC logo shorts.jpg', 0, 5, NULL, NULL),
(225, 8, 6, '1995 loose-cut shorts', 'Chanel makes your summer easy with these navy blue wool tailored shorts. Now that you\'re reassured you\'ll feel fresh and look your best, you can go enjoy the warm days.', 'none', '940000', '1995 loose-cut shorts.jpg', 1, 5, NULL, NULL),
(226, 8, 6, 'Wide-legged denim shorts', 'Casual days by the beach? These Chanel denim wide-legged shorts will take you there. With classic contrast \n                stitching and diamond quilting on the rear patch pockets, this is The look to be at The place.', 'none', '863000', 'Wide-legged denim shorts.jpg', 0, 5, NULL, NULL),
(227, 6, 6, '2010\'s Chanel trousers', 'Chanel sports line pants.jpg - 940000 - Chanel’s Sport Line combines minimalist sophistication, practical \n                materials and outstanding design. Case in point: these black cotton shorts. Featuring a front button fastening, belt loops, \n                side pockets, contrasting white trims and a rear buttoned flap pocket.', 'none', '695000', '2010\'s Chanel trousers.jpg', 1, 5, NULL, NULL),
(228, 6, 6, '2005 high-waisted flared trousers', 'Chanel makes your summer easy with these navy blue wool tailored shorts. Now that you\'re reassured you\'ll feel \n                fresh and look your best, you can go enjoy the warm days.', 'none', '795000', '2005 high-waisted flared trousers.jpg', 1, 5, NULL, NULL),
(229, 6, 6, 'Sports Line zipped details cropped trousers', 'Purchasing this item continues its narrative, so you can be confident that you’re making a POSITIVELY CONSCIOUS choice \n                for the planet.Looking for an excuse to have an all-occasion Chanel closet? That\'s why the Sports Line is here. With a casual \n                cropped length, these salamander orange cotton blend trousers showcase multiple zipped details.', 'none', '995000', 'Sports Line zipped details cropped trousers.jpg', 1, 5, NULL, NULL),
(230, 1, 7, 'Men\'s Woven Skate Top ', 'Nigeria Top phối lại một chiếc áo có cúc cổ điển với hình in lấy cảm hứng từ bản sắc Super Eagle của đội. Nó được làm từ vải thấm mồ hôi để giúp bạn thoải mái từ sân cỏ này sang mặt đường khác.', 'none', '1218000', 'nigeria-woven-skate-top-xPksnd.jpg', 0, 5, NULL, NULL),
(231, 2, 7, 'Áo thun thể thao Nike Tech Fleece màu đen', 'Nike Tech Fleece vải. Áo ba lớp cotton nhẹ,cung cấp độ ấm nhẹ và phản ứng với chuyển động tự nhiên của người mặc.', 'none', '1031000', '22434766-1-black.jpg', 0, 5, NULL, NULL),
(232, 2, 7, 'Áo phông đồ họa Nike oversized vừa vặn màu trắng', 'Áo mềm mại, thoáng khí, vải áo thun, 100% cotton.', 'none', '659000', '21392532-1-white.jpg', 1, 5, NULL, NULL),
(233, 2, 7, 'Áo phông Nike Dri-FIT', 'Áo phông Nike Dri-FIT được thiết kế với đồ họa Swoosh đến từ văn hóa đi xe đạp thành phố. Chất liệu vải mềm mại với công nghệ thấm mồ hôi giúp bạn luôn khô thoáng và dễ chịu.', 'none', '659000', 'dri-fit-graphic-training-t-shirt-3BHcCx.jpg', 0, 5, NULL, NULL),
(234, 3, 7, 'Áo khoác dệt Williwaw nam Nike Sportswear Reissue', 'Áo khoác dệt kim Nike Sportswear Reissue là một chiếc áo khoác thuyền buồm được làm từ vải dệt cao cấp và có thiết kế đúng với bản gốc. Sự kết hợp giữa in, thêu và vá mang đến một kết cấu đa dạng và thẩm mỹ cổ điển sẵn sàng cho việc xếp lớp trong thời tiết ấm áp.', 'none', '4029000', 'sportswear-reissue-williwaw-woven-jacket-vlXn18.jpg', 0, 5, NULL, NULL),
(235, 3, 7, 'Áo khoác chạy bộ nam Nike Essential Run Division Flash', 'Áo khoác Nike Essential được cập nhật với chất liệu vải không thấm nước và độ che phủ an toàn. Thiết kế nhẹ của nó giúp chống chọi với thời tiết khi bạn ra đường.', 'none', '1748000', 'essential-run-division-flash-running-jacket-pqKdFr.jpg', 0, 5, NULL, NULL),
(236, 3, 7, 'Áo khoác thể thao nam NikeLab', 'Quay trở lại với các thiết kế cổ điển, lấy cảm hứng từ đường đua, NikeLab Track Jacket được làm từ vải dệt cho cảm giác êm ái. Túi zip giữ cho đồ của bạn an toàn khi di chuyển.', 'none', '3419000', 'nikelab-track-jacket-rL5gx6.jpg', 1, 5, NULL, NULL),
(237, 4, 7, 'DÉP NIKE BENASSI TRẮNG ĐEN', 'Mang rất êm phối màu cực độc không đụng hàng.', 'none', '750000', 'hang-chinh-hang-dep-nike-benassi-trang-den.jpg', 1, 5, NULL, NULL),
(238, 4, 7, 'Dép Nike Kawa Slide Sandals Black White Màu Đen', 'Nike Kawa Slide Sandals được làm từ chất liệu da tổng hợp và pylons đem lại cảm giác thoải mái khi mang. Form dép với các đường nét vô cùng tinh tế và sắc sảo, đế dép với chất liệu cao su mềm, nhẹ, bền có đặc điểm êm chân và thông thoáng thích hợp cùng bạn hoạt động suốt ngày dài.', 'none', '950000', 'dep-nike-kawa-slide-sandals-black-white-mau-den-5fae499be26d8-13112020155347.jpg', 1, 5, NULL, NULL),
(239, 4, 7, 'Nike Victori One pool slides', 'Lớp Lót: Cao Su 100, đế: Cao Su 100%, bên Ngoài: Vải 100%.', 'none', '1697000', '16531897_32110943_1000.jpg', 1, 5, NULL, NULL),
(240, 5, 7, 'Nike Air Max 95 SE', 'Lấy cảm hứng từ cơ thể con người và tính thẩm mỹ từ các môn thể thao thập niên 90, Nike Air Max 95 SE kết hợp sự thoải mái đến khó tin và phong cách quay đầu với một thiết kế bền vững. denim và lưới. Đồ họa nút chai thêu trên lưỡi gật đầu với loại cây được sử dụng trong thiết kế. Không khí có thể xử lý được ở gót chân và đệm bàn chân trước mỗi bước đi.', 'none', '4999000', 'air-max-95-se-shoe-36d44Z.jpg', 1, 5, NULL, NULL),
(241, 5, 7, 'Nike Cosmic Unit', 'Chúng tôi đã xây dựng một hình bóng đẹp mắt và thoải mái với tính bền vững. Nó được làm từ vật liệu tái chế ít nhất 25% tính theo trọng lượng và được trang bị Air Zoom Strobel tái chế một phần được thiết kế để giúp bạn rê bóng hiệu quả hoặc phòng thủ hiệu quả.', 'none', '4409000', 'cosmic-unity-basketball-shoe-B3qDKv.jpg', 0, 5, NULL, NULL),
(242, 5, 7, 'Nike React Infinity Run Flyknit 2', 'Phần trên được làm mới sử dụng công nghệ Flywire kết hợp với Flyknit để hỗ trợ và thở khi bạn cần. Chiều cao bọt cao mang lại khả năng phản hồi mềm mại và sự thoải mái lâu dài. Nó vẫn là một trong những đôi giày được thử nghiệm nhiều nhất của chúng tôi, được thiết kế để giúp bạn cảm nhận được tiềm năng khi chân của bạn chạm vào mặt đường.', 'none', '4699000', 'react-infinity-run-flyknit-2-running-shoe-Qfh63N.jpg', 0, 5, NULL, NULL),
(243, 6, 7, 'Nike Sportswear City Made', 'Quần Nike Air Woven cập nhật kiểu dáng chủ lực với vải Ripstop và các tấm gia cố. Thiết kế chân côn và các chi tiết tiện ích mang đến cái nhìn chiến thuật, gọn gàng.', 'none', '2759000', 'sportswear-city-made-woven-trousers-hK8Nkk.jpg', 1, 5, NULL, NULL),
(244, 6, 7, 'Quần tây nam Skate Chino Nike SB Dri-FIT', 'Quần Nike SB Dri-FIT Chino có thiết kế dạng pull dễ dàng với dây thắt lưng có thể điều chỉnh để tạo sự thoải mái khi di chuyển cùng bạn.', 'none', '1479000', 'sb-dri-fit-skate-chino-trousers-FvXf48.jpg', 1, 5, NULL, NULL),
(245, 6, 7, 'Quần dài nam dệt kim Nike Phenom Elite', 'Quần Nike Phenom Elite được làm từ vải co giãn, nhẹ, phiên bản này mang đến cảm giác vừa vặn và thoải mái hơn so v* ới các phiên bản tiền nhiệm, mang lại cho bạn cảm giác thon gọn trong suốt phần chân và thuôn về phía mắt cá chân. Sản phẩm này được làm từ ít nhất 50% tái chế. sợi polyester.', 'none', '2039000', 'phenom-elite-woven-running-trousers-rgtqhP.jpg', 1, 5, NULL, NULL),
(246, 8, 7, 'Quần áo thể thao Nike', 'Quần short thể thao Nike là một phong cách giản dị được tạo ra để mặc hàng ngày. Vải áo thun mềm mại của họ cung cấp giao diện của quần đùi lông cừu yêu thích của bạn trong một loại vải sẵn sàng cho nhiệt độ ấm hơn.', 'none', '1019000', 'sportswear-jersey-shorts-KmJNbM.jpg', 1, 5, NULL, NULL),
(247, 8, 7, 'Quần short Skate Cargo Nike SB', 'Được làm từ chất liệu vải Ripstop bền bỉ, Quần short chở hàng Nike SB được tạo ra để tồn tại lâu dài. Thiết kế thùng hàng có nhiều túi nên bạn có thể để đồ trong tầm tay khi di chuyển.', 'none', '1579000', 'sb-skate-cargo-shorts-xmn03r.jpg', 1, 5, NULL, NULL),
(248, 8, 7, 'Jordan Dri-FIT Zion', 'Jordan Dri-FIT Zion Shorts linh hoạt từ tòa án này sang đường phố khác với vải lưới hai lớp và dây thắt lưng có gân cực dày và nặng. Túi zip bổ sung thêm tiện ích và chi tiết zigzag đan trong và biểu tượng của Zion truyền cho chúng bản sắc đặc trưng của anh ấy.', 'none', '1739000', 'jordan-dri-fit-zion-mesh-shorts-9qn7md.jpg', 1, 5, NULL, NULL),
(249, 9, 7, 'Nike Sportswear Heritage86', 'Nón Nike Sportswear Heritage86 Cap được làm từ vải cotton dệt trơn đã được xử lý bằng giặt nặng để có được vẻ ngoài cổ điển, phai màu. Hình ảnh thêu ở mặt trước với mật độ cao và phần đóng kim loại có thương hiệu ở mặt sau giúp thể hiện tình yêu đối với thương hiệu cho dù bạn mặc nó như thế nào.', 'none', '609000', 'sportswear-heritage86-beach-cap-1g8tKd.jpg', 0, 5, NULL, NULL),
(250, 9, 7, 'Nike Dri-FIT Pro', 'Chạy những con đường ngược đó một cách thoải mái mát mẻ với Nike Dri-FIT Pro Cap. Thiết kế có thể điều chỉnh của nó cho phép bạn kiểm soát độ vừa vặn và độ che phủ.', 'none', '709000', 'dri-fit-pro-trail-running-cap-hcdQk2.jpg', 0, 5, NULL, NULL),
(251, 9, 7, 'Jordan Jumpman Legacy91 Air', 'Jordan Jumpman Legacy91 Air Cap sử dụng các chi tiết lấy cảm hứng từ đội đua mô tô chuyên nghiệp của Michael Jordan. Nó có một vương miện có cấu trúc 6 bảng và điều chỉnh bằng dây đeo.', 'none', '659000', 'jordan-jumpman-legacy91-air-cap-WfhVxD.jpg', 1, 5, NULL, NULL),
(252, 1, 8, 'Áo sơ mi trơn màu', 'Poplin không có đính kết,màu cơ bản liền khối,tay áo dàic cổ tay áo có cài khuy Đường viền cổ điển,không có túi căng.', 'none', '5299000', '327cfef6e8fa1f382b8c10f6e4ca044e1c60d0bf_0.jpg', 0, 5, NULL, NULL),
(253, 1, 8, 'Áo sơ mi họa tiết', 'Dệt trơn, Logo, thiết kế hoa, đóng trước, đóng nút, tay áo ngắn, cổ ve áo, túi ngực đơn, đường viền khe bên.', 'none', '5413000', '4df7d3d840cf3cdafbc874e7bbf92b677108b908_0.jpg', 0, 5, NULL, NULL),
(254, 1, 8, 'Áo sơ mi và áo cánh đồng màu', 'poplin, nhấp nháy, màu liền khối cơ bản, đóng trước, đóng nút, tay áo dài, cổ tay áo có cúc, đường viền cổ điển, hai túi ngực, túi có nút, chứa các bộ phận không dệt có nguồn gốc động vật.', 'none', '13305000', '38959825DJ_14_f.jpg', 0, 5, NULL, NULL),
(255, 2, 8, 'Áo phông Prada', 'áo thun, logo, đồng màu, cổ tròn, tay ngắn, không túi, kéo dài, cỡ nhỏ.', 'none', '5367000', '8d2e6325fb90494ded5aec17bf2e65649022ef30_0.jpg', 1, 5, NULL, NULL),
(256, 2, 8, 'Áo phông họa tiết', 'áo tổng hợp, logo, hai tông màu, cổ tròn, tay ngắn, không túi, cỡ nhỏ.', 'none', '10978000', '2dd9e87ccf67851ebdb6473a8e7fedc56e006c4d_0.jpg', 1, 5, NULL, NULL),
(257, 2, 8, 'Áo phông tay dài Prada', 'áo thun, logo, màu trơn, cao cổ, tay dài, không túi, cỡ nhỏ.', 'none', '7776000', '58411a659cab21c511680be723dcadc5f2936b9f_0.jpg', 0, 5, NULL, NULL),
(258, 3, 8, 'Áo Bombers', 'các ứng dụng tương phản, Logo, đồng màu có đính kết, áo ngực đơn, áo cổ lọ, tay áo dài, khóa kéo, nhiều túi, túi trong, lót đầy đủ, chứa các bộ phận không dệt có nguồn gốc động vật, có kích thước lớn.', 'none', '60660000', '94dc1fd41d4f823c15d4dbaea97acdb4ad4abcab_0.jpg', 1, 5, NULL, NULL),
(259, 3, 8, 'Áo khoác dù Prada', 'vải techno, logo, màu cơ bản, áo ngực đơn, zip, cao cổ, nhiều túi, tay áo dài, không viền, cỡ lớn.', 'none', '11147000', '9d5ce8645dce5a4cef62931c998ad423f028cbcf_0.jpg', 0, 5, NULL, NULL),
(260, 3, 8, 'Áo Bombers', 'áo jersey, vải kỹ thuật, Logo, một chiếc áo ngực, màu cơ bản đồng màu, dây kéo đóng, cổ áo có mũ trùm đầu, nhiều túi, tay áo dài, không có đường viền, kích thước lớn.', 'none', '20373000', '1f394c56e929e61174c3348a847387fbaee5dbff_0.jpg', 0, 5, NULL, NULL),
(261, 4, 8, 'Dép Prada Logo Embossed Rubber Slides', 'Dép Prada Logo Embossed Rubber Slides Màu Đỏ Đen thiết kế kiểu dáng hiện đại. Dép được làm từ chất liệu cao su cao cấp mang lại cảm giác thoải mái, tiện lợi nhất cho người sử dụng, họa tiết tên thương hiệu \"Prada\" nổi bật màu trắng trên nền dép màu đỏ đầy tinh tế tạo điểm nhấn nổi bật. Form dép vừa vặn đi lên chân nổi bật, rất tiện lợi.', 'none', '5350000', 'dep-prada-logo-embossed-rubber-slides-mau-do-den-5ed75aba70ba8-03062020150930.jpg', 0, 5, NULL, NULL),
(262, 4, 8, 'Dép nam Prada', 'Hàng bên em nhập trực tiếp tại xưởng không qua trung gian bao rẻ, bao đẹp toàn thị trường.Hàng sử dụng nguyên liệu giống với sản phẩm chính hãng, dã thật 100%.', 'none', '1730000', 'untzoud03lsme.jpg', 0, 5, NULL, NULL),
(263, 4, 8, 'Dép nam hiệu Prada 7', 'Hàng chất lượng, tạo cảm giác êm chân khi di chuyển.', 'none', '450000', 'dep-nam-hieu-prada-supper-fake-0007-1.jpg', 0, 5, NULL, NULL),
(264, 5, 8, 'Prada Cloudbust thời trang', 'giầy sneaker đi thời trang cho anh chị em, mẫu này cực kì độc đáo và cực kì chất lượng, đi bền mà đẹp, thời trang cực kì trẻ trung,khác lạ với phần còn lại của thế giới.', 'none', '2000000', 'ba9cad7b8510cabd463ccd7a2d83be3336730b89_0.jpg', 1, 5, NULL, NULL),
(265, 5, 8, 'PRADA LINEA ROSSA', 'dệt kim, logo, đồng màu có đính kim sa, đường viền tròn, gót nhọn, nêm cao su, mặt trong bằng vải, đế cao su.', 'none', '11928000', 'c1ff0a8a101cf6eb5fa486169367f0e8af505524_0.jpg', 0, 5, NULL, NULL),
(266, 5, 8, 'Giày nam Prada hàng Siêu Cấp', 'Giày nam Prada size 38-45, hàng nhập trực tiếp tại xưởng không qua trung gian.', 'none', '2220000', 'a519dd0503949c96bbd8e8c0a131ca66a065bfd9_0.jpg', 1, 5, NULL, NULL),
(267, 6, 8, 'cropped tailored trousers', 'Những chiếc quần dài được cắt may cắt xén màu đen này từ bộ sưu tập AW19 của Prada có lớp hoàn thiện bóng cho một phong cách thoải mái nhưng tinh tế. Có dây thắt lưng đàn hồi với các vòng đai, khóa zip giấu kín, túi có khe bên, túi có dây phía sau và chiều dài được cắt bớt.', 'none', '22891000', 'b299bc9cc195cf44f3dacc4ef4a3a3baf68360f9_0.jpg', 1, 5, NULL, NULL),
(268, 6, 8, 'quần tây Prada được thiết kế riêng', 'Càng nhiều túi, càng vui. Những chiếc quần thể thao ống côn màu đen này của Prada đảm bảo bạn có chỗ cho mọi thứ. Mặc chúng trên đường đến phòng tập thể dục hoặc vào những ngày cuối tuần lười biếng.', 'none', '22698000', '325d530db9eb0119dfa1577d3b6e658cf55c3597_0.jpg', 0, 5, NULL, NULL),
(269, 6, 8, 'quần thể thao côn', 'Càng nhiều túi, càng vui. Những chiếc quần thể thao ống côn màu đen này của Prada đảm bảo bạn có chỗ cho mọi thứ. Mặc chúng trên đường đến phòng tập thể dục hoặc vào những ngày cuối tuần lười biếng.', 'none', '33192000', '7b1dd84209bdcdd1dcf7dc059b4e341d1fd5b0f1_0.jpg', 1, 5, NULL, NULL),
(270, 7, 8, 'Quần denim 1', 'denim, bạc màu, thắt lưng, đồng màu, giặt vừa, tăng giữa, đóng trước, đóng nút, nhiều túi, cỡ lớn.', 'none', '3745000', 'cdce00a86467882e9fe215e0d817941b3fa4455d_0.jpg', 0, 5, NULL, NULL),
(271, 7, 8, 'Quần denim 2', 'Denim, Đinh tán, Logo, màu đồng nhất, Màu rửa, Tăng giữa, Đóng cửa trước, Nút, zip, Nhiều túi, quần ống thẳng, cỡ lớn.', 'none', '8291000', 'ccd02f9fd7b9de333576ee4a3ccecd2e5466c5c3_0.jpg', 1, 5, NULL, NULL),
(272, 7, 8, 'Quần denim 3', 'vải denim, không có đính kết, giặt có màu, đồng màu, tăng giữa, đóng cửa trước, nút, zip, nhiều ngăn, kéo dài, kích thước lớn.\n                ', 'none', '7966000', '8f67bea41848acb36ed5a218d191fd54707e4591_0.jpg', 1, 5, NULL, NULL),
(273, 8, 8, 'Quần đùi & Bermuda Prada 1', 'jersey, thắt lưng, logo, màu đồng nhất, tăng giữa, vừa vặn, thẳng chân, móc và thanh, zip, nhiều túi, kéo dài.', 'none', '15794000', 'f6c163cb63601cd85509ee5ca6456d337965ab6d_0.jpg', 1, 5, NULL, NULL),
(274, 8, 8, 'Quần đùi & Bermuda Prada 2', 'dệt trơn, thiết kế hình học, dây buộc, thắt lưng cao, vừa vặn, đóng nút, nhiều túi, có chứa các bộ phận không phải dệt có nguồn gốc động vật.', 'none', '13047000', '61711443621a58647173152bba8d977d80f0624a_0.jpg', 0, 5, NULL, NULL),
(275, 8, 8, 'QUẦN SHORT COTTON MÀU BE', 'Quần đùi được thiết kế riêng cho giới tính, size 36 cho nữ, 38 cho nam.', 'none', '2598000', 'e744d73c30a468e0689af790fda86091d129944b_0.jpg', 0, 5, NULL, NULL),
(276, 9, 8, 'Mũ đen Prada', 'Logo hình tam giác bằng kim loại tráng men Lớp lót bông.', 'none', '10824000', '575b96bf9441fd5b25c99054f2db1f2ed7b0015b_0.jpg', 0, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

DROP TABLE IF EXISTS `tbl_shipping`;
CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shipping_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_note`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `created_at`, `updated_at`) VALUES
(58, 'none', 'Hiếu Suối Tiên', 'Đồng Nai', '012346', 'caotrunghieu.@gmail.com', NULL, NULL),
(59, 'Giao nhanh nha Shop', 'Hiếu Suối Tiên', 'Đồng Nai', '0363054865', '19211tt0067@mail.tdc.edu.vn', NULL, NULL),
(57, 'None', 'Hiếu Suối Tiên', 'Đồng Nai', '123456', 'caotrunghieu.@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
