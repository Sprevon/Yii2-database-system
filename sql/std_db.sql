-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2023-05-15 10:10:19
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `class_t`
--

CREATE TABLE `class_t` (
  `id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `class_t`
--

INSERT INTO `class_t` (`id`, `class_name`) VALUES
(1, '信管1902'),
(2, '信管1903');

-- --------------------------------------------------------

--
-- 表的结构 `std_class_t`
--

CREATE TABLE `std_class_t` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `std_class_t`
--

INSERT INTO `std_class_t` (`id`, `std_id`, `class_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- 表的结构 `std_file`
--

CREATE TABLE `std_file` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `std_file`
--

INSERT INTO `std_file` (`id`, `std_id`, `f_name`) VALUES
(1, 4, 'summary_201806051608_45_1646480841.pdf'),
(2, 4, 'translate_201806051608_45_1646481612.pdf');

-- --------------------------------------------------------

--
-- 表的结构 `std_t`
--

CREATE TABLE `std_t` (
  `id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_age` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `std_t`
--

INSERT INTO `std_t` (`id`, `std_name`, `std_age`, `update_date`) VALUES
(1, '张三', 17, '2023-05-15 08:56:08'),
(2, '李四', 18, '2023-05-15 08:56:08'),
(3, '王五', 17, '2023-05-15 08:56:08'),
(4, '王五', 17, '2023-05-15 08:56:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_t`
--
ALTER TABLE `class_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_class_t`
--
ALTER TABLE `std_class_t`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `std_id` (`std_id`);

--
-- Indexes for table `std_file`
--
ALTER TABLE `std_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_t`
--
ALTER TABLE `std_t`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `class_t`
--
ALTER TABLE `class_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `std_class_t`
--
ALTER TABLE `std_class_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `std_file`
--
ALTER TABLE `std_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `std_t`
--
ALTER TABLE `std_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
