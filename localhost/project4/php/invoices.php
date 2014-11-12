<?php

$mysqli = new mysqli('localhost', 'root', '', 'gun_shop');
//                  (url, username, password, database)
if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ')' . $mysqli->connect_error;
}

$total_sql="SELECT SUM(quantity * price) as subtotal,
				firstname,
				lastname, 
				invoice_id, 
				date 
				FROM 
				customer 
				JOIN invoice USING (customer_id) 
				JOIN lineitem USING (invoice_id) 
				JOIN product USING (product_id) 
				GROUP BY invoice_id;";

 $total_select=$mysqli->query($total_sql);

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
				<th>Invoice Id</th>
				<th>Customer Id</th>
				<th>Total</th>
				<th>Data</th>
			</tr>
			<?php

			if ($total_select!== FALSE) {
				while($row = $total_select->fetch_assoc()) { ?>
				
				<tr>
					<td><?=  $row['invoice_id'] ?></td>
					<td><?=  $row['firstname'] . " " . $row['lastname']?></td> 
					<td>$<?= $row['subtotal'] ?></td>
					<td><?=  $row['date'] ?></td> 
					
					<?php
					}   }?>
				</tr> 		
		</table>
	</main>

</body>
</html>