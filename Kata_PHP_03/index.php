<!DOCTYPE html>
<?php include 'game.php';?>
<html lnag="pl">
<head>
	<meta charset="UTF-8">
	<title>CodeWars - Kata #12</title>

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Bubbler+One&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<section class="multiplicationBox">
		<div class="flexBox">
			<h2 class="flexBoxItem">Shortest Word</h2>
			<hr />
			<h3 class="flexBoxItem">Description of task</h3>
				<p class="flexBoxItem">Simple, given a string of words, return the length of the shortest word(s).</p>

				<p class="flexBoxItem">String will never be empty and you do not need to account for different data types.</p>
			<hr />
			<h3 class="flexBoxItem">Examples</h3>
				<?php
					echo '<div id="demo" class="flexBoxItem">Result of [bitcoin take over the world maybe who knows perhaps] is</div>';
					echo '<div id="demo" class="flexBoxItem">'.findShort("bitcoin take over the world maybe who knows perhaps").'</div>';
				?>
		</div>
	</section>

</body>
</html>