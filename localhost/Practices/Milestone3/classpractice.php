<?php

class User {

	public $firstname, $lastname, $email;

	public function __construct($firstname, $lastname, $email){
		$this->firstname=$firstname;
		$this->lastname=$lastname;
		$this->email=$email;
	}

}


class Member extends User{
	public $subscriptionLevel;


}

class Admin extends User{	
	public $canDeleteMembers;

	public function __construct($firstname, $lastname, $email, $canDeleteMembers){
		parent:: __construct($firstname, $lastname, $email);
		$this->canDeleteMembers=$canDeleteMembers;
	}

}

$admin = new Admin("russ","wolf","arewolf@gmail.com",true);
print_r($admin);



// $admin = new Admin();
// print_r($admin);





// this is a way to NOT override a value with the child, 
// but uses the value of the parent.

// public function remove(){
// 	parent::remove();
// 	echo "remove this member";
// }