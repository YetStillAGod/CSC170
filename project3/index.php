<?php
	$customCSS = "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/styles.css\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"css/navigation.css\">
	<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
	<link rel=\"stylesheet\" href=\"sss/sss.css\">
	<link rel=\"stylesheet\" href=\"css/home.css\">";
	include "inc/html-top.php"
?>

<body>
	<header>
		<?php include "inc/banner.php" ?>
	</header>
	<?php include "inc/nav.php" ?>
	<section class="inner-container">
		<h2 class="full-width">This is the homepage</h2>
		<div class="slider">
			<img src="images/Beatmania.jpg">
			<img src="images/beatmaniacontrols.jpg">
			<img src="images/game.png">
			<img src="images/paradox.png">
		</div>
	</section>

	<?php include "inc/scripts.php" ?>
	<body>
		<section class="container">
			<h2>
				Beatmania
			</h2>
			<p>
			Beatmania is a rhythm video game developed and distributed by Japanese game developer Konami and first released in December 1997. It contributed largely to the boom of music games in 1998, and the series expanded not only with arcade sequels, but also moved to home consoles and other portable devices, achieving a million unit sales. The Bemani line of music games from Konami is named after the series, was first adopted in the arcade release of Beatmania 3rdMix and kept ever since. The series came to an end with the last game being Beatmania The Final, released in 2002.
			</p>
			<div>
				<a href="beatmania.php">Read more...</a>
			</div>
		</section>
		<section class="container">
			<h2>
				Hasselblad
			</h2>
			<p>
				<strong>Victor Hasselblad AB</strong> is a Swedish manufacturer of medium format cameras, photographic equipment and image scanners based in Gothenburg, Sweden. The company originally became known for its classic analog medium-format cameras that used a waist-level viewfinder. Perhaps the most famous use of the Hasselblad camera was during the Apollo program missions when the first humans landed on the Moon. Almost all of the still photographs taken during these missions used modified Hasselblad cameras. In 2016, Hasselblad introduced the world's first digital compact mirrorless medium-format camera, the X1D-50c, changing the portability of medium-format photography. Hasselblad produces about 10,000 cameras a year from a small three-storey building.
			</p>
			<div>
				<a href="chongyuan.php">Read more...</a>
			</div>
		</section>
		<section class="container">
			<h2>
				Outer Wilds
			</h2>
			<p>
				Outer Wilds is a 2019 action-adventure game developed by Mobius Digital and published by Annapurna Interactive. It first released for Windows, Xbox One, and PlayStation 4 before releasing for PlayStation 5 and Xbox Series X/S in 2022. A Nintendo Switch version is also under development. <em>The game features the player character exploring a solar system stuck in a 22-minute time loop that ends with the star going supernova.</em>
			</p>
			<div>
				<a href="kumar.php">Read more...</a>
			</div>
		</section>
		<section class="container">
			<h2>
				Paradox Interactive
			</h2>
			<p>
				<strong>Paradox Interactive AB </strong>is a video game publisher based in Stockholm, Sweden. The company started out as the video game division of Target Games and then Paradox Entertainment (now Cabinet Entertainment) before being spun out into an independent company in 2004. Through a combination of expanding internal studios, founding new studios and purchasing independent developers, the company has grown to comprise nine first-partydevelopment studios, including their flagship Paradox Development Studio, and acts as publisher for games from other developers.
			</p>
			<div>
				<a href="shilling.php">Read More...</a>
			</div>
		</section>
	</body>
	<script src="sss/sss.js"></script>
	<script>
		$('.slider').sss();
	</script>
</body>