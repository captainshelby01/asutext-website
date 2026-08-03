-- ========================================================
-- ASUTEXT WEBSITE MYSQL DATABASE DUMP
-- Import directly into cPanel phpMyAdmin
-- Generated: 2026-08-03 10:43:39
-- ========================================================

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;
SET time_zone = '+00:00';


CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `portfolio_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `media_path` varchar(255) NOT NULL,
  `media_type` varchar(50) NOT NULL DEFAULT 'image',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `client_role` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for `users` (1 rows)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'Asutext Administrator', 'admin@asutext.com', NULL, '$2y$12$XHS2Lh179BC.sTig470PkefmJeVmvoUk5Ua9LjYkFQEfdQLxBIPfe', NULL, '2026-07-30 14:00:15', '2026-07-30 14:00:15');

-- Dumping data for `services` (9 rows)
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (1, 'Cleaning Services', 'Home, office, and post-construction cleaning across Lagos. Thorough, professional, and reliable.', 'Hi, I\'m interested in your Cleaning Services.', 1, 1, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (2, 'Fumigation & Pest Control', 'Safe, effective treatment for homes and businesses. We eliminate pests so you can breathe easy.', 'Hi, I\'m interested in your Fumigation and Pest Control service.', 1, 2, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (3, 'Laundry & Dry Cleaning', 'Wash, iron, and delivery for individuals and offices. Fresh clothes, zero stress.', 'Hi, I\'m interested in your Laundry and Dry Cleaning service.', 1, 3, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (4, 'Gardening & Landscaping', 'Professional garden maintenance, lawn care, and landscaping for homes and commercial premises.', 'Hi, I\'m interested in your Gardening and Landscaping service.', 1, 4, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (5, 'Transport & Logistics', 'Local delivery and haulage. We move your goods safely and on time, anywhere in Nigeria.', 'Hi, I\'m interested in your Transport and Logistics service.', 1, 5, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (6, 'Fast Food & Catering', 'Meals, small chops, and full event catering. Fresh food, great taste, delivered with care.', 'Hi, I\'m interested in your Fast Food and Catering service.', 1, 6, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (7, 'Branding & Printing', 'Logo design, banners, business cards, caps, and all promotional materials. Make your brand stand out.', 'Hi, I\'m interested in your Branding and Printing service.', 1, 7, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (8, 'Mobile Accessories & Gadgets', 'Sales of phones, laptops, TVs, accessories, and repairs. Quality gadgets at competitive prices.', 'Hi, I\'m interested in your Mobile Accessories and Gadgets.', 1, 8, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `services` (`id`, `name`, `description`, `whatsapp_cta_text`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (9, 'Fashion Design & Tailoring', 'Custom clothing and alterations for men and women. Style that fits your body, your culture, and your budget. Corporate uniforms welcome.', 'Hi, I\'m interested in your Fashion Design and Tailoring service.', 1, 9, '2026-07-30 14:00:16', '2026-07-30 14:00:16');

-- Dumping data for `portfolio_items` (25 rows)
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (1, 7, 'Custom 3D Embroidered Baseball Caps', 'image', 'products/images_PHOTO_2026_06_22_15_21_40.jpg', 1, '2026-07-30 14:00:18', '2026-07-30 14:00:18');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (2, 7, 'Rigid Branded Merchandise Box Sets', 'image', 'products/images_WhatsApp_Image_2026_06_22_at_15_19_17.jpeg', 2, '2026-07-30 14:00:18', '2026-07-30 14:00:18');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (3, 7, 'High-Density Embroidered Uniform Patches', 'image', 'products/images_WhatsApp_Image_2026_06_22_at_15_18_59.jpeg', 3, '2026-07-30 14:00:18', '2026-07-30 14:00:18');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (4, 7, 'Custom Screen Printed & Embroidered T-Shirts', 'image', 'products/images_PHOTO_2026_06_22_15_21_43.jpg', 4, '2026-07-30 14:00:18', '2026-07-30 14:00:18');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (5, 7, 'Metallic Badges & Silver Brand Pendants', 'image', 'products/images_PHOTO_2026_06_22_15_21_46_2_.jpg', 5, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (6, 7, 'Branded Silk Scarves & Cravats', 'image', 'products/images_PHOTO_2026_06_22_15_21_46_1_.jpg', 6, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (7, 6, 'Fresh Party Small Chops & Pastry Platters', 'image', 'products/fast food_PHOTO_2026_07_15_23_40_49.jpg', 7, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (8, 6, 'Gourmet Event Packaged Lunch Boxes', 'image', 'products/fast food_PHOTO_2026_07_15_23_41_18.jpg', 8, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (9, 6, 'Executive Buffet & Banquet Catering Setup', 'image', 'products/fast food_PHOTO_2026_07_15_23_43_29.jpg', 9, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (10, 6, 'Spicy Peppered Chicken & Gizzard Trays', 'image', 'products/fast food_PHOTO_2026_07_15_23_42_04.jpg', 10, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (11, 9, 'Custom Tailored Executive Suit Blazer', 'image', 'products/fashion_PHOTO_2026_07_15_23_49_54.jpg', 11, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (12, 9, 'Tailored Traditional & Senator Native Attire', 'image', 'products/fashion_PHOTO_2026_07_15_23_52_52.jpg', 12, '2026-07-30 14:00:19', '2026-07-30 14:00:19');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (13, 9, 'Custom Branded Polo Uniform Shirts', 'image', 'products/fashion_PHOTO_2026_07_15_23_52_54.jpg', 13, '2026-07-30 14:00:20', '2026-07-30 14:00:20');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (14, 9, 'Custom Branded Hand-Painted Sneakers', 'image', 'products/fashion_PHOTO_2026_07_15_23_53_01.jpg', 14, '2026-07-30 14:00:20', '2026-07-30 14:00:20');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (15, 1, 'Deep Janitorial & Commercial Floor Cleaning', 'image', 'portfolio/cleaning_photo_2026_07_15_23_29_04.jpg', 15, '2026-07-30 14:00:20', '2026-07-30 14:00:20');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (16, 1, 'Commercial Building Cleaning Operations', 'image', 'portfolio/cleaning_photo_2026_07_15_23_29_08.jpg', 16, '2026-07-30 14:00:21', '2026-07-30 14:00:21');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (17, 1, 'Office Carpet Vacuuming & Maintenance', 'image', 'portfolio/cleaning_photo_2026_07_15_23_29_12.jpg', 17, '2026-07-30 14:00:21', '2026-07-30 14:00:21');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (18, 1, 'High-Speed Floor Buffing & Polishing', 'image', 'portfolio/cleaning_services_photo_2026_06_22_15_22_06.jpg', 18, '2026-07-30 14:00:21', '2026-07-30 14:00:21');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (19, 2, 'Industrial Fumigation & Disinfection Service', 'image', 'portfolio/cleaning_photo_2026_07_15_23_53_10.jpg', 19, '2026-07-30 14:00:21', '2026-07-30 14:00:21');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (20, 2, 'Full PPE Pest Control Specialist Treatment', 'image', 'portfolio/cleaning_services_photo_2026_06_22_15_22_07.jpg', 20, '2026-07-30 14:00:21', '2026-07-30 14:00:21');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (21, 5, 'Interstate Logistics & Delivery Freight Truck', 'image', 'portfolio/transport_photo_2026_07_15_23_31_59.jpg', 21, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (22, 5, 'Heavy Duty Freight Cargo Transport Haulage', 'image', 'portfolio/transport_photo_2026_07_15_23_32_01.jpg', 22, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (23, 5, 'Fleet Haulage & Distribution Transit Hub', 'image', 'portfolio/transport_photo_2026_07_15_23_32_04.jpg', 23, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (24, 8, 'Smart 4K Ultra-HD TV & Boardroom Display', 'image', 'products/electronics_PHOTO_2026_07_15_23_42_17.jpg', 24, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `portfolio_items` (`id`, `service_id`, `title`, `media_type`, `media_path`, `sort_order`, `created_at`, `updated_at`) VALUES (25, 8, 'Heavy-Duty 30,000mAh Fast Charge Power Bank', 'image', 'products/electronics_PHOTO_2026_07_15_23_42_39.jpg', 25, '2026-07-30 14:00:22', '2026-07-30 14:00:22');

-- Dumping data for `team_members` (3 rows)
INSERT INTO `team_members` (`id`, `name`, `role`, `bio`, `image_path`, `sort_order`, `created_at`, `updated_at`) VALUES (1, 'Jackson Jackson Iwara', 'Founder / Managing Director', 'Visionary entrepreneur directing the overall operations and scaling of Asutext Group\'s multi-service divisions.', 'team/team-jackson-iwara.jpeg', 1, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `team_members` (`id`, `name`, `role`, `bio`, `image_path`, `sort_order`, `created_at`, `updated_at`) VALUES (2, 'Maryann Iwara', 'Executive Director / Co-Founder', 'Co-directing corporate strategies, human resources, and high-level client relations across all service sectors.', 'team/team-maryann-iwara.jpeg', 2, '2026-07-30 14:00:16', '2026-07-30 14:00:16');
INSERT INTO `team_members` (`id`, `name`, `role`, `bio`, `image_path`, `sort_order`, `created_at`, `updated_at`) VALUES (3, 'Wilcox Wilson', 'Compliance Director', 'Managing legal compliance, regulatory standards, and operational risk management for nationwide logistics.', 'team/team-wilcox-wilson.jpeg', 3, '2026-07-30 14:00:16', '2026-07-30 14:00:16');

-- Dumping data for `testimonials` (3 rows)
INSERT INTO `testimonials` (`id`, `client_name`, `client_role`, `feedback`, `stars`, `created_at`, `updated_at`) VALUES (1, 'Wokcity', 'Corporate Client, Lagos', 'Asutext delivered an exceptionally thorough cleaning job at our facility. Professional, punctual, and the results spoke for themselves. We continue to use them regularly.', 5, '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `testimonials` (`id`, `client_name`, `client_role`, `feedback`, `stars`, `created_at`, `updated_at`) VALUES (2, 'Lamb Court', 'Property Management, Lagos', 'We engaged Asutext for facility services and were impressed by their attention to detail and dedication to quality. Highly recommended for any corporate environment.', 5, '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `testimonials` (`id`, `client_name`, `client_role`, `feedback`, `stars`, `created_at`, `updated_at`) VALUES (3, 'CED Africa', 'Corporate Client, Nigeria', 'Reliable, professional, and easy to work with. Asutext understands what businesses need and delivers without cutting corners. A trusted partner for us.', 5, '2026-07-30 14:00:17', '2026-07-30 14:00:17');

-- Dumping data for `settings` (11 rows)
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (1, 'phone', '+234 903 766 6399', '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (2, 'whatsapp_url', 'https://wa.me/2349037666399', '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (3, 'email', 'asutextgnigltd@gmail.com', '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (4, 'address_lagos', '2nd Ave, 216 Close, Movamo Court, Banana Island · 20 Marina, Lagos Island', '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (5, 'address_calabar', '10 Federal Housing Road, Calabar, Cross-River State', '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (6, 'facebook_url', 'https://www.facebook.com/asutext', '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (7, 'youtube_url', 'https://www.youtube.com/@asutext', '2026-07-30 14:00:17', '2026-07-30 14:00:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (8, 'twitter_url', 'https://twitter.com/asutext', '2026-07-30 14:00:18', '2026-07-30 14:00:18');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (9, 'seo_title', 'Asutext Group Nigeria Limited | Cleaning, Laundry, Fumigation & More in Lagos', '2026-07-30 14:00:18', '2026-07-30 14:00:18');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (10, 'seo_description', 'Asutext Group Nigeria Limited, professional cleaning, fumigation, laundry, transport, catering, branding, fashion design and mobile accessories across Lagos Island, Banana Island, and Cross-River State. Call or WhatsApp us today.', '2026-07-30 14:00:18', '2026-07-30 14:00:18');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES (11, 'seo_keywords', 'cleaning services Lagos, fumigation Lagos, laundry Lagos, pest control Lagos, cleaning company Nigeria, Asutext Nigeria, branding Lagos, transport logistics Nigeria', '2026-07-30 14:00:18', '2026-07-30 14:00:18');

-- Dumping data for `inquiries` (0 rows)

-- Dumping data for `products` (44 rows)
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (1, 'Custom 3D Embroidered Wolf Snapback Cap', 'Branding & Printing', 'Structured 6-panel snapback cap featuring a high-density 3D embroidered Asutext Wolf mascot emblem, contrasting blue visor, and adjustable rear strap.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom 3D Embroidered Wolf Snapback Cap\".', 'products/images_PHOTO_2026_06_22_15_21_40.jpg', 1, 1, 1, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (2, 'Branded Army-Green Crewneck T-Shirt', 'Branding & Printing', 'Premium 100% combed cotton crewneck t-shirt in army green with custom chest embroidery and sleeve brand prints.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Branded Army-Green Crewneck T-Shirt\".', 'products/images_PHOTO_2026_06_22_15_21_42.jpg', 1, 1, 2, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (3, 'Custom Printed Ocean Blue T-Shirt', 'Branding & Printing', 'Vibrant ocean-blue cotton t-shirt featuring high-definition full-color chest print and comfortable casual fit.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Printed Ocean Blue T-Shirt\".', 'products/images_PHOTO_2026_06_22_15_21_43.jpg', 1, 1, 3, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (4, 'Flatbed Printed Matte Black T-Shirt', 'Branding & Printing', 'Sleek matte-black short-sleeved tee with soft-touch screen printed graphics and reinforced neck collar.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Flatbed Printed Matte Black T-Shirt\".', 'products/images_PHOTO_2026_06_22_15_21_44.jpg', 1, 1, 4, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (5, 'Charcoal Grey Branded Graphic Tee', 'Branding & Printing', 'Durable charcoal-grey crewneck tee styled with multi-color corporate logo artwork across the front chest.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Charcoal Grey Branded Graphic Tee\".', 'products/images_PHOTO_2026_06_22_15_21_45_1_.jpg', 1, 1, 5, '2026-07-30 14:00:22', '2026-07-30 14:00:22');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (6, 'Branded Summer Poolside Graphic Tee', 'Branding & Printing', 'Breathable lightweight cotton t-shirt tailored for promotional events, sports teams, and beach/pool wear.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Branded Summer Poolside Graphic Tee\".', 'products/images_PHOTO_2026_06_22_15_21_45.jpg', 1, 1, 6, '2026-07-30 14:00:23', '2026-07-30 14:00:23');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (7, 'Custom Woven Silk Scarf & Cravat', 'Branding & Printing', 'Luxury silk-blend woven neck scarf featuring intricate brand patterns, ideal for corporate uniforms and formal fashion.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Woven Silk Scarf & Cravat\".', 'products/images_PHOTO_2026_06_22_15_21_46_1_.jpg', 1, 1, 7, '2026-07-30 14:00:23', '2026-07-30 14:00:23');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (8, 'Silver Metallic Wolf Pendant Necklace', 'Branding & Printing', 'Custom 3D molded antique-silver metallic pendant with detailed wolf crest engraving on a heavy-duty chain.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Silver Metallic Wolf Pendant Necklace\".', 'products/images_PHOTO_2026_06_22_15_21_46_2_.jpg', 1, 1, 8, '2026-07-30 14:00:23', '2026-07-30 14:00:23');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (9, 'Metallic Shield Badge & Lapel Pin', 'Branding & Printing', 'Polished metallic lapel pin and shield badge crafted with enamel fill for executive recognition and brand identity.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Metallic Shield Badge & Lapel Pin\".', 'products/images_PHOTO_2026_06_22_15_21_47_1_.jpg', 1, 1, 9, '2026-07-30 14:00:23', '2026-07-30 14:00:23');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (10, 'Custom Engraved Jewelry Medallion', 'Branding & Printing', 'Precision-machined metal medallion and jewelry charm designed for brand promotions, awards, and commemorative gifts.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Engraved Jewelry Medallion\".', 'products/images_PHOTO_2026_06_22_15_21_47.jpg', 1, 1, 10, '2026-07-30 14:00:23', '2026-07-30 14:00:23');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (11, 'Blue & White Dual-Tone Snapback Cap', 'Branding & Printing', 'Two-tone blue and white trucker cap with prominent front patch embroidery and breathable rear mesh panels.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Blue & White Dual-Tone Snapback Cap\".', 'products/images_PHOTO_2026_06_22_15_21_49_1_.jpg', 1, 1, 11, '2026-07-30 14:00:24', '2026-07-30 14:00:24');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (12, 'Custom Branded Gift Box & Cap Set', 'Branding & Printing', 'Deluxe gift package containing custom embroidered caps inside a custom-printed matte black presentation box.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Branded Gift Box & Cap Set\".', 'products/images_PHOTO_2026_06_22_15_21_49_2_.jpg', 1, 1, 12, '2026-07-30 14:00:24', '2026-07-30 14:00:24');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (13, 'Monochrome Black Embroidered Baseball Cap', 'Branding & Printing', 'All-black structured baseball cap with raised black-on-black logo embroidery for a subtle, high-end look.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Monochrome Black Embroidered Baseball Cap\".', 'products/images_PHOTO_2026_06_22_15_21_49_3_.jpg', 0, 1, 13, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (14, 'Corporate Promotional Cap Collection Box', 'Branding & Printing', 'Bulk set of multi-colored branded snapback caps supplied in custom branded cardboard storage and display boxes.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Corporate Promotional Cap Collection Box\".', 'products/images_PHOTO_2026_06_22_15_21_49.jpg', 0, 1, 14, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (15, 'Smart 4K Ultra-HD TV & Boardroom Display', 'Mobile Accessories & Gadgets', 'Ultra-slim 4K Smart LED TV with built-in Wi-Fi, HDMI/USB ports, and screen mirror capability for home and office boardrooms.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Smart 4K Ultra-HD TV & Boardroom Display\".', 'products/electronics_PHOTO_2026_07_15_23_42_17.jpg', 0, 1, 15, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (16, 'Heavy-Duty 30,000mAh Fast Charge Power Bank', 'Mobile Accessories & Gadgets', 'High-capacity power bank with dual USB-C Power Delivery ports, digital LED battery display, and multi-device fast charging.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Heavy-Duty 30,000mAh Fast Charge Power Bank\".', 'products/electronics_PHOTO_2026_07_15_23_42_39.jpg', 0, 1, 16, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (17, 'Active Noise-Canceling Wireless Earbuds', 'Mobile Accessories & Gadgets', 'True wireless Bluetooth 5.3 earbuds featuring active noise cancellation, deep bass drivers, and 24-hour battery case.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Active Noise-Canceling Wireless Earbuds\".', 'products/electronics_PHOTO_2026_07_15_23_43_14.jpg', 0, 1, 17, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (18, 'Original Brand Mobile Phones & Accessories', 'Mobile Accessories & Gadgets', 'Brand-new sealed smartphones with high-resolution camera systems, fast processors, and original manufacturer accessories.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Original Brand Mobile Phones & Accessories\".', 'products/electronics_PHOTO_2026_07_15_23_43_17.jpg', 0, 1, 18, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (19, 'Custom Tailored Executive Suit Blazer', 'Fashion & Bespoke Wear', 'Single-breasted 2-piece corporate suit blazer tailored with Italian wool fabric, silk lining, and precise slim fit.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Tailored Executive Suit Blazer\".', 'products/fashion_PHOTO_2026_07_15_23_49_54.jpg', 0, 1, 19, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (20, 'Bespoke Tailored Underwear & Boxers', 'Fashion & Bespoke Wear', 'Premium breathable cotton boxers with custom jacquard elastic waistbands designed for maximum day-long comfort.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Bespoke Tailored Underwear & Boxers\".', 'products/fashion_PHOTO_2026_07_15_23_52_50.jpg', 0, 1, 20, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (21, 'Senator Native Attire & Kaftan Set', 'Fashion & Bespoke Wear', 'Refined men\'s Senator native suit crafted with soft cashmere cotton, geometric chest piping, and matching trousers.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Senator Native Attire & Kaftan Set\".', 'products/fashion_PHOTO_2026_07_15_23_52_52.jpg', 0, 1, 21, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (22, 'Custom Embroidered Staff Polo Shirts', 'Fashion & Bespoke Wear', 'Durable pique cotton polo shirt featuring embroidered corporate chest logos and rib-knit sleeve cuffs.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Embroidered Staff Polo Shirts\".', 'products/fashion_PHOTO_2026_07_15_23_52_54.jpg', 0, 1, 22, '2026-07-30 14:00:25', '2026-07-30 14:00:25');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (23, 'Custom Branded Hand-Painted Sneakers', 'Fashion & Bespoke Wear', 'Customized leather sneakers featuring custom artwork, branded tongue tags, and durable rubber soles.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Branded Hand-Painted Sneakers\".', 'products/fashion_PHOTO_2026_07_15_23_53_01.jpg', 0, 1, 23, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (24, 'Corporate & Security Field Guard Uniform', 'Fashion & Bespoke Wear', 'Heavy-duty tactical work shirt and trousers designed for security officers, field staff, and logistics personnel.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Corporate & Security Field Guard Uniform\".', 'products/fashion_PHOTO_2026_07_15_23_53_02.jpg', 0, 1, 24, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (25, 'Corporate Branded Staff Polo Wear', 'Fashion & Bespoke Wear', 'Professional button-down casual shirt with embroidered chest insignia for corporate field representatives.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Corporate Branded Staff Polo Wear\".', 'products/fashion_PHOTO_2026_07_15_23_53_03.jpg', 0, 1, 25, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (26, 'Traditional African Cultural Outfit', 'Fashion & Bespoke Wear', '3-piece ceremonial Agbada attire detailed with intricate embroidery across the wide sleeves and chest collar.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Traditional African Cultural Outfit\".', 'products/fashion_PHOTO_2026_07_15_23_53_04_1_.jpg', 0, 1, 26, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (27, 'Bespoke Genuine Leather Belt', 'Fashion & Bespoke Wear', 'Handcrafted genuine leather belt with polished alloy buckle, suitable for formal suit trousers and native attire.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Bespoke Genuine Leather Belt\".', 'products/fashion_PHOTO_2026_07_15_23_53_04.jpg', 0, 1, 27, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (28, 'Embroidered Native Agbada Attire', 'Fashion & Bespoke Wear', 'Rich navy-blue native Kaftan featuring hand-stitched neck embroidery and comfortable tailored trousers.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Embroidered Native Agbada Attire\".', 'products/fashion_PHOTO_2026_07_15_23_53_08.jpg', 0, 1, 28, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (29, 'Bespoke Tailored Branded Elastic Boxers', 'Fashion & Bespoke Wear', 'Comfortable stretch-cotton underwear with custom jacquard-woven elastic waistband featuring your company name.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Bespoke Tailored Branded Elastic Boxers\".', 'products/images_PHOTO_2026_06_22_15_21_46.jpg', 0, 1, 29, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (30, 'Custom Branded Low-Top Sneakers', 'Fashion & Bespoke Wear', 'Bespoke printed low-top leather sneakers customized with corporate colors, heel logos, and custom shoelaces.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Custom Branded Low-Top Sneakers\".', 'products/images_PHOTO_2026_06_22_15_21_48.jpg', 0, 1, 30, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (31, 'Party Small Chops & Fresh Pastry Platter', 'Fast Food & Catering', 'Freshly fried party small chops featuring samosas, spring rolls, mini peppered beef, and puff-puff.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Party Small Chops & Fresh Pastry Platter\".', 'products/fast food_PHOTO_2026_07_15_23_40_49.jpg', 0, 1, 31, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (32, 'Gourmet Packaged Event Lunch Box', 'Fast Food & Catering', 'Individual lunch box packed with smokey Jollof rice, fried plantain, grilled chicken, and fresh coleslaw.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Gourmet Packaged Event Lunch Box\".', 'products/fast food_PHOTO_2026_07_15_23_41_18.jpg', 0, 1, 32, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (33, 'Spicy Peppered Chicken & Gizzard Tray', 'Fast Food & Catering', 'Sizzling hot tray of peppered chicken wings, gizzard, and spicy plantain dodo for party appetizers.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Spicy Peppered Chicken & Gizzard Tray\".', 'products/fast food_PHOTO_2026_07_15_23_42_04.jpg', 0, 1, 33, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (34, 'Executive Event Catering Buffet Tray', 'Fast Food & Catering', 'Full-service buffet chafing dish setup with professional servers for corporate seminars, weddings, and parties.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Executive Event Catering Buffet Tray\".', 'products/fast food_PHOTO_2026_07_15_23_43_29.jpg', 0, 1, 34, '2026-07-30 14:00:26', '2026-07-30 14:00:26');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (35, 'Crispy Samosa & Spring Roll Party Pack', 'Fast Food & Catering', 'Crispy fried meat samosas and vegetable spring rolls served with spicy chili dipping sauce.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Crispy Samosa & Spring Roll Party Pack\".', 'products/fast food_PHOTO_2026_07_15_23_43_35.jpg', 0, 1, 35, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (36, 'Jollof & Fried Rice Catering Combo Box', 'Fast Food & Catering', 'Signature party Jollof rice paired with savory fried rice, fried plantain, and fried turkey or chicken.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Jollof & Fried Rice Catering Combo Box\".', 'products/fast food_PHOTO_2026_07_15_23_43_44.jpg', 0, 1, 36, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (37, 'Event Pastry & Refreshment Catering Combo', 'Fast Food & Catering', 'Deluxe refreshment tray loaded with meat pies, sausage rolls, donuts, and chilled fruit drinks.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Event Pastry & Refreshment Catering Combo\".', 'products/fast food_PHOTO_2026_07_15_23_53_06.jpg', 0, 1, 37, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (38, 'Partitioned Bento Event Catering Lunch Box', 'Fast Food & Catering', 'Multi-compartment food box packed with a balanced meal including fried rice, plantain, protein, and salad for corporate events.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Partitioned Bento Event Catering Lunch Box\".', 'products/images_PHOTO_2026_06_22_15_23_05.jpg', 0, 1, 38, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (39, 'Banquet Hall Event Dining & Catering Package', 'Fast Food & Catering', 'Full event hall dining setup, table settings, buffet stations, and food service staff for large celebrations.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Banquet Hall Event Dining & Catering Package\".', 'products/images_PHOTO_2026_06_22_15_23_06_1_.jpg', 0, 1, 39, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (40, 'Indoor Restaurant & Cafe Catering Service', 'Fast Food & Catering', 'On-site restaurant dining setup and catered buffet meal packages for corporate lunches and private parties.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Indoor Restaurant & Cafe Catering Service\".', 'products/images_PHOTO_2026_06_22_15_23_06.jpg', 0, 1, 40, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (41, 'Gourmet Event Buffet Food Platter', 'Fast Food & Catering', 'Lavish buffet platter consisting of peppered chicken, grilled fish, fried plantain, samosas, and assorted delicacies.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Gourmet Event Buffet Food Platter\".', 'products/images_PHOTO_2026_06_22_15_23_07_1_.jpg', 0, 1, 41, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (42, 'Party Small Chops & Pastry Combo Pack', 'Fast Food & Catering', 'Bite-sized party small chops including mini spring rolls, samosas, puff-puff, and spicy chicken wings in takeaway boxes.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Party Small Chops & Pastry Combo Pack\".', 'products/images_PHOTO_2026_06_22_15_23_07_2_.jpg', 0, 1, 42, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (43, 'Executive Plated Gourmet Dinner Meal', 'Fast Food & Catering', 'Chef-prepared plated dinner featuring seasoned grilled protein, specialty rice, and garnishes for VIP dining.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Executive Plated Gourmet Dinner Meal\".', 'products/images_PHOTO_2026_06_22_15_23_07_3_.jpg', 0, 1, 43, '2026-07-30 14:00:27', '2026-07-30 14:00:27');
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `whatsapp_cta_text`, `image_path`, `is_featured`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES (44, 'Wokcity Quick Service Restaurant & Catering', 'Fast Food & Catering', 'Fast-food restaurant storefront and express takeaway catering services for daily office and outdoor meals.', 'Inquire for Quote', 'Hi Asutext! I am interested in purchasing \"Wokcity Quick Service Restaurant & Catering\".', 'products/images_PHOTO_2026_06_22_15_23_07.jpg', 0, 1, 44, '2026-07-30 14:00:27', '2026-07-30 14:00:27');

COMMIT;
SET FOREIGN_KEY_CHECKS=1;
