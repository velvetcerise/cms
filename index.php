<?php 
	// Funciones

	// Para debug existen dos funciones: 
	error_reporting( E_ALL ); // Error reporting (repórtame todos los errores)
	ini_set('display_errors', 1); // Cambia la configuración en tiempo de ejecución en php, ('nombre de configuración a cambiar', 1); 1 = true;


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


	// Tipo de errores 
	// 1.- Error fatal (Cuando se llama a una función que NO existe, undefined)
		// my_function();

	// 2.- Warning (A partir de php7 no existen warnings)
	// 4.- Notice (Variable que NO existe, no es un error grave)
		echo $my_var;

	// 3.- Syntaxis Error (Sale a nivel global, error 500) --> C. LOCKS, php_error.php



	// Dump 
		$my_var = 'Ignacio';
		var_dump( $my_var );

		$my_lista = [ 'uno', 'dos' ];
		var_dump( $my_lista );

	// Instalar XDEBUG
?>
<!-- Debug -->
<h1><?php echo $my_var;?></h1>

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
