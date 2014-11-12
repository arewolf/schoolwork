<?php

 
class Validation{
	public function validate($field, $rule){
			if($rule == "text"){
				$this->validateText($field);
			} elseif ($rule == "email") {
				$this->validateEmail($field);
			}
			return true;
	}

	private function validateText($value){
		if(preg_match("/[A-Za-z]+$/", $value)==0){
			throw new Exception("error, please enter a string");
		}
	}

	private function validateEmail($value){
		if(preg_match("/.*\.\w{3}$/", $value)==0){
			throw new Exception("error, please enter an email");
		}

	}

}


$message = "OK";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$validator = new Validation;

	try {
		$validator->validate($_POST["firstname"], "text");
		$validator->validate($_POST["lastname"], "text");
		$validator->validate($_POST["email"], "email");
		$validator->validate($_POST["age"], "age");
		$validator->validate($_POST["password"], "password");
	

	}

	catch (Exception $e) {
		$message= $e->getMessage();
	}
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
	<?php echo $message?>
	<form method='POST'>
		FIRST NAME:<input type="text" name="firstname" value="" />
		LAST NAME:<input type="text" name="lastname" value="" />
		EMAIL:<input type="text" name="email" value="" />
		AGE:<input type="text" name="age" value="" />
		PASSWORD:<input type="pasword" name="password" value"" />
		<input type="submit" />
	</form>
</body>
</html>