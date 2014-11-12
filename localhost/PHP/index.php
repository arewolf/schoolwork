<?php

$el_dir = "down"; //up or down
$desired_dir = "down";

if($el_dir == "up") {
	if($desired_dir == "up") {
		echo "pick me up on the up";
	}
	
	else {
		echo "skip me";
	}

}

else {
	if ($desired_dir == "down") {
		echo "pick me up on the down";
	}

}

