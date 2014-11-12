<?php

$people = [['name'=>'Russ', 'age'=>29, 'gender'=>'male'],['name'=>'Dave', 'age'=>30, 'gender'=>'male']];

?>


<html>
	<body>
		<h1>Some Divs:</h1>
		<ol>
			<?php foreach($people as $person) { ?>
			<li><ul>
				<?php foreach($person as $key => $value) { ?>
				<li>
					<div class="bar">
					<?php echo "$key : $value"; ?>
					</div>
				</li>
				<?php } ?>
			</ul></li>
			<?php } ?>
		</ol>
	</body>
</html>