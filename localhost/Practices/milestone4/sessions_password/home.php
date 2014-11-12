<?php

session_start();
$username= "";
if(issset($_SESSION['uname']) && strlen($_SESSION['uname']) > 0 ){
	$username=$_SESSION['uname'];

}else{
	echo "please log in";
	echo "<a href='login.php'>Log In </a>";
	exit;
}

$db = new myqli("localhost", "root", "", "Menu");
if($mysqli->connect_errno) {
	echo "FAILED DATABASE CONNECTION"; 
}

$query= "select * from user where username = '$username'";
$results=$db->query($query);


$user=NULL;
if(!$user = $results->fetch_assoc()){
	echo "invalid username/password";
	exit






?>




<html>
	<div>
	your logged in !!!
	<div>
	<div class="logged in">
		<?php 
</html>