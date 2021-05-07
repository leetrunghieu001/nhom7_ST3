-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 04, 2021 lúc 03:09 PM
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
-- Cơ sở dữ liệu: `sql_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brandID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brandName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`brandID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brandID`, `brandName`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', NULL, NULL),
(2, 'Gucci', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customerID`)
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_04_24_214020_create_products_table', 1),
(2, '2021_05_04_012521_create_types_table', 1),
(3, '2021_05_04_012545_create_brands_table', 1),
(4, '2021_05_04_012651_create_customers_table', 1),
(5, '2021_05_04_012730_create_votes_table', 1),
(6, '2021_05_04_012752_create_orders_table', 1),
(7, '2021_05_04_012809_create_comments_table', 1),
(8, '2021_05_04_012829_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `orderID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `totalPrice` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `productID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `topHot` smallint(6) NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productID`, `typeID`, `brandID`, `productName`, `image`, `price`, `topHot`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Áo training adidas AEROREADY nam GM2154', 'ao-training-adidas-nam-gm2154-1_ee443e38ea944b93b515aed0e2ccae75_master.jpg', 600000, 1, 'Áo Gym nam Adidas', NULL, NULL),
(2, 1, 1, 'Áo training adidas AEROREADY nam GQ2153', 'ao-training-adidas-nam-gq2153-3_a905c3d39c514d8b858ee428e084fc0e_master.jpg', 800000, 1, 'Áo Gym nam Adidas', NULL, NULL),
(3, 2, 1, 'Quần training adidas Primeblue nam GM2146', 'quan-training-adidas-nam-gm2146-1_259ee249445c40c5a4d90f8d4b53173e_master.jpg', 750000, 1, 'Quần Gym nam Adidas', NULL, NULL),
(4, 2, 1, 'Quần training adidas M FB HYPE 3/4 nam GL4798', 'gl4798-1_48f6f90a1c194035a676ac77c5f24dd3_master.jpg', 1300000, 1, 'Quần Gym nam Adidas', NULL, NULL),
(5, 1, 2, 'Áo thun GUCCI logo meo meo', '9e336e38fd33bdab39a27a672a300c5e.jpg', 220000, 0, 'Áo thun GUCCI logo meo meo', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `typeID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`typeID`, `typeName`, `created_at`, `updated_at`) VALUES
(1, 'Áo', NULL, NULL),
(2, 'Quần', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `voteID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quality` smallint(6) NOT NULL,
  `customerID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`voteID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
