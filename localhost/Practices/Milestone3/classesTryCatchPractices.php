<?php

class Vehicle
{
	public $color;

	public function __construct($color)
	{

		
		if (istype(Vehicle($color)) == 'string'){
				$this->color=$color;
		}else{
			throw new Exception("ERROR COLOR");
		}

		
	//learn: check if number here: use try catch, validate before you assign, stop garbage immediatly.
//weak on try catch, keep practicing these.

	}
}

class Motorcycle extends Vehicle
{

	public function __construct($color="black")
	{
		parent::__construct('Black');
	}
//this 

}

class Buses extends Vehicle
{


}

try {

	$car2=new Vehicle("brown");
	$car5= new Vehicle(5);
	$car1 = new Vehicle('white');
	$car3 = new Vehicle('black');
	$motorcycle = new Motorcycle();
}catch (Exception $e){
			echo "HEY!";
		}