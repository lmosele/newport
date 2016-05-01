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
	    			<h2>The Full Spectrum Designer You Didn't Know You Needed.</h2>
	    			<span>(Just Kidding)</span>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSectionDown();">
	    				See My Work
	    			</button>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSlideRight();">
	    				Who I Am <i class="left fa fa-chevron-right"></i>
	    			</button>
	    		</div>
	    	</div>
	    	<!-- about me -->
    		<div class="slide" data-anchor="aboutme">
    			<div class="container">
	    			<h2>Hi, I'm Lucas.</h2>
	    			<h3>I am a multi-disciplinary designer from Brazil living and working from Boston, MA.</h3>
	    			<div class="container small">
		    			<a class="btn ghost full" target="_blank" href="./dist/docs/lucas-mosele-resume.pdf">Resume <i class="left fa fa-download"></i></a>
		    			<button class="btn ghost full" onclick="$.fn.fullpage.moveSectionDown();">My Work</button>
		    			<a class="btn ghost full" href="#about" >About Me</a>
	    			</div>
    			</div>
    		</div>
	    </div>

	    <!-- SECTION 2 -->
	    <div class="section" id="work">
	    	<div class="floater">
				<figure class="description">
					<h3>Maxwell Health</h3>
					<ul class="tags">
						<li>Front-End </li>
						<li>Information Architecture</li>
						<li>Interaction Design</li>
					</ul>
					<p>I am responsible for developing, designing, and maintaining Maxwell Health's multiple corporate websites and overall public web presence. I focused on bringing the platforms from legacy code to scalable stylesheets, consistently modern design, and redesigned information architecture on the back end.</p>
					<a class="btn ghost" href="maxwell.php">Website Case Study</a>
					<a class="btn ghost" target="_blank" href="https://medium.com/@l_mosele/the-process-behind-our-end-of-year-report-bc6a71b0aca6#.mvo8kgik2">Yearly Report Case Study</a>
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
					<a class="btn ghost" href="salt.php">Product Case Study</a>
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
					<a class="btn ghost" href="maxicosi.php">See Case Study</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 5 -->
	    <div class="section">
			<div class="floater">
				<figure class="description">
					<h3>AllCells</h3>
					<ul class="tags">
						<li>User Experience</li>
						<li>User Interface</li>
						<li>Interaction Design</li>
					</ul>
					<p>I worked with Trellis to design the UX and UI of AllCell's entire new Ecommerce experience. I defined all architecture and UI guidelines from the product experience to the community and forum sites.</p>
					<a class="btn ghost" target="_blank" href="https://www.allcells.com/">Home Page</a>
					<a class="btn ghost" target="_blank" href="http://www.allcells.com/products/">Products</a>
					<a class="btn ghost" target="_blank" href="https://www.allcells.com/forum/products/">Forum</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 6 -->
	    <div class="section middle" id="play">
			<a href="majestic.php" class="tile">
				<div class="preview majestic"></div>
				<div class="text">
					<h3>Majestic Casual WIP</h3>
					<p>Work-in-Progress App design for the music channel Majestic Casual designed using Sketch &amp; Flinto</p>		
					<span>See More <i class="fa fa-chevron-right"></i></span>
				</div>
			</a>
			<a href="mayhem.php" class="tile">
				<div class="preview mayhem"></div>
				<div class="text">
					<h3>Model Mayhem App</h3>
					<p>A branding/interaction mockup in Flinto of what I'd imagine Model Mayhem's app would look like.</p>		
					<span>See More <i class="fa fa-chevron-right"></i></span>
				</div>
			</a>
	    </div>

	     <!-- SECTION 7 -->
	    <div class="section middle">
			<a href="https://www.behance.net/gallery/25486943/STAR-WARS-ART-DECO-POSTERS-(PT-1)" target="_blank" class="tile">
				<div class="preview starwars"></div>
				<div class="text">
					<h3>Star Wars Art Deco</h3>
					<p>I'm currently challenging myself to work on illustrating my favorite planets from Star Wars in 1920's travel poster style.</p>
					<span>See More <i class="fa fa-external-link"></i></span>
				</div>
			</a>
			<a href="https://www.behance.net/gallery/25486739/GREAT-GATSBY-POSTER" target="_blank" class="tile">
				<div class="preview gatsby"></div>
				<div class="text">
					<h3>Great Gatsby Poster</h3>
					<p>A poster based off of a book cover (not Great Gatsby) that I saw in the library, the character was based off of an old theater poster from the same era.</p>
					<span>See More <i class="fa fa-external-link"></i></span>
				</div>
			</a>
	    </div>

	     <!-- SECTION 8 -->
	    <div class="section middle">
			<a href="http://www.moddb.com/mods/eras-of-the-mercenaries" target="_blank" class="tile">
				<div class="preview eotm"></div>
				<div class="text">
					<h3>Eras of The Mercenaries</h3>
					<p>A 3 year project to modify PetroGlyph's Empire At War game, I worked tirelessly with a community of artists, as well as modelling and designing my own assets.</p>		
					<span>See More <i class="fa fa-external-link"></i></span>
				</div>
			</a>
			<a href="http://photography.lmosele.com" target="_blank" class="tile">
				<div class="preview photo"></div>
				<div class="text">
					<h3>Photography Portfolio</h3>
					<p>A weekend project to design my responsive and performance-friendly photography portfolio.</p>		
					<span>See More <i class="fa fa-external-link"></i></span>
				</div>
			</a>
	    </div>

	     <!-- SECTION 9 -->
	    <div class="section middle" id="about">
				<div class="tile bio">
					<div class="preview bio"></div>
					<div class="text">
						<h3>About Me</h3>
						<p>I'm a UX/UI Designer with Front-End chops who loves working in diverse teams with passionate people.  <br><br>When I'm not building awesome products I'm a freelance photographer &amp; urban explorer. I also teach web &amp; UX design at Startup Institute! You can reach me via:
						 </p>	
						<ul>
							<li><a href="https://www.instagram.com/300iso/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
							<li><a href="https://twitter.com/l_mosele" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
							<li><a href="https://www.linkedin.com/in/lucasmosele" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>Linkedin</a></li>
							<li><a href="https://www.behance.net/lmosele" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i>Behance</a></li>
						</ul>	
						<a href="mailto:lucasmosele@gmail.com" class="btn ghost"><i class="fa fa-envelope" aria-hidden="true"></i>E-mail Me</a>
					</div>
		</div>

	
	<div id="awwwards" class="nominee white left">
	<a href="http://www.awwwards.com/sites/lucas-mosele-ui-ux-designer-developer" target="_blank">Awwwards</a>
	</div>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="dist/js/jquery-3-alpha.min.js"></script>
	<script type="text/javascript" src="dist/js/jquery.fullpage.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>