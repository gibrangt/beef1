<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta charset=	<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title(); ?></title>

	<!-- Definir viewport para dispositivos web móviles -->
	

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/fonts.css">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

</head>
<body>

		<header>
	<div>
		<a href="index.html">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/header-mobile.jpg" class="mobile">
		</a>
	</div>
	<div>
		<a href="index.html">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/header.jpg" class="head">
		</a>
	</div>
	<div class=" row menu_bar">
		<a href="#" class="bt_menu"><span class="icon-menu"></span>Menu</a>
		
	</div>
		<div class="container">
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav', 'menu_class' => 'fila centrar' )); ?>
			
		</div>
	</div>

<!--
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			
-->
		</header>
