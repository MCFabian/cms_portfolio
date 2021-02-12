<!doctype html>

<html>
	<head>
		<?php include_once ('functions.php'); ?>

		<meta charset="utf-8">  
		<meta name="language" content="deutschland">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="shortcut icon" type="image/c-icon" sizes="500x500"  href="https://www.verwaltung.fabianr.de/intranet/img/requirements/favi.png">
		<link rel="apple-touch-icon-precomposed" sizes="500x500" href="https://www.verwaltung.fabianr.de/intranet/img/requirements/favi.png">

		<link rel="stylesheet" type="text/css" href="src/css/global.css">
		<link rel="stylesheet" type="text/css" href="src/css/page.css">
		<link rel="stylesheet" type="text/css" href="src/css/hamburger.css">

		<link rel="stylesheet" type="text/css" href="src/css/var.css">
		<link rel="stylesheet" type="text/css" href="src/css/media-queries.css">

		<link rel="stylesheet" type="text/css" href="src/css/fonts.css">

		<script src="src/js/jquery-3.5.1.min.js"></script>

	</head>
<body id="bodyme" class="slide-in-fwd-center ">
	<div id="overlay"></div>
	<div id="wrapper">
			<nav id="nav">
				<ul>
					<?php getmenu();?>
				</ul>

				<div id="quick-contact">
					<i class="icon">mail_outline</i>
					Projektanfragen und Kontakt: <a href="mailto:hello@fabianr.de">hello@fabianr.de</a>
				</div>
				<div id="inner-footer">
					<ul>
						<li>Urheberrecht Fabian Rauer <?php echo date("Y"); ?></li>
					</ul> 
				</div>
			</nav>
			<!--< NAV-HOLDER>-->
			<div id="nav-holder">
				<ul>
					<li>
						<button onclick="toggleMenu()" id="bb-btn" class="hamburger hamburger--minus toogle" type="button">
							<span class="hamburger-box">
							<span class="hamburger-inner"></span>
							</span>
						</button>
					</li>
				</ul>
			</div>


