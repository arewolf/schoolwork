<?php

//$i = 0
//
//
//while ($i < 1000) {
//	echo "the definition of insanity";
//	$i++;
//}

//the for loop 3 segments: 
//1st is index or iterator
//2nd is condition that when false the loop will quit, similar to while loop
//3rd is what happens to $i.

$array = ['RockIt', 'Visitors', 'In', 'The', 'Back'];

for ($i=0; $i <= count($array); $i++) {
	echo '*' . $array [$i] . '*<br>';
}

