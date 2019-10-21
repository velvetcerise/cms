<?php 

	$post_1_titulo = 'Lorem ipsum dolor sit amet';
	$post_1_contenido = 'Mauris lobortis, turpis sit amet pulvinar henderit, elit lingula accusman lingula, ut';
	$post_2_titulo = 'Mauris lobortis, turpis sit amet pulvinar henderit';
	$post_2_contenido = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis in odit aperiam eos placeat ullam vero veniam iste aspernatur mollitia rem excepturi, minima consectetur ut sunt maxime natus, enim beatae.Adipisci ea, ex numquam dolorum blanditiis quis iure magni quasi voluptate expedita veritatis quos laborum vel molestias reprehenderit cupiditate obcaecati aliquam eos eum dignissimos consequatur! Odit accusantium suscipit quod ratione.';

	function nombre_de_funcion($param1, $param2) {
		// Código a ejecutar
	}


	// Funcíon sin parámetro
	function que_dia_es_hoy() {
		echo 'hoy es ' . date( 'l' );
	}

	// Función con parámetro
	function suma3( $num1, $num2, $num3 ) {
		// echo $num1 + $num2 + $num3;
		return $num1 + $num2 + $num3;

	}

	function incrementa( $num, $inc = 1) {
		return $num + $inc;
	}
?>

	<!-- Funciones  -->
	<!-- Pueden sacar o devolver por pantalla algo -->
	<!-- Min, devuelve un número; -->
	<h1><?php echo min(10, 2); ?></h1>

	<!-- Floor redondea números décimales -->
	<h1><?php echo floor(4/3); ?></h1>
	
	<h1><?php echo pi(); ?></h1>

	<!-- Devuelve el día de hoy -->
	<h1><?php que_dia_es_hoy(); ?></h1>

	<!-- Devuelve la función suma -->
	<h1><?php echo suma3( 10, 5, 2 ); ?></h1>

	<!-- Devuelve el incremento -->
	<h1><?php echo incrementa(10, 3); ?></h1>
	<h1><?php echo incrementa(10); ?></h1> <!-- No tiene incremento -->

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
			<h2><?php echo $post_1_titulo; ?></h2>
			<div><?php echo $post_1_contenido; ?></div>
		</div>

		<div>
			<h2><?php echo $post_1_titulo; ?></h2>
			<div><?php echo $post_1_contenido; ?></div>
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
