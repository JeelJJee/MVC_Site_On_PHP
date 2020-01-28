-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2020 at 07:46 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `authorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` tinyint(4) NOT NULL COMMENT '1-cooking 2-science 3-computers 4-nature',
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `data`, `short_content`, `content`, `authorname`, `category`, `type`) VALUES
(1, 'Первая статья', '2019-12-21 11:44:46', 'Это первая статья, просто для примера.', 'Тут пусто', 'test', 1, 'Статья'),
(2, 'Первая статья', '2019-12-21 11:44:49', 'Это первая статья, просто для примера.', 'Тут пусто', 'Андрей', 2, 'Статья'),
(3, 'Третья Тест статья', '2020-01-21 14:52:21', 'You can see high use of cute fonts in different kids and girls themed graphics, websites or artworks. Yet cute fonts are not just childish and girlish. ', 'Cute fonts are usually fanciful, artistic and distracting because they call attention to themselves rather than to the message, yet they are very useful and always in demand because they can extol and glorify an artwork, especially if it is targeted for girls or kids.\r\n\r\nYou can see high use of cute fonts in different kids and girls themed graphics, websites or artworks. Yet cute fonts are not just childish and girlish. For example, if you like, it can also be used to represent the romance, say, in a card or handmade gift as long as it is appropriate with your taste. In fact, we find that a lot of really cute and feminine fonts have been used in wedding stuff like stationery, gifts, etc. Below are some stunning cute fonts we have discovered. please note that you need to buy a license to download and use these fonts.', 'Oleg', 3, 'news'),
(4, 'Четвертая тест статья', '2020-01-21 14:52:21', 'Brazil and Sao Paulo, one of the largest cities in Brazil, is considered to be the current center of inspiration for graffiti artists.', 'Graffiti is usually appeared as graphics or lettering scratched, scrawled, painted or marked in any manner on property. Graffiti has existed since very ancient times in Ancient Greece and the Roman Empire. In ancient Rome, people don’t have a photocopier or a fax machine or newspaper, and when you have a written message to let other people know, you scratched it on a wall. In modern times, however, graffiti is considered illegal in a lot of countries. But a country that with significant tradition in graffiti is Brazil and Sao Paulo, one of the largest cities in Brazil, is considered to be the current center of inspiration for graffiti artists.', 'Виктор', 4, 'news'),
(5, 'COMPUTERS ', '2020-01-26 18:54:39', 'Computers is cool', 'Computers is cool 1\r\nComputers is cool 2\r\nComputers is cool 3\r\nComputers is cool 4\r\nComputers is cool 5', 'Joe', 3, 'computers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
