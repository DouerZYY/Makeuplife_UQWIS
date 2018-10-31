-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 05:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(3, 2, 'cosmestics', '2018-05-14 05:20:55'),
(4, 2, 'try', '2018-05-14 05:22:47'),
(5, 9, 'life', '2018-05-15 03:41:56'),
(8, 6, '123', '2018-05-16 10:37:30'),
(9, 6, 'cosmestics', '2018-05-16 10:59:25'),
(10, 6, 'glkhlkj', '2018-05-16 12:13:44'),
(11, 6, 'gkhjkl', '2018-05-16 12:14:28'),
(12, 6, 'happy', '2018-05-17 03:52:48'),
(26, 6, 'others', '2018-05-17 06:49:41'),
(34, 6, 'new category', '2018-05-17 07:43:07'),
(35, 6, 'both enter', '2018-05-17 07:46:01'),
(36, 6, 'lalala', '2018-05-18 11:06:12'),
(37, 6, 'cannot add categories', '2018-05-18 13:15:43'),
(38, 6, 'zzz', '2018-05-21 13:03:47'),
(39, 10, 'Eyeshadow', '2018-05-22 12:59:59'),
(40, 11, 'Makeup style', '2018-05-22 13:10:01'),
(41, 11, 'Foundation', '2018-05-22 13:12:23'),
(42, 6, 'Lips', '2018-05-22 13:15:33'),
(43, 12, 'Test', '2018-05-22 13:44:51'),
(44, 12, 'asfgW', '2018-05-22 13:45:13'),
(45, 6, 'like', '2018-05-23 13:08:20'),
(46, 6, 'love', '2018-05-23 13:09:04'),
(48, 13, 'sad', '2018-05-24 13:00:56'),
(49, 13, 'name', '2018-05-24 13:02:05'),
(50, 10, 'handbag', '2018-05-24 14:33:43'),
(51, 10, 'jgkjg', '2018-05-24 14:47:57'),
(52, 6, 'Blusher', '2018-05-24 15:10:00'),
(53, 6, 'Eye', '2018-05-24 15:11:09'),
(54, 14, 'Foundation', '2018-05-24 15:21:27'),
(55, 14, 'Lipstick', '2018-05-24 15:23:07'),
(56, 10, 'Foundation', '2018-05-24 15:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `body`, `created_at`, `username`) VALUES
(1, 1, 'this is a good post', '2018-05-14 05:22:00', 'Jade'),
(2, 1, 'i love this post.', '2018-05-15 03:43:33', 'Jade'),
(3, 2, 'aldjflsd', '2018-05-15 06:09:40', 'Show'),
(4, 3, 'asdasd', '2018-05-15 10:21:41', 'Show'),
(5, 9, 'lsjdflsajfl', '2018-05-15 11:56:27', 'adf'),
(6, 7, 'i love this post!', '2018-05-15 11:56:52', 'Show'),
(7, 3, 'i love adding comment to posts.', '2018-05-15 11:57:19', 'Show'),
(8, 3, 'lfjasldjf;lsdag', '2018-05-15 12:07:47', 'Jade'),
(9, 3, 'jgalsdjglsjdkg', '2018-05-15 13:20:04', 'Jade'),
(10, 3, 'gjosdjfls', '2018-05-15 13:20:40', 'Jade'),
(11, 3, 'gjosdjfls', '2018-05-15 13:22:12', 'Jade'),
(12, 7, 'i have modified the comment controller.', '2018-05-16 04:28:04', 'Jade'),
(13, 55, 'test', '2018-05-22 11:44:35', 'Jade'),
(14, 55, 'test again!', '2018-05-22 11:48:32', 'Jade'),
(15, 55, 'test again! one more time.', '2018-05-22 11:49:53', 'Jade'),
(16, 55, 'test again! one more time.', '2018-05-22 11:58:11', 'Jade'),
(17, 55, 'test again! one more time.', '2018-05-22 12:02:46', 'Jade'),
(18, 55, 'test again! one more time.', '2018-05-22 12:04:31', 'Jade'),
(19, 55, 'test again! one more time.', '2018-05-22 12:06:20', 'Jade'),
(20, 55, 'sha?', '2018-05-22 12:06:36', 'Jade'),
(21, 55, 'a', '2018-05-22 12:07:12', 'Jade'),
(22, 60, 'wow beautifulk', '2018-05-22 13:46:51', 'Douer1'),
(23, 61, 'test.', '2018-05-23 11:09:49', 'Douer1'),
(24, 65, 'test', '2018-05-24 05:10:33', 'Jade'),
(25, 65, 'test2', '2018-05-24 05:18:07', 'Jade'),
(26, 65, 'test3', '2018-05-24 05:23:44', 'Jade'),
(27, 65, 'test3', '2018-05-24 06:10:36', 'Jade'),
(28, 65, 'test4', '2018-05-24 06:53:25', 'Jade'),
(29, 65, 'test5', '2018-05-24 07:00:57', 'Jade'),
(30, 65, 'test6', '2018-05-24 07:20:26', 'Jade'),
(31, 65, 'test7', '2018-05-24 07:37:48', 'Jade'),
(32, 65, 'asfsaf', '2018-05-24 07:53:56', 'Jade'),
(33, 65, 'kalsjcklsac', '2018-05-24 08:42:25', 'Jade'),
(34, 65, 'ansbcnmsa', '2018-05-24 08:43:45', 'Jade'),
(35, 65, 'good comment.', '2018-05-24 10:04:32', 'Jade'),
(36, 63, 'test again.', '2018-05-24 10:06:38', 'Jade'),
(37, 62, 'test.', '2018-05-24 10:08:51', 'Jade'),
(38, 65, 'test by douer.', '2018-05-24 10:18:54', 'Douer1'),
(39, 63, 'test by douer again', '2018-05-24 10:19:20', 'Douer1'),
(40, 62, 'test.za', '2018-05-24 10:19:57', 'Douer1'),
(41, 62, 'test agin.', '2018-05-24 10:20:07', 'Douer1'),
(42, 18, 'langksdjlgsga.', '2018-05-24 10:20:50', 'Douer1'),
(43, 18, 'douzi test.', '2018-05-24 10:24:43', 'Douer1'),
(44, 11, 'lalala', '2018-05-24 10:25:56', 'Douer1'),
(45, 11, '111111111111111', '2018-05-24 10:26:16', 'Douer1'),
(46, 65, 'BAOBEI TEST', '2018-05-24 12:55:43', 'baobei'),
(47, 66, 'bAobeizhenbang', '2018-05-24 12:57:58', 'baobei'),
(48, 66, 'beudffh', '2018-05-24 12:58:12', 'baobei'),
(49, 62, 'qwerqwerqwerqwerqwerqwer', '2018-05-24 13:03:13', 'baobei');

-- --------------------------------------------------------

--
-- Table structure for table `postlikes`
--

CREATE TABLE `postlikes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postlikes`
--

INSERT INTO `postlikes` (`id`, `post_id`, `user_id`, `date`) VALUES
(148, 62, '6', '2018-05-23 16:43:24'),
(151, 65, '6', '2018-05-24 03:54:34'),
(153, 56, '6', '2018-05-24 12:39:57'),
(159, 53, '13', '2018-05-24 12:55:23'),
(161, 20, '13', '2018-05-24 12:55:26'),
(163, 62, '13', '2018-05-24 12:55:53'),
(164, 57, '13', '2018-05-24 12:55:55'),
(165, 60, '13', '2018-05-24 12:55:56'),
(166, 67, '13', '2018-05-24 13:00:44'),
(167, 65, '13', '2018-05-24 13:00:47'),
(168, 68, '10', '2018-05-24 14:29:54'),
(171, 56, '10', '2018-05-24 14:30:03'),
(173, 70, '10', '2018-05-24 14:39:55'),
(174, 65, '10', '2018-05-24 14:40:00'),
(175, 62, '10', '2018-05-24 14:40:02'),
(176, 60, '10', '2018-05-24 14:40:04'),
(180, 44, '6', '2018-05-24 15:11:22'),
(184, 50, '6', '2018-05-24 15:11:39'),
(185, 57, '10', '2018-05-24 15:15:09'),
(186, 55, '10', '2018-05-24 15:16:58'),
(187, 54, '10', '2018-05-24 15:17:00'),
(188, 49, '10', '2018-05-24 15:17:02'),
(189, 48, '10', '2018-05-24 15:17:04'),
(190, 31, '10', '2018-05-24 15:17:08'),
(191, 57, '14', '2018-05-24 15:18:16'),
(192, 56, '14', '2018-05-24 15:18:17'),
(193, 55, '14', '2018-05-24 15:18:18'),
(194, 54, '14', '2018-05-24 15:18:21'),
(195, 49, '14', '2018-05-24 15:18:23'),
(196, 48, '14', '2018-05-24 15:18:25'),
(197, 31, '14', '2018-05-24 15:18:27'),
(198, 57, '6', '2018-05-24 15:26:56'),
(199, 54, '6', '2018-05-24 15:26:59'),
(200, 55, '6', '2018-05-24 15:27:02'),
(201, 48, '6', '2018-05-24 15:27:03'),
(202, 43, '6', '2018-05-24 15:27:05'),
(203, 34, '6', '2018-05-24 15:27:10'),
(204, 57, '11', '2018-05-24 15:27:31'),
(205, 54, '11', '2018-05-24 15:27:34'),
(206, 48, '11', '2018-05-24 15:27:38'),
(207, 43, '11', '2018-05-24 15:27:40'),
(208, 60, '11', '2018-05-24 15:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`, `likes`) VALUES
(30, 39, 10, 'Makeup Geek', 'Makeup-Geek', 'Makeup Geek series.', '25011441.jpg', '2018-05-23 12:33:47', 0),
(31, 41, 10, 'Armani star foundation', 'Armani-star-foundation', 'Think of it as the conscience of open goods, the packaging is soft and tender green, lace printed on the box, printed butterflies, the color is light and faint, it is easy to draw a sense of girls. As for durability, they are already so fresh and soft. Don\'t ask for durability! \"Girls are all guaranteed to have a shelf life.', '0180525010947.jpg', '2018-05-23 12:35:28', 2),
(34, 53, 6, 'Superhero Super Liner Brush', 'Superhero-Super-Liner-Brush', 'This must-have, game-changing brush gives you the power to flawlessly apply all your favorite shadow and liner formulas with just one tool. The innovative dual-ended design features an angled eyeliner brush for even and precise liner application, plus a groundbreaking eyeshadow brush that starts as your all-over shadow brush—and transforms into your crease and smudger brushes, too!', '0180525011040.jpg', '2018-05-17 07:15:46', 1),
(43, 52, 6, 'Superhero Super Liner Brush', 'Superhero-Super-Liner-Brush', 'This must-have, game-changing brush gives you the power to flawlessly apply all your favorite shadow and liner formulas with just one tool. The innovative dual-ended design features an angled eyeliner brush for even and precise liner application, plus a groundbreaking eyeshadow brush that starts as your all-over shadow brush—and transforms into your crease and smudger brushes, too!', '180525011228.jpg', '2018-05-19 05:57:34', 2),
(44, 38, 6, 'Celebration Foundation', 'Celebration-Foundation', 'A full coverage, Anti-Aging hydrating powder foundation that truly gives you the power to achieve flawless, airbrushed complexion perfection in no time! Delivers highly pigmented perfect coverage that will never crease or crack and is designed to not only cover, but to make you skin appear younger at the same time.', '0180525010811.jpg', '2018-05-18 10:59:00', 1),
(45, 39, 6, 'Superher Anti-Aging Super Palette', 'Superher-Anti-Aging-Super-Palette', 'Transform your eyes with this must-have, universally flattering, game-changing palette featuring 12 all-new Superhero™-inspired shades. Developed with plastic surgeons, each anti-aging, ultra-luxe eyeshadow is formulated with hydrolyzed collagen, silk, peptides and antioxidants, plus innovative Superhero Pigment Power Technology™ for super smooth, super skin-loving, super saturated shades that last from day to night! ', '0180525010740.jpg', '2018-05-23 11:08:45', 0),
(46, 40, 6, 'Celebration Foundation', 'Celebration-Foundation', 'A full coverage, Anti-Aging hydrating powder foundation that truly gives you the power to achieve flawless, airbrushed complexion perfection in no time! Delivers highly pigmented perfect coverage that will never crease or crack and is designed to not only cover, but to make you skin appear younger at the same time.', '0180525010638.jpg', '2018-05-23 11:18:43', 0),
(47, 43, 6, 'Visee PK-3', 'Visee-PK-3', 'The painting was light, the white powder was pressed down, the warm light gold on the top layer, and the brilliance of the end of the eye. It was the beginning of the peach-faced little sister.\r\nThe painting is deep, sweeping warm gold, burgundy spread from the corner of the eye, the corner of the eyes faint brown, is the demon charming charming Humei Dan.', '20180525010558.jpg', '2018-05-23 12:14:54', 0),
(48, 39, 10, 'ColourPop', 'ColourPop', 'Pearlized pearl is really glamorous, especially the spot that Drift brick red, the brand\'s Metallic metal series, those sequins on the eyes is simply shiny, flashing eyes open eyes?', '525011316.jpg', '2018-05-23 12:27:55', 4),
(49, 39, 10, 'Makeup Geek ', 'Makeup-Geek', 'Youtube The beauty makeup brand created by a beauty makeup artist. The product line is more comprehensive than Colour Pop. The most famous is the eye shadow. For example, ColourPop is a little fresh, Makeup Geek is a fruit sister, and no matter what color he exaggerates, he dares to greet him.', 'banner12.jpg', '2018-05-23 12:31:23', 2),
(50, 40, 6, 'LIP MAGNET', 'LIP-MAGNET', 'A light lip gloss of extremely fine texture, unparalleled sensation of weightlessness, intense colour concentration, ultra-chic matte finish and flawless, long-lasting wear: Lip Magnet is all this and more.\r\n\r\nLip Magnet is the first matte lip gloss to offer unprecedented colour concentration in the finest of textures, while perfectly fusing with the lips. ', '20180525010454.jpg', '2018-05-18 11:35:19', 1),
(54, 37, 10, 'Mac Chili', 'Mac-Chili', 'Mac Chili is one of my favorite lipstick. \r\nIt is a matte lipstick so I will use lip balm first before I use Chili. The color of this lipstick is red with brown orange. It is suitable for nearly all skin color girls. It makes your skin looks very bright and in good spirits.\r\nI highly recommend this lipstick to every girl.', 'chili.jpg', '2018-05-21 05:05:32', 4),
(55, 38, 10, 'Colourpop Eyeshadow, muse', 'Colourpop-Eyeshadow-muse', 'The eyeshadow which I use most recently is from Colourpop, Muse.\r\nThis eyeshadow is so amazing and so worth the price/wait for it to come in the mail. I apply it with my finger all over my lids and it looks gorgeous. I have very fair skin with cool undertones and brown/hazel eyes and this is soooo flattering to my eye color, it really brings out the green. I will buy this color over and over.', 'muse.jpg', '2018-05-21 05:16:13', 3),
(56, 39, 11, 'Mac Lipstick', 'Mac-Lipstick', 'Mac owns all colors lipsticks that I can image.\r\nSome of them are matte and some are lip balm. The color can be used in daily life or special occasions.\r\nChili, Ruby woo, Diva, Lady bugs, and so on are really popular all over the world. Everyone can find their favourite color in Mac.', 'maclipstick.jpg', '2018-05-21 05:25:38', 3),
(57, 39, 10, 'Yes please, Colourpop', 'Yes-please-Colourpop', 'The original fixed 12 pan palette is all about that golden hour glow - the hottest shades inspired by our fave time of the day.\r\n\r\nFull-Zip: matte warm ivory\r\nBig Cocktails: matte orange\r\nChamps: matte pale peachy nude\r\nBling: metallic rust\r\nLouie: metallic duochrome red with a gold flip\r\nButter Cake: metallic pale yellow gold\r\nSpoiled: matte brick red\r\nGno: matte burnt orange\r\nMischief: matte warm yellow\r\nNote to Self: matte warm caramel\r\nChauffeur: metallic duochrome bright orange with a gold flip\r\nFrench Kiss: matte medium chocolate brown', 'banner31.jpg', '2018-05-21 05:37:09', 5),
(60, 40, 11, 'Western & Asian Makeup', 'Western-Asian-Makeup', 'Althrough I am an Asian, I prefer Western makeup style for it seems more sexy.', 'banner2.jpg', '2018-05-22 13:10:01', 3),
(74, 41, 14, 'Armani', 'Armani', 'Armani star foundation.', '20180525010318.jpg', '2018-05-24 15:21:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

CREATE TABLE `post_image` (
  `post_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `salt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`, `salt`) VALUES
(6, 'Kexuan Xin', '1234', 'xkxjane@gmail.com', 'Jade', '55f90ef2e84d0c90bde6cbbd699695d06ef5af37c2db308f4f323fa1b5d2e8f7', '2018-05-14 14:49:31', '$2y$10$uOIKquIYBF69BE4wGTZw5uN5If1PXwnhjdvl6pGHnflBpNPISQuAK'),
(7, 'adf', 'adf', 'ke.xin@uqconnect.edu.au', 'jack', '7c0c0f5bd3bdef97ee3b890395e4638ef0282a64973916bf46b4a603b5b2a099', '2018-05-14 14:51:08', '$2y$10$iMBoVMfGMm6PK5CR7iYbu.9hv5ps5lhCH5W70sfiFpDeGNIsXtqhe'),
(8, 'adg', '', '1244423189@qq.cpm', 'zxg', '03a6891579a3b9ccd7f20a3925dd0de6da3a6898fcd3ded1a786d41fb6f85b00', '2018-05-14 14:52:18', '$2y$10$fg8C9PG11aOa5hMTK/bNMO.6HV9NRwE82BTz0jAywfnlWCKSOM6TW'),
(9, 'zhixiang', '1234', '1244423189@qq.c', 'show', 'dc4460c1a04568ad3dc0186647a5c003ab8dc9837c522fcbab135ded84ac4e82', '2018-05-15 02:27:35', '$2y$10$5Xis5ZRONgwiAQu6l5G7suTWpZ2bRxTmIEbev8yKHkqTTMJ4qW7s6'),
(10, 'Douer1', '', '1@1.com', 'Douer1', 'c577fa4935e113476d2c8b692f55e66a61cb4eb949c786203964ea8be6380a92', '2018-05-22 12:30:35', '$2y$10$rL2bE/Gf4sNWavPqUuu3W.gPas8c/Jk98S6DOe8RyFH/ZRMa6mZoC'),
(11, 'Douer2', '', '2@2.com', 'Douer2', 'e30a104dc4e77f0613cf139083440459a76b3fbb39f846bb48d7e5a96abd07a7', '2018-05-22 12:55:13', '$2y$10$pzRYRcemiawMqzkrhBjhh.REit0lXnP2xgXGrWEf9uYQDM2QsLNIi'),
(12, 'Douer3', '', '1231@1.com', 'Douer3', '5c68d23321fd3d49d4467fde95b7bb7c925fd3cdde961147719d62fe7bf7d999', '2018-05-22 13:44:19', '$2y$10$2SbHU7ymesuy4RxjLSRe8eNSCQAdoZZm/ELJ91hE4.SesCEQiaNo2'),
(13, 'baobei', '', '13@3.com', 'baobao', 'd338d02ac59eeaaf30cf4050b5ad57eb11ac3fd0e71c6d008d99c4c2f2b33be9', '2018-05-24 12:54:49', '$2y$10$LXAJ3HT0ff0wJu.RFf290eIROi.cQsmktErWd1BYlBzKwEebbJrPO'),
(14, 'Tree', '', 'xkxj@gmail.com', 'Tree', '3502af13225962ea2dad857b45b1e62f70a3fe27eb478aaccb4f68ed44dcdf67', '2018-05-24 15:18:04', '$2y$10$w8Eygva6IPj2aVZLtWWFJOINsZdBDGfU7j3RbIsyCzaEpq09WKIge');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postlikes`
--
ALTER TABLE `postlikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_image`
--
ALTER TABLE `post_image`
  ADD PRIMARY KEY (`image_name`),
  ADD UNIQUE KEY `image_name` (`image_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `postlikes`
--
ALTER TABLE `postlikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
