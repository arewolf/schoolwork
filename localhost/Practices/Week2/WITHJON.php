<?php


$clothes = ['shirt','pants','sox'];
$return= "";
foreach ($clothes as $value){

$return .= "<option value ='option'>" . $value . "</option>";

}


$thing = [1,2,3,4,5];
$option = "";
foreach($thing as $value) {
	$option .= "<option> $value </option>";
	echo $option;
}



//$again = [1,2,3,4,5];
$again = ["dog"=>2, "cat"=>3, "monkey"=>4, "person" => 5,"sheep"=> 6, "turkey"=>7, "pigs"=>8];
$smish = "";
foreach ($again as $key => $lock){
	$smish .= "<option> $key </option>";
}

$aArray = ["Mac", "Windows", "Linux"];
$resu = "";
foreach ($aArray as $valu){
	$resu .= "<option> $valu </option>";

}




?>




<html>
<body>

<form action="some.php">
	<select name="product">
		<option value="option">--please select an option--</option>
		<?php echo $return ?> 
		
	</select>

	<select name="thing">
		<?php echo $option ?>
	</select>

	<select name="thing">
		<?php echo $smish ?>
	</select>

	<select>
		<?php echo $resu ?>
	</select>

	<label for="male">male</label>
	<input type="checkbox" id="male" name="he">
	<label for="female">female</label>
	<input type="radio" id="female" name="gender">
	<label for="horse">horse</label>
	<input type="radio" id="horse" name="gender">
	<input type="color">test
	<br> enter your password <input type="password" name="pass">
	<input type="text">
	<input type="datetime-local">
	<input type="date">
	<input type="month">
	<input type="number">
	

</form>
</body>
</html>





