<?php

//from the object context you can get to the static, but from the static you cannot get 
//to the object context:
class User{
	
	private $name;
	
	public function __construct($name){
		$this->name=$name;
	}

	public static function make_user(){
		$user= new User('brad');
		//$user2= new User('russ');
		//$user3= new User('ralph');
		return $user;
	}

}



$user = User::make_user('russ');
print_r($user);


//we want to put our database into a class, that static class will be included into each
//page that requires databasing.