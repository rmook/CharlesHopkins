
<html>
<head>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Dr. Charles Hopkins is a freelance classical and jazz trombone performer and private teacher/educator in Phoenix, AZ." />
	<title><?php echo $pageID; ?></title>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One|Merriweather:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo BASE_URL;?>/stylesheets/normalize.css" rel="stylesheet" type="text/css" >
	<link href="<?php echo BASE_URL;?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo BASE_URL;?>/stylesheets/grid.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
</head>

<body>

<!-- 	*********** NAVBAR *************  -->

	<nav role="navigation">
		<a href="#" id="navicon" class="large-hide"></a>
		<div class="logo">
			<a href="<?php echo BASE_URL;?>">Charles Hopkins</a>
		</div>
		<ul id="menu">
		 	<li><a href="<?php echo BASE_URL;?>About/" class = "<?php if ($pageID == "About") {echo "selected";}?>">About</a></li>
		 	<li><a href="#">Listen</a></li>
		 	<li><a href="<?php echo BASE_URL;?>Lessons/" class = "<?php if ($pageID == "Lessons") {echo "selected";}?>">Lessons</a></li>
		 	<li><a href="#">Watch</a></li>
		 	<li><a href="<?php echo BASE_URL;?>News/" class = "<?php if ($pageID == "News") {echo "selected";}?>">News</a></li>
		 	<li><a href="<?php echo BASE_URL;?>Links/" class = "<?php if ($pageID == "Links") {echo "selected";}?>">Links</a></li>
		</ul>
	</nav>

	<!-- Filler for space under nav -->

	<div class="filler"></div>

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
