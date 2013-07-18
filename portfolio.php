<?php 
	$page = 'portfolio';
	$title = 'Portfolio';
	
	include 'header.php'; 
?>

		<div id="page">
			<div class="content portfolio">
				<ul id="portfolio">
					<li data-url="portfolio-items/engage.php">
						<img src="assets/portfolio/tiles/phoenix.jpg" />
						<div class="overlay"></div>
						<div class="text">UI/UX</div>
					</li>
					<li data-url="portfolio-items/event-management.php">
						<img src="assets/portfolio/tiles/telos.jpg" />
						<div class="overlay"></div>
						<div class="text">UI/UX</div>
					</li>
					<li data-url="portfolio-items/aptitude.php">
						<img src="assets/portfolio/tiles/aptitude.jpg" />
						<div class="overlay"></div>
						<div class="text">UI/UX</div>
					</li>
					<li data-url="portfolio-items/tellus-360.php">
						<img src="assets/portfolio/tiles/tellus360.jpg" />
						<div class="overlay"></div>
						<div class="text">Design &amp; Development</div>
					</li>
					<li data-url="portfolio-items/assorted.php">
						<img src="assets/portfolio/tiles/assorted.jpg" />
						<div class="overlay"></div>
						<div class="text">Design</div>
					</li>
					<li data-url="portfolio-items/ascension.php">
						<img src="assets/portfolio/tiles/ascension.jpg" />
						<div class="overlay"></div>
						<div class="text">Design</div>
					</li>
					<li data-url="portfolio-items/xpect-solutions.php">
						<img src="assets/portfolio/tiles/xpect.jpg" />
						<div class="overlay"></div>
						<div class="text">Design</div>
					</li>
					<li data-url="portfolio-items/cstraight.php">
						<img src="assets/portfolio/tiles/cstraight.jpg" />
						<div class="overlay"></div>
						<div class="text">Design &amp; Development</div>
					</li>
					<li data-url="portfolio-items/wfw.php">
						<img src="assets/portfolio/tiles/wfw.jpg" />
						<div class="overlay"></div>
						<div class="text">Design &amp; Development</div>
					</li>
				</ul>
				
				<div class="codefolio">
					<h3>Want to check out my code?</h3>
					<p>Head on over to <a href="https://github.com/mattwalkley/mattwalkley" target="_blank">Github</a> and browse this site's codebase.</p>
				</div><!-- end .codefolio -->
				
			</div><!-- end .content -->
		</div><!-- end #page -->

<?php include 'footer.php'; ?>