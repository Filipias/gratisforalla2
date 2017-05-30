-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 30 maj 2017 kl 13:23
-- Serverversion: 10.1.21-MariaDB
-- PHP-version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `gratis4alla`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `descriptionSite` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `lista`
--

INSERT INTO `lista` (`id`, `firstname`, `description`, `email`, `phone`, `descriptionSite`, `username`, `password`, `rank`, `status`) VALUES
(9, '', '', '', '', '', 'Elias', 'elias', 2, ''),
(10, 'Kopp', 'Lagar trasiga koppas', 'kopp@laga.se', '0701337420', 'En stor trasig kopp med ett helt handtag', 'kopp', 'kopp', 0, 'Under granskning'),
(11, 'wad', 'awd', 'awdawd@awd.se', '131', 'awdawd', 'awd', 'awd', 0, 'Mottagen'),
(13, '', '', '', '', '', 'admin', 'awd', 1, ''),
(15, 'awdawdawd', 'awdawdawdawdawd', 'awdawd@awd.se', '077777777000', 'Stora feta kossor', 'kossa', 'mu', 0, 'Mottagen'),
(16, 'Bengts skogsborr', 'Borrar olja', 'olja@borr.se', '0761337420', 'En stor jÃ¤vla borr', 'borr', 'olja', 0, 'Mottagen');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `lista`
--
ALTER TABLE `lista`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
