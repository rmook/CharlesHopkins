
<?php  

$pageID = "Charles Hopkins, Trombone";
require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php');

?>

<!-- ************* BANNER IMAGE ************ -->

	<div class="banner large-hide">
	</div>
	
	<div class="banner-large mobile-hide">	
		<div class="left-image">
			<img src="img/C73C2723.jpg">
		</div>
		<div class="right-logo">
			<img src="img/Logos/CHLOGOS1NOstarsHORIZ.png">
			<p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>

	<div class="main-area container .grid-container">

		<!-- ************* LISTEN SECTION ************ -->

		<div class="content container grid-6">
			<a href="<?php echo BASE_URL;?>Listen"><h1>Listen</h1></a>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193055163&amp;color=c08d42&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
		</div>
		
		<!-- ************* About SECTION ************ -->

		<div class="content container grid-6">
			<a href="<?php echo BASE_URL;?>About"><h1>About</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

		<!-- ************* Watch SECTION ************ -->
		<div class="content container grid-4">
			<a href="#"><h1>Watch</h1></a>
			<iframe src="https://player.vimeo.com/video/69186856?color=8ee59c&portrait=0" width="221" height="166" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>			
		</div>

		<!-- ************* LESSONS SECTION ************ -->

		<div class="content container grid-4">
			<a href="<?php echo BASE_URL;?>Lessons"><h1>Lessons</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

		<!-- ************* NEWS SECTION ************ -->

		<div class="content container grid-4">
			<a href="<?php echo BASE_URL;?>News"><h1>News</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

	</div>
	
<?php
include(ROOT_PATH . 'inc/footer.php');
?>
