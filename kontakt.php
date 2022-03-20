<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kontakt</title>

		<link rel="manifest" href="/kuehsen-dok/manifest.webmanifest">

		<link rel="apple-touch-icon" sizes="180x180" href="/kuehsen-dok/src/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/kuehsen-dok/src/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/kuehsen-dok/src/favicons/favicon-16x16.png">
		<link rel="mask-icon" href="/kuehsen-dok/src/favicons/safari-pinned-tab.svg" color="#3d3f45">
		<link rel="shortcut icon" href="/kuehsen-dok/src/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#a62c21">
		<meta name="msapplication-config" content="/kuehsen-dok/src/favicons/browserconfig.xml">
		<meta name="theme-color" content="#3d3f45">

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
			<section>
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="trennstrich_w">
								<p>Bilder und Texte werden mit der freundlichen Genehmigung von Maren Häfele (geb. Rickert), der Chefredaktion der Lübecker Nachrichten und der Stiftung Schleswig-Holsteinische Landesmuseen Schloss Gottorf oder in der Urheberschaft der Autoren dieser Seite veröffentlicht.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="tag_pos-a" class="col-3">
							<span>kuehsen-dok.de (2022)</span>
						</div>
						<div class="col-3">
							<ul id="footer-nav">
								<li><a href="/kuehsen-dok/kontakt.html">Kontakt</a></li>
								<li><a href="/kuehsen-dok/impressum.html">Impressum</a></li>
								<li><a href="/kuehsen-dok/datenschutz.html">Datenschutz</a></li>
							</ul>
						</div>
						<div id="tag_pos-b" class="col-3">
							<span>kuehsen-dok.de (2022)</span>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div id="kw_background">
								<div id="stecknitz">
									<div id="se1"></div>
									<div id="se2">
										<div id="se2e1">
											<div id="se2e1k1"></div>
											<div id="se2e1k2"></div>
										</div>
										<div id="se2e2">
											<div id="se2e2k1"></div>
											<div id="se2e2k2"></div>
										</div>
										<div id="se2e3">
											<div id="se2e3k1"></div>
											<div id="se2e3k2"></div>
										</div>
									</div>
								</div>
								<div id="grenz">
									<div id="ge1"></div>
									<div id="ge2"></div>
									<div id="ge3">
										<div id="ge3v"></div>
									</div>
								</div>
							</div>
							<div id="bauernhaus">
								<div id="bhe1"></div>
								<div id="bhe2"></div>
								<div id="bhe3"></div>
								<div id="bhe4"></div>
								<div id="bhe5"></div>
								<div id="bhe6"></div>
							</div>
							<div id="wappenkreis">
								<div id="wke1"></div>
								<div id="wke2"></div>
								<div id="wke3"></div>
								<div id="wke4"></div>
								<div id="wke5"></div>
								<div id="wke6"></div>
								<div id="wke7"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>

	</body>
<script src="/kuehsen-dok/src/js/scripts.js" type="text/javascript"></script>
</html>
