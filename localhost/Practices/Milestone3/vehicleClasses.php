<?php
//vehicles, car lot, different vehicles:
//wash vehicles: 
//vehicles have size:
//you have soap amount:
//create 3 different types of vehicles, show how much soap you have after wash.

// 1. create vehicle class
// 2. create properties on vehicle, (size, isDirty)
// 3. create attendant class
// 4. add wash method to attendant which takes a vehicle, if isDirty, wash it and decrease soap amount by vehicle size (10%)
// 5. change isDirty to isClean if washed.



Class Vehicle {
	private $size;
	private $isDirty;

	function __construct (){
	
	}

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
	function __construct();
	$this->size = "small";
}


Class Medium extends Vehicle {
	function __construct();
	$this->size = "medium";
}


Class Large extends Vehicle {
	function __construct();
	$this->size = "large";
}

Class Attendant {
	private $soapAmount = 100;
	
	function __construct(){
		
	}

	public function wash($Vehicle) {
		if (getIsDirty()==true) {
			if (getSize() == "small") {
				$soapAmount -= 5;
			}

			elseif (getsize() == "medium") {
				$soapAmount -= 10;
			}

			elseif (getsize() == "large") {
				$soapAmount -= 15;
			}
		
		}

		else {
			$soapAmount = $soapAmount;
		}
	}
}

$mitch= new Attendant();
//echo $