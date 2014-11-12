<?php

$array = ['name'=>'Russ', 'age'=>'29', 'gender'=>'male'];

?>

<html>
	<body>
		<h2>This is a test</h2>
		<ol>
		<?php foreach ($array as $key => $value) { ?>
		
		
			
			<li><?php echo "$key : $value";?></li>
				
		
		<?php } ?>
		</ol>
	</body>

<!--the catch with the above is making sure the only thing that you
want iterated is in the loop.  All of the other html pieces should
be outside the loop.-->  

</html>

