-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 14, 2021 alle 22:02
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giacobello_shop_veni`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `immagine`
--

CREATE TABLE `immagine` (
  `codI` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `tipologia` char(20) NOT NULL,
  `anno` int(4) NOT NULL,
  `autore` char(100) NOT NULL,
  `descrizione` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immagine`
--

INSERT INTO `immagine` (`codI`, `filename`, `tipologia`, `anno`, `autore`, `descrizione`) VALUES
(1, 'f1.jpeg', 'Reflex/Mirrorless', 2020, 'alessioveni', 'Purple'),
(2, 'f2.jpg', 'Reflex/Mirrorless', 2019, 'fil', 'Venezia'),
(3, 'f3.jpg', 'Reflex/Mirrorless', 2019, 'fil', 'Venezia'),
(4, 'f4.jpg', 'Altro', 2019, 'alessioveni', 'Munich'),
(5, 'f5.jpg', 'Altro', 2019, 'alessioveni', 'Munich'),
(6, 'f6.jpg', 'Reflex/Mirrorless', 2020, 'simone', 'Monte Grappa'),
(7, 'f7.jpg', 'Telefono', 2018, 'alessioveni', 'Sunset'),
(8, 'f8.jpg', 'Altro', 2014, 'denii', 'Adamello'),
(9, 'f9.jpg', 'Telefono', 2019, 'alessioveni2002', 'red');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensione`
--

CREATE TABLE `recensione` (
  `codR` int(11) NOT NULL,
  `descrizione` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `recensione`
--

INSERT INTO `recensione` (`codR`, `descrizione`) VALUES
(1, 'Bel sito'),
(2, 'Molto documentato!'),
(3, 'Interessante!');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `username` char(21) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`username`, `password`) VALUES
('alessioveni', '21232f297a57a5a743894a0e4a801fc3'),
('alessioveni2002', '21232f297a57a5a743894a0e4a801fc3'),
('denii', '5f4dcc3b5aa765d61d8327deb882cf99'),
('fil', '81dc9bdb52d04dc20036dbd8313ed055'),
('simone', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `immagine`
--
ALTER TABLE `immagine`
  ADD PRIMARY KEY (`codI`);

--
-- Indici per le tabelle `recensione`
--
ALTER TABLE `recensione`
  ADD PRIMARY KEY (`codR`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `immagine`
--
ALTER TABLE `immagine`
  MODIFY `codI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `recensione`
--
ALTER TABLE `recensione`
  MODIFY `codR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
