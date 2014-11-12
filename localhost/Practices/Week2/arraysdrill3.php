<? php

//Indexed array Creation with values
$indexArray = array(2, 4, 6);		//this is the oldest way
$indexArray2 = [2,4,6];				//this is probably the best option

//Indexed array creation (empty)
$array = array ();
$array = [];

//add to indexed array:
array_push($indexArray2, 8);
array_push($indexArray2, 10);
array_push($indexArray2, 12);

//Shorthand "array push"
$array[] = 2;
$array[] = 4;
$array[] = 6;

//-------
//Associative Arrays:

$assArray = array('name' => 'Russ', "age" => 29, 'gender' => 'male');


$assArray = [
	name => 'russ',
	gender => 'male',
	age => 29
	];

$assArray['name'] = "bob"; //changes associative element
$assArray['town'] = 'phoenix'; //creates a new array type.
