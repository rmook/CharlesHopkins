<?php

$pageID = 'Links';
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
		
		<div class="content container grid-12">
			<a href="<?php echo BASE_URL;?>About"><h1>Links</h1></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
		</div>

<?php
include(ROOT_PATH . 'inc/footer.php');
?>