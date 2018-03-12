-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 12. Mrz 2018 um 14:59
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
(4, 602),
(3, 603),
(2, 604),
(2, 605),
(2, 606),
(1, 607),
(1, 608),
(1, 609);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `word` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `word_meaning` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `cards`
--

INSERT INTO `cards` (`id`, `created_date`, `word`, `word_meaning`) VALUES
(602, '2018-03-12 14:45:01', 'OOP', 'Objektorientierte Programmierung'),
(603, '2018-03-12 14:47:23', 'Composer', 'Dependency Manager for PHP'),
(604, '2018-03-12 14:47:56', 'NPM', 'Package manager for JavaScript'),
(605, '2018-03-12 14:50:29', 'Namespace', 'Namespaces sind abgetrennte Bereiche, in denen gewisse logische Dinge (in unserem Fall Klassen, Interfaces, Funktionen und Konstanten) leben können. Diese Bereiche sorgen für eine Aufteilung und Kapselung des Codes und verhindern Namenskonflikte.'),
(606, '2018-03-12 14:51:51', 'JSON', 'JavaScript Object Notation'),
(607, '2018-03-12 14:53:15', 'ACID', 'Es steht für englisch atomicity, consistency, isolation und durability. '),
(608, '2018-03-12 14:55:19', 'Webpack', 'webpack is a module bundler. Its main purpose is to bundle JavaScript files for usage in a browser'),
(609, '2018-03-12 14:57:26', 'WebSocket ', 'is a computer communications protocol, providing full-duplex communication channels over a single TCP connection. ');

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
(579, '2018-03-12 11:32:51', 'Card15', 'Card15'),
(580, '2018-03-12 11:32:54', 'Card15', 'Card15'),
(581, '2018-03-12 11:32:57', 'Card15', 'Card15');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=610;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
