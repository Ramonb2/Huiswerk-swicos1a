-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 28 jan 2015 om 23:55
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boeken`
--

CREATE TABLE IF NOT EXISTS `boeken` (
  `ISBN` varchar(25) NOT NULL DEFAULT '',
  `naam` varchar(250) DEFAULT NULL,
  `Afbeelding` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `boeken`
--

INSERT INTO `boeken` (`ISBN`, `naam`, `Afbeelding`) VALUES
('8718531740105', '(ECK) SPL Licentie ICT', '<img width="100" height="120" />'),
('9789012584999', 'Basiscursus PHP 5.4 / druk 1', '<img src="afbeeldingen/php.jpg" width="100" height="120" />'),
('9789039527184', 'Databaseontwikkeling 4 Acces 2010', '<img src="afbeeldingen/data.jpg" width="100" height="120" />'),
('9789039527573', 'Aan de slag met Java', '<img src="afbeeldingen/java.jpg" width="100" height="120" />'),
('9789059405080', 'Handboek HTML5', '<img src="afbeeldingen/html.jpg" width="100" height="120" />'),
('9789059406148', 'Handboek Javascript en JQuery', '<img src="afbeeldingen/JJ.jpg" width="100" height="120" />'),
('9789402000382', '(ECK) Taalblokken 3 combipakket EN (mbo-4) A2/B1 boeken en studentlicentie 12 mnd ', '<img src="afbeeldingen/Nlwerkboek.jpg" width="100" height="120" />'),
('9789490013196', '(ECK) ViaStarttaal Online (incl. Examencoach Nederlands) Licentie 12 mnd', '<img src="afbeeldingen/NLO.jpg" width="100" height="120" />'),
('9789490998103', '(ECK) VIAWerkboek 3F Techniek', '<img src="afbeeldingen/Nlwerkboek.jpg" width="100" height="120" />'),
('97894909985090', '(ECK) VIAHandboek (incl. gratis digitaal component)', '<img src="afbeeldingen/NL.jpg" width="100" height="120" />'),
('9789490998899', '(ECK) Startrekenen 3F Leerwerkboek deel A+B', '<img src="afbeeldingen/Rek.jpg" width="100" height="120" />'),
('9789490998905', '(ECK) Startrekenen Online (incl. Examencoach rekenen) Licentie 12 mnd', '<img src="afbeeldingen/Reko.jpg" width="100" height="120" />');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `boeken`
--
ALTER TABLE `boeken`
 ADD PRIMARY KEY (`ISBN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
