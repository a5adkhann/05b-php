<?php
// $test = "05b batch";
// echo $test;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php
	$content = "Mixing HTML with PHP";
	$color = "red";
	
	?>

	<h1 style="color: <?php echo $color;?>"> <?php echo $content;?> </h1>
	
</body>
</html>