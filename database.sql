-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Mar 04, 2015 alle 10:14
-- Versione del server: 5.5.41-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grandinetti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `colori_disponibili`
--

CREATE TABLE IF NOT EXISTS `colori_disponibili` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `codice_colore` int(11) NOT NULL,
  `codice_mattonella` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `colori_disponibili`
--

INSERT INTO `colori_disponibili` (`ID`, `codice_colore`, `codice_mattonella`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 2, 2),
(5, 3, 2),
(7, 2, 2),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `filename` text NOT NULL,
  `alias` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `colors`
--

INSERT INTO `colors` (`ID`, `name`, `filename`, `alias`) VALUES
(1, 'Nero Antracite', '83 nero antracite.jpg', 'nero'),
(2, 'Grigio Perla', '93 grigio perla.jpg', 'grigio'),
(3, 'Bianco', '78 bianco.jpg', 'bianco');

-- --------------------------------------------------------

--
-- Struttura della tabella `mattonelle`
--

CREATE TABLE IF NOT EXISTS `mattonelle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` text NOT NULL,
  `n_poligoni` int(11) NOT NULL,
  `svg` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `mattonelle`
--

INSERT INTO `mattonelle` (`ID`, `Nome`, `n_poligoni`, `svg`) VALUES
(1, 'Base', 2, 'bck_base.svg'),
(2, 'Base 2', 5, 'base_2.svg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
