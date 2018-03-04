-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 02. Mrz 2018 um 16:29
-- Server-Version: 5.7.21-0ubuntu0.16.04.1
-- PHP-Version: 5.6.33-1+ubuntu16.04.1+deb.sury.org+1

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
(1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `box_has_card`
--

CREATE TABLE `box_has_card` (
  `box` int(4) NOT NULL,
  `card` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `box_has_card`
--

INSERT INTO `box_has_card` (`box`, `card`) VALUES
(1, 93),
(2, 94),
(1, 95),
(2, 96),
(1, 97),
(2, 98);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `word` varchar(50) NOT NULL,
  `word_meaning` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `cards`
--

INSERT INTO `cards` (`id`, `word`, `word_meaning`) VALUES
(93, 'OOP', 'Objektorientierte Programmierung'),
(94, 'OOP', 'Objektorientierte Programmierung'),
(95, 'OOP', 'Objektorientierte Programmierung'),
(96, 'OOP', 'Objektorientierte Programmierung'),
(97, 'OOP', 'Objektorientierte Programmierung'),
(98, 'OOP', 'Objektorientierte Programmierung');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `box_has_card`
--
ALTER TABLE `box_has_card`
  ADD CONSTRAINT `box_cards` FOREIGN KEY (`card`) REFERENCES `cards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
