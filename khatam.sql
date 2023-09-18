-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 01:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'جنس', '2020-11-13 13:05:45', '2020-11-13 13:48:00'),
(2, 'طرح پارچه', '2020-11-13 15:17:23', '2020-11-13 15:17:23'),
(3, 'رنگ', '2020-11-13 15:17:33', '2020-11-13 15:17:33'),
(4, 'سایز', '2020-11-13 15:17:39', '2020-11-13 15:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_category`
--

CREATE TABLE `attribute_category` (
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `is_filter` tinyint(1) NOT NULL DEFAULT 0,
  `is_variation` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_category`
--

INSERT INTO `attribute_category` (`attribute_id`, `category_id`, `is_filter`, `is_variation`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, NULL, NULL),
(1, 2, 0, 0, NULL, NULL),
(1, 3, 0, 0, NULL, NULL),
(1, 4, 1, 0, NULL, NULL),
(2, 1, 1, 0, NULL, NULL),
(2, 2, 1, 0, NULL, NULL),
(2, 3, 1, 0, NULL, NULL),
(3, 1, 1, 0, NULL, NULL),
(3, 2, 0, 1, NULL, NULL),
(3, 3, 1, 0, NULL, NULL),
(3, 4, 0, 1, NULL, NULL),
(4, 1, 0, 1, NULL, NULL),
(4, 3, 0, 1, NULL, NULL),
(4, 4, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `text`, `priority`, `is_active`, `type`, `button_text`, `button_link`, `button_icon`, `created_at`, `updated_at`) VALUES
(3, '2020_11_7_19_3_49_slider_1.jpg', 'لورم ایپسوم', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ                     و با استفاده از طراحان گرافیک است', 1, 1, 'slider', 'فروشگاه', 'categories/mens-shirts', 'sli sli-basket-loaded', '2020-09-02 15:44:23', '2020-11-07 15:33:49'),
(4, '2020_11_7_19_4_2_slider_2.jpg', 'لورم ایپسوم', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است', 2, 1, 'slider', 'فروشگاه', 'categories/mens-shirts', 'sli sli-basket-loaded', '2020-09-02 15:44:58', '2020-11-07 15:34:02'),
(5, '2020_11_7_19_6_28_index_top_1.png', 'زنانه', NULL, 1, 1, 'index-top', NULL, '#', NULL, '2020-09-02 15:56:16', '2020-11-07 15:36:28'),
(6, '2020_11_7_19_6_41_index_top_2.png', 'جین', NULL, 2, 1, 'index-top', NULL, '#', NULL, '2020-09-02 15:57:51', '2020-11-07 15:36:41'),
(7, '2020_11_7_19_7_0_index_top_3.png', 'مردانه', NULL, 3, 1, 'index-top', NULL, '#', NULL, '2020-09-02 15:58:28', '2020-11-07 15:37:00'),
(8, '2020_11_7_19_7_22_index_top_4.png', 'لورم ایپسوم', 'لورم ایپسوم', 4, 1, 'index-top', 'فروشگاه', 'categories/mens-shirts', NULL, '2020-09-02 15:59:27', '2020-11-07 15:37:22'),
(9, '2020_11_7_19_7_36_index_top_5.png', 'لورم ایپسوم', 'لورم ایپسوم', 5, 1, 'index-top', 'فروشگاه', '#', NULL, '2020-09-02 15:59:55', '2020-11-07 15:37:36'),
(10, '2020_11_7_19_8_54_index_bottom_1.png', 'لورم ایپسوم', 'لورم ایپسوم', 1, 1, 'index-bottom', 'فروشگاه', 'categories/mens-shirts', NULL, '2020-09-02 16:01:05', '2020-11-07 15:38:54'),
(11, '2020_11_7_19_9_15_index_bottom_2.png', 'لورم ایپسوم', 'لورم ایپسوم', 2, 1, 'index-bottom', 'فروشگاه', 'categories/mens-shirts', NULL, '2020-09-02 16:01:36', '2020-11-07 15:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'برند یک', 'برند-یک', 1, '2020-11-11 17:22:35', '2020-11-11 17:22:35'),
(2, 'برند دو', 'برند-دو', 0, '2020-11-11 17:23:44', '2020-11-11 17:23:44'),
(3, 'برند سه', 'برند-سه', 0, '2020-11-11 17:34:26', '2020-11-11 17:34:26'),
(4, 'برند چهار', 'برند-چهار', 0, '2020-11-11 17:36:15', '2020-11-11 17:36:15'),
(5, 'برند پنج', 'برند-پنج', 1, '2020-11-11 17:37:22', '2020-11-11 17:37:22'),
(6, 'برند شش 1', 'برند-شش-1', 1, '2020-11-11 17:38:24', '2020-11-11 18:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `description`, `is_active`, `icon`, `created_at`, `updated_at`) VALUES
(1, 0, 'مردانه', 'mens', NULL, 1, NULL, '2020-11-13 20:42:49', '2020-11-18 17:50:49'),
(2, 0, 'زنانه', 'womens', NULL, 1, NULL, '2020-11-13 20:56:00', '2021-01-01 10:53:08'),
(3, 1, 'پیراهن', 'mens-shirts', NULL, 1, NULL, '2020-11-18 17:52:20', '2020-11-18 17:52:20'),
(4, 2, 'مانتو', 'manteau', NULL, 1, NULL, '2020-11-18 17:53:13', '2020-11-18 17:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'تهران', 1, NULL, NULL),
(2, 'پردیس', 1, NULL, NULL),
(3, 'دماوند', 1, NULL, NULL),
(4, 'گلستان', 1, NULL, NULL),
(5, 'لواسان', 1, NULL, NULL),
(6, 'اصفهان', 2, NULL, NULL),
(7, 'بهارستان', 2, NULL, NULL),
(8, 'خمینی شهر', 2, NULL, NULL),
(9, 'خور', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `approved`, `text`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 6, 5, 1, 'تست شماره یک تست شماره یک تست شماره یک تست شماره یکتست شماره یک تست شماره یک', NULL, '2021-01-13 13:45:17', '2021-01-13 15:00:59'),
(18, 6, 5, 1, 'تست شماره 2', NULL, '2021-01-13 14:06:27', '2021-01-13 15:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `text`, `created_at`, `updated_at`) VALUES
(1, 'تستت', 'a@gmail.com', 'تست تست', 'تست تست تست تست تست تست تست تست', '2021-04-18 20:09:12', '2021-04-18 20:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('amount','percentage') COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) UNSIGNED DEFAULT NULL,
  `percentage` int(10) UNSIGNED DEFAULT NULL,
  `max_percentage_amount` int(10) UNSIGNED DEFAULT NULL,
  `expired_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `type`, `amount`, `percentage`, `max_percentage_amount`, `expired_at`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test', '123', 'amount', 10000, NULL, NULL, '2021-03-25 14:57:30', NULL, '2021-01-15 15:57:34', '2021-01-15 15:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_09_220548_create_categories_table', 1),
(5, '2020_11_09_220804_create_brands_table', 1),
(6, '2020_11_09_221214_create_products_table', 1),
(7, '2020_11_09_222039_create_product_images_table', 1),
(8, '2020_11_09_222339_create_tags_table', 1),
(9, '2020_11_09_222445_create_product_tag_table', 1),
(10, '2020_11_09_222702_create_comments_table', 1),
(11, '2020_11_09_222936_create_product_rates_table', 1),
(12, '2020_11_09_223804_create_attributes_table', 1),
(13, '2020_11_09_223859_create_attribute_category_table', 1),
(14, '2020_11_09_224450_create_product_attributes_table', 1),
(16, '2020_11_09_225344_create_provinces_table', 1),
(17, '2020_11_09_225443_create_cities_table', 1),
(18, '2020_11_09_225601_create_user_addresses_table', 1),
(19, '2020_11_09_230209_create_coupons_table', 1),
(20, '2020_11_09_230759_create_orders_table', 1),
(21, '2020_11_09_231450_create_order_items_table', 1),
(22, '2020_11_09_231708_create_transactions_table', 1),
(23, '2020_11_09_232304_create_wishlist_table', 1),
(24, '2020_11_09_232426_create_banners_table', 1),
(25, '2020_11_09_232647_create_contact_us_table', 1),
(26, '2020_11_09_232749_create_settings_table', 1),
(27, '2020_11_09_224628_create_product_variations_table', 2),
(28, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(29, '2021_04_20_150751_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Role', 2),
(1, 'App\\Models\\Role', 4),
(2, 'App\\Models\\Role', 1),
(2, 'App\\Models\\Role', 2),
(2, 'App\\Models\\Role', 4),
(3, 'App\\Models\\Role', 1),
(3, 'App\\Models\\Role', 3),
(3, 'App\\Models\\Role', 4),
(3, 'App\\Models\\User', 6),
(4, 'App\\Models\\Role', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `total_amount` int(10) UNSIGNED NOT NULL,
  `delivery_amount` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `coupon_amount` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `paying_amount` int(10) UNSIGNED NOT NULL,
  `payment_type` enum('pos','cash','shabaNumber','cardToCard','online') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address_id`, `coupon_id`, `status`, `total_amount`, `delivery_amount`, `coupon_amount`, `paying_amount`, `payment_type`, `payment_status`, `description`, `created_at`, `updated_at`) VALUES
(2, 6, 1, NULL, 1, 25000, 12000, 0, 27000, 'online', 1, NULL, '2021-01-17 17:26:49', '2021-01-17 17:26:57'),
(3, 6, 1, NULL, 1, 25000, 12000, 0, 37000, 'online', 1, NULL, '2021-01-17 17:34:53', '2021-01-17 17:35:12'),
(4, 6, 1, NULL, 0, 25000, 12000, 0, 27000, 'online', 0, NULL, '2021-01-17 17:35:45', '2021-01-17 17:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_variation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `subtotal` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_variation_id`, `price`, `quantity`, `subtotal`, `created_at`, `updated_at`) VALUES
(31, 2, 1, 2, 15000, 1, 15000, '2021-01-17 17:26:49', '2021-01-17 17:26:49'),
(32, 3, 1, 1, 25000, 1, 25000, '2021-01-17 17:34:53', '2021-01-17 17:34:53'),
(33, 4, 1, 2, 15000, 1, 15000, '2021-01-17 17:35:45', '2021-01-17 17:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit-article', 'ویرایش مقاله', 'web', '2021-04-20 11:12:52', '2021-04-20 18:58:49'),
(2, 'create-article', 'ایجاد مقاله', 'web', '2021-04-20 11:20:16', '2021-04-20 18:58:29'),
(3, 'create-product', 'ایجاد محصول', 'web', '2021-04-20 18:59:05', '2021-04-20 18:59:05'),
(4, 'user-management', 'مدیریت کاربران', 'web', '2021-04-20 18:59:43', '2021-04-20 18:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `delivery_amount` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `delivery_amount_per_product` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `category_id`, `slug`, `primary_image`, `description`, `status`, `is_active`, `delivery_amount`, `delivery_amount_per_product`, `created_at`, `updated_at`) VALUES
(1, 'محصول اول', 1, 3, 'محصول-اول', '2020_12_10_1_10_29_377468_1.jpg', 'محصول اول محصول اول محصول اول محصول اول محصول اول محصول اول محصول اول محصول اول', 1, 1, 12000, 0, '2020-12-09 21:40:29', '2020-12-09 21:40:29'),
(2, 'محصول دوم', 2, 3, 'محصول-دوم', '2020_12_10_1_13_11_397999_1.jpg', 'محصول دوم محصول دوم محصول دوم محصول دوم محصول دوم محصول دوم محصول دوم محصول دوم', 1, 1, 0, 0, '2020-12-09 21:43:11', '2020-12-09 21:43:11'),
(3, 'محصول سوم', 3, 4, 'محصول-سوم', '2020_12_12_3_14_26_305826_1.jpg', 'محصول سوم محصول سوم محصول سوم محصول سوم محصول سوم محصول سوم محصول سوم محصول سوم محصول سوم محصول سوم محصول سوم', 1, 1, 12000, 0, '2020-12-09 21:47:19', '2020-12-12 00:28:15'),
(4, 'محصول چهارم', 4, 3, 'محصول-چهارم', '2021_1_7_18_59_12_244892_1.jpg', 'محصول چهارم محصول چهارم محصول چهارم محصول چهارم محصول چهارم محصول چهارم محصول چهارم محصول چهارم محصول چهارم محصول چهارم', 1, 1, 0, 0, '2021-01-07 15:29:12', '2021-01-07 15:29:12'),
(5, 'محصول پنجم', 5, 3, 'محصول-پنجم', '2021_1_7_19_1_23_305491_1.jpg', 'محصول پنجم محصول پنجم محصول پنجم محصول پنجم محصول پنجم محصول پنجم محصول پنجم محصول پنجم محصول پنجم محصول پنجم', 1, 1, 0, 0, '2021-01-07 15:31:23', '2021-01-07 15:31:23'),
(6, 'محصول ششم', 4, 3, 'محصول-ششم', '2021_1_7_19_3_21_516776_1.jpg', 'محصول ششم محصول ششم محصول ششم محصول ششم محصول ششم محصول ششم محصول ششم محصول ششم محصول ششم محصول ششم محصول ششم', 1, 1, 5000, 2000, '2021-01-07 15:33:21', '2021-01-07 15:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `attribute_id`, `product_id`, `value`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'پنبه ای', 1, '2020-12-09 21:40:29', '2020-12-09 21:40:29'),
(2, 2, 1, 'ساده', 1, '2020-12-09 21:40:29', '2020-12-09 21:40:29'),
(3, 3, 1, 'آبی', 1, '2020-12-09 21:40:29', '2020-12-09 21:40:29'),
(4, 1, 2, 'پنبه', 1, '2020-12-09 21:43:11', '2020-12-09 21:43:11'),
(5, 2, 2, 'ساده', 1, '2020-12-09 21:43:11', '2020-12-09 21:43:11'),
(6, 3, 2, 'مشکی', 1, '2020-12-09 21:43:11', '2020-12-09 21:43:11'),
(12, 1, 3, 'پنبه', 1, '2020-12-12 00:28:15', '2020-12-12 00:28:15'),
(13, 4, 3, 'M', 1, '2020-12-12 00:28:15', '2020-12-12 00:28:15'),
(14, 1, 4, 'پلی استر', 1, '2021-01-07 15:29:12', '2021-01-07 15:29:12'),
(15, 2, 4, 'طرح دار', 1, '2021-01-07 15:29:12', '2021-01-07 15:29:12'),
(16, 3, 4, 'آبی', 1, '2021-01-07 15:29:12', '2021-01-07 15:29:12'),
(17, 1, 5, 'پلی استر', 1, '2021-01-07 15:31:23', '2021-01-07 15:31:23'),
(18, 2, 5, 'ساده', 1, '2021-01-07 15:31:23', '2021-01-07 15:31:23'),
(19, 3, 5, 'سفید', 1, '2021-01-07 15:31:23', '2021-01-07 15:31:23'),
(20, 1, 6, 'پنبه ای', 1, '2021-01-07 15:33:21', '2021-01-07 15:33:21'),
(21, 2, 6, 'ساده', 1, '2021-01-07 15:33:21', '2021-01-07 15:33:21'),
(22, 3, 6, 'سرمه ای', 1, '2021-01-07 15:33:21', '2021-01-07 15:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '2020_12_10_1_10_29_378985_2.jpg', '2020-12-09 21:40:29', '2020-12-09 21:40:29'),
(2, 1, '2020_12_10_1_10_29_380154_3.jpg', '2020-12-09 21:40:29', '2020-12-09 21:40:29'),
(3, 2, '2020_12_10_1_13_11_400620_2.jpg', '2020-12-09 21:43:11', '2020-12-09 21:43:11'),
(4, 2, '2020_12_10_1_13_11_402448_3.jpg', '2020-12-09 21:43:11', '2020-12-09 21:43:11'),
(6, 3, '2020_12_10_1_17_19_842623_3.jpg', '2020-12-09 21:47:19', '2020-12-09 21:47:19'),
(7, 3, '2020_12_12_3_14_35_304999_2.jpg', '2020-12-11 23:44:35', '2020-12-11 23:44:35'),
(8, 3, '2020_12_12_3_14_35_307452_3.jpg', '2020-12-11 23:44:35', '2020-12-11 23:44:35'),
(9, 4, '2021_1_7_18_59_12_246367_2.jpg', '2021-01-07 15:29:12', '2021-01-07 15:29:12'),
(10, 4, '2021_1_7_18_59_12_247425_3.jpg', '2021-01-07 15:29:12', '2021-01-07 15:29:12'),
(11, 5, '2021_1_7_19_1_23_306675_2.jpg', '2021-01-07 15:31:23', '2021-01-07 15:31:23'),
(12, 5, '2021_1_7_19_1_23_307557_3.jpg', '2021-01-07 15:31:23', '2021-01-07 15:31:23'),
(13, 6, '2021_1_7_19_3_21_518263_2.jpg', '2021-01-07 15:33:21', '2021-01-07 15:33:21'),
(14, 6, '2021_1_7_19_3_21_519933_3.jpg', '2021-01-07 15:33:21', '2021-01-07 15:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_rates`
--

CREATE TABLE `product_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_rates`
--

INSERT INTO `product_rates` (`id`, `user_id`, `product_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 6, 5, 3, '2021-01-13 13:45:17', '2021-01-13 14:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`tag_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(1, 6, NULL, NULL),
(2, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` int(10) UNSIGNED DEFAULT NULL,
  `date_on_sale_from` timestamp NULL DEFAULT NULL,
  `date_on_sale_to` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `attribute_id`, `product_id`, `value`, `price`, `quantity`, `sku`, `sale_price`, `date_on_sale_from`, `date_on_sale_to`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 1, 'M', 25000, 4, '123', NULL, NULL, NULL, '2020-12-09 21:40:29', '2021-01-17 17:35:12', NULL),
(2, 4, 1, 'L', 25000, 5, '123', 15000, '2020-11-30 22:21:52', '2021-03-02 22:22:02', '2020-12-09 21:40:29', '2021-01-17 17:26:57', NULL),
(3, 4, 1, 'XL', 30000, 5, '123', NULL, NULL, NULL, '2020-12-09 21:40:29', '2020-12-09 21:40:29', NULL),
(4, 4, 1, 'S', 32000, 4, '123', 30000, '2020-11-30 22:22:12', '2021-04-06 21:22:15', '2020-12-09 21:40:29', '2020-12-09 21:40:29', NULL),
(5, 4, 2, 'L', 7000, 0, '123', NULL, NULL, NULL, '2020-12-09 21:43:11', '2020-12-09 21:43:11', NULL),
(6, 4, 2, 'XL', 7000, 0, '123', NULL, NULL, NULL, '2020-12-09 21:43:11', '2020-12-09 21:43:11', NULL),
(7, 4, 3, 'M', 105000, 3, '123', 20000, '2020-12-11 21:16:03', '2021-03-09 21:16:07', '2020-12-09 21:47:19', '2020-12-12 00:28:15', '2021-01-03 19:28:37'),
(8, 4, 3, 'L', 105000, 4, '123', 21000, '2021-01-03 19:17:20', '2021-03-02 19:17:28', '2020-12-09 21:47:19', '2020-12-12 00:28:15', '2020-12-12 00:28:15'),
(9, 4, 3, 'XXL', 105000, 2, '123', NULL, NULL, NULL, '2020-12-09 21:47:19', '2020-12-12 00:28:15', '2020-12-12 00:28:15'),
(10, 3, 3, 'آبی', 20000, 3, '123', 12000, '2021-01-03 19:29:00', '2021-04-01 18:29:04', '2020-12-12 00:28:15', '2020-12-12 00:28:15', NULL),
(11, 4, 4, 'M', 12000, 5, '123', 10000, '2021-01-05 15:33:36', '2021-04-14 14:33:42', '2021-01-07 15:29:12', '2021-01-07 15:29:12', NULL),
(12, 4, 4, 'L', 12000, 4, '123', NULL, NULL, NULL, '2021-01-07 15:29:12', '2021-01-07 15:29:12', NULL),
(13, 4, 4, 'XL', 20000, 5, '123', NULL, NULL, NULL, '2021-01-07 15:29:12', '2021-01-16 20:29:58', NULL),
(14, 4, 4, 'XXL', 25000, 4, '123', 15000, '2021-01-05 15:34:02', '2021-05-03 14:34:05', '2021-01-07 15:29:12', '2021-01-07 15:29:12', NULL),
(15, 4, 5, 'S', 50000, 6, '123', NULL, NULL, NULL, '2021-01-07 15:31:23', '2021-01-07 15:31:23', NULL),
(16, 4, 5, 'M', 50000, 4, '123', NULL, NULL, NULL, '2021-01-07 15:31:23', '2021-01-07 15:31:23', NULL),
(17, 4, 5, 'XXL', 50000, 5, '123', NULL, NULL, NULL, '2021-01-07 15:31:23', '2021-01-07 15:31:23', NULL),
(18, 4, 6, 'M', 25000, 5, '123', NULL, NULL, NULL, '2021-01-07 15:33:21', '2021-01-07 15:33:21', NULL),
(19, 4, 6, 'L', 25000, 4, '123', 20000, '2021-01-06 15:34:29', '2021-05-04 14:34:32', '2021-01-07 15:33:21', '2021-01-07 15:33:21', NULL),
(20, 4, 6, 'XL', 30000, 5, '123', NULL, NULL, NULL, '2021-01-07 15:33:21', '2021-01-07 15:33:21', NULL),
(21, 4, 6, 'XXL', 32000, 6, '123', NULL, NULL, NULL, '2021-01-07 15:33:21', '2021-01-07 15:33:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'تهران', NULL, NULL),
(2, 'اصفهان', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ادمین', 'web', '2021-04-20 20:32:35', '2021-04-20 21:02:05'),
(2, 'writer', 'نوسینده', 'web', '2021-04-20 20:33:43', '2021-04-20 20:33:43'),
(3, 'product-management', 'مدیریت محصول', 'web', '2021-04-20 20:34:10', '2021-04-20 20:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `address`, `telephone`, `telephone2`, `longitude`, `latitude`, `instagram`, `telegram`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'لورم متن ساختگی با تولید سادگی', '0910 000 000', '0910 000 000', '51.402283', '35.698571', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'پیراهن', '2020-11-13 23:05:03', '2020-11-18 17:49:43'),
(2, 'دامن', '2020-11-18 17:49:50', '2020-11-18 17:49:50'),
(3, 'کت', '2020-11-18 17:49:56', '2020-11-18 17:49:56'),
(4, 'ژاکت', '2020-11-18 17:50:06', '2020-11-18 17:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `ref_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway_name` enum('zarinpal','pay') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `amount`, `ref_id`, `token`, `description`, `gateway_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 27000, '6359', 'c5WWrA', NULL, 'pay', 1, '2020-04-14 16:26:49', '2021-01-17 17:26:57'),
(2, 6, 3, 37000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2020-04-15 16:34:53', '2021-01-17 17:35:12'),
(3, 6, 4, 25000, NULL, 'c5WXow', NULL, 'pay', 0, '2020-04-15 16:35:45', '2021-01-17 17:35:45'),
(4, 6, 2, 18000, '6359', 'c5WWrA', NULL, 'pay', 1, '2020-05-11 16:26:49', '2021-01-17 17:26:57'),
(5, 6, 3, 37000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2020-05-12 16:34:53', '2021-01-17 17:35:12'),
(6, 6, 4, 75000, NULL, 'c5WXow', NULL, 'pay', 0, '2020-06-17 16:35:45', '2021-01-17 17:35:45'),
(7, 6, 2, 43000, '6359', 'c5WWrA', NULL, 'pay', 1, '2020-06-18 16:26:49', '2021-01-17 17:26:57'),
(8, 6, 3, 37000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2020-08-19 16:34:53', '2021-01-17 17:35:12'),
(9, 6, 4, 20000, NULL, 'c5WXow', NULL, 'pay', 0, '2020-10-17 17:35:45', '2021-01-17 17:35:45'),
(10, 6, 2, 17000, '6359', 'c5WWrA', NULL, 'pay', 1, '2020-07-17 16:26:49', '2021-01-17 17:26:57'),
(11, 6, 3, 50000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2020-09-17 17:34:53', '2021-01-17 17:35:12'),
(12, 6, 4, 25000, NULL, 'c5WXow', NULL, 'pay', 0, '2020-11-17 17:35:45', '2021-01-17 17:35:45'),
(13, 6, 2, 27000, '6359', 'c5WWrA', NULL, 'pay', 1, '2020-08-17 16:26:49', '2021-01-17 17:26:57'),
(14, 6, 3, 87000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2020-09-19 17:34:53', '2021-01-17 17:35:12'),
(15, 6, 4, 27000, NULL, 'c5WXow', NULL, 'pay', 1, '2020-11-20 17:35:45', '2021-01-17 17:35:45'),
(16, 6, 2, 16000, '6359', 'c5WWrA', NULL, 'pay', 1, '2020-08-18 16:26:49', '2021-01-17 17:26:57'),
(17, 6, 3, 37000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2020-10-15 17:34:53', '2021-01-17 17:35:12'),
(18, 6, 2, 12000, '6359', 'c5WWrA', NULL, 'pay', 1, '2020-12-18 17:26:49', '2021-01-17 17:26:57'),
(19, 6, 3, 35000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2020-12-19 17:34:53', '2021-01-17 17:35:12'),
(20, 6, 3, 50000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2020-12-17 17:34:53', '2021-01-17 17:35:12'),
(21, 6, 3, 87000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2021-01-19 17:34:53', '2021-01-17 17:35:12'),
(22, 6, 3, 37000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2021-01-15 17:34:53', '2021-01-17 17:35:12'),
(23, 6, 2, 20000, '6359', 'c5WWrA', NULL, 'pay', 1, '2021-02-18 17:26:49', '2021-01-17 17:26:57'),
(24, 6, 3, 40000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2021-02-19 17:34:53', '2021-01-17 17:35:12'),
(25, 6, 3, 37000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2021-03-15 17:34:53', '2021-01-17 17:35:12'),
(26, 6, 3, 90000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2021-03-19 17:34:53', '2021-01-17 17:35:12'),
(27, 6, 2, 10000, '6359', 'c5WWrA', NULL, 'pay', 1, '2021-04-18 16:26:49', '2021-01-17 17:26:57'),
(28, 6, 3, 30000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 1, '2021-04-19 16:34:53', '2021-01-17 17:35:12'),
(29, 6, 3, 10000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2021-04-15 16:34:53', '2021-01-17 17:35:12'),
(30, 6, 2, 12000, '6359', 'c5WWrA', NULL, 'pay', 1, '2021-05-09 15:26:49', '2021-01-17 17:26:57'),
(31, 6, 3, 8000, '12345678', '000000000000000000000000000000304486', NULL, 'zarinpal', 0, '2021-05-09 16:34:53', '2021-01-17 17:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `otp` int(11) DEFAULT NULL,
  `login_token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `cellphone`, `avatar`, `status`, `otp`, `login_token`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `provider_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'علی شیخ', NULL, NULL, 1, NULL, NULL, 'ali@gmail.com', NULL, '$2y$10$Y0wJ6Y6.dzdl7vpFzCSPG.QWCCBKovcgSwhMVHK65INQilYBW0/qq', NULL, NULL, NULL, NULL, '2021-01-10 20:17:09', '2021-01-10 20:17:09'),
(4, 'webprog -ir', NULL, 'https://lh3.googleusercontent.com/a-/AOh14Gg39R6GfASP34sR3bgxFQ-X-_sO5Q2He8UW8pTh=s96-c', 1, NULL, NULL, 'webprog.ir@gmail.com', '2021-01-10 23:08:39', '$2y$10$KoSMKIFdOULcQbnI66W0UObHa3kfPwo9xKjl2OQZtAveOuwBKdCU2', NULL, NULL, 'google', 'KCxH3PX5QmwZ6vf1viOgyhACFkfEUiAWpHPIax5qGxY8zW8vTaMt3SCAums3', '2021-01-10 23:08:39', '2021-04-20 10:03:44'),
(6, NULL, '09111111111', NULL, 1, 106045, '$2y$10$iiu97Hss/RPJx9CAVuAkFuZ.fm4Qxdr4t7NMjIUkdDlRbyc1Eb872', NULL, NULL, NULL, NULL, NULL, NULL, 'bxKxJutM7p2GjETCKBhL9LaqHBit35vDEMqI9tOn3sscMM2UmnsTMGtKcILF', '2021-01-12 19:55:01', '2021-01-12 21:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellphone` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `title`, `address`, `cellphone`, `postal_code`, `user_id`, `province_id`, `city_id`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 'منزل 1', 'تست1', '09000000001', '1234567893', 6, 1, 2, NULL, NULL, '2021-01-15 20:28:26', '2021-01-15 21:39:14'),
(2, 'محل کار', 'تست', '09000000000', '1234567892', 6, 1, 1, NULL, NULL, '2021-01-15 20:54:04', '2021-01-15 20:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(6, 1, '2021-01-13 19:07:55', '2021-01-13 19:07:55'),
(6, 2, '2021-01-13 19:35:12', '2021-01-13 19:35:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_category`
--
ALTER TABLE `attribute_category`
  ADD PRIMARY KEY (`attribute_id`,`category_id`),
  ADD KEY `attribute_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_province_id_foreign` (`province_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_address_id_foreign` (`address_id`),
  ADD KEY `orders_coupon_id_foreign` (`coupon_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attributes_attribute_id_foreign` (`attribute_id`),
  ADD KEY `product_attributes_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_rates`
--
ALTER TABLE `product_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_rates_user_id_foreign` (`user_id`),
  ADD KEY `product_rates_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`tag_id`,`product_id`),
  ADD KEY `product_tag_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_attribute_id_foreign` (`attribute_id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `wishlist_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_rates`
--
ALTER TABLE `product_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_category`
--
ALTER TABLE `attribute_category`
  ADD CONSTRAINT `attribute_category_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `user_addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_variation_id_foreign` FOREIGN KEY (`product_variation_id`) REFERENCES `product_variations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_rates`
--
ALTER TABLE `product_rates`
  ADD CONSTRAINT `product_rates_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_rates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
