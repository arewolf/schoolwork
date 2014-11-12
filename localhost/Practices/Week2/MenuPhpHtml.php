<?php

$insurance = ['company'=>'Progressive', 'quality'=>'poor', 'skill level' => 'retarded cat'];
?>

<html>
	<body>
		<select name ="Insurance">
		<?php foreach ($insurance as $key => $value) { ?>
			<option> <?php echo "$key : $value" ?> </option>
		<?php } ?>
		</select>
	</body>
</html>