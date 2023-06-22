-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jun 2023 um 02:50
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `rezeptdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kontakte`
--

CREATE TABLE `kontakte` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kontakte`
--

INSERT INTO `kontakte` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Delia', 'delia@gmail.com', 'Test', 'Das ist ein Test!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezepte`
--

CREATE TABLE `rezepte` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `beschreibung` text NOT NULL,
  `bewertung` float NOT NULL,
  `eiweiß` float NOT NULL,
  `fett` float NOT NULL,
  `energie` float NOT NULL,
  `kohlenhydrate` float NOT NULL,
  `bild` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `rezepte`
--

INSERT INTO `rezepte` (`id`, `name`, `beschreibung`, `bewertung`, `eiweiß`, `fett`, `energie`, `kohlenhydrate`, `bild`) VALUES
(1, 'Ramen', 'Ramen sind lecker', 4.5, 10.2, 5.8, 320, 25.3, 'ramen.jpg'),
(2, 'Katsu Curry', 'Katsu Curry ist lecker', 4.8, 12.5, 8.9, 450, 35.7, 'katsu_curry.jpg'),
(3, 'Spaghetti Carbonara', 'Spaghetti Carbonara ist lecker', 4.3, 15.7, 11.2, 380, 28.6, 'carbonara.jpg'),
(4, 'Brownies', 'Brownies sind lecker', 3.9, 7.6, 6.1, 280, 22.8, 'brownies.jpg'),
(5, 'Griechischer Salat', 'Griechischer Salat ist erfrischend', 4.2, 5.1, 3.9, 180, 12.4, 'griechischer_salat.jpg'),
(6, 'Lasagne', 'Lasagne ist ein klassisches italienisches Gericht', 4.7, 19.8, 14.3, 490, 35.2, 'lasagne.jpg'),
(7, 'Tacos', 'Tacos sind eine beliebte mexikanische Spezialität', 4.6, 12.3, 9.7, 360, 28.9, 'tacos.jpg'),
(8, 'Sushi', 'Sushi ist eine japanische Delikatesse', 4.9, 8.4, 4.2, 250, 21.1, 'sushi.jpg'),
(9, 'Burger', 'Ein saftiger Burger mit Pommes', 4.4, 15.1, 12.7, 420, 31.8, 'burger.jpg'),
(10, 'Pad Thai', 'Pad Thai ist ein thailändisches Nudelgericht', 4.6, 11.9, 8.3, 380, 27.5, 'pad_thai.jpg'),
(11, 'Pizza Margherita', 'Eine klassische Pizza mit Tomaten und Mozzarella', 4.5, 13.2, 9.6, 410, 32.7, 'pizza_margherita.jpg'),
(12, 'Ceasar Salad', 'Ceasar Salad ist ein beliebter Salat mit Hähnchen', 4.3, 8.7, 6.5, 290, 18.9, 'ceasar_salad.jpg'),
(13, 'Gulasch', 'Ein herzhaftes ungarisches Gulasch', 4.7, 17.5, 13.9, 480, 34.6, 'gulasch.jpg'),
(14, 'Fish and Chips', 'Fish and Chips sind ein englisches Traditionsgericht', 4.2, 16.8, 11.4, 420, 29.2, 'fish_and_chips.jpg'),
(15, 'Currywurst', 'Die Currywurst ist eine deutsche Spezialität', 4.1, 10.5, 8.1, 360, 26.7, 'currywurst.jpg'),
(16, 'Ratatouille', 'Ein mediterranes Gemüsegericht aus der Provence', 4.3, 6.9, 4.8, 220, 16.5, 'ratatouille.jpg'),
(17, 'Schnitzel', 'Ein klassisches Wiener Schnitzel', 4.6, 22.1, 16.3, 540, 39.8, 'schnitzel.jpg'),
(18, 'Cheesecake', 'Ein cremiger Käsekuchen mit Früchten', 4.8, 9.3, 6.7, 320, 25.6, 'cheesecake.jpg'),
(19, 'Chili con Carne', 'Ein würziges mexikanisches Gericht mit Hackfleisch', 4.4, 18.6, 13.2, 460, 33.9, 'chili_con_carne.jpg'),
(20, 'Pancakes', 'Fluffige Pancakes mit Ahornsirup', 4.7, 6.8, 4.5, 260, 20.3, 'pancakes.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kontakte`
--
ALTER TABLE `kontakte`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kontakte`
--
ALTER TABLE `kontakte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
