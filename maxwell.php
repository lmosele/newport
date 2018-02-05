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
			<h1>Maxwell Health Corporate Website</h1 role="header">
			<ul class="tags">
				<li>User Experience</li>
				<li>User Interface</li>
				<li>Front-End Development</li>
			</ul>
		</div>
		<div class="case-text-container" >
			<div class="case-text" role="article">
				
				<p>Maxwell Health is an HR and benefits platform that combines the management and enrollment of benefits into one software experience. While still a relatively young company, it has made a splash in a market in dire need of innovation. </p>
				<h2>The Case - Corporate Website</h2>
				<p>As the sole front-end developer assigned to the marketing team, I was responsible for brainstorming, designing, and developing any and all projects that did not involve the engineering team. The first of these was the redesign of our corporate website, whose main purpose is to funnel leads into broker sign-ups.</p>

				<p class="callout">The site suffered from performance, accessibility and UX issues</p>

				<video class="appear fadeInUp" autoplay loop>
				  <source src="http://i.imgur.com/Reul5zJ.webm" type="video/webm">
				</video> 
				<span class="description" role="description">Old Site: Many moving parts &amp; low frame rate</span>

				<h2>Market Research</h2>
				<p>The first step was understanding our audience. We communicated with brokers (our main clients at the time) and started to understand where their priorities lay. Much like any landing page, when funneling our marketing leads into a successful sale, the most important thing was our product's differentiators.</p>
				<p>We decided to implement a more product focused approach, while leading with our key differentiators: our team and our tech.</p>

				<h2>The Technical Stuff</h2>
				<p>After several weeks of carefully deprecating old code and moving towards better practices like SASSifying our stylesheets, compressing &amp; concatenating JS files, and templating with PHP we arrived at the point where a redesign was finally possible. The streamlining of the front-end also meant that maintenance time was halved, and the templating meant that new sales pages could be created in a tenth of the time.</p>

				<p class="callout">Analytics showed that 20% of our traffic was on IE</p>

				<p>This meant we had to utilize graceful degradation on many of the techniques used to design the site.</p>

				<h2>The Build</h2>
				<p>After hundreds of sticky notes and months prototyping across our entire marketing presence we successfully designed a product-based visual language to easily define any and all marketing related microsites. We focused on clean design while still maintaining the playful-yet-sophisticated visual language.

					<ol class="list">
						<li>Friendly, but serious</li>
						<li>Honest</li>
						<li>Human</li>
						<li>Modern</li>
					</ol>

				</p>

				<img class="appear fadeInUp" alt="landing page" role="presentation" src="dist/img/maxwell/mh-3.png">
				<span class="description" role="description">Partner Landing Page</span>

				<img class="appear fadeInUp" alt="landing page" role="presentation" src="dist/img/maxwell/mockup.png">
				<span class="description" role="description">Customer Support Portal</span>

				<img class="appear fadeInUp" alt="infographc" role="presentation" src="dist/img/maxwell/mh-5.png">
				<span class="description" role="description">Responsive Infographic</span>

				<img class="appear fadeInUp" alt="svg animations" role="presentation" src="dist/img/maxwell/mh-6.png">
				<span class="description" role="description">Product descriptions accompanied by animated svg and UI videos.</span>


				<h2>The Result</h2>
				<p>Our final product showed that even with autoplaying 5 videos, the performance could still be stellar compared to similar sites. We reduced file sized by loading compressed image files, in-DOM SVG's and compressing all stylesheet and JS files.</p>

				<div class="center">
					<a class="btn ghost" href="https://www.maxwellhealth.com/" target="_blank">See The Current Site</a>
				</div>


			</div>
		</div>
	</article>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>