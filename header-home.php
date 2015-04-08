<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
 			global $page, $paged; 
 			wp_title( '|', true, 'right' ); 
 			bloginfo( 'name' ); 
 			$site_description = get_bloginfo( 'description', 'display' ); 
 				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
 				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
 		?>
 	</title>
 	<meta name="description" content="<?php bloginfo('description' ); ?>">

 	<link rel="apple-touch-icon" href="<?php bloginfo('template_url' ); ?>/library/img/apple-touch-icon.png">
 	<link rel="icon" type="image/png" href="<?php bloginfo('template_url' ); ?>/library/img/favicon.png">

 	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- css  indispensables -->
	
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/skeleton.css">
	<!--/ css indispensables -->

	<!-- css adicionales -->

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/owl-carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/owl-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/least.min.css">
	
	<!--/ css adicionales -->

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">

	<?php wp_head(); ?>

</head>
<body>

	<header>
		<div class="container">
			<a id="logo-header" class="three columns offset-by-one" href="<?php echo home_url('/'); ?>"><img width="218" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
		</div>
		<div class="container right btn-cont-hedr">
			<a class="bottom-serv" href="#">CONTACTO</a>
		</div>
	</header>

		<ul id="menu-header2" class="center">
			<li><a href="<?php echo home_url('/') ?>">INICIO</a></li>
			<li><a href="<?php echo home_url('/eventos') ?>">EVENTOS</a>
				<ul>
					<li><a href="<?php echo home_url('/eventos') ?>">EMPRESARIALES</a></li>
					<li><a href="<?php echo home_url('/alquiler-de-equipos') ?>">ALQUILER DE EQUIPOS</a></li>
					<li><a href="<?php echo home_url('/eventos-sociales-y-recreativos') ?>">SOCIALES Y RECREATIVOS</a></li>
				</ul>
			</li>
			<li><a href="<?php echo home_url('/catering') ?>">CATERING</a></li>
			<li><a href="<?php echo home_url('/btl-agencia') ?>">BTL / AGENCIA</a></li>
			<li><a href="<?php echo home_url('/proyectos') ?>">PROYECTOS</a></li>
		</ul>
