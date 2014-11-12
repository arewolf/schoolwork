<?php

include_once ("math.php");
//define a function first by putting "function" then the function name, then the parameters.  After parameters you can define what you want to do with the parameters.

// function add($a, $b) {
// 	return $a + $b;
// }

// function multiply($a, $b) {
// 	return $a * $b;
// }

//slightly harder examples with logic:
//$a = 7;

//function is_even($n){
//	if ($n % 2 == 0){
//		return true;
//	} 
//	else {
//		return false;
//	} 
//}

//or 

// function is_even($n) {
// 	return ($n % 2 == 0)? true : false;
// }

//shorter, and since return is 0 or 1, false or true:
// function is_even($n) {
// 	return ($n % 2 == 0);
// }


//reversal of the is even code.

//function is_odd($n) {
//	return !is_even($n);
//}


//recursive program:

function addr($a, $b) {
	if ($a == 0) {
		return $b;
	} else {
		return 1 + addr($a-1,$b);
	}
	
}

//not recursive, another way of iterating through the system.

function addl ($a, $b) {
	$sum = $b;
	while ($a >= 0){
		$sum++;
		$a--;
	}
	return $sum;
}


// function length($array) {
// 	return count($array);
// }
// 	$array = [1,2,3,4,5,6,7,8,9];
// 	echo length($array);


function length2($array2) {
	array_push($array2, "davidcopperfieldsmellsshoes");
	$test = array_search("davidcopperfieldsmellsshoes", $array2);
	return $test;
}

$array2 = [1,2,3,4,5,6,7,8,9];
echo "HERE" . length2($array2) . "<br>";



// function lengthloop($array3) {
// 	$s=0;
// 	foreach ($array3 as $value) {
// 		$s++;
// 	}
// 	return $s;
// }

function length_loops($array4) {
	$s=0;
	foreach ($array4 as $value) {
		$s++;
	}
	return $s;
}


//add ages of people:



// function add_age($people) {
// 	$ages = 0;
// 	foreach ($people as $person) {
// 		$ages += $person['age'];

// 	}
// 	return $ages;
// }	



// function add_age($people) {
// 	$ages = 0;
// 	foreach ($people as $person) {
// 		$ages += $person['age'];
// 	}
// 	return $ages;
// }

// $people = [['name'=>'bob','age' => 34],	['name' => 'max', 'age' => 20]];
// echo "<br> AGES " . add_age($people);
//function that given a string and character makes an array of all the occurances.
 
$string = "zabcadefgacbefa";
// $array = array();
// function string_occ($string, $c) {
// 	$array = strpos($string, 'a');
// 	return $array; 
// }

// echo "STRPOS " . string_occ($string);


function find_char_positions($string, $char) {
	$poses=[];
	$start=0;
	while (($pos = strpos($string, $char, $start)) !== false) {
		$poses[] = $pos;
		$start = $pos + 1;
	}
	return $poses;
}

echo "positions <br>";
print_r(find_char_positions($string, "a"));






determine if string is paladrome.  



//$array4 = [1,2,3,4,5,6];
//echo "<br> LOOPS " . length_loops($array4);




// echo "<br>";
// echo addr(3,4);
// echo "<br><br><br><br>";

// //list of checks:
// echo add(3,4);
// echo "<br>";
// echo multiply(3,4);
// echo "<br>";
// echo multiply("tree", "three");
// echo "<br>";
// echo is_even(502);
// echo "<br>";
// echo is_even(501);
// echo "<br>";
// echo is_even(504);
// echo "<br>";
// echo multiple_5(502);
// echo "<br>";
// echo multiple_5(510);
// echo "<br>";
// echo multiple_5(505);
// echo "<br>";
// echo "<br>";
// echo "<br>";



