<?php echo file_get_contents("src/includes/_head.php"); 
	  echo file_get_contents("src/includes/_menu.php"); 
	  ?>
<body id="majestic">


	<a class="return" href="index.php#play">
		<i class="fa fa-chevron-left"></i>
		Return Home
	</a>

	<div class="project-display">
		
		<video class="appear fadeInUp" autoplay loop>
		  <source src="http://i.imgur.com/DKAG27L.webm" type="video/webm">
		  Your browser does not support Gifv, please install the <a href="http://www.videolan.org/vlc/download-macosx.html">webm plugin</a>. 
		</video> 
		<img src="dist/img/majestic/majestic-1.png">
		<img src="dist/img/majestic/majestic-3.png">
		<img src="dist/img/majestic/majestic-4.png">
	</div>

	<div class="project-text">
		<h1>Majestic Casual UI</h1>
		<ul class="tags">
				<li>Interaction Design</li>
				<li>Branding</li>
				<li>User Interface</li>
			</ul>
		<p>This is a rough concept app design for the music channel Majestic Casual. I wanted to capture the free nature of their music by designing the entire app experience around discovery while excluding any mention of genres. Music is split into "flavors" such as easy-listening, vocal, electronic, etc. The actual music playing UI is card-based and purposefully vague as to encourage listeners to try music they normally wouldn't. For that reason I hid the skip buttons behind a layered card interaction. Most of the animations were done in Flinto (I'm still learning, so excuse the bugginess!).</p>

		<p>Things I need to work on: make the timeline look clearer, establish the post-signup navigation, and define further exploration &amp; daily playlist interactions. In general, more UX work is needed, but it was a great first try at using Sketch and Flinto!</p>
	</div>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>