-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 يونيو 2020 الساعة 22:13
-- إصدار الخادم: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `gols` text COLLATE utf8_unicode_ci NOT NULL,
  `msg` text COLLATE utf8_unicode_ci NOT NULL,
  `vis` text COLLATE utf8_unicode_ci NOT NULL,
  `abos` text COLLATE utf8_unicode_ci NOT NULL,
  `gols_en` text COLLATE utf8_unicode_ci NOT NULL,
  `msg_en` text COLLATE utf8_unicode_ci NOT NULL,
  `vis_en` text COLLATE utf8_unicode_ci NOT NULL,
  `abos_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `about`
--

INSERT INTO `about` (`id`, `gols`, `msg`, `vis`, `abos`, `gols_en`, `msg_en`, `vis_en`, `abos_en`) VALUES
(1, 'qb', 'ms', 'vi', 'ab', 'qbb', 'mss', 'vii', 'abb');

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `depart` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `contc` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `depart`, `title`, `contc`) VALUES
(1, 'llllT', '22222', 'w@w.y', 0, '', 'aaaaaaaaaaa'),
(2, 'lllllk', '099999', 'c@c.c', 0, '', 'jdjdjjdjjd');

-- --------------------------------------------------------

--
-- بنية الجدول `contact_phone`
--

CREATE TABLE `contact_phone` (
  `id` int(11) NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `title_ar` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contact_phone`
--

INSERT INTO `contact_phone` (`id`, `phone`, `email`, `link`, `title_ar`, `title_en`) VALUES
(1, 'mmm@m.m', '999', 'www.hhhw.com', 'ddddd', 'ddddd');

-- --------------------------------------------------------

--
-- بنية الجدول `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `depart` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `gservec`
--

CREATE TABLE `gservec` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descr` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_er` text COLLATE utf8_unicode_ci NOT NULL,
  `depart_en` text COLLATE utf8_unicode_ci NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `gservec`
--

INSERT INTO `gservec` (`id`, `name`, `descr`, `name_er`, `depart_en`, `path`) VALUES
(2, 'Test2', 'Test2 ', '', '', 'upload/University Emblem v1.jpg'),
(3, 'bbbb', 'vvvvv', '', '', 'upload/2030logo.jpg'),
(4, 'Test SAERVIVC', 'kkk', '', '', 'upload/n.png'),
(5, 'خدمة 7 توريد ', 'توريد ', '', '', 'upload/n.png'),
(6, 'q1', 'qq', 'q12', 'qq', 'upload/backs.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `en_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `majer` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cv_path` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `job`
--

INSERT INTO `job` (`id`, `name`, `en_name`, `majer`, `phone`, `email`, `cv_path`) VALUES
(1, 'test', 'test', 'احياء', '777777', 'xaxbad@gmail.com', 'upload/Q1 2015 Credit Agricole SA Earnings Call - Final.pdf'),
(2, 'احمد', 'ooo', 'it', '88888888', 'n@m.m', 'upload/الدليل الاسترشادي المؤقت للعمل عن بعد في القطاع الخاص.pdf');

-- --------------------------------------------------------

--
-- بنية الجدول `order_proc`
--

CREATE TABLE `order_proc` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `prod_id` int(11) NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `mun` text COLLATE utf8_unicode_ci NOT NULL,
  `date_insert` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `order_proc`
--

INSERT INTO `order_proc` (`id`, `name`, `phone`, `email`, `prod_id`, `country`, `mun`, `date_insert`) VALUES
(1, 'www', '777777', 'aljarallahabdulrahman@gmail.com', 1, 'qqq', 's', '2020-04-29'),
(2, 'عبدالرحمن', '0568508989', 'aljarallahabdulrahman@gmail.com', 2, 'السعودية جده', 'جده', '2020-05-01');

-- --------------------------------------------------------

--
-- بنية الجدول `proudect`
--

CREATE TABLE `proudect` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` text COLLATE utf8_unicode_ci NOT NULL,
  `parec` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  `froms` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `proc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `proudect`
--

INSERT INTO `proudect` (`id`, `name`, `name_en`, `parec`, `path`, `froms`, `tos`, `proc`) VALUES
(1, 'test5', 'test5', '90', '../upload/', '40', '70', 0),
(2, 'test5', 'test5', '1000', 'upload/kisspng-square-academic-cap-computer-icons-graduation-cere-5afbe59511bf13.3660555315264577490727.png', '10', '6', 0),
(4, 'ممم', 'sma', '88', 'upload/n.png', '90', '80', 0),
(5, 'ممم', 'sm', '400', 'upload/n.png', '33', '70', 0),
(6, 'oop', 'op', '0', 'upload/n.png', '3', '10', 0),
(7, '99e', '9e', '9', 'upload/n.png', '9', '9', 9),
(8, 'mm', 'ii', '88', 'upload/leaves-15757_1920.jpg', '8', '8', 8);

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`email`, `password`, `role`) VALUES
('a@a.a', '123456', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `worktime`
--

CREATE TABLE `worktime` (
  `id` int(11) NOT NULL,
  `start` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `froms` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tos` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `worktime`
--

INSERT INTO `worktime` (`id`, `start`, `end`, `froms`, `tos`) VALUES
(1, 'الاثنين', 'الخميس', '10A.M', '5P.M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_phone`
--
ALTER TABLE `contact_phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gservec`
--
ALTER TABLE `gservec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_proc`
--
ALTER TABLE `order_proc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proudect`
--
ALTER TABLE `proudect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `worktime`
--
ALTER TABLE `worktime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_phone`
--
ALTER TABLE `contact_phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gservec`
--
ALTER TABLE `gservec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_proc`
--
ALTER TABLE `order_proc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proudect`
--
ALTER TABLE `proudect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `worktime`
--
ALTER TABLE `worktime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
