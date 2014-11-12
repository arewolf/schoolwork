<?php

class Validator{
	public function validate($textValue){
		$this->validate($textValue);
		return $message;
	}

	private function validateParam(){
		throw new Exception ("ERROR!");
	}
}

class NameValid extends Validator{
	private function validateParam(){
		if(is_string($textValue)){
			return $textValue;
		}else{
			throw new Exception("Invalid Name");
		}
	 }
}

class EmailValid extends Validator{
	private function validateParam(){
		if(preg_match(".+\@.+\..+")){
			return $textValue;
		}else{
			throw new Exception("Invalid Email");
		}
	 }
}
	


class PassValid extends Validator{
	private function validateParam(){
		if(is_string($textValue)){
			return $textValue;
		}else{
			throw new Exception("Password Invalid");
		}
	 }
}
	 


class PhoneValid extends Validator{
	private function validateParam(){
		if(is_int($textValue)){
			return $textValue;
		}else{
			throw new Exception("Number must be an intiger.");
		}
	 }
}

class NumberValid extends Validator{
	private function validateParam(){
		if(is_int($textValue)){
			return $textValue;
		}else{
			throw new Exception("Number must be an intiger.");
		}
	 }
}
$message="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

	$textValue=$_POST['textValue'];
	$optionValue=$_POST['option'];

	try{
		if($optionValue=='Username'){
			$username= new NameValid();
			$username->validate($textValue);
		}else if($optionValue=='Password'){
			$password= new PassValid();
			$password->validate($textValue);
		}else if($optionValue=='Email'){
			$email= new EmailValid();
			$email->validate($textValue);
		}else if($optionValue=='Phone'){
			$phone= new PhoneValid();
			$phone->validate($textValue);
		}else if($optionValue=='Number'){
			$number= new NumberValid();
			$number->validate($textValue);
		}else {
			throw new Exception ("NOT POST ERROR!");
		}
				
	}catch(Exception $e){
	$message=$error->getMessage();
	}
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<select name="option">
			<option>Username</option>
			<option>Password</option>
			<option>Email</option>
			<option>Phone</option>
			<option>Number</option>
		</select>
		<input type="text" name="textValue">
		<button>Submit</button>
	</form>
<?php echo $message ?>
	
</body>
</html>