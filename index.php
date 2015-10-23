
<?php  

$pageID = "Charles Hopkins, Trombone";
require_once("inc/config.php");
include(ROOT_PATH . '/inc/header.php');

?>

<!-- ************* BANNER IMAGE ************ -->

	<div class="banner large-hide">
	</div>
	
	<div class="banner-large mobile-hide">	
		<div class="left-image">
			<img src="img/C73C2723.jpg">
		</div>
		<div class="right-quote">
			<p class="banner-text">"He has a very healthy approach to daily routines and preaches a very important message of maintaining consistency as both a person and as a player."</p>
			<p class="citation">-Former Student</p>
		</div>
	</div>

	<div class="main-area container .grid-container">

		<!-- ************* LISTEN SECTION ************ -->

		<div class="content container grid-6">
			<a href="https://soundcloud.com/charlestrombone"><h1>Listen<img src="<?php echo BASE_URL;?>img/ArrowIcon.png"/></h1></a>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/155490088&amp;color=c08d42&amp;auto_play=false&amp;hide_related=false&amp;show_comments=fals&amp;show_user=true&amp;show_reposts=false"></iframe>
		</div>
		
		<!-- ************* About SECTION ************ -->

		<div class="content container grid-6">
			<a href="<?php echo BASE_URL;?>/About"><h1>About</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

		<!-- ************* Watch SECTION ************ -->
		<div class="content mobile-hide container grid-4">
			<a href="https://vimeo.com/charlestrombone"><h1>Watch<img src="<?php echo BASE_URL;?>img/ArrowIcon.png"/></h1></a>		
			<iframe src="https://player.vimeo.com/video/142947952?color=c08d42&portrait=0" width="221" height="166" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>

		<!-- ************* LESSONS SECTION ************ -->

		<div class="content container grid-4">
			<a href="<?php echo BASE_URL;?>/Lessons"><h1>Lessons</h1></a>
			<p>Here is some information about Lessons</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

		<!-- ************* NEWS SECTION ************ -->

		<div class="content container grid-4">
			<a href="<?php echo BASE_URL;?>/News"><h1>News</h1></a>
			<p>11/11/15</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

		<!-- ************* Links SECTION ************ -->

		<div class="content mobile-hide container grid-6">
			<a href="<?php echo BASE_URL;?>/Links"><h1>Links</h1></a>
			<p>This is a <a>Link</a></p>
			<p>This is another <a>Link</a></p>
		</div>
		
				<!-- ************* Reserach SECTION ************ -->

		<div class="content mobile-hide container grid-6">
			<a href="<?php echo BASE_URL;?>/Research"><h1>Research</h1></a>
			<p>Here Is some Research!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>
		
	</div>
	
<?php
include(ROOT_PATH . 'inc/footer.php');
?>
