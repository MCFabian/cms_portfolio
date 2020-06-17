<!doctype html>

<html>
	<head>
		<!-- Seitenname hier -->

		<?php include ('functions.php'); ?>

		<title</title>

		<!--<METADATA Gerneral Settings>-->
		<meta charset="utf-8">  
		<meta name="language" content="deutschland">

		<!--<METADATA Tech Settings>-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!--< Favicon>-->
		<link rel="shortcut icon" type="image/c-icon" sizes="500x500"  href="https://www.verwaltung.fabianr.de/intranet/img/requirements/favi.png">
		<link rel="apple-touch-icon-precomposed" sizes="500x500" href="https://www.verwaltung.fabianr.de/intranet/img/requirements/favi.png">


		<!--< CSS Stylesheets>-->
		<link rel="stylesheet" type="text/css" href="src/css/global.css">
		<link rel="stylesheet" type="text/css" href="src/css/page.css">
		<link rel="stylesheet" type="text/css" href="src/css/projects.css">
		<link rel="stylesheet" type="text/css" href="src/css/hamburger.css">


		<!--< Webfonts>-->
<!-- 		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700&display=swap" rel="stylesheet"> -->
<!-- 		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

		<!--< Offlinefonts>-->
		<link href="https://verwaltung.fabianr.de/Fontspace/css/fonts.css" rel="stylesheet"> 



		<!--< Webfonts>-->
		<script language="javascript" type="text/javascript" src="src/js/bb.js"></script>
<!-- 		<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet"> -->
<!-- 		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 --><!-- 		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet"> -->


		<!-- Set Viewport-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	</head>
<body class="slide-in-fwd-center">
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
						<button onclick="toggleMenu()" id="bb-btn" class="hamburger hamburger--minus" type="button">
							<span class="hamburger-box">
							<span class="hamburger-inner"></span>
							</span>
						</button>
					</li>
				</ul>
			</div>
			<div id="overlay"></div>
			<!--< Cookie Banner >-->

