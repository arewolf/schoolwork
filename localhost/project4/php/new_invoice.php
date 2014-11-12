<?php

//insert_id, takes the id from the last insert statement.
//  


$mysqli = new mysqli('localhost', 'root', '', 'gun_shop');
//                  (url, username, password, database)
if ($mysqli->connect_errno) {
	echo 'Failed to connect to Database: '. $mysqli->connect_error;
}
$id='';
$total=00;
$invoice_id=null;
$lineitem_id=null;
$invoice_row="";


//Create new Invoice and Pulls for new Invoice ID:
if (empty($_POST['invoice_id']) && empty($_GET['invoice_id'])){
	$id = $_GET['id'];
	$invoice_db_insert="INSERT
						INTO invoice (customer_id) 
						VALUES ($id);";
	$mysqli->query($invoice_db_insert);
	$invoice_id=$mysqli->insert_id;
}


//check for post state resubmission, resets p :
elseif($_SERVER["REQUEST_METHOD"]=="POST"){	
	$quantity=$_POST['quantity'];
	$id=$_POST['customer_id'];
	$insert_total=$_POST['total'];	
	$invoice_id=$_POST['invoice_id'];
	$product_id= $_POST['product_id'];

	//insert into lineitem//
	$lineitem_db_insert="INSERT 
						 INTO lineitem (invoice_id, product_id, quantity) 
						 VALUES ($invoice_id, $product_id, $quantity);";
	$lineitem_results= $mysqli->query($lineitem_db_insert);
}

//Delete from invoice
if(isset($_GET['lineitem_id'])){
	$id=$_GET['customer_id'];
	$invoice_id=$_GET['invoice_id'];
	$lineitem_id=$_GET['lineitem_id'];
	$lineitem_delete="DELETE 
					  FROM lineitem
					  WHERE lineitem_id = $lineitem_id;";
	$mysqli->query($lineitem_delete);

}

//gets from database back to invoice table;
$html_table_sql="SELECT *
				  FROM product, invoice, lineitem 
				  WHERE invoice.invoice_id = lineitem.invoice_id 
				  AND invoice.invoice_id = $invoice_id
				  AND product.product_id = lineitem.product_id;";
$html_table_results= $mysqli->query($html_table_sql);



//gets for product option box
$product_db_select = "select * from product";
$product_results = $mysqli->query($product_db_select);

//gets for customer name


$customer_row="";
$customer_db_select = "SELECT firstname, lastname 
					   FROM customer 
					   WHERE customer_id = '$id';";
$customer_results = $mysqli->query($customer_db_select);	

if ($customer_results != FALSE) {
	$customer_row = $customer_results->fetch_assoc();
}else{
	echo "CUSTOMER ERROR!";
}




		

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New Invoice</title>
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
		<h1>INVOICE #<?= $invoice_id ?></h1>
		<h3>Customer <?= $customer_row['firstname'] . ' ' . $customer_row['lastname'] ?></h3>
		<table>
			<th>Quantity</th><th>Item</th><th>Cost</th><th>Subtotal</th>
			
<!--////////////////////database to html table////////////////-->
			<?php 
			if(!empty($_POST) || $lineitem_id){
				
				while ($table_row = $html_table_results->fetch_assoc()) { ?>
					
					<tr>
						<td><?= $table_row['quantity']?></td>
						<td><?= $table_row['item'] ?></td>
						<td>$<?= $table_row['price'] ?></td>
						<td>$<?= $subtotal=($table_row['price'] * $table_row['quantity'])?></td>
							
						<td><a href="new_invoice.php?lineitem_id=<?=$table_row['lineitem_id']?>&amp;customer_id=<?=$table_row['customer_id']?>&amp;invoice_id=<?=$table_row['invoice_id']?>">Remove</td>
					</tr>
		<?php 
				$total += $subtotal;
				} 
		}?>
					<tr>
						<td> </td>
						<td> </td>
						<td> </td>
						<td>Total:$ <?=money_format('%i', $total)?></td>
					</tr>


		</table>
				
		<form action="new_invoice.php" method="post">

<!--////////////////////product to select option loop ////////////////-->	
			Product:
			<select name="product_id">
				
				<option>--choose a product--</option>

				<?php 
				if ($product_results !== FALSE) {
					while ($product_row = $product_results->fetch_assoc()) { ?>
			
					<option value="<?=$product_row['product_id']?>"><?php echo $product_row['item'] ?></option>

					<?php }
	
				}
				else {
				echo $mysqli->error;
				} ?>
			</select>

<!--////////////////////Quantity Loop and hidden values/////////////////////////-->

			Quantity:

			<select name="quantity">
			<?php for($i=1; $i<=10; $i++){?>	
				<option><?= $i ?></option>
			<?php }?>
			</select>

			<input type="hidden" name="invoice_id" value="<?= $invoice_id?>">
			<input type="hidden" name="customer_id" value="<?= $id?>">
			<input type="hidden" name="total" value="<?= $total?>">
		
			<button>Submit</button>
		</form>
	</main>

</body>
</html>