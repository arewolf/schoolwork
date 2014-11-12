<?php

include("classValidator.php");
$selectedUser="";
$selectedPass="";
$selectedEmail="";
$selectedNumber="";
$selectedPhone="";
$errorMessage="";
$message='';

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$textValue=$_POST['text'];
	$optionValue=$_POST['type'];
	$notifier="valid";

	

	
	if($optionValue=='Username'){
		$validator= new NameValidator();
		$selectedUser ="selected";
	}else if($optionValue=='Password'){
		$validator= new PassValidator();
		$selectedPass ="selected";
	}else if($optionValue=='Email'){
		$validator= new EmailValidator();
		$selectedEmail ="selected";
	}else if($optionValue=='Phone'){
		$validator= new PhoneValidator();
		$selectedPhone ="selected";
	}else if($optionValue=='Number'){
		$validator= new NumberValidator();
		$selectedNumber ="selected";
	}else {
		throw new Exception ("NOT POST! ERROR!");
	}
	
	
	try{
		$message=$validator->validate($textValue);

	}catch(Exception $e){
		$errorMessage = $e->getMessage();
		$notifier='invalid';
	}
}






?>

<!DOCTYPE html>
<head>
	<title>PHP Project-SHORT</title>
	<style>
		.invalid {
			background-color: red;
			opacity: .4;
		}
		.valid {
			background-color: green;
			opacity: .4;
		}
	</style>
</head>
<body>
	<form method="POST">
		<select name="type" action="">
			<option <?php echo $selectedUser?> >Username</option>
			<option <?php echo $selectedPass?> >Password</option>
			<option <?php echo $selectedEmail?> >Email</option>
			<option <?php echo $selectedNumber?> >Number</option>
			<option <?php echo $selectedPhone?> >Phone</option>
		</select>
		<input type="text" value="<?php echo $message?>" name="text" class="<?php echo $notifier ?>">
		
		<button>Submit</button>
	</form>
	<?php echo $errorMessage?>
</body>
</html>