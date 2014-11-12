<?php

$person = ['name' => 'Russ', 'age' => 29, 'favorite color'=> 'green'];

function foo(&$x){
	$x .= "{{" . $x . "}}";
}



$search = array_keys($person);
$replace = array_values($person);
array_walk($search, 'foo');
$text= "My name is {{name}}.  I am {{age}}.  I like the color {{favorite color}}!!!";
// // $text= str_replace ('cabbage', 'pizza', $text);
// // $text= str_replace ('beets', 'ice-cream',$text);


 $search= ["{{name}}", "{{age}}", "{{favorite color}}"];
// // $replace= ["pizza", "cigarettes", "blue"];

// $text=str_replace($search, $replace, $text);



echo $text;

