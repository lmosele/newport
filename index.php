<?php echo file_get_contents("src/includes/_head.php"); 
	  echo file_get_contents("src/includes/_menu.php"); ?>
<body id="home">

<!-- MOCKUPS -->
	<div class="floater-companion">
		<ul class="grid">
			<li class="mock1"><span class="s"></span></li>
			<li class="mock2"><span class="s"></span></li>
			<li class="mock3"><span class="s"></span></li>
			<li class="mock4"><span class="s"></span></li>
		</ul>
	</div>
<!-- CONTROLS -->
	<div class="arrows">
		<button class="btn arrow" onclick="$.fn.fullpage.moveSectionUp();"><i class="fa fa-chevron-up"></i></button>
		<button class="btn arrow" onclick="$.fn.fullpage.moveSectionDown();"><i class="fa fa-chevron-down"></i></button>
	</div>
<!-- CANVAS BG -->
	<canvas id="geometry"></canvas>

	<!-- CONTENT -->
	<div id="content">
	    <div class="section middle">
	    	<!-- main section -->
	    	<div class="slide" data-anchor="main">
	    		<div class="container">
	    			<h2>The Full Spectrum Designer You didn't know you needed.</h2>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSectionDown();">
	    				See My Work
	    			</button>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSlideRight();">
	    				About Me <i class="left fa fa-chevron-right"></i>
	    			</button>
	    		</div>
	    	</div>
	    	<!-- about me -->
    		<div class="slide" data-anchor="aboutme">
    			<div class="container">
	    			<h2>Hi, I'm Lucas.</h2>
	    			<h3>I am an Interaction Designer &amp; Developer from Brazil who lives in Boston, MA.</h3>
	    			<p>I'm looking for a team where I can roll up my sleeve and code while still maintaining beautiful UI.</p>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSectionDown();">Seet My Work</button>
	    			<a class="btn ghost">See My Resume</a>
    			</div>
    		</div>
	    </div>

	    <!-- SECTION 2 -->
	    <div class="section">
	    	<div class="floater">
				<figure class="description">
					<h3>Maxwell Health</h3>
					<ul class="tags">
						<li>User Interface</li>
						<li>Information Architecture</li>
						<li>Front End</li>
					</ul>
					<p>I was responsible for developing and designing Maxwell Health's multiple corporate websites. I focused on bringing the platforms from legacy code to scalable stylesheets, consistently modern design, and redesigned information architecture on the back end.</p>
					<a class="btn ghost" href="case.php">See Case Study</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 3 -->
	    <div class="section">
			<div class="floater">
				<figure class="description">
					<h3>SALT</h3>
					<ul class="tags">
						<li>User Experience</li>
						<li>User Interface</li>
						<li>Interaction Design</li>
					</ul>
					<p>As part of our product team, I worked on defining all brand UX guidelines, communicating with engineers, user testing, and designing user interfaces.</p>
					<a class="btn ghost" href="case.php">See Case Study</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 4 -->
	    <div class="section">
			<div class="floater">
				<figure class="description">
					<h3>Maxi Cosi Mico Max</h3>
					<ul class="tags">
						<li>User Experience</li>
						<li>User Interface</li>
						<li>Interaction Design</li>
					</ul>
					<p>I was brought on to lead the design of the world's first car seat customizer ecommerce tool. We worked closely with their team and branding guidelines to create a uniquely Cosi shopping experience.</p>
					<a class="btn ghost" href="case.php">See Case Study</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 5 -->
	    <div class="section middle">
			<a href="#" class="tile">
				<div class="preview"></div>
				<div class="text">
					<h3>Majestic Casual App</h3>
					<p>Concept App for the music channel Majestic Casual designed using Sketch &amp; Flinto</p>		
					<span>See More <i class="fa fa-chevron-right"></i></span>
				</div>
			</a>
			<a href="#" class="tile">
				<div class="preview"></div>
				<div class="text">
					<h3>Majestic Casual App</h3>
					<p>Concept App for the music channel Majestic Casual designed using Sketch &amp; Flinto</p>		
					<span>See More <i class="fa fa-chevron-right"></i></span>
				</div>
			</a>
	    </div>



	</div>



	<!-- SCRIPTS -->
	<script type="text/javascript" src="dist/js/jquery-3-alpha.min.js"></script>
	<script type="text/javascript" src="dist/js/jquery.fullpage.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>