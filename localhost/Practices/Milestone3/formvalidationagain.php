<?php


class Validator{
	public function validate($field, $rule){
		return true;
	}
}

if(isset($_POST));
	$validator= new Validator;
	try {
		$validator->validate($_POST["firsttest"], "text");
		$validator->validate($_POST["lastname"], "text");
		$validator->validate($_POST["email"], "text");
	}

	catch (ValidationException $e) {
		echo $e->getMessage();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORM VALIDATION</title>
	<style>
		input {
			display:block;
		}
	</style>

</head>
<body>
	<form method="POST" action="">
		<input type="text" name="firsttest" value="" />
		<input type="text" name="lastname" value="" />
		<input type="text" name="email" value="" />
		<input type="submit" value="submit">
	</form>
</body>
</html>