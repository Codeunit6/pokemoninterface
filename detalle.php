<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="pre-load">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="img/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>
			<!-- Banner -->
				
                <div id="main">
						<div class="inner">
						<section id="banner">
					<header>
						<h2>Bienvenidos a los detalles<strong> <?php echo $_GET["nombre"]; ?></strong>.</h2>
					</header>
				</section>
							<h1>Detalles del pokemon: </h1>
							<h2 class="etiqueta">nombre: <?php echo $_GET["nombre"]; ?></h2>
							<h2 class="etiqueta">tipo: <?php echo $_GET["tipo"]; ?></h2>
							<br>
							<br>
							<br>
							<div style="background-image: url('img/pic13.jpg'); background-repeat: no-repeat;background-size: cover">
							<br>
							<img  class="centrar tamaño" src="<?php echo $_GET["imagen"]; ?>" alt="" />
							<br>
							</div>
							<br>
							<br>
							<div class="centrartxt tamañotxt"><b>Descripcion de <?php echo $_GET["nombre"]; ?></b></div>
							<br>
							<b>Habilidades de <?php echo $_GET["nombre"]; ?>: </b><p> <?php echo $_GET["habilidades"]; ?></p>
							<b>Vida de <?php echo $_GET["nombre"]; ?>: </b><p> <?php echo $_GET["vida"]; ?></p>
							<b>Ataque de <?php echo $_GET["nombre"]; ?>: </b><p><?php echo $_GET["ataque"]; ?></p>
							<b>Defensa de <?php echo $_GET["nombre"]; ?>: </b><p><?php echo $_GET["defensa"]; ?></p>
							<b>Velocidad de <?php echo $_GET["nombre"]; ?>: </b><p><?php echo $_GET["velocidad"]; ?></p>
                        </section>
					</div>
			</div>
			<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>
</div>
</body>
</html>
