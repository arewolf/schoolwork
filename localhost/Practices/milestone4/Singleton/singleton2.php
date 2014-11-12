<?php	

class DB {

	private $link;
	private $db = NULL;

	public function __construct(){
		$this->link = new mysqli('localhost', 'root', '', 'gun_shop');
//                         		(url, username, password, database)
		if ($link->connect_errno) {
			echo 'Failed to connect to MySQL: (' . $link->connect_errno . ')' .$link->connect_error;
		}
		
	}

	public static function init(){
		if(empty($this->db)){
			$this->db = new DB();
		}
		$db = new DB();
		return $db;

	}


	public function execute($sql){
		mysql_query($this->link, $sql);
	}
}

