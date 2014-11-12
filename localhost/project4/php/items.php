<?php
 
$mysqli = new mysqli('localhost', 'root', '', 'gun_shop');
//                  (url, username, password, database)
if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ')' . $mysqli->connect_error;
}

$sql = "select * from product;";
$results = $mysqli->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customers</title>
	<style>
	table, th, td {
		border: 1px solid black;
	}
	td {
		padding: 7px;
	}
	table {
		margin: 20px;
	}
	</style>
	
</head>
<body>
	
	<h3><a href="index.php">Home</a></h3>
	<main>
		
		<table>
			<tr>
				<th>Item Name</th>
				<th>Price</th>
				<th>Description</th>

			</tr>
			<?php

			if ($results !== FALSE) {
				while ($row = $results->fetch_assoc()) { ?>
				<tr>
					<td><?=  $row['item'] ?></td>
					<td><?=  $row['price'] ?></td> 
					<td><?=  $row['description'] ?></td> 
					<?php } ?>
				</tr> 	
			<?php
			} else {
			echo $mysqli->error;
			}
			?>		
		</table>
		
	</main>

</body>
</html>