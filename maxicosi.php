<?php echo file_get_contents("src/includes/_head.php"); 
	  echo file_get_contents("src/includes/_menu.php"); 
	  ?>
<body id="cosi">


	<a class="return" href="index.php">
		<i class="fa fa-chevron-left"></i>
		Return Home
	</a>

	<article class="project appear fadeInUp">
		<div class="header">
			<img class="logo" src="dist/img/cosi/logo.jpg">
			<h1>Maxi Cosi</h1 role="header">
			<ul class="tags">
				<li>User Experience</li>
				<li>User Interface</li>
				<li>Interaction Design</li>
			</ul>
		</div>
		<div class="case-text-container" >
			<div class="case-text" role="article">
				
				<h2>The Case</h2>

				<p>I was asked to come up with a solution for Maxi-Cosi's Mico Max 30™ customization page. The requirements included designing a mobile friendly tool that would organize and display all the customization options available to users while still remaining simple to non-power users (ie: tired mothers/fathers and people over 40). I was also required to stay within the Maxi-Cosi branding guidelines and development limits. </p>

				<h2>The Branding</h2>
				<p>I began by consolidating any branding information I had in one document. I stayed in line with Maxi-Cosi's soft and childlike branding by selecting Omnes Pro as playful but modest font.</p>

				<img class="appear fadeInUp" alt="branding" role="presentation" src="dist/img/cosi/mc-3.jpg">
				<span role="description">Branding Style Tile.</span>

				<h2>The Design</h2>
				<p>Once styling was finalized I moved on to designing the user interface. A vertical tabbing system set apart the types of materials and color options while a horizontal tabbed slider showed accessories and toys. I decided to provide information on these extra options by allowing the user to hover over the content and replace the main image with a short description. This turned out to be a great solution for saving real estate above the fold. Any material and color selections would update the photo on the page per requirements. 
				</p>

				<img class="appear fadeInUp" alt="photoshop mockup" role="presentation" src="dist/img/cosi/mc-2.gif">
				<span role="description">The final design, animated in Photoshop.</span>

				<h2>The Results</h2>
				<p>The product was received <a href="http://www.prnewswire.com/news-releases/maxi-cosi-introduces-first-custom-designable-car-seat-300067915.html" target="_blank"> positively</a>, and is still their main product line to this day.</p>

				<img class="appear fadeInUp" role="presentation" src="dist/img/cosi/press.png">

				<img class="appear fadeInUp" alt="photoshop mockup" role="presentation" src="dist/img/cosi/mc-4.png">
				<div class="center">
					<a class="btn ghost" href="http://www.maxicosicustom.com/mico-max-custom" target="_blank">See Product</a>
				</div>
				


			</div>
		</div>
	</article>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>