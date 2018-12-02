-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 12:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_developer`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_page`
--

CREATE TABLE `create_page` (
  `page_id` int(50) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_content` blob,
  `page_image_name` varchar(255) DEFAULT NULL,
  `page_image_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_page`
--

INSERT INTO `create_page` (`page_id`, `page_title`, `page_content`, `page_image_name`, `page_image_url`, `slug`) VALUES
(0, 'empty page', '', 'no_image', 'not_found', 'empty-page'),
(24, 'test', 0x3c703e746573743c2f703e0d0a, 'no_image', 'not_found', 'test'),
(25, 'Another Page', 0x3c703e7465737420616e6f7468657220706167653c2f703e0d0a, 'no_image', 'not_found', 'another-page'),
(26, 'about us', 0x3c703e746573743c2f703e0d0a, 'no_image', 'not_found', 'about-us');

-- --------------------------------------------------------

--
-- Table structure for table `menu_setup`
--

CREATE TABLE `menu_setup` (
  `ms_id` int(100) NOT NULL,
  `ms_page_id` int(100) NOT NULL,
  `ms_has_sub` int(10) DEFAULT NULL,
  `ms_title` varchar(150) NOT NULL,
  `ms_order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_setup`
--

INSERT INTO `menu_setup` (`ms_id`, `ms_page_id`, `ms_has_sub`, `ms_title`, `ms_order`) VALUES
(26, 24, NULL, 'Test', 1),
(27, 25, 1, 'This have sub menu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_setup`
--

CREATE TABLE `sub_menu_setup` (
  `sms_id` int(150) NOT NULL,
  `sms_ms_id` int(150) NOT NULL,
  `sms_page_id` int(150) NOT NULL,
  `sms_title` varchar(200) NOT NULL,
  `sms_order` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu_setup`
--

INSERT INTO `sub_menu_setup` (`sms_id`, `sms_ms_id`, `sms_page_id`, `sms_title`, `sms_order`) VALUES
(1, 22, 23, 'test', 2),
(2, 23, 21, 'test', 2),
(3, 23, 22, 'rest', 3),
(4, 27, 24, 'Testing', 1),
(5, 27, 26, 'Graphics', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `email`, `password`, `updated_at`) VALUES
(23, 'admin', 'admin@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-12-02 11:51:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_page`
--
ALTER TABLE `create_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `menu_setup`
--
ALTER TABLE `menu_setup`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `sub_menu_setup`
--
ALTER TABLE `sub_menu_setup`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_page`
--
ALTER TABLE `create_page`
  MODIFY `page_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `menu_setup`
--
ALTER TABLE `menu_setup`
  MODIFY `ms_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `sub_menu_setup`
--
ALTER TABLE `sub_menu_setup`
  MODIFY `sms_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
