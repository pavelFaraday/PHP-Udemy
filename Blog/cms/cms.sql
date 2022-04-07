-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 07, 2022 at 12:40 PM
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
(163, 'CSS3'),
(164, 'HTML');

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
(1, 14, 'Ballllooo', 'cindy@mail.com', 'iuzuvz', 'unapprove', '2022-02-11'),
(2, 14, 'Gior', 'jann@ljan.com', 'klho', 'approve', '2022-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) DEFAULT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) DEFAULT NULL,
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

INSERT INTO `posts` (`post_id`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`) VALUES
(16, 'db', NULL, 'published', 0, 160, 'BLAAA', 'dw', '2022-02-20', '16_M1Pro_Night.png', 'xkxh qhx '),
(17, 'javascript', NULL, 'published', 0, 160, 'Gu', 'Ban Jovany', '2022-04-05', 'aniket-deole-VG5zcMz5F24-unsplash.jpg', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact</span><br></p>'),
(18, 'javascript, tutorials', NULL, 'published', 0, 160, 'Hello Python', 'John Kimmys', '2022-04-05', 'cats-moon-pink-silhouette-black-background-3840x2880-978.png', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact</span><br></p>'),
(19, 'knkjbh', NULL, 'published', NULL, 163, 'Hello Python', 'Ban Jovany', '2022-04-06', '882762.jpg', '<p style=\"box-sizing: inherit; margin-top: 24px; margin-bottom: 24px; padding: 0px; max-width: 100%; color: rgb(70, 70, 70); font-family: -apple-system, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif; font-size: 16px;\">The following are just some of the reasons that make push notifications a great marketing tool:</p><ul style=\"box-sizing: inherit; margin: 24px 0px 24px 20px; padding: 0px 0px 0px 24px; max-width: 100%; color: rgb(70, 70, 70); font-family: -apple-system, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif; font-size: 16px;\"><li style=\"box-sizing: inherit; padding-bottom: 10px;\">Users need to give their explicit permission to receive push notifications. This means they are already interested in what you have to offer and are more likely to engage with notifications.</li><li style=\"box-sizing: inherit; padding-bottom: 10px;\">Push notifications are shorter and demand less attention than email or social media updates.</li><li style=\"box-sizing: inherit; padding-bottom: 10px;\">There is no algorithm like on social media to limit your reach. Nearly 100% of messages are delivered.</li><li style=\"box-sizing: inherit; padding-bottom: 10px;\">Users can control how their devices display notifications. They can snooze them or turn them off entirely.</li><li style=\"box-sizing: inherit; padding-bottom: 0px;\">Not as many companies are using push notifications.</li></ul>'),
(20, 'javascript', NULL, 'published', NULL, 160, 'Gu', 'Ban Jovany', '2022-04-06', 'aniket-deole-VG5zcMz5F24-unsplash.jpg', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact</span><br></p>'),
(21, 'javascript, tutorials', NULL, 'published', NULL, 160, 'Hello Python', 'John Kimmys', '2022-04-06', 'cats-moon-pink-silhouette-black-background-3840x2880-978.png', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact</span><br></p>'),
(22, 'javascript, tutorials', NULL, 'published', NULL, 160, 'Hello Python', 'John Kimmys', '2022-04-06', 'cats-moon-pink-silhouette-black-background-3840x2880-978.png', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(49, 'gio', 'gio', 'Giorgi', 'Epita', 'gio@gmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'gdqv9unroud5itfo70ba8mh1cu', 1649335080),
(2, 'gdqv9unroud5itfo70ba8mh1cu', 1649335080),
(3, 'fo8h1dp4nbblvmoq9fb9t0u1nq', 1649335087);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
