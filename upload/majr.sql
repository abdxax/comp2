-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 أبريل 2020 الساعة 19:09
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
-- Database: `dataupda`
--

-- --------------------------------------------------------

--
-- بنية الجدول `majr`
--

CREATE TABLE `majr` (
  `id_m` int(11) NOT NULL,
  `name_m` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `majr`
--

INSERT INTO `majr` (`id_m`, `name_m`) VALUES
(1, 'اللغة العربية'),
(2, 'الاحياء'),
(3, 'الكيمياء'),
(4, 'الحاسب الالي'),
(5, 'تقنية شبكات الحاسب الالي '),
(6, 'تقنية الهندسة الكهربائية '),
(7, 'الهندسة الكهربائية '),
(8, 'اللغة الانجليزية'),
(9, 'التاريخ'),
(10, 'تقنية الاشعاع الصناعي '),
(11, 'الدراسات الاسلامية'),
(12, 'رياض الاطفال '),
(13, 'الرياضيات'),
(14, 'الهندسة الميكانيكية'),
(15, 'تقنية الهندسة الميكانيكة '),
(16, 'التمريض'),
(17, 'الفيزياء'),
(18, 'التربية الخاصة');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `majr`
--
ALTER TABLE `majr`
  ADD PRIMARY KEY (`id_m`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `majr`
--
ALTER TABLE `majr`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
