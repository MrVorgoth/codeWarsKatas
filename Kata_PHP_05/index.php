<!DOCTYPE html>
<?php include 'game.php';?>
<html lnag="pl">
<head>
	<meta charset="UTF-8">
	<title>CodeWars - Kata #14</title>

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Bubbler+One&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<section class="multiplicationBox">
		<div class="flexBox">
			<h2 class="flexBoxItem">Find The Parity Outlier</h2>
			<hr />
			<h3 class="flexBoxItem">Description of task</h3>
				<p class="flexBoxItem">You are given an array (which will have a length of at least 3, but could be very large) containing integers. The array is either entirely comprised of odd integers or entirely comprised of even integers except for a single integer N. Write a method that takes the array as an argument and returns N.</p>

				<p class="flexBoxItem">Example: [2, 4, 0, 100, 4, 11, 2602, 36] should return 11</p>

			<hr />
			<h3 class="flexBoxItem">Examples</h3>
				<?php
					echo '<div id="demo" class="flexBoxItem">Result of [160, 3, 1719, 19, 11, 13, -21] is</div>';
					echo '<div id="demo" class="flexBoxItem">'.find([160, 3, 1719, 19, 11, 13, -21]).'</div>';
				?>
		</div>
	</section>

</body>
</html>