<?php

$house0 = ['name' => 'Smith', 'sq' => 1500, 'br' => 3, 'city' => 'Phoenix', 'type' => 'Stucco'];
$house1 = ['name' => 'Jomes', 'sq' => 1700, 'br' => 3, 'city' => 'Mesa', 'type' => 'Wood'];
$house2 = ['name' => 'Michaels', 'sq' => 1300, 'br' => 2, 'city' => 'Phoenix', 'type' => 'Brick'];
$house3 = ['name' => 'Roth', 'sq' => 2000, 'br' => 4, 'city' => 'Mesa', 'type' => 'Stucco'];
$house4 = ['name' => 'James', 'sq' => 2200, 'br' => 5, 'city' => 'Phoenix', 'type' => 'Stucco'];
$house5 = ['name' => 'Washington', 'sq' => 1700, 'br' => 3, 'city' => 'Tempe', 'type' => 'Straw'];
$mls = [$house0, $house1, $house2, $house3, $house4, $house5];


// while
// Output all homes

echo "<h1>While: All Homes</h1>";
$i = 0;
while ($i < count($mls)) {
	echo $mls[$i]['name'] . '<br>';
	$i++;
}


// for
// Output all homes with >3 br and city is phoenix
echo "<br><br><br><h1>For:Homes With >3 Br and City is Phx</h1>";
for ($i = 0; $i < count($mls); $i++) {
	if ($mls[$i]['br'] > 3 && $mls[$i]['city'] == 'Phoenix') {
		echo $mls[$i]['name'] . '<br>';
	}
}

// foreach
// Output all cities where type is wood
//foreach($mls as $value) gives you the value of the lock.
//foreach($mls as $key => $value) gives you keys's value.



echo "<br><br><br><h1>Foreach:All Cities Where Type Is Wood</h1>";
foreach ($mls as $key => $value) {
	if ($mls[$key]['type'] == 'Wood'){
	echo $mls[$key]['city'];
	}	
}


// while
// Output names of people in mesa with last name less than 8 chars
echo "<br><br><h1>While loops Mesa and < 8 Chars</h1>";

$i = 0;
while ($i < count($mls)){ 
	$i++;
	$name = $mls[$i]['name'];
	if (strlen ($name) < 8 && $mls[$i]['city'] == 'Mesa'){
		echo $mls[$i]['name']."<br>";
	}
}



// for 
// Output names of people who live in sq bedroom > 1500 and live in phoenix


echo "<br><br><h1>For: People in Phoenix > 1500 sq ft</h1>";
for ($i = 0; $i < count($mls); $i++) {
	if ($mls[$i]['sq'] > 1500 && $mls[$i]['city'] == 'Phoenix'){
		echo $mls[$i]['name'] . "<br>";
	}
}



// while 
// Output square footage of Roth and James house
echo "<br><br><h1>While: Sq Ft Roth and James</h1>";
$i = 0; 
while ($i < count($mls)){
	$i++;
	if ($mls[$i]['sq'] > 1900 && $mls[$i]['sq'] < 2300) {
		echo $mls[$i]['sq'] . "<br>";
	}
}