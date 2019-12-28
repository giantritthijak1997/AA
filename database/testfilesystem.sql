-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 07:09 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testfilesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_icon` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_icon`, `status`) VALUES
(1, 'มาตรฐานการรายงานทางการเงิน', 'icon-briefcase', 1),
(2, 'มาตรฐานการสอบบัญชี', 'icon-desktop', 1),
(3, 'มาตรฐานการควบคุมคุณภาพ', 'icon-beaker', 1),
(4, 'มาตรฐานการศึกษา', 'icon-coffee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `file_type_id` int(11) DEFAULT NULL,
  `file_title` varchar(255) DEFAULT NULL,
  `file_picture` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file_type_id`, `file_title`, `file_picture`, `file_name`, `status`) VALUES
(19, 4, 'Cover', 'file_picture_1577172501.jpg', 'file_picture_1577172501.pdf', 1),
(20, 1, 'Cover1', 'file_picture_1577172630.jpg', 'file_picture_1577172630.pdf', 1),
(21, 2, 'cover2', 'file_picture_1577172736.jpg', 'file_picture_1577172736.pdf', 1),
(22, 1, 'cover', 'file_picture_1577172897.jpg', 'file_picture_1577172897.pdf', 1),
(23, 3, 'cover2', 'file_picture_1577172944.jpg', 'file_picture_1577172944.pdf', 1),
(24, 1, 'TFAC', 'file_picture_1577176741.JPG', 'file_picture_1577176741.pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
