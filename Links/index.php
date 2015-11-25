<?php

$pageID = 'Links';
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/header.php');

?>


<!-- ************* Links SECTION ************ -->
		
		<div class="content container grid-12">
			<a href="<?php echo BASE_URL;?>/Links"><h1>Links</h1></a>
			<h2>Favorite Artists</h2>
			<p>
				<a class="feature-link" href="http://www.jayfriedman.net" target="_blank">jayfriedman.net<img src="<?php echo BASE_URL;?>/img/ArrowIcon.png"/></a>
				Website of long-time Principal Trombone of the Chicago Symphony, Jay Friedman.  Includes informative articles written by Mr. Friedman and his contemporaries.
			<p>
			<p>
				<a class="feature-link" href="http://www.tobyoft.com" target="_blank">tobyoft.com<img src="<?php echo BASE_URL;?>/img/ArrowIcon.png"/></a>
 				Website of the Principal Trombone of the Boston Symphony Orchestra, Toby Oft.  Here you will find audio and video recording, articles, and a blog by one of the World's premier orchestral trombonists.
 			</p>  
 			<h2>Study Materials</h2>
 			<p><a class="feature-link" href="http://www.hip-bonestore.com/15_Minute_Warm_Up_Routine_for_Trombone_p/hbm070.htm" target="_blank">The Michael Davis 15-Minute Warm-Up Routine<img src="<?php echo BASE_URL;?>/img/ArrowIcon.png"/></a></p>
		</div>

<?php
include(ROOT_PATH . 'inc/footer.php');
?>