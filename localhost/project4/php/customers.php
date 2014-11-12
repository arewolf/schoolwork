 
<?php

//establishing the connection:
$mysqli = new mysqli('localhost', 'root', '', 'gun_shop');
//                  (url, username, password, database)
//Deletes customer from page:
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$customer_delete="DELETE
					  FROM customer
					  WHERE customer.customer_id = $id";
	$customer_delete_query = $mysqli->query($customer_delete);
}

//checking for POST data:
if ($_SERVER["REQUEST_METHOD"]=="POST"){
//if true gather edit_customer.php data	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$id=$_POST['id'];

//UPDATA new data & call error:
	$insert = "UPDATE customer 
			   SET firstname='$firstname', lastname='$lastname', age='$age', gender='$gender' 
			   WHERE customer_id='$id'";
	$mysqli->query($insert);

	if ($mysqli->query($insert) === TRUE) {
    echo "<h2>Record updated successfully</h2>";
	} else {
    echo "<h1>Error updating record!!!</h1>";
	}

//Checking For Database Connection Errors
}
$select_customer='';
$mysqliError='';
if ($mysqli->connect_errno) {
	$connectError = 'Failed to connect to MySQL:' . $mysqli->connect_errno;
//Getting Customer table data;
}else{
	$sql = "select * from customer;";
	$select_customer = $mysqli->query($sql);
}
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
	h1{
		color:darkred;
		background-color:pink;
		display:inline;
	}

	h2{
		color:darkgreen;
		background-color:lightgreen;
		display: inline;
	}
	</style>
	
</head>
<body>
	
	<h3><a href="index.php">Home</a></h3>
	<main>
		
		<table>
			<tr>
				<th>Name</th>
			</tr>
			<?php
				while ($row = $select_customer->fetch_assoc()) {
			?>
			<tr>
				<td><?= $row['firstname'] . ' ' . $row['lastname'] ?></td>
				<td><a href="new_invoice.php?id=<?=$row['customer_id']?>"> New Invoice</a></td>
				<td><a href="edit_customer.php?id=<?=$row['customer_id']?>">Edit</a></td> 
				<td><a href="customers.php?id=<?=$row['customer_id']?>">Remove</a></td>
			</tr> 

			<?php 
				}
			?> 		
		</table>	

	</main>

</body>
</html>
