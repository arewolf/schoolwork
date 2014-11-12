<?php

include_once ("productArray.php");
$number = $_GET['number'];
$product_id = $_GET['product'];

if (!array_key_exists($product_id, $productArray)) {
	$output = "Error, Product Doesn't Exist.";
}	
else {
	$product = $productArray[$product_id];
	if ($number < 1) {
		$output = "You have to order at least 1" . " $product.";
	}
	elseif ($number == 1) {
		$output = "You want to order " . $number . " " . $product . " system.";
	}
	else {
		if ($number > 7 && $product == "Mac") {
			$output = "Sorry, but you cannot order over 7 Mac systems.";
		}
		else {
			$output = "You want to order " . $number . " " . $product . " systems.";
		} 
	}
}		

	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Site</title>
	<link rel="stylesheet" href="./css/styles.css">
	
</head>
<body>

<!--HEADER-->
	<?php
	require_once ("header.php");
	?>
<!--HEADER-->
<main>
	
	<h1><?php echo $output ?> </h1>
	
</main>
	
<!--FOOTER-->	
	<?php
	require_once ('footer.php');
	?>
<!--FOOTER-->
	
</body>
</html>