<?php

require_once ("productArray.php");
//$productArray = ['Mac', 'Windows', 'Linux'];

$valmenu ='';
foreach($productArray as $key => $val){
	$valmenu .= '<option value="' . $key .'">' . $val . '</option>';

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Site</title>
	<link rel="stylesheet" href="./css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>

<!--HEADER-->
<?php
require_once ("header.php");
?>
<!--HEADER-->
<main>
	<h1>Browse Products</h1>
	<form action = "products.php">
		Products:
		<select name ="product" required>
			<option value="">--Select a Product--</option>
			<?php echo $valmenu ?>
		</select>
		Quantity:
		<input type="text" name="number" title="enter a number" required>
		
		<button>Submit</button>
	</form>

</main>
	
<!--FOOTER-->	
<?php
require_once ("footer.php");
?>
<!--FOOTER-->
	
</body>
</html>
