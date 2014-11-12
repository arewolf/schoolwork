project notes 2:

<?php

function makeOption($num){
	$options="";
	$types=['email', 'password', 'username', 'number', 'phone']; 
	foreach($types as $type){
		$options.= "<option>". $type . "</option>";
	}
	$select="<select name='s$num'> $options </select>";
	$input= "<input type='text' name='t$num'>";
	$output= $select . $input;
	return '<div>' . $output . '<div>';
}

//Start with GeT
$formMethod='GET';


//If at stage 2 or 3
if (isset($_GET['nf']) && is_numeric($_GET['nf'])){
	
	//Cast as int.
	$count=(int)$_GET['nf'];

	//If at stage 3
	if ($_SERVER["REQUEST_METHOD"]=='POST'){
		echo "state 3";
		
		for ($i=1;$i<=$count;$i++){
			echo $_POST['s' . $i];
//here is where OOP comes in;
//if ($_POST['s' . $i]=='email')



		}	


	}	
	//loop and make options
	$output='';
	for ($i=1;$i<=$count;$i++){
		$output.= makeOption($i);
	}

//change form to post
$formMethod='POST';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method= "<?php echo $formMethod ?>" >
	select fields: <input type='text' name='nf' value>
					<?php echo $output; ?>

					<input type="submit">


	</form>
</body>
</html>