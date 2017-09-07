

<?php echo file_get_contents("./src/modules/_head.php") ?>

<body>

  <?php echo file_get_contents("./src/modules/_relieved-navbar.php") ?>
  <!-- Splash Header -->
	<header class="splash relieved-homepage row around-xs">
		<article class="splash-container row">
			<div class="splash-details col-xs-12 col-md-5 first-md">
				<?php echo file_get_contents("./dist/img/swiggle.svg") ?>
				<div class="post-crumb-category with-text">
					<a href="#" class="post-crumb-link">
						Healthy Choices
					</a>
				</div>
				<span class="post-crumb-datetime">July 15th, 2017</span>
				<a href="#" class="post-title-large">
					<h1>8 Ways to Refresh and Personalize Your Home</h1>
				</a>
				<p class="post-description">From updating hardware and faucets to layering colors and textures, here are some ideas to kickstart a kitchen makeover that brings the entire home to life.</p>

				<div class="post-author-slug slug-large">
					<img src="./dist/img/photos/author1.png" class="author-slug-image">
					<span class="author-slug-title">
						<em>by</em> Julia Morrow
					</span>
				</div>
			</div>
			<a href="{Post Link}" class="splash-image-container col-xs-12 col-md-7 first-xs" 
					 style="background-image:url('./dist/img/photos/splash1.jpg')">
			</a>
			<?php echo file_get_contents("./dist/img/chevron.svg") ?>
			<?php echo file_get_contents("./dist/img/arch.svg") ?>
			<?php echo file_get_contents("./dist/img/dot-grid.svg") ?>
		</article>
	</header>

	<!-- Recent Posts -->
	<section class="section row">
		<h2 class="section-title text-orange col-xs-12">Recent Stories</h2>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<article class="post-medium">
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/tile1.jpg">
					</a>
					<div class="post-image-slug full">
						Home Remedies
					</div>
				</div>
				<div class="post-details">
					<a href="#" class="post-title">
						<h3>8 Ways to Refresh and Personalize Your Home</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<article class="post-medium">
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/tile1.jpg">
					</a>
					<div class="post-image-slug full">
						Home Remedies
					</div>
				</div>
				<div class="post-details">
					<a href="#" class="post-title">
						<h3>8 Ways to Refresh and Personalize Your Home</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<article class="post-medium">
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/tile1.jpg">
					</a>
					<div class="post-image-slug full">
						Home Remedies
					</div>
				</div>
				<div class="post-details">
					<a href="#" class="post-title">
						<h3>8 Ways to Refresh and Personalize Your Home</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<article class="post-medium">
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/tile1.jpg">
					</a>
					<div class="post-image-slug full">
						Home Remedies
					</div>
				</div>
				<div class="post-details">
					<a href="#" class="post-title">
						<h3>8 Ways to Refresh and Personalize Your Home</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
	</section>


	<!-- sponsored post section -->
	<section class="section row relieved-sponsored-post">
		<div class="col-lg-9 col-md-8 col-xs-12">

			<article class="post-large sponsored-post-section">
				<?php echo file_get_contents("./dist/img/dot-grid-triangle.svg") ?>
				<?php echo file_get_contents("./dist/img/half-dot-grid.svg") ?>
				<div class="post-image-container">
					<span class="post-image-slug top">
						Sponsored by <img src="./dist/img/logo-homehacks.svg">
					</span>
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/sponsored1.jpg">
					</a>
				</div>
				<div class="post-details">
					<div class="post-crumb-category with-text">
						<a href="#" class="post-crumb-link">Beauty Tips</a>
					</div>
					<a href="#" class="post-title">
						<h3>Gardening Helps Mental Health: The Benefits Of Nature In Therapy</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>

		</div>
		<aside class="col-lg-3 col-md-4 col-xs-12">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="subscribe-block ad-relieved">
						<h4 class="subscribe-block-title">Stay Updated w/SBLY</h4>
						<h5 class="subscribe-block-subtitle">Get uplifting and insightful news daily.</h5>
						<div class="subscribe-block-input input-group">
							<input class="input-group-field" type="text" placeholder="enter your email address" name="subscribeBlockEmail">
							<button class="input-group-submit">Subscribe</button>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12">
					<!-- will probably need some sort of CMS logic to limit listings here -->
					<ul class="recommended-posts">
						<li class="post-listing">
							<div class="row">
								<div class="post-image-container col-xs-2">
									<a href="#{post link}" class="post-image" alt="{post title}">
										<img src="./dist/img/photos/listing1.png">
									</a>
								</div>
								<div class="post-details col-xs-10">
									<a href="#{post link}" class="post-title">
										<h3>Sponsored Post Title</h3>
									</a>
									<span class="post-crumb-datetime">July 5th 2017</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</aside>
	</section>


	<!-- SPLIT COLUMN SECTION -->
	<section class="section row">
		<div class="col-sm-6 col-xs-12">
			<article class="post-large split-column large-post-1-relieved">
				<?php echo file_get_contents("./dist/img/triple-swiggle.svg") ?>
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/sponsored1.jpg">
					</a>
				</div>
				<div class="post-details">
					<?php echo file_get_contents("./dist/img/triangle.svg") ?>
					<a href="#" class="post-title">
						<h3>Gardening Helps Mental Health: The Benefits Of Nature In Therapy</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
		<div class="col-sm-6 col-xs-12">
			<article class="post-large split-column large-post-2-relieved">
				<?php echo file_get_contents("./dist/img/circledot.svg") ?>
				<?php echo file_get_contents("./dist/img/zigzag.svg") ?>
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/sponsored1.jpg">
					</a>
				</div>
				<div class="post-details">
					<?php echo file_get_contents("./dist/img/scalene-triangle.svg") ?>
					<a href="#" class="post-title">
						<h3>Gardening Helps Mental Health: The Benefits Of Nature In Therapy</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
	</section>


	<!-- top trending -->
	<section class="section top-trending fullwidth">
		<h2 class="section-title text-orange">Section Title</h2>
		<div class="pattern-background row" 
				 style="background-image: url('./dist/img/trending-bg.jpg')">
			<div class="col-xs-12 col-md-6">
				<h3 class="trending-title">Trending Title</h3>
				<ol class="trending-posts-list">

					<li class="post-trending">
						<div class="row">
							<div class="post-image-container col-xs-4">
								<a href="#{post link}" class="post-image" alt="{post title}">
									<img src="./dist/img/photos/trending1.jpg">
								</a>
							</div>
							<div class="post-details col-xs-8">
								<a href="#" class="post-title">
									<h3>Treat bronchitis with these home remedies</h3>
								</a>
								<div class="post-author-slug">
									<img src="./dist/img/photos/author1.png" class="author-slug-image">
									<span class="author-slug-title">
										<em>by</em> John Nolan
									</span>
								</div>
							</div>
						</div>
					</li>
					<li class="post-trending">
						<div class="row">
							<div class="post-image-container col-xs-4">
								<a href="#{post link}" class="post-image" alt="{post title}">
									<img src="./dist/img/photos/trending1.jpg">
								</a>
							</div>
							<div class="post-details col-xs-8">
								<a href="#" class="post-title">
									<h3>Treat bronchitis with these home remedies</h3>
								</a>
								<div class="post-author-slug">
									<img src="./dist/img/photos/author1.png" class="author-slug-image">
									<span class="author-slug-title">
										<em>by</em> John Nolan
									</span>
								</div>
							</div>
						</div>
					</li>
					<li class="post-trending">
						<div class="row">
							<div class="post-image-container col-xs-4">
								<a href="#{post link}" class="post-image" alt="{post title}">
									<img src="./dist/img/photos/trending1.jpg">
								</a>
							</div>
							<div class="post-details col-xs-8">
								<a href="#" class="post-title">
									<h3>Treat bronchitis with these home remedies</h3>
								</a>
								<div class="post-author-slug">
									<img src="./dist/img/photos/author1.png" class="author-slug-image">
									<span class="author-slug-title">
										<em>by</em> John Nolan
									</span>
								</div>
							</div>
						</div>
					</li>

				</ol>
			</div>
			<div class="col-xs-12 col-md-6">
				<h3 class="trending-title">Trending Title</h3>
				<ol class="trending-posts-list">

					<li class="post-trending">
						<div class="row">
							<div class="post-image-container col-xs-4">
								<a href="#{post link}" class="post-image" alt="{post title}">
									<img src="./dist/img/photos/trending1.jpg">
								</a>
							</div>
							<div class="post-details col-xs-8">
								<a href="#" class="post-title">
									<h3>Treat bronchitis with these home remedies</h3>
								</a>
								<div class="post-author-slug">
									<img src="./dist/img/photos/author1.png" class="author-slug-image">
									<span class="author-slug-title">
										<em>by</em> John Nolan
									</span>
								</div>
							</div>
						</div>
					</li>
					<li class="post-trending">
						<div class="row">
							<div class="post-image-container col-xs-4">
								<a href="#{post link}" class="post-image" alt="{post title}">
									<img src="./dist/img/photos/trending1.jpg">
								</a>
							</div>
							<div class="post-details col-xs-8">
								<a href="#" class="post-title">
									<h3>Treat bronchitis with these home remedies</h3>
								</a>
								<div class="post-author-slug">
									<img src="./dist/img/photos/author1.png" class="author-slug-image">
									<span class="author-slug-title">
										<em>by</em> John Nolan
									</span>
								</div>
							</div>
						</div>
					</li>
					<li class="post-trending">
						<div class="row">
							<div class="post-image-container col-xs-4">
								<a href="#{post link}" class="post-image" alt="{post title}">
									<img src="./dist/img/photos/trending1.jpg">
								</a>
							</div>
							<div class="post-details col-xs-8">
								<a href="#" class="post-title">
									<h3>Treat bronchitis with these home remedies</h3>
								</a>
								<div class="post-author-slug">
									<img src="./dist/img/photos/author1.png" class="author-slug-image">
									<span class="author-slug-title">
										<em>by</em> John Nolan
									</span>
								</div>
							</div>
						</div>
					</li>

				</ol>
			</div>

			<button class="reset-button ghost-button-orange trending-button">Show More</button>

		</div>
		
	</section>


	<!-- SPLIT COLUMN SECTION 2 -->
	<section class="section row">
		<div class="col-sm-6 col-xs-12">
			<article class="post-large split-column large-post-3-relieved">
				<?php echo file_get_contents("./dist/img/ghost-square.svg") ?>
				<?php echo file_get_contents("./dist/img/ghost-triangle.svg") ?>
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/sponsored1.jpg">
					</a>
				</div>
				<div class="post-details">
					<a href="#" class="post-title">
						<h3>Gardening Helps Mental Health: The Benefits Of Nature In Therapy</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
		<div class="col-sm-6 col-xs-12">
			<article class="post-large split-column large-post-4-relieved">
				<?php echo file_get_contents("./dist/img/ghost-circle.svg") ?>
				<?php echo file_get_contents("./dist/img/swiggle.svg") ?>
				<?php echo file_get_contents("./dist/img/zigzag2.svg") ?>
				<div class="post-image-container">
					<a href="#{post link}" class="post-image" alt="{post title}">
						<img src="./dist/img/photos/sponsored1.jpg">
					</a>
				</div>
				<div class="post-details">
					<a href="#" class="post-title">
						<h3>Gardening Helps Mental Health: The Benefits Of Nature In Therapy</h3>
					</a>

					<div class="post-author-slug">
						<img src="./dist/img/photos/author1.png" class="author-slug-image">
						<span class="author-slug-title">
							<em>by</em> John Nolan
						</span>
					</div>

					<span class="post-crumb-datetime">July 15th, 2017</span>

				</div>
			</article>
		</div>
	</section>


	<?php echo file_get_contents("./src/modules/_inspiring_posts_section.php") ?>

	<?php echo file_get_contents("./src/modules/_footer.php") ?>

	<?php echo file_get_contents("./src/modules/_script.php") ?>
	
</body>
</html>