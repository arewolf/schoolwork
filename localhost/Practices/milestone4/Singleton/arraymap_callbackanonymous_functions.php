$mysql = new mysqli('localhost', 'username', 'password', 'database');

if ($mysql->connect_errno){
	echo "Error number" . $mysqli->connect_errno . "(" . $mysqli->connect_error;
}

//errors, must be added.

$sql = "SELECT * FROM table;";

if(! $result= $mysqli->query($sql)){
	echo "error!";
}
return $results;


INTERFACES:
	useful: when things are typed: meaning the casting is set. used more for javascript and others than php. a class with no 
	implementation, implies a type of thing.


Interface Valthing {
	public function val(){

	}
}	

Class Number implements/extends Valthing{
	public function val(){
	return $val;
	}

}

function add(Valthing $a, Valthing $b)


ABSTRACT CLASS:
  halfway between an interface and halfway between class.

 classes are about code reuse, interfaces are about defining what something looks like.
 abstract classes are a bit of both.


 static classes:
 perhaps like a math class--- all you need are the use of class methods without making a new class.



 Callbacks:


 a way to pass a function into another function.  Javascript, this is everywhere.  Its a way of making functions more powerful by not just including the data but also a function that can be applied to them.

These are:
 array_map
 array_reduce
 sort

Anonymous FUNCTIONS:

Anonymous functions are simply functions without a name.
echo preg_replace_callback('~-([a-z])~', function($match) {
	return strtoupper($match[[1]]);},'hellow-world');


must be decared with a variable, or passed into another function, otherwise without a name there is no way to use it.


}

<?php
//---------------------------------------------------------1st method---------------------------

$array = [1,2,3,4,5,6];

$array2 = array_map(function($n){return $n * $n;}, $array);

//-----------------------------------------------------2nd method-----------------------------------
$af= function($n){
	return $n * $n;
};  

$array3= array_map($af, $array);
//because this is an assignment: it must end with a semicolon.
//-------------------------------------3rd method (non anonymous because function is named------------------------------

function sq($n){
	return $n * $n;
}

$array4 = array_map('sq', $array);

//-----------------------------------------------------------------------------------------------------------

















