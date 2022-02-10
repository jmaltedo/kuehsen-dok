<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kontakt</title>

		<link rel="apple-touch-icon" sizes="180x180" href="./src/img/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./src/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./src/img/favicons/favicon-16x16.png">
		<link rel="manifest" href="./src/img/favicons/site.webmanifest">
		<link rel="mask-icon" href="./src/img/favicons/safari-pinned-tab.svg" color="#006206">
		<link rel="shortcut icon" href="./src/img/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#00a300">
		<meta name="msapplication-config" content="./src/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
	</head>

	<body>

		<!-- NAVIGATIONSLEISTE -->

		<nav id="header-nav">

			<div id="mobile-nav">
				<div id="mobile-nav-close-button">
					<div></div>
					<div></div>
				</div>
				<ul>
					<li><a href="index.html">Startseite</a></li>
					<li><a href="historisches.html">Historisches</a></li>
					<li><a href="about.html">Über uns</a></li>
					<li class="active"><a href="kontakt.php">Kontakt</a></li>
					<li><a href="impressum.html">Impressum</a></li>
				</ul>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-6">

						<a href="index.html" class="logo-link">
							<img src="/kuehsen-dok/src/img/kuehsen-dok_logo_small.png" alt="Kühsener Wappen">
						</a>

						<ul id="desktop-nav">
							<li><a href="index.html">Startseite</a></li>
							<li><a href="historisches.html">Historisches</a></li>
							<li><a href="about.html">Über uns</a></li>
							<li class="active"><a href="kontakt.php">Kontakt</a></li>
							<li><a href="impressum.html">Impressum</a></li>
						</ul>

						<div id="mobile-nav-button">
							<div></div>
							<div></div>
							<div></div>
						</div>

					</div>
				</div>
			</div>
		</nav>

		<!-- HEADER-BANNER -->

		<header id="header-banner-klein"></header>


		<!-- KONTAKT-BEREICH -->

		<section class="kontakt-bereich">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<header class="intro-container">
							<h1>Kontakt</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</header>
					</div>
				</div>


				<form id="kontakt-formular" action="kontakt.php" method="post">
					<div class="row">
						<div class="col-3">
							<label for="vorname" class="screenreader">Vorname:</label>
							<input id="vorname" type="text" name="vorname" placeholder="Vorname">
						</div>
						<div class="col-3">
							<label for="nachname" class="screenreader">Nachname:</label>
							<input id="nachname" type="text" name="nachname" placeholder="Nachname">
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<label for="email" class="screenreader">E-Mail:</label>
							<input id="email" type="email" name="email" placeholder="E-Mail">
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<label for="nachricht" class="screenreader">Nachricht:</label>
							<textarea id="nachricht" name="nachricht" placeholder="Nachricht"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<button class="btn-typ-3" type="submit" name="absenden-button">Senden</button>
							<div id="status">Senden erfolgreich</div>
						</div>
					</div>
				</form>
			</div>
		</section>

		<?php include './src/php/cform.php' ?>

		<!-- FOOTER -->

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<span>kuehsen.info (2021)</span>
						<nav id="footer-nav">
							<a href="impressum.html">Impressum</a>
						</nav>
					</div>
				</div>
			</div>
		</footer>

	</body>
<script src="/kuehsen-dok/src/js/scripts.js" type="text/javascript"></script>
</html>
