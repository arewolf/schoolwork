<?php

Class Animal {
	private $eat;
	private $weight;

	function __construct($eat, $weight){
		$this->eat = $eat;
		$this->weight = $weight;
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

$tiger = new Animal(2, "130lbs");



?>


<p>Tiger is <? echo $getWeight ?></p>