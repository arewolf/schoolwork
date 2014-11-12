<?php

$guns =['ak', 'sks', 'ar15', 'bfg'];
$weapon_type="";
$name_value='';
if($_SERVER['REQUEST_METHOD']== 'POST'){ //
	
	if (isset($_POST['name'])){
		$name_value=$_POST['name'];
	}

	if (isset($_POST['gun_type'])) {
		$weapon_type=$_POST['gun_type'];
	}	
}


else{
	echo 'this is what i GET';
}
$option=" ";
foreach($guns as $gun){
	$selected= ($weapon_type == $gun) ? 'selected' : ''; //this adds the selected OPTION to the HTML tag.
	$option.="<option $selected> $gun </option>\n";		 //this loops the selected option into the project.
}
//selected is the key to making drop downs with selected option.
//this is the pattern for the project, check if post if not use get, once POST then do POST thing.
//when making these loops, solve the problem for one item, then make it work for everything.
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="" method="POST">
	name:<input type="text" name="name" value="<?php echo $name_value; ?>">
	weapon type:<select name="gun_type"><?php echo $option; ?></select>
	<input type="submit">
</form>
			


</body>
</html>