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
			<h1>Maxwell UI</h1 role="header">
			<ul class="tags">
				<li>User Experience</li>
				<li>User Interface</li>
				<li>Front-End Development</li>
			</ul>
		</div>
		<div class="case-text-container" >
			<div class="case-text" role="article">

				<p class="callout">Maxwell UI is an NPM component library as well as a reference website for Maxwell's designers and engineers.</p>

				<p>As part of product's efforts to solidify a design language, I worked closely with designers and engineers to develop a philosophy of component based design at Maxwell and to implement our <a href="https://maxwell-ui.herokuapp.com/">first interactive component library.</a></p>

				<img class="appear fadeInUp" alt="maxwell ui" role="presentation" src="dist/img/maxwell/mui1.png">

				<h2>Understanding the Problem</h2>
				<p>As designers, we're often taught to think of our products in layers, with each layer composing a feature. Lately, the concept of symbols has been adopted by tools like XD and Sketch, which more closely parallels the real world application of React, which is Maxwell's standard framework</p>
				<p>As a result, I introduced the concept to the design team in a series of learning sessions, leading into the tooling we use and how we can better use Sketch as a UI tool, while finally moving us away from Photoshop and Illustrator</p>

				<img class="appear fadeInUp" alt="maxwell ui" role="presentation" src="dist/img/maxwell/mui2.png">
				<span class="description">We began the process by creating symbol libraries in Sketch</span>

				<h2>The Technical Stuff</h2>
				<p>We used RSG to generate a templated module that not only allowed external exports but also rendered a static site, which we deployed onto Heroku.</p>		

				<p>The brunt of the work came into three parts: Styling the guide itself, standardizing the components used across our 4 main applications, and deploying a pipeline that kept the styleguide module, website, and repository in sync.</p>


				<img class="appear fadeInUp" alt="landing page" role="presentation" src="dist/img/maxwell/mui3.png">
				<span class="description" role="description">Basic style usage is also added to the site for clarity</span>

				<img class="appear fadeInUp" alt="landing page" role="presentation" src="dist/img/maxwell/mui4.png">
				<span class="description" role="description">Special components get sample code that is production ready</span>

				<p class="callout">MUI is a living document and thus is continually improving</p>

			</div>
		</div>
	</article>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>