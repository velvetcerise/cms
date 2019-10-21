<?php 

	// variables
	// Se pueden sobrescribir
	$nombre = 'Ignacio';
	$nombre = 'Manuel'; // Se sobrescribe
	$_edad = 'Desconocida';

?><h1><?php echo $nombre ?></h1><?php 
?><h1><?php echo $Nombre // No se imprime ?></h1><?php

	// Constantes
	// ('nombre de la constante' , 'valor de la constante');
	// Se utilizan siempre en mayúsculas para nombrarlas
	// Las constantes NO se pueden sobrescribir
	define('TIPO', 'Coche');
	define('MARCA', 'Ford');

	// define('MARCA', 'Ford'); NO
	?><h1><?php echo MARCA; ?></h1> <?php

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

</div>

<footer id="footer">
	<div id="inner-footer">
		Curso de Introducción a PHP en Domestika
	</div>
</footer>
</body>
</html>
