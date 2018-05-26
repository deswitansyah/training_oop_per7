-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 11:28 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_blog`
--

CREATE TABLE `category_blog` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_blog`
--

INSERT INTO `category_blog` (`id`, `category_name`) VALUES
(1, 'PHP'),
(2, 'HTML & CSS'),
(3, 'FRAMEWORK'),
(4, 'SEO');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `publish` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `username`, `reply`, `publish`) VALUES
(64, 3, 'irwan', 'andoy di geboy', '2018-05-25 22:18:15'),
(65, 3, 'irwan', 'coba lagi comment', '2018-05-25 22:19:33'),
(66, 4, 'irwan', 'voluptatibus possimus', '2018-05-25 22:25:31'),
(68, 7, 'irwan', 'komentar saya', '2018-05-26 00:57:57'),
(69, 5, 'irwan', 'possimus', '2018-05-26 11:18:29'),
(70, 5, 'irwan', 'consectetur adipisicing elit', '2018-05-26 11:19:25'),
(71, 5, 'irwan', ' Dicta expedita', '2018-05-26 11:20:52'),
(72, 3, 'irwan', 'laboriosam', '2018-05-26 11:21:43'),
(73, 3, 'andi', 'laboriosam', '2018-05-26 11:22:31'),
(74, 3, 'fatim', 'animi vero ', '2018-05-26 11:30:55'),
(75, 3, 'feray', 'magni quis', '2018-05-26 11:50:24'),
(76, 7, 'feray', 'Reiciendis aliquid ', '2018-05-26 13:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(40) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image_news` varchar(100) NOT NULL,
  `news` varchar(10000) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_category`, `title`, `image_news`, `news`, `date_post`) VALUES
(3, 1, 'Post Title 1', '750x300.png', 'Post Title 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!', '2018-05-25 09:49:19'),
(4, 1, 'Post Title 2', '750x300.png', 'Post Title 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!', '2018-05-25 09:49:26'),
(5, 3, 'Post Title 3', '750x300.png', 'Post Title 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!', '2018-05-25 09:49:32'),
(6, 2, 'Post Title 4', '750x300.png', 'Post Title 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!', '2018-05-25 09:49:39'),
(7, 2, 'Post Data Title 5', '750x300.png', 'Post Title 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!', '2018-05-25 09:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `photo`) VALUES
(1, 'irwan', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'irwan.png'),
(2, 'andi', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'andi.png'),
(3, 'feray', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'feray.png'),
(4, 'fatim', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'fatim.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_blog`
--
ALTER TABLE `category_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_blog`
--
ALTER TABLE `category_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
