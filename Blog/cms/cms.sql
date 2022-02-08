-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 08, 2022 at 07:17 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(160, 'Node.js'),
(163, 'CSS3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 10, 'John Doe', 'john@doe.com', 'Good content, respect from Germany.', 'approved', '2022-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_tags`, `post_comment_count`, `post_status`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`) VALUES
(4, 'javascript, tutorials', 4, 'approved', 163, 'GuKaaa', 'Ban Jovany', '2022-02-02', 'abstract-5035778.jpg', 'I had this fun idea for a volcano illustration and I thought it turned out pretty rad. Photos used for texture: flower (pansy), crowd, snowy mountain, ocean.'),
(5, 'Python, Css', 4, 'approved', 160, 'Hello Python Language', 'John Kimmys', '2022-02-02', 'ganapathy-kumar-fjT3Zn2IhIk-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim quis purus vitae suscipit. Integer ut eleifend metus. Ut ac cursus neque, in suscipit quam. Donec non volutpat libero. Aliquam egestas imperdiet pretium. Nunc vulputate sed metus ut feugiat. Cras nisi eros, elementum vitae rutrum tempus, iaculis eget lectus.\r\n\r\nSuspendisse accumsan vulputate mauris, at porttitor felis placerat nec. Duis tincidunt varius arcu. Maecenas lacinia, lacus quis commodo tincidunt, ante tellus scelerisque odio, eget blandit nunc sem nec metus. In convallis non nisl a pretium. Quisque scelerisque sollicitudin est vel commodo. Nunc non est purus. In hac habitasse platea dictumst. Maecenas purus nibh, bibendum et diam sed, gravida placerat ex. Sed dapibus risus ac purus euismod volutpat. Nam nec augue porta, euismod purus vel, finibus nunc.\r\n\r\nPellentesque venenatis, lorem et rutrum egestas, lorem urna tempus ligula, vel laoreet risus lacus vitae magna. Integer vitae arcu ut magna faucibus lacinia. Duis imperdiet elit ut lacus ornare, at facilisis felis ultricies. Aenean blandit pellentesque sapien in euismod. Donec efficitur nisl non metus feugiat, at pretium mauris ultricies. Aenean ullamcorper turpis non arcu tempor, ac tempus tortor elementum. Pellentesque sit amet aliquet quam. Integer imperdiet vehicula orci a tempus. Morbi porttitor imperdiet dapibus. Nullam et semper urna, eget lobortis neque. Phasellus vehicula ipsum eget dolor hendrerit malesuada vel quis tellus. Maecenas fringilla volutpat nunc ut facilisis. Vivamus nec est elit. Duis ac ex eu massa blandit porttitor vitae at ipsum. Proin facilisis nibh nec ante interdum facilisis.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
