<?php

//making a blank array and pushing indexes to it:
$array = [];
$array['name'] = 'Russ';
$array['age'] = 29;
$array['gender']= 'male';
print_r($array);

//calling name,age,gender from the array:

print $array['name'] . "<br>";
print $array ['age'] . "<br>";
print $array ['gender'] . "<br>";


//loops: for

echo "<br><br>FOR Ten Times Tables <br><br><br>";
for($i=0; $i <= 10; $i++) {
	echo $i . " Times Ten is: " . $i*10 . "<br><br>";
}

//loops: while

echo "<br><br>WHILE Eleven Times Tables <br><br><br>";

$s=0;
while ($s <= 10) {
	echo $s . " Times Eleven Is: " . $s*11 . "<br><br>";
	$s++;
}

//loops: foreach

echo "<br><br>FOREACH<br>";

foreach ($array as $value) {
	print $value . "<br><br>";
}

foreach ($array as $key => $value) {
	print $key . " : " . $value . "<br><br>";
}

$array['type'] = 'student';

foreach ($array as $key => $value) {
	print $key . " : " . $value . "<br>";

}

$arrayIndex = ['Russ','hates', 'the', 'cats'];
$arrayIndex['monkey'];

print_r($arrayIndex);

