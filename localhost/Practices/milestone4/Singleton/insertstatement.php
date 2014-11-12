<?php

function make_insert_statement($table_name, $sql_values){
	return "INSERT INTO `{table_name}` (`" . implode('`,`',array_keys)//missing code:
}


$table='user';

$values= [
	'user_id'=>'1',
	'firstname'=>'brad',
	'lastname'=>'westfall',
	'email'=>'brad@azpixels.net',
	'pass'=>'asdfjaskjflskajfljs'
];

$sql_statement = make_insert_statement($table, $values);

echo $sql_statement;