<?php

$mysqli = new mysqli('localhost', 'root', '', 'Menus');
//                  (url, username, password, database)
if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ')' . $mysqli->connect_error;

}

echo $mysqli->host_info;

	$sql = "select * from items;";
	$results = $mysqli->query($sql);

	if ($results !== FALSE) {
		while ($row = $results->fetch_assoc()) {
			echo '<br>' . "food: " . $row['food'] .'<br>' . "price: " . $row['price'] .'<br>'. "calories: " . $row['calories'] .'<br>'. "ingredients id: " . $row['ingredient_id'] . '<br>';
		}
	}
else {
	echo $mysqli->error;
}