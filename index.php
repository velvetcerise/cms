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



	// Ámbito de variables (Scope)
	function prueba() {
		$saludo = 'Hola, ¿Qué tal?';
		echo $saludo;
	}

	// Global
	$otro_saludo = 'HOLA!';
	function otra_prueba() {
		global $otro_saludo; // Llamamos variable global
		echo $otro_saludo;	// Estamos llamando a la variable, pero como es global, no se imprime
	}
	
?>


<h1><?php prueba(); ?></h1>
<h1><?php otra_prueba(); ?></h1>

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
