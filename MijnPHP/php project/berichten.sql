-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 11 jan 2015 om 23:06
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `gastenboek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `berichten`
--

CREATE TABLE IF NOT EXISTS `berichten` (
`id` int(11) NOT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `bericht` tinytext,
  `datum` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `berichten`
--

INSERT INTO `berichten` (`id`, `naam`, `bericht`, `datum`) VALUES
(1, 'Ramon', 'moi eem kiijke of t werkt', '2015-01-11 21:34:58'),
(19, 'Ramon1', 'moi eem kiijke of t werkt1', '2015-01-11 21:34:58'),
(20, '', '', '2015-01-11 23:02:01'),
(21, '', '', '2015-01-11 23:03:27'),
(22, 'Ramon', 'Hallo', '2015-01-11 23:03:36'),
(23, 'Ramon', 'Hallo', '2015-01-11 23:05:12');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `berichten`
--
ALTER TABLE `berichten`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `berichten`
--
ALTER TABLE `berichten`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
