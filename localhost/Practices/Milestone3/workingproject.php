<?php
// $array= array("name","password","email","phone","number");


class Validator {
	public function validate($selectField){
		$this->function validateParam();
	}		
	return true;

	protected function validateParam(){
		throw Exception("ERROR!");
	}
}

/////////////////////NAME///////////////////////////

class Namevalid extends Validator{
	private function validateParam($x){
		if (is_string($x)==false){
			throw new Exception("Enter a new name!");
		}else{
			return $x;
		}
	}	
}
////////////////////EMAIL/////////////////////////////
class Emailvalid extends Validator{
	private function validateParam($x){
		if (!preg_match(/(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})/)), $x){
			throw new Exception("password")
		}else{
			return $x;
		}		
	}
}
///////////////////PASSWORD/////////////////////
class Passvalid extends Validator{
	protected function validateParam($x){
		if (strlen($x) < 8) {
			throw new Exception("Password not long enough");
		}else{
		return $x;
		}
	}	
}
/////////////////PHONE NUMBER////////////////////
class Phonevalid extends Validator{
	protected function validateParam($x){
		if (!preg_match(/^(?:\([2-9]\d{2}\)\ ?|[2-9]\d{2}(?:\-?|\ ?))[2-9]\d{2}[- ]?\d{4}$/)), $x);
			throw new Exception("Phone Number Invalid");
		}else{
		return $x;
		}
	}	
}
//////////////////NUMBER////////////////////////////////
class Numbervalid extends Validator{
	protected function validateParam($x){
		if (!is_numeric($x)){
			throw new Exception("Not a Number");
		}else{
			return $x;
		}
	}
}







?>
