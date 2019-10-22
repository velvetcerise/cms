<?php 

	// Configura la salida de errores por pantalla
	error_reporting( E_ALL );
	ini_set( 'display_errors', 1 );


	// Función para traducir fecha
	setlocale( LC_TIME, 'es', 'spa', 'es_ES' ); // LC_TIME para traducción de fechas, segundo parámetro => Idioma, 2 param Es según ISO 639.2 && sistema iOS

	// Zona horaria servidor 
	date_default_timezone_set('America/Los_Angeles');

	
	// Array con array disociativo
	$all_posts = [
		[
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis. Nam ut arcu tellus. Morbi sit amet elit lacinia, tincidunt leo a, posuere mi. Mauris nec odio at quam lacinia consequat. Fusce mattis orci ex, eget accumsan neque vehicula et. Vivamus consectetur tempor lacus, in tincidunt massa rutrum ut. Pellentesque augue felis, iaculis eu interdum et, semper eu purus. Vestibulum a viverra justo.',
			'published_on' => '2018-02-17 10:15:00',
		],
		[
			'id' => 2,
			'title' => 'Nunc eget enim vulputate',
			'excerpt' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium',
			'content' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium, pharetra nulla. Proin mattis aliquam sem. Morbi vel mi ac magna consequat tempus vitae eget diam. Aliquam ac sapien a tortor rutrum faucibus nec nec urna. Ut et nisl magna. Vivamus elit risus, rhoncus vitae elit suscipit, porta pulvinar justo. Aliquam sodales urna eu scelerisque ultrices. Fusce et neque id risus gravida vestibulum a et urna. Curabitur aliquam accumsan leo, pharetra tempus velit condimentum et. Donec dapibus faucibus lorem a tincidunt. Donec ultricies id metus et aliquam. Vestibulum dapibus magna nec elit ultrices, ornare pretium nisi dictum.',
			'published_on' => '2018-01-18 10:15:00',
		],
	];


	// If
	$x = 10;
	if ( $x > 5 ) {
		var_dump('$x es mayor que 5');
	}
		
	if( $x > 15 ) {
		var_dump( '$x es mayor que 15' );
	}

	// If else
	if( $x > 15 ) {
		var_dump( '$x es mayor que 15' );
	}
	else {
		var_dump('$x no es mayor que 15');
	}

	$x = true;
	$y = 1;

	if( $x && $y ) {
		var_dump( '$x && $y se cumple' );
	}

	if( $x === true && $y == 1 ) {
		var_dump( '$x === true && $y == 1 se cumple' );
	}

	$y = 'Hola'; 

	if( $x || $y === 'Hola' ) {
		var_dump( '$x || $y === \'Hola\' se cumple' );
	}

	// if, else if, else
	$x = 5;

	if( $x > 15 ) {
		var_dump( '$x es mayor que 15' );
	}
	elseif ( $x > 10 ) {
		var_dump( '$x es mayor que 10' );
	}
	else {
		var_dump( '$x es menor o igual a 10' );
	}


	// Switch.. Case
	$x = 'Lucia';

	switch ( $x ) {
		case 'Ignacio': {
			var_dump( 'El nombre es Ignacio' );
			break;
		}

		case 'Lucía' : {
			var_dump( 'El nombre es Lucía' );
			break;
		}

		default : {
			var_dump( 'No se conoce el nombre' );
			break;
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
		<?php foreach ( $all_posts as $post ) : ?> <!-- Aquí empieza foreach --> 
			<article class="post">
				<header>
					<h2 class="post-title"><?php echo $post['title'];?></h2>
				</header>

				<div class="post-content">
					<?php echo $post['content'];?>
				</div>

				<footer>
					<span class="post-date">
						Publicada en:
						<?php echo strftime( '%d %b %Y', strtotime ( $post['published_on'] ) ); ?>
					</span>
				</footer>
			</article>
		<?php endforeach; ?> <!-- Aquí acaba foreach -->
	</div>
</div>

<footer id="footer">
	<div id="inner-footer">
		Curso de Introducción a PHP en Domestika
	</div>
</footer>
</body>
</html>
