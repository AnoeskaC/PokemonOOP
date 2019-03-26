<?php 
class Charmeleon extends Pokemon{

	public function __construct()
	{
		parent::__construct('Clarmeleon', 'Fire', '60');

	//de pokemon zwaktes
        $this->zwaktes['Water'] = 2;

        //de pokemon weerstand
        $this->weerstand['Lightning'] = 10;

        //de pokemon aanvallen
        $this->move['Head Butt'] = 10;
        $this->move['Flare'] = 30;

        //speciale 
        $this->reflect = 0; // returned schade na aanval.
	}
	
}