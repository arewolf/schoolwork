<?php 

echo "<h1>lowercase strings</h1>";

function lower_string($x){
	if (is_string($x)==false){
		throw new Exception("input is not a string!");
	}
	return strtolower($x);;
}

try {
	echo lower_string("ABBA") . "<br>";
	echo lower_string("abba") . "<br>";
	echo lower_string(12) . "<br>";
}
catch(Exception $error){
	echo "Error, not a string"."<br>";
}	
try{
	echo lower_string(1.2) . "<br>";
}
catch(Exception $error){
	echo "Error, not a string"."<br>";
}	
try {
	echo lower_string(null) . "<br>";
}
catch(Exception $error){
	echo "Error, not a string"."<br>";
}
////////////////////////////////////////////////////////
echo "<h1>Negative</h1>";

function isPositive($y) {
	
	if ($y > 0){
		return $y;
	}
	throw new Exception("negative");
}

try {
	echo isPositive(1) . "<br>";
	echo isPositive(0). "<br>"; 
}
catch (Exception $err_negative){
	echo " 0 Error, number is not positive"."<br>";
}
try {	
	echo isPositive(-1). "<br>"; 
}
catch (Exception $err_negative){
	echo " -1 Error, number is not positive"."<br>";
}
try{
	echo isPositive("abba"). "<br>"; 
}
catch (Exception $err_negative){
	echo "abba Error, number is not positive"."<br>";
}
try{
	echo isPositive(null). "NULL <br>"; 
}
catch (Exception $err_negative){
	echo "NULL"."<br>";
}
/////////////////////////////////////////////////////////
echo "<h1>Age</h1>";

function age($z){
	if ($z >= 0 && $z < 108) {
		return $z;
	}
	throw new Exception("invalid age");
}

try {
	echo age(0) . "<br>";
	echo age(107) ."<br>";
}
catch (Exception $age){
	echo "invalid age 107 <br>";
}

try {
	echo age(108);
}

catch (Exception $age){
	echo "invalid age 108 <br>";
}
try {
	echo age(-1);
}
catch (Exception $age){
	echo "invalid age -1 <br>";
}
try {
	echo age(null);
}
catch (Exception $age){
	echo "invalid age null <br>";
}
try {
	echo age("Abba");
}
catch (Exception $age){
	echo "invalid age abba <br>";
}
///////////////////////////////////
echo "<h1>Password</h1>";

function passCheck($p){
	if (strlen($p) < 8) {
		throw new Exception("Password not long enough");
	}
	return $p;
}

try{
	echo passCheck(12345678);
}	
catch (Exception $p){
	echo "password is not long enough";
}
try {
	echo passCheck("123456789");
}
catch (Exception $p){
	echo "password is not long enough";
}