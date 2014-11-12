<?php

class User{
	private $name;
	private $age;
	private $gender;

	public function __construct ($name, $age, $gender) {
		$this->name=$name;
		$this->age=$age;
		$this->gender=$gender;
	}

	public function getName(){
		echo $this->name;
	}

	public function getAge(){
		echo $this->age;
	} 

	public function getGender(){
		echo $this->gender;
	}

}

class Member extends User {
	
	public function __construct($name, $age, $gender, $type){
		parent::__construct($name, $age, $gender);
			$this->type=$type;
		
	}

	public function getType(){
		echo $this->type;
	}

}

$russ=new Member("russ", 29, "male", "member");
$russ->getName();
$russ->getAge();
$russ->getGender();
$russ->getType();