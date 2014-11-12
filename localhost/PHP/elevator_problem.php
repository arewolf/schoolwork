<?php

$el_dir = "up"; //up or down
$desired_dir = "down";
$messagePerhaps ="";
$perhaps = "Better take the stairs.";

if($el_dir == "up") {
	if($desired_dir == "up") {
		$messagePerhaps = "Pick me up on the up, I'm going up!";
	}
	
	else {
		$messagePerhaps = "Skip me on the up, I'm going down! {$perhaps}";
	}

}

else {
	if ($desired_dir == "down") {
		$messagePerhaps = "Pick me up on the down, I'm going down!";
	}
	else {
		$messagePerhaps = "Skip me on the down, I'm going up! $perhaps";
	}
}

echo $messagePerhaps;



?>




