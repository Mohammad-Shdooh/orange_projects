-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 01:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Photographers', 'https://photographycourse.net/wp-content/uploads/2008/03/Light-and-The-Photographer.jpg'),
(2, 'Designers', 'https://kissdigital.com/files/2020-05/ux-blog-cover.png'),
(4, 'Makeup Artists', 'https://www.independent.ie/editorial/StoryPlus/extraordinary-beauty/media/fullscreen_landscape_2560x1440_1-mr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `images` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `rating` int(50) NOT NULL,
  `subCate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `images`, `video`, `rating`, `subCate_id`) VALUES
(114, '629544.jpg', 'NULL', 0, 889),
(115, '640956.jpg', 'NULL', 0, 889),
(116, '672737 (1).jpg', 'NULL', 0, 889),
(117, '677543.jpg', 'NULL', 0, 889),
(118, '698363 (1).png', 'NULL', 0, 889),
(119, '706365.png', 'NULL', 0, 889),
(120, '969130.jpg', 'NULL', 0, 890),
(121, '973969.jpg', 'NULL', 0, 890),
(122, '975260 (1).jpg', 'NULL', 0, 890),
(123, '976013.jpg', 'NULL', 0, 890),
(124, '1015416.jpg', 'NULL', 0, 890),
(125, '1033287.jpg', 'NULL', 0, 890),
(126, 'NULL', 'Desktop 2021.09.01 - 21.49.54.06_Trim.mp4', 0, 890),
(127, 'death-note-anime-wallpaper.jpg', 'NULL', 0, 891),
(128, 'space_planet_surface_shadow_46631_3840x2400.jpg', 'NULL', 0, 891),
(129, 'trunk_tree_texture_119590_3840x2400.jpg', 'NULL', 0, 891),
(130, '57079.jpg', 'NULL', 0, 892),
(131, '640956.jpg', 'NULL', 0, 892),
(132, '1033287.jpg', 'NULL', 0, 892),
(133, 'cdn.cliqueinc.com__cache__posts__231596__how-to-become-a-makeup-artist-231596-1502104322808-main.700x0c-4f8af13e3e7e48f88c79c06244c61d85-dc5230091ac64f0d8ae8ff364156e2b4.jpg', 'NULL', 0, 893),
(134, 'how-to-become-a-makeup-artist-uk.jpg', 'NULL', 0, 893),
(135, 'images (1).jpg', 'NULL', 0, 893),
(136, 'images.jpg', 'NULL', 0, 894),
(137, 'makeup-cosmetics-tools-professional-accessory-decorative-cosmetics-different-realistic-brushes-makeup-artist-fashion-lipsticks-178109488.jpg', 'NULL', 0, 894),
(138, 'istockphoto-1316127257-170667a.jpg', 'NULL', 0, 894),
(142, 'jlymtjqg2au-callie-morgan.jpg', 'NULL', 0, 895),
(143, 'Liisa-Kristal-Bean-Photography-The-Woodlands-maternity-photographer-1080x675.jpg', 'NULL', 0, 895),
(144, 'Santorini1-Genevieve-Davis-NAP-007.jpg', 'NULL', 0, 895),
(145, 'birthday_celebration.jpg', 'NULL', 0, 896),
(146, 'christmas_parties.jpg', 'NULL', 0, 896),
(147, 'getty_614867390_321301.jpg', 'NULL', 0, 896);

-- --------------------------------------------------------

--
-- Table structure for table `sub_admin`
--

CREATE TABLE `sub_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_admin`
--

INSERT INTO `sub_admin` (`id`, `username`, `email`, `address`, `phone`, `password`, `profile_pic`, `facebook`, `instagram`, `cate_id`, `type`) VALUES
(13, 'OMAR ALFAROQ', 'omar@gmail.com', 'irbid', '+962788072875', '035ab4c07c8f39870fd51af9763b81f287e74098', '57083.jpg', '', 'https://www.twitch.tv', 2, 0),
(14, 'Yazan ', 'yazan@gmail.com', 'Amman-Jordan', '+962AAAAAAAA', '902593f1283dca4b94bc9e243d463b9284ff5eaa', '728220.png', 'https://www.facebook.com', 'https://www.instagram.com', 2, 0),
(15, 'Asia', 'Asia@gmail.com', 'Amman-Jordan', '+962123456789', '10858343f76e23e8ba54920ce855c28d69d2222e', 'Desktop Screenshot 2019.03.29 - 20.06.17.32.png', 'https://www.facebook.com', 'https://www.instagram.com', 4, 0),
(16, 'Mohmmad', 'mohmmad@gmail.com', 'Amman-Jordan', '+962XXXXXXXXX', '8f26b9ec7fb852200d57e4c2f824378e79686f18', 'Desktop Screenshot 2020.07.24 - 18.15.20.84.png', 'https://www.facebook.com', 'https://www.instagram.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subAdmin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `subAdmin_id`) VALUES
(889, 'Photoshop', 13),
(890, 'Illustrator', 13),
(891, 'Photoshop', 14),
(892, 'Adobe Illustrator', 14),
(893, 'Makeup', 15),
(894, 'Brands', 15),
(895, 'Session', 16),
(896, 'Party', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_pic` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_pic`) VALUES
(12, 'Yazan', 'yazan@gmail.com', '902593f1283dca4b94bc9e243d463b9284ff5eaa', NULL),
(13, 'Hamza', 'hamza@gmail.com', '8666aadfa027d11843449c68cdc733e0354fb077', NULL),
(14, 'Mohmmad', 'mohmmad@gmail.com', '8f26b9ec7fb852200d57e4c2f824378e79686f18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subCate-id` (`subCate_id`);

--
-- Indexes for table `sub_admin`
--
ALTER TABLE `sub_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subAdmin_id` (`subAdmin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `sub_admin`
--
ALTER TABLE `sub_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=897;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `subCate-id` FOREIGN KEY (`subCate_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_admin`
--
ALTER TABLE `sub_admin`
  ADD CONSTRAINT `cate_id` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `subAdmin_id` FOREIGN KEY (`subAdmin_id`) REFERENCES `sub_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
