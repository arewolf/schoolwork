<?php

function add($a, $b) {
	return $a + $b;
}

function multiply($a, $b) {
	return $a * $b;
}

function is_even($a) {
	return ($a % 2 == 0);

}

function is_odd($a) {
	return !is_even($a);
}

function multiple_5($a) {
	return ($a % 5 == 0 || $a % 5 == 5);
}

?>