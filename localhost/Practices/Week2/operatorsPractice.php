<?php

//ini_set('display_errors',1);  
//error_reporting(E_ALL);
//phpinfo();

$string = "this is a string for testing something else";
$pos = strpos ($string, "testing");
echo "<br> $pos";
$pos2 = strpos ($string, "something");
echo "<br> $pos2";
$len = $pos2 - $pos;
echo "<br> $len";
$substring = substr($string, $pos, $len);

if ($len <= 0) {
	echo "This value is empty";
}

//or this maybe better:
if (strlen($substring)== 0) {
	echo "error";
}
else {
	echo $substring
}


?>

