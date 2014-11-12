<?php
function is_pos($x){
	if($x>0==FALSE){
		throw new Exception("ERROR!");
	}
}

try{
	is_pos(-10);
}
catch(Exception $error){
	echo "number isn't positive";
}

function is_neg($x){
	if ($x>0==true){
		throw new Exception("number isn't negative");
	}
	else {
		return $x;
	}
}
try {
	is_neg(10);
}
catch(Exception $error){
	echo $e->getMessage();
}