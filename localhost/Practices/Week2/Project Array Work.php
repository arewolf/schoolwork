<?php


$results = ['product'=>'Windows', 'number' => 1 ];
$number = $results['number'];
$productArray = ['Mac', 'Windows', 'Linux'];





$i=0;
while ($i < count($productArray)) {
	if ($results['product'] != $productArray[$i]) {
		echo "ERROR";
	}
	else {
		echo "OK!";
	}			
 	$i++;
	  
} 	


