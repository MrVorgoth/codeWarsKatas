<!DOCTYPE html>
<?php include 'game.php';?>
<html lnag="pl">
<head>
	<meta charset="UTF-8">
	<title>CodeWars - Kata #15</title>

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Bubbler+One&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<section class="multiplicationBox">
		<div class="flexBox">
			<h2 class="flexBoxItem">Tribonacci sequence</h2>
			<hr />
			<h3 class="flexBoxItem">Description of task</h3>
				<p class="flexBoxItem">As the name may already reveal, it works basically like a Fibonacci, but summing the last 3 (instead of 2) numbers of the sequence to generate the next. And, worse part of it, regrettably I won't get to hear non-native Italian speakers trying to pronounce it :(</p>

				<p class="flexBoxItem">So, if we are to start our Tribonacci sequence with [1,1,1] as a starting input (AKA signature), we have this sequence:</p>

				<p class="flexBoxItem">[1,1,1,3,5,9,17,31,...]</p>
			<hr />
			<h3 class="flexBoxItem">Examples</h3>
				<?php
					echo '<div id="demo" class="flexBoxItem">Result of: signature | number of tribonacci elements -> [1,1,1] | 10 is</div>';
					$result = tribonacci([1,1,1],10);
					$counter = 0;
					foreach($result as $item) {
						$counter++;
						if($counter == 1) {
							echo '<span id="demo" class="flexBoxItem">['.$item.', </span>';
						} elseif ($counter == 10) {
							echo '<span id="demo" class="flexBoxItem">'.$item.']</span>';
						} else {
							echo '<span id="demo" class="flexBoxItem">'.$item.', </span>';
						}
					}
				?>
		</div>
	</section>
</body>
</html>