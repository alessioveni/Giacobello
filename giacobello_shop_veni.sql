-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 31, 2021 alle 23:31
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.0

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
(1, 'photo1.jpeg', 'Reflex/Mirrorless', 2018, 'alessioveni', 'Scatto autunnale'),
(2, 'photo6.jpeg', 'Reflex/Mirrorless', 2019, 'alessioveni', 'Lago'),
(3, 'photo7.jpeg', 'Telefono', 2020, 'alessioveni', 'Ruscello'),
(4, 'photo2.jpeg', 'Telefono', 2012, 'fil', ''),
(5, 'photo8.jpeg', 'Reflex/Mirrorless', 2017, 'denii', 'Foto bella'),
(6, 'photo4.jpeg', 'Altro', 1999, 'barso', 'Ragazza');

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
(2, 'Molto documentato!');

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
('alessio1234', '81dc9bdb52d04dc20036dbd8313ed055'),
('alessio2', '21232f297a57a5a743894a0e4a801fc3'),
('alessioveni', '21232f297a57a5a743894a0e4a801fc3'),
('alliaj', 'f226ff3f6c88fa1a211afd1ce788e755'),
('alliajj', '21232f297a57a5a743894a0e4a801fc3'),
('barso', '21232f297a57a5a743894a0e4a801fc3'),
('denii', '5f4dcc3b5aa765d61d8327deb882cf99'),
('fil', '81dc9bdb52d04dc20036dbd8313ed055'),
('filippo', '827ccb0eea8a706c4c34a16891f84e7b'),
('francesca', '8f79a99d61ce12abc896f64f5955300e'),
('giacobello', '202cb962ac59075b964b07152d234b70'),
('gigi', '21232f297a57a5a743894a0e4a801fc3'),
('john', '21232f297a57a5a743894a0e4a801fc3'),
('randos', 'e4df00ac3b1b9fa77e4ebefd15a487bb'),
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
  MODIFY `codI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `recensione`
--
ALTER TABLE `recensione`
  MODIFY `codR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
