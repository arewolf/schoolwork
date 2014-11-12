<?php

// parent class monster>
// 	subclass monsters>
// 	hair color, kill type: bullet, steaks, fire, 
// 	warrior slays monsters,
// 	hero has energy, killing a monster lowers your energy by differnt values.

class Monster {
	private $hcolor;
	private $ktype;

	public function __construct($hcolor,$ktype){
		$this->hcolor=$hcolor;
		$this->ktype=$ktype;
	}

	public function getHcolor(){
		echo " has " . $this->hcolor . " hair";
	}

	public function getKtype(){
		echo " will die from " . $this->ktype . ".";
	}
}

class Frankenstein extends Monster {
	public function __construct($hcolor, $ktype, $kval){
		parent::__construct($hcolor, $ktype);
		$this->kval=$kval;
	}
}

class Vampire extends Monster {
	public function __construct($hcolor, $ktype, $kval){
		parent:: __construct($hcolor, $ktype);
		$this->kval=$kval;
	} 
}

class Wherewolf extends Monster {
	public function __construct($hcolor, $ktype, $kval){
		parent:: __construct($hcolor, $ktype);
		$this->kval=$kval;
	}
}

class Zombie extends Monster {
	public function __construct($hcolor, $ktype, $kval){
		parent:: __construct ($hcolor, $ktype);
		$this->kval=$kval;
	}
}

class Bogman extends Monster {
	public function __construct($hcolor, $ktype, $kval){
		parent:: __construct ($hcolor, $ktype);
		$this->kval=$kval;
	}
}

class Witch extends Monster {
	public function __construct($hcolor, $ktype, $kval){
		parent:: __construct ($hcolor, $ktype);
		$this->kval=$kval;
	}
}

class Warrior {
	private $hitPoints;
	public function __construct($hitPoints){
		$this->hitPoints=$hitPoints;
	}

	public function getPoints() {
		echo "Hero has " . $this->hitPoints . " hit-points left <br>";
	}

	public function slay($Monster) {
		if ($Monster->kval == -1){
			$this->hitPoints -= 1;
		}

		elseif ($Monster->kval == -2) {
			$this->hitPoints -= 2;
		}

		elseif ($Monster->kval == -3) {
			$this->hitPoints -= 3;
		}

		elseif ($Monster->kval == -4) {
			$this->hitPoints -= 4;
		}

		elseif ($Monster->kval == -5) {
			$this->hitPoints -= 5;
		}
	}
}

$frank = new Frankenstein("black","fire", -3);
$wendy = new Witch('grey','fire', -4);
$bud = new Bogman('green', 'round-up', -2);
$zed = new Zombie('brown', 'decapitation or fire', -1);
$will = new Wherewolf('brown','silver bullet', -4);
$victor = new Vampire ('black', 'steak to the heart or sun or maybe crosses', -5);
$hero = new Warrior(100);
$hero->getPoints();
$hero->slay($zed);
$hero->getPoints();
$hero->slay($frank);
$hero->getPoints();
$hero->slay($wendy);
$hero->getPoints();
$hero->slay($bud);
$hero->getPoints();
$hero->slay($victor);
$hero->getPoints();
$hero->slay($will);
$hero->getPoints();
$frank->getType();