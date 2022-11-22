-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022-11-22 05:42:31
-- サーバのバージョン： 10.4.25-MariaDB
-- PHP のバージョン: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_data`
--

CREATE TABLE `mst_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_letter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_num` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `home_adress` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `phone_num` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email_adress` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
