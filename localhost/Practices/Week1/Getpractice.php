<?php

$name = $_GET['name'];
$gender = $_GET['gender'];

if ($gender == 'M') {
	$name = 'Hello Mr. ' . $name;
	
}

else {
	$name = 'Hello Mrs. ' . $name;
}
	echo $name;
?>



//url with this code: ?name=RUSS&gender=M at the end will GET these functions.