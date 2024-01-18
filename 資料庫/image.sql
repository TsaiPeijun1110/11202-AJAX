-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2024 年 01 月 18 日 07:19
-- 伺服器版本： 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP 版本： 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1120424`
--

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `img`, `sh`) VALUES
(2, '34053221.jpg', 1),
(3, '34053242.jpg', 1),
(4, '34054063.jpg', 1),
(5, '34054431.jpg', 1),
(6, '34055516.jpg', 1),
(7, '34055852.jpg', 1),
(8, '34055976.jpg', 1),
(11, '6ec51938b0a345178a33a3b0c5254af2.gif', 1),
(12, '210934yagrlupzalaggjq7.gif', 1),
(13, 'd119b5a66b0c49d69e87f837dcb00658.gif', 1),
(14, 'chimei-museum-museum.gif', 1),
(15, 'on-the-way-marc-spector.gif', 1),
(16, 'img-2.jpg', 1),
(17, 'img-3.jpg', 1),
(18, '6ec51938b0a345178a33a3b0c5254af2.gif', 1),
(19, '00000661.jpg', 1),
(20, '00000667.jpg', 1),
(21, '00000672.jpg', 1),
(22, '00000674.jpg', 1),
(23, '00000677.jpg', 1),
(24, '00000681.jpg', 1),
(25, '00000682.jpg', 1),
(26, '00000683.jpg', 1),
(27, '00000684.jpg', 1),
(28, 'img-1.jpg', 1),
(29, 'images.png', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
