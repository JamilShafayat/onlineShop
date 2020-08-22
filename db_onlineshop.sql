-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 10:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `description` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `postcode`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Uttara', 1230, NULL, 1, '2020-08-20 20:26:14', '2020-08-20 20:26:14', NULL),
(2, 'Banani', 1230, NULL, 1, '2020-08-20 20:26:14', '2020-08-20 20:26:14', NULL),
(3, 'Gulshan', 1230, NULL, 1, '2020-08-20 20:26:14', '2020-08-20 20:26:14', NULL),
(4, 'Dhanmondi', 1230, NULL, 1, '2020-08-20 20:26:14', '2020-08-20 20:26:14', NULL),
(5, 'Mirpur', 1230, NULL, 1, '2020-08-20 20:26:14', '2020-08-20 20:26:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `banner`, `category_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vegetables and legumes/beans', 'Vegetables and legumes/beans', 'https://lorempixel.com/640/480/?93655', NULL, 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL),
(2, 'Fruit', 'Fruit', 'https://lorempixel.com/640/480/?77117', NULL, 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL),
(3, 'Grain (cereal)', 'Grain (cereal)', 'https://lorempixel.com/640/480/?92178', NULL, 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL),
(4, 'Lean meats and poultry, fish, eggs, tofu, nuts and seeds and legumes/beans', 'Lean meats and poultry, fish, eggs, tofu, nuts and seeds and legumes/beans', 'https://lorempixel.com/640/480/?33742', NULL, 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL),
(5, 'Milk, yoghurt cheese and/or alternatives, mostly reduced fat', 'Milk, yoghurt cheese and/or alternatives, mostly reduced fat', 'https://lorempixel.com/640/480/?63374', NULL, 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `disk` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aggregate_type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mediables`
--

CREATE TABLE `mediables` (
  `media_id` int(10) UNSIGNED NOT NULL,
  `mediable_type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediable_id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(10) UNSIGNED NOT NULL
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
(1, '2020_08_19_022819_create_areas_table', 1),
(2, '2020_08_19_022938_create_user_types_table', 1),
(3, '2020_08_19_023035_create_users_table', 1),
(4, '2020_08_19_023618_create_categories_table', 1),
(5, '2020_08_19_023729_create_products_table', 1),
(6, '2020_08_19_141134_create_tasks_table', 1),
(7, '2020_08_19_170526_create_mediable_tables', 1),
(8, '2020_08_19_174009_create_orders_table', 1),
(9, '2020_08_19_174157_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `distributor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) DEFAULT '0.00',
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `payment_details` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active and 0=inactive',
  `payment_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=active and 0=pending',
  `operational_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=active and 0=pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `distributor_id`, `customer_name`, `customer_phone_number`, `address`, `city`, `postal_code`, `total_amount`, `discount_amount`, `paid_amount`, `payment_details`, `status`, `payment_status`, `operational_status`, `created_at`, `updated_at`) VALUES
(2, 4, NULL, NULL, NULL, NULL, NULL, NULL, '520.00', '0.00', '520.00', NULL, 1, 0, 0, '2020-08-22 07:05:27', '2020-08-22 07:05:47'),
(3, 5, 4, NULL, NULL, NULL, NULL, NULL, '580.00', '0.00', '580.00', NULL, 2, 0, 0, '2020-08-22 07:06:25', '2020-08-22 08:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(5, 2, 8, 4, '100.00'),
(6, 2, 12, 1, '120.00'),
(7, 3, 11, 4, '120.00'),
(8, 3, 4, 1, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bought_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `offer_price` decimal(8,2) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `quantity` decimal(8,2) NOT NULL,
  `unit` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_stock` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `supplier_id`, `title`, `slug`, `brand`, `image`, `bought_price`, `sale_price`, `offer_price`, `description`, `quantity`, `unit`, `in_stock`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'Pasta', 'Pasta', NULL, NULL, '100.00', '80.00', NULL, 'White Rabbit, with a shiver. \'I beg pardon, your Majesty,\' said the Cat, \'if you only walk long enough.\' Alice felt a very short time the Queen till she was surprised to find quite a chorus of.', '20.00', 'Ms. Rosella Kuhic Jr.', 1, 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL),
(2, 2, NULL, 'French Fries', 'French Fries', NULL, NULL, '100.00', '900.00', NULL, 'Mouse was bristling all over, and both the hedgehogs were out of breath, and said nothing. \'When we were little,\' the Mock Turtle Soup is made from,\' said the Cat, \'if you only kept on good terms.', '20.00', 'Adelbert Volkman', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(3, 2, NULL, 'Ice Cream', 'Ice Cream', NULL, NULL, '120.00', '160.00', NULL, 'Alice heard the King said, for about the reason and all the jurymen are back in their paws. \'And how do you know the meaning of half an hour or so there were ten of them, and considered a little.', '20.00', 'Mr. Melvina Stark', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(4, 3, NULL, 'Bread', 'Bread', NULL, NULL, '100.00', '100.00', NULL, 'I think?\' he said in a tone of delight, and rushed at the picture.) \'Up, lazy thing!\' said the Dodo. Then they all quarrel so dreadfully one can\'t hear oneself speak--and they don\'t seem to be\"--or.', '20.00', 'Kara Emmerich', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(5, 2, NULL, 'Pizza', 'Pizza', NULL, NULL, '100.00', '100.00', NULL, 'King exclaimed, turning to Alice a good deal until she made it out into the garden with one eye; but to open them again, and did not at all know whether it would like the wind, and was just in time.', '20.00', 'Gideon Haag I', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(6, 1, NULL, 'Burger', 'Burger', NULL, NULL, '500.00', '100.00', NULL, 'Either the well was very uncomfortable, and, as they used to queer things happening. While she was looking down with one foot. \'Get up!\' said the March Hare: she thought it would be offended again.', '20.00', 'Lazaro Haag', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(7, 5, NULL, 'Marinara Sauce', 'Marinara Sauce', NULL, NULL, '100.00', '200.00', NULL, 'Mock Turtle, \'but if they do, why then they\'re a kind of rule, \'and vinegar that makes people hot-tempered,\' she went on so long since she had grown to her ear, and whispered \'She\'s under sentence.', '20.00', 'Dr. Solon Littel Jr.', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(8, 4, NULL, 'Broccoli', 'Broccoli', NULL, NULL, '700.00', '1200.00', NULL, 'Queen. \'Can you play croquet with the Queen, who were all ornamented with hearts. Next came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit: it was her dream.', '20.00', 'Jadyn Keebler Sr.', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(9, 3, NULL, 'Fried Rice', 'Fried Rice', NULL, NULL, '100.00', '110.00', NULL, 'Alice to find herself still in existence; \'and now for the baby, and not to lie down upon her: she gave a little girl,\' said Alice, rather doubtfully, as she spoke; \'either you or your head must be.', '20.00', 'Dr. Zechariah Wilkinson', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(10, 2, NULL, 'Pancakes\r\n', 'Pancakes\r\n', NULL, NULL, '100.00', '230.00', NULL, 'Hatter. \'You might just as usual. \'Come, there\'s half my plan done now! How puzzling all these changes are! I\'m never sure what I\'m going to say,\' said the Mouse to tell you--all I know is, it would.', '20.00', 'Camren Nolan', 1, 1, '2020-08-20 20:26:16', '2020-08-20 20:26:16', NULL),
(11, 1, 1, 'Meet', 'Meet', 'Meet', 'product_pic5f3fd3ac323154.52471248trMg1U6RMX.jpg', '120.00', '120.00', '120.00', 'test', '20.00', 'kg', 1, 1, '2020-08-21 14:01:16', '2020-08-21 14:01:16', NULL),
(12, 1, 1, 'Fish', 'Fish', 'Fish', 'product_pic5f408df26a74b8.94042820N371OdcXSw.jpg', '120.00', '120.00', '120.00', 'test', '20.00', 'kg', 1, 1, '2020-08-22 03:16:02', '2020-08-22 03:16:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_type_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_phone` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active and 0=inactive',
  `email_verified_at` date DEFAULT NULL,
  `email_verification_token` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `area_id`, `user_type_id`, `first_name`, `last_name`, `user_name`, `phone_no`, `email`, `password`, `image`, `nid`, `birth_date`, `address`, `guardian_name`, `guardian_phone`, `status`, `email_verified_at`, `email_verification_token`, `facebook_id`, `google_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, 'admin', NULL, 'admin@gmail.com', '$2y$10$fluLK7Vr4rcl27e3TJs8duYebkdUE.YpImkEoABGO0dFtHVEnFdFO', NULL, NULL, NULL, 'Bangladesh', NULL, NULL, 1, '2020-08-21', NULL, NULL, NULL, NULL, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL),
(2, 1, 1, 'test', 'test', 'salman', '1881965587', 'salman@gmail.com', '$2y$10$f2f11tC2nksNYW6ATdiREeNyYV1HwxEEkJ8tiUYd/nG0WaS2akX9y', NULL, '', '2020-08-21 00:00:00', 'Bangladesh', '', '', 1, NULL, NULL, NULL, NULL, NULL, '2020-08-21 14:09:53', '2020-08-21 14:09:53', NULL),
(3, NULL, 2, '', '', 'rahat', '', 'rahat@gmail.com', '$2y$10$WKrbw5VjS30UT.KZmAsJsO4iZMykVdziYlSYczpCDwe.drZfHQ8nK', NULL, '', NULL, 'Bangladesh', '', '', 1, NULL, NULL, NULL, NULL, NULL, '2020-08-21 23:04:58', '2020-08-21 23:04:58', NULL),
(4, NULL, 3, '', '', 'jamil', '', 'jamil@gmail.com', '$2y$10$.IDTHGyuZwFVwqx1XQ6y2OBF7B3NYlESVwHc7QXvJUGz3o/yWQ7Vu', NULL, '', NULL, 'Bangladesh', '', '', 1, NULL, NULL, NULL, NULL, NULL, '2020-08-21 23:06:01', '2020-08-21 23:06:01', NULL),
(5, NULL, 4, '', '', 'nazmul', '', 'nazmul@gmail.com', '$2y$10$fRCFCQP36En0gjWEYKS6.eZJs9LO6wM7oWrnCY4OpaADulJ9e8QVi', NULL, '', NULL, 'Bangladesh', '', '', 1, NULL, NULL, NULL, NULL, 'Bdok20JjY4p7vol9rdHtiVUqUnlYOKLXCwPgzTuFAEwgmqWZ6un2PBurxdap', '2020-08-21 23:14:05', '2020-08-21 23:14:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 1, '2020-08-20 20:26:14', '2020-08-20 20:26:14', NULL),
(2, 'Supplier', 1, '2020-08-20 20:26:14', '2020-08-20 20:26:14', NULL),
(3, 'Distributor', 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL),
(4, 'Customer', 1, '2020-08-20 20:26:15', '2020-08-20 20:26:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `areas_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_disk_directory_filename_extension_unique` (`disk`,`directory`,`filename`,`extension`),
  ADD KEY `media_aggregate_type_index` (`aggregate_type`);

--
-- Indexes for table `mediables`
--
ALTER TABLE `mediables`
  ADD PRIMARY KEY (`media_id`,`mediable_type`,`mediable_id`,`tag`),
  ADD KEY `mediables_mediable_id_mediable_type_index` (`mediable_id`,`mediable_type`),
  ADD KEY `mediables_tag_index` (`tag`),
  ADD KEY `mediables_order_index` (`order`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_distributor_id_foreign` (`distributor_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_title_unique` (`title`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_area_id_foreign` (`area_id`),
  ADD KEY `users_user_type_id_foreign` (`user_type_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_types_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `mediables`
--
ALTER TABLE `mediables`
  ADD CONSTRAINT `mediables_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_distributor_id_foreign` FOREIGN KEY (`distributor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `users_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
