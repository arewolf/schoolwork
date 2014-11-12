<?php

$mysqli = new mysqli("localhost","root","","practice");
if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL';
}




if($_SERVER["REQUEST_METHOD"]=="POST"){
	$id=$_POST['id'];
	$name=$_POST['name'];
	

	$sql_table1_insert="INSERT into table1 (id, name) values ($id,$name)";
	$mysqli->query($sql_table1_insert);




}
else{
	$id;
	$name;
	$result;
}

$sql_table1_select="select * from table1";
$query_sql = $mysqli->query($sql_table1_select);
?>






<html>
<head>
	<style>
	table tr td {
		border: 2px solid black;
	}
	</style>
</head>



<form action="stilllearning.php" method="post">
	id:<input type="text" name="id">
	name:<input type="text" name="name">
	<button>Submit</button>
</form>
<table>
<?php 

if ($query_sql != FALSE) {
	while ($row = $query_sql->fetch_assoc()) { ?>
		
		
		<tr>
			<td> <?= $row['id']?> </td> <td><?= $row['name'] ?></td></tr><td><a href="stilllearning.php?="remove</td>
		</tr>


	<?php } 
}
?>
</table>
</html>