
<html>
<head>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $pageID; ?></title>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One|Merriweather:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo BASE_URL;?>/stylesheets/normalize.css" rel="stylesheet" type="text/css" >
	<link href="<?php echo BASE_URL;?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
</head>

<body>

<!-- 	*********** NAVBAR *************  -->

	<nav role="navigation">
		<a href="#" id="navicon"></a>
		<div class="logo">
			<a href="<?php echo BASE_URL;?>">Charles Hopkins</a>
		</div>
		<ul id="menu">
		 	<li><a href="<?php echo BASE_URL;?>About/" class = "<?php if ($pageID == "About") {echo "selected";}?>">About</a></li>
		 	<li><a href="#">News</a></li>
		 	<li><a href="#">Lessons</a></li>
		 	<li><a href="#">Listen</a></li>
		 	<li><a href="#">Watch</a></li>
		 	<li><a href="#">Links</a></li>
		 	<li><a href="#">Research</a></li>
	     </ul>
	</nav>

	<!-- Filler for space under nav -->

	<div class="filler"></div>

</body>
</html>
