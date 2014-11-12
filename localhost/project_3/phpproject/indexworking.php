<?php

require_once("validator.php");

$output="";

$inputTypes= array("name","password","email","phone","number");
$option="";
$input="";


if($_SERVER["REQUEST_METHOD"]=="POST"){
	echo "POST";


	if(isset($_POST["select$i"])){
		$inTypes=$_POST["select$i"];
	}
	if (isset($_POST["text$i"])){
		$inTexts=$_POST["text$i"];
	}


	$validFactory = new ValidationFactory();
	
}else{
	echo "no GET";
	$output= "<form method='GET' action=''>Number of Fields<input type='text' name='fields'><input type='submit' value='Enter'>";
	foreach ($inputTypes as $inputType){ 

		$selected= ($inputTypes == $inputType) ? 'selected' : '';
		$option.="<option>$inputType</option>\n";
	}
	
	for ($i=1; $i<=$_GET['fields']; $i++){
		$select="<select name='select$i'>$option</select>";
		$input.= $select . "<input type='text' name='text$i'><br>\n";	
	}
$output = "<form action='' method='POST'>" . $input ."<input type='submit' value='submit'>";	

}

	
	
	

if($_SERVER['REQUEST_METHOD']=="GET"){
	echo "GET params exist";


}
// $input='';
// for ($i=1; $i<=$_GET['fields']; $i++){
// 	$select="<select name='select$i'>$option</select>";
// 	$input.= $select . "<input type='text' name='text$i'><br>\n";	
// }
// $output = "<form action='' method='POST'>" . $input ."<input type='submit' value='submit'>";	
// }	

// ///////////////////////////second-state///////////////////////////////////////	

// else { 
	
// 		echo "GET params exist";
// 		$inputTypes= array("name","password","email","phone","number");
// 		$option="";

		


// 	$valid= ValidationFactory()->createValidate("select$i");
// try{
// 	$valid->
// }catch{

// }

//find a way to mesh these variables, that way if statement will be plugged in if POST exists.
//////////////////////////////third state//////////////////////////////////////////////
//check for post
//use post array to repopulate forms?
//   make forms, use loop to get data off multi-array.

		
	// 	  echo "<br>$s" . " : " . $t;
	// 	 $reOption="<option>$s</option>";
	// 	 $reSelect="<select value='$s'>" . $reOption . "</select>\n";
	// 	 $reText.=$reSelect . "<input type='text' value='$t'><br>\n";
	// }
	// $output = "<form action='' method='POST'>" . $reText . "<input type='submit' value='submit'>";

	
//	}
	

//////////////////////////////third-state and Validation sorta//////////////////////////////////

		// if($_POST["select$i"]=='name'){
		// 	$name= $_POST["select$i"];
		// 	$valueName= $_POST["text$i"];
		// 	echo $name . ":" . $valueName . "<br>";
		// }
		// elseif($_POST["select$i"]=='password'){
		// 	$password= $_POST["select$i"];
		// 	$valuePassword= $_POST["text$i"];
		// 	echo $password . ":" . $valuePassword . "<br>";
		// }
		// elseif($_POST["select$i"]=='email'){
		// 	$email= $_POST["select$i"];
		// 	$valueEmail= $_POST["text$i"];
		// 	echo $email . ":" . $valueEmail . "<br>";
		// }
		// elseif($_POST["select$i"]=='phone'){
		// 	$phone= $_POST["select$i"];
		// 	$valuePhone= $_POST["text$i"];
		// 	echo $phone . ":" . $valuePhone . "<br>";
		// }
		// elseif($_POST["select$i"]=='number'){
		// 	$number= $_POST["select$i"];
		// 	$valueNumber= $_POST["text$i"];
		// 	echo $number . ":" . $valueNumber . "<br>";
		









	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		/*body {
			background-color: grey;
		}

		form,input,option,select {
			border-radius:5px;
			height:30px;
			font-size:20px;
			margin:5px;
			border: 2px solid black;
			padding-left:2px;
		}

		option {
			background-color: darkgrey;
		}*/
	</style>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo $output ?>
</body>
</html>