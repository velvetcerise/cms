<?php 
	// Funciones

	function get_post_1_titulo() {
		$post_1_titulo = 'Lorem ipsum dolor sit amet';
		return $post_1_titulo;
	}

	function get_post_1_contenido() {
		$post_1_contenido = 'Mauris lobortis, turpis sit amet pulvinar henderit, elit lingula accusman lingula, ut';
		return $post_1_contenido;
	}

	function get_post_2_titulo() {
		$post_2_titulo = 'Mauris lobortis, turpis sit amet pulvinar henderit';
		return $post_2_titulo;
	}

	function get_post_2_contenido() {
		$post_2_contenido = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis in odit aperiam eos placeat ullam vero veniam iste aspernatur mollitia rem excepturi, minima consectetur ut sunt maxime natus, enim beatae.Adipisci ea, ex numquam dolorum blanditiis quis iure magni quasi voluptate expedita veritatis quos laborum vel molestias reprehenderit cupiditate obcaecati aliquam eos eum dignissimos consequatur! Odit accusantium suscipit quod ratione.';
		return $post_2_contenido;
	}

	// Tipos de datos

	// Integers
	$positivo = 10;
	$cero = 0;
	$negativo = -10;

	// Punto flotante (reales) floats, doubles
	$numero = 1.234;
	$exponente_1 = 0.1234e2; // 0.1234 * 10 ^ 2
	$exponente_2 = 1234E-3; // 1234 * 10^ - 3


	// Cadenas: Strings
	$nombre = 'Ignacio'; // Comillas Simples
	$apellido = "Cruz"; // Comillas Dobless


	// Array

	// Notación antigua
	$alimento = array( 'pera', 'manzana', 'carne');
	$colores = [ 'azul', 'verde', 'rojo']; 

	// Acceder arrays
	var_dump( $colores[0] );
	var_dump( $colores[1] );


	// Array Asociativo
	$edades	= ['Pedro' => 22, 'Ana' => 15, 'Susana' => 38 ];
	var_dump( $edades['Pedro']);
	var_dump( $edades['Susana']);

	// Añadir elementos a arrays
	$colores[] = 'morado';
	$edades['Juan'] = 45;
	
	var_dump($edades);
	var_dump($colores);


	// Valores "false"
	$cero = 0;
	$cadena_vacia = '';
	$nulo = null;
	$array_vacio = [];

	// Valores "true"
	// (bool) => Convierte a booleno
	var_dump( (bool) $positivo );
	var_dump( (bool) $negativo );
	var_dump( (bool) $edades );
	var_dump( (bool) $nombre );

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Micro CMS</title>
	<link rel="stylesheet" href="assets/style.css"></head>
<body>

<nav id="site-navigation" role="navigation" class="row row-center">
	<div class="column">
		<h1>
			<a href="index.php">Micro CMS</a>
		</h1>
		<ul class="main-menu column clearfix">
		</ul>
	</div>
</nav>

<div id="content" >
	<div class="posts">
		<div>
			<h2><?php echo get_post_1_titulo(); ?></h2>
			<div><?php echo get_post_1_contenido(); ?></div>
		</div>

		<div>
			<h2><?php echo get_post_2_titulo(); ?></h2>
			<div><?php echo get_post_2_contenido(); ?></div>
		</div>
	</div>
</div>

<footer id="footer">
	<div id="inner-footer">
		Curso de Introducción a PHP en Domestika
	</div>
</footer>
</body>
</html>
