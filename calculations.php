<?php
	$a = 10;
	$b = 2;
	$add = $a + $b;
	$minus = $a - $b;
	$mul = $a * $b;
	$div = $a / $b;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculations File</title>
</head>
<body>
	<?php
	$c1 = "red";
	$c2 = "blue";
	$c3 = "green";
	$c4 = "yellow";
	?>
	<p style="color: <?php echo $c1?>">The value of addition is <?php echo $add;?></p>
	<p style="color: <?php echo $c2?>">The value of subtraction is <?php echo $minus;?></p>
	<p style="color: <?php echo $c3?>">The value of multiplication is <?php echo $mul;?></p>
	<p style="color: <?php echo $c4?>">The value of division is <?php echo $div;?></p>
</body>
</html>