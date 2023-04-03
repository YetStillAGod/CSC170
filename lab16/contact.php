
<?php
	$customCSS = "<link rel='stylesheet' type='text/css' href='css/styles.css'>
	<link rel='stylesheet' type='text/css' href='css/navigation.css'>
	<link rel='stylesheet' href='css/forms.css'>";
	include "inc/html-top.php"
?>

<body>
<div class="container">
	<header>
		<h1>Isaac Newton</h1>

		<div>The Physicist</div>
	</header>
	<? include "inc/nav.php" ?>
	<form method="post" action="form-processor.php">
		<label for="name">Name: </label>
		<input type="text" id="name" name="name"> <br>
		<label for="email">Enter Your Email: </label>
		<input type="text" id="email" name="email"> <br>
		<label for="phone">Your Phone Number: </label>
		<input type="text" id="phone" name="phone"> <br><br>
		<fieldset>
			<legend>Newton About You</legend>
			<h2>What things do you think that make Newton impressive?</h2>
			<input type="checkbox" id="like1" name="like1" value="hardwork">
			<label for="like1">His Hardwork</label><br>
			<input type="checkbox" id="like2" name="like2" value="talent">
			<label for="like2">His Talent</label><br>
			<input type="checkbox" id="like3" name="like3" value="luck">
			<label for="like3">His Luck</label><br>
			<h2>Which one is the most impressive achievement?</h2>
			<input type="radio" id="achieve1" name="achieve" value="math">
			<label for="achieve1">His Work In Calculus</label><br>
			<input type="radio" id="achieve2" name="achieve" value="physics">
			<label for="achieve2">His Work In Physics</label><br>
			<input type="radio" id="achieve3" name="achieve" value="coin">
			<label for="achieve3">His Work In Currency</label><br><br>
		</fieldset>
		<label for="more">Tell Us More</label><br>
		<textarea id="more" name="more"></textarea><br><br>
		<input type="submit" value="click to submit">
	</form>
</div>
<?php include "inc/scripts.php" ?>
</body>
</html>