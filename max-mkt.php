<?php echo file_get_contents("src/includes/_head.php"); 
	  echo file_get_contents("src/includes/_menu.php"); 
	  ?>
<body id="maxwell">


	<a class="return" href="index.php">
		<i class="fa fa-chevron-left"></i>
		Return Home
	</a>

	<article class="project appear fadeInUp">
		<div class="header">
			<img class="logo" src="dist/img/maxwell/logo.png">
			<h1>Product Marketplace</h1 role="header">
			<ul class="tags">
				<li>User Experience</li>
				<li>Information Architecture</li>
				<li>Front-End Development</li>
			</ul>
		</div>
		<div class="case-text-container" >
			<div class="case-text" role="article">

				<p class="callout">Maxwell's product marketplace is the world's first B2B marketplace for employer benefits.</p>

				<p>As my first project in the product team, I assigned to a small team of specialists tasked with developing the strategy, design, and development around the new marketplace. This marketplace's main role was to allow brokers to shop for products for their clients, which in turned fed into our application as shoppable benefits for employees.</p>

				<img class="appear fadeInUp" alt="maxwell ui" role="presentation" src="dist/img/maxwell/mkt1.png">

				<h2>Understanding the Problem</h2>
				<p>Since this was the first time insurance packages has been sold at this scale in a digital format, we focused the first month iterating on business questions and design challenges.</p>

				<p class="callout">We quickly realized the closer to traditional Ecommerce we could get, the more useful this application would be.</p>

				<img class="appear fadeInUp" alt="maxwell ui" role="presentation" src="dist/img/maxwell/mkt4.png">


				<span class="description">We began the process architecting a simple diagram flow.</span>

				<h2>Prototyping</h2>
				<p>Using BigCommerce we prototyped ideas for layouts before committing to any aesthetic direction.</p>		

				<img class="appear fadeInUp" alt="landing page" role="presentation" src="dist/img/maxwell/mkt5.png">
				<span class="description" role="description">This allowed for high fidelity prototypes of typical ecommerce patterns</span>

				<h2>Designing In The Browser</h2>
				<p>Due to the hurried deadlines on the project, and the size of the team (myself and an engineer) we decided to move directly into the development phase, tweaking styles and aesthetics as we went:</p>

				<img class="appear fadeInUp" alt="WIP" role="presentation" src="dist/img/maxwell/mkt3.png">
				<span class="description" role="description">WIP Screenshot of the main shopping experience for Brokers</span>

				<p class="callout">The final design is NDA and lives behind a portal.</p>

			</div>
		</div>
	</article>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>