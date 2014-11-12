<?php

 session_start();
// if(isset($_SESSION['mydate'])){
// 	echo $_SESSION['mydate'] . "top<br>";
// }else {
// 	echo "no date <br>";
// }

$_SESSION['mydate'] = "mydate:" . date(DATE_COOKIE) . "<br>";

if($_GET['user']=="daniel" && $_GET['password']=="password"){
	$_SESSION['username']== $_GET['user'];
}else{
	$_SESSION['isloggedin']=='false';
}
session_destroy();
print_r($_SESSION);
//session_destroy();

echo "Hurray for SESSIONS <br>";
?>
<html>
	<form action="">
		<input type="text" name="user"><br>
		<input type="password" name="password"><br>
		<input type="submit" value="login">
	</form>
</html>