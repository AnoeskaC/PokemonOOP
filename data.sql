CREATE DATABASE IF NOT EXISTS `PokemonOOP`;
USE `PokemonOOP`;


CREATE TABLE IF NOT EXISTS `pokemons` (
  `pokemon_id` int(11) NOT NULL,
  `pokemon_Name` varchar(60) NOT NULL,
  `pokemon_EnergyType` varchar(60) NOT NULL,
  `pokemon_Hitpoints` int(60) NOT NULL,
  `pokemon_Attack1` varchar(60) NOT NULL,
  `pokemon_Attack2` varchar(60) NOT NULL,
  `pokemon_Weakness` varchar(60) NOT NULL,
  `pokemon_WeaknessMultiplier` int(60) NOT NULL,
  `pokemon_Resistance` varchar(60) NOT NULL,
  `pokemon_ResistanceValues` int(60) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `pokemons` (`pokemon_id`, `pokemon_Name`, `pokemon_EnergyType`,`pokemon_Hitpoints`, `pokemon_Attack1`, `pokemon_Attack2`, `pokemon_Weakness`,`pokemon_WeaknessMultiplier`, `pokemon_Resistance`, `pokemon_ResistanceValues`) VALUES
(1, 'Pikachu', 'Lightning', 60, 'Electric Ring', 'Pika Punch', 'Fire', 1.5, 'Fighting', 20),
(2, 'Charmeleon', 'Fire', 60,'Head Butt', 'Flare', 'Water', 2, 'Lightning', 10);


ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`pokemon_id`);


ALTER TABLE `pokemons`
  MODIFY `pokemon_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
