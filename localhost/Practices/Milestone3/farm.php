
<?php
//inside a method of class, if you want to communicate, you have to use this... this is a scope
//variable that works within a scope.

class Animal{
	public function feed($food){
		$message = $this->say($food);
		return $message;
	}
}

class Cow extends Animal{
	public function say($food){

		if ($food == "grass"){
			return "Moo-yummy!";
		}else{ 
			throw new Exception ("Moo-Gross");
		}
	}
}
class Chicken extends Animal{
	public function say($food){
		if ($food == "grain"){
			return "Cluck-yummy!";
		}else{ 
			throw new Exception ("Cluck-Gross");
		}
	}
}

class Pig extends Animal{
	public function say($food){
		if ($food == "slop"){
			return "Oink-yummy!";
		}else{ 
			throw new Exception ("Oink-Gross");
		}
	}
}

$message="";
if($_SERVER["REQUEST_METHOD"]=='POST'){
	
	$type= $_POST['type'];
	$food=$_POST['textBox'];


	try{
		if($type =='Cow'){
			
			$cow = new Cow();
			$cow->feed($food);

		}else if ($type=='Pig'){
			
			$pig = new Pig();
			$pig->feed($food);
		
		}else if ($type=='Chicken'){
			
			$chicken = new Chicken();
			$chicken->feed($food);
		}
	}

	catch (Exception $error){
		$message= $error->getMessage();
	}


}


//validate to yummy or gross.
//every animal has one type of food it likes, thats it.

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<select name="type">
			<option>Cow</option>
			<option>Pig</option>
			<option>Chicken</option>
		</select>
		<input type="text" placeholder="Food" name="textBox">
		<button>Submit</button>
	</form>
	<?php echo $message ?>
	
</body>
</html>