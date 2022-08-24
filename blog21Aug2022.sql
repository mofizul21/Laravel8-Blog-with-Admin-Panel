-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for blog21aug2022
CREATE DATABASE IF NOT EXISTS `blog21aug2022` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `blog21aug2022`;

-- Dumping structure for table blog21aug2022.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.categories: ~5 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
	(10, 'PHP', 'php', 'PHP description', '1661242773.jpg', 'PHP', 'PHP', 'PHP', 1, 1, 4, '2022-08-23 08:19:33', '2022-08-23 08:19:33'),
	(11, 'Laravel', 'laravel', 'Laravel', '1661242805.jpg', 'Laravel', 'Laravel', 'Laravel', 1, 1, 4, '2022-08-23 08:20:05', '2022-08-23 08:20:05'),
	(12, 'WordPress', 'wordpress', 'WordPress', '1661263938.jpg', 'WordPress', 'WordPress', 'WordPress', 1, 1, 4, '2022-08-23 14:12:18', '2022-08-23 14:12:18'),
	(13, 'Django', 'django', 'Django', '1661263977.jpg', 'Django', 'Django', 'Django', 1, 1, 4, '2022-08-23 14:12:57', '2022-08-23 14:12:57'),
	(14, 'React JS', 'react-js', 'React JS', '1661264014.jpg', 'React JS', 'React JS', 'React JS', 1, 1, 4, '2022-08-23 14:13:34', '2022-08-23 14:13:34');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.comments: ~4 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment_body`, `created_at`, `updated_at`) VALUES
	(4, 10, 3, 'Awesome', '2022-08-24 01:33:28', '2022-08-24 01:33:28'),
	(5, 10, 3, 'ss', '2022-08-24 01:36:03', '2022-08-24 01:36:03'),
	(6, 9, 4, 'Joss', '2022-08-24 02:28:04', '2022-08-24 02:28:04'),
	(7, 9, 4, 'Welcome', '2022-08-24 02:28:17', '2022-08-24 02:28:17'),
	(15, 10, 4, 'Good Post', '2022-08-24 06:50:27', '2022-08-24 06:50:27');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_08_22_014115_add_role_as_to_users_table', 2),
	(6, '2022_08_22_030038_create_categories_table', 3),
	(8, '2022_08_22_145533_create_posts_table', 4),
	(9, '2022_08_23_163631_create_comments_table', 5),
	(10, '2022_08_24_033406_create_settings_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt_iframe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.posts: ~4 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `yt_iframe`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
	(9, 10, 'Squarespace clean up and ongoing developer help', 'squarespace-clean-up-and-ongoing-developer-help', '<p><span style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;">I\'m looking for a developer to help ad hoc with a Squarespace site that has a lot of custom CSS added to it.</span><br style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;"><span style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;">We are currently submitting all issues to the Squarespace forum which is not sustainable. We need developer resource to help us.</span><br></p>', 'PHP Post', 'PHP Post', 'PHP Post', 'PHP Post', 1, 4, '2022-08-23 08:21:41', '2022-08-23 09:21:53'),
	(10, 10, 'Developer needed to create Github Action for Laravel with SingleStore', 'developer-needed-to-create-github-action-for-laravel-with-singlestore', '<p><span style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;">Currently our project is being migrated to SingleStore database. We need to update the GitHub actions that makes the automated tests of our Laravel project.</span><br style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;"><br style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;"><span style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;">The developer will have to update the GitHub Action to work with SingleStore database. The current version is using SQLite.</span><br></p>', 'Developer needed to create Github Action for Laravel with SingleStore', 'Developer needed to create Github Action for Laravel with SingleStore', 'Developer needed to create Github Action for Laravel with SingleStore', 'Developer needed to create Github Action for Laravel with SingleStore', 1, 4, '2022-08-23 09:20:35', '2022-08-23 09:20:35'),
	(11, 10, 'Facebook Conversion API, server-side integration', 'facebook-conversion-api-server-side-integration', '<p><span style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;">Facebook conversion API needs to be integrated into my Shopify store... I need a professional datalayer, Google Tag Manager integration, and Facebook conversion API</span><br style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;"><span style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px;">as per the google guide. The quality of event matches, the deduplication of events, and the parameters of events. A custom conversion and aggregated measurement are needed, as well as an iOS 15 update. Domain verification, fix pixel diagnostic error. If you have enough knowledge about Facebook Conversion API, then you can send the proposal.</span><br></p>', 'Facebook Conversion API, server-side integration', 'Facebook Conversion API, server-side integration', 'Facebook Conversion API, server-side integration', 'Facebook Conversion API, server-side integration', 1, 4, '2022-08-23 09:23:20', '2022-08-23 09:23:20'),
	(12, 11, 'Senior VueJS front end developers', 'senior-vuejs-front-end-developers', '<div class="mb-10" style="color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; letter-spacing: 0.6px; margin-bottom: 10px !important;"><span style="font-weight: var(--strong-weight);">Needs to hire 2 Freelancers.&nbsp;</span><span style="letter-spacing: 0.6px;">Candidates with a key eye for UX design &amp; implementation will be viewed favourably.&nbsp;</span><span style="letter-spacing: 0.6px;">Candidates with a key eye for UX design &amp; implementation will be viewed favourably</span></div><div class="job-description break mb-0" style="overflow-wrap: break-word; word-break: break-word; font-size: 14px; color: rgb(34, 34, 34); font-family: &quot;Neue Montreal&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; letter-spacing: 0.6px;">- You will be proficient with Vue.JS / Nuxt / Git<br>- Candidates with a key eye for UX design &amp; implementation will be viewed favourably<br>- You’ll be a good communicator, comfortable in providing and receiving feedback from colleagues or asking for assistance when required<br>- Excellent in English language</div>', 'Senior VueJS front end developers', 'Senior VueJS front end developers', 'Senior VueJS front end developers', 'Senior VueJS front end developers', 0, 4, '2022-08-23 09:30:02', '2022-08-24 06:29:56');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `website_name`, `logo`, `favicon`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'LV Blog', '1661323266.png', '1661316798.png', 'Accusantium ea dolor', 'LV8 Blog', 'Quas ut obcaecati eu', 'Laboriosam reiciend', '2022-08-24 04:49:11', '2022-08-24 06:41:06');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table blog21aug2022.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table blog21aug2022.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
	(3, 'Mofizul Islam', 'mofizul21@gmail.com', NULL, '$2y$10$FwR3N6qbdql9pvqr6VBx9OozUOLoaloYE0xE4./q73Sc1flclkag6', NULL, '2022-08-21 16:06:36', '2022-08-23 04:37:01', 0),
	(4, 'Admin', 'admin@admin.com', NULL, '$2y$10$knirN0Z3SDEGrh0S1btwGOLXyv/drZXC4BfmbfhsJkStwKf8hajCW', 'cTAJVJAwGHmuuUZlmlZkDcSlX8d7qg2tRTEhyVz9KWDv8p2XDB7Sq7KpFDU9', '2022-08-22 01:46:18', '2022-08-22 01:46:18', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
