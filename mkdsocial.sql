-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 Mar 2023, 17:44:30
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mkdsocial`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bookmark`
--

CREATE TABLE `bookmark` (
  `bookmark_id` int(11) NOT NULL,
  `bookmark_member_id` int(255) NOT NULL,
  `bookmark_post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `bookmark`
--

INSERT INTO `bookmark` (`bookmark_id`, `bookmark_member_id`, `bookmark_post_id`) VALUES
(33, 434409457, 94),
(34, 434409457, 4),
(37, 434409457, 1),
(38, 120376902, 1),
(39, 120376902, 1),
(40, 120376902, 1),
(41, 120376902, 1),
(42, 120376902, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `education_member_id` int(255) NOT NULL,
  `education_name` varchar(255) NOT NULL,
  `education_section` varchar(255) NOT NULL,
  `education_start` varchar(255) NOT NULL,
  `education_finish` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `education`
--

INSERT INTO `education` (`education_id`, `education_member_id`, `education_name`, `education_section`, `education_start`, `education_finish`) VALUES
(1, 434409457, 'Aydın Adnan Menderes Üniversitesi', 'Bilgisayar Programcılığı', '2021', '2023'),
(2, 434409457, '75. Yıl Cumhuriyet Mesleki Ve Teknik Anadolu Lisesi', 'Bilişim Teknolojileri / Veri Tabanı Programcılığı', '2014', '2018');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `friends`
--

CREATE TABLE `friends` (
  `friends_id` int(11) NOT NULL,
  `friends_member_id` int(255) NOT NULL,
  `person_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `friends`
--

INSERT INTO `friends` (`friends_id`, `friends_member_id`, `person_id`) VALUES
(40, 434409457, 105969108),
(41, 434409457, 191592552),
(42, 434409457, 291592353),
(43, 434409457, 436959656),
(53, 436959656, 434409457),
(55, 434409457, 1148863383);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `status`) VALUES
(1, 434409457, 1148863383, 'asdasd', 1),
(2, 1148863383, 434409457, 'sdsa', 1),
(3, 1148863383, 434409457, 'sasda', 1),
(4, 434409457, 1148863383, 'dssd', 1),
(5, 434409457, 1148863383, 'sasd', 1),
(6, 1148863383, 434409457, 'asddas', 1),
(7, 434409457, 1148863383, 'sas', 1),
(8, 1148863383, 434409457, 'dsasd', 1),
(9, 434409457, 1148863383, 'sasd', 1),
(10, 434409457, 1148863383, 'dsadsa', 1),
(13, 105969108, 1259483325, 'sa', 1),
(14, 1259483325, 105969108, 'as', 1),
(15, 1259483325, 105969108, 'jnaıudşslkvm', 1),
(16, 1259483325, 105969108, 'vnjbvvjdhsl', 1),
(17, 1259483325, 105969108, 'vkdjnvhjkbklz', 1),
(18, 1259483325, 105969108, 'şjb dff', 1),
(19, 1259483325, 105969108, 'njdnıbbskv', 1),
(20, 1259483325, 105969108, 'Kadir hocam', 1),
(21, 105969108, 1259483325, 'hayır', 1),
(22, 1259483325, 105969108, 'ssss', 1),
(23, 1259483325, 105969108, 'evet', 1),
(24, 1259483325, 105969108, 'kadir hocam ', 1),
(25, 1259483325, 105969108, 'ayıp ediyon ha', 1),
(26, 1148863383, 105969108, 'kadir hocam ', 1),
(27, 1259483325, 434409457, 'adsada', 1),
(28, 1259483325, 191592552, 'ss', 1),
(29, 191592552, 291592353, 'sa', 1),
(30, 191592552, 291592353, 'as', 1),
(31, 291592353, 434409457, 'sa', 1),
(33, 434409457, 291592353, 'as', 1),
(34, 291592353, 434409457, 'naber', 1),
(36, 434409457, 291592353, 'ii sn', 1),
(37, 105969108, 434409457, 'sdsdsd', 1),
(42, 434409457, 105969108, 'kadoooooooo', 1),
(46, 1259483325, 434409457, 'xzczx', 1),
(47, 1259483325, 434409457, 'sasd', 1),
(48, 1259483325, 434409457, 'ss', 1),
(49, 1259483325, 434409457, 'ss', 1),
(50, 1259483325, 434409457, 'ss', 1),
(51, 1259483325, 434409457, 'sss', 1),
(52, 1259483325, 434409457, 'sad', 1),
(53, 1259483325, 434409457, 'as', 1),
(54, 434409457, 1148863383, 'asda', 1),
(55, 1148863383, 434409457, 'sdsda', 1),
(56, 1259483325, 1148863383, 'sdsacxz', 1),
(57, 1148863383, 434409457, 'SAAS', 1),
(58, 1259483325, 1148863383, 'xc', 1),
(59, 1148863383, 434409457, 'scz', 1),
(60, 1259483325, 1148863383, 'sds', 1),
(61, 434409457, 1148863383, 'zxwc', 1),
(62, 1259483325, 434409457, 'zxcxz', 1),
(63, 1148863383, 434409457, 'asd', 1),
(64, 434409457, 1148863383, 'asddsa', 1),
(65, 434409457, 1148863383, 'cx', 1),
(66, 434409457, 1148863383, 'xccw', 1),
(67, 434409457, 1148863383, 'xzc', 1),
(68, 1259483325, 1148863383, 'xccx', 1),
(69, 434409457, 1148863383, 'ads', 1),
(70, 1148863383, 434409457, 'as', 1),
(71, 1148863383, 434409457, 'xz', 1),
(72, 1148863383, 434409457, 'asf', 1),
(74, 1148863383, 434409457, 'zx', 1),
(79, 1148863383, 434409457, 'sa', 1),
(80, 1259483325, 434409457, 'adsas', 1),
(81, 1259483325, 434409457, 'sdasda', 1),
(82, 1259483325, 434409457, 'sadsad', 1),
(83, 191592552, 434409457, 'sdsa', 1),
(84, 191592552, 434409457, 'sa', 1),
(85, 434409457, 191592552, 's', 1),
(86, 191592552, 434409457, 'sad', 1),
(87, 191592552, 434409457, 'as', 1),
(88, 1259483325, 434409457, 'sd', 1),
(89, 291592353, 434409457, 'sa', 1),
(90, 434409457, 436959656, 'zx', 1),
(91, 436959656, 434409457, 'asd', 1),
(92, 436959656, 434409457, 'ss', 1),
(93, 434409457, 436959656, 'ds', 1),
(94, 434409457, 436959656, 'fgh', 1),
(95, 434409457, 436959656, 'sd', 1),
(96, 434409457, 436959656, 'asd', 1),
(97, 434409457, 436959656, 'da', 1),
(98, 434409457, 436959656, 'd', 1),
(99, 434409457, 436959656, 'sad', 1),
(100, 436959656, 434409457, 'asddsa', 1),
(101, 436959656, 434409457, 'sasa', 1),
(102, 436959656, 434409457, 'sa', 1),
(103, 434409457, 436959656, 'sd', 1),
(104, 434409457, 436959656, 'asd', 1),
(105, 434409457, 436959656, 'ads', 1),
(106, 434409457, 436959656, 'ss', 1),
(107, 436959656, 434409457, 'sds', 1),
(108, 436959656, 434409457, 'dsa', 1),
(109, 436959656, 434409457, 'sda', 1),
(110, 436959656, 434409457, 'dsa', 1),
(111, 434409457, 436959656, 'fds', 1),
(112, 434409457, 436959656, 'sfd', 1),
(113, 1259483325, 1148863383, 'selam', 1),
(114, 191592552, 105969108, 'selam', 1),
(115, 1148863383, 434409457, 'selam ', 1),
(116, 1148863383, 434409457, 'test', 1),
(117, 1148863383, 434409457, 'deneme', 1),
(118, 1148863383, 434409457, 'asd', 1),
(119, 1148863383, 434409457, 'sss', 1),
(120, 434409457, 1148863383, 'x', 1),
(121, 434409457, 1148863383, 'sd', 1),
(122, 434409457, 1148863383, 'sfd', 1),
(123, 1148863383, 434409457, 'ds', 1),
(124, 1148863383, 434409457, 'das', 1),
(125, 434409457, 1148863383, 'ss', 1),
(126, 434409457, 1148863383, 'ss', 1),
(127, 434409457, 1148863383, 'dd', 1),
(128, 436959656, 434409457, ' 😉sa', 1),
(129, 436959656, 434409457, ' 😘selam', 1),
(130, 436959656, 434409457, ' 🤩', 1),
(131, 436959656, 434409457, ' 🤩', 1),
(132, 436959656, 434409457, ' 😚', 1),
(133, 436959656, 434409457, ' 😃', 1),
(134, 436959656, 434409457, 'sa 😎', 1),
(135, 436959656, 434409457, ' 😉yhad', 1),
(136, 434409457, 436959656, 'sa', 1),
(137, 434409457, 436959656, 'asd', 1),
(138, 434409457, 436959656, 'sda', 1),
(139, 434409457, 436959656, ' 🧡', 1),
(140, 434409457, 436959656, ' 💲', 1),
(141, 434409457, 436959656, ' 😃', 1),
(142, 434409457, 436959656, ' 😜', 1),
(143, 434409457, 436959656, 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd 😊', 1),
(144, 434409457, 436959656, ' 🤣 ', 1),
(145, 436959656, 434409457, ' 😂 ', 1),
(146, 436959656, 434409457, ' 😆', 1),
(147, 191592552, 434409457, 'as', 1),
(148, 191592552, 434409457, ' 😉', 1),
(149, 436959656, 434409457, ' 😍 ', 1),
(150, 436959656, 434409457, 'sas', 1),
(151, 436959656, 434409457, 'sssssssssssssss', 1),
(152, 1148863383, 434409457, 'ssssss', 1),
(153, 105969108, 434409457, 'saaaaaaaaaaaaaaaaaa', 1),
(154, 105969108, 434409457, 'saaaaaaaaaaaaaa', 1),
(155, 434409457, 436959656, ' 😉', 1),
(156, 434409457, 436959656, 'fds', 1),
(157, 434409457, 436959656, 'cxcccccccccccccccccccccccccccccccccc', 1),
(158, 434409457, 436959656, 'cxvvvvv', 1),
(159, 434409457, 436959656, 'xc', 1),
(160, 436959656, 434409457, 'dssssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1),
(161, 436959656, 434409457, 'ds', 1),
(162, 434409457, 1148863383, 'dssa', 1),
(163, 434409457, 1148863383, 'sadsdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(164, 434409457, 1148863383, 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1),
(165, 434409457, 1148863383, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(166, 434409457, 1148863383, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(167, 1148863383, 434409457, 'ssssssssssssssssssssssssssssssssssssssssssss', 1),
(168, 434409457, 1148863383, 'ddddddddddddddddddddddddddddddddddd', 1),
(169, 434409457, 1148863383, 'dd', 1),
(170, 434409457, 1148863383, 'asdfgh', 1),
(171, 1148863383, 434409457, 'assssssssssssss', 1),
(172, 434409457, 1148863383, 'saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa 😊', 1),
(173, 1148863383, 434409457, 'ss', 1),
(174, 436959656, 434409457, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1),
(175, 436959656, 434409457, 'ss', 1),
(176, 436959656, 434409457, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1),
(177, 436959656, 434409457, 'sss', 1),
(178, 1148863383, 434409457, 'dsa', 1),
(179, 434409457, 436959656, 'sss', 1),
(180, 1148863383, 436959656, 'sas', 1),
(181, 436959656, 434409457, 'sdds', 1),
(182, 434409457, 436959656, '1', 1),
(183, 434409457, 436959656, '2', 1),
(184, 434409457, 436959656, '3', 1),
(185, 434409457, 436959656, '4', 1),
(186, 434409457, 436959656, '5', 1),
(187, 434409457, 436959656, '6', 1),
(188, 434409457, 436959656, '7', 1),
(189, 434409457, 436959656, '8', 1),
(190, 434409457, 436959656, '9', 1),
(191, 434409457, 436959656, '90', 1),
(192, 434409457, 436959656, 'sql', 1),
(193, 434409457, 436959656, 'ee', 1),
(194, 434409457, 436959656, 'r', 1),
(195, 436959656, 434409457, '1', 1),
(196, 436959656, 434409457, '2', 1),
(197, 436959656, 434409457, '3', 1),
(198, 436959656, 434409457, '4', 1),
(199, 436959656, 434409457, '5', 1),
(200, 436959656, 434409457, '6', 1),
(201, 436959656, 434409457, '7', 1),
(202, 436959656, 434409457, '8', 1),
(203, 436959656, 434409457, '9', 1),
(204, 434409457, 436959656, 'fd', 1),
(205, 434409457, 436959656, 's', 1),
(206, 434409457, 436959656, 's', 1),
(207, 434409457, 436959656, '1', 1),
(208, 434409457, 436959656, '2', 1),
(209, 434409457, 436959656, '3', 1),
(210, 434409457, 436959656, '4', 1),
(211, 434409457, 436959656, '5', 1),
(212, 434409457, 436959656, '6', 1),
(213, 434409457, 436959656, '7', 1),
(214, 434409457, 436959656, '8', 1),
(215, 434409457, 436959656, '9', 1),
(216, 436959656, 434409457, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(217, 436959656, 434409457, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(218, 1148863383, 434409457, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(219, 434409457, 436959656, 'zx   asd   ss  ds  fgh  sd  asd  da  d  sad   asddsa   sasa   sa  sd  asd  ads  ss   sds   dsa   sda   dsa  fds  sfd   😉sa   😘selam   🤩   🤩   😚   😃   sa 😎   😉yhad  sa  asd  sda  🧡  💲  😃  😜  ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd 😊  🤣   😂   😆   😍   sas   sssssssssssssss  😉  fds  cxcccccccccccccccccccccccccccccccccc  cxvvvvv  xc   dssssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd   ds   dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd   ss   dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd   sss  sss   sdds  1  2  3  4  5  6  7  8  9  90  sql  ee  r   1   2   3   4   5   6   7   8   9  fd  s  s  1  2  3  4  5  6  7  8  9   ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss   sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(220, 434409457, 436959656, 'sadasdsada', 1),
(221, 434409457, 436959656, 'asdsasa', 1),
(222, 434409457, 436959656, 'asdsdasad', 1),
(223, 434409457, 436959656, 'dsasdasd', 1),
(224, 434409457, 436959656, 'sdassda', 1),
(225, 436959656, 434409457, '(⌐■_■)', 1),
(226, 436959656, 434409457, 'saas', 1),
(227, 434409457, 436959656, 'test', 1),
(228, 434409457, 436959656, 'test', 1),
(229, 434409457, 436959656, 'tes', 1),
(230, 434409457, 436959656, 'test', 1),
(231, 434409457, 436959656, 'test', 1),
(232, 434409457, 436959656, 'test', 1),
(233, 434409457, 436959656, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(234, 434409457, 436959656, ' 😂', 1),
(235, 434409457, 436959656, ' 🤣', 1),
(236, 436959656, 434409457, 'sa', 1),
(237, 436959656, 434409457, 'asd', 1),
(238, 291592353, 434409457, 'dsds', 1),
(239, 1148863383, 434409457, 'xzz', 1),
(240, 918584520, 434409457, 'sasa', 0),
(241, 434409457, 436959656, 'zc', 1),
(242, 918584520, 434409457, 'cz', 0),
(243, 434409457, 436959656, 'xzxz', 1),
(244, 434409457, 436959656, 'xcxc', 1),
(245, 291592353, 436959656, 'xzxz', 0),
(246, 434409457, 291592353, 'sa', 1),
(247, 434409457, 291592353, 'ZZ', 1),
(248, 291592353, 434409457, 'SDA', 1),
(249, 434409457, 105969108, 'v ldjfnlkdfm', 1),
(250, 105969108, 291592353, 'SAS', 1),
(251, 291592353, 434409457, 'DFS', 1),
(252, 434409457, 291592353, 'FDSDF', 1),
(253, 434409457, 105969108, 'JKVSDS', 1),
(254, 105969108, 434409457, 'sas', 1),
(255, 291592353, 105969108, 'JJBDSK', 1),
(256, 434409457, 291592353, 'sd', 1),
(257, 291592353, 434409457, 'sa', 0),
(258, 291592353, 434409457, 'sad', 0),
(259, 291592353, 105969108, 'GUV', 1),
(260, 105969108, 291592353, 'sda', 1),
(261, 434409457, 105969108, 'assa', 1),
(262, 291592353, 434409457, 'ss', 0),
(263, 1148863383, 434409457, 'ss', 1),
(264, 105969108, 434409457, 'dd', 1),
(265, 434409457, 1148863383, 'sds', 1),
(266, 434409457, 1148863383, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(267, 1148863383, 434409457, 'ss', 0),
(268, 105969108, 434409457, 'ss', 1),
(269, 191592552, 434409457, 'assa', 0),
(270, 434409457, 105969108, 'as', 1),
(271, 191592552, 105969108, 'dsa', 0),
(272, 434409457, 105969108, 'sa', 1),
(273, 191592552, 105969108, 'sa', 0),
(274, 434409457, 105969108, 'ssd', 1),
(275, 105969108, 434409457, 'ss', 1),
(276, 191592552, 105969108, 'ss', 0),
(277, 434409457, 105969108, 'ss', 1),
(278, 1148863383, 105969108, 'sdds', 0),
(279, 434409457, 105969108, 's', 1),
(280, 191592552, 105969108, 'xc', 0),
(281, 1148863383, 434409457, 'sss', 0),
(282, 1148863383, 434409457, 'dds', 0),
(283, 1148863383, 434409457, 's', 0),
(284, 1148863383, 434409457, 'sa', 0),
(285, 1148863383, 434409457, 'ds', 0),
(286, 1148863383, 434409457, 'saas', 0),
(287, 1148863383, 105969108, 'sd', 0),
(288, 191592552, 105969108, 'sd', 0),
(289, 436959656, 434409457, 'asd', 1),
(290, 434409457, 105969108, 'cxz', 1),
(291, 436959656, 434409457, 'sas', 1),
(292, 1259483325, 434409457, 'ds', 0),
(293, 191592552, 434409457, 'fv', 0),
(294, 918584520, 434409457, ' 😂', 0),
(295, 105969108, 434409457, 'ds', 0),
(296, 918584520, 434409457, 'sss', 0),
(297, 1259483325, 434409457, 'as', 0),
(298, 191592552, 434409457, 'sa', 0),
(299, 434409457, 436959656, 'dd', 1),
(300, 191592552, 436959656, 'dssd', 0),
(301, 191592552, 434409457, 'sd', 0),
(302, 434409457, 436959656, 'sd', 1),
(303, 1148863383, 434409457, 'sd', 0),
(304, 434409457, 436959656, 'ss', 1),
(305, 105969108, 436959656, 'cc', 0),
(306, 436959656, 434409457, 'xzxz', 1),
(307, 434409457, 436959656, 'cxc', 1),
(308, 434409457, 436959656, 'sdsd', 1),
(309, 1148863383, 436959656, 'sd', 0),
(310, 1148863383, 434409457, 'ds', 0),
(311, 105969108, 436959656, 'dd', 0),
(312, 1148863383, 434409457, 'ds', 0),
(313, 105969108, 436959656, 'ds', 0),
(314, 191592552, 434409457, 'ds', 0),
(315, 191592552, 434409457, 'ss', 0),
(316, 105969108, 434409457, 'ss', 0),
(317, 1148863383, 434409457, 'dsds', 0),
(318, 1148863383, 436959656, 'dd', 0),
(319, 434409457, 436959656, 'ss', 1),
(320, 436959656, 434409457, 'sadsa', 1),
(321, 436959656, 434409457, 'ddssd', 1),
(322, 436959656, 434409457, 'dssd', 1),
(323, 436959656, 434409457, 'sdds', 1),
(324, 436959656, 434409457, 'dssd', 1),
(325, 436959656, 434409457, 'dssd', 1),
(326, 436959656, 434409457, 'dsds', 1),
(327, 436959656, 434409457, 'dssd', 1),
(328, 436959656, 434409457, 'sd', 1),
(329, 436959656, 434409457, 'ds', 1),
(330, 436959656, 434409457, 'ds', 1),
(331, 436959656, 434409457, 'dsd', 1),
(332, 436959656, 434409457, 'sd', 1),
(333, 436959656, 434409457, 'ds', 1),
(334, 436959656, 434409457, 'd', 1),
(335, 1148863383, 434409457, 'asas', 0),
(336, 291592353, 434409457, 'sdsd', 0),
(337, 436959656, 434409457, 'asas', 1),
(338, 105969108, 434409457, 'saas', 0),
(339, 1148863383, 434409457, 'SASA', 0),
(340, 434409457, 436959656, 'sas', 1),
(341, 105969108, 436959656, 'assa', 0),
(342, 436959656, 434409457, 'zx', 1),
(343, 105969108, 436959656, 'xz', 0),
(344, 1148863383, 436959656, 'ds', 0),
(345, 105969108, 436959656, 'ddf', 0),
(346, 434409457, 436959656, 'xc', 1),
(347, 1148863383, 436959656, 'dcx', 0),
(348, 434409457, 436959656, 'xz', 1),
(349, 1148863383, 436959656, 'zx', 0),
(350, 436959656, 434409457, 'sd', 1),
(351, 105969108, 436959656, 'ds', 0),
(352, 191592552, 434409457, 'sd', 0),
(353, 105969108, 436959656, 'sd', 0),
(354, 436959656, 434409457, 'sd', 1),
(355, 191592552, 434409457, 'fd', 0),
(356, 436959656, 434409457, 'sd', 1),
(357, 105969108, 434409457, 'sd', 0),
(358, 436959656, 434409457, 'ff', 1),
(359, 918584520, 434409457, 'ds', 0),
(360, 105969108, 434409457, 'd,', 0),
(361, 105969108, 434409457, 'fd', 0),
(362, 1259483325, 434409457, 'sa', 0),
(363, 105969108, 436959656, 'das', 0),
(364, 436959656, 434409457, 'ss', 1),
(365, 1259483325, 436959656, 'ss', 0),
(366, 434409457, 436959656, 'hh', 1),
(367, 434409457, 436959656, 'sdds', 1),
(368, 434409457, 436959656, 'sd', 1),
(369, 434409457, 436959656, 'ds', 1),
(370, 434409457, 436959656, 'ds', 1),
(371, 434409457, 436959656, 'sd', 1),
(372, 434409457, 436959656, 'sd', 1),
(373, 434409457, 436959656, 'ds', 1),
(374, 434409457, 436959656, 'sd', 1),
(375, 434409457, 436959656, 'sd', 1),
(376, 1259483325, 436959656, 'sd', 0),
(377, 434409457, 436959656, 'd', 1),
(378, 1259483325, 436959656, 'ss', 0),
(379, 1259483325, 436959656, ' 😍', 0),
(380, 1259483325, 434409457, ' 😉dddddddddddddddddddddddddd', 0),
(381, 1259483325, 434409457, 'ds', 0),
(382, 1259483325, 434409457, 'sd 😃', 0),
(383, 1259483325, 434409457, 'sa', 0),
(384, 434409457, 436959656, 'sdfds', 1),
(385, 436959656, 434409457, 'dsffd', 1),
(386, 105969108, 436959656, 'dsfsfd', 0),
(387, 434409457, 436959656, 'gg', 1),
(388, 436959656, 434409457, 'dsf', 1),
(389, 436959656, 434409457, 'sa', 1),
(390, 436959656, 434409457, 'dsds4', 1),
(391, 434409457, 436959656, 'fdf', 1),
(392, 436959656, 434409457, 'szcx', 1),
(393, 1148863383, 434409457, 'xzx', 0),
(394, 1148863383, 434409457, 'xc', 0),
(395, 436959656, 434409457, 'zxxz', 1),
(396, 436959656, 434409457, ' 😂 ', 1),
(397, 434409457, 436959656, 'sd', 1),
(398, 1148863383, 434409457, 'XX', 0),
(399, 436959656, 434409457, 'dss', 1),
(400, 1259483325, 434409457, 'ds', 0),
(401, 1148863383, 434409457, 'cx', 0),
(402, 434409457, 120376902, 'mükemmel amk', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_member_id` int(255) NOT NULL,
  `post_text` text NOT NULL,
  `post_img` varchar(255) DEFAULT NULL,
  `likes` int(100) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `post`
--

INSERT INTO `post` (`post_id`, `post_member_id`, `post_text`, `post_img`, `likes`, `created_date`) VALUES
(1, 434409457, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet...\r\n\r\n', '637682b771af46370f6cf99eaalogo.jpg', 327, '2022-12-11 22:10:37'),
(2, 434409457, 'saasffsafasfasfasfasfasfaf', '636feac0d611b583a1159a4cf3a012f0b92e10e6dd7b2.jpg', 196, '2022-12-11 22:11:59'),
(4, 1148863383, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries It was with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop public including versions of Lorem Ipsum.', NULL, 7, '2022-12-12 13:37:42'),
(94, 434409457, ':(', '4800_9_04.jpg', 3, '2022-12-13 23:22:48'),
(101, 434409457, 'asdasd', '06.jpg', 7, '2022-12-16 00:38:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resume`
--

CREATE TABLE `resume` (
  `cv_id` int(11) NOT NULL,
  `cv_member_id` int(255) NOT NULL,
  `cv_about_me` text NOT NULL,
  `birth_day` varchar(255) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `resume`
--

INSERT INTO `resume` (`cv_id`, `cv_member_id`, `cv_about_me`, `birth_day`, `location`) VALUES
(1, 434409457, 'Programlama konusunda araştırma yaparak yenilikleri sürekli takip etmeyi ve projelerde bu teknolojileri uygulamayı çok severim. Yeni teknolojilerden geri kalmak istemem hiçbir zaman.', '03.01.2000', 'Ümraniye / İSTANBUL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `skills_id` int(11) NOT NULL,
  `skills_member_id` int(255) NOT NULL,
  `skills_name` varchar(255) NOT NULL,
  `skills_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`skills_id`, `skills_member_id`, `skills_name`, `skills_point`) VALUES
(1, 434409457, 'HTML5', '80'),
(2, 434409457, 'CSS', '85'),
(3, 434409457, 'C#', '70'),
(4, 434409457, 'PHP', '70'),
(5, 434409457, 'SQL', '85'),
(6, 434409457, 'PHOTOSHOP', '90'),
(7, 434409457, 'ILLUSTRATOR', '75'),
(8, 434409457, 'PREMIERE PRO', '77');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `situation` text CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `situation`, `date`, `status`) VALUES
(1, 434409457, 'Kadir', 'Dasci', 'sss@gmail.com', '25f9e794323b453885f5181f1b624d0b', '6370f6fe5d12d635d368793f1816668670515d80a33f4472131561109753610e7c38.jpg', 'Full Stack Developer', '2023-03-18 19:38:04', 'Çevrimdışı'),
(2, 1148863383, 'aaa', 'ddd', 'ddd@gmail.com', '25f9e794323b453885f5181f1b624d0b', '6356c758ad164b7cb1d010e5cdd5d3d1f567e04aca514.jpg', 'Full Stack Developer', '2022-12-16 00:47:08', 'Çevrimdışı'),
(3, 1259483325, 'asd', 'dsa', 'sda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '635518232b516handsome-adult-black-man-successful-business-african-person-117063782.jpg', 'Full Stack Developer', '2022-12-15 20:22:27', 'Çevrimdışı'),
(4, 105969108, 'Ali', 'Gül', 'ali@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '635a5ff50354dpexels-pixabay-70080.jpg', 'Full Stack Developer', '2022-11-12 19:27:09', 'Çevrimdışı'),
(5, 191592552, 'Kadir', 'Dasci', 'kadir@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '6356bf716fc1funnamed.jpg', 'Full Stack Developer', '2022-11-11 09:56:57', 'Çevrimdışı'),
(6, 291592353, 'r', 'a', 'asd@outlook.om', '81dc9bdb52d04dc20036dbd8313ed055', '635a5fdd0de5aben.jpg', 'Full Stack Developer', '2022-11-11 00:08:59', 'Çevrimdışı'),
(7, 436959656, 'testt', 'testt', 'asd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1667653392user4.jpg', 'Full Stack Developer', '2022-12-15 01:04:13', 'Çevrimdışı'),
(8, 918584520, 'sss', 'ssss', 'zzz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1667972795635cf4b116ac36356c72b9dd1cc637d3dc9e013f898f1b77db7ab25966--beautiful-eyes-beautiful-black-models.jpg', 'Full Stack Developer', '2022-11-11 10:01:40', 'Çevrimdışı'),
(9, 120376902, 'CİHAT', 'KALYONCU', 'cihat@gmail.com', '30a8d44437dddddb3b3c8ebabe7fc9e7', '1679157398PHOTO-2023-01-04-17-26-23.jpg', '', '2023-03-18 19:38:04', 'Çevrimdışı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work`
--

CREATE TABLE `work` (
  `work_id` int(11) NOT NULL,
  `work_member_id` int(255) NOT NULL,
  `work_name` varchar(255) NOT NULL,
  `work_section` varchar(255) NOT NULL,
  `work_about` text NOT NULL,
  `work_start` varchar(255) NOT NULL,
  `work_finish` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `work`
--

INSERT INTO `work` (`work_id`, `work_member_id`, `work_name`, `work_section`, `work_about`, `work_start`, `work_finish`) VALUES
(1, 434409457, 'Seda Ozalit Kurumsal Baskı Merkezi', 'Jr.Grafiker', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2016', '2017'),
(2, 434409457, 'Globalpiyasa Sanayi ve Ticaret A.Ş.', 'Tester / Jr.Web Yazılım Geliştirici', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2017', '2018'),
(3, 434409457, 'Türk Telekomünikasyon A.Ş.', 'Mobil Cihaz Uzmanı', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018', '2020'),
(4, 434409457, 'Prs Per Magaza Ve Perakende Gıda Çöz.Dan.Dış.Şti.', 'Web Yazılım Geliştirici', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2020', '2021');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`bookmark_id`);

--
-- Tablo için indeksler `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Tablo için indeksler `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friends_id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Tablo için indeksler `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Tablo için indeksler `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`cv_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skills_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bookmark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `friends`
--
ALTER TABLE `friends`
  MODIFY `friends_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- Tablo için AUTO_INCREMENT değeri `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Tablo için AUTO_INCREMENT değeri `resume`
--
ALTER TABLE `resume`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
