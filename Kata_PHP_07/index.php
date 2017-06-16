<!DOCTYPE html>
<?php include 'game.php';?>
<html lnag="pl">
<head>
	<meta charset="UTF-8">
	<title>CodeWars - Kata #16</title>

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Bubbler+One&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<section class="multiplicationBox">
		<div class="flexBox">
			<h2 class="flexBoxItem">Consecutive strings</h2>
			<hr />
			<h3 class="flexBoxItem">Description of task</h3>
				<p class="flexBoxItem">You are given an array strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.</p>

				<p class="flexBoxItem">Example: (["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"</p>

			<hr />
			<h3 class="flexBoxItem">Examples</h3>
				<?php
					echo '<div id="demo" class="flexBoxItem">Result of ["hello", "world", "sun", "moon", "sword", "crossbow"] | 1 element is</div>';
					echo '<div id="demo" class="flexBoxItem">'.longestConsec(["hello", "world", "sun", "moon", "sword", "crossbow"], 1).'</div>';
				?>
		</div>
	</section>
</body>
</html>