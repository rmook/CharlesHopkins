<?php

$pageID = 'About';
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/header.php');

?>

<!-- ************* BANNER IMAGE ************ -->

	<div class="banner large-hide">
	</div>
	
	<div class="banner-large mobile-hide">	
		<div class="left-image">
			<img src="<?php echo BASE_URL ?>img/C73C2723.jpg">
		</div>
		<div class="right-logo">
			<img src="<?php echo BASE_URL ?>img/Logos/CHLOGOS1NOstarsHORIZ.png">
			<p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>

<!-- ************* About SECTION ************ -->
		
	<div class="main-area container .grid-container">

		<div class="about">
			<h1><a href="<?php echo BASE_URL;?>About">About</a></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>
	</div>

<?php
include(ROOT_PATH . 'inc/footer.php');
?>