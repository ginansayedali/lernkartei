-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 12. Mrz 2018 um 13:26
-- Server-Version: 5.7.21-0ubuntu0.16.04.1
-- PHP-Version: 7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lernkartei`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `box`
--

CREATE TABLE `box` (
  `box_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `box`
--

INSERT INTO `box` (`box_id`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `box_has_card`
--

CREATE TABLE `box_has_card` (
  `box` int(4) NOT NULL,
  `card` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `box_has_card`
--

INSERT INTO `box_has_card` (`box`, `card`) VALUES
(2, 580),
(1, 581),
(1, 582),
(1, 583),
(1, 584),
(1, 585),
(1, 586),
(1, 587),
(1, 588),
(1, 589),
(1, 590),
(1, 591),
(1, 592),
(1, 593),
(1, 594),
(1, 595),
(1, 596),
(1, 597),
(1, 598),
(1, 599),
(1, 600),
(1, 601);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `word` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `word_meaning` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `cards`
--

INSERT INTO `cards` (`id`, `created_date`, `word`, `word_meaning`) VALUES
(580, '2018-03-12 11:32:54', 'Card15', 'Card15'),
(581, '2018-03-12 11:32:57', 'Card15', 'Card15'),
(582, '2018-03-12 11:32:59', 'Card15', 'Card15'),
(583, '2018-03-12 11:33:01', 'Card15', 'Card15'),
(584, '2018-03-12 11:33:32', 'Card15', 'Card15'),
(585, '2018-03-12 11:33:47', 'Card15', 'Card15'),
(586, '2018-03-12 11:34:26', 'Card15', 'Card15'),
(587, '2018-03-12 11:36:15', 'Card15', 'Card15'),
(588, '2018-03-12 11:37:11', 'Card15', 'Card15'),
(589, '2018-03-12 11:37:45', 'Card15', 'Card15'),
(590, '2018-03-12 11:38:06', 'Card15', 'Card15'),
(591, '2018-03-12 11:38:28', 'Card15', 'Card15'),
(592, '2018-03-12 11:38:48', 'Card15', 'Card15'),
(593, '2018-03-12 11:39:26', 'Card15', 'Card15'),
(594, '2018-03-12 11:40:33', 'Card15', 'Card15'),
(595, '2018-03-12 11:40:41', 'Card15', 'Card15'),
(596, '2018-03-12 11:41:14', 'Card15', 'Card15'),
(597, '2018-03-12 11:41:24', 'Card15', 'Card15'),
(598, '2018-03-12 11:41:31', 'Card15', 'Card15'),
(599, '2018-03-12 11:41:38', 'Card15', 'Card15'),
(600, '2018-03-12 11:41:56', 'Card15', 'Card15'),
(601, '2018-03-12 11:53:03', 'Card15', 'Card15');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `game`
--

CREATE TABLE `game` (
  `player_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_boxes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `game`
--

INSERT INTO `game` (`player_name`, `number_of_boxes`) VALUES
('Ginan', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `learned_cards`
--

CREATE TABLE `learned_cards` (
  `id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `word` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `word_meaning` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `learned_cards`
--

INSERT INTO `learned_cards` (`id`, `created_date`, `word`, `word_meaning`) VALUES
(565, '2018-03-12 11:26:37', 'Card1', 'Card1'),
(566, '2018-03-12 11:26:45', 'Card2', 'Card2'),
(567, '2018-03-12 11:26:51', 'Card3', 'Card3'),
(568, '2018-03-12 11:27:01', 'Card4', 'Card4'),
(569, '2018-03-12 11:27:11', 'Card5', 'Card5'),
(570, '2018-03-12 11:27:34', 'Card5', 'Card5'),
(571, '2018-03-12 11:27:44', 'Card7', 'Card7'),
(572, '2018-03-12 11:29:26', 'Card8', 'Card8'),
(573, '2018-03-12 11:29:41', 'Card9', 'Card9'),
(574, '2018-03-12 11:31:34', 'Card10', 'Card10'),
(575, '2018-03-12 11:31:47', 'Card11', 'Card11'),
(576, '2018-03-12 11:32:01', 'Card11', 'Card11'),
(577, '2018-03-12 11:32:17', 'Card11', 'Card11'),
(578, '2018-03-12 11:32:37', 'Card11', 'Card11'),
(579, '2018-03-12 11:32:51', 'Card15', 'Card15');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@lernkartei');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`box_id`);

--
-- Indizes für die Tabelle `box_has_card`
--
ALTER TABLE `box_has_card`
  ADD PRIMARY KEY (`box`,`card`),
  ADD KEY `box_cards` (`card`);

--
-- Indizes für die Tabelle `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `learned_cards`
--
ALTER TABLE `learned_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=602;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
