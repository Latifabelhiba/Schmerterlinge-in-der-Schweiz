-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 24. Apr 2021 um 14:29
-- Server-Version: 5.7.32
-- PHP-Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `schmetterlinge`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `Id` int(11) NOT NULL,
  `Vorname` varchar(100) NOT NULL,
  `Nachname` varchar(100) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `SName` varchar(100) NOT NULL,
  `SBeschreibung` varchar(500) NOT NULL,
  `SOrt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`Id`, `Vorname`, `Nachname`, `EMail`, `SName`, `SBeschreibung`, `SOrt`) VALUES
(1, 'Latifa', 'Belhiba', 'belhiball@bzz.ch', 'Distelfalter', 'sehr schön', 'Zürich');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
