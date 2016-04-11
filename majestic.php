<?php echo file_get_contents("src/includes/_head.php"); 
	  echo file_get_contents("src/includes/_menu.php"); 
	  ?>
<body id="majestic">


	<a class="return" href="index.php">
		<i class="fa fa-chevron-left"></i>
		Return Home
	</a>

	<div class="project-display">
		<video class="appear fadeInUp" autoplay loop>
		  <source src="http://i.imgur.com/tCoC6g2.webm" type="video/webm">
		  Your browser does not support Gifv, please install the <a href="http://www.videolan.org/vlc/download-macosx.html">webm plugin</a>. 
		</video> 
		<video class="appear fadeInUp" autoplay loop>
		  <source src="http://i.imgur.com/tCoC6g2.webm" type="video/webm">
		  Your browser does not support Gifv, please install the <a href="http://www.videolan.org/vlc/download-macosx.html">webm plugin</a>. 
		</video> 
	</div>

	<div class="project-text">
		<h1>Majestic Casual UI</h1>
		<ul class="tags">
				<li>Interaction Design</li>
				<li>Branding</li>
				<li>User Interface</li>
			</ul>
		<p>This is a concept app design for the music channel Majestic Casual. I wanted to capture the free nature of their music by designing the entire app experience around discovery while excluding any mention of genres. Music is split into "types" such as easy-listening, </p>
	</div>

	<?php include("src/includes/_case-footer.php"); ?>
	
</body>
</html>