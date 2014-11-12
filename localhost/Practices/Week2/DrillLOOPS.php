<?php

echo "<h1> while </h1>";

$i = 2;

while ($i < 10) {
	$i++;
	echo "$i";
}



echo "<br><br><h1>for</h1>";

for ($i = 0; $i < 10; $i++) {
	echo $i;
}


echo "<br><br><h1>foreach</h1>";

$array = ["name" => 'Russ', "age" => "29"];

foreach($array as $key => $value) {
	echo "<br>" . "$key" . ":" . "$value";
}




echo "<br><br><h1>PRACTICE</h1>";

$numbers = [12, 23, 345, 567, 78, 34, 23, 456, 687];

foreach ($numbers as $val) {
	if ($val > 40){
		echo "<br>" . $val;
		continue;
	}
}

echo "<br><br><br><h1> Multidimensional Arrays </h1>";

$person0 = ["name" => "Russ", "age" => 29];
$person1 = ["name" => "Tuss", "age" => 28];
$person2 = ["name" => "Suss", "age" => 27];

$people = [$person0, $person1, $person2];

foreach ($people as $person) {
	echo $person['name'] . '<br>';
}

echo "<br><br><br><h1>Continued Practice</h1>";

$color0 = ["primary" => "red", "secondary" => "yellow"];
$color1 = ["primary" => "blue", "secondary" => "yellow"];
$color2 = ["primary" => "yellow", "secondary" => "green"];

$blend = [$color0, $color1, $color2];

foreach ($blend as $color) {
	echo "<br>" . $color["primary"] . ":" . $color["secondary"];
}



//echo "<br><h1>Home Problem</h1>";
//$i = 0;
//while ($1 < count ($sml)) {
//	echo $mls[$i]['name'] . '<br>';
//}