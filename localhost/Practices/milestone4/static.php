<?php

class Math 
{
	public static function add($n1, $n2)
	{
		// $this->result= $n1+$n2;
		// return $this->result;			this is for non-static object context.

		self::$result += $n1 + $n2;
		return self::$result;

	}

	public function multiply($n1, $n2)
	{
		return $n1*$n2;

	}

	public function subtract($n1,$n2)
	{
		return $n1-$n2;

	}

	public function circleArea($n)
	{

		return pi() * ($n * $n);

	}


}
//object oriented context:

// $math = new Math();
// $output1= $math->add(2,6);
// echo $output1 . "<br>";

//Static context

$output2 = Math::add(3,7);
$output3;


echo $output2 . "<br>";
