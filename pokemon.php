<?php 
class Pokemon{
	
	public $name;
	public $type;
	public $hp;

	public function __construct($name, $type, $hp)
	{
		$this->name = $name;
		$this->nickname = $name;
		$this->type = $type;
		$this->hp = $hp;
	}

	public function Aanvallen($natuur, $points)
	{
		$returnbericht = null; // voor het geval dat je een bericht terug wilt zien.
		if (isset($this->Zwaktes[$natuur])) {
			$points *= $this->Zwaktes[$natuur];
			$returnbericht = 'Het werkt heel erg effectief!';
		}
		if (isset($this->weerstand[$natuur])) { // de weerstand van de pokemon
			$points -= $this->weerstand[$natuur];
			$returnbericht = 'Het is niet heel erg effectief.';
		}
		if ($points <= 0) { // in het geval het geen schade brengt.
			$points = 0;
			return 'De aanval had geen effect!';
		}
		$this->hp -= $points;
		if ($this->hp <= 0) { // als de hp op 0 is
			return $this->nickname. 'is verslagen';
		}
		if ($returnbericht = null) {
			return $returnbericht;
		}else{
			return $this->nickname.'zijn nieuwe HP is'.$this->hp; // returnt alleen als je pokemon niet verslagen is.
		}
	}

}
