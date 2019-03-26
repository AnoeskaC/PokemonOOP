<?php 
class Pikachu extends Pokemon{

	// pikachu's gegevens en meer.

	public function __construct()
	{
		parent::__construct('Pikachu', 'Lightning', 60);

		//de pokemon zwaktes plus schade.
        $this->zwaktes['Fire'] = 1.5;

        //de pokemon weerstand plus de schade.
        $this->weerstand['Fight'] = 20;

        //de pokemon aanvallen.
        $this->move['Electric Ring'] = 50;
        $this->move['Pika Punch'] = 20;

        //speciale 
        $this->reflect = 0; // returned schade na aanval.
	}
	
}
