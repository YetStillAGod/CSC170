
<?php include "inc/html-top.php" ?>

<body>
<div class="container">
	<header>
		<h1>Isaac Newton</h1>

		<div>The Physicist</div>
	</header>
	<? include "inc/nav.php" ?>
	<section class="lead inner-container">
		<h2 class="full-width">Wellcome to the World of Isaac Newton</h2>
		<div class="slider">
			<img src="images/image1.png" alt="Newton">
			<img src="images/image2.png" alt="Newton">			
		</div>
		<div id="accordion">
			<div>
				<h3>About Newton</h3>
				<p>Sir Isaac Newton PRS (25 December 1642 – 20 March 1726/27) was an English mathematician, physicist, astronomer, alchemist, theologian, and author (described in his time as a "natural philosopher"). He was a key figure in the philosophical revolution known as the Enlightenment. His book <em>Philosophiæ Naturalis Principia Mathematica</em> (Mathematical Principles of Natural Philosophy), first published in 1687, established classical mechanics. Newton also made seminal contributions to optics, and shares credit with German mathematician Gottfried Wilhelm Leibniz for developing infinitesimal calculus.</p>

				<p><em>Opticks</em>, published in 1704. He also formulated an empirical law of cooling, made the first theoretical calculation of the speed of sound, and introduced the notion of a Newtonian fluid.</p>

				<p>Newton was a fellow of Trinity College and the second Lucasian Professor of Mathematics at the University of Cambridge. He was a devout but unorthodox Christian who privately rejected the doctrine of the Trinity. He refused to take holy orders in the Church of England, unlike most members of the Cambridge faculty of the day. Beyond his work on the mathematical sciences, Newton dedicated much of his time to the study of alchemy and biblical chronology, but most of his work in those areas remained unpublished until long after his death.</p>
			</div>

			<button id="more">more</button>

			<div id="after">
				<h3>His Works</h3>

				<p>Newton's work has been said "to distinctly advance every branch of mathematics then studied". His work on the subject, usually referred to as fluxions or calculus, seen in a manuscript of October 1666, is now published among Newton's mathematical papers. His work <em>De analysi per aequationes numero terminorum infinitas</em>, sent by Isaac Barrow to John Collins in June 1669, was identified by Barrow in a letter sent to Collins that August as the work "of an extraordinary genius and proficiency in these things". </p>

				<p>He showed that colored light does not change its properties by separating out a colored beam and shining it on various objects, and that regardless of whether reflected, scattered, or transmitted, the light remains the same color. Thus, he observed that color is the result of objects interacting with already-colored light rather than objects generating the color themselves. This is known as Newton's theory of color. </p>

				<p>The <em>Principia</em> was published on 5 July 1687 with encouragement and financial help from Halley. In this work, Newton stated the three universal laws of motion. Together, these laws describe the relationship between any object, the forces acting upon it and 	the resulting motion, laying the foundation for classical mechanics. They contributed to many advances during the Industrial Revolution which soon followed and were not improved upon for more than 200 years. Many of these advances continue to be the underpinnings of non-relativistic technologies in the modern world. He used the Latin word gravitas (weight) for the effect that would become known as gravity, and defined the law of universal gravitation.</p>
			</div>
		</div>
	</section>
</div>
<script src="js/scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="sss/sss.js"></script>
<script>
	$('.slider').sss();
</script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$( "#accordion" ).accordion();
</script>
</body>
</html>