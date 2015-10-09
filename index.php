
<?php  

$pageID = "Charles Hopkins, Trombone";
require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php');

?>

<!-- ************* BANNER IMAGE ************ -->

	<div class="banner">
		<img class="mobile-hide" src="img/Logos/CHLOGOS1NOstarsHORIZ.png">
		<p class="mobile-hide">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>

	<div class="main-area container">

		<!-- ************* About SECTION ************ -->

		<div class="content container">
			<a href="<?php echo BASE_URL;?>About"><h1>About</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

		<!-- ************* LISTEN SECTION ************ -->

		<div class="content container">
			<a href="<?php echo BASE_URL;?>Listen"><h1>Listen</h1></a>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193055163&amp;color=c08d42&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
		</div>

		<!-- ************* LESSONS SECTION ************ -->

		<div class="content container">
			<a href="<?php echo BASE_URL;?>Lessons"><h1>Lessons</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

		<!-- ************* NEWS SECTION ************ -->

		<div class="content container">
			<a href="<?php echo BASE_URL;?>News"><h1>News</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

	</div>
	
<?php
include(ROOT_PATH . 'inc/footer.php');
?>