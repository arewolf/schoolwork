<?php

required_once("classValidator.php");
$message="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$textValue=$_POST['textValue'];
	$optionValue=$_POST['optionValue'];

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
<head>
	<title>PHP Project-SHORT</title>
</head>
<body>
	<form method="POST">
		<select name="optionValue">
			<option>Username</option>
			<option>Password</option>
			<option>Email</option>
			<option>Number</option>
			<option>Phone</option>
		</select>
		<input type="text" placeholder= "enter values here" name="textValue">
		<button>Submit</button>
	</form>
	<?php echo $message ?>
</body>
</html>