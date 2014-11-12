<?php
// $array= array("name","password","email","phone","number");


class Validator {
	public function validate($selectField){
		$selectField = $this->validateParam();
	}		

	protected function validateParam(){
		throw Exception("ERROR!");
	}
}

/////////////////////NAME/////////////////////////////

class Namevalid extends Validator{
	protected function validateParam($x){
		if (is_string($x)==false){
			throw new Exception("Name Invalid");
		}else{
			return $x;
		}
	}	
}
////////////////////EMAIL//////////////////////////////
class Emailvalid extends Validator{
	protected function validateParam($x){
		if (!preg_match(".+\@.+\..+", $x)){
			throw new Exception("Email Invalid");
		}else{
			return $x;
		}		
	}
}
///////////////////PASSWORD////////////////////////////
class Passvalid extends Validator{
	protected function validateParam($x){
		if (strlen($x) < 8) {
			throw new Exception("Password Invalid");
		}else{
		return $x;
		}
	}	
}
/////////////////PHONE NUMBER///////////////////////////
class Phonevalid extends Validator{
	protected function validateParam($x){
		if (!preg_match("/^(?:\([2-9]\d{2}\)\ ?|[2-9]\d{2}(?:\-?|\ ?))[2-9]\d{2}[- ]?\d{4}$/", $x)){
			throw new Exception("Phone Number Invalid");

		}else{
		return $x;
		}
	}	
}
//////////////////NUMBER///////////////////////////////////
class Numbervalid extends Validator{
	protected function validateParam($x){
		if (!is_numeric($x)){
			throw new Exception("Number Invalid");
		}else{
			return $x;
		}
	}
}

/////////////////////////FACTORY//////////////////////////////////////

class ValidationFactory {
	
	public function createValidator($type){
		if ($type == "name"){
			return $nameValids = new Namevalid();
		}else if ($type == "email") {
			return $emailValids = new Emailvalid();
		}else if ($type == "password"){
			return $passValids = new Passvalid();
		}else if ($type == "phone"){
			return $phoneValids =new Phonevalid();
		}else if ($type == "number"){
			return $numberValids = new Numbervalid(); 
		}else {
			throw new Exception("Unknown Validator Type");
		}
	}
}






?>
