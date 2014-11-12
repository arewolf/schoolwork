<?php
class DB{
	private $db;
	private static $the_db;

	private function __construct(){
		$this->db = new mysqli("localhost(ip)", "user", "password", "database");
	}



	public static function getDB(){
		if(! self::$the_db){
		$the_db = new DB();
		}
		else{
		return $the_db;
		}
	}



}

$mydb = DB::getDB();
$mydb->query("sqlstatement");






//singleton must have three things:

		// a private constructor
		// a public static method to check for instances
		// a private static property 