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

	<h1>Products</h1>

	<h3><a href="products.php?value=mac">Mac</a></h3>
	<h3><a href="products.php?value=windows" >Windows</a></h3>
	<h3><a href="products.php?value=linux">Linux</a></h3>

	
<!--FOOTER-->	
	<?php
	require_once ('footer.php');
	?>
<!--FOOTER-->
	
</body>
</html>
