<!DOCTYPE html>
<html lang='en'>
<head>
	<title><?php echo $title; ?></title>
	<meta charset='utf-8'>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
</head>

<body>
	<header>
		<h1>Basic Hospital</h1>
		<nav>
			<ul>
				<li><a href='/~EID/ct310/index/m2/'>Home</a></li>
				<li><a href='/~EID/ct310/index/m2/about'>About Us</a></li>
				<li><a href='/~EID/ct310/index/m2/moreinformation'>Info</a></li>
			</ul>
		</nav>
	</header>
	<div id='main' class='container'>
		<h2><?php echo $subtitle;?></h2>
		<?php echo $content; ?>
	</div>
	<footer>
		<small>&copy; Copyright <?php echo date('Y');?>, Your Name</small>
	</footer>
</body>
</html>
