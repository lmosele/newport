<?php echo file_get_contents("src/includes/_head.php"); 
	  echo file_get_contents("src/includes/_menu.php"); 
	  ?>
<body id="mayhem">


	<a class="return" href="index.php#play">
		<i class="fa fa-chevron-left"></i>
		Return Home
	</a>

	<div class="project-display">
		<video class="appear fadeInUp" autoplay loop>
		  <source src="http://i.imgur.com/tCoC6g2.webm" type="video/webm">
		  Your browser does not support Gifv, please install the <a href="http://www.videolan.org/vlc/download-macosx.html">webm plugin</a>. 
		</video> 
		<img src="dist/img/mayhem/mayhem-1.png">
		<img src="dist/img/mayhem/mayhem-2.png">
		<img src="dist/img/mayhem/mayhem-3.png">
		<img src="dist/img/mayhem/mayhem-4.png">
	</div>

	<div class="project-text">
		<h1>Model Mayhem UI</h1>
		<ul class="tags">
				<li>Interaction Design</li>
				<li>Branding</li>
				<li>User Interface</li>
			</ul>
		<p>As a daily user of the photography social media site Model Mayhem I find many flaws with their outdated UI and broken navigation. The biggest pain points being the lack of curation and exploration features for their members, as well as a completely unstandardized navigation throughout the site (there are three different navigation bars, depending on what page you are on).</p>

		<p>My main solution for this was to cut away all the unecessary steps. At its core, the free version of MM is simply about signing up, browsing casting calls, connecting with other talent, and messaging to coordinate photoshoots. This meant that a native experience could be stripped down into the very barebones of a social media network. That includes: a profile (with about/gallery/friends list) a discovery/browse section and a notifications feed, which would double as a friend's activity feed.</p>

		<p>While not completely fleshed out, this concept originally won the IdeaHack branding hackathon under the name <a href="https://www.behance.net/gallery/25485763/PORTRA-APP-UI" target="_blank">Portra</a>. </p>
	



	</div>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>