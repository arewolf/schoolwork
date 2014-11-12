<?php

Class Animal {
	private $eat;
	private $weight;
	private $foodType;

	function __construct(){
		$this->eat;
		$this->weight;
		$this->$foodType;
	}

	public function setWeight($weight) {
		$this->weight= $weight;
	}

	public function getWeight(){
		return $this->weight;
	}

	public function setEat($eat) {
		$this->eat=$eat;
	}

	public function getEat() {
		return $this->eat;
	}
}

Class Carnivore extends Animal {
	function __construct() {
		
		$this->foodType =2;
		parent::__construct();	
	}
	
	public function getfoodType() {
		return $this->foodType;
	}
}

Class Herbivore extends Animal {
	function __construct() {
		$this->foodType =1;
		parent::__construct();	
	}
	public function getfoodType() {
		return $this->foodType;
	}
}

Class Omnivore extends Animal {
	function __construct() {
		$this->foodType = 3;
		parent::__construct();	
	}
	public function getFoodType() {
		return $this->foodType;
	}
}

Class Zookeeper {
	private $meatAmount;
	private $vegAmount;


	function __contruct() {
		$this->meatAmount = 10;
		$this->vegAmount= 10;
	}

	Public function feedAll ($animals){
		foreach ($animals as $animal) {
			$this -> feed($animal);
		}
	}

	public function feed($animal) {
		//feed 10% of weight

		$amount 

		if ($animal ->getFoodType() == 1) {
			//Feed meat
			$this->meatAmount = $this->meatAmount - 2;
		}
		
		elseif ($animal ->getFoodType() == 2) {
			//veg amount
			$this->vegAmount = $this->vegAmount - 2;

		}

		elseif ($animal ->getFoodType() == 3) {
			$this->vegAmount = $this->$vegAmount-1;
			$this->meatAmount = $this->meatAmount -1;
		}

		$animal->setWeight($animal->getWeight()+2);
	}	
	public function getFoodStatus(){
		return "meat: " . $this->meatAmount . " veggies: " .$this->vegAmount;
	}
}

$monkey = new Herbivore();
$bob = new Zookeeper();





echo $bob->getFoodStatus();
$bob->feed($monkey);
echo $bob->getFoodStatus();
echo lion->getWeight;





?>


