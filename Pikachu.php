<?php 
class Pikachu extends Pokemon{

	public function __construct()
	{
		parent::__construct('Pikachu', EnergyType::LIGHTNING, '60');
	}
	
}