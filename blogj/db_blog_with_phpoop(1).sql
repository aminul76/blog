-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 11:32 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog_with_phpoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`) VALUES
(23, 'PHP'),
(29, 'java'),
(30, 'JAVA'),
(31, 'à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¬à§à¦²à¦—');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `note`) VALUES
(1, 'à¦†à¦®à¦¾à¦¦à§‡à¦°');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(1, 'privacy polcy', '<p>v</p>\r\n<p>inte timportant than the expertise or qualifications of the contributor. What will remain depends upon whether the content is free of&nbsp;<a title=\"Wikipedia:Copyright violations\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Copyright_violations\">copyright restrictions</a>&nbsp;and contentious material&nbsp;<a class=\"mw-redirect\" title=\"Wikipedia:BLP\" href=\"https://en.wikipedia.org/wiki/Wikipedia:BLP\">about living people</a>, and whether it fits within Wikipedia\'s&nbsp;<a title=\"Wikipedia:Editing policy\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Editing_policy\">policies</a>, including being&nbsp;<a class=\"mw-redirect\" title=\"Wikipedia:Verifiable\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Verifiable\">verifiable</a>&nbsp;against a published&nbsp;<a class=\"mw-redirect\" title=\"Wikipedia:Reliable source\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Reliable_source\">reliable source</a>, thereby excluding editors\'&nbsp;<a title=\"Wikipedia:Neutral point of view\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Neutral_point_of_view\">opinions</a>&nbsp;and beliefs and&nbsp;<a class=\"mw-redirect\" title=\"Wikipedia:Original research\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Original_research\">unreviewed research</a>. Contributions cannot damage Wikipedia because the software allows easy reversal of mistakes and many experienced editors are watching to help ensure that edits are cumulative improvements. Begin by simply clicking the&nbsp;<em>Edit</em>&nbsp;<a title=\"Hyperlink\" href=\"https://en.wikipedia.org/wiki/Hyperlink\">link</a>&nbsp;at the top of any editable page!</p>\r\n<p>Wikipedia is a live collaboration differing from paper-based reference sources in important ways. Unlike printed encyclopedias, Wikipedia is continually created and updated, with articles on historic events appearing within minutes, rather than months or years. Because everybody can help improve it, Wikipedia has become more comprehensive than any other encyclopedia. In addition to quantity, its contributors work on improving quality as well. Wikipedia is a work-in-progress, with articles in various stages of completion. As articles develop, they tend to become more comprehensive and balanced. Quality also improves over time as misinformation and other errors are removed or repaired. However, because anyone can click \"edit\" at any time and add stuff in, any article may contain undetected misinformation, errors, or&nbsp;<a title=\"Wikipedia:Vandalism\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Vandalism\">vandalism</a>. Awareness of this helps the reader to obtain valid information, avoid recently added misinformation (see&nbsp;<em><a title=\"Wikipedia:Researching with Wikipedia\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Researching_with_Wikipedia\">Wikipedia:Researching with Wikipedia</a></em>), and fix the article.</p>'),
(4, 'AMINUL ISLAM', '<p>it is aminul islam</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`) VALUES
(14, 23, 'aminul post', ' <p>Java technology allows you to work and play in a secure computing environment. Upgrading to the latest Java version improves the security of your system, as older versions do not include the latest security updates.</p>\r\n<p>Java allows you to play online games, chat with people around the world, calculate your mortgage interest, and view images in 3D, just to name a few.</p>', 'upload/054d3012cd.25587854_774538222738598_5893815481557380971_o.jpg', 'aminul', 'php', '2018-10-11 19:24:15'),
(15, 0, 'java jde', ' <p>Java technology allows you to work and play in a secure computing environment. Upgrading to the latest Java version improves the security of your system, as older versions do not include the latest security updates.</p>\r\n<p>Java allows you to play online games, chat with people around the world, calculate your mortgage interest, and view images in 3D, just to name a few.</p>', 'upload/2b7da3877b.38301065_901566153369137_4740422212811489280_n.jpg', 'test user', 'new', '2018-10-11 19:24:45'),
(16, 31, 'first post', ' <p>ddddd<span>industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'upload/05a70d612f.48428993_2076241979135280_4890745853423124480_n.jpg', 'aminul', 'ddd', '2018-12-25 15:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slogan`
--

CREATE TABLE `tbl_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slogan`
--

INSERT INTO `tbl_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Practice php website', 'learning and learning', 'upload/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'https://www.facebook.com/project', 'https://www.twitter.com/project', 'https://www.lnking.com/project', 'https://www.google.com/project');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(255) NOT NULL,
  `username` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70', '2018-09-23 06:08:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slogan`
--
ALTER TABLE `tbl_slogan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_slogan`
--
ALTER TABLE `tbl_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
