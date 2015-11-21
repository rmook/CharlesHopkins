
<?php  

$pageID = "Charles Hopkins, Trombone Lessons in Phoenix AZ";
require_once("inc/config.php");
include('inc/header.php');

?>

	<div class="main-area container .grid-container">

		<!-- ************* About SECTION ************ -->

		<div class="content container grid-12">
			<a href="<?php echo BASE_URL;?>/About"><h1>About</h1></a>
			<p>Thank you for visiting my website!  I am Phoenix-based trombonist and educator, Charles Hopkins.  Here you will find information about my background, current performing engagements, and private teaching studio.  To contact me regarding lessons or playing engagements, please send me an email or Facebook message.  Take care!  </p>		
		</div>

		<!-- ************* LISTEN SECTION ************ -->

		<div class="shade-on-small content container grid-12">
			<a href="https://soundcloud.com/charlestrombone" target="_blank"><h1>Listen<img src="img/ArrowIcon.png"/></h1></a>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/155490088&amp;color=c08d42&amp;auto_play=false&amp;hide_related=false&amp;show_comments=fals&amp;show_user=true&amp;show_reposts=false"></iframe>
		</div>
		
		<!-- ************* LESSONS SECTION ************ -->

		<div class="content container grid-12">
			<a href="<?php echo BASE_URL;?>/Lessons"><h1>Lessons</h1></a>
			<p>Lessons are available throughout the Valley and from my home in Tempe, Arizona. For further information about scheduling and fees please email me at: <a class="inline" href="mailto:charles.trombone@gmail.com">charles.trombone@gmail.com</a></p>		
		</div>

		<!-- ************* Watch SECTION ************ -->
		<div class="content mobile-hide container grid-12">
			<a href="https://vimeo.com/charlestrombone" target="_blank"><h1>Watch<img src="img/ArrowIcon.png"/></h1></a>		
			<iframe src="https://player.vimeo.com/video/142947952?color=c08d42&portrait=0" width="221" height="166" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>


		<!-- ************* NEWS SECTION ************ -->

		<div class="shade-on-small content container grid-12">
			<a href="<?php echo BASE_URL;?>/News"><h1>News</h1></a>
			<p>Come hear Charles perform with salsa band "Jaleo," every Friday night from 10:30PM till 1:00 AM, at Valley Bar in Phoenix. <a class="inline" href="http://www.valleybarphx.com/calendar/">Details here</a>.</p>
			<p>Charles to perform with the Salt River Brass Quintet this Holiday Season as a part of the "Las Noches de las Luminarias." <a class="inline" href="http://www.dbg.org/press-releases/las-noches-de-las-luminarias-0">Details here</a>.</p>
		</div>

		<!-- ************* Links SECTION ************ -->

		<div class="content mobile-hide container grid-12">
			<a href="<?php echo BASE_URL;?>/Links"><h1>Links</h1></a>
			<h2>Favorite Artists</h2>
			<p>
				<a class="feature-link" href="http://www.jayfriedman.net" target="_blank">jayfriedman.net<img src="img/ArrowIcon.png"/></a>
				Website of long-time Principal Trombone of the Chicago Symphony, Jay Friedman.  Includes informative articles written by Mr. Friedman and his contemporaries.
			<p>
			<p>
				<a class="feature-link" href="http://www.tobyoft.com" target="_blank">tobyoft.com<img src="img/ArrowIcon.png"/></a>
 				Website of the Principal Trombone of the Boston Symphony Orchestra, Toby Oft.  Here you will find audio and video recording, articles, and a blog by one of the World's premier orchestral trombonists.
 			</p>  
 			<h2>Study Materials</h2>
 			<p><a class="feature-link" href="http://www.hip-bonestore.com/15_Minute_Warm_Up_Routine_for_Trombone_p/hbm070.htm" target="_blank">The Michael Davis 15-Minute Warm-Up Routine<img src="img/ArrowIcon.png"/></a></p>
		</div>
	</div>
	
<?php
include('inc/footer.php');
?>
