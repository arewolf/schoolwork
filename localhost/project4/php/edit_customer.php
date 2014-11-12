
<?php 



$mysqli = new mysqli('localhost', 'root', '', 'gun_shop');
//                  (url, username, password, database)
$id = $_GET['id'];
$results='';
$mysqliError='';

if ($mysqli->connect_errno) {
	$connectError = 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ')' . $mysqli->connect_error;

}else{
	$sql = "select * from customer where customer_id = " . $id . ";";
	$results = $mysqli->query($sql);	
	if ($mysqli->error){
		$mysqliError= 'No data.';
	}

}
if ($results != FALSE) {
	$row = $results->fetch_assoc();
	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Customers</title>
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
	
	<main>
		<h1>Edit <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h1>
		<table>
			<form action="customers.php" method="POST">
				<tr><td>First Name</td><td><input type="text" name ="firstname" value="<?php echo $row['firstname']?>"></td></tr>
				<tr><td>Last Name</td><td><input type="text" name ="lastname" value="<?php echo $row['lastname']?>"></td></tr>
				<tr><td>Age</td><td><input type="text" name ="age" value="<?php echo $row['age']?>"></td></tr>
				<tr><td>Gender</td><td><input type="text" name ="gender" value="<?php echo $row['gender']?>"></td></tr>
				<tr><input name="id" value ="<?=$id?>" type="hidden"><td></td><td><input type="submit"><a href="customers.php">BACK</a></tr></td>
			</form>
		</table>

			

	</main>

</body>
</html>
