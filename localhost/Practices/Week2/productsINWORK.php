<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Site</title>
	<link rel="stylesheet" href="./css/styles.css">
	<?php

		
		include_once ("productArray.php");
		$results= $_GET;
		$number = $results['number'];
		$product = $results['products'];
		//print_r($results);
// $results = ['product'=>'Windows', 'number' => 1 ]
//$productArray = ['Mac', 'Windows', 'Linux'];
			//checks for product
			
			// $i=0;
			// while ($i < count($productArray)) {
			// 	if ($results['products'] != $productArray[$i]) {
			// 		$return = "ERROR";
			// 		$i++;
			// 	}
			
		
			//if ($results['products'] != $productArray[0] && $results['products'] != $productArray[1] && $results['products'] != $productArray[2]) {
			//	$return = "Error, Product Doesn't Exist";
			//}			
		
			//elseif (is_int($number) != true) {
			//	$return = "Error, Please Enter A Valid Quantity";
			//}

			else {
				//if ($product == "--Select a Product--") {
				//	$return = "You Must Select a Product";
				//}

				if ($number == 1) {
					$return = "You want to order " . $number . " " . $product . " system.";
				}

				elseif ($number > 7) {
					$return = "You can't order more than 7 " . $product . " systems.";
				}
				else {
					$return = "You want to order " . $number . " " . $product . " systems.";
				} 
			}

			
		
	
	?>
</head>
<body>

<!--HEADER-->
	<?php
	require_once ("header.php");
	?>
<!--HEADER-->
<main>
	
	<h1><?php echo $return ?> </h1>
	
</main>
	
<!--FOOTER-->	
	<?php
	require_once ('footer.php');
	?>
<!--FOOTER-->
	
</body>
</html>