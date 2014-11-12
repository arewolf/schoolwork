<?php

class Database {
	
	private $database;
	private static $singlebd;

	private function __construct(){
		$this->database=new mysqli("ip", "root", "pass", "database");
	}

	public static function mkbd(){
		if(! self::$singledb){
			$singledb= new Database;
		}
		else{
			return $singledb;
		}
	}


}

$newDB =DB::mkdb;
$newDB->query('SELECT * FROM TABLES');




class Database {

	private $database;
	private static $singledb;

	private function __construct(){

		$this->database= new $mysqli('ip','root','password','database');
	}


	public static function getDB(){
		if (! self::$singledb){
			$singledb = new DB;
		}
		else{
			return $singledb;
		}
	}
}

$newdb = Database::getDB;
$newdb->query('statement');





$array=[1,2,3,4,5];

$array2 = array_map(function($n){return $n * $n;},$array);

$array3 = array_map ($function, $array);

$function = function($n){
	return $n * $n; 
};

//php mysql connection errors:

if ($mysqli->connect_errno) {
	$connectError = 'Failed to connect to MySQL:' . $mysqli->connect_errno . ":" . $mysqli->connect_error;


if ($mysqli->connect_errno) {
	$connectError = 'Fail' . $mysqli->connect_errno . ":" . $mysqli->connect_error;
}

class Database {

	private $database;
	private static $singleDB;
	private function __construct(){
		$this->database= new $mysqli('ip', 'user', 'pass', 'db');
	}

	public static function getDB(){
		if(! self::$singleDB){
			$singleDB = new Database;
		}
		else {
			return $singleDB;
		}
	}
}

$newDB = Database::getDB;
$newDB->query("statement");


































