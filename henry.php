<!DOCTYPE html>
<html lang="es">
<head>		<!--se carga antes que la página en sí misma-->
	<meta charset="utf-8"/>
	<meta name="description" content="uso básico de html5"/>
	<link rel="shorcut icon" type="image/x-icon" href="img/stock_task.ico">
	<title>Web básica HTML5</title>
	<link rel="stylesheet" type="text/css" href="css/principal.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="index.php">home</a></li>
			<li><a href="marcial.php">marcial</a></li>
			<li><a href="javi.php">alejandra</a></li>
			<li><a href="henry.php">henry</a></li>
		</ul>
	</header>
	<section id="contenido">
		<h1>usando html5 + css</h1>
		<img src="img/henry.jpg" alt="debe ir la foto de henry">
		<p>Henry Sepulveda Navarro
		<br>Fecha nac: 01 de julio
		<br>Estudiante de Ingenieria Civil en Computacion mencion Informatica
		</p>
		<a href="http://www.github.com">código en github</a>
	</section>
	<footer>
		<?php
		$frases = array(
		'el fin justifica los medios, nicolas maquiavelo',
		'el cuerpo es la prisión del alma inmortal, platon',
		'cada día sabemos más y entendemos menos, albert einstein'
		);

		// Elegimos un valor entre 0 y el total
		$i=rand(0,count($frases)-1);

		// Mostramos
		echo $frases[$i];
		?> 
	</footer>
</body>
</html>
