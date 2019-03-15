<!DOCTYPE html>
<html lang='en'>

<head>
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('m2.css'); ?>
	<meta charset='utf-8'>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	
</head>

<body>
	<header>
		<h1>KJMS Information Systems</h1>
    <div class="topnav">
        <ul>
            <a href='/~mnenriq/ct310/m2/'>Home</a>
            <a href='<?php echo Uri::create('index.php/m2/about'); ?>'>About Us</a>
            <a href='<?php echo Uri::create('index.php/m2/moreinformation'); ?>'>Info</a>
            <a href='<?php echo Uri::create('index.php/m2/vbp_modeling'); ?>'>VBP Modeling</a>
        </ul>
    </div>
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
