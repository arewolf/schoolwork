<?php

//try to break this down into small steps in english that can be tackled.  

class Car{
	$size;
	function getSize(){
		return $this->size;
	}
}

class Attendant{
	$soapInvo;

	function calcSoap($size){
		return $size * .1;
	}
	function washCar($car){
		//figure out size of car
		$size=$car->getSize();
		
		//calc soap to be used:
		$used_soap = $this->calcSoap($size);

		//do we have enough soap for the car?
		if($this->calcSoap($size) <= $this->soapInvo){
			$car->setWashed(true);
			$this->soapInvo-=$used_soap;
		}
		//if so, 
			//wash the car
		//otherwise 
			//don't wash the car

		# code...
		else {
			$car->setWashed(false);
		}
}





