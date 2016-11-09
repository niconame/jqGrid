-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-10-31 12:56:36
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `table 2`
--

CREATE TABLE `table 2` (
  `id` int(3) NOT NULL,
  `date` date NOT NULL,
  `apply` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `revenue` int(11) NOT NULL,
  `expense` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `table 2`
--

INSERT INTO `table 2` (`id`, `date`, `apply`, `revenue`, `expense`) VALUES
(1, '2016-10-01', 'breakfast', 0, 45),
(2, '2016-10-01', 'lunch', 0, 60),
(3, '2016-10-01', 'dinner', 0, 80),
(4, '2016-10-01', 'tissue', 0, 175),
(5, '2016-10-02', 'breakfast', 0, 39),
(6, '2016-10-02', 'gas', 0, 100),
(7, '2016-10-02', 'lunch', 0, 90),
(8, '2016-10-02', 'dinner', 0, 35),
(9, '2016-10-03', 'breakfast', 0, 49),
(10, '2016-10-03', 'lunch', 0, 56),
(11, '2016-10-03', 'receipt bonus', 200, 0),
(12, '2016-10-03', 'dinner', 0, 99),
(13, '2016-10-04', 'breakfast', 0, 25),
(14, '2016-10-04', 'lunch', 0, 75),
(15, '2016-10-04', 'dinner', 0, 50),
(16, '2016-10-05', 'breakfast', 0, 28),
(17, '2016-10-05', 'lunch', 0, 40),
(18, '2016-10-05', 'dinner', 0, 50),
(19, '2016-10-06', 'breakfast', 0, 80),
(20, '2016-10-06', 'lunch', 0, 150),
(21, '2016-10-06', 'dinner', 0, 50),
(22, '2016-10-06', 'pet food', 0, 450),
(23, '2016-10-06', 'drink', 0, 55),
(24, '2016-10-07', 'brunch', 0, 230),
(25, '2016-10-07', 'dinner', 0, 50),
(26, '2016-10-07', 'bread', 0, 64),
(27, '2016-10-08', 'living expense', 8000, 0),
(28, '2016-10-08', 'breakfast', 0, 40),
(29, '2016-10-08', 'lunch', 0, 70),
(30, '2016-10-08', 'dinner', 0, 40),
(31, '2016-10-09', 'gas', 0, 100),
(32, '2016-10-09', 'breakfast', 0, 35),
(33, '2016-10-09', 'lunch', 0, 49),
(34, '2016-10-09', 'dinner', 0, 67),
(35, '2016-10-10', 'bus', 0, 330),
(36, '2016-10-10', 'lunch', 0, 495),
(37, '2016-10-10', 'dinner', 0, 45),
(38, '2016-10-10', 'ticket', 0, 250),
(39, '2016-10-11', 'zoo', 0, 30),
(40, '2016-10-11', 'lunch', 0, 99),
(41, '2016-10-11', 'dinner', 0, 90),
(42, '2016-10-11', 'gas', 0, 100),
(43, '2016-10-12', 'breakfast', 0, 28),
(44, '2016-10-12', 'lunch', 0, 39),
(45, '2016-10-12', 'dinner', 0, 60),
(46, '2016-10-13', 'breakfast', 0, 39),
(47, '2016-10-13', 'lunch', 0, 56),
(48, '2016-10-13', 'dinner', 0, 77),
(49, '2016-10-14', 'breakfast', 0, 50),
(50, '2016-10-14', 'lunch', 0, 40),
(51, '2016-10-14', 'dinner', 0, 90),
(52, '2016-10-15', 'breakfast', 0, 28),
(53, '2016-10-15', 'lunch', 0, 67),
(54, '2016-10-15', 'dinner', 0, 80);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `table 2`
--
ALTER TABLE `table 2`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
