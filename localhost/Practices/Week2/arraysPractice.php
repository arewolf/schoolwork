<?php

//basic array:

$people = array("david", "john", "mark");

print_r($people);

//for empty array:
//$emptyArray = ();

//array push- adds element 

array_push($people, "Russ");
//or $people[]="Russ"; //bc undefined switch acts like a push.
print_r($people);

//pop, removes last or top of plates

array_pop($people);
print_r($people);

//switching elements from an array array, or you can push by using [] or adding the next unused index.

$people[2]="Russ";
print_r($people);

//associative arrays:  not indexed by number but by a key or paired value. array('keyname' =>'value')

$people = array('name' => 'Russ',
				'age' => '29',
				'gender' => 'male');
print_r($people);

//array of arrays, associative inside an index.

$people = array(
			['name'  => 'bob',
			'age'    => 13,
			'gender' => 'male'],
			['name'  => 'mark',
			'age'    => 14,
			'gender' => 'male'],
			['name'  => 'terry',
			'age'    => 15,
			'gender' => 'female']
		);

	print_r($people);

//print single item out of index
	print_r($people[0]);

//print name only, piece of index
	print_r($people[0]['name']);


//counts number of index elements in an array
echo count($people);

//in_array, searches in array
print_r(in_array ("nick", $people));
echo "------";

//shift or unshift.  Shift takes off the first index, unshift adds an element to the first index.
//this however is very 
// two ways to make arrays: array(); or just [].



?>



