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
			<h1>Maxwell Health</h1 role="header">
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
				<p>Maxwell Health's entire marketing model revolves around inbound and partnership development. As the sole front-end developer assigned to the marketing team, I was responsible for brainstorming, designing, and developing any and all projects that did not involve engineering. The first of these was the redesign of our corporate website, whose main purpose is to funnel leads into sign-ups.</p>

				<p>The older site was a great representation of our brand, but in the end it suffered from serious performance/accessibility issues like loading over a dozen scripts and stylesheets, uncompressed video, and dozens of gifs &amp; pngs. The total request time was ~8s on a high speed connection. My job was to get to reduce load time, increase signups, and redesign the website for a fresh new look.</p>

				<video class="appear fadeInUp" autoplay loop>
				  <source src="http://i.imgur.com/Reul5zJ.webm" type="video/webm">
				</video> 
				<span role="description">Old Site: Many moving parts &amp; low frame rate</span>

				<h2>The Research</h2>
				<p>The first thing I needed to understand was our infrastructure. It was important to know the spillover between the corporate website and other domains that lived on the same server. In other words, I needed to know what resources were shared between our marketing sites, and what could be safely changed/removed. </p>
				<p>The second step was understanding our audience. It was clear that brokers comprised the majority of our traffic, but we weren't very clear on what their behavior was (as our analytics was improperly implemented).</p>

				<h2>The Process</h2>
				<p>After several weeks of carefully deprecating old code and moving towards better practices like SASSifying our stylesheets, compressing &amp; concatenating JS files, and templating with PHP I arrived at the point where a redesign was finally possible. The streamlining of the front-end also meant that maintenance time was halved, and the templating meant that new sales pages could be created in a tenth of the time.</p>
				<p>Once implemented on a templatized footer across the website, our analytics showed that about 20% of our traffic was via Internet Explorer. This meant that I had to maintain similar levels of our brand's personality within the home page while still remaining accessible to the later versions of IE. I achieved this with constant testing on <a href="http://blindbrowser.com/" target="_blank">Blind Browser</a> and <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank">VirtualBox</a> VMs</p>

				<h2>The Design</h2>
				<p>After hundreds of sticky notes and months prototyping across our entire marketing presence we successfully designed the new partner landing pages, sales sites, home page, and product marketing pages. We focused on clean design while still maintaining the playful-yet-sophisticated visual language.</p>

				<img class="appear fadeInUp" alt="landing page" role="presentation" src="dist/img/maxwell/mh-3.png">
				<span role="description">Partner Landing Page</span>

				<img class="appear fadeInUp" alt="infographc" role="presentation" src="dist/img/maxwell/mh-5.png">
				<span role="description">Responsive Infographic</span>

				<img class="appear fadeInUp" alt="svg animations" role="presentation" src="dist/img/maxwell/mh-6.png">
				<span role="description">Product descriptions accompanied by animated svg and UI videos.</span>


				<h2>The Result</h2>
				<p>Our final product showed that even with autoplaying 5 videos, the performance could still be stellar compared to similar sites. We reduced file sized by loading compressed image files, in-DOM SVG's and compressing all stylesheet and JS files.</p>

				<div class="center">
					<a class="btn ghost" href="https://www.maxwellhealth.com/" target="_blank">See Site</a>
				</div>


			</div>
		</div>
	</article>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>