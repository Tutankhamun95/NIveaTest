-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 11:32 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `body` text,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `user_key` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `slug`, `body`, `published`, `created`, `modified`) VALUES
(1, 1, 'First Post22', 'first-post', 'This is the first post.22', 1, '2019-11-22 00:54:19', '2019-11-21 18:25:32'),
(3, 1, 'Sharmoota ', 'Sharmoota', 'dah body bta3 wa7da sharmoota bas momken tezha tkoon 7elwa ', 0, '2019-11-21 18:41:28', '2019-11-21 18:41:28'),
(4, 1, 'o5taha el bedan', 'o5taha-el-bedan', 'w dah article beta3 o5taha el bedan', 0, '2019-11-21 18:41:58', '2019-11-21 18:41:58'),
(5, 1, '7aga gdeeda', '7aga-gdeeda', '7aga gdeeda 3ashan el user el gedeed', 0, '2019-11-21 20:10:13', '2019-11-21 20:10:13'),
(6, 1, 'ArticleUnderHashedUser', 'ArticleUnderHashedUser', 'This is an article created by a logged-in user with a hashed password', 0, '2019-11-21 20:21:26', '2019-11-21 20:21:26'),
(7, 2, 'gedeed\'sarticles', 'gedeed-sarticles', 'gedeed\'sarticle', 0, '2019-11-21 20:49:17', '2019-11-21 20:49:35'),
(8, 3, 'who\'s article is this ', 'who-s-article-is-this', 'who\'s article is this ', 0, '2019-11-21 20:55:05', '2019-11-21 20:55:05'),
(9, 4, 'Ali\'s Article', 'Ali-s-Article', 'This is Ali\'s new Article', 0, '2019-11-21 21:02:24', '2019-11-21 21:02:24'),
(10, 2, 'new article just added', 'new-article-just-added', 'body goes here ', 0, '2019-11-23 06:20:44', '2019-11-23 06:20:44'),
(11, 5, 'Latest User\'s Article', 'Latest-User-s-Article', 'This is an article created by the latest user after styling has changed ', 0, '2019-11-23 09:33:15', '2019-11-23 10:21:10'),
(12, 5, 'New Article after latest changes', 'New-Article-after-latest-changes', 'insecure programmers tend to test every function all the time ', 0, '2019-11-23 11:56:37', '2019-11-23 11:56:37'),
(13, 5, 'something new', 'something-new', 'this is a new article', 0, '2019-11-24 03:09:16', '2019-11-24 03:09:16'),
(15, 2, 'omak ya metnak', 'omak-ya-metnak', 'omak ya metnak el neek ya khawal', 0, '2019-11-24 05:48:10', '2019-11-24 05:48:17'),
(16, 7, 'Ana\'s Article', 'Ana-s-Article', 'This will be turned into orders', 0, '2019-11-24 15:04:19', '2019-11-24 15:04:19'),
(17, 2, 'this is our first order', 'this-is-our-first-order', 'this is order one with one product', 0, '2019-11-24 15:18:12', '2019-11-24 15:18:39'),
(18, 10, 'finals article', 'finals-article', 'this is finals article', 0, '2019-11-24 16:00:12', '2019-11-24 16:00:12'),
(19, 11, 'a7a\'s article', 'a7a-s-article', 'this is article a7a', 0, '2019-11-24 16:04:06', '2019-11-24 16:04:24'),
(20, 11, 'a7a article 2', 'a7a-article-2', 'this is a7a article 2', 0, '2019-11-24 16:06:11', '2019-11-24 16:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `articles_tags`
--

DROP TABLE IF EXISTS `articles_tags`;
CREATE TABLE IF NOT EXISTS `articles_tags` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`tag_id`),
  KEY `tag_key` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles_tags`
--

INSERT INTO `articles_tags` (`article_id`, `tag_id`) VALUES
(1, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 11),
(15, 13),
(16, 14),
(17, 15),
(18, 16),
(19, 17),
(20, 17);

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

DROP TABLE IF EXISTS `contestants`;
CREATE TABLE IF NOT EXISTS `contestants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `school` text,
  `image` text,
  `slug` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`id`, `name`, `gender`, `birthday`, `school`, `image`, `slug`) VALUES
(1, 'Sara', 'female', '1993-11-12 00:00:00', 'Curtin University', 'img/sara.jpg', 'sara'),
(2, 'Hanah', 'female', '1994-03-06 00:00:00', 'Swinburne University', 'img/hanah.jpg', 'hanah'),
(3, 'Sandra', 'female', '1992-04-03 00:00:00', 'Sunway College', 'img/sandra.jpg', 'sandra'),
(4, 'Kevin', 'male', '1990-09-10 00:00:00', 'University of Nottingham', 'img/kevin.jpg', 'kevin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(250) NOT NULL,
  `slug` varchar(191) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `slug`) VALUES
(5, 'Sun Kissed Radiance', 120, '/img/nivea1.jpg', 'sun-kissed'),
(4, 'Soft Cream', 90, '/img/nivea2.jpg', 'soft-cream'),
(6, 'Body Lotion', 88, '/img/nivea3.jpg', 'body-lotion'),
(7, 'Extra Whitening', 50, '/img/nivea4.jpg', 'extra-whitening'),
(8, 'Deep Moisture Serum', 150, '/img/nivea6.jpg', 'moisture-serum'),
(9, 'Daily Moisture', 200, '/img/nivea5.jpg', 'daily-moisture');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `created`, `modified`) VALUES
(1, 'ahbal', '2019-11-21 18:40:21', '2019-11-21 18:40:21'),
(2, '5awal', '2019-11-21 18:42:24', '2019-11-21 18:42:24'),
(3, 'badeen', '2019-11-21 18:42:36', '2019-11-21 18:42:36'),
(4, 'gedeed', '2019-11-21 20:10:13', '2019-11-21 20:10:13'),
(5, 'Auth', '2019-11-21 20:21:26', '2019-11-21 20:21:26'),
(6, 'hahahaha', '2019-11-21 20:49:17', '2019-11-21 20:49:17'),
(7, 'hahahahasssss', '2019-11-21 20:49:35', '2019-11-21 20:49:35'),
(8, 'ggggg', '2019-11-21 20:55:05', '2019-11-21 20:55:05'),
(9, 'brand new', '2019-11-21 21:02:24', '2019-11-21 21:02:24'),
(10, 'testing', '2019-11-23 06:20:44', '2019-11-23 06:20:44'),
(11, 'latest', '2019-11-23 09:33:15', '2019-11-23 09:33:15'),
(12, 'insecurities', '2019-11-23 11:56:38', '2019-11-23 11:56:38'),
(13, 'omak', '2019-11-24 05:44:50', '2019-11-24 05:44:50'),
(14, 'This should be the products', '2019-11-24 15:04:19', '2019-11-24 15:04:19'),
(15, 'productone', '2019-11-24 15:18:12', '2019-11-24 15:18:12'),
(16, 'finals', '2019-11-24 16:00:12', '2019-11-24 16:00:12'),
(17, 'a7a', '2019-11-24 16:04:06', '2019-11-24 16:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`) VALUES
(1, 'cakephp@example.com', 'secret', '2019-11-22 00:54:19', '2019-11-22 00:54:19'),
(2, 'gedeed@gedeed.com', '$2y$10$e9tfZwejEM9sfqrhXskebeBzyLqp7kBdiaT8jRV0lfCKsHtttrKWO', '2019-11-21 20:09:38', '2019-11-21 20:15:08'),
(3, 'new@new.com', '$2y$10$5wz4V.kHxYbkTU.2d5fnxuN1fsDmPTX4RAKM05WZZCAxRHI8xxCRK', '2019-11-21 20:51:08', '2019-11-21 20:51:08'),
(4, 'ali@mail.com', '$2y$10$/yqPjz6Hgh1v6W9Rnd4JMexgyCKJvL9wyWb8J1hBcW3ZT42QFQcV2', '2019-11-21 21:00:43', '2019-11-21 21:00:43'),
(5, 'latest@latest.com', '$2y$10$O7ohlLk1a1T.XPjngKraGeuJAsA.5R71l0M6RIMlihQad0/.S.4Ie', '2019-11-23 09:32:17', '2019-11-23 09:32:17'),
(6, 'omak@omak.com', '$2y$10$cpahxf6OwKWttvuFT3I5TOBqGKDkCtkGe7G27F6QYGNU0NspQyXL2', '2019-11-24 05:44:09', '2019-11-24 05:44:09'),
(7, 'ana@mail.com', '$2y$10$6xmc/RTRkaNe71CN5Qm/xer2fnnLPgtsBIZyhT4W.a1UW4ZbP7/ei', '2019-11-24 15:03:24', '2019-11-24 15:03:24'),
(8, 'final@final.com', '$2y$10$bhu13ZyVIRJ4f3gPaZk2JenTcNUHNsDO78a5LbxW2.1tKq1GJSdGq', '2019-11-24 15:17:04', '2019-11-24 15:17:04'),
(9, 'testing@testing.com', '$2y$10$lM2zb69Jka73f8K.4LcxAek6yZ7QPFZFnyzp94gUIezptbfOKOVPm', '2019-11-24 15:55:50', '2019-11-24 15:55:50'),
(10, 'finals@finals.com', '$2y$10$6Uupa8/qbGU2o6eYyBYbe.eLrmoN4ODXVT5N2qByCCgquuhFm/tmC', '2019-11-24 15:59:20', '2019-11-24 15:59:20'),
(11, 'a7a@a7a.com', '$2y$10$0nlu12RSyY5OS2Yfj5xczunC3Q2G1qx373S8Kc7zxz3utO5fxiaD.', '2019-11-24 16:03:05', '2019-11-24 16:03:05'),
(12, 'metnak@metnak.com', '$2y$10$sfFjMUE0/EI9GzxYwBJ0WO3cySYkb6I4GUb5W69t89azC4H2ybu0e', '2019-11-24 21:53:22', '2019-11-24 21:53:22'),
(13, 'neeka@neeka.com', '$2y$10$4UukIhg7lFWPA5lkkeyiluck7nxD1ffwJtFMTs7YTMFZwmuJ0rUse', '2019-11-24 22:49:45', '2019-11-24 22:49:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
