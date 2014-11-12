<?php

class Vehicles
{
	public $color;

	public function __construct($color)
	{
		
		if (is_int($color)){
			throw new Exception("some message");
		}
		$this->color=$color;
	

	}

}

class Motorcycle extends Vehicles
{
	
	public function __construct(){
		parent::__construct("black");

	}


}

$mc = new Motorcycle();
try{
	$mc2= new Vehicles(12);
}
catch (Exception $e){
	echo $e->getMessage();
}



