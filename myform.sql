-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 يوليو 2021 الساعة 09:30
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myform`
--

-- --------------------------------------------------------

--
-- بنية الجدول `directions`
--

CREATE TABLE `directions` (
  `id` int(11) NOT NULL,
  `value` varchar(11) NOT NULL,
  `direction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `directions`
--

INSERT INTO `directions` (`id`, `value`, `direction`) VALUES
(1, 'forward', 'forward'),
(2, '0', 'Left'),
(3, '0', 'Stop'),
(4, 'right', 'Right'),
(5, '0', 'backward');

-- --------------------------------------------------------

--
-- بنية الجدول `mytable`
--

CREATE TABLE `mytable` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `mytable`
--

INSERT INTO `mytable` (`id`, `value`, `Name`) VALUES
(1, 'left', 'motor1'),
(2, '', 'motor2'),
(3, '90', 'motor3'),
(4, '167', 'motor4'),
(5, '180', 'motor5'),
(6, '50', 'motor6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
