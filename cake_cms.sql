-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2019 at 10:02 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

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
(9, 4, 'Ali\'s Article', 'Ali-s-Article', 'This is Ali\'s new Article', 0, '2019-11-21 21:02:24', '2019-11-21 21:02:24');

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
(9, 9);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

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
(9, 'brand new', '2019-11-21 21:02:24', '2019-11-21 21:02:24');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`) VALUES
(1, 'cakephp@example.com', 'secret', '2019-11-22 00:54:19', '2019-11-22 00:54:19'),
(2, 'gedeed@gedeed.com', '$2y$10$e9tfZwejEM9sfqrhXskebeBzyLqp7kBdiaT8jRV0lfCKsHtttrKWO', '2019-11-21 20:09:38', '2019-11-21 20:15:08'),
(3, 'new@new.com', '$2y$10$5wz4V.kHxYbkTU.2d5fnxuN1fsDmPTX4RAKM05WZZCAxRHI8xxCRK', '2019-11-21 20:51:08', '2019-11-21 20:51:08'),
(4, 'ali@mail.com', '$2y$10$/yqPjz6Hgh1v6W9Rnd4JMexgyCKJvL9wyWb8J1hBcW3ZT42QFQcV2', '2019-11-21 21:00:43', '2019-11-21 21:00:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
