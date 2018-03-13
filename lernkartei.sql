-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2018 at 04:49 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lernkartei`
--

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `box_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`box_id`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `box_has_card`
--

CREATE TABLE `box_has_card` (
  `box` int(4) NOT NULL,
  `card` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `box_has_card`
--

INSERT INTO `box_has_card` (`box`, `card`) VALUES
(4, 602),
(5, 603),
(2, 604),
(3, 605),
(3, 606),
(2, 607),
(2, 608),
(2, 609),
(1, 648);

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `question` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('text','image') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `created_date`, `question`, `answer`, `type`) VALUES
(602, '2018-03-12 14:45:01', 'OOP', 'Objektorientierte Programmierung', 'text'),
(603, '2018-03-12 14:47:23', 'Composer', 'Dependency Manager for PHP', 'text'),
(604, '2018-03-12 14:47:56', 'NPM', 'Package manager for JavaScript', 'text'),
(605, '2018-03-12 14:50:29', 'Namespace', 'Namespaces sind abgetrennte Bereiche, in denen gewisse logische Dinge (in unserem Fall Klassen, Interfaces, Funktionen und Konstanten) leben können. Diese Bereiche sorgen für eine Aufteilung und Kapselung des Codes und verhindern Namenskonflikte.', 'text'),
(606, '2018-03-12 14:51:51', 'JSON', 'JavaScript Object Notation', 'text'),
(607, '2018-03-12 14:53:15', 'ACID', 'Es steht für englisch atomicity, consistency, isolation und durability. ', 'text'),
(608, '2018-03-12 14:55:19', 'Webpack', 'webpack is a module bundler. Its main purpose is to bundle JavaScript files for usage in a browser', 'text'),
(609, '2018-03-12 14:57:26', 'WebSocket ', 'is a computer communications protocol, providing full-duplex communication channels over a single TCP connection. ', 'text'),
(648, '2018-03-13 13:46:49', 'Card from TextCard class', 'Card from TextCard class', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `player_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_boxes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`player_name`, `number_of_boxes`) VALUES
('Ginan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `learned_cards`
--

CREATE TABLE `learned_cards` (
  `id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `question` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('text','image') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `learned_cards`
--

INSERT INTO `learned_cards` (`id`, `created_date`, `question`, `answer`, `type`) VALUES
(621, '2018-03-13 10:28:19', 'Card', 'Card', 'text'),
(622, '2018-03-13 10:48:12', 'Card', 'Card', 'text'),
(623, '2018-03-13 11:57:38', 'Card', 'Card', 'text'),
(624, '2018-03-13 11:57:51', 'Card', 'Card', 'text'),
(625, '2018-03-13 12:06:23', 'Card', 'Card', 'text'),
(626, '2018-03-13 12:06:27', 'Card', 'Card', 'text'),
(627, '2018-03-13 12:06:29', 'Card', 'Card', 'text'),
(628, '2018-03-13 12:06:30', 'Card', 'Card', 'text'),
(629, '2018-03-13 12:06:31', 'Card', 'Card', 'text'),
(630, '2018-03-13 12:06:32', 'Card', 'Card', 'text'),
(631, '2018-03-13 12:06:32', 'Card', 'Card', 'text'),
(632, '2018-03-13 12:06:34', 'Card', 'Card', 'text'),
(633, '2018-03-13 12:06:35', 'Card', 'Card', 'text'),
(634, '2018-03-13 12:06:36', 'Card', 'Card', 'text'),
(635, '2018-03-13 12:06:37', 'Card', 'Card', 'text'),
(636, '2018-03-13 12:42:41', 'Card', 'Card', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@lernkartei');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `box_has_card`
--
ALTER TABLE `box_has_card`
  ADD PRIMARY KEY (`box`,`card`),
  ADD KEY `box_cards` (`card`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learned_cards`
--
ALTER TABLE `learned_cards`
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
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=649;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
