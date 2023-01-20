<?php
require_once 'interface.php';
include_once 'pokemon.php';
?>
<html>
	<head>
		<title>Helios by HTML5 UP</title>
        <link rel="stylesheet" href="assets/css/mains.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscripts.css" /></noscript>
		<meta charset="utf-8" />
    </head>

    <body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="#logo" id="logo">Pokemones</a></h1>
								<hr />
								<p>Programado por Fernando BMG</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Start</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="pokedex.php">Inicio</a></li>
								<li>
									<a href="#reel">Pokemones</a>
								</li>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Bienvenidos a los <strong>Pokemones con clases php</strong>.</h2>
					</header>
				</section>
                <section class='carousel' id='reel'> <div class='reel'>
<?php
$pokemon1 = new PokemonElectrico('Pikachu', 100.23, 100.285, 100.258, 100.36, "img/pikachu.png");
$pokemon1->mostrarPokemon();
$pokemon1->ataqueEspecial();
$pokemon1->debilidadPokemon();
echo "</article>";
$pokemon2 = new PokemonAgua('Squirtle', 100.23, 100.285, 100.258, 100.36, "img/squirtle.png");
$pokemon2->mostrarPokemon();
$pokemon2->ataqueEspecial();
$pokemon2->debilidadPokemon();
echo "</article>";
$pokemon3 = new PokemonFuego('Charmander', 100.23, 100.285, 100.258, 100.36, "img/Charmander.png");
$pokemon3->mostrarPokemon();
$pokemon3->ataqueEspecial();
$pokemon3->debilidadPokemon();
echo "</article>";
$pokemon4 = new PokemonPlanta('Bulbasaur', 100.23, 100.285, 100.258, 100.36, "img/bulbasaur.png");
$pokemon4->mostrarPokemon();
$pokemon4->ataqueEspecial();
$pokemon4->debilidadPokemon();
echo "</article>";
$pokemon5 = new PokemonNormal('Pidgey', 100.23, 100.285, 100.258, 100.36, "img/Pidgey.png");
$pokemon5->mostrarPokemon();
$pokemon5->ataqueEspecial();
$pokemon5->debilidadPokemon();
echo "</article>";
$pokemon6 = new PokemonVolador('Pidgeotto', 100.23, 100.285, 100.258, 100.36, "img/pidgeotto.png");
$pokemon6->mostrarPokemon();
$pokemon6->ataqueEspecial();
$pokemon6->debilidadPokemon();
echo "</article>";
$pokemon7 = new PokemonVeneno('Ekans', 100.23, 100.285, 100.258, 100.36, "img/ekans.png");
$pokemon7->mostrarPokemon();
$pokemon7->ataqueEspecial();
$pokemon7->debilidadPokemon();
echo "</article>";
$pokemon8 = new PokemonTierra('Diglett', 100.23, 100.285, 100.258, 100.36, "img/diglet.png");
$pokemon8->mostrarPokemon();
$pokemon8->ataqueEspecial();
$pokemon8->debilidadPokemon();
echo "</article>";
$pokeon9 = new PokemonPsiquico('Abra', 100.23, 100.285, 100.258, 100.36, "img/abra.png");
$pokeon9->mostrarPokemon();
$pokeon9->ataqueEspecial();
$pokeon9->debilidadPokemon();
echo "</article>";
$pokemon10 = new PokemonFantasma('Gastly', 100.23, 100.285, 100.258, 100.36, "img/gastly.png");
$pokemon10->mostrarPokemon();
$pokemon10->ataqueEspecial();
$pokemon10->debilidadPokemon();
echo "</article>";
$pokemon11 = new PokemonDragon('Dratini', 100.23, 100.285, 100.258, 100.36, "img/dratini.png");
$pokemon11->mostrarPokemon();
$pokemon11->ataqueEspecial();
$pokemon11->debilidadPokemon();
echo "</article>";
$pokemon12 = new PokemonHielo('Snorlax', 100.23, 100.285, 100.258, 100.36, "img/snorlax.png");
$pokemon12->mostrarPokemon();
$pokemon12->ataqueEspecial();
$pokemon12->debilidadPokemon();
echo "</article>";
$pokemon13 = new PokemonLucha('Machop', 100.23, 100.285, 100.258, 100.36, "img/machop.png");
$pokemon13->mostrarPokemon();
$pokemon13->ataqueEspecial();
$pokemon13->debilidadPokemon();
echo "</article>";
$pokemon14 = new PokemonRoca('Geodude', 100.23, 100.285, 100.258, 100.36, "img/geodude.png");
$pokemon14->mostrarPokemon();
$pokemon14->ataqueEspecial();
$pokemon14->debilidadPokemon();
echo "</article>";
$pokemon15 = new PokemonBicho('Caterpie', 100.23, 100.285, 100.258, 100.36, "img/caterpie.png");
$pokemon15->mostrarPokemon();
$pokemon15->ataqueEspecial();
$pokemon15->debilidadPokemon();
echo "</article>";
$pokemon16 = new PokemonAcero('Magnemite', 100.23, 100.285, 100.258, 100.36, "img/magnemite.png");
$pokemon16->mostrarPokemon();
$pokemon16->ataqueEspecial();
$pokemon16->debilidadPokemon();
echo "</article>";
$pokemon17 = new PokemonHada('Jigglypuff', 100.23, 100.285, 100.258, 100.36, "img/jigglypuff.png");
$pokemon17->mostrarPokemon();
$pokemon17->ataqueEspecial();
$pokemon17->debilidadPokemon();
echo "</article>";
$pokemon18 = new PokemonSiniestro('Gengar', 100.23, 100.285, 100.258, 100.36, "img/gengar.png");
$pokemon18->mostrarPokemon();
$pokemon18->ataqueEspecial();
$pokemon18->debilidadPokemon();
echo "</article>";
?>
</section>
</div>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>