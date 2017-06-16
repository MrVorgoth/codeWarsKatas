<!DOCTYPE html>
<?php include 'game.php';?>
<html lnag="pl">
<head>
	<meta charset="UTF-8">
	<title>CodeWars - Kata #11</title>

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Bubbler+One&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<section class="multiplicationBox">
		<div class="flexBox">
			<h2 class="flexBoxItem">Jaden Casing Strings</h2>
			<hr />
			<h3 class="flexBoxItem">Description of task</h3>
				<p class="flexBoxItem">Your task is to convert strings to how they would be written by Jaden Smith. The strings are actual quotes from Jaden Smith, but they are not capitalized in the same way he originally typed them. Example:</p>

				<p class="flexBoxItem">Not Jaden-Cased: "How can mirrors be real if our eyes aren't real"</p>

				<p class="flexBoxItem">Jaden-Cased: "How Can Mirrors Be Real If Our Eyes Aren't Real"</p>

			<hr />
			<h3 class="flexBoxItem">Examples</h3>
				<?php
					echo '<div id="demo" class="flexBoxItem">Result of [You must not know fashion] is</div>';
					echo '<div id="demo" class="flexBoxItem">'.toJadenCase("You must not know fashion").'</div>';
				?>
		</div>
	</section>

</body>
</html>