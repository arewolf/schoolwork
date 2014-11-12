<?php

$colors = array('blue','red','green','orange');
$person_value='';
$color_value='';

if ($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['person'])){
		$person_value=$_POST['person'];
	}

	if(isset($_POST['color'])){
		$color_value=$_POST['color'];
	}
}

else{
	echo "GET";
}



$options='';
// for ($i=0; $i<5; $i++){
// 	$color_looped=$_POST["color$i"];	
// }


foreach($colors as $color){
	$selected = ($color_value==$colors) ? 'selected' : '';
	$options.= "<option $selected> $color </option>\n";
}	



?>

<html>
<body>
	<form action='' method='POST'>
		<?php
		for ($i=0; $i<5; $i++){ ?>


		Name:<input type="text" name="person<?php $i?>" value="<?php echo $person_value;?>">
		Favorite Color:<select name="color<?php $i?>">
			<?php echo $options; ?>
			</select><br>

		<?php }?>

			<input type='submit'> 
</body>
</html>