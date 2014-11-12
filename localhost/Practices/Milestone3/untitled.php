project notes 2:

<?php

$types=['email', 'password', 'username', 'number', 'phone']; 
if(isset($_GET['nf'])){
	
	foreach($types as $type){
		$options.= "<option> $type </option>";
	}

	$select="<select> $options </select>";
	$output= "$select <input type='text'> <input type='submit'>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
	select fields: <input type='text' name='nf'>
					<input type="submit">
					<?php echo $output?>



	</form>
</body>
</html>