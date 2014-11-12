<?php

//session login page

session_start();

If ($_SERVER['REQUEST_METHOD'] == 'POST'){									//Checks for POST
	if ($_POST['user']=='Russ' && $_POST['password']=='password'){
		$_SESSION['username'] = $_POST['user'];
		$_SESSION['isloggedin'] = 'true';
		exit();
		header('Location: /Practices/Milestone3/myprofile.php');			//Header redirect, automatically loads 	
	}else {																	//Success page
		$_SESSION['inloggedin'] = 'false';
	}
}



print_r($_SESSION);

?>

<html>
	<form method="POST">
		<input type="text" name="user"><br>
		<input type="text" name="password"><br>
		<input type="submit" value="Login">
	</form>
</html>