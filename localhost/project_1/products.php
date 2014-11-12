<?php
	$value = $_GET[value];
	
	if ($value == "mac") {
		$productval = "Mac Attack!";
	}

	elseif ($value == "windows") {
		$productval = "Windows Smindows";
	}

	elseif ($value == "linux") {
		$productval = "Linux Sminux";
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
		<h1> <?php echo "$productval" ?> </h1>
	</main>
	


	
<!--FOOTER-->	
	<?php
	require_once ('footer.php');
	?>
<!--FOOTER-->
	
</body>
</html>