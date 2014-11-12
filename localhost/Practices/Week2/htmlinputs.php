<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action = "process.php">
		<input type="text" name="email" value="completed form">
		<input type="date" name="date">
		<input type="submit" value="SubmitImput">
		<button>Submit</button>
	</form>
	
<form>
	<fieldset>
	<legend>top</legend>
	<bottom>Submit</bottom>
	</fieldset>
	<fieldset>
	<legend>bottom</legend>
	<button>Submit</button>
	<button type="reset">Reset</button>
	</fieldset>
</form>
	
	<form action="process.php">
	<input type="radio" value="m" id="Male" name="gender">Male
	<input type="radio" value="f" id="Female" name="gender">Female
	<input type="radio" value="o" id="Other" name="gender">Other
	</form>
<!--This is same as above but with labels that can be clicked as well as radio buttons -->

<form action="process.php">
	<label for="male">Male</label>
	<input type="radio" value="m" id="Male" name="gender">
	<label for="Female">Female</label>
	<input type="radio" value="f" id="Female" name="gender">Female
	<input type="radio" value="o" id="Other" name="gender">Other
</form>


<form action="process.php">
	<label>Male<input type="radio" value="m" id="Male" name="gender"></label>
	
	<label>Female<input type="radio" value="f" id="Female" name="gender">Female</label>

</form>


<form action="process.php">
	<label>Male<input type="checkbox" value="m" id="Male" name="gender"></label>
	
	<label>Female<input type="checkbox" value="f" id="Female" name="gender">Female</label>

</form>

<input type="text" name="firstName" required>
	
<select name="state">
	<option>--select a state--</option>
	<option>Arizona</option>
	<option>Arkansas</option>
	<option>California</option>

<!--<selected> can be added as an attribute in an <option selected> to select that option by defualt.
<button disabled> disables a button. For text box, <input required> this makes this box have to be filled out.
-->

<?php
   $string ="this is some data";
   $stringShuffled = str_shuffle($string);
   print $stringShuffled;
?>




</body>
</html>