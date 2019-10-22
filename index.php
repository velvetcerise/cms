<?php 

	// Configura la salida de errores por pantalla
	error_reporting( E_ALL );
	ini_set( 'display_errors', 1 );

	// Array con array disociativo
	$all_posts = [
		[
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis. Nam ut arcu tellus. Morbi sit amet elit lacinia, tincidunt leo a, posuere mi. Mauris nec odio at quam lacinia consequat. Fusce mattis orci ex, eget accumsan neque vehicula et. Vivamus consectetur tempor lacus, in tincidunt massa rutrum ut. Pellentesque augue felis, iaculis eu interdum et, semper eu purus. Vestibulum a viverra justo.',
			'published_on' => '2018-01-11 10:15:00',
		],
		[
			'id' => 2,
			'title' => 'Nunc eget enim vulputate',
			'excerpt' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium',
			'content' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium, pharetra nulla. Proin mattis aliquam sem. Morbi vel mi ac magna consequat tempus vitae eget diam. Aliquam ac sapien a tortor rutrum faucibus nec nec urna. Ut et nisl magna. Vivamus elit risus, rhoncus vitae elit suscipit, porta pulvinar justo. Aliquam sodales urna eu scelerisque ultrices. Fusce et neque id risus gravida vestibulum a et urna. Curabitur aliquam accumsan leo, pharetra tempus velit condimentum et. Donec dapibus faucibus lorem a tincidunt. Donec ultricies id metus et aliquam. Vestibulum dapibus magna nec elit ultrices, ornare pretium nisi dictum.',
			'published_on' => '2018-01-11 10:15:00',
		],
	];

	echo '<hr/>';

	// While
	$contador = 1;

	// Ejecutalo Mientras contador sea menor o igual a 10
	while ($contador <= 10) {
		echo $contador; 
		echo '<br/>';
		$contador = $contador + 1;  // Al $contador suma 1 hasta que sea igual o menor a diez.
	}


	// Do While
	$contador = 10;
	do {
		echo "Mi contador es $contador";
		echo '<br/>';
		$contador = $contador + 1;
	} while ( $contador <= 20 );

	// For
	$longitud_posts = count( $all_posts ); // count saca el no. de elementos que tiene un array
		for( $i = 0; $i < $longitud_posts; $i++) {
		echo $all_posts [ $i ]['title'];
		echo '<br/>';
	}

	// Foreach
	foreach( $all_posts as $post ) { // Para cada uno de los posts que hay en este array, guardalo en uno de los posts
		echo $post['title']; // Para cada variable de $post saca en pantalla el título de post
		echo '<br/>';
	}

	foreach( $all_posts as $post ) { 
		echo '<strong>POST</strong>';
		echo '<br/>';
		
		foreach( $post as $key => $value ) { // Para cada campo dentro de $post ($post es array y lo podemos recorrer) y de título contenido, guardáme la $key, 
			echo "- La clave $key tiene valor $value";		
			echo '<br/>';	
		}
 	}
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
		<article class="post">
			<header>
				<h2 class="post-title"><?php echo $all_posts[0]['title'];?></h2>
			</header>

			<div class="post-content">
				<?php echo $all_posts[0]['content'];?>
			</div>

			<footer></footer>
		</article>

		<article class="post">
			<header>
				<h2 class="post-title"><?php echo $all_posts[1]['title'];?></h2>
			</header>

			<div class="post-conten">
				<?php echo $all_posts[1]['content'];?>
			</div>

			<footer></footer>
		</article>
	</div>
</div>

<footer id="footer">
	<div id="inner-footer">
		Curso de Introducción a PHP en Domestika
	</div>
</footer>
</body>
</html>
