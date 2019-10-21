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
