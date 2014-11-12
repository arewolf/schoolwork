<?php 
Class Vehicle {
	private $size;
	private $isDirty;

	public function setIsDirty($isDirty){
		$this->isDirty=$isDirty;
	}

	public function getIsDirty(){
		return $this->isDirty;
	}

	public function setSize($size){
		$this->size= $size;
	}

	public function getSize(){
		return $this->size;
	}



}


Class Small extends Vehicle {
	function __construct(){
		$this->setSize("small");
	}

}


Class Medium extends Vehicle {
	function __construct(){
	$this->setSize("medium");
	}

}


Class Large extends Vehicle {
	function __construct(){
	$this->setSize("large");
	}

}

Class Attendant {
	private $soapAmount = 100;
	
	function __construct(){
		
	}

	public function wash($Vehicle) {
		if ($Vehicle->getIsDirty()==true) {
			if ($Vehicle->getSize() == "small") {
				$this->soapAmount -= 5;
				
			}

			elseif ($Vehicle->getsize() == "medium") {
				$this->soapAmount -= 10;
				
			}

			elseif ($Vehicle->getsize() == "large") {
				$this->soapAmount -= 15;
				
			
			}
		
			$Vehicle->setIsDirty(false);
		}


	}

	public function getSoapAmount(){
		return $this->soapAmount;
	}
}

$mitch= new Attendant();
echo $mitch->getSoapAmount();
echo "<br>";
$smallCar = new Small();
$smallCar->setIsDirty(true);
$largeCar = new Large();
$largeCar->setIsDirty(false);
$largeCar2 = new Large();
$largeCar2->setIsDirty(true);


$mitch->wash($smallCar);
$mitch->wash($largeCar);
$mitch->wash($largeCar2);
$mitch->wash($largeCar2);
$mitch->wash($largeCar);

echo "Soap Left:". $mitch->getSoapAmount();



//homework:

parent class monster>
	subclass monsters>
	hair color, kill type: bullet, steaks, fire, 
	warrior slays monsters, steaks bullets 
	hero has energy, killing a monster lowers your energy by differnt values.