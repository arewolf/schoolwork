<?php


//adding sessions:

session_start();



$uname=$pword="";
$user=NULL;
$error="";
if(isset($_SESSION['uname']) && strlen($_SESSION['uname']) > 0){
	header('Refresh: 5; url=/home.php');
	echo "you are being sent home!";
}





//get POST if there
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
//user post to make select statement to DB
	$get_user_query="select * from user where username = '$uname' and password = password('$pword')";
	echo "query = " . $get_user_query;
	$db = new myqli("localhost", "root", "", "Menu");
	if($mysqli->connect_errno) {
		echo "FAILED DATABASE CONNECTION"; 
	}
	$results= $db->query($get_user_query);
		if($user = $results->fetch_assoc()){
			$_SESSION['uname'] = $user['username'];
			header('location: home.php');
		}else{
			$error = "invalid username/password";
			$_SESSION['uname']= "";
		}
		
}
?>
<html>
	<?php
	if($error) { ?>
	<div class="error">
		<?= $error ?>
	</div>
	<?php }?>

	<?php if($user) {?>
	<div class="userinfo">
		<?php print_r($user); echo "<br>\n";?>
	</div> 
	<?php } ?>

	<form action="" method ="POST">
		uname:<input type="text" name="uname"><br>
		pass:<input type="text" name="pword"><br>
		<button>Login</button>
	</form>