// <?php

// //included from builder.php
// interface Foo {
// 	public function bar($p1);
// 	public function build_this_part($p2);
// }

// //like a class, only methods, properties stripped out.


// class Builder {
// 	//parts is an array of Foos
// 	public function buildIt($parts){
// 		foreach($parts as $part){
// 			$part->build_this_part(4);
// 		}
// 	}
// }

// class FooThing implements Foo {
// 	public function bar($p1){
// 		return $p1;
// 	}
// 	public function build_this_part($p2){
// 		echo "its built";
// 	}
// }

// $b = new Builder();
// $b->buildIt([new FooThing(), new FooThing()]);


interface Animal {
	public function feed($food);
}

class Tiger implements Animal {
	public $color="orange";
	public function feed($food){
		echo "i like meat!";
	}
}

class Monkey implements Animal {
	public function feed($food){
		echo "i like bananas";
	}
}

class Zoo {
	public function feed(Animal $animal){
		echo "feeding some animals";
		$animal->feed("steak");
	}
}

$z= new Zoo();
$a=new Zebra();
$z->feed($a);