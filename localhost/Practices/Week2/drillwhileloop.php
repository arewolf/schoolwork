<?php

echo "<h1> While Loop </h1>";

$i = 33;
while ($i <= 1000) {
	echo $i;
	$i++;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1> For Loop </h1>"; 

$array = ["Pizza", "Sandwhiches", "Fruit", "Candy"];

for ($i = 0; $i < count($array); $i++) {
	echo $array[$i] . " ";
}

//$array2 = ["sugar", "salt", "pepper", "onion powder"];
//for ($i = 0)




//For-each Loop

$person = [
	'name' => 'Brad',
	'age' => 31, 
	'gender' => 'male'
	];

print_r ($person);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "<h1> Foreach over array </h1>"; 
foreach ($person as $anyvariableforvalue) {
	echo $anyvariableforvalue . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h1> Foreach with Key Pair </h1>";

foreach ($person as $key => $anyvariableforvalue) {
	echo $key . ": " . $anyvariableforvalue . "<br>";
}