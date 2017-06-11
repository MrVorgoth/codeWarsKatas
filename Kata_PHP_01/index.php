<!DOCTYPE html>
<?php include 'game.php';?>
<html lnag="pl">
<head>
	<meta charset="UTF-8">
	<title>CodeWars - Kata #10</title>

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Bubbler+One&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<section class="multiplicationBox">
		<div class="flexBox">
			<h2 class="flexBoxItem">Mumbling</h2>
			<hr />
			<h3 class="flexBoxItem">Description of task</h3>
				<p class="flexBoxItem">This time no story, no theory. The examples below show you how to write function accum:</p>

				<p class="flexBoxItem">Example: accum("RqaEzty"):</p>

				<p class="flexBoxItem">"R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"</p>
			<hr />
			<h3 class="flexBoxItem">Examples</h3>
				<?php
					echo '<div id="demo" class="flexBoxItem">Result of [ZpglnRxqenU] is</div>';
					echo '<div id="demo" class="flexBoxItem">'.accum("ZpglnRxqenU").'</div>';
				?>
		</div>
	</section>

</body>
</html>