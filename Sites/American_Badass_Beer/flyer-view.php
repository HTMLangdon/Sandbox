<!DOCTYPE html>
<head>
</head>

<style>
	
	body{background-color:black;}
	#wrapper{width:100%; margin: 0 auto;}
	#container{width100%; text-align: center;}
	#flyer-image-container
	{
		text-align: center;
	}



</style>
<body>
<div id="wrapper">
	<div id="container">
		<div id="flyer-image-container">
			<img src="<?php echo 'img/events/flyers/full-render/' . $_GET['flyer-image-name'] . '.jpg'; ?>" alt="Full-Size version of an American Badass Beer Event">
		</div>
	</div>
</div>

</body>

</html>