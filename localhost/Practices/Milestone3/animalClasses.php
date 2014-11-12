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
	private $foodType;
	private $name;
	private $age;
	private $color;
	private $weight;

	function __construct($color, $name, $age, $weight){
		$this->foodType =null;
		$this->color = $color;
		$this->name = $name;
		$this->age = $age;
		$this->weight = $weight;
	}

	public function setWeight($weight) {
		$this->weight= $weight;
	}

	public function getWeight(){
		return $this->weight;
	}

	public function setFoodType($foodType) {
		$this->foodType = $foodType;
	}
	public function getFoodType(){
		return $this->foodType;
	}


	public function setName($name) {
		$this->name=$name;
	}
	public function getName() {
		return $this->name;
	}


	public function setColor($color) {
		$this->color = $color;
	}

	public function getColor() {
		return $this->color;
	}

	public function setAge($age) {
		$this->age = $age;
	}

	public function getAge() {
		return $this->age;
	}


}

$monkey = new Animal("brown", "George", 15, "500 lbs");
$cheetah = new Animal("spotted", "Chester", 43, "46 lbs");

?>
<h1>Monkey</h1>
<p>My name is : <?= $monkey->getName() ?></p>
<p>My age is : <?= $monkey->getAge() ?></p>
<p>My color is : <?= $monkey->getColor() ?></p>
<p>My Weight is : <?= $monkey->getWeight() ?></p>

<h1>Cheetah</h1>
<p>My name is : <?= $cheetah->getName() ?></p>
<p>My age is : <?= $cheetah->getAge() ?></p>
<p>My color is : <?= $cheetah->getColor() ?></p>
<p>My Weight is : <?= $cheetah->getWeight() ?></p>

<?php 
class carnivore extends Animal{
	private $hornType;
	private $foodType = 2;
	function __contruct($hornType) {
		parent ::__construct();

		$this->hornType=$hornType;
		$this->foodType=2;
	}
	
}
