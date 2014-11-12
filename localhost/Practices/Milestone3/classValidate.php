<?php
class Validator{
	public function validate($textValue){
		$this->validate($textValue);
		return $message;
	}

	private function validateParam(){
		throw new Exception ("ERROR!");
	}
}

class NameValid extends Validator{
	private function validateParam(){
		if(is_string($textValue)){
			return $textValue;
		}else{
			throw new Exception("Invalid Name");
		}
	 }
}

class EmailValid extends Validator{
	private function validateParam(){
		if(preg_match(".+\@.+\..+")){
			return $textValue;
		}else{
			throw new Exception("Invalid Email");
		}
	 }
}
	


class PassValid extends Validator{
	private function validateParam(){
		if(is_string($textValue)){
			return $textValue;
		}else{
			throw new Exception("Password Invalid");
		}
	 }
}
	 


class PhoneValid extends Validator{
	private function validateParam(){
		if(is_int($textValue)){
			return $textValue;
		}else{
			throw new Exception("Number must be an intiger.");
		}
	 }
}

class NumberValid extends Validator{
	private function validateParam(){
		if(is_int($textValue)){
			return $textValue;
		}else{
			throw new Exception("Number must be an intiger.");
		}
	 }
}
?>