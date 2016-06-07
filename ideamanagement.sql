-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 04:30 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideamanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Accedemic', '2016-05-16 13:27:29', '2016-05-16 13:27:29'),
(2, 'Extra Curricular', '2016-05-16 13:27:29', '2016-05-16 13:27:29'),
(3, 'Student Affair', '2016-05-16 13:27:29', '2016-05-16 13:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `commentlikes`
--

DROP TABLE IF EXISTS `commentlikes`;
CREATE TABLE IF NOT EXISTS `commentlikes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `commentID` int(100) NOT NULL,
  `noOfLikes` int(100) NOT NULL DEFAULT '0',
  `noOfDisLikes` int(100) NOT NULL DEFAULT '0',
  `noOfReports` int(100) NOT NULL DEFAULT '0',
  `postId` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentlikes`
--

INSERT INTO `commentlikes` (`id`, `commentID`, `noOfLikes`, `noOfDisLikes`, `noOfReports`, `postId`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 0, 31, 12, '2016-06-07 02:02:36', '2016-06-06 21:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `commentId` int(100) NOT NULL AUTO_INCREMENT,
  `postID` int(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `noOfLikes` int(100) NOT NULL DEFAULT '0',
  `noOfDisLikes` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `noOfreported` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`commentId`) USING BTREE,
  UNIQUE KEY `connectipid` (`commentId`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `postID`, `comment`, `noOfLikes`, `noOfDisLikes`, `created_at`, `user_id`, `updated_at`, `noOfreported`) VALUES
(1, 31, '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', 1, 0, '2016-05-18 13:32:26', '12', '2016-06-06 21:54:37', 0),
(2, 12, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 0, '2016-05-18 13:34:03', '5', '2016-05-19 00:40:34', 0),
(3, 32, 'Example comment', 0, 0, '2016-05-18 19:10:50', '12', '2016-05-18 19:10:50', 0),
(4, 31, 'dasdagfd', 0, 0, '2016-05-18 19:13:07', '12', '2016-05-18 19:13:07', 0),
(5, 0, 'new comment cartoon', 0, 0, '2016-05-19 08:01:32', '12', '2016-05-19 08:01:32', 0),
(6, 0, 'Comment  student affair', 0, 0, '2016-05-19 08:04:26', '12', '2016-05-19 08:04:26', 0),
(7, 0, 'new comment ', 0, 0, '2016-05-19 14:09:49', '12', '2016-05-19 14:09:49', 0),
(8, 0, 'saSSAD', 0, 0, '2016-05-19 14:17:16', '12', '2016-05-19 14:17:16', 0),
(9, 0, 'saSSAD', 0, 0, '2016-05-19 14:19:55', '12', '2016-05-19 14:19:55', 0),
(10, 31, 'dasdasd', 0, 0, '2016-05-19 14:20:18', '12', '2016-05-19 14:20:18', 0),
(11, 31, 'ffffffff', 0, 0, '2016-05-19 14:20:30', '12', '2016-05-19 14:20:30', 0),
(12, 31, 'test1', 0, 0, '2016-05-19 14:20:45', '12', '2016-05-19 14:20:45', 0),
(13, 32, 'cccc', 0, 0, '2016-05-19 14:20:59', '12', '2016-05-19 14:20:59', 0),
(14, 33, 'dsddd', 0, 0, '2016-05-19 14:21:14', '12', '2016-05-19 14:21:14', 0),
(15, 31, 'new', 0, 0, '2016-05-19 14:26:30', '12', '2016-05-19 14:26:30', 0),
(16, 31, 'new comment 1', 0, 0, '2016-05-27 02:03:16', '12', '2016-05-27 02:03:16', 0),
(17, 32, 'new comment2', 0, 0, '2016-05-27 02:03:31', '12', '2016-05-27 02:03:31', 0),
(18, 33, 'new comment 3', 0, 0, '2016-05-27 02:03:45', '12', '2016-05-27 02:03:45', 0),
(19, 34, '', 0, 0, '2016-05-27 02:03:55', '12', '2016-05-27 02:03:55', 0),
(20, 34, 'new comment 4', 0, 0, '2016-05-27 02:04:18', '12', '2016-05-27 02:04:18', 0),
(21, 35, 'new comment last', 0, 0, '2016-05-27 02:04:35', '12', '2016-05-27 02:04:35', 0),
(22, 31, 'aaaa', 0, 0, '2016-06-06 12:41:42', '12', '2016-06-06 12:41:42', 0),
(23, 32, 'delete comments', 0, 0, '2016-06-06 13:45:34', '12', '2016-06-06 13:45:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `user_id`, `title`, `category`, `category_id`, `description`, `image`, `updated_at`, `created_at`) VALUES
(1, '', 0, 'zcxzx', 'studentServices', 0, 'csdsada', '2016-05-17-12-47-49-9a23bd09-0ad2-4a0d-931d-1500583e33e7_5.jpg', '2016-05-17 07:17:49', '2016-05-17 07:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_28_084812_submit_data', 1),
('2016_03_31_050933_create_statuses_table', 1),
('2016_04_15_093639_add_status_to_users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `noOfLikes` int(100) NOT NULL DEFAULT '0',
  `noOfDisLikes` int(100) NOT NULL DEFAULT '0',
  `noOfreported` int(100) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `user_id`, `title`, `category_id`, `description`, `image`, `noOfLikes`, `noOfDisLikes`, `noOfreported`, `updated_at`, `created_at`) VALUES
(31, 'sameera', 0, 'holiday event', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'images/2016-05-12-17-24-09-1 (2).png', 0, 1, 0, '2016-06-06 21:54:25', '2016-05-12 16:24:09'),
(32, 'asanka', 0, 'watch cartoon', 2, 'nice children movie', '2016-05-12-17-24-56-video youtube 1mb.mp4', 3, 2, 1, '2016-05-20 09:02:27', '2016-05-12 16:24:56'),
(33, 'isuru', 0, 'hi', 2, 'good morning everyon', '', 0, 0, 0, '2016-05-17 18:43:00', '2016-05-12 16:28:03'),
(34, 'name 34', 0, 'saasa', 0, 'sadsa', '', 0, 0, 0, '2016-05-19 13:36:24', '2016-05-13 00:49:52'),
(35, 'name 35', 0, 'jkjk', 0, 'dasda', '2016-05-16-20-21-39-6e679900-c34c-47d5-9bcf-e9960fcc7c8c_5.jpg', 0, 0, 0, '2016-05-19 13:36:25', '2016-05-16 14:51:39'),
(36, 'name 36', 0, '125', 3, 'improve students', '2016-05-17-02-00-54-9d91ee95-ac42-4621-9d16-70f4f846b518_6.jpg', 0, 0, 0, '2016-05-19 13:36:25', '2016-05-16 20:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `postlikes`
--

DROP TABLE IF EXISTS `postlikes`;
CREATE TABLE IF NOT EXISTS `postlikes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `noOfLikes` int(100) NOT NULL DEFAULT '0',
  `noOfDisLikes` int(100) NOT NULL DEFAULT '0',
  `noOfReports` int(100) NOT NULL DEFAULT '0',
  `postId` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postlikes`
--

INSERT INTO `postlikes` (`id`, `noOfLikes`, `noOfDisLikes`, `noOfReports`, `postId`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 0, 1, 0, 31, 12, '2016-05-20 06:27:32', '2016-06-06 21:54:24'),
(8, 0, 1, 0, 32, 12, '2016-06-07 01:03:26', '2016-06-07 01:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user-id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_report`
--

DROP TABLE IF EXISTS `post_report`;
CREATE TABLE IF NOT EXISTS `post_report` (
  `id` int(100) NOT NULL,
  `userId` int(100) NOT NULL,
  `postId` int(100) NOT NULL,
  `noOfReport` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_tables`
--

DROP TABLE IF EXISTS `profile_tables`;
CREATE TABLE IF NOT EXISTS `profile_tables` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `about_me` varchar(1600) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_tables`
--

INSERT INTO `profile_tables` (`id`, `created_at`, `updated_at`, `fname`, `lname`, `occupation`, `username`, `phone`, `address`, `about_me`) VALUES
(1, '2016-03-27 18:30:00', '2016-05-03 04:00:27', 'Isuru', 'Arangala', 'Chief Marketing Officer', 'issa-sliit', '0721558633', 'No 245 ,Akkara 8, Bokundara, Piliyandala', '                                      Donec iaculis a nibh in egestas. Praesent interdum ipsum id tellus ullamcorper tristique. Nam auctor diam massa. Ut diam dui, pretium ac purus vitae, egestas sollicitudin velit. Quisque faucibus metus mattis nunc placerat, in malesuada erat pellentesque. Phasellus molestie elit id egestas aliquam. Donec tincidunt nunc ac congue mattis. Donec non odio nec justo varius ullamcorper.\r\nVivamus leo dolor, mattis sit amet nisi sed, dictum semper urna. Vivamus ultricies velit ut lacus aliquam, sed scelerisque orci placerat. Duis eget ultrices nulla. Maecenas diam est, aliquet non dictum et, tempor et sem. Fusce tristique varius nisl at venenatis. Suspendisse id sapien non nisl eleifend lacinia quis nec mauris. Fusce eget mauris eu tellus cursus imperdiet quis et metus. Proin non commodo velit. In eget justo vestibulum, scelerisque justo sit amet, iaculis tortor. Suspendisse ut orci mi. Suspendisse suscipit pharetra orci nec dapibus. Integer laoreet libero ut sem ullamcorper tincidunt. Vestibulum quis tincidunt odio. Phasellus tortor nulla, fringilla non turpis pharetra, mollis scelerisque justo. Donec fermentum mauris mauris, ut adipiscing urna ornare eget.\r\nCurabitur varius pulvinar massa, eget ultricies urna ultricies sed. Vestibulum consequat dictum dui quis gravida. Sed porta sem nec orci aliquam, ac fermentum eros malesuada. Etiam tristique sagittis odio vitae semper. Nulla auctor magna nisl, eget fringilla nunc scelerisque et. Vivamus dictum dui diam, vitae pretium dolor facilisis ornare. Maecenas cursus nisl pretium auctor element\r\n'),
(2, '2016-03-28 18:30:00', '2016-03-28 18:30:00', 'Akila', 'Dinu', 'Tempestate', 'lol', '0', '', ''),
(3, '2016-04-22 02:22:53', '2016-04-22 02:42:36', 'Isuru', 'Arangala', 'jsjdsdb', 'sss', '0987567891', 'No 245, Akkara 8,Bokundara,Piliyandala', 'Please click above About Me to fill details about YOU!'),
(5, '2016-05-18 06:46:36', NULL, '', '', '', '', '', '', 'Please click above About Me to fill details about YOU!'),
(12, '2016-05-18 04:46:20', NULL, '', '', '', '', '', '', 'Please click above About Me to fill details about YOU!'),
(23, '2016-05-04 05:14:21', '2016-05-04 05:16:47', 'zzczx', 'gfsfxf', 'ufyfyt', 'admin', '0123654789', 'yugug', 'Please click above About Me to fill details about YOU!'),
(25, '2016-05-04 17:43:48', NULL, '', '', '', '', '', '', 'Please click above About Me to fill details about YOU!');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcomments`
--

DROP TABLE IF EXISTS `subcomments`;
CREATE TABLE IF NOT EXISTS `subcomments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subComment` varchar(500) NOT NULL,
  `subcommentsum` int(100) NOT NULL DEFAULT '0',
  `reportedNo` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(5, 'wer', 'asanka.jsndr@gmail.com', '$2y$10$Jvik7ePds2TrJB.KLSjmCOPedlyDvsQOsoEOdZTOINZ9ww.DRXFq6', 'zfmwrBlEAhln315hFjX3hv7t5ldxLA1wsQK7LRgGXoEX72WtO3AcaSixjSEm', '2016-04-21 03:04:47', '2016-05-18 06:46:40', 'Active'),
(2, 'asd', 'asd@gmail.com', '$2y$10$cM2J18iEK69E/IcZs.0VUujmlvIaK3sAYN.UWddz.BFJhTScwDgRG', 'urNqYJysHo6aHDJa6fIiOq5dVg93YAGf5qLKzCm326xQBce9AZO6qZZ77Mdi', '2016-04-15 05:55:11', '2016-05-01 22:56:36', 'Active'),
(7, 'lkj', 'lkj@yahoo.com', '$2y$10$bkN3p2AZOqtEWGVpDL5g..r23Wa0z.iv2TgLyrhvNREWf3D0GhEJm', 'JJV2Gd6yBAkh7uuqPwLzh1ZrBDmlsLaFLGPWt6KBIRWToWuIkJe7GPFiaXYr', '2016-04-21 05:29:19', '2016-05-01 23:02:51', 'Active'),
(11, 'hij', 'hij@yahoo.lk', '$2y$10$qqUwshSXFjYZWMcixFdr.eZ2Xye6llglkZdapNDEz6VT1VTAyASwC', 'xqPdNDDxl9EPRWgjLR13Vm9ATvvM7dRrG9w71F9SjL70n8lCRS5IyuniMSjF', '2016-04-21 06:07:46', '2016-05-04 05:19:03', 'Active'),
(13, 'lkj', 'lkj@yahoo.uk', '$2y$10$8q8zaCnaQmxzYn3lsVNmleKDKcGJP8KEVDq1LkSy4wsj.cwcUDti.', 'nfHnPTO5j4ILTcpCrUyLgueJqAim4LgoxG920nIWjwNzshvZ8hci9BJhU8So', '2016-04-21 07:33:31', '2016-04-21 07:34:28', 'pending'),
(18, 'fhg', 'dgfg@yahoo.com', '$2y$10$NXm2kXrkrp4LibtcNUN2DuQxg/PSom1ta5kusOVXaBAT59xonSfXK', 'NGtLQoYPc1yeQz2kVz3sGWvfLb32KeAhA2XXIUPNFH6nsaCgm9cU4fFpmoxR', '2016-04-21 08:01:04', '2016-04-22 02:30:54', 'Active'),
(12, 'admin', 'admin@admin.com', '$2y$10$i0BEL1fy8olVnyBiDjwp2OfBiOLUyDfzbmVRZim2KsYgQ4gph8Ag6', 'Nugj8R0TglEDMR4396TxfMEoLi40DimMNlRMc6n5N5xzkKPC9mjuWCeZWPIA', '2016-05-03 21:33:48', '2016-06-03 23:55:18', 'pending'),
(25, 'abcd', 'abcd@abcd.com', '$2y$10$9SCWuzBcc5sVMzPqfJVaH.GDvgMjicpoVwJrV3kn5nRNXeVDrBTdm', 'ghyPKpFkxULT8mSsQv0y3y2BT5SwqwbGox7ofDgiOh0a4iXOiHlEoQ1UgUhJ', '2016-05-04 17:43:43', '2016-05-04 18:46:00', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
