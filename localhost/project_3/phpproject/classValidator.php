


<?php

class Validator
{	
	public function validate($textValue)
	{
		return $this->validateParam($textValue);
		
	}

}

class NameValidator extends Validator
{
	public function validateParam($textValue)
	{
		if(strlen($textValue) <= 10){
			return $textValue;
		}else{
			throw new Exception("Invalid: Name must be 10 or fewer characters!");
		}
	 }
}

class EmailValidator extends Validator
{
	public function validateParam($textValue)
	{
		if(preg_match("/.*\@.*\.\w{3}/", $textValue)){
			return $textValue;
		}else{
			throw new Exception("Invalid Email");
		}
	 }
}
	


class PassValidator extends Validator
{
	public function validateParam($textValue)
	{
		if(strlen($textValue) <= 10){
			return $textValue;
		}else{
			throw new Exception("Password Invalid: Password must be 10 or fewer characters");
		}
	 }
}
	 


class PhoneValidator extends Validator
{
	public function validateParam($textValue)
	{
		if(preg_match("/\(\d{3}\)\-\d{3}\-\d{4}/", $textValue)){
			return $textValue;
		}else{
			throw new Exception("Invalid: use format '(111)-111-1111'.");
		}
	 }
}

class NumberValidator extends Validator
{
	public function validateParam($textValue)
	{
		if(is_numeric($textValue)){
			return $textValue;
		}else{
			throw new Exception("Number must be an number.");
		}
	 }
}
?>