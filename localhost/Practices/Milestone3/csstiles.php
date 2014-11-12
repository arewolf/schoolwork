<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div.tiles {
			width:400px;
			min-height:200px;
			background-color: yellow;
			padding-left: 10px;
			padding-bottom: 10px;
			

		}
		
		div.tiles > div {
			height:90px;
			width: 90px;
			background-color: darkred;
			margin-right: 10px;
			margin-top:10px;
			display: inline-block;
			vertical-align: top;

		}
	 	#screw	{
			height: 100px;
			background-color: green;
		}


	</style>
</head>
<body>
	<div class="tiles">
		<div>1</div>
		<div id="screw">2</div>
		<div>3</div>
		<div>4</div>
		<div>5</div>
		<div>6</div>
		<div>7</div>
		<div>8</div>
	</div>
</body>
</html>