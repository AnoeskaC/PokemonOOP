<?php 

class Pokemon{
	
	public $naam;
	public $bijnaam;
	public $type;
	public $hp;

	public function __construct($naam, $type, $hp)
	{
		$this->naam = $naam;
		$this->type = $type;
		$this->hp = $hp;
	}

	public function Ontvangen($type, $aanvalSchade)
	{
		$returnbericht = null; // voor het geval dat je een bericht terug wilt zien.
		if (isset($this->Zwaktes[$type])) {
			$aanvalSchade *= $this->Zwaktes[$type];
			$returnbericht = 'Het werkt heel erg effectief!';
		}
		if (isset($this->weerstand[$type])) { // de weerstand van de pokemon
			$aanvalSchade -= $this->weerstand[$type];
			$returnbericht = 'Het is niet heel erg effectief.';
		}
		if ($aanvalSchade <= 0) { // in het geval het geen schade brengt.
			$aanvalSchade = 0;
			return 'De aanval had geen effect!';
		}
		$this->hp -= $aanvalSchade;
		if ($this->hp <= 0) { // als de hp op 0 is
			return $this->naam. 'is verslagen';
		}
		if ($returnbericht = null) {
			return $returnbericht;
		}else{
			return $this->naam.' zijn nieuwe HP is'.$this->hp; // returnt alleen als je pokemon niet verslagen is.
		}
		
	}

	function Aanvallen($moveNaam,$ontvanger)
	{
		$aanvalSchade = $this->move[$moveNaam];
		$type = $this->type;
		return $ontvanger->Ontvangen($type, $aanvalSchade);

	}

	function setBijnaam($pokemonNaam, $bijnaam){
    	$pokemon[$pokemonNaam]->setBijnaam();
	}	

    function Bijnaam($bijnaam){
        $this->Bijnaam = $bijnaam;
    }

}
