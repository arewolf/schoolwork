<?php

session_start();
session_destroy();

// header('Location: /Practices/Milestone3/LoginPage.php');
// 	exit();
header('Refresh: 5; url= /Practices/Milestone3/LoginPage.php');
	exit();
echo "you are logged out, come again <br>";
print_r($_SESSION);

?>