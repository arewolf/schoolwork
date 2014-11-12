<?php



//callbacks:

//calling a function within a function:

$practiceArray = [1,2,3,4,5,6,7];
function cube($n){
	return $n * $n * $n;
}


$mapped = array_map("cube", $practiceArray);
print_r($mapped);


$practiceArray2 = ["test", "for", "strings", "in", "map"];


$mapped2 = array_map("strrev", $practiceArray2);
print_r($mapped2);



function amap($function, $array){
	$return = [];
	foreach($array as $value){
		$return[] = call_user_func($function, $value);
	}
	return $return;
}

$mapped3 =amap("strrev", $practiceArray2);
print_r($mapped3);



/*
array_walk
array_map,
array_filter,      these tools allow you to bypass loops.
array_reduce,
*/



$test = array_map(function ($i) {return strtoupper($i);}, $practiceArray2);
print_r($test);



function is_odd($i){
	return ($i % 2)==1;
}

$f = array_filter($practiceArray, 'is_odd');
echo "array is odd values:";
print_r($f);

//-------------------------------------------//


$products= ['mac', 'linux', 'windows'];

$options ='';

foreach($products as $product){
	$options .= "<options> $product </option>";
}

//the below works as well as the above, but could be resused, all you would have to change, if you had
//multiple options to propogate, is the $options2 piece:

function option($i) {
	return '<option>' . $i . '</option>';
}
$options2= array_map('option', $products);



//------------------------------------------//
echo "make map_filter";

function afilter($array, $function){
	$result2=[];
	foreach($array as $value){
		if (call_user_func($function, $value)){
			 
			$result2[] = $value;
		}
	}
	return $result2;
}

$practiceArray2 = [1,2,3,4,5];
$test2= afilter($practiceArray, 'is_odd');
print_r($test2);





//-----------------------------------------------------//

echo "array_reduce <br>";


function sum($carry, $item){
	$carry += $item;
	return $carry;
}

function concat($accum, $item){
	$accum .= $item;
	return $accum;
}

$sum = array_reduce($practiceArray2, 'sum', 1);
echo "here is my number: " . $sum;
$a="";
$longstring= "this is a long string for me to work with";
$longstring = array_reduce($a, 'concat');
	echo "array_reduce: concate <br>";
	echo $longstring;

function areduce($array, $function, $initial=null){
	foreach($array as $value){
		$initial = call_user_func_array($function, [$initial, $value]);
	}
	return $initial;
}

$aREDUCE = areduce($practiceArray2, 'sum');
echo "here is my number again: " . $aREDUCE;


