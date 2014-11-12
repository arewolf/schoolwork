<?php

$el_dir = "up";
$el_desired = "down";
$message = "";

if (el_dir == "up") {
	
	if (el_desired == "up") {
		$message = "Elevator Up, Going Up, STOP!";
	}

	else {
		$message = "Elevator Up, Going down.  DON'T STOP!";
	}
}

else {
	if (el_desired == "down") {
		$message = "Elevator Down, Going Down, STOP!";

	}

	else {
		$message = "Elevator Down, Going Up, DON'T STOP!";
	}
}

echo $message;

?>