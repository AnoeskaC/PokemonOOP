-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 16 apr 2018 om 018:59
-- Serverversie: 5.6.35
-- PHP-versie: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PokemonOOP`
--

CREATE DATABASE IF NOT EXISTS `PokemonOOP` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `PokemonOOP`;
--
-- Tabelstructuur voor tabel `pokemons`
--

CREATE TABLE IF NOT EXISTS `pokemons` (
  `pokemon_id` int(11) NOT NULL,
  `pokemon_Name` varchar(255) NOT NULL,
  `pokemon_EnergyType` varchar(255) NOT NULL,
  `pokemon_Attack` varchar(255) NOT NULL,
  `pokemon_Weakness` varchar(255) NOT NULL,
  `pokemon_Resistance` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pokemons`
--

INSERT INTO `pokemons` (`pokemon_id`, `pokemon_Name`, `pokemon_EnergyType`, `pokemon_Attack`, `pokemon_Weakness`, `pokemon_Resistance`) VALUES
(1, 'Pikachu', 'Lightning', 'Electric Ring, Pika Punch', 'Fire', 'Fighting'),
(2, 'Charmeleon', 'Fire', 'Head Butt, Flare', 'Water', 'Lightning');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`pokemon_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--


--
-- AUTO_INCREMENT voor een tabel `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `pokemon_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
