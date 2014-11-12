<?php
// //php object orientation milestone 3:
// //mostly just sudo code, but this is the rough sketch for the project.


// Animal lion = new Animal ();
// Animal zebra = new Animal ();
// Animal bear = new Animal ();


// lion.foodType = carnivore;
// zebra.foodType = herbivore;
// bear.foodType = omnivore;




// Array Animals = [lion, zebra, bear];

// zooKeeper bob = new zooKeeper();
// bob.setMeat(10);
// bob.setVeggies(10);



// foreach animal in animals {
// 	bob.feed(animal);
// 	print bob.getFoodStatus();
// }


// ///output
// meat  8
// veg   10

// m 8
// veg 8

// m 7 
// v 7

// m=1 v=2 o=3
// ///////////////////////////








Class Animal {
	private $foodtype = '';
	private $name ='';
	private $age = '';

	function __construct($foodType, $color, $age){
		$this->foodType = $foodType;
		$this->color = $color;
		$this->name = null;
		$this->age = $age;
	}

	public function setFoodType($foodType) {
		$this->foodType = $foodType;
	}
	public function getFoodType($foodType){
		return $this->foodType;
	}


	public function setName($name) {
		$this->name=$name;
	}
	public function getName($name) {
		return $this->name;
	}


	public function setColor($color) {
		$this->color = $color;
	}

	public function getName($color) {
		return $this->color;
	}

}

$monkey = new Animal(3, "brown", 15);
<p>My name is : <?= $monkey->getName() ?></p><br>
<p>My age is : <?= $monkey->getAge() ?></p><br>
<p>My color is : <?= $monkey->getcolor() ?></p>

