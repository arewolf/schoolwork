<?php

//constructors vs setters:


class Person {
	private $name;
	private $age;
	private $color;



	public function __construct(){
		$this->name="";
	}

//you have to do one or the other, you cannot have multiple consructors. These are examples of making 
//	properties optional. 

	public function __construct($name, $age=0,){
		$this->name=$name;
		$this->age=$age;
	}

//here is another way to make an optional value in the construct function.  The idea is that age could 
//be left out of a instantiation.



	public function setName (){
		$this->name=$name;
	}

}




$person = new Person (['name'=>'bob', 'age'=>29]);