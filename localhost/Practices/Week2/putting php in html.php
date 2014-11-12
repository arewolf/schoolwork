<?php

$a2 = ['name' => "bob", 'age' => 78, 'car'=>'yugo'];

$key = array_keys($a2)

for($i=0; $i < count($a2); $i++) {
	$key = $keys[$i];
	echo "$key <br>";
	$value = $a2[$key];
	echo "$value <br>";
	

	//echo "{$keys[$i]}: {$a2[$keys[$i]]}"
	// or 
	//
}

//putting php into the html is not the best idea, its better
//to make a variable of the function and call that later.

<html>
<body>
	<h1>Some Divs:</h1>
	<?php 

foreach($a2 as $k => $v);
	echo "<div>$k: $v</div>";
}
?>
</body>
</html>


<?php //example of top structure. ?>

<?php
$div =" ";
foreach($a2 as $k => $v){
	$div = echo "<div>$k: $v</div>";
}
<html>
<body>
	<h1>Some Divs:</h1>
	<?php foreach($a2 as k=>$v) { ?>
	<div class = "foo">


	}
	<div><?php $div?></div>
</body>
</html>

