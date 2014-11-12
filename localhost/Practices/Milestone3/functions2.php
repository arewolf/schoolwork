<?php


function add_homes($mls, $name, $city, $sq) {
	echo $name;

}

$mls=[];
$name = 'Smith House';
$city = 'Phoenix';
$sq = 2300;

add_homes($mls, 'Smith House', 'Phoenix', 2300);


$array = [
	'product'=> 'Russ',
	'number'=> 29,
];

foreach($array as $val){
	$val .= "<br> $val this is concatination!";
	echo $val;
}









?>



